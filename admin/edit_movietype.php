<?php
include "header.php";
include "connection.php";
?>


<?php
$movie_type_id=$_GET['movie_type_id'];
if($movie_type_id!="")
{
	$sel = mysqli_query($db,"select * from movietype where movie_type_id=$movie_type_id");
	while($prods=mysqli_fetch_array($sel))
	{
	$movie_type=$prods['movie_type'];
	}
}	
	if(isset($_POST['submit'])=="update")
	{
		$name=$_POST['name'];
		
		$upd="UPDATE movietype SET movie_type='".$name."' WHERE movie_type_id=".$_GET['movie_type_id'];
		mysqli_query($db,$upd);
		//$c_id=$_GET['c_id'];
		header("Location:movietype.php");
	}
?>
<br />
<br />
<br />
<br />
<br />
<br />
<form action="" method="post" enctype="multipart/form-data" >
<table align="center" border="1">

<tr>
                <td colspan="3" align="right" height="50">
				<?php 
				if(isset($_GET['msg']))
				echo $_GET['msg'];?>
<input type="button" name="b1" onclick="tmp()" style="background-color:#999"value="Back" style="font-size:18px"/></td>
   			 </tr>
            
			<tr >
		<td height="50" style="font-size:18px; color:#FFFFFF;">
Name : </td>
<td><input type="text" name="name" size="27" value="<?php echo $movie_type; ?>"  /></td>
</tr>

<tr>
<td height="50" style="font-size:18px"> </td>
<td><input type="submit" name="submit" value="update"  style="font-size:18px" /></td>
</tr>
</table>
<script>
	function tmp()
	{
		history.back();
	}	
</script>
</form>
<?PHP include"footer.php";?>