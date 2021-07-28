
    <!-- Navbar Section -->
    <nav class="navbar-section container-fluid d-none d-sm-block"> <marquee><h6>Digital platform created by Department for students and teachers to use online teaching learning facility anywhere</h6></marquee>

        <div class="row">
            <div class="col-12 nav-container">
                <!-- Main Nav Start -->
                <div class="main-nav">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="index-2.html">
                            <img src="assets/img/logos/logo_1.png" alt="Nav Logo">
                        </a>

                        <!-- For Tablet Screen -> Start -->
                        <div class="menu-toggler d-block d-xl-none">
                            <div class="hamburger-menu">
                                <a href="#">
                                    <span>Menu</span>
                                </a>
                            </div>
                        </div>
                        <div class="nav-menu-items">
                            <ul class="nav-items">
                                <li><a href="sign-in.html">Login/Sign up</a></li>
                                <li class="menu-item-has-children"><a href="index-2.html" class="current-menu-item">Home</a>
                                    <ul class="sub-menu">
                                        <li><a href="index-2.html" class="current-menu-item">Homepage 1</a></li>
                                        <li><a href="index-3.html">Homepage 2</a></li>
                                        <li><a href="index-4.html">Homepage 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About Department</a></li>
                                <li class="menu-item-has-no-child"><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                        <!-- For Tablet Screen -> End -->

                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <!-- Use "menu-item-has-no-child" class if there is no sub-menu -->
                                <li class="menu-item-has-no-children">
                                    <a href="index.php">Home</a>
                                </li>
                                <li class="menu-item-has-no-children">
                                    <a href="about.php">About Department</a>
                                </li>
                                <li class="menu-item-has-no-children">
                                    <a href="register.php">Student Registration</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#" class="current-menu-item">Login</a>
                                    <ul class="sub-menu">
                                        <li><a href="student_login.php" class="current-menu-item">Student Login</a></li>
                                        <li><a href="faculty_login.php">Faculty Login</a></li>
                                        <li><a href="admin_login.php">Admin Login</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-no-children">
                                    <a href="contact.php">Contact
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>

                <!-- Side Nav Start -->
                <div class="side-nav d-flex align-items-center">

                    <div class="search search-active">
                        <i class="flaticon-search"></i>
                    </div>

                </div>
            </div>

            <!-- search start -->
            <div class="search-content-wrap main-search-active">
                <div class="search-content">
                    <form class="search-form" action="#">
                        <input type="text" placeholder="Type Something To Search">
                    </form>

                    <a class="search-close d-flex justify-content-center align-items-center">
                        <i class="fas fa-times icon"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Navbar for mobile screen -->
    <div class="navbar-mobile sticky-bar d-block d-sm-none">
        <div class="container-fluid">
            <div class="menu-toggler">
                <div class="hamburger-menu">
                    <a href="#">
                        <span>Menu</span>
                    </a>
                </div>
            </div>
            <div class="divider"></div>
            <div class="logo">
                <a href="#"><img src="assets/img/logos/logo_1.png" alt="logo" class="img-fluid"></a>
            </div>
            <div class="divider"></div>
            <div class="search">
                <i class="flaticon-search"></i>
            </div>
        </div>

        <div class="nav-menu-items">
            <ul class="nav-items">
                <li class="menu-item-has-no-children">
                    <a href="index.php">Home</a>
                </li>
                <li class="menu-item-has-no-children">
                    <a href="about.php">About Department</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="#" class="current-menu-item">Login</a>
                    <ul class="sub-menu">
                        <li><a href="students.php" class="current-menu-item">Student Login</a></li>
                        <li><a href="staff.php">Staff Login</a></li>
                        <li><a href="admin.php">Admin Login</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-no-children">
                    <a href="contact.php">Contact
                    </a>
                </li>
            </ul>
        </div>


        <div class="mobile-search-wrapper">
            <form>
                <input type="text" placeholder="Type something to start">
            </form>
        </div>
    </div>
