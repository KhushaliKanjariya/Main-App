<?php

include "header.php";

?>
<script type="text/javascript">
function validate(frm)
{
	if(frm.unm.value == "")
	{
		alert("enter user name");
		frm.unm.focus();
		return false;
	}
	else if(frm.pwd.value == "")
	{
		alert("enter user password");
		frm.pwd.focus();
		return false;
	}
	else if(frm.cpwd.value == "")
	{
		alert("enter user confirm password");
		frm.cpwd.focus();
		return false;
	}
	else if(frm.pno.value == "")
	{
		alert("enter user contact no");
		frm.pno.focus();
		return false;
	}
	else if(frm.eid.value == "")
	{
		alert("enter user email id");
		frm.eid.focus();
		return false;
	}
	else if(frm.pwd.value!=frm.cpwd.value)
	{
		alert("reenter your correct password");
		frm.pwd.focus();
		return false;
	}
	else if(crt_user.sec_question.value == "")
	{
		alert("Enter Your Secrete question");
		crt_user.sec_question.focus();
		return false;
	}
	else if(crt_user.sec_ans.value == "")
	{
		alert("Enter Your Secrete Answer");
		crt_user.sec_ans.focus();
		return false;
	}
	/*else if(frm.cap.value != frm.h1.value)
	{
		document.write(frm.h1.value);
		var b= <?php echo $a; ?>;
		alert(b);
		alert("enter right code");
		frm.cap.focus();
		return false;
	}*/
	return true;	
}


function onlyNumbers(e)
{
	var charCode=e.which || e.keyCode;
	//8-back space 9-tab key 48-57 0 to 9
	if((charCode >= 48 && charCode <=57) || charCode==9 || charCode==8)
	return true;
	
	return false;
}


function onlyChar(e)
{
	var charCode=e.which || e.keyCode;
	if((charCode >= 65 && charCode <=90)|| (charCode >= 97 && charCode <=122) || charCode==9 || charCode==46 || charCode==8)
	return true;
	
	return false;
}

function email1()
{
	var reg=/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	if(reg.test(frm.eid.value) == false)
	{
		alert ('invalid email address');
		frm.eid.focus();
		return false;
		
	}
}
</script>

	


	<div id="contents">
		<div id="adbox">
			<!--<img src="image/indian-sweets.jpg" height="300" width="600" alt="Img">-->



<table width="600" height="450" align="center" cellpadding="7">

<form  action="saveuser.php"  name="frm" method="POST"  onsubmit="return validate(this)">
			<?php
			if(isset($_GET['msg']))
			echo $_GET['msg'];
			?><br />

<tr> <td colspan="2" align="center" style="font-size:36px; color:#ffc11e ">Registration</td>
</tr>
<tr>
  <td style="font-size:24px; color:#FFFFFF" width="200">Username  : </td>
 	<td width="0"><input type="text" name="unm" style="font-size:20px" height="50" width="52" onKeyDown="return onlyChar(event);"/></td>
	</tr>
<tr> 
  <td style="font-size:24px;color:#FFFFFF">Password  :</td>
	
	<td><input type="password" name="pwd" style="font-size:20px" height="50" width="50"/></td>
</tr>
	
<tr>
    <td style="font-size:24px; color:#FFFFFF">ConfirmPassword  :</td>
	
	<td><input type="password" name="cpwd" style="font-size:20px" height="50" width="50"/></td>
</tr>

<tr>
	  <td style="font-size:24px; color:#FFFFFF">Email id  :</td>
  		
    <td><input type="text" name="eid" style="font-size:20px" height="50" width="50" onBlur="return email1();"/></td>
</tr>
<tr>
	  <td style="font-size:24px; color:#FFFFFF">Phone No  :</td>
  		
    <td><input type="text" name="pno"  style="font-size:20px" height="50" width="50" onKeyPress='return dgtOnly(event);'/></td>
</tr>

<tr>
</tr>
<tr><td style="font-size:24px; color:#FFFFFF">Select Secrete Question:</td>
		<td>
			<select name="sq">
			<option value="What city where you born in?">What city where you born in?</option>
			<option value="What is the name of your favourite sports team?">What is the name of your favourite sports team?</option>
			<option value="Who is your all-time favourite movie character?">Who is your all-time favourite movie character?</option>
			<option value="What is your favourite location where you want to go?">What is your favourite location where you want to go?</option>
			</select></td></tr>
			
			<tr><td></td></tr>
			
			<tr><td style="font-size:24px; color:#FFFFFF">Enter Your Answer:</td>
		<td><input type="text" name="sa" value="" class="txtfield"/></td></tr><br />
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="Register now" style="font-size:24px"/></td>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" value="Cancel" style="font-size:24px" S/></td></tr>
</form>	
</table>
</div>
</div>

<br>
</br>
<?php include "footer.php"; ?>
		




