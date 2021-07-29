<?php
include "conn.php";
session_start();
if(!isset($_COOKIE['city'])){
header("location:city.php");
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

   <!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">
   <div class="blank">
     <h2>Contact Us</h2>
     <div class="blankpage-main">


       <div class="row single" style="flex-wrap:wrap;">

<h4>Nirmiti Multi trade Multi services </h4>
<h4>Near Barshi Naka, DIC road , Osmanabad,413501.</h4>
<h4>Land line 02472-220222 </h4>
<h4>Mo .  8888464748 </h4>
<h4>Whatsapp 9422464748 </h4>
<h4>Email bhansalinr@gmail.com</h4>


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
