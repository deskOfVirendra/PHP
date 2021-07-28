
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
      $sql1="DELETE  FROM stuff WHERE id='$delete'";
      if(mysqli_query($conn,$sql1)){
        header("location:allnotes.php");
      }

      else{
        echo "error";
        exit;
      }


}
?>

  <!-- Signin Section -->

  <section class="sign-in-section section">

  <a href="alogout.php"><button class='small-btn' style="float:right;position:relative'">Logout</button></a>
          <h2><center>Manage Notes</center></h2>



            <?php




            $sql = "SELECT * FROM stuff  ";


            if($result = mysqli_query($conn, $sql)){
            if(mysqli_num_rows($result) > 0){
            echo "<table id='users-table' class='table table-striped table-bordered table-hover dataTables-example'>";
            echo "<tr>";
              echo "<th>ID</th>";
            echo "<th>Topic</th>";
            echo "<th>Description</th>";
              echo "<th>Course</th>";
                echo "<th>Subject</th>";
                  echo "<th>Semester</th>";
                echo "<th>YT link</th>";
                 echo "<th>Source file</th>";
                echo "<th>Unit</th>";
                echo "<th>Uploaded by</th>";
                  echo "<th>Action</th>";
            echo "</tr>";
            while($row = mysqli_fetch_array($result)){
            $id=$row['id'];


            echo "<tr>";

                            echo "<td>" . $row['id'] . "</td>";
                              echo "<td>" . $row['topic'] . "</td>";
                                echo "<td>" . $row['desci'] . "</td>";
                              echo "<td>" . $row['course'] . "</td>";
                              echo "<td>" . $row['subject'] . "</td>";
                              echo "<td>" . $row['semester'] . "</td>";
                              echo "<td>" . $row['yt'] . "</td>";
                              echo "<td>" . $row['pdffile'] . "</td>";
                              echo "<td>" . $row['unit'] . "</td>";
                                echo "<td>" . $row['asdf'] . "</td>";
                                echo "<td><a href='allnotes.php?delete=$id'>" ."delete". "</td>";



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
