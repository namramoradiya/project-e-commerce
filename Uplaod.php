<?php
$conn = mysqli_connect("localhost", "root", "", "project");

$qty = $_POST['qty'];
$price = $_POST['price'];

if(isset($_FILES['image'])){
    $errors= array();
    $file_name = $_FILES['image']['name'];
    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
    $file_ext = strtolower(end(explode('.',$file_name)));
    
    $extensions= array("jpeg","jpg","png");
    
    if(in_array($file_ext,$extensions)=== false){
       $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    }
    
    if($file_size > 2097152){
       $errors[]='File size must be excately 2 MB';
    }
    
    if(empty($errors)==true){
        // $sql = "INSERT INTO `crop_information`
        // (`farmer_id`, `crop_name`, `crop_quantity`, `crop_type`, `crop_price`, `date`) 
        // VALUES ('[value-1]','$file_name','$qty','[value-4]','$price','[value-6]');";
       move_uploaded_file($file_tmp,'images/'.$file_name);
       echo "Success";
    }else{
       print_r($errors);
    }
 }
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container">
        <h3>Modal Example</h3>
        <p>Click on the button to open the modal.</p>

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
            Open modal
        </button>
    </div>

    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">

              

                <!-- Modal body -->
                <div class="modal-body">
                    <section class="vh-100 gradient-custom">
                        <div class="container py-5 h-100">
                            <div class="row justify-content-center align-items-center h-100">
                                <div class="col-12 col-lg-9 col-xl-9">
                                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                                        <div class="card-body p-4 p-md-5">
                                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Crop Upload</h3>
                                            
                                            <form method="post" action="" enctype="multipart/form-data">

                                                <div class="row">
                                                    <div class="col-md-6 mb-4">

                                                        <div class="form-outline">
                                                            <input type="file" id="firstName" name='image'
                                                                class="form-control form-control-lg" />
                                                            <label class="form-label" for="name">Imaege Upload</label>
                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 mb-4">

                                                        <div class="form-outline">
                                                            <input type="text" id="firstName" name='cropname'
                                                                class="form-control form-control-lg" />
                                                            <label class="form-label" for="name">Crop Name</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-6 mb-4">

                                                        <div class="row">
                                                            <div class="col-12">

                                                                <div class="form-outline">
                                                                    <input type="text" id="bookdate" name='price'
                                                                        class="form-control form-control-lg" />
                                                                    <label class="form-label" for="name">Price </label>
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 mb-4 d-flex align-items-center">

                                                        <div class="row">
                                                            <div class="col-12">

                                                                <div class="form-outline">
                                                                    <input type="date" id="bookdate" name='today'
                                                                        class="form-control form-control-lg" />
                                                                    <label class="form-label" for="name">Today
                                                                        Date</label>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-4 d-flex align-items-center">

                                                        <div class="form-outline datepicker w-100">
                                                            <input type="date" class="form-control form-control-lg"
                                                                name="DOB" id="birthdayDate" />
                                                            <label for="birthdayDate" class="form-label" name="validity">Crop
                                                                Validity</label>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 mb-4 pb-2">

                                                        <!-- <div class="form-outline"> -->
                                                        <input type="text" id="emailAddress" name="qty"
                                                            class="form-control form-control-lg" />
                                                        <label class="form-label" for="emailAddress">Quantity</label>
                                                    </div>
                                                    <div class="col-md-6 mb-4 pb-2">
                                                        <input type="text" id="phoneNumber" name='des'
                                                            class="form-control form-control-lg" />
                                                        <label class="form-label" for="phoneNumber">Description</label>


                                                    </div>
                                                    <!-- <div class="col-md-6 mb-4 pb-2"> -->
                                                    <!-- </div> -->
                                                </div>

                                                <div class="mt-4 pt-2">
                                                    <input type="submit" name="submit" value="submit"
                                                        class="btn btn-primary btn-lg">

                                                    <!-- <a href="../Vendorside/custtheme.php?id=<?php echo $name . ',' . $age . ',' . $DOB . ',' . $gender . ',' . $address ?>" name="submit" class="btn btn-primary btn-lg"><input type="submit" name="submit" value="Submit"></a> -->

                                                    <!-- <a href="../Vendorside/custtheme.php?id=<?php echo $name . ',' . $age . ',' . $DOB . ',' . $gender . ',' . $address ?>" name="submit"  class="btn btn-primary btn-lg"><input type="submit" name="submit" value="Submit"></a> -->
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>



</body>

</html>