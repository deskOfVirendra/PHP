
<?php
session_start();
if(!isset($_SESSION['deliveryboy'])){
        header("location:deliveryboylogin.php");
}

$deliveryboy = $_SESSION['deliveryboy'];
 ?>
<?php
 include "include/conn.php";


session_start();

//if(!isset($_SESSION['dboy'])){
 //header('location:dboylogin.php');
//}else{
///  $dboy=$_SESSION['dboy'];
//}



$sqlasas = "SELECT * FROM deliveryboy WHERE password = '$deliveryboy'";
$resultasas = $conn->query($sqlasas);

if ($resultasas->num_rows > 0) {
    // output data of each row
    while($rowasas = $resultasas->fetch_assoc()) {
        $username = $rowasas["username"];
    }
}




if(isset($_GET['id']) && isset($_GET['stetus'])){
  $id=$_GET['id'];
  $stetus=$_GET['stetus'];
  $sql = "UPDATE allorders SET stetus='$stetus', deliveredby='$username' WHERE orderid='$id'";


                  if ($conn->query($sql) === TRUE) {
                      $error= "order modified successfully";
                    //  header("dboy.php");
                  } else {
                      echo "Error: " . $sql . "<br>" . $conn->error;
                  }

}














?>
<!DOCTYPE HTML>
<html>
<head>
  <?php include "include/title.php"; ?>
  <style>


  .style-block input[type="text"], .style-block input[type="password"],.style-block input[type="email"],.style-block textarea {
      font-size: 0.9em;
      padding: 10px 20px;
      min-width: 100%;
      color:#686967;
      outline: none;
      border: 1px solid #D3D3D3;
       border-radius: 5px;
  	-ms-border-radius: 5px;
  	-moz-border-radius: 5px;
  	-o-border-radius: 5px;
      background:#F5F5F5;
      margin: 0em 0em 1.5em 0em;
  }
  .style-block input[type="submit"] {
      border: none;
      outline: none;
      cursor: pointer;
      color: #fff;
      background: #337AB7;
      width: 100%;
      margin: 0 auto;
      border-radius: 3px;
      padding: 0.5em 1em;
      font-size: 1em;
      display: block;
      font-family: 'Carrois Gothic', sans-serif;
  }
  .style-block input[type="submit"]:hover{
  	background:#68AE00;
  	transition: 0.5s all;
  	-webkit-transition: 0.5s all;
  	-moz-transition: 0.5s all;
  	-o-transition: 0.5s all ;
  	-ms-transition: 0.5s all;
  }
  .style-block label{
    width:80%;
  }
  </style>
</head>
<body>
<div class="page-container">
   <div class="left-content" style="min-width:100%;">
	   <div class="mother-grid-inner">
            <!--header start here-->
			<?php //include "include/header.php"; ?>
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop();
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });

		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">
    <div class="blank">
    	<h2>all orders (<?php echo $username; ?>)</h2>
    	<div class="blankpage-main">
<?php if(isset($error)) echo $error;?>
<div class="style-block" style="min-width:100%;">









<?php
$sql = "SELECT * FROM allorders WHERE deliveredby = '' OR deliveredby = '$username' ORDER BY date desc";

if($result = mysqli_query($conn, $sql)){
if(mysqli_num_rows($result) > 0){
echo "<table id='users-table' class='table table-striped table-bordered table-hover dataTables-example'>";
echo "<tr>";
echo "<th>orderid</th>";
echo "<th>customer No</th>";
echo "<th>Delivery Address</th>";
echo "<th>total</th>";
echo "<th>delivery charge</th>";
echo "<th>status</th>";
echo "</tr>";
while($row = mysqli_fetch_array($result)){
$id=$row['id'];
$orderid=$row['orderid'];
$stetus=$row['stetus'];

echo "<tr>";
                echo "<td><a href='oneorder.php?orderid=" . $row['orderid'] . "'>" . $row['orderid'] . "</a></td>";
                echo "<td>" . $row['mobileno'] . "</td>";
                echo "<td>" . $row['deliverytime'] . " at " . $row['deliveryaddress'] . "</td>";
                echo "<td>" . $row['total'] . "/-</td>";
                echo "<td>" . $row['deliverycharge'] . "/-</td>";
                

if($stetus == '' || $stetus == 'processing'){
                echo "<td>" . " <select name='forma' onchange='location = this.value;'>
                <option value='' selected>Stetus " . $stetus . " by " . $row['deliveredby'] . "</option>
                <option value='allorders.php?id=$orderid&stetus=processing'>Processing</option>
                <option value='allorders.php?id=$orderid&stetus=delivered'>Delivered</option>
                <option value='allorders.php?id=$orderid&stetus=canceled'>Canceled</option>
               </select>" . "</td>";
}else {
  echo "<td>" . $stetus . " by " . $row['deliveredby'] . "</td>";
}



echo "</tr>";
}
echo "</table>";
// Free result set
mysqli_free_result($result);
} else{
echo "No orders";
}
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
?>











  </div>






</div>
          	</div>
    </div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
<?php include "include/footer.php";?>
<!--COPY rights end here-->
</div>
</div>
<!--slider menu-->
    <!--<div class="sidebar-menu">
		  <?php //include "include/sidenav.php";?>
	 </div>-->
	<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<script>
var toggle = true;

$(".sidebar-icon").click(function() {
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>
