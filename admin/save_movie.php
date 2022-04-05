<?php
include "header.php";
include "connection.php";

if(isset($_GET['movie_type_id']))
$movie_type_id= $_GET['movie_type_id'];

$movie_id = $_REQUEST['movie_id'];
$movie_type_id = $_REQUEST['movie_type_id'];
$movie_name = $_REQUEST['movie_name'];
$movie_type = $_REQUEST['movie_type'];
$movie_rel = $_REQUEST['movie_rel'];
$movie_runtime = $_REQUEST['runtime'];
$movie_lan = $_REQUEST['movie_lan'];
$movie_desc = $_REQUEST['movie_desc'];
//$movie_scr = $_REQUEST['movie_scr'];
//$movie_time = $_REQUEST['movie_time'];

	$path = $_FILES['movie_image']['name'];
	echo $path;
	if($path!="")
	{
	//echo "hello";
	//$new_file_name=$Name.".";
	//$path="image/".$new_file_name; 
	
	$new_file_name=$path;
	$path= "../poster/".$path; 

move_uploaded_file($_FILES['movie_image'] ['tmp_name'],$path);
	}
		
	
	
if(isset($_POST['submit']))
{
$q="insert into movie(movie_type_id,movie_name,movie_image,movie_type,movie_rel,movie_runtime,movie_lan,movie_desc,r_status)values('$movie_type_id','$movie_name','$new_file_name','$movie_type','$movie_rel','$movie_runtime','$movie_lan','$movie_desc',1)";

//$t="insert into shows(movie_id,scr_id,show_time)values('$movie_id','$movie_scr',''movie_time')";
$insert=(mysqli_query($db,$q));
		if($insert)
			$msg='Movie has been added successfully';
		else
			$msg='Movie has not been added successfully';
			
$midq = "select max(movie_id) as mid from movie";

$resmid =mysqli_query($db,$midq);

$midobj= mysqli_fetch_object($resmid);

$mid = $midobj->mid;
	}
	
	header("Location:set_show.php?mid=$mid&movie_type_id=$movie_type_id");
?>
<?php
include "footer.php";
?>