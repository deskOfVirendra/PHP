<?php
include "include/conn.php";
session_start();
if(!isset($_COOKIE['user']))
     header("location:login.php");


$user=$_COOKIE['user'];
 $select ="SELECT * from userid where  mobileno='$user'";
 $result=mysqli_query($conn,$select);
 if(mysqli_num_rows($result) != 0){
              while($row=mysqli_fetch_assoc($result)){
                $city=$row['city'];
                 $firstname=$row['firstname'];
                 $lastname=$row['lastname'];
                 $mobileno=$row['mobileno'];
                 $email=$row['email'];
                 $address=$row['address'];


               }
             }
if(isset($_POST['submit'])){
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$city=$_POST['city'];
$email=$_POST['email'];
$address=$_POST['address'];

$sql = "UPDATE userid SET firstname='$firstname',lastname='$lastname',city='$city',email='$email',address='$address' WHERE mobileno='$user'";

        if (mysqli_query($conn, $sql)) {
              header("location:index.php");

                }


}
?>





<!DOCTYPE HTML>
<html>
<head>
  <?php include "include/title.php"; ?>
  <style>


  .style-block input[type="text"], .style-block input[type="password"],.style-block input[type="email"],.style-block textarea {
      font-size: 0.9em;
      padding: 10px 20px;
      min-width: 100%;
      color:#686967;
      outline: none;
      border: 1px solid #D3D3D3;
       border-radius: 5px;
  	-ms-border-radius: 5px;
  	-moz-border-radius: 5px;
  	-o-border-radius: 5px;
      background:#F5F5F5;
      margin: 0em 0em 1.5em 0em;
  }
  .style-block input[type="submit"] {
      border: none;
      outline: none;
      cursor: pointer;
      color: #fff;
      background: #337AB7;
      width: 100%;
      margin: 0 auto;
      border-radius: 3px;
      padding: 0.5em 1em;
      font-size: 1em;
      display: block;
      font-family: 'Carrois Gothic', sans-serif;
  }
  .style-block input[type="submit"]:hover{
  	background:#007eff;
  	transition: 0.5s all;
  	-webkit-transition: 0.5s all;
  	-moz-transition: 0.5s all;
  	-o-transition: 0.5s all ;
  	-ms-transition: 0.5s all;
  }
  .style-block label{
    width:80%;
  }
  </style>
</head>
<body>
<div class="page-container">
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
			<?php include "include/header.php"; ?>
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop();
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });

		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">
    <div class="blank">
    	<h2><?php echo $user;?></h2>
    	<div class="blankpage-main">

<div class="style-block" style="min-width:100%;">




        <form action="" method="post" enctype="multipart/form-data">
          <div>
            <label>FirstName
              <input placeholder="firstname"  name="firstname" value="<?php echo $firstname;?>" type="text" tabindex="3"  >
            </label>
          </div>
          <div>
            <label>LastName
              <input placeholder="Last name" type="text"  value="<?php echo $lastname;?>" name="lastname" tabindex="3" >
            </label>
          </div>
          <div>
            <label>Email
              <input placeholder="email" type="email"  value="<?php echo $email;?>" name="email" tabindex="3" >
            </label>
          </div>



            <div>
            <label>Mobile
              <input placeholder="mobile no" type="text"  value="<?php echo $mobileno;?>" name="mobileno"tabindex="3"   readonly>
            </label>
          </div>


           <div>
            <label>City
              <input placeholder="city" type="text"  value="<?php echo $city;?>" name="city" tabindex="3" >
            </label>
          </div>
          <div>
            <label>Address
              <textarea placeholder="address" type="text" name="address"   rows=5 cols=auto ><?php echo $address;?></textarea>
            </label>
          </div>

          <div>
            <input type="submit" name="submit" value="update">
          </div>
          <div>

          </div>

        </form>





</div>
          	</div>
    </div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
<?php include "include/footer.php";?>
<!--COPY rights end here-->
</div>
</div>
<!--slider menu-->
    <div class="sidebar-menu">
		  <?php include "include/sidenav.php";?>
	 </div>
	<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<script>
var toggle = true;

$(".sidebar-icon").click(function() {
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>
