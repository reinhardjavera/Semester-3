<?php
session_start();
include('database.php');
if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['card_no']) && isset($_POST['user_prodi']) && isset($_POST['user_first_name']) && isset($_POST['user_last_name']) && isset($_FILES['image'])) {
    if (isset($_POST['submit'])) {
        if ($_POST['submit'] == "register") {

            $rand = rand();

            $username = $_POST['username'];
            $password = sha1($_POST['password']);

            $level = $_POST['level'];

            $u_card = $_POST['card_no'];
            $u_f_name = $_POST['user_first_name'];
            $u_l_name = $_POST['user_last_name'];
            $u_prodi = $_POST['user_prodi'];
            $msg = "";
            $image = $_FILES['image']['name'];
            $xx = $rand . "_" . $image;

            $target = "upload_images/" . $xx;

            if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                $msg = "Image uploaded successfully";
            } else {
                $msg = "Failed to upload image";
            }

            $query = "INSERT INTO user(u_card, u_f_name, u_l_name, u_prodi, image, uploaded, username, password, level) VALUES (?, ?, ?, ?, ?, NOW(), ?, ?, ?)";
            $state = mysqli_stmt_init($con);
            mysqli_stmt_prepare($state, $query);
            mysqli_stmt_bind_param($state, "ssssssss", $u_card, $u_f_name, $u_l_name, $u_prodi, $xx, $username, $password, $level);

            if (mysqli_stmt_execute($state)) {
                header("location:index.php");
            } else {
                header("location:register.php");
            }
        } else {
        }
    } else {
    }
} else {
    echo "Error Data unset";
}
