<?php
session_start(); 
error_reporting(0);
date_default_timezone_set('Asia/Calcutta');
include('conn.php');
include('MyLogPHP.class.php');
$log = new MyLogPHP('logs/logs.log');
$profileId=$_SESSION['profile_id'];		
//Save Theme
if(isset($_POST['savetheme']))
    {    
	$theme = $_POST['color'];
	mysqli_query($conn,"UPDATE tbl_theme SET theme='$theme' where id = 12 ") or die(mysqli_error($conn));
	echo "<script> window.location='myprofile.php?msg=savetheme'</script>";
    }
    
if(isset($_POST['updatePhoto']))
	{
	$fetch_existing_photo_query="SELECT imagename FROM tbl_profile_photo where profile_id='$profileId'";
	$existing_photo_rs= mysqli_query($conn,$fetch_existing_photo_query);

	while($exiting_photo_row = mysqli_fetch_array($existing_photo_rs)) 
	{
	if($exiting_photo_row[0]=="noimg.gif")
		{
		
		}
	else
		{	
		 $utemp="../profilepics/".$exiting_photo_row[0];
		 unlink($utemp);	
		}
	}

	if(isset($_POST['updatePhoto']) && $_FILES['photo']['size'] > 0) 
			{
				$fileName = $_FILES['photo']['name'];
				$tmpName  = $_FILES['photo']['tmp_name'];
			}
		
	$ext=substr(strrchr($fileName,'.'),1);		
	$fileName = $profileId.".".$ext;		
	$target_path="../profilepics/";
	
	$target_path=$target_path.basename($fileName);
	
	if(move_uploaded_file($_FILES['photo']['tmp_name'],$target_path))
		{
		$profile_photo_update = "UPDATE tbl_profile_photo SET imagename='$fileName' where profile_id='$profileId'";
		$log->info("Updating Profile Photo  :::");	
		$log->info($profile_photo_update);	
		$create_date=getCreateDate($profileId); 
		mysqli_query($conn,$profile_photo_update) or die(mysqli_error($conn)); 
		}
	updateLastUpdatedDatetime($profileId);
	updateCreateDate($profileId,$create_date);
	echo "<script>window.location.href = 'myprofile.php?msg=success';</script>";
	}

if(isset($_POST['updateHoroscopePhoto']))
	{
		$fetch_existing_horoscope_photo_query="SELECT imagename FROM tbl_horoscope_photo where profile_id='$profileId'";
		$existing_horoscope_photo_rs= mysqli_query($conn,$fetch_existing_horoscope_photo_query) or die(mysqli_error($conn));
	
		while($exiting_horoscope_photo_row = mysqli_fetch_array($existing_horoscope_photo_rs)) 
		{
		if($exiting_horoscope_photo_row[0]=="noimg.gif")
			{
			
			}
		else
			{	
			 $utemp="../horoscopepics/".$exiting_horoscope_photo_row[0];
			 unlink($utemp);	
			}
		}

		if(isset($_POST['updateHoroscopePhoto']) && $_FILES['horoscopephoto']['size'] > 0)
			{
			$fileName = $_FILES['horoscopephoto']['name'];
			$tmpName  = $_FILES['horoscopephoto']['tmp_name'];
			}
		$ext=substr(strrchr($fileName,'.'),1);		
		$fileName = $profileId.".".$ext;		
		$target_path="../horoscopepics/";
		
		$target_path=$target_path.basename($fileName);
		
		if(move_uploaded_file($_FILES['horoscopephoto']['tmp_name'],$target_path))
			{
			$horoscope_photo_update = "UPDATE tbl_horoscope_photo SET imagename='$fileName' where profile_id='$profileId'";
			$log->info("Updating Horoscope Photo  :::");						 
			$log->info($horoscope_photo_update);	
			$create_date=getCreateDate($profileId);	
			mysqli_query($conn,$horoscope_photo_update) or die(mysqli_error($conn)); 
			}
		updateLastUpdatedDatetime($profileId);
		updateCreateDate($profileId,$create_date);
		echo "<script>window.location.href = 'myprofile.php?msg=success';</script>";
	}			
	
