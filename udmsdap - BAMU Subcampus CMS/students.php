<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from codingeek.net/html/banting-university/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Apr 2020 20:36:11 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

      <!-- Fab Icon -->
      <link rel="shortcut icon" type="image/png" href="assets/img/logos/fav_icon.png"/>
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
  
    
<?php include "include/navbar.php";?>


  <!-- Signin Section -->
  <section class="sign-in-section section">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6 sign-in">
          <h2>Students Login</h2>
          <div class="sign-with-email">
            <h6>Or sign up using your email</h6>
            <form action="#" class="form-style-2">
              <div class="form-group required">
                <label for="email_address">Email address</label>
                <input type="email" id="email_address" class="form-control" name="email" placeholder="youremail@gmail.com" />
              </div>

              <div class="form-group required">
                <label for="password">Password</label>
                <input type="password" id="password" class="form-control" name="password"
                  placeholder="*****************">
              </div>
              <button class="small-btn">Login</button>
            </form>
          </div>
        </div>
        <div class="col-12 col-lg-6 sign-up">
          <div class="content">
              <h2>Hi there! Sign up to join us</h2>
              <p>Only Department Students Can Join The Portal</p>
              <a href="sign-up.html" class="small-btn">Sign up</a>
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