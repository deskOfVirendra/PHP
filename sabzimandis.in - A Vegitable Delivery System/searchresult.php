<?php
include "conn.php";
session_start();
//if(!isset($_COOKIE['user'])){
  //header("location:login.php");
//}


$cityed = $_REQUEST['city'];

 if(isset($_REQUEST['paddy'])){
 $paddy=$_REQUEST['paddy'];}
else{
  $paddy='';
}









 ?>



<!DOCTYPE HTML>
<html>
<head>
<?php include "include/title.php";?>
<style>
.sidebar-menu{
  position: fixed;
background: #000;
}
.menu{
  background:#000;

}

.grid-container {
  display: grid;
  grid-template-columns: auto auto auto auto;
  grid-gap: 10px;
  align-content: center;
  background-color: transparent;
  padding: 10px;
}

.grid-container > div {
  background-color: rgba(255, 255, 255, 0.8);
  border: 2px dashed #007eff;
  text-align: center;
  font-size: 30px;

}

.grid-container  > img {
  object-fit: cover;
width: 200px;
    display: block;
    max-width: 100%;


}

.grid-container > div {
    font-size: 15px; 
}

</style>

</head>
<body>
<div class="page-container" style="overflow:hidden;">
  <div class="left-content">
    <div class="mother-grid-inner">
           <!--header start here-->
       <?php include "include/header.php";?>
<!--heder end here-->
<!-- script-for sticky-nav -->

   <!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">
   <div class="blank">
     <h2></h2>
     <div class="blankpage-main" style="margin:auto; padding: 0em 0em;">
<div class="grid-container" style="display:inline-flex;flex-wrap:wrap;justify-content:space-between;">


<?php

$select ="SELECT * FROM products where ((city = '$cityed')) AND ((productname LIKE '%$paddy%') or (newname LIKE '%$paddy%') or (brandname LIKE '%$paddy%') or (description LIKE '%$paddy%') or (category LIKE '%$paddy%')) order by id desc ;";
$result=mysqli_query($conn,$select);
if(mysqli_num_rows($result)>0){
             while($row=mysqli_fetch_assoc($result)){
               $category=$row['category'];
               $productname=$row['productname'];
               $brand=$row['brandname'];
               $mrp=$row['mrp'];
               $price=$row['price'];
               $img=$row['img1'];
               $newname=$row['newname'];
               $id=$row['id'];
               $stetus=$row['stetus'];
?>


<div style="padding: 10px;
    margin: 5px 10px;border-radius:5px;">
<a href="details.php?id=<?php echo $id;?>">
<img src="<?php echo "admin/".$img;?>" style="width:200px;max-height:300px;"></img>
             </a>
</br>
<div style="border:2px dashed #007eff;">

     <h4 style="color:#007eff"><?php echo $productname."($newname)"; ?></h4>

     <h6><?php echo $brand;?></h6>

      <h5><center><?php echo "RS <u>".$price."</u>/- ";?></center></h5>

           <h6 style="color:#a9a9a9"><center><?php echo "RS <del>".$mrp."</del>/-";?></center></h6>







           <?php 
if ($stetus == "In Stock"){
  ?>
  
  
     <div class="btn_form">
<?php
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
 
$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

?>

<?php
if(!isset($_COOKIE['user'])){
?>
  <a href="login.php">
<?php
  echo "Login to Buy";
  ?>
  </a>
  <?php
}else{
  ?>
    <a class="loveit" href="javascript:;" onClick="like<?php echo $id; ?>(this);" rel="addtocart.php?id=<?php echo $id; ?>&url=<?php echo $url; ?>">
  <?php
  echo "Add to Cart";

}
?>
                </a>




    <script>
function like<?php echo $id; ?>(placeholder) {
        $.ajax({
            url: $(placeholder).attr('rel'),
            type: "GET",
            success:function(){
                alert("<?php echo $productname;?> कार्ट मध्ये ऍड झाले आहे कृपया my कार्ट मधून ऑर्डर प्लेस करा");
            },
            error:function (){
                alert("error adding product");
            }
        });
        return false;
}
    </script>




                </div>
                
  
<?php
}else {
  ?>
  <div class="btn_form">
    <a href="#" style="background:#007eff;">
  <?php
echo "Out Of Stock";
?>
</a>
</div>
<?php
}
?>











</div>

</div>


<?php
}
}
 ?>

</div><!--grid container-->


   </div>
</div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
<?php include "include/footer.php"; ?>
<!--COPY rights end here-->
</div>
</div>
<!--slider menu-->

 <div class="clearfix"> </div>
<!--slider menu-->
    <div class="sidebar-menu">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span>
			      <!--<img id="logo" src="" alt="Logo"/>-->
			  </a> </div>
		    <div class="menu">
		      <?php include "include/sidenav.php";?>
		    </div>
	 </div>
	<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<script>
var toggle = true;

$(".sidebar-icon").click(function() {
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>
<?php 

if(isset($_GET['added'])){
  ?>
  
<script>
  alert("<?php echo $_GET['added'];?>");
</script>
  
  <?php
}

?>