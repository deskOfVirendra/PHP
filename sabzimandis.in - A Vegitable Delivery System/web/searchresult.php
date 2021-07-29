<?php
include "conn.php";
session_start();
//if(!isset($_SESSION['user'])){
  //header("location:login.php");
//}




 if(isset($_REQUEST['paddy'])){
 $paddy=$_REQUEST['paddy'];}
else{
  $paddy='';
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
  border: 2px dashed #68AE00;
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
     <h2></h2>
     <div class="blankpage-main" style="margin:auto;">
<div class="grid-container" style="display:inline-flex;flex-wrap:wrap;justify-content:space-between;">


<?php

$select ="SELECT * FROM products where (productname LIKE '%$paddy%') or (newname LIKE '%$paddy%') or (brandname LIKE '%$paddy%') or (description LIKE '%$paddy%') or (category LIKE '%$paddy%') order by id desc ;";
$result=mysqli_query($conn,$select);
if(mysqli_num_rows($result)>0){
             while($row=mysqli_fetch_assoc($result)){
               $category=$row['category'];
               $productname=$row['productname'];
               $brand=$row['brandname'];
               $mrp=$row['mrp'];
               $price=$row['price'];
               $img=$row['img1'];
               $newname=$row['newname'];
               $id=$row['id'];
?>


<div style="padding: 10px;
    margin: 5px 10px;border-radius:5px;">
<a href="details.php?id=<?php echo $id;?>">
<img src="<?php echo "admin/".$img;?>" style="width:200px;max-height:300px;"></img>

</br>
<div style="border:2px dashed #68AE00;">

     <h4 style="color:#68AE00"><?php echo $productname."($newname)"; ?></h4>

     <h6><?php echo $brand;?></h6>

      <h5><center><?php echo "RS <u>".$price."</u>/- ";?></center></h5>

           <h6 style="color:#a9a9a9"><center><?php echo "RS <del>".$mrp."</del>/-";?></center></h6>
</div>
</a>
</div>


<?php
}
}
 ?>

</div><!--grid container-->


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
