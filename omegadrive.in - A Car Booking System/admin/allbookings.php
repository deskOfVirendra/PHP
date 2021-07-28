<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['admin']))
        	header("location:login.php");
?>
<?php require_once "include/conn.php";?>
<!DOCTYPE php>
<php lang="en">
<head>
	<?php include "include/title.php";?>
</head>

<body>

<!--/banner-->
<?php //include "include/header.php";?>
	<!-- //banner -->


<!-- about -->
<!-- //about -->

<!-- Why taxi cab -->
<section class="why">
	<div class="container-fluid p-md-5 p-3">
		<h3 class="heading text-capitalize text-center">Admin Panel</h3>
		<h5 class="heading mb-5 text-center">omegadrive</h5>
		<div class="row why-grids">

			<div class="col-lg-3 col-md-4 col-sm-6" style="color:#fff;background:#FFC107;border:2px solid #000;margin:4px 3px">
				<div class="" style="border:2px solid #FFC107;">
					<h4 class="mx-auto" style="color:#000;border:1px solid #000;border-radius:50%;"><span>1</span></h4>
					<h5 class="mt-5" style="color:#000;font-family:sans-serif;text-transform:capitalize;font-weight:bold;;"><center>All Bookings</center></h5>
				</div>
			</div>

	<div class="col-lg-3 col-md-4 col-sm-6" style="color:#fff;background:#FFC107;border:2px solid #000;margin:4px 3px">
 			 <div class="" style="border:2px solid #FFC107;">
 				 <h4 class="mx-auto" style="color:#000;border:1px solid #000;border-radius:50%;"><span>2</span></h4>
 				 <h5 class="mt-5" style="color:#000;font-family:sans-serif;text-transform:capitalize;font-weight:bold;;"><center>All Drivers</center></h5>
 			 </div>
 		 </div>

	<div class="col-lg-3 col-md-4 col-sm-6" style="color:#fff;background:#FFC107;border:2px solid #000;margin:4px 3px">
			 <div class="" style="border:2px solid #FFC107;">
				 <h4 class="mx-auto" style="color:#000;border:1px solid #000;border-radius:50%;"><span>3</span></h4>
				 <h5 class="mt-5" style="color:#000;font-family:sans-serif;text-transform:capitalize;font-weight:bold;;"><center>All Users</center></h5>
			 </div>
		 </div>


		 <div class="col-lg-3 col-md-4 col-sm-6" style="color:#fff;background:#FFC107;border:2px solid #000;margin:4px 3px">
	 			 <div class="" style="border:2px solid #FFC107;">
	 				 <h4 class="mx-auto" style="color:#000;border:1px solid #000;border-radius:50%;"><span>4</span></h4>
	 				 <h5 class="mt-5" style="color:#000;font-family:sans-serif;text-transform:capitalize;font-weight:bold;;"><center>add booking</center></h5>
	 			 </div>
	 		 </div>

	<div class="col-lg-3 col-md-4 col-sm-6" style="color:#fff;background:#FFC107;border:2px solid #000;margin:4px 3px">
			 <div class="" style="border:2px solid #FFC107;">
				 <h4 class="mx-auto" style="color:#000;border:1px solid #000;border-radius:50%;"><span>0</span></h4>
				 <h5 class="mt-5" style="color:#000;font-family:sans-serif;text-transform:capitalize;font-weight:bold;;"><center>Logout</center></h5>
			 </div>
		 </div>
		</div>
	</div>
</section>
<!-- //Why taxi cab -->

<!-- team -->
<!-- //team -->

<!-- Our prices -->
<!-- //Our prices -->

<!--/testimonials-->
<!--//testimonials-->

<!--footer-->
<?php// include "include/footer.php";?>
<!-- //footer -->

<!-- js-scripts -->

	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap -->
	<!-- //js -->

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
				$('php,body').animate({scrollTop:$(this.hash).offset().top},1000);
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
</php>
