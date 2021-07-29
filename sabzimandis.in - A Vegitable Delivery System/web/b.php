
<!DOCTYPE HTML>
<html>
<head>
<?php include "include/title.php";?>
</head>
<body>
<div class="page-container">
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
     <h2>Blank Page</h2>
     <div class="blankpage-main">



                    <div class="thumb-image">
                       <img src="images/pro10.jpg" data-imagezoom="true" class="img-responsive" draggable="false">
                     </div>

           <div class="desc1 span_3_of_2">
           <h3>aaaaaa</h3>
           <span class="brand">Brand: <a href="#">sjjdfdfdjf </a></span>
           <br>


             <div class="price">
               <span class="text">Price:</span>
               <span class="price-new">00000</span><span class="price-old">00000</span>


             </div>


           <div class="btn_form">
             <a href="addtocart.php?id=3">Add to Cart</a>
           </div>

            </div>

                 <div class="clearfix"></div>

                 <div class="single-bottom1">
           <h6>Details</h6>
       <p style="word-wrap:break-word;">aljdfsjjjjjjjjkkjlsfdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</p>
         </div>
   <div class="clearfix"></div>

          <div class="clearfix"> </div>












                <h5></h5>

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
   <div class="sidebar-menu">
     <?php include "include/sidenav.php";?>
  </div>
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
