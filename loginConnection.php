<?php
if (isset($_POST['submit'])) {
    session_start();
    include('conn.php');

    $username = $_POST['phn'];
    $password = md5($_POST['pswd']);

    $sql1 = "SELECT * FROM farmer_registration WHERE phone='$username' AND password='$password'";
    $result1 = mysqli_query($conn, $sql1);
    $row1 = mysqli_fetch_assoc($result1);
    $count1 = mysqli_num_rows($result1);

    $sql2 = "SELECT * FROM company_registration WHERE email='$username' AND password='$password'";
    $result2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_assoc($result2);
    $count2 = mysqli_num_rows($result2);

    $sql3 = "SELECT * FROM admin WHERE admin_email='$username' AND password='$password'";
    $result3 = mysqli_query($conn, $sql3);
    $row3 = mysqli_fetch_assoc($result3);
    $count3 = mysqli_num_rows($result3);

    if ($count1 == 1) {
        $_SESSION['id'] = $row1['farmer_id'];
        header("Location: success.php");
    } elseif ($count2 == 1) {
        $_SESSION['cid'] = $row2['company_id'];
        header("Location: success.php");
    } elseif ($count3 == 1) {
        $_SESSION['aid'] = $row3['admin_email'];
        header("Location: admin.php");
    } else {
        $_SESSION['message'] = "Login Failed: Invalid Username and Password!";
        header('location: Login.php');
    }

    // Remember me functionality
    if (isset($_POST['remember'])) {
        setcookie("username", $username, time() + 60, "/");
        setcookie("password", md5($password), time() + 60, "/");
    }
}
?>
