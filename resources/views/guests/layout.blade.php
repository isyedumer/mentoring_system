<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title> @yield('title') - Mentoring System</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ 'assets/user/css/bootstrap.min.css' }}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ 'assets/user/plugins/fontawesome/css/fontawesome.min.css' }}">
    <link rel="stylesheet" href="assets/user/plugins/fontawesome/css/all.min.css">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ 'assets/user/css/owl.carousel.min.css' }}">
    <link rel="stylesheet" href="{{ 'assets/user/css/owl.theme.default.min.css' }}">

    <!-- Slick CSS -->
    <link rel="stylesheet" href="{{ 'assets/user/plugins/slick/slick.css' }}">
    <link rel="stylesheet" href="{{ 'assets/user/plugins/slick/slick-theme.css' }}">

    <!-- Aos CSS -->
    <link rel="stylesheet" href="{{ 'assets/user/plugins/aos/aos.css' }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ 'assets/user/css/style.css' }}">

</head>

<body class="body-home-one">
    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Header -->
        <header class="header  header-two">
            <div class="header-fixed">
                <nav class="navbar navbar-expand-lg header-nav">
                    <div class="container">
                        <div class="navbar-header">
                            <a id="mobile_btn" href="javascript:void(0);">
                                <span class="bar-icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </a>
                            <a href="index.html" class="navbar-brand logo">
                                <img src="assets/user/img/logo-3.png" class="img-fluid" alt="Logo">
                            </a>
                        </div>
                        <div class="main-menu-wrapper">
                            <div class="menu-header">
                                <a href="index.html" class="menu-logo">
                                    <img src="assets/user/img/logo-3.png" class="img-fluid" alt="Logo">
                                </a>
                                <a id="menu_close" class="menu-close" href="javascript:void(0);">
                                    <i class="fas fa-times"></i>
                                </a>
                            </div>
                            <ul class="main-nav">
                                <li class="active has-submenu">
                                    <a href="index.html">Home</i></a>
                                </li>
                                <li class="has-submenu">
                                    <a href="">Mentor <i class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="dashboard.html">Mentor Dashboard</a></li>
                                        <li><a href="bookings.html">Bookings</a></li>
                                        <li><a href="schedule-timings.html">Schedule Timing</a></li>
                                        <li><a href="mentee-list.html">Mentee List</a></li>
                                        <li><a href="profile-mentee.html">Mentee Profile</a></li>
                                        <li class="has-submenu">
                                            <a href="blog.html">Blog</a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog-details.html">Blog View</a></li>
                                                <li><a href="add-blog.html">Add Blog</a></li>
                                                <li><a href="edit-blog.html">Edit Blog</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="chat.html">Chat</a></li>
                                        <li><a href="invoices.html">Invoices</a></li>
                                        <li><a href="profile-settings.html">Profile Settings</a></li>
                                        <li><a href="reviews.html">Reviews</a></li>
                                        <li><a href="mentor-register.html">Mentor Register</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="">Mentee <i class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu">
                                        <li class="has-submenu">
                                            <a href="#">Mentors</a>
                                            <ul class="submenu">
                                                <li><a href="map-grid.html">Map Grid</a></li>
                                                <li><a href="map-list.html">Map List</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="search.html">Search Mentor</a></li>
                                        <li><a href="profile.html">Mentor Profile</a></li>
                                        <li><a href="bookings-mentee.html">Bookings</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="booking-success.html">Booking Success</a></li>
                                        <li><a href="dashboard-mentee.html">Mentee Dashboard</a></li>
                                        <li><a href="favourites.html">Favourites</a></li>
                                        <li><a href="chat-mentee.html">Chat</a></li>
                                        <li><a href="profile-settings-mentee.html">Profile Settings</a></li>
                                        <li><a href="change-password.html">Change Password</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="search.html">Search Mentors</i></a>
                                </li>
                                <li class="has-submenu">
                                    <a href="blog-details.html">Blog</i></a>
                                </li>
                                <li>
                                    <a href="admin/index.html" target="_blank">Admin</a>
                                </li>
                                <li class="login-link">
                                    <a href="login.html">Login / Signup</a>
                                </li>
                            </ul>
                        </div>
                        <ul class="nav header-navbar-rht">
                            <li class="nav-item">
                                <a class="nav-link header-login-two" href="{{ route('login.get') }}">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link header-login" href="register.html">Sign up</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!-- /Header -->

        @yield('content')

        <!-- Footer -->
        <footer class="footer footer-two">

            <!-- Footer Top -->
            <div class="footer-top footer-two-top aos " data-aos="fade-up">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="footer-logo">
                                <img src="{{ asset('assets/user/img/logo-5.png') }}" alt="logo">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <!-- Footer Widget -->
                            <div class="footer-list">
                                <ul class="footer-social-list">
                                    <li>
                                        <a href="">Facebook</a>
                                    </li>
                                    <li>
                                        <a href="">Instagram </a>
                                    </li>
                                    <li>
                                        <a href="">Linkedin </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /Footer Widget -->

                            <div class="subscriber-two">
                                <div class="subscriber-two-head">
                                    <h2> </h2>
                                </div>
                                <!--
         <form action="search.html">
          <div class="input-group">
           <input type="text" class="form-control" placeholder="E-Mail Adresse">
           <a href="search.html" class="btn bg-path d-flex align-items-center" >
            <i class="fas fa-arrow-up"></i>
           </a>
          </div>
          <div class="botTina-border-two"></div>
         </form> -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">


                            <!-- Footer Widget -->
                            <div class="footer-widget footer-about">
                                <div class="footer-about-content">
                                    <h2 class="footer-title">About Mentor</h2>
                                    <p class="footer-sub-text">Mentor is a Professional Online courses Platform. Here
                                        we
                                        will provide you only interesting content, which you will like very much. We're
                                        dedicated to providing you the best of Online courses, with a focus on
                                        dependability
                                        and Learning. We're working to turn our passion for Online courses into a
                                        booming
                                        online website. We hope you enjoy our Online courses as much as we enjoy
                                        offering
                                        them to you.</p>

                                </div>
                            </div>
                            <!-- /Footer Widget -->

                        </div>
                        <div class="col-lg-2 col-md-6">

                            <!-- Footer Widget -->
                            <div class="footer-widget footer-menu">
                                <h2 class="footer-title">For Mentee</h2>
                                <ul>
                                    <li><a href="search.html">Search Mentors</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="booking.html">Booking</a></li>
                                    <li><a href="dashboard-mentee.html">Mentee Dashboard</a></li>
                                </ul>
                            </div>
                            <!-- /Footer Widget -->

                        </div>

                        <div class="col-lg-2 col-md-6">

                            <!-- Footer Widget -->
                            <div class="footer-widget footer-menu">
                                <h2 class="footer-title">For Mentors</h2>
                                <ul>
                                    <li><a href="appointments.html">Appointments</a></li>
                                    <li><a href="chat.html">Chat</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="dashboard.html">Mentor Dashboard</a></li>
                                </ul>
                            </div>
                            <!-- /Footer Widget -->

                        </div>
                    </div>
                </div>
            </div>
            <!-- /Footer Top -->

            <!-- Footer BotTina -->
            <div class="footer-botTina">
                <div class="container">

                    <!-- Copyright -->
                    <div class="copyright-border"></div>
                    <div class="copyright ">
                        <div class="row align-items-center">
                            <div class="col-md-6 ">
                                <div class="copyright-text">
                                    <p class="mb-0"> </p>
                                </div>
                            </div>
                            <div class="col-md-6 ">
                                <div class="term-privacy">
                                    <div class="social-icon">
                                        <ul class="align-items-center">
                                            <li>
                                                <a href="javascript:void(0);">Terms</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Privacy </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Cookies </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Copyright -->
                    <div class="back-to-top show">
                        <a class="back-to-top-icon align-items-center justify-content-center d-flex show"
                            href="#top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <!-- /Footer BotTina -->

        </footer>
        <!-- /Footer -->
    </div>
    <!-- /Main Wrapper -->


    <!-- jQuery -->
    <script src="{{ 'assets/user/js/jquery-3.6.0.min.js' }}"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ 'assets/user/js/bootstrap.bundle.min.js' }}"></script>

    <!-- Owl Carousel -->
    <script src="{{ 'assets/user/js/owl.carousel.min.js' }}"></script>

    <!-- Slick Slider -->
    <script src="{{ 'assets/user/plugins/slick/slick.js' }}"></script>

    <!-- Aos -->
    <script src="{{ 'assets/user/plugins/aos/aos.js' }}"></script>

    <!-- CusTina JS -->
    <script src="{{ 'assets/user/js/script.js' }}"></script>

    @yield('scripts')
</body>

</html>
