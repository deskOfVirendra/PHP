<?php

include "include/conn.php";
session_start();

$submit=$_POST['otp'];
$otp=$_COOKIE['otp'];
if(isset($_POST['submit'])){
if($submit==$otp){
  echo "equal";
$mobile= $_COOKIE['mobile'];
  $select="SELECT * FROM userid where mobileno='$mobile'";
  $result=mysqli_query($conn,$select);
    if( mysqli_num_rows($result)>0){
                   while($row = $result->fetch_assoc()) {
                      if($row['status']==0){
                      $sql = "UPDATE userid SET status='1' WHERE mobileno='$mobile'";

                              if (mysqli_query($conn, $sql)) {


                                      }
                                    }
                                    else{
                                        $_COOKIE['user']=$mobile;


                                        $cookie_name = "user";
                                        $cookie_value = $mobile;
                                        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day


                                        header("location:index.php");
                                        exit();
                                    }
}

        }
        else{

                      $sql1 = "INSERT INTO userid (status,mobileno)
              VALUES ('1','$mobile')";

                    if ($conn->query($sql1) === TRUE) {
                                 $_COOKIE['user']= $mobile;



                                 $cookie_name = "user";
                                 $cookie_value = $mobile;
                                 setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

                                 

                          header("location:index.php");
                          exit();
                            }



        }







}
}else{
$url1 = "http://api.msg91.com/api/sendhttp.php?sender=SabziS&route=4&mobiles=".$_COOKIE['mobile']." &authkey=186512A1XC9MqadU5e4c3017P1&encrypt=&country=91&message=Your OTP for sabziday is ".$_COOKIE['otp']."";
$xml = file_get_contents($url1);
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

        <?php echo $error;?>
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
