<?php include('logincommon.php') ?>
<html lang="en">
<head>
     <meta charset="utf-8">
     <title> <?php include('title.php'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="css/charisma-app.css" rel="stylesheet">
    <link href='bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='css/jquery.noty.css' rel='stylesheet'>
    <link href='css/noty_theme_default.css' rel='stylesheet'>
    <link href='css/elfinder.min.css' rel='stylesheet'>
    <link href='css/elfinder.theme.css' rel='stylesheet'>
    <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='css/uploadify.css' rel='stylesheet'>
    <link href='css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="bower_components/jquery/jquery.min.js"></script>
    <script src="js/jquery.tools.min.js"></script>
    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">
	<style>
	
	.img-500
		{
		height : 100px;
		width  : 100px;
		}

           .modal {
    background-color:lightyellow;
    display:none;
    width:310px;
	height : 150px;
    padding:20px;
    text-align:left;
    border:4px solid black;

    opacity:0.8;
    -moz-border-radius:6px;
    -webkit-border-radius:6px;
    -moz-box-shadow: 0 0 50px #ccc;
    -webkit-box-shadow: 0 0 50px #ccc;
  }


.modal1 {
    background-color:lightyellow;
    display:none;
    width:325px;
	height : 210px;
    padding:20px;
    text-align:left;
    border:4px solid black;

    opacity:0.8;
    -moz-border-radius:6px;
    -webkit-border-radius:6px;
    -moz-box-shadow: 0 0 50px #ccc;
    -webkit-box-shadow: 0 0 50px #ccc;
  }

.modal2 {
    background-color:lightyellow;
    display:none;
    width:325px;
	height : 240px;
    padding:20px;
    text-align:left;
    border:4px solid black;

    opacity:0.8;
    -moz-border-radius:6px;
    -webkit-border-radius:6px;
    -moz-box-shadow: 0 0 50px #ccc;
    -webkit-box-shadow: 0 0 50px #ccc;
  }
 
	</style>	
<link rel="stylesheet" type="text/css" media="all" href="css/jsDatePick_ltr.min.css" />
<script type="text/javascript" src="js/jsDatePick.min.1.3.js"></script>
<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"regfromdate",
			dateFormat:"%Y-%m-%d"
			
		});

                new JsDatePick({
			useMode:2,
			target:"regtodate",
			dateFormat:"%Y-%m-%d"
			
		});

                new JsDatePick({
			useMode:2,
			target:"actfromdate",
			dateFormat:"%Y-%m-%d"
			
		});

                new JsDatePick({
			useMode:2,
			target:"acttodate",
			dateFormat:"%Y-%m-%d"
			
		});

                new JsDatePick({
			useMode:2,
			target:"regagentfromdate",
			dateFormat:"%Y-%m-%d"
			
		});

                new JsDatePick({
			useMode:2,
			target:"regagenttodate",
			dateFormat:"%Y-%m-%d"
			
		});

                new JsDatePick({
			useMode:2,
			target:"contactfromdate",
			dateFormat:"%Y-%m-%d"
			
		});

                 new JsDatePick({
			useMode:2,
			target:"contacttodate",
			dateFormat:"%Y-%m-%d"
			
		});

                new JsDatePick({
			useMode:2,
			target:"expfromdate",
			dateFormat:"%Y-%m-%d"
			
		});

                 new JsDatePick({
			useMode:2,
			target:"exptodate",
			dateFormat:"%Y-%m-%d"
			
		}); 

	};
</script>


</head>

<body>
<?php
include('excel.php');

if(isset($_GET['msg']))
	{
	$param=$_GET['msg'];
	if($param == "agentreport")
		{
        agentProfiles($_SESSION['agent_id']);
        echo "<script>window.location.href = 'Reports/XLS/agentprofiles.xls';</script>";
        echo "<script>window.location.href = 'reports.php';</script>";
        }
	}


if(isset($_POST["showagentprofiles"]))
{
agentProfiles($_POST['agentId']);
echo "<script>window.location.href = 'Reports/XLS/agentprofiles.xls';</script>";
echo "<script>window.location.href = 'reports.php';</script>";
}

if(isset($_POST["regbetdate"]))
{
$fromdate = $_POST['regfromdate'];
$todate   = $_POST['regtodate'];
profilesRegisteredBetweenDateLimit($fromdate,$todate);
echo "<script>window.location.href = 'Reports/XLS/regdateprofiles.xls';</script>";
echo "<script>window.location.href = 'reports.php';</script>";
}

if(isset($_POST["actbetdate"]))
{
$fromdate = $_POST['actfromdate'];
$todate   = $_POST['acttodate'];
profilesActivatedBetweenDateLimit($fromdate,$todate);
echo "<script>window.location.href = 'Reports/XLS/actdateprofiles.xls';</script>";
echo "<script>window.location.href = 'reports.php';</script>";
}

