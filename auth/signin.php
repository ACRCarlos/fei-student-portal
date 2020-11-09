<?php
// Session init
require_once 'connection.php';
// Session verification
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_POST)) {
    if (isset($_SESSION['error_login'])) {
        session_unset();
    }
    // Get data from form
    $email = trim($_POST);
}
