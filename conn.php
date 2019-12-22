<?php
if (!isset($_SESSION)) session_start();
ob_start();
require_once("admin/data/login.php");
//Opretter tilslutning til serveren
$con = mysqli_connect($host, $username, $password, $database);
//Løser problermer med de rigtige tegn:
mysqli_set_charset($con, 'utf8');
//Tjekker tilslutningen
if (!$con) {
	die("Connection failed: " . mysqli_connect_error());
} 
?>