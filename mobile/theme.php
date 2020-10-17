<?php

   
 include('classes/crud.php');
   
$themedb = new Database();
$themedb->connect();
$themedb->sql("select * from tbl_theme where id=12"); 
$rs = $themedb->getResult();
$theme = "";
foreach($rs as $x) 
		{
		    $theme =$x['theme'];
		}
		
if($theme == "RD") {
	echo '<link href="assets\reddark\bootstrap.min.css" rel="stylesheet" type="text/css">';
	echo '<link href="assets\reddark\core.css" rel="stylesheet" type="text/css">';
	echo '<link href="assets\reddark\components.css" rel="stylesheet" type="text/css">';
	echo '<link href="assets\reddark\icons.css" rel="stylesheet" type="text/css">';
	echo '<link href="assets\reddark\pages.css" rel="stylesheet" type="text/css">';
	echo '<link href="assets\reddark\menu.css" rel="stylesheet" type="text/css">';
	echo '<link href="assets\reddark\responsive.css" rel="stylesheet" type="text/css">';
}
else if($theme == "RL") {
	echo '<link href="assets\redlight\bootstrap.min.css" rel="stylesheet" type="text/css">';
	echo '<link href="assets\redlight\core.css" rel="stylesheet" type="text/css">';
	echo '<link href="assets\redlight\components.css" rel="stylesheet" type="text/css">';
	echo '<link href="assets\redlight\icons.css" rel="stylesheet" type="text/css">';
	echo '<link href="assets\redlight\pages.css" rel="stylesheet" type="text/css">';
	echo '<link href="assets\redlight\menu.css" rel="stylesheet" type="text/css">';
	echo '<link href="assets\redlight\responsive.css" rel="stylesheet" type="text/css">';
}
else if($theme == "GD") {
	echo '<link href="assets\greendark\bootstrap.min.css" rel="stylesheet" type="text/css">';
	echo '<link href="assets\greendark\core.css" rel="stylesheet" type="text/css">';
	echo '<link href="assets\greendark\components.css" rel="stylesheet" type="text/css">';
	echo '<link href="assets\greendark\icons.css" rel="stylesheet" type="text/css">';
	echo '<link href="assets\greendark\pages.css" rel="stylesheet" type="text/css">';
	echo '<link href="assets\greendark\menu.css" rel="stylesheet" type="text/css">';
	echo '<link href="assets\greendark\responsive.css" rel="stylesheet" type="text/css">';
}
else if($theme == "GL") {
	echo '<link href="assets\greenlight\bootstrap.min.css" rel="stylesheet" type="text/css">';
	echo '<link href="assets\greenlight\core.css" rel="stylesheet" type="text/css">';
	echo '<link href="assets\greenlight\components.css" rel="stylesheet" type="text/css">';
	echo '<link href="assets\greenlight\icons.css" rel="stylesheet" type="text/css">';
	echo '<link href="assets\greenlight\pages.css" rel="stylesheet" type="text/css">';
	echo '<link href="assets\greenlight\menu.css" rel="stylesheet" type="text/css">';
	echo '<link href="assets\greenlight\responsive.css" rel="stylesheet" type="text/css">';
}
else if($theme == "BD"){
	echo '<link href="assets\bluedark\bootstrap.min.css" rel="stylesheet" type="text/css">';
	echo '<link href="assets\bluedark\core.css" rel="stylesheet" type="text/css">';
	echo '<link href="assets\bluedark\components.css" rel="stylesheet" type="text/css">';
	echo '<link href="assets\bluedark\icons.css" rel="stylesheet" type="text/css">';
	echo '<link href="assets\bluedark\pages.css" rel="stylesheet" type="text/css">';
	echo '<link href="assets\bluedark\menu.css" rel="stylesheet" type="text/css">';
	echo '<link href="assets\bluedark\responsive.css" rel="stylesheet" type="text/css">';
}
else if($theme == "BL"){
	echo '<link href="assets\bluelight\bootstrap.min.css" rel="stylesheet" type="text/css">';
	echo '<link href="assets\bluelight\core.css" rel="stylesheet" type="text/css">';
	echo '<link href="assets\bluelight\components.css" rel="stylesheet" type="text/css">';
	echo '<link href="assets\bluelight\icons.css" rel="stylesheet" type="text/css">';
	echo '<link href="assets\bluelight\pages.css" rel="stylesheet" type="text/css">';
	echo '<link href="assets\bluelight\menu.css" rel="stylesheet" type="text/css">';
	echo '<link href="assets\bluelight\responsive.css" rel="stylesheet" type="text/css">';
}
else if($theme == "P") {
	echo '<link href="assets\pink\bootstrap.min.css" rel="stylesheet" type="text/css">';
	echo '<link href="assets\pink\core.css" rel="stylesheet" type="text/css">';
	echo '<link href="assets\pink\components.css" rel="stylesheet" type="text/css">';
	echo '<link href="assets\pink\icons.css" rel="stylesheet" type="text/css">';
	echo '<link href="assets\pink\pages.css" rel="stylesheet" type="text/css">';
	echo '<link href="assets\pink\menu.css" rel="stylesheet" type="text/css">';
	echo '<link href="assets\pink\responsive.css" rel="stylesheet" type="text/css">';
}		
	
?>