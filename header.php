<?php
	error_reporting(0);
date_default_timezone_set('Asia/Calcutta');
?>
   <!-- header-section-->
   <style type="text/css">
  	.modal-login {
		width: 320px;
	}
	.modal-login .modal-content {
		border-radius: 1px;
		border: none;
	}
	.modal-login .modal-header {
        position: relative;
		justify-content: center;
        background: #f2f2f2;
	}
    .modal-login .modal-body {
        padding: 30px;
    }
    .modal-login .modal-footer {
        background: #f2f2f2;
    }
	.modal-login h4 {
		text-align: center;
		font-size: 26px;
	}
    .modal-login label {
        font-weight: normal;
        font-size: 13px;
    }
	
	.modal-login .hint-text {
		text-align: center;
	}
	.modal-login .close {
        position: absolute;
		top: 15px;
		right: 15px;
	}
   
	.modal-login .btn {
        min-width: 100px;
		background: #3498db;
		border: none;
		line-height: normal;
	}
	.modal-login .btn:hover, .modal-login .btn:focus {
		background: #248bd0;
	}
	.modal-login .hint-text a {
		color: #999;
	}
	.trigger-btn {
		display: inline-block;
		margin: 100px auto;
	}
</style>
 
    <div class="header-wrapper">
        <div class="container">
            <div class="row">
                <!-- logo -->
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-8">
                    <div class="logo">
                        <a href="index.php"><img src="./images/logo.png" alt=""> </a>
                    </div>
                </div>
                <!-- /.logo -->
                <!-- search -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="search-bg">
                      
					<form name="searchbyid" method="post" action="searchdata.php" onSubmit="return searchByProfileId(this)">
                        <input type="text" class="form-control" placeholder="Search By Profile Id" name="profileId1" type="text" maxlength="20" id="profileId1" size="20">
                        <button type="Submit" name="searchbyprofileid1"><i class="fa fa-search"></i></button>
					</form>		
                    </div>
                </div>
                <!-- /.search -->
                <!-- account -->
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div>
                        <ul>
                            <li> 
							 <a class="btn btn-default btn-xs mb20" href="#myModal" data-toggle="modal">Login</a>
						<!--	 <a class="btn btn-default btn-xs mb20" href="register.php?registerfrom=desktop">Register</a>-->
						    </li>
					
				        </ul>
                    </div>
                    <!-- /.account -->
                </div>
                <!-- search -->
            </div>
        </div>
        <!-- navigation -->
        <div class="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <!-- navigations-->
                        <div id="navigation">
                            <ul>
                                <li><a href="index.php">Home</a></li>
			                    <li><a href="brides.php">Brides</a></li>
                                <li><a href="grooms.php">Grooms</a></li>
                                <li><a href="feature.php">Features</a></li>
								<li><a href="search.php">Search</a></li>
								<li><a href="rules.php">Rules</a></li>
                                <li><a href="contactus.php">Contact Us</a></li>
                               <!-- <li><a href="#payment" data-toggle="modal">Payments</a></li>-->
                              <li>
                                  
                                    <a href="http://www.marathalagnyog.com/apk/MarathaLagnyog.apk"> 
                                        <img src='images/android16.png' border='0' title='Download Android Mobile App'>
                                    </a>
                             
                              </li>
                       
                            </ul>
                        </div>
                    </div>
                    <!-- /.navigations-->
                </div>
            </div>
        </div>
    </div>
    <!-- /. header-section-->
	
	<!-- Modal HTML -->
	<div id="myModal" class="modal fade">
		<div class="modal-dialog modal-login">
			<div class="modal-content">
				<form action="mobile/doLogin.php" method="post">
					<div class="modal-header">				
						<h4 class="modal-title">Login</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">				
						<div class="form-group">
							<label>Username</label>
							<input type="text" class="form-control" required="required" name="profileId">
						</div>
						<div class="form-group">
							<div class="clearfix">
								<label>Password</label>
							</div>
							
							<input type="password" class="form-control" required="required" name="password">
						</div>
						<input type="hidden" value="loginfromdesktop" name="loginfrom">
					</div>
					<div class="modal-footer">
						<input type="submit" class="btn btn-default btn-xs mb20" value="Login" name="submit">
						<br>
					Forgot Password : Please call us on (+91) 8421055600 
					</div>
					
				</form>
			</div>
		</div>
	</div> 
	
	<div id="payment" class="modal fade">
		<div class="modal-dialog modal-login">
			<div class="modal-content">
				<form action="paymentdetails.php" method="post">
					<div class="modal-header">				
						<h4 class="modal-title">Make Payment Online</h4>
						Online पद्धतीने Payment करण्यासाठी कृपया खालील माहिती भरून Pay Online बटण वर क्लिक करा !
						<button type="button" class="close" data-dismiss="modal" arian-hidden="true">&times;</button>
					</div>
					<div class="modal-body">				
						<div class="form-group">
							<label>Profile Id</label>
							<input type="text" class="form-control" required="required" name="profileId">
						</div>
					</div>
					<div class="modal-footer">
						<input type="submit" class="btn btn-default btn-xs mb20" value="Continue" name="submit">
						<br>
     				</div>
					
				</form>
			</div>
		</div>
	</div> 