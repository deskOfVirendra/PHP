<?php
session_start();
if(!isset($_SESSION['admin']))
        header("location:adminlogin.php");

 ?>
<?php
include "include/conn.php";
if(isset($_GET['id'])){
$id=$_GET['id'];
$sql="DELETE  FROM products WHERE id='$id'";
if(mysqli_query($conn,$sql)){
  header("location:editproducts.php");
}
}
else{
  echo "error";
  exit;
}

?>
