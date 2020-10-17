<?php error_reporting(0); ?>
<?php include('logincommon.php') ?>
<!DOCTYPE html>
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
    <link href='bower_components/colorbox/example3/colorbox.css' resl='stylesheet'>
    <link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
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
		height : 33px;
		width  : 56px;
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

        

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
		<?php
		if(isset($_GET['action']))
			{
			$action = $_GET['action'];
			include('MyLogPHP.class.php');
			$log = new MyLogPHP('adminlogs/logs.log');	
			include('../conn.php');
			if($action == "update")
				{
					$agentId			= $_SESSION['agentId'];
					$firstName 			= $_POST['firstName'];
					$lastName  			= $_POST['lastName'];
					$gender    			= $_POST['gender'];
					$dob	   			= $_POST['dateOfBirth'];
					$maritalStatus 		= $_POST['maritalStatus'];

					if(isset($_POST['annvDate']))
					      $annvDate = $_POST['annvDate'];
					else
					         $annvDate = "0000-00-00";

					$mobileNo 			= $_POST['mobileNo'];

					if(isset($_POST['alternateMobileNo'])) 
					$alternateMobileNo  = $_POST['alternateMobileNo'];
					else
					$alternateMobileNo  = $mobileNo;

					$emailId 			= $_POST['emailId'];
					$address 			= $_POST['address'];
					$district 			= $_POST['district'];
					$taluka 			= $_POST['taluka'];

					$fetch_existing_photo_query="SELECT photoname FROM tbl_agent_profile where agent_id='$agentId'";
					$existing_photo_rs= mysqli_query($conn,$fetch_existing_photo_query);

					while($exiting_photo_row = mysqli_fetch_array($existing_photo_rs)) 
					{
						$file=$exiting_photo_row[0];
					}	
					
				$fileSize=$_FILES['photo']['size'];
					if($fileSize <= 0)
						{
						$fileName = $file;
						}
					else
						{	
						if($file == "noimg.gif") 
							{
							}
						else
							{	
							$utemp="agentpics/".$file;
							unlink($utemp);	
							}
						$fileName = $_FILES['photo']['name'];
						$tmpName  = $_FILES['photo']['tmp_name'];
								
						$ext=substr(strrchr($fileName,'.'),1);		
						$fileName = $agentId.".".$ext;		
						$target_path="agentpics/";
						
						$target_path=$target_path.basename($fileName);
						
						move_uploaded_file($_FILES['photo']['tmp_name'],$target_path);
						
						$log->info("Profile Photo moved to :::".$target_path);	
						}

				//	$log->info("Field Values are::".$firstName.$lastName.$gender.$dob.$maritalStatus.$mobileNo.$alternateMobileNo.$emailId.$address.$district.$taluka.$fileName);


					$lastUpdateddatetime=date('Y-m-d h:i:s');

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

                                        $password = $_POST['password'];

					$agent_profile_update = "UPDATE tbl_agent_profile 
										 SET 
										 first_name 			= '$firstName',
										 last_name 				= '$lastName',
										 gender     			= '$gender',
										 birth_date 			= '$dob', 
										 marital_status 		= '$maritalStatus',
annv_date ='$annvDate',
										 mobile_no    			= '$mobileNo',
										 alternate_mobile_no 	= '$alternateMobileNo',	
										 emailId				= '$emailId',
										 address				= '$address',
										 district				= '$district',
										 taluka					= '$taluka',
										 photoname			    = '$fileName',
										 lastUpdated_datetime	= '$lastUpdateddatetime',
										 ip_address				= '$ipAddress',
                                                                                 password = '$password' 
										 WHERE agent_id         = '$agentId'";
							 
				mysqli_query($conn,$agent_profile_update) or die(mysqli_error($conn)); 
			}
			?>
			<div id="boxes">
				<div style="top:150px; left: 551.5px; display: none;" id="dialog" class="window">
					<div align="right" style="font-weight:bold; margin:5px 3px 0 0;">
					<?php
					echo "<a href='agentProfile.php?agentId=$agentId&action=view'><img src='images/cross.png' width='16' style='border:none; cursor:pointer;' /></a>";
					?>
					</div>
					
					<div align="center" style="margin:5px 0 5px 0;">
					
						<?php 
						echo "<p align='center'><h4><img src='images/Correct.png'>&nbsp;&nbsp;Agent Profile Updated Successfully.</h4></p>"; 
						?>
					
					</div>
					
				</div>
			
			<!-- Mask to cover the whole screen -->
			<div style="width: 2000px; height: 2000px; display: none; opacity: 0.7;" id="mask"></div>
			</div>
							
		<?php			
				}
				
		?>
		<div class="row">
		<div class="box col-md-4">
			<div class="box-inner">
				<div class="box-header well" data-original-title="">
					<h2><i class="glyphicon glyphicon-list"></i> Pending Approvals</h2>
					<div class="box-icon">
						<a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a>
					</div>
				</div>
				<div class="box-content buttons">
					<?php
					include('../conn.php');
					$fetch_pending_approvals="select basicprofile.profile_id,basicprofile.first_name,basicprofile.last_name,photo.imagename from tbl_basic_profile basicprofile,tbl_profile_photo photo where basicprofile.profile_id=photo.profile_id and status='N'  order by basicprofile.profile_id desc";	
					$pending_approvals_rs= mysqli_query($conn,$fetch_pending_approvals);
					$pending_approvals_numrows = mysqli_num_rows($pending_approvals_rs);
					if($pending_approvals_numrows > 0) 
						{
						echo "<marquee behavior=scroll direction=up scrollamount=10 onmouseout=this.start() onmouseover=this.stop() scrolldelay=90 style='background-color:white;'>";
						while($pending_approvals_row = mysqli_fetch_array($pending_approvals_rs)) 
							{
							echo "<div class='well'>";
							if($pending_approvals_row[3]=="noimg.gif")
								{
								echo "<img src='../images/noimg.gif' border='0' class='img-500'><a href='showprofiledetails.php?id=$pending_approvals_row[0]'>".$pending_approvals_row[1]."&nbsp;".$pending_approvals_row[2]." [".$pending_approvals_row[0]."</a>]";
								}
							else
								{	
								echo "<img src='../profilepics/$pending_approvals_row[3]' border='0' class='img-500'><a href='showprofiledetails.php?id=$pending_approvals_row[0]'>".$pending_approvals_row[1]."&nbsp;".$pending_approvals_row[2]." [".$pending_approvals_row[0]."</a>]";
								}
							echo "</div>";		
							}
						echo "</marquee>";
						}	
					else
						echo "<img src='../images/warning.gif'>&nbsp;<font color='red' face='calibri'>No Approvals Pending !!</font>";	
				   ?>	
				</div>
			</div>
			
		</div>
		
		<div class="box col-md-4">
			<div class="box-inner">
				<div class="box-header well" data-original-title="">
					<h2><i class="glyphicon glyphicon-list"></i> Agent Approvals</h2>
					<div class="box-icon">
						<a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a>
					</div>
				</div>
				<div class="box-content buttons">
				<?php
					include('../conn.php');
                                         $agentId = $_SESSION['agent_id'];
					$fetch_agent_pending_approvals="select basicprofile.profile_id,basicprofile.first_name,basicprofile.last_name,photo.imagename from tbl_basic_profile basicprofile,tbl_profile_photo photo where basicprofile.profile_id=photo.profile_id and basicprofile.status='A'  order by basicprofile.profile_id desc";	

					$agent_pending_approvals_rs= mysqli_query($conn,$fetch_agent_pending_approvals);
					$agent_pending_approvals_numrows = mysqli_num_rows($agent_pending_approvals_rs);
					if($agent_pending_approvals_numrows > 0) 
						{
						echo "<marquee behavior=scroll direction=up scrollamount=10 onmouseout=this.start() onmouseover=this.stop() scrolldelay=90 style='background-color:white;'>";
						while($agent_pending_approvals_row = mysqli_fetch_array($agent_pending_approvals_rs)) 
							{
							echo "<div class='well'>";
							if($agent_pending_approvals_row[3]=="noimg.gif")
								{
								echo "<img src='../images/noimg.gif' border='0' class='img-500'><a href='showprofiledetails.php?id=$agent_pending_approvals_row[0]'>".$agent_pending_approvals_row[1]."&nbsp;".$agent_pending_approvals_row[2]." [".$agent_pending_approvals_row[0]."</a>]";
								}
							else
								{	
								echo "<img src='../profilepics/$agent_pending_approvals_row[3]' border='0' class='img-500'><a href='showprofiledetails.php?id=$agent_pending_approvals_row[0]'>".$agent_pending_approvals_row[1]."&nbsp;".$agent_pending_approvals_row[2]." [".$agent_pending_approvals_row[0]."</a>]";
								}
							echo "</div>";		
							}
						echo "</marquee>";
						}	
					else
						echo "<img src='../images/warning.gif'>&nbsp;<font color='red' face='calibri'>No Approvals Pending !!</font>";	
				   ?>	
				   
				</div>
			</div>
		</div>
		
		<div class="box col-md-4">
          <div class="box-inner">
				<div class="box-header well" data-original-title="">
					<h2><i class="glyphicon glyphicon-list"></i> Upcoming Birthdays</h2>
					<div class="box-icon">
						<a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a>
					</div>
				</div>
				<div class="box-content buttons">
					<?php
					include('../conn.php');
					$query="SELECT basicprofile.first_name,basicprofile.last_name,basicprofile.birth_date,photo.imagename FROM tbl_basic_profile basicprofile,tbl_profile_photo photo where basicprofile.profile_id=photo.profile_id and DAYOFYEAR(curdate()) <= dayofyear(`birth_date`) AND DAYOFYEAR(curdate()) +25 >= dayofyear(`birth_date`) order by MONTH(basicprofile.birth_date) asc,DAY(basicprofile.birth_date) asc LIMIT 30  ";
					$rs=mysqli_query($conn,$query);

					$name="";
					$bdate="";
					$dnd="";
					echo "<marquee behavior=scroll direction=up scrollamount=7 onmouseout=this.start() onmouseover=this.stop() scrolldelay=90 style='background-color:white;'>"; 
					echo "<font face='calibri'>";
					while($row=mysqli_fetch_array($rs))
					{
					$name=$row[0]."&nbsp".$row[1];
					$bdate=$row[2];	
					$time = strtotime($bdate);
					$tommorow = mktime(date("H"), date("i"), date("s"), date("m"), date("d")+1, date("Y"));
					date_default_timezone_set('Asia/Kolkata'); 
					if(date('m-d') == date('m-d', $time)) 
						{ 
							echo "<div class='well'>";
							if($row[3]=="noimg.gif")
							{
							echo "<img src='../images/noimg.gif' border='0' class='img-500'><font color='red'>&nbsp;".$name."</font></b><br><font color='red'>$bdate(Today)</font><br>";
							}
							else
							{	
							echo "<img src='../profilepics/$row[3]' border='0' class='img-500'><font color='red'>&nbsp;".$name."</font></b><br><font color='red'>$bdate(Today)</font><br>";
							}
							echo "</div>";
						} 
					else if(date('m-d', $time) == date("m-d", $tommorow))
						{ 
							echo "<div class='well'>";
							if($row[3]=="noimg.gif")
							{
							echo "<img src='../images/noimg.gif' border='0' class='img-500'><font color='orange'>&nbsp;".$name."</font></b><br><font color='orange'>$bdate(Today)</font><br>";
							}
							else
							{	
							echo "<img src='../profilepics/$row[3]' border='0' class='img-500'><font color='orange'>&nbsp;".$name."</font></b><br><font color='orange'>$bdate(Tommorow)</font><br>";
							}
							echo "</div>";
						} 
						
					else
						{
							echo "<div class='well'>";
							if($row[3]=="noimg.gif")
							{
							echo "<img src='../images/noimg.gif' border='0' class='img-500'>&nbsp;".$name."<br>$bdate<br>";
							}
							else
							{	
							echo "<img src='../profilepics/$row[3]' border='0' class='img-500'>&nbsp;".$name."<br>$bdate<br>";
							}
							echo "</div>";
						}	
					}
					echo "</font>";	
					echo "</marquee>";
					?>
               
				</div>
			</div>
		</div>
		
				<div class="box col-md-4">
          <div class="box-inner">
				<div class="box-header well" data-original-title="">
					<h2><i class="glyphicon glyphicon-list"></i> Agent Birthdays</h2>
					<div class="box-icon">
						<a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a>
					</div>
				</div>
				<div class="box-content buttons">
					<?php include('agentupcomingbirth.php'); ?>
               	</div>
			</div>
		</div>
		
		<div class="box col-md-4">
          <div class="box-inner">
				<div class="box-header well" data-original-title="">
					<h2><i class="glyphicon glyphicon-list"></i> Agent Anniversaries</h2>
					<div class="box-icon">
						<a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a>
					</div>
				</div>
				<div class="box-content buttons">
					<?php include('agentupcomingannv.php'); ?>
               	</div>
			</div>
		</div>
		
		<div class="box col-md-4">
          <div class="box-inner">
				<div class="box-header well" data-original-title="">
					<h2><i class="glyphicon glyphicon-list"></i> Today's Report</h2>
					<div class="box-icon">
						<a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a>
					</div>
				</div>
				<div class="box-content buttons">
				<?php include('todaysreport.php'); ?>	
               	                </div>
			</div>
		</div>
		
	</div><!--/row-->
    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->
