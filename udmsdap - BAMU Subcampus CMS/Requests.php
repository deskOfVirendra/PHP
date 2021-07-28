
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



if(isset($_GET['id']) && isset($_GET['stetus'])){
  $id=$_GET['id'];
  $stetus=$_GET['stetus'];
  $sql = "UPDATE students SET status='$stetus' WHERE username='$id'";


                  if ($conn->query($sql) === TRUE) {
                      $error= "user configured  successfully";
                    //  header("dboy.php");
                  } else {
                      echo "Error: " . $sql . "<br>" . $conn->error;
                  }

}
?>

  <!-- Signin Section -->

  <section class="sign-in-section section">
  <a href="alogout.php"><button class='small-btn' style="float:right;position:relative'">Logout</button></a>

          <h2><center>Students List</center></h2>



            <?php





            $sql = "SELECT * FROM students where status=0 order by id desc  ";


            if($result = mysqli_query($conn, $sql)){
            if(mysqli_num_rows($result) > 0){
            echo "<table id='users-table' class='table table-striped table-bordered table-hover dataTables-example'>";
            echo "<tr>";
            echo "<th>Fullname</th>";
            echo "<th>Course</th>";
            echo "<th>Email</th>";
            echo "<th>DOB</th>";

            echo "<th>Mobile</th>";
  echo "<th>gender</th>";
    echo "<th>username</th>";
      echo "<th>password</th>";
            echo "<th>status</th>";
            echo "</tr>";
            while($row = mysqli_fetch_array($result)){
            $id=$row['id'];
            $user = $row['username'];
            $mob=$row['mobile'];
            if ($row['status'] == 0)
                    $status = "blocked";
            else
                    $status = "active";


            echo "<tr>";
                            echo "<td>" .  $row['fname'] ." ".$row['mname']." ".$row['lname'] ."</td>";
                            echo "<td>" . $row['course'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>" . $row['dob'] . "</td>";
                              echo "<td>" . $row['mobile'] . "</td>";
                              echo "<td>" . $row['gender'] . "</td>";
                              echo "<td>" . $row['username'] . "</td>";
                              echo "<td>" . $row['password'] . "</td>";
                              echo "<td>" . " <select name='forma' onchange='location = this.value;'>
                              <option value='' selected></option>
                                <option value='Requests.php?id=$user&stetus=1''>Approve</option>


                             </select>" . "</td>";




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
