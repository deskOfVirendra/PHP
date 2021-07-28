<?php
   $conn = mysqli_connect('localhost','root','','rex');
   if($conn === false) {
       die('could not connect to the database'.mysqli_connect_error());
   }

?>