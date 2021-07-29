
<!DOCTYPE HTML>
<html>
<head>
<?php  include "include/title.php";?>


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
<style>
media (max-width: 480px)
.span_3_of_2 {
    width: 100%;
}
.desc1 {
    display: block;
    float: right;
}
.span_3_of_2 {
    width: 60.3333%;
}
</style>
</head>
<body>
<div class="page-container">
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<?php include "include/header.php";?>
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
    	<h2>Blank Page</h2>
    	<div class="blankpage-main">
        <div class="row single">
          <div class="det">
            <div class="single_left">
                     <div class="thumb-image">
                        <img src="images/pro10.jpg" data-imagezoom="true" class="img-responsive" draggable="false">
                      </div>

            <div class="desc1 span_3_of_2">
            <h3>aaaaaa</h3>
            <span class="brand">Brand: <a href="#">sjjdfdfdjf </a></span>
            <br>


              <div class="price">
                <span class="text">Price:</span>
                <span class="price-new">00000</span><span class="price-old">00000</span>


              </div>


            <div class="btn_form">
              <a href="addtocart.php?id=3">Add to Cart</a>
            </div>

             </div>

                  <div class="clearfix"></div>
                 </div>
                  <div class="single-bottom1">
            <h6>Details</h6>
        <span>    <textarea rows=auto cols="35" style="border:none;" readonly>
    jfjdjdjfjdskfdklllllllllllllllllllllllllllllllllllllljsjdfjksjfkkdjfdjkjsklllllllllllll</textarea></span>
          </div>
    <div class="clearfix"></div>
           </div>
           <div class="clearfix"> </div>












                 <h5></h5>
      </div>
    	</div>
    </div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
<?php include "include/footer.php"; ?>
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


.row {
    margin-right: 0px!important;
    margin-left: 0px!important;
}

@media (max-width: 480px)
.span_3_of_2 {
    width: 100%;
}
.desc1 {
    display: block;

}
.span_3_of_2 {
    width: 60.3333%;
}
span.brand {
    color: #999;
    line-height: 2em;
}

span.text {
    font-size: 1.2em;
    color: #999;
}

span.price-new {
    color: #B52E31;
    margin-right: 15px;
    font-weight: 500;
    font-size: 1.3em;
}
.price-old {
    text-decoration: line-through;
    color: #999;
    font-weight: normal;
    font-size: 17px;
    margin-right: 10px;
}

.btn_form a {
    cursor: pointer;
    border: none;
    outline: none;
    display: inline-block;
    font-size: 1em;
    padding: 10px 34px;
    background: #B52E31;
    color: #fff;
    text-transform: uppercase;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

@media (max-width: 480px)
.btn_form a {
    padding: 4px 20px;
}
.btn_form {
    margin: 8% 0 4%;
}
.single-bottom1 {
    padding: 3% 0 4%;
}

.single-bottom1 h6, .single-bottom2 h6 {
    background: #F3F3F3;
    padding: 10px;
    color: #B52E31;
    font-size: 1.2em;
}
