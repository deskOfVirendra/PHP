<?php

include "include/conn.php";
session_start();

$submit=$_POST['otp'];
$otp=$_SESSION['otp'];
if(isset($_POST['submit'])){
if($submit==$otp){
  echo "equal";
$mobile= $_SESSION['mobile'];
  $select="SELECT * FROM userid where mobileno='$mobile'";
  $result=mysqli_query($conn,$select);
    if( mysqli_num_rows($result)>0){

                 echo "Entered in if";


        }
        else{




        }







}
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
  <?php echo $error;?>
    <div class="login-main">
    	 <div class="login-head">
				<h1>Login</h1>
			</div>
			<div class="login-block">
        <?php echo $_SESSION['otp'];?>
				<form action="" method="post">
					<input type="text" name="otp" placeholder="Enter OTP" required="" maxlength="6">


						<div class="clearfix"> </div>

					<input type="submit" name="submit" value="Confirm">



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
