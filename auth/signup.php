<?php
if (isset($_POST)) {
    // Connection
    require_once '../includes/connection.php';
    // Get data from form
    $name = isset($_POST['name']) ? mysqli_real_escape_string($db, $_POST['name']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;
    $password = isset($_POST['password']) ? mysqli_real_escape_string($db, $_POST['password']) : false;
    // Errors array
    $errors = array();
    // Validate data
    if (!empty($name) && !is_numeric($name) && !preg_match("/[0-9]/", $name)) {
        $validated_name = true;
    } else {
        $validated_name = false;
        $errors['name'] = "Please insert a valid name";
    }

    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $validated_email = true;
    } else {
        $validated_email = false;
        $errors['email'] = 'Please insert a valid email';
    }

    if (!empty($password)) {
        $validated_password = true;
    } else {
        $validated_password = false;
        $errors['password'] = 'Please insert a valid password';
    }

    $save_user = false;

    if (count($errors) == 0) {
        $save_user = true;
        // Encript password
        $strong_password = password_hash($password, PASSWORD_BCRYPT, ['cost' => 4]);
        // Save data
        $sql = "INSERT INTO users VALUES(null, '$name', '$email', '$strong_password', CURDATE());";
        $save = mysqli_query($db, $sql);

        if ($save) {
            $_SESSION['completed'] = 'User created';
            echo $_SESSION['completed'];
        } else {
            $_SESSION['errors']['general'] = 'Something went wrong';
            echo $_SESSION['errors']['general'];
        }
    } else {
        $_SESSION['errors'] = $errors;
        echo implode(', ', $_SESSION['errors']);;
    }
}

header('Location: ../index.php');
