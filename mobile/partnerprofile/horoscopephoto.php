<form name="updateHoroscopePhoto" method="post" enctype="multipart/form-data" action="myprofileactions.php" onSubmit="return CheckHoroscopePhoto(this)">
	<?php
	$profileId1=$_GET['id'];	
	$fetch_horoscope_photo="SELECT imagename FROM tbl_horoscope_photo where profile_id='$profileId1'";
	$horoscope_photo_rs= mysqli_query($conn,$fetch_horoscope_photo);
	while($horoscope_photo_row = mysqli_fetch_array($horoscope_photo_rs)) 
		{
		if($horoscope_photo_row[0]=="noimg.gif")
			{
			echo "<img src='../images/noimg.gif' border=0>";
			}
		else
			{	
			echo "<img class='js-lightBox' data-title=''  data-group='group-1' src='../horoscopepics/$horoscope_photo_row[0]' width='150' height='100' />";
			}
		}
?>
</form>