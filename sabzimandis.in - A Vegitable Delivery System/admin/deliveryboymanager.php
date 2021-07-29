<?php
session_start();
if(!isset($_SESSION['admin']))
        header("location:adminlogin.php");

 ?>
<?php
include "include/conn.php";

if(isset($_GET['id'])){
  $id=$_GET['id'];
  $sql="DELETE FROM deliveryboy WHERE id='$id'";
  if(mysqli_query($conn,$sql)){
  }
  }

  if( isset($_POST['submit']) ){

$username=$_POST['username'];
$password=$_POST['password'];
$city=$_POST['city'];


$sql = "INSERT INTO deliveryboy (username, password, city)
                VALUES ('$username', '$password', '$city')";

                if ($conn->query($sql) === TRUE) {
                    $error= "New deliveryboy added successfully";
                } else {

                    echo "Error: " . $sql . "<br>" . $conn->error;
                }


}
 ?>
<!DOCTYPE HTML>
<html>
<head>
  <?php include "include/title.php"; ?>
  <style>


  .style-block input[type="text"], .style-block input[type="password"],.style-block input[type="email"],.style-block textarea,.style-block select {
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
      width: 50%;
      margin: 0 auto;
      border-radius: 3px;
      padding: 0.5em 1em;
      font-size: 1em;
      display: block;
      font-family: 'Carrois Gothic', sans-serif;
  }
  .style-block input[type="submit"]:hover{
  	transition: 0.5s all;
    background:#68AE00;
  	-webkit-transition: 0.5s all;
  	-moz-transition: 0.5s all;
  	-o-transition: 0.5s all ;
  	-ms-transition: 0.5s all;
  }
  .style-block label{
    width:100%;
  }
  </style>
</head>
<body>
<div class="page-container">
   <div class="left-content" style="width:100%;">
	   <div class="mother-grid-inner">
            <!--header start here-->
			<?php //include "include/header.php"; ?>
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
    	<h2>Create</h2><a href="index.php"><h3>Home</h3></a></br>
    	<div class="blankpage-main">

<div class="style-block" style="min-width:100%;">



  <form action="" method="post" enctype="multipart/form-data">
  
  <div>
      <label>city
        <select name="city">
          <?php
          $select2 ="SELECT * FROM cities";
          $result2=mysqli_query($conn,$select2);
          if(mysqli_num_rows($result2)>0){
                       while($row2=mysqli_fetch_assoc($result2)){
                              $productname=$row2['city'];
                              $id=$row2['id'];
                            echo "  <option value='$productname'>$productname</option>";
                  }
        }
         ?>
</select>
      </label>
    </div>

<div>
  <label>username
    <input placeholder="username" name="username" type="text" tabindex="3"  required>
  </label>
</div>

<div>
  <label>password
    <input placeholder="password" name="password" type="text" tabindex="3"  required>
  </label>
</div>


    <div>
      <input type="submit" name="submit" value="Add deliveryboy">
    </div>

    </div>

  </form>




</div>















<table class="table table-striped table-bordered table-hover dataTables-example">
<tr>
    <th>username</th>
    <th>password</th>
    <th>city</th>
    <th>date</th>
    <th>delete</th>
  </tr>


<?php
$select="SELECT * from deliveryboy";
$result=mysqli_query($conn,$select);
if(mysqli_num_rows($result)>0){
             while($row=mysqli_fetch_assoc($result)){
              $username=$row['username'];
              $password=$row['password'];
              $city=$row['city'];
              $id=$row['id'];
              $date=$row['dated'];
?>
  <tr>
    <td><?php echo "$username";?></td>
    <td><?php echo "$password";?></td>
    <td><?php echo "$city";?></td>
    <td><?php
        $date=date_create($date);
        echo date_format($date,"d/m/Y H:i:s"); ?></td>
        <td><a href="deliveryboymanager.php?id=<?php echo "$id";?>">Delete</a></td>
  </tr>
           <?php
           }

           }
?>
</table>


















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
<!--    <div class="sidebar-menu">
		  <?php //include "include/sidenav.php";?>
	 </div> -->
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
