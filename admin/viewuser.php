<?php
include "connection.php";
include "header.php";

if(!isset($_SESSION['a_nm']))
{
	header("Location:login.php");
}
	if(isset($_GET['delete']))
	{
		$del="delete from registration where user_id=".$_GET['delete'];
		$rs=mysqli_query($db,$del);
	}

?>


<div id="contents">
		<div id="adbox">
		<!--	<img src="image/1624390.jpg" alt="Img" height="600" width="1258"> --><br />
<br /><br /><br /><br /><br />


		<form action="" method="post">
        <?php
		if(isset($_GET['msg']))
			echo $_GET['msg'];
			?>  	
			
			<style>
				table,th{border:1px solid white; }
				</style>		
<table align="center" border="1" cellpadding="15" width="100%">
	<tr>
		<th style="font-size:large; color:#ffc11e;">ID</th>
		<th style="font-size:large; color:#ffc11e;">Name</th>
		<th style="font-size:large; color:#ffc11e;">Email ID</th>
		<th style="font-size:large; color:#ffc11e;">Password</th>
		<th style="font-size:large; color:#ffc11e;">Phoneno</th>
		<th style="font-size:large; color:#ffc11e;">Delete</th>
	</tr>
	<?php
		$sel="select * from registration";
		$rs=mysqli_query($db,$sel);
		while($res=mysqli_fetch_array($rs))
		{
	?>
	<tr>
		<th style="text-align:center;  color:#FFFFFF;"><?php echo $res['user_id']; ?></th>
		<th style="text-align:center; color:#FFFFFF;"><?php echo $res['user_nm']; ?></th>
		<th width="50" style="color:#FFFFFF;"><?php echo $res['email']; ?></th>
		<th style="text-align:center; color:#FFFFFF;"><?php echo $res['password']; ?></th>
		<th width="50" style="color:#FFFFFF"><?php echo $res['phone_no']; ?></th>
		<th style="text-align:center;"><a href="viewuser.php?delete=<?php echo $res['user_id']; ?>">Delete</a></th>
	</tr>
	<?php } ?>
	</table>
	</form>
	</div></div>
			<br />
<br />

	

