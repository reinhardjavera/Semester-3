<?php

include('database.php');
$id = $_GET['id'];
$delete = "DELETE FROM mahasiswa WHERE id = $id";
$run_data = mysqli_query($con, $delete);

if ($run_data) {
    header('location:index.php');
} else {
    echo "Do not Delete";
}
