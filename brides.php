<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Brides :: Maratha Lagnyog</title>

    <!-- Style CSS -->
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- owl-carousel -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.default.css" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<link href="css/lightbox.css" rel="stylesheet">
	<style>
	.img-500 {
	height : 103px;
	width  : 104px;
	}
	</style>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="mobile\assets\plugins\datatables\jquery.dataTables.min.css" rel="stylesheet" type="text/css">
<link href="mobile\assets\plugins\datatables\buttons.bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="mobile\assets\plugins\datatables\fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="mobile\assets\plugins\datatables\responsive.bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="mobile\assets\plugins\datatables\scroller.bootstrap.min.css" rel="stylesheet" type="text/css">
 <!-- jQuery  -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/lightBox-ba9e08126f.js"></script>
</head>

<body>
    
    <?php include('header.php'); ?>
   
     <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="box">
                          <!-- about description -->
                        <div class="box-head">
                            <h2 class="head-title">Brides</h2>
                        </div>
                        <div class="box-body">
                           <?php
								include('conn.php');
								echo "<div class='row'>";
								echo "<div class='col-sm-12'>";
								echo "<div class='white-box'>";
								echo "<div class='table-responsive'>";
								echo " <table id='datatable' class='table table-striped dt-responsive nowrap'>";
								echo "<thead>";
									echo "<tr>";
										echo "<th>Profile Id</th>";
										echo "<th>Photo</th>";
										echo "<th>Name</th>";
										echo "<th>Caste</th>";
										echo "<th>Age</th>";
										echo "<th>Height</th>";
										echo "<th>Native District</th>";
									echo "</tr>";
								echo "</thead>";
								echo "<tbody>";
								
								$fetch_basic_profile="select photo.imagename,basicprofile.profile_id,basicprofile.last_name,basicprofile.caste,basicprofile.age,phyattr.heightFt,phyattr.heightInch,
								contactinfo.district,contactinfo.city from tbl_basic_profile basicprofile,tbl_profile_photo photo,tbl_physical_attr phyattr,tbl_contact_info contactinfo where basicprofile.profile_id=photo.profile_id and basicprofile.profile_id=phyattr.profile_id  and basicprofile.profile_id=contactinfo.profile_id and basicprofile.gender='Female' and basicprofile.status='Y' order by basicprofile.profile_id desc ";	
								
								$basic_profile_rs= mysqli_query($conn,$fetch_basic_profile);

								while($basic_profile_row = mysqli_fetch_array($basic_profile_rs)) 
									{
									echo "<tr>";
									  echo "<td><a href='showdetails.php?candidate=bride&id=$basic_profile_row[1]'>".$basic_profile_row[1]."</a></td>";
									   if($basic_profile_row [0]=="noimg.gif")
										{
										echo "<td><a href='showdetails.php?candidate=bride&id=$basic_profile_row[1]'><img src='images/noimg.gif' border='0'  class='img-500'></a></td>";
										}
									else
										{	
											echo "<td><img src='profilepics/$basic_profile_row[0]' border='0'  data-title='' data-group='group-1' class='img-responsive 	js-lightBox img-500'></td>";
										}
									  echo "<td>".$basic_profile_row[2]."</td>";
									  echo "<td>".$basic_profile_row[3]."</td>";
									  echo "<td>".$basic_profile_row[4]."</td>";
									  echo "<td>".$basic_profile_row[5]."ft ".$basic_profile_row[6]."Inch</td>";
									  echo "<td>".$basic_profile_row[7].",".$basic_profile_row[8]."</td>";
									  echo "</tr>";
									} 
								echo "</tbody>";  
								echo "</table>";
								echo "</div></div></div></div>";
							//	}
							?>
                        </div>
                          <!-- /.about description -->
                    </div>
                </div>
            </div>
        </div>
       
   <?php include('footer.php'); ?>
	<!-- /#wrapper -->
<!-- jQuery -->

<!-- Datatables-->
<script src="mobile\assets\plugins\datatables\jquery.dataTables.min.js"></script>
<script src="mobile\assets\plugins\datatables\dataTables.bootstrap.js"></script>
<script src="mobile\assets\plugins\datatables\dataTables.buttons.min.js"></script>
<script src="mobile\assets\plugins\datatables\buttons.bootstrap.min.js"></script>
<script src="mobile\assets\plugins\datatables\jszip.min.js"></script>
<script src="mobile\assets\plugins\datatables\pdfmake.min.js"></script>
<script src="mobile\assets\plugins\datatables\vfs_fonts.js"></script>
<script src="mobile\assets\plugins\datatables\buttons.html5.min.js"></script>
<script src="mobile\assets\plugins\datatables\buttons.print.min.js"></script>
<script src="mobile\assets\plugins\datatables\dataTables.fixedHeader.min.js"></script>
<script src="mobile\assets\plugins\datatables\dataTables.keyTable.min.js"></script>
<script src="mobile\assets\plugins\datatables\dataTables.responsive.min.js"></script>
<script src="mobile\assets\plugins\datatables\responsive.bootstrap.min.js"></script>
<script src="mobile\assets\plugins\datatables\dataTables.scroller.min.js"></script>

<!-- Datatable init js -->
<script src="mobile\assets\pages\jquery.datatables.init.js"></script>

<!-- App js -->
<script src="mobile\assets\js\jquery.core.js"></script>
<script src="mobile\assets\js\jquery.app.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
	$('#datatable').dataTable( {
        dom: 'Bfrtip',
        buttons: [
            
        ],
         "order": [[ 1, 'desc' ]]
    });
		$('#datatable-keytable').DataTable( { keys: true } );
		$('#datatable-responsive').DataTable();
		$('#datatable-scroller').DataTable( { ajax: "mobile/assets/plugins/datatables/json/scroller-demo.json", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
		var table = $('#datatable-fixed-header').DataTable( { fixedHeader: true } );
	} );
	TableManageButtons.init();
</script>

    <script src="js/menumaker.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery.sticky.js"></script>
    <script type="text/javascript" src="js/sticky-header.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/multiple-carousel.js"></script>
	<script>
jQuery(document).ready(function(e){e.DNLightBox({speed:500})});
</script>
</body>

</html>