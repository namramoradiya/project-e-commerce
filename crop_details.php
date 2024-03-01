<html lang="en">
    <head>
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript">

        </script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

        <!-- Include SweetAlert2 CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.min.css">

        <meta charset="utf-8">
        <title> View Crop Details </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <style type="text/css">

            /* Styles for the popup */
            .popup {
                display: none;
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background-color: white;
                padding: 20px;
                border: 1px solid #ccc;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
                z-index: 9999;
            }
            body{
                margin-top:20px;
                background-color:#f2f6fc;
                color:#69707a;
            }
            .img-account-profile {
                height: 10rem;
            }
            .rounded-circle {
                border-radius: 50% !important;
            }
            .card {
                box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
            }
            .card .card-header {
                font-weight: 500;
            }
            .card-header:first-child {
                border-radius: 0.35rem 0.35rem 0 0;
            }
            .card-header {
                padding: 1rem 1.35rem;
                margin-bottom: 0;
                background-color: rgba(33, 40, 50, 0.03);
                border-bottom: 1px solid rgba(33, 40, 50, 0.125);
            }
            .form-control, .dataTable-input {
                display: block;
                width: 100%;
                padding: 0.875rem 1.125rem;
                font-size: 0.875rem;
                font-weight: 400;
                line-height: 1;
                color: #69707a;
                background-color: #fff;
                background-clip: padding-box;
                border: 1px solid #c5ccd6;
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                border-radius: 0.35rem;
                transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            }

            .nav-borders .nav-link.active {
                color: #0061f2;
                border-bottom-color: #0061f2;
            }
            .nav-borders .nav-link {
                color: #69707a;
                border-bottom-width: 0.125rem;
                border-bottom-style: solid;
                border-bottom-color: transparent;
                padding-top: 0.5rem;
                padding-bottom: 0.5rem;
                padding-left: 0;
                padding-right: 0;
                margin-left: 1rem;
                margin-right: 1rem;
            }
        </style>
    </head>
    <body>
        <?php
        include 'conn.php'; // Include the database connection script

        if (isset($_GET['farmer_id'])) {
            if (isset($_GET['crop_name'])) {
                $crop_name = $_GET['crop_name'];
                $farmer_id = $_GET['farmer_id']; // Retrieve farmer ID from URL parameter

                $query = mysqli_query($conn, "SELECT * FROM crop_information WHERE farmer_id = '$farmer_id'AND crop_name = '$crop_name'");

                if (mysqli_num_rows($query) > 0) {
                    $row = mysqli_fetch_assoc($query);
                } else {
                    echo 'No crop information found for this farmer.';
                }
            }
        } else {
            echo 'Farmer ID is not provided in the URL.';
        }
        ?>
        <div class="container-xl px-4 mt-4">
            <nav class="nav nav-borders">
                <a class="nav-link active ms-0" href="#">Profile</a>
            </nav>
            <hr class="mt-0 mb-4">
            <div class="row">
                <div class="col-xl-4">
                    <div class="card mb-4 mb-xl-0">
                        <div class="card-header">Crop Photos</div>
                        <div class="card-body text-center">
                            <?php
                            $sql1 = "SELECT * FROM crop_information WHERE farmer_id = $farmer_id AND crop_name = '" . $row['crop_name'] . "'";
                            $resultt = mysqli_query($conn, $sql1);

                            if ($resultt && mysqli_num_rows($resultt) > 0) {
                                while ($roww = mysqli_fetch_assoc($resultt)) {
                                    echo '<div class="photo">';
                                    echo '<img class="img-account-profile" src="' . $roww['imgpath'] . '" alt="Crop Photo">';

                                    echo '</div>';
                                }
                            } else {
                                echo "No crop photos available.";
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="card mb-4">
                        <div class="card-header"></div>
                        <div class="card-body">
                            <form action="send_booking_request.php" method="POST">
                                <div class="row gx-3 mb-3">
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputFirstName">Crop name</label>
                                        <input class="form-control" id="inputFirstName" type="text" name="cname" value="<?php echo $row['crop_name']; ?>" disabled>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputLastName">Crop Quantity</label>
                                        <input class="form-control" id="inputLastName" type="text" name="qty" value="<?php echo $row['crop_quantity']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="small mb-1" for="inputUsername">Crop Type</label>
                                    <input class="form-control" id="inputUsername" type="text" name="type" value="<?php echo $row['crop_type']; ?>" disabled>
                                </div>
                                <div class="mb-3">
                                    <label class="small mb-1" for="inputUsername">Crop Price</label>
                                    <input class="form-control" id="inputUsername" type="text" name="price" value="<?php echo $row['crop_price']; ?>" disabled>
                                </div>
                                <div class="row gx-3 mb-3">
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputPhone">Validity Date</label>
                                        <input class="form-control" id="inputPhone" type="tel" name="vdate" value="<?php echo $row['date']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="container mt-5">
                                    <input type="hidden" name="crop_name" value="<?php echo $row['crop_name']; ?>">
                                </div>






                                <!-- SweetAlert2 popup confirmation dialog -->
                                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.min.js"></script>
                                <div class="container mt-5">
                                    <button class="btn btn-primary" id="bookButton" name="confirmBooking">Book Product</button>   
                                </div>
                                <div id="myModal" class="modal fade" role="dialog">

                                    <!--Modal-->
                                    <div class="modal-dialog">

                                        <!--Modal Content-->
                                        <div class="modal-content">

                                            <!-- Modal Header-->
                                            <div class="modal-header">
                                                <h3>Feedback Request</h3>

                                                <!--Close/Cross Button-->
                                                <button type="button" class="close" data-dismiss="modal" style="color: white;">&times;</button>
                                            </div>

                                            <!-- Modal Body-->
                                            <div class="modal-body text-center">
                                                <i class="far fa-file-alt fa-4x mb-3 animated rotateIn icon1"></i>
                                                <h3>Your opinion matters</h3>
                                                <h5>Help us improve our product? <strong>Give us your feedback.</strong></h5>
                                                <hr>
                                                <h6>Your Rating</h6>
                                            </div>

                                            <!-- Radio Buttons for Rating-->
                                            <div class="form-check mb-4">
                                                <input name="feedback" type="radio">
                                                <label class="ml-3">Very good</label>
                                            </div>
                                            <div class="form-check mb-4">
                                                <input name="feedback" type="radio">
                                                <label class="ml-3">Good</label>
                                            </div>
                                            <div class="form-check mb-4">
                                                <input name="feedback" type="radio">
                                                <label class="ml-3">Mediocre</label>
                                            </div>
                                            <div class="form-check mb-4">
                                                <input name="feedback" type="radio">
                                                <label class="ml-3">Bad</label>
                                            </div>
                                            <div class="form-check mb-4">
                                                <input name="feedback" type="radio">
                                                <label class="ml-3">Very Bad</label>
                                            </div>

                                            <!--Text Message-->
                                            <div class="text-center">
                                                <h4>What could we improve?</h4>
                                            </div>
                                            <textarea type="textarea" placeholder="Your Message" rows="3"></textarea>


                                            <!-- Modal Footer-->
                                            <div class="modal-footer">
                                                <a href="" class="btn btn-primary">Send
                                                    <i class="fa fa-paper-plane"></i>
                                                </a>
                                                <a href="" class="btn btn-outline-primary" data-dismiss="modal">Cancel</a>
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add this JavaScript code at the end of your <body> section -->
        <script>
                    document.getElementById("bookButton").addEventListener("click", function () {
                        // Show the popup
                        Swal.fire({
                            title: 'Confirm Booking',
                            text: 'Do you want to book this product?',
                            icon: 'question',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Yes',
                            cancelButtonText: 'No'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                // Perform the booking action here
                                $.ajax({
                                    type: "POST",
                                    url: "process_booking.php",
                                    data: {confirmBooking: true, crop_name: "<?php echo $_GET['crop_name']; ?>"},
                                    success: function (response) {
                                        // Display the response in SweetAlert2 modal
                                        Swal.fire({
                                            title: 'Booking Confirmed!',
                                            text: response,
                                            icon: 'success'
                                        }).then((innerResult) => {
                                            // Reload the current page after closing the SweetAlert2 modal
                                            if (innerResult.isDismissed) {
                                                location.reload();
                                            }
                                        });
                                    }
                                });
                            }
                        });
                    });
        </script>

    </div>

</div>

</div>
</div>
</body>
</html>