function getCreateDate($profileId)
	{
	include('conn.php');
	$log = new MyLogPHP('logs/logs.log');
	$fetch_create_date="select create_datetime from tbl_basic_profile where profile_id='$profileId'";

	$fetch_create_date_rs=mysqli_query($conn,$fetch_create_date) or die(mysqli_error());

	while($fetch_create_date_row = mysqli_fetch_array($fetch_create_date_rs))
		  {
		  $create_date= $fetch_create_date_row[0];
		  }
	$log->info("Create Date is :".$create_date);

	return $create_date;
	}
	
if(isset($_POST['updatePhotoAlbum']))
	{
		$folder = "../photoalbums/".$profileId."/";	
		if (!file_exists($folder)) {
			mkdir($folder, 0755, true);
		}
		saveAlbumPhoto($folder,$profileId);
		updateLastUpdatedDatetime($profileId);
		$create_date=getCreateDate($profileId);
		updateCreateDate($profileId,$create_date);
	}

	function saveAlbumPhoto($folder,$profileId)
	{
		include('conn.php');
		if(isset($_POST['updatePhotoAlbum']) && $_FILES['albumphoto']['size'] > 0) {
			$fileName = $_FILES['albumphoto']['name'];
			$tmpName  = $_FILES['albumphoto']['tmp_name'];
			}
	
		$target_path=$folder;
		
		$target_path=$target_path.basename($_FILES['albumphoto']['name']);
	
		if(move_uploaded_file($_FILES['albumphoto']['tmp_name'],$target_path)){
									
		$photo_album_insert = "INSERT INTO tbl_photo_album(imagename,profile_id) ".
				 "VALUES ('$fileName','$profileId')";

		mysqli_query($conn,$photo_album_insert) or die(mysqli_error($conn)); 
		echo "<script>window.location.href = 'myprofile.php?msg=success';</script>";
		$log->info("Photo Saved Successfully");
		}
	}
	
if(isset($_POST['updateAlbumStatus']))
	{
	$albumStatus 	= $_POST['albumStatus'];
	$album_status_update = "UPDATE tbl_basic_profile 
								 SET 
								 album_status 			= '$albumStatus'
								 WHERE profile_id='$profileId'";		
	$log->info("Updating Album Status :::");						 
	$log->info($album_status_update);	
	$create_date=getCreateDate($profileId);   						 
	mysqli_query($conn,$album_status_update) or die("Error while updating album status data:"+mysqli_error($conn));
	updateLastUpdatedDatetime($profileId);
	updateCreateDate($profileId,$create_date);
	echo "<script>window.location.href = 'myprofile.php?msg=success';</script>";
	}	
	
if(isset($_GET['type']))
	{
	$type = $_GET['type'];
	if($type == 'delPhoto') {
		$id=$_GET['id'];
		$fetch_photo_byid="SELECT imagename,id FROM tbl_photo_album where id='$id'";
		$photo_byid_rs= mysqli_query($conn,$fetch_photo_byid);
		$numrowsbyid = mysqli_num_rows($photo_byid_rs);
		if( $numrowsbyid > 0 )
			{
			while($photo_byid_row = mysqli_fetch_array($photo_byid_rs))
				{
				$file = "../photoalbums/".$profileId."/".$photo_byid_row[0];
				unlink($file);	
				mysqli_query($conn,"delete from tbl_photo_album where id='$id'");		
				echo "<script>window.location.href = 'myprofile.php?msg=success';</script>";
				}
			}
		updateLastUpdatedDatetime($profileId);
		updateCreateDate($profileId,$create_date);
		}	
	}

