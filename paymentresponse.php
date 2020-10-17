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
    <title>Payment Details :: Maratha Lagnyog</title>

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
</head>

<body>
 <?php include('header.php'); ?>
<!-- mobile showcase -->
<div class="space-medium">
	<div class="container">
	    <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="box checkout-form">
                    <?php  
            		 $secretkey = "90961f3ad161d50f3db326c6a94ddf9ba91025f0";
            		 $orderId = $_POST["orderId"];
            		 $orderAmount = $_POST["orderAmount"];
            		 $referenceId = $_POST["referenceId"];
            		 $txStatus = $_POST["txStatus"];
            		 $paymentMode = $_POST["paymentMode"];
            		 $txMsg = $_POST["txMsg"];
            		 $txTime = $_POST["txTime"];
            		 $signature = $_POST["signature"];
            		 $data = $orderId.$orderAmount.$referenceId.$txStatus.$paymentMode.$txMsg.$txTime;
            		 $hash_hmac = hash_hmac('sha256', $data, $secretkey, true) ;
            		 $computedSignature = base64_encode($hash_hmac);
            		 if ($signature == $computedSignature) {
            	 ?>
            	<div class="container"> 
            	<div class="panel panel-success">
            	  <div class="panel-heading">Signature Verification Successful</div>
            	  <div class="panel-body">
            	  	<!-- <div class="container"> -->
            	 		<table class="table table-hover">
            			    <tbody>
            			      <tr>
            			        <td>Order ID</td>
            			        <td><?php echo $orderId; ?></td>
            			      </tr>
            			      <tr>
            			        <td>Order Amount</td>
            			        <td><?php echo $orderAmount; ?></td>
            			      </tr>
            			      <tr>
            			        <td>Reference ID</td>
            			        <td><?php echo $referenceId; ?></td>
            			      </tr>
            			      <tr>
            			        <td>Transaction Status</td>
            			        <td><?php echo $txStatus; ?></td>
            			      </tr>
            			      <tr>
            			        <td>Payment Mode </td>
            			        <td><?php echo $paymentMode; ?></td>
            			      </tr>
            			      <tr>
            			        <td>Message</td>
            			        <td><?php echo $txMsg; ?></td>
            			      </tr>
            			      <tr>
            			        <td>Transaction Time</td>
            			        <td><?php echo $txTime; ?></td>
            			      </tr>
            			    </tbody>
            			</table>
            		<!-- </div> -->
            
            	   </div>
            	</div>
            	</div>
            	 <?php   
            	  	} else {
            	 
            	 ?>
            	<div class="container"> 
            	<div class="panel panel-danger">
            	  <div class="panel-heading">Signature Verification failed</div>
            	  <div class="panel-body">
            	  	<!-- <div class="container"> -->
            	 		<table class="table table-hover">
            			    <tbody>
            			      <tr>
            			        <td>Order ID</td>
            			        <td><?php echo $orderId; ?></td>
            			      </tr>
            			      <tr>
            			        <td>Order Amount</td>
            			        <td><?php echo $orderAmount; ?></td>
            			      </tr>
            			      <tr>
            			        <td>Reference ID</td>
            			        <td><?php echo $referenceId; ?></td>
            			      </tr>
            			      <tr>
            			        <td>Transaction Status</td>
            			        <td><?php echo $txStatus; ?></td>
            			      </tr>
            			      <tr>
            			        <td>Payment Mode </td>
            			        <td><?php echo $paymentMode; ?></td>
            			      </tr>
            			      <tr>
            			        <td>Message</td>
            			        <td><?php echo $txMsg; ?></td>
            			      </tr>
            			      <tr>
            			        <td>Transaction Time</td>
            			        <td><?php echo $txTime; ?></td>
            			      </tr>
            			    </tbody>
            			</table>
            		<!-- </div> -->
            	  </div>	
            	</div>	
            	</div>
            	
            	<?php	
            	 	}
            	 ?>
                </div>
            </div>
        
        </div>
	</div>
</div>
<!-- /.mobile showcase -->

 <?php include('footer.php'); ?>
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