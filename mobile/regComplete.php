<?php
session_start();
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
date_default_timezone_set('Asia/Calcutta');
include('conn.php');

$profile_id = saveBasicProfile();
$_SESSION['profile_id']=$profile_id;

saveContactInfo($profile_id);
saveProfilePhoto($profile_id);
saveSocioReligiousAttributes($profile_id);
savePhysicalAttributes($profile_id);
saveEductionAndProfessionalProfile($profile_id);
saveFamilyDetails($profile_id);
savePartnerPreference($profile_id);
saveHoroScopePhoto($profile_id);
saveIdentificationProof($profile_id);

$name=$_POST['firstName'];
$mobileNo=$_POST['mobileNo'];
$pwd=$mobileNo;
$emailId=$_POST['email'];
sendEmail($name,$emailId,$headers);
sendSMS($name,$mobileNo,$profile_id,$pwd);
$registerfrom  = $_POST['registerfrom']; 
if($registerfrom == "desktop")
    echo "<script>window.location.href = 'profilecreated.php';</script>";
else if($registerfrom == "mobile")
    echo "<script>window.location.href = 'profilecreated.php';</script>";


function sendEmail($name,$emailid,$headers) 
{
    $mess="<b>Hi ".$name.",</b><BR><h3>Congratulations,Your Account has been created successfully.</h3><br><br>";
    $mess=$mess."Please pay amount of <b>Rs.500</b> using below details.<br><br>";
    $mess=$mess."<img src='http://www.marathalagnyog.com/images/payment.jpg' border=0><br><br>";
    $mess=$mess."Please inform us the details of your payment by email / phone with Profile Id,Submission Date<br><br>";
    $mess=$mess."<b>Thanks & Regards <BR>MarathaLagnYog Team</b><br>";
    $mess=$mess."<img src='http://www.marathalagnyog.com/images/logo.png' border=0 width=200 height=65><br><br>";
    
    $sub="MarathaLagnYog :: Account Created";
    $r="-f"."incredib@lin6.plreseller.com";
    mail($emailid,$sub,$mess,$headers,$r);
}

function sendSMS($name,$mobno,$profileId,$pwd)
{
    $username="maratha";
	$api_password="maratha@lagnyog";
	$sender="LGNYOG";
	$domain="http://cannyinfotech.in/api/mt/SendSMS?";
	$mobile=$mobno;
	$message="Hi ".$name." Your Account Created Successfully.Profile Id:".$profileId." & Password: ".$pwd." Regards Maratha LagnYog www.marathalagnyog.com ";
	
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

/* Code to Save Basic Profile */

function saveBasicProfile()
{
    include('conn.php');
    $profile_created_by = $_POST['profile_created_by'];
	$firstName=$_POST['firstName'];
	$lastName=$_POST['lastName'];
	$gender=$_POST['gender'];
	$dateOfBirth=$_POST['bdate'];
	$maritalStatus=$_POST['maritalStatus'];	
	$religion = 'Hindu';
	$caste=$_POST['castesubcaste'];
	$castesubcaste = $_POST['castesubcaste'];
	$password=$_POST['password'];
	$create_datetime=date('Y-m-d h:i:s');
       
	$timeStamp = StrToTime($create_datetime);
	$after12_months = StrToTime('+12 months', $timeStamp);
	$expiry_date=date('Y-m-d',$after12_months); 

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
	$age=GetAge($dateOfBirth);	
	

	$basic_profile_insert = "INSERT INTO tbl_basic_profile(first_name,last_name,gender,
														 birth_date,marital_status,religion,caste,sub_caste,
														 password,create_datetime,lastUpdated_datetime,
														 ip_address,status,album_status,age,activation_dateTime,expiry_date,profile_created_by)".
							"VALUES('$firstName','$lastName','$gender',
									'$dateOfBirth','$maritalStatus','$religion','$caste',
									'$castesubcaste','$password','$create_datetime','$create_datetime',
									'$ipAddress','N','Private','$age','$create_datetime','$expiry_date','$profile_created_by')";
	mysqli_query($conn,$basic_profile_insert) or die("Error while inserting basic profile data:"+mysqli_error($conn));
	$profile_id = mysqli_insert_id($conn);
	return $profile_id;
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

/* Code to Save Contact Info*/

