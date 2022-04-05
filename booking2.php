<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include ("header.php");
include ("connection.php");

if(!isset($_SESSION['user_nm']))
{
	$msg = "Pls Login to book the ticket";
	header("Location:login.php?msg=$msg");
}
else
{

$shid=$_SESSION['showid'];
$dt="select seatno from booking where showid=$shid";
$seatres = mysqli_query($db,$dt);

$seatarr=[];

while($row = mysqli_fetch_array($seatres))
{
$seatarr[] = $row[0];
}
//print_r($seatarr);
?>
<!DOCTYPE html>
<html lang="zxx">

<head>



    <title>Movie Seat Selection Flat Responsive Widget Template :: w3layouts</title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Movie Seat Selection a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->
    <!-- Index-Page-CSS -->
    <link rel="stylesheet" href="css2/style.css" type="text/css" media="all">
    <!-- //Custom-Stylesheet-Links -->
    <!--fonts -->
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <!-- //fonts -->
</head>

<body onLoad="onLoaderFunc()">
 	<h1>Movie Seat Selection</h1>
    <div class="container">

         <div class="w3ls-reg">
            <!-- input fields -->
            <div class="inputForm">
                <h2>fill the required details below and select your seats</h2>
                <div class="mr_agilemain">
                    <div class="agileits-left">
                        <label> Name
                            <span>*</span>
                        </label>
                        <input type="text" id="Username" required>
                    </div>
                    <div class="agileits-right">
                        <label> Number of Seats
                            <span>*</span>
                        </label>
                        <input type="number" id="Numseats" required min="1">
                    </div>
                </div>
                <button onClick="takeData()">Start Selecting</button>
            </div>
               
            <!-- //input fields -->
            <!-- seat availabilty list -->

          
            
            <ul class="seat_w3ls">
                <li class="smallBox greenBox">Selected Seat</li>

                <li class="smallBox redBox">Reserved Seat</li>

                <li class="smallBox emptyBox">Empty Seat</li>
            </ul>
            <!-- seat availabilty list -->
            <!-- seat layout -->
            <div class="seatStructure txt-center" style="overflow-x:auto;">
                <table id="seatsBlock">
                    <p id="notification"></p>
                    <tr>
                        <td></td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td></td>
                        <td>6</td>
                        <td>7</td>
                        <td>8</td>
                        <td>9</td>
                        <td>10</td>
                        <td>11</td>
                        <td>12</td>
                    </tr>
                    <tr>
                        
                        <?php 
                        $c='A';
                        for($j=1;$j<=10;$j++)
                        {
                           echo "<tr><td>$c</td>";
                        for($i=1;$i<=12;$i++)
                        {
                            $sn =$c.$i;
                            if(!(in_array($sn,$seatarr)) && $c!='A')
                            {
                            ?>
                        <td>
                            <input type="checkbox" class="seats" value="<?php echo $sn;?>" >
                        </td>
                        
                            <?php
                        }
                        else
                        {
                            ?>

                        <td> 
                         <div class="seatred" ></div>
                        </td>
                        <?php
                        }

                           if($i==5)
                           echo "<td></td>";
                            }
                            $c++;
                            echo " </tr>";

                            if($j==5)
                            echo '<tr class="seatVGap"></tr>';
                        }
                            ?>
                   
                   </table>
                <div class="screen">
                    <h2 class="wthree">Screen this way</h2>
                </div>
                <button onClick="updateTextArea()">Confirm Selection</button>
            </div>
            <!-- //seat layout -->
            <!-- details after booking displayed here 
             
            <div class="displayerBoxes txt-center" style="overflow-x:auto;">-->
            
			<form action="saveticket.php" method="post">
                <table class="Displaytable w3ls-table" width="100%">
                    <tr>
                        <th>Name</th>
                        <th>Number of Seats</th>
                        <th>Seats</th>
                    </tr>
                    <tr>
                        <td>
                            <textarea id="nameDisplay" name="vnm"></textarea>                        </td>
                        <td>
                            <textarea id="NumberDisplay" name="no_of_seat"></textarea>                        </td>
                        <td>
                            <textarea id="seatsDisplay" name="seats"></textarea>                        </td>
                    </tr>
                    <tr> 
                      <td colspan="3"><input type="submit" name="submit" id="submit" class="button" value="Submit"/></td>
                    </tr>
                </table>
		  </form>
            <!-- </div>
            //details after booking displayed here -->
        </div>
    </div>
 
    <div class="copy-wthree">
        <p>Copyright  © <a href="#">Movie Studio</a> All Rights Reserved</a>
        </p>
    </div>
    <!-- js -->
    
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- script for seat selection -->
    <script>
        function onLoaderFunc() {
            $(".seatStructure *").prop("disabled", true);
            $(".displayerBoxes *").prop("disabled", true);
        }

        function takeData() {
            
            if (($("#Username").val().length == 0) || ($("#Numseats").val().length == 0)) {
                alert("Please Enter your Name and Number of Seats");
            } else {
                $(".inputForm *").prop("disabled", true);
                $(".seatStructure *").prop("disabled", false);
                

               
                document.getElementById("notification").innerHTML =
                    "<b style='margin-bottom:0px;background:#ff9800;letter-spacing:1px;'>Please Select your Seats NOW!</b>";
            }
        }


        function updateTextArea() {

            if ($("input:checked").length == ($("#Numseats").val())) {
                $(".seatStructure *").prop("disabled", true);

                var allNameVals = [];
                var allNumberVals = [];
                var allSeatsVals = [];

                //Storing in Array
                allNameVals.push($("#Username").val());
                allNumberVals.push($("#Numseats").val());
                $('#seatsBlock :checked').each(function () {
                    allSeatsVals.push($(this).val());
                });

                //Displaying 
                $('#nameDisplay').val(allNameVals);
                $('#NumberDisplay').val(allNumberVals);
                $('#seatsDisplay').val(allSeatsVals);
            } else {
                alert("Please select " + ($("#Numseats").val()) + " seats")
            }
        }


        function myFunction() {
            alert($("input:checked").length);
        }

        /*
        function getCookie(cname) {
            var name = cname + "=";
            var ca = document.cookie.split(';');
            for(var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }
        */


        $(":checkbox").click(function () {
            if ($("input:checked").length == ($("#Numseats").val())) {
                $(":checkbox").prop('disabled', true);
                $(':checked').prop('disabled', false);
            } else {
                $(":checkbox").prop('disabled', false);
            }
        });
    </script>
   
    <!-- //script for seat selection -->

<?php
}
?>
</body>

</html>