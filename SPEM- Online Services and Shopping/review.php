<?php

include "conn.php";
session_start();
if(!isset($_SESSION['user'])){
  header("location:login.php");}

$paddy=$_POST['pid'];
$user=$_SESSION['user'];
$productname=$_POST['pname'];
$review=$_POST['paddy'];
echo $productname;
echo $paddy;
echo $user;
echo $review;

$insert="INSERT INTO review (review,productid,user,productname) VALUES

('$review','$paddy','$user','$productname')";
$query=mysqli_query($conn,$insert);
if($query===false){

  die("Unable to add review".mysqli_connect_error());

}

?>
<?php header("location:details.php?id=$paddy");
?>
