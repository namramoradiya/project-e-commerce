<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Notifications</title>
    <link rel="stylesheet" href="your-custom-styles.css">
    <style>
        /* Custom styles for enhanced appearance */

body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

.container {
    width: 100%;
    max-width: 800px;
    margin: 30px;
    padding: 30px;
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.page-title {
    font-size: 1.8rem;
    color: #333;
    margin-bottom: 20px;
}

.notifications-list {
    margin-top: 20px;
}

.notification-card {
    padding: 15px;
    border-radius: 10px;
    margin-bottom: 15px;
    background-color: #f9f9f9;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s ease-in-out;
}

.notification-card:hover {
    transform: translateY(-3px);
}

.notification-status {
    font-size: 1.2rem;
    font-weight: bold;
    color: #007bff;
    margin-bottom: 5px;
}

.notification-message {
    font-size: 1rem;
    color: #333;
    margin: 5px 0;
}

.notification-card:last-child {
    margin-bottom: 0;
}

        </style>
</head>
<body>
    <div class="container">
        <h1 class="page-title">Notifications</h1>

        <div class="notifications-list">
            <?php
            include 'conn.php';
            session_start();
            include 'loginConnection.php';
            if(isset($_SESSION['cid']))
            {
            $company_id = $_SESSION['cid']; // Get company ID from session

            $notificationQuery = "SELECT orders.crop_name, orders.status, farmer_registration.first_name FROM orders
                      JOIN farmer_registration ON orders.farmer_id = farmer_registration.farmer_id
                      WHERE orders.company_id = '$company_id' AND (orders.status = 'Accepted' OR orders.status = 'Rejected')";

            $notificationResult = mysqli_query($conn, $notificationQuery);

            if (mysqli_num_rows($notificationResult) > 0) {
                while ($row = mysqli_fetch_assoc($notificationResult)) {
                    $crop_name = $row['crop_name'];
                    $status = $row['status'];
                    $farmer_name = $row['first_name'];
                    $message = ($status == 'Accepted') ? "Accepted by $farmer_name. Your request for crop '$crop_name' has been accepted." : "Rejected by $farmer_name. Your request for crop '$crop_name' has been rejected.";

                    echo "<div class='notification-card'>";
                    echo "<h3 class='notification-status'>$status</h3>";
                    echo "<p class='notification-message'>$message</p>";
                    echo "</div>";
                }
            } else {
                echo "<p>No new notifications.</p>";
            }
            }
            ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>




