<?php
include "header.php";
include "connection.php";

$nm=$_POST['vnm'];
$nos=$_POST['no_of_seat'];
$seat=$_POST['seats'];
$shid = $_SESSION['showid'];


?>
	<div id="content">
	   <div class="content-padding"><br>
<br>

       <h3 align="center" style="color:#ffc11e">Billing Details<br /></h3>
        
<br>
			<form action="done.php" method="post"><br /><br />
			
				<style>
				table,th{border:1px solid white; }
				</style>
			
          <table border="1" bordercolor="#000000" style="color:#FFF" width="70%" align="center">
        
          
          <tr>
		  <th colspan="4"><center><h3>Movie Studio</h3></center></th>
		  </tr>
          <tr>
		  <th align="left" style="font-size:16px">name : <?php echo $nm; ?></th>
		  <th style="font-size:16px">seat :  <?php echo $nos; ?></th>
		  <?php
		  $timestamp = date("d/m/Y");
		  
		  ?>
		  <th colspan="1" style="font-size:16px">Date : <?php echo $timestamp; ?></th>
         
		  <th colspan="3" align="left" style="font-size:16px">seat number: <?php echo $seat; ?><br />
		  </tr>
		  <br /><br />
          
		  <tr>
		  <th style="font-size:16px">Movie Name</th>
		  <th colspan="1" style="font-size:16px">Screen:</th>
		  <th colspan="1" style="font-size:16px">Show Time:</th>
		  <th colspan="1" style="font-size:16px">Payable Amount:</th>
		  </tr>
		  <?php 
		  
		  $mvid=$_SESSION['movie_id'];
		  $qr = "select movie_name from movie where movie_id =$mvid";
		  $mv = mysqli_query($db,$qr) or die(mysqli_error($db)."aa");
		  $mvres = mysqli_fetch_object($mv);
		  $mvnm=$mvres->movie_name;
		  ?>
<?php
	$tot =0;
	$q = "select * from shows where show_id = $shid";
 	$r = mysqli_query($db,$q)or die(mysqli_error($db)."bb");
		while($result=mysqli_fetch_row($r))
		{ 
				echo "<tr align='center' style='font-size:18px'>
				<td>$mvnm</td>
				<td>$result[2]</td>
				<td>$result[3]</td>";
				$tmp= $nos * $result[6];
				echo "<td>$tmp</td>	</tr>";
				$tot = $tot + $result[6]*$nos;	
			}

				echo "<tr align='center' style='font-size:18px'><td colspan=3 align='right'>Your Grand total is&nbsp; </td><td>$tot</td></tr>";
		?>
		 <tr>
				
				<th align="right" rowspan="5" colspan="4"><input type="submit" value="Done"></th>
			</tr>
        </table>
		</form>
		<?php
		if(!isset($_SESSION['done']))
		{
			//echo $nm." ".$nos." ".$seat;
			$user_id = $_SESSION['id'];
			$bd_date = date("Y-m-d");
			$q="insert into bookingdetails(user_name,show_id,bd_seat_no,bd_amt,bd_date,user_id) values('$nm','$shid','$nos','$tot','$bd_date',$user_id)";
			mysqli_query($db,$q);
		
		
			$q1="select max(bd_id) from bookingdetails";
			$id1=mysqli_fetch_array(mysqli_query($db,$q1));
		

			$sarr = explode(",",$seat);
			foreach($sarr as $s)
			{
			
				$insq = "insert into booking (seatno,user_nm,showid,userid,movie_id,`date`,bd_id) values('$s','$nm',$shid,$user_id,$mvid,'$bd_date',$id1[0])";
				$res = mysqli_query($db,$insq);
			}

			if($res >=1)
			$_SESSION['done']='true';
			$upq = "update shows set reserved=reserved+$nos, empty=empty-$nos where show_id=$shid";

			$res2 = mysqli_query($db,$upq) or die(mysqli_error($db));

			}
		
			
		//echo $qry2;
		//$res = mysqli_query($db,$qry);
		//$date = date("Y-m-d");
		/*while($row = mysqli_fetch_array($res))
		{
			$user_id = $_SESSION['id'];
			$bd_date = $row[6];
			//$qry1 = "insert into bill (u_id,i_id,i_nm,i_price) values ($u_id,$i_id, '$i_nm', $i_price)";
			$qry1 = "insert into booking (userid,date) values ('$user_id','$bd_date')";
			//echo $qry1;
			mysqli_query($qry1);
			}*/
		?>




