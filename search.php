<!DOCTYPE html>
<html lang="en">
<head>
<title>MOVIE STUDIO| SEARCH</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.6.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Vegur_700.font.js"></script>
<script type="text/javascript" src="js/Vegur_400.font.js"></script>
<script type="text/javascript" src="js/Vegur_300.font.js"></script>
<script type="text/javascript" src="js/atooltip.jquery.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/tabs.js"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<style type="text/css">.box1 figure{behavior:url("js/PIE.htc");}</style>
<![endif]-->
</head>
<body id="page3">
<div class="body1">
  <div class="main">
    <!-- header -->
    <?php
include "header.php";
include "connection.php";

/*if(!isset($_SESSION['u_nm']))
{
	$msg = "Pls Login to c the shop page";
	header("Location:login.php?msg=$msg");
}
else
{*/
?>
    <!-- / header -->
    <!-- content -->
    <article id="content" class="tabs">
      
      <div class="wrapper">
        <ul class="nav">
		  <li class="selected"><a href="search.php">All</a></li>
		  <?php
		  $s = "select * from movietype";
		  $sell = mysqli_query($db,$s);
		  $n=2;
		  while($prods=mysqli_fetch_row($sell))
		  {
		  ?>
		  <li><a href="search.php?m_id=<?php echo $prods[0] ?>"><?php echo $prods[1] ?></a></li>
		  <?php 
	$n++;
	}
	?>
        </ul>
      </div>
	  <div id="tooplate_main">
<table align="center" style="margin-left:60px">
	<?php
	if(!isset($_GET['m_id']))
		 $str="select * from movie where r_status=1";
	else
	{
	$m_id=$_GET['m_id'];
		$str="select * from movie where r_status=1 and movie_type_id=".$m_id;
	}
	
		$sel = mysqli_query($db,$str);
		$count=1;
		
		$row=mysqli_num_rows($sel); 
		if($row<1)
		
	    echo "<h3>Sorry,No movie is available now....</h3>";
		
		while($cat=mysqli_fetch_array($sel))
		{
		
		if($count>3)
		{
	?>
	</tr>
	<tr>
	<?php
		$count=1;
		}
	?>
		<td width="120px">	

		<a href="detail.php?movie_id=<?php echo $cat['movie_id'];?>"style="font-size:32px"><img src="poster/<?php echo $cat['movie_image']; ?>" alt="Img" width="280" height="300" /><br />

	<?php 
		echo "<span><center>".$cat['movie_name']."</span></center><br><br>";
	?></a>
		</td>

		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />
		</td>
		
	
  	<?php
		$count++;
		
		}//end of while
exit;

	?>
	
	</tr>		
	<tr><td><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /></td></tr>
	
</table>

</article>
    
  </div>
</div>
<script type="text/javascript">Cufon.now(); tabs.init();</script>

</body>
</html>
 
