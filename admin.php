<?php
session_start();

if (isset($_SESSION['aid'])) {
    include('conn.php');
    // Sanitize the session variable to prevent SQL injection
    $adminEmail = mysqli_real_escape_string($conn, $_SESSION['aid']);
    
    // Perform a database query to check if the admin session is valid
    $query = mysqli_query($conn, "SELECT * FROM admin WHERE admin_email='$adminEmail'");
    
    if (!$query) {
        die('Query failed: ' . mysqli_error($conn));
    }

    // Check if a valid admin record is found
    if (mysqli_num_rows($query) == 1) {
        $row = mysqli_fetch_assoc($query);
        // Continue with displaying the admin panel
        include('adminindex.php');
    } else {
        // Invalid admin session, redirect to login page
        header('Location: Login.php');
        exit();
    }
} else {
    // Admin session is not set, redirect to login page
    header('Location: Login.php');
    exit();
}
?>
