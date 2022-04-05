<?php include "header.php"; 

	if($_SESSION['a_nm'] == "")
	{
		$msg = "<h3><center>Please Login...</center></h3> ";
		header("Location:login.php?msg=$msg");
	}else
	{

?>



			<div class="con_tit_02" style="text-align:center; color:#FFFFFF; font-size:xx-large">
			<br><br><br><br><br><br>
						WELCOME TO ADMIN PANEL...
						
					
					<div class="cleaner"></div>
		  </div>
			<br><br><br><br><br><br><br><br><br><br>
		</div> <!-- end of middle -->
		</div> <!-- end of fp wrapper -->
</div> <!-- end of fp 100% wrapper -->

<?php 
}
include "footer.php"; ?>


