<!DOCTYPE html>
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

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">
	<script type="text/javascript" src="js/customalert.js"></script>
	<link rel="stylesheet" type="text/css" href="css/customalert.css" />
	
				
		<script type="text/javascript">

		function setColor(el, bg) 
		{
		  if (el.style) el.style.backgroundColor = bg;
		}
		
		function validateLoginForm(form) 
		{
		  var bgBad = "lightyellow";
		  var bgGood = "lightgreen";
		  var valid = true;
		  var errmsg="";
		  
		  
		   /* Agent Id validation */
		  if (form.agentId.value == "") {
		    valid = false;
		    setColor(form.agentId, bgBad);
		  
		  } else {
		    setColor(form.agentId, bgGood);
		  }
		 
		  /* Password validation */
		  if (form.password.value == "") {
		    valid = false;
		    setColor(form.password, bgBad);
		  
		  } else {
		    setColor(form.password, bgGood);
		  }
				  
		errmsg=errmsg+"\n Please fill both the fields ";
		
		if (!valid) 
			createCustomAlert(errmsg,"","Errors");
			
			
		return valid;
		}
		
		
       function nospaces()
	   {
	   var agentId=document.login.agentId.value;
	   var password=document.login.password.value;

		if(agentId.match(/\s/g))
		  {
		   agentId=agentId.replace(/\s/g,'');
		   document.login.agentId.value="";
		  }

		if(password.match(/\s/g))
		  {
		   password=password.replace(/\s/g,'');
		   document.login.password.value="";
		  }
	   }
	</script>
</head>

<body>

<div class="ch-container">
    <div class="row">
    <br>    
    <div class="row">
        <div class="col-md-12 center login-header">
            <img src="../images/logo.png" border=0>
        </div>
    </div>
	<br><br>
    <div class="row">
        <div class="well col-md-5 center login-box">
		 <div class="alert alert-danger">
			<p align="center"><img src="../images/warning.gif" border="0">&nbsp;&nbsp;<b><font color="red">Invalid Username / Password </font></b></p>
		 </div>		
            <form name="login" class="form-horizontal" action="doLogin.php" method="post" onSubmit="return validateLoginForm(this)">
                <fieldset>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"> Agent Id &nbsp;&nbsp;&nbsp;<i class="glyphicon glyphicon-user red"></i></span>
                       <input type="text" class="form-control" name="agentId" onkeyup="nospaces()">
                    </div>
                    <div class="clearfix"></div><br>

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"> Password&nbsp;&nbsp;<i class="glyphicon glyphicon-lock red"></i></span>
                        <input type="password" class="form-control" name="password" onkeyup="nospaces()">
                    </div>
                    <div class="clearfix"></div>

                    <div class="clearfix"></div>

                    <p class="center col-md-5">
                        <input type="submit" name="submit" value="Login" class="btn btn-primary">
                    </p>
                </fieldset>
            </form>
        </div>
        <!--/span-->
    </div><!--/row-->
</div><!--/fluid-row-->

</div><!--/.fluid-container-->

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
