<?php
session_start();
session_destroy();

$cookie_name = "city";
$cookie_value = "";
setcookie($cookie_name, $cookie_value, time() - (86400 * 30), "/"); // 86400 = 1 day

header("location:index.php");
if(!isset($_COOKIE['user']))
     header("location:index.php");
?>
