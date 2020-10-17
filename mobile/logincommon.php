<?php
error_reporting(0);
session_start();
date_default_timezone_set('Asia/Calcutta');
include('conn.php');
include('MyLogPHP.class.php');
$log = new MyLogPHP('logs/logs.log');
if (!isset($_SESSION['profile_id'])){
header('location:index.php');
}

?>

