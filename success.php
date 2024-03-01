<?php
session_start();

if (isset($_SESSION['id'])) {
    include('conn.php');
    $query = mysqli_query($conn, "select * from farmer_registration where farmer_id='" . $_SESSION['id'] . "'");
    $row = mysqli_fetch_assoc($query);
    include 'shop.php'; // Farmer's page
} elseif (isset($_SESSION['cid'])) {
    include('conn.php');
    $query = mysqli_query($conn, "select * from company_registration where company_id='" . $_SESSION['cid'] ."'");
    $row = mysqli_fetch_assoc($query);
    include 'company_home.php'; // Company's page
} elseif (isset($_SESSION['aid'])) {
    include('conn.php');
    $query = mysqli_query($conn, "select * from admin where admin_email='" . $_SESSION['aid'] ."'");
    $row = mysqli_fetch_assoc($query);
    include 'admin_index.php'; // Admin's page
} else {
    header('Location: Login.php');
    exit();
}
?>
