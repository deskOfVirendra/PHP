<!DOCTYPE html>
<html lang="en">
<?php


?>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
  <meta charset="UTF-8">
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="shortcut icon" type="image/png" href="assets/img/logos/fav_icon.png"/>
      <!-- Fab Icon -->
  <!-- Fonts Awesome Icons -->
  <link rel="stylesheet" href="assets/fonts/fontawesome/css/all.min.css">
  <!-- Flaticon -->
  <link rel="stylesheet" href="assets/css/vander/flaticon.css">
  <!-- Bootstrap Link -->
  <link rel="stylesheet" href="assets/css/vander/bootstrap.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Banting University</title>
    <!--Codingeek -->
    <link rel="stylesheet" href="../../codingeek-js/codingeek.css">
</head>

<body>

<?php include "include/conn.php";?>
<?php //  include "include/navbar.php";?>

<?php
$error = "";

if( isset($_GET['submit']) ){

$user = $_GET['username'];
$pass = $_GET['password'];
$select = "SELECT * FROM admin WHERE username='$user' ";
$result = mysqli_query($conn,$select);
$resultcheck = mysqli_num_rows($result);
if($resultcheck == 1)
   {

     while($row=mysqli_fetch_assoc($result)){
         $password=$row['password'];}

         if($pass == $password)
        {

           setcookie("admin",$user,time()+86400*30);
           header("location:admin_panel.php");
         }
   }
else
    {
      $error .= "Account Not Exists!!!";
      $color = "red";
     }

} ?>

  <!-- Signin Section -->
  <section class="sign-in-section section">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6 sign-in">
          <h2>Admin Login</h2>
          <div class="sign-with-email">
            <h6><?php echo $error;?></h6>
            <form action="" class="form-style-2" method="get">
              <div class="form-group required">
                <label for="email_address">Username</label>
                <input type="text" id="email_address" class="form-control" name="username" placeholder="" />
              </div>

              <div class="form-group required">
                <label for="password">Password</label>
                <input type="password" id="password" class="form-control" name="password"
                  placeholder="">
              </div>
              <input type="submit" value="Login" name="submit" class="small-btn" >
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Footer Section -->

<?php include "include/footer.php";?>

  <div class="preloader" id="preloader">
    <div class="preloader-inner">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
</div>

  <!-- JQuery Link -->
  <script src="assets/js/vander/jquery-3.4.1.min.js"></script>
  <script src="assets/js/vander/jquery-migrate-1.4.1.min.js"></script>
  <script src="assets/js/vander/popper.min.js"></script>
  <script src="assets/js/vander/bootstrap.min.js"></script>
  <!-- Google maps geolocation -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVyNXoXHkqAwBKJaouZWhHPCP5vg7N0HQ&amp;callback=initMap"
  async defer></script>
  <!-- Custom Script -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/toggler.js"></script>
    <!-- codingeek -->
    <script src="codingeek-link.js"></script>
    <script src="../../codingeek-js/codingeek.js"></script>
</body>


<!-- Mirrored from codingeek.net/html/banting-university/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Apr 2020 20:36:11 GMT -->
</html>
