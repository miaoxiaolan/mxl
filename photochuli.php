<?php
header("Content-type:application/json");
header('Access-Control-Allow-Origin:*');
session_start();

require "DBHelper.php";

$con = new  DBHelper();

$name = $_SESSION['userID'];



$image = $_POST['compress_file'];

$imageName = "25220_" . date("His", time()) . "_" . rand(1111, 9999) . '.png';
if (strstr($image, ",")) {
    $image = explode(',', $image);
    $image = $image[1];
}
$path = "./images/" . date("Ymd", time());
if (!is_dir($path)) { //判断目录是否存在 不存在就创建
    mkdir($path, 0777, true);
}

$imageSrc = $path . "/" . $imageName; //图片名字
$cimageSrc =   substr($imageSrc, 1);
$r = file_put_contents($imageSrc, base64_decode($image)); //返回的是字节数
if (!$r) {
    $tmparr1 = array('data' => null, "code" => 1, "msg" => "图片生成失败");
    //    echo json_encode($tmparr);
} else {
    $tmparr2 = array('data' => 1, "code" => 0, "msg" => "图片生成成功");
    $arr = array('cat_imageSrc' => $cimageSrc, 'cat_articleType' => $_POST['cat_type'], 'cat_article' => $_POST['edi'], 'cat_date' => date('Y/m/d'), 'cat_author' =>$name, 'cat_title' =>$_POST['cat_title']);
    $con->exec('catfeel', $arr, 'insert', '0');
    echo json_encode('true');

}






