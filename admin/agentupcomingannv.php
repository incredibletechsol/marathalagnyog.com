<?php
include('../conn.php');
$annvdatequery="SELECT first_name,last_name,annv_date FROM `tbl_agent_profile` WHERE DAYOFYEAR(curdate()) <= dayofyear(`annv_date`) AND DAYOFYEAR(curdate()) +25 >= dayofyear(`annv_date`) order by MONTH(annv_date) asc,DAY(annv_date) asc LIMIT 30  ";
$annvrs=mysqli_query($conn,$annvdatequery);

echo "<marquee behavior=scroll direction=up scrollamount=7 onmouseout=this.start() onmouseover=this.stop() scrolldelay=90 style='background-color:white;'>"; 
echo "<font face='calibri'>";
while($annvrow=mysqli_fetch_array($annvrs))
{
$name=$annvrow[0]."&nbsp;".$annvrow[1];
$bdate=$annvrow[2];	

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
	