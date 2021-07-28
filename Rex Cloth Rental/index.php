<?php 
require "init/conn.php";

if(!isset($_COOKIE['userId'])){
    // global isLogged = true;
    header('location:login.php');
}?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Best online Cloth Rental Service | rexclothrental.com</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>

</style>

<body>
    <div class="header">
        <div class="container">
           <?php include "init/navbar.php";?>
            <div class="row">
                <div class="col-2">
                    <h1>Welcome to Rex Cloth<br>Spend Less,Wear More!</h1>
                    <p>The unlimited wardrobe you always wanted is finally here.</p>
                    <a href="" class="btn">Rent Now &#8594;</a>
                </div>
                <div class="col-2">
                    <img src="img/2.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- -------Feature categories--------- -->
    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="img/category-1.jpg">
                </div>
                <div class="col-3">
                    <img src="img/category-2.jpg">
                </div>
                <div class="col-3">
                    <img src="img/category-3.jpg">
                </div>
            </div>
        </div>
    </div>
    <!-- -------Feature Product--------- -->
    <div class="small-container">
        <h2 class="title">Featured Product</h2>
        <div class="row">
        <?php include "featureproduct.php";?> 
        </div>
        <h2 class="title">Latest Products</h2>
       <?php include "latestProduct.php";?>
        
    </div>

    <!-- -------testimonial--------- -->
    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe molestias recusandae nulla vel
                        corporis dolores.
                    </p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <img src="img/buy-1.jpg" alt="">
                    <h3>Omkar Jadhav</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe molestias recusandae nulla vel
                        corporis dolores accusamus accusantium praesentium, porro
                    </p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <img src="img/buy-1.jpg" alt="">
                    <h3>Vishal Dane</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe moles
                    </p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <img src="img/buy-1.jpg" alt="">
                    <h3>RC</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- -------Brands--------- -->
    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="img/bg.png" alt="">
                </div>
                <div class="col-5">
                    <img src="img/bg.png" alt="">
                </div>
                <div class="col-5">
                    <img src="img/bg.png" alt="">
                </div>
                <div class="col-5">
                    <img src="img/bg.png" alt="">
                </div>
                <div class="col-5">
                    <img src="img/bg.png" alt="">
                </div>
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