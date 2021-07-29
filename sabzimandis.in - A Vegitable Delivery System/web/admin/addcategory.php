<?php
session_start();
if(!isset($_SESSION['admin']))
     header("location:adminlogin.php");

 ?>
<?php
include "include/conn.php";

if( isset($_POST['submit']) ){

$cname=$_POST['cname'];
$ctype=$_POST['ctype'];
$desc=$_POST['desc'];




$sql = "INSERT INTO categories (category,type,description)
                VALUES ('$cname','$ctype','$desc')";

                if ($conn->query($sql) === TRUE) {
                    $error= "New category added successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }


}




if(isset($_GET['delete'])){
      $delete=$_GET['delete'];
      $sql1="DELETE  FROM categories WHERE category='$delete'";
      if(mysqli_query($conn,$sql1)){
        header("location:addcategory.php");
      }

      else{
        echo "error";
        exit;
      }


}
 ?>


<!DOCTYPE HTML>
<html>
<head>
  <?php include "../include/title.php"; ?>
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
      width: 50%;
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
    <div class="inner-block">
<!--inner block start here-->
    <div class="blank">
    	<h2>Manage Category</h2>
    	<div class="blankpage-main">

<div class="style-block" style="min-width:100%;">



<center>  <h4><?php if(isset($error)) echo $error;?></h4></center>

  <form action="" method="post" enctype="multipart/form-data">
      <h2><? if(isset($error)) echo $error;?></h2>
    <div>
      <label>
        <input placeholder="Category name" name="cname" type="text" tabindex="3" required="">
      </label>
    </div>

    <div>
      <label>
        <input placeholder="Category type"name="ctype" type="text" tabindex="3" required="">
      </label>
    </div>
    <div>
      <label>
        <input placeholder="description" name="desc" type="text" tabindex="3" required="">
      </label>
    </div>
    <div>
      <input type="submit" name="submit" value="Manage">
    </div>
    <div>



    </div>

  </form>




</div>


<br>
<br><br>

<div class="style-block" style="min-width:100%;">



<h4><center>Categories</center></h4>
  <div class="clearfix"></div>

  <?php




  $sql = "SELECT * FROM categories  ";


  if($result = mysqli_query($conn, $sql)){
  if(mysqli_num_rows($result) > 0){
  echo "<table id='users-table' class='table table-striped table-bordered table-hover dataTables-example'>";
  echo "<tr>";

  echo "<th>Category</th>";
  echo "<th>Action</th>";
  echo "</tr>";
  while($row = mysqli_fetch_array($result)){
  $id=$row['id'];
  $mob=$row['mobileno'];

  echo "<tr>";

                  echo "<td>" . $row['category'] . "</td>";

                  echo "<td><a href='addcategory.php?delete=$row[category]'>" ."delete". "</td>";

  echo "</tr>";
  }
  echo "</table>";
  // Free result set
  mysqli_free_result($result);
  } else{
  echo "No categories";
  }
  } else{
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
  }




  ?>



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
    <!-- <div class="sidebar-menu">
		  <?php //include "../include/sidenav.php";?>
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
