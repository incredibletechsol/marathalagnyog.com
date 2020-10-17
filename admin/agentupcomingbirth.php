<?php
include('../conn.php');
$birthdatequery="SELECT first_name,last_name,birth_date FROM `tbl_agent_profile` WHERE DAYOFYEAR(curdate()) <= dayofyear(`birth_date`) AND DAYOFYEAR(curdate()) +25 >= dayofyear(`birth_date`) order by MONTH(birth_date) asc,DAY(birth_date) asc LIMIT 30  ";
$birthrs=mysqli_query($conn,$birthdatequery);

echo "<marquee behavior=scroll direction=up scrollamount=7 onmouseout=this.start() onmouseover=this.stop() scrolldelay=90 style='background-color:white;'>"; 
echo "<font face='calibri'>";
while($birthrow=mysqli_fetch_array($birthrs))
{
$name=$birthrow[0]."&nbsp;".$birthrow[1];
$bdate=$birthrow[2];	

$time = strtotime($bdate);
$tommorow = mktime(date("H"), date("i"), date("s"), date("m"), date("d")+1, date("Y"));
date_default_timezone_set('Asia/Kolkata'); 

if(date('m-d') == date('m-d', $time)) 
	{ 
	echo "<fieldset>";
	echo "<b><img src='images/bullet.gif' border=0><font color='red'>".$name."</font></b>";	
	echo "<br><font color='red'>$bdate(Today)</font><br>";
	echo "</fieldset>";
	} 
else if(date('m-d', $time) == date("m-d", $tommorow))
    { 
    	echo "<fieldset>";
	echo "<b><img src='images/bullet.gif' border=0><font color='orange'>".$name."</font></b>";	
	echo "<br><font color='orange'>$bdate(Tommorow)</font><br>";
	echo "</fieldset>";
	} 
	
else
	{
	echo "<fieldset>";
	echo "<b><img src='images/bullet.gif' border=0>".$name."</b>";	
	echo "<br>".$bdate."<br>";
	echo "</fieldset>";
	}	
}
echo "</font>";	
echo "</marquee>";
?>
	