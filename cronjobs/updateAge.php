<?php
date_default_timezone_set('Asia/Calcutta');
include('conn.php');

$fetch_age="select profile_id,first_name,last_name,age,birth_date from tbl_basic_profile";

$fetch_age_rs=mysqli_query($conn,$fetch_age) or die(mysqli_error($conn));


while($fetch_age_row=mysqli_fetch_array($fetch_age_rs))
	{
        $profileId=$fetch_age_row['profile_id'];
        $name=$fetch_age_row['first_name']."&nbsp;".$fetch_age_row['last_name'];
        $oldage=$fetch_age_row['age'];
        $newage=GetAge($fetch_age_row['birth_date']);

        if($newage > $oldage)
            {
             mysqli_query($conn,"UPDATE tbl_basic_profile SET age='$newage' where profile_id='$profileId'") or die(mysqli_error($conn));
             echo "Age for ".$name." has been Updated to ".$newage." from ".$oldage;
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

?>