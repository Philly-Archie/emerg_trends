<?php 
include 'database.php';

$name = $_POST["name"];
$registartion_num = $_POST["registration_num"];
$phone = $_POST["phone"];


echo "Welcome ".$name ."Your registration number is ".$registartion_num ."and your contact is ".$phone;

// $string = "Four years ago, Four pipo were killed in four different districts";
// $pattern = "/four/i";

// echo preg_match($string, $pattern);
// echo preg_match_all($string, $pattern);
// echo preg_replace($pattern, "Country", $pattern);


?>