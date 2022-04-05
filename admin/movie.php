<?php
include "header.php";
include "connection.php";

				if($_SESSION['a_nm'] == "")
				{
					$msg = "Pls Login";
			header("Location:login.php?msg=$msg");
}else
{
	if(isset($_GET['delete']))
	{
		$del="delete from movie where movie_id=".$_GET['delete'];
		$rs=mysqli_query($db,$del);
	}
	$movie_type_id= $_GET['movie_type_id'];
?>
<br /><br /><br /><br /><br /><br />

<style>
	table,th{border:1px solid white; }
</style>	
<a href="add_movie.php?movie_type_id=<?php echo $movie_type_id ?>"style="font-size:18px; color:#ffc11e;">ADD NEW MOVIE</a>

<table align="center" border="1" cellpadding="10" width="80%">
<tr>

</tr>
<?php
$sel = mysqli_query($db,"select * from movie where movie_type_id=$movie_type_id");
while($prods=mysqli_fetch_array($sel))
{
?>
<tr>
<th><?php echo $prods['movie_id']; ?></th>
<th><img src="../poster/<?php echo $prods['movie_image']; ?>." alt="Img" width="100" height="100"></th>
<th style="font-size:24px; color:#FFFFFF;"><?php echo $prods['movie_name']; ?></a></th>

<th style="font-size:18px; color:#FFFFFF;"><?php echo $prods['movie_type'];?> </th>

<th style="font-size:18px; color:#FFFFFF;"><?php echo $prods['movie_rel']; ?></th>

<th style="font-size:18px; color:#FFFFFF;"><?php echo $prods['movie_runtime']; ?></th>

<th style="font-size:18px; color:#FFFFFF;"><?php echo $prods['movie_lan']; ?></th>

<th height="80" width="80"><a href="edit_movie.php?movie_type_id=<?php echo $movie_type_id .' '.'& movie_id='.$prods['movie_id'];  ?> " style="font-size:18px; color:#FFFFFF;">Edit</a></th>

<th><a href="movie.php?movie_type_id=<?php echo $movie_type_id .' '.'& delete='.$prods['movie_id'];  ?> "style="font-size:18px; color:#FFFFFF;">delete</a></th>		
		</tr>
		
	
 <?php }?>
 </table>&nbsp;&nbsp;&nbsp;
 <?php 
	}
?>
<?php include"footer.php"?>