<?php
session_start();


if (!isset(($_POST["submit"]))) header("location: sign_up.php") && exit();

// DATABASE CREDENTIALS
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'carfiue';

// CONNECTION OF MYSQL DATABASE
$db_connection = mysqli_connect($host, $username, $password, $dbname) or die('Connection Failed Try Later! ' . mysqli_connect_error());

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$c_password = $_POST["c_password"];
$flag = false;

// validate name field
if (!$name) {
    $_SESSION['name_error'] = 'Name is required.';
    header('location: sign_up.php');
} elseif (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
    $_SESSION["name_error"] = 'Only letters and white space allowed in name.';
    header('location: sign_up.php');
}

// validete email
if (!$email) {
    $_SESSION['email_error'] = 'email is required.';
    header('location: sign_up.php');
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION["email_error"] = 'Invalid email format';
    header('location: sign_up.php');
}

// validate password
if (!$password) {
    $_SESSION['password_error'] = 'password is required.';
    header('location: sign_up.php');
} elseif (strlen($password) < 8) {
    // todo later i will cheking for hard password!
    $_SESSION["password_error"] = 'Password must be minimum 8 characters length*';
    header('location: sign_up.php');
}

// validate confirm password
if (!$c_password) {

    $_SESSION['c_password_error'] = 'Confirm password is required.';
    // header('location: sign_up.php');
} elseif ($c_password !== $password) {
    $_SESSION["c_password_error"] = 'Passwords do not match.';
    // header('location: sign_up.php');
    $flag = true;
}

if ($flag) header('location: sign_up.php') && exit();


// // 🌟 checking email already exist or not in  MYSQL DATABSE - 🌟

// $sql = "SELECT username FROM users WHERE email = '$email'";
// $username = mysqli_query($db_connection, $sql) or die("An unexpected error happends!");
// if (mysqli_num_rows($username) > 0) {
//     $_SESSION["email_error"] = "Email already Exist";
//     header("location: sign_up.php");
//     exit();
// }

// // if email not exist then we can INSERT INTO MYSQL DATABASE

// hashing the password for secure! 😑 --> 🙂
$hashed_password = password_hash($password, PASSWORD_BCRYPT);

// 😭Finally i guess time to INSERT USER INFO  INTO THE DATABSE?!😓

$sql = "INSERT INTO users(username,email,password) VALUES('$name','$email','$hashed_password')";
$result = mysqli_query($db_connection, $sql) or die("An unexpected error happends!");

// finally redirect to the sign in page!🫡

header("location: sign-in.php");

// CLOSING THE MYSQL DATABSE
mysqli_close($db_connection);

//                   ----------------😭 end 😭--------------------
