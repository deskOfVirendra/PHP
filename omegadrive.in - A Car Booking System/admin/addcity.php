<?php
include "include/conn.php";
$error = '';


if( isset($_POST['submit']) )
{

$sc   = $_POST['sc'];
$dc   = $_POST['dc'];
$distance   = $_POST['distance'];


  $sql = "INSERT INTO cities (start,ends, distance)
                  VALUES ('$sc', '$dc', '$distance')";

                  if ($conn->query($sql) === TRUE)
                   {
                    //$error="you are omegadrive user now";

                    }
                  else
                  {
                      echo "Error: " . $sql . "<br>" . $conn->error;
                  }



}



?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include "include/title.php";?>
</head>

<body>

<!--/banner-->
<?php include "include/header.php";?>
	<div class="banner" id="home">
		<!-- header -->
    	<?php include "include/top.php";?>
		<!-- //header -->
	</div>
	<!-- //banner -->

<!-- Contact -->
<section class="contact py-5">
<center>
	<div class="container py-lg-5">
		<h1 class="heading text-capitalize text-center">Manage City</h1>
		<h5 class="heading mb-5 text-center" style="color:red;"><?php echo $error;?></h5>

		<center>

					<div class="modal-body" style="background:#000000;">
						<form action="" method="post">
							<div class="form-group">
								<label for="recipient-name" class="col-form-label">starting city</label>
								<input type="text" class="form-control" placeholder="start" name="sc" id="recipient-rname" required="">
							</div>


							<div class="form-group">
								<label for="recipient-email" class="col-form-label">Destination city</label>
								<input type="text" class="form-control" placeholder="Destination" name="dc" id="recipient-email" required="">
							</div>

							<div class="form-group">
								<label for="recipient-name" class="col-form-label">Distance betweeen</label>
								<input type="text" class="form-control" placeholder="Distance between" name="distance" id="recipient-rname" required="" >
							</div>
							<div class="right-w3l">
								<input type="submit" class="form-control" value="Add city" name="submit">
							</div>
						</form>
					</div>





	</div>
</center>
</section>
<!-- //Contact -->


<!--footer-->
<?php include "include/footer.php";?>
<!-- //footer -->

<!-- login and register modal -->
<!-- //login and register modal -->

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