if(isset($_POST["agentregbetdate"]))
{
$fromdate = $_POST['regagentfromdate'];
$todate   = $_POST['regagenttodate'];
agentProfilesRegDate($_POST['agentId'],$fromdate,$todate);
echo "<script>window.location.href = 'Reports/XLS/agentprofiles.xls';</script>";
echo "<script>window.location.href = 'reports.php';</script>";
}


if(isset($_POST["whomIContacted"]))
{
$fromdate = $_POST['contactfromdate'];
$todate   = $_POST['contacttodate'];
whomIContacted($_POST['profileId'],$fromdate,$todate);
echo "<script>window.location.href = 'Reports/XLS/whomIContacted.xls';</script>";
echo "<script>window.location.href = 'reports.php';</script>";
}

if(isset($_POST["whoContactedMe"]))
{
$fromdate = $_POST['contactfromdate'];
$todate   = $_POST['contacttodate'];
whoContactedMe($_POST['profileId'],$fromdate,$todate);
echo "<script>window.location.href = 'Reports/XLS/whoContactedMe.xls';</script>";
echo "<script>window.location.href = 'reports.php';</script>";
}

if(isset($_POST["expbetdate"]))
{
$fromdate = $_POST['expfromdate'];
$todate   = $_POST['exptodate'];
profilesExpiredBetweenDateLimit($fromdate,$todate);
echo "<script>window.location.href = 'Reports/XLS/expirydatelimits.xls';</script>";
echo "<script>window.location.href = 'reports.php';</script>";
}
 
?>


     <!-- topbar starts -->
    <?php include('topbar.php'); ?>
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">
        
        <!-- left menu starts -->
        <?php include('leftmenu.php'); ?>
        <!-- left menu ends -->

       <?php include('noscripts.php'); ?>

        <div id="content" class="col-lg-10 col-sm-10">
         <!-- content starts -->
		<div class="row">
		<div class="box col-md-12">
			<div class="box-inner">
				<div class="box-header well" data-original-title="">
					<h2><i class="glyphicon glyphicon-user"></i> Reports</h2>
					
				</div>
				<div class="box-content">
				<?php
				                 echo "<img src='images/xls.jpg' border=0>&nbsp;<a href='agentreports.php?msg=agentreport'><b>Profiles Registered by me</b></a>"; 
                                 AllProfiles();
                                 echo "<br><br><img src='images/xls.jpg' border=0>&nbsp;<a href='Reports/XLS/allprofiles.xls'><b>List Of All Profiles</b></a>";

                                 AllDeactivatedProfiles();
                                 echo "<br><br><img src='images/xls.jpg' border=0>&nbsp;<a href='Reports/XLS/deactprofiles.xls'><b>List Of All Deactivated Profiles</b></a>";

                                 AllAgents();
                                 echo "<br><br><img src='images/xls.jpg' border=0>&nbsp;<a href='Reports/XLS/allagents.xls'><b>List Of All Agents</b></a>";  
                                
                                 echo "<br><br><img src='images/xls.jpg' border=0>&nbsp;<a href='#' class='modalInput' rel='#mypopup1'><b>List Of All Profiles Registered between a Specific Date Limit</b></a>";  

                                 echo "<br><br><img src='images/xls.jpg' border=0>&nbsp;<a href='#' class='modalInput' rel='#mypopup2'><b>List Of All Profiles Activated between a Specific Date Limit</b></a>"; 
                                                                 
                                 echo "<br><br><img src='images/xls.jpg' border=0>&nbsp;<a href='#' class='modalInput' rel='#mypopup'><b>List Of All Profiles Registered by an Agent</b></a>"; 
                                
                                 echo "<br><br><img src='images/xls.jpg' border=0>&nbsp;<a href='#' class='modalInput' rel='#mypopup3'><b>List Of All Profiles Registered by an Agent between a Specific Date Limit</b></a>"; 
                                
                                 echo "<br><br><img src='images/xls.jpg' border=0>&nbsp;<a href='#' class='modalInput' rel='#mypopup4'><b>Whom I Contacted / Who Contacted Me</b></a>"; 
                                
                                 CurrentlyExpiringProfiles();
                                 echo "<br><br><img src='images/xls.jpg' border=0>&nbsp;<a href='Reports/XLS/curexpprofiles.xls'><b>Current Expiring Profiles</b></a>"; 
                                
                                 AlreadyExpiredProfiles();
                                 echo "<br><br><img src='images/xls.jpg' border=0>&nbsp;<a href='Reports/XLS/alreadyexpprofiles.xls'><b>Profiles Which are Already Expired </b></a>"; 
                                
                                 echo "<br><br><img src='images/xls.jpg' border=0>&nbsp;<a href='#' class='modalInput' rel='#mypopup5'><b>Profiles Expired between a Specific date limit</b></a>"; 
                            
                                 ?>
				</div>
			</div>
		</div>
		<!--/span-->

		</div><!--/row-->
		<!-- content ends -->
		</div><!--/#content.col-md-0-->
	</div><!--/fluid-row-->

		

     <?php include('footer.php'); ?>

