<?php
session_start(); 
include('logincommon.php'); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
<meta name="author" content="Coderthemes">
<link rel="shortcut icon" href="assets\images\favicon.ico">
<title>Matching Profiles</title>
<link href="assets\plugins\datatables\jquery.dataTables.min.css" rel="stylesheet" type="text/css">
<link href="assets\plugins\datatables\buttons.bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="assets\plugins\datatables\fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="assets\plugins\datatables\responsive.bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="assets\plugins\datatables\scroller.bootstrap.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="assets\css\lightbox.css">
<?php include('theme.php'); ?>
<script src="assets\js\jquery-1.12.4.min.js"></script>
<script src='assets\js\lightBox-ba9e08126f.js'></script>
<script src="assets\js\bootstrap.min.js"></script>
<script src="assets\js\modernizr.min.js"></script>
</head>
<script>
setTimeout(function () {SUCCESS.innerHTML =""}, 10000);
</script>	
<body>
<!-- Navigation Bar-->
<header id="topnav">
	<div class="topbar-main">
		<div class="container">
			<?php include('logo.php'); ?>

			<?php include('topmenu.php'); ?>
		</div>
	</div>

</header>
<!-- End Navigation Bar-->
<div class="wrapper">
	 <div class="row">
		<div class="col-sm-12" >
			 <h4 class="page-title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Matching Profiles</h4>
		</div>
	</div>
	<div class="container">
	   <div class="row">
			<div class="col-sm-12">
				<div class="card-box table-responsive">
					 <table id="datatable" class="table table-striped dt-responsive nowrap">
						  <thead>
								<tr>
									<th>Photo</th>
									<th>Profile Id</th>
									<th>Name</th>
									<th>Age</th>
									<th>Height</th>
									<th>Native District</th>
								 </tr>
							</thead>
							<tbody>
						<?php
						
							include('conn.php');
							$profileId=$_SESSION['profile_id'];
							$gender = $_SESSION['gender'];
							$caste  = $_SESSION['caste'];
							$fetch_basic_profile_age="select age from tbl_basic_profile where profile_id='$profileId'";	
							$log->info("Age Query".$fetch_basic_profile_age);
							$basic_profile_age_rs= mysqli_query($conn,$fetch_basic_profile_age);
							while($basic_profile_age_row = mysqli_fetch_array($basic_profile_age_rs)) 
								{
								$age=$basic_profile_age_row[0];
								}
													
							$fetch_partner_preferences="select * from tbl_partner_preference where profile_id='$profileId'";	
							$partner_preferences_rs= mysqli_query($conn,$fetch_partner_preferences);
							
							$partner_preferences_numrows=mysqli_num_rows($partner_preferences_rs);
							$log->info("Partner Num Rows:".$partner_preferences_numrows);
							if($partner_preferences_numrows > 0) 
								{
								while($partner_preferences_row = mysqli_fetch_array($partner_preferences_rs)) 
									{
									$lookingFor			= $partner_preferences_row[1];
									$ageFrom			= $partner_preferences_row[2];
									$ageTo				= $partner_preferences_row[3];
									$partnereducation	= $partner_preferences_row[4];
									$partnerCaste		= $partner_preferences_row[5];
									}
								if($ageFrom == "" && $ageTo=="")
									{	
									$log->info("Inside logic :".$ageFrom.$ageTo);
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
								else
									$log->info("Inside logic1111".$ageFrom.$ageTo);		
								}
							else
								{
								$lookingFor   		 = "";
								$partnereducation	 = "";
								$partnerCaste		 = "";
								}	
							
							if($partnerCaste !== "ALL")
							{
								if($gender == "Male")
								{
									$fetch_basic_profile="SELECT distinct photo.imagename, basicprofile.profile_id, basicprofile.last_name, basicprofile.age, phyattr.heightFt, phyattr.heightInch, contactinfo.district, contactinfo.city FROM tbl_basic_profile basicprofile, tbl_profile_photo photo, tbl_physical_attr phyattr, tbl_contact_info contactinfo,tbl_partner_preference pref WHERE basicprofile.profile_id = photo.profile_id AND basicprofile.profile_id = phyattr.profile_id AND basicprofile.profile_id = contactinfo.profile_id AND basicprofile.gender ='Female' and basicprofile.status='Y' AND basicprofile.marital_status='$lookingFor' AND basicprofile.caste='$partnerCaste' AND( basicprofile.age BETWEEN  $ageFrom-2 AND  $ageFrom OR basicprofile.age BETWEEN  $ageFrom-1 AND   $ageFrom OR basicprofile.age BETWEEN  $ageFrom AND  $ageTo OR basicprofile.age BETWEEN   $ageFrom AND  $ageTo+1 OR basicprofile.age BETWEEN  $ageTo AND $ageTo+2)";	
								}
								else
								{
									$fetch_basic_profile="SELECT distinct photo.imagename, basicprofile.profile_id, basicprofile.last_name, basicprofile.age, phyattr.heightFt, phyattr.heightInch, contactinfo.district, contactinfo.city FROM tbl_basic_profile basicprofile, tbl_profile_photo photo, tbl_physical_attr phyattr, tbl_contact_info contactinfo,tbl_partner_preference pref WHERE basicprofile.profile_id = photo.profile_id AND basicprofile.profile_id = phyattr.profile_id AND basicprofile.profile_id = contactinfo.profile_id AND basicprofile.gender ='Male' and basicprofile.status='Y' AND basicprofile.marital_status='$lookingFor' AND basicprofile.caste='$partnerCaste' AND( basicprofile.age BETWEEN  $ageFrom-2 AND  $ageFrom OR basicprofile.age BETWEEN  $ageFrom-1 AND   $ageFrom OR basicprofile.age BETWEEN  $ageFrom AND  $ageTo OR basicprofile.age BETWEEN   $ageFrom AND  $ageTo+1 OR basicprofile.age BETWEEN  $ageTo AND $ageTo+2)";	
								}
							}
							else
							{
								if($gender == "Male")
								{
									$fetch_basic_profile="SELECT distinct photo.imagename, basicprofile.profile_id, basicprofile.last_name, basicprofile.age, phyattr.heightFt, phyattr.heightInch, contactinfo.district, contactinfo.city FROM tbl_basic_profile basicprofile, tbl_profile_photo photo, tbl_physical_attr phyattr, tbl_contact_info contactinfo,tbl_partner_preference pref WHERE basicprofile.profile_id = photo.profile_id AND basicprofile.profile_id = phyattr.profile_id AND basicprofile.profile_id = contactinfo.profile_id AND basicprofile.gender ='Female' and basicprofile.status='Y' AND basicprofile.marital_status='$lookingFor' AND basicprofile.age between '$ageFrom' AND '$ageTo' ";	
								}
								else
								{
									$fetch_basic_profile="SELECT distinct photo.imagename, basicprofile.profile_id, basicprofile.last_name, basicprofile.age, phyattr.heightFt, phyattr.heightInch, contactinfo.district, contactinfo.city FROM tbl_basic_profile basicprofile, tbl_profile_photo photo, tbl_physical_attr phyattr, tbl_contact_info contactinfo,tbl_partner_preference pref WHERE basicprofile.profile_id = photo.profile_id AND basicprofile.profile_id = phyattr.profile_id AND basicprofile.profile_id = contactinfo.profile_id AND basicprofile.gender ='Male' and basicprofile.status='Y' AND basicprofile.marital_status='$lookingFor' AND basicprofile.age between '$ageFrom' AND '$ageTo' ";		
								}
							}
							$log->info('Profile Matching Query:::');
							$log->info($fetch_basic_profile);
							$basic_profile_rs= mysqli_query($conn,$fetch_basic_profile);

							while($basic_profile_row = mysqli_fetch_array($basic_profile_rs)) 
								{
								  echo "<tr>";
								
								   if($basic_profile_row [0]=="noimg.gif")
									{
									echo "<td width='133' height='100'><a href='showpartnerdetails.php?id=$basic_profile_row[1]&senddetails=no&who=notwho'><img src='../images/noimg.gif' border=0 class='img-500'></a></td>";
									}
								else
									{	
									echo "<td width='133' height='100'><img src='../profilepics/$basic_profile_row[0]' border='0' width='133' height='100' class='img-500'></a></td>";
									}
								   echo "<td width=10><a href='showpartnerdetails.php?id=$basic_profile_row[1]&senddetails=no&who=notwho'>".$basic_profile_row[1]."</a></td>";
								 
								  echo "<td>".$basic_profile_row[2]."</td>";
								  echo "<td>".$basic_profile_row[3]."</td>";
								  echo "<td>".$basic_profile_row[4]."ft ".$basic_profile_row[5]."Inch</td>";
								  echo "<td>".$basic_profile_row[6].",".$basic_profile_row[7]."</td>";
								  echo "</tr>";
								} 
							?>
						   </tbody>
						</table>
			
				</div>
			</div>
		</div>
		<br><br><br><br><br><br>
	<?php include('footer.php'); ?>
	</div>
 <?php include('settheme.php'); ?>
</div>



<script src="assets\js\detect.js"></script>
<script src="assets\js\fastclick.js"></script>
<script src="assets\js\jquery.slimscroll.js"></script>
<script src="assets\js\jquery.blockUI.js"></script>
<script src="assets\js\waves.js"></script>
<script src="assets\js\wow.min.js"></script>
<script src="assets\js\jquery.nicescroll.js"></script>
<script src="assets\js\jquery.scrollTo.min.js"></script>

<!-- Datatables-->
<script src="assets\plugins\datatables\jquery.dataTables.min.js"></script>
<script src="assets\plugins\datatables\dataTables.bootstrap.js"></script>
<!--<script src="assets\plugins\datatables\dataTables.buttons.min.js"></script>
<script src="assets\plugins\datatables\buttons.bootstrap.min.js"></script>-->
<script src="assets\plugins\datatables\jszip.min.js"></script>
<script src="assets\plugins\datatables\pdfmake.min.js"></script>
<script src="assets\plugins\datatables\vfs_fonts.js"></script>
<script src="assets\plugins\datatables\buttons.html5.min.js"></script>
<script src="assets\plugins\datatables\buttons.print.min.js"></script>
<script src="assets\plugins\datatables\dataTables.fixedHeader.min.js"></script>
<script src="assets\plugins\datatables\dataTables.keyTable.min.js"></script>
<script src="assets\plugins\datatables\dataTables.responsive.min.js"></script>
<script src="assets\plugins\datatables\responsive.bootstrap.min.js"></script>
<script src="assets\plugins\datatables\dataTables.scroller.min.js"></script>

<!-- Datatable init js -->
<script src="assets\pages\jquery.datatables.init.js"></script>

<!-- App js -->
<script src="assets\js\jquery.core.js"></script>
<script src="assets\js\jquery.app.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
	$('#datatable').dataTable({
           "order": [[ 1, 'desc' ]]
        });
		$('#datatable-keytable').DataTable( { keys: true } );
		$('#datatable-responsive').DataTable();
		$('#datatable-scroller').DataTable( { ajax: "assets/plugins/datatables/json/scroller-demo.json", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
		var table = $('#datatable-fixed-header').DataTable( { fixedHeader: true } );
	} );
	TableManageButtons.init();
</script>
</body>
</html>