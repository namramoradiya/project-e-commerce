<html lang="en">
    <head>
        <meta charset="utf-8">


        <title>Farmer Profile </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <style type="text/css">
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
@session_start();
include('conn.php');

if (isset($_GET['farmer_id']) && isset($_GET['crop_name'])) {
    $farmer_id = $_GET['farmer_id'];
    $crop_name = urldecode($_GET['crop_name']);
    $query = mysqli_query($conn, "SELECT * FROM crop_information WHERE farmer_id = '$farmer_id' AND crop_name = '$crop_name'");
    $row = mysqli_fetch_assoc($query);
} else {
    echo 'Farmer ID or crop name is not provided.';
}
?>
        <div class="container-xl px-4 mt-4">

            <nav class="nav nav-borders">
                <a class="nav-link active ms-0" href="https://www.bootdey.com/snippets/view/bs5-edit-profile-account-details" target="__blank">Profile</a>
            </nav>
            <hr class="mt-0 mb-4">
            <div class="row">
                <div class="col-xl-4">

                    <div class="card mb-4 mb-xl-0">
                        <div class="card-header">Crop Details</div>
                        <div class="card-body text-center">

                            <img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">

                            <button class="btn btn-primary" type="button">Upload new image</button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">

                    <div class="card mb-4">
                        <div class="card-header"></div>
                        <div class="card-body">
                            <form action="crop_update.php"method="POST">


                                <div class="row gx-3 mb-3">

                                    <div class="col-md-6">
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputFirstName">Crop name</label>
                                            <input class="form-control" id="inputFirstName" type="text" name="cname" value="<?php
                                            if (isset($_SESSION['id'])) {
                                                echo$row['crop_name'];
                                            }
                                            ?>">
                                        </div>

                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputLastName">Crop Quantity</label>
                                            <input class="form-control" id="inputLastName" type="text"  name="qty" value="<?php
                                            if (isset($_SESSION['id'])) {
                                                echo$row['crop_quantity'];
                                            }
                                            ?>">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputUsername">Crop Type</label>
                                        <input class="form-control" id="inputUsername" type="text"  name="type" value="<?php
                                            if (isset($_SESSION['id'])) {
                                                echo$row['crop_type'];
                                            }
                                            ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputUsername">Crop Price </label>
                                        <input class="form-control" id="inputUsername" type="text"  name= "price" value="<?php
                                        if (isset($_SESSION['id'])) {
                                            echo$row['crop_price'];
                                        }
                                            ?>">
                                    </div>
                                    <div class="row gx-3 mb-3">


                                        <div class="row gx-3 mb-3">

                                            <div class="col-md-6">
                                                <label class="small mb-1" for="inputPhone">Validity Date</label>
                                                <input class="form-control" id="inputPhone" type="date" name="vdate" value="<?php
                                        if (isset($_SESSION['id'])) {
                                            echo$row['date'];
                                        }
                                            ?>">
                                            </div>
                                        </div>
                                        <input type="hidden" name="farmer_id" value="<?php echo $farmer_id; ?>">
                        <input type="hidden" name="crop_name" value="<?php echo $crop_name; ?>">
                                        <button type="submit">Save Changes</button>
                                        </form>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
                <script type="text/javascript">

                </script>
                </body>
                </html>
