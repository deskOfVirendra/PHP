<?php
session_start();
if (!isset($_SESSION['admin']))
  header("location:adminlogin.php");

?>
<!DOCTYPE HTML>
<html>

<head>
  <?php include "include/title.php"; ?>
  <style>
    .style-block input[type="text"],
    .style-block input[type="password"],
    .style-block input[type="email"],
    .style-block textarea {
      font-size: 0.9em;
      padding: 10px 20px;
      min-width: 100%;
      color: #686967;
      outline: none;
      border: 1px solid #D3D3D3;
      border-radius: 5px;
      -ms-border-radius: 5px;
      -moz-border-radius: 5px;
      -o-border-radius: 5px;
      background: #F5F5F5;
      margin: 0em 0em 1.5em 0em;
    }

    .style-block input[type="submit"] {
      border: none;
      outline: none;
      cursor: pointer;
      color: #fff;
      background: #337AB7;
      width: 100%;
      margin: 0 auto;
      border-radius: 3px;
      padding: 0.5em 1em;
      font-size: 1em;
      display: block;
      font-family: 'Carrois Gothic', sans-serif;
    }

    .style-block input[type="submit"]:hover {
      background: #68AE00;
      transition: 0.5s all;
      -webkit-transition: 0.5s all;
      -moz-transition: 0.5s all;
      -o-transition: 0.5s all;
      -ms-transition: 0.5s all;
    }

    .style-block label {
      width: 80%;
    }
  </style>
</head>

