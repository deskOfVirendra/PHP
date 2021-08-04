<?php

$link = mysqli_connect("localhost","","","");
if( $link === false ){

        die("could not connect the error".mysqli_connect_error());
}



 ?>
<?php

if(isset($_GET['mail'])){

  $destination = $_GET['mail'];
  $destination = mysqli_real_escape_string($link,$destination);
  $destination = htmlspecialchars($destination);
  session_start();
  $_SESSION['pass']= $destination;

        $rand = rand(1000,9999);

        $sql = "INSERT INTO otps (id,mail,otp,abc) VALUES

        (id,'$destination','$rand','0')";




        if(mysqli_query($link, $sql)){

        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }

           $to = $destination;
           $subject = "Mail from Pandamusic";

           $message = "Your OTP is $rand ";

           $headers = "From: virendra@pandamusic.in" . "\r\n" .
   "CC: virendra@pandamusic.in";
           $retval = mail ($to,$subject,$message,$headers);

           if( $retval == true ) {
              echo "otp sent successfully...";
           }


  header('Location:verify.php');











}

 ?>
























<title>pandamusic.in</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
<div class="ge">

</div>

<form action="oneform.php" method="get" enctype="multipart/form-data">

<input type="email" name="mail" placeholder="Enter your mail here" autocomplete="off"></br>
<input type="submit" value="send OTP" >



</form>

<style>

.ge{
  display: block;
left: 47%;
right: 38%;
top:25%;
position: absolute;

height: auto;
width: auto;


}
img{

  left: 47%;
  right: 50%;
}

body{

  background-color: #111111;
}
input[type=email]{


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
