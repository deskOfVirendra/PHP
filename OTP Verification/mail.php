<html>

<title>pandamusic.in</title>


   <body><?php

$link = mysqli_connect("localhost","","","");
if( $link === false ){

           die("could not connect the error".mysqli_connect_error());
}



    ?>

      <?php

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
?>
   </body>
</html>
