<?php
include "conn.php";
session_start();
//if(!isset($_COOKIE['user'])){
  //header("location:login.php");
//}

$id=$_GET['id'];
    $select ="SELECT * FROM products where id='$id'";
    $result=mysqli_query($conn,$select);
    if(mysqli_num_rows($result)>0){
                 while($row=mysqli_fetch_assoc($result)){
                        $productname=$row['productname'];
                        $brandname=$row['brandname'];
                        $price=$row['price'];
                        $mrp=$row['mrp'];
                        $image=$row['img1'];
                        $image1=$row['img2'];
                        $desc=$row['description'];
                        //$newname=$row['newname'];
                        $image2=$row['img3'];
                        $image3=$row['img4'];
                        $id=$row['id'];
                        $stetus=$row['stetus'];
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
     <h2>category name</h2>
     <div class="blankpage-main">


       <div class="row single">
         <div class="det">
           <div class="single_left">
           <div class="grid images_3_of_2">
             <div class="flexslider">
                       <!-- FlexSlider -->
                     <script src="js/imagezoom.js"></script>
                       <script defer="" src="js/jquery.flexslider.js"></script>
                     <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen">

                     <script>
                     // Can also be used with $(document).ready()
                     $(window).load(function() {
                       $('.flexslider').flexslider({
                       animation: "slide",
                       controlNav: "thumbnails"
                       });
                     });
                     </script>
                   <!-- //FlexSlider-->



                  <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 1200%; transition-duration: 0.6s; transform: translate3d(-864px, 0px, 0px);"><li data-thumb="admin/<?php echo $image;?>" class="clone" aria-hidden="true" style="width: 288px; float: left; display: block;">
       								   <div class="thumb-image"> <img src="admin/<?php echo $image;?>" data-imagezoom="true" class="img-responsive" draggable="false"> </div>
       								</li>
       								<li data-thumb="admin/<?php echo $image1;?>" class= style="width: 288px; float: left; display: block;width: 674px;float: left;display: block;">
       									<div class="thumb-image"> <img src="admin/<?php echo $image1;?>" data-imagezoom="true" class="img-responsive" draggable="false"> </div>
       								</li>
       								<li data-thumb="admin/<?php echo $image2;?>" style="width: 288px; float: left; display: block;" class="">
       									 <div class="thumb-image"> <img src="admin/<?php echo $image2;?>" data-imagezoom="true" class="img-responsive" draggable="false"> </div>
       								</li>
       								<li data-thumb="admin/<?php echo $image3;?>" style="width: 288px; float: left; display: block;" class="flex-active-slide">
       								   <div class="thumb-image"> <img src="admin/<?php echo $image3;?>" data-imagezoom="true" class="img-responsive" draggable="false"> </div>
       								</li>

       							  </ul></div>



                      <ul class="flex-direction-nav">
                        <li class="flex-nav-prev"><a class="flex-prev" href="#">Previous</a></li>
                        <li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li></ul>
                      </div>
       		 </div>
                 <div class="desc1 span_3_of_2">
      					<h3><?php echo $productname."()"; ?></h3>
      					<span class="brand">Brand: <a href="#"><?php echo $brandname; ?> </a></span>
      					<br>
      						<div class="price">
      							<span class="text">Price:</span>
      							<span class="price-new"><?php echo $price."/-";?></span><span class="price-old"><?php echo $mrp."/-";?></span>
                </div>
                



<?php 
if ($stetus == "In Stock"){
  ?>
  
  
     <div class="btn_form">
<?php
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
 
$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

?>

<?php
if(!isset($_COOKIE['user'])){
?>
  <a href="login.php">
<?php
  echo "Login to Buy";

}else{
  ?>
    <a href="addtocart.php?id=<?php echo $id; ?>&url=<?php echo $url; ?>">
  <?php
  echo "Add to Cart";

}
?>
                </a>
                </div>
                
  
<?php
}else {
  ?>
  <div class="btn_form">
    <a href="#" style="background:#007eff;">
  <?php
echo "Out Of Stock";
?>
</a>
</div>
<?php
}
?>





            </div>
                 <div class="clearfix"></div>
                </div>
             <div class="single-bottom1">
           <h6>Details</h6>
           <p class="prod-desc" style="word-wrap:break-word;"><?php echo $desc;?></p>
         </div>
 <div class="clearfix"></div>
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
