<?php
session_start();
session_destroy();

$cookie_name = "otp";
$cookie_value = "";
setcookie($cookie_name, $cookie_value, time() - (86400 * 30), "/"); // 86400 = 1 day

$cookie_name = "user";
$cookie_value = "";
setcookie($cookie_name, $cookie_value, time() - (86400 * 30), "/"); // 86400 = 1 day

$cookie_name = "city";
$cookie_value = "";
setcookie($cookie_name, $cookie_value, time() - (86400 * 30), "/"); // 86400 = 1 day

$cookie_name = "mobile";
$cookie_value = "";
setcookie($cookie_name, $cookie_value, time() - (86400 * 30), "/"); // 86400 = 1 day

header("location:index.php");
if(!isset($_COOKIE['user']))
     header("location:index.php");
?>
