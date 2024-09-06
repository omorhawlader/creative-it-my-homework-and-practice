<?php
session_start();
include "../config/db.php";
if (!isset(($_POST["submit"]))) header("location: sign_in.php") && exit();

$email = $_POST["email"];
$password = $_POST["password"];
$flag = false;



// validete email
if (!$email) {
    $_SESSION['email_error'] = 'email is required.';
    header('location: sign-in.php');
    $flag = true;
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION["email_error"] = 'Invalid email format';
    header('location: sign-in.php');
    $flag = true;
} else {
    $_SESSION['email'] = $email;
}
// validate password
if (!$password) {
    $_SESSION['password_error'] = 'password is required.';
    header('location: sign-in.php');
    $flag = true;
} elseif (strlen($password) < 8) {
    // todo later i will cheking for hard password!
    $_SESSION["password_error"] = 'Password must be minimum 8 characters length*';
    header('location: sign-in.php');
    $flag = true;
}


if ($flag) {
    header('location: ./sign-in.php');
    exit();
}


// $varify_password = $varify_password($password)
$query = "SELECT id,username,email,password FROM users WHERE email = '$email'";
$mysql_result = mysqli_query($db_connection, $query) or die("unexpected error happends" . mysqli_error($db_connection));

$result = mysqli_fetch_assoc($mysql_result);

if (!$result) {
    $_SESSION['error'] = 'Invalid email or password. Please try again.';
    header('location: sign-in.php');
    exit();
}

if (!password_verify($password, $result['password'])) {
    $_SESSION['error'] = 'Invalid email or password. Please try again.';
    header('location: sign-in.php');
    exit();
}

$_SESSION['id']  = $result['id'];
$_SESSION['username']  = $result['username'];
$_SESSION['email']  = $result['email'];

header("location: ../backend/home/dashboard.php");

mysqli_close($db_connection);
