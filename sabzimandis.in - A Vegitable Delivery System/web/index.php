<?php
include "conn.php";
session_start();
if(!isset($_SESSION['city'])){
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
     <h2>categories</h2>
     <div class="blankpage-main">


       <div class="row single" style="text-align:center;display:inline-flex;flex-wrap:wrap;">

<?php

$select ="SELECT * FROM categories ";
$result=mysqli_query($conn,$select);
if(mysqli_num_rows($result)>0){
             while($row=mysqli_fetch_assoc($result)){
               $category=$row['category'];
?>

         		<a href="searchresult.php?paddy=<?php echo $category;?>"><div style="word-wrap:break-word;padding:20px 50px;margin:20px 15px; width: 200px;border-radius: 5px;background:#68AE00;color:#fff;" ><?php echo $category;?></div></a>
<?php
}
}
 ?>




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
