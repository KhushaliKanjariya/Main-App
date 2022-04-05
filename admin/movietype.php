<?php
include "header.php";
include "connection.php";

				if($_SESSION['a_nm'] == "")
				{
				$msg = "<h3><center>Pls Login.</center></h3> ";
			header("Location:login.php?msg=$msg");
}else
{
	if(isset($_GET['delete']))
	{
		$del="delete from movietype where movie_type_id=".$_GET['delete'];
		$rs=mysqli_query($db,$del);
	}
?>
<br /><br />

<style>
	table,th{border:1px solid white; }
</style>	
		
<table align="center" cellpadding="6" border="1" height="" width="400">
<tr>
<th colspan="5" align="right">
<a href="add_movietype.php" style="font-size:18px; color:#FFFFFF; ">Add New MovieType</a>
</th>
</tr>
<br />
<?php
$sel = mysqli_query($db,"select * from movietype");
while($prods=mysqli_fetch_array($sel))
{
?>
<tr>
		
			<th style="font-size:25px; color:#FFFFFF;"><?php echo $prods['movie_type_id']; ?></th>
            
			

			<th style="text-align:justify;"><a href="movie.php?movie_type_id=<?php echo $prods['movie_type_id']; ?>"  style="font-size:25px; color:#ffc11e;"><?php echo $prods['movie_type']; ?></a></th>
			
<th height="80" width="80"><a href="edit_movietype.php?movie_type_id=<?php echo $prods['movie_type_id']; ?>" style="font-size:18px; color:#FFFFFF;">Edit</a></th>

<th><a href="movietype.php?delete=<?php echo $prods['movie_type_id'];  ?>" style="font-size:18px; color:#FFFFFF;">delete</a></th>
		</tr>
		
	
 <?php } 

	}
?>

</table><br /><br /><br /><br /><br /><br /><br />




