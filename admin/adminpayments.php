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
		  height:250px;
		  padding:0px;
		  background-color: #FFFFFF;
		}	
		
			#boxes1 .window
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
		
		#boxes1 #dialog
		{
		  width:350px; 
		  height:150px;
		  padding:0px;
		  background-color: #FFFFFF;
		}	
		
	</style>
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
		  
		 /* Amount  validation */ 		  
		 if (form.amount.value == "") {
			error_amount.innerHTML ="<img src='images/delete.gif' border='0'>";
			setTimeout(function () {error_amount.innerHTML =""}, 10000);
			valid = false;
		  } else {
			error_amount.innerHTML ="";
			setColor(form.amount, bgGood);
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
     
    function savePaymentRecvd()
		{
      
		var b=new Boolean();	
		b=checkInput(document.paymentrecvd);
   		if (!b) 
			{
			ERROR.innerHTML ="<img src='images/cross.png' border='0'>&nbsp;&nbsp;Please fill all the fields marked with *";
			setTimeout(function () {ERROR.innerHTML =""}, 12000);
			}
		else
			{
			document.paymentrecvd.action="adminpayments.php?msg=savePaymentRecvd";
			document.paymentrecvd.submit();			
			}
		}   
       
    </script>   
    
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
					
</head>

<body>

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
		
		 <?php include('agentpaymentcounts.php'); ?>
		<div class="row">
				<div class="box col-md-12">
		<div class="box-inner">
		<div class="box-header well" data-original-title="">
			<h2><i class="glyphicon glyphicon-user"></i> Payments</h2>
			<div class="box-icon">
				<a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a>
			</div>
		</div>
		<div class="box-content">
		   
			<table class="table table-striped dt-responsive nowrap" id="datatable">
		   <thead>
			<tr>
				<th>Profile Id</th>
				<th>Photo</th>
				<th>Name</th>
				<th>Age</th>
				<th>Height</th>
				<th>Native District</th>
				<th>Status</th>
				<th>Mark Payment Received</th>
			 </tr>
			</thead>
			<tbody>
				<?php
				include('../conn.php');
				$agentId = $_SESSION['agent_id'];
				$fetch_basic_profile="select photo.imagename,basicprofile.profile_id,basicprofile.last_name,basicprofile.age,phyattr.heightFt,phyattr.heightInch,
				contactinfo.district,contactinfo.city,basicprofile.status,profiles.status from tbl_basic_profile basicprofile,tbl_profile_photo photo,tbl_physical_attr phyattr,
				tbl_contact_info contactinfo,tbl_agent_profiles profiles,tbl_agent_payments payments where basicprofile.profile_id=photo.profile_id and basicprofile.profile_id=phyattr.profile_id  
				and basicprofile.profile_id=contactinfo.profile_id and basicprofile.profile_id=profiles.profile_id and profiles.agent_id='$agentId' and payments.profile_id=basicprofile.profile_id
				and profiles.agent_id = payments.agent_id and payments.status not in('Received','Paid')
				order by basicprofile.profile_id desc ";	
				
				$basic_profile_rs= mysqli_query($conn,$fetch_basic_profile);

				while($basic_profile_row = mysqli_fetch_array($basic_profile_rs)) 
					{
					  echo "<tr class='odd gradeX'>";
					  echo "<td width=10><a href='showagentprofiledetails.php?id=$basic_profile_row[1]'>".$basic_profile_row[1]."</a></td>";
					   if($basic_profile_row [0]=="noimg.gif")
						{
						echo "<td width='133' height='100'><a href='showagentprofiledetails.php?id=$basic_profile_row[1]'><img src='../images/noimg.gif' border='0' width='133' height='100' class='img-500'></a></td>";
						}
					else
						{	
						echo "<td width='133' height='100'><div style='width:100px;height:133px;'><a href='showagentprofiledetails.php?id=$basic_profile_row[1]'><img src='../profilepics/$basic_profile_row[0]' border='0' width='133' height='100' class='img-500'></a></div></td>";
						}
					 				 
					  echo "<td width=50>".$basic_profile_row[2]."</td>";
					  echo "<td width=4>".$basic_profile_row[3]."</td>";
					  echo "<td width=20>".$basic_profile_row[4]."ft ".$basic_profile_row[5]."Inch</td>";
					  echo "<td width=50>".$basic_profile_row[6].",".$basic_profile_row[7]."</td>";
					  if($basic_profile_row[9]=="Pending")
						echo "<td width=10><span class='label-warning label label-default'>Pending</span></td>";
					  else 
						  echo "<td width=10><span class='label-success label label-default'>Approved</span></td>";	
					  echo "<td><a href='adminpayments.php?agentid=$agentId&profileId=$basic_profile_row[1]&msg=paymentrcvd'><span class='label-warning label label-default'>Mark Payment Received</span></td>";  
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
	<?php include('footer.php'); ?>
</div><!--/.fluid-container-->

<?php
	include("../conn.php");
	include('MyLogPHP.class.php');
	$log = new MyLogPHP('adminlogs/logs.log');	
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";


function sendSMS($name,$mobno,$profileId,$pwd)
{
    $username="maratha";
	$api_password="maratha@lagnyog";
	$sender="LGNYOG";
	$domain="http://cannyinfotech.in/api/mt/SendSMS?";
	$mobile=$mobno;
	$message="Hi ".$name." Your Account Created Successfully.Profile Id:".$profileId." & Password: ".$pwd." Regards marathalagnyog.com ";
	
	$username=urlencode($username);
	$password=urlencode($api_password);
	$sender=urlencode($sender);
	$message=urlencode($message);
	
	$parameters="user=$username&password=$api_password&senderid=$sender&channel=TRANS&DCS=0&flashsms=0&number=$mobile&text=$message&route=2";
	
	$url=$domain.$parameters;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // For HTTPS
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); // For HTTPS
    curl_exec($ch);
    $statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE); // Returns 200 if everything went well
    if($statusCode==200)
    {
    }
    else
    { 
    echo "SMS Sending Failed";
    }
    
    curl_close($ch);
}


