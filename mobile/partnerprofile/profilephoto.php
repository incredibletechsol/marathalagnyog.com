<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Custom JavaScript Dialog Boxes</title>
</head>
<body>
<form name="updatePhoto" method="post" enctype="multipart/form-data" action="myprofileactions.php" onSubmit="return checkPhoto(this)">
<?php
	include("conn.php");
	$profileId1=$_GET['id'];	
	$fetch_photo_query="SELECT imagename FROM tbl_profile_photo where profile_id='$profileId1'";
	$log->info("Photo Fetching Query::");
	$log->info($fetch_photo_query);
	$photo_rs= mysqli_query($conn,$fetch_photo_query);
	$fetch_basic_profile="select * from tbl_basic_profile where profile_id='$profileId1'";	
	$basic_profile_rs= mysqli_query($conn,$fetch_basic_profile);
	while($basic_profile_row = mysqli_fetch_array($basic_profile_rs)) 
		{
			$firstName = $basic_profile_row['first_name'];	
			$lastName  = $basic_profile_row['last_name'];
			$albumStatus=$basic_profile_row['album_status'];
		}
	$_SESSION['partnerfullname']=$firstName." ".$lastName;
	$name = $firstName." ".$lastName;
	//$_SESSION['albumStatus'] = $albumStatus;
	while($photo_row = mysqli_fetch_array($photo_rs)) 
		{
		if($photo_row[0]=="noimg.gif")
			{
			echo "<img src='../images/noimg.gif' border=0 class='img-responsive img-thumbnail'>";
			}
		else
			{	
			echo "<img src='../profilepics/$photo_row[0]' border=0 width='200' data-title='$name' data-group='group-1' height='100' class='img-responsive img-thumbnail js-lightBox'>";
			}
		}
	echo "<h4>".$name."<br>(".$profileId1.")</h4>";		
	$fromProfileId=$_SESSION['profile_id'];
	$check_request_contact_details="select from_profile_id,to_profile_id from tbl_request_contact_details where from_profile_id='$fromProfileId' and to_profile_id='$profileId1' ";	
	
	$check_request_contact_details_rs= mysqli_query($conn,$check_request_contact_details);
	$reqnumrows = mysqli_num_rows($check_request_contact_details_rs);
	if( $reqnumrows == 0 )
		{
		echo "<a href='myprofileactions.php?id=$profileId&senddetails=yes'><img src='assets/images/reqcontact.png' border='0'></a><br>";
		echo "<a href='#' data-toggle='modal' data-target='#con-close-modal'><img src='assets/images/whatsappcontact.png
' border='0'></a>";
		}
	else
		{
		echo "<a href='#'><img src='assets/images/alreadycontact.png' border='0'></a><br>";
		}		
?>
</form>

<!--Get Contact Details On Your Whatsapp - Start -->
<div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"><img src='assets/images/whatsapp.png' border='0'>Get Contact Details On Your Whatsapp</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal group-border-dashed" action="myprofileactions.php" name="whatsapp" method="post">
                    <div class="form-group">
							<label class="col-sm-3 control-label">Your Whatsapp No</label>
							<div class="col-sm-6">
								<input name="mobileno" type="text" id="mobileno"  maxlength="10" onkeydown= "return isNumberKey(event);" class="form-control" required="">
							</div>
					</div>
					<div class="form-group m-b-0">
							<div class="col-sm-offset-3 col-sm-9 m-t-15">
								<input type="submit" name="sendonwhatsapp" value="Confirm" class="btn btn-primary">
								<button type="button" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Cancel</button>
								<input type="hidden" value="<?php echo $profileId1; ?>" name="toProfileId">
							</div>
					</div>
	           </form>
            </div>
       </div>
    </div>
</div>
 <!--Get Contact Details On Your Whatsapp - End -->
</body>
</html>