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
                    <!-- checkout - form -->
                    <div class="box-head">
                        <h2 class="head-title">Your Details</h2>
                        <?php
                        $profileId  = $_POST['profileId'];
                        ?>
                    </div>
                    <?php
                        include('conn.php');
                        
						$fetch_basic_profile="select b.first_name, b.last_name,c.email_Id,c.mobile_no from tbl_basic_profile b, tbl_contact_info c where b.profile_id = c.profile_id and b.profile_id='$profileId'";	
						$basic_profile_rs= mysqli_query($conn,$fetch_basic_profile);
						while($basic_profile_row = mysqli_fetch_array($basic_profile_rs)) 
							{
								$firstName = $basic_profile_row['first_name'];	
								$lastName  = $basic_profile_row['last_name'];
								$email_Id    = $basic_profile_row['email_Id'];
								$mobile_no = $basic_profile_row['mobile_no'];
							}
						?>
                    <div class="box-body">
                        <div class="row">
                             <form id="redirectForm" method="post" action="paymentrequest.php">
                                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label sr-only" for="name"></label>
                                        Profile Id :<input type="text" class="form-control" value="<?php echo $profileId; ?>" name="orderId" readonly>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label sr-only" for="name"></label>
                                        Name  :<input type="text" class="form-control" value="<?php echo $firstName." ".$lastName;; ?>" name="customerName" readonly>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label sr-only" for="name"></label>
                                        Email<input type="text" class="form-control" value="<?php echo $email_Id; ?>" name="customerEmail" readonly>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label sr-only" for="name"></label>
                                        Mobile No :<input type="text" class="form-control" value="<?php echo $mobile_no; ?>" name="customerPhone" readonly>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label sr-only" for="name"></label>
                                        Amount : <input type="text" class="form-control" value="2" name="orderAmount" orderAmount>
                                    </div>
                                </div>
                              
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                      <!-- Hidden Fields -->
                                       <input type="hidden" name="appId" value="405597f2d1013521dae4e56a5504"/>
                                       <input type="hidden" name="orderCurrency" value="INR"/>
                                       <input type="hidden" name="orderNote" value="Order From MarathaLagnyog"/>
                                       <input type="hidden" name="returnUrl" value="http://www.marathalagnyog.com/paymentresponse.php"/>
                                       <input type="hidden" name="notifyUrl" value="http://www.marathalagnyog.com/paymentresponse.php"/>
                                    </div>
                                    <button class="btn btn-primary ">Pay Online</button>
                                </div>
                            </form>
                                <!-- /.checkout-form -->
                        </div>
                    </div>
                </div>
            </div>
                <!-- product total -->
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="box mb30">
                    <div class="box-head">
                        <h3 class="head-title">Profile Photo</h3>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <div class="pay-amount ">
                               <?php
                              	$fetch_photo_query="SELECT imagename FROM tbl_profile_photo where profile_id='$profileId'";
                            	$photo_rs= mysqli_query($conn,$fetch_photo_query);
                               	while($photo_row = mysqli_fetch_array($photo_rs)) 
                            		{
                            		if($photo_row[0]=="noimg.gif")
                            			{
                            			echo "<img src='/images/noimg.gif' border=0 class='img-responsive img-thumbnail'>";
                            			}
                            		else
                            			{	
                            			echo "<img src='/profilepics/$photo_row[0]' border=0 width='200' height='100'>";
                            			}
                            		}
                                ?>
                            </div>
                            <!-- /.product total -->
                        </div>
                    </div>
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