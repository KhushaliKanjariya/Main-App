
<!DOCTYPE html>
<html lang="en">
<head>
<title>Movie Studio | Login</title>
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
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<style type="text/css">.box1 figure{behavior:url("js/PIE.htc");}</style>
<![endif]-->
</head>
<body id="page5">
<div class="body1">
  <div class="main">
  
 
 
 <?php
include "connection.php";
include "header.php";
?>
	<div class="slider">
        <ul class="items">
          <li> <img src="images/bharat.jpg" alt="">
              <div class="banner">
                <div class="wrapper"><span>BHARAT</span></div>
                <div class="wrapper"><strong><em></em></strong></div>
              </div>
          </li>
          <li> <img src="images/kesari.jpg" alt="">
              <div class="banner">
                <div class="wrapper"><span>KESARI</span></div>
                <div class="wrapper"><strong></strong></div>
              </div>
          </li>
          <li> <img src="images/dedepyaarde.jpg" alt="">
              <div class="banner">
                <div class="wrapper"><span>DE DE PYAAR DE</span></div>
                <div class="wrapper"><strong></strong></div>
              </div>
          </li>
        </ul>
        <ul class="pagination">
          <li id="banner1"><a href="#">Action</a></li>
          <li id="banner2"><a href="#">History</a></li>
          <li id="banner3"><a href="#">Comedy</a></li>
        </ul>
</div>
    </header>
		<form action="logincheck.php" method="post">  
        <?php
		if(isset($_GET['msg']))
		 echo  $_GET['msg'];
		 
		 ?>		
			<table width="850" height="120" align="center" cellpadding="15">
			<tr>
			<td width="200" style="font-size:24px; color:#FFFFFF;" align="right">username:</td>
			<td width="185"><input type="text" name="unm" placeholder="username"></td>
			</tr>
			<tr>
			<td style="font-size:24px; color:#FFFFFF;" align="right">password:</td>
			<td><input type="password" name="password" placeholder="password"></td>
			</tr>
						<tr>
			<td>&nbsp;</td>
			<td ><input type="submit" value="submit" style="font-size:24px" >
			      <input type="reset" value="reset" style="font-size:24px" >
			</td>
			</tr><tr>
			
					  <br/>
                     <a href="forgot_password.php"><font color="#FFFFFF">Forgot Password??</font></a><br/><br/>
					 </tr>
			</tr>
						<tr>
			<td>&nbsp;</td>
			<td ><a href="registration.php" style="font-size:24px">Registration</a></td>
			</tr>
		
</table>
           
<?php include "footer.php"; ?>