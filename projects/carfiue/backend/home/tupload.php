<?php

session_start();
include "../../config/db.php";
$id = $_SESSION['id'];
$name = $_SESSION['username'];


if (isset($_POST['insert'])) {
    $imageFile = $_FILES['img'];
    $customar_name = $_POST["name_c"];
    $customar_des = $_POST["description"];

    // Get file extension
    $extension = pathinfo($imageFile['name'], PATHINFO_EXTENSION);

    // Create a new file name with the current date and time
    $newFileName = $id . "-" . $name . "-" . date('Y-m-d-H') . 'timg.' . $extension;

    // Set the destination path
    $destination = '../../public/upload/profile/' . $newFileName;


    // Move the uploaded file to the destination
    if (move_uploaded_file($imageFile['tmp_name'], $destination)) {
        // echo "File uploaded successfully with the name: $newFileName";
        // $query = "UPDATE users SET image = '$newFileName' WHERE id = '$id'";
        $query = "INSERT INTO testimonial (customar_name,description,img) VALUES ('$customar_name','$customar_des','$newFileName')";
        mysqli_query($db_connection, $query);
        header("location: testimonial.php");
    }
}


if (isset($_GET['statusid'])) {
    $id = $_GET['statusid'];

    $getQuery = "SELECT * FROM testimonial WHERE id='$id'";
    $connect = mysqli_query($db_connection, $getQuery);
    $service = mysqli_fetch_assoc($connect);


    if ($service['status'] == 'deactive') {
        $update_query = "UPDATE testimonial SET status='active' WHERE id='$id'";
        mysqli_query($db_connection, $update_query);
        header("location: testimonial.php");
    } else {
        $update_query = "UPDATE testimonial SET status='deactive' WHERE id='$id'";
        mysqli_query($db_connection, $update_query);
        header("location: testimonial.php");
    }
}



if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $delete_query = "DELETE FROM testimonial WHERE id='$id'";
    mysqli_query($db_connection, $delete_query);
    $_SESSION['service_delete'] = "Service Delete Successfully Complete";
    header('location: testimonial.php');
}
