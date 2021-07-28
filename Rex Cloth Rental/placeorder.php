<?php
require "init/conn.php";

if (!isset($_COOKIE['userId'])) {
    // global isLogged = true;
    header('location:login.php');
} else {
    $userid =  $_COOKIE['userId'];
}

$orderid = uniqid();



$sql = "INSERT INTO orders (orderid, userid)
VALUES ('$orderid', '$userid')";

if ($conn->query($sql) === TRUE) {

    $sqla = "UPDATE cart SET orderid='$orderid' WHERE userId='$userid' AND orderid=''";

    if ($conn->query($sqla) === TRUE) {
        echo "Record updated successfully";
        
	 $url1 = "http://api.msg91.com/api/sendhttp.php?sender=REXTEC&route=4&mobiles=".$userid." &authkey=186512A1XC9MqadU5e4c3017P1&encrypt=&country=91&message=Order is successfully placed on REX";
	 $xml = file_get_contents($url1);
     header('location:orders.php');

    } else {
        echo "Error updating record: " . $conn->error;
    }

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