if(isset($_POST['updateBasicProfile']))
	{
		$firstName		= $_POST['firstName'];
		$lastName		= $_POST['lastName'];
		$gender			= $_POST['gender'];
		$dateOfBirth	= $_POST['bdate'];
		$maritalStatus	= $_POST['maritalStatus'];
		$religion		= 'Hindu';
		$caste			= 'Maratha';
		$subCaste=$_POST['subCaste']; 
		$password=$_POST['password'];

		$lastUpdated_datetime=date('Y-m-d h:i:s');

		if (!empty($_SERVER["HTTP_CLIENT_IP"]))
			{
			$ipAddress = $_SERVER["HTTP_CLIENT_IP"];
			}
		elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"]))
			{
			$ipAddress = $_SERVER["HTTP_X_FORWARDED_FOR"];
			}
		else
			{
			$ipAddress = $_SERVER["REMOTE_ADDR"];
			}

		$basic_profile_update = "UPDATE tbl_basic_profile 
								 SET 
								 first_name 			= '$firstName',
								 last_name 				= '$lastName',
								 gender     			= '$gender',
								 birth_date 			= '$dateOfBirth', 
								 marital_status 		= '$maritalStatus',
								 religion   			= '$religion',
								 caste					= '$caste',	
								 sub_caste				= '$subCaste',
								 password				= '$password',
								 lastUpdated_datetime	= '$lastUpdated_datetime',
								 ip_address				= '$ipAddress'
								 WHERE profile_id       = '$profileId'";
								 
		$log->info("Updating Basic Profile  :::");						 
		$log->info($basic_profile_update);
		$create_date=getCreateDate($profileId); 						 
		mysqli_query($conn,$basic_profile_update) or die("Error while updating basic profile data:"+mysql_error());
		$age=GetAge($dateOfBirth); 
		mysqli_query($conn,"UPDATE tbl_basic_profile SET age='$age' WHERE profile_id = '$profileId'") or die("Error while updating age :"+mysqli_error($conn));
		updateCreateDate($profileId,$create_date);
		echo "<script>window.location.href = 'myprofile.php?msg=success';</script>";		
	}	

if(isset($_POST['updateContactInfo']))
		{
			$mobileNo			= $_POST['mobileNo'];
			$alternateMobileNo  = $_POST['alternateMobileNo'];
			$emailId			= $_POST['emailId'];
			$address			= $_POST['address'];
			$country      		= 'India';  
			$state         		= 'Maharashtra';         
			$district      		= $_POST['district'];
			$taluka        		= $_POST['taluka'];
			$goan 		   		= $_POST['goan'];	

			$contact_info_update = "UPDATE tbl_contact_info 
									 SET 
									 mobile_no 				= '$mobileNo',
									 alternate_mobile_no	= '$alternateMobileNo',
									 email_Id     			= '$emailId',
									 address 				= '$address',
									 country 				= '$country',
									 state					= '$state',
									 district				= '$district',
									 city					= '$taluka',
									 goan					= '$goan'
									 WHERE profile_id       = '$profileId'";	
			$log->info("Updating Contact Info  :::");						 
			$log->info($contact_info_update);	
			$create_date=getCreateDate($profileId); 						 
			mysqli_query($conn,$contact_info_update) or die("Error while updating contact info data:"+mysqli_error($conn));
			updateLastUpdatedDatetime($profileId);
			updateCreateDate($profileId,$create_date);
			echo "<script>window.location.href = 'myprofile.php?msg=success';</script>";
		}
if(isset($_POST['updatePhysicalAttr']))
		{
		$heightFt	 = $_POST['heightFt'];
		$heightInch  = $_POST['heightInch'];
		$weight 	 = $_POST['weight'];
		$bloodGroup  = $_POST['bloodGroup'];
		$complexion  = $_POST['complexion'];
		
		$physical_attr_update = "UPDATE tbl_physical_attr 
								 SET 
								 heightFt 				= '$heightFt',
								 heightInch				= '$heightInch',
								 weight     			= '$weight',
								 blood_group 			= '$bloodGroup',
								 complexion				= '$complexion'
								 WHERE profile_id       = '$profileId'";		
		$log->info("Updating Physical Attributes  :::");						 
		$log->info($physical_attr_update);	
		$create_date=getCreateDate($profileId); 								 
		mysqli_query($conn,$physical_attr_update) or die("Error while updating physical attributes data:"+mysqli_error($conn));
		updateLastUpdatedDatetime($profileId);
		updateCreateDate($profileId,$create_date);
		echo "<script>window.location.href = 'myprofile.php?msg=success';</script>";
		}	
		
