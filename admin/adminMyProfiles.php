<?php include('logincommon.php') ?>
<html lang="en">
<head>
  
    <meta charset="utf-8">
     <title> <?php include('title.php'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="css/charisma-app.css" rel="stylesheet">
    <link href='bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='css/jquery.noty.css' rel='stylesheet'>
    <link href='css/noty_theme_default.css' rel='stylesheet'>
    <link href='css/elfinder.min.css' rel='stylesheet'>
    <link href='css/elfinder.theme.css' rel='stylesheet'>
    <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='css/uploadify.css' rel='stylesheet'>
    <link href='css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="bower_components/jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">

	<style>
	
	.img-500
		{
		height : 100px;
		width  : 100px;
		}
		
		#mask {
		  position:absolute;
		  left:0;
		  top:0;
		  z-index:99998;
		  background-color: #4D4D4D;
		  display:none;
		}  
		
		#boxes .window
		{
		  position:absolute;
		  left:0;
		  top:0;
		  width:350px;
		  height:150px;
		  display:none;
		  z-index:99999;
		  padding:10px;
		  -moz-border-radius: 10px;
		  -webkit-border-radius: 10px;
		  border-radius: 10px;
		  border: 4px solid #333333;
		  
		  -moz-box-shadow:4px 4px 30px #130507;
			-webkit-box-shadow:4px 4px 30px #130507;
		  box-shadow:4px 4px 30px #130507;
			-moz-transition:top 800ms;
			-o-transition:top 800ms;
			-webkit-transition:top 800ms;
		  transition:top 800ms;
		  margin-left : 0px;
		}
		
		#boxes #dialog
		{
		  width:350px; 
		  height:150px;
		  padding:0px;
		  background-color: #FFFFFF;
		}	
		
	</style>
<link href="../mobile/assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
<link href="../mobile/assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="../mobile/assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="../mobile/assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="../mobile/assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css">
</head>

<body>

 <!-- topbar starts -->
<?php include('topbar.php'); ?>
<!-- topbar ends -->
<div class="ch-container">
    <div class="row">
        <!-- left menu starts -->
        <?php include('leftmenu.php'); ?>
        <!-- left menu ends -->
        <?php include('noscripts.php'); ?>
        <div id="content" class="col-lg-10 col-sm-10">
        <!-- content starts -->
		
		
		<div class="row">
				<div class="box col-md-12">
		<div class="box-inner">
		<div class="box-header well" data-original-title="">
			<h2><i class="glyphicon glyphicon-user"></i> My Profiles</h2>
			<div class="box-icon">
				<a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a>
			</div>
		</div>
		<div class="box-content">
			<table class="table table-striped dt-responsive nowrap" id="datatable">
		   <thead>
			<tr>
				<th>Profile Id</th>
				<th>Photo</th>
				<th>Name</th>
				<th>Age</th>
				<th>Height</th>
				<th>Native District</th>
				<th>Status</th>
			 </tr>
			</thead>
			<tbody>
				<?php
				include('../conn.php');
				$agentId = $_SESSION['agent_id'];
				$fetch_basic_profile="select photo.imagename,basicprofile.profile_id,basicprofile.last_name,basicprofile.age,phyattr.heightFt,phyattr.heightInch,
				contactinfo.district,contactinfo.city,basicprofile.status,profiles.status from tbl_basic_profile basicprofile,tbl_profile_photo photo,tbl_physical_attr phyattr,tbl_contact_info contactinfo,tbl_agent_profiles profiles where basicprofile.profile_id=photo.profile_id and basicprofile.profile_id=phyattr.profile_id  and basicprofile.profile_id=contactinfo.profile_id and basicprofile.profile_id=profiles.profile_id and profiles.agent_id='$agentId' order by basicprofile.profile_id desc ";	
				
				$basic_profile_rs= mysqli_query($conn,$fetch_basic_profile);

				while($basic_profile_row = mysqli_fetch_array($basic_profile_rs)) 
					{
					  echo "<tr class='odd gradeX'>";
					  echo "<td width=10><a href='showprofiledetails.php?id=$basic_profile_row[1]'>".$basic_profile_row[1]."</a></td>";
					   if($basic_profile_row [0]=="noimg.gif")
						{
						echo "<td width='133' height='100'><a href='showprofiledetails.php?id=$basic_profile_row[1]'><img src='../images/noimg.gif' border='0' width='133' height='100' class='img-500'></a></td>";
						}
					else
						{	
						echo "<td width='133' height='100'><div style='width:100px;height:133px;'><a href='showprofiledetails.php?id=$basic_profile_row[1]'><img src='../profilepics/$basic_profile_row[0]' border='0' width='133' height='100' class='img-500'></a></div></td>";
						}
					 				 
					  echo "<td width=50>".$basic_profile_row[2]."</td>";
					  echo "<td width=4>".$basic_profile_row[3]."</td>";
					  echo "<td width=20>".$basic_profile_row[4]."ft ".$basic_profile_row[5]."Inch</td>";
					  echo "<td width=50>".$basic_profile_row[6].",".$basic_profile_row[7]."</td>";
					  if($basic_profile_row[9]=="Pending")
						echo "<td width=10><span class='label-warning label label-default'>Pending</span></td>";
					  else 
						  echo "<td width=10><span class='label-success label label-default'>Approved</span></td>";	
					  echo "</tr>";
					} 
					?>
				 </tbody>
			</table>
		</div>
		</div>
		</div>
		<!--/span-->
		</div><!--/row-->
		<!-- content ends -->
		</div><!--/#content.col-md-0-->
	</div><!--/fluid-row-->
	<?php include('footer.php'); ?>
