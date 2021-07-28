
<?php
// Check if the form was submitted

    // Check if file was uploaded without errors
if( isset($_FILES["img"]) && $_FILES["img"]["error"] == 0 )
 {
        $filename = $_FILES["img"]["name"];
          $filesize = $_FILES["img"]["size"];

         $rand = rand(1,10000).".jpg";

         $maxsize = 5 * 1024 * 1024;
         if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

                move_uploaded_file($_FILES["img"]["tmp_name"], "uploads/" . $rand);
                echo "Your file was uploaded successfully.";
              }else {
                echo "error : format is invalid";
              }
}

?>
