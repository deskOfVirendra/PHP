<?php
error_reporting(E_ALL);
require "init/conn.php";

if (!isset($_COOKIE['userId'])) {
    // global isLogged = true;
    header('location:login.php');
} else {
    $userid =  $_COOKIE['userId'];
}


if(isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $deleteSql = "delete from cart where id=".$id;

    if($conn->query($deleteSql)) {
        echo "<script>item removed from cart</script>";
    } 
}

?>
<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> CART - RexClothRental.com</title>

    <link rel="stylesheet" href="css/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<style>



</style>



<body>



    <div class="container">

        <?php include 'init/navbar.php'; ?>

    </div>

    <!----------- cart items details--------->

    <div class="small-container cart-page">

        <table>

            <tr>

                <th>Product</th>

                <th>Quantity</th>

                <th>Subtotal</th>

            </tr>

            

            <?php
            $sql = "SELECT * FROM cart WHERE userId='$userid' AND orderid =''";
            // echo $sql;
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    $image  = 'admin/'.$row['productImage'];
                    $price  = $row['productPrice'];
                    $id = $row['id'];

            ?>
                    <tr>

                        <td>
                            <div class="cart-indfo">

                                <img src="<?php echo $image; ?>" alt="">

                                <div>

                                    <p><?php echo $row["productName"]; ?></p>

                                    <small>Price : Rs-<?php echo $price;?></small>

                                    <br>

                                    <a href="cart.php?deleteid=<?php echo $id;?>">Remove</a>

                                </div>

                            </div>

                        </td>

                        <td><input type="number" value="<?php echo $row['quantity'];?>" disabled="true"></td>

                        <!-- <td>Rs-</td> -->

                    </tr>
            <?php
                }
            } else {
                // echo "0 Records";
            }
            ?>



        </table>

        <div class="total-price">

            <table>

                <tr>


                 <?php
                $sql1 = "SELECT sum(productPrice) as total FROM cart WHERE userId='$userid' AND orderid =''";
                // echo $sql;
                $result1 = $conn->query($sql1);
                
                if ($result1->num_rows > 0) {
                    // output data of each row
                    while ($row1 = $result1->fetch_assoc()) {
                       
                         $total = $row1['total'];    
                    
                    ?>

                    <td>Subtotal</td>

                    <td>Rs-<?php echo $total; ?></td>

                </tr>

                <tr>
 
                    
              
                    <td>Tax</td>

                    <td>Rs-<?php echo $total * 0.05;?></td>

                </tr>

                <tr>

                    <td>Total</td>

                    <td>Rs-<?php echo $total * 1.05;?></td>

                </tr>

            </table>

            <?php
         }   } else {
                    echo "great";
                }
                ?> 
     </div>
     <form action="placeorder.php">
                       <script src="https://checkout.razorpay.com/v1/checkout.js" data-key="rzp_test_HBlmIsQlhSha0b" data-amount="<?php echo round($total * 1.05);?>00" data-currency="INR" data-buttontext="Buy Now" data-name="rex" data-description="rex" data-image="logo.png" data-prefill.name="rex" data-prefill.email="rex@gmail.com" data-prefill.contact="9999999999" data-theme.color="#337AB7"></script>
                       <input type="hidden" custom="Hidden Element" name="hidden">
     </form>
<!-- <a href="placeorder.php"><button style="padding:6px 8px;background-color:red;color:white;border-radius:5px;border:none;float:right;margin-top:10px;">place order</button></a> -->
   
    </div>



    <?php include "init/footer.php"; ?>

    <!-- -------js for toggle menu--------- -->

    <script>
        var MenuItems = document.getElementById("MenuItems");



        MenuItems.style.maxHeight = '0px';



        function menutoggle() {

            if (MenuItems.style.maxHeight = '0px';)

            {

                MenuItems.style.maxHeight = '200px';

            }

        } else {

            MenuItems.style.maxHeight = '0px';

        }
    </script>



</body>



</html>