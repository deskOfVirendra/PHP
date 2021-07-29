<?php
session_start();
session_destroy();

header("location:deliveryboylogin.php")
//if(!isset($_SESSION['deliveryboy']))
  //     header("location:deliveryboylogin.php");
 ?>
