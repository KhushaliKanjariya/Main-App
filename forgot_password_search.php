<?php
    //session_start();
	include "connection.php";
    include "header.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charesultet=iso-8859-1" />
<title>Recover Forgot password</title>
</head>
<body>
</body>
<!--script to validate the forgot user form on submit -->
<script type="text/javascript">
function validate(forgot_password_search)
{
	if(forgot_password_search.sec_ans.value == "")
	{
		alert("Enter Your Answer");
		forgot_password_search.sec_ans.focus();
		return false;
	}
}	
function onlyChar(e)
{
	var charCode=e.which || e.keyCode;
	if((charCode > 64 && charCode <91)|| (charCode > 96 && charCode <113) || charCode==9 || charCode==46 || charCode==8)
	return true;
	
	return false;
}
</script>
</html>

<?php 
$username=$_POST['user_nm'];

$rs = mysqli_query($db,"select sec_question from registration where user_nm='$username'") or die (mysql_error());

$cnt=mysqli_num_rows($rs);
//echo $cnt;
if($cnt >= 1)
	 {
	
		$_SESSION['user_nm'] = $username;
		while($row=mysqli_fetch_array($rs))
       {
          $que=$row['sec_question'];
		  echo "<div id='page' > <div id='contents'> <div id='contact'>";
		  echo "<h2><font color='#ffc11e'>Recover Forgot Password</font></h2></td></tr><br><br>";
	         echo "<form name='forgot_password_search' method='post' action='verify_forgotpass.php' onsubmit='return validate(this)' >";
          
			echo"<table>";
		  
		  	echo"<tr><td style='font-size:24px;'><font color='#FFFFFF'>Your Secrete Question</font></td></tr>
		  	<tr><td><input type='textarea' name='sec_question' value='$que' class='txtfield' disabled/></td></tr>";
		  
		  	echo"<tr><td style='font-size:24px;'><font color='#FFFFFF'>Enter Your Answer</font></td></tr>
		  	<tr><td><input type='text' name='sec_ans' class='txtfield' onKeyDown='return onlyChar(event);'/> </td></tr>";
		  
		  	echo"<tr><td><input type='submit' name='search_ans'  value='Verify' class='btn'/></td></tr>";
		  
		  	echo"</table> </form>";
		  
		 
		  echo  "</div> </div> </div>";
       }
	 }
	else
	{
		$msg = "<center> <h4> Username is not correct, try again. </h4> </center>";
		header("Location:forgot_password.php?msg=$msg");
	}
?>

<?php
    include "footer.php";
?>