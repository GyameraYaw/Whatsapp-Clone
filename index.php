<?php
require 'db.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (isset($_POST['register'])) {
        $first = $_POST['first_name'];
        $last = $_POST['last_name'];
        $email = $_POST['email'];
        $pass  = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $first, $last, $email, $pass);

        if ($stmt->execute()) {
            header("Location: home.php");
            exit();

        } else {
            echo "<script>alert('Registration failed. Email may already exist.');</script>";
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
    <title>Register - WhatsApp Style</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="logo">
            <h1>Create Account</h1>
        </div>
        
        <form id="registerForm" action="index.php" method="POST">
            <div class="form-group">
                <input type="text" id="first_name" name="first_name" placeholder="Enter First Name">
                <label for="first_name">First Name</label>
            </div>

            <div class="form-group">
                <input type="text" id="last_name" name="last_name" placeholder="Enter Last Name">
                <label for="last_name">Last Name</label>
            </div>
            
            <div class="form-group">
                <input type="email" id="email" name="email" placeholder="Enter your email">
                <label for="email">Email Address</label>
            </div>
            
            <div class="form-group">
                <input type="password" id="password" name="password" placeholder="Create a password">
                <label for="password">Password</label>
            </div>
            
            
            <button type="submit" class="btn" name="register">Create Account</button>
        </form>
        
        <div class="form-footer">
            <p>Already have an account?</p>
            <a href="login.php">Sign In</a>
        </div>
    </div>
</body>
</html>