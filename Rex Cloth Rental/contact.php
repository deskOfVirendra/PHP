<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Contatc us - RexClothRental.com</title>
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
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto+Slab&display=swap" rel="stylesheet">
 >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<div class="contact-page">
    <div class="row">
        <div class="col-2">
            
            <div class="form-contact">
              <div class="contact-us">
                   
                      <h2>Contact us</h2>
                      <hr id="Indicator-1">
                       
                                       
                   </div>
                   <form id="contact-form">
                    <span>First Name</span>
                       <input type="text" placeholder="Your Name....">
                       <span>Last Name</span>
                       <input type="text" placeholder="Your Surname...">
                       <span> Type your Message....</span>
                       <textarea name="text"></textarea>
                       <button type="submit" class="btn">Submit</button>
                     >
                   </form>

                  
              </div>
             
           </div>
        </div>
    </div>
</div>   
</body>
</html>

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