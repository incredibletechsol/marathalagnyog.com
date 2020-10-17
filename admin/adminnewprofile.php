<?php include('logincommon.php') ?>
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
    <script src="js/js_disable_right_click.js" type="text/javascript"></script>
    <script src="js/js_disable_right_click_cfg.js" type="text/javascript"></script>
    
    <script type="text/javascript" src="js/customalert.js"></script>
    <link rel="stylesheet" type="text/css" href="css/customalert.css" /> 
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
				error_firstname.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter your First Name";
				setTimeout(function () {error_firstname.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_firstname.innerHTML ="";
				setColor(form.firstName, bgGood);
			  }
			  
			  /* Last Name  validation */ 		  
			 if (form.lastName.value == "" ) {
				error_lastname.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter your Last Name";
				setTimeout(function () {error_lastname.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_lastname.innerHTML ="";
				setColor(form.lastName, bgGood);
			  }
			  
			  /* Gender  validation */ 		  
			 if (form.gender.value == "") {
				error_gender.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please select your Gender";
				setTimeout(function () {error_gender.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_gender.innerHTML ="";
				setColor(form.gender, bgGood);
			  }
                         
			  
			  /* Date Of Birth validation */ 		  
			 if (form.bdate.value == "" ) {
				error_bdate.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please select your Birth Date";
				setTimeout(function () {error_bdate.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_bdate.innerHTML ="";
				setColor(form.bdate, bgGood);
			  }
			  
                          
                           var a1 = document.register.bdate.value;
			                var a =  a1.split("-"); 
			           
				 
				  var d,m,y;
				  for (var i = 0; i < a.length; i++)
					{
					if(i==0) y=a[i]; 
					if(i==1) m=a[i]; 
					if(i==2) d=a[i];
					}
			           var newdate=d+"-"+m+"-"+y;
					var years=getAge(newdate);
					if(years < 21) {
			document.register.bdate.value="";
			                  DOBERROR.innerHTML ="<img src='../images/warning.gif' border='0'>&nbsp;&nbsp;You have not attained 21 years. There is lot in life then to get married. Enjoy your life!!!!";
			setTimeout(function () {DOBERROR.innerHTML =""}, 12000);
			valid=false;
			                 }
			                else {
				DOBERROR.innerHTML ="";
				setColor(form.bdate, bgGood);
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
			  
				  /* Religion validation */ 		  
			 if (form.religion.value == "" ) {
				error_religion.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please select your Religion";
				setTimeout(function () {error_religion.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_religion.innerHTML ="";
				setColor(form.religion, bgGood);
			  }

				/* Caste validation */ 		  
			 if (form.caste.value == "" ) {
				error_caste.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please select your Caste";
				setTimeout(function () {error_caste.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_caste.innerHTML ="";
				setColor(form.caste, bgGood);
			  }

                           /* Height in Ft validation */ 		  
			 if (form.heightFt.value == "") {
				error_heightFt.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;*Required";
				setTimeout(function () {error_heightFt.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_heightFt.innerHTML ="";
				setColor(form.heightFt, bgGood);
			  }

                        /* Height in Inch validation */ 		  
			 if (form.heightInch.value == "") {
				error_heightInch.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;*Required";
				setTimeout(function () {error_heightInch.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_heightInch.innerHTML ="";
				setColor(form.heightInch, bgGood);
			  }


                          /* Education validation */ 		  
			 if (form.education.value == "") {
				error_education.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please select your Education";
				setTimeout(function () {error_education.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_education.innerHTML ="";
				setColor(form.education, bgGood);
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
			  
			   		 
			  
			   /* Address validation */ 		  
			 if (form.address.value.length==0) {
				error_address.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter your Address";
				setTimeout(function () {error_address.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_address.innerHTML ="";
				setColor(form.address, bgGood);
			  }
			  
			   /* Country validation */ 		  
			 if (form.country.value == "") {
				error_country.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please select your Country";
				setTimeout(function () {error_country.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_country.innerHTML ="";
				setColor(form.country, bgGood);
			  }
			  
			  /* State validation */ 		  
			 if (form.state.value == "") {
				error_state.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please select your State";
				setTimeout(function () {error_state.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_state.innerHTML ="";
				setColor(form.state, bgGood);
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
			 if (form.city.value == "") {
				error_city.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter your Taluka";
				setTimeout(function () {error_city.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_city.innerHTML ="";
				setColor(form.city, bgGood);
			  }
			  
			   /* Goan validation */ 		  
			 if (form.goan.value == "") {
				error_goan.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter your Goan";
				setTimeout(function () {error_goan.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_goan.innerHTML ="";
				setColor(form.goan, bgGood);
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

			  
			if (document.register.emailId.value != " ")
			{
				var checkOK="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-@._";
				var checkStr = document.register.emailId.value;
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
		
			if(document.register.emailId.value != "")
			{
				var val=document.register.emailId.value ;
				var pass1=val.indexOf('@',0);
				if(pass1==-1)
				{
					error_emailId.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter valid Email Address";
					setTimeout(function () {error_emailId.innerHTML =""}, 10000);
					document.register.emailId.value="";
					document.register.emailId.focus();
					return false;
				}
			}

			if(document.register.emailId.value != "")
			{
				var val=document.register.emailId.value ;
				var pass2=val.indexOf('.',0);
				if(pass2==-1)
				{
					error_emailId.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter valid Email Address";
					setTimeout(function () {error_emailId.innerHTML =""}, 10000);
					document.register.emailId.value="";
					document.register.emailId.focus();
					return false;
				}
				if((pass2 - pass1)== 1)
				{
					error_emailId.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter valid Email Address";
					setTimeout(function () {error_emailId.innerHTML =""}, 10000);
					document.register.emailId.value="";
					document.register.emailId.focus();
					return false;
				}
			}

			if (!allValid)
			{
				error_emailId.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter valid Email Address";
				setTimeout(function () {error_emailId.innerHTML =""}, 10000);
				document.register.emailId.focus();
				return false;
			}
			
			/* Password validation */ 		  
			 if (form.password.value == "" ) {
				error_password.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter your Password";
				setTimeout(function () {error_password.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_password.innerHTML ="";
				setColor(form.password, bgGood);
			  }
			  	 
			 var errmsg="Please fill all the fields marked with *"; 
                        if (!valid) 
                        {	 
			ERROR.innerHTML ="<h3><img src='images/cross.png' border='0'>&nbsp;&nbsp;Error : Please correct the fields and try submitting again</h3>";
			setTimeout(function () {ERROR.innerHTML =""}, 12000);
			//createCustomAlert(errmsg,"","Errors");
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
		b=checkInput(document.register);
                var errmsg="Please fill all the fields marked with *"; 
		if (!b) 
			{
			ERROR.innerHTML ="<h3><img src='images/cross.png' border='0'>&nbsp;&nbsp;Error : Please correct the fields and try submitting again</h3>";
			setTimeout(function () {ERROR.innerHTML =""}, 12000);
                        //createCustomAlert(errmsg,"","Errors"); 
			}
		else
			{
			document.register.action="adminMyProfiles.php?msg=save";
			document.register.submit();			
			}
		}	 
	function validateAlternateNo()
	{
	 /* Alternate Mobile No validation */ 		  
	 if (document.register.alternateMobileNo.value.length < 10 ) {
		error_alternateMobileNo.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter valid 10 digit Mobile No";
		setTimeout(function () {error_alternateMobileNo.innerHTML =""}, 10000);
		valid = false;
	  } else {
		error_alternateMobileNo.innerHTML ="";
		//setColor(document.register.alternateMobileNo, bgGood);
	  }
	}
	
	function validateAge()
		{
                var a1 = document.register.bdate.value;
                var a =  a1.split("-"); 
              	   
	 
	  var d,m,y;
	  for (var i = 0; i < a.length; i++)
		{
		if(i==0) y=a[i]; 
		if(i==1) m=a[i]; 
		if(i==2) d=a[i];
		}
           var newdate=d+"-"+m+"-"+y;
		var years=getAge(newdate);
		if(years < 21) {
document.register.bdate.value="";
                  DOBERROR.innerHTML ="<img src='../images/warning.gif' border='0'>&nbsp;&nbsp;You have not attained 21 years. There is lot in life then to get married. Enjoy your life!!!!";
setTimeout(function () {DOBERROR.innerHTML =""}, 12000);
                 }
	    	
	}

         function getAge(str)
	{
	  var d = new Date();
	  var bits = str.split('-')
	  d.setHours(0,0,0,0); //normalise
	  d.setFullYear(bits[2])
	  d.setMonth(bits[1]-1)
	  d.setDate(bits[0])
	  var now = new Date();
	  now.setHours(0,0,0,0); //normalise
	  var years = now.getFullYear()-d.getFullYear();
	  d.setFullYear(now.getFullYear())
	  var diff = now.getTime()-d.getTime()
	  if ( diff <0) years--;
	  return years;
	}

        function nospaces()
           {
           var firstName=document.register.firstName.value;
           var lastName=document.register.lastName.value;
           var subCaste=document.register.subCaste.value;
           var mobileNo=document.register.mobileNo.value;
           var alternateMobileNo=document.register.alternateMobileNo.value;
           var emailId=document.register.emailId.value;
           var city=document.register.city.value;
           var password=document.register.password.value;

           if(firstName.match(/\s/g))
              {
               firstName=firstName.replace(/\s/g,'');
               document.register.firstName.value="";
              }

           if(lastName.match(/\s/g))
              {
               lastName=lastName.replace(/\s/g,'');
               document.register.lastName.value="";
              }
           
           if(subCaste.match(/\s/g))
              {
               subCaste=subCaste.replace(/\s/g,'');
               document.register.subCaste.value="";
              }
 
           if(mobileNo.match(/\s/g))
              {
               mobileNo=mobileNo.replace(/\s/g,'');
               document.register.mobileNo.value="";
              }

           if(alternateMobileNo.match(/\s/g))
              {
               alternateMobileNo=alternateMobileNo.replace(/\s/g,'');
               document.register.alternateMobileNo.value="";
              }
            
           if(emailId.match(/\s/g))
              {
               emailId=emailId.replace(/\s/g,'');
               document.register.emailId.value="";
              }

           if(city.match(/\s/g))
              {
               city=city.replace(/\s/g,'');
               document.register.city.value="";
              }

           if(password.match(/\s/g))
              {
               password=password.replace(/\s/g,'');
               document.register.password.value="";
              }
           }
		
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
		<div class="row">
			<div class="box col-md-12">
				<div class="box-inner">
					<div class="box-header well" data-original-title="">
						<h2><i class="glyphicon glyphicon-user"></i> Register New Profile</h2>
					</div>
					<div class="box-content">
                                         <DIV id="DOBERROR" style="color:red;font-weight:bold;"></DIV>
					 <DIV id="ERROR" style="color:red;font-weight:bold;"></DIV>
					    <form name="register" method="post" enctype="multipart/form-data">
                                              <table border=0 style="padding-bottom: 20px;" cellpadding="5" border="0" cellspacing="0">
								   <tr>
										<td>*First Name</td>
										<td>:</td>
										<td><input name="firstName" type="text" maxlength="20" id="firstName" style="width:135px;" onkeydown= "return isAlpha(event.keyCode);" onkeyup="nospaces()"  class="form-control"/></td>
										<td width="310" valign="top"><DIV id="error_firstname" style="color:red;"></DIV></td>		
									</tr>
									<tr>
										<td>*Last Name</td>
										<td>:</td>
										<td><input name="lastName" type="text" maxlength="20" id="lastName" style="width:135px;" onkeydown= "return isAlpha(event.keyCode);" onkeyup="nospaces()"  class="form-control"/></td>
										<td width="310" valign="top"><DIV id="error_lastname" style="color:red;"></DIV></td>		
									</tr>
									<tr>
										<td>*Gender</td>
										<td>:</td>
										<td>
										<select name="gender" id="gender" style="width:135px;"  class="form-control">
										<option value="">- Unspecified -</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
										</select>
										</td>
										<td width="310" valign="top"><DIV id="error_gender" style="color:red;"></DIV></td>	
									</tr>
									<tr>
										<td>*Date of Birth</td>
										<td>:</td>
										<td><input type="text" name="bdate" class="tcal form-control" value="" id="bdate" style="width:135px;" readonly/></td>
										<td width="310" valign="top"><DIV id="error_bdate" style="color:red;"></DIV></td>
									</tr>
									<tr>
										<td>*Marital Status</td>
										<td>:</td>
										<td>
										<select name="maritalStatus" id="maritalStatus" style="width:135px;"  class="form-control">
										<option value="">- Unspecified -</option>
										<option value="Unmarried">Unmarried</option>
										<option value="Divorced">Divorced</option>
										<option value="Widowed">Widowed</option>
										<option value="Separated">Separated</option>
										</select>
										</td>
										<td width="310" valign="top"><DIV id="error_maritalStatus" style="color:red;"></DIV></td>
									</tr>
									<tr>
										<td>*Religion</td>
										<td>:</td>
										<td>
										<select name="religion" id="religion" style="width:135px;"  class="form-control">
											<option value="">- Unspecified -</option>
											<option value="Hindu">Hindu</option>
										</select>
										</td>
										<td width="310" valign="top"><DIV id="error_religion" style="color:red;"></DIV></td>
									</tr>
									<tr>
										<td>*Caste</td>
										<td>:</td>
										<td>
										<select name="caste" id="caste" style="width:135px;"  class="form-control">
										<option value="">- Unspecified -</option>
										<option value="Maratha">Maratha</option>
										<option value="Maratha96Kuli">Maratha 96Kuli</option>
										<option value="MarathaKunbi">Maratha Kunbi</option>
										<option value="MarathaDeshmukh">Maratha Deshmukh</option>
										</select>
										</td>
										<td width="310" valign="top"><DIV id="error_caste" style="color:red;"></DIV></td>
									</tr>
									
 <tr>
										<td>*Height</td>
										<td>:</td>
										<td>
                                                                                 <select name="heightFt" style="width:60px;" id="heightFt" class="form-control">
         <option value="">-</option>
	 <option value="4">4</option>
	 <option value="5">5</option>
	 <option value="6">6</option>
	 <option value="7">7</option>
</select>ft

<select name="heightInch" id="heightInch" style="width:60px;" class="form-control">
    <option value="">-</option>
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
</select>Inch
</DIV> 

                                                                                </td>
<td width="310" valign="top"><DIV id="error_heightFt" style="color:red;"></DIV><br><DIV id="error_heightInch" style="color:red;"></td>
									</tr>
<tr>
										<td>*Education</td>
										<td>:</td>
										<td>
                                                                                <select name="education" id="education" style="width:135px;" class="form-control">
<option value="">- Unspecified -</option> 
<option value='M.C.A'>M.C.A</option>
<option value='H.S.C'>H.S.C</option>
<option value='B.A.M.S'>B.A.M.S</option>
<option value='B.C.A'>B.C.A</option>
<option value='B.H.M.S'>B.H.M.S</option>
<option value='B.Tech'>B.Tech</option>
<option value='M.Tech'>M.Tech</option>
<option value='B.A'>B.A</option>
<option value='B.S.C'>B.S.C</option>
<option value='B.Com'>B.Com</option>
<option value='B.E-IT'>B.E-IT</option>
<option value='B.E-COMPUTER'>B.E-COMPUTER</option>
<option value='B.E-MECH'>B.E-MECH</option>
<option value='B.E-ENTC'>B.E-ENTC</option>
<option value='B.E-ELEC'>B.E-ELEC</option>
<option value='B.E-CIVIL'>B.E-CIVIL</option>
<option value='Bachelors Of Architect'>Bachelors Of Architect</option>
<option value='B.C.S'>B.C.S</option>
<option value='BPT'>BPT</option>
<option value='C.A'>C.A</option>
<option value='D.Pharma'>D.Pharma</option>
<option value='B.Pharma'>B.Pharma</option>
<option value='M.Pharma'>M.Pharma</option>
<option value='Diploma'>Diploma</option>
<option value='Fashion Desining'>Fashion Desining</option>
<option value='BL'>BL</option><option value='ML'>ML</option>
<option value='LLB'>LLB</option><option value='LLM'>LLM</option>
<option value='M.B.B.S'>M.B.B.S</option>
<option value='B.D.S'>B.D.S</option>
<option value='M.ED'>M.ED</option>
<option value='B.ED'>B.ED</option>
<option value='D.ED'>D.ED</option>
<option value='B.B.A'>B.B.A</option>
<option value='M.B.A'>M.B.A</option>
<option value='M.A'>M.A</option>
<option value='M.S.C'>M.S.C</option>
<option value='M.COM'>M.COM</option>
<option value='M.E'>M.E</option>
<option value='Medicine - General'>Medicine - General</option>
<option value='Medicine - Dental'>Medicine - Dental</option>
<option value='Medicine - Surgeon'>Medicine - Surgeon</option>
<option value='Ph.d'>Ph.d</option>
<option value='IAS'>IAS</option>
<option value='IPS'>IPS</option>
<option value='S.S.C'>S.S.C</option>
<option value='M.S.C'>M.S.C</option>
<option value='I.T.I'>I.T.I</option>
</select>
</td>
<td width="310" valign="top"><DIV id="error_education" style="color:red;"></DIV></td>
									</tr>
                                                                       <tr>
										<td>*Mobile</td>
										<td>:</td>
										<td><input name="mobileNo" type="text" maxlength="10" id="mobileNo" style="width:135px;" onkeypress="return isNumberKey(event)" onkeyup="nospaces()"  class="form-control"/></td>
										<td width="310" valign="top"><DIV id="error_mobileNo" style="color:red;"></DIV></td>
									</tr>
									 <tr>
										<td>Alternate Mobile</td>
										<td>:</td>
										<td><input name="alternateMobileNo" type="text" maxlength="10" id="alternateMobileNo" style="width:135px;" onkeypress="return isNumberKey(event)" onChange="validateAlternateNo();" onkeyup="nospaces()" class="form-control"/></td>
										<td width="310" valign="top"><DIV id="error_alternateMobileNo" style="color:red;"></DIV></td>
									</tr>
									<tr>
										<td>*Email</td>
										<td>:</td>
										<td><input name="emailId" type="text" maxlength="100" id="emailId" style="width:135px;" onkeyup="nospaces()"  class="form-control"/></td>
										<td width="310" valign="top"><DIV id="error_emailId" style="color:red;"></DIV></td>
									</tr>
									<tr>
										<td>*Address</td>
										<td>:</td>
										<td><textarea columns="2" rows="5" name="address" id="address"  class="form-control"></textarea></td>
										<td width="310" valign="top"><DIV id="error_address" style="color:red;"></DIV></td>
									</tr>
									 <tr>
										<td>*Country</td>
										<td>:</td>
										<td>
										 <select name="country" id="country" style="width:135px;"  class="form-control">
											<option value="">- Unspecified -</option>
										    <option value="India">India</option>
										</select>
										</td>
										<td width="310" valign="top"><DIV id="error_country" style="color:red;"></DIV></td>
									</tr>
									<tr>
										<td>*State</td>
										<td>:</td>
										<td>
										<select name="state" id="state" style="width:135px;"  class="form-control">
											<option value="">- Unspecified -</option>
									    	<option value="Maharashtra">Maharashtra</option>
										</select>
										</td>
										<td width="310" valign="top"><DIV id="error_state" style="color:red;"></DIV></td>
									</tr>
									<tr>
										<td>*District</td>
										<td>:</td>
										<td>
											<select name="district" id="district"  style="width:135px;"  class="form-control">
											<option value="">- Unspecified -</option>
											<option value="Ahmednagar">Ahmednagar</option>
											<option value="Akola">Akola</option>
											<option value="Amravati">Amravati</option>
											<option value="Aurangabad">Aurangabad</option>
											<option value="Beed">Beed</option>
											<option value="Belgaum">Belgaum</option>
											<option value="Bhandara">Bhandara</option>
											<option value="Bidar">Bidar</option>
											<option value="Buldana">Buldana</option>
											<option value="Chandrapur">Chandrapur</option>
											<option value="Dhule">Dhule</option>
											<option value="Gadchiroli">Gadchiroli</option>
											<option value="Gondia">Gondia</option>
											<option value="Hingoli">Hingoli</option>
											<option value="Jalana">Jalana</option>
											<option value="Jalgaon">Jalgaon</option>
											<option value="Kolhapur">Kolhapur</option>
											<option value="Latur">Latur</option>
											<option value="Mumbai">Mumbai</option>
											<option value="28">Nagpur</option>
											<option value="Nagpur">Nanded</option>
											<option value="Nandurbar">Nandurbar</option>
											<option value="Nashik">Nashik</option>
											<option value="Osmanabad">Osmanabad</option>
											<option value="Parbhani">Parbhani</option>
											<option value="Pune">Pune</option>
											<option value="Raigad">Raigad</option>
											<option value="Ratnagiri">Ratnagiri</option>
											<option value="Sangli">Sangli</option>
											<option value="Satara">Satara</option>
											<option value="Sindhudurg">Sindhudurg</option>
											<option value="Solapur">Solapur</option>
											<option value="Thane">Thane</option>
											<option value="Wardha">Wardha</option>
											<option value="Washim">Washim</option>
											<option value="Yavatmal">Yavatmal</option>
										</select>
										</td>
										<td width="310" valign="top"><DIV id="error_district" style="color:red;"></DIV></td>
									</tr>
									<tr>
										<td>*Taluka</td>
										<td>:</td>
										<td><input name="city" type="text" maxlength="50" id="city" style="width:135px;" onkeydown= "return isAlpha(event.keyCode);" onkeyup="nospaces()"  class="form-control"/></td>
										<td width="310" valign="top"><DIV id="error_city" style="color:red;"></DIV></td>
									</tr>
										<tr>
										<td>*Goan</td>
										<td>:</td>
										<td><input name="goan" type="text" maxlength="50" id="goan" style="width:135px;" onkeydown= "return isAlpha(event.keyCode);" onkeyup="nospaces()"  class="form-control"/></td>
										<td width="310" valign="top"><DIV id="error_goan" style="color:red;"></DIV></td>
									</tr>
<tr>
										<td>*Password</td>
										<td>:</td>
										<td><input name="password" type="password" maxlength="10" id="password" style="width:135px;" onkeyup="nospaces()" class="form-control"/></td>
										<td width="310" valign="top"><DIV id="error_password" style="color:red;"></DIV></td>
									</tr>
<tr>
										<td>Upload Your Photo</td>
										<td>:</td>
										<td><input name="photo" type="file" id="photo" onchange="return CheckPhotoExt();"  class="form-control"/></td>
										<td width="310" valign="top"><DIV id="error_photo" style="color:red;"></DIV></td>
									</tr>
                                                                        <tr> <td colspan="4">
                                                                        <a href="#" onClick="save();"><img src="../images/continue.jpg" border="0"></a>			
                                                                         </td></tr>
								</table>
                                            </form>
					</div>
				</div>
			</div>
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