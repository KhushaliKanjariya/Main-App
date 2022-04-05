<?php
include "connection.php";
include "header.php";

if(!isset($_SESSION['a_nm']))
{
	header("Location:login.php");
}
	if(isset($_GET['delete']))
	{
		$del="delete from feedback where f_id=".$_GET['delete'];
		$rs=mysql_query($del);
	}

?>


<div id="contents">
	
		<br />
<br /><br />

		<form action="" method="post">
        <?php
		if(isset($_GET['msg']))
			echo $_GET['msg'];
		?>
		 		
				<style>
				table,th{border:1px solid white; }
				</style>	
	<table align="center" border="1">
	<tr>
		<th style="color:#ffc11e">ID</th>
		<th style="color:#ffc11e">Name</th>
		<th style="color:#ffc11e">Email</th>
		<th style="color:#ffc11e">Message</th>
		<th style="color:#ffc11e">Delete</th>
	</tr>
	<?php
		$sel="select * from feedback";
		$rs=mysqli_query($db,$sel);
		while($res=mysqli_fetch_array($rs))
		{
	?>
	<tr>
		<th width="40" style="color:#FFFFFF;"><?php echo $res['f_id']; ?></th>
		<th width="200" style="color:#FFFFFF;"><?php echo $res['user_name']; ?></th>
		<th width="250" style="color:#FFFFFF;"><?php echo $res['email']; ?></th>
		<th width="150" style="color:#FFFFFF;"><?php echo $res['message']; ?></th>
		<th width="70"><a href="viewfeedback.php?delete=<?php echo $res['f_id']; ?>" style="color:#FFFFFF;">Delete</a></th>
	</tr>
	<?php } ?>
	</table><br /><br /><br /><br /> <br /><br /><br /><br /> 
	</form>
	</div> <!-- end of main -->
	
	
	
	
	
</div> <!-- end of fp 100% wrapper

	</div> -->
			<br />
<br />

	
