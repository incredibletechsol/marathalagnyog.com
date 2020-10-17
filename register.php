<!DOCTYPE html>
<html lang="en">

<head>
<script data-ad-client="ca-pub-8840987383982605" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title> Register :: Maratha Lagnyog</title>
    <!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/register.css" type="text/css" media="screen"/>
	<script type="text/javascript" src="js/validations.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jq.stepform.js"></script>

		<script src="js/bootstrap.min.js"></script>
    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
	.input-res{
	  width: 100%;
	  max-width: 250px;
	  padding: 12px;
	  border: 1px solid #ccc;
	  border-radius: 4px;
	  box-sizing: border-box;
	  resize: vertical;
	}
	.select-res{
	  width: 100%;
	  max-width: 80px;
	  padding: 12px;
	  border: 1px solid #ccc;
	  border-radius: 4px;
	  box-sizing: border-box;
	  resize: vertical;
	}
	.select1-res{
	  width: 100%;
	  max-width: 150px;
	  padding: 12px;
	  border: 1px solid #ccc;
	  border-radius: 4px;
	  box-sizing: border-box;
	  resize: vertical;
	}
	.select2-res{
	  width: 100%;
	  max-width: 50px;
	  padding: 12px;
	  border: 1px solid #ccc;
	  border-radius: 4px;
	  box-sizing: border-box;
	  resize: vertical;
	}
	</style>

	<link rel="stylesheet" href="css/calender.css" type="text/css">

	<link rel="stylesheet" type="text/css" media="all" href="css/jsDatePick_ltr.min.css" />
	<script>
	    function testFunction()
        {
           alert("Hello");
        }
	</script>
</head>

<body>
   <?php include('header.php'); ?>

    <!-- sign-up form -->
    <div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="box">
					  <!-- about description -->
					<div class="box-head">
						<h2 class="head-title">Registration</h2>  
						<p align='center'>You can download the registration form and send it on Whatsapp with your photo.We will activate your account.
						<a href="downloads/Form.pdf">Download Registration Form</a></p>
					</div>
					<div class="box-body">
					   	<?php include('registersteps.php'); ?>
					</div>
					  <!-- /.about description -->
				</div>
			</div>
		</div>
    </div>
    <!-- /.sign-up form -->
	
     <?php include('footer.php'); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <!-- Include all compiled plugins (below), or include individual files as needed -->
 
    <script src="js/menumaker.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery.sticky.js"></script>
    <script type="text/javascript" src="js/sticky-header.js"></script>
	<script type="text/javascript" src="js/zebra_datepicker.js"></script>
	<script type="text/javascript" src="js/core.js"></script>
	
</body>
</html>