<?php
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userType = $_POST['user_type'];
    $identifier = $_POST['identifier'];
    $otp = rand(100000, 999999);
    $expiryTime = date('Y-m-d H:i:s', strtotime('+10 minutes')); // OTP expiry set to 10 minutes from now

    // Database connection
    include 'conn.php';

    // TODO: Implement validation for user type and identifier
    // ...

    // Query user ID based on user type and identifier
    $userId = null;
    if ($userType === 'farmer') {
        $stmt = $conn->prepare("SELECT id FROM farmer_registration WHERE phone = ?");
    } elseif ($userType === 'company') {
        $stmt = $conn->prepare("SELECT id FROM company_registration WHERE email = ?");
    }

    $stmt->bind_param("s", $identifier);
    $stmt->execute();
    $stmt->bind_result($userId);
    $stmt->fetch();
    $stmt->close();

    if ($userId !== null) {
        // Insert OTP into otp_storage table
        $insertStmt = $conn->prepare("INSERT INTO otp_storage (user_id, user_type, otp, otp_expiry) VALUES (?, ?, ?, ?)");
        $insertStmt->bind_param("iss", $userId, $userType, $otp, $expiryTime);
        $insertStmt->execute();
        $insertStmt->close();

        // Send OTP to the user via email or SMS
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host       = 'YOUR_SMTP_HOST';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'YOUR_SMTP_EMAIL';
            $mail->Password   = 'YOUR_SMTP_PASSWORD';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            // Recipients
            $mail->setFrom('YOUR_SMTP_EMAIL', 'Your Name');
            $mail->addAddress($identifier);

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'Forgot Password OTP';
            $mail->Body    = 'Your OTP is: ' . $otp;

            $mail->send();
            echo 'OTP has been sent to your email/phone.';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo 'User not found.';
    }

    $conn->close();
}
?>
