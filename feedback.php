<?php include "header.php";
include "connection.php";?>
		
		<div id="">
		<table align="center" width="500" height="500"><tr>
			<div id="mid_title">
				<center><td colspan="2" align="center" style="font-size:50px" id="footer_logo"><span>F</span>eedback</a></h1>
			
				</td></center><br /></tr>
				<tr>
				<?php	if(isset($_GET['msg1']))
						echo $_GET['msg1'];
			?></tr>
				
			</div>
		</div> <!-- end of middle -->
		<div id="">
	
			<div class="col_w420 float_l">
				<div id="contact_form">

					<form method="post" name="contact" action="savefeedback.php">
	<tr>
	<td><label for="author" style="font-size:18px; color:#FFFFFF;">Name:</label></td>
	<td><input type="text" maxlength="40" id="author" class="input_field" name="name" /></td>
	</tr>
	<tr>
	<td><label for="email" style="font-size:18px; color:#FFFFFF;">Email:</label></td> 
	<td><input type="text" maxlength="40" id="email" class="input_field" name="email" /></td>
	</tr>
								
	
	<tr>
	<td><label for="text" style="font-size:18px; color:#FFFFFF;">Message:</label></td> 	
	<td><textarea id="text" name="message" rows="5" cols="22" class="required"></textarea></td>
	</tr>
	
	<tr>
	<td></td>
	<td><input type="submit" value="Send" id="submit" name="submit" class="submit_btn float_l" style="font-size:18px" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="reset" value="Reset" id="reset" name="reset" style="font-size:18px"/></td>
	</tr>
						
	</form>
	</table>
				</div> 
			</div>
				
			<div class="cleaner"></div>
		</div> <!-- end of main -->
	
	</div> <!-- end of fp wrapper -->
</div> <!-- end of fp 100% wrapper -->
<?php include "footer.php";?>