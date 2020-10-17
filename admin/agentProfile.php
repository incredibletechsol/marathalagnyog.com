<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="utf-8">
    <title><?php include('title.php'); ?></title>
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
	<link rel="stylesheet" href="css/calender.css" type="text/css">

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
			  
			  /* Date Of Birth validation */ 		  
			 if (form.dateOfBirth.value == "" ) {
				error_dateOfBirth.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please select your Birth Date";
				setTimeout(function () {error_dateOfBirth.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_dateOfBirth.innerHTML ="";
				setColor(form.dateOfBirth, bgGood);
			  }
			  
			  /* Marital Status validation */ 		  
			 if (form.maritalStatus.value == "") {
				error_maritalStatus.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please select your Marital Status";
				setTimeout(function () {error_maritalStatus.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_maritalStatus.innerHTML ="";
				setColor(form.maritalStatus, bgGood);
			  }
			  
			    /* Address validation */ 		  
			 if (form.address.value.length==0) {
				error_address.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter your Address";
				setTimeout(function () {error_address.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_address.innerHTML ="";
				setColor(form.address, bgGood);
			  }
			  
			  /* District validation */ 		  
			 if (form.district.value == "") {
				error_district.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please select your District";
				setTimeout(function () {error_district.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_district.innerHTML ="";
				setColor(form.district, bgGood);
			  }
			  
			  /* City validation */ 		  
			 if (form.taluka.value == "") {
				error_taluka.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter your Taluka";
				setTimeout(function () {error_taluka.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_taluka.innerHTML ="";
				setColor(form.taluka, bgGood);
			  }
			  
			   /* Email Id validation */ 		  
			 if (form.emailId.value == "" ) {
				error_emailId.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter your Email Address";
				setTimeout(function () {error_emailId.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_emailId.innerHTML ="";
				setColor(form.emailId, bgGood);
			  }

			  
			if (document.addAgent.emailId.value != " ")
			{
				var checkOK="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-@._";
				var checkStr = document.addAgent.emailId.value;
				var allValid = 'true';
				for (i = 0;  i < checkStr.length+1;  i++)
				{
		
				ch = checkStr.charAt(i);
					for (j = 0;  j < checkOK.length+1;  j++)
					{
						if (ch == checkOK.charAt(j))
						break;
						if (j == checkOK.length)
						{
							allValid = 'false';
							break;
						}
					}
				}
			}
		
			if(document.addAgent.emailId.value != "")
			{
				var val=document.addAgent.emailId.value ;
				var pass1=val.indexOf('@',0);
				if(pass1==-1)
				{
					error_emailId.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter valid Email Address";
					setTimeout(function () {error_emailId.innerHTML =""}, 10000);
					document.addAgent.emailId.value="";
					document.addAgent.emailId.focus();
					return false;
				}
			}

			if(document.addAgent.emailId.value != "")
			{
				var val=document.addAgent.emailId.value ;
				var pass2=val.indexOf('.',0);
				if(pass2==-1)
				{
					error_emailId.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter valid Email Address";
					setTimeout(function () {error_emailId.innerHTML =""}, 10000);
					document.addAgent.emailId.value="";
					document.addAgent.emailId.focus();
					return false;
				}
				if((pass2 - pass1)== 1)
				{
					error_emailId.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter valid Email Address";
					setTimeout(function () {error_emailId.innerHTML =""}, 10000);
					document.addAgent.emailId.value="";
					document.addAgent.emailId.focus();
					return false;
				}
			}

			if (!allValid)
			{
				error_emailId.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter valid Email Address";
				setTimeout(function () {error_emailId.innerHTML =""}, 10000);
				document.addAgent.emailId.focus();
				return false;
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

                         /* Password validation */ 		  
			 if (form.password.value == "") {
				error_password.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter your Password";
				setTimeout(function () {error_password.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_password.innerHTML ="";
				setColor(form.password, bgGood);
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
			setTimeout(function () {error_photo.innerHTML =""}, 10000);
			document.getElementById('photo').value="";
			fup.focus();
			return false;
		}
	}
	
	function updateProfile()
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
			document.addAgent.action="dash.php?action=update";
			document.addAgent.submit();			
			}
		}
		
		function validateAlternateNo()
		{
		 /* Alternate Mobile No validation */ 		  
		 if (document.addAgent.alternateMobileNo.value.length < 10 ) {
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
           var alternateMobileNo=document.addAgent.alternateMobileNo.value;
           var emailId=document.addAgent.emailId.value;
           var city=document.addAgent.city.value;
     

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

           if(alternateMobileNo.match(/\s/g))
              {
               alternateMobileNo=alternateMobileNo.replace(/\s/g,'');
               document.addAgent.alternateMobileNo.value="";
              }
            
           if(emailId.match(/\s/g))
              {
               emailId=emailId.replace(/\s/g,'');
               document.addAgent.emailId.value="";
              }

           if(city.match(/\s/g))
              {
               city=city.replace(/\s/g,'');
               document.addAgent.city.value="";
              }

           if(password.match(/\s/g))
              {
               password=password.replace(/\s/g,'');
               document.addAgent.password.value="";
              } 

         }
		
	</script>
	
	<style>
	
	.img-500
		{
		height : 100px;
		width  : 100px;
		}
	</style>
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
		 
		<?php
		$action = $_GET['action'];
		include('../conn.php');
		$agentId =  $_GET['agentId'];
		$_SESSION['agentId']=$agentId;
		$fetch_agent_profile = "select * from tbl_agent_profile where agent_id='$agentId'";
		$agent_profile_rs    = mysqli_query($conn,$fetch_agent_profile) or die(mysqli_error($conn));
		$agent_num_rows      = mysqli_num_rows($agent_profile_rs);
		if($agent_num_rows > 0 )
			{
			while($agent_profile_row = mysqli_fetch_array($agent_profile_rs)) 
					{
					$firstName 			= $agent_profile_row[1];
					$lastName  			= $agent_profile_row[2];
					$gender    			= $agent_profile_row[3];
					$dob	   			= $agent_profile_row[4];
					$maritalStatus 		= $agent_profile_row[5];
					$annvDate  			= $agent_profile_row[6];
					$mobileNo 			= $agent_profile_row[7];
					$alternateMobileNo  = $agent_profile_row[8];
					$emailId 			= $agent_profile_row[9];
					$address 			= $agent_profile_row[10];
					$district 			= $agent_profile_row[13];
					$taluka 			= $agent_profile_row[14];
					$photoname			= $agent_profile_row[15];
                    $password           = $agent_profile_row[22]; 
					}
			}
		else
			{
					$firstName 			= "";
					$lastName  			= "";
					$gender    			= "";
					$dob	   			= "";	
					$maritalStatus 		= "";
					$annvDate  			= "";
					$mobileNo  			= "";
					$alternateMobileNo  = "";
					$emailId 			= "";
					$address 			= "";
					$district 			= "";
					$taluka				= "";
                                        $password                       = ""; 
			}
		
		if($action == "view")
			{
			
		?>	
		
		 
		<div class="row">
			<div class="box col-md-12">
				<div class="box-inner">
					<div class="box-header well" data-original-title="">
						<h2><i class="glyphicon glyphicon-user"></i> Agent Profile</h2>
					</div>
					<div class="box-content">
					 <DIV id="ERROR" style="color:red;font-weight:bold;"></DIV>
						<form name="addAgent" method="post" enctype="multipart/form-data">
						 <table border=0 style="padding-bottom: 20px;" cellpadding="5" border="0" cellspacing="0" width="80%">
							   <tr>
									<td>*First Name</td>
									<td>:</td>
									<td><input name="firstName" type="text" maxlength="20" class="form-control" id="firstName" style="width:120px;" onkeydown= "return isAlpha(event.keyCode);" onkeyup="nospaces()" value="<?php echo $firstName; ?>" readonly/></td>
									<td width="310" valign="top"><DIV id="error_firstname" style="color:red;"></DIV></td>		
								</tr>
								<tr>
									<td>*Last Name</td>
									<td>:</td>
									<td><input name="lastName" type="text" maxlength="20" class="form-control" id="lastName" style="width:120px;" onkeydown= "return isAlpha(event.keyCode);" onkeyup="nospaces()" value="<?php echo $lastName; ?>" readonly/></td>
									<td width="310" valign="top"><DIV id="error_lastname" style="color:red;"></DIV></td>		
								</tr>
								<tr>
									<td>*Gender</td>
									<td>:</td>
									<td>
									<select name="gender" id="gender" style="width:120px;" disabled="true" class="form-control">
										<?php
											$genderOptions  = array('Male', 'Female');
											foreach($genderOptions as $option){
												if($gender == $option){
													echo "<option selected='selected' value='$option'>$option</option>" ;
												}else{
													echo "<option value='$option'>$option</option>" ;
												}
											}
										?>
									</select>
									</td>
									<td width="310" valign="top"><DIV id="error_gender" style="color:red;"></DIV></td>	
								</tr>
								<tr>
									<td>*Date of Birth</td>
									<td>:</td>
									<td><input type="text" name="dateOfBirth" class="form-control" id="dateOfBirth" style="width:120px;" value="<?php echo $dob; ?>" readonly/></td>
									<td width="310" valign="top"><DIV id="error_dateOfBirth" style="color:red;"></DIV></td>
								</tr>
								<tr>
									<td>*Marital Status</td>
									<td>:</td>
									<td>
									<select name="maritalStatus" id="maritalStatus" style="width:120px;" disabled="true" class="form-control">
										<option value="">- Unspecified -</option>
										<?php
											$maritalStatusOptions  = array('Married', 'Single');
											
											foreach($maritalStatusOptions  as $option){
												if($maritalStatus == $option){
													echo "<option selected='selected' value='$option'>$option</option>" ;
												}else{
													echo "<option value='$option'>$option</option>" ;
												}
											}
										?>
										</select>
									</td>
									<td width="310" valign="top"><DIV id="error_maritalStatus" style="color:red;"></DIV></td>
								</tr>
								<tr>
									<td>Anniversary Date </td>
									<td>:</td>
									<td><input type="text" name="annvDate" class="form-control" value="<?php echo $annvDate; ?>" id="annvDate" style="width:120px;" readonly/></td>
									<td width="310" valign="top"><DIV id="error_annvDate" style="color:red;"></DIV></td>
								</tr>
								<tr>
									<td>*Mobile</td>
									<td>:</td>
									<td><input name="mobileNo" type="text" maxlength="10" class="form-control" id="mobileNo" value="<?php echo $mobileNo; ?>" style="width:120px;" onkeypress="return isNumberKey(event)" onkeyup="nospaces()" readonly/></td>
									<td width="310" valign="top"><DIV id="error_mobileNo" style="color:red;"></DIV></td>
								</tr>
								 <tr>
									<td>Alternate Mobile</td>
									<td>:</td>
									<td><input name="alternateMobileNo" type="text" maxlength="10" class="form-control" id="alternateMobileNo" value="<?php echo $alternateMobileNo; ?>" style="width:120px;" onkeypress="return isNumberKey(event)" onChange="validateAlternateNo();" onkeyup="nospaces()" readonly/></td>
									<td width="310" valign="top"><DIV id="error_alternateMobileNo" style="color:red;"></DIV></td>
								</tr>
								<tr>
									<td>*Email</td>
									<td>:</td>
									<td><input name="emailId" type="text" maxlength="100" class="form-control" id="emailId" value="<?php echo $emailId; ?>" style="width:120px;" onkeyup="nospaces()" readonly/></td>
									<td width="310" valign="top"><DIV id="error_emailId" style="color:red;"></DIV></td>
								</tr>
								<tr>
									<td>*Address</td>
									<td>:</td>
									<td><textarea columns="2" rows="5" name="address" id="address" class="form-control" readonly><?php echo $address ?></textarea></td>
									<td width="310" valign="top"><DIV id="error_address" style="color:red;"></DIV></td>
								</tr>
								
								<tr>
									<td>*District</td>
									<td>:</td>
									<td>
										<select name="district" id="district"  style="width:120px;" class="form-control" disabled="true">
										<option value="">- Unspecified -</option>
										<?php
											$districtOptions  = array('Ahmednagar', 'Akola','Amravati','Aurangabad','Beed','Belgaum',
											'Bhandara','Bidar','Buldana','Chandrapur','Dhule','Gadchiroli','Gondia','Hingoli','Jalana','Jalgaon',
											'Kolhapur','Latur','Mumbai','Nagpur','Nanded','Nandurbar','Nashik','Osmanabad','Parbhani','Pune','Raigad','Ratnagiri','Sangli','Satara','Sindhudurg','Solapur','Thane','Wardha','Washim','Yavatmal');
											
											foreach($districtOptions  as $option){
												if($district == $option){
													echo "<option selected='selected' value='$option'>$option</option>" ;
												}else{
													echo "<option value='$option'>$option</option>" ;
												}
											}
										?>
										</select>
									</td>
									<td width="310" valign="top"><DIV id="error_district" style="color:red;"></DIV></td>
								</tr>
								<tr>
									<td>*Taluka</td>
									<td>:</td>
									<td><input name="taluka" type="text" maxlength="50" id="taluka" value="<?php echo $taluka; ?>" class="form-control" style="width:120px;" onkeydown= "return isAlpha(event.keyCode);" onkeyup="nospaces()" readonly/></td>
									<td width="310" valign="top"><DIV id="error_taluka" style="color:red;"></DIV></td>
								</tr>
								
								<tr>
									<td>Photo</td>
									<td>:</td>
									<?php
									if($photoname=="noimg.gif")
										{
											echo "<td><img src='../images/noimg.gif' border='0' class='img-500'></td>";
										}
										else
										{	
											echo "<td><img src='agentpics/$photoname' border='0' class='img-500'></a></div></td>";
										}
									?>	
								
									<td width="310" valign="top"><DIV id="error_photo" style="color:red;"></DIV></td>
								</tr>
                                                                 <tr>
									<td>*Password</td>
									<td>:</td>
									<td><input name="password" type="password" maxlength="50" id="password" value="<?php echo $password; ?>" class="form-control" style="width:120px;" onkeyup="nospaces()" readonly/></td>
									<td width="310" valign="top"><DIV id="error_password" style="color:red;"></DIV></td>
								</tr>
                                                           
								<tr>
									<td colspan="2" align="right">
									<?php echo "<a class='btn btn-info' href='agentProfile.php?agentId=$agentId&action=edit'><i class='glyphicon glyphicon-edit icon-white'></i>Edit</a>"; ?>
									</td>
								</tr>
							</table>
						</form>
					</div>
				</div>
			</div>
		</div>
		<?php
		}
		if($action == "edit")
			{
		?>
		<div class="row">
			<div class="box col-md-12">
				<div class="box-inner">
					<div class="box-header well" data-original-title="">
						<h2><i class="glyphicon glyphicon-user"></i> Agent Profile</h2>
					</div>
					<div class="box-content">
					 <DIV id="ERROR" style="color:red;font-weight:bold;"></DIV>
						<form name="addAgent" method="post" enctype="multipart/form-data">
						 <table border=0 style="padding-bottom: 20px;" cellpadding="5" border="0" cellspacing="0" width="80%">
							   <tr>
									<td>*First Name</td>
									<td>:</td>
									<td><input name="firstName" type="text" maxlength="20" class="form-control" id="txtFirstName" style="width:120px;" onkeydown= "return isAlpha(event.keyCode);" onkeyup="nospaces()" value="<?php echo $firstName; ?>"/></td>
									<td width="310" valign="top"><DIV id="error_firstname" style="color:red;"></DIV></td>		
								</tr>
								<tr>
									<td>*Last Name</td>
									<td>:</td>
									<td><input name="lastName" type="text" maxlength="20" class="form-control" id="txtFirstName" style="width:120px;" onkeydown= "return isAlpha(event.keyCode);" onkeyup="nospaces()" value="<?php echo $lastName; ?>"/></td>
									<td width="310" valign="top"><DIV id="error_lastname" style="color:red;"></DIV></td>		
								</tr>
								<tr>
									<td>*Gender</td>
									<td>:</td>
									<td>
									<select name="gender" id="gender" style="width:120px;" class="form-control">
										<?php
											$genderOptions  = array('Male', 'Female');
											foreach($genderOptions as $option){
												if($gender == $option){
													echo "<option selected='selected' value='$option'>$option</option>" ;
												}else{
													echo "<option value='$option'>$option</option>" ;
												}
											}
										?>
									</select>
									</td>
									<td width="310" valign="top"><DIV id="error_gender" style="color:red;"></DIV></td>	
								</tr>
								<tr>
									<td>*Date of Birth</td>
									<td>:</td>
									<td><input type="text" name="dateOfBirth" class="tcal form-control" id="dateOfBirth" style="width:120px;" value="<?php echo $dob; ?>" readonly/></td>
									<td width="310" valign="top"><DIV id="error_dateOfBirth" style="color:red;"></DIV></td>
								</tr>
								<tr>
									<td>*Marital Status</td>
									<td>:</td>
									<td>
									<select name="maritalStatus" id="maritalStatus" style="width:120px;" class="form-control">
										<option value="">- Unspecified -</option>
										<?php
											$maritalStatusOptions  = array('Married', 'Single');
											
											foreach($maritalStatusOptions  as $option){
												if($maritalStatus == $option){
													echo "<option selected='selected' value='$option'>$option</option>" ;
												}else{
													echo "<option value='$option'>$option</option>" ;
												}
											}
										?>
										</select>
									</td>
									<td width="310" valign="top"><DIV id="error_maritalStatus" style="color:red;"></DIV></td>
								</tr>
								<tr>
									<td>Anniversary Date </td>
									<td>:</td>
									<td><input type="text" name="annvDate" class="tcal form-control" value="<?php echo $annvDate; ?>" id="annvDate" style="width:120px;" readonly/></td>
									<td width="310" valign="top"><DIV id="error_annvDate" style="color:red;"></DIV></td>
								</tr>
								<tr>
									<td>*Mobile</td>
									<td>:</td>
									<td><input name="mobileNo" type="text" maxlength="10" class="form-control" id="mobileNo" value="<?php echo $mobileNo; ?>" style="width:120px;" onkeypress="return isNumberKey(event)" onkeyup="nospaces()" /></td>
									<td width="310" valign="top"><DIV id="error_mobileNo" style="color:red;"></DIV></td>
								</tr>
								 <tr>
									<td>Alternate Mobile</td>
									<td>:</td>
									<td><input name="alternateMobileNo" type="text" maxlength="10" class="form-control" id="alternateMobileNo" value="<?php echo $alternateMobileNo; ?>" style="width:120px;" onkeypress="return isNumberKey(event)" onChange="validateAlternateNo();" onkeyup="nospaces()" /></td>
									<td width="310" valign="top"><DIV id="error_alternateMobileNo" style="color:red;"></DIV></td>
								</tr>
								<tr>
									<td>*Email</td>
									<td>:</td>
									<td><input name="emailId" type="text" maxlength="100" class="form-control" id="emailId" value="<?php echo $emailId; ?>" style="width:120px;" onkeyup="nospaces()" /></td>
									<td width="310" valign="top"><DIV id="error_emailId" style="color:red;"></DIV></td>
								</tr>
								<tr>
									<td>*Address</td>
									<td>:</td>
									<td><textarea columns="2" rows="5" name="address" id="address" class="form-control"><?php echo $address ?></textarea></td>
									<td width="310" valign="top"><DIV id="error_address" style="color:red;"></DIV></td>
								</tr>
								
								<tr>
									<td>*District</td>
									<td>:</td>
									<td>
										<select name="district" id="district"  style="width:120px;" class="form-control">
										<option value="">- Unspecified -</option>
										<?php
											$districtOptions  = array('Ahmednagar', 'Akola','Amravati','Aurangabad','Beed','Belgaum',
											'Bhandara','Bidar','Buldana','Chandrapur','Dhule','Gadchiroli','Gondia','Hingoli','Jalana','Jalgaon',
											'Kolhapur','Latur','Mumbai','Nagpur','Nanded','Nandurbar','Nashik','Osmanabad','Parbhani','Pune','Raigad','Ratnagiri','Sangli','Satara','Sindhudurg','Solapur','Thane','Wardha','Washim','Yavatmal');
											
											foreach($districtOptions  as $option){
												if($district == $option){
													echo "<option selected='selected' value='$option'>$option</option>" ;
												}else{
													echo "<option value='$option'>$option</option>" ;
												}
											}
										?>
										</select>
									</td>
									<td width="310" valign="top"><DIV id="error_district" style="color:red;"></DIV></td>
								</tr>
								<tr>
									<td>*Taluka</td>
									<td>:</td>
									<td><input name="taluka" type="text" maxlength="50" id="taluka" value="<?php echo $taluka; ?>" class="form-control" style="width:120px;" onkeydown= "return isAlpha(event.keyCode);" onkeyup="nospaces()"/></td>
									<td width="310" valign="top"><DIV id="error_taluka" style="color:red;"></DIV></td>
								</tr>
								
								<tr>
									<td>*Photo</td>
									<td>:</td>
									<?php
									if($photoname=="noimg.gif")
										{
											echo "<td><img src='../images/noimg.gif' border='0' class='img-500'>";
											echo "<br><input name='photo' type='file' id='photo' onchange='return CheckPhotoExt();' /></td>";
										}
										else
										{	
											echo "<td><img src='agentpics/$photoname' border='0' class='img-500'>";
											echo "<br><input name='photo' type='file' id='photo' onchange='return CheckPhotoExt();' /></td>";
										}
										
									?>	
									
									<td width="310" valign="top"><DIV id="error_photo" style="color:red;"></DIV></td>
								</tr>
                                                                 <tr>
									<td>*Password</td>
									<td>:</td>
									<td><input name="password" type="password" maxlength="50" id="password" value="<?php echo $password; ?>" class="form-control" style="width:120px;" onkeyup="nospaces()"/></td>
									<td width="310" valign="top"><DIV id="error_password" style="color:red;"></DIV></td>
								</tr>
								<tr>
									<td colspan="2" align="right">
									<?php echo "<a class='btn btn-primary btn-sm' href='#' onClick='updateProfile();'>Update</a>"; ?>
									</td>
								</tr>
							</table>
						</form>
					</div>
				</div>
			</div>
		</div>
		<?php
		}
		?>
		
		
		
		 <!-- content ends -->
		</div><!--/#content.col-md-0-->
	</div><!--/fluid-row-->
<?php include('footer.php'); ?>
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

<script type="text/javascript" src="js/zebra_datepicker.js"></script>
<script type="text/javascript" src="js/core.js"></script>
</body>
</html>
