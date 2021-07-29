<?php

include "conn.php";
session_start();
if(!isset($_COOKIE['user'])){
  header("location:login.php");}
  //code for adding the product to cart
if(isset($_GET['id'])){
$paddy=$_GET['id'];
$user=$_COOKIE['user'];

$sql="SELECT * from products where id='$paddy';";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){

  while($row=mysqli_fetch_array($result)){

    $price=$row['price'];
    $productname=$row['productname'];
    $img=$row['img1'];
    $id=$row['id'];
    $newname=$row['newname'];
    $address=$row['deliverto'];

  }
}

$insert="INSERT INTO cart (productname,newname,image,price,user,productid,deliverto) VALUES

('$productname','$newname','$img','$price','$user','$id','$address')";
$query=mysqli_query($conn,$insert);
if($query===false){

  die("Unable to add in cart".mysqli_connect_error());

}

$urled=$_GET['url'];
//header("location:$urled");
header("location:http://sabzimandis.in/searchresult.php?paddy=");
}


// code for placement of order
if(isset($_GET['place'])){

  $paddy=$_GET['place'];
  $user=$_COOKIE['user'];

  $sql1="SELECT * from userid where username='$user';";
  $result1=mysqli_query($conn,$sql1);
  if(mysqli_num_rows($result1)==1){

    while($row1=mysqli_fetch_array($result1)){

      $name=$row1['username'];
      $no=$row1['mobileno'];
      $city=$row1['city'];

    }
  }



  $sql="SELECT * from cart where id='$paddy';";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0){

    while($row=mysqli_fetch_array($result)){

      $price=$row['price'];
      $productname=$row['productname'];
    //  $img=$row['img1'];
      $id=$row['productid'];
    }
  }

  $insert="INSERT INTO orders (productname,price,status,city,contact) VALUES

  ('$productname','$price','','$city','$no')";
  $query=mysqli_query($conn,$insert);
  if($query===false){

    die("Unable to add in orders".mysqli_connect_error());

  }

  //header("location:history.php");

}





//code to delete product from cart
if(isset($_GET['del'])){

  $paddy=$_GET['del'];
  $user=$_COOKIE['user'];

  $sql = "DELETE FROM cart WHERE id='$paddy' and user='$user'";

  if ($conn->query($sql) === TRUE) {
      echo "Record deleted successfully";
  } else {
      echo "Error deleting product: " . $conn->error;
  }


header("location:checkout.php");

}

?>
