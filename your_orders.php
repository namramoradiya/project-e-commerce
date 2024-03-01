<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Orders</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="your-custom-styles.css"> <!-- Link to your custom CSS file -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
       /* Custom styles for enhanced appearance */

/* Body and container styling */
body {
    font-family: 'Helvetica Neue', Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 30px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

h1 {
    color: #333;
    text-align: center;
    margin-bottom: 30px;
}

.orders-list {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
}

.order-card {
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s ease-in-out;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.order-card:hover {
    transform: translateY(-5px);
}

.order-company {
    font-size: 20px;
    font-weight: bold;
    color: #007bff;
    margin-bottom: 10px;
}

.order-crop {
    font-size: 16px;
    color: #333;
    margin-bottom: 10px;
}

.order-status {
    font-size: 14px;
    color: #555;
    margin-bottom: 10px;
}

.btn {
    padding: 10px 16px;
    border-radius: 5px;
    font-size: 14px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
    border: none;
    outline: none;
    width: 100%;
    margin-top: 10px;
}

.btn-success {
    background-color: #28a745;
    color: #fff;
}

.btn-danger {
    background-color: #dc3545;
    color: #fff;
}

.no-orders {
    font-size: 18px;
    color: #555;
    text-align: center;
    margin-top: 40px;
}



    </style>
</head>
<body>
    <div class="container mt-4">
        <h1 class="mb-4">Your Orders</h1>
        
        <div class="orders-list">
            <?php
            include 'conn.php';
            include 'loginConnection.php';
            session_start();
            if (isset($_SESSION['id'])) {
                $farmer_id = $_SESSION['id'];
                $query = mysqli_query($conn, "SELECT * FROM orders WHERE farmer_id = '$farmer_id' And status = 'Pending'");
                
                if (mysqli_num_rows($query) > 0) {
                    while ($row = mysqli_fetch_assoc($query)) {
                        $company_id = $row['company_id'];
                        $crop_name = $row['crop_name'];
                        $status = $row['status'];
                        $order_id = $row['order_id'];
                        
                        $company_query = mysqli_query($conn, "SELECT company_name FROM company_registration WHERE company_id = '$company_id'");
                        $company_row = mysqli_fetch_assoc($company_query);
                        $company_name = $company_row['company_name'];
                        
                        echo '<div class="order-card">';
                        echo '<h4 class="order-company">' . $company_name . '</h4>';
                        echo '<p class="order-crop">Crop Name: ' . $crop_name . '</p>';
                        
                        echo '<form method="POST" action="mark_notification_accept.php">';
                        echo '<input type="hidden" name="order_id" value="' . $order_id . '">';
                        echo '<button type="submit" class="btn btn-success">Accept</button>';
                        echo '</form>';
                        
                        echo '<form method="POST" action="mark_notification_reject.php">';
                        echo '<input type="hidden" name="order_id" value="' . $order_id . '">';
                        echo '<button type="submit" class="btn btn-danger">Reject</button>';
                        echo '</form>';
                        
                     
                        echo '</div>';
                    }
                } else {
                    echo '<p class="no-orders">No orders found.</p>';
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
    