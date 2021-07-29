<ul id="menu">
  <li id="menu-home" ><a href="index.php"><i class="fa fa-tachometer"></i>Home<span></span></a></li>
  <li id="menu-academico" ><a href="searchresult.php?paddy="><i class="fa fa-file-text"></i>Items<span> All Products</span></a>
  <?php
if(isset($_SESSION['user'])){
  ?>
  <li><a href="checkout.php"><i class="fa fa-shopping-cart"></i>cart<span></span></a></li>
<?php
}
?>
  <li><a href="myorders.php"><i class="fa fa-map-marker"></i><span>My Orders</span></a></li></li>
  <li id="menu-comunicacao" ><a href="index.php"><i class="fa fa-book nav_icon"></i><span>Categories</span></a></li>
  <li><a href="contactus.php"><i class="fa fa-map-marker"></i><span>Contact us</span></a></li></li>
  <li><a href="scan.jpeg"><i class="fa fa-home"></i><span>Scan To Pay</span></a></li></li>
  <li><a href="aboutus.php"><i class="fa fa-bar-chart"></i><span>About Us</span></a></li>
  <li><a href="terms.php"><i class="fa fa-envelope"></i><span>Terms & Conditions</span></a></li>
</ul>