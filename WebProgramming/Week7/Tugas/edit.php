<?php

include('database.php');

$id = $_GET['id'];
$rand = rand();


if (isset($_GET['id'])) {
    $edit_id = $_GET['id'];
    $edit_query = "SELECT * FROM mahasiswa WHERE id = $edit_id";
    $edit_query_run = mysqli_query($con, $edit_query);
    if (mysqli_num_rows($edit_query_run) > 0) {
        $edit_row = mysqli_fetch_array($edit_query_run);

        $e_image = $edit_row['image'];
    } else {
        echo "Error1";
    }
} else {
    echo "Error2";
}

if (isset($_POST['submit'])) {
    $u_card = $_POST['card_no'];
    $u_f_name = $_POST['user_first_name'];
    $u_l_name = $_POST['user_last_name'];
    $u_prodi = $_POST['user_prodi'];

    $msg = "";
    $image = $_FILES['image']['name'];
    if (empty($image)) {
        $image = $e_image;
        $target = "upload_images/" . basename($image);


        $update = "UPDATE mahasiswa SET u_card='$u_card', u_f_name = '$u_f_name', u_l_name = '$u_l_name',  u_prodi = '$u_prodi', image = '$image' WHERE id=$id ";
        $run_update = mysqli_query($con, $update);

        if ($run_update) {
            move_uploaded_file($_FILES['image']['tmp_name'], $target);

            echo "<script>
                alert('Success! Data has been successfully updated!');
                window.location.href='index.php';
                </script>";
        } else {
            echo "Data not update";
        }
    } else {
        $xx = $rand . "_" . $image;
        $target = "upload_images/" . $xx;

        $update = "UPDATE mahasiswa SET u_card='$u_card', u_f_name = '$u_f_name', u_l_name = '$u_l_name',  u_prodi = '$u_prodi', image = '$xx' WHERE id=$id ";
        $run_update = mysqli_query($con, $update);

        if ($run_update) {
            $oldDir = "upload_images/" . $e_image;
            unlink($oldDir);
            move_uploaded_file($_FILES['image']['tmp_name'], $target);
            echo "<script>
                alert('Success! Data has been successfully updated!');
                window.location.href='index.php';
                </script>";
        } else {
            echo "Data not update";
        }
    }
}
