<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Contact :: Maratha Lagnyog</title>
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

<body>

    <?php include('header.php'); ?>

      <!-- contact-form -->
    <div class="content">
        <div class="container">
            <div class="row">
                
                            <!-- address-block -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="box">
                        <div class="box-head">
                            <h2 class="head-title">Contact Info</h2>
                        </div>
                        <div class="box-body">
                            <div class="contact-block">
                                <h4> <span class="contact-icon"><i class="fa fa-map-marker"></i></span>Office Address</h4>
                                <p>Shop No 1 Near Wale Hospital,<br>
									Navrang Chowk,
									Mangalwedha,Solapur-413305</p>
                            </div>
                            <div class="contact-block">
                                <h4>General Contact</h4>
                                <p class="mb0"><span class="contact-icon"><i class="fa fa-phone"></i></span>Phone: <span class="text-default">(+91) 8421055600</span></p>
                                <p class="mb0"> <span class="contact-icon"><i class="fa fa-envelope"></i></span>Email: <span class="text-default">info@marathalagnyog.com</span></p>
                            </div>
                            <div class="contact-block">
                                <span class="contact-icon"><i class="fa fa-whatsapp" aria-hidden="true"></i></span>
                                <span class="contact-text">
                                    <a href="https://api.whatsapp.com/send?phone=918421055600&text=Hi!%21%20I am interested in MarathaLagnyog.Please Generate and Activate my Profile Id." target="_blank"> Send Us Patrika and Photo on WhatsApp.<br>
                                    We will upload and generate Profile Id,Password for you.</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.address-block -->
            </div>
           
        </div>
    </div>
      
   <?php include('footer.php'); ?>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/menumaker.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery.sticky.js"></script>
    <script type="text/javascript" src="js/sticky-header.js"></script>
    <script>
    function initMap() {
        var uluru = {
            lat: 23.094197,
            lng: 72.558148
        };
        var map = new google.maps.Map(document.getElementById('contact-map'), {
            zoom: 14,
            center: uluru,
            scrollwheel: false
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map,
            icon: 'images/map_pin.png'

        });
    }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZib4Lvp0g1L8eskVBFJ0SEbnENB6cJ-g&callback=initMap">
    </script>
</body>

</html>