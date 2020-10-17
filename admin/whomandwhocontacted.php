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
		height : 100px;
		width  : 100px;
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

<?php
	if(isset($_GET['msg']))
		{
		$param=$_GET['msg'];
		if($param == "whomcontacted")
			{
                   $profileId=$_GET['contactid'];
?>

        <div id="content" class="col-lg-10 col-sm-10">
         <!-- content starts -->
		<div class="row">
		<div class="box col-md-12">
			<div class="box-inner">
			<table class="table table-striped dt-responsive nowrap" id='datatable'>
			   <thead>
					 <tr>
                                            <th>Profile Id</th>
                                            <th>Photo</th>
                                            <th>Name</th>
                                            <th>Age</th>
                                            <th>Height</th>
											<th>Native District</th>
										 </tr>
				</thead>
				<tbody>
				<div class="box-header well" data-original-title="">
					<h2><i class="glyphicon glyphicon-user"></i> Whom I Contacted</h2>&nbsp;
				<?php echo "<a href='whomandwhocontacted.php?contactid=$profileId&msg=whocontacted' class='btn btn-warning btn-xs'>Who Contacted Me</a>&nbsp;&nbsp;<a href='matchingprofiles.php?contactid=$profileId&msg=matchingprofiles' class='btn btn-info btn-xs'>Matching Profiles</a>";	?>
				</div>
				<div class="box-content">
				<?php

				$fetch_all_contacted_profiles="select to_profile_id from tbl_request_contact_details where from_profile_id='$profileId'";

				$all_contacted_rs=mysqli_query($conn,$fetch_all_contacted_profiles) or die(mysql_error());

				while($all_contacted_row =  mysqli_fetch_array($all_contacted_rs)) 
				{

				$to_profile_id=$all_contacted_row[0];
				
				$fetch_basic_profile="select photo.imagename,basicprofile.profile_id,basicprofile.last_name,basicprofile.age,phyattr.heightFt,phyattr.heightInch,
				contactinfo.district,contactinfo.city from tbl_basic_profile basicprofile,tbl_profile_photo photo,tbl_physical_attr phyattr,tbl_contact_info contactinfo where basicprofile.profile_id=photo.profile_id and basicprofile.profile_id=phyattr.profile_id  and basicprofile.profile_id=contactinfo.profile_id  and basicprofile.profile_id='$to_profile_id' order by basicprofile.profile_id desc";	

				$basic_profile_rs= mysqli_query($conn,$fetch_basic_profile);

				while($basic_profile_row = mysqli_fetch_array($basic_profile_rs)) 
					{
					  echo "<tr class='odd gradeX'>";
						  echo "<td width=10><a href='showprofiledetails.php?id=$basic_profile_row[1]'>".$basic_profile_row[1]."</a></td>";
						   if($basic_profile_row [0]=="noimg.gif")
							{
							echo "<td width='133' height='100'><img src='../images/noimg.gif' border=0 class='img-500'></td>";
							}
						else
							{	
							echo "<td width='133' height='100'><div style='width:100px;height:133px;'><img src='../profilepics/$basic_profile_row[0]' border='0' width='133' height='100' class='img-500'></div></td>";
							}
						 
						 
						  echo "<td>".$basic_profile_row[2]."</td>";
						  echo "<td>".$basic_profile_row[3]."</td>";
						  echo "<td>".$basic_profile_row[4]."ft ".$basic_profile_row[5]."Inch</td>";
						  echo "<td>".$basic_profile_row[6].",".$basic_profile_row[7]."</td>";
						  echo "</tr>";
					} 
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
		<?php
           }
		 }
        ?>
        
        <?php
	if(isset($_GET['msg']))
		{
		$param=$_GET['msg'];
		if($param == "whocontacted")
			{
                   $profileId=$_GET['contactid'];
?>

        <div id="content" class="col-lg-10 col-sm-10">
         <!-- content starts -->
		<div class="row">
		<div class="box col-md-12">
			<div class="box-inner">
			<table class="table table-striped dt-responsive nowrap" id='datatable1'>
			   <thead>
					 <tr>
                                            <th>Profile Id</th>
                                            <th>Photo</th>
                                            <th>Name</th>
                                            <th>Age</th>
                                            <th>Height</th>
											<th>Native District</th>
										 </tr>
				</thead>
				<tbody>
				<div class="box-header well" data-original-title="">
					<h2><i class="glyphicon glyphicon-user"></i> Who Contacted Me</h2>
				&nbsp;
				<?php echo "<a href='whomandwhocontacted.php?contactid=$profileId&msg=whomcontacted' class='btn btn-warning btn-xs'>Whom I Contacted</a>&nbsp;&nbsp;<a href='matchingprofiles.php?contactid=$profileId&msg=matchingprofiles' class='btn btn-info btn-xs'>Matching Profiles</a>";	?>	
				</div>
				<div class="box-content">
				<?php

				$fetch_all_contacted_profiles="select from_profile_id from tbl_request_contact_details where to_profile_id='$profileId'";

$all_contacted_rs=mysqli_query($conn,$fetch_all_contacted_profiles) or die(mysqli_error($conn));

while($all_contacted_row =  mysqli_fetch_array($all_contacted_rs)) 
{

$from_profile_id=$all_contacted_row[0];


									$fetch_basic_profile="select photo.imagename,basicprofile.profile_id,basicprofile.last_name,basicprofile.age,phyattr.heightFt,phyattr.heightInch,
								contactinfo.district,contactinfo.city from tbl_basic_profile basicprofile,tbl_profile_photo photo,tbl_physical_attr phyattr,tbl_contact_info contactinfo where basicprofile.profile_id=photo.profile_id and basicprofile.profile_id=phyattr.profile_id  and basicprofile.profile_id=contactinfo.profile_id  and basicprofile.profile_id='$from_profile_id' order by basicprofile.profile_id desc";	

									$basic_profile_rs= mysqli_query($conn,$fetch_basic_profile);

									while($basic_profile_row = mysqli_fetch_array($basic_profile_rs)) 
										{
										  echo "<tr class='odd gradeX'>";
										  echo "<td width=10><a href='showprofiledetails.php?id=$basic_profile_row[1]'>".$basic_profile_row[1]."</a></td>";
										   if($basic_profile_row [0]=="noimg.gif")
											{
											echo "<td width='133' height='100'><img src='../images/noimg.gif' border=0 class='img-500'></td>";
											}
										else
											{	
											echo "<td width='133' height='100'><div style='width:100px;height:133px;'><img src='../profilepics/$basic_profile_row[0]' border='0' width='133' height='100' class='img-500'></div></td>";
											}
										 
										 
										  echo "<td>".$basic_profile_row[2]."</td>";
										  echo "<td>".$basic_profile_row[3]."</td>";
										  echo "<td>".$basic_profile_row[4]."ft ".$basic_profile_row[5]."Inch</td>";
										  echo "<td>".$basic_profile_row[6].",".$basic_profile_row[7]."</td>";
										  echo "</tr>";
										} 
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
		<?php
           }
		 }
        ?>
	</div><!--/fluid-row-->

	
     <?php include('footer.php'); ?>

</div><!--/.fluid-container-->

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
    
    $('#datatable1').dataTable( {
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