<!DOCTYPE html>
<html lang="en">

<head>
<script type="text/javascript" src="//goraps.com/mobile_redir.php?section=General&pub=652788&ga=g"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title> Login :: Maratha Lagnyog</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
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
</head>
	<script>
setTimeout(function () {ERROR.innerHTML =""}, 10000);
</script>	
<body>
   <?php include('header.php'); ?>
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

    <div class="content">
        <div class="container">
            <div class="box">
                <div class="row">
                    <div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-12 col-xs-12 ">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12 mb20">
                                    <h3 class="mb10">Login</h3>
                                </div>
                                <!-- form -->
                                <form action="mobile/doLogin.php" method="post">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label sr-only" for="email"></label>
                                            <div class="login-input">
                                                <input id="profileId" name="profileId" type="text" class="form-control" placeholder="Profile Id"  required>
                                                <div class="login-icon"><i class="fa fa-user"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label sr-only"></label>
                                            <div class="login-input">
                                                <input name="password" type="password" class="form-control" placeholder="******"  required>
                                                <div class="login-icon"><i class="fa fa-lock"></i></div>
                                                <div class="eye-icon"><i class="fa fa-eye"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb20 ">
                                        <input type="submit" class="btn btn-primary btn-block mb10" value="Login" name="submit">
                                    </div>
									<input type="hidden" value="loginfromdesktop" name="loginfrom">
                                </form>
                             </div>
                        </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
       <!-- /.login-form -->
     <?php include('footer.php'); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/menumaker.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery.sticky.js"></script>
    <script type="text/javascript" src="js/sticky-header.js"></script>
<script data-ad-client="ca-pub-8840987383982605" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</body>

</html>