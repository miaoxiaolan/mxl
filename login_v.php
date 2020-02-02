<?php

session_start();
if (isset($_POST['user']) && isset($_POST['pwd'])) {

    $username = $_POST['user'];
    $password = $_POST['pwd'];
    require_once "DBHelper.php";
    $conn = new DBHelper();
    $sql = "select *  from user where tel='" . $username . " ' and password='" . $password . "'";
    $res = $conn->getRow($sql);
    if (isset($res['userID'])) {
        $_SESSION['user'] = $username;
        $_SESSION['userID'] = $res['userID'];
        echo "true";
    }
}
