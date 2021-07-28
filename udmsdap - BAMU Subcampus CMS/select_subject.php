<!DOCTYPE html>
<html lang="en">
<?php
  if(!isset($_COOKIE['sem'])){
     header('location:select_semester.php');}
     else {
       $subject = $_COOKIE['subject'];
       $sem = $_COOKIE['sem'];
     }

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
<?php  //include "include/newnav.php";
if(isset($_POST['sub']))
     {
        setcookie("sub",$_POST['sub'],time()+86400);
        header("location:notes.php");

     }


?>



  <!-- Signin Section -->
  <section class="sign-in-section section">

    <div class="container">

      <div class="row">

        <div class="col-12 col-lg-6 sign-in">
          <h2>Select Subject</h2>
          <div class="sign-with-email">
            <h6></h6>
<form action="" method="post">
            <?php

            $select = "SELECT * from subjects where course='$subject' and sem='$sem'";
            $result = mysqli_query($conn,$select);
            if(mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)){
                  $sub  = $row['subject'];
                       ?>

                             <button type="submit" name="sub" value="<?php echo $sub;?>" class="large-btn"><?php echo $sub;?></button>
                       <?php
}
            }
?>







                   </form>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Footer Section -->

<?php //include "include/footer.php";?>

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
