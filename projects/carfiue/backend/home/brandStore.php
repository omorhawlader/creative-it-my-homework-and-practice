<?php

include '../../config/db.php';

session_start();

if (isset($_POST['insert'])) {
    $id = $_SESSION['id'];
    $image = $_FILES['image']['name'];
    $explode = explode('.', $image);
    $extension = end($explode);
    $tmp_name = $_FILES['image']['tmp_name'];

    if ($image) {
        $newname = $id . '-' . $title . '-' . date('d-m-Y') . '-' . rand(0, 9999) . '.' . $extension;

        $localpath = '../../public/upload/profile/' . $newname;


        if (move_uploaded_file($tmp_name, $localpath)) {
            $insert_query = "INSERT INTO brand (image) VALUES ('$newname')";

            mysqli_query($db_connection, $insert_query);



            header('location: brand.php');
        }
    }
}



if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $port_query = "SELECT * FROM brand WHERE id='$id'";
    $connect = mysqli_query($db_connection, $port_query);
    $port = mysqli_fetch_assoc($connect);

    if ($port['image']) {
        $oldname = $port['image'];
        $existspath = '../../public/upload/profile/' . $oldname;

        if (file_exists($existspath)) {
            unlink($existspath);
        }
    }

    $delete_query = "DELETE FROM brand WHERE id='$id'";
    mysqli_query($db_connection, $delete_query);


    header('location: protfolio.php');
}



if (isset($_POST['update'])) {
    if (isset($_GET['updateid'])) {
        $image = $_FILES['image']['name'];

        if ($image) {
            $image_tmp = $_FILES['image']['tmp_name'];

            $explode = explode('.', $image);
            $extension = end($explode);
            $new_name = $id . '_' . $title . '_' .  date('Y') . rand(0, 9999) . '.' . $extension;
            $localpath = '../../public/upload/profile/' . $new_name;
            $old_img_query = "SELECT * FROM brand WHERE id='$id'";
            $connect = mysqli_query($db_connection, $old_img_query);
            $portfolio = mysqli_fetch_assoc($connect);

            if ($portfolio['image']) {
                $oldpath = '../../public/upload/profile/' . $portfolio['image'];
                if (file_exists($oldpath)) {
                    unlink($oldpath);
                }
            }

            if (move_uploaded_file($image_tmp, $localpath)) {
                $update_query = "UPDATE brand SET image='$new_name' WHERE id='$id'";
                mysqli_query($db_connection, $update_query);


                header('location: brand.php');
            }
        }
    }
}


if (isset($_GET['statusid'])) {

    $id = $_GET['statusid'];
    $statusquery = "SELECT * FROM brand WHERE id='$id'";
    $connect = mysqli_query($db_connection, $statusquery);
    $portfolio = mysqli_fetch_assoc($connect);

    if ($portfolio['status']  == 'deactive') {
        $update_query = "UPDATE brand SET status='active' WHERE id='$id'";
        mysqli_query($db_connection, $update_query);

        header('location: brand.php');
    } else {
        $update_query = "UPDATE portfolios SET status='deactive' WHERE id='$id'";
        mysqli_query($db_connection, $update_query);

        header('location: brand.php');
    }
}
