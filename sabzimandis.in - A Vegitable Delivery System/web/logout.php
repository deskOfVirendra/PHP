<?php
session_start();
session_destroy();
header("location:index.php");
if(!isset($_SESSION['user']))
     header("location:index.php");
?>