if(isset($_POST['updateProfile']))
		{
		$education 		= $_POST['education'];
		$annualIncome 	= $_POST['annualIncome'];
		$occupation 	= $_POST['occupation'];

		$profile_update = "UPDATE tbl_profile 
						  SET 
						 education 				= '$education',
						 annualIncome 			= '$annualIncome',
						 occupation				= '$occupation'
						 WHERE profile_id='$profileId'";		
		$log->info("Updating Profile  :::");						 
		$log->info($profile_update);	
		$create_date=getCreateDate($profileId); 						 
		mysqli_query($conn,$profile_update) or die("Error while updating profile data:"+mysqli_error($conn));
		updateLastUpdatedDatetime($profileId);
		updateCreateDate($profileId,$create_date);
		echo "<script>window.location.href = 'myprofile.php?msg=success';</script>";
		}

if(isset($_POST['updateSocioAttr']))
		{
		$gothraNew		= $_POST['gothra'];
		$rashiNew		= $_POST['rashi'];
		$nakshtraNew	= $_POST['nakshtra'];
		$charanNew		= $_POST['charan'];
		$nadiNew		= $_POST['nadi'];
		$ganNew			= $_POST['gan'];
		$birthPlaceNew	= $_POST['birthPlace'];
		$birthTimeHours= $_POST['birthTimeHours'];
		$birthTimeMins = $_POST['birthTimeMins'];
		$birthTimeAMPM = $_POST['birthTimeAMPM'];
		
		$birthTimeNew=$birthTimeHours.":".$birthTimeMins.":".$birthTimeAMPM;
		$mangalNew		= $_POST['mangal'];
		
		$socio_attr_update = "UPDATE tbl_socio_religious_attr 
							 SET 
							 gothra 				= '$gothraNew',
							 rashi					= '$rashiNew',
							 nakshtra     			= '$nakshtraNew',
							 charan 				= '$charanNew',
							 nadi					= '$nadiNew',
							 gan					= '$ganNew',
							 birth_place			= '$birthPlaceNew',
							 birth_time				= '$birthTimeNew',
							 mangal					= '$mangalNew'
							 WHERE profile_id       = '$profileId'";	
		$log->info("Updating Socio Attributes  :::");						 
		$log->info($socio_attr_update);	
		$create_date=getCreateDate($profileId);							 
		mysqli_query($conn,$socio_attr_update) or die("Error while updating socio attributes data:"+mysqli_error($conn));
		updateLastUpdatedDatetime($profileId);
		updateCreateDate($profileId,$create_date);
		echo "<script>window.location.href = 'myprofile.php?msg=success';</script>";
		}	
		
if(isset($_POST['updateFamilyDetails']))
		{
		$fatherName				= $_POST['fatherName'];
		$fatherOccupation		= $_POST['fatherOccupation'];
		$motherName				= $_POST['motherName'];
		$motherOccupation		= $_POST['motherOccupation'];
		$noofBrothers			= $_POST['noofBrothers'];
		
		if(isset($_POST['noofBrothersMarried']))
			$noofBrothersMarried	= $_POST['noofBrothersMarried'];
		else
			$noofBrothersMarried    = "0";	
			
		$noofSisters			= $_POST['noofSisters'];
		
		if(isset($_POST['noofSistersMarried']))
			$noofSistersMarried	= $_POST['noofSistersMarried'];
		else
			$noofSistersMarried    = "0";
			
		$mamaLastName			= $_POST['mamaLastName'];
		$lastNameOfRelatives	= $_POST['lastNameOfRelatives'];
		
		$family_details_update  = "UPDATE tbl_family_details 
									 SET 
									 father_name 				= '$fatherName',
									 father_occupation 			= '$fatherOccupation',
									 mother_name				= '$motherName',
									 mother_occupation 			= '$motherOccupation',
									 noofBrothers 				= '$noofBrothers',
									 noofBrothersMarried		= '$noofBrothersMarried',
									 noofSisters				= '$noofSisters',
									 noofSistersMarried 		= '$noofSistersMarried',
									 mamaLastName 				= '$mamaLastName',
									 relativeLastNames			= '$lastNameOfRelatives'
									 WHERE profile_id			= '$profileId'";		
		$log->info("Updating Family Details  :::");						 
		$log->info($family_details_update);	
		$create_date=getCreateDate($profileId);					 
		mysqli_query($conn,$family_details_update) or die("Error while family details data:"+mysqli_error($conn));
		updateLastUpdatedDatetime($profileId);
		updateCreateDate($profileId,$create_date);
		echo "<script>window.location.href = 'myprofile.php?msg=success';</script>";
		}
		
