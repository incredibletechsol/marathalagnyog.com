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
                <div class="text-center">
                    <h4 class="text-uppercase font-bold m-b-0">Login</h4>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal m-t-10" id="loginform" action="doLogin.php" method="post">
					
						<?php 
						if(isset($_GET['msg'])) 
							{ 
							$param=$_GET['msg'];
							if($param == "failed")
								{
								echo "<div id='ERROR'><div class='alert alert-danger alert-dismissable'";
								echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times; </button>";
								echo "<font face='calibri'>Invalid Profile Id / Password</font></div></div>";
								}  
							if($param == "inactive")
								{
								echo "<div class='alert alert-danger alert-dismissable' id='ERROR'>";
								echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times; </button>";
								echo "<font face='calibri'>Your Account is not Active.Please call our System Admin on +91 8421055600.</font></div>";
								}  	
							} 
						?>

						<div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required="" placeholder="Profile Id" name="profileId">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" required="" placeholder="Password" name="password">
                            </div>
                        </div>


						<div class="form-group text-center m-t-30">
                            <div class="col-xs-12">
                            	<input type="submit" name="submit" value="Login" class="btn-custom btn-bordred text-uppercase" />
                            </div>
                        </div>
						<input type="hidden" value="loginfrommobile" name="loginfrom">
						<div align='left'><a href="register.php?registerfrom=mobile"><u>New Registration</u></a>&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;
						<a href="#" data-toggle="modal" data-target="#con-close-modal"><u>Forgot Password ?</u></a></div>
					</form>

                </div>
            </div>
            <!-- end card-box -->
		</div>
        <!-- end wrapper page -->

		 <!--Create Bachat Gat - Start -->
            <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Forgot Password ?</h4>
                        </div>
                        <div class="modal-body">
                            Please call us on (+91) 8421055600  !!!
                        </div>
                   </div>
                </div>
            </div>
             <!--Create Bachat Gat - End -->


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