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
        <title>Company</title>
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
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.show-details-btn').on('click', function () {
                    var cropName = $(this).data('cropname');
                    var cropQty = $(this).data('cropqty');
                    var cropType = $(this).data('croptype');
                    var cropPrice = $(this).data('cropprice');
                    var validityDate = $(this).data('validitydate');
                    var farmerId = $(this).data('farmerid'); // Retrieve the farmer_id

                    $('#cropName').text(cropName);
                    $('#cropQty').text(cropQty);
                    $('#cropType').text(cropType);
                    $('#cropPrice').text(cropPrice);
                    $('#validityDate').text(validityDate);

                    // Update the URL with the farmer_id and then show the modal
//                    var newUrl = 'crop_details.php?farmer_id=' + farmerId;
//                    $('#redirectButton').attr('href', newUrl);

                    $('#cropDetailsModal').modal('show');
                });
            });

// Function to open the URL when clicking on "View Farmer's Information"
            function openFarmerInformation(farmerId, cropName) {
                console.log('Function called with farmerId:', farmerId, ' and cropName:', cropName);
            }

        </script>
        <style>
            .crop-image {
        width: 200px; /* Set the desired width */
        height: 200px; /* Set the desired height */
        object-fit: cover; /* Maintain the image aspect ratio and cover the container */
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
            #lg{
                height:20px;
                width:20px;
                background-color:blue;
                padding
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
                                <a class="nav-link" >Crops</a>
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
                        <form class="search-box" action="search_result.php" method="POST">
    <input type="text" name="crop_name" placeholder="Enter Crop Name OR Crop type" />
    <button type="reset"></button>
</form>
                        

                    </div>
                </nav>
            </div>
        </div>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="ProfileConnection.php">PROFILE</a>
            <a href="notifications.php">NOTIFICATION</a>
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
                        <div class="row">
                            <div class="col-sm-12">
                                <h1 class="vagetables_taital">Crop Products</h1>

                            </div>
                        </div>



                        <figure>
                            <?php
                            $conn = mysqli_connect("localhost", "root", "", "project");
                            if ($conn->connect_errno)
                                die("Connection Failed :" . $conn->connect_error);
                            $sql = "SELECT * FROM crop_information";
                            $result = $conn->query($sql);
                            echo '
            <div class="row">';
                            if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '
            <div class="col" style="margin-bottom: 20px;"> <!-- Add margin-bottom for space between photos -->
                <div class="hover01 column" style="">
                    <figure><img class="crop-image" src="' . $row["imgpath"] . '" alt="Crop Image"></figure>
                </div>
                <div style="text-align: center;">
                    <p> <b> Crop Name: ' . $row['crop_name'] . ' </b></p> <!-- Display crop name under the image -->
                    <button class="btn btn-primary show-details-btn" data-farmerid="' . $row['farmer_id'] . '" data-cropname="' . $row['crop_name'] . '" data-cropqty="' . $row['crop_quantity'] . '" data-croptype="' . $row['crop_type'] . '" data-cropprice="' . $row['crop_price'] . '" data-validitydate="' . $row['date'] . '">Show Details</button>
                </div> 
            </div>
        ';
    }
} else {
                                echo "No photos available.";
                            }

// Close the connection
                            $conn->close();
                            ?>
                        </figure>
                    </div>
                    <?php
                    include 'conn.php'; // Include the database connection script
                    // Retrieve the list of crops from the database
                    $query = mysqli_query($conn, "SELECT * FROM crop_information group by farmer_id");

                    if (mysqli_num_rows($query) > 0) {
                        while ($row = mysqli_fetch_assoc($query)) {
                            $cropName = $row['crop_name'];
                            $farmerId = $row['farmer_id'];
                            ?>
                            <div class="modal" id="cropDetailsModal" tabindex="-1" aria-labelledby="cropDetailsModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="cropDetailsModalLabel">Crop Details</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p><strong>Crop Name:</strong> <span id="cropName"></span></p>
                                            <p><strong>Crop Quantity:</strong> <span id="cropQty"></span></p>
                                            <p><strong>Crop Type:</strong> <span id="cropType"></span></p>
                                            <p><strong>Crop Price:</strong> <span id="cropPrice"></span></p>
                                            <p><strong>Validity Date:</strong> <span id="validityDate"></span></p>
                                        </div>
                                        <div class="modal-footer">
                                            <?php
                                            include 'conn.php'; // Include the database connection script
                                            // Retrieve the list of crops from the database
                                            $query = mysqli_query($conn, "SELECT * FROM crop_information");

                                            if (mysqli_num_rows($query) > 0) {
                                                while ($row = mysqli_fetch_assoc($query)) {
                                                    $cropName = $row['crop_name'];
                                                    $farmerId = $row['farmer_id'];
                                                    ?>
                                                    <div class="crop">
                                                        <a href="crop_details.php?farmer_id=<?php echo $farmerId; ?>&crop_name=<?php echo $cropName; ?>">View Farmer's Information</a>
                                                    </div>

                                                    <?php
                                                }
                                            } else {
                                                echo 'No crop information found.';
                                            }
                                            ?>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <?php
                        }
                    } else {
                        echo 'No crop information found.';
                    }
                    ?>
                    <h3 class="harshal_text">
                    </h3>
                    <h3 class="rate_text">
                    </h3>
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