if(isset($_POST['updatePartnerPref']))
		{
		$fetch_partner_preferences1="select partner_education from tbl_partner_preference where profile_id='$profileId'";	
		$partner_preferences_rs1= mysqli_query($conn,$fetch_partner_preferences1);
		
		@$partnerEducation   = $_POST['partnerEducation'];
		
		if(empty($partnerEducation))
			{
			while($partner_preferences_row1 = mysqli_fetch_array($partner_preferences_rs1)) 
				{
				$education = $partner_preferences_row1[0];
				}
			}
		else
			{
			$education="";					
					if( is_array($partnerEducation)){
				while (list ($key, $val) = each ($partnerEducation)) {
					$education=$education.",".$val;
					}
				}
			$education= ltrim ($education, ',');	
			}		
		
		$lookingFor 		 = $_POST['lookingFor'];
		$ageFrom			 = $_POST['ageFrom'];
		$ageTo		 		 = $_POST['ageTo'];
		
		$partnerCaste		 = $_POST['partnerCaste'];		
		
					
		$partner_preference_update = "UPDATE tbl_partner_preference 
									 SET 
									 looking_for		 	 = '$lookingFor',
									 age_from				 = '$ageFrom',
									 age_to     			 = '$ageTo',

									 partner_education		 = '$education',
									 partner_caste			 = '$partnerCaste'
									 WHERE profile_id        = '$profileId'";		
		$log->info("Updating Partner Preference  :::");						 
		$log->info($partner_preference_update);	
		$create_date=getCreateDate($profileId);     							 
		mysqli_query($conn,$partner_preference_update) or die("Error while updating partner preference attributes data:"+mysqli_error($conn));
		updateLastUpdatedDatetime($profileId);
		updateCreateDate($profileId,$create_date);
		echo "<script>window.location.href = 'myprofile.php?msg=success';</script>";
		}		

function GetAge($dob) 
	{ 
		$dob=explode("-",$dob); 
		$curMonth = date("m");
		$curDay = date("j");
		$curYear = date("Y");
		$age = $curYear - $dob[0]; 
		if($curMonth<$dob[1] || ($curMonth==$dob[1] && $curDay<$dob[2])) 
				$age--; 
		return $age; 
	}		

function updateLastUpdatedDatetime($profileId)
	 {
	 include('conn.php');
	 $lastUpdated_datetime=date('Y-m-d h:i:s'); 
	 mysqli_query($conn,"UPDATE tbl_basic_profile SET lastUpdated_datetime='$lastUpdated_datetime' where profile_id='$profileId'") or die(mysqli_error($conn));
	 } 	

function updateCreateDate($profileId,$create_date)
	{
	include('conn.php');
	$log = new MyLogPHP('logs/logs.log');
	$createdate_update = "UPDATE tbl_basic_profile SET create_datetime='$create_date' where profile_id='$profileId'";
	$log->info("Create Date Update Query :".$createdate_update);
	mysqli_query($conn,$createdate_update) or die(mysqli_error($conn));
	}
	
