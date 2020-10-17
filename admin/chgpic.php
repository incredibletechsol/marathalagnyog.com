<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Custom JavaScript Dialog Boxes</title>

<script type="text/javascript">

	function setNewColor(el, bg) 
		{
		  if (el.style) el.style.backgroundColor = bg;
		}
		
	function checkPhoto(form) 
		{
		  var bgBad = "#FF9999";
		  var bgGood = "#66FFCC";
		  var valid = true;
		  var errmsg="";
		  
		  /* Photo validation */ 		  
		 if (form.photo.value == "" || form.photo.value.trim().length==0) {
			error_photo.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please select your Photo";
			setTimeout(function () {error_photo.innerHTML =""}, 10000);
			valid = false;
		  } else {
			error_photo.innerHTML ="";
				setNewColor(form.photo, bgGood);
		  }
		return valid;  
		}	  
		
	function CheckPhotoExt()
	{
		var fup = document.getElementById('photo');
     	var fileName = fup.value;
		var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
		if(ext == "jpg" || ext == "png" || ext == "gif" || ext == "bmp" || ext == "JPG" || ext == "PNG" || ext == "GIF" || ext == "BMP")
			{
			return true;
			} 
		else
		{
			fileName="";
			error_photo.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Upload .jpg,.png,.gif,.bmp files only.";
			document.getElementById('photo').value="";
			fup.focus();
			return false;
		}
	}
	
	</script>
	
</head>
<body>
<form name="updatePhoto" method="post" enctype="multipart/form-data" action="showprofiledetails.php" onSubmit="return checkPhoto(this)">
<?php
	include("../conn.php");
	$profileId1=$_SESSION['profile_id'];
	$fetch_photo_query="SELECT imagename FROM tbl_profile_photo where profile_id='$profileId1'";
	//$log->info("Photo Fetching Query::");
	//$log->info($fetch_photo_query);
	$photo_rs= mysqli_query($conn,$fetch_photo_query);
	
	while($photo_row = mysqli_fetch_array($photo_rs)) 
		{
		if($photo_row[0]=="noimg.gif")
			{
			echo "<img src='../images/noimg.gif' border=0>";
			}
		else
			{	
			echo "<img src='../profilepics/$photo_row[0]' border=0 data-group='group-1' class='img-500 img-responsive img-thumbnail js-lightBox'>";
			}
		}
	echo "<br><input name='photo' type='file' id='photo' onchange='return CheckPhotoExt();'/><br>";
	echo "<input type='submit' name='updatePhoto' value='Upload' class='btn btn-primary btn-sm'><br>";
	echo "<DIV id='error_photo' style='color:red;'></DIV>";
?>
</form>
</body>
</html>