<?php



include 'init/conn.php';



if(isset($_GET['login'])) {

    

    $mobile = $_GET['mobileNo'];

    $password = $_GET['password'];

    echo $mobile.$password;

    $selectUsers = "select * from users where mobileNo='$mobile'";

    $resultUsers = $conn->query($selectUsers);

    print_r($resultUsers->num_rows); 

    if($resultUsers->num_rows != 0) { 

         setcookie('userId',$mobile,time()+365*86400);

        //  echo "<script>win0</script>";

        header('location:index.php');

    }else {

        // echo "<script>alert('user does not exists..!')</script>";

    }





}



if(isset($_GET['register'])) {

   

     $name = $_GET['name'];

     $email = $_GET['email'];

     $mobile = $_GET['mobile'];

     $password = $_GET['password'];



     //set date

     date_default_timezone_set('Asia/kolkata');



     $date = date("F j, Y, g:i a");



      $selectUsers = "select * from users where mobileNo=$mobile";

      $resultUsers = $conn->query($selectUsers);

       

      if($resultUsers->num_rows > 0) {

        echo "<script>alert('user already exists..!')</script>";

      } else {

        $sql_insert = "Insert into users(Name,email,password,registeredOn,mobileNo) values('$name','$email','$password','$date','$mobile')";

        if($conn->query($sql_insert)) {

           echo "<script>alert('registered..!')</script>";

        }

        else {

           echo "<script>alert('error..!')</script>";

        }

      }



  

}

?>



<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Login Register - RexClothRental.com</title>

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



    </div>

 <!-----Account page--------->

 <div class="account-page">

     <div class="container">

         <div class="row">

             <div class="col-2">

                 <img src="img/2.png" width="100%" >

             </div>

             <div class="col-2">

               <div class="form-container">

                    <div class="form-btn">

                    <span id="loginContainer">Login</span>

                        <spanm id="registerContainer">Register</span>

                        <!-- <hr id="Indicator"> -->

                    </div>

                    <form id="loginForm" action="" method="GET">

                        <input type="text" placeholder="Mobile Number" name='mobileNo'>

                        <input type="password" placeholder="Password" name='password'>

                        <button type="submit" class="btn" name='login'>Login</button>

                        <a href="">Forgot password</a>

                    </form>



                    <form id="registrationForm" action="" method="GET">

                        <input type="text" placeholder="Name" name="name">

                        <input type="email" placeholder="Email" name="email">

                        <input type="text" placeholder="Mobile Number" name="mobile">

                        <input type="password" placeholder="Password" name="password">

                        <button type="submit" class="btn" name='register'>Register</button>

                    </form>

               </div>

              

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

<script>

    let loginContainer =  document.getElementById('loginContainer');

    let registerContainer = document.getElementById('registerContainer');



    let loginForm = document.getElementById('loginForm');



    let registrationForm = document.getElementById('registrationForm');

    

    registrationForm.style.display = 'none';

      

    loginContainer.addEventListener('click',()=> {

      

        registrationForm.style.display = 'none';

        loginForm.style.display = 'block';

        loginContainer.style.borderBottom = '3px solid red';

        registerContainer.style.border='none';

        loginContainer.style.paddingBottom = '4px';

    })



    registerContainer.addEventListener('click',()=> {

      

        loginForm.style.display = 'none';

        registrationForm.style.display = 'block';

        registerContainer.style.borderBottom = '3px solid red';

        loginContainer.style.border='none';

        registerContainer.style.paddingBottom = '4px';

    })

</script>

</body>



</html>