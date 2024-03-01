<?php
session_start();

include 'conn.php'; // Adjust the path to your connection file

if (isset($_POST['order_id'], $_POST['action'])) {
    $order_id = $_POST['order_id'];
    $action = $_POST['action'];

    // Perform necessary updates to the orders table based on the $order_id and $action
    
    // For demonstration purposes, let's assume the update was successful
    // Redirect back to your_orders.php with a success message
    header("Location: your_orders.php?message=success");
    exit();
} else {
    // Redirect back to your_orders.php with an error message
    header("Location: your_orders.php?message=error");
    exit();
}
?>
