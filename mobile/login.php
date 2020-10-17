<?php
include('classes/crud.php');

if (isset($_POST['submit'])) 
	{
	$UserName=$_POST['username'];
	$Password=$_POST['password'];
	$db = new Database();
	$db->connect();
	$db->select('tbl_login','*',NULL,"UserName='$UserName' and Password='$Password'",NULL,NULL); 
	// Table name, Column Names, JOIN, WHERE conditions, ORDER BY 
    $rs = $db->getResult(); 
	$count=sizeof($rs);	
	echo $count;
	
	if ($count > 0)
				{
				session_start();
				foreach($rs as $row)
					{
					$_SESSION['id']=$row['id'];
					$_SESSION['firstname']=$row['FirstName'];
					$_SESSION['lastname']=$row['LastName'];
				
					$name=$_SESSION['firstname']."  ".$_SESSION['lastname'];
					$_SESSION['name']=$name;
					header('location:listbachatgats.php');
					}
				}
			else
				{
				header('location:index.php?msg=failed');
				}
			
	}
?>

