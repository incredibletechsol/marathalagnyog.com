<html>
<head>

</head>
<body>

<?php
include('MyLogPHP.class.php');
error_reporting(0);

require_once("excelwriter.class.php");

/*Function for displaying all the Profiles */

function AllProfiles()
	{
    include("../conn.php");
	unlink('Reports/XLS/allprofiles.xls');
	$excel=new ExcelWriter("Reports/XLS/allprofiles.xls");
	if($excel==false)	
	echo $excel->error;
	
	$basicProfileData=array("Profile Id","First Name","Last Name","Gender","Birth Date","Age","Marital Status","Religion","Caste","Sub Caste","When Created","Last Updated","Ip Address","Status","Album Status","When Activated","Mobile No","Alternate Mobile No","Email Id","Address","Disrict","Taluka");
	$excel->writeLine($basicProfileData);
	
	$qry=mysqli_query($conn,"SELECT tbp.profile_id,tpp.imagename,tbp.first_name,tbp.last_name,tbp.gender,tbp.birth_date,tbp.marital_status,tbp.religion,tbp.caste,tbp.sub_caste,tbp.create_datetime,tbp.lastUpdated_datetime,tbp.ip_address,tbp.status,tbp.album_status,tbp.age,tbp.activation_dateTime,tci.mobile_no,tci.alternate_mobile_no,tci.email_Id,tci.address,tci.district,tci.city 
		          FROM tbl_basic_profile tbp,tbl_contact_info tci,tbl_profile_photo tpp where tbp.profile_id=tci.profile_id and tbp.profile_id=tpp.profile_id") 
                        or die("Query Not Executed");
	if($qry!=false)
    		{
    			
    			while($res=mysqli_fetch_array($qry))
    			{
                          
                $basicProfileData=array($res['profile_id'],$res['first_name'],$res['last_name'],$res['gender'],$res['birth_date'],$res['age'],$res['marital_status'],$res['religion'],$res['caste'],$res['sub_caste'],$res['create_datetime'],$res['lastUpdated_datetime'],$res['ip_address'],$res['status'],$res['album_status'],$res['activation_dateTime'],$res['mobile_no'],$res['alternate_mobile_no'],$res['email_Id'],$res['address'],$res['district'],$res['city']);
    		    $excel->writeLine($basicProfileData);
    				
    			}
    		}
        }

/*Function for displaying all the Deactivated Profiles */

function AllDeactivatedProfiles()
	{
	include("../conn.php");
 	unlink('Reports/XLS/deactprofiles.xls');
	$excel=new ExcelWriter("Reports/XLS/deactprofiles.xls");
	if($excel==false)	
	echo $excel->error;
	
	$basicProfileData=array("Profile Id","First Name","Last Name","Gender","Birth Date","Age","Marital Status","Religion","Caste","Sub Caste","When Created","Last Updated","Ip Address","Status","Album Status","When Activated","Mobile No","Alternate Mobile No","Email Id","Address","Disrict","Taluka");
	$excel->writeLine($basicProfileData);
	
        $query="SELECT tbp.profile_id,tpp.imagename,tbp.first_name,tbp.last_name,tbp.gender,tbp.birth_date,tbp.marital_status,tbp.religion,tbp.caste,tbp.sub_caste,tbp.create_datetime,tbp.lastUpdated_datetime,tbp.ip_address,tbp.status,tbp.album_status,tbp.age,tbp.activation_dateTime,tci.mobile_no,tci.alternate_mobile_no,tci.email_Id,tci.address,tci.district,tci.city 
		          FROM tbl_basic_profile tbp,tbl_contact_info tci,tbl_profile_photo tpp where tbp.profile_id=tci.profile_id and tbp.profile_id=tpp.profile_id and tbp.status='N'";



	$qry=mysqli_query($conn,$query) or die("Query Not Executed");

		if($qry!=false)
		{
			
			while($res=mysqli_fetch_array($qry))
			{
                      
$basicProfileData=array($res['profile_id'],$res['first_name'],$res['last_name'],$res['gender'],$res['birth_date'],$res['age'],$res['marital_status'],$res['religion'],$res['caste'],$res['sub_caste'],$res['create_datetime'],$res['lastUpdated_datetime'],$res['ip_address'],$res['status'],$res['album_status'],$res['activation_dateTime'],$res['mobile_no'],$res['alternate_mobile_no'],$res['email_Id'],$res['address'],$res['district'],$res['city']);
		                $excel->writeLine($basicProfileData);
				
			}
		}
        }



/*Function for displaying all the Agent Profiles */

function AllAgents()
	{
	include("../conn.php");
	unlink('Reports/XLS/allagents.xls');
	$excel=new ExcelWriter("Reports/XLS/allagents.xls");
	if($excel==false)	
	echo $excel->error;
	
	$agentProfileData=array("Agent Id","First Name","Last Name","Gender","Birth Date","Marital Status","Anniversary Date","Mobile No","Alternate Mobile No","Email Id","Address","Disrict","Taluka","Role");
	$excel->writeLine($agentProfileData);
	
	$qry=mysqli_query($conn,"SELECT * from tbl_agent_profile") 
                        or die("Query Not Executed");

		if($qry!=false)
		{
			
			while($res=mysqli_fetch_array($qry))
			{
                   $agentProfileData=array($res['agent_id'],$res['first_name'],$res['last_name'],$res['gender'],$res['birth_date'],$res['marital_status'],$res['annv_date'],$res['mobile_no'],$res['alternate_mobile_no'],$res['emailId'],$res['address'],$res['district'],$res['taluka'],$res['role']);
		        $excel->writeLine($agentProfileData);
				
			}
		}
        }


/*Function for displaying all the Profiles Registered between a Specific date limit */

function profilesRegisteredBetweenDateLimit($from,$to)
	{
	include("../conn.php");    
    $log = new MyLogPHP('adminlogs/logs.log');
	unlink('Reports/XLS/regdateprofiles.xls');
	$excel=new ExcelWriter("Reports/XLS/regdateprofiles.xls");
	if($excel==false)	
	echo $excel->error;
	
	$basicProfileData=array("Profile Id","First Name","Last Name","Gender","Birth Date","Age","Marital Status","Religion","Caste","Sub Caste","When Created","Last Updated","Ip Address","Status","Album Status","When Activated","Mobile No","Alternate Mobile No","Email Id","Address","Disrict","Taluka");
	$excel->writeLine($basicProfileData);

	$query="SELECT tbp.profile_id,tpp.imagename,tbp.first_name,tbp.last_name,tbp.gender,tbp.birth_date,tbp.marital_status,tbp.religion,tbp.caste,tbp.sub_caste,tbp.create_datetime,tbp.lastUpdated_datetime,tbp.ip_address,tbp.status,tbp.album_status,tbp.age,tbp.activation_dateTime,tci.mobile_no,tci.alternate_mobile_no,tci.email_Id,tci.address,tci.district,tci.city 
		          FROM tbl_basic_profile tbp,tbl_contact_info tci,tbl_profile_photo tpp where tbp.profile_id=tci.profile_id and tbp.profile_id=tpp.profile_id and DATE(tbp.create_datetime) between '$from' and '$to'";

        $log->info("Profiles Registered between a Specific date limit :: ".$query);

	    $qry=mysqli_query($conn,$query) 
                        or die("Query Not Executed");

		if($qry!=false)
		{
			
			while($res=mysqli_fetch_array($qry))
			{
                      
$basicProfileData=array($res['profile_id'],$res['first_name'],$res['last_name'],$res['gender'],$res['birth_date'],$res['age'],$res['marital_status'],$res['religion'],$res['caste'],$res['sub_caste'],$res['create_datetime'],$res['lastUpdated_datetime'],$res['ip_address'],$res['status'],$res['album_status'],$res['activation_dateTime'],$res['mobile_no'],$res['alternate_mobile_no'],$res['email_Id'],$res['address'],$res['district'],$res['city']);
		                $excel->writeLine($basicProfileData);
				
			}
		}
        }


/*Function for displaying all the Profiles Activated between a Specific date limit */

function profilesActivatedBetweenDateLimit($from,$to)
	{
	include("../conn.php"); 
	unlink('Reports/XLS/actdateprofiles.xls');
	$excel=new ExcelWriter("Reports/XLS/actdateprofiles.xls");
	if($excel==false)	
	echo $excel->error;
	
	$basicProfileData=array("Profile Id","First Name","Last Name","Gender","Birth Date","Age","Marital Status","Religion","Caste","Sub Caste","When Created","Last Updated","Ip Address","Status","Album Status","When Activated","Mobile No","Alternate Mobile No","Email Id","Address","Disrict","Taluka");
	$excel->writeLine($basicProfileData);

	$query="SELECT tbp.profile_id,tpp.imagename,tbp.first_name,tbp.last_name,tbp.gender,tbp.birth_date,tbp.marital_status,tbp.religion,tbp.caste,tbp.sub_caste,tbp.create_datetime,tbp.lastUpdated_datetime,tbp.ip_address,tbp.status,tbp.album_status,tbp.age,tbp.activation_dateTime,tci.mobile_no,tci.alternate_mobile_no,tci.email_Id,tci.address,tci.district,tci.city 
		          FROM tbl_basic_profile tbp,tbl_contact_info tci,tbl_profile_photo tpp where tbp.profile_id=tci.profile_id and tbp.profile_id=tpp.profile_id and DATE(tbp.activation_dateTime) between '$from' and '$to'";

	$qry=mysqli_query($conn,$query) 
                        or die("Query Not Executed");

		if($qry!=false)
		{
			
			while($res=mysqli_fetch_array($qry))
			{
                      
$basicProfileData=array($res['profile_id'],$res['first_name'],$res['last_name'],$res['gender'],$res['birth_date'],$res['age'],$res['marital_status'],$res['religion'],$res['caste'],$res['sub_caste'],$res['create_datetime'],$res['lastUpdated_datetime'],$res['ip_address'],$res['status'],$res['album_status'],$res['activation_dateTime'],$res['mobile_no'],$res['alternate_mobile_no'],$res['email_Id'],$res['address'],$res['district'],$res['city']);
		                $excel->writeLine($basicProfileData);
				
			}
		}
        }

/*Function for displaying List Of All Profiles Registered by an Agent */

function agentProfiles($agentId)
	{
	include("../conn.php");
	unlink('Reports/XLS/agentprofiles.xls');
	$excel=new ExcelWriter("Reports/XLS/agentprofiles.xls");
	if($excel==false)	
	echo $excel->error;
	
	$basicProfileData=array("Profile Id","First Name","Last Name","Gender","Birth Date","Age","Marital Status","Religion","Caste","Sub Caste","When Created","Last Updated","Ip Address","Status","Album Status","When Activated","Mobile No","Alternate Mobile No","Email Id","Address","Disrict","Taluka");
	$excel->writeLine($basicProfileData);
	
	$qry=mysqli_query($conn,"SELECT tbp.profile_id,tbp.first_name,tbp.last_name,tbp.gender,tbp.birth_date,tbp.marital_status,tbp.religion,tbp.caste,tbp.sub_caste,tbp.create_datetime,tbp.lastUpdated_datetime,tbp.ip_address,tbp.status,tbp.album_status,tbp.age,tbp.activation_dateTime,tci.mobile_no,tci.alternate_mobile_no,tci.email_Id,tci.address,tci.district,tci.city 
		          FROM tbl_basic_profile tbp,tbl_contact_info tci,tbl_agent_profiles tap,tbl_agent_profile tap1 where tbp.profile_id=tci.profile_id and tbp.profile_id=tap.profile_id and tap.agent_id=tap1.agent_id and tap1.agent_id='$agentId'") 
                        or die("Query Not Executed");

		if($qry!=false)
		{
			
			while($res=mysqli_fetch_array($qry))
			{
                      
$basicProfileData=array($res['profile_id'],$res['first_name'],$res['last_name'],$res['gender'],$res['birth_date'],$res['age'],$res['marital_status'],$res['religion'],$res['caste'],$res['sub_caste'],$res['create_datetime'],$res['lastUpdated_datetime'],$res['ip_address'],$res['status'],$res['album_status'],$res['activation_dateTime'],$res['mobile_no'],$res['alternate_mobile_no'],$res['email_Id'],$res['address'],$res['district'],$res['city']);
		                $excel->writeLine($basicProfileData);
				
			}
		}
        }

/*Function for displaying List Of All Profiles Registered by an Agent between Specific date limit */

function agentProfilesRegDate($agentId,$from,$to)
	{
	    include("../conn.php");
	unlink('Reports/XLS/agentprofiles.xls');
	$excel=new ExcelWriter("Reports/XLS/agentprofiles.xls");
	if($excel==false)	
	echo $excel->error;
	
	$basicProfileData=array("Profile Id","First Name","Last Name","Gender","Birth Date","Age","Marital Status","Religion","Caste","Sub Caste","When Created","Last Updated","Ip Address","Status","Album Status","When Activated","Mobile No","Alternate Mobile No","Email Id","Address","Disrict","Taluka");
	$excel->writeLine($basicProfileData);
	
	$qry=mysqli_query($conn,"SELECT tbp.profile_id,tbp.first_name,tbp.last_name,tbp.gender,tbp.birth_date,tbp.marital_status,tbp.religion,tbp.caste,tbp.sub_caste,tbp.create_datetime,tbp.lastUpdated_datetime,tbp.ip_address,tbp.status,tbp.album_status,tbp.age,tbp.activation_dateTime,tci.mobile_no,tci.alternate_mobile_no,tci.email_Id,tci.address,tci.district,tci.city 
		          FROM tbl_basic_profile tbp,tbl_contact_info tci,tbl_agent_profiles tap,tbl_agent_profile tap1 where tbp.profile_id=tci.profile_id and tbp.profile_id=tap.profile_id and tap.agent_id=tap1.agent_id and tap1.agent_id='$agentId' and DATE(tap.create_date) between '$from' and '$to'") 
                        or die("Query Not Executed");

		if($qry!=false)
		{
			
			while($res=mysqli_fetch_array($qry))
			{
                      
$basicProfileData=array($res['profile_id'],$res['first_name'],$res['last_name'],$res['gender'],$res['birth_date'],$res['age'],$res['marital_status'],$res['religion'],$res['caste'],$res['sub_caste'],$res['create_datetime'],$res['lastUpdated_datetime'],$res['ip_address'],$res['status'],$res['album_status'],$res['activation_dateTime'],$res['mobile_no'],$res['alternate_mobile_no'],$res['email_Id'],$res['address'],$res['district'],$res['city']);
		                $excel->writeLine($basicProfileData);
				
			}
		}
        }

/* Function For displaying all Profiles whom I Contacted*/

function whomIContacted($profileId,$from,$to)
{
    include("../conn.php");
    unlink('Reports/XLS/whomIContacted.xls');
	$excel=new ExcelWriter("Reports/XLS/whomIContacted.xls");
	if($excel==false)	
	echo $excel->error;
	
	$basicProfileData=array("Profile Id","First Name","Last Name","Gender","Birth Date","Age","Marital Status","Religion","Caste","Sub Caste","When Created","Last Updated","Ip Address","Status","Album Status","When Activated","Mobile No","Alternate Mobile No","Email Id","Address","Disrict","Taluka");
	$excel->writeLine($basicProfileData);
	
	include('../conn.php');

    $fetch_all_contacted_profiles="select to_profile_id from tbl_request_contact_details where from_profile_id='$profileId' and DATE(when_contacted) between '$from' and '$to'";
    
    $all_contacted_rs=mysqli_query($conn,$fetch_all_contacted_profiles) or die(mysqli_error($conn));
    
    while($all_contacted_row =  mysqli_fetch_array($all_contacted_rs)) 
    {
    $to_profile_id=$all_contacted_row[0];
    
    $fetch_basic_profile="select tbp.profile_id,tpp.imagename,tbp.first_name,tbp.last_name,tbp.gender,tbp.birth_date,tbp.marital_status,tbp.religion,tbp.caste,tbp.sub_caste,tbp.create_datetime,tbp.lastUpdated_datetime,tbp.ip_address,tbp.status,tbp.album_status,tbp.age,tbp.activation_dateTime,tci.mobile_no,tci.alternate_mobile_no,tci.email_Id,tci.address,tci.district,tci.city 
    		          FROM tbl_basic_profile tbp,tbl_contact_info tci,tbl_profile_photo tpp where tbp.profile_id=tci.profile_id and tbp.profile_id=tpp.profile_id and tbp.profile_id='$to_profile_id' order by tbp.profile_id desc";	
    
    $basic_profile_rs= mysqli_query($conn,$$conn,fetch_basic_profile);
    
    	while($res = mysqli_fetch_array($basic_profile_rs)) 
    	{
    	$basicProfileData=array($res['profile_id'],$res['first_name'],$res['last_name'],$res['gender'],$res['birth_date'],$res['age'],$res['marital_status'],$res['religion'],$res['caste'],$res['sub_caste'],$res['create_datetime'],$res['lastUpdated_datetime'],$res['ip_address'],$res['status'],$res['album_status'],$res['activation_dateTime'],$res['mobile_no'],$res['alternate_mobile_no'],$res['email_Id'],$res['address'],$res['district'],$res['city']);
    	$excel->writeLine($basicProfileData);
    	}
    }

}


/* Function For displaying all Profiles Who Contacted Me */

function whoContactedMe($profileId,$from,$to)
{
    include("../conn.php");
    unlink('Reports/XLS/whoContactedMe.xls');
	$excel=new ExcelWriter("Reports/XLS/whoContactedMe.xls");
	if($excel==false)	
	echo $excel->error;
	
	$basicProfileData=array("Profile Id","First Name","Last Name","Gender","Birth Date","Age","Marital Status","Religion","Caste","Sub Caste","When Created","Last Updated","Ip Address","Status","Album Status","When Activated","Mobile No","Alternate Mobile No","Email Id","Address","Disrict","Taluka");
	$excel->writeLine($basicProfileData);
	
	include('../conn.php');

    $fetch_all_contacted_profiles="select from_profile_id from tbl_request_contact_details where to_profile_id='$profileId' and DATE(when_contacted) between '$from' and '$to'";
    
    $all_contacted_rs=mysqli_query($conn,$fetch_all_contacted_profiles) or die(mysqli_error($conn));
    
    while($all_contacted_row =  mysqli_fetch_array($all_contacted_rs)) 
    {
    $to_profile_id=$all_contacted_row[0];
    
    $fetch_basic_profile="select tbp.profile_id,tpp.imagename,tbp.first_name,tbp.last_name,tbp.gender,tbp.birth_date,tbp.marital_status,tbp.religion,tbp.caste,tbp.sub_caste,tbp.create_datetime,tbp.lastUpdated_datetime,tbp.ip_address,tbp.status,tbp.album_status,tbp.age,tbp.activation_dateTime,tci.mobile_no,tci.alternate_mobile_no,tci.email_Id,tci.address,tci.district,tci.city 
    		          FROM tbl_basic_profile tbp,tbl_contact_info tci,tbl_profile_photo tpp where tbp.profile_id=tci.profile_id and tbp.profile_id=tpp.profile_id and tbp.profile_id='$to_profile_id' order by tbp.profile_id desc";	
    
    $basic_profile_rs= mysqli_query($conn,$fetch_basic_profile);
    
    	while($res = mysqli_fetch_array($basic_profile_rs)) 
    	{
    	$basicProfileData=array($res['profile_id'],$res['first_name'],$res['last_name'],$res['gender'],$res['birth_date'],$res['age'],$res['marital_status'],$res['religion'],$res['caste'],$res['sub_caste'],$res['create_datetime'],$res['lastUpdated_datetime'],$res['ip_address'],$res['status'],$res['album_status'],$res['activation_dateTime'],$res['mobile_no'],$res['alternate_mobile_no'],$res['email_Id'],$res['address'],$res['district'],$res['city']);
    	$excel->writeLine($basicProfileData);
    	}
    }

}


/*Function for displaying all the Profiles which are Currently Expiring */

function CurrentlyExpiringProfiles()
	{
	    include("../conn.php");
	unlink('Reports/XLS/curexpprofiles.xls');
	$excel=new ExcelWriter("Reports/XLS/curexpprofiles.xls");
	if($excel==false)	
	echo $excel->error;
	
	$basicProfileData=array("Profile Id","First Name","Last Name","Gender","Birth Date","Age","Marital Status","Religion","Caste","Sub Caste","When Created","Last Updated","Ip Address","Status","Album Status","When Activated","Mobile No","Alternate Mobile No","Email Id","Address","Disrict","Taluka");
	$excel->writeLine($basicProfileData);
	
	$qry=mysqli_query($conn,"SELECT tbp.profile_id,tpp.imagename,tbp.first_name,tbp.last_name,tbp.gender,tbp.birth_date,tbp.marital_status,tbp.religion,tbp.caste,tbp.sub_caste,tbp.create_datetime,tbp.lastUpdated_datetime,tbp.ip_address,tbp.status,tbp.album_status,tbp.age,tbp.activation_dateTime,tci.mobile_no,tci.alternate_mobile_no,tci.email_Id,tci.address,tci.district,tci.city 
		          FROM tbl_basic_profile tbp,tbl_contact_info tci,tbl_profile_photo tpp where tbp.profile_id=tci.profile_id and tbp.profile_id=tpp.profile_id and CURDATE()=DATE_SUB(tbp.expiry_date,INTERVAL +1 MONTH)") 
                        or die("Query Not Executed");

		if($qry!=false)
		{
			
			while($res=mysqli_fetch_array($qry))
			{
                      
$basicProfileData=array($res['profile_id'],$res['first_name'],$res['last_name'],$res['gender'],$res['birth_date'],$res['age'],$res['marital_status'],$res['religion'],$res['caste'],$res['sub_caste'],$res['create_datetime'],$res['lastUpdated_datetime'],$res['ip_address'],$res['status'],$res['album_status'],$res['activation_dateTime'],$res['mobile_no'],$res['alternate_mobile_no'],$res['email_Id'],$res['address'],$res['district'],$res['city']);
		                $excel->writeLine($basicProfileData);
				
			}
		}
        }

/*Function for displaying all the Profiles which are Already Expired */

function AlreadyExpiredProfiles()
	{
	    include("../conn.php");
	unlink('Reports/XLS/alreadyexpprofiles.xls');
	$excel=new ExcelWriter("Reports/XLS/alreadyexpprofiles.xls");
	if($excel==false)	
	echo $excel->error;
	
	$basicProfileData=array("Profile Id","First Name","Last Name","Gender","Birth Date","Age","Marital Status","Religion","Caste","Sub Caste","When Created","Last Updated","Ip Address","Status","Album Status","When Activated","Mobile No","Alternate Mobile No","Email Id","Address","Disrict","Taluka");
	$excel->writeLine($basicProfileData);
	
	$qry=mysqli_query($conn,"SELECT tbp.profile_id,tpp.imagename,tbp.first_name,tbp.last_name,tbp.gender,tbp.birth_date,tbp.marital_status,tbp.religion,tbp.caste,tbp.sub_caste,tbp.create_datetime,tbp.lastUpdated_datetime,tbp.ip_address,tbp.status,tbp.album_status,tbp.age,tbp.activation_dateTime,tci.mobile_no,tci.alternate_mobile_no,tci.email_Id,tci.address,tci.district,tci.city 
		          FROM tbl_basic_profile tbp,tbl_contact_info tci,tbl_profile_photo tpp where tbp.profile_id=tci.profile_id and tbp.profile_id=tpp.profile_id and tbp.status='E'") 
                        or die("Query Not Executed");

		if($qry!=false)
		{
			
			while($res=mysqli_fetch_array($qry))
			{
                      
$basicProfileData=array($res['profile_id'],$res['first_name'],$res['last_name'],$res['gender'],$res['birth_date'],$res['age'],$res['marital_status'],$res['religion'],$res['caste'],$res['sub_caste'],$res['create_datetime'],$res['lastUpdated_datetime'],$res['ip_address'],$res['status'],$res['album_status'],$res['activation_dateTime'],$res['mobile_no'],$res['alternate_mobile_no'],$res['email_Id'],$res['address'],$res['district'],$res['city']);
		                $excel->writeLine($basicProfileData);
				
			}
		}
        }

/*Function for displaying all the Profiles Expired between a Specific date limit */

function profilesExpiredBetweenDateLimit($from,$to)
	{
	    include("../conn.php");
        $log = new MyLogPHP('adminlogs/logs.log');
	unlink('Reports/XLS/expirydatelimits.xls');
	$excel=new ExcelWriter("Reports/XLS/expirydatelimits.xls");
	if($excel==false)	
	echo $excel->error;
	
	$basicProfileData=array("Profile Id","First Name","Last Name","Gender","Birth Date","Age","Marital Status","Religion","Caste","Sub Caste","When Created","Last Updated","Ip Address","Status","Album Status","When Activated","Mobile No","Alternate Mobile No","Email Id","Address","Disrict","Taluka");
	$excel->writeLine($basicProfileData);

	$query="SELECT tbp.profile_id,tpp.imagename,tbp.first_name,tbp.last_name,tbp.gender,tbp.birth_date,tbp.marital_status,tbp.religion,tbp.caste,tbp.sub_caste,tbp.create_datetime,tbp.lastUpdated_datetime,tbp.ip_address,tbp.status,tbp.album_status,tbp.age,tbp.activation_dateTime,tci.mobile_no,tci.alternate_mobile_no,tci.email_Id,tci.address,tci.district,tci.city 
		          FROM tbl_basic_profile tbp,tbl_contact_info tci,tbl_profile_photo tpp where tbp.profile_id=tci.profile_id and tbp.profile_id=tpp.profile_id and DATE(tbp.expiry_date) between '$from' and '$to'";

        $log->info("Profiles Registered between a Specific date limit :: ".$query);

	$qry=mysqli_query($conn,$query) 
                        or die("Query Not Executed");

		if($qry!=false)
		{
			
			while($res=mysqli_fetch_array($qry))
			{
                      
$basicProfileData=array($res['profile_id'],$res['first_name'],$res['last_name'],$res['gender'],$res['birth_date'],$res['age'],$res['marital_status'],$res['religion'],$res['caste'],$res['sub_caste'],$res['create_datetime'],$res['lastUpdated_datetime'],$res['ip_address'],$res['status'],$res['album_status'],$res['activation_dateTime'],$res['mobile_no'],$res['alternate_mobile_no'],$res['email_Id'],$res['address'],$res['district'],$res['city']);
		                $excel->writeLine($basicProfileData);
				
			}
		}
        }

?>



</body>
</html>