</div><!--/.fluid-container-->

<?php
include("../conn.php");
include('MyLogPHP.class.php');
$log = new MyLogPHP('adminlogs/logs.log');	
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

function sendEmail($name,$emailid,$headers) 
{
$mess="<b>Hi ".$name.",</b><BR><h3>Congratulations,Your Account has been created successfully.</h3><br><br>";
$mess=$mess."Please pay amount of <b>Rs.500</b> using below details.<br><br>";
$mess=$mess."Please inform us the details of your payment by email / phone with Profile Id,Submission Date<br><br>";
$mess=$mess."<b>Thanks & Regards <BR>MarathaLagnYog Team</b><br>";
$mess=$mess."<img src='http://marathalagnyog.com/images/logo.png' border=0 width=200 height=65><br><br>";

$sub="Vivahyog :: Account Created";
$r="-f"."info@marathalagnyog.com";
mail($emailid,$sub,$mess,$headers,$r);
}

function sendSMS($name,$mobno,$profileId,$pwd)
{
    $username="maratha";
	$api_password="maratha@lagnyog";
	$sender="LGNYOG";
	$domain="http://cannyinfotech.in/api/mt/SendSMS?";
	$mobile=$mobno;
	$message="Hi ".$name." Your Account Created Successfully.Profile Id:".$profileId." & Password: ".$pwd." Regards marathalagnyog.com ";
	
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
			

/* Code to Insert Basic Profile */

function saveBasicProfile()
{
include('../conn.php');
    $firstName=$_POST['firstName'];

	$lastName=$_POST['lastName'];

	$gender=$_POST['gender'];

	$dateOfBirth=$_POST['bdate'];

	$maritalStatus=$_POST['maritalStatus'];

	$religion=$_POST['religion'];

	$caste=$_POST['caste'];

    $subCaste=$_POST['caste'];

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
														 password,create_datetime,ip_address,status,album_status,age,expiry_date,profile_created_by)".
							"VALUES('$firstName','$lastName','$gender',
									'$dateOfBirth','$maritalStatus','$religion','$caste',
									'$subCaste','$password','$create_datetime','$ipAddress','A','Private','$age','$expiry_date','Head Office')";
			
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
    include('../conn.php');
	$mobileNo=$_POST['mobileNo'];

	if($_POST['alternateMobileNo']) 
		{
		$alternateMobileNo=$_POST['alternateMobileNo'];
		}
	else
		{
		$alternateMobileNo=$mobileNo;
		}

	$emailId=$_POST['emailId'];

	$address=$_POST['address'];

	$country=$_POST['country'];

	$state=$_POST['state'];
	
	$district=$_POST['district'];
	
	$city=$_POST['city'];
	
	$goan=$_POST['goan'];

	$contact_info_insert="INSERT INTO tbl_contact_info(mobile_no,alternate_mobile_no,email_Id,address,
										   country,state,district,city,goan,profile_id)".
						  "VALUES('$mobileNo','$alternateMobileNo','$emailId','$address',
								  '$country','$state','$district','$city','$goan','$profile_id')";	
	mysqli_query($conn,$contact_info_insert) or die(mysqli_error($conn));	
}						  

/* Code to Insert Profile pic*/

function saveProfilePhoto($profile_id)
{
    include('../conn.php');
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
				//$log->info("Inserting Profile Photo  :::");						 
				//$log->info($profile_photo_insert);	
				mysqli_query($conn,$profile_photo_insert) or die(mysqli_error($conn));
				}
		}	
}	

/* Code to Insert Socio Attributes*/

