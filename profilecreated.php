<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="keywords" content="">
<title> Maratha Lagnyog </title>
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
<link href="css/owl.carousel.css" rel="stylesheet">
<link href="css/owl.theme.default.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
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
					  <!-- about description -->
					<div class="box-body">
					  <p align='center'>
                        <?php
                        error_reporting(0);
                        date_default_timezone_set('Asia/Calcutta');
                        session_start();
                        $profile_id=$_SESSION['profile_id'];
                        echo "<h3><img src='images/Correct.png'>&nbsp;&nbsp;Your Profile has been Created Successfully.</h3>";
                        echo "<br><h3>Your Profile Id is :".$profile_id."</h3>";
                        ?>
                        <h4>Please call us on (+91) 8421055600 to activate your profile.</h4>
                        </p>

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
<script src="js/menumaker.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.sticky.js"></script>
<script type="text/javascript" src="js/sticky-header.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/multiple-carousel.js"></script>
</body>
</html>