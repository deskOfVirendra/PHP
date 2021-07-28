<?php




              $conn = mysqli_connect("localhost","darphalc_paddy","virendrapadwal","darphalc_paddy");

              if(!$conn){

                die("could not connect the database".mysqli_connect_error());
              }
session_start();
$paddy = $_SESSION['pass'];
$name= $_GET['ot'];

$sql = "SELECT * FROM otps where mail = '$paddy'" ;

if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            $personid = $row['otp'];

        }
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}


if($personid==$name){

   header('Location:https://www.thepaddy.in/');


}

else{

    session_destroy();
header('Location:https://www.pandamusic.in/otp/error.php');
}

// Close connection
mysqli_close($conn);






 ?>
