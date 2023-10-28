<?php

session_start();
include('database.php');

$user_session_id = $_SESSION['id'];

if (!isset($_SESSION['level'])) {
    header("location:index.php");
} else {
    if ($_SESSION['level'] == "admin") {
        $id = $_GET['id'];
        $select = "SELECT * FROM mahasiswa WHERE id = $id";
        $select_res = mysqli_query($con, $select);
        if (mysqli_num_rows($select_res) > 0) {
            $data = mysqli_fetch_assoc($select_res);
            $img = $data['image'];
        }

        unlink("upload_images/" . $img);
        $delete = "DELETE FROM mahasiswa WHERE id = $id";
        $run_data = mysqli_query($con, $delete);
        if ($run_data) {
            header('location:index.php');
        } else {
            echo "Do not Delete";
        }
    } elseif ($_SESSION['level'] == "student") {
        $id = $_GET['id'];
        if ($id != $user_session_id) {
            header("location:index.php?msg=noob");
        } else {
            $select = "SELECT * FROM mahasiswa WHERE id = $id";
            $select_res = mysqli_query($con, $select);
            if (mysqli_num_rows($select_res) > 0) {
                $data = mysqli_fetch_assoc($select_res);
                $img = $data['image'];
            }
            unlink("upload_images/" . $img);
            $delete = "DELETE FROM mahasiswa WHERE id = $id";
            $run_data = mysqli_query($con, $delete);
            if ($run_data) {
                header('location:index.php');
            } else {
                echo "Do not Delete";
            }
            session_destroy();
            header('location:index.php');
        }
    }
}
