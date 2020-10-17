<?php
error_reporting(0);
//$log = new MyLogPHP('/home/incredib/public_html/marathalagnyog.com/cronjobs/cronlogs/logs.log');

include('conn.php');
date_default_timezone_set("Asia/Kolkata");
$fetch_expiring_profiles="select profile_id,first_name,last_name,expiry_date from tbl_basic_profile where CURDATE()=DATE_SUB(expiry_date,INTERVAL +1 MONTH)";

$fetch_expiring_rs= mysqli_query($conn,$fetch_expiring_profiles) or die(mysqli_error($conn));

while($fetch_expiring_row = mysqli_fetch_array($fetch_expiring_rs)) 
		{
		$profile_id =$fetch_expiring_row[0]; 
		$name=$fetch_expiring_row[1]." ".$fetch_expiring_row[2];
        $expiryDate = $fetch_expiring_row[3];
        sendExpiryNotice($profile_id,$name,$expiryDate); 
		}

function  sendExpiryNotice($profile_id,$name,$expiryDate)
{
//$log = new MyLogPHP('/home/incredib/public_html/marathalagnyog.com/cronjobs/cronlogs/logs.log');

include('conn.php');

$fetch_contact_info="select mobile_no,email_Id from tbl_contact_info where profile_id='$profile_id'";

$fetch_contact_info_rs=mysqli_query($conn,$fetch_contact_info) or die(mysqli_error($conn));

while($fetch_contact_row = mysqli_fetch_array($fetch_contact_info_rs)) 
		{
		$mobileNo=$fetch_contact_row[0]; 
		$emailId=$fetch_contact_row[1]; 
    //    $log->info("Sending Expiry Notice to ::".$profile_id." Name :: ".$name." On ".$mobileNo." Profile Expiry Date is :: ".$expiryDate);
        echo "Sending Expiry Notice to ::".$profile_id." Name :: ".$name." On ".$mobileNo." Profile Expiry Date is :: ".$expiryDate;
	    sendExpirySMS($mobileNo,$expiryDate);
		}

}

function  sendExpirySMS($mobno,$expiryDate)
{
	//$log = new MyLogPHP('/home/incredib/public_html/marathalagnyog.com/cronjobs/cronlogs/logs.log');
    $username="maratha";
	$api_password="maratha@lagnyog";
	$sender="LGNYOG";
	$domain="http://cannyinfotech.in/api/mt/SendSMS?";
	$mobile=$mobno;
	$message="Your account is expiring on ".$expiryDate." Pay Rs.500 to continue our service.Regards MarathaLagnYog Team Web:www.marathalagnyog.com ";
	
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