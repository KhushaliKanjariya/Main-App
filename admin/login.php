 
<h1 style="float:left;top:80px;position:relative;"><a href="index.php" id="footer_logo"><span>MOVIE</span>STUDIO</a></h1><?php
//session_start();
//include "connection.php";
include "header1.php";

?>

		
			<br />
<br />


		<form action="logincheck.php" method="post">
		
		<br /><br />  
        <?php
			if(isset($_GET['msg']))
			echo $_GET['msg'];
			?>
			<br /><br /><br /><br /><br />
			<label style="font-size:36px; color:#ffc11e;">Movie&nbsp;Assistant&nbsp;Admin<br /><br /><br /><br /></label>
			<!--<tr>
			
			<th style="font-size:36px; color:#FFFFFF;">Movie&nbsp;Assistant&nbsp;Admin<br /><br /><br /></th>
			</tr>-->			
			<table width="100" height="90" align="center" cellpadding="7">
			
			<tr><td style="font-size:24px; color:#ffffff">Admin&nbsp;Name:</td>
			<td><input type="text" name="username"></td>
			</tr>
			<tr>
			<td style="font-size:24px;  color:#ffffff">Password:</td>
			<td><input type="password" name="password"></td>
			</tr>
			<tr>
			<td>&nbsp;</td>
			<td ><input type="submit" value="submit" style="font-size:24px" ></td>
			</tr>
			</table><br /><br /><br /><br /> <br /><br /><br /><br /> <br /><br /><br /><br /> 
		</div>
		</div>
		</div>
			<br />
<br />

	

