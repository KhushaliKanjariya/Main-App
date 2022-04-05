<?php
ob_start();
session_start();
//include "connection.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Movie Studio</title>
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
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/tms-0.3.js"></script>
<script type="text/javascript" src="js/tms_presets.js"></script>
<script type="text/javascript" src="js/backgroundPosition.js"></script>
<script type="text/javascript" src="js/atooltip.jquery.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<style type="text/css">.box1 figure{behavior:url("js/PIE.htc");}</style>
<![endif]-->
</head>
<body id="page1">
<div class="body1">
  <div class="main">
    <!-- header -->
    <header>

      <div class="wrapper">
       <h1 style="float:left;top:80px;position:relative;"><a href="index.php" id="footer_logo"><span>MOVIE</span>STUDIO</a></h1>
        <nav>
		
			 
          <ul id="top_nav">
		  
            <li><a href="index.html"><img src="images/top_icon1.gif" alt=""></a></li>
            <li><a href="#"><img src="images/top_icon2.gif" alt=""></a></li>
            <li class="end"><a href="contact.html"><img src="images/top_icon3.gif" alt=""></a></li>
          </ul>
        </nav>
        <nav>
          <ul id="menu">
					<li><a href="movietype.php" style="font-size:20px">Search</a>					
					<li><a href="viewfeedback.php" style="font-size:20px">Feedback details</a>					
					<li><a href="viewuser.php" style="font-size:20px">User details </a>					
					<li><a href="viewticket.php" style="font-size:20px">Ticket details</a>						
					 </li>

					<li>
					
					<?php
					if(!isset($_SESSION['a_nm']))
					//if($_SESSION['u_nm']=="")
					{
					?> <a href="login.php" style="font-size:20px"> <?php echo "Login"; 
					}
					else { ?> </a>
				<a href="logout.php" style="font-size:20px"><?php echo "Logout"; 
				 }
					?></a>
				</li>				
				</ul> 
   	
        </nav>
      </div>
          </header>