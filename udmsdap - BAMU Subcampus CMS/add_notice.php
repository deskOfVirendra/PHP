<!DOCTYPE html>
<html lang="en">
<?php if(!isset($_COOKIE['admin'])){
            header('location:admin_login.php');

          }
?>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
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

<?php include "include/conn.php"; ?>
<?php //include "include/navbar.php";?>

<?php
$error = "";
if(isset($_POST['submit'])) {

    $date = $_POST['date'];

    $topic= $_POST['title'];

    $desc = $_POST['description'];

    $event = $_POST['event'];

    $people = $_POST['people'];

    $venue = $_POST['venue'];

    $subject = $_POST['subject'];

    $remarks = $_POST['remarks'];

$course =  $_POST['course'];


    $rand=rand(1,10000000);
    $rand.=time();
    $pdf = $_FILES['pdf']['tmp_name'];

    $target="uploads/".$rand.".".pathinfo($_FILES['pdf']['name'])['extension'];;
if(move_uploaded_file($pdf,$target)){

      $sql = "INSERT INTO notices(dateby, title, description, fullday, peoples, venue, photo,subject,remarks,course) VALUES  ('$date','$topic','$desc', '$event', '$people','$venue','$target','$subject','$remarks','$course')";

                      if ($conn->query($sql) === TRUE) {
                          $error= "Notice added successfully";
                      } else {

                          echo "Error: " . $sql . "<br>" . $conn->error;
                      }

            }
            else {

            $error = "Unable to add notice!!";



}
}
?>

  <!-- Signin Section -->
  <section class="sign-in-section section">
      <a href="alogout.php"><button class='small-btn' style="float:right;position:relative'">Logout</button></a>
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6 sign-in">
          <h2>Manage Notices</h2>
          <div class="sign-with-email">
           <h6 style="color:<?php echo $color;?>"><?php echo $error;?></h6>
            <form action="" class="form-style-2" method="POST" enctype="multipart/form-data">
              <div class="form-group required">
                <label for="email_address">Date</label>
                <input type="date"  class="form-control" name="date" placeholder="" required/>
              </div>

              <div class="form-group required">
                <label for="email_address">Title</label>
                <input type="text"  class="form-control" name="title" placeholder="" required/>
              </div>

              <div class="form-group required">
                <label for="email_address">Description</label>
                <input type="text"  class="form-control" name="description" placeholder=""  required/>
              </div>



              <div class="form-group required">
                <label for="email_address"> Event</label>
                <select name="event" class="select-box">
                    <option value=""></option>
                  <option value="Full Day">Full Day</option>
                  <option value="Half Day">Half Day</option>
              </select>
              </div>






              <div class="form-group required">
                <label for="email_address">How many people are attending ?</label>
                <input type="text"  class="form-control" name="people" placeholder="" />
              </div>

              <div class="form-group required">
                <label for="email_address">Venue</label>
                <input type="text"  class="form-control" name="venue" placeholder="" />
              </div>

              <div class="form-group required">
                <label for="email_address">Select Subject</label>
                  <select name="subject">
                    <?php





                    $select2 ="SELECT * FROM subjects ";
                    $result2=mysqli_query($conn,$select2);
                    if(mysqli_num_rows($result2)>0){
                                 while($row2=mysqli_fetch_assoc($result2)){
                                        $productname=$row2['subject'];

                                        $id=$row2['id'];

                                      echo "  <option value='$productname'>$productname</option>";

                            }

                  }


                   ?>



          </select>
              </div>

              <div class="form-group required">
                <label for="email_address"> Select Course</label>
                <select name="course" class="select-box">
                    <option value=""></option>
                  <option value="MBA">MBA</option>
                  <option value="MCA">MCA</option>
              </select>
              </div>


              <div class="form-group required">
                <label for="email_address">Remarks</label>
                <input type="text"  class="form-control" name="remarks" placeholder="" required/>
              </div>


              <div class="form-group required">
                <label for="password">Upload </label>
                <input type="file" id="password" class="form-control" name="pdf"
                  placeholder="" >
              </div>


            <input type="submit" value="Add Notice" name="submit" class="small-btn" >

            </form>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Footer Section -->

<?php include "include/footer.php";?>

  <!--<div class="preloader" id="preloader">
    <div class="preloader-inner">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
</div>
-->
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
