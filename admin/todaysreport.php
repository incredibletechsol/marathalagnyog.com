<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width" />
<title>Vertical jQuery Image Carousel with Text </title>
<script type='text/javascript' src='../scripts/jquery.min.js'></script>
<script type='text/javascript' src='http://amazingcarousel.com/wp-content/uploads/amazingcarousel/sharedengine/amazingcarousel.js?ver=1.2'></script>
<link rel="stylesheet" type="text/css" media="all" href="../styles/initcarousel.css" />
<script src="../scripts/initcarousel.js"></script>

</head>

<body>
<div id="main">
	<div id="primary">
		<div class="demo-slider">
			<div id="amazingcarousel-container-3">
				<div id="amazingcarousel-3" style="display:block;position:relative;width:240px;margin:0px auto 0px;">
					<div class="amazingcarousel-list-container" style="overflow:hidden;">
						<ul class="amazingcarousel-list">

<?php
include('../conn.php');
$create_date    =date('Y-m-d');

$fetch_todays_agent="select distinct agent.agent_id,agent.first_name,agent.last_name from tbl_agent_profiles agentprofiles ,tbl_agent_profile agent where agentprofiles.agent_id=agent.agent_id and agentprofiles.create_date='$create_date' and agentprofiles.status='Pending'";

$fetch_todays_agent_rs=mysqli_query($conn,$fetch_todays_agent)  or die(mysqli_error($conn));

$nagents=mysqli_num_rows($fetch_todays_agent_rs);

echo "<form name='showagentprofiles' method='post' action='dash.php?msg=showagentprofiles'>";
if($nagents > 0)
{
echo "Agent Id:<select name='agentId' id='agentId' class='form-control' style='width:135px'>";
while($fetch_todays_agent_row=mysqli_fetch_array($fetch_todays_agent_rs))
     {
     echo "<option value='$fetch_todays_agent_row[0]'>$fetch_todays_agent_row[1]&nbsp;$fetch_todays_agent_row[2]($fetch_todays_agent_row[0])</option>";
     }
echo "</select>";
echo "&nbsp;&nbsp;<input type='submit' name='showagentprofiles' value='Go' class='btn btn-success btn-xs'><br><br>";
}
else
{
echo "<img src='../images/warning.gif'>&nbsp;No Profiles Registered!!";
}

if(isset($_POST['showagentprofiles']))
{
$agentsId =$_POST['agentId'];

$fetch_pending_profiles="select photo.imagename,basicprofile.first_name,basicprofile.last_name,basicprofile.profile_id from tbl_profile_photo photo,tbl_agent_profiles profiles,tbl_basic_profile basicprofile where profiles.profile_id=photo.profile_id and basicprofile.profile_id=photo.profile_id and basicprofile.profile_id=profiles.profile_id and profiles.create_date='$create_date' and profiles.status='Pending' and profiles.agent_id='$agentsId'";

$fetch_pending_profiles_rs=mysqli_query($conn,$fetch_pending_profiles) or die(mysqli_error($conn));
echo "<li class='amazingcarousel-item'>";
while($fetch_pending_profiles_row =mysqli_fetch_array($fetch_pending_profiles_rs))
{

	echo "<div class='amazingcarousel-item-container'>";
	echo "<div class='amazingcarousel-image'>";
	if($fetch_pending_profiles_row [0]=="noimg.gif")
		{
		echo "<a href='showprofiledetails.php?id=$fetch_pending_profiles_row[3]'><img src='../images/noimg.gif' border='0' width='133' height='100' class='img-500'></a>";
		}
	else
		{	
		echo "<a href='showprofiledetails.php?id=$fetch_pending_profiles_row[3]'><img src='../profilepics/$fetch_pending_profiles_row[0]' border='0'  class='img-500'></a>";
		}
	echo "</div>";
	echo "<div class='amazingcarousel-text'>";
		echo "<div class='amazingcarousel-title'><a href='showprofiledetails.php?id=$fetch_pending_profiles_row[3]'>$fetch_pending_profiles_row[1]&nbsp;$fetch_pending_profiles_row[2]</a></div>";
		echo "<div class='amazingcarousel-description'><a href='showprofiledetails.php?id=$fetch_pending_profiles_row[3]'>Profile Id:$fetch_pending_profiles_row[3]</a></div>";
	echo "</div>";
	echo "<div style='clear:both;'></div>";
	echo "</div>";

										 
}
echo "</li>";
}
?>
						

						</ul>
					</div>
						<div class="amazingcarousel-prev"></div>
						<div class="amazingcarousel-next"></div>
						<div class="amazingcarousel-nav"></div>
						<div class="amazingcarousel-engine" style="display:none;"><a href="http://amazingcarousel.com">JavaScript Carousel</a></div>
						<div class="amazingcarousel-engine" style="display:none;"><a href="http://amazingcarousel.com">WordPress Scroller</a></div>
				</div>
			</div>
			
		</div>			
	</div>
</div>
</body>
</html>