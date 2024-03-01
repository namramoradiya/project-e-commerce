<?php
include 'conn.php'; // Adjust the path to your connection file

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $order_id = $_POST['order_id'];
    

    // Update the order status to "Accepted"
    $query = "UPDATE orders SET status = 'Accepted' WHERE order_id = '$order_id'";
    
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Order accepted successfully!');</script>";
        
    } else {
        echo "<script>alert('Error updating order: " . mysqli_error($conn) . "');</script>";
    }
    
}

mysqli_close($conn);
echo '<script>window.location.href = "your_orders.php"</script>';
