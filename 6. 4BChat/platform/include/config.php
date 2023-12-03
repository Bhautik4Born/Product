<?php

session_start();
session_regenerate_id(true);

$server="localhost";
$username="seamarin_4Born_Market";
$password="4Born_Market";
$database="seamarin_4Born_Market";

$con=mysqli_connect($server,$username,$password,$database);

if(!$con)
{
	
	die("Connection Fail....".mysqli_connect_error());
	
}
      date_default_timezone_set('Asia/Kolkata');
      
      
$based = 'https://4bchat.4born.info/';
    
?>