<?php
date_default_timezone_set('Asia/Kolkata'); 
include('conn.php');
if (isset($_POST['submit'])) 
	{
	$loginfrom = $_POST['loginfrom'];
	$profileId=$_POST['profileId'];
	$password=$_POST['password'];
	$fetch_qry="select * from tbl_basic_profile where profile_id='$profileId' and password='$password'";
	$result=mysqli_query($conn,$fetch_qry)or die (mysqli_error($conn)); 
	$count=mysqli_num_rows($result);
	$row=mysqli_fetch_array($result);
			
	if ($count > 0)
		{
		session_start();
		$_SESSION['profile_id']=$row['profile_id'];
		$_SESSION['fullname']=$row['first_name']."&nbsp;".$row['last_name'];
		$_SESSION['gender']=$row['gender'];
		$_SESSION['caste']=$row['caste'];
		$_SESSION['loginfrom'] = $loginfrom;
		$birthdate = $row['birth_date'];
		$time = strtotime($birthdate );
			
		if($row['status'] == 'N' || $row['status'] == 'A') {
			if($loginfrom == "loginfromdesktop")
				echo "<script>window.location.href = '../login.php?msg=inactive';</script>";
			else if($loginfrom == "loginfrommobile")
				echo "<script>window.location.href = 'index.php?msg=inactive';</script>";
			}
		else if(date('m-d') == date('m-d', $time)) 
			echo "<script>window.location.href = 'matchingprofiles.php?msg=birthday';</script>";
		else
			echo "<script>window.location.href = 'matchingprofiles.php';</script>";
		}
	else
		{
		if($loginfrom == "loginfromdesktop")
			header('location:../login.php?msg=failed');
		else if($loginfrom == "loginfrommobile")
			header('location:index.php?msg=failed');
		}
	}
	
?>