<?php
session_start();
include "connection.php";
//to empty the cart table
mysqli_query($db,"delete from booking");
unset($_SESSION['a_nm']);
session_destroy();
$_SESSION['a_nm']="";
header("Location:login.php");
?>