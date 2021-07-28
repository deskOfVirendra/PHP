<?php 
require "init/conn.php";

if(!isset($_COOKIE['userId'])){
    // global isLogged = true;
    header('location:login.php');
}

$size = $_GET['size'];
$quantity = $_GET['quantity'];
$productId = $_GET['id'];
// $user = $_COOKIE['userId'];
$user = array($_COOKIE['userId']);
// print_r($user);
$username = $user[0];



$sql="SELECT * from products where id='$productId'";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){

  while($row=mysqli_fetch_array($result)){


    $price=$row['price'];

    $productname=$row['productName'];

    $img=$row['image1'];

    

  }

}



$insert="INSERT INTO cart (productName,productImage,productPrice,productId,size,quantity,userId) VALUES



('$productname','$img','$price','$productId','$size','$quantity','$username')";

$query=mysqli_query($conn,$insert);

header("location:cart.php");

if($query===false){

  die("Unable to add in cart".mysqli_connect_error());

}



?>