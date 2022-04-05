<?php
include "header.php";
include "connection.php";
?>
<form action="save_movietype.php" method="post" enctype="multipart/form-data" ><br />

<br /><br /><br /><br /><br />

<table align="center" border="1" cellpadding="4">
<tr>
		<td colspan="2" align="right" height="50">
		<?php
		if(isset($_GET['msg']))
		 echo  $_GET['msg']; ?>
<input type="button" name="b1" onclick="tmp()" style="background-color:#999" value="Back" style="font-size:18px"/></td>			
</tr> 

<tr>
<td height="50" style="font-size:18px; color:#FFFFFF;">Name : </td>
<td><input type="text" name="name" size="27"  /></td>
</tr>



<tr>
<td height="25"> </td>
<td><input type="submit" name="submit" value="save"  style="font-size:18px"/></td>
</tr>
</table>
</form>
<div class="article">
			  
  </div>
  <script>
	function tmp()
	{
		history.back();
	}	
</script>
<?php
include "footer.php";
?>
