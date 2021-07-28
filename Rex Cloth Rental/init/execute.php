<?php 
$user = $_COOKIE['userId'];
echo $user;
include "functions.php";
echo "<p>".getTotalItemsFromCart()."</p>";
?>