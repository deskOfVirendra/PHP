
<?php
session_start();
 if(!isset($_SESSION['admin'])){
  header('location:adminlogin.php');
}
?>
<?php
include "../conn.php";

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
		<h2>Manage Category</h2><?php if(isset($error)){ echo $error;}?>
		 <div class="registration_form">
		 <!-- Form -->
     <form action="" method="post" enctype="multipart/form-data">
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

			<!-- /Form -->
			</div>
	</div></center>
	<div class="clearfix"></div>
	</div>

  <center><div>
    <h4>List of categories</h4>
  <?php
    $select ="SELECT * FROM categories ";
    $result=mysqli_query($conn,$select);
    if(mysqli_num_rows($result)>0){
                 while($row=mysqli_fetch_assoc($result)){
                      echo $row['category']."</br>";
                }

  }


  ?>
  </div></center>


	<!-- end content -->
		<?php include_once "../footer.php"; ?>
</div>
</div>
	<!--content-->
		</div>
</div>

		   <script src="js/menu_jquery.js"></script>
</body>
</html>





























<?php
include "../conn.php";

if( isset($_POST['submit']) ){

$city=$_POST['city'];




$sql = "INSERT INTO cities (city)
                VALUES ('$city')";

                if ($conn->query($sql) === TRUE) {
                    echo "New city added successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }


}
 ?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
		<h2>Add category</h2>
		 <div class="registration_form">
		 <!-- Form -->
			<form>
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
					<input type="submit" value="add">
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
					<center>	<p>© 2016 spem. All Rights Reserved | Design byspem</p></center>
			</div>
</div>
</div>
	<!--content-->
		</div>
</div>

		   <script src="js/menu_jquery.js"></script>
</body>
</html>
