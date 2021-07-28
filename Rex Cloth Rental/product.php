<!DOCTYPE html>
<html lang="en">
<?php 

include  "init/conn.php";
 if(isset($_REQUEST['paddy'])){

 $paddy=$_REQUEST['paddy'];}

else{

  $paddy='';

}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> All Products - RexClothRental.com</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>

</style>

<body>
    
        <div class="container">
        <?php include "init/navbar.php";?>
      

   
    <!-- -------Feature Product--------- -->
    <div class="small-container">
        <h2 class="title"> Products</h2>

          <div class="row">
 
<?php 

$selectProducts = "SELECT * FROM products where (productName LIKE '%$paddy%') or (productDetails LIKE '%$paddy%') or (brandname LIKE '%$paddy%') or (category LIKE '%$paddy%') or (price LIKE '%$paddy%') order by id desc ;";

    $resultProducts = $conn->query($selectProducts);

    if($resultProducts->num_rows != 0) { 
              while($row=mysqli_fetch_assoc($resultProducts)){

$productname  = $row['productName'];
$brandname = $row['brandname'];
$image  = $row['image1'];
$id = $row['id'];
$price = $row['price'];

   ?>
        <a href="productDetails.php">
           <div class="col-4">
            <a href="productDetails.php?id=<?php echo $id;?>">
                <img src="admin/<?php echo $image;?>" alt="">
                <h4><?php echo $productname;?></h4>
                </a>
                <div class="rating">
                   <?php echo $brandname;?>
                </div>
                <p>Rs-<?php echo $price;?></p>
            </div>
            </a>
<?php

   }

}
 ?>
  
        </div>

        
        </div>
    </div>

    
    <?php include "init/footer.php";?>
     <!-- -------js for toggle menu--------- -->
     <script>
         var MenuItems = document.getElementById("MenuItems");
         
         MenuItems.style.maxHeight = '0px';

         function menutoggle(){
             if(MenuItems.style.maxHeight = '0px';)
             {
                MenuItems.style.maxHeight = '200px';
             }
         }
         else{
            MenuItems.style.maxHeight = '0px';
         }
     </script>

</body>

</html>