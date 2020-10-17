<form name="updatePhotoAlbum" method="post" enctype="multipart/form-data" action="myprofileactions.php" onSubmit="return CheckAlbumPhoto(this)">
<?php

$fetch_photo_album="SELECT imagename,id FROM tbl_photo_album where profile_id='$profileId'";
$photo_album_rs= mysqli_query($conn,$fetch_photo_album);
$numrows=mysqli_num_rows($photo_album_rs);
if($numrows > 0)
{
$i=0;
$first="";
$second="";
$third="";
while($photo_album_row = mysqli_fetch_array($photo_album_rs)) 
	{
	if($i==0)  
		{
		$first = $photo_album_row[0];
		$firstid = $photo_album_row[1];
		}
	else if($i==1)  {
		$second = $photo_album_row[0];
		$secondid = $photo_album_row[1];
		}
	else if($i==2)  
		{
		$third = $photo_album_row[0];
		$thirdid = $photo_album_row[1];
		}
	$i++;	
	}
	$log->info("File Names are::".$first.$second.$third);	
			
	if($first == "") { }
	else echo "<img src='../photoalbums/$profileId/$first' width='100' height='100' border='0' class='js-lightBox' data-title='1' data-group='group-1'/>
	<a href='myprofileactions.php?type=delPhoto&id=$firstid'><img src='assets/images/cross.png' border=0></a>";

	if($second == "") { }
	else echo "<img src='../photoalbums/$profileId/$second' width='100' height='100' border='0' class='js-lightBox' data-title='2' data-group='group-1'/>
	<a href='myprofileactions.php?type=delPhoto&id=$secondid'><img src='assets/images/cross.png' border=0></a>";

	if($third == "") { }	
	else echo "<img src='../photoalbums/$profileId/$third' width='100' height='100' border='0' class='js-lightBox' data-title='3' data-group='group-1'/>
	<a href='myprofileactions.php?type=delPhoto&id=$thirdid'><img src='assets/images/cross.png' border=0></a>";
	}	
else
	{
	echo "No Photos Found !!!!";	
	}
$fetch_photo_albumqry="SELECT count(*) FROM tbl_photo_album where profile_id='$profileId'";
$photo_album_rset= mysqli_query($conn,$fetch_photo_albumqry);
$numrowsalbums=mysqli_num_rows($photo_album_rset);
while($photo_album_row = mysqli_fetch_array($photo_album_rset))
	{
	$count=$photo_album_row[0];
	}	
if($count == "3") 
	{
	}
else
	{
	echo "<input name='albumphoto' type='file' id='albumphoto' onchange='return CheckAlbumPhotoExt();'/><br>";
	echo "<input type='submit' name='updatePhotoAlbum' value='Upload' class='btn btn-primary btn-rounded'>";
	echo "<DIV id='error_albumphoto' style='color:red;'></DIV>";
	}			

?>
</form>
<form name="updateAlbumStatus" method="post" action="myprofileactions.php">
Share Status : <select name="albumStatus" id="albumStatus" class='form-control select2' style="width:135px;">
<?php
$fetch_album_status="select album_status from tbl_basic_profile where profile_id='$profileId'";	
$album_status_rs= mysqli_query($conn,$fetch_album_status);
while($album_status_row = mysqli_fetch_array($album_status_rs)) 
	{
	$album_status=$album_status_row[0];
	}
$log->info('album status::'.$album_status);
$albumstatusOptions  = array('Public','Private');

foreach($albumstatusOptions as $option){
	if($album_status == $option){
		echo "<option selected='selected' value='$option'>$option</option>" ;
	}else{
		echo "<option value='$option'>$option</option>" ;
	}
}
?>	
</select><br>
<input type="submit" name="updateAlbumStatus" value="Update" class="btn btn-primary btn-rounded">
</form>	
Note : You can upload maximum 3 photos.	