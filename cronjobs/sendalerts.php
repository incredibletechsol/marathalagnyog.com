<?php
//error_reporting(0);
date_default_timezone_set('Asia/Calcutta');
include('conn.php');

//$log = new MyLogPHP('/home/incredib/public_html/marathalagnyog.com/cronjobs/cronlogs/logs.log');
$fetch_partner_preferences="select * from tbl_partner_preference pref,tbl_basic_profile tbp where tbp.profile_id=pref.profile_id and tbp.status='Y'";
	
$partner_preferences_rs= mysqli_query($conn,$fetch_partner_preferences);

$partner_preferences_numrows=mysqli_num_rows($partner_preferences_rs);
echo $partner_preferences_numrows;

if($partner_preferences_numrows > 0) 
	{
	while($partner_preferences_row = mysqli_fetch_array($partner_preferences_rs)) 
		{
			$lookingFor			= $partner_preferences_row[1];
			$ageFrom			= $partner_preferences_row[2];
			$ageTo				= $partner_preferences_row[3];
			$partnereducation   = $partner_preferences_row[4];
			$partnerCaste	    = $partner_preferences_row[5];
			$profileId          = $partner_preferences_row[6];

          	$fetch_basic_profile_age="select tbp.age,tbp.gender,tci.mobile_no,tbp.first_name,tbp.last_name,tbp.caste,tbp.marital_status from tbl_basic_profile tbp,tbl_contact_info tci where tbp.profile_id=tci.profile_id and tbp.profile_id='$profileId'";	

			$basic_profile_age_rs= mysqli_query($conn,$fetch_basic_profile_age);
			while($basic_profile_age_row = mysqli_fetch_array($basic_profile_age_rs)) 
				{
				$age           = $basic_profile_age_row[0];
				$gender        = $basic_profile_age_row[1];
		                $mobileNo      = $basic_profile_age_row[2];
		                $firstName     = $basic_profile_age_row[3]; 
		                $lastName      = $basic_profile_age_row[4]; 
		                $caste         = $basic_profile_age_row[5]; 
		                $maritalStatus = $basic_profile_age_row[6];  
				}
                        
			if($ageFrom == "" && $ageTo=="")
			{	
			if($gender == "Male")
				{
				$ageFrom 		 = $age-4;
				$ageTo     		 = $age-0;
				}
			else if($gender == "Female")
				{
				$ageFrom 		 = $age+4;
				$ageTo     		 = $age-0;	
				}	
			}
			
			
			
	
			
            if($lookingFor == "" || $partnerCaste == "")
            {
                if($gender == "Male")
				{	
			
			    	$fetch_basic_profile="SELECT distinct basicprofile.profile_id FROM tbl_basic_profile basicprofile, tbl_profile_photo photo, tbl_physical_attr phyattr, tbl_contact_info contactinfo,tbl_partner_preference pref WHERE basicprofile.profile_id = photo.profile_id AND basicprofile.profile_id = phyattr.profile_id AND basicprofile.profile_id = contactinfo.profile_id AND basicprofile.gender ='Female' and basicprofile.caste='$partnerCaste' and basicprofile.marital_status='$lookingFor' and basicprofile.status='Y' AND ( basicprofile.age BETWEEN  $ageFrom-2 AND  $ageFrom OR basicprofile.age BETWEEN  $ageFrom-1 AND   $ageFrom OR basicprofile.age BETWEEN  $ageFrom AND  $ageTo OR basicprofile.age BETWEEN   $ageFrom AND  $ageTo+1 OR basicprofile.age BETWEEN  $ageTo AND $ageTo+2)";	
				}
				else
				{
			
            		$fetch_basic_profile="SELECT distinct basicprofile.profile_id FROM tbl_basic_profile basicprofile, tbl_profile_photo photo, tbl_physical_attr phyattr, tbl_contact_info contactinfo,tbl_partner_preference pref WHERE basicprofile.profile_id = photo.profile_id AND basicprofile.profile_id = phyattr.profile_id AND basicprofile.profile_id = contactinfo.profile_id AND basicprofile.gender ='Male' and basicprofile.caste='$partnerCaste' AND basicprofile.profile_id = contactinfo.profile_id AND  basicprofile.caste='$caste' and basicprofile.marital_status='$lookingFor' and basicprofile.status='Y' AND ( basicprofile.age BETWEEN  $ageFrom-2 AND  $ageFrom OR basicprofile.age BETWEEN  $ageFrom-1 AND   $ageFrom OR basicprofile.age BETWEEN  $ageFrom AND  $ageTo OR basicprofile.age BETWEEN   $ageFrom AND  $ageTo+1 OR basicprofile.age BETWEEN  $ageTo AND $ageTo+2)";	
				}
            } 
			else
                       {
			if($partnerCaste !== "ALL")
			{
  			if($gender == "Male")
				{	
				
       				$fetch_basic_profile="SELECT distinct basicprofile.profile_id FROM tbl_basic_profile basicprofile, tbl_profile_photo photo, tbl_physical_attr phyattr, tbl_contact_info contactinfo,tbl_partner_preference pref WHERE basicprofile.profile_id = photo.profile_id AND basicprofile.profile_id = phyattr.profile_id AND basicprofile.profile_id = contactinfo.profile_id AND basicprofile.gender ='Female' and basicprofile.status='Y' AND basicprofile.marital_status='$lookingFor'  AND basicprofile.caste='$partnerCaste' AND( basicprofile.age BETWEEN  $ageFrom-2 AND  $ageFrom OR basicprofile.age BETWEEN  $ageFrom-1 AND   $ageFrom OR basicprofile.age BETWEEN  $ageFrom AND  $ageTo OR basicprofile.age BETWEEN   $ageFrom AND  $ageTo+1 OR basicprofile.age BETWEEN  $ageTo AND $ageTo+2)";	
				}
				else
				{
			
           			$fetch_basic_profile="SELECT distinct basicprofile.profile_id FROM tbl_basic_profile basicprofile, tbl_profile_photo photo, tbl_physical_attr phyattr, tbl_contact_info contactinfo,tbl_partner_preference pref WHERE basicprofile.profile_id = photo.profile_id AND basicprofile.profile_id = phyattr.profile_id AND basicprofile.profile_id = contactinfo.profile_id AND basicprofile.gender ='Male' and basicprofile.status='Y' AND basicprofile.marital_status='$lookingFor'  AND basicprofile.caste='$partnerCaste' AND( basicprofile.age BETWEEN  $ageFrom-2 AND  $ageFrom OR basicprofile.age BETWEEN  $ageFrom-1 AND   $ageFrom OR basicprofile.age BETWEEN  $ageFrom AND  $ageTo OR basicprofile.age BETWEEN   $ageFrom AND  $ageTo+1 OR basicprofile.age BETWEEN  $ageTo AND $ageTo+2)";	
				}
			}
			else
			{
		
                        // echo "Partner caste is not ALL<br>";
				if($gender == "Male")
				{
                                //echo "Checking for Female profiles...<br>";
				$fetch_basic_profile="SELECT distinct basicprofile.profile_id FROM tbl_basic_profile basicprofile, tbl_profile_photo photo, tbl_physical_attr phyattr, tbl_contact_info contactinfo,tbl_partner_preference pref WHERE basicprofile.profile_id = photo.profile_id AND basicprofile.profile_id = phyattr.profile_id AND basicprofile.profile_id = contactinfo.profile_id AND basicprofile.gender ='Female' and basicprofile.status='Y' AND basicprofile.marital_status='$lookingFor' AND basicprofile.age between '$ageFrom' AND '$ageTo' ";	
				}
				else
				{
			
                               // echo "Checking for Male profiles...<br>";
				$fetch_basic_profile="SELECT distinct basicprofile.profile_id FROM tbl_basic_profile basicprofile, tbl_profile_photo photo, tbl_physical_attr phyattr, tbl_contact_info contactinfo,tbl_partner_preference pref WHERE basicprofile.profile_id = photo.profile_id AND basicprofile.profile_id = phyattr.profile_id AND basicprofile.profile_id = contactinfo.profile_id AND basicprofile.gender ='Male' and basicprofile.status='Y' AND basicprofile.marital_status='$lookingFor'  AND basicprofile.age between '$ageFrom' AND '$ageTo' ";		
				}
			}
                  }     
		$basic_profile_rs= mysqli_query($conn,$fetch_basic_profile);
                $profileIds = "";	
                $i=0;

         	while($basic_profile_row = mysqli_fetch_array($basic_profile_rs)) 
			{
             
                        ++$i;
                                        
                        $matching_profile_id=$basic_profile_row[0];
                        
                        $check_for_existance="select * from tbl_send_profile_alerts where profile_id='$profileId' and matching_profile_id='$matching_profile_id' and marital_status='$lookingFor' and ageFrom='$ageFrom' and ageTo='$ageTo' and caste='$partnerCaste'";   

                        $check_existance_rs=mysqli_query($conn,$check_for_existance) or die(mysqli_error($conn));

                        $existanceNumRows=mysqli_num_rows($check_existance_rs);
                        
                        $dates=date('Y-m-d');
                        $status='Waiting';
                       
                        if($existanceNumRows == "0")
                              {
                               $printmessage="Sending Message to:".$firstName."&nbsp;".$lastName." On Mobile No. ".$mobileNo;
                  
                               mysqli_query($conn,"INSERT INTO tbl_send_profile_alerts(profile_id,matching_profile_id,marital_status,ageFrom,ageTo,caste,date,status) values('$profileId','$matching_profile_id','$lookingFor','$ageFrom','$ageTo','$partnerCaste','$dates','$status')");

                              } 
                                      
                        }
		    }
	             
	}
