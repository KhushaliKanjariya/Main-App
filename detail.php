
<?php
include "header.php";
include "connection.php";

if(isset($_SESSION['done']))
unset($_SESSION['done']);

$movie_id=$_GET['movie_id'];
$_SESSION['movie_id']=$_GET['movie_id'];
$dt1="select * from shows where movie_id=$movie_id and show_time>CURRENT_TIME";
$data1 = mysqli_query($db,$dt1);


	$movie_id=$_GET['movie_id'];
 	$dt="select * from movie where movie_id=".$movie_id;
	$data = mysqli_query($db,$dt);
    while($info = mysqli_fetch_array( $data ))
	{
        $movie_image = $info['movie_image'];
        $movie_name = $info['movie_name'];
        $movie_rel = $info['movie_rel'];
        $movie_runtime = $info['movie_runtime'];
        $movie_type = $info['movie_type'];
        $movie_lan = $info['movie_lan'];
        $movie_desc = $info['movie_desc'];
       
?>          
        <div class="item">      
            
            <ul><span><a href="#" style="text-decoration:none" ><img src="poster/<?php echo $info['movie_image']; ?>" alt="img" height="300" width="280">
<br />
<div style="font-size:24px"> 
<br/>

<?php echo $movie_name; ?><br /><br />
Release Date:  <?php echo $movie_rel; ?><br /><br />
<?php echo $movie_runtime; ?>     <?php echo $movie_type; ?><br /><br />
<?php echo $movie_lan; ?><br /><br />
<div style="font-size:18px;">Description:</div>
<div style="font-size:16px;"> <?php echo $movie_desc; ?><br /><br /><br /></div>

<ul>
</ul>

<?php 
/*
$movie_id=$_GET['movie_id'];
$dt2="select * from shows where show_time=$show_time and $price>CURRENT_TIME";
$data2 = mysqli_query($db,$dt2);

echo $dt2;
*/
?>
<h4>SHOW TIMES</h4>
        </div>          

<?php   
     
    }
?>   


<link id="stylesheet" rel="stylesheet" type="text/css" href="css2/zInput_default_stylesheet.css">
<script src="js/jquery.min.js"></script>
<script src="extlibs/fastclick/lib/fastclick.js"></script>
<script src="js/zInput.js"></script>
<script>

 
$("#affected").zInput();

</script>

 <div id="affected">
 
 				
                <?php
                while($row = mysqli_fetch_array($data1))
                {
                    ?>
					
					
                         <input type="radio" id="set2"  name="set 2" value="<?php echo $row['show_id']; ?>" title="<?php echo $row['show_time']; ?>" ><span style="font-size:30px;margine-top:10px;"><?php echo "RS:".$row['price']; ?></span></br>
						 
						
                <?php
                }
                ?>
         </div>
                  <script>
                    $(function() {
    FastClick.attach(document.body);
});

$("#affected").zInput();
</script>   
           <input onclick="takeData()" type="button" value="Book Ticket" style="background-color:#ffc11e; font-size:xx-large; border:#FFFFFF; border-style:solid;"/>   
            </div>
<script src="js/jquery-2.2.3.min.js"></script>
             <script>
       

        function takeData() {
            
            if (( ! $("input").is(':checked') )) {
                alert("Please select time");
            } else {
               // alert($("#set2:checked").val());
                shid = $("#set2:checked").val();
                $.ajax({
                       url: 'showid_session.php',
                       data: {"shid":shid},
                       type: 'post',
                       success:function(data){
                        window.location.replace("booking2.php");
                     }
});
            }
        }
        </script>
<?php include("footer.php");?>