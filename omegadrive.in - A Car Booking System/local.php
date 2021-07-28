<?php
//session_start();
//if(!isset($_SESSION['user']))
    //header('location:login.php');

	$error = '';
if(isset($_POST['submit'])) {

	$name = $_POST['Name'];
	$mobile = $_POST['mobile'];
	$car = $_POST['car'];
	$pickupdate = $_POST['pickupdate'];
	$pickuptime = strstr($_POST['pickuptime'],":",true);
	$direction = $_POST['direction'];
	$pickuplocation = $_POST['pickuplocation'];
	$triphours = $_POST['triphours'];
	$latitude = $_POST['latitude'];
	$longitude = $_POST['longitude'];
			if($direction == 'return')
			{
    		     $droplocation = $pickuplocation;
			}
			else
			{
				$droplocation = $_POST['droplocation'];
			}
           
            setcookie("name",$name,time() + 86400 );
            setcookie("mobile",$mobile,time() + 86400 );
            setcookie("car",$car,time() + 86400 );
            setcookie("pickupdate",$pickupdate,time() + 86400 );
            setcookie("pickuptime",$pickuptime,time() + 86400 );
            setcookie("direction",$direction,time() + 86400  );
            setcookie("pickuplocation",$pickuplocation,time() + 86400 );
            setcookie("triphours",$triphours,time() + 86400  );
            setcookie("tripdays",0,time() + 86400);
            setcookie("latitude",$latitude,time() + 86400  );
            setcookie("longitude",$longitude,time() + 86400);
           
     		header("location:1.php");

	$error= "$mobile and $name and $car and $pickupdate and $pickuptime and $direction and $pickuplocation and $droplocation";

}
else{
		$error = "";
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include "include/title.php";?>	<!-- //web-fonts -->
<script>

function showall(){
	document.getElementById('droplocation').style.display="block";
}
function dontshowdrop(){
	document.getElementById('droplocation').style.display="none";
}


var x = 0;
var y = 0;

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    window.alert("Geolocation is not supported by this browser.");
  }
}

function showPosition(position) {

 document.getElementById("latitude").value = position.coords.latitude; 
 document.getElementById("longitude").value = position.coords.longitude;

}


</script>
<?php


 ?>
<style media="screen">
	#oneway,#return{
		margin-left: 5px;
	}
</style>
</head>

<body onload="getLocation()">

<?php include "include/header.php";?>
	<div class="banner" id="home">
		<!-- header -->
		<?php include "include/top.php";?>
		<!-- //header -->
	</div>
	<!-- //banner -->

<!-- Booking -->
<section class="bookingform py-5">
	<div class="container py-md-5 py-3">
		<h1 class="heading text-capitalize text-center">Booking form</h1>
		<h5 class="heading mb-5 text-center"><?php echo $error;?></h5>
		<div class="row">
			<div class="col-lg-6 book-appointment p-sm-5 py-5 px-4">
					<h2 class="sub-head-w3ls">Booking Details</h2>
				<div class="book-agileinfo-form">
					<form action="" method="post">
						<div class="row main-agile-sectns">
							<div class="col-md-6 agileits-btm-spc form-text1">
								<input type="text" name="Name" placeholder="Full Name" required="">
							</div>
							<div class="col-md-6 agileits-btm-spc form-text2">
								<input type="text" name="mobile" placeholder="Phone number" required="">
							</div>
						</div>
						<div class="row ">

							<div class="col-md-6">
								<div class="agileits-btm-spc">
									<select id="cab" name="car" class="frm-field required sect" required="">
										<option value="">Select Car</option>
										<option value="mini">Mini</option>
										<option value="sedan">Sedan</option>
										<option value="elite">Elite</option>
									</select>
								</div>
							</div>
						</div>
						<div class="clear"></div>

						<div class="row main-agile-sectns">
							<div class="col-md-6 agileits-btm-spc form-text1">
								<input  name="pickupdate" type="date" placeholder="Pick-up Date" id="datepicker" value="Input Date"
									required="">
							</div>
							<div class="col-md-6 agileits-btm-spc form-text2">
								<input type="time"  name="pickuptime"  placeholder="Pick-up Time" id="datepicker" value="" required="">
							</div>
						</div>
						<div class="row main-agile-sectns" style="padding:2px 15px;">

							 <input type="radio" name="direction"id="oneway" onclick="showall()" value="oneway" required>
							 <label >One Way</label></br>
							 <input type="radio" onclick="dontshowdrop()" id="return" name="direction" value="return" required>
							 <label >Return</label><br>

					 </div>
						<div class="row main-agile-sectns">
							<div class="col-md-6 agileits-btm-spc form-text1">
								<input type="text" name="pickuplocation" id="pickuplocation" placeholder="Pick-up Location" required="">
							</div>
							<div class="col-md-6 agileits-btm-spc form-text2">
								<input type="text" name="droplocation" id="droplocation" placeholder="Drop-off Location" >
							</div>
						</div>

						<div class="main-agile-sectns">
							<div class="agileits-btm-spc">
								<select id="passengers" name="triphours" class="frm-field required sect" required="">
									<option value="">No.of Hours</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
									<option value="20">20</option>
									<option value="21">21</option>
									<option value="22">22</option>
									<option value="23">23</option>
									<option value="24">24</option>
 							</select>
							</div>
						</div>
                        <input type ="hidden" name="latitude" id="latitude">
                        <input type="hidden" name="longitude" id="longitude">
						<input type="submit" value="Book Now" name="submit">
						<input type="reset" value="Reset">
					</form>
				</div>
			</div>
			<div class="col-lg-6 mt-md-5">
				<img src="images/car1.png" alt="" class="img-fluid" />
				<img src="images/car2.png" alt="" class="img-fluid" />
			</div>
		</div>
	</div>
</section>
<!-- //Booking -->
<input type ="hidden" name="latitude" id="latitude">
<input type="hidden" name="longitude" id="longitude">

<!--footer-->
<?php include "include/footer.php";?>
<!-- //footer -->


<!-- js-scripts -->

	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap -->
	<!-- //js -->

	<!-- Time -->
	<script type="text/javascript" src="js/wickedpicker.js"></script>
	<script type="text/javascript">
		$('.timepicker').wickedpicker({
			twentyFour: false
		});
	</script>
	<!--// Time -->
	<!-- Calendar -->
	<!--<script src="js/jquery-ui.js"></script>-->
	<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>
	<!-- //Calendar -->

	<!-- carousel -->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$('.owl-carousel').owlCarousel({
				loop: true,
				margin: 10,
				responsiveClass: true,
				responsive: {
					0: {
						items: 1,
						nav: true
					},
					600: {
						items: 1,
						nav: false
					},
					900: {
						items: 2,
						nav: false
					},
					1000: {
						items: 3,
						nav: true,
						loop: false,
						margin: 20
					}
				}
			})
		})
	</script>
	<!-- //carousel -->

	<!--slider-->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			// Slideshow 1
			$("#slider1").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 500,
				namespace: "centered-btns"
			});
		});
	</script>
	<!--//slider-->

	<!-- start-smoth-scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- start-smoth-scrolling -->

<!-- //js-scripts -->

</body>
</html>
