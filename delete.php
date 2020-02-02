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
$con = new  DBHelper();

@$tmp = $_GET['catTd'];
// $sql="delete from user where userid=7";
$sql = "delete from catfeel where cat_articleId=".$tmp;
$result = $con->query($sql);

echo json_encode($result);
