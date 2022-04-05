<?php
include "connection.php";
include "header.php";

if(!isset($_SESSION['a_nm']))
{
	header("Location:login.php");
}
	if(isset($_GET['delete']))
	{
		$del="delete from bookingdetails where user_id=".$_GET['delete'];
		$rs=mysql_query($del);
	}

?>


<div id="contents">
		<div id="adbox">
			<!--	<img src="image/1624390.jpg" alt="Img" height="600" width="1258">--><br />
<br /><br /><br /><br /><br />


		<form action="" method="post">
        <?php
		if(isset($_GET['msg']))
			echo $_GET['msg'];
			?>  	
			<style>
				table,th{border:1px solid white; }
				</style>			
			<table align="center" border="1" >
	<tr>
		<th style="color:#ffc11e;">ticket ID</th>
		<th style="color:#ffc11e;">User ID</th>
		<th style="color:#ffc11e;">User Name</th>
		<th style="color:#ffc11e;">Show ID</th>
		<th style="color:#ffc11e;">number of seat</th>
		<th style="color:#ffc11e;">seat Price</th>
		<th style="color:#ffc11e;">date of booking</th>
		<th style="color:#ffc11e;">Delete</th>
	</tr>
	<?php
		$sel="select * from bookingdetails";
		$rs=mysqli_query($db,$sel);
		while($res=mysqli_fetch_array($rs))
		{
	?>
	<tr>
		<th style="color:#FFFFFF;"><?php echo $res['bd_id']; ?></th>
		<th style="color:#FFFFFF;"><?php echo $res['user_id']; ?></th>
		<th style="color:#FFFFFF;"><?php echo $res['user_name']; ?></th>
		<th style="color:#FFFFFF;"><?php echo $res['show_id']; ?></th>
		<th style="color:#FFFFFF;"><?php echo $res['bd_seat_no']; ?></th>
		<th style="color:#FFFFFF;"><?php echo $res['bd_amt']; ?></th>
		<th style="color:#FFFFFF;"><?php echo $res['bd_date']; ?></th>
		<th><a href="viewticket.php?delete=<?php echo $res['user_id']; ?>"style="color:#FFFFFF;">Delete</a></th>
	</tr>
	<?php } ?>
	</table>
	</form>
	</div></div>
			<br />
<br />

	
<td width="50" style="color:#FFFFFF;"><?php echo $res['movie_id']; ?></td>