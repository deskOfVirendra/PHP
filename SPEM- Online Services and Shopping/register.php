<?php
include "conn.php";

if( isset($_POST['submit']) ){

$user=$_POST['username'];
$pass=$_POST['password'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$city=$_POST['city'];
$mobile=$_POST['mobile'];
$select ="SELECT * FROM userid WHERE username='$user' ";
$result=mysqli_query($conn,$select);
if(mysqli_num_rows($result) > 0){

 $error="user already exists!";


}
else{

  $sql = "INSERT INTO userid (username, password, firstname,lastname,email,mobileno,city)
                  VALUES ('$user', '$pass', '$fname','$lname','$email','$mobile','$city')";

                  if ($conn->query($sql) === TRUE) {
                    $error="you are spem user now";
                      header("location:login.php");
                  } else {
                      echo "Error: " . $sql . "<br>" . $conn->error;
                  }


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
<h2>new user? <span> create an account </span></h2>


 <div class="registration_form">
 <!-- Form -->
 <h4><?php if(isset($error)) echo $error;?></h4>
  <form action="" method="post">
    <div>
      <label>
        <input placeholder="first name:" name="fname" type="text" tabindex="1" required="" autofocus="">
      </label>
    </div>
    <div>
      <label>
        <input placeholder="last name:" name="lname" type="text" tabindex="2" required="" autofocus="">
      </label>
    </div>
    <div>
      <label>
        <input placeholder="email address:" name="email" type="email" tabindex="3" required="">
      </label>
    </div>
    <div>
      <label>
        <input placeholder="Mobile Number:" name="mobile" type="tel" tabindex="3" required="">
      </label>
    </div>
    <div>
      <label>
        <input placeholder="City:" type="text" name="city" tabindex="4" required="">
      </label>
    </div>
    <div>
      <label>
        <input placeholder="username:"  name="username" type="text" tabindex="4" required="">
      </label>
    </div>
    <div>
      <label>
        <input placeholder="password"  name="password" type="password" tabindex="4" required="">
      </label>
    </div>

    <div>
      <input type="submit" name="submit" value="create an account">
    </div>

  </form>
  <!-- /Form -->
</div>
</div></center>


	<!-- end content -->

				<?php   include_once "footer.php" ?>

	<!--content-->
</div>
<div class="clearfix"></div>
</div>

		   <script src="js/menu_jquery.js"></script>
</body>
</html>
