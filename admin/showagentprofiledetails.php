<?php include('logincommon.php') ?>
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
    <link rel="stylesheet" type="text/css" href="css/lightbox.css">
    <!-- jQuery -->
    <script src="bower_components/jquery/jquery.min.js"></script>
    <script src='js/lightBox-ba9e08126f.js'></script>
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
		
	function validateBasicProfile(form) 
		{
			  var bgBad = "#FF9999";
			  var bgGood = "#66FFCC";
			  var valid = true;
			  var errmsg="";
			  
			 /* First Name  validation */ 		  
			 if (form.firstName.value == "" || form.firstName.value.trim().length==0) {
				error_firstname.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter your First Name";
				setTimeout(function () {error_firstname.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_firstname.innerHTML ="";
				setColor(form.firstName, bgGood);
			  }
			  
			  /* Last Name  validation */ 		  
			 if (form.lastName.value == "" || form.lastName.value.trim().length==0) {
				error_lastname.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter your Last Name";
				setTimeout(function () {error_lastname.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_lastname.innerHTML ="";
				setColor(form.lastName, bgGood);
			  }
			  
			  /* Gender  validation */ 		  
			 if (form.gender.value == "" || form.gender.value.trim().length==0) {
				error_gender.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please select your Gender";
				setTimeout(function () {error_gender.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_gender.innerHTML ="";
				setColor(form.gender, bgGood);
			  }
			  
			  /* Date Of Birth validation */ 		  
			 if (form.bdate.value == "" || form.bdate.value.trim().length==0) {
				error_bdate.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please select your Birth Date";
				setTimeout(function () {error_bdate.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_bdate.innerHTML ="";
				setColor(form.bdate, bgGood);
			  }
			  
				/* Marital Status validation */ 		  
			 if (form.maritalStatus.value == "" || form.maritalStatus.value.trim().length==0) {
				error_maritalStatus.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please select your Marital Status";
				setTimeout(function () {error_maritalStatus.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_maritalStatus.innerHTML ="";
				setColor(form.maritalStatus, bgGood);
			  }
			  
				  /* Religion validation */ 		  
			 if (form.religion.value == "" || form.religion.value.trim().length==0) {
				error_religion.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please select your Religion";
				setTimeout(function () {error_religion.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_religion.innerHTML ="";
				setColor(form.religion, bgGood);
			  }

				/* Caste validation */ 		  
			 if (form.caste.value == "" || form.caste.value.trim().length==0) {
				error_caste.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter your Caste";
				setTimeout(function () {error_caste.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_caste.innerHTML ="";
				setColor(form.caste, bgGood);
			  }
			  
			 
			/* Password validation */ 		  
			 if (form.password.value == "" || form.password.value.trim().length==0) {
				error_password.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter your Password";
				setTimeout(function () {error_password.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_password.innerHTML ="";
				setColor(form.password, bgGood);
			  }
			 
				
			if (!valid) 
			{
				ERRORBASICPROFILE.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Error : Please fill the basic information fields and try submitting again";
				setTimeout(function () {ERROR.innerHTML =""}, 12000);
			}
					
			return valid;
		}
	function validateContactInfo(form) 
		{
			  var bgBad = "#FF9999";
			  var bgGood = "#66FFCC";
			  var valid = true;
			  var errmsg="";
			  
			   /* Mobile No validation */ 		  
			 if (form.mobileNo.value == "" || form.mobileNo.value.trim().length==0) {
				error_mobileNo.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter your 10 digit Mobile No";
				setTimeout(function () {error_mobileNo.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_mobileNo.innerHTML ="";
				setColor(form.mobileNo, bgGood);
			  }
			  
			   /*Alternate Mobile No validation */ 		  
			 if (form.alternateMobileNo.value == "" || form.alternateMobileNo.value.trim().length==0) {
				error_alternateMobileNo.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter your 10 digit Alternate Mobile No";
				setTimeout(function () {error_alternateMobileNo.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_alternateMobileNo.innerHTML ="";
				setColor(form.alternateMobileNo, bgGood);
			  }
			  
			   /* Address validation */ 		  
			 if (form.address.value == "" || form.address.value.trim().length==0) {
				error_address.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter your Address";
				setTimeout(function () {error_address.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_address.innerHTML ="";
				setColor(form.address, bgGood);
			  }
			  
						  
			   /* Email Id validation */ 		  
			 if (form.emailId.value == "" || form.emailId.value.trim().length==0) {
				error_emailId.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter your Email Address";
				setTimeout(function () {error_emailId.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_emailId.innerHTML ="";
				setColor(form.emailId, bgGood);
			  }
			  
			    /* Taluka validation */ 		  
			 if (form.taluka.value == "" || form.taluka.value.trim().length==0) {
				error_taluka.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter your Taluka";
				setTimeout(function () {error_taluka.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_taluka.innerHTML ="";
				setColor(form.taluka, bgGood);
			  }
			  
			      /* Goan validation */ 		  
			 if (form.goan.value == "" || form.goan.value.trim().length==0) {
				error_goan.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter your Goan";
				setTimeout(function () {error_goan.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_goan.innerHTML ="";
				setColor(form.goan, bgGood);
			  }


			if (document.contactinfo.emailId.value != " ")
			{
				var checkOK="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-@._";
				var checkStr = document.contactinfo.emailId.value;
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
		
			if(document.contactinfo.emailId.value != "")
			{
				var val=document.contactinfo.emailId.value ;
				var pass1=val.indexOf('@',0);
				if(pass1==-1)
				{
					error_emailId.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter valid Email Address";
					setTimeout(function () {error_emailId.innerHTML =""}, 10000);
					document.contactinfo.emailId.value="";
					document.contactinfo.emailId.focus();
					return false;
				}
			}

			if(document.contactinfo.emailId.value != "")
			{
				var val=document.contactinfo.emailId.value ;
				var pass2=val.indexOf('.',0);
				if(pass2==-1)
				{
					error_emailId.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter valid Email Address";
					setTimeout(function () {error_emailId.innerHTML =""}, 10000);
					document.contactinfo.emailId.value="";
					document.contactinfo.emailId.focus();
					return false;
				}
				if((pass2 - pass1)== 1)
				{
					error_emailId.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter valid Email Address";
					setTimeout(function () {error_emailId.innerHTML =""}, 10000);
					document.contactinfo.emailId.value="";
					document.contactinfo.emailId.focus();
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
			
			if (!valid) 
			{
				ERRORCONTACTINFO.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Error : Please fill the contact information fields and try submitting again";
				setTimeout(function () {ERRORCONTACTINFO.innerHTML =""}, 12000);
			}
					
			return valid;

		}	

	function validateSocioAttributes(form)
		{	
		  var bgBad = "#FF9999";
		  var bgGood = "#66FFCC";
		  var valid = true;
		  var errmsg="";
		  
		   /* Gothra validation */ 		  
		 if (form.gothra.value == "" || form.gothra.value.trim().length==0 ) {
			error_gothra.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter your Gothra/Devak";
			setTimeout(function () {error_gothra.innerHTML =""}, 10000);
			valid = false;
		  } else {
			error_gothra.innerHTML ="";
			setColor(form.gothra, bgGood);
		  }
		  
		  /* Rashi validation */ 		  
		 if (form.rashi.value == "" || form.rashi.value.trim().length==0) {
			error_rashi.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please select your Rashi";
			setTimeout(function () {error_rashi.innerHTML =""}, 10000);
			valid = false;
		  } else {
			error_rashi.innerHTML ="";
			setColor(form.rashi, bgGood);
		  }
		  
		  /* Nakshtra validation */ 		  
		 if (form.nakshtra.value == "" || form.nakshtra.value.trim().length==0) {
			error_nakshtra.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please select your Nakshtra";
			setTimeout(function () {error_nakshtra.innerHTML =""}, 10000);
			valid = false;
		  } else {
			error_nakshtra.innerHTML ="";
			setColor(form.nakshtra, bgGood);
		  }
		  
		     /* Charan validation */ 		  
		 if (form.charan.value == "" || form.charan.value.trim().length==0) {
			error_charan.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please select your Charan";
			setTimeout(function () {error_charan.innerHTML =""}, 10000);
			valid = false;
		  } else {
			error_charan.innerHTML ="";
			setColor(form.charan, bgGood);
		  }
		  
		    /* Nadi validation */ 		  
		 if (form.nadi.value == "" || form.nadi.value.trim().length==0) {
			error_nadi.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please select your Nadi";
			setTimeout(function () {error_nadi.innerHTML =""}, 10000);
			valid = false;
		  } else {
			error_nadi.innerHTML ="";
			setColor(form.nadi, bgGood);
		  }
		  
		     /* Gan validation */ 		  
		 if (form.gan.value == "" || form.gan.value.trim().length==0) {
			error_gan.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please select your Gan";
			setTimeout(function () {error_gan.innerHTML =""}, 10000);
			valid = false;
		  } else {
			error_gan.innerHTML ="";
			setColor(form.gan, bgGood);
		  }
		  
		    /* Birth Place validation */ 		  
		 if (form.birthPlace.value == "" || form.birthPlace.value.trim().length==0) {
			error_birthPlace.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter your Birth Place";
			setTimeout(function () {error_birthPlace.innerHTML =""}, 10000);
			valid = false;
		  } else {
			error_birthPlace.innerHTML ="";
			setColor(form.birthPlace, bgGood);
		  }
		  
		  /* Birth Time validation */ 		  
		 if (form.birthTimeHours.value == "00" ) {
			error_birthTimeHours.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please select your Birth Hours";
			setTimeout(function () {error_birthTimeHours.innerHTML =""}, 10000);
			valid = false;
		  } else {
			error_birthTimeHours.innerHTML ="";
			setColor(form.birthTimeHours, bgGood);
		  }
		  
		  /* Birth Time Min validation */ 		  
		 if (form.birthTimeMins.value == "00") {
			error_birthTimeMins.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please select your Birth Minutes";
			setTimeout(function () {error_birthTimeMins.innerHTML =""}, 10000);
			valid = false;
		  } else {
			error_birthTimeMins.innerHTML ="";
			setColor(form.birthTimeMins, bgGood);
		  }
	
	  if (!valid) 
			{
				ERRORSOCIOATTR.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Error : Please fill the Socio atributes fields and try submitting again";
				setTimeout(function () {ERRORSOCIOATTR.innerHTML =""}, 12000);
			}
		  			  
		return valid;
		}	  
	
	function validatePhysicalAttr(form)
	{
	  var bgBad = "#FF9999";
	  var bgGood = "#66FFCC";
	  var valid = true;
	  var errmsg="";
	
	  /* Weight validation */ 		  
		 if (form.weight.value == "" || form.weight.value.trim().length==0) {
			error_weight.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please select your Weight";
			setTimeout(function () {error_weight.innerHTML =""}, 10000);
			valid = false;
		  } else {
			error_weight.innerHTML ="";
			setColor(form.weight, bgGood);
		  }
		  
	/* Blood group validation */ 		  
		 if (form.bloodGroup.value == "" || form.bloodGroup.value.trim().length==0) {
			error_bloodGroup.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please select your Blood Group";
			setTimeout(function () {error_bloodGroup.innerHTML =""}, 10000);
			valid = false;
		  } else {
			error_bloodGroup.innerHTML ="";
			setColor(form.bloodGroup, bgGood);
		  }	  
	
	/*Complexion validation */ 		  
		 if (form.complexion.value == "" || form.complexion.value.trim().length==0) {
			error_complexion.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please select your Complexion	";
			setTimeout(function () {error_complexion.innerHTML =""}, 10000);
			valid = false;
		  } else {
			error_complexion.innerHTML ="";
			setColor(form.complexion, bgGood);
		  }	 	
	
	if (!valid) 
			{
				ERRORPHYATTR.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Error : Please fill the Physical atributes fields and try submitting again";
				setTimeout(function () {ERRORPHYATTR.innerHTML =""}, 12000);
			}
		  			  
		return valid;
	}
	
	function validateProfile(form)
	{
	  var bgBad = "#FF9999";
	  var bgGood = "#66FFCC";
	  var valid = true;
	  var errmsg="";
	
	  /* Education validation */ 		  
		 if (form.education.value == "" || form.education.value.trim().length==0) {
			error_education.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please select your Education";
			setTimeout(function () {error_education.innerHTML =""}, 10000);
			valid = false;
		  } else {
			error_education.innerHTML ="";
			setColor(form.education, bgGood);
		  }
		  
	/* Annual Income validation */ 		  
		 if (form.annualIncome.value == "" || form.annualIncome.value.trim().length==0 || form.annualIncome.value == "0") {
			error_annualIncome.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter Annual Income";
			setTimeout(function () {error_annualIncome.innerHTML =""}, 10000);
			valid = false;
		  } else {
			error_annualIncome.innerHTML ="";
			setColor(form.annualIncome, bgGood);
		  }	  
	
	/*Occupation validation */ 		  
		 if (form.occupation.value == "" || form.occupation.value.trim().length==0) {
			error_occupation.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter your Occupation	";
			setTimeout(function () {error_occupation.innerHTML =""}, 10000);
			valid = false;
		  } else {
			error_occupation.innerHTML ="";
			setColor(form.occupation, bgGood);
		  }	 	
	
	if (!valid) 
			{
				ERRORPROFILE.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Error : Please fill the Physical atributes fields and try submitting again";
				setTimeout(function () {ERRORPROFILE.innerHTML =""}, 12000);
			}
		  			  
		return valid;
	}
	
	function validateFamilyDetails(form)
	{
	  var bgBad = "#FF9999";
	  var bgGood = "#66FFCC";
	  var valid = true;
	  var errmsg="";
	
		/* Father Name validation */ 		  
		 if (form.fatherName.value == "" || form.fatherName.value.trim().length==0) {
			error_fatherName.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter your Father's Name";
			setTimeout(function () {error_fatherName.innerHTML =""}, 10000);
			valid = false;
		  } else {
			error_fatherName.innerHTML ="";
			setColor(form.fatherName, bgGood);
		  }
		  
		/* Father Occupation validation */ 		  
		 if (form.fatherOccupation.value == "" || form.fatherOccupation.value.trim().length==0) {
			error_fatherOccupation.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter your Father's Occupation";
			setTimeout(function () {error_fatherOccupation.innerHTML =""}, 10000);
			valid = false;
		  } else {
			error_fatherOccupation.innerHTML ="";
			setColor(form.fatherOccupation, bgGood);
		  }	  
	
		  /* Mother Name validation */ 		  
		 if (form.motherName.value == "" || form.motherName.value.trim().length==0) {
			error_motherName.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter your Mother's Name";
			setTimeout(function () {error_motherName.innerHTML =""}, 10000);
			valid = false;
		  } else {
			error_motherName.innerHTML ="";
			setColor(form.motherName, bgGood);
		  }
		  
		/* Mother Occupation validation */ 		  
		 if (form.motherOccupation.value == "" || form.motherOccupation.value.trim().length==0) {
			error_motherOccupation.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter your Mother's Occupation";
			setTimeout(function () {error_motherOccupation.innerHTML =""}, 10000);
			valid = false;
		  } else {
			error_motherOccupation.innerHTML ="";
			setColor(form.motherOccupation, bgGood);
		  }		
		  
		   /* Mama Last Name validation */ 		  
		 if (form.mamaLastName.value == "" || form.mamaLastName.value.trim().length==0) {
			error_mamaLastName.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter your Mama's Last Name";
			setTimeout(function () {error_mamaLastName.innerHTML =""}, 10000);
			valid = false;
		  } else {
			error_mamaLastName.innerHTML ="";
			setColor(form.mamaLastName, bgGood);
		  }
		  
		/* Last Name Of Relatives validation */ 		  
		 if (form.lastNameOfRelatives.value == "" || form.lastNameOfRelatives.value.trim().length==0) {
			error_lastNameOfRelatives.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter your Last Name Of Relatives";
			setTimeout(function () {error_lastNameOfRelatives.innerHTML =""}, 10000);
			valid = false;
		  } else {
			error_lastNameOfRelatives.innerHTML ="";
			setColor(form.lastNameOfRelatives, bgGood);
		  }		
		  
		  
	if (!valid) 
			{
				ERRORFAMILYDETAILS.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Error : Please fill the Family Details fields and try submitting again";
				setTimeout(function () {ERRORFAMILYDETAILS.innerHTML =""}, 12000);
			}
		  			  
		return valid;	  
	}
	
	function validatePartnerPref(form)
	{
	  var bgBad = "#FF9999";
	  var bgGood = "#66FFCC";
	  var valid = true;
	  var errmsg="";
	
	  /* Looking For validation */ 		  
		 if (form.lookingFor.value == "" || form.lookingFor.value.trim().length==0) {
			error_lookingFor.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please select Partner Marital Status";
			setTimeout(function () {error_lookingFor.innerHTML =""}, 10000);
			valid = false;
		  } else {
			error_lookingFor.innerHTML ="";
			setColor(form.lookingFor, bgGood);
		  }
		  
	 /* Age From validation */ 		  
		 if (form.ageFrom.value == "" || form.ageFrom.value.trim().length==0) {
			error_ageFrom.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please select Age From ";
			setTimeout(function () {error_ageFrom.innerHTML =""}, 10000);
			valid = false;
		  } else {
			error_ageFrom.innerHTML ="";
			setColor(form.ageFrom, bgGood);
		  }	  
		  
	 /* Age To validation */ 		  
		 if (form.ageTo.value == "" || form.ageTo.value.trim().length==0) {
			error_ageTo.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please select Age To";
			setTimeout(function () {error_ageTo.innerHTML =""}, 10000);
			valid = false;
		  } else {
			error_ageTo.innerHTML ="";
			setColor(form.ageTo, bgGood);
		  }	 	
		  
	 /* Caste validation */ 		  
		 if (form.partnerCaste.value == "" || form.partnerCaste.value.trim().length==0) {
			error_partnerCaste.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please select Partner Caste";
			setTimeout(function () {error_partnerCaste.innerHTML =""}, 10000);
			valid = false;
		  } else {
			error_partnerCaste.innerHTML ="";
			setColor(form.partnerCaste, bgGood);
		  }			
		  
	
		
	if (!valid) 
			{
				ERRORPARTNERPREF.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Error : Please fill the Partner Preference fields and try submitting again";
				setTimeout(function () {ERRORPARTNERPREF.innerHTML =""}, 12000);
			}
		  			  
		return valid;
	}
		
	function CheckHoroscopePhotoExt()
	{
		var fup = document.getElementById('horoscopephoto');
     	var fileName = fup.value;
		var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
		if(ext == "jpg" || ext == "png" || ext == "gif" || ext == "bmp" || ext == "JPG" || ext == "PNG" || ext == "GIF" || ext == "BMP")
			{
			return true;
			} 
		else
		{
			fileName="";
			error_horoscopephoto.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Upload .jpg,.png,.gif,.bmp files only.";
			document.getElementById('horoscopephoto').value="";
			fup.focus();
			return false;
		}
	}
	
	function CheckAlbumPhotoExt()
	{
		var fup = document.getElementById('albumphoto');
     	var fileName = fup.value;
		var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
		if(ext == "jpg" || ext == "png" || ext == "gif" || ext == "bmp" || ext == "JPG" || ext == "PNG" || ext == "GIF" || ext == "BMP")
			{
			return true;
			} 
		else
		{
			fileName="";
			error_albumphoto.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Upload .jpg,.png,.gif,.bmp files only.";
			document.getElementById('albumphoto').value="";
			fup.focus();
			return false;
		}
	}
	
	function CheckHoroscopePhoto(form) 
		{
		  var bgBad = "#FF9999";
		  var bgGood = "#66FFCC";
		  var valid = true;
		  var errmsg="";
		  
		  /*Horoscope Photo validation */ 		  
		 if (form.horoscopephoto.value == "" || form.horoscopephoto.value.trim().length==0) {
			error_horoscopephoto.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please select your Horoscope";
			setTimeout(function () {error_horoscopephoto.innerHTML =""}, 10000);
			valid = false;
		  } else {
			error_horoscopephoto.innerHTML ="";
				setNewColor(form.horoscopephoto, bgGood);
		  }
		return valid;  
		}	  
		
	function CheckAlbumPhoto(form) 
		{
		  var bgBad = "#FF9999";
		  var bgGood = "#66FFCC";
		  var valid = true;
		  var errmsg="";
		  
		  /*Album Photo validation */ 		  
		 if (form.albumphoto.value == "" || form.albumphoto.value.trim().length==0) {
			error_albumphoto.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please select a Photo";
			setTimeout(function () {error_albumphoto.innerHTML =""}, 10000);
			valid = false;
		  } else {
			error_albumphoto.innerHTML ="";
				setNewColor(form.albumphoto, bgGood);
		  }
		return valid;  
		}	

     function CheckIDProof(form) 
		{
	
		  var bgBad = "#FF9999";
		  var bgGood = "#66FFCC";
		  var valid = true;
		  var errmsg="";
		  
		 /* Id type  validation */ 		  
		 if (form.idtype.value == "") {
			error_idtype.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please Select Id Type";
			setTimeout(function () {error_idtype.innerHTML =""}, 10000);
			valid = false;
		  } else {
			error_idtype.innerHTML ="";
			setColor(form.idtype, bgGood);
		  }
		  
		  /* Id Proof  validation */ 		  
		 if (form.idproof.value == "" ) {
			error_idproof.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please Select Id Proof";
			setTimeout(function () {error_idproof.innerHTML =""}, 10000);
			valid = false;
		  } else {
			error_idproof.innerHTML ="";
			setColor(form.idproof, bgGood);
		  }
		  return valid;
			 
		}	
		
         function CheckIDProofPhotoExt()
	{
	var fup = document.getElementById('idproof');
     	var fileName = fup.value;
		var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
		if(ext == "jpg" || ext == "png" || ext == "gif" || ext == "bmp" || ext == "JPG" || ext == "PNG" || ext == "GIF" || ext == "BMP")
			{
			return true;
			} 
		else
		{
			fileName="";
			error_idproof.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Upload .jpg,.png,.gif,.bmp files only.";
			document.getElementById('idproof').value="";
			fup.focus();
			return false;
		}
	}	
	function checkNoOfBrotherSister()
	{
		var noofBrothers = document.getElementById('noofBrothers');
		if(noofBrothers.value == "0")
			{
			document.getElementById("noofBrothersMarried").disabled=true;
			}
		else	
			{
			document.getElementById("noofBrothersMarried").disabled=false;
			}
			
		var noofSisters = document.getElementById('noofSisters');
		if(noofSisters.value == "0")
			{
			document.getElementById("noofSistersMarried").disabled=true;
			}	
		else	
			{
			document.getElementById("noofSistersMarried").disabled=false;
			}	
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

	</script>
	
	<style>
	
	.img-500
		{
		height : 100px;
		width  : 200px;
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
		  width:250px;
		  height:100px;
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
		  width:300px; 
		  height:175px;
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
			date_default_timezone_set('Asia/Calcutta');	
			if(isset($_GET['id']))
				{
				$profileId=$_GET['id'];
				$_SESSION['profile_id']=$profileId;	
				}				
			if(isset($_SESSION['profile_id']))
			{	
				$profileId=$_SESSION['profile_id'];
				if(isset($_POST['updateBasicProfile']))
					{
						$firstName		= $_POST['firstName'];
						$lastName		= $_POST['lastName'];
						$gender			= $_POST['gender'];
						$bdate	= $_POST['bdate'];
						$maritalStatus	= $_POST['maritalStatus'];
						$religion		= $_POST['religion'];
						$caste			= $_POST['caste'];

						if($_POST['subCaste']) 
						 { 
						 $subCaste=$_POST['subCaste']; 
						 } 
						else
						 { 
						 $subCaste="Not Specified";
						 }
						 
						//$password=AES_ENCRYPT($_POST['password'],$encryption_key);
						$password=$_POST['password'];

						$lastUpdated_datetime=date('Y-m-d h:i:s');

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

						$basic_profile_update = "UPDATE tbl_basic_profile 
												 SET 
												 first_name 			= '$firstName',
												 last_name 				= '$lastName',
												 gender     			= '$gender',
												 birth_date 			= '$bdate', 
												 marital_status 		= '$maritalStatus',
												 religion   			= '$religion',
												 caste					= '$caste',	
												 sub_caste				= '$subCaste',
												 password				= '$password',
												 lastUpdated_datetime	= '$lastUpdated_datetime',
												 ip_address				= '$ipAddress'
												 WHERE profile_id       = '$profileId'";	
						$log->info("Updating Basic Profile  :::");						 
						$log->info($basic_profile_update);						 
						mysqli_query($conn,$basic_profile_update) or die("Error while updating basic profile data:"+mysqli_error($conn));
						$age=GetAge($bdate); 
						mysqli_query($conn,"UPDATE tbl_basic_profile SET age='$age' WHERE profile_id       = '$profileId'") or die("Error while updating age :"+mysql_error());
updateLastUpdatedDatetime($profileId);
						echo "<script>window.location.href = 'showagentprofiledetails.php?msg=success';</script>";		
					}
				}
				
				function GetAge($dob) 
					{ 
						$dob=explode("-",$dob); 
						$curMonth = date("m");
						$curDay = date("j");
						$curYear = date("Y");
						$age = $curYear - $dob[0]; 
						if($curMonth<$dob[1] || ($curMonth==$dob[1] && $curDay<$dob[2])) 
								$age--; 
						return $age; 
					}			
				
				
			if(isset($_POST['updateContactInfo']))
				{
			                $mobileNo			= $_POST['mobileNo'];
        					$alternateMobileNo  = $_POST['alternateMobileNo'];
        					$emailId			= $_POST['emailId'];
        					$address			= $_POST['address'];
                            $country       = $_POST['country'];  
                            $state         = $_POST['state'];         
                            $district      = $_POST['district'];
                            $taluka        = $_POST['taluka'];
                            $goan          = $_POST['goan'];     

					$contact_info_update = "UPDATE tbl_contact_info 
											 SET 
											 mobile_no 				= '$mobileNo',
											 alternate_mobile_no	= '$alternateMobileNo',
											 email_id     			= '$emailId',
											 address 				= '$address',
                                             country = '$country',state='$state',district='$district',city='$taluka', goan='$goan'
											 WHERE profile_id       = '$profileId'";	
					$log->info("Updating Contact Info  :::");						 
					$log->info($contact_info_update);							 
					mysqli_query($conn,$contact_info_update) or die("Error while updating contact info data:"+mysqli_error($conn));
                    updateLastUpdatedDatetime($profileId);
					echo "<script>window.location.href = 'showagentprofiledetails.php?msg=success';</script>";	
				}
				
			if(isset($_POST['updatePhoto']))
				{
					$fetch_existing_photo_query="SELECT imagename FROM tbl_profile_photo where profile_id='$profileId'";
					$existing_photo_rs= mysqli_query($conn,$fetch_existing_photo_query);
				
					while($exiting_photo_row = mysqli_fetch_array($existing_photo_rs)) 
					{
					if($exiting_photo_row[0]=="noimg.gif")
						{
						
						}
					else
						{	
						 $utemp="../profilepics/".$exiting_photo_row[0];
						 unlink($utemp);	
						}
					}
	
					if(isset($_POST['updatePhoto']) && $_FILES['photo']['size'] > 0) 
							{
								$fileName = $_FILES['photo']['name'];
								$tmpName  = $_FILES['photo']['tmp_name'];
							}
						
					$ext=substr(strrchr($fileName,'.'),1);		
					$fileName = $profileId.".".$ext;		
					$target_path="../profilepics/";
					
					$target_path=$target_path.basename($fileName);
					
					if(move_uploaded_file($_FILES['photo']['tmp_name'],$target_path))
						{
						$profile_photo_update = "UPDATE tbl_profile_photo SET imagename='$fileName' where profile_id='$profileId'";
						$log->info("Updating Profile Photo  :::");						 
						$log->info($profile_photo_update);	
						mysqli_query($conn,$profile_photo_update) or die(mysqli_error($conn)); 
						}
                    updateLastUpdatedDatetime($profileId);
					echo "<script>window.location.href = 'showagentprofiledetails.php?msg=success';</script>";			
				}	
				
			if(isset($_POST['updateSocioAttr']))
				{
				$gothraNew		= $_POST['gothra'];
				$rashiNew		= $_POST['rashi'];
				$nakshtraNew	= $_POST['nakshtra'];
				$charanNew		= $_POST['charan'];
				$nadiNew		= $_POST['nadi'];
				$ganNew			= $_POST['gan'];
				$birthPlaceNew	= $_POST['birthPlace'];
				$birthTimeHours= $_POST['birthTimeHours'];
				$birthTimeMins = $_POST['birthTimeMins'];
				$birthTimeAMPM = $_POST['birthTimeAMPM'];
				
				$birthTimeNew=$birthTimeHours.":".$birthTimeMins.":".$birthTimeAMPM;
				$mangalNew		= $_POST['mangal'];
				
				$socio_attr_update = "UPDATE tbl_socio_religious_attr 
											 SET 
											 gothra 				= '$gothraNew',
											 rashi					= '$rashiNew',
											 nakshtra     			= '$nakshtraNew',
											 charan 				= '$charanNew',
											 nadi					= '$nadiNew',
											 gan					= '$ganNew',
											 birth_place			= '$birthPlaceNew',
											 birth_time				= '$birthTimeNew',
											 mangal					= '$mangalNew'
											 WHERE profile_id       = '$profileId'";	
				$log->info("Updating Socio Attributes  :::");						 
				$log->info($socio_attr_update);								 
				mysqli_query($conn,$socio_attr_update) or die("Error while updating socio attributes data:"+mysqli_error($conn));
                updateLastUpdatedDatetime($profileId);
				echo "<script>window.location.href = 'showagentprofiledetails.php?msg=success';</script>";
				}
				
			if(isset($_POST['updatePhysicalAttr']))
				{
				$heightFt	 = $_POST['heightFt'];
				$heightInch  = $_POST['heightInch'];
				$weight 	 = $_POST['weight'];
				$bloodGroup  = $_POST['bloodGroup'];
				$complexion  = $_POST['complexion'];
				
				$physical_attr_update = "UPDATE tbl_physical_attr 
											 SET 
											 heightFt 				= '$heightFt',
											 heightInch				= '$heightInch',
											 weight     			= '$weight',
											 blood_group 			= '$bloodGroup',
											 complexion				= '$complexion'
											 WHERE profile_id       = '$profileId'";		
				$log->info("Updating Physical Attributes  :::");						 
				$log->info($physical_attr_update);									 
				mysqli_query($conn,$physical_attr_update) or die("Error while updating physical attributes data:"+mysqli_error($conn));
                updateLastUpdatedDatetime($profileId);
				echo "<script>window.location.href = 'showagentprofiledetails.php?msg=success';</script>";
				}
				
			if(isset($_POST['updatePartnerPref']))
				{
				$fetch_partner_preferences1="select partner_education from tbl_partner_preference where profile_id='$profileId'";	
				$partner_preferences_rs1= mysqli_query($conn,$fetch_partner_preferences1);
				
				@$partnerEducation   = $_POST['partnerEducation'];
				
				if(empty($partnerEducation))
					{
					while($partner_preferences_row1 = mysql_fetch_array($partner_preferences_rs1)) 
						{
						$education = $partner_preferences_row1[0];
						}
					}
				else
					{
					$education="";					
							if( is_array($partnerEducation)){
						while (list ($key, $val) = each ($partnerEducation)) {
							$education=$education.",".$val;
							}
						}
					$education= ltrim ($education, ',');	
					}		
				
				$lookingFor 		 = $_POST['lookingFor'];
				$ageFrom			 = $_POST['ageFrom'];
				$ageTo		 		 = $_POST['ageTo'];
				
				$partnerCaste		 = $_POST['partnerCaste'];		
				
							
				$partner_preference_update = "UPDATE tbl_partner_preference 
					 SET 
					 looking_for		 	 = '$lookingFor',
					 age_from				 = '$ageFrom',
					 age_to     			 = '$ageTo',

					 partner_education		 = '$education',
					 partner_caste			 = '$partnerCaste'
					 WHERE profile_id        = '$profileId'";		
				$log->info("Updating Partner Preference  :::");						 
				$log->info($partner_preference_update);								 
				mysqli_query($conn,$partner_preference_update) or die("Error while updating partner preference attributes data:"+mysqli_error($conn));
                updateLastUpdatedDatetime($profileId);
				echo "<script>window.location.href = 'showagentprofiledetails.php?msg=success';</script>";
				}	
				
			if(isset($_POST['updateProfile']))
				{
				$education 		= $_POST['education'];
				$annualIncome 	= $_POST['annualIncome'];
				$occupation 	= $_POST['occupation'];
	
				$profile_update = "UPDATE tbl_profile 
				 		SET 
								 education 				= '$education',
								 annualIncome 			= '$annualIncome',
								 occupation				= '$occupation'
								 WHERE profile_id='$profileId'";		
				$log->info("Updating Profile  :::");						 
				$log->info($profile_update);							 
				mysqli_query($conn,$profile_update) or die("Error while updating profile data:"+mysqli_error($conn));
                updateLastUpdatedDatetime($profileId);
				echo "<script>window.location.href = 'showagentprofiledetails.php?msg=success';</script>";
				}
				
			if(isset($_POST['updateFamilyDetails']))
				{
				$fatherName				= $_POST['fatherName'];
				$fatherOccupation		= $_POST['fatherOccupation'];
				$motherName				= $_POST['motherName'];
				$motherOccupation		= $_POST['motherOccupation'];
				$noofBrothers			= $_POST['noofBrothers'];
				
				if(isset($_POST['noofBrothersMarried']))
					$noofBrothersMarried	= $_POST['noofBrothersMarried'];
				else
					$noofBrothersMarried    = "0";	
					
				$noofSisters			= $_POST['noofSisters'];
				
				if(isset($_POST['noofSistersMarried']))
					$noofSistersMarried	= $_POST['noofSistersMarried'];
				else
					$noofSistersMarried    = "0";
					
				$mamaLastName			= $_POST['mamaLastName'];
				$lastNameOfRelatives	= $_POST['lastNameOfRelatives'];
				
				$family_details_update  = "UPDATE tbl_family_details 
											 SET 
											 father_name 				= '$fatherName',
											 father_occupation 			= '$fatherOccupation',
											 mother_name				= '$motherName',
											 mother_occupation 			= '$motherOccupation',
											 noofBrothers 				= '$noofBrothers',
											 noofBrothersMarried		= '$noofBrothersMarried',
											 noofSisters				= '$noofSisters',
											 noofSistersMarried 		= '$noofSistersMarried',
											 mamaLastName 				= '$mamaLastName',
											 relativeLastNames			= '$lastNameOfRelatives'
											 WHERE profile_id			= '$profileId'";		
				$log->info("Updating Family Details  :::");						 
				$log->info($family_details_update);						 
				mysqli_query($conn,$family_details_update) or die("Error while family details data:"+mysql_error($conn));
                updateLastUpdatedDatetime($profileId);
				echo "<script>window.location.href = 'showagentprofiledetails.php?msg=success';</script>";
				}
				
			if(isset($_POST['updateHoroscopePhoto']))
				{
					$fetch_existing_horoscope_photo_query="SELECT imagename FROM tbl_horoscope_photo where profile_id='$profileId'";
					$existing_horoscope_photo_rs= mysqli_query($conn,$fetch_existing_horoscope_photo_query);
				
					while($exiting_horoscope_photo_row = mysqli_fetch_array($existing_horoscope_photo_rs)) 
					{
					if($exiting_horoscope_photo_row[0]=="noimg.gif")
						{
						
						}
					else
						{	
						 $utemp="../horoscopepics/".$exiting_horoscope_photo_row[0];
						 unlink($utemp);	
						}
					}
	
					if(isset($_POST['updateHoroscopePhoto']) && $_FILES['horoscopephoto']['size'] > 0)
						{
						$fileName = $_FILES['horoscopephoto']['name'];
						$tmpName  = $_FILES['horoscopephoto']['tmp_name'];
						}
					$ext=substr(strrchr($fileName,'.'),1);		
					$fileName = $profileId.".".$ext;		
					$target_path="../horoscopepics/";
					
					$target_path=$target_path.basename($fileName);
					
					if(move_uploaded_file($_FILES['horoscopephoto']['tmp_name'],$target_path))
						{
						$horoscope_photo_update = "UPDATE tbl_horoscope_photo SET imagename='$fileName' where profile_id='$profileId'";
						$log->info("Updating Horoscope Photo  :::");						 
						$log->info($horoscope_photo_update);		
						mysqli_query($conn,$horoscope_photo_update) or die(mysqli_error($conn)); 
						}
					echo "<script>window.location.href = 'showagentprofiledetails.php?msg=success';</script>";
                    		updateLastUpdatedDatetime($profileId);
				}			
				
				if(isset($_POST['updatePhotoAlbum']))
				{
					$folder = "../photoalbums/".$profileId."/";	
					if (!file_exists($folder)) {
							mkdir($folder, 0755, true);
					}
					saveAlbumPhoto($folder,$profileId);
                    			updateLastUpdatedDatetime($profileId);
					//$log->info("".$folder);
				}
	
				function saveAlbumPhoto($folder,$profileId)
				{
				    include('../conn.php');
					if(isset($_POST['updatePhotoAlbum']) && $_FILES['albumphoto']['size'] > 0) {
						$fileName = $_FILES['albumphoto']['name'];
						$tmpName  = $_FILES['albumphoto']['tmp_name'];
						}
				
					$target_path=$folder;
					
					$target_path=$target_path.basename($_FILES['albumphoto']['name']);
				
					if(move_uploaded_file($_FILES['albumphoto']['tmp_name'],$target_path)){
												
					$photo_album_insert = "INSERT INTO tbl_photo_album(imagename,profile_id) ".
							 "VALUES ('$fileName','$profileId')";
							 
					//$log->info("Album Photo Insert Query::".photo_album_insert);		 
					mysqli_query($conn,$photo_album_insert) or die(mysqli_error($conn)); 
					echo "<script>window.location.href = 'showagentprofiledetails.php?msg=success';</script>";
					//$log->info("Photo Saved Successfully");
					}
				}
			if(isset($_POST['updateAlbumStatus']))
				{
				$albumStatus 	= $_POST['albumStatus'];
				$album_status_update = "UPDATE tbl_basic_profile 
											 SET 
											 album_status 			= '$albumStatus'
											 WHERE profile_id='$profileId'";		
				$log->info("Updating Album Status :::");						 
				$log->info($album_status_update);							 
				mysqli_query($conn,$album_status_update) or die("Error while updating album status data:"+mysqli_error($conn));
                updateLastUpdatedDatetime($profileId);
				echo "<script>window.location.href = 'showagentprofiledetails.php?msg=success';</script>";
				}	
            if(isset($_POST['updateIDProof']))
        	{
        		$idtype = $_POST['idtype'];
          		$fetch_existing_idproof_photo_query="SELECT imagename FROM tbl_profile_identification_proof where profile_id='$profileId'";
        		$existing_idproof_photo_rs= mysqli_query($conn,$fetch_existing_idproof_photo_query);
        	
        		while($exiting_idproof_photo_row = mysqli_fetch_array($existing_idproof_photo_rs)) 
        		{
           		if($exiting_idproof_photo_row[0]=="noimg.gif")
        			{
        			
        			}
        		else
        			{	
        			 $utemp="../idproofs/".$exiting_idproof_photo_row[0];
        			 unlink($utemp);	
        			}
        		}
        
        		if(isset($_POST['updateIDProof']) && $_FILES['idproof']['size'] > 0)
        			{
        			$fileName = $_FILES['idproof']['name'];
        			$tmpName  = $_FILES['idproof']['tmp_name'];
        			}
        		$ext=substr(strrchr($fileName,'.'),1);		
        		$fileName = $profileId.".".$ext;		
        		$target_path="../idproofs/";
        		
        		$target_path=$target_path.basename($fileName);
        		
        		if(move_uploaded_file($_FILES['idproof']['tmp_name'],$target_path))
        			{
        			$idproof_photo_update = "UPDATE tbl_profile_identification_proof SET imagename='$fileName',idtype='$idtype' where profile_id='$profileId'";
        			$log->info("Updating Id Proof Photo  :::".$idproof_photo_update);						 
        			mysqli_query($conn,$idproof_photo_update) or die(mysqli_error($conn)); 
        			}
        	echo "<script>window.location.href = 'showagentprofiledetails.php?msg=success';</script>";
        	}	
			if(isset($_GET['delid']))
				{
				$id=$_GET['delid'];
				$fetch_photo_byid="SELECT imagename,id FROM tbl_photo_album where id='$id'";
				$photo_byid_rs= mysqli_query($conn,$fetch_photo_byid);
				$numrowsbyid = mysqli_num_rows($photo_byid_rs);
				if( $numrowsbyid > 0 )
					{
					while($photo_byid_row = mysqli_fetch_array($photo_byid_rs))
							{
							$file = "../photoalbums/".$profileId."/".$photo_byid_row[0];
							unlink($file);	
							mysqli_query($conn,"delete from tbl_photo_album where id='$id'");		
							echo "<script>window.location.href = 'showagentprofiledetails.php?msg=success';</script>";
							}
					}

				}
                         function updateLastUpdatedDatetime($profileId)
                         {
                         include('../conn.php');
                         
                         $lastUpdated_datetime=date('Y-m-d h:i:s'); 
                         mysqli_query($conn,"UPDATE tbl_basic_profile SET lastUpdated_datetime='$lastUpdated_datetime' where profile_id='$profileId'") or die(mysqli_error($conn));
                         } 	
			?>
     <!-- topbar starts -->
    <?php include('topbar.php'); ?>
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">
        
        <!-- left menu starts -->
        <?php include('leftmenuagents.php'); ?>
		
        <!-- left menu ends -->

       <?php include('noscripts.php'); ?>

        <div id="content" class="col-lg-10 col-sm-10">
        <!-- content starts -->




        <?php
								
								$fetch_basic_profile="select * from tbl_basic_profile where profile_id='$profileId'";	
								$basic_profile_rs= mysqli_query($conn,$fetch_basic_profile);
								while($basic_profile_row = mysqli_fetch_array($basic_profile_rs)) 
									{
									$pwd=$basic_profile_row[9];
									$status=$basic_profile_row[13];


										
								?>
				<?php echo "<font color='red'><h4>Profile ID : $profileId</h4></font>"; ?>

<!--Agent Details Starts here -->
<?php
$fetch_agent_details = "select agent.agent_id,agent.first_name,agent.last_name from tbl_agent_profile agent,tbl_basic_profile profile,tbl_agent_profiles agentprofiles where profile.profile_id=agentprofiles .profile_id and agent.agent_id=agentprofiles .agent_id and agentprofiles .profile_id='$profileId'";

$fetch_agent_details_rs = mysqli_query($conn,$fetch_agent_details) or die(mysqli_error($conn));

$fetch_agent_details_numrows=mysqli_num_rows($fetch_agent_details_rs);

if($fetch_agent_details_numrows > 0 )
{
while($fetch_agent_details_rows= mysqli_fetch_array($fetch_agent_details_rs))
{
$agentId = $fetch_agent_details_rows[0];
$agentName = $fetch_agent_details_rows[1]."&nbsp;".$fetch_agent_details_rows[2];
?>
<div class="row">
	<div class="box col-md-12">
		<div class="box-inner">
			<div class="box-header well" data-original-title="">
				<h2>Agent Details</h2>
				<div class="box-icon">
				<a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a>
				</div>
			</div>
			<div class="box-content">
				
					
						<?php
						echo "<a href='agentProfile.php?agentId=$agentId&action=view'>Agent Id :".$agentId."</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."Agent Name : ".$agentName;
						?>
					
				
			</div>
		</div>
	</div>
</div>
<?php
}
}
?>
<!--Agent Details Ends here -->
				
<div class="row">
    <div class="box col-md-6">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
               	<h2><i class="glyphicon glyphicon-eye-open"></i> Basic Information</h2>
                <div class="box-icon">
                      <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
            </div>
            <div class="box-content">
               <DIV id="ERRORBASICPROFILE" style="color:red;"></DIV>
				<form name="basicprofile" method="post"  action="showagentprofiledetails.php" onSubmit="return validateBasicProfile(this)">
		
					<table border=0 style="padding-bottom: 20px;" cellpadding="5" border="0" cellspacing="0">
						<tr>
							<td>First Name</td>
							<td>:</td>
							<td><input name="firstName" type="text" maxlength="20" id="txtFirstName" value="<?php echo $basic_profile_row[1]; ?>" style="width:120px;" class="form-control" onkeydown= "return isAlpha(event.keyCode);"/></td>
							<td width="310" valign="top"><DIV id="error_firstname" style="color:red;"></DIV></td>		
						</tr>
						<tr>
							<td>Last Name</td>
							<td>:</td>
							<td><input name="lastName" type="text" maxlength="20" id="txtLastName" value="<?php echo $basic_profile_row[2]; ?>" style="width:120px;" class="form-control" onkeydown= "return isAlpha(event.keyCode);"/></td>
							<td width="310" valign="top"><DIV id="error_lastname"  style="color:red;"></DIV></td>		
						</tr>
						
						<tr>
							<td>Gender</td>
							<td>:</td>
							<td>
							<select name="gender" id="gender" style="width:120px;" class="form-control">
							<?php
								$genderOptions  = array('Male', 'Female');
								$selectedGender = $basic_profile_row[3];
								foreach($genderOptions as $option){
									if($selectedGender == $option){
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
							<td>Date of Birth</td>
							<td>:</td>
							<td><input type="text" name="bdate" class="form-control"  id="bdate" value="<?php echo $basic_profile_row[4]; ?>" /></td>
							<td width="310" valign="top"><DIV id="error_bdate" style="color:red;"></DIV></td>
						</tr>
						<tr>
							<td>Marital Status</td>
							<td>:</td>
							<td>
							<select name="maritalStatus" id="maritalStatus" style="width:120px;" class="form-control">
							<?php
								$maritalStatusOptions  = array('Unmarried', 'Divorced','Widowed','Separated');
								$selectedmaritalStatus = $basic_profile_row[5];
								foreach($maritalStatusOptions  as $option){
									if($selectedmaritalStatus == $option){
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
							<td>Religion</td>
							<td>:</td>
							<td>
							<select name="religion" id="religion" style="width:120px;" class="form-control">
								<option value=" ">- Unspecified -</option>
								<?php
								$religionOptions  = array('Hindu');
								$selectedreligion = $basic_profile_row[6];
								foreach($religionOptions as $option){
									if($selectedreligion == $option){
										echo "<option selected='selected' value='$option'>$option</option>" ;
									}else{
										echo "<option value='$option'>$option</option>" ;
									}
								}
								?>
							</select>
							</td>
							<td width="310" valign="top"><DIV id="error_religion" style="color:red;"></DIV></td>
						</tr>
						<tr>
							<td>Caste</td>
							<td>:</td>
							<td>
							<select name="caste" id="caste" style="width:120px;" class="form-control">
								<?php
								$casteOptions  = array('Maratha', 'Maratha 96Kuli','Maratha Kunbi','Maratha Deshmukh');
								$selectedcaste = $basic_profile_row[7];
								foreach($casteOptions as $option){
									if($selectedcaste == $option){
										echo "<option selected='selected' value='$option'>$option</option>" ;
									}else{
										echo "<option value='$option'>$option</option>" ;
									}
								}
								?>
							</select>
							
							</td>
							<td width="310" valign="top"><DIV id="error_caste" style="color:red;"></DIV></td>
						</tr>
						<tr>
							<td>Subcaste</td>
							<td>:</td>
							<td><input name="subCaste" type="text" maxlength="30" id="subCaste" value="<?php echo $basic_profile_row[8]; ?>" style="width:120px;" class="form-control" onkeydown= "return isAlpha(event.keyCode);"/></td>
						</tr>
					
						<tr>
							<td>Password</td>
							<td>:</td>
							<td><input name="password" type="password" maxlength="15" id="password" value="<?php echo $basic_profile_row[9]; ?>" style="width:120px;" class="form-control"/>
							<a href="showagentprofiledetails.php?msg=sendpwd" class="btn btn-warning btn-sm">Send Password</a>			
							</td>
							<td width="310" valign="top"><DIV id="error_password" style="color:red;"></DIV></td>
						</tr>
						<tr>
							<td colspan="2" align="right"><input type="submit" name="updateBasicProfile" value="Update" class="btn btn-primary btn-sm"></td>
						</tr>
					</table>
					</form>
				
				<?php
					}
					$fetch_contact_info="select * from tbl_contact_info where profile_id='$profileId'";	
					$contact_info_rs= mysqli_query($conn,$fetch_contact_info);
					while($contact_info_row = mysqli_fetch_array($contact_info_rs)) 
							{
							$contactNo=$contact_info_row[1];
					?>
            </div>
        </div>
    </div>
    <!--/span-->

    <div class="box col-md-6">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-eye-open"></i> Contact Details</h2>

                <div class="box-icon">
                     <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
            </div>
            <div class="box-content">
                	<DIV id="ERRORCONTACTINFO" style="color:red;"></DIV>
								<form name="contactinfo" method="post"  action="showagentprofiledetails.php" onSubmit="return validateContactInfo(this)">
								<table style="padding-bottom: 20px;" cellpadding="5" border="0" cellspacing="0">
									<tr>
										<td>Mobile</td>
										<td>:</td>
										<td><input name="mobileNo" type="text" maxlength="10" id="mobileNo" class="form-control" value="<?php echo $contact_info_row[1]; ?>" style="width:120px;" onkeypress="return isNumberKey(event)"/></td>
										<td width="310" valign="top"><DIV id="error_mobileNo" style="color:red;"></DIV></td>
									</tr>
									 <tr>
										<td>Alternate Mobile</td>
										<td>:</td>
										<td><input name="alternateMobileNo" type="text" maxlength="10" class="form-control" id="alternateMobileNo" value="<?php echo $contact_info_row[2]; ?>" style="width:120px;" onkeypress="return isNumberKey(event)" /></td>
										<td width="310" valign="top"><DIV id="error_alternateMobileNo" style="color:red;"></DIV></td>
									</tr>
									<tr>
										<td>Email</td>
										<td>:</td>
										<td><input name="emailId" type="text" maxlength="100" class="form-control" id="emailId" value="<?php echo $contact_info_row[3]; ?>" style="width:120px;" /></td>
										<td width="310" valign="top"><DIV id="error_emailId" style="color:red;"></DIV></td>
									</tr>
									<tr>
										<td>Address</td>
										<td>:</td>
										<td><textarea columns="2" rows="5" name="address" id="address" class="form-control"><?php echo $contact_info_row[4]; ?></textarea></td>
										<td width="310" valign="top"><DIV id="error_address" style="color:red;"></DIV></td>
									</tr>
<tr>
										<td>Country</td>
										<td>:</td>
										<td>
<select name="country" id="country" style="width:135px;" class="form-control">
										
										<?php
											$countryOptions  = array('India');
											$selectedCountry = $contact_info_row[5];
											foreach($countryOptions as $option){
												if($selectedCountry == $option){
													echo "<option selected='selected' value='$option'>$option</option>" ;
												}else{
													echo "<option value='$option'>$option</option>" ;
												}
											}
										?>
										</select>

</td>
										<td width="310" valign="top"><DIV id="error_country" style="color:red;"></DIV></td>
									</tr>
<tr>
										<td>State</td>
										<td>:</td>
										<td>
<select name="state" id="state" style="width:135px;" class="form-control">
										
										<?php
											$stateOptions  = array('Maharashtra');
											$selectedState = $contact_info_row[7];
											foreach($stateOptions as $option){
												if($selectedState == $option){
													echo "<option selected='selected' value='$option'>$option</option>" ;
												}else{
													echo "<option value='$option'>$option</option>" ;
												}
											}
										?>
										</select>

</td>
										<td width="310" valign="top"><DIV id="error_state" style="color:red;"></DIV></td>
									</tr>
<tr>
										<td>District</td>
										<td>:</td>
										<td>
<select name="district" id="district" style="width:135px;" class="form-control">
										
										<?php
											$districtOptions  = array('Ahmednagar','Akola','Amravati','Aurangabad','Beed','Belgaum','Bhandara','Bidar','Buldana','Chandrapur','Dhule','Gadchiroli','Gondia','Hingoli','Jalana','Jalgaon','Kolhapur','Latur','Mumbai','Nagpur','Nanded','Nandurbar','Nashik','Osmanabad','Parbhani','Pune','Raigad','Ratnagiri','Sangli','Satara','Sindhudurg','Solapur','Thane','Wardha','Washim','Yavatmal');
											$selectedDistrict = $contact_info_row[7];
											foreach($districtOptions as $option){
												if($selectedDistrict == $option){
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
										<td>Taluka</td>
										<td>:</td>
										<td><input name="taluka" type="text" maxlength="100" id="taluka" value="<?php echo $contact_info_row[8]; ?>" style="width:135px;" class="form-control"/></td>
										<td width="310" valign="top"><DIV id="error_taluka" style="color:red;"></DIV></td>
									</tr>
									
									<tr>
										<td>Goan</td>
										<td>:</td>
										<td><input name="goan" type="text" maxlength="100" id="goan" value="<?php echo $contact_info_row[9]; ?>" style="width:135px;" class="form-control"/></td>
										<td width="310" valign="top"><DIV id="error_goan" style="color:red;"></DIV></td>
									</tr>
									
									<tr>
										<td colspan="2" align="right"><input type="submit" name="updateContactInfo" value="Update" class="btn btn-primary btn-sm"></td>
									</tr>

								</table> 
								</form>
            </div>
        </div>
    </div>
 </div>
 	<!-- Contact Details Ends here -->
				
			
				<!--Socio Religious Attributes Starts here -->
	<?php
						}
						$fetch_socio_religious_attr="select * from tbl_socio_religious_attr where profile_id='$profileId'";	
						$socio_religious_attr_rs= mysqli_query($conn,$fetch_socio_religious_attr) or die(mysql_error($conn));
						$socio_numrows=mysqli_num_rows($socio_religious_attr_rs);
						if($socio_numrows > 0) 
							{
							while($socio_religious_attr_row = mysqli_fetch_array($socio_religious_attr_rs)) 
								{
						    		$gothra		= $socio_religious_attr_row[1];
									$rashi		= $socio_religious_attr_row[2];
									$nakshtra	= $socio_religious_attr_row[3];
									$charan		= $socio_religious_attr_row[4];
									$nadi		= $socio_religious_attr_row[5];
									$gan		= $socio_religious_attr_row[6];
									$birthPlace	= $socio_religious_attr_row[7];
									$birthTime	= $socio_religious_attr_row[8];
									$mangal		= $socio_religious_attr_row[9];
								}
							}
						else
							{
								$gothra		= "";
								$rashi		= "";
								$nakshtra	= "";
								$charan		= "";
								$nadi		= "";
								$gan		= "";
								$birthPlace	= "";
								$birthTime	= "00:00:AM";
								$mangal		= "No";
							}
						?>
<div class="row">
    <div class="box col-md-6">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
               	<h2><i class="glyphicon glyphicon-eye-open"></i> Socio Religious Attributes</h2>
                <div class="box-icon">
                      <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
            </div>
            <div class="box-content">
               <DIV id="ERRORBASICPROFILE" style="color:red;"></DIV>
				  <DIV id="ERRORSOCIOATTR" style="color:red;"></DIV>	
					<form name="socioattr" method="post"  action="showagentprofiledetails.php" onSubmit="return validateSocioAttributes(this)">
						<table style="padding-bottom: 20px;" cellpadding="5" border="0" cellspacing="0">
					
							<tr>
								<td>Gothra/Devak</td>
								<td>:</td>
								<td><input name="gothra" type="text" maxlength="50" id="gothra" class="form-control" value="<?php echo $gothra; ?>" style="width:120px;" onkeydown= "return isAlpha(event.keyCode);"/></td>
								<td width="310" valign="top"><DIV id="error_gothra" style="color:red;"></DIV></td>
							</tr>
							<tr>
								<td>Rashi</td>
								<td>:</td>
								<td>
								
								<select size="1" name="rashi" style="width:120px;" class="form-control">
								  <option value=" " selected="selected">- Unspecified -</option>
								  <?php
									$rashiOptions  = array('Mesh','Vrushabh','Mithun','Kark','Sinha','Kanya','Tula','Vrischik','Dhanu','Makar','Kumbh','Meen');
									foreach($rashiOptions as $option){
										if($rashi == $option){
											echo "<option selected='selected' value='$option'>$option</option>" ;
										}else{
											echo "<option value='$option'>$option</option>" ;
										}
									}
									?>
								 </select>
								</td>
								<td width="310" valign="top"><DIV id="error_rashi" style="color:red;"></DIV></td>
							</tr>
							<tr>
								<td>Nakshtra</td>
								<td>:</td>
								<td>
								<select size="1" name="nakshtra" style="width:120px;" class="form-control">
								  <option value=" " selected="selected">- Unspecified - </option>
								  <?php
									echo $rashi;
									$nakshtraOptions  = array('Ashwini','Ardra','Aslesha','Anuradha','Bharani','Chitra','Dhanishta','Hasta','Jyeshta','Krittika','Moola','Magha',
									'Mrigasira','Pushya','Purva Phalgini','Purva Bhadra','Purva Shadha','Punarvasu','Rohini','Swati','Revati',
									'Shattarka','Shravan','Uttara Phalguni','Uttara Bhadra','Uttara Shadha','Vishakha');
									foreach($nakshtraOptions as $option){
										if($nakshtra == $option){
											echo "<option selected='selected' value='$option'>$option</option>" ;
										}else{
											echo "<option value='$option'>$option</option>" ;
										}
									}
									?>
								</select>			
								</td>
								<td width="310" valign="top"><DIV id="error_nakshtra" style="color:red;"></DIV></td>
							</tr>
							<tr>
								<td>Charan</td>
								<td>:</td>
								<td>
								<select name="charan" style="width:120px;" class="form-control">
									<option value=" " selected="selected">- Unspecified -</option>
									<?php
									$charanOptions  = array('1', '2','3','4');
									foreach($charanOptions  as $option){
										if($charan == $option){
											echo "<option selected='selected' value='$option'>$option</option>" ;
										}else{
											echo "<option value='$option'>$option</option>" ;
										}
									}
									?>
								</select>
								</td>
								<td width="310" valign="top"><DIV id="error_charan" style="color:red;"></DIV></td>
							</tr>
							<tr>
								<td>Nadi</td>
								<td>:</td>
								<td>
								<select style="width:120px;" name="nadi" class="form-control">
									<option value=" " selected="selected">- Unspecified -</option>
									<?php
									$nadiOptions  = array('Adhya', 'Madhya','Antya');
									foreach($nadiOptions  as $option){
										if($nadi == $option){
											echo "<option selected='selected' value='$option'>$option</option>" ;
										}else{
											echo "<option value='$option'>$option</option>" ;
										}
									}
									?>
									</select>	
								</td>
								<td width="310" valign="top"><DIV id="error_nadi" style="color:red;"></DIV></td>
							</tr>
							<tr>
								<td>Gan</td>
								<td>:</td>
								<td>
								<select style="width:120px;" name="gan" class="form-control">
									<option value=" " selected="selected">- Unspecified -</option>
									<?php
									$ganOptions  = array('Dev Gan', 'Manushya Gan','Rakshas Gan');
									foreach($ganOptions  as $option){
										if($gan == $option){
											echo "<option selected='selected' value='$option'>$option</option>" ;
										}else{
											echo "<option value='$option'>$option</option>" ;
										}
									}
									?>
								</select>	
								</td>
								<td width="310" valign="top"><DIV id="error_gan" style="color:red;"></DIV></td>
							</tr>
							<tr>
								<td>Birth Place</td>
								<td>:</td>
								<td><input name="birthPlace" type="text" maxlength="50" class="form-control" id="birthPlace" value="<?php echo $birthPlace; ?>" style="width:120px;" onkeydown= "return isAlpha(event.keyCode);" /></td>
								<td width="310" valign="top"><DIV id="error_birthPlace" style="color:red;"></DIV></td>
							</tr>
							<tr>
								<td>Birth Time</td>
								<td>:</td>
								<td width="310">
								
								 <?php
									$birthTimeSplit = explode (":", $birthTime); 
									$hours = $birthTimeSplit[0];
									$mins  = $birthTimeSplit[1];
									$ampm  = $birthTimeSplit[2];
																				
									$birthTimeHoursOptions  = array('00','01','02','03','04','05','06','07','08','09','10','11','12');
									echo "<select name='birthTimeHours' id='birthTimeHours' style='width:80px;' class='form-control'>";
									foreach($birthTimeHoursOptions as $option){
										if($hours == $option){
											echo "<option selected='selected' value='$option'>$option</option>" ;
										}else{
											echo "<option value='$option'>$option</option>" ;
										}
									}
									echo "</select>";
									echo ":";
									$birthTimeMinsOptions  = array('00','01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35','36','37','38','39','40','41','42','43','44','45','46','47','48','49','50',
									'51','52','53','54','55','56','57','58','59','60');
									echo "<select name='birthTimeMins' id='birthTimeMins' style='width:80px;' class='form-control'>";
									foreach($birthTimeMinsOptions as $option){
										if($mins == $option){
											echo "<option selected='selected' value='$option'>$option</option>" ;
										}else{
											echo "<option value='$option'>$option</option>" ;
										}
									}
									echo "</select>";
									echo ":";
									$birthTimeAMPMOptions  = array('AM','PM');
									echo "<select name='birthTimeAMPM' id='birthTimeAMPM' style='width:80px;' class='form-control'>";
									foreach($birthTimeAMPMOptions as $option){
										if($ampm == $option){
											echo "<option selected='selected' value='$option'>$option</option>" ;
										}else{
											echo "<option value='$option'>$option</option>" ;
										}
									}
									echo "</select>";
									?>
								</td>
								<td width="310" valign="top"><DIV id="error_birthTimeHours" style="color:red;"></DIV><br><DIV id="error_birthTimeMins" style="color:red;"></DIV>
								</td>
							</tr>
							<tr>
								<td>Mangal</td>
								<td>:</td>
								<td>
								<select name="mangal" id="mangal" style="width:120px;" class="form-control">
								<?php
								$mangalOptions  = array('No', 'Yes','Saumya','Nirdosh','Not Known');
								
								foreach($mangalOptions  as $option){
									if($mangal == $option){
										echo "<option selected='selected' value='$option'>$option</option>" ;
									}else{
										echo "<option value='$option'>$option</option>" ;
									}
								}
								?>
								</select>
								</td>
							</tr>
							<tr>
								<td colspan="2" align="right"><input type="submit" name="updateSocioAttr" value="Update" class="btn btn-primary btn-sm"></td>
							</tr>
						</table>	
					</form>	
			  </div>
        </div>
    </div>
<!-- Socio  Religious Attributes Ends here -->
<!--Physical Attributes Starts here -->
				    <?php
						
						$fetch_physical_attr="select * from tbl_physical_attr where profile_id='$profileId'";	
						$physical_attr_rs= mysqli_query($conn,$fetch_physical_attr);
						
						$physical_numrows=mysqli_num_rows($physical_attr_rs);
						if($physical_numrows > 0) 
							{
							while($physical_attr_row = mysqli_fetch_array($physical_attr_rs)) 
								{
								$heightFt		= $physical_attr_row[1];
								$heightInch		= $physical_attr_row[2];
								$weight			= $physical_attr_row[3];
								$bloodGroup		= $physical_attr_row[4];
								$complexion		= $physical_attr_row[5];
								}
							}
						else
							{
							$heightFt   = "";
							$heightInch = "";
							$weight     = "";
							$bloodGroup = "";
							$complexion = "";
							}
						?>

    <div class="box col-md-6">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-eye-open"></i> Physical Attributes</h2>

                <div class="box-icon">
                     <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
            </div>
            <div class="box-content">
				<DIV id="ERRORPHYATTR" style="color:red;"></DIV>
					<form name="physicalattr" method="post"  action="showagentprofiledetails.php" onSubmit="return validatePhysicalAttr(this)">
						<table style="padding-bottom: 20px;" cellpadding="5" border="0" cellspacing="0">
							<tr>
								<td>Height</td>
								<td>:</td>
								<td>
								<select name="heightFt" id="heightFt" style="width:60px;" class="form-control">
								
								<?php
								$heightFtOptions  = array('4','5','6','7');
								
								foreach($heightFtOptions  as $option){
									if($heightFt== $option){
										echo "<option selected='selected' value='$option'>$option</option>" ;
									}else{
										echo "<option value='$option'>$option</option>" ;
									}
								}
								?>
								</select>ft
								<select name="heightInch" id="heightInch" style="width:60px;" class="form-control">
								<?php
								$heightInchOptions  = array('0','1','2','3','4','5','6','7','8','9','10','11','12');
								
								foreach($heightInchOptions  as $option){
									if($heightInch == $option){
										echo "<option selected='selected' value='$option'>$option</option>" ;
									}else{
										echo "<option value='$option'>$option</option>" ;
									}
								}
								?>	
								</select>inch
								</td>
							</tr>
							<tr>
								<td>Weight</td>
								<td>:</td>
								<td>
								<select name="weight"  id="weight" style="width:120px;"class="form-control">
								<option value=" ">- Unspecified -</option>
								<?php
								$weightOptions  = array('30','31','32','33','34','35','36','37','38','39','40','41','42','43','44','45','46','47','48','49','50',
								'51','52','53','54','55','56','57','58','59','60','61','62','63','64','65','66','67','68','69','70','71','72','73','74','75','76','77','78','79','80','81','82','83','84','85','86','87','88','89','90',
								'91','92','93','94','95','96','97','98','99','100','101','102','103','104','105','106','107','108','109','110','111','112','113','114','115','116','117','118','119','120','121','122','123','124','125','126','127','128','129','130',
								'131','132','133','134','135','136','137','138','139','140','141','142','143','144','145','146','147','148','149','150',
								'151','152','153','154','155','156','157','158','159','160','161','162','163','164','165','166','167','168','169','170','171','172','173','174','175','176','177','178','179','180','181','182','183','184','185','186','187','188','189','190',
								'191','192','193','194','195','196','197','198','199','200');
								
								foreach($weightOptions  as $option){
									if($weight == $option){
										echo "<option selected='selected' value='$option'>$option</option>" ;
									}else{
										echo "<option value='$option'>$option</option>" ;
									}
								}
								?>
								</select>
							</td>
							<td width="310" valign="top"><DIV id="error_weight" style="color:red;"></DIV></td>
							</tr>
							<tr>
								<td>Blood Group</td>
								<td>:</td>
								<td>
								<select name="bloodGroup" id="bloodGroup" style="width:120px;" class="form-control">
									 <option value=" ">- Unspecified -</option>
									 
										<?php
										$bloodGroupOptions  = array('A+','A','B','B+','AB+','AB','O+','O');
										
										foreach($bloodGroupOptions  as $option){
											if($bloodGroup == $option){
												echo "<option selected='selected' value='$option'>$option</option>" ;
											}else{
												echo "<option value='$option'>$option</option>" ;
											}
										}
										?>	
								</select>
								</td>
								<td width="310" valign="top"><DIV id="error_bloodGroup" style="color:red;"></DIV></td>
							</tr>
							<tr>
								<td>Complexion	</td>
								<td>:</td>
								<td>
								<select name="complexion" id="complexion" style="width:120px;" class="form-control">
									 <option value=" ">- Unspecified -</option>
									 
									 <?php
										$complexionOptions  = array('FAIR','GORA','SAWALA','GAVHAL','NIMGORA','BLACK','GORA,SMART','FAIR,SMART','GAVHAL,SMART');
										
										foreach($complexionOptions  as $option){
											if($complexion== $option){
												echo "<option selected='selected' value='$option'>$option</option>" ;
											}else{
												echo "<option value='$option'>$option</option>" ;
											}
										}
										?>
								</select>
								<td width="310" valign="top"><DIV id="error_complexion" style="color:red;"></DIV></td>
								</td>
							</tr>
							<tr>
								<td colspan="2" align="right"><input type="submit" name="updatePhysicalAttr" value="Update" class="btn btn-primary btn-sm"></td>
							</tr>
					</table>
				</form>
            </div>
        </div><br>
        <!--Profile Starts here -->
		<?php
		
		$fetch_profile="select * from tbl_profile where profile_id='$profileId'";	
		$profile_rs= mysqli_query($conn,$fetch_profile);
		
		$profile_numrows=mysqli_num_rows($profile_rs);
		if($profile_numrows > 0) 
			{
			while($profile_row = mysqli_fetch_array($profile_rs)) 
				{
				$education	  = $profile_row[1];
				$annualIncome = $profile_row[2];
				$occupation   = $profile_row[3];
				}
			}
		else
			{
			$education	  = "";
			$annualIncome = "";
			$occupation   = "";
			}
				?>
<div class="box-inner">
	<div class="box-header well" data-original-title="">
		<h2><i class="glyphicon glyphicon-eye-open"></i> Education and Profession Details</h2>
		<div class="box-icon">
			  <a href="#" class="btn btn-minimize btn-round btn-default"><i
					class="glyphicon glyphicon-chevron-up"></i></a>
		</div>
	</div>
	<div class="box-content">
		<DIV id="ERRORPROFILE" style="color:red;"></DIV>
			<form name="profile" method="post"  action="showagentprofiledetails.php" onSubmit="return validateProfile(this)">
			 <table style="padding-bottom: 20px;" cellpadding="5" border="0" cellspacing="0">
				
				<tr>
					<td>Education</td>
					<td>:</td>
					<td>
					<select name="education" id="education" style="width:120px;" class="form-control">
					<option value=" ">- Unspecified -</option> 
					 <?php
						$educationOptions  = array('M.C.A','H.S.C','B.A.M.S','B.C.A','B.H.M.S','B.Tech','M.Tech','B.A','B.S.C','B.Com','B.E-IT','B.E-COMPUTER','B.E-MECH','B.E-ENTC','B.E-ELEC','B.E-CIVIL',
						'Bachelors Of Architect','B.C.S','BPT','C.A','D.Pharma','B.Pharma','M.Pharma','Diploma','Fashion Desining','BL','ML','LLB',
						'LLM','M.B.B.S','B.D.S','M.ED','B.ED','D.ED','B.B.A','M.B.A','M.A','M.S.C','M.COM','M.E','Medicine - General','Medicine - Dental',
						'Medicine - Surgeon','Ph.d','IAS','IPS','S.S.C','M.C.S');
						
						foreach($educationOptions  as $option){
							if($education== $option){
								echo "<option selected='selected' value='$option'>$option</option>" ;
							}else{
								echo "<option value='$option'>$option</option>" ;
							}
						}
						?>
					</select>
					</td>
					<td width="310" valign="top"><DIV id="error_education" style="color:red;"></DIV></td>
				</tr>
				<tr>
					<td>Annual Income</td>
					<td>:</td>
					<td><input name="annualIncome" type="text" maxlength="10" class="form-control" id="annualIncome" value="<?php echo $annualIncome; ?>" style="width:120px;" onkeypress="return isNumberKey(event)"/></td>
					<td width="310" valign="top"><DIV id="error_annualIncome" style="color:red;"></DIV></td>
				</tr>
					<tr>
					<td>Occupation</td>
					<td>:</td>
					<td><input name="occupation" type="text" maxlength="50" id="occupation" class="form-control" value="<?php echo $occupation; ?>" style="width:120px;" onkeydown= "return isAlpha(event.keyCode);"/></td>
					<td width="310" valign="top"><DIV id="error_occupation" style="color:red;"></DIV></td>
				</tr>
				<tr>
					<td colspan="2" align="right"><input type="submit" name="updateProfile" value="Update" class="btn btn-primary btn-sm"></td>
				</tr>
			 </table>
		</form>	
	</div>
</div>
<!-- Profile Ends here -->
    </div>
 </div>
 
						
			
				<!--Family Details here -->
				<?php
						
						$fetch_family_details="select * from tbl_family_details where profile_id='$profileId'";	
						$family_details_rs= mysqli_query($conn,$fetch_family_details);
						
						$family_details_numrows=mysqli_num_rows($family_details_rs);
						if($family_details_numrows > 0) 
							{
							while($family_details_row = mysqli_fetch_array($family_details_rs)) 
								{
								$fatherName				= $family_details_row[1];
								$fatherOccupation		= $family_details_row[2];
								$motherName				= $family_details_row[3];
								$motherOccupation		= $family_details_row[4];
								$noofBrothers			= $family_details_row[5];
								$noofBrothersMarried	= $family_details_row[6];
								$noofSisters			= $family_details_row[7];
								$noofSistersMarried		= $family_details_row[8];
								$mamaLastName			= $family_details_row[9];
								$lastNameOfRelatives	= $family_details_row[10];
								}
							}
						else
							{
							$fatherName					= "";
							$fatherOccupation			= "";
							$motherName					= "";
							$motherOccupation			= "";
							$noofBrothers				= "";
							$noofBrothersMarried		= "";	
							$noofSisters				= "";
							$noofSistersMarried			= "";
							$mamaLastName				= "";
							$lastNameOfRelatives		= "";
							}
						?>
						
						
					<div class="row">
						<div class="box col-md-6">
							<div class="box-inner">
								<div class="box-header well" data-original-title="">
									<h2><i class="glyphicon glyphicon-eye-open"></i> Family Details</h2>
									<div class="box-icon">
									<a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a>
									</div>
								</div>
								<div class="box-content">
								<DIV id="ERRORFAMILYDETAILS" style="color:red;"></DIV>
								<form name="familydetails" method="post"  action="showagentprofiledetails.php" onSubmit="return validateFamilyDetails(this)">
									<table style="padding-bottom: 20px;" cellpadding="5" border="0" cellspacing="0">
										<tr>
											<td>Father Name</td>
											<td>:</td>
											<td>
												<input name="fatherName" type="text" maxlength="50" id="fatherName" class="form-control" value="<?php echo $fatherName; ?>" style="width:120px;" />		
											</td>
											<td width="310" valign="top"><DIV id="error_fatherName" style="color:red;"></DIV></td>
										</tr>
										<tr>
											<td>Father Occupation</td>
											<td>:</td>
											<td><input name="fatherOccupation" type="text" maxlength="50" id="fatherOccupation" class="form-control" value="<?php echo $fatherOccupation; ?>" style="width:120px;" /></td>
											<td width="310" valign="top"><DIV id="error_fatherOccupation" style="color:red;"></DIV></td>
										</tr>
										<tr>
											<td>Mother Name</td>
											<td>:</td>
											<td>
												<input name="motherName" type="text" maxlength="50" id="motherName" class="form-control" value="<?php echo $motherName; ?>" style="width:120px;" />		
											</td>
											<td width="310" valign="top"><DIV id="error_motherName" style="color:red;"></DIV></td>
										</tr>
										<tr>
											<td>Mother Occupation</td>
											<td>:</td>
											<td><input name="motherOccupation" type="text" maxlength="50" id="motherOccupation" class="form-control" value="<?php echo $motherOccupation; ?>" style="width:120px;" /></td>
											<td width="310" valign="top"><DIV id="error_motherOccupation" style="color:red;"></DIV></td>
										</tr>
										<tr>
											<td>No.Of Brothers</td>
											<td>:</td>
											<td>
												<select name="noofBrothers" id="noofBrothers" style="width:120px;"  onChange="checkNoOfBrotherSister();" class="form-control">
													<option value=" ">- Unspecified -</option>
													
													 <?php
														$noofBrothersOptions  = array('0','1','2','3','4','5','6','7','8','9');
														foreach($noofBrothersOptions  as $option){
															if($noofBrothers== $option){
																echo "<option selected='selected' value='$option'>$option</option>" ;
															}else{
																echo "<option value='$option'>$option</option>" ;
															}
														}
														?>
												</select>
											</td>
											<td width="310" valign="top"><DIV id="error_noofBrothers" style="color:red;"></DIV></td>
										</tr>
										<tr>
											<td>No.Of Brothers Married</td>
											<td>:</td>
											<td>
												<select name="noofBrothersMarried" id="noofBrothersMarried" style="width:120px;" class="form-control">
													<option value=" ">- Unspecified -</option>
																						
													 <?php
														$noofBrothersMarriedOptions  = array('0','1','2','3','4','5','6','7','8','9');
														foreach($noofBrothersMarriedOptions  as $option){
															if($noofBrothersMarried== $option){
																echo "<option selected='selected' value='$option'>$option</option>" ;
															}else{
																echo "<option value='$option'>$option</option>" ;
															}
														}
														?>
												</select>
											</td>
											<td width="310" valign="top"><DIV id="error_noofBrothersMarried" style="color:red;"></DIV></td>
										</tr>
										<tr>
											<td>No.Of Sisters</td>
											<td>:</td>
											<td>
												<select name="noofSisters" id="noofSisters" style="width:120px;"  onChange="checkNoOfBrotherSister();" class="form-control">
													<option value=" ">- Unspecified -</option>
													 <?php
														$noofSistersOptions  = array('0','1','2','3','4','5','6','7','8','9');
														foreach($noofSistersOptions  as $option){
															if($noofSisters== $option){
																echo "<option selected='selected' value='$option'>$option</option>" ;
															}else{
																echo "<option value='$option'>$option</option>" ;
															}
														}
														?>
												</select>
											</td>
											<td width="310" valign="top"><DIV id="error_noofSisters" style="color:red;"></DIV></td>
										</tr>
										<tr>
											<td>No.Of Sisters Married</td>
											<td>:</td>
											<td>
												<select name="noofSistersMarried"  id="noofSistersMarried" style="width:120px;" class="form-control">
													<option value=" ">- Unspecified -</option>
													 <?php
														$noofSistersMarriedOptions  = array('0','1','2','3','4','5','6','7','8','9');
														foreach($noofSistersMarriedOptions  as $option){
															if($noofSistersMarried== $option){
																echo "<option selected='selected' value='$option'>$option</option>" ;
															}else{
																echo "<option value='$option'>$option</option>" ;
															}
														}
														?>
												</select>
											</td>
											<td width="310" valign="top"><DIV id="error_noofSistersMarried" style="color:red;"></DIV></td>
										</tr>
										<tr>
											<td>Mama's Last Name</td>
											<td>:</td>
											<td><input name="mamaLastName" type="text" maxlength="50" class="form-control" id="mamaLastName" value="<?php echo $mamaLastName; ?>" style="width:120px;" /></td>
											<td width="310" valign="top"><DIV id="error_mamaLastName" style="color:red;"></DIV></td>
										</tr>
										<tr>
											<td>Last Name's Of Relatives</td>
											<td>:</td>
											<td><input name="lastNameOfRelatives" type="text" maxlength="150" class="form-control" id="lastNameOfRelatives" value="<?php echo $lastNameOfRelatives; ?>" style="width:120px;" /></td>
											<td width="310" valign="top"><DIV id="error_lastNameOfRelatives" style="color:red;"></DIV></td>
										</tr>
										<tr>
											<td colspan="2" align="right"><input type="submit" name="updateFamilyDetails" value="Update" class="btn btn-primary btn-sm"></td>
										</tr>
									</table>
								</form>	
								</div>
							</div>
						</div>
			
					<!-- Family Details here -->
					<!--Partner Preference here -->
					<?php
						
						$fetch_partner_preferences="select * from tbl_partner_preference where profile_id='$profileId'";	
						$partner_preferences_rs= mysqli_query($conn,$fetch_partner_preferences);
						
						$partner_preferences_numrows=mysqli_num_rows($partner_preferences_rs);
						if($partner_preferences_numrows > 0) 
							{
							while($partner_preferences_row = mysqli_fetch_array($partner_preferences_rs)) 
								{
								$lookingFor			= $partner_preferences_row[1];
								$ageFrom			= $partner_preferences_row[2];
								$ageTo				= $partner_preferences_row[3];
								$partnereducation	= $partner_preferences_row[4];
								$partnerCaste		= $partner_preferences_row[5];
								}
							}
						else
							{
							$lookingFor   		 = "";
							$ageFrom 			 = "";
							$ageTo     			 = "";
							
							$partnereducation	 = "";
							$partnerCaste		 = "";
							}
						?>
								
					
							<div class="box col-md-6">
								<div class="box-inner">
									<div class="box-header well" data-original-title="">
										<h2><i class="glyphicon glyphicon-eye-open"></i> Partner Preference</h2>
										<div class="box-icon">
										<a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a>
										</div>
									</div>
									<div class="box-content">
										<DIV id="ERRORPARTNERPREF" style="color:red;"></DIV>
										<form name="profile" method="post"  action="showagentprofiledetails.php" onSubmit="return validatePartnerPref(this)">
										<table style="padding-bottom: 20px;" cellpadding="5" border="0" cellspacing="0">
											<tr>
												<td>Looking For </td>
												<td>:</td>
												<td>
												<select name="lookingFor" id="lookingFor" style="width:120px;" class="form-control">
												<option value="">- Unspecified -</option>
												<?php
													$lookingForOptions  = array('Unmarried', 'Divorced','Widowed','Separated');
													
													foreach($lookingForOptions  as $option){
														if($lookingFor == $option){
															echo "<option selected='selected' value='$option'>$option</option>" ;
														}else{
															echo "<option value='$option'>$option</option>" ;
														}
													}
												?>
												
												</select>
												</td>
												<td width="310" valign="top"><DIV id="error_lookingFor" style="color:red;"></DIV></td>
											</tr>
												<tr>
												<td>Age</td>
												<td>:</td>
												<td>
												From
												<select name="ageFrom" id="ageFrom" style="width:80px;" class="form-control">
												<option value=" ">-</option>
												<?php
												$ageFromOptions  = array('18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35','36','37','38','39','40','41','42','43','44','45','46','47','48','49','50',
												'51','52','53','54','55','56','57','58','59','60','61','62','63','64','65','66','67','68','69','70');
												
												foreach($ageFromOptions  as $option){
													if($ageFrom == $option){
														echo "<option selected='selected' value='$option'>$option</option>" ;
													}else{
														echo "<option value='$option'>$option</option>" ;
													}
												}
												?>
												</select>
												to
												<select name="ageTo" id="ageTo" style="width:80px;" class="form-control">
												<option value=" ">-</option>
												<?php
												$ageToOptions  = array('18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35','36','37','38','39','40','41','42','43','44','45','46','47','48','49','50',
												'51','52','53','54','55','56','57','58','59','60','61','62','63','64','65','66','67','68','69','70');
												
												foreach($ageToOptions  as $option){
													if($ageTo == $option){
														echo "<option selected='selected' value='$option'>$option</option>" ;
													}else{
														echo "<option value='$option'>$option</option>" ;
													}
												}
												?>
												</select>
												</td>
												<td width="310" valign="top">
												<DIV id="error_ageFrom" style="color:red;"></DIV><br>
												<DIV id="error_ageTo" style="color:red;"></DIV>
												</td>
											</tr>
										</td>
											</tr>
														
											<tr>
												<td>Education</td>
												<td>:</td>
												<td>
													
													
													<table border=0 align=center valign=center>
														<tr>
															<td>Education List</td>
													
														</tr>
														<tr>
															<td>
																<select name="partnerEducation[]" id="partnerEducation" multiple style="width:250px;" class="form-control">
																	<script type="text/javascript">
																	var from_array = new Array('M.C.A','H.S.C','B.A.M.S','B.C.A','B.H.M.S','B.Tech','M.Tech','B.A','B.S.C','B.Com','B.E',
																	'Bachelors Of Architect','B.C.S','BPT','C.A','D.Pharma','B.Pharma','M.Pharma','Diploma','Fashion Desining','BL','ML','LLB',
																	'LLM','M.B.B.S','B.D.S','M.ED','B.ED','D.ED','B.B.A','M.B.A','M.A','M.S.C','M.COM','M.E','Medicine - General','Medicine - Dental',
																	'Medicine - Surgeon','Ph.d','IAS','IPS','S.S.C','M.C.S','M.C.M','I.T.I');
																	for(var i=0;i<from_array.length;i++)
																		{
																		document.write('<option>'+from_array[i]+'</option>');
																		}
																	</script>
																</select>
																<br>You Selected
																	<div class="well">
																	<?php 
																	echo $partnereducation."<br>"; 
																	?>
																    </div>	
																
															</td>
																
														
														</tr>
														
													</table>
												</td>
												<td width="310" valign="top"><DIV id="error_partnerEducation" style="color:red;"></DIV></td>
											</tr>	

											<tr>
												<td>Caste</td>
												<td>:</td>
												<td>
												<select name="partnerCaste" id="partnerCaste" style="width:120px;" class="form-control">
												
													<?php
													$casteOptions  =  array('Maratha', 'Maratha 96Kuli','Maratha Kunbi','Maratha Deshmukh');
													
													foreach($casteOptions as $option){
														if($partnerCaste == $option){
															echo "<option selected='selected' value='$option'>$option</option>" ;
														}else{
															echo "<option value='$option'>$option</option>" ;
														}
													}
													?>
												</select>
												
												</td>
												<td width="310" valign="top"><DIV id="error_partnerCaste" style="color:red;"></DIV></td>
											</tr>
											
											<tr>
												<td colspan="2" align="right"><input type="submit" name="updatePartnerPref" value="Update" class="btn btn-primary btn-sm"></td>
											</tr>									
										</table>
										</form>
									</div>
								</div>
							</div>
						</div>
						<!--Partner Preference here -->
				<!--Horoscope here -->
				<div class="row">
					<div class="box col-md-6">
						<div class="box-inner">
							<div class="box-header well" data-original-title="">
								<h2> <i class="glyphicon glyphicon-eye-open"></i> Horoscope</h2>
								<div class="box-icon">
								<a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a>
								</div>
							</div>
							<div class="box-content">
								<form name="updateHoroscopePhoto" method="post" enctype="multipart/form-data" action="showagentprofiledetails.php" onSubmit="return CheckHoroscopePhoto(this)">
									<?php
									$fetch_horoscope_photo="SELECT imagename FROM tbl_horoscope_photo where profile_id='$profileId'";
									$horoscope_photo_rs= mysqli_query($conn,$fetch_horoscope_photo);
									
									while($horoscope_photo_row = mysqli_fetch_array($horoscope_photo_rs)) 
										{
										if($horoscope_photo_row[0]=="noimg.gif")
											{
											echo "<img src='../images/noimg.gif' border=0>";
											}
										else
											{	
											echo "<img src='../horoscopepics/$horoscope_photo_row[0]' data-title='Horoscope' data-group='group-1' class='img-responsive img-thumbnail js-lightBox img-500'>";
											}
										}
									echo "<br><br><br>Select : <input name='horoscopephoto' type='file' id='horoscopephoto' onchange='return CheckHoroscopePhotoExt();'/>";
									echo "<br><input type='submit' name='updateHoroscopePhoto' value='Upload' class='btn btn-primary btn-sm'>";
									echo "<DIV id='error_horoscopephoto' style='color:red;'></DIV>";
								    ?>
								</form>
							</div>
						</div>
					</div>
			
				<!--Horoscope here -->
				<!--Album Starts here -->
			
					<div class="box col-md-6">
						<div class="box-inner">
							<div class="box-header well" data-original-title="">
								<h2><i class="glyphicon glyphicon-eye-open"></i> Photo Album</h2>
								<div class="box-icon">
								<a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a>
								</div>
							</div>
							<div class="box-content">
						
								<table style="padding-bottom: 20px;" cellpadding="5" border="0" cellspacing="0">
									<tr>
										<td valign="top">Photo</td>
										<td valign="top">:</td>
										<td>
											<form name="updatePhotoAlbum" method="post" enctype="multipart/form-data" action="showagentprofiledetails.php" onSubmit="return CheckAlbumPhoto(this)">
											<table><tr>
												<?php
												
												$fetch_photo_album="SELECT imagename,id FROM tbl_photo_album where profile_id='$profileId'";
												$photo_album_rs= mysqli_query($conn,$fetch_photo_album);
												$numrows=mysqli_num_rows($photo_album_rs);
												if($numrows > 0)
												{
												$i=0;
												$first="";
												$second="";
												$third="";
												while($photo_album_row = mysqli_fetch_array($photo_album_rs)) 
													{
													if($i==0)  
														{
														$first = $photo_album_row[0];
														$firstid = $photo_album_row[1];
														}
													else if($i==1)  {
														$second = $photo_album_row[0];
														$secondid = $photo_album_row[1];
														}
													else if($i==2)  
														{
														$third = $photo_album_row[0];
														$thirdid = $photo_album_row[1];
														}
													$i++;	
													//echo "<img src='photoalbums/$profileId/$photo_album_row[0]' border=0 width='50' height='50'>";
													}
												$log->info("File Names are::".$first.$second.$third);	
													 if($first == "") { }
													  else echo "<td><img src='../photoalbums/$profileId/$first'  border='0' data-title='1' data-group='group-1'  class='img-responsive img-thumbnail js-lightBox img-500'/><br><a href='showagentprofiledetails.php?delid=$firstid'><img src='images/cross.png' border='0'></a></td>";
											         if($second == "") { }
												      else echo "<td><img src='../photoalbums/$profileId/$second' border='0' data-title='2' data-group='group-1'  class='img-responsive img-thumbnail js-lightBox img-500'/><br><a href='showagentprofiledetails.php?delid=$secondid'><img src='images/cross.png' border='0'></a></td>";
													 if($third == "") { }	
													  else echo "<td><img src='../photoalbums/$profileId/$third' border='0' data-title='3' data-group='group-1' class='img-responsive img-thumbnail js-lightBox img-500'/><br><a href='showagentprofiledetails.php?delid=$thirdid'><img src='images/cross.png' border='0'></a></td>";
													}	
												else
													{
													echo "No Photos Found !!!!";	
													}
									
												$fetch_photo_albumqry="SELECT count(*) FROM tbl_photo_album where profile_id='$profileId'";
												$photo_album_rset= mysqli_query($conn,$fetch_photo_albumqry);
												$numrowsalbums=mysqli_num_rows($photo_album_rset);
												while($photo_album_row = mysqli_fetch_array($photo_album_rset))
													{
													$count=$photo_album_row[0];
													}	
												if($count == "3") 
													{
													}
												else
													{
													echo "<input name='albumphoto' type='file' id='albumphoto' onchange='return CheckAlbumPhotoExt();'/>";
													echo "<br><br><input type='submit' name='updatePhotoAlbum' value='Upload' class='btn btn-primary btn-sm'>";
													echo "<DIV id='error_albumphoto' style='color:red;'></DIV>";
													}			
												
												?>
												</tr></table>
											</form><br><br>
											<form name="updateAlbumStatus" method="post" action="showagentprofiledetails.php">
											Share Status : <select name="albumStatus" id="albumStatus" style="width:120px;" class="form-control">
											<?php
												$fetch_album_status="select album_status from tbl_basic_profile where profile_id='$profileId'";	
												$album_status_rs= mysqli_query($conn,$fetch_album_status);
												while($album_status_row = mysqli_fetch_array($album_status_rs)) 
													{
													$album_status=$album_status_row[0];
													}
												$log->info('album status::'.$album_status);
												$albumstatusOptions  = array('Public','Private');
											
												foreach($albumstatusOptions as $option){
													if($album_status == $option){
														echo "<option selected='selected' value='$option'>$option</option>" ;
													}else{
														echo "<option value='$option'>$option</option>" ;
													}
												}
											?>	
											</select><br>
											<input type="submit" name="updateAlbumStatus" value="Update" class='btn btn-primary btn-sm'>
										</form>	
										<br>Note : You can upload maximum 3 photos.	
										</td>
										<td width="310" valign="top"></td>
									</tr>
								</table>
							
							</div>
						</div>
					</div>
				</div>
				<!--Album Ends here -->
<!-- ID proof starts here -->
<div class="row">
	<div class="box col-md-6">
		<div class="box-inner">
			<div class="box-header well" data-original-title="">
				<h2><i class="glyphicon glyphicon-eye-open"></i> Identification Proof</h2>
				<div class="box-icon">
				<a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a>
				</div>
			</div>
			<div class="box-content">
					<form name="updateIdProof" method="post" enctype="multipart/form-data" action="showagentprofiledetails.php" onSubmit="return CheckIDProof(this)">
							<?php
							$fetch_idproof_photo="SELECT imagename,idtype FROM tbl_profile_identification_proof where profile_id='$profileId'";
							$idproof_photo_rs= mysqli_query($conn,$fetch_idproof_photo);
							
							while($idproof_photo_row = mysqli_fetch_array($idproof_photo_rs)) 
								{
					             $idtype=$idproof_photo_row[1];

								if($idproof_photo_row[0]=="noimg.gif")
									{
									echo "<img src='../images/noimg.gif' border=0>";
									}
								else
									{	
		    						echo "<img src='../idproofs/$idproof_photo_row[0]' border=0 data-title='1' data-group='group-1'  class='img-responsive img-thumbnail js-lightBox img-500'>";
									}
								}

                            $idproofOptions  = array('Election Card', 'Aadhar Card');
                            echo "<br><br>ID Type : <br><select name='idtype' id='idtype' style='width:120px;' class='form-control'>";
                            echo "<option value=''>- Unspecified -</option>";
                            foreach($idproofOptions as $option){
                            	if($idtype == $option){
                            		echo "<option selected='selected' value='$option'>$option</option>" ;
                            	}else{
                            		echo "<option value='$option'>$option</option>" ;
                            	}
                            }
                            echo "</select>";
                            echo "<DIV id='error_idtype' style='color:red;'></DIV>";

							echo "<br><input name='idproof' type='file' id='idproof' onchange='return CheckIDProofPhotoExt();'/>";
							echo "<br><input type='submit' name='updateIDProof' value='Upload' class='btn btn-primary btn-sm'>";
							echo "<DIV id='error_idproof' style='color:red;'></DIV>";
						?>
					</form>
		
			</div>
		</div>
	</div>
	
		<div class="box col-md-6">
		<div class="box-inner">
			<div class="box-header well" data-original-title="">
				<h2><i class="glyphicon glyphicon-eye-open"></i> Profile Photo</h2>
				<div class="box-icon">
				<a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a>
				</div>
			</div>
			<div class="box-content">
				
		         <?php include('chgagentpic.php'); ?>
			</div>
		</div>
	</div>
</div>
<!-- ID Proof ends here -->
		<!-- content ends -->
		</div>
	</div><!--/fluid-row-->

	

     <?php include('footer.php'); ?>

</div><!--/.fluid-container-->



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
			
	<?php
	if(isset($_GET['msg']))
		{
		$param=$_GET['msg'];
		if($param == "success")
			{
			
	?>
	<div id="boxes">
		<div style="top:150px; left: 551.5px; display: none;" id="dialog" class="window">
			<div align="right" style="font-weight:bold; margin:5px 3px 0 0;">
			
			</div>
			
			<div align="center" style="margin:5px 0 5px 0;">
			<?php echo "<p align='center'><h4><img src='images/Correct.png'>&nbsp;&nbsp;Profile Updated Successfully.</h4></p>"; ?>
			
			<br>
			<?php
			echo "<a href='showagentprofiledetails.php?id=$profileId' class='btn btn-primary btn-sm'>Ok</a>";
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
	
	<?php
	if(isset($_GET['msg']))
		{
		$param=$_GET['msg'];
		if($param == "sendpwd")
			{
			
	?>
	<div id="boxes">
		<div style="top:150px; left: 551.5px; display: none;" id="dialog" class="window">
			<div align="right" style="font-weight:bold; margin:5px 3px 0 0;">
		
			</div>
			
			<div align="center" style="margin:5px 0 5px 0;">
			<?php 
			
			function sendPassword($mobno,$profileId,$pwd)
            {
                    $username="maratha";
                	$api_password="maratha@lagnyog";
                	$sender="LGNYOG";
                	$domain="http://cannyinfotech.in/api/mt/SendSMS?";
                	$mobile=$mobno;
                	$message="As per your request sending your profile details.Profile Id:".$profileId." & Password: ".$pwd." Regards MarathaLagnYog Team Web:www.marathalagnyog.com";
                	
                	$username=urlencode($username);
                	$password=urlencode($password);
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
			
		
			sendPassword($contactNo,$profileId,$pwd);
			echo "<p align='center'><h4><img src='images/Correct.png'>&nbsp;&nbsp;Password Sent Successfully.</h4></p>"; 
			
			?>
			<br>
			<?php
			echo "<a href='showagentprofiledetails.php?id=$profileId' class='btn btn-primary btn-sm'>Ok</a>";
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
<script>
jQuery(document).ready(function(e){e.DNLightBox({speed:500})});
</script>
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