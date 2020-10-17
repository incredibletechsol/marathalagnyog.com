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
    <title>Details :: Maratha Lagnyog</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/jquery-ui.css" type="text/css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
	.img {
	height : 340px;
	width  : 446px;
	}
	</style>
</head>

<body>
     <?php include('header.php'); ?>
 <!-- cart-section -->
    <div class="space-medium">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="box">
                        <div class="box-head">
                            <h3 class="head-title">Profile Information</h3>
                        </div>
                        <!-- cart-table-section -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <div class="cart">
                                   <?php
									if(isset($_GET['id']))
									{
										include('conn.php');
										$profileId=$_GET['id'];
									
										$profileinfo="select photo.imagename,basicprofile.last_name,basicprofile.marital_status,basicprofile.religion,basicprofile.caste,basicprofile.age,phyattr.heightFt,phyattr.heightInch,contactinfo.state,contactinfo.district,contactinfo.city,profile.education,profile.occupation from tbl_basic_profile basicprofile,tbl_profile_photo photo,tbl_physical_attr phyattr,tbl_contact_info contactinfo,tbl_profile profile where basicprofile.profile_id=photo.profile_id and basicprofile.profile_id=phyattr.profile_id and basicprofile.profile_id=contactinfo.profile_id and basicprofile.profile_id=profile.profile_id and basicprofile.profile_id='$profileId' ";	
										$profileinfors= mysqli_query($conn,$profileinfo);
									
										while($profileinforow = mysqli_fetch_array($profileinfors)) 
											{
											$photo = $profileinforow[0];
											echo "<table border='0' align='center'>";
										
											echo "<tr>";
													echo "<td height='28' align='left'><b>Name</b></td>";
													echo "<td height='28' width='11'>:</td>";
													echo "<td height='28' align='left'>$profileinforow[1]</td>";
													echo "<td height='28'align='left'><b>Profile ID</b></td>";
													echo "<td height='28' width='11'>:</td>";
													echo "<td height='28' align='left'>$profileId</td>";
													$_SESSION['searchedProfileId']=$profileId;
											echo "</tr>";
											
											echo "<tr>";
													echo "<td height='28' lign='left'><b>Age</b></td>";
													echo "<td height='28' width='11'>:</td>";
													echo "<td height='28' align='left'>$profileinforow[5]</td>";
													echo "<td height='28'></td>";
													echo "<td height='28' width='11'></td>";
													echo "<td height='28'></td>";
											echo "</tr>";
											
											echo "<tr>";
													echo "<td height='28' width='102' align='left'><b>Height</b></td>";
													echo "<td height='28' width='11'>:</td>";
													echo "<td height='28' width='172' align='left'>$profileinforow[6] ft $profileinforow[7] Inch</td>";
													echo "<td height='28' width='161' align='left'><b>Marital Status</b></td>";
													echo "<td height='28' width='11'>:</td>";
													echo "<td height='28' width='115' align='left'>$profileinforow[2]</td>";
											echo "</tr>";
											
											echo "<tr>";
													echo "<td height='28'  align='left'><b>Religion</b></td>";
													echo "<td height='28' width='11'>:</td>";
													echo "<td height='28'  align='left'>$profileinforow[3]</td>";
													echo "<td height='28'  align='left'><b>Caste</b></td>";
													echo "<td height='28' width='11'>:</td>";
													echo "<td height='28'  align='left'>$profileinforow[4]</td>";
											echo "</tr>";
											
											echo "<tr>";
													echo "<td height='28'  align='left'><b>Employed In</b></td>";
													echo "<td height='28' width='11'>:</td>";
													echo "<td height='28'  align='left'>$profileinforow[12]</td>";
													echo "<td height='28' ></td>";
													echo "<td height='28' width='11'></td>";
													echo "<td height='28'></td>";
											echo "</tr>";
											
											echo "<tr>";
													echo "<td height='28' align='left'><b>Residing State</b></td>";
													echo "<td height='28' width='11'>:</td>";
													echo "<td height='28'  align='left'>$profileinforow[8]</td>";
													echo "<td height='28' align='left'><b>City</b></td>";
													echo "<td height='28' width='11'>:</td>";
													echo "<td height='28' align='left'>$profileinforow[10],$profileinforow[9]</td>";
											echo "</tr>";
											
											echo "<tr>";
													echo "<td height='28'  align='left'><b>Education</b></td>";
													echo "<td height='28' width='11'>:</td>";
													echo "<td height='28'  align='left'>$profileinforow[11]</td>";
													echo "<td height='28'></td>";
													echo "<td height='28' width='11'></td>";
													echo "<td height='28'></td>";
											echo "</tr>";
																											
											echo "</table>";
											}
										}		
									?>			
                                      
                                </div>
                                <!-- /.cart-table-section -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- cart-total -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="box mb30">
                        <div class="box-body">
                            <div class=" table-responsive">
                                <div class="pay-amount ">
								<?php
                                  	if($photo == "noimg.gif")
										{
										echo "<img src='images/noimg.gif' border=0>";
										}
									else
										{
										echo "<img src='profilepics/$photo' border='0'>";	
										}
								?>		
                                </div>
                                <button class="btn btn-primary btn-block" onclick="window.location.href='login.php'">Login to Contact</button>
                            </div>
                        </div>
                    </div>
                    <!-- coupon-section 
                    <div class="box mb30">
                        <div class="box-head">
                            <h3 class="head-title">Coupons &amp; Offers</h3>
                        </div>
                        <div class="box-body">
                            <form>
                                <div class="coupon-form">
                                    <input type="text" name="coupon_code" class="form-control" id="coupon_code" value="" placeholder="Coupon code">
                                    <input type="submit" class="btn btn-primary btn-block" name="apply_coupon" value="Apply coupon">
                                </div>
                            </form></div>
                    </div>
                    <!-- /.coupon-section 
                </div>
            </div>
            <!-- /.cart-total -->
        </div>
    </div>
    <!-- /.cart-section -->
    <?php include('footer.php'); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.12.4.min.js" type="text/javascript"></script>
    <script src="js/lightBox-ba9e08126f.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/menumaker.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery.sticky.js"></script>
    <script type="text/javascript" src="js/sticky-header.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <script>
jQuery(document).ready(function(e){e.DNLightBox({speed:500})});
</script>
</body>

</html>