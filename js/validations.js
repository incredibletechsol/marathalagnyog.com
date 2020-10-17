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
			error_photo.innerHTML ="Upload .jpg,.png,.gif,.bmp files only.";
			document.getElementById('photo').value="";
			fup.focus();
			return false;
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
	
function validateAge()
{
    alert('inside validateAge');
	var a1 = document.stepform.bdate.value;
	var a =  a1.split("-"); 

	var d,m,y;
	for (var i = 0; i < a.length; i++)
    	{
    	if(i===0) y=a[i]; 
    	if(i==1) m=a[i]; 
    	if(i==2) d=a[i];
    	}
	var newdate=d+"-"+m+"-"+y;
	var years=getAge(newdate);
	if(years < 21) {
	document.stepform.bdate.value="";
	  DOBERROR.innerHTML ="You have not attained 21 years. There is lot in life then to get married. Enjoy your life!!!!";
	setTimeout(function () {DOBERROR.innerHTML =""}, 12000);
	valid=false;
	 }
	else 
	   valid = true;
}

function getAge(str)
{
    alert('inside getAge');
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
	 