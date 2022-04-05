<?php
include "header.php";
include "connection.php";

if(isset($_GET['movie_type_id']))
$movie_type_id= $_GET['movie_type_id'];


if(isset($_GET['mid']))
{
	$mid = $_GET['mid'];
}


$showq ="select * from shows";
$shres = mysqli_query($db,$showq) or die(mysqli_error($db));

$oldsh = array();
$newsh = array();


if(isset($_POST['submit']))
{
//echo "aa";
	$arr = $_POST['sh'];
	//print_r($arr);

	foreach($arr as $shid)
	{
		
		$qry = "update shows set movie_id= $mid where show_id=$shid";

		$upres=mysqli_query($db,$qry) or die(mysqli_error($db));


	}

	$allshq ="select movie_id from shows";
	$allshres = mysqli_query($db,$allshq)or die(mysqli_error($db));
	while($rs=mysqli_fetch_array($allshres))
	{
		$allarr[] = $rs[0];
	}
print_r($allarr);
print_r($oldsh);
	foreach($oldsh as $osh)
	{
		echo $osh;
		if(in_array($osh,$allarr)==false)
		{
			echo "aa";
			$delq= "update movie set r_status=0 where movie_id=$osh";
			$delres=mysqli_query($db,$delq) or die(mysqli_error($db));
		}
	}



		header("Location:movie.php?movie_type_id=$movie_type_id");

	
	
}

?>

<font color="#FFFFFF";>SELECT SHOWS:</font>
<div style="color:#FFFFFF;">
<form name="frm" action="" method="post">
<table >
<tr><th style="color:#ffc11e">SCREEN NO</th><th style="color:#ffc11e">SHOW 1</th><th style="color:#ffc11e">SHOW 2</th><th style="color:#ffc11e">SHOW 3</th><th style="color:#ffc11e">SHOW 4</th></tr>
<tr><td style="color:#99FFFF">SCREEN 1</td>
<?php
$i=1;$s=2;
while($sh = mysqli_fetch_array($shres))
{
	$oldsh[]=$sh[1];

	?>

<td><input type="checkbox" name="sh[]" value="<?php echo $sh[0]; ?>" style="margin-left:20px;"/><?php echo  $sh[3]; ?></td>
	<?php
if($i%4==0)
{
	echo "</tr>";
	echo "<tr><td style='color:#99FFFF'>SCREEN $s</td>";
$s++;
}
$i++;
}
?>

<tr><td colspan="5"><input type="submit" value="SELECT" name="submit" /></td></tr>
</table>
</form>
</div>


<?php

include "footer.php";
?>