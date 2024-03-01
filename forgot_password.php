<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
</head>
<body>
    <h2>Forgot Password</h2>
    <form method="post" action="send_otp.php">
        <label for="user_type">Select User Type:</label>
        <select id="user_type" name="user_type" required>
            <option value="farmer">Farmer</option>
            <option value="company">Company</option>
        </select><br><br>
        <label for="identifier">Email or Phone:</label>
        <input type="text" id="identifier" name="identifier" required><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