function saveSocioReligiousAttributes($profile_id)
{
include('../conn.php');
$socio_religious_attr_insert="INSERT INTO tbl_socio_religious_attr(profile_id) values('$profile_id')";
mysqli_query($conn,$socio_religious_attr_insert) or die(mysqli_error($conn)); 
}

/* Code to Insert Physical Attributes*/
function savePhysicalAttributes($profile_id)
{
include('../conn.php');
$heightFt = $_POST['heightFt'];
$heightInch = $_POST['heightInch'];

$physical_attr_insert="INSERT INTO tbl_physical_attr(profile_id,heightFt,heightInch) values('$profile_id','$heightFt','$heightInch')";
mysqli_query($conn,$physical_attr_insert) or die(mysqli_error($conn)); 
}

/* Code to Insert Profile*/
function saveProfile($profile_id)
{
include('../conn.php');
$education = $_POST['education'];
$profile_insert="INSERT INTO tbl_profile(profile_id,education) values('$profile_id','$education')";
mysqli_query($conn,$profile_insert) or die(mysqli_error($conn)); 
}

/* Code to insert Family Details*/
function saveFamilyDetails($profile_id)
{
include('../conn.php');
$familydetails_insert="INSERT INTO tbl_family_details(profile_id) values('$profile_id')";
mysqli_query($conn,$familydetails_insert) or die(mysqli_error($conn)); 
}

/* Code to Insert Partner Preference*/
function savePartnerPreference($profile_id)
{
include('../conn.php');
$maritalStatus=$_POST['maritalStatus'];
$partnerCaste=$_POST['caste'];

$partner_pref_insert="INSERT INTO tbl_partner_preference(looking_for,partner_caste,profile_id) values('$maritalStatus','$partnerCaste','$profile_id')";

mysqli_query($conn,$partner_pref_insert) or die(mysqli_error($conn)); 
}

/* Code to insert Horoscope Photo*/
function saveHoroScopePhoto($profile_id)
{
include('../conn.php');
$horoscope_insert="INSERT INTO tbl_horoscope_photo(imagename,profile_id) values('noimg.gif','$profile_id')";
mysqli_query($conn,$horoscope_insert) or die(mysqli_error($conn)); 
}

function insertAgentDetails($profile_id)
{
    include('../conn.php');
				$agentId  = $_SESSION['agent_id'];
				
				$fetch_existing_records = "select profile_id from tbl_agent_profiles where profile_id='$profile_id'";
				
				$fetch_existing_records_rs=mysqli_query($conn,$fetch_existing_records) or die(mysqli_error($conn));
				
				$numrows=mysqli_num_rows($fetch_existing_records_rs);
				
				if($numrows > 0)
					{
					echo "<script>window.location.href = 'adminMyProfiles.php';</script>";
					}
				else
					{
					$create_date    =date('Y-m-d');
					
					$agent_insert_profiles = "INSERT INTO tbl_agent_profiles(profile_id,agent_id,create_date,status) values('$profile_id','$agentId','$create_date','Pending')";
					
					//$log->info("Inserting Agent Profile Data :::".$agent_insert_profiles);						 
					
					mysqli_query($conn,$agent_insert_profiles) or die(mysqli_error($conn));
					
					//$log->info("Agent Profile Data inserted");
				
					}
}

/* Code to Save Identification Proof*/
function saveIdentificationProof($profile_id)
{
	include('../conn.php');
	$idproof_insert="INSERT INTO tbl_profile_identification_proof(imagename,profile_id) values('noimg.gif','$profile_id')";
    mysqli_query($conn,$idproof_insert) or die(mysqli_error($conn)); 
}

function saveAgentPayments($profile_id){
  include('../conn.php');
  $agentId  = $_SESSION['agent_id'];
  $receivedTimStmp = date('Y-m-d');
  $agentPayment_insert="INSERT INTO tbl_agent_payments(profile_id,agent_id,amtReceived,receivedTimStmp,status) values('$profile_id','$agentId','0','$receivedTimStmp','Unknown')";
  mysqli_query($conn,$agentPayment_insert) or die(mysqli_error($conn)); 
}


