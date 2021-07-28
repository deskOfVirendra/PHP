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
<?php include "include/navbar.php";?>

<?php
$error = "";
if(isset($_POST['submit'])) {

    $fname= $_POST['fname'];

    $mname = $_POST['mname'];

    $lname = $_POST['lname'];

    $mother = $_POST['mother'];

    $email = $_POST['email'];

    $mobile = $_POST['mobile'];

    $pmob = $_POST['pmob'];

    $gender = $_POST['gender'];

    $dob = $_POST['dob'];

    $nation = $_POST['nation'];

    $state = $_POST['state'];

    $city = $_POST['cv'];

    $religion = $_POST['rel'];

    $cast = $_POST['cast'];

    $subcast = $_POST['subcast'];

    $adhr = $_POST['adhr'];

    $pan = $_POST['pan'];

    $perm = $_POST['perm'];

    $resi = $_POST['resi'];

    $sscyear = $_POST['sy'];

    $sscboard = $_POST['sboard'];

    $ssccollege = $_POST['scname'];

    $sscpercentage = $_POST['sper'];

    $hscyear = $_POST['hy'];

    $hscboard = $_POST['hboard'];

    $hsccollege = $_POST['hcname'];

    $hscpercentage = $_POST['hper'];

    $gyear = $_POST['gy'];

    $gboard = $_POST['gboard'];

    $gcollege = $_POST['gcname'];

    $gpercentage = $_POST['gper'];

    $username = $_POST['username'];

    $password = $_POST['password'];


 $rand=rand(1,10000000);
    $rand.=time();
    echo $_FILES['photo']['name'];
    $pdf = $_FILES['photo']['tmp_name'];

    $target="students/".$rand.".".pathinfo($_FILES['photo']['name'])['extension'];


    $select  = "SELECT username from students where username = '$username'";
    $result = mysqli_query($conn,$select);
    if (mysqli_num_rows($result) > 0 )
          {
                 $error = "Username Already Exists!!!";
                 $color = "red";

          }
else{
	if(move_uploaded_file($pdf,$target))
		     ;
		 else
		 	  exit();

    $insert="INSERT INTO students (fname, mname, lname, mother, email, mobile, pmob, gender, dob, username, password, status, nation, state, city, religion, cast, subcast, addhar, pan, perm, resi, sy, sboard, scname, sper, hy, hboard, hcname, hper, gy, gboard, gcname, gper,photo)
    VALUES ('$fname','$mname','$lname','$mother','$email','$mobile','$pmob','$gender','$dob','$username','$password',0,'$nation','$state','$city','$religion','$cast','$subcast','$adhr','$pan','$perm','$resi',
      '$sscyear','$sscboard','$ssccollege','$sscpercentage','$hscyear','$hscboard','$hsccollege','$hscpercentage','$gyear','$gboard','$gcollege','$gpercentage','$target')";
    $query=mysqli_query($conn,$insert);
    if($query===false){

      die("could not insert the data".mysqli_connect_error());
     $error = "";
     $color = "red";
    }
    $error =  "Registered Successfully!!!!";
    $color = "#6AE000";
}

}
?>

  <!-- Signin Section -->
  <section class="sign-in-section section">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6 sign-in">
          <h2>Students Registration</h2>
          <div class="sign-with-email">
           <h6 style="color:<?php echo $color;?>"><?php echo $error;?></h6>
            <form action="" class="form-style-2" method="POST" enctype="multipart/form-data">

              <div class="form-group required">
                <label for="email_address">First Name</label>
                <input type="text"  class="form-control" name="fname" placeholder="" />
              </div>

              <div class="form-group required">
                <label for="email_address">Middle Name</label>
                <input type="text"  class="form-control" name="mname" placeholder=""  required/>
              </div>

              <div class="form-group required">
                <label for="email_address">Last Name</label>
                <input type="text"  class="form-control" name="lname" placeholder="" required/>
              </div>


              <div class="form-group required">
                <label for="email_address">Mother's Name</label>
                <input type="text"  class="form-control" name="mother" placeholder="" required/>
              </div>

              <div class="form-group required">
                <label for="email_address">Email ID</label>
                <input type="email"  class="form-control" name="email" placeholder="" required/>
              </div>

              <div class="form-group required">
                <label for="email_address">Mobile Number</label>
                <input type="text"  class="form-control" name="mobile" placeholder="" required/>
              </div>

              <div class="form-group required">
                <label for="email_address">Parent's Mobile Number</label>
                <input type="text"  class="form-control" name="pmob" placeholder="" required/>
              </div>

              <div class="form-group required">
                <label for="email_address">Select Your Gender</label>
              </br>
                <span>Male</span>
                <input type="radio"  class="form-control" name="gender" value="male" placeholder="" required/>
                <span>Female</span>
                <input type="radio"  class="form-control" name="gender" value="female" placeholder="" required/>
                <span>Others</span>
                <input type="radio"  class="form-control" name="gender" value="Others" placeholder="" required/>
              </div>





              <div class="form-group required">
                <label for="email_address">Date of Birth</label>
                <input type="date"  class="form-control" name="dob" placeholder="" required/>
              </div>

              <div class="form-group required">
                <label for="email_address">Nationality</label>
                <input type="text"  class="form-control" name="nation" value="Indian" placeholder="" required/>
              </div>


              <div class="form-group required">
                <label for="email_address">State</label>
                <input type="text"  class="form-control" name="state"  placeholder="" required/>
              </div>

              <div class="form-group required">
                <label for="email_address">City/Village</label>
                <input type="text"  class="form-control" name="cv"  placeholder="" required/>
              </div>

              <div class="form-group required">
                <label for="email_address">Religion</label>
                <input type="text"  class="form-control" name="rel"  placeholder="" required/>
              </div>


              <div class="form-group required">
                <label for="email_address">Cast</label>
                <input type="text"  class="form-control" name="cast"  placeholder="" required/>
              </div>


              <div class="form-group required">
                <label for="email_address">Subcast</label>
                <input type="text"  class="form-control" name="subcast"  placeholder="" required/>
              </div>


              <div class="form-group required">
                <label for="email_address">Aadhaar Number</label>
                <input type="text"  class="form-control" name="adhr"  placeholder="" required/>
              </div>



              <div class="form-group required">
                <label for="email_address">PAN Card Number</label>
                <input type="text"  class="form-control" name="pan"  placeholder="" required/>
              </div>

              <div class="form-group required">
                <label for="email_address">Permanant Address</label>
                  <textarea type="text"  class="form-control" name="perm" rows="5" cols="10"  required/></textarea>
              </div>

              <div class="form-group required">
                <label for="email_address">Residential Address</label>
                <textarea type="text"  class="form-control" name="resi" rows="5" cols="10"  required/></textarea>
              </div>

              <div class="form-group required">
                <h4><center>Education Details</center></h4>
              </div>
            </br>
              <div class="form-group required">
                <label for="email_address">SSC Passing Year</label>
                <input type="text"  class="form-control" name="sy"  placeholder="" required/>
              </div>

              <div class="form-group required">
                <label for="email_address">Name Of Board/University</label>
                <input type="text"  class="form-control" name="sboard"  placeholder="" required/>
              </div>

              <div class="form-group required">
                <label for="email_address">School Name</label>
                <input type="text"  class="form-control" name="scname"  placeholder="" required/>
              </div>

              <div class="form-group required">
                <label for="email_address">SSC Percentage</label>
                <input type="text"  class="form-control" name="sper"  placeholder="" required/>
              </div>




              <div class="form-group required">
                <label for="email_address">HSC Passing Year</label>
                <input type="text"  class="form-control" name="hy"  placeholder="" required/>
              </div>

              <div class="form-group required">
                <label for="email_address">Name Of Board/University</label>
                <input type="text"  class="form-control" name="hboard"  placeholder="" required/>
              </div>

              <div class="form-group required">
                <label for="email_address">College Name</label>
                <input type="text"  class="form-control" name="hcname"  placeholder="" required/>
              </div>

              <div class="form-group required">
                <label for="email_address">HSC Percentage</label>
                <input type="text"  class="form-control" name="hper"  placeholder="" required/>
              </div>




              <div class="form-group required">
                <label for="email_address">Graduating Year</label>
                <input type="text"  class="form-control" name="gy"  placeholder="" required/>
              </div>

              <div class="form-group required">
                <label for="email_address">Name Of University</label>
                <input type="text"  class="form-control" name="gboard"  placeholder="" required/>
              </div>

              <div class="form-group required">
                <label for="email_address">College Name</label>
                <input type="text"  class="form-control" name="gcname"  placeholder="" required/>
              </div>


              <div class="form-group required">
                <label for="email_address"> Percentage</label>
                <input type="text"  class="form-control" name="gper"  placeholder="" required/>
              </div>


              <div class="form-group required">
                <label for="email_address">Username</label>
                <input type="text"  class="form-control" name="username" placeholder="" required/>
              </div>


              <div class="form-group required">
                <label for="password">Password</label>
                <input type="password" id="password" class="form-control" name="password"
                  placeholder="" required>
              </div>

                <label for="password">Upload photo</label>
                <input type="file" id="password" class="form-control" name="photo"
                  placeholder="" required>
              </div>

            <input type="submit" value="Register" name="submit" class="small-btn" >

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
