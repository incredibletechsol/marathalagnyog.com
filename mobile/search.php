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
<title>Search</title>
<!-- DataTables -->
<link href="assets\plugins\datatables\jquery.dataTables.min.css" rel="stylesheet" type="text/css">
<link href="assets\plugins\datatables\buttons.bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="assets\plugins\datatables\fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="assets\plugins\datatables\responsive.bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="assets\plugins\datatables\scroller.bootstrap.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="assets\css\lightbox.css">
<link rel="stylesheet" type="text/css" href="assets\css\common.css">
<?php include('theme.php'); ?>
 <!-- jQuery  -->
<script src="assets\js\jquery.min.js"></script>
<script src="assets\js\bootstrap.min.js"></script>
<script src="assets\js\modernizr.min.js"></script>
</head>
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
<br>
<div class="wrapper">
	  <!-- Page-Title -->
		<div class="row">
			<div class="col-sm-12" >
				 <h4 class="page-title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Search</h4>
			</div>
		</div>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="card-box table-responsive">
				<?php include('search1.php'); ?>
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
		$('#datatable').dataTable();
		$('#datatable-keytable').DataTable( { keys: true } );
		$('#datatable-responsive').DataTable();
		$('#datatable-scroller').DataTable( { ajax: "assets/plugins/datatables/json/scroller-demo.json", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
		var table = $('#datatable-fixed-header').DataTable( { fixedHeader: true } );
	} );
	TableManageButtons.init();
</script>

</body>
</html>