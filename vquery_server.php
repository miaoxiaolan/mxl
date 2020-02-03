<?php
/**
 * Created by miaoxiaolan.
 * User: xiaoxing
 * Date: 2020/1/5 0005
 * Time: 下午 8:27
 */
header("Content-type:application/json");

header('Access-Control-Allow-Origin:*');
require_once "DBHelper.php";
$con=new  DBHelper();


// 每页显示条数

$pageLine = 30;


// 计算总记录数
$ZongPage= $con->getAll('SELECT * FROM  catvideo  ORDER BY  v_id DESC');


// 计算总页数

$sum = count($ZongPage);
$pageCount = ceil($sum / $pageLine);


// 定义页码变量

@$tmp = $_GET['page'];
//$tmp=1;
// 计算分页起始值

$num = ($tmp - 1) * $pageLine;

// 查询语句

$result = $con->getAll("

SELECT v_id,video_imgs,video_src,(SELECT video_type FROM videotype WHERE videotype.type_id=catvideo.video_type) AS video_type,video_describe,video_date,( SELECT user.nickname FROM user WHERE userID=video_user ) AS video_user,v_count FROM  catvideo  ORDER BY  v_id DESC limit " . $num . ",$pageLine");
//遍历输出
echo json_encode($result);


//分页按钮

//上一页

$lastpage = $tmp - 1;

//下一页

$nextpage = $tmp + 1;


//防止翻过界

if (@$tmp > $pageCount) {

    echo "[{\"result\":\"没有了\"}]";

}
