<?php
include "header.php";
include "connection.php";
if(isset($_GET['movie_type_id']))
$movie_type_id= $_GET['movie_type_id'];

$mtnmq = "select movie_type from movietype where movie_type_id=$movie_type_id";
$res = mysqli_query($db,$mtnmq) or die(mysqli_error($db));
$mtnmobj = mysqli_fetch_object($res);

$mtnm = $mtnmobj->movie_type;

$showq ="select * from shows";

$shres = mysqli_query($db,$showq) or die(mysqli_error($db));
?>
<form action="save_movie.php?movie_type_id=<?php echo $movie_type_id; ?>" method="post" enctype="multipart/form-data" ><br />
<br /><br />

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
<td><input type="text" name="movie_name" size="27"  /></td>
</tr>

<tr>
<td height="50" style="font-size:18px; color:#FFFFFF;">Image : </td>
<td><input type="file" name="movie_image"  style="font-size:18px"/></td>
</tr>

<tr>
<td height="50" style="font-size:18px; color:#FFFFFF;">Type : </td>
	<td><input type="text" name="movie_type" size="27" value="<?php echo $mtnm; ?>" readonly /></td>

</tr>

<tr>
<td height="50" style="font-size:18px; color:#FFFFFF;">Release Date : </td>
<td><input type="date" name="movie_rel" size="27"  /></td>
</tr>

<tr>
<td height="50" style="font-size:18px; color:#FFFFFF;">Runtime : </td>
<td><input type="text" name="runtime" size="27"  /></td>
</tr>

<tr>
<td height="50" style="font-size:18px; color:#FFFFFF;">Language : </td>
<td><input type="text" name="movie_lan" size="27"  /></td>
</tr>

<tr>
<td height="50" style="font-size:18px; color:#FFFFFF;">Descreption : </td>
<td><input type="text" name="movie_desc" size="27"  /></td>
</tr>
<!--
<tr>
<td height="50" style="font-size:18px">In Which Screen?  </td>
<td><input type="text" name="movie_scr" size="27"  /></td>
</tr>

<tr>
<td height="50" style="font-size:18px">Add Show Time : </td>
<td><input type="text" name="movie_time" size="27"  /></td>
</tr>
-->


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