if(isset($_GET['msg']))
			{
			$action = $_GET['msg'];
			if($action == "paymentrcvd")
			{
	
	?>
<div id="boxes">
	<div style="top:150px; left: 551.5px; display: none;" id="dialog" class="window">
	     <DIV id="ERROR" style="color:red;font-weight:bold;"></DIV>
	    <div align="center" style="margin:5px 0 5px 0;">
            <?php
            $profileId = $_GET['profileId'];
            $agentId = $_GET['agentid'];
            
            ?>
             <form name="paymentrecvd" method="post">
                 <input type="hidden" name="agentid" value="<?php echo $agentId; ?>"> 
                 <input type="hidden" name="profileid" value="<?php echo $profileId; ?>">       	
                <table border=0 style="padding-bottom: 20px;" cellpadding="5" border="0" cellspacing="0">
                     <tr> 
					    <td colspan="4">
                        <h3>Payment Received</h3>
                        </td>
                    </tr>
					<tr>
						<td>*Amount</td>
						<td>:</td>
						<td><input name="amount" type="text" maxlength="20" id="amount" style="width:135px;" onkeydown= "return isNumberKey(event);" onkeyup="nospaces()"  class="form-control"/></td>
						<td width="310" valign="top"><DIV id="error_amount" style="color:red;"></DIV></td>		
					</tr>
					 <tr> 
					    <td colspan="4">
                        <a href="#" onClick="savePaymentRecvd();" class='btn btn-primary btn-sm'>Mark</a>		
                        <a href='adminpayments.php' class='btn btn-primary btn-sm'>Cancel</a>
                        </td>
                    </tr>
              
            	</table>
		    
			</form>
				  
		</div>
		      
	</div>
	
		<!-- Mask to cover the whole screen -->
		<div style="width: 2000px; height: 2000px; display: none; opacity: 0.7;" id="mask"></div>
	
		</div>
			
    <?php
       }
       	if($action == "savePaymentRecvd")
			{
	?>
	<div id="boxes1">
	<div style="top:150px; left: 551.5px; display: none;" id="dialog" class="window">
	     <DIV id="ERROR" style="color:red;font-weight:bold;"></DIV>
	    <div align="center" style="margin:5px 0 5px 0;">
            <?php
            $profileId = $_POST['profileid'];
            $agentId = $_POST['agentid'];
            $amtReceived = $_POST['amount'];
            $receivedTimStmp = date('Y-m-d');
            $status = 'Received';
            include('../conn.php');
            $agentPayment_update="UPDATE tbl_agent_payments SET amtReceived='$amtReceived',status ='$status',receivedTimStmp='$receivedTimStmp' where profile_id ='$profileId' and agent_id='$agentId'";
            mysqli_query($conn,$agentPayment_update) or die(mysqli_error($conn)); 
            echo "<p align='center'><h4><img src='images/Correct.png'>&nbsp;&nbsp;Payment Received Successfully..</h4></p>";
            echo "<a href='adminpayments.php' class='btn btn-primary btn-sm'>Ok</a>";
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