</div><!--/.fluid-container-->

<div class="modal" id="mypopup">
<?php
include('../conn.php');

$fetch_agents="select agent_id,first_name,last_name from tbl_agent_profile ";

$fetch_agent_rs=mysqli_query($conn,$fetch_agents)  or die(mysqli_error($conn));

$nagents=mysqli_num_rows($fetch_agent_rs);

echo "<form name='showagentprofiles' method='post' action='reports.php'>";
if($nagents > 0)
{
echo "Agent Id:<select name='agentId' id='agentId' class='form-control' style='width:175px'>";
while($fetch_agent_row=mysqli_fetch_array($fetch_agent_rs))
     {
     echo "<option value='$fetch_agent_row[0]'>$fetch_agent_row[1]&nbsp;$fetch_agent_row[2]($fetch_agent_row[0])</option>";
     }
echo "</select>";
echo "&nbsp;&nbsp;<br><input type='submit' name='showagentprofiles' value='Generate' class='btn btn-success btn-xs'>";
echo "&nbsp;&nbsp;<button class='btn btn-success btn-xs'>Cancel</button>";
}
echo "</form>";
?>

 
</div>


<div class="modal1" id="mypopup1">
   <form name="actdates" method="post" action="reports.php">
	    <table border="0" width="296" height="106">
	 
	    
			<tr>
				<td height="46" width="115">*From Date</td>
				<td height="46" width="12"><b>:</b></td>
				<td height="46" width="147">
				<input type="text" id="regfromdate" size="12" name="regfromdate" class='form-control' readonly/>
				</td>
			</tr>

			<tr>
				<td height="46" width="115">*To Date</td>
				<td height="46" width="12"><b>:</b></td>
				<td height="46" width="147">
				<input type="text" id="regtodate" size="12" name="regtodate" class='form-control' readonly/>
				</td>
			</tr>

			<tr>
				<td height="50" width="286" colspan="3" align=center><input type="submit" class="btn btn-success btn-xs" value="Generate" name="regbetdate"> <button class="btn btn-success btn-xs"> Cancel </button></td>
			</tr>
		</table>
     </form>
</div>

<div class="modal1" id="mypopup2">
   <form name="actdates" method="post" action="reports.php">
	    <table border="0" width="296" height="106">
	 
	    
			<tr>
				<td height="46" width="115">*From Date</td>
				<td height="46" width="12"><b>:</b></td>
				<td height="46" width="147">
				<input type="text" id="actfromdate" size="12" name="actfromdate" class='form-control' readonly/>
				</td>
			</tr>

			<tr>
				<td height="46" width="115">*To Date</td>
				<td height="46" width="12"><b>:</b></td>
				<td height="46" width="147">
				<input type="text" id="acttodate" size="12" name="acttodate" class='form-control' readonly/>
				</td>
			</tr>

			<tr>
				<td height="50" width="286" colspan="3" align=center><input type="submit" class="btn btn-success btn-xs" value="Generate" name="actbetdate"> <button class="btn btn-success btn-xs"> Cancel </button></td>
			</tr>
		</table>
     </form>
</div>




<div class="modal2" id="mypopup3">
   <form name="agentregdates" method="post" action="reports.php">
	    <table border="0" width="296" height="106">
	

<tr>
				<td height="46" width="115">*Agent Id</td>
				<td height="46" width="12"><b>:</b></td>
				<td height="46" width="147">
				                <?php
include('../conn.php');

$fetch_agents="select agent_id,first_name,last_name from tbl_agent_profile ";

$fetch_agent_rs=mysqli_query($conn,$fetch_agents)  or die(mysqli_error($conn));

$nagents=mysqli_num_rows($fetch_agent_rs);

