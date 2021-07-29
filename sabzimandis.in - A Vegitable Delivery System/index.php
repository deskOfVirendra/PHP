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
<marquee style="color:#FC8213;">

<?php

$select ="SELECT * FROM marquenotice limit 1";
$result=mysqli_query($conn,$select);
if(mysqli_num_rows($result)>0){
             while($row=mysqli_fetch_assoc($result)){
               echo $row['notice'];
               if($row['notice'] == "closed"){
                header("location:closed/index.php");
               }
}
}
 ?>  

</marquee>
<!--inner block start here-->
<div class="inner-block">
   <div class="blank">
<h4>Happy To Help </br>Call Or <a href="https://api.whatsapp.com/send?phone=917020729495" style="color: #01E675;">Whatsapp <i class="fa fa-whatsapp" aria-hidden="true"></i></a> </br><b><a href="tel:7020729495" style="color: #FC8213;">7020729495</a></b></h4>
     
     
     
     
     
     
     
     <?php 
 
 //echo $_GET['key'];
     if((!empty($_GET['key'])) && (isset($_COOKIE['user']))){
$usermobile = $_COOKIE['user'];
     $token = $_GET['key'];


     $sql = "UPDATE userid SET token='$token' WHERE mobileno=$usermobile";

     if ($conn->query($sql) === TRUE) {
         echo "updated successfully";
     } else {
         echo "Error updating record: " . $conn->error;
     }





     }
     
     
     ?>




















     <div class="blankpage-main" style="
    background-image: url(unnamed.png);
    background-repeat: no-repeat;">
<h4>299/- पर्यंत १०/- रु delivery charge </br>आणि </br>299/- पुढे फ्री delivery </h4>

       <div class="row single" style="text-align:center;display:inline-flex;flex-wrap:wrap;">

<?php
$city = $_REQUEST['city'];
$select ="SELECT * FROM categories where city = '$city'";
$result=mysqli_query($conn,$select);
if(mysqli_num_rows($result)>0){
             while($row=mysqli_fetch_assoc($result)){
               $category=$row['category'];
?>

         		<a href="searchresult.php?paddy=<?php echo $category;?>"><div style="word-wrap:break-word;padding:20px 50px;margin:20px 15px; width: 200px;border-radius: 5px;background:#007eff;color:#fff;" ><?php echo $category;?></div></a>
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