<?php include('footer.php'); ?>


<!-- Profiles Activation and Deactivtion -->

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

<?php
if(isset($_GET['status']))
	{
	$param=$_GET['status'];
	if($param == "approved")
		{
		
?>
<div id="boxes">
	<div style="top:150px; left: 551.5px; display: none;" id="dialog" class="window">
		<div align="right" style="font-weight:bold; margin:5px 3px 0 0;">
		<?php
		echo "<a href='profiles.php'><img src='images/cross.png' width='16' style='border:none; cursor:pointer;' /></a>";
		?>
		</div>
		
		<div align="center" style="margin:5px 0 5px 0;">
		
			<?php 
			include('MyLogPHP.class.php');
			$log = new MyLogPHP('adminlogs/logs.log');
			$appovalDateTime = date('Y-m-d h:i:s');
			$approverId      = $_SESSION['agent_id'];
			$profileId       = $_GET['approvedid'];
                        
			
			$basic_profile_statusupdate = "UPDATE tbl_basic_profile SET status='Y',activation_dateTime='$appovalDateTime' where profile_id='$profileId'";

			mysqli_query($conn,$basic_profile_statusupdate) or die(mysqli_error($conn));
			$log->info("Status Update:".$basic_profile_statusupdate);
			$profile_approvals_insert="INSERT INTO tbl_profile_approvals(appovalDateTime,approverId,profile_id)".
							  "VALUES('$appovalDateTime','$approverId','$profileId')";
										
			mysqli_query($conn,$profile_approvals_insert) or die(mysqli_error($conn));	
			$log->info("Approval Done:".$profile_approvals_insert);
			mysqli_query($conn,"UPDATE tbl_agent_profiles SET status='Approved' where profile_id='$profileId' ") or die(mysqli_error($conn));
			echo "<p align='center'><h4><img src='images/Correct.png'>&nbsp;&nbsp;Profile Activated Successfully.</h4></p>"; 

            $fetch_username_password = "select password,mobile_no from tbl_basic_profile profile,tbl_contact_info contactinfo where profile.profile_id=contactinfo.profile_id and profile.profile_id='$profileId'";
            
            $fetch_username_password_rs = mysqli_query($conn,$fetch_username_password) or die(mysqli_error($conn));
            
            while($fetch_username_password_rows=mysqli_fetch_array($fetch_username_password_rs))
            {
            $password=$fetch_username_password_rows[0];
            $mobileNo=$fetch_username_password_rows[1];
            }



function sendActivationDetails($mobno,$profileId,$pwd)
{
    $username="vivahyog";
	$api_password="vivahyog";
	$sender="VIVYOG";
	$domain="http://cannyinfotech.in/api/mt/SendSMS?";
	$mobile=$mobno;
	$message="Your Account Activated Successfully.Profile Id:".$profileId." & Password: ".$pwd." Regards Vivahyog Team Web:www.vivahyog.in ";
	
	$username=urlencode($username);
	$password=urlencode($password);
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
sendActivationDetails($mobileNo,$profileId,$password);

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


<?php
if(isset($_GET['msg']))
	{
	$param=$_GET['msg'];
	if($param == "deactivate")
		{
		
?>
<div id="boxes">
	<div style="top:150px; left: 551.5px; display: none;" id="dialog" class="window">
		<div align="right" style="font-weight:bold; margin:5px 3px 0 0;">
		<?php
		echo "<a href='profiles.php'><img src='images/cross.png' width='16' style='border:none; cursor:pointer;' /></a>";
		?>
		</div>
		
		<div align="center" style="margin:5px 0 5px 0;">
		
			<?php 
			include('MyLogPHP.class.php');
			$log = new MyLogPHP('adminlogs/logs.log');
			$profileId       = $_GET['id'];

            $fetch_create_date="select create_datetime from tbl_basic_profile where profile_id='$profileId'";

            $fetch_create_date_rs=mysqli_query($conn,$fetch_create_date) or die(mysqli_error($conn));

            while($fetch_create_date_row = mysqli_fetch_array($fetch_create_date_rs))
                  {
                  $create_date= $fetch_create_date_row[0];
                  }

			$basic_profile_statusupdatetono = "UPDATE tbl_basic_profile SET status='N',create_datetime='$create_date' where profile_id='$profileId'";

			mysqli_query($conn,$basic_profile_statusupdatetono) or die(mysqli_error($conn));
			$log->info("Status Update:".$basic_profile_statusupdatetono);
			echo "<p align='center'><h4><img src='images/Correct.png'>&nbsp;&nbsp;Profile Deactivated Successfully.</h4></p>"; 
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

<?php
if(isset($_GET['msg']))
	{
	$param=$_GET['msg'];
	if($param == "activate")
		{
		
?>
<div id="boxes">
	<div style="top:150px; left: 551.5px; display: none;" id="dialog" class="window">
		<div align="right" style="font-weight:bold; margin:5px 3px 0 0;">
		<?php
		echo "<a href='profiles.php'><img src='images/cross.png' width='16' style='border:none; cursor:pointer;' /></a>";
		?>
		</div>
		
		<div align="center" style="margin:5px 0 5px 0;">
		
			<?php 
			include('MyLogPHP.class.php');
			$log = new MyLogPHP('adminlogs/logs.log');
			$profileId       = $_GET['id'];

            $fetch_create_date="select create_datetime from tbl_basic_profile where profile_id='$profileId'";

            $fetch_create_date_rs=mysqli_query($conn,$fetch_create_date) or die(mysqli_error($conn));

            while($fetch_create_date_row = mysqli_fetch_array($fetch_create_date_rs))
                  {
                  $create_date= $fetch_create_date_row[0];
                  }            
           
			$basic_profile_statusupdatetoyes = "UPDATE tbl_basic_profile SET status='Y',create_datetime='$create_date' where profile_id='$profileId'";
			mysqli_query($conn,$basic_profile_statusupdatetoyes) or die(mysqli_error($conn));
			$log->info("Status Update:".$basic_profile_statusupdatetoyes);
			echo "<p align='center'><h4><img src='images/Correct.png'>&nbsp;&nbsp;Profile Activated Successfully.</h4></p>"; 
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

<!-- Agent Activation and Deactivtion -->

<?php
if(isset($_GET['msg']))
	{
	$param=$_GET['msg'];
	if($param == "deactivateagent")
		{
		
?>
<div id="boxes">
	<div style="top:150px; left: 551.5px; display: none;" id="dialog" class="window">
		<div align="right" style="font-weight:bold; margin:5px 3px 0 0;">
		<?php
		echo "<a href='agents.php'><img src='images/cross.png' width='16' style='border:none; cursor:pointer;' /></a>";
		?>
		</div>
		
		<div align="center" style="margin:5px 0 5px 0;">
		
			<?php 
			include('MyLogPHP.class.php');
			include('../conn.php');
			$log = new MyLogPHP('adminlogs/logs.log');
			$agentId       = $_GET['agentid'];

            $fetch_create_date="select create_datetime from tbl_agent_profile where agent_id='$agentId'";

            $fetch_create_date_rs=mysqli_query($conn,$fetch_create_date) or die(mysqli_error($conn));

            while($fetch_create_date_row = mysqli_fetch_array($fetch_create_date_rs))
                  {
                  $create_date= $fetch_create_date_row[0];
                  }     
                    
			$agent_profile_statusupdatetono = "UPDATE tbl_agent_profile SET status='N',create_datetime='$create_date' where agent_id='$agentId'";
			mysqli_query($conn,$agent_profile_statusupdatetono) or die(mysqli_error($conn));
			$log->info("Status Update:".$agent_profile_statusupdatetono);
			echo "<p align='center'><h4><img src='images/Correct.png'>&nbsp;&nbsp;Agent Deactivated Successfully.</h4></p>"; 
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

<?php
if(isset($_GET['msg']))
	{
	$param=$_GET['msg'];
	if($param == "activateagent")
		{
		
?>
<div id="boxes">
	<div style="top:150px; left: 551.5px; display: none;" id="dialog" class="window">
		<div align="right" style="font-weight:bold; margin:5px 3px 0 0;">
		<?php
		echo "<a href='agents.php'><img src='images/cross.png' width='16' style='border:none; cursor:pointer;' /></a>";
		?>
		</div>
		
		<div align="center" style="margin:5px 0 5px 0;">
		
			<?php 
			include('MyLogPHP.class.php');
			include('../conn.php');
			$log = new MyLogPHP('adminlogs/logs.log');
			$agentId = $_GET['agentid'];
			
			$log->info("Agent Id :".$agentId);

            $fetch_create_date="select create_datetime from tbl_agent_profile where agent_id='$agentId'";

            $fetch_create_date_rs=mysqli_query($conn,$fetch_create_date) or die(mysqli_error($conn));

            while($fetch_create_date_row = mysqli_fetch_array($fetch_create_date_rs))
                  {
                  $create_date= $fetch_create_date_row[0];
                  }     
        	$log->info("Create Date :".$create_date);
			$agent_profile_statusupdatetoyes = "UPDATE tbl_agent_profile SET status='Y',create_datetime='$create_date' where agent_id='$agentId'";
			mysqli_query($conn,$agent_profile_statusupdatetoyes) or die(mysqli_error($conn));
			$log->info("Status Update:".$agent_profile_statusupdatetoyes);
			echo "<p align='center'><h4><img src='images/Correct.png'>&nbsp;&nbsp;Agent Activated Successfully.</h4></p>"; 
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

<!-- Remove Profile -->

<?php
if(isset($_GET['msg']))
	{
	$param=$_GET['msg'];
	if($param == "remove")
		{
		
?>
<div id="boxes">
	<div style="top:150px; left: 551.5px; display: none;" id="dialog" class="window">
		<div align="right" style="font-weight:bold; margin:5px 3px 0 0;">
		<?php
		echo "<a href='profiles.php'><img src='images/cross.png' width='16' style='border:none; cursor:pointer;' /></a>";
		?>
		</div>
		
		<div align="center" style="margin:5px 0 5px 0;">
		
			<?php 
			include('MyLogPHP.class.php');

                        function deleteHoroScopePhoto($profile_id)
                        {
                        include('../conn.php');
                        $fetch_existing_horoscope_photo_query="SELECT imagename FROM tbl_horoscope_photo where profile_id='$profile_id'";
            			$existing_horoscope_photo_rs= mysqli_query($conn,$fetch_existing_horoscope_photo_query);
            				
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
                        mysqli_query($conn,"delete from tbl_horoscope_photo where profile_id='$profile_id'") or die(mysqli_error($conn)); 
                        }  

                        function deleteProfilePhoto($profile_id)
                        {
                        include('../conn.php');
                        $fetch_existing_photo_query="SELECT imagename FROM tbl_profile_photo where profile_id='$profile_id'";
			$existing_photo_rs= mysqli_query($conn,$fetch_existing_photo_query);
				
			while($exiting_photo_row = mysqli_fetch_array($conn,$existing_photo_rs)) 
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
                        mysqli_query($conn,"delete from tbl_profile_photo where profile_id='$profile_id'") or die(mysqli_error($conn)); 
                        }  
                  
			$log = new MyLogPHP('adminlogs/logs.log');
			$profile_id       = $_GET['id'];
			deleteHoroScopePhoto($profile_id);
			deleteProfilePhoto($profile_id);
                        mysqli_query($conn,"DELETE FROM tbl_profile_identification_proof where profile_id='$profile_id'") or die(mysqli_error($conn));
                        mysqli_query($conn,"DELETE FROM tbl_partner_preference where profile_id='$profile_id'") or die(mysqli_error($conn));
                        mysqli_query($conn,"DELETE FROM tbl_family_details where profile_id='$profile_id'") or die(mysqli_error($conn));
                        mysqli_query($conn,"DELETE FROM tbl_profile where profile_id='$profile_id'") or die(mysqli_error($conn));
                        mysqli_query($conn,"DELETE FROM tbl_physical_attr where profile_id='$profile_id'") or die(mysqli_error($conn));
                        mysqli_query($conn,"DELETE FROM tbl_socio_religious_attr where profile_id='$profile_id'") or die(mysqli_error($conn));
                        mysqli_query($conn,"DELETE FROM tbl_contact_info where profile_id='$profile_id'") or die(mysqli_error($conn));
                        mysqli_query($conn,"DELETE FROM tbl_basic_profile where profile_id='$profile_id'") or die(mysqli_error($conn));

			$log->info("Profile Removed");
			echo "<p align='center'><h4><img src='images/Correct.png'>&nbsp;&nbsp;Profile Removed Successfully.</h4></p>"; 

                        
                     
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

<!-- Renewal and Expiration -->


<?php
if(isset($_GET['msg']))
	{
	$param=$_GET['msg'];
	if($param == "expired")
		{
		
?>
<div id="boxes">
	<div style="top:150px; left: 551.5px; display: none;" id="dialog" class="window">
		<div align="right" style="font-weight:bold; margin:5px 3px 0 0;">
		<?php
		echo "<a href='profiles.php'><img src='images/cross.png' width='16' style='border:none; cursor:pointer;' /></a>";
		?>
		</div>
		
		<div align="center" style="margin:5px 0 5px 0;">
		
			<?php 
			include('MyLogPHP.class.php');
			$log = new MyLogPHP('adminlogs/logs.log');
			$profileId       = $_GET['id'];

                        $fetch_create_date="select create_datetime from tbl_basic_profile where profile_id='$profileId'";

                        $fetch_create_date_rs=mysqli_query($conn,$fetch_create_date) or die(mysqli_error($conn));

                        while($fetch_create_date_row = mysqli_fetch_array($fetch_create_date_rs))
                              {
                              $create_date= $fetch_create_date_row[0];
                              }            
           
			$basic_profile_statusupdatetoyes = "UPDATE tbl_basic_profile SET status='E',create_datetime='$create_date' where profile_id='$profileId'";
			mysqli_query($conn,$basic_profile_statusupdatetoyes) or die(mysqli_error($conn));
			$log->info("Status Update:".$basic_profile_statusupdatetoyes);
			echo "<p align='center'><h4><img src='images/Correct.png'>&nbsp;&nbsp;Expiration Activated Successfully.</h4></p>"; 
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


<?php
if(isset($_GET['msg']))
	{
	$param=$_GET['msg'];
	if($param == "renew")
		{
		
?>
<div id="boxes">
	<div style="top:150px; left: 551.5px; display: none;" id="dialog" class="window">
		<div align="right" style="font-weight:bold; margin:5px 3px 0 0;">
		<?php
		echo "<a href='profiles.php'><img src='images/cross.png' width='16' style='border:none; cursor:pointer;' /></a>";
		?>
		</div>
		
		<div align="center" style="margin:5px 0 5px 0;">
		
			<?php 
			include('MyLogPHP.class.php');
			$log = new MyLogPHP('adminlogs/logs.log');
			$profileId       = $_GET['id'];

                        $fetch_create_date1="select create_datetime from tbl_basic_profile where profile_id='$profileId'";

                        $fetch_create_date_rs1=mysqli_query($fetch_create_date1) or die(mysqli_error());

                        while($fetch_create_date_row1 = mysqli_fetch_array($fetch_create_date_rs1))
                              {
                              $create_date= $fetch_create_date_row1[0];
                              }            
           
		            	$basic_profile_createdateupdate = "UPDATE tbl_basic_profile SET create_datetime='$create_date' where profile_id='$profileId'";

                        mysqli_query($conn,$basic_profile_createdateupdate) or die(mysqli_error($conn));

                        $fetch_expiry_date="select tbp.expiry_date,tbp.password,tci.mobile_no from tbl_basic_profile tbp,tbl_contact_info tci where tbp.profile_id=tci.profile_id and tbp.profile_id='$profileId'";

                        $fetch_expiry_date_rs=mysqli_query($fetch_expiry_date) or die(mysqli_error($conn));

                        while($fetch_expiry_date_row = mysqli_fetch_array($fetch_expiry_date_rs))
                              {
                              $expiry_date= $fetch_expiry_date_row[0];
                              $password= $fetch_expiry_date_row[1];
                              $mobno=$fetch_expiry_date_row[2];
                              }            
                        $timeStamp = StrToTime($expiry_date);
                      
                        $after12_months_temp = StrToTime('+12 months', $timeStamp);
 
                        $months12=date('Y-m-d',$after12_months_temp);  
 
                        
                        
                        $mess="Your profile Renewed Successfully upto ".$months12." Profile Id:".$profileId." Password:".$password." Regards Vivahyog Team Web:www.vivahyog.in";

                         
           
			$update_basicprofile_expirydate = "UPDATE tbl_basic_profile SET status='Y',expiry_date='$months12' where profile_id='$profileId'";
			mysqli_query($conn,$update_basicprofile_expirydate) or die(mysqli_error($conn));
			$log->info("Status Update:".$update_basicprofile_expirydate);
			echo "<p align='center'><h4><img src='images/Correct.png'>&nbsp;&nbsp;Profile Renewed Successfully.</h4></p>";
                       
          function sendRenewalDetails($mobno,$mess)
{
    $username="vivahyog";
	$api_password="vivahyog";
	$sender="VIVYOG";
	$domain="http://cannyinfotech.in/api/mt/SendSMS?";
	$mobile=$mobno;
	$message=$mess;
	
	$username=urlencode($username);
	$password=urlencode($password);
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
                               sendRenewalDetails($mobno,$mess);
 
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


</div><!--/.fluid-container-->
<!-- external javascript -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- library for cookie management -->
<script src="js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='bower_components/moment/min/moment.min.js'></script>
<script src='bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='js/jquery.dataTables.min.js'></script>

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
</body>
</html>