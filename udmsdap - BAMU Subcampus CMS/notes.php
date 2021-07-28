<!DOCTYPE html>

<?php
include "include/conn.php";
if(!isset($_COOKIE['sessionid']))
    header("location:index.php");
else{
$sessionid = $_COOKIE['sessionid'];
/*$user1 = "SELECT * from students where username = '$sessionid'";
$result = mysqli_query($conn,$user1);
if(mysqli_num_rows($result)>0)
{
  while($row = mysqli_fetch_assoc($result))
{        $course = $row['course'];
        $sem = $row['sem'];
      }
}
*/

$course = $_COOKIE['subject'];
$sem = $_COOKIE['sem'];
$subject = $_COOKIE['sub'];
}
?>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Google Fonts -->


    <!-- Fab Icon -->
    <link rel="shortcut icon" type="image/png" href="assets/img/logos/fav_icon.png" />
    <!-- Fonts Awesome Icons -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/all.min.css">
    <!-- Bootstrap Link -->
    <link rel="stylesheet" href="assets/css/vander/bootstrap.min.css">
    <!-- Animate Css -->
    <link rel="stylesheet" href="assets/css/vander/animate.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="assets/css/vander/owl.carousel.min.css">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="assets/css/vander/slick.css">
    <!-- Flaticon -->
    <link rel="stylesheet" href="assets/css/vander/flaticon.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>BAMU Sub-Campus University</title>
    <!--Codingeek -->
    <link rel="stylesheet" href="../../codingeek-js/codingeek.css">
</head>

<body>

<?php include "include/navbar.php";?>

    <!-- Showcase Section -->


    <!-- Events Section -->
    <section class="events-section section">
        <!-- Side Icons -->
        <div class="fixed-right side-form-icons">
            <i class="fas fa-phone icon" id="open-opening-popup"></i>
            <i class="fas fa-map-marker-alt icon" id="open-location-popup"></i>
            <i class="fas fa-envelope icon" id="open-form-popup"></i>
        </div>
        <div class="container">
<?php ?>
          <?php
              $select = "SELECT * from stuff where course='$course' and semester='$sem' and subject='$subject' ";
              $result1 = mysqli_query($conn,$select);
              if(mysqli_num_rows($result1) > 0)
              {
                echo "in if";
                while($row=mysqli_fetch_assoc($result1)){

                    echo "in while";
                  ?>


            <div class="row event-item-style-1 odd-event">
                <div class="col-5 col-lg-2 date">
                    <h1>12</h1>
                    <h5>May 2020</h5>
                </div>
                <div class="col-7 col-md-6 col-lg-3 media">
                  <img src="assets/img/University/students/adult-biology-chemical.png" alt="events image"
                        class="img-fluid">
                </div>
                <div class="col-12 col-lg-7 details">
                    <h3><?php echo $row['topic']; ?></h3>
                    <p><?php echo $row['desci'];?></p>
                    <div class="d-flex align-items-center event-infos">
                        <div class="info">
                            <i class="fas fa-clock"></i>
                            <span>subject : <?php echo $row['subject'];?> </span>
                        </div>
                        <div class="info ml-5">
                            <i class="fas fa-users"></i>
                            <span>Unit <?php echo $row['unit'];?></span>
                        </div>


                        <?php if($row['yt'] != ""){?>
                          <div class="info ml-5">
                            <a href="<?php echo $row['yt'];?>"  target="_blank" ><i class="fa fa-youtube-play" style="color:'Red';"></i>
                              <span>Watch</span></a>
                          </div>
                        <?php } ?>
                    </div>

                    <a href="<?php echo $row['pdffile'];?>"  target="_blank"><button class="small-btn" style="float:right;">Download</button></a>
                </div>
            </div>

            <?php
          }
        }
        else{
          echo "dfghjk";
        }
     ?>
        </div>
    </section>

    <!-- Popup -->


    <!-- testimonial carousel area -->

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
    <script src="assets/js/vander/owl.carousel.min.js"></script>
    <script src="assets/js/vander/slick.min.js"></script>
    <script src="assets/js/vander/waypoints.min.js"></script>
    <script src="assets/js/vander/jQuery.rcounter.js"></script>

    <!-- Google maps geolocation -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqFuLx8S7A8eianoUhkYMeXpGPvsXp1NM&amp;callback=initMap"
        async defer></script>
    <!-- Custom Script -->
    <script src="assets/js/map.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/slider.js"></script>
    <script src="assets/js/toggler.js"></script>
    <!-- codingeek -->
    <script src="codingeek-link.js"></script>
    <script src="../../codingeek-js/codingeek.js"></script>
</body>


<!-- Mirrored from codingeek.net/html/banting-university/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Apr 2020 20:35:44 GMT -->
</html>
