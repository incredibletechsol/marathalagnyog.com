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
			error_horoscopephoto.innerHTML ="<img src='../images/delete.gif' border='0'>&nbsp;&nbsp;Upload .jpg,.png,.gif,.bmp files only.";
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
			error_albumphoto.innerHTML ="<img src='../images/delete.gif' border='0'>&nbsp;&nbsp;Upload .jpg,.png,.gif,.bmp files only.";
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
			error_horoscopephoto.innerHTML ="<img src='../images/delete.gif' border='0'>&nbsp;&nbsp;Please select your Horoscope";
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
			error_albumphoto.innerHTML ="<img src='../images/delete.gif' border='0'>&nbsp;&nbsp;Please select a Photo";
			setTimeout(function () {error_albumphoto.innerHTML =""}, 10000);
			valid = false;
		  } else {
			error_albumphoto.innerHTML ="";
				setNewColor(form.albumphoto, bgGood);
		  }
		return valid;  
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
