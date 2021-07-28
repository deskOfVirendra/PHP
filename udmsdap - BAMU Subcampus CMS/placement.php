
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
      $sql1="DELETE  FROM placements WHERE id='$delete'";
      if(mysqli_query($conn,$sql1)){
        header("location:placement.php");
      }

      else{
        echo "error";
        exit;
      }


}

?>

<?php
$error = "";
$color = "";
if(isset($_POST['submit'])) {

    $title = $_POST['title'];

    $desc = $_POST['description'];

    $job = $_POST['job'];

    $cname = $_POST['cname'];

    $cmobile = $_POST['cmobile'];
    $rand=rand(1,10000000);
    $rand.=time();
    $pdf = $_FILES['pdf']['tmp_name'];

    $target="placements/".$rand.".".pathinfo($_FILES['pdf']['name'])['extension'];




    if(move_uploaded_file($pdf,$target)){

      $insert="INSERT INTO placements (title, description, jobrole, cname, cnumber, pdf) VALUES ('$title','$desc','$job','$cname','$cmobile','$target')";
      $query=mysqli_query($conn,$insert);
      if($query===false){

        die("Unexpected Error Has Been Ocurred!!!".mysqli_connect_error());
       $error = "";
       $color = "red";
      }
      else{
      $error =  "Placement Added Successfully!!!!";
      $color = "#6AE000";
  }

    }


}
?>

  <!-- Signin Section -->
  <section class="sign-in-section section" >
      <a href="alogout.php"><button class='small-btn' style="float:right;position:relative'">Logout</button></a>
    <div class="container" backgorund="none";>
      <div class="row">
        <div class="col-12 col-lg-6 sign-in">
          <h2>Manage Placements</h2>
          <div class="sign-with-email">
           <h6 style="color:<?php echo $color;?>"><?php echo $error;?></h6>
            <form action="" class="form-style-2" method="post" enctype="multipart/form-data">

              <div class="form-group required">
                <label for="email_address">Title</label>
                <input type="text"  class="form-control" name="title" placeholder="" required/>
              </div>


                            <div class="form-group required">
                              <label for="email_address">Description</label>
                              <input type="text"  class="form-control" name="description" placeholder="" required/>
                            </div>

                            <div class="form-group required">
                              <label for="email_address">job role</label>
                              <input type="text"  class="form-control" name="job" placeholder="" required/>
                            </div>

                            <div class="form-group required">
                              <label for="email_address">Contact Person Name</label>
                              <input type="text"  class="form-control" name="cname" placeholder="" required/>
                            </div>

                            <div class="form-group required">
                              <label for="email_address">Contact Person Mobile Number</label>
                              <input type="text"  class="form-control" name="cmobile" placeholder="" required/>
                            </div>


                            <div class="form-group required">
                              <label for="password">Upload file</label>
                              <input type="file" id="password" class="form-control" name="pdf"
                                placeholder="" >
                            </div>

            <input type="submit" value="Add " name="submit" class="small-btn" >

            </form>
          </div>

          <h2>All Placements</h2>


            <?php




            $sql = "SELECT * FROM placements  ";


            if($result = mysqli_query($conn, $sql)){
            if(mysqli_num_rows($result) > 0){
            echo "<table id='users-table' class='table table-striped table-bordered table-hover dataTables-example'>";
            echo "<tr>";
              echo "<th>ID</th>";
            echo "<th>Title</th>";
            echo "<th>Description</th>";
              echo "<th>job</th>";
                echo "<th>Contact Person</th>";

                  echo "<th>Contact Person Mobile</th>";
                echo "<th>Action</th>";
            echo "</tr>";
            while($row = mysqli_fetch_array($result)){
            $id=$row['id'];


            echo "<tr>";

                            echo "<td>" . $row['id'] . "</td>";
                              echo "<td>" . $row['title'] . "</td>";
                                echo "<td>" . $row['description'] . "</td>";
                                echo "<td>" . $row['jobrole'] . "</td>";
                                    echo "<td>" . $row['cname'] . "</td>";
                                       echo "<td>" . $row['cnumber'] . "</td>";
                                   echo "<td><a href='placement.php?delete=$id'>" ."delete". "</td>";


            echo "</tr>";
            }
            echo "</table>";
            // Free result set
            mysqli_free_result($result);
            } else{
            echo "oops...!!!";
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
