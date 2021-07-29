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
$thedeliverytime=$_GET['deliverytime'];
$cityname=$_GET['cityname'];
$thedeliverycharge=$_GET['deliverycharge'];
$thisordersid = date("Ymdhisa");

if(isset($deliveryaddress)){


$sql = "INSERT INTO allorders (orderid, mobileno, deliveryaddress, total, deliverytime, deliverycharge, cityname)
VALUES ('$thisordersid', '$user', '$deliveryaddress', '$thetotalprice', '$thedeliverytime', '$thedeliverycharge', '$cityname')";

if ($conn->query($sql) === TRUE) {
  
$url1 = "http://api.msg91.com/api/sendhttp.php?sender=SabziS&route=4&mobiles=".$user." &authkey=186512A1XC9MqadU5e4c3017P1&encrypt=&country=91&message=Your order is placed successfully on sabziday. delivery time is ". $thedeliverytime ."";
$xml = file_get_contents($url1);

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
     <h2> Cart</h2>
     
   
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

$selectpqq="SELECT DISTINCT productname from cart where user='$user' AND deliverto = ''";
$resultpq=mysqli_query($conn,$selectpqq);
if(mysqli_num_rows($resultpq)>0){
?>
<table>
<tr>
    <th>Name</th>
    <th>No's</th>
    <th>Price</th>
    <th>Action</th>
  </tr>
<?php




             while($rowpq=mysqli_fetch_assoc($resultpq)){
               $productname=$rowpq['productname'];
?>


<?php
$select="SELECT COUNT(*), productname, price, image, newname, id, productid from cart where user='$user' AND productname='$productname' AND deliverto = ''";
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
    <td><?php echo "$countdowner";?>

<?php
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>



<a href="addtocart.php?id=<?php echo $productid; ?>&url=checkout.php"> <?php echo " <i class='fa fa-plus' style='color: green;'></i>"; ?> </a>



    </td>
    <td><?php echo "Rs ".$price."/- ";?></td>
    <td><a href="addtocart.php?del=<?php echo $id;?>">X</a></td>
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
  
  
  <?php
  $select="SELECT * from userid where mobileno='$user'";
  $result=mysqli_query($conn,$select);
  if(mysqli_num_rows($result)>0){
               while($row=mysqli_fetch_assoc($result)){
                 $address=$row['address'];
             }
            }
  ?>
  
  </br></br>
             <div class="style-block" style="min-width:100%;">
          <form action="" method="GET" enctype="multipart/form-data">
  <input type="hidden" value="<?php echo $totalprice;?>" name="totalprice">
  <input type="hidden" value="<?php echo $_REQUEST['city'];?>" name="cityname">
  <input type="hidden" value="<?php echo $deliverycharge;?>" name="deliverycharge">
            <div>
<label>
<select id="timeing" name="deliverytime" required>
  <option value="">Delivery Time</option>
  <option value="08 to 09 Am">08 to 09 Am</option>
  <option value="08 to 09 Am">09 to 10 Am</option>
  <option value="10 to 11 Am">10 to 11 Am</option>
  <option value="11 to 12 PM">11 to 12 PM</option>
  <option value="12 to 01 PM">12 to 01 PM</option>
  <option value="04 to 05 PM">04 to 05 PM</option>
  <option value="05 to 07 PM">05 to 07 PM</option>
</select>
</label>
              <label>Address & Instructions
                <textarea placeholder="address & Instructions" type="text" name="address" rows=3 cols=auto required><?php echo $address;?></textarea>
              </label>
            </div>
    <?php
  if($productname != ""){
    ?>
            <div>
              <input type="submit" name="submit" value="ऑर्डर प्लेस करा">
            </div>
  <?php
  }
  ?>
          </form>
          </br>
          </br>
          </div>
             <?php
            }

?>
 
<label>Pay Using <a href="https://pmny.in/PI7RYYw7qIcA">PayUMoney</a><br> or COD</label>
 <!--
 <a href="myorders.php"><div style="word-wrap: break-word;padding: 20px;text-align: center;margin: 20px 20px;border-radius: 5px;background: #007eff;color: #fff;">All Orders</div></a>
 -->

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
