<?php
session_start();
if(!isset($_SESSION['admin']))
        header("location:adminlogin.php");

 ?>
<!DOCTYPE HTML>
<html>
<head>
  <?php include "include/title.php"; ?>
  <style>


  .style-block input[type="text"], .style-block input[type="password"],.style-block input[type="email"],.style-block textarea {
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
      width: 100%;
      margin: 0 auto;
      border-radius: 3px;
      padding: 0.5em 1em;
      font-size: 1em;
      display: block;
      font-family: 'Carrois Gothic', sans-serif;
  }
  .style-block input[type="submit"]:hover{
  	background:#68AE00;
  	transition: 0.5s all;
  	-webkit-transition: 0.5s all;
  	-moz-transition: 0.5s all;
  	-o-transition: 0.5s all ;
  	-ms-transition: 0.5s all;
  }
  .style-block label{
    width:80%;
  }
  </style>
</head>
<body>
<div class="page-container">
   <div class="left-content" style="min-width:100%;">
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
    	<h2>Manage Sabzi</h2>
    	<div class="blankpage-main">

<div class="style-block" style="min-width:100%;">
  <div class="grids_of_4" style="display:inline-flex;flex-wrap:wrap;">
  <?php
  include "include/conn.php";




  $select ="SELECT * FROM products ";
  $result=mysqli_query($conn,$select);
  if(mysqli_num_rows($result)>0){
               while($row=mysqli_fetch_assoc($result)){
                      $productname=$row['productname'];
                      $brandname=$row['brandname'];
                      $price=$row['price'];
                      $image=$row['img1'];
                      $id=$row['id'];
  ?>

    <div class="grid1_of_4" style="width: 20%;
    border: 1px solid rgb(104, 174, 0);
    padding: 4px;
    text-align: center;margin:0.5px;">
      <div class="content_box"><a href="details.php?id=<?php echo $id;?>" >
             <img src="<?php echo $image; ?>" class="img-responsive" alt="">
            </a>
          <h4><?php echo $productname; ?></h4></br>
           <h5><?php echo $brandname;?></h5>
         <div class="grid_1 simpleCart_shelfItem" >

         <div class="item_add"><span class="item_price"><h6>ONLY <?php echo $price;?></h6></span></div>
        <div class="item_add"><span class="item_price"><a href="updateproduct.php?id=<?php echo $id;?>">Edit</a></span></div>
          <div class="item_add"><span class="item_price"><a href="deleteproduct.php?id=<?php echo $id;?>">Delete</a></span></div>
         </div>
        </div>
    </div>
  <?php                 }

  }


  ?>
  <!-- end grids_of_4 -->


  </div>






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
    <!--<div class="sidebar-menu">
		  <?php //include "include/sidenav.php";?>
	 </div>-->
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
