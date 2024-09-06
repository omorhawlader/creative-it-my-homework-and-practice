<?php
// include database connecton
include "../config/db.php";
session_start();
if (!isset(($_POST["submit"]))) header("location: sign_up.php") && exit();

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$c_password = $_POST["c_password"];
$flag = false;

// validate name field
if (!$name) {
    $_SESSION['name_error'] = 'Name is required.';
    header('location: sign_up.php');
    $flag = true;
} elseif (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
    $_SESSION["name_error"] = 'Only letters and white space allowed in name.';
    header('location: sign_up.php');
    $flag = true;
} else {
    $_SESSION['username'] = $name;
}

// validete email
if (!$email) {
    $_SESSION['email_error'] = 'email is required.';
    header('location: sign_up.php');
    $flag = true;
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION["email_error"] = 'Invalid email format';
    header('location: sign_up.php');
    $flag = true;
} else {
    $_SESSION['email'] = $email;
}


// validate password
if (!$password) {
    $_SESSION['password_error'] = 'password is required.';
    header('location: sign_up.php');
    $flag = true;
} elseif (strlen($password) < 8) {
    // todo later i will cheking for hard password!
    $_SESSION["password_error"] = 'Password must be minimum 8 characters length*';
    header('location: sign_up.php');
    $flag = true;
} else {
    $_SESSION['password'] = $password;
}

// validate confirm password
if (!$c_password) {

    $_SESSION['c_password_error'] = 'Confirm password is required.';

    header('location: sign_up.php');
    $flag = true;
} elseif ($c_password !== $password) {
    $_SESSION["c_password_error"] = 'Passwords do not match.';
    header('location: sign_up.php');
    $flag = true;
} else {
    $_SESSION['c_password'] = $c_password;
}

if ($flag) {
    header('location: sign_up.php');
    exit();
}

// hashing the password for secure! 😑 --> 🙂
$hashed_password = password_hash($password, PASSWORD_BCRYPT);

// 😭Finally i guess time to INSERT USER INFO  INTO THE DATABSE?!😓

$sql = "INSERT INTO users(username,email,password) VALUES('$name','$email','$hashed_password')";
$result = mysqli_query($db_connection, $sql) or die("An unexpected error happends!");

// finally redirect to the sign in page!🫡
$_SESSION['flag'] = "true";
header("location: sign-in.php");

// CLOSING THE MYSQL DATABSE
mysqli_close($db_connection);

//                   ----------------😭 end 😭--------------------
