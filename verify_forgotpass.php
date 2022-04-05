<?php
    //session_start();
	include "connection.php";
    include "header.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Reset Forgot password..</title>
</head>
<body>
    <!--<div id="body">
	     	<div class="section">
		       <h2>Recover Forgot Password</h2>
              <form name="forgot_password_search" onsubmit="return validate(this)">
         		<table>
				<tr><td>Your Secrete Question</td><td><input type="text" name="sec_que" value=""  /></td></tr>
				<tr><td>Enter Your Answer</td><td><input type="text" name="ans" onKeyDown="return onlyChar(event);"/></td></tr>
				<tr><td><input type="submit" name="search_ans"  value="Verify"/></td></tr>
				</table>
				</form>  
			</div>  
	</div>  -->
</body>
<!--script to validate the forgot user form on submit -->
<script type="text/javascript">
function validate(reset_password)
{
	if(reset_password.new_pass.value == "")
	{
		alert("Enter Your Password");
		reset_password.new_pass.focus();
		return false;
	}
	if(reset_password.con_pass.value == "")
	{
		alert("Enter Your Confirm Password");
		reset_password.con_pass.focus();
		return false;
	}
	if(reset_password.new_pass.value!=reset_password.con_pass.value)
	{
		alert("Password and Confirm Password Must Be Same");
		reset_password.new_pass.focus();
		return false;
	}
}	
</script>
</html>
<?php 
$username=$_SESSION['user_nm'];
$ans=$_POST['sec_ans'];

$rs = mysqli_query($db,"select sec_ans from  registration where user_nm='".$username."'");
$cnt=mysqli_num_rows($rs);
while($row=mysqli_fetch_array($rs))
{
	   $db_ans=$row['sec_ans'];
}
if($ans==$db_ans) 
{
		  $_SESSION['user_nm'] = $username;	
    	  echo  "<div id='body'>";
		  echo  "<div class='section'>";
		  echo  "<h2><font color='#ffc11e'>Reset Password</font></h2>";
          echo  "<form name='reset_password' method='post' action='update_pass.php' onsubmit='return validate(this)' >";
          echo	"<table>";
		  echo	"<tr><td style='font-size:24px;'><font color='#FFFFFF'>Enter New Password</font></td><td><input type='password' name='new_pass'/><br></td></tr><br>";
		  echo  "<tr><td style='font-size:24px;'><font color='#FFFFFF'><br>Reenter Password</font></td><td><br><input type='password' name='con_pass'/></td></tr>";
		  echo  "<tr><td><br><input type='submit' name='save_pass'  value='Update'/></td></tr>";
		  echo  "</table>";
		  echo	"</form>";
		  echo  "</div>";
		  echo  "</div>";
}	 
else
{
        $msg = "<center><h4>Incorrect Answer try again.</center></h4>";
		echo "$msg";
	//	header("Location:forgot_password_search.php?msg=$msg");
}
?>

<?php
    include "footer.php";
?>
