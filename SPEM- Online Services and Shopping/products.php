<?php
include "conn.php";
session_start();
if(!isset($_SESSION['user'])){
  header("location:login.php");
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Gretong a Ecommerce Admin Panel Category Flat Bootstrap Responsive Web Template | Products :: w3layouts</title>
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
   <!--pie-chart--->
<script src="js/pie-chart.js" type="text/javascript"></script>
 <script type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#3bb2d0',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#fbb03b',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ed6498',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });


        });

    </script>
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
									<div class="search">
										<form action="searchresult.php" method="post" >
											<input type="text" name="paddy" value="" placeholder="search...">
											<input type="submit" value="">
										</form>
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
<div class="women_main" style="min-width:100%;">
	<!-- start content -->

   <div class="w_content">
		<div class="women">


		     <div class="clearfix"></div>
		</div>
		<!-- grids_of_4 -->
		<div class="grids_of_4">
      <?php    $select ="SELECT * FROM products ";
          $result=mysqli_query($conn,$select);
          if(mysqli_num_rows($result)>0){
                       while($row=mysqli_fetch_assoc($result)){
                              $productname=$row['productname'];
                              $brandname=$row['brandname'];
                              $price=$row['price'];
                              $image=$row['img1'];
                              $id=$row['id'];
        ?>

		  <div class="grid1_of_4">
				<div class="content_box"><a href="details.php?id=<?php echo $id;?>">
			   	   	 <img src="admin/<?php echo $image; ?>" class="img-responsive" alt="">
				   	  </a>
				    <h4><a href="'details.php?'.<?php echo $id;?>"> <?php echo $productname; ?></a></h4>
				     <p><?php echo $brandname; ?></p>
					 <div class="grid_1 simpleCart_shelfItem">

					 <div class="item_add"><span class="item_price"><h6><?php echo $price;?></h6></span></div>
					<div class="item_add"><span class="item_price"><a href="#">add to cart</a></span></div>
					 </div>
			   	</div>
			</div>
    <?php                 }

      }


       ?>

			<div class="clearfix"></div>
		</div>
		<!-- end grids_of_4 -->


	</div>
   <div class="clearfix"></div>
	<!-- end content -->

					<?php   include_once "footer.php" ?>
</div>

</div>
			<!--content-->
		</div>
</div>
				<!--//content-inner-->
			<!--/sidebar-menu-->

		   <script src="js/menu_jquery.js"></script>
</body>
</html>
