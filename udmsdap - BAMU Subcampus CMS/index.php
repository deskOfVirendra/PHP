<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Google Fonts -->


    <!-- Fab Icon -->
    <link rel="shortcut icon" type="image/png" href="assets/img/logos/fav_icon.png" />
    <!-- Fonts Awesome Icons -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/all.min.css">
    <!-- Bootstrap Link -->
    <link rel="stylesheet" href="assets/css/vander/bootstrap.min.css">
    <!-- Animate Css -->
    <link rel="stylesheet" href="assets/css/vander/animate.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="assets/css/vander/owl.carousel.min.css">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="assets/css/vander/slick.css">
    <!-- Flaticon -->
    <link rel="stylesheet" href="assets/css/vander/flaticon.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>BAMU Sub-Campus University</title>
    <!--Codingeek -->
    <link rel="stylesheet" href="../../codingeek-js/codingeek.css">
</head>

<body>

<?php include "include/navbar.php";?>
<?php include "include/conn.php";?>
    <!-- Showcase Section -->
    <div class="header_section section">
        <div class="social-icon">
            <ul>
                <li><a target="_blank" href="#"><i
                            class="fab fa-facebook-square"></i></a></li>
                <li><a target="_blank" href="#"><i
                            class="fab fa-instagram"></i></a></li>
                <li><a target="_blank" href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a target="_blank" href="#"><i
                            class="fab fa-linkedin"></i></a></li>
            </ul>
        </div>
        <div class="header-carousel">
            <div class="single-header-item">
                <div class="content-area">
                    <h2 class="title">University Department Of Management Science (UDMS)</h2>
                    <p class="d-none d-lg-block">
                        <h5>Dr. Babasaheb Ambedkar Marathwada University,</br>
                        Sub-Campus, Osmanabad - 413501</br>
                        Maharashtra, India.</h5>
                    </p>
                </br>
                </br>
<!--
                </br>
            <h6 class="margin-bottom-50">Digital platform created by Department for students and teachers to use online teaching learning facility anywhere</h6> -->
<h1 style = "color: var(--dark-blue-1);">MBA</h1>
<h1 style = "color: var(--dark-blue-1);">MCA</h1>

                </div>
                <div class="bg-image" style="background-image: url(assets/img/slider/home1/uni-students.jpg)">

                </div>
            </div>
            <div class="single-header-item">
                <div class="content-area">
                    <h1 class="title">We helpe you go further than you have ever dreamed.</h1>
                    <!-- <p class="d-none d-lg-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in velit
                        odio. Morbi sodales nisi nec
                        tortor commodo, malesuada fermentum magna faucibus. Proin fringilla ante lacus, eu condimentum
                        est rutrum eget. Vestibulum molestie at sapien sed facilisis.</p> -->
                </div>
                <div class="bg-image" style="background-image: url(assets/img/slider/home1/adolescent-adorable.jpg)">
                </div>
            </div>
            <div class="single-header-item">
                <div class="content-area">
                    <h1 class="title">The education you want, the attention you deserve.</h1>
                    <!-- <p class="d-none d-lg-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in velit
                        odio. Morbi sodales nisi nec
                        tortor commodo, malesuada fermentum magna faucibus. Proin fringilla ante lacus, eu condimentum
                        est rutrum eget. Vestibulum molestie at sapien sed facilisis.</p> -->
                </div>
                <div class="bg-image"
                    style="background-image: url(assets/img/slider/home1/bestfriends-boys-dating.jpg)"></div>
            </div>
            <div class="single-header-item">
                <div class="content-area">
                    <h1 class="title">Best university facilities in the world.</h1>
<!-- 
                    <p class="d-none d-lg-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in velit
                        odio. Morbi sodales nisi nec
                        tortor commodo, malesuada fermentum magna faucibus. Proin fringilla ante lacus, eu condimentum
                        est rutrum eget. Vestibulum molestie at sapien sed facilisis.</p> -->
                </div>
                <div class="bg-image" style="background-image: url(assets/img/slider/home1/uni-students.jpg)"></div>
            </div>
        </div>
    </div>

    <!-- Events Section -->
    <section class="events-section section">
        <!-- Side Icons -->
        <div class="fixed-right side-form-icons">
            <i class="fas fa-phone icon" id="open-opening-popup"></i>
            <i class="fas fa-map-marker-alt icon" id="open-location-popup"></i>
            <i class="fas fa-envelope icon" id="open-form-popup"></i>
        </div>


                    <?php




                    $sql = "SELECT * FROM notices order by id desc limit 1 ";


                  $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
                    $id=$row['id'];
                    $date = $row['dateby'];
                    $title = $row['title'];
                    $description = $row['description'];
                    $event = $row['fullday'];
                    $peoples = $row['peoples'];
                    $venue = $row['venue'];
                    $photo = $row['photo'];


