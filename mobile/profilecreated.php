<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App Favicon -->
        <link rel="shortcut icon" href="assets\images\favicon.ico">

        <!-- App title -->
        <title>Maratha LagnYog</title>
        <!-- App CSS -->
        <?php include('theme.php'); ?>

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="assets\js\modernizr.min.js"></script>
    
        <style>
            body {
                background-image: url("assets/images/bg.png");
                background-repeat: no-repeat;
              }  
        </style>

    </head>
	<script>
setTimeout(function () {ERROR.innerHTML =""}, 10000);
</script>	
    <body>

        <div class="text-center logo-alt-box">
            <a href="#" class="logo"> <span><span>Maratha LagnYog</span></span></a>
        </div>

        <div class="wrapper-page">

        	<div class="m-t-30 card-box">
                 <p align='center'>
                    <?php
                    error_reporting(0);
                    date_default_timezone_set('Asia/Calcutta');
                    session_start();
                    $profile_id=$_SESSION['profile_id'];
                    echo "<h5><img src='../images/Correct.png'>&nbsp;Your Profile has been Created Successfully.</h5>";
                    echo "<br><h5>Your Profile Id is :".$profile_id."</h5><br>";
                    ?>
                <h4>Please call us on (+91) 8421055600 to activate your profile.</h4>
                </p>
            </div>
            <!-- end card-box -->
		</div>
        <!-- end wrapper page -->

	

    	<script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets\js\jquery.min.js"></script>
        <script src="assets\js\bootstrap.min.js"></script>
        <script src="assets\js\detect.js"></script>
        <script src="assets\js\fastclick.js"></script>
        <script src="assets\js\jquery.slimscroll.js"></script>
        <script src="assets\js\jquery.blockUI.js"></script>
        <script src="assets\js\waves.js"></script>
        <script src="assets\js\wow.min.js"></script>
        <script src="assets\js\jquery.nicescroll.js"></script>
        <script src="assets\js\jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="assets\js\jquery.core.js"></script>
        <script src="assets\js\jquery.app.js"></script>

	</body>
</html>