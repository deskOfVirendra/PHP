
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
 include "include/conn.php";
 $orderid = $_GET['orderid'];

//if(!isset($_SESSION['dboy'])){
 //header('location:dboylogin.php');
//}else{
///  $dboy=$_SESSION['dboy'];
//}








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
  	background:#007eff;
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
    	<div class="blankpage-main">
    	<h2>order details</h2>
<?php if(isset($error)) echo $error;?>
<div class="style-block" style="min-width:100%;">














<?php

$selectpqq="SELECT DISTINCT productname from cart where orderid = '$orderid'";
$resultpq=mysqli_query($conn,$selectpqq);
if(mysqli_num_rows($resultpq)>0) {
?>
<table class="table table-striped table-bordered table-hover dataTables-example">
<tr>
    <th>Name</th>
    <th>No's</th>
    <th>Price</th>
  </tr>
<?php



             while($rowpq=mysqli_fetch_assoc($resultpq)){
               $productname=$rowpq['productname'];
?>


<?php
$select="SELECT COUNT(*), productname, price, image, newname, id, productid from cart where productname='$productname' AND orderid = '$orderid'";
$result=mysqli_query($conn,$select);
if(mysqli_num_rows($result)>0){
             while($row=mysqli_fetch_assoc($result)){
               //$category=$row['category'];
               $productname=$row['productname'];
               $countdowner=$row['COUNT(*)'];
               //$brand=$row['brandname'];
               //$mrp=$row['mrp'];
               $price=$row['price'] * $row['COUNT(*)'];
               $img=$row['image'];
               $newname=$row['newname'];
               $id=$row['id'];
               $productid=$row['productid'];
               $totalprice = $totalprice + $price;
               if($totalprice < 300){
                $deliverycharge = 10;
               }else{
                $deliverycharge = 00;
               }
?>
<?php
if($productname != ""){
  ?>
  <tr>
    <td><a href="details.php?id=<?php echo $productid;?>"><?php echo $productname."($newname)"; ?></a></td>
    <td><?php echo "$countdowner";?></td>
    <td><?php echo "Rs ".$price."/- ";?></td>
  </tr>
  <?php
 }
?>

           <?php
           }

           }
?>

<?php
             }
             ?>
  </table>
  Total Rs. <?php echo $totalprice;?>/- </br>
   delivery charge Rs. <?php echo $deliverycharge;?>/-
  
  </br></br>
<h3>
  <?php
}






$selectpp="SELECT * from allorders WHERE orderid='$orderid'";
$resultpp=mysqli_query($conn,$selectpp);
if(mysqli_num_rows($resultpp)>0){
             while($rowpp=mysqli_fetch_assoc($resultpp)){
              echo $rowpp['stetus'];
              echo " By ";
              echo $rowpp['deliveredby'];
             }
            }












?>

</h3>



















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
