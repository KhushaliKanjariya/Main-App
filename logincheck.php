 <?php
 include "header.php";
include "connection.php";
//session_start();
 $username = $_POST['unm'];
 $password =  $_POST['password'];
$rs = mysqli_query($db,"select * from  registration where user_nm='".$username."' and password='".$password."'");
$row=mysqli_fetch_array($rs);


$cnt=mysqli_num_rows($rs);
//echo $rs;
//exit;
if($cnt >= 1)
{
	$_SESSION['user_nm'] = $username;	
	$_SESSION['id'] = $row['user_id'];	
	header("Location:home.php");
}
else
{
	$msg = "Username or Password are not correct, try again.";
	header("Location:login.php?msg=$msg");
}
?>