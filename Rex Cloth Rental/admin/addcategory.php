<?php



session_start();



 if(!isset($_SESSION['admin'])){



  header('location:adminlogin.php');



}




if(isset($_GET['deleteid'])) {
	// echo "hello there";
    $id = $_GET['deleteid'];
    $deleteSql = "DELETE FROM CATEGORIES WHERE ID='$id'";
    echo "below sql";
    if($conn->query($deleteSql)) {
    	echo "executed";
    	// header('location:addcategory.php');
        echo "<script>item removed from categories</script>";
    } 
    else {

    }
}
?>



<?php



include "conn.php";







if( isset($_POST['submit']) ){







$category=$_POST['category'];



















$sql = "INSERT INTO categories (category)



                VALUES ('$category')";







                if ($conn->query($sql) === TRUE) {

// 

                    $error =  "New Category added successfully";

                       



                } else {



                    echo "Error: " . $sql . "<br>" . $conn->error;



                }











}



 ?>







<!DOCTYPE HTML>



<html>



<head>



<title>Rex | Admin </title>



<meta name="viewport" content="width=device-width, initial-scale=1">



<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



<meta name="keywords" content="" />



<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>



<!-- Bootstrap Core CSS -->



<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />



<link href="css/table.css" rel='stylesheet' type='text/css' />



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



						<input placeholder="Category" name="category" type="text" tabindex="3" required>



					</label>



				</div>



      				<div>



					<input type="submit" name="submit" value="Add ">



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



  <table>



<?php



  $select ="SELECT * FROM categories ";



  $result=mysqli_query($conn,$select);



  if(mysqli_num_rows($result)>0){



               while($row=mysqli_fetch_assoc($result)){

                $id = $row['id'];

			   echo "<tr>";



                    echo "<th>".$row['category']."</th>";

                     echo "<td><a href='addcategory.php?deleteid=$row[id]'>" ."delete". "</td>";

					echo "</tr>";



              }







}











?>



</table>



</div></center>



	<!-- end content -->



<?php  include_once "../footer.php"; ?>







</div>



	<!--content-->



		</div>



</div> 







		   <script src="js/menu_jquery.js"></script>



</body>



</html>



