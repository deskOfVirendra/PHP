<?php
if(setcookie("sessionid","",time()-3600))
          header('location:index.php');


?>
