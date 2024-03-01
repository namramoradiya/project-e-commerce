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
        <title>Farmer</title>
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
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,800;1,400&family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
        <!-- Tweaks for older IEs-->
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <style>
            

.crop-image {
    width: 200px; /* Set the desired width */
    height: 200px; /* Set the desired height */
    object-fit: cover; /* Maintain the image aspect ratio and cover the container */
    margin-right: 10px; /* Add margin between crop images */
    border: 2px solid #ccc; /* Add a border around each crop image */
    transition: transform 0.3s ease-in-out; /* Add a smooth transition effect */
}

.crop-image:hover {
    transform: scale(1.05); /* Enlarge the image slightly on hover for a zoom effect */
}
            .photo {
                margin-right: 10px;
            }
            .photo-container {
                display: flex;
                padding: 10px;
            }

            /* Optional: Add margin to the left of the first photo */
            .photo:first-child {
                margin-left: 10px;
            }


            .search-box {
                font-size: 13px;
                border: solid 3px #000000;
                display: inline-block;
                position: relative;
                border-radius: 2.5em;
            }

            .search-box input[type=text] {
                font-family: inherit;
                font-weight: bold;
                width: 2.5em;
                height: 2.5em;
                padding: 0.3em 2.1em 0.3em 0.4em;
                border: none;
                box-sizing: border-box;
                border-radius: 2.5em;
                transition: width 800ms cubic-bezier(0.68, -0.55, 0.27, 1.55) 150ms;
            }

            .search-box input[type=text]:focus {
                outline: none;
            }

            .search-box input[type=text]:focus,
            .search-box input[type=text]:not(:placeholder-shown) {
                width: 18em;
                transition: width 800ms cubic-bezier(0.68, -0.55, 0.27, 1.55);
            }

            .search-box input[type=text]:focus+button[type=reset],
            .search-box input[type=text]:not(:placeholder-shown)+button[type=reset] {
                transform: rotate(-45deg) translateY(0);
                transition: transform 150ms ease-out 800ms;
            }

            .search-box input[type=text]:focus+button[type=reset]:after,
            .search-box input[type=text]:not(:placeholder-shown)+button[type=reset]:after {
                opacity: 1;
                transition: top 150ms ease-out 950ms, right 150ms ease-out 950ms, opacity 150ms ease 950ms;
            }

            .search-box button[type=reset] {
                background-color: transparent;
                width: 1.4em;
                height: 1.4em;
                border: 0;
                padding: 0;
                outline: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                position: absolute;
                top: 0.55em;
                right: 0.55em;
                transform: rotate(-45deg) translateY(2.2em);
                transition: transform 150ms ease-out 150ms;
            }

            .search-box button[type=reset]:before,
            .search-box button[type=reset]:after {
                content: "";
                background-color: #000000;
                width: 0.3em;
                height: 1.4em;
                position: absolute;
            }

            .search-box button[type=reset]:after {
                transform: rotate(90deg);
                opacity: 0;
                transition: transform 150ms ease-out, opacity 150ms ease-out;
            }

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

            #main {
                transition: margin-left .5s;
                padding: 16px;
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
                    <a class="navbar-brand"href="index.php"><img id='lg' src="images/logo.png" ></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">

                            <li class="nav-item">
                                <a class="nav-link" href="shop.php">Crops</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="modal" data-target="#myModal">Upload</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" onclick="openNav()">
                                    <?php
                                    if (isset($_SESSION['id'])) {
                                        echo "<b> Welcome" . " " . $row['first_name'] . "</b> ";
                                    } elseif (isset($_SESSION['cid'])) {
                                        echo "<b> Welcome" . " " . $row['company_name'] . "</b> ";
                                    } else {
                                        echo "<a href='Login.php'><i class='fa fa-user'></i> Login</a>";
                                    }
                                    ?>
                                </a>
                            </li>
                           
                        </ul>
                        <form class="search-box" action="">
                            <input type="text" placeholder=" " />
                            <button type="reset"></button>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="ProfileConnection.php">PROFILE</a>
            <a href="your_orders.php">YOUR ORDERS</a>
            <a href="#">SETTINGS</a>
            <a href='logout.php'>LOG OUT</a>
        </div>
        <script>
            function openNav() {
                document.getElementById("mySidenav").style.width = "350px";
                document.getElementById("main").style.marginLeft = "350px";
            }

            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
                document.getElementById("main").style.marginLeft = "0";
            }
        </script>
        <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Upload Crops</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <section class="vh-90 gradient-custom">
                            <div class="container py-5 h-9">
                                <div class="row justify-content-center align-items-center h-100">

                                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                                        <div class="card-body p-4 p-md-5">


                                            <form method="post" action="Crop.php" enctype="multipart/form-data">

                                                <div class="row">
                                                    <div class="col-md-12 about_img mb-4">

                                                        <div class="form-outline">
                                                            <input type="file"  name='image'
                                                                   class="form-control form-control-lg" />
                                                            <label class="form-label" for="name">Image Upload</label>
                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 mb-4">

                                                        <div class="form-outline">
                                                            <input type="text" id="firstName" name='name'
                                                                   class="form-control form-control-lg" />
                                                            <label class="form-label" for="name">Crop Name</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-6 mb-4">

                                                        <div class="row">
                                                            <div class="col-12">

                                                                <div class="form-outline">
                                                                    <input type="text" id="price" name='price'
                                                                           class="form-control form-control-lg" />
                                                                    <label class="form-label" for="name">Price </label>
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="row">

                                                    <div class="col-md-6 mb-4 d-flex align-items-center">

                                                        <div class="form-outline datepicker w-100">
                                                            <input type="date" class="form-control form-control-lg"
                                                                   name="vdate" id="date" />
                                                            <label for="birthdayDate" class="form-label" name="vdate">Crop
                                                                Validity</label>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 mb-4 pb-2">

                                                        <!-- <div class="form-outline"> -->
                                                        <input type="text"  name="qty"
                                                               class="form-control form-control-lg" />
                                                        <label class="form-label" for="emailAddress">Quantity</label>
                                                    </div>
                                                    <div class="col-md-6 mb-4 pb-2">
                                                        <input type="text" id="phoneNumber" name='description'
                                                               class="form-control form-control-lg" />
                                                        <label class="form-label" for="phoneNumber">Description</label>


                                                    </div>
                                                    <!-- <div class="col-md-6 mb-4 pb-2"> -->
                                                    <!-- </div> -->
                                                </div>
                                                <div class="mt-4 pt-2">
                                                    <input type="submit" name="scrop" value="submit"
                                                           class="btn btn-primary btn-lg">

                                                <!-- <a href="../Vendorside/custtheme.php?id=<?php echo $name . ',' . $age . ',' . $DOB . ',' . $gender . ',' . $address ?>" name="submit" class="btn btn-primary btn-lg"><input type="submit" name="submit" value="Submit"></a> -->

                                                <!-- <a href="../Vendorside/custtheme.php?id=<?php echo $name . ',' . $age . ',' . $DOB . ',' . $gender . ',' . $address ?>" name="submit"  class="btn btn-primary btn-lg"><input type="submit" name="submit" value="Submit"></a> -->
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </section>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>

        <!-- header section end -->
        <!-- layout_border start -->
        <div class="container-fluid">
            <div class="layout_border">
                <!-- vagetables section start -->
                <div class="vagetables_section layout_padding margin_bottom90">
                    <div class="container">
                        
                        <div class="courses_section_2">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="hover01 column">




                                        <div class="photo-container">
                                            <?php
                                            $conn = mysqli_connect("localhost", "root", "", "project");
                                            if ($conn->connect_errno)
                                                die("Connection Failed :" . $conn->connect_error);
                                            $sql = "SELECT imgpath,crop_name FROM crop_information WHERE farmer_id =" . $_SESSION['id'];
                                            $result = $conn->query($sql);
                                            
                                            if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {
//                                                    echo '<div class="photo">';
//                                                    echo '<figure> <img src="' . $row["imgpath"] . '" alt="">' . '<br> </figure>';
//                                                    echo '<h3 class="harshal_text">' . $row['crop_name'] . '</h3><br>';
//                                                    echo '<div class="read_bt_1"><a href="crop_edit.php?farmer_id=' . $_SESSION['id'] . '&crop_name=' . urlencode($row['crop_name']) . '">Edit Details' . '</a></div>';
//                                                    echo '</div>';

                                                    echo '<div class="vagetables_section_2">
            <div class="row">
                <div class="col-md-4">
                    <div class="hover01 column" style="width: 300px; max-height: 300px; margin: auto;">
                        <figure><img src="' . $row["imgpath"] . '"></figure>
                    </div>
                    <div style="text-align: center;">
                        <h3 class="harshal_text">' . $row['crop_name'] . '</h3>
                        <div class="read_bt_1"><a href="crop_edit.php?farmer_id=' . $_SESSION['id'] . '&crop_name=' . urlencode($row['crop_name']) . '">Edit Details</a></div>
                    </div>
                </div>
            </div>
        </div>';


                                                }
                                            } else {
                                                echo "No photos available.";
                                            }