function saveContactInfo($profile_id)
{
    include('conn.php');
	$mobileNo=$_POST['mobileNo'];

	if($_POST['alternateMobileNo']) 
		{
		$alternateMobileNo=$_POST['alternateMobileNo'];
		}
	else
		{
		$alternateMobileNo=$mobileNo;
		}

	$emailId=$_POST['email'];
	$address=$_POST['address'];
	$country='India';
	$state='Maharashtra';
	$district=$_POST['district'];
	$city=$_POST['taluka'];
	$goan  =  $_POST['goan'];

	$contact_info_insert="INSERT INTO tbl_contact_info(mobile_no,alternate_mobile_no,email_Id,address,
										   country,state,district,city,goan,profile_id)".
						  "VALUES('$mobileNo','$alternateMobileNo','$emailId','$address',
								  '$country','$state','$district','$city','$goan','$profile_id')";	
	mysqli_query($conn,$contact_info_insert) or die(mysqli_error($conn));	
}						  

/* Code to Save Profile pic*/

function saveProfilePhoto($profile_id)
{
    include('conn.php');
	$fileSize=$_FILES['photo']['size'];
	if($fileSize <= 0)
		{
		$profile_photo_insert = "INSERT INTO tbl_profile_photo(imagename,profile_id) "."VALUES ('noimg.gif','$profile_id')";
		mysqli_query($conn,$profile_photo_insert) or die(mysqli_error($conn));
		}
	else
		{
			$fileName = $_FILES['photo']['name'];
			$ext=substr(strrchr($fileName,'.'),1);		
			$fileName =$profile_id.".".$ext;		
			$target_path="../profilepics/";
			
			$target_path=$target_path.basename($fileName);
			
			if(move_uploaded_file($_FILES['photo']['tmp_name'],$target_path))
				{
				$profile_photo_insert = "INSERT INTO tbl_profile_photo(imagename,profile_id) "."VALUES ('$fileName','$profile_id')";
				mysqli_query($conn,$profile_photo_insert) or die(mysqli_error($conn));
				}
		}	
}	

/* Code to Save Socio Attributes*/

function saveSocioReligiousAttributes($profile_id)
{
	include('conn.php');
	if($_POST['gothra']) $gothra = $_POST['gothra'];  else $gothra = '';
	if($_POST['rashi'])  $rashi = $_POST['rashi'];  else $rashi = '';
	if($_POST['nakshtra']) $nakshtra = $_POST['nakshtra'];  else $nakshtra = '';
	if($_POST['charan']) $charan = $_POST['charan'];  else $charan = '';
	if($_POST['nadi']) $nadi = $_POST['nadi'];  else $nadi = '';
	if($_POST['birthPlace']) $birthPlace = $_POST['birthPlace'];  else $birthPlace = '';
	if($_POST['birthTimeHours']) $birthTimeHours = $_POST['birthTimeHours'];  else $birthTimeHours = '';
	if($_POST['birthTimeMins']) $birthTimeMins = $_POST['birthTimeMins'];  else $birthTimeMins = '';
	if($_POST['birthTimeAMPM']) $birthTimeAMPM = $_POST['birthTimeAMPM'];  else $birthTimeAMPM = '';

	$socio_religious_attr_insert="INSERT INTO tbl_socio_religious_attr(profile_id,gothra,rashi,nakshtra,charan,nadi,gan,birth_place,birth_time,mangal) 
				values('$profile_id','$gothra','$rashi','$nakshtra','$charan','$nadi','$birthPlace','$birthTimeHours','$birthTimeMins','$birthTimeAMPM')";
	mysqli_query($conn,$socio_religious_attr_insert) or die(mysqli_error($conn)); 
}

/* Code to Save Physical Attributes*/
function savePhysicalAttributes($profile_id)
{
	include('conn.php');
	$heightFt = $_POST['heightFt'];
	$heightInch = $_POST['heightInch'];
	$bloodGroup = $_POST['bloodGroup'];
	$complexion = $_POST['complexion'];
	$physical_attr_insert="INSERT INTO tbl_physical_attr(profile_id,heightFt,heightInch,blood_group,complexion)
	 values('$profile_id','$heightFt','$heightInch','$bloodGroup','$complexion')";
	mysqli_query($conn,$physical_attr_insert) or die(mysqli_error($conn)); 
}

