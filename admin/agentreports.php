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
        echo "<script>window.location.href = 'agentreports.php';</script>";
        }
	}

?>


     <!-- topbar starts -->
    <?php include('agenttopbar.php'); ?>
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">
        
        <!-- left menu starts -->
        <?php include('leftmenuagents.php'); ?>
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