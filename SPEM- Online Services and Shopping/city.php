<?php
include "conn.php";
session_start();
if(!isset($_SESSION['user'])){
  header("location:login.php");
}

if(isset($_GET['city'])){
$city=$_GET['city'];
  $_SESSION['city']=$city;
header("location:index.php");


}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>SPEM</title>
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
<script src="js/simpleCart.min.js"> </script>
<script src="js/amcharts.js"></script>
<script src="js/serial.js"></script>
<script src="js/light.js"></script>
<!-- //lined-icons -->
<script src="js/jquery-1.10.2.min.js"></script>

</head>
<body>
   <div class="page-container">
   <!--/content-inner-->
<center>	<div class="left-content" style="float:none;width:100%">
	   <div class="inner-content">
		<!-- header-starts -->
			<div class="header-section">

					<div class="clearfix"></div>
				<!-- /top_bg -->
				</div>
				<div class="header_bg">

							<div class="header">
								<div class="head-t">
									<div class="logo">
										<a href="index.html"><img src="images/logo.png" class="img-responsive" alt=""> </a>
									</div>
										<!-- start header_right -->
									<div class="header_right">
										<div class="rgt-bottom">



										<div class="clearfix"> </div>
									</div>

									<div class="clearfix"> </div>
								</div>
                <div class="create_btn" style="float:right;">
                              <a  href="logout.php">Logout</a>
                            </div>
								<div class="clearfix"> </div>
							</div>
						</div>

				</div>
      </center>
					<!-- //header-ends -->

				<!--content-->
			<div class="content" style="min-width:100%;">
<div class="women_main" style="min-width:100%;box-shadow:none;">
	<!-- start content -->

   <div class="w_content">


		     <div class="clearfix"></div>

		<!-- grids_of_4 -->
		<div class="grids_of_4">
      <form action="" method="get">
      <?php    $select ="SELECT * FROM cities ";
          $result=mysqli_query($conn,$select);
          if(mysqli_num_rows($result)>0){
                       while($row=mysqli_fetch_assoc($result)){

                              $image=$row['city'];
                              $id=$row['id'];
        ?>






					<div class="item_add">
            <span class="item_price"><input type="submit"  name="city" value="<?php echo $image; ?>" style="color:#fff;background-color: #B52E31;padding: 10px 20px;font-size: 0.85em;border:none;"></span>
          </div>



    <?php                 }

      }


       ?>
</form>
			<div class="clearfix"></div>

    			</div></div>
		<!-- end grids_of_4 -->


	</div>	</div>
   <div class="clearfix"></div>
	<!-- end content -->


</div>
			<!--content-->
		</div>
</div>	<?php   include_once "footer.php" ?>
				<!--//content-inner-->
			<!--/sidebar-menu-->

		   <script src="js/menu_jquery.js"></script>
</body>
</html>
