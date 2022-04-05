<?php
//session_start();
ob_start();
$host = "localhost";
$user = "root";
$password = "";
$dbname= "moviestudio";
$db = mysqli_connect($host, $user, $password,$dbname);
//$rs = mysql_select_db($dbname,$db);
?>