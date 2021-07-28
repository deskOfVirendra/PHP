<!DOCTYPE html>
<html lang="en">
<?php
if(isset($_GET['subject']))
{
  setcookie("subject",$_GET['subject'], time()+86400);
  header("location:select_semester.php");
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
<?php  //include "include/newnav.php";?>



  <!-- Signin Section -->
  <section class="sign-in-section section">

    <div class="container">

      <div class="row">

        <div class="col-12 col-lg-6 sign-in">
          <h2>Select Subject</h2>
          <div class="sign-with-email">
            <h6></h6>
<form action="" method="get">
  <input type="submit" name="subject" value="MBA" class="small-btn">
  <input type="submit" name="subject" value="MCA" class="small-btn">

</form>
          </div>
        </div>






      </div>
    </div>
  </section>
  <h2><center>Notice</center></h2>

  <?php




  $sql = "SELECT * FROM notices order by id desc limit 20 ";


$result = mysqli_query($conn, $sql);
  if(mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_array($result)){
  $id=$row['id'];
  $date = $row['dateby'];
  $title = $row['title'];
  $description = $row['description'];
  $event = $row['fullday'];
  $peoples = $row['peoples'];
  $venue = $row['venue'];
  $photo = $row['photo'];


$newdate  = strtotime($date);
$day = date("d",$newdate);
$year = date("Y",$newdate);
$monthNum  = date("m",$newdate);
$month = date('F', mktime(0, 0, 0, $monthNum, 10));

?>
<div class="container">
    <div class="row event-item-style-1 odd-event">
        <div class="col-5 col-lg-2 date">
            <h1><?php echo $day;?></h1>
            <h5><?php echo $month;?> <?php echo $year;?></h5>
        </div>
        <div class="col-7 col-md-6 col-lg-3 media">
            <img src="<?php echo $photo;?>" alt="events image"
                class="img-fluid">
        </div>
        <div class="col-12 col-lg-7 details">
            <h3><?php echo $title;?></h3>
            <p><?php echo $description; ?></p>
            <div class="d-flex align-items-center event-infos">
                <div class="info">
                    <i class="fas fa-clock"></i>
                    <span><?php echo $event;?></span>
                </div>
                <div class="info ml-5">
                    <i class="fas fa-users"></i>
                    <span><?php echo $peoples;?></span>
                </div>
                <div class="info ml-5">
                    <i class="fas fa-map-marker-alt"></i>
                    <span><?php echo $venue; ?></span>
                </div>
            </div>
            <a href="<?php echo $photo;?>"  target="_blank"><button class="small-btn" style="float:right;">Download</button></a>
        </div>
    </div>
</div>


<?php
  }

  // Free result set
  mysqli_free_result($result);
  }


  ?>

  <?php //include "include/footer.php";?>
  <!-- Footer Section -->

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
