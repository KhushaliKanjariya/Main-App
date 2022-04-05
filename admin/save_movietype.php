<?php
include "header.php";
include "connection.php";

	echo $Name = $_REQUEST['name'];
	
if(isset($_POST['submit']))
{
	
$insert=(mysqli_query($db,"insert into movietype(movie_type)values('$Name')"));
		if($insert)
			$msg='movietype has been added successfully';
		else
			$msg='movietype has not been added successfully';
	}
	
	header("Location:movietype.php?msg=$msg");

include "footer.php";
?>