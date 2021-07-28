
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

<body style="overflow:auto;">

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

  <section class="sign-in-section section" >

  <a href="alogout.php"><button class='small-btn' style="float:right;position:relative'">Logout</button></a>
          <h2><center>Students List</center></h2>



            <?php





            $sql = "SELECT * FROM students  order by id desc  ";


            if($result = mysqli_query($conn, $sql)){
            if(mysqli_num_rows($result) > 0){
            echo "<table id='users-table' class='table table-striped table-bordered table-hover dataTables-example' style='overflow:auto;'>";
            echo "<tr>";
                echo "<th>Fullname</th>";
                echo "<th>Mother's Name</th>";
                echo "<th>Email</th>";
                echo "<th>DOB</th>";
                echo "<th>Mobile</th>";
                echo "<th>Parent's Mobile </th>";
                echo "<th>gender</th>";
                echo "<th>username</th>";
                echo "<th>password</th>";
                echo "<th>Nation</th>";
                echo "<th>State</th>";
                echo "<th>City</th>";
                echo "<th>Religion</th>";
                echo "<th>Cast</th>";
                echo "<th>Subcast</th>";
                echo "<th>Aadhaar No.</th>";
                echo "<th>PAN No.</th>";
                echo "<th>Permanant Address</th>";
                echo "<th>Residential Address</th>";
                echo "<th>SSC passing year</th>";
                echo "<th>SSC Board</th>";
                echo "<th>School Name</th>";
                echo "<th>SSC percentage</th>";
                echo "<th>HSC passing year</th>";
                echo "<th>HSC Board</th>";
                echo "<th>College Name</th>";
                echo "<th>HSC percentage</th>";
                echo "<th>Degree passing year</th>";
                echo "<th>University Name</th>";
                echo "<th>College Name</th>";
                echo "<th>Degree percentage</th>";


            echo "<th>status</th>";
              echo "<th>Photo</th>";
            echo "</tr>";
            while($row = mysqli_fetch_array($result)){
            $id=$row['id'];
            $user = $row['username'];
            $mob=$row['mobile'];
            $imgid = $row['photo'];
            $img = "<img src='$imgid' width='60px'>";
            if ($row['status'] == 0)
                    $status = "blocked";
            else
                    $status = "active";


            echo "<tr>";
                            echo "<td>" .  $row['fname'] ." ".$row['mname']." ".$row['lname'] ."</td>";
                            echo "<td>" . $row['mother'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>" . $row['dob'] . "</td>";
                            echo "<td>" . $row['mobile'] . "</td>";
                            echo "<td>" . $row['pmob'] . "</td>";
                            echo "<td>" . $row['gender'] . "</td>";
                            echo "<td>" . $row['username'] . "</td>";
                            echo "<td>" . $row['password'] . "</td>";
                            echo "<td>" . $row['nation'] . "</td>";
                            echo "<td>" . $row['state'] . "</td>";
                            echo "<td>" . $row['city'] . "</td>";
                            echo "<td>" . $row['religion'] . "</td>";
                            echo "<td>" . $row['cast'] . "</td>";
                            echo "<td>" . $row['subcast'] . "</td>";
                            echo "<td>" . $row['addhar'] . "</td>";
                            echo "<td>" . $row['pan'] . "</td>";
                            echo "<td>" . $row['perm'] . "</td>";
                            echo "<td>" . $row['resi'] . "</td>";
                            echo "<td>" . $row['sy'] . "</td>";
                            echo "<td>" . $row['sboard'] . "</td>";
                            echo "<td>" . $row['scname'] . "</td>";
                            echo "<td>" . $row['sper'] . "</td>";
                            echo "<td>" . $row['hy'] . "</td>";
                            echo "<td>" . $row['hboard'] . "</td>";
                            echo "<td>" . $row['hcname'] . "</td>";
                            echo "<td>" . $row['hper'] . "</td>";
                            echo "<td>" . $row['gy'] . "</td>";
                            echo "<td>" . $row['gboard'] . "</td>";
                            echo "<td>" . $row['gcname'] . "</td>";
                            echo "<td>" . $row['gper'] . "</td>";
                            echo "<td>" . $status . "</td>";
                            echo "<td>" . $img . "</td>";



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
