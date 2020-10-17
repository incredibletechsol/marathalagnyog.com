<?php
session_start();
$loginfrom = $_SESSION['loginfrom'] ;
if($loginfrom == "loginfromdesktop")
	header('location:../login.php');
else if($loginfrom == "loginfrommobile")
	header('location:index.php');
session_destroy();

?>