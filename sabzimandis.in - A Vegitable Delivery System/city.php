<?php
include "conn.php";
session_start();
//if(!isset($_COOKIE['user'])){
  //header("location:login.php");
//}
if(isset($_REQUEST['city'])){
      $_COOKIE['city'] = $_REQUEST['city'];


      
$cookie_name = "city";
$cookie_value = $_REQUEST['city'];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day



      header("location:index.php");
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
  <div class="left-content" style="min-width:100%;">
    <div class="mother-grid-inner">
           <!--header start here-->
       <?php //include "include/header.php";?>
<!--heder end here-->
<!-- script-for sticky-nav -->

   <!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">
   <div class="blank">
     <h2>Select City</h2>
     <div class="blankpage-main">


       <div class="row single" style="">

<center>
<?php

$select ="SELECT * FROM cities ";
$result=mysqli_query($conn,$select);
if(mysqli_num_rows($result)>0){
             while($row=mysqli_fetch_assoc($result)){
               $city=$row['city'];
?>

         		<a href="city.php?city=<?php echo $city;?>"><div name="city" style="word-wrap:break-word;text-align: center;padding:20px 50px;margin:20px 15px; width: 200px;border-radius: 5px;background:#007eff;color:#fff;" ><?php echo $city;?></div></a>
<?php
}
}
 ?>



</center>

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
<!--slider menu
    <div class="sidebar-menu">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span>
			      <img id="logo" src="" alt="Logo"/>
			  </a> </div>
		    <div class="menu">
		      <?php // include "include/sidenav.php";?>
		    </div>
	 </div>
	<div class="clearfix"> </div>

-->
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