<body>
  <div class="page-container">
    <div class="left-content" style="min-width:100%;">
      <a href="logout.php"><button style="width:auto;padding:4px;border-radius:4px;color:#fff;background:#000;float:right;outline:none;margin-right:10px;border:1px solid #000;">Logout</button></a>

      <div class="mother-grid-inner">

        <!--header start here-->
        <?php //include "include/header.php"; 
        ?>
        <!--heder end here-->
        <!-- script-for sticky-nav -->
        <script>
          $(document).ready(function() {
            var navoffeset = $(".header-main").offset().top;
            $(window).scroll(function() {
              var scrollpos = $(window).scrollTop();
              if (scrollpos >= navoffeset) {
                $(".header-main").addClass("fixed");
              } else {
                $(".header-main").removeClass("fixed");
              }
            });

          });
        </script>
        <!-- /script-for sticky-nav -->
        <!--inner block start here-->
        <div class="inner-block">
          <div class="blankpage-main" style="box-shadow: none;">
            <h2>Admin Panel</h2>






            <div class="col-md-4 market-update-gd" style="margin-top: 10px;">
              <a href="allorders.php">
                <div class="market-update-block clr-block-1">
                  <div class="col-md-8 market-update-left">
                    <h3>All Orders</h3>
                  </div>
                  <div class="col-md-4 market-update-right">
                    <i class="fa fa-file-text-o"> </i>
                  </div>
                  <div class="clearfix"> </div>
                </div>
              </a>
            </div>

            <div class="col-md-4 market-update-gd" style="margin-top: 10px;">
              <a href="addproduct.php">
                <div class="market-update-block clr-block-1">
                  <div class="col-md-8 market-update-left">
                    <h3>Add Products</h3>
                  </div>
                  <div class="col-md-4 market-update-right">
                    <i class="fa fa-file-text-o"> </i>
                  </div>
                  <div class="clearfix"> </div>
                </div>
              </a>
            </div>

            <div class="col-md-4 market-update-gd" style="margin-top: 10px;">
              <a href="firebase">
                <div class="market-update-block clr-block-1">
                  <div class="col-md-8 market-update-left">
                    <h3>Send Notification</h3>
                  </div>
                  <div class="col-md-4 market-update-right">
                    <i class="fa fa-file-text-o"> </i>
                  </div>
                  <div class="clearfix"> </div>
                </div>
              </a>
            </div>

            <div class="col-md-4 market-update-gd" style="margin-top: 10px;">
              <a href="addcity.php">
                <div class="market-update-block clr-block-1">
                  <div class="col-md-8 market-update-left">
                    <h3>Manage City</h3>
                  </div>
                  <div class="col-md-4 market-update-right">
                    <i class="fa fa-file-text-o"> </i>
                  </div>
                  <div class="clearfix"> </div>
                </div>
              </a>
            </div>

            <div class="col-md-4 market-update-gd" style="margin-top: 10px;">
              <a href="addcategory.php">
                <div class="market-update-block clr-block-1">
                  <div class="col-md-8 market-update-left">
                    <h3>Manage Category</h3>

                  </div>
                  <div class="col-md-4 market-update-right">
                    <i class="fa fa-file-text-o"> </i>
                  </div>
                  <div class="clearfix"> </div>
                </div>
              </a>
            </div>


            <div class="col-md-4 market-update-gd" style="margin-top: 10px;">
              <a href="deliveryboymanager.php">
                <div class="market-update-block clr-block-1">
                  <div class="col-md-8 market-update-left">
                    <h3>Delivery boy</h3>
                  </div>
                  <div class="col-md-4 market-update-right">
                    <i class="fa fa-file-text-o"> </i>
                  </div>
                  <div class="clearfix"> </div>
                </div>
              </a>

            </div>












            <div class="col-md-4 market-update-gd" style="margin-top: 10px;">
              <a href="users.php">
                <div class="market-update-block clr-block-1">
                  <div class="col-md-8 market-update-left">
                    <h3>Manage users</h3>

                  </div>
                  <div class="col-md-4 market-update-right">
                    <i class="fa fa-file-text-o"> </i>
                  </div>
                  <div class="clearfix"> </div>
                </div>
              </a>
            </div>

            <div class="col-md-4 market-update-gd" style="margin-top: 10px;">
              <a href="editproducts.php">
                <div class="market-update-block clr-block-1">
                  <div class="col-md-8 market-update-left">
                    <h3>Manage Products</h3>

                  </div>
                  <div class="col-md-4 market-update-right">
                    <i class="fa fa-file-text-o"> </i>
                  </div>
                  <div class="clearfix"> </div>
                </div>
              </a>
            </div>

            <div class="col-md-4 market-update-gd" style="margin-top: 10px;">
              <a href="addnotice.php">
                <div class="market-update-block clr-block-1">
                  <div class="col-md-8 market-update-left">
                    <h3>update notice</h3>

                  </div>
                  <div class="col-md-4 market-update-right">
                    <i class="fa fa-file-text-o"> </i>
                  </div>
                  <div class="clearfix"> </div>
                </div>
              </a>
            </div>

            <div class="col-md-4 market-update-gd" style="margin-top: 10px;">
              <a href="stockmanager.php">
                <div class="market-update-block clr-block-1">
                  <div class="col-md-8 market-update-left">
                    <h3>Stock Manager</h3>

                  </div>
                  <div class="col-md-4 market-update-right">
                    <i class="fa fa-file-text-o"> </i>
                  </div>
                  <div class="clearfix"> </div>
                </div>
              </a>
            </div>

            <div class="col-md-4 market-update-gd" style="margin-top: 10px;">
              <a href="incart.php">
                <div class="market-update-block clr-block-1">
                  <div class="col-md-8 market-update-left">
                    <h3>products in cart</h3>

                  </div>
                  <div class="col-md-4 market-update-right">
                    <i class="fa fa-file-text-o"> </i>
                  </div>
                  <div class="clearfix"> </div>
                </div>
              </a>
            </div>






          </div>

        </div>

        <!--inner block end here-->
        <!--copy rights start here-->
      </div>

    </div>
  </div>
  <?php include "include/footer.php"; ?>
  <!--COPY rights end here-->


  <!--slider menu-->
  <!--<div class="sidebar-menu">
		  <?php //include "include/sidenav.php";
      ?>
	 </div>-->
  <div class="clearfix"> </div>

  <!--slide bar menu end here-->
  <script>
    var toggle = true;

    $(".sidebar-icon").click(function() {
      if (toggle) {
        $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
        $("#menu span").css({
          "position": "absolute"
        });
      } else {
        $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
        setTimeout(function() {
          $("#menu span").css({
            "position": "relative"
          });
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