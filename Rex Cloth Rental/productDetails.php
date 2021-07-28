<?php

include "init/conn.php";

 if(!isset($_COOKIE['userId'])){
global $isLogged;
$isLogged = true;
    // global $isLogged = true;
    header('location:login.php');
}


if(!isset($_GET['id']))
     die('Error 404');

$id=$_GET['id'] ;

    $select ="SELECT * FROM products where id='$id' ";

    $result=mysqli_query($conn,$select);

    if(mysqli_num_rows($result)>0){


                 while($row=mysqli_fetch_assoc($result)){

                        $productname=$row['productName'];

                        $brandname=$row['brandname'];

                        $price=$row['price'];

                        $category=$row['category'];

                        $image1=$row['image1'];

                          $image2=$row['image2'];

$desc=$row['productDetails'];

                            $image3=$row['image3'];

                              $image4=$row['image4'];

                        $id=$row['id'];

                }



}





 ?>

<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> ProductDetails - RexClothRental.com</title>

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

      <?php include 'init/navbar.php';?>

    </div>

    <!------------ single Product details------->

    <div class="small-cotainer single-product">



        <div class="row">

            <div class="col-2">

                <img src="admin/<?php echo $image1;?>" width="100%" id="ProductImg">

                <div class="small-img-row">

                    <div class="small-img-col">

                        <img src="admin/<?php echo $image1;?>" width="100%" class="small-img">

                    </div>

                    <div class="small-img-col">

                        <img src="admin/<?php echo $image2;?>" width="100%" class="small-img">

                    </div>

                    <div class="small-img-col">

                        <img src="admin/<?php echo $image3;?>" width="100%" class="small-img">

                    </div>

                    <div class="small-img-col">

                        <img src="admin/<?php echo $image4;?>" width="100%" class="small-img">

                    </div>

                </div>

            </div>

            <div class="col-2">

                <p>Home / T-Shirt</p>

                <h1><?php echo ucwords($productname); ?> By <?php echo strtoupper($brandname);?></h1>

                <h4>Rs-<?php echo $price;?></h4>

<form action="addToCart.php" method="get">
                <select name="size" required="">

                    <option>Select Size</option>

                    <option value="XXL">XXL</option>

                    <option value="XL">XL</option>

                    <option value="L">L</option>

                    <option value="M">M</option>

                    <option value="S">S</option>

                </select>
                <input type="hidden" name="id" value="<?php echo $id;?>">
                <input type="number" value="1" min="1" name="quantity" required="true">

                <input type="submit" class="btn" value="Add To Cart" name="submit">>
</form>
                <h3>Profuct Details <i class="fa fa-indent"></i></h3>

                <br>

                <p><?php echo $desc;?></p>

            </div>

        </div>

    </div>

    <!------title----------->

<div class="small-container">

    <div class="row row-2">

<h2>Related Products</h2>

<p>View More</p>

    </div></div>

</div>

    <div class="small-container">

        <div class="row">

            <div class="col-4">

                <img src="img/buy-1.jpg" alt="">

                <h4>Red Printed T-shirt</h4>

                <div class="rating">

                    <i class="fa fa-star"></i>

                    <i class="fa fa-star"></i>

                    <i class="fa fa-star"></i>

                    <i class="fa fa-star"></i>

                    <i class="fa fa-star-o"></i>

                </div>

                <p>Rs-250</p>

            </div>

            <div class="col-4">

                <img src="img/buy-1.jpg" alt="">

                <h4>Red Printed T-shirt</h4>

                <div class="rating">

                    <i class="fa fa-star"></i>

                    <i class="fa fa-star"></i>

                    <i class="fa fa-star"></i>

                    <i class="fa fa-star-half-o"></i>

                    <i class="fa fa-star-o"></i>

                </div>

                <p>Rs-250</p>

            </div>

            <div class="col-4">

                <img src="img/buy-1.jpg" alt="">

                <h4>Red Printed T-shirt</h4>

                <div class="rating">

                    <i class="fa fa-star"></i>

                    <i class="fa fa-star"></i>

                    <i class="fa fa-star"></i>

                    <i class="fa fa-star"></i>

                    <i class="fa fa-star-o"></i>

                </div>

                <p>Rs-250</p>

            </div>

            <div class="col-4">

                <img src="img/buy-1.jpg" alt="">

                <h4>Red Printed T-shirt</h4>

                <div class="rating">

                    <i class="fa fa-star"></i>

                    <i class="fa fa-star"></i>

                    <i class="fa fa-star"></i>

                    <i class="fa fa-star"></i>

                    <i class="fa fa-star-half-o"></i>

                </div>

                <p>Rs-250</p>

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

<!----------js for product gallery---------->

<script>

    var ProductImg = document.getElementById("ProductImg");

    var SmallImg = document.getElementsByClassName("small-img");



    SmallImg[0].onclick = function()

    {

        ProductImg.src = SmallImg[0].src;

    }

    SmallImg[1].onclick = function()

    {

        ProductImg.src = SmallImg[1].src;

    }

    SmallImg[2].onclick = function()

    {

        ProductImg.src = SmallImg[2].src;

    }

    SmallImg[3].onclick = function()

    {

        ProductImg.src = SmallImg[3].src;

    }

</script>

</body>



</html>