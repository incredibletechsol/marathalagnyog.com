<form name="updatePhotoAlbum" method="post" enctype="multipart/form-data" action="myprofileactions.php" onSubmit="return CheckAlbumPhoto(this)">
<?php
if($albumStatus == "Public") {
	include('conn.php');
	$profileId1=$_GET['id'];	
	$fetch_photo_album="SELECT imagename,id FROM tbl_photo_album where profile_id='$profileId1'";
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
	else echo "<img src='../photoalbums/$profileId1/$first' width='100' height='100' border='0' class='js-lightBox' data-title='1' data-group='group-1'/>";

	if($second == "") { }
	else echo "<img src='../photoalbums/$profileId1/$second' width='100' height='100' border='0' class='js-lightBox' data-title='2' data-group='group-1'/>";

	if($third == "") { }	
	else echo "<img src='../photoalbums/$profileId1/$third' width='100' height='100' border='0' class='js-lightBox' data-title='3' data-group='group-1'/>";
	}	
else
	{
	echo "No Photos Found !!!!";	
	}
}
else
	echo "Photo Album is Private";
?>
</form>