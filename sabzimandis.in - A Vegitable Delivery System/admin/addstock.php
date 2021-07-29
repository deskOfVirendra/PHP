<?php
session_start();
if(!isset($_SESSION['admin']))
        header("location:adminlogin.php");

 ?>
<?php
include "include/conn.php";

if( isset($_POST['submit']) ){

$productname=$_POST['productname'];
$price=$_POST['price'];
$total=$_POST['total'];
$seller=$_POST['seller'];
$buyer=$_POST['buyer'];


$sql = "INSERT INTO stockmanager (productname, price, total, seller, buyer)
                VALUES ('$productname', '$price', '$total', '$seller', '$buyer')";

                if ($conn->query($sql) === TRUE) {
                    $error= "New stock added successfully";
                } else {

                    echo "Error: " . $sql . "<br>" . $conn->error;
                }


}
 ?>
<!DOCTYPE HTML>
<html>
<head>
  <?php include "include/title.php"; ?>
  <style>


  .style-block input[type="text"], .style-block input[type="password"],.style-block input[type="email"],.style-block textarea,.style-block select {
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
      width: 50%;
      margin: 0 auto;
      border-radius: 3px;
      padding: 0.5em 1em;
      font-size: 1em;
      display: block;
      font-family: 'Carrois Gothic', sans-serif;
  }
  .style-block input[type="submit"]:hover{
  	transition: 0.5s all;
    background:#68AE00;
  	-webkit-transition: 0.5s all;
  	-moz-transition: 0.5s all;
  	-o-transition: 0.5s all ;
  	-ms-transition: 0.5s all;
  }
  .style-block label{
    width:100%;
  }
  </style>
</head>
<body>
<div class="page-container">
   <div class="left-content" style="width:100%;">
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
    	<h2>Create</h2><a href="index.php"><h3>Home</h3></a></br>
    	<div class="blankpage-main">

<div class="style-block" style="min-width:100%;">




  <form action="" method="post" enctype="multipart/form-data">

<div>
  <label>Productname
    <input placeholder="productname" name="productname" type="text" tabindex="3"  required>
  </label>
</div>

<div>
  <label>Price of Product
    <input placeholder="price" name="price" type="text" tabindex="3"  required>
  </label>
</div>

<div>
  <label>Total quantity purchessed
    <input placeholder="quantity" name="total" type="text" tabindex="3"  required>
  </label>
</div>

<div>
  <label>Sold By
    <input placeholder="seller" name="seller" type="text" tabindex="3"  required>
  </label>
</div>

<div>
  <label>Description
    <input placeholder="Description" name="buyer" type="text" tabindex="3"  required>
  </label>
</div>

    <div>
      <input type="submit" name="submit" value="Add Stock">
    </div>

    </div>

  </form>




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
<!--    <div class="sidebar-menu">
		  <?php //include "include/sidenav.php";?>
	 </div> -->
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
