<?php
session_start();
session_destroy();

header("location:adminlogin.php")
//if(!isset($_SESSION['admin']))
  //     header("location:adminlogin.php");
 ?>
