<?php
if( isset($_FILES["img"]) && $_FILES["img"]["error"] == 0 )
 {
        $filename = $_FILES["img"]["name"];
          $filesize = $_FILES["img"]["size"];
          $arrayext = array('jpg','png','jpeg','JPG','JPEG','PNG' );
          $ext = pathinfo($filename, PATHINFO_EXTENSION);
          if(in_array($ext,$arrayext)){

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
<html>
<head>
<style>
#yourBtn{
   position: relative;
       top: 150px;
   font-family: calibri;
   width: 150px;
   padding: 10px;
   -webkit-border-radius: 5px;
   -moz-border-radius: 5px;
   border: 1px dashed #BBB;
   text-align: center;
   background-color: #DDD;
   cursor:pointer;
  }
</style>
<script type="text/javascript">
 function getFile(){
   document.getElementById("upfile").click();
 }
 function sub(obj){
    var file = obj.value;
    var fileName = file.split("\\");
    document.getElementById("yourBtn").innerHTML = fileName[fileName.length-1];
    document.myForm.submit();
    event.preventDefault();
  }
</script>
</head>
<body>
<center>



<form action="" method="POST" enctype="multipart/form-data" name="myForm">
<div id="yourBtn" onclick="getFile()">click to upload a file</div>
<!-- this is your file input tag, so i hide it!-->
<!-- i used the onchange event to fire the form submission-->
<div style='height: 0px;width: 0px; overflow:hidden;'><input id="upfile" name="img" type="file" value="upload" onchange="sub(this)"/></div>
<!-- here you can have file submit button or you can write a simple script to upload the file automatically-->
<!-- <input type="submit" value='submit' > -->
</form>
</center>
</body>
</html>
