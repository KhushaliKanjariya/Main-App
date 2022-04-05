
<?php
include "header.php";
include "connection.php";
?>


<?php
$mtid1 = $_GET['movie_type_id'];
$movie_id=$_GET['movie_id'];
if($movie_id!="")
{
	$sel = mysqli_query($db,"select * from movie where movie_id=$movie_id");
	while($prods=mysqli_fetch_array($sel))
	{
	$movie_name=$prods['movie_name'];
	$movie_image= $prods['movie_image'];
	$movie_type=$prods['movie_type'];
	$movie_type_id=$prods['movie_type_id'];
	$movie_rel=$prods['movie_rel'];
	$movie_runtime=$prods['movie_runtime'];
	$movie_lan=$prods['movie_lan'];
	$movie_desc=$prods['movie_desc'];
	}
}	
	if(isset($_POST['submit']))
	{
		$name=$_POST['movie_name'];
		$path = $_FILES['movie_image']['name'];
		$type=$_POST['movie_type'];
		$rel=$_POST['movie_rel'];
		$runtime=$_POST['movie_runtime'];
		$lan=$_POST['movie_lan'];
		$desc=$_POST['movie_desc'];
   		if($path!="")
		{
			$new_file_name=$path;
			$path= "../poster/".$path; 
			move_uploaded_file($_FILES['movie_image']['tmp_name'],$path);
		}
		else
		{
			$new_file_name=$_POST['h1'];
		}
		
		$mtypeqr = "select movie_type_id from movietype where movie_type = '$type'";
		
		$mtres = mysqli_query($db,$mtypeqr) or die(mysqli_error($db)."bb");
		if(mysqli_num_rows($mtres)>=1)
		{
		$mtp = mysqli_fetch_object($mtres);
		
		$mtid = $mtp->movie_type_id;

		$upd="UPDATE movie SET movie_image='$new_file_name',movie_name='$name',movie_type_id='$mtid',movie_type='$type',movie_rel='$rel',movie_runtime='$runtime',movie_lan='$lan',movie_desc='$desc' WHERE movie_id=".$_GET['movie_id'];
		mysqli_query($db,$upd) or die (mysqli_error($db)."aa");
		//$c_id=$_GET['c_id'];
		header("Location:movie.php?movie_type_id=$mtid1&movie_id=".$_GET['movie_type_id']);
		}
		
		else
		{
		header("Location:edit_movie.php?movie_type_id=$mtid1&movie_id=$movie_id&msg=no movie type");
		}
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
<td><input type="text" name="movie_name" size="27" value="<?php echo $movie_name; ?>"  /></td>
</tr>

<tr>
<td height="50" style="font-size:18px; color:#FFFFFF;">Image : </td>
<td><input type="image" name="i1" src="../poster/<?php echo $movie_image; ?>." height="100" width="100"/>
<input type="hidden" name="h1" value="<?php echo $movie_image; ?>"  />
<br />
<input type="file" name="movie_image"  value="" style="font-size:18px"/><br /><br /><br /></td>
</tr>
<tr >
		<td height="50" style="font-size:18px; color:#FFFFFF;">	Type : </td>
		<td><input type="text" name="movie_type" size="27" value="<?php echo $movie_type; ?>"  /></td>
</td>
</tr>
<tr>
		<td height="50" style="font-size:18px; color:#FFFFFF;">
Relese Date : </td>
<td><input type="date" name="movie_rel" size="27" value="<?php echo $movie_rel; ?>"  /></td>
</tr>
<tr >
		<td height="50" style="font-size:18px; color:#FFFFFF;">
Movie Runtime : </td>
<td><input type="text" name="movie_runtime" size="27" value="<?php echo $movie_runtime; ?>"  /></td>
</tr>
<tr >
		<td height="50" style="font-size:18px; color:#FFFFFF;">
Language : </td>
<td><input type="text" name="movie_lan" size="27" value="<?php echo $movie_lan; ?>"  /></td>
</tr>

<tr >
		<td height="50" style="font-size:18px; color:#FFFFFF;">
desc : </td>
<td><input type="textarea" name="movie_desc" size="27" value="<?php echo $movie_desc; ?>"  /></td>
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