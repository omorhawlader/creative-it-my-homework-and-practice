<?php

include '../../config/db.php';
session_start();


if (isset($_POST['insert'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $icon = $_POST['icon'];


    if ($title && $description && $icon) {
        $query = "INSERT INTO fact (title,subtitle,icon) VALUES ('$title','$description','$icon')";
        mysqli_query($db_connection, $query);
        $_SESSION['service_insert'] = "Service Insert Successfully Complete";
        header('location: fact.php');
    }
}



if (isset($_GET['statusid'])) {
    $id = $_GET['statusid'];

    $getQuery = "SELECT * FROM fact WHERE id='$id'";
    $connect = mysqli_query($db_connection, $getQuery);
    $service = mysqli_fetch_assoc($connect);


    if ($service['status'] == 'deactive') {
        $update_query = "UPDATE fact SET status='active' WHERE id='$id'";
        mysqli_query($db_connection, $update_query);
        $_SESSION['service_status'] = "Service Status Successfully Complete";
        header('location: fact.php');
    } else {
        $update_query = "UPDATE fact SET status='deactive' WHERE id='$id'";
        mysqli_query($db_connection, $update_query);
        $_SESSION['service_status'] = "Service Status Successfully Complete";
        header('location: fact.php');
    }
}



if (isset($_POST['update'])) {
    if (isset($_GET['update'])) {
        $id = $_GET['update'];

        $title = $_POST['title'];
        $description = $_POST['description'];
        $icon = $_POST['icon'];

        if ($title && $description && $icon) {
            $query_update = "UPDATE fact SET title='$title',subtitle='$description',icon='$icon' WHERE id='$id'";
            mysqli_query($db_connection, $query_update);
            $_SESSION['service_edit'] = "Service Update Successfully Complete";
            header('location: fact.php');
        }
    }
}


if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $delete_query = "DELETE FROM fact WHERE id='$id'";
    mysqli_query($db_connection, $delete_query);
    $_SESSION['service_delete'] = "Service Delete Successfully Complete";
    header('location: fact.php');
}
