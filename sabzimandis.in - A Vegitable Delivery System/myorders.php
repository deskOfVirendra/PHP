<?php
include "conn.php";
session_start();
if(!isset($_COOKIE['user'])){
  header("location:login.php");
  $user=$_COOKIE['user'];
}

$user=$_COOKIE['user'];
 ?>


<?php

$deliveryaddress=$_GET['address'];
$thetotalprice=$_GET['totalprice'];
$thedeliverycharge=$_GET['deliverycharge'];
$cityname=$_GET['cityname'];
$thisordersid = date("Ymdhisa");
if(isset($deliveryaddress)){


$sql = "INSERT INTO allorders (orderid, mobileno, deliveryaddress, total, deliverycharge, cityname)
VALUES ('$thisordersid', '$user', '$deliveryaddress', '$thetotalprice', '$thedeliverycharge', '$cityname')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
}


$sqlpp = "UPDATE cart SET deliverto = '$deliveryaddress', orderid = '$thisordersid' WHERE user = '$user' AND deliverto = ''";
if ($conn->query($sqlpp) === TRUE) {
  //   echo "Record updated successfully";
  header("location:myorders.php?stetus=order placed successfully");
} else {
  //  echo "Error updating record: " . $conn->error;
}
}

?>

<!DOCTYPE HTML>
<html>
<head>
<?php include "include/title.php";?>
<style>
.sidebar-menu{
  position: fixed;
background: #000;
}
.menu{
  background:#000;

}

.grid-container {
  display: grid;
  grid-template-columns: auto auto auto auto;
  grid-gap: 10px;
  align-content: center;
  background-color: transparent;
  padding: 10px;
}

.grid-container > div {
  background-color: rgba(255, 255, 255, 0.8);
  border: 1px solid #007eff;
  text-align: center;
  font-size: 30px;

}

.grid-container  > img {
  object-fit: cover;
width: 200px;
    display: block;
    max-width: 100%;


}



</style>

</head>
<body>
  <?php 
  if(isset($_GET['stetus'])){
   ?> 
   
   
<script>
    alert("your order is placed successfully");
</script>
   
   <?php
  }
  ?>

<div class="page-container" style="overflow:hidden;">
  <div class="left-content">
    <div class="mother-grid-inner">
           <!--header start here-->
       <?php include "include/header.php";?>
<!--heder end here-->
<!-- script-for sticky-nav -->

   <!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">
   <div class="blank">
     <h2> All Orders</h2>
     
   
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
.inner-block {
    padding: 1em 1em 2em 1em;
    background: #fff;
}
</style>

  <?php

$selectpp="SELECT * from allorders where mobileno='$user'";
$resultpp=mysqli_query($conn,$selectpp);
if(mysqli_num_rows($resultpp)>0){
             while($rowpp=mysqli_fetch_assoc($resultpp)){
               $orderid=$rowpp['orderid'];
               $totalprice=0;

?>
<h4>Order No: <a href="oneorder.php?orderid=<?php echo $orderid;?>"><?php echo $orderid;?></a>
 Placed On: <?php
$datedd=$rowpp['ordertime'];
$date=date_create($datedd);
echo date_format($date,"d/m/Y H:i:s"); 
?></h4>
</br>
<?php
          }
?>

           <?php
           }
           else{
             echo "<h3>No orders placed yet</h3>";
           }
?>
</div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
<?php include "include/footer.php"; ?>
<!--COPY rights end here-->
</div>
</div>
<!--slider menu-->

 <div class="clearfix"> </div>
<!--slider menu-->
    <div class="sidebar-menu">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span>
			      <!--<img id="logo" src="" alt="Logo"/>-->
			  </a> </div>
		    <div class="menu">
		      <?php include "include/sidenav.php";?>
		    </div>
	 </div>
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
