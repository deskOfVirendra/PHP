
<?php
if(!isset($_COOKIE['admin']))
    header("location:admin_login.php");
?>
<!DOCTYPE html>
<html lang="en">


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
<?php //include "include/navbar.php";


if(isset($_GET['delete'])){
      $delete=$_GET['delete'];
      $sql1="DELETE  FROM subjects WHERE id='$delete'";
      if(mysqli_query($conn,$sql1)){
        header("location:add_subject.php");
      }

      else{
        echo "error";
        exit;
      }


}

?>

<?php
$error = "";
if(isset($_GET['submit'])) {

    $subject= $_GET['subject'];

    $course = $_GET['course'];

    $sem = $_GET['semester'];

    $code = $_GET['code'];

    $email = $_GET['email'];

    $teacher = $_GET['teacher'];

    $mobile = $_GET['mobile'];

    $remarks = $_GET['remarks'];

    $insert="INSERT INTO subjects (subject,course,sem,code,teacherr,email,mobile,remarks) VALUES ('$subject','$course','$sem','$code','$teacher','$email','$mobile','$remarks')";
    $query=mysqli_query($conn,$insert);
    if($query===false){

      die("could not insert the data".mysqli_connect_error());
     $error = "";
     $color = "red";
    }
    $error =  "Subject Added Successfully!!!!";
    $color = "#6AE000";


}
?>

  <!-- Signin Section -->
  <section class="sign-in-section section">
      <a href="alogout.php"><button class='small-btn' style="float:right;position:relative'">Logout</button></a>
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6 sign-in">
          <h2>Manage Subjects</h2>
          <div class="sign-with-email">
           <h6 style="color:<?php echo $color;?>"><?php echo $error;?></h6>
            <form action="" class="form-style-2" method="get">

              <div class="form-group required">
                <label for="email_address">Subject Name</label>
                <input type="text"  class="form-control" name="subject" placeholder="" required/>
              </div>


              <div class="form-group required">
                <label for="email_address">Select Course</label>
                <select name="course" class="select-box" required>
                  <option value="MBA">MBA</option>
                  <option value="MCA">MCA</option>
              </select>
              </div>



                            <div class="form-group required">
                              <label for="email_address">Select Semester</label>
                              <select name="semester" class="select-box" required>
                                <option value="1">1</option>
                                  <option value="2">2</option>
                                    <option value="3">3</option>
                                      <option value="4">4</option>
                                        <option value="5">5</option>
                                          <option value="6">6</option>
                            </select>
                            </div>


                            <div class="form-group required">
                              <label for="email_address">Subject Code</label>
                              <input type="text"  class="form-control" name="code" placeholder="" required/>
                            </div>

                            <div class="form-group required">
                              <label for="email_address">Subject Teacher Name</label>
                              <input type="text"  class="form-control" name="teacher" placeholder="" required/>
                            </div>

                            <div class="form-group required">
                              <label for="email_address">Teacher's Email ID</label>
                              <input type="email"  class="form-control" name="email" placeholder="" required/>
                            </div>

                            <div class="form-group required">
                              <label for="email_address">Teacher's Mobile Number</label>
                              <input type="text"  class="form-control" name="mobile" placeholder="" required/>
                            </div>

                            <div class="form-group required">
                              <label for="email_address">Remarks</label>
                              <input type="text"  class="form-control" name="remarks" placeholder="" required/>
                            </div>

            <input type="submit" value="Add Subject" name="submit" class="small-btn" >

            </form>
          </div>

          <h2>All Subjects</h2>


            <?php




            $sql = "SELECT * FROM subjects  ";


            if($result = mysqli_query($conn, $sql)){
            if(mysqli_num_rows($result) > 0){
            echo "<table id='users-table' class='table table-striped table-bordered table-hover dataTables-example'>";
            echo "<tr>";
              echo "<th>ID</th>";
            echo "<th>Subject</th>";
            echo "<th>Course</th>";
              echo "<th>Semester</th>";
                echo "<th>Action</th>";
            echo "</tr>";
            while($row = mysqli_fetch_array($result)){
            $id=$row['id'];


            echo "<tr>";

                            echo "<td>" . $row['id'] . "</td>";
                              echo "<td>" . $row['subject'] . "</td>";
                                echo "<td>" . $row['course'] . "</td>";
                                echo "<td>" . $row['sem'] . "</td>";
                                   echo "<td><a href='add_subject.php?delete=$id'>" ."delete". "</td>";


            echo "</tr>";
            }
            echo "</table>";
            // Free result set
            mysqli_free_result($result);
            } else{
            echo "No users";
            }
            } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
            }




            ?>
  </div>

      </div>
    </div>
  </section>

  <!-- Footer Section -->

<?php //include "include/footer.php";?>

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
