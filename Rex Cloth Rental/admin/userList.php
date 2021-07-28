<?php

include "conn.php";

session_start();

 if(!isset($_SESSION['admin'])){

  header('location:adminlogin.php');

}

/*if(!isset($_SESSION['dboy'])){

 header('location:dboylogin.php');

}else{

  $dboy=$_SESSION['dboy'];

}



if(isset($_GET['id']) && isset($_GET['stetus'])){

  $id=$_GET['id'];

  $stetus=$_GET['stetus'];

  $sql = "UPDATE orders SET status='$stetus' WHERE id=$id";





                  if ($conn->query($sql) === TRUE) {

                      $error= "Delivered  successfully";

                      header("dboy.php");

                  } else {

                      echo "Error: " . $sql . "<br>" . $conn->error;

                  }



}*/



?>

<!DOCTYPE HTML>

<html>

<head>

<title>spem</title>

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

        <table>



<?php








  $sql = "SELECT * FROM users ";





if($result = mysqli_query($conn, $sql)){

if(mysqli_num_rows($result) > 0){

echo "<table id='users-table' class='table table-striped table-bordered table-hover dataTables-example'>";

echo "<tr>";

echo "<th>ID</th>";

echo "<th>Name</th>";

echo "<th>Email</th>";

echo "<th>Contact</th>";

echo "<th>Registered On</th>";



echo "</tr>";

while($row = mysqli_fetch_array($result)){

$id=$row['id'];


echo "<tr>";


                       echo "<td>" . $row['id'] . "</td>";

                      echo "<td>" .  $row['Name'] . "</td>";

                      echo "<td>" . $row['email'] . "</td>";

                      echo "<td>". $row['mobileNo'] . "</td>";

                      echo "<td>" . $row['registeredOn'] . "</td>";

                  


echo "</tr>";

}

echo "</table>";

// Free result set

mysqli_free_result($result);

} else{

echo "No  orders";

}

} else{

echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);

}









      ?>







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