if(isset($_GET['msg']))
			{
			$action = $_GET['msg'];
			if($action == "save")
			{
	
	?>

		
				<script type="text/javascript">
				$(document).ready(function() {	
					
							var id = '#dialog';
						
							//Get the screen height and width
							var maskHeight = $(document).height();
							var maskWidth = $(window).width();
						
							//Set heigth and width to mask to fill up the whole screen
							$('#mask').css({'width':maskWidth,'height':maskHeight});
							
							//transition effect		
							$('#mask').fadeIn(800);	
							$('#mask').fadeTo("slow",0.8);	
						
							//Get the window height and width
							var winH = $(window).height();
							var winW = $(window).width();
								  
							//Set the popup window to center
							$(id).css('top',  winH/2-$(id).height()/2 -50);
							$(id).css('left', winW/2-$(id).width()/2);
						
							//transition effect
							$(id).fadeIn(500); 	
						
						//if close button is clicked
						$('.window .close').click(function (e) {
							//Cancel the link behavior
							e.preventDefault();
							
							$('#mask').hide();
							$('.window').hide();
						});		
						
						//if mask is clicked
						$('#mask').click(function () {
							$(this).preventDefault();
							$(this).hide();
							$('.window').hide();
						});		
						
					});
					
					</script>
				
				<div id="boxes">
				<div style="top:150px; left: 551.5px; display: none;" id="dialog" class="window">
			
					
					<div align="center" style="margin:5px 0 5px 0;">
					
						<?php 
						
						$encryption_key="ASKSDFNSDFKEISDJAHDLDSDF1235UUUiidfsdfK";
						date_default_timezone_set('Asia/Calcutta');
						
						$name=$_POST['firstName'];
                        $mobileNo=$_POST['mobileNo'];
                        $pwd=$_POST['password'];
                        $emailId=$_POST['emailId'];
                        $profile_id = saveBasicProfile();
						
						//echo "Profile Id : ".$profile_id;
					
						$_SESSION['profile_id']=$profile_id;
						saveContactInfo($profile_id);
						saveProfilePhoto($profile_id);
						saveSocioReligiousAttributes($profile_id);
						savePhysicalAttributes($profile_id);
						saveProfile($profile_id);
						saveFamilyDetails($profile_id);
						savePartnerPreference($profile_id);
						saveHoroScopePhoto($profile_id);
						saveIdentificationProof($profile_id);
						saveAgentPayments($profile_id);
						insertAgentDetails($profile_id);
						//sendSMS($name,$mobileNo,$profile_id,$pwd);
                        //sendEmail($name,$emailId,$headers);
						echo "<p align='center'><h4><img src='images/Correct.png'>&nbsp;&nbsp;Profile Sent For Activation.</h4></p>"; 
						?>
					<br>
        			<?php
        			echo "<a href='adminMyProfiles.php' class='btn btn-primary btn-sm'>Ok</a>";
        			?>
					</div>
					
				</div>
			
				<!-- Mask to cover the whole screen -->
				<div style="width: 2000px; height: 2000px; display: none; opacity: 0.7;" id="mask"></div>
				</div>
				
        	<?php
               }
            }
        ?>      	




<!-- external javascript -->

<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='bower_components/moment/min/moment.min.js'></script>
<script src='bower_components/fullcalendar/dist/fullcalendar.min.js'></script>


<!-- select or dropdown enhancer -->
<script src="bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="js/charisma.js"></script>


<script src="../mobile/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../mobile/assets/plugins/datatables/dataTables.bootstrap.js"></script>
<script src="../mobile/assets/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="../mobile/assets/plugins/datatables/buttons.bootstrap.min.js"></script>
<script src="../mobile/assets/plugins/datatables/jszip.min.js"></script>
<script src="../mobile/assets/plugins/datatables/pdfmake.min.js"></script>
<script src="../mobile/assets/plugins/datatables/vfs_fonts.js"></script>
<script src="../mobile/assets/plugins/datatables/buttons.html5.min.js"></script>
<script src="../mobile/assets/plugins/datatables/buttons.print.min.js"></script>
<script src="../mobile/assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
<script src="../mobile/assets/plugins/datatables/dataTables.keyTable.min.js"></script>
<script src="../mobile/assets/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="../mobile/assets/plugins/datatables/responsive.bootstrap.min.js"></script>
<script src="../mobile/assets/plugins/datatables/dataTables.scroller.min.js"></script>
<script src="../mobile/assets/pages/jquery.datatables.init.js"></script>


<script type="text/javascript">
	$(document).ready(function() {
	$('#datatable').dataTable( {
        dom: 'lBfrtip',
        buttons: [
            
        ],
         "order": [[ 0, 'desc' ]],
         "aLengthMenu": [[15, 30, 45, -1], [15, 30, 45, "All"]],
        "iDisplayLength": 15
    });
   
		$('#datatable-keytable').DataTable( { keys: true } );
		$('#datatable-responsive').DataTable();
		$('#datatable-scroller').DataTable( { ajax: "../mobile/assets/plugins/datatables/json/scroller-demo.json", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
		var table = $('#datatable-fixed-header').DataTable( { fixedHeader: true } );
	} );
	TableManageButtons.init();
</script>

</body>
</html>