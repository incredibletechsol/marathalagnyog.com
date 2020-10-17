<?php error_reporting(0); ?>
<div class="col-sm-2 col-lg-2">
	<div class="sidebar-nav">
		<div class="nav-canvas">
			<div class="nav-sm nav nav-stacked">

			</div>
			<ul class="nav nav-pills nav-stacked main-menu">
			 
				<li>
					<a class="ajax-link" href="dash.php"><i class="glyphicon glyphicon-home"></i><span> Dashboard</span></a>
				</li>
				<li>
					<a class="ajax-link" href="profiles.php"><i class="glyphicon glyphicon-eye-open"></i><span> Profiles</span></a>
				</li>
				<li>
					<a class="ajax-link" href="agents.php"><i class="glyphicon glyphicon-edit"></i><span> Agents</span></a>
				</li>
                                 <li>
					<a class="ajax-link" href="adminnewprofile.php"><i class="glyphicon glyphicon-plus"></i><span> New Profile</span></a>
				</li>
                                <li>
				<a class="ajax-link" href="deleteprofiles.php"><i class="glyphicon glyphicon-ban-circle"></i><span> Delete Profiles</span></a>
				</li>
                                </li>
                                 <li>
				<a class="ajax-link" href="expiredprofiles.php"><i class="glyphicon glyphicon-lock"></i><span>Expired Profiles</span></a>
				</li>
                                <li>
					<a class="ajax-link" href="adminMyProfiles.php"><i
                                    class="glyphicon glyphicon-star"></i><span> My Profiles</span></a>
				</li>
                                 <?php
                                   $isSuperAdmin=$_SESSION['isSuperAdmin'];
                                   if($isSuperAdmin == 'Y')
                                   {
                                 ?>
				<li>
					<a class="ajax-link" href="reports.php"><i class="glyphicon glyphicon-list-alt"></i><span> Reports</span></a>
				</li>
				
				<li>
					<a class="ajax-link" href="adminpayments.php"><i class="glyphicon glyphicon-list-alt"></i><span> Payments</span></a>
				</li>
				
				<li>
				<?php getSmsBalance(); ?>
				</li>
                                <?php
                                  }
                                ?>

			</ul>
			<!-- <label id="for-is-ajax" for="is-ajax"><input id="is-ajax" type="checkbox"> Ajax on menu</label> -->
		</div>
	</div>
	
</div>
<!--/span-->

<?php
function getSmsBalance() {
    $url = "http://cannyinfotech.in/api/mt/GetBalance?User=maratha&Password=maratha@lagnyog";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // For HTTPS
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); // For HTTPS
    $response =  curl_exec($ch);
    $statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE); // Returns 200 if everything went well
    if($statusCode==200)
    {
        $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $header = substr($response, 0, $header_size);
        $body = substr($response, $header_size);
      // echo $response;
        $json_a = json_decode($response, true);
    
       foreach ($json_a as $key => $value){
           if($key == "Balance"){
               $balance = substr($value, 14);
               echo "&nbsp;&nbsp;&nbsp;<font color='green'><b> SMS Balance =".$balance."</b></font>";
           }
               
        }
    
    }
    else
    { 
        echo "<br>Not Working";
    }
    
    curl_close($ch);
}
?>