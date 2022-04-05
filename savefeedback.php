<?php

include "connection.php";
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

//$r = mysqli_num_rows(mysqli_query("select * from feedback where f_nm='".$name."'")); 
//$r = mysqli_num_rows(mysqli_query("select * from registration where unm='".$username."' and pwd='".$password."'"));
//echo $r;
//if($r<1)
//{
//mysqli_query("insert into registration(unm,pwd,city,cno,email,wsite,enm) values('$unm','$pwd','$city','$cno','$email','$wsite','$enm')");

$sql = "INSERT INTO feedback (user_name,email,message) values('".$name."','".$email."','".$message."')";
//echo $sql;

 //$sql = "INSERT INTO user values('".$_POST['unm']."')";
 //,'.$_POST['pwd'].','.$_POST['city'].','.$_POST['add'].','.$_POST['cno'].')';
// echo $sql;
$res = mysqli_query($db,$sql);
if ($res)
{
	$msg = "Successfully!!..";
	header("Location:thanks.php?msg=$msg");
}

//}
else
{
	$msg = "not Successfully!!..";
	header("Location:feedback.php?msg=$msg");
}
?>
