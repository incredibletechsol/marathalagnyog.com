<div>
	<?php
	$fetch_dates="select create_datetime,activation_dateTime,lastUpdated_datetime,expiry_date from tbl_basic_profile tbp where
	tbp.profile_id='$profileId'";

	$fetch_dates_rs=mysqli_query($conn,$fetch_dates) or die("Error while updating dates:"+mysqli_error());

	while($fetch_dates_rows=mysqli_fetch_array($fetch_dates_rs))
	{
	$createDate          = $fetch_dates_rows['create_datetime'];
	$activationDateTime  = $fetch_dates_rows['activation_dateTime'];
	$lastUpdatedDatetime = $fetch_dates_rows['lastUpdated_datetime'];
	$expiryDate          = $fetch_dates_rows['expiry_date'];
	}
	echo "<div class='well'>";
	echo "<b>Registration Date : </b>".$createDate."<br><br>";
	echo "<b>Activation Date : </b>".$activationDateTime."<br><br>";
	echo "<b>Last Updated Date :  </b>".$lastUpdatedDatetime."<br><br>";
	echo "<b>Expiry Date : </b>".$expiryDate."<br>";   
	echo "</div>";
	?>		
</div>