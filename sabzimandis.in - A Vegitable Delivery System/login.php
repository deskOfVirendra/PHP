
<?php
if(isset($_POST['login'])){
          $mobile=$_POST['mobile'];
          $otp=rand(1000,9999);
          session_start();
          $_COOKIE['otp']=$otp;
		  $_COOKIE['mobile']=$mobile;
		  



		  
$cookie_name = "otp";
$cookie_value = $otp;
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day




$cookie_name = "mobile";
$cookie_value = $mobile;
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day




          header("location:otpv.php");
}
?>
<!DOCTYPE HTML>
<html>
<head>
<?php include "include/title.php";?>
<!--static chart-->
</head>
<body>
<div class="login-page">
    <div class="login-main">
    	 <div class="login-head">
				<h1>Login</h1>
			</div>
			<div class="login-block">
				<form action="" method="post">
					<input type="text" name="mobile" placeholder="Enter Mobile Number" required="">


						<div class="clearfix"> </div>

					<input type="submit" name="login" value="Send OTP">



				</form>

			</div>
      </div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
<?php include "include/footer.php"; ?>
<!--COPY rights end here-->

<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>