$newdate  = strtotime($date);
   $day = date("d",$newdate);
   $year = date("Y",$newdate);
   $monthNum  = date("m",$newdate);
 $month = date('F', mktime(0, 0, 0, $monthNum, 10));
                    }

                    // Free result set
                    mysqli_free_result($result);
                    }


                    ?>



        <div class="container">
            <div class="row event-item-style-1 odd-event">
                <div class="col-5 col-lg-2 date">
                    <h1><?php echo $day;?></h1>
                    <h5><?php echo $month;?> <?php echo $year;?></h5>
                </div>
                <div class="col-7 col-md-6 col-lg-3 media">
                    <img src="<?php echo $photo;?>" alt="events image"
                        class="img-fluid">
                </div>
                <div class="col-12 col-lg-7 details">
                    <h3><?php echo $title;?></h3>
                    <p><?php echo $description; ?></p>
                    <div class="d-flex align-items-center event-infos">
                        <div class="info">
                            <i class="fas fa-clock"></i>
                            <span><?php echo $event;?></span>
                        </div>
                        <div class="info ml-5">
                            <i class="fas fa-users"></i>
                            <span><?php echo $peoples;?></span>
                        </div>
                        <div class="info ml-5">
                            <i class="fas fa-map-marker-alt"></i>
                            <span><?php echo $venue; ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Popup -->
    <div class="side-form-popup">
        <div class="popup-wrapper">
            <div class="center-popup">
                <div class="opening-popup">
                    <div class="close-popup">
                        <i class="fas fa-times"></i>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-8 media">
                            <img src="assets/img/University/students/adolescent-adorable-alone.png" alt="media"
                                class="img-fluid">
                        </div>
                        <div class="col-md-6 col-lg-4 content">
                            <h5>Opening hours</h5>
                            <div class="openings">
                                <div class="opening opening-days">
                                    <p class="day">Monday</p>
                                    <div class="divider"></div>
                                    <p class="day">Friday</p>
                                </div>
                                <div class="opening opening-time">
                                    <p class="time">08.00 am</p>
                                    <div class="divider"></div>
                                    <p class="time">16.00 pm</p>
                                </div>
                            </div>
                            <p class="num">+24 45 15 62 129</p>
                        </div>
                    </div>
                </div>
                <div class="location-popup">
                    <div class="close-popup">
                        <i class="fas fa-times"></i>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-8 media">
                            <div id="location-map"></div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 content">
                            <h5>Address</h5>
                            <p class="address">2, Ave Manchester, Lorem ipsum St, Rio Danubin</p>
                            <button class="main-btn">Open in Maps</button>
                        </div>
                    </div>
                </div>
                <div class="form-popup">
                    <div class="close-popup">
                        <i class="fas fa-times"></i>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-7 content">
                            <h4>You have a question for us?</h4>
                            <p>leave your message below or email us at info@bantinguniversity.com</p>
                            <form class="text-left form-style-2">
                                <div class="form-group required">
                                    <label for="email">Email address</label>
                                    <input type="email" id="email" class="form-control" name="email"
                                        placeholder="johnLP12@gmail.com" />
                                </div>
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <input type="text" id="message" class="form-control" name="name"
                                        placeholder="Hello, I wanted to know about this particular course called..." />
                                    <span class="small-text">120 characters left</span>
                                </div>
                                <button class="main-btn" type="submit">Send message</button>
                            </form>
                        </div>
                        <div class="d-none d-lg-block col-lg-5 media">
                            <img src="assets/img/University/Coming_soon/ambar-simpang.png" alt="media image"
                                class="img-fluid" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- testimonial carousel area -->

    <!-- Footer Section -->

<?php include "include/footer.php";?>

    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>

    <!-- JQuery Link -->
    <script src="assets/js/vander/jquery-3.4.1.min.js"></script>
    <script src="assets/js/vander/jquery-migrate-1.4.1.min.js"></script>
    <script src="assets/js/vander/popper.min.js"></script>
    <script src="assets/js/vander/bootstrap.min.js"></script>
    <script src="assets/js/vander/owl.carousel.min.js"></script>
    <script src="assets/js/vander/slick.min.js"></script>
    <script src="assets/js/vander/waypoints.min.js"></script>
    <script src="assets/js/vander/jQuery.rcounter.js"></script>

    <!-- Google maps geolocation -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqFuLx8S7A8eianoUhkYMeXpGPvsXp1NM&amp;callback=initMap"
        async defer></script>
    <!-- Custom Script -->
    <script src="assets/js/map.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/slider.js"></script>
    <script src="assets/js/toggler.js"></script>
    <!-- codingeek -->
    <script src="codingeek-link.js"></script>
    <script src="../../codingeek-js/codingeek.js"></script>
</body>


<!-- Mirrored from codingeek.net/html/banting-university/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Apr 2020 20:35:44 GMT -->
</html>
