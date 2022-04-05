<?php
session_start();

//header("Location:registration.php?msg=$msg");
//exit;

include "connection.php";
$username = $_POST['unm'];
$password =  $_POST['pwd'];
$email = $_POST['eid'];
$phoneno = $_POST['pno'];
$sec_question=$_POST['sq'];
$sec_answer=$_POST['sa'];
$rs= mysqli_query($db,"select * from registration where user_nm='".$username."'") or die(mysqli_error($db));
$r= mysqli_num_rows($rs); 
//$r = mysqli_num_rows(mysqli_query("select * from registration where unm='".$username."' and pwd='".$password."'"));
//echo $r;
if($r<1)
{
//mysqli_query("insert into registration(unm,pwd,city,cno,email,wsite,enm) values('$unm','$pwd','$city','$cno','$email','$wsite','$enm')");

$sql = "INSERT INTO registration (user_nm,email,password,phone_no,sec_question,sec_ans) values('".$username."','".$email."','".$password."','".$phoneno."','".$sec_question."','".$sec_answer."')";
//echo $sql;

 //$sql = "INSERT INTO user values('".$_POST['unm']."')";
 //,'.$_POST['pwd'].','.$_POST['city'].','.$_POST['add'].','.$_POST['cno'].')';
 //echo $sql;
 //exit;
$res = mysqli_query($db,$sql);
//echo $res;
//exit;
if ($res)
{
	$msg = "Successfully Registerd!!..";
	header("Location:login.php?msg=$msg");
}

}
else
{
	$msg = "Username already exists!!..";
	header("Location:registration.php?msg=$msg");
}
?>
