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
    <link href="../mobile/assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
<link href="../mobile/assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="../mobile/assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="../mobile/assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="../mobile/assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css">

	<script type="text/javascript">

	function setColor(el, bg) 
		{
		  if (el.style) el.style.backgroundColor = bg;
		}
		
	function checkInput(form) 
		{
	
			  var bgBad = "#FF9999";
			  var bgGood = "#66FFCC";
			  var valid = true;
			  var errmsg="";
			  
			 /* First Name  validation */ 		  
			 if (form.firstName.value == "") {
				error_firstname.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter First Name";
				setTimeout(function () {error_firstname.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_firstname.innerHTML ="";
				setColor(form.firstName, bgGood);
			  }
			  
			  /* Last Name  validation */ 		  
			 if (form.lastName.value == "" ) {
				error_lastname.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter Last Name";
				setTimeout(function () {error_lastname.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_lastname.innerHTML ="";
				setColor(form.lastName, bgGood);
			  }
			  
			  /* Gender  validation */ 		  
			 if (form.gender.value == "") {
				error_gender.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please select Gender";
				setTimeout(function () {error_gender.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_gender.innerHTML ="";
				setColor(form.gender, bgGood);
			  }
                         
			  /* Mobile No validation */ 		  
			 if (form.mobileNo.value == "") {
				error_mobileNo.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter your 10 digit Mobile No";
				setTimeout(function () {error_mobileNo.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_mobileNo.innerHTML ="";
				setColor(form.mobileNo, bgGood);
			  }
			  
			  /* Mobile No validation */ 		  
			 if (form.mobileNo.value.length < 10 ) {
				error_mobileNo.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter valid 10 digit Mobile No";
				setTimeout(function () {error_mobileNo.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_mobileNo.innerHTML ="";
				setColor(form.mobileNo, bgGood);
			  }
			  		  
			  /* Role validation */ 		  
			 if (form.role.value == "") {
				error_role.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please select Role";
				setTimeout(function () {error_role.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_role.innerHTML ="";
				setColor(form.role, bgGood);
			  }
									
			return valid;
		}
		
	function isNumberKey(evt)
       {
		  var chCode = (evt.which) ? evt.which : event.keyCode
		  if (chCode != 46 && chCode > 31 
			&& (chCode < 48 || chCode > 57))
			 return false;
		  else
		  return true;
       }
		       
    function isAlpha(keyCode)
       {
         return ((keyCode >= 65 && keyCode <= 90) || keyCode == 8 || keyCode == 32 || keyCode == 9 || keyCode == 46)
       }
	   
	function CheckPhotoExt()
	{
		var fup = document.getElementById('photo');
     	var fileName = fup.value;
		var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
		if(ext == "jpg" || ext == "png" || ext == "gif" || ext == "bmp")
			{
			return true;
			} 
		else
		{
			fileName="";
			error_photo.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Upload .jpg,.png,.gif,.bmp files only.";
			document.getElementById('photo').value="";
			fup.focus();
			return false;
		}
	}
	
	function save()
		{
		var b=new Boolean();	
		b=checkInput(document.addAgent);
		if (!b) 
			{
			ERROR.innerHTML ="<h4><img src='images/cross.png' border='0'>&nbsp;&nbsp;Error : Please correct the fields and try submitting again</h4>";
			setTimeout(function () {ERROR.innerHTML =""}, 12000);
			}
		else
			{
			document.addAgent.action="agents.php?msg=save";
			document.addAgent.submit();			
			}
		}
		
		function validateAlternateNo()
		{
		 /* Alternate Mobile No validation */ 		  
		 if (document.addAgentaddAgent.alternateMobileNo.value.length < 10 ) {
			error_alternateMobileNo.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter valid 10 digit Mobile No";
			setTimeout(function () {error_alternateMobileNo.innerHTML =""}, 10000);
			valid = false;
		  } else {
			error_alternateMobileNo.innerHTML ="";
			//setColor(document.register.alternateMobileNo, bgGood);
		  }
		}
		
	

        function nospaces()
           {
           var firstName=document.addAgent.firstName.value;
           var lastName=document.addAgent.lastName.value;
           var mobileNo=document.addAgent.mobileNo.value;

           if(firstName.match(/\s/g))
              {
               firstName=firstName.replace(/\s/g,'');
               document.addAgent.firstName.value="";
              }

           if(lastName.match(/\s/g))
              {
               lastName=lastName.replace(/\s/g,'');
               document.addAgent.lastName.value="";
              }
        
           if(mobileNo.match(/\s/g))
              {
               mobileNo=mobileNo.replace(/\s/g,'');
               document.addAgent.mobileNo.value="";
              }
         }
		
	</script>
	
	
	<style>
	
	.img-500
		{
		height : 100px;
		width  : 100px;
		}
		
		#mask {
		  position:absolute;
		  left:0;
		  top:0;
		  z-index:99998;
		  background-color: #4D4D4D;
		  display:none;
		}  
		
		#boxes .window
		{
		  position:absolute;
		  left:0;
		  top:0;
		  width:350px;
		  height:150px;
		  display:none;
		  z-index:99999;
		  padding:10px;
		  -moz-border-radius: 10px;
		  -webkit-border-radius: 10px;
		  border-radius: 10px;
		  border: 4px solid #333333;
		  
		  -moz-box-shadow:4px 4px 30px #130507;
			-webkit-box-shadow:4px 4px 30px #130507;
		  box-shadow:4px 4px 30px #130507;
			-moz-transition:top 800ms;
			-o-transition:top 800ms;
			-webkit-transition:top 800ms;
		  transition:top 800ms;
		  margin-left : 0px;
		}
		
		#boxes #dialog
		{
		  width:350px; 
		  height:150px;
		  padding:0px;
		  background-color: #FFFFFF;
		}	
		
	</style>
	
</head>

<body>
<?php
	include("../conn.php");
	include('MyLogPHP.class.php');
	$log = new MyLogPHP('adminlogs/logs.log');	
	if(isset($_GET['msg']))
		{
			$param=$_GET['msg'];
			if($param == "save")
				{
				$firstName = $_POST['firstName'];

				$lastName  = $_POST['lastName'];

				$gender    = $_POST['gender'];

				$mobileNo  = $_POST['mobileNo'];	
				
				$role	   = $_POST['role']; 
				
				$create_datetime=date('Y-m-d h:i:s');
				
				if (!empty($_SERVER["HTTP_CLIENT_IP"]))
					{
					$ipAddress = $_SERVER["HTTP_CLIENT_IP"];
					}
				elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"]))
					{
					$ipAddress = $_SERVER["HTTP_X_FORWARDED_FOR"];
					}
				else
					{
					$ipAddress = $_SERVER["REMOTE_ADDR"];
					}
				
				$agent_insert = "INSERT INTO tbl_agent_profile(first_name,last_name,gender,mobile_no,alternate_mobile_no,country,state,photoname,role,create_datetime,ip_address,status,isSuperAdmin,password) values('$firstName','$lastName','$gender','$mobileNo','$mobileNo','India','Maharashtra','noimg.gif','$role','$create_datetime','$ipAddress','N','N','123456')";
				
				$log->info("Inserting new Agent Data :::".$agent_insert);						 
				
				mysqli_query($conn,$agent_insert) or die(mysqli_error());
				
				$log->info("Agent Data inserted");
				?>
				
				<script type="text/javascript">
	$(document).ready(function() {	
	
			var id = '#dialog';
		
			//Get the screen height and width
			var maskHeight = $(document).height();
			var maskWidth = $(window).width();
		
			//Set heigth and width to mask to fill up the whole screen
			$('#mask').css({'width':maskWidth,'height':maskHeight});
			
			//transition effect		
			$('#mask').fadeIn(800);	
			$('#mask').fadeTo("slow",0.8);	
		
			//Get the window height and width
			var winH = $(window).height();
			var winW = $(window).width();
				  
			//Set the popup window to center
			$(id).css('top',  winH/2-$(id).height()/2 -50);
			$(id).css('left', winW/2-$(id).width()/2);
		
			//transition effect
			$(id).fadeIn(500); 	
		
		//if close button is clicked
		$('.window .close').click(function (e) {
			//Cancel the link behavior
			e.preventDefault();
			
			$('#mask').hide();
			$('.window').hide();
		});		
		
		//if mask is clicked
		$('#mask').click(function () {
			$(this).preventDefault();
			$(this).hide();
			$('.window').hide();
		});		
		
	});
	
	</script>
				
				<div id="boxes">
				<div style="top:150px; left: 551.5px; display: none;" id="dialog" class="window">
					<div align="right" style="font-weight:bold; margin:5px 3px 0 0;">
					<?php
					echo "<a href='agents.php'><img src='images/cross.png' width='16' style='border:none; cursor:pointer;' /></a>";
					?>
					</div>
					
					<div align="center" style="margin:5px 0 5px 0;">
					
						<?php 
						echo "<p align='center'><h4><img src='images/Correct.png'>&nbsp;&nbsp;Agent Profile Saved Successfully.</h4></p>"; 
						?>
					
					</div>
					
				</div>
			
				<!-- Mask to cover the whole screen -->
				<div style="width: 2000px; height: 2000px; display: none; opacity: 0.7;" id="mask"></div>
				</div>
				
				<?php
				}
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
			<h2><i class="glyphicon glyphicon-user"></i> List Of All Agents</h2>
			
			<div class="box-icon">
				<a href="#" class=" btn-setting  "><img src="img/plus.png" border="0"></a>
			</div>
			
		</div>
		<div class="box-content">
			<table id='datatable' class="table table-striped dt-responsive nowrap">
			   <thead>
					<tr>
						<th>Agent Id</th>
						<th>Photo</th>
						<th>Name</th>
						<th>Mobile No</th>
						<th>Role</th>
						<th>Actions</th>
					 </tr>
				</thead>
				<tbody>
					<?php
					include('../conn.php');
					$fetch_agent_profile="select agent_id,photoname,first_name,last_name,mobile_no,role,status from tbl_agent_profile";	
					
					$agent_profile_rs= mysqli_query($conn,$fetch_agent_profile);

					while($agent_profile_row = mysqli_fetch_array($agent_profile_rs)) 
						{
						  echo "<tr class='odd gradeX'>";
						  echo "<td width=30><a href='agentProfile.php?agentId=$agent_profile_row[0]&action=view'>".$agent_profile_row[0]."</a></td>";
						   if($agent_profile_row[1]=="noimg.gif")
							{
								echo "<td width='133' height='100'><a href='agentProfile.php?agentId=$agent_profile_row[0]&action=view'><img src='../images/noimg.gif' border='0' width='133' height='100' class='img-500'></a></td>";
							}
							else
							{	
								echo "<td width='133' height='100'><div style='width:100px;height:133px;'><a href='agentProfile.php?agentId=$agent_profile_row[0]&action=view'><img src='agentpics/$agent_profile_row[1]' border='0' width='133' height='100' class='img-500'></a></div></td>";
							}
								 
						  echo "<td width=50>".$agent_profile_row[2]."&nbsp;".$agent_profile_row[3]."</td>";
						  echo "<td width=10>".$agent_profile_row[4]."</td>";
                                         
                                                
						    if($agent_profile_row[5]=="100")
							{
							echo "<td width=10>Admin</td>";
							}
							else
							{
							echo "<td width=10>Agent</td>";
							}
						  echo "<td class='center'>";
						  echo "<a class='btn btn-success' href='agentProfiles.php?agentId=$agent_profile_row[0]'><i class='glyphicon glyphicon-zoom-in icon-white'></i>Profiles</a>
								<a class='btn btn-info' href='agentProfile.php?agentId=$agent_profile_row[0]&action=edit'><i class='glyphicon glyphicon-edit icon-white'></i>Edit</a>";
						  if($agent_profile_row [6] == "Y") 
								echo "&nbsp;<a href='dash.php?agentid=$agent_profile_row[0]&msg=deactivateagent' class='btn btn-danger'>Deactivate</a>";
							 else	
								echo "&nbsp;<a href='dash.php?agentid=$agent_profile_row[0]&msg=activateagent' class='btn btn-success'>Activate</a>";		
						  echo "</tr>";
						  
						} 
					?>
				</tbody>
			</table>
		</div>
		</div>
		</div>
		<!--/span-->

		</div><!--/row-->
		<!-- content ends -->
		</div><!--/#content.col-md-0-->
	</div><!--/fluid-row-->

	

		<hr>

		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
			 aria-hidden="true">

			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">×</button>
						<h3>Add New Agent</h3>
						<DIV id="ERROR" style="color:red;font-weight:bold;"></DIV>
					</div>
					<div class="modal-body">
					<form name="addAgent" method="post">
						 <table border=0 style="padding-bottom: 20px;" cellpadding="5" border="0" cellspacing="0" width="80%">
							   <tr>
									<td>*First Name</td>
									<td>:</td>
									<td><input name="firstName" type="text" maxlength="20" class="form-control" id="txtFirstName" style="width:120px;" onkeydown= "return isAlpha(event.keyCode);" onkeyup="nospaces()"/></td>
									<td width="310" valign="top"><DIV id="error_firstname" style="color:red;"></DIV></td>		
								</tr>
								<tr>
									<td>*Last Name</td>
									<td>:</td>
									<td><input name="lastName" type="text" maxlength="20" class="form-control" id="txtFirstName" style="width:120px;" onkeydown= "return isAlpha(event.keyCode);" onkeyup="nospaces()"/></td>
									<td width="310" valign="top"><DIV id="error_lastname" style="color:red;"></DIV></td>		
								</tr>
								<tr>
									<td>*Gender</td>
									<td>:</td>
									<td>
									<select name="gender" id="gender" class="form-control" style="width:120px;">
									<option value="">- Unspecified -</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
									</select>
									</td>
									<td width="310" valign="top"><DIV id="error_gender" style="color:red;"></DIV></td>	
								</tr>
								
								
								<tr>
									<td>*Mobile</td>
									<td>:</td>
									<td><input name="mobileNo" type="text" maxlength="10" class="form-control" id="mobileNo" style="width:120px;" onkeypress="return isNumberKey(event)" onkeyup="nospaces()"/></td>
									<td width="310" valign="top"><DIV id="error_mobileNo" style="color:red;"></DIV></td>
								</tr>
								
								
								<tr>
									<td>*Role</td>
									<td>:</td>
									<td>
										<select name="role" id="role" class="form-control" style="width:120px;">
											<option value="">- Unspecified -</option>
											<option value="100">Admin</option>
											<option value="200">Agent</option>
										</select>
									</td>
									<td width="310" valign="top"><DIV id="error_role" style="color:red;"></DIV></td>	
								</tr>
								
							</table>
						</form>
					</div>
					<div class="modal-footer">
						<a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
						<a href="#" class="btn btn-primary"  onClick="save();">Save</a>
					</div>
				</div>
			</div>
		</div>
	<?php include('footer.php'); ?>
	
	<?php
	if(isset($_GET['msg']))
		{
		$param=$_GET['msg'];
		if($param == "saveAgent")
			{
			
	?>
	<div id="boxes">
		<div style="top:150px; left: 551.5px; display: none;" id="dialog" class="window">
			<div align="right" style="font-weight:bold; margin:5px 3px 0 0;">
			<?php
			echo "<a href='agents.php'><img src='images/cross.png' width='16' style='border:none; cursor:pointer;' /></a>";
			?>
			</div>
			
			<div align="center" style="margin:5px 0 5px 0;">
			<?php echo "<p align='center'><h4><img src='images/Correct.png'>&nbsp;&nbsp;Agent Details Saved Successfully.</h4></p>"; ?>
			</div>
			
		</div>
		
		<!-- Mask to cover the whole screen -->
		<div style="width: 2000px; height: 2000px; display: none; opacity: 0.7;" id="mask"></div>
	</div>
	<?php
	     }
	}
	?>
	


</div><!--/.fluid-container-->

<!-- external javascript -->

<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='bower_components/moment/min/moment.min.js'></script>
<script src='bower_components/fullcalendar/dist/fullcalendar.min.js'></script>

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

<script src="../mobile/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../mobile/assets/plugins/datatables/dataTables.bootstrap.js"></script>
<script src="../mobile/assets/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="../mobile/assets/plugins/datatables/buttons.bootstrap.min.js"></script>
<script src="../mobile/assets/plugins/datatables/jszip.min.js"></script>
<script src="../mobile/assets/plugins/datatables/pdfmake.min.js"></script>
<script src="../mobile/assets/plugins/datatables/vfs_fonts.js"></script>
<script src="../mobile/assets/plugins/datatables/buttons.html5.min.js"></script>
<script src="../mobile/assets/plugins/datatables/buttons.print.min.js"></script>
<script src="../mobile/assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
<script src="../mobile/assets/plugins/datatables/dataTables.keyTable.min.js"></script>
<script src="../mobile/assets/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="../mobile/assets/plugins/datatables/responsive.bootstrap.min.js"></script>
<script src="../mobile/assets/plugins/datatables/dataTables.scroller.min.js"></script>
<script src="../mobile/assets/pages/jquery.datatables.init.js"></script>


<script type="text/javascript">
	$(document).ready(function() {
	$('#datatable').dataTable( {
        dom: 'lBfrtip',
        buttons: [
            
        ],
         "order": [[ 0, 'desc' ]],
         "aLengthMenu": [[15, 30, 45, -1], [15, 30, 45, "All"]],
        "iDisplayLength": 15
    });
		$('#datatable-keytable').DataTable( { keys: true } );
		$('#datatable-responsive').DataTable();
		$('#datatable-scroller').DataTable( { ajax: "../mobile/assets/plugins/datatables/json/scroller-demo.json", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
		var table = $('#datatable-fixed-header').DataTable( { fixedHeader: true } );
	} );
	TableManageButtons.init();
</script>
</body>
</html>