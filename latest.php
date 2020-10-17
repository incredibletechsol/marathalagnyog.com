<?php

function fetchLatestBrideOrGroom($gender) {
	
	include('conn.php');
	$featured_brides="select photo.imagename,basicprofile.profile_id,basicprofile.last_name,basicprofile.age,phyattr.heightFt,phyattr.heightInch,
	contactinfo.district,contactinfo.city from tbl_basic_profile basicprofile,tbl_profile_photo photo,tbl_physical_attr phyattr,tbl_contact_info contactinfo where basicprofile.profile_id=photo.profile_id and basicprofile.profile_id=phyattr.profile_id  and basicprofile.profile_id=contactinfo.profile_id and basicprofile.gender='$gender' and basicprofile.status='Y' order by profile_id desc limit 0,10";
	$featured_brides_rs= mysqli_query($conn,$featured_brides);
	while($featured_brides_row = mysqli_fetch_array($featured_brides_rs)) 
	{
	echo "<div class='item'>";
		echo "<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>";
			echo " <div class='product-block'>";
				
					if($featured_brides_row [0]=="noimg.gif")
					{
					echo "<div class='product-img'><a href='showdetails.php?candidate=bride&id=$featured_brides_row[1]'><img src='images/noimg.gif' border=0 class='img-500'></a></div>";
					}
					else
					{
					echo "<div class='product-img'><a href='showdetails.php?candidate=bride&id=$featured_brides_row[1]'><img src='profilepics/$featured_brides_row[0]' border=0 class='img-500'></a></div>";
					}
																								
					echo "<div class='product-content'>Profile ID:$featured_brides_row[1]";
					echo "<div class='product-meta'><a href='#' class='product-price'>$featured_brides_row[3] years </a> <span class='offer-price'>$featured_brides_row[7]</span></div>";
					echo "</div>";	
			echo "</div>";
		echo "</div>";
	echo "</div>";	
	}
}

?>