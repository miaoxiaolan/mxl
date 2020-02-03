<?php

header("Content-type:application/json");

header('Access-Control-Allow-Origin:*');
require_once "DBHelper.php";
$con=new  DBHelper();
$tmp = $_GET['aid'];
$result = $con->getAll("

SELECT v_id,video_imgs,video_src,(SELECT video_type FROM videotype WHERE videotype.type_id=catvideo.video_type) AS video_type,video_describe,video_date,( SELECT user.nickname FROM user WHERE userID=video_user ) AS video_user,v_count FROM  catvideo  where  v_id = " . $tmp );
echo json_encode($result);