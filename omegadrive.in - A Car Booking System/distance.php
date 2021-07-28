<?php

function lat_long_dist_of_two_points($lat1,$long1,$lat2,$long2)
		{
		$pi=pi();
		$x=sin($lat1* $pi/180)*
		sin($lat2*$pi/180)+
		cos($lat1*$pi/180)*
		cos($lat2*$pi/180)*
		cos(($long2*$pi/180)-($long1*$pi/180));
		$x=atan((sqrt(1-pow($x,2)))/$x);
		return abs((1.852*60.0*(($x/$pi)*180))/1.609344);
		}
		

// local or outstation
//$trip;

// round or one-way
//$triptype = '';

//selected hours
//$triphours = 0;

// trip timing
//$triptime = '';

// trip days for outstation trip one or multiple(0/1)
//$tripdays = 0;


?><!DOCTYPE html>
<html lang="en">
<head>
	<?php include "include/title.php";?>

			<script type="text/javascript" src="js/map.js"></script>
</head>

<body>

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
		<h1 class="heading text-capitalize text-center">Book Now</h1>
<p id="distance"></p>
		<div class="row agile-contact-form">
			<div class="col-md-6 contact-form-left map">
				<div class="w3layouts-contact-form-top">


				</div>
				</div>

			</div>

		</div>

		<?php
		$lat1 = $_COOKIE['lat1'];

		$lat2 = $_COOKIE['lat2'];

		$long1 = $_COOKIE['long1'];

		$long2 = $_COOKIE['long2'];

		

		//$distance = ceil(lat_long_dist_of_two_points($lat1,$long1,$lat2,$long2)*1.60934*1.119248);
           $distance = 230;

		// initially charge is initiated to unity
           $trip = "outstation";
           $triptype = "oneway";
           
           $charge = 1;
         // if trip is local round trip
		 if( $trip=="local" && $triptype=="round" ) 
		 {
			echo "if 1 executed";

           if($triptime >= 5 && triptime <= 18)
           {
           		if($triphours <= 5)
             		$charge = 499;
                else
           			$charge = 499 + ( $triphours-5 ) *99;
           }
           else
           {
           		if($triphours <= 4)
           			$charge = 499;
           		else
           			$charge = 499 + ( $triphours-4 ) *99;
           }    

		 }		
        
        // if trip is local one-way trip
        if( $trip == "local" && $triptype == "oneway" ) 
		{
			echo "if 2 executed";
           if($triptime >= 5 && triptime <= 18)
           {
           		if($triphours <= 5)
             		$charge = 599;
                else
           			$charge = 599 + ( $triphours-5 ) *99;
           }
           else
           {
           		if($triphours <= 4)
           			$charge = 599;
           		else
           			$charge = 499 + ( $triphours-4 ) *99;
           }    

		}	



        //if trip is one way outstaion trip
		 if( $trip == "outstation" && $triptype == "oneway" ) 
		 {
		 		echo "if 3 executed";
           if ( $distance <= 200 )
           	  $charge = 1200;
           elseif ($distance > 200 && $distance <= 250) 
              $charge = 1600;
           elseif ($distance > 250 && $distance <= 300) 
              $charge = 2000;
           elseif ($distance > 300 && $distance <= 350) 
              $charge = 2300;
           elseif ($distance > 350 && $distance <= 400) 
              $charge = 2600;
           elseif ($distance > 400 && $distance <= 450) 
              $charge = 2900;
           elseif ($distance > 450 && $distance <= 500) 
              $charge = 3200;
           elseif ($distance > 500 && $distance <= 550) 
              $charge = 3500;
           elseif ($distance > 550 && $distance <= 600) 
              $charge = 3800;
           elseif ($distance > 600 && $distance <= 650) 
              $charge = 4000;
           else
          	  $charge = 5000;
		 }	


		 // if trip outstation round trip  
		 // days -eq 0 means oneday trip
          if( $trip == "outstaion" && $triptype == "round" ) 
		 {
		 	echo "if 4 executed";
		 	if($tripdays == 0){

		 				if($distance < 200)
                 			$charge = 99 * $triphours;
		 				elseif($distance >200 && $distance < 400)
		 		 			$charge =  (99 * $triphours) + 250;
		 				
							}
		 	else{

		 				if( $distance < 500)
		 				{
		 					$charge = (999 + 250 + 250) * $tripdays  ;

		 				}

		 		}
		 
		 }


		

		?>
				<div class="book-agileinfo-form">
<h3><?php echo "Rs".$charge;?></h3>

					 </div>

	</div>
</section>
<!-- //Contact -->


<!--footer-->
<?php //include "include/footer.php";?>
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
