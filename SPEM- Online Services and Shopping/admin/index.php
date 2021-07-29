<?php
session_start();
 if(!isset($_SESSION['admin'])){
  header('location:adminlogin.php');
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Gretong a Ecommerce Admin Panel Category Flat Bootstrap Responsive Web Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gretong Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet">
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<script src="js/amcharts.js"></script>
<script src="js/serial.js"></script>
<script src="js/light.js"></script>
<!-- //lined-icons -->
<script src="js/jquery-1.10.2.min.js"></script>
   <!--pie-chart--->
<script src="js/pie-chart.js" type="text/javascript"></script>

</head>
<body>
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts -->
    <div class="header_bg">

          <div class="header">
            <div class="head-t">
              <div class="logo">
                <a href="index.html"><img src="images/logo.png" class="img-responsive" alt=""> </a>
              </div>
                <!-- start header_right -->

            <div class="clearfix"> </div>
          </div>
        </div>

    </div>
					<!-- //header-ends -->

				<!--content-->
			<div class="content">


						<!--//area-->





                <div class="grids_of_4">
            		  <div class="grid1_of_4">
            				<div class="content_box">
            				    <h4><a href="addcategory.php">Manage category </a></h4>


            			   	</div>
            			</div>

              <div class="clearfix"></div>
            </div>

            <div class="grids_of_4">
              <div class="grid1_of_4">
                <div class="content_box">
                    <h4><a href="addcity.php">Manage city</a></h4>


                  </div>
              </div>

          <div class="clearfix"></div>
          </div>

          <div class="grids_of_4">
            <div class="grid1_of_4">
              <div class="content_box">
                  <h4><a href="addproduct.php">Manage products</a></h4>


                </div>
            </div>

        <div class="clearfix"></div>
      </div>


      <div class="grids_of_4">
        <div class="grid1_of_4">
          <div class="content_box">
              <h4><a href="addservice.php"> Manage services</a></h4>


            </div>
        </div>

    <div class="clearfix"></div>
  </div>

  <div class="grids_of_4">
    <div class="grid1_of_4">
      <div class="content_box">
          <h4><a href="orders.php"> Order history</a></h4>


        </div>
    </div>

<div class="clearfix"></div>
</div>
        </div>
		<!--area-->

						<!--//area-->


			<!--content-->
		</div>
</div>
				<!--//content-inner-->
			<!--/sidebar-menu-->

<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->
   <!-- real-time -->
<script language="javascript" type="text/javascript" src="js/jquery.flot.js"></script>

		   <script src="js/menu_jquery.js"></script>
</body>
</html>
