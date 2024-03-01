<!DOCTYPE html>
<html>

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Khet Bajar</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- font css -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,800;1,400&family=Sen:wght@400;700;800&display=swap"
        rel="stylesheet">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

    <style>
        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }
    </style>
</head>

<body>
    <div class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.php"><img src="images/logo.png"
                        style="height: 200px; width: 300px; position: absolute;  margin-top: -100px;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shop.php">Crops</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact Us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="modal" data-target="#myModal" href="login.php">Sign Up </a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <div class="search_icon"><i class="fa fa-search" aria-hidden="true"></i></div>
                    </form>
                </div>
            </nav>
        </div>
    </div>












    <!-- header section end -->


    <!-- MODEL SECTION START -->

    <div class="modal fade" id="myModal">
        <div class="modal-dialog " style="max-width:70%;">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Register</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <!-- Section: Design Block -->
                    <div class="row">
                        <div class="card card-register mx-auto mt-5 col-md-8">
                            <div class="card-header">Register an Account</div>
                            <div class="card-body">
                                <form>

                                    <div class="form-group">
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-label-group">
                                                    <p>Company Name: <input type="text"
                                                            class="form-control form-control-lg" size="65"
                                                            name="CName" />
                                                        <?php echo @$comp_name; ?></p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-label-group">
                                                    <p>Company Registration Number : <input type="text" size="65"
                                                            name="crn" class="form-control form-control-lg" /> <?php echo @$comp_reg; ?></p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-label-group">
                                                    <p>Company Address: <input type="text"
                                                            class="form-control form-control-lg" size="65"
                                                            name="CAddress" /> <?php echo @$address_error; ?>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-label-group">
                                                    <p>Pincode: <input type="text" class="form-control form-control-lg"
                                                            size="65" name="Pincode" />
                                                        <?php echo @$pincode_error; ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-label-group">
                                                    <p> Email: <input type="text" size="65" name="Email"
                                                            class="form-control form-control-lg" />
                                                        <?php echo @$email_error; ?>
                                                    </p>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-label-group">
                                                    <p> Phone: <input type="number" size="65" name="phone"
                                                            class="form-control form-control-lg" />
                                                        <?php echo @$phone; ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-label-group">
                                                    <p>Password: <input type="password"
                                                            class="form-control form-control-lg" size="65"
                                                            name="Password" /> <?php echo @$password_error; ?></p>


                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-label-group">
                                                    <p> Confirm Password: <input type="password"
                                                            class="form-control form-control-lg" size="65"
                                                            name="CPassword" /> <?php echo @$Cpassword_error; ?></p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-label-group">
                                                    <p> Establishment Date: <input type="date"
                                                            class="form-control form-control-lg" name="dt">
                                                    </p>
                                                    <?php echo @$estdate; ?> 
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                           
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="form-row">
                                            
                                            <div class="col-md-3">
                                            State :
                                        <select type="text" value="" name="State" class="custom-select">
                                            <option>Gujarat</option>
                                        </select>
                                            </div>

                                            <div class="col-md-3">
                                            District :<select type="text" value="" name="District" class="custom-select">
                                            <option>Surat</option>
                                            <option>Bardoli</option>
                                        </select>
                                            </div>

                                            <div class="col-md-3">
                                            Region :<select type="text" value="" name="Region" class="custom-select">
                                            <option>Majura</option>
                                            <option>Adajan</option>
                                            <option>Katargam</option>
                                            <option>Udhana</option>
                                            <option>Puna Patiya</option>
                                            <option>Jakatanaka</option>
                                            <option>Varachha</option>
                                        </select></p>
                                            </div>
                                        </div>
                                    </div>

                            </div>
                            
                            <a class="btn btn-primary btn-block" href="login.php">Register</a>
                            </form>
                            <div class="text-center">
                                <a class="d-block medium" href="forgot-password.php">Forgot Password?</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Section: Design Block -->
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
    </div>

    </div>






    <!-- MODEL SECTION END -->
    <!-- layout_border start -->
    <div class="container-fluid">
        <div class="layout_border">
            <!-- banner section start -->
            <div class="banner_section layout_padding">
                <div class="container-fluid">
                    <div id="main_slider" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="banner_taital_main">
                                            <h1 class="banner_taital">Fresh Vagetable Shop</h1>
                                            <p class="banner_text">Many variations of passages of Lorem Ipsum available,
                                                but the majority have suffered</p>
                                            <div class="btn_main">
                                                <div class="started_text"><a href="#">Login</a></div>
                                                <div class="started_text active"><a href="#">Register</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="banner_img"><img
                                                src="https://img.freepik.com/free-vector/vector-plate-full-tropical-fruits-pineapple-kiwi-mango-papaya-banana-isolated-white-background_1284-45471.jpg?w=740&t=st=1688802335~exp=1688802935~hmac=b894a30093c443905632385c1366b68be8c81308009588f2b22e99d4ea5c11b5">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="banner_taital_main">
                                            <h1 class="banner_taital">Fresh Vagetable Shop</h1>
                                            <p class="banner_text">Many variations of passages of Lorem Ipsum available,
                                                but the majority have suffered</p>
                                            <div class="btn_main">
                                                <div class="started_text"><a href="#">Login</a></div>
                                                <div class="started_text active"><a href="#">Register</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="banner_img"><img
                                                src="https://img.freepik.com/free-vector/realistic-juicy-fruit-illustration_1284-22141.jpg?size=626&ext=jpg&ga=GA1.2.432421316.1688801987&semt=sph">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="banner_taital_main">
                                            <h1 class="banner_taital">Fresh Vagetable Shop</h1>
                                            <p class="banner_text">Many variations of passages of Lorem Ipsum available,
                                                but the majority have suffered</p>
                                            <div class="btn_main">
                                                <div class="started_text"><a href="#">Login</a></div>
                                                <div class="started_text active"><a href="#">Register</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="banner_img"><img
                                                src="https://img.freepik.com/free-vector/fruits-frame-realistic-background_1284-29853.jpg?size=626&ext=jpg&ga=GA1.2.432421316.1688801987&semt=sph">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                            <img src="images/arrow-left.png">
                        </a>
                        <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                            <img src="images/arrow-right.png">
                        </a>
                    </div>
                </div>
            </div>
            <!-- banner section end -->
            <!-- about section start -->
            <!-- <div class="about_section layout_padding">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <h1 class="about_taital">About Us</h1>
                        <p class="about_text">Passages of Lorem Ipsum available, but the majority have suffered alteration </p>
                     </div>
                  </div>
                  <div class="about_section_2">
                  </div>
                  <div class="row">
                     <div class="col-md-6">
                        <div class="about_img"><img src="images/about-img.png"></div>
                     </div>
                     <div class="col-md-6">
                        <div class="fresh_taital">Fresh any</div>
                        <p class="ipsum_text">Variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomisedvariations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised</p>
                        <div class="read_bt"><a href="#">Read More</a></div>
                     </div>
                  </div>
               </div>
            </div> -->
            <!-- about section end -->
            <!-- vagetables section start -->
            <div class="vagetables_section layout_padding">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1 class="vagetables_taital">Our Vagetables</h1>
                            <p class="vagetables_text">Passages of Lorem Ipsum available, but the majority have suffered
                                alteration </p>
                        </div>
                    </div>
                    <div class="courses_section_2">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="hover01 column">
                                    <figure><img src="images/img-1.png"></figure>
                                </div>
                                <h3 class="harshal_text">Harshal</h3>
                                <h3 class="rate_text">$19</h3>
                                <div class="read_bt_1"><a href="#">Read More</a></div>
                            </div>
                            <div class="col-md-4">
                                <div class="hover01 column">
                                    <figure><img src="images/img-2.png"></figure>
                                </div>
                                <h3 class="harshal_text">Foodism</h3>
                                <h3 class="rate_text">$19</h3>
                                <div class="read_bt_1"><a href="#">Read More</a></div>
                            </div>
                            <div class="col-md-4">
                                <div class="hover01 column">
                                    <figure><img src="images/img-3.png"></figure>
                                </div>
                                <h3 class="harshal_text">Seven</h3>
                                <h3 class="rate_text">$19</h3>
                                <div class="read_bt_1"><a href="#">Read More</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="vagetables_section_2">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="hover01 column">
                                    <figure><img src="images/img-4.png"></figure>
                                </div>
                                <h3 class="harshal_text">Cyrus</h3>
                                <h3 class="rate_text">$19</h3>
                                <div class="read_bt_1"><a href="#">Read More</a></div>
                            </div>
                            <div class="col-md-4">
                                <div class="hover01 column">
                                    <figure><img src="images/img-5.png"></figure>
                                </div>
                                <h3 class="harshal_text">Elianna</h3>
                                <h3 class="rate_text">$19</h3>
                                <div class="read_bt_1"><a href="#">Read More</a></div>
                            </div>
                            <div class="col-md-4">
                                <div class="hover01 column">
                                    <figure><img src="images/img-6.png"></figure>
                                </div>
                                <h3 class="harshal_text">Friedman</h3>
                                <h3 class="rate_text">$19</h3>
                                <div class="read_bt_1"><a href="#">Read More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- vagetables section end -->
            <!-- contact section start -->
            <div class="contact_section layout_padding">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1 class="contact_taital">Get In Touch</h1>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="contact_section_2">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mail_section_1">
                                    <input type="text" class="mail_text" placeholder="Name" name="Name">
                                    <input type="text" class="mail_text" placeholder="Phone Number" name="Phone Number">
                                    <input type="text" class="mail_text" placeholder="Email" name="Email">
                                    <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment"
                                        name="Massage"></textarea>
                                    <div class="send_bt"><a href="#">SEND</a></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="map_main">
                                    <div class="map-responsive">
                                        <iframe
                                            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France"
                                            width="600" height="340" frameborder="0" style="border:0; width: 100%;"
                                            allowfullscreen=""></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- contact section end -->
            <!-- testimonial section start -->
            <div class="testimonial_section layout_padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="testimonial_taital">Testimonial</h1>
                        </div>
                    </div>
                    <div class="testimonial_section_2">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="testimonial_box">
                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                                class="active"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <p class="testimonial_text">Onsectetur adipiscing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                                                    ea commodo consequat.
                                                    Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                    cillum dolor</p>
                                            </div>
                                            <div class="carousel-item">
                                                <p class="testimonial_text">Onsectetur adipiscing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                                                    ea commodo consequat.
                                                    Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                    cillum dolor</p>
                                            </div>
                                            <div class="carousel-item">
                                                <p class="testimonial_text">Onsectetur adipiscing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                                                    ea commodo consequat.
                                                    Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                    cillum dolor</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="client_main">
                                    <div class="client_left">
                                        <div class="client_img"><img src="images/client-img.png"></div>
                                    </div>
                                    <div class="client_right">
                                        <h4 class="client_name">Brobo Lo</h4>
                                        <p class="customer_text">Customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- testimonial section end -->
            <!-- layout_border end -->
        </div>
    </div>
    <!-- footer section start -->
    <div class="footer_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <h3 class="footer_text">Useful links</h3>
                    <div class="footer_menu">
                        <ul>
                            <li class="active"><a href="index.php"><span class="angle_icon active"><i
                                            class="fa fa-arrow-right" aria-hidden="true"></i></span> Home</a></li>
                            <li><a href="about.php"><span class="angle_icon"><i class="fa fa-arrow-right"
                                            aria-hidden="true"></i></span> About</a></li>
                            <li><a href="services.php"><span class="angle_icon"><i class="fa fa-arrow-right"
                                            aria-hidden="true"></i></span> Services</a></li>
                            <li><a href="domain.php"><span class="angle_icon"><i class="fa fa-arrow-right"
                                            aria-hidden="true"></i></span> Domain</a></li>
                            <li><a href="testimonial"><span class="angle_icon"><i class="fa fa-arrow-right"
                                            aria-hidden="true"></i></span> Testimonial</a></li>
                            <li><a href="contact.php"><span class="angle_icon"><i class="fa fa-arrow-right"
                                            aria-hidden="true"></i></span> Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <h3 class="footer_text">Address</h3>
                    <div class="location_text">
                        <ul>
                            <li>
                                <a href="#">
                                    <span class="padding_left_10"><i class="fa fa-map-marker"
                                            aria-hidden="true"></i></span>It is a long established fact that a<br>
                                    reader will be distracted</a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="padding_left_10"><i class="fa fa-phone"
                                            aria-hidden="true"></i></span>(+71) 1234567890<br>(+71) 1234567890
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="padding_left_10"><i class="fa fa-envelope"
                                            aria-hidden="true"></i></span>demo@gmail.com
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="footer_main">
                        <h3 class="footer_text">Find Us</h3>
                        <p class="dummy_text">more-or-less normal distribution </p>
                        <div class="social_icon">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
        <div class="container">
            <p class="copyright_text">2023 All Rights Reserved. Design by <a href="https://html.design">Free html
                    Templates</a></p>
        </div>
    </div>
    <!-- copyright section end -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
</body>

</html>