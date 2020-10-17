<?php
session_start(); 
include('logincommon.php'); 
$profileId=$_GET['id'];		
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
<meta name="author" content="Coderthemes">
<link rel="shortcut icon" href="assets\images\favicon.ico">
<title>Partner Profile</title>
<link href="assets\plugins\datatables\jquery.dataTables.min.css" rel="stylesheet" type="text/css">
<link href="assets\plugins\datatables\buttons.bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="assets\plugins\datatables\fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="assets\plugins\datatables\responsive.bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="assets\plugins\datatables\scroller.bootstrap.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="assets\css\lightbox.css">
<link rel="stylesheet" type="text/css" href="assets\css\common.css">
<link rel="stylesheet" href="assets\css\calender.css" type="text/css">
<script src="assets\js\jquery-1.12.4.min.js"></script>
<script src='assets\js\lightBox-ba9e08126f.js'></script>
<script src="assets\js\bootstrap.min.js"></script>
<script src="assets\js\modernizr.min.js"></script>
<script src='assets\js\validations.js'></script>
<?php include('theme.php'); ?>
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
			 <h4 class="page-title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Partner Profile</h4>
		</div>
	</div>
	<div class="container">
	   <div class="row">
			<div class="col-sm-12">
				<div class="card-box">
			
				   <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						<div class="panel panel-default bx-shadow-none">
							<div class="panel-heading" role="tab" id="headingOne">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
									   Profile Photo
									</a>
								</h4>
							</div>
							<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
								<div class="panel-body">
								  
									<div class="row">
										<div class="col-lg-6">
											<div class="card-box">
												<h4 class="header-title m-t-0 m-b-30">Photo</h4>
												<?php include('partnerprofile/profilephoto.php');	?><br>
											</div>
										</div>

										<div class="col-lg-6">
											<div class="card-box">
												<h4 class="header-title m-t-0 m-b-30">Horoscope Photo</h4>
												<?php include('partnerprofile/horoscopephoto.php');  ?><br><br>
												<h4 class="header-title m-t-0 m-b-30">Photo Album</h4>
												<?php include('partnerprofile/photoalbum.php');  ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="panel panel-default bx-shadow-none">
							<div class="panel-heading" role="tab" id="headingTwo">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									   Basic and Contact Details
									</a>
								</h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
								<div class="panel-body">
									<?php include('partnerprofile/basicinformation.php');  ?>
								</div>
							</div>
						</div>
						<div class="panel panel-default bx-shadow-none">
							<div class="panel-heading" role="tab" id="headingThree">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										Physical and Professional Details
									</a>
								</h4>
							</div>
							<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
								<div class="panel-body">
									<?php include('partnerprofile/physicalattributes.php');  ?>
								</div>
							</div>
						</div>
						<div class="panel panel-default bx-shadow-none">
							<div class="panel-heading" role="tab" id="headingThree">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
										Socio Religious and Family Details
									</a>
								</h4>
							</div>
							<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
								<div class="panel-body">
									<?php include('partnerprofile/socioreligious.php');  ?>
								</div>
							</div>
						</div>
						<div class="panel panel-default bx-shadow-none">
							<div class="panel-heading" role="tab" id="headingThree">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
										Partner Preferences
									</a>
								</h4>
							</div>
							<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
								<div class="panel-body">
									<?php include('partnerprofile/partnerpref.php');  ?>
								</div>
							</div>
						</div>
					  </div>
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
<!-- Validation js (Parsleyjs) -->
<script type="text/javascript" src="assets\plugins\parsleyjs\dist\parsley.min.js"></script>
<!-- App js -->
<script src="assets\js\jquery.core.js"></script>
<script src="assets\js\jquery.app.js"></script>
<script type="text/javascript" src="assets\js\zebra_datepicker.js"></script>
<script type="text/javascript" src="assets/js/core.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#datatable').dataTable();
		$('#datatable-keytable').DataTable( { keys: true } );
		$('#datatable-responsive').DataTable();
		$('#datatable-scroller').DataTable( { ajax: "assets/plugins/datatables/json/scroller-demo.json", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
		var table = $('#datatable-fixed-header').DataTable( { fixedHeader: true } );
	} );
	TableManageButtons.init();
</script>
<script>
jQuery(document).ready(function(e){e.DNLightBox({speed:500})});
</script>
<script type="text/javascript">
	$(document).ready(function() {
		$('form').parsley();
	});
</script>
</body>
</html>