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
					<h2><i class="glyphicon glyphicon-user"></i>Delete Profiles</h2>
					
				</div>
				<div class="box-content">
					<table class="table table-striped dt-responsive nowrap" id="datatable">
							   <thead>
                                        <tr>
                                            <th>Profile Id</th>
                                            <th>Name</th>
                             		        <th>Mobile No</th>
					                        <th>Registration DateTime</th>
                                            <th>Delete</th>
                
					                    </tr>
                                    </thead>
                                    <tbody>
									<?php
										include('../conn.php');
										$fetch_basic_profile="select basicprofile.profile_id,basicprofile.first_name,basicprofile.last_name,							contactinfo.mobile_no,DATE_FORMAT(basicprofile.create_datetime,'%d-%m-%Y %T') from tbl_basic_profile basicprofile,tbl_profile_photo photo,tbl_physical_attr phyattr,tbl_contact_info contactinfo where basicprofile.profile_id=photo.profile_id and basicprofile.profile_id=phyattr.profile_id  and basicprofile.profile_id=contactinfo.profile_id and basicprofile.status in('N','A') order by basicprofile.profile_id desc ";	
										
										$basic_profile_rs= mysqli_query($conn,$fetch_basic_profile);

										while($basic_profile_row = mysqli_fetch_array($basic_profile_rs)) 
											{
											  echo "<tr class='odd gradeX'>";
											  echo "<td width=10><a href='showprofiledetails.php?id=$basic_profile_row[0]'>".$basic_profile_row[0]."</a></td>";
											  echo "<td >".$basic_profile_row[1]."&nbsp;".$basic_profile_row[2]."</td>";
											  echo "<td>".$basic_profile_row[3]."</td>";
                                              echo "<td>".$basic_profile_row[4]."</td>";
                                              echo "<td><a href='dash.php?id=$basic_profile_row[0]&msg=remove' class='btn btn-danger'>Delete</a></td>";
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