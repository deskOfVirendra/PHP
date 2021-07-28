
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


</script>
<style media="screen">
	#oneway,#return{
		margin-left: 5px;
	}
</style>
</head>

<body>

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
		<h1 class="heading text-capitalize text-center">Select Your Trip</h1>
		<h5 class="heading mb-5 text-center"></h5>
		<div class="row">
			<div class="col-lg-6 book-appointment p-sm-5 py-5 px-4">
					<h2 class="sub-head-w3ls">Where You Want To Travel?</h2>
				<div class="book-agileinfo-form" >


						<div class="clear"></div>








				<a href="local.php"><input type="submit" value="Local Trip"></a>
					<a href="outstation.php">	<input type="submit" value="Outstation Trip" style="float:right;"></a>

				</div>
			</div>

	</div>
</section>
<!-- //Booking -->


<!--footer-->
<?php include "include/footer.php";?>
<!-- //footer -->


<!-- //login and register modal -->

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
	<script src="js/jquery-ui.js"></script>
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
