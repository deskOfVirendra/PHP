<?php
session_start();
 if(!isset($_SESSION['admin'])){
  header('location:adminlogin.php');
}
?>
<?php
include "../conn.php";

if( isset($_POST['submit']) ){

$productname=$_POST['servicename'];
$brandname=$_POST['providername'];
$price=$_POST['cost'];
$city=$_POST['city'];
$desc=$_POST['desc'];
$mob=$_POST['mob'];
$category=$_POST['category'];

$rand=rand(1,10000000);
$rand.=time();
$target="services/".$rand.".jpg";
if(move_uploaded_file($_FILES['img1']['tmp_name'],$target)){
        }

        $rand1=rand(1,10000000);
        $rand1.=time();
        $target1="services/".$rand1.".jpg";
        if(move_uploaded_file($_FILES['img2']['tmp_name'],$target1)){
                }


                $rand2=rand(1,10000000);
                $rand2.=time();
                $target2="services/".$rand2.".jpg";
                if(move_uploaded_file($_FILES['img3']['tmp_name'],$target2)){
                        }


                        $rand3=rand(1,10000000);
                        $rand3.=time();
                        $target3="services/".$rand3.".jpg";
                        if(move_uploaded_file($_FILES['img4']['tmp_name'],$target3)){
                                }

                                $rand4=rand(1,10000000);
                                $rand4.=time();
                                $target4="services/".$rand4.".jpg";
                                if(move_uploaded_file($_FILES['img5']['tmp_name'],$target4)){
                                        }


$sql = "INSERT INTO services (servicename, providername, cost,city,contact,description,img1,img2,img3,img4,img5,category)
                VALUES ('$productname', '$brandname', '$price','$city','$mob','$desc','$target','$target1','$target2','$target3','$target4','$category')";

                if ($conn->query($sql) === TRUE) {
                    $error= "New record created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }


}
 ?>

<!DOCTYPE HTML>
<html>
<head>
<title>spem</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
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

<!-- //lined-icons -->
<script src="js/jquery-1.10.2.min.js"></script>
   <!--pie-chart--->

</head>
<body>
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content" style="width:100%">
	   <div class="inner-content">
		<!-- header-starts -->
			<div class="header-section">
			<!-- top_bg -->

					<div class="clearfix"></div>
				<!-- /top_bg -->
				</div>
				<div class="header_bg">

							<div class="header">
								<div class="head-t">
									<div class="logo">
										<a href="index.php"><img src="images/logo.png" class="img-responsive" alt=""> </a>
									</div>
										<!-- start header_right -->

								<div class="clearfix"> </div>
							</div>
						</div>

				</div>
					<!-- //header-ends -->

				<!--content-->
			<div class="content">
<div class="women_main">
	<!-- start content -->
<div class="registration">

<center>	<div class="registration_left" style="float:none";
>
		<h2>Manage services</h2><?php if(isset($error)){ echo $error;}?>
		 <div class="registration_form">
		 <!-- Form -->
			<form action="" method="post" enctype="multipart/form-data">
				<div>
					<label>
						<input placeholder="servicename" name="servicename" type="text" tabindex="3" >
					</label>
				</div>
        <div>
          <label>
            <input placeholder="providername" type="text" name="providername" tabindex="3" >
          </label>
        </div>
        <div>
					<label>
						<input placeholder="cost" type="text" name="cost" tabindex="3" >
					</label>
				</div>

        <div>
          <label>city
            <select name="city">
              <?php
              include "../conn.php";




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
        <label>
          <input placeholder="contact" type="tel" name="mob" tabindex="3" >
        </label>
      </div>
      <div>
          <label>category
        <select name="category">
          <?php
          include "../conn.php";




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

        <div>
					<label>
						<textarea placeholder="Description" type="text" name="desc" rows=5 cols=60 ></textarea>
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
			<!-- /Form -->
			</div>
	</div></center>
	<div class="clearfix"></div>
	</div>

	<!-- end content -->
	<div class="foot-top">

			<div class="clearfix"> </div>

</div>

					<div class="clearfix"> </div>
					<center>	<p>?? 2016 spem. All Rights Reserved | Design byspem</p></center>
			</div>
</div>
</div>
	<!--content-->
		</div>
</div>

		   <script src="js/menu_jquery.js"></script>
</body>
</html>