/* Code to Save Profile*/
function saveEductionAndProfessionalProfile($profile_id)
{
	include('conn.php');
	$education = $_POST['education'];
	$annualIncome = $_POST['annualIncome'];
	$occupation = $_POST['occupation'];
	$profile_insert="INSERT INTO tbl_profile(profile_id,education,annualIncome,occupation) 
	values('$profile_id','$education','$annualIncome','$occupation')";
	mysqli_query($conn,$profile_insert) or die(mysqli_error($conn)); 
}

/* Code to Save Family Details*/
function saveFamilyDetails($profile_id)
{
	include('conn.php');
	if($_POST['fatherName']) $fatherName = $_POST['fatherName'];  else $fatherName = '';
	if($_POST['fatherOccupation']) $fatherOccupation = $_POST['fatherOccupation'];  else $fatherOccupation = '';
	if($_POST['motherName']) $motherName = $_POST['motherName'];  else $motherName = '';
	if($_POST['motherOccupation']) $motherOccupation = $_POST['motherOccupation'];  else $motherOccupation = '';
	if($_POST['noofBrothers']) $noofBrothers = $_POST['noofBrothers']; else $noofBrothers = "0";
	if($_POST['noofSisters']) $noofSisters = $_POST['noofSisters'];  else $noofSisters = "0";
	if($_POST['mamaLastName']) $mamaLastName = $_POST['mamaLastName'];  else $mamaLastName = '';
	if($_POST['lastNameOfRelatives']) $lastNameOfRelatives = $_POST['lastNameOfRelatives'];  else $lastNameOfRelatives = '';
	
	if(isset($_POST['noofBrothersMarried']))
		$noofBrothersMarried	= $_POST['noofBrothersMarried'];
	else
		$noofBrothersMarried    = "0";	
	
	if(isset($_POST['noofSistersMarried']))
		$noofSistersMarried	= $_POST['noofSistersMarried'];
	else
		$noofSistersMarried    = "0"	;
		
	$familydetails_insert="INSERT INTO tbl_family_details(profile_id,father_name,father_occupation,mother_name,mother_occupation,
											noOfBrothers,noOfBrothersMarried,noOfSisters,noOfSistersMarried,mamaLastName,relativeLastNames)
									values('$profile_id','$fatherName','$fatherOccupation','$motherName','$motherOccupation',
								'$noofBrothers','$noofBrothersMarried','$noofSisters','$noofSistersMarried','$mamaLastName','$lastNameOfRelatives')";

	mysqli_query($conn,$familydetails_insert) or die(mysqli_error($conn)); 
}

/* Code to Save Partner Preference*/
function savePartnerPreference($profile_id)
{
	include('conn.php');
	$lookingFor 		 = $_POST['lookingFor'];
	$ageFrom			 = $_POST['ageFrom'];
	$ageTo		 		 = $_POST['ageTo'];
	$partnerCaste		 = $_POST['partnerCaste'];		
	@$partnerEducation   = $_POST['partnerEducation'];
	$education="";					
	if(is_array($partnerEducation)){
		while (list ($key, $val) = each ($partnerEducation)) {
		$education=$education.",".$val;
		}
	}
	$education= ltrim ($education, ',');	
	
	$partner_preference_insert ="insert into tbl_partner_preference(looking_for, age_from, age_to, partner_education, partner_caste, profile_id) 
								 values('$lookingFor', '$ageFrom', '$ageTo', '$education', '$partnerCaste', '$profile_id')";

	mysqli_query($conn,$partner_preference_insert) or die("Error while Inserting partner preference attributes data:"+mysqli_error($conn));
}

/* Code to Save Horoscope Photo*/
function saveHoroScopePhoto($profile_id)
{
	include('conn.php');
	$horoscope_insert="INSERT INTO tbl_horoscope_photo(imagename,profile_id) values('noimg.gif','$profile_id')";
    mysqli_query($conn,$horoscope_insert) or die(mysqli_error($conn)); 
}

/* Code to Save Identification Proof*/
function saveIdentificationProof($profile_id)
{
	include('conn.php');
	$idproof_insert="INSERT INTO tbl_profile_identification_proof(profile_id,imagename) values('$profile_id','noimg.gif')";
    mysqli_query($conn,$idproof_insert) or die(mysqli_error($conn)); 
}

?>

