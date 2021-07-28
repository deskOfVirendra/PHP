
        <div class="row">
 
<?php 
$selectProducts = "select * from products order by id desc limit 5";

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