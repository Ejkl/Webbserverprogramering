<?php
/*Todays date*/
echo "Todays date is " . date("Y/m/d") . "<br>";
/*Local time*/
date_default_timezone_set("Europe/Stockholm");
echo "The time is " . date("h:i:sa") ."<br>";
/*User agent information*/
echo $_SERVER['HTTP_USER_AGENT'];
$browser = get_browser();
print_r($browser); 
/*Create file*/
$my_file = 'file.txt';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
$data = date(("y/m/d"));
fwrite($handle, $data);
$new_data = "\n". date("h:i:sa");
fwrite($handle, $user_agent);
$new_data = "\n". $_SERVER['HTTP_USER_AGENT'];
fwrite($handle, $new_data);
?>
