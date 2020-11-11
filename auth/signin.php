<?php
// Connection
require_once '../includes/connection.php';
// Session verification
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_POST)) {
    if (isset($_SESSION['signin_error'])) {
        session_unset();
    }
    // Get data from form
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    // Sign In
    $sql = "SELECT * FROM users WHERE email='$email'";
    $signin = mysqli_query($db, $sql);
    if ($signin && mysqli_num_rows($signin) == 1) {
        $user = mysqli_fetch_assoc($signin);
        // Validate password
        $verify = password_verify($password, $user['password']);
        if ($verify) {
            // Use session to save user data
            $_SESSION['user'] = $user;
            echo implode(', ', $_SESSION['user']);
        } else {
            $_SESSION["signin_error"] = 'Invalid credentials';
            echo $_SESSION["signin_error"];
        }
    } else {
        $_SESSION['signin_error'] = 'Invalid credentials';
        echo $_SESSION["signin_error"];
    }
}

header('Location: ../dashboard.php');
