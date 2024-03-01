<?php
session_start();
include 'conn.php'; // Include your database connection script

if (isset($_POST['confirmBooking'])) {
    include 'loginConnection.php';
    if(isset($_SESSION['cid']))
    {
     $cropName = $_POST['crop_name'];
    $company_id = $_SESSION['cid']; // Assuming you have the company ID in the session

    // Retrieve the farmer_id based on the selected crop
    $query = "SELECT farmer_id FROM crop_information WHERE crop_name = '$cropName'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $farmer_id = $row['farmer_id'];

        // Update the order status to "Pending"
        $updateQuery = "UPDATE orders SET status = 'Pending' WHERE farmer_id = '$farmer_id' AND company_id = '$company_id' AND crop_name = '$cropName'";

        if ($conn->query($updateQuery)) {
            echo "Booking confirmed successfully!";
        } else {
            echo "Error confirming booking: " . $conn->error;
        }
    } else {
        echo "Selected crop not found.";
    }
}
}
?>
