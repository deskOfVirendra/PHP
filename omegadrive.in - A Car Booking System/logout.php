<?php
error_reporting(0);
include "include/conn.php";
session_start();
session_destroy();
if(!isset($_SESSION['user']))
   header("location:logout.php");
 ?>