else
	{
	$lookingFor   		 = "";
	$partnereducation	 = "";
	$partnerCaste		 = "";
	}	

fetchAlertDetails();

function fetchAlertDetails()
{
include('conn.php');
//include('MyLogPHP.class.php');
$dates=date('Y-m-d');
$fetch_data="SELECT profile_id,matching_profile_id,count(*) FROM `tbl_send_profile_alerts` where date='$dates' and status='Waiting' group by profile_id";

$fetch_data_rs=mysqli_query($conn,$fetch_data) or die(mysqli_error($conn));


while($rows=mysqli_fetch_array($fetch_data_rs))
	{
	//echo $rows[0]."\t".$rows[1]."\t".$rows[2]."<br>";
	$count=$rows[2];
	    if($count > 1)
		{
		   $mess="Matching Profile Id's:";	
		   $mobileNo=getContactDetails($rows[0]);
		   $profileIds=getAlertDetails($rows[0]);
		   $mess=$mess.$profileIds; 
		   //echo "For ".$rows[0]."\t".$mess."<br>";
		   sendAlertDetails($mobileNo,$mess);
		}
	     else
	        {
	          $mess="Matching Profile Id's:";
	          $mobileNo=getContactDetails($rows[0]);
                  $mess=$mess.$rows[1];
		  //echo "For ".$rows[0]."\t".$mess."<br>";
		  sendAlertDetails($mobileNo,$mess);
		   mysqli_query($conn,"UPDATE tbl_send_profile_alerts SET status='Sent' where profile_id='$rows[0]'") or die(mysqli_error($conn));
		}
	$mess="";	
	}	
}


