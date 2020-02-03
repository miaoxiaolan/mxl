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

$pageLine = 15;


// 计算总记录数
$ZongPage= $con->getAll('SELECT * FROM  catfeel  ORDER BY  cat_articleId DESC');


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

SELECT cat_articleId,(SELECT user.nickname FROM sdm173965183_db.user WHERE userID=cat_author) AS cat_author,cat_date,cat_from,cat_articleType, cat_title, cat_date, cat_imageSrc, cat_article, clicks_ip_count FROM catfeel   ORDER BY  cat_articleId DESC limit " . $num . ",$pageLine");
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
