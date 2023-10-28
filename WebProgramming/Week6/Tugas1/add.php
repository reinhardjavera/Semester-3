<?php

include('database.php');

if (isset($_POST['submit'])) {
    $user_card = $_POST['card_no'];
    $first_name = $_POST['user_first_name'];
    $last_name = $_POST['user_last_name'];
    $prodi = $_POST['user_prodi'];

    $msg = "";
    $image = $_FILES['image']['name'];
    $target = "upload_images/" . basename($image);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    } else {
        $msg = "Failed to upload image";
    }

    $insert_data = "INSERT INTO mahasiswa(user_card, first_name, last_name, prodi,image,uploaded) VALUES ('$user_card','$first_name','$last_name','$prodi','$image',NOW())";
    $run_data = mysqli_query($con, $insert_data);

    if ($run_data) {
        header('location:index.php');
    } else {
        echo "Data not insert";
    }
}
