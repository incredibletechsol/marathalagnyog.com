<?php
include('../conn.php');
if (isset($_POST['submit'])) 
	{
	$agentId=$_POST['agentId'];
	$password=$_POST['password'];
	$fetch_qry="select * from tbl_agent_profile where agent_id='$agentId' and password='$password'";
	$result=mysqli_query($conn,$fetch_qry)or die (mysql_error()); 
	$count=mysqli_num_rows($result);
	$row=mysqli_fetch_array($result);
			
	if ($count > 0)
		{
		session_start();
		$_SESSION['agent_id']=$row['agent_id'];
		$_SESSION['fullname']=$row['first_name']."&nbsp;".$row['last_name'];
                $_SESSION['isSuperAdmin']=$row['isSuperAdmin'];
		if($row['status']=='N')
			{
			echo "<script>window.location.href = 'index.php?status=inactive';</script>";
			}
		else
			{
			if($row['role']=="100")
				{
				echo "<script>window.location.href = 'dash.php';</script>";
				}
			else
				{
				echo "<script>window.location.href = 'agentMyProfiles.php';</script>";
				}
			}
		}
	else
		{
		echo "<script>window.location.href = 'loginFailed.php';</script>";
		}
	}
	
?>