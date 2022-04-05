<?php
session_start();
include "connection.php";
//to empty the cart table
if(isset($_SESSION['user_id']))
mysqli_query($db,"delete from cart where user_id = ".$_SESSION['user_id']);

unset($_SESSION['user_nm']);
session_destroy();
$_SESSION['user_nm']="";
header("Location:index.php");
?>