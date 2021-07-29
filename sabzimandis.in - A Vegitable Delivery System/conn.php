<?php
ini_set('session.cookie_lifetime', 60 * 60 * 24 * 7);
$conn= mysqli_connect("localhost","","","");
if($conn===false)
  die("could not connect the mysql database".mysqli_connect_error());
?>
