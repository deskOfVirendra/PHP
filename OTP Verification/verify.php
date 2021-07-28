<?php
 $conn = mysqli_connect("localhost","darphalc_paddy","virendrapadwal","darphalc_paddy");

if(!$conn){

  die("could not connect the database".mysqli_connect_error());
} ?>
<?php if($_SERVER["REQUEST_METHOD"] == "GET"){



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







} ?>

<title>pandamusic.in</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
<form action="verify.php" method="get">
  <input type="text" maxlength="4" name="ot" placeholder="enter the otp" autocomplete="off" required></br>
  <input type="submit" value="validate" name="submit" >
</form>
<style>




body{

  background-color: #111111;
}
input[type=text]{


      width: 220px;
      height: 40px;
      display: block;
      margin-left: auto;
      margin-right: auto;
      border: 1px solid #111;
      border-radius: 4px;
      outline: none;
      padding-left: 10px;
     font-family: sans-serif;
     font-size: 14px;
      top: 50%;
      position: relative;



}

input[type=submit]{


        height: 35px;
        display: block;
        margin-left: auto;
        margin-right: auto;
        border: none;
        color: #fff;
        font-size: 14px;
font-weight:100;
font-style: normal;
        background-color: #000;
        letter-spacing: 2px;
        font-family: 'Raleway';
        border-radius: 4px;
        outline: none;
        margin-top: auto;
        position: auto;
        top: 50%;
        position: relative;
        padding: 10px;




}


form{
width: auto;
position: relative;
top: 50%;



}
</style>
