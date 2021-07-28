<?php 
		print_r($_COOKIE);

?>

<!DOCTYPE html>
<html lang="en">
<head>

<?php include "include/title.php";?>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcG4qjKtM8Hbj5NOsnJlKCCb1HrmeiSAY&callback=initMap"> </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script type="text/javascript" src="https://ssnparishad.in/ordor.in/js/gmaps.js">
</script>

<!--Google maps start-->
    <style>
      #map-canvas .centerMarker {
        position: relative;
        /*url of the marker*/
        background: url(https://maps.gstatic.com/mapfiles/markers2/marker.png) no-repeat;
        /*center the marker*/
        top: 50%;
        left: 50%;
        z-index: 1;
        /*fix offset when needed*/
        margin-left: -10px;
        margin-top: -34px;
        /*size of the image*/
        height: 34px;
        width: 20px;
        cursor: pointer;
      }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcG4qjKtM8Hbj5NOsnJlKCCb1HrmeiSAY&callback=initMap">
    </script>

			<script type="text/javascript" src="js/map.js"></script>
</head>

<body>
	<?php

	if (isset($_GET['submit'])) {

				setcookie("lat1",$_GET['lat1'],time()+86400*24);
				setcookie("long1",$_GET['long1'],time()+24*86400);

				header("location:2.php");



	}
	?>


	<!--google map auto location tracking js start-->
	<script>
	  var map = null;
	  var marker;
	  function showlocation() {
	    if ("geolocation" in navigator) {
	      /* geolocation is available */
	      // One-shot position request.
	      navigator.geolocation.getCurrentPosition(callback, error);
	    }
	    else {
	      /* geolocation IS NOT available */
	      console.warn("geolocation IS NOT available");
	    }
	  }
	  function error(err) {
	    console.warn('ERROR(' + err.code + '): ' + err.message);
	  };
	  function callback(position) {
	    var lat = position.coords.latitude;
	    var lon = position.coords.longitude;
	    document.getElementById('default_latitude').value = lat;
	    document.getElementById('default_longitude').value = lon;
	    var latLong = new google.maps.LatLng(lat, lon);
	    map.setZoom(16);
	    map.setCenter(latLong);
	  }
	  google.maps.event.addDomListener(window, 'load', initMap);
	  function initMap() {
	    var mapOptions = {
	      center: new google.maps.LatLng(<?php echo $_COOKIE['latitude'];?>, <?php echo $_COOKIE['longitude'];?>),
	      zoom: 13,
	      mapTypeId: google.maps.MapTypeId.ROADMAP
	    };
	    map = new google.maps.Map(document.getElementById("map-canvas"),
	                              mapOptions);
	    google.maps.event.addListener(map, 'center_changed', function() {
	      document.getElementById('default_latitude').value = map.getCenter().lat();
	      document.getElementById('default_longitude').value = map.getCenter().lng();
	    }
	                                 );
	    $('<div/>').addClass('centerMarker').appendTo(map.getDiv())
	    //do something onclick
	      .click(function() {
	      var that = $(this);
	      if (!that.data('win')) {
	        that.data('win', new google.maps.InfoWindow({
	          content: 'this is the center'
	        }
	                                                   ));
	        that.data('win').bindTo('position', map, 'center');
	      }
	      that.data('win').open(map);
	    }
	            );
	  }
	</script>
<!--/banner-->
<?php include "include/header.php";?>
	<div class="banner" id="home">
		<!-- header -->
			<?php// include "include/top.php";?>
		<!-- //header -->
	</div>
	<!-- //banner -->

<!-- Contact -->
<section class="contact py-5">
	<div class="container py-lg-5">
		<h1 class="heading text-capitalize text-center">Select Starting Location</h1>
<p><?php if(isset($_SESSION['lat1'])) echo $_SESSION['lat1'];?></p>
		<div class="row agile-contact-form">
			<div class="col-md-6 contact-form-left map">
				<div class="w3layouts-contact-form-top">


				</div>

			</div>

		</div>
				<div class="book-agileinfo-form">

					<div id="map-canvas" style="height: 380px">
	                </div>

				    </br></br>
					<form action = " " method = "get">
	
	                <input type="hidden" name="lat1" value="18.240098612870256" placeholder="Enter latitudes Of Your Business" id="default_latitude" required/ />
	                </br></br>
	                <input type="hidden" name="long1" value="76.03497706968571" placeholder="Enter longitudes Of Your Business" id="default_longitude" required/ />
	                </br></br>
					<input type="submit" value="selected" name="submit" >
	
					</form>

				</div>

	</div>
</section>
<!-- //Contact -->


<!--footer-->
<?php include "include/footer.php";?>
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
