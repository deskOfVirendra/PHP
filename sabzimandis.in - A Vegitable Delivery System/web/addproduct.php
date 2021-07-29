<?php
session_start();
 //if(!isset($_SESSION['admin'])){
  //header('location:adminlogin.php');
//}
?>
<?php
include "include/conn.php";

if( isset($_POST['submit']) ){

$productname=$_POST['productname'];
$brandname=$_POST['brandname'];
$price=$_POST['price'];
$mrp=$_POST['mrp'];
$desc=$_POST['desc'];
$category=$_POST['category'];
$city=$_POST['city'];
$newname=$_POST['newname'];
$rand=rand(1,10000000);
$rand.=time();
$target="products/".$rand.".jpg";
if(move_uploaded_file($_FILES['img1']['tmp_name'],$target)){
        }

        $rand1=rand(1,10000000);
        $rand1.=time();
        $target1="products/".$rand1.".jpg";
        if(move_uploaded_file($_FILES['img2']['tmp_name'],$target1)){
                }


                $rand2=rand(1,10000000);
                $rand2.=time();
                $target2="products/".$rand2.".jpg";
                if(move_uploaded_file($_FILES['img3']['tmp_name'],$target2)){
                        }


                        $rand3=rand(1,10000000);
                        $rand3.=time();
                        $target3="products/".$rand3.".jpg";
                        if(move_uploaded_file($_FILES['img4']['tmp_name'],$target3)){
                                }

                                $rand4=rand(1,10000000);
                                $rand4.=time();
                                $target4="products/".$rand4.".jpg";
                                if(move_uploaded_file($_FILES['img5']['tmp_name'],$target4)){
                                        }


$sql = "INSERT INTO products (productname,newname, brandname, price,mrp,city,description,img1,img2,img3,img4,img5,category)
                VALUES ('$productname','$newname', '$brandname', '$price','$mrp','$city','$desc','$target','$target1','$target2','$target3','$target4','$category')";

                if ($conn->query($sql) === TRUE) {
                    $error= "New product added successfully";
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
   <div class="left-content">
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
    	<h2>Create</h2>
    	<div class="blankpage-main">

<div class="style-block" style="min-width:100%;">




  <form action="" method="post" enctype="multipart/form-data">
    <div>
      <label>
        <input placeholder="productname" name="productname" type="text" tabindex="3"  required>
      </label>
    </div>
    <div>
      <label>
        <input placeholder="productname in other languate" name="newname" type="text" tabindex="3"  >
      </label>
    </div>
    <div>
      <label>
        <input placeholder="brandname" type="text" name="brandname" tabindex="3" required>
      </label>
    </div>
    <div>
      <label>
        <input placeholder="mrp" type="text" name="mrp" tabindex="3" required>
      </label>
    </div>
    <div>
      <label>
        <input placeholder="price" type="text" name="price"tabindex="3" required>
      </label>
    </div>
    <div>
      <label>city
        <select name="city">
          <?php





          $select2 ="SELECT * FROM cities ";
          $result2=mysqli_query($conn,$select2);
          if(mysqli_num_rows($result2)>0){
                       while($row2=mysqli_fetch_assoc($result2)){
                              $productname=$row2['city'];

                              $id=$row2['id'];

                            echo "  <option value='$productname'>$productname</option>";

                  }

        }


         ?>



</select>
      </label>
    </div>
    <div>
        <label>category
      <select name="category">
        <?php





        $select1 ="SELECT * FROM categories ";
        $result1=mysqli_query($conn,$select1);
        if(mysqli_num_rows($result1)>0){
                     while($row1=mysqli_fetch_assoc($result1)){
                            $productname=$row1['category'];

                            $id=$row1['id'];

                          echo "  <option value='$productname'>$productname</option>";

                }

      }


       ?>



</select>
</label>
    </div>

    <div>
      <label>
        <textarea placeholder="Description" type="text" name="desc" rows=auto cols=5 ></textarea>
      </label>
    </div>
    <div>
      <label>image 1
        <input  type="file" name="img1" tabindex="3" >
      </label>
    </div>
    <div>
      <label>image 2
        <input type="file" name="img2" tabindex="3" >
      </label>
    </div>
    <div>
      <label>image 3
        <input  type="file" name="img3" tabindex="3" >
      </label>
    </div>
    <div>
      <label>image 4
        <input  type="file" name="img4" tabindex="3" >
      </label>
    </div>
    <div>
      <label>image 5
        <input  type="file" name="img5" tabindex="3">
      </label>
    </div>
    <div>
      <input type="submit" name="submit" value="Manage">
    </div>
    <div>

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