// Close the connection
                                            $conn->close();
                                            ?>
                                        </div>
                                    </div>  



                                </div>
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
            <!-- layout_border end -->
        </div>

        <!-- footer section start -->
        <div class="footer_section layout_padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <h3 class="footer_text">Useful links</h3>
                        <div class="footer_menu">
                            <ul>
                                <li class="active"><a href="index.php"><span class="angle_icon active"><i class="fa fa-arrow-right" aria-hidden="true"></i></span> Home</a></li>
                                <li><a href="about.php"><span class="angle_icon"><i class="fa fa-arrow-right" aria-hidden="true"></i></span>  About</a></li>
                                <li><a href="services.php"><span class="angle_icon"><i class="fa fa-arrow-right" aria-hidden="true"></i></span> Services</a></li>
                                <li><a href="domain.php"><span class="angle_icon"><i class="fa fa-arrow-right" aria-hidden="true"></i></span> Domain</a></li>
                                <li><a href="testimonial"><span class="angle_icon"><i class="fa fa-arrow-right" aria-hidden="true"></i></span>  Testimonial</a></li>
                                <li><a href="contact.php"><span class="angle_icon"><i class="fa fa-arrow-right" aria-hidden="true"></i></span>  Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <h3 class="footer_text">Address</h3>
                        <div class="location_text">
                            <ul>
                                <li>
                                    <a href="#">
                                        <span class="padding_left_10"><i class="fa fa-map-marker" aria-hidden="true"></i></span>It is a long established fact that a<br> reader will be distracted</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="padding_left_10"><i class="fa fa-phone" aria-hidden="true"></i></span>(+71) 1234567890<br>(+71) 1234567890
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="padding_left_10"><i class="fa fa-envelope" aria-hidden="true"></i></span>demo@gmail.com
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
                <p class="copyright_text">2023 All Rights Reserved. Design by <a href="https://html.design">Free html  Templates</a></p>
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