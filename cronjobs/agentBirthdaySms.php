<?php
error_reporting(0);
date_default_timezone_set('Asia/Kolkata'); 
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
include('conn.php');
								
$query="SELECT agent.first_name,agent.birth_date,agent.mobile_no,agent.emailId from tbl_agent_profile agent";
				
$rs=mysqli_query($conn,$query);

$name="";
$mobno="";
$emailid="";
$birthdate="";


while($row=mysqli_fetch_array($rs))
	{
	$name=$row[0];
	$mobno=$row[2];	
	$emailid=$row[3];
        $birthdate=$row[1];
        
        $time = strtotime($birthdate);
        if(date('m-d') == date('m-d', $time))  
          {
          sendAgentBirthSms($name,$mobno);
          sendAgentBirthEmail($name,$emailid,$headers);
          }
	}


function sendAgentBirthEmail($name,$emailid,$headers) 
{
date_default_timezone_set('Asia/Kolkata'); 
$nowdd= gmdate("d" , time() + 19800);
$nowmm= gmdate("m" , time() + 19800);
$nowdd2=$nowdd+40;


if( $nowdd == 1 || $nowdd == 3  || $nowdd == 5  || $nowdd == 7  || $nowdd == 9 )  
	{ 
	$mess="<b>Hi ".$name.",</b><BR><BR><h3>Happy Birthday!!! Wish you a many many happy returns of the day.May God bless you with health, wealth and prosperity in your life. </h3><BR><BR>"."<br><img src='http://vivahyog.in/birth/1.jpg'><br><br>"."<b>Thanks & Regards <BR>Vivahyog Team<br>Web:www.vivahyog.in</b>";
	}
else if ( $nowdd == 2 || $nowdd == 4|| $nowdd == 6 || $nowdd == 8  || $nowdd == 10 ) 
	{
   	$mess="<b>Hi ".$name.",</b><BR><BR><h3>Happy Birthday!!! Wish you a many many happy returns of the day.May God bless you with health, wealth and prosperity in your life. </h3><BR><BR>"."<br><img src='http://vivahyog.in/birth/2.jpg'><br><br>"."<b>Thanks & Regards <BR>Vivahyog Team<br>Web:www.vivahyog.in</b>";
  	}
else if ( $nowdd == 13 || $nowdd == 15 || $nowdd == 17 || $nowdd == 19 || $nowdd == 21 || $nowdd == 23 || $nowdd == 25 || $nowdd == 27 || $nowdd == 29 || $nowdd == 31) 
	{
	$mess="<b>Hi ".$name.",</b><BR><BR><h3>Happy Birthday!!! Wish you a many many happy returns of the day.May God bless you with health, wealth and prosperity in your life. </h3><BR><BR>"."<br><img src='http://vivahyog.in/birth/3.jpg'><br><br>"."<b>Thanks & Regards <BR>Vivahyog Team<br>Web:www.vivahyog.in</b>";
	}
else if ( $nowdd == 14 || $nowdd == 16 || $nowdd == 18 || $nowdd == 20 || $nowdd == 22 || $nowdd == 24 || $nowdd == 26 || $nowdd == 28 ) 
	{
	 $mess="<b>Hi ".$name.",</b><BR><BR><h3>Happy Birthday!!! Wish you a many many happy returns of the day.May God bless you with health, wealth and prosperity in your life. </h3><BR><BR>"."<br><img src='http://vivahyog.in/birth/5.jpg'><br><br>"."<b>Thanks & Regards <BR>Vivahyog Team<br>Web:www.vivahyog.in</b>";
	  }
else 
	{
   $mess="Hi ".$name.",<BR><BR><h3>Happy Birthday!!! Wish you a many many happy returns of the day.May God bless you with health, wealth and prosperity in your life. </h3><BR><BR>"."<br><img src='http://vivahyog.in/birth/5.jpg'><br><br>"."<b>Thanks & Regards <BR>Vivahyog Team<br>Web:www.vivahyog.in</b>";
   	}

$sub="Happy Birthday";
$r="-f"."dkkkpmba@lin4.plreseller.com";
mail($emailid,$sub,$mess,$headers,$r);
}



function sendAgentBirthSms($name,$mobno)
{
    $username="maratha";
	$api_password="maratha@lagnyog";
	$sender="LGNYOG";
	$domain="http://cannyinfotech.in/api/mt/SendSMS?";
	$mobile=$mobno;
	$message="Hi ".$name." Wish you a many many happy returns of the day.Happy Birthday.- Regards MarathaLagnYog Team Web:www.marathalagnyog.com";
	
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

?>	