function sendContactDetails($msg,$mobno)
    {
	$username="maratha";
	$api_password="maratha@lagnyog";
	$sender="LGNYOG";
	$domain="http://cannyinfotech.in/api/mt/SendSMS?";
	$mobile=$mobno;
	$message=$msg;
	
	$username=urlencode($username);
	$password=urlencode($api_password);
	$sender=urlencode($sender);
	$message=urlencode($message);
	
	$parameters="user=$username&password=$api_password&senderid=$sender&channel=TRANS&DCS=0&flashsms=0&number=$mobile&text=$message&route=2";
	
	$url=$domain.$parameters;

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // For HTTPS
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); // For HTTPS
	curl_exec($ch);
	$statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE); // Returns 200 if everything went well
	if($statusCode==200)
	{
	}
	else
	{ 
	echo "SMS Sending Failed";
	}
	curl_close($ch);
	}	
	
	
if(isset($_GET['senddetails']))
	{
	    $send  = $_GET['senddetails'];
	    if($send  == "yes") {
    		$toProfileId = $_GET['id'];
    		$fromProfileId=$_SESSION['profile_id'];
    		$whenContacted=date('Y-m-d h:i:s');
    		mysqli_query($conn,"insert into tbl_request_contact_details(from_profile_id,to_profile_id,when_contacted) values('$fromProfileId','$toProfileId','$whenContacted')");
    		
    		$fetch_partner_contact_info="select mobile_no,alternate_mobile_no from tbl_contact_info where profile_id='$toProfileId'";	
    		$partner_contact_info_rs= mysqli_query($conn,$fetch_partner_contact_info);
    		while($partner_contact_info_row = mysqli_fetch_array($partner_contact_info_rs)) 
    			{	
    				$mobileNo          = $partner_contact_info_row[0];
    				$alternateMobileNo = $partner_contact_info_row[1];
    			}
    			
    		$fetch_user_contact_info="select mobile_no from tbl_contact_info where profile_id='$fromProfileId'";	
    		$user_contact_info_rs= mysqli_query($conn,$fetch_user_contact_info);
    		while($user_contact_info_row = mysqli_fetch_array($user_contact_info_rs))
    			{
    				$userMobileNo = $user_contact_info_row[0];
    			}
    		
    		$msg="Contact details for Profile Id:$toProfileId"." are ".$mobileNo." and ".$alternateMobileNo." Regards-MarathaLagnYog";	
    		sendContactDetails($msg,$userMobileNo);
    		$log->info("Partner Contact Details:".$mobileNo." and ".$alternateMobileNo);	
    		echo "<script>window.location.href = 'myprofile.php?msg=detailsent';</script>";
	    }
	}

if(isset($_POST['sendonwhatsapp']))
	{
		$toProfileId = $_POST['toProfileId'];
		$fromProfileId=$_SESSION['profile_id'];
		$whenContacted=date('Y-m-d h:i:s');
	    mysqli_query($conn,"insert into tbl_request_contact_details(from_profile_id,to_profile_id,when_contacted) values('$fromProfileId','$toProfileId','$whenContacted')");
		
		$fetch_partner_contact_info="select mobile_no,alternate_mobile_no from tbl_contact_info where profile_id='$toProfileId'";	
		$partner_contact_info_rs= mysqli_query($conn,$fetch_partner_contact_info);
		while($partner_contact_info_row = mysqli_fetch_array($partner_contact_info_rs)) 
			{	
				$mobileNo          = $partner_contact_info_row[0];
				$alternateMobileNo = $partner_contact_info_row[1];
			}
			
		$fetch_user_contact_info="select mobile_no from tbl_contact_info where profile_id='$fromProfileId'";	
		$user_contact_info_rs= mysqli_query($conn,$fetch_user_contact_info);
		while($user_contact_info_row = mysqli_fetch_array($user_contact_info_rs))
			{
				$userMobileNo = $user_contact_info_row[0];
			}
		
		$msg="Contact details for Profile Id:$toProfileId"." are ".$mobileNo." and ".$alternateMobileNo." Regards-MarathaLagnYog";	
		$log->info("Partner Contact Details:".$mobileNo." and ".$alternateMobileNo);	

		$mobileno=$_POST['mobileno'];
        $mobno='91'.$mobileno;
        $whatsapplink = "https://wa.me/$mobno?text=$msg";	
        echo "<script> window.location='$whatsapplink'; </script>";
        echo "<script> 'myprofile.php?msg=detailsentonwhastapp' </script>";
	}	


?>