if($nagents > 0)
{
echo "<select name='agentId' id='agentId' class='form-control' style='width:175px'>";
while($fetch_agent_row=mysqli_fetch_array($fetch_agent_rs))
     {
     echo "<option value='$fetch_agent_row[0]'>$fetch_agent_row[1]&nbsp;$fetch_agent_row[2]($fetch_agent_row[0])</option>";
     }
echo "</select>";
}
?>
				</td>
			</tr>
	    
			<tr>
				<td height="46" width="115">*From Date</td>
				<td height="46" width="12"><b>:</b></td>
				<td height="46" width="147">
				<input type="text" id="regagentfromdate" size="12" name="regagentfromdate" class='form-control' readonly/>
				</td>
			</tr>

			<tr>
				<td height="46" width="115">*To Date</td>
				<td height="46" width="12"><b>:</b></td>
				<td height="46" width="147">
				<input type="text" id="regagenttodate" size="12" name="regagenttodate" class='form-control' readonly/>
				</td>
			</tr>

			<tr>
				<td height="50" width="286" colspan="3" align=center><input type="submit" class="btn btn-success btn-xs" value="Generate" name="agentregbetdate"> <button class="btn btn-success btn-xs"> Cancel </button></td>
			</tr>
		</table>
     </form>
</div>


<div class="modal2" id="mypopup4">
   <form name="whomwhocontacted" method="post" action="reports.php">
	    <table border="0" width="296" height="106">
	

<tr>
				<td height="46" width="115">*Profile Id</td>
				<td height="46" width="12"><b>:</b></td>
				<td height="46" width="147">
				                <?php
include('../conn.php');

$fetch_profiles="select profile_id,first_name,last_name from tbl_basic_profile order by first_name asc";

$fetch_profile_rs=mysqli_query($conn,$fetch_profiles)  or die(mysqli_error($conn));

$nprofiles=mysqli_num_rows($fetch_profile_rs);

if($nprofiles> 0)
{
echo "<select name='profileId' id='profileId' class='form-control' style='width:175px'>";
while($fetch_profile_row=mysqli_fetch_array($fetch_profile_rs))
     {
     echo "<option value='$fetch_profile_row[0]'>$fetch_profile_row[1]&nbsp;$fetch_profile_row[2]($fetch_profile_row[0])</option>";
     }
echo "</select>";
}
?>
				</td>
			</tr>
	    
			<tr>
				<td height="46" width="115">*From Date</td>
				<td height="46" width="12"><b>:</b></td>
				<td height="46" width="147">
				<input type="text" id="contactfromdate" size="12" name="contactfromdate" class='form-control' readonly/>
				</td>
			</tr>

			<tr>
				<td height="46" width="115">*To Date</td>
				<td height="46" width="12"><b>:</b></td>
				<td height="46" width="147">
				<input type="text" id="contacttodate" size="12" name="contacttodate" class='form-control' readonly/>
				</td>
			</tr>

			
                         <tr>
				<td height="50" width="296" colspan="3" align=left>
                                <input type="submit" class="btn btn-success btn-xs" value="Whom Contacted" name="whomIContacted">&nbsp;&nbsp;<input type="submit" class="btn btn-success btn-xs" value="Who Contacted" name="whoContactedMe">&nbsp;&nbsp;  <button class="btn btn-success btn-xs"> Cancel </button></td>    
                                </td>
			</tr>
		</table>
     </form>
</div>


<div class="modal1" id="mypopup5">
   <form name="exptdates" method="post" action="reports.php">
	    <table border="0" width="296" height="106">
	 
	    
			<tr>
				<td height="46" width="115">*From Date</td>
				<td height="46" width="12"><b>:</b></td>
				<td height="46" width="147">
				<input type="text" id="expfromdate" size="12" name="expfromdate" class='form-control' readonly/>
				</td>
			</tr>

			<tr>
				<td height="46" width="115">*To Date</td>
				<td height="46" width="12"><b>:</b></td>
				<td height="46" width="147">
				<input type="text" id="exptodate" size="12" name="exptodate" class='form-control' readonly/>
				</td>
			</tr>

			<tr>
				<td height="50" width="286" colspan="3" align=center><input type="submit" class="btn btn-success btn-xs" value="Generate" name="expbetdate"> <button class="btn btn-success btn-xs"> Cancel </button></td>
			</tr>
		</table>
     </form>
</div>


<script>
$(document).ready(function() {
    var triggers = $(".modalInput").overlay({

      // some mask tweaks suitable for modal dialogs
      mask: {
        color: '#ebecff',
        loadSpeed: 200,
        opacity: 0.9
      },

      closeOnClick: false
  });
  
    var buttons = $("#yesno button").click(function(e) {

      // get user input
      var yes = buttons.index(this) === 0;

      // do something with the answer
      triggers.eq(0).html("You clicked " + (yes ? "yes" : "no"));
  });
  
    $("#prompt form").submit(function(e) {

      // close the overlay
      triggers.eq(1).overlay().close();

      // get user input
      var input = $("input", this).val();

      // do something with the answer
      triggers.eq(1).html(input);

      // do not submit the form
      return e.preventDefault();
  });
  });
</script>

<!-- external javascript -->

<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='bower_components/moment/min/moment.min.js'></script>
<script src='bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="js/charisma.js"></script>


</body>
</html>