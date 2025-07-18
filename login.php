<?php
require 'db.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $stmt = $conn->prepare("SELECT password FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($hashedPassword);

        if ($stmt->fetch() && password_verify($password, $hashedPassword)) {
            $_SESSION['user_email'] = $email;
            header("Location: home.php");
            exit();
        } else {
            echo "<script>alert('Invalid email or password');</script>";
        }

        $stmt->close();
    }

    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - WhatsApp Style</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="logo">
            <h1>Welcome Back</h1>
        </div>

        <form id="loginForm" action="login.php" method="POST">
            <div class="form-group">
                <input type="email" id="email" name="email" placeholder="Enter your email">
                <label for="email">Email Address</label>
            </div>

            <div class="form-group">
                <input type="password" id="password" name="password" placeholder="Enter your password">
                <label for="password">Password</label>
            </div>

            <button type="submit" class="btn" name="login">Sign In</button>
        </form>

        <div class="form-footer">
            <p>Don't have an account?</p>
            <a href="index.php">Create Account</a>
        </div>
    </div>
</body>

</html>