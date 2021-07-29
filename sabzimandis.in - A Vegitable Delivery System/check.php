<?php
include "conn.php";
session_start();
if(!isset($_COOKIE['user'])){
  header("location:login.php");
  $user=$_COOKIE['user'];
}

           $user=$_COOKIE['user'];
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
     <div class="blankpage-main" style="margin:auto;">
       <div class="grid-container" style="display:inline-flex;flex-direction: column;justify-content:space-between;">
     			 <h1></h1>

           <?php

           $select="SELECT * from cart where user='$user'";
           $result=mysqli_query($conn,$select);
           if(mysqli_num_rows($result)>0){
                        while($row=mysqli_fetch_assoc($result)){
                          //$category=$row['category'];
                          $productname=$row['productname'];
                          //$brand=$row['brandname'];
                          //$mrp=$row['mrp'];
                          $price=$row['price'];
                          $img=$row['image'];
                      $newname=$row['newname'];
                          $id=$row['id'];
                          $address=$row['deliverto'];
           ?>


           <div style="padding: 10px;
               margin: 5px 10px;border-radius:5px;">
           <a href="details.php?id=<?php echo $id;?>">
           <img src="<?php echo "admin/".$img;?>" style="width:200px;max-height:300px;"></img>

           </br>
           <div style="border:1px solid #007eff;">

                <h4 style="color:#007eff"><?php echo $productname."($newname)"; ?></h4>

                <h6><?php// echo $brand;?></h6>

                 <h5><center><?php echo "Price : RS <u>".$price."</u>/- ";?></center></h5>

                      <h6 style="color:#a9a9a9"><center><?php //echo "RS <del>".$mrp."</del>/-";?></center></h6>
                      <a href=""><button style="width:auto;color:#fff;background-color:#007eff;border:1px solid #007eff;font-size:12px; ">Place order</button></a>
                      <h6 style="color:#a9a9a9"><center><?php //echo "RS <del>".$mrp."</del>/-";?></center></h6>
                      <a href=""><button style="width:auto;color:#fff;background-color:#007eff;border:1px solid #007eff;font-size:12px; ">Remove</button></a>
                      <p style="font-size:12px;word-wrap:break-word;">Deliverd To : <?php echo $address; ?></p>
           </div>
           </a>
           </div>


           <?php
           }
           }
            ?>

           </div>


   </div>
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
