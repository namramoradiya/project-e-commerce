<?php
@session_start();
$conn = mysqli_connect("localhost", "root", "", "project");
if (mysqli_connect_errno()) {
    echo "Failed to Connect to MySQL: " . mysqli_connect_error();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the values from the hidden input fields
    $farmer_id = $_POST['farmer_id'];
    $crop_name = $_POST['crop_name'];

    // Retrieve other form data
    $new_crop_name = $_POST['cname'];
    $cqty = $_POST['qty'];
    $ctype = $_POST['type'];
    $cprice = $_POST['price'];
    $cvdate = $_POST['vdate'];

    // Update the crop information in the database
    $update_sql = "UPDATE crop_information SET crop_name='$new_crop_name', crop_quantity='$cqty', crop_type='$ctype', crop_price='$cprice', date='$cvdate' WHERE farmer_id='$farmer_id' AND crop_name='$crop_name'";
    $update_result = mysqli_query($conn, $update_sql);

   // After successfully updating the crop information in crop_update.php
if ($update_result) {
    // Redirect back to crop_edit.php with the necessary parameters
    header("Location: crop_edit.php?farmer_id=$farmer_id&crop_name=" . urlencode($crop_name));
    exit();
} else {
    echo "Error updating crop information: " . mysqli_error($conn);
}

}
?>
