<?php
session_start();
include "../../config/db.php";

if (!isset(($_POST["submit"]))) header("location: settings.php") && exit();

$name = $_POST["username"];
$flag = false;

// validate name field
if (!$name) {
    $_SESSION['username_error'] = 'Name is required.';
    header('location: settings.php');
    $flag = true;
} elseif (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
    $_SESSION["username_error"] = 'Only letters and white space allowed in name.';
    header('location: settings.php');
    $flag = true;
}


if ($flag) {
    header('location: settings.php');
    exit();
}

$userID = $_SESSION['id'];
$sql = "UPDATE users SET username = '$name' WHERE id = '$userID'";
$result = mysqli_query($db_connection, $sql) or die("unexpected Errors happends");

$_SESSION['username'] = $name;
$_SESSION['error'] = "Successfully Updated!";
header('location: settings.php');

mysqli_close($db_connection);
