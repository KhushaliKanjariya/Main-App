<?php
    session_start();
	include "connection.php";
	$user=$_SESSION['user_nm'];
    $pass=$_POST['new_pass'];
	$res=mysqli_query($db,"update registration set password='".$pass."' where user_nm='".$user."'");
	$msg="You Have Sucessfully Changed Your Password";
	header("Location:login.php?msg=$msg");
?>