function getContactDetails($profile_id)
{
include('conn.php');
$fetch_contact_details="select mobile_no from tbl_contact_info where profile_id='$profile_id'";
$fetch_contact_details_rs=mysqli_query($conn,$fetch_contact_details) or die(mysqli_error($conn));

$contactrows=mysqli_fetch_array($fetch_contact_details_rs);

$mobileNo=$contactrows[0];

return $mobileNo;

}

function getAlertDetails($profile_id)
{
include('conn.php');
//echo "Profile Id is::::".$profile_id."<br>";
$fetch_alert_details="select matching_profile_id,profile_id from tbl_send_profile_alerts where profile_id='$profile_id'";
$fetch_alert_details_rs=mysqli_query($conn,$fetch_alert_details) or die(mysqli_error($conn));

$profileIds="";

$i=0;
while($detailsrow=mysqli_fetch_array($fetch_alert_details_rs))
{
$profileId=$detailsrow[1];
++$i;
 if($i==1) 
  $profileIds=$detailsrow[0];  
else 
  $profileIds=$profileIds.",".$detailsrow[0];
  
   mysqli_query($conn,"UPDATE tbl_send_profile_alerts SET status='Sent' where profile_id='$profileId'") or die(mysqli_error($conn));
}

//echo $profileIds;
return $profileIds;
}



function sendAlertDetails($mobno,$mess)
{
echo $mobno;
echo $mess;
	//$log = new MyLogPHP('/home/incredib/public_html/marathalagnyog.com/cronjobs/cronlogs/logs.log');
    	$username="maratha";
	$api_password="maratha@lagnyog";
	$sender="LGNYOG";
	$domain="http://cannyinfotech.in/api/mt/SendSMS?";
	$mobile=$mobno;
	$message=$mess." Regards MarathaLagnYogTeam Web:www.marathalagnyog.com ";
	
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
	//$log->info("");
}
?>