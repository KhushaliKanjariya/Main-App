<?php
    include "header.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Reset Forgot Password..</title>
</head>
<body>
<div id="page">
<div id="contents">
			<div id="contact">

		<h2 style="color:#ffc11e;">Forgot Password</h2><br />
			<form name="forgot_password" action="forgot_password_search.php" method="post" onsubmit="return validate(this)">
			<?php if(isset($_GET['msg'])) echo $_GET['msg']; ?>
			<table>
				<tr><td style="font-size:24px;"><font color="#FFFFFF">Enter User Name</font></td></tr>
				<tr><td><input type="text" name="user_nm" onKeyDown="return onlyChar(event);" class="txtfield" /></td></tr>
				<tr><td><input type="submit" name="btnsearch" value="Search" class="btn"/></td></tr>
			</table>
			</form>
			
		
		</div>
	</div>
</body>
<!--script to validate the forgot user form on submit -->
<script type="text/javascript">
function validate(forgot_password)
{
	if(forgot_password.user_nm.value == "")
	{
		alert("Enter User name");
		forgot_password.user_nm.focus();
		return false;
	}
}	
function onlyChar(e)
{
	var charCode=e.which || e.keyCode;
	if((charCode >= 65 && charCode <=90)|| (charCode >= 97 && charCode <=122) || charCode==9 || charCode==46 || charCode==8)
	return true;
	
	return false;
}
</script>
</html>
<br /><br />
<?php
   include "footer.php";  
?>