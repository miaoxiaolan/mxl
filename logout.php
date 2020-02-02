<?php
/**
 * Created by PhpStorm.
 * User: xx
 * Date: 2020/1/16 0016
 * Time: 下午 8:00
 */

session_start();
if (isset($_SESSION['user'])){
    unset($_SESSION['user']);
}
session_destroy();

header('Location:login',true,302);
exit;