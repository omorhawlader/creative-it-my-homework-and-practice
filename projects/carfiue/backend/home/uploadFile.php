<?php

session_start();
include "../../config/db.php";
$id = $_SESSION['id'];
$name = $_SESSION['username'];


if (isset($_POST['submit'])) {
    $imageFile = $_FILES['image'];

    // Get file extension
    $extension = pathinfo($imageFile['name'], PATHINFO_EXTENSION);

    // Create a new file name with the current date and time
    $newFileName = $id . "-" . $name . "-" . date('Y-m-d-H') . '.' . $extension;

    // Set the destination path
    $destination = '../../public/upload/profile/' . $newFileName;


    // Move the uploaded file to the destination
    if (move_uploaded_file($imageFile['tmp_name'], $destination)) {
        // echo "File uploaded successfully with the name: $newFileName";
        $query = "UPDATE users SET image = '$newFileName' WHERE id = '$id'";
        mysqli_query($db_connection, $query);
        header("location: settings.php");
    }
}
