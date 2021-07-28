<?php
error_reporting(0);
include "include/conn.php";
$error = '';
if( isset($_POST['submit']) )
{

$user = $_POST['username'];
$pass = $_POST['password'];

$select = "SELECT * FROM admin WHERE username='$user' ";
$result = mysqli_query($conn,$select);
if(mysqli_num_rows($result) == 1)
{

             while($row = mysqli_fetch_assoc($result))
						 {
                 $password = $row['password'];
             }
}
else
{
                  $error = "Wrong Admin Credentials!";

}


if($pass == $password)
{
session_start();
$_SESSION['admin'] = $user;
header("location:index.php");
}
else
{
  $error = " Invalid Credentials";
}

}
 ?>

<!DOCTYPE php>
<php lang="en">
<head>
<?php include "include/title.php";?>
</head>

<body>

<!--/banner-->
<?php //include "include/header.php";?>

	<!-- //banner -->

<!-- Contact -->
<section class="contact py-5">
<center>
	<div class="container py-lg-5">
		<h1 class="heading text-capitalize text-center">Admin Login</h1>
		<h5 class="heading mb-5 text-center" style="color:red;"><?php echo $error;?></h5>

		<center>

					<div class="modal-body" style="background:#000;">
						<form action="" method="post">
							<div class="form-group">
								<label for="recipient-name" class="col-form-label">Username</label>
								<input type="text" class="form-control" placeholder="Username" name="username" id="recipient-rname" required="">
							</div>
							<div class="form-group">
								<label for="password1" class="col-form-label">Password</label>
								<input type="password" class="form-control" placeholder="Password" name="password" id="password1" required="">
							</div>

							<div class="right-w3l">
								<input type="submit" class="form-control" value="Login" name="submit">
							</div>
						</form>
					</div>





	</div>
</center>
</section>
<!-- //Contact -->


<!--footer-->
<?php// include "include/footer.php";?>
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
