<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>MarathaLagnYog </title>

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
	
	<style>
	.img-500 {
	height : 103px;
	width  : 104px;
	}
	</style>
	<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="js/datatables/plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
<link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet">
</head>

<body>
    
    <?php include('header.php'); ?>
   
     <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="box">
                        <div class="box-body">
                            <?php 
						
							if(isset($_POST['searchbyprofileid']))
							{
							$profileId  	= $_POST['profileId'];
							$fetch_basic_profile="select photo.imagename,basicprofile.profile_id,basicprofile.last_name,basicprofile.caste,basicprofile.age,phyattr.heightFt,phyattr.heightInch,
							contactinfo.district,contactinfo.city from tbl_basic_profile basicprofile,tbl_profile_photo photo,tbl_physical_attr phyattr,tbl_contact_info contactinfo where basicprofile.profile_id=photo.profile_id and basicprofile.profile_id=phyattr.profile_id  and basicprofile.profile_id=contactinfo.profile_id and basicprofile.profile_id='$profileId' and basicprofile.status='Y' ";	
							Search($fetch_basic_profile);		
							}
							if(isset($_POST['searchbyprofileid1']))
							{
							$profileId  	= $_POST['profileId1'];
							$fetch_basic_profile="select photo.imagename,basicprofile.profile_id,basicprofile.last_name,basicprofile.caste,basicprofile.age,phyattr.heightFt,phyattr.heightInch,
							contactinfo.district,contactinfo.city from tbl_basic_profile basicprofile,tbl_profile_photo photo,tbl_physical_attr phyattr,tbl_contact_info contactinfo where basicprofile.profile_id=photo.profile_id and basicprofile.profile_id=phyattr.profile_id  and basicprofile.profile_id=contactinfo.profile_id and basicprofile.profile_id='$profileId' and basicprofile.status='Y' ";	
							Search($fetch_basic_profile);		
							}
							if(isset($_POST['searchbydistrict']))
							{
							$district   	= $_POST['district'];
							$gender     	= $_POST['gender'];
						
							$fetch_basic_profile="select photo.imagename,basicprofile.profile_id,basicprofile.last_name,basicprofile.caste,basicprofile.age,phyattr.heightFt,phyattr.heightInch,
							contactinfo.district,contactinfo.city from tbl_basic_profile basicprofile,tbl_profile_photo photo,tbl_physical_attr phyattr,tbl_contact_info contactinfo where basicprofile.profile_id=photo.profile_id and basicprofile.profile_id=phyattr.profile_id  and basicprofile.profile_id=contactinfo.profile_id and contactinfo.district='$district' and basicprofile.gender='$gender' and basicprofile.status='Y' ";
							Search($fetch_basic_profile);
							}
							if(isset($_POST['searchbyeducation']))
							{
								
								$district   	= $_POST['district'];
								$education   	= $_POST['education'];
								$gender     	= $_POST['gender'];
								
								$fetch_basic_profile="select photo.imagename,basicprofile.profile_id,basicprofile.last_name,basicprofile.caste,basicprofile.age,phyattr.heightFt,phyattr.heightInch,
								contactinfo.district,contactinfo.city from tbl_basic_profile basicprofile,tbl_profile_photo photo,tbl_physical_attr phyattr,tbl_contact_info contactinfo,tbl_profile profile where basicprofile.profile_id=photo.profile_id and basicprofile.profile_id=phyattr.profile_id  and basicprofile.profile_id=contactinfo.profile_id and basicprofile.profile_id=profile.profile_id and contactinfo.district='$district' and basicprofile.gender='$gender' and profile.education='$education' and basicprofile.status='Y' ";	
								Search($fetch_basic_profile);
							}
							
							if(isset($_POST['searchbycaste']))
							{
								
								$district   	= $_POST['district'];
								
								$gender     	= $_POST['gender'];
								$caste          = $_POST['caste'];
								$fetch_basic_profile="select photo.imagename,basicprofile.profile_id,basicprofile.last_name,basicprofile.caste,basicprofile.age,phyattr.heightFt,phyattr.heightInch,
								contactinfo.district,contactinfo.city from tbl_basic_profile basicprofile,tbl_profile_photo photo,tbl_physical_attr phyattr,tbl_contact_info contactinfo,tbl_profile profile where basicprofile.profile_id=photo.profile_id and basicprofile.profile_id=phyattr.profile_id  and basicprofile.profile_id=contactinfo.profile_id and basicprofile.profile_id=profile.profile_id and contactinfo.district='$district' and basicprofile.gender='$gender' and basicprofile.caste='$caste' and basicprofile.status='Y'";	
								Search($fetch_basic_profile);
							}
							
							
							if(isset($_POST['advancesearch']))
							{
								$district   	= $_POST['district'];
								$gender  	= $_POST['gender'];
								$caste          = $_POST['caste'];
								$ageFrom        = $_POST['ageFrom'];
								$ageTo          = $_POST['ageTo'];
								$fetch_basic_profile="select photo.imagename,basicprofile.profile_id,basicprofile.last_name,basicprofile.caste,basicprofile.age,phyattr.heightFt,phyattr.heightInch,contactinfo.district,contactinfo.city from tbl_basic_profile basicprofile,tbl_profile_photo photo,tbl_physical_attr phyattr,tbl_contact_info contactinfo,tbl_profile profile where basicprofile.profile_id=photo.profile_id and basicprofile.profile_id=phyattr.profile_id  and basicprofile.profile_id=contactinfo.profile_id and basicprofile.profile_id=profile.profile_id and contactinfo.district='$district' and basicprofile.gender='$gender' and basicprofile.status='Y' and basicprofile.caste='$caste' AND( basicprofile.age BETWEEN  $ageFrom-2 AND  $ageFrom OR basicprofile.age BETWEEN  $ageFrom-1 AND   $ageFrom OR basicprofile.age BETWEEN  $ageFrom AND  $ageTo OR basicprofile.age BETWEEN   $ageFrom AND  $ageTo+1 OR basicprofile.age BETWEEN  $ageTo AND $ageTo+2)";
								Search($fetch_basic_profile);
							}
					
							function Search($fetch_basic_profile)
								{
								include('conn.php');
								echo "<div class='row'>";
								echo "<div class='col-sm-12'>";
								echo "<div class='white-box'>";
								echo "<div class='table-responsive'>";
								echo " <table id='example23' class='display nowrap' cellspacing='0' width='100%'>";
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
								//include('MyLogPHP.class.php');
								//$log = new MyLogPHP('logs/logs.log');
								//$log->info('Search Query:::');
								//$log->info($fetch_basic_profile);
																
								$basic_profile_rs= mysqli_query($conn,$fetch_basic_profile) or die(mysqli_query($conn));

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
									echo "<td><a href='showdetails.php?candidate=bride&id=$basic_profile_row[1]'><img src='profilepics/$basic_profile_row[0]' border='0' class='img-500'></a></td>";
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
							}
							
							
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
<script src="js/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="js/datatables/plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
<!-- start - This is for export functionality only -->
<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
<!-- end - This is for export functionality only -->
<script>
    $(document).ready(function(){
      $('#myTable').DataTable();
      $(document).ready(function() {
        var table = $('#example').DataTable({
          "columnDefs": [
          { "visible": false, "targets": 2 }
          ],
          "order": [[ 2, 'asc' ]],
          "displayLength": 25,
          "drawCallback": function ( settings ) {
            var api = this.api();
            var rows = api.rows( {page:'current'} ).nodes();
            var last=null;

            api.column(2, {page:'current'} ).data().each( function ( group, i ) {
              if ( last !== group ) {
                $(rows).eq( i ).before(
                  '<tr class="group"><td colspan="5">'+group+'</td></tr>'
                  );

                last = group;
              }
            } );
          }
        } );

    // Order by the grouping
    $('#example tbody').on( 'click', 'tr.group', function () {
      var currentOrder = table.order()[0];
      if ( currentOrder[0] === 2 && currentOrder[1] === 'asc' ) {
        table.order( [ 2, 'desc' ] ).draw();
      }
      else {
        table.order( [ 2, 'asc' ] ).draw();
      }
    });
  });
    });
    $('#example23').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            
        ],
         "order": [[ 1, 'desc' ]]
    });
  </script>
    <script src="js/menumaker.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery.sticky.js"></script>
    <script type="text/javascript" src="js/sticky-header.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/multiple-carousel.js"></script>
</body>

</html>