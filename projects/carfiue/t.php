<?php

session_start();

if (isset($_POST["submit"])) {

    $email = $_POST["email"];
    $email_regex = '/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/';

    if (!$email) {
        $_SESSION['error_email'] = 'email is required!';
        header('location: testing.php');
    } elseif (!preg_match($email_regex, $email)) {
        $_SESSION['error_email'] = 'email format invalid';
        header('location: testing.php');
    } else {
        $_SESSION['error_email'] = 'email submitted';
        header('location: testing.php');
    }
}
