<?php
$gender=$_SESSION['gender'];
?>
<div class="navbar-custom navbar-left">
	<div id="navigation">
		<!-- Navigation Menu-->
		<ul class="navigation-menu">
			<li>
				<a href="matchingprofiles.php">
					<span><i class="zmdi zmdi-view-dashboard"></i></span>
					<span> Matching Profiles </span> </a>
			</li>
			
			<li class="has-submenu">
				<a href="myprofile.php"> <span><i class="zmdi zmdi-collection-item"></i></span><span>My Profile</span> </a>
			</li>
			
			<li class="has-submenu">
				<a href="whomcontacted.php"> <span><i class="zmdi zmdi zmdi-invert-colors"></i></span><span>Whom I Contacted</span></a>
			</li>
			
			<li class="has-submenu">
				<a href="whocontacted.php"> <span><i class="zmdi zmdi-invert-colors"></i></span><span>Who Contacted Me</span> </a>
			</li>
			
			<li class="has-submenu">
				<a href="#"> <span><i class="zmdi zmdi-layers"></i></span><span>Search</span> </a>
				<ul class="submenu">
				<li><a href="search.php">Advanced Search</a></li>
				<?php

				if($gender == "Female") 
					echo "<li><a href='allgrooms.php'>Grooms</a></li>"; 
				else 
					echo "<li><a href='allbrides.php'>Brides</a></li>"; 
				?>
				</ul>
			</li>

		</ul>
		<!-- End navigation menu  -->
	</div>
</div>


<div class="menu-extras">

	<ul class="nav navbar-nav navbar-right pull-right">
		
		<li class="dropdown user-box">
			<a href="" class="dropdown-toggle waves-effect waves-light profile " data-toggle="dropdown" aria-expanded="true">
				<img src="assets\images\users\avatar-1.jpg" alt="user-img" class="img-circle user-img">
				<div class="user-status away"><i class="zmdi zmdi-dot-circle"></i></div>
			</a>

			<ul class="dropdown-menu">
			    <li><a href="#" data-toggle="modal" data-target="#panel-modal"><i class="ti-settings m-r-5"></i>Themes</a></li>
				<li><a href="logout.php"><i class="ti-power-off m-r-5"></i> Logout</a></li>
			</ul>
		</li>
	</ul>
	<div class="menu-item">
		<!-- Mobile menu toggle-->
		<a class="navbar-toggle">
			<div class="lines">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</a>
		<!-- End mobile menu toggle-->
	</div>
</div>