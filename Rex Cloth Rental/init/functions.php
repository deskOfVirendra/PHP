<?php

if (!isset($_COOKIE['userId'])) {
    // global isLogged = true;
    header('location:login.php');
} else {
    $userid =  $_COOKIE['userId'];
}

function getTotalItemsFromCart() {
include "conn.php";
$sql = "SELECT * FROM cart WHERE userId = '$userid' ";
$result = $conn->query($sql);
$count
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $image  = 'admin/'.$row['productImage'];
        $price  = $row['productPrice'];
        $id = $row['id'];

        echo $id;
}
}

?>