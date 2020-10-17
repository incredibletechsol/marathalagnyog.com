<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="create ecommerce website template for your online store, responsive mobile templates">
    <meta name="keywords" content="ecommerce website templates, online store,">
    <title>Welcome To Maratha Lagnyog </title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet">
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
	height : 250px;
	width  : 250px;
	}
	</style>
	  
</head>

<body>

	 <?php include('header.php'); ?>
    <!-- slider -->
    <div class="slider">
        <div class="owl-carousel owl-one owl-theme">
            <div class="item">
                <div class="slider-img"><img src="./images/banner_01.jpg" alt=""></div>
            </div>
            <div class="item">
                <div class="slider-img"><img src="./images/banner_02.jpg" alt=""></div>
             </div>
            <div class="item">
                <div class="slider-img"><img src="./images/slider_3.jpg" alt=""></div>
            </div>
        </div>
    </div>
    <!-- /.slider -->

   
    <!-- Latest Brides -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="box">
                    <div class="box-head">
                        <h3 class="head-title">Latest Brides</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-carousel">
            <div class="box-body">
                <div class="row">
                    <div class="owl-carousel owl-two owl-theme">
                        <?php
						include('latest.php');
						fetchLatestBrideOrGroom('Female');
						?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Latest Brides -->
    <!-- Latest Grooms -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="box">
                    <div class="box-head">
                        <h3 class="head-title">Latest Grooms</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-carousel">
            <div class="box-body">
                <div class="row">
                    <div class="owl-carousel owl-two owl-theme">
                         <?php
						fetchLatestBrideOrGroom('Male');
						?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Latest Grooms -->
  
   <?php include('footer.php'); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/menumaker.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery.sticky.js"></script>
    <script type="text/javascript" src="js/sticky-header.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/multiple-carousel.js"></script>
</body>

</html>