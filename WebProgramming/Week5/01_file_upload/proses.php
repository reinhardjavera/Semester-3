<?php
$filename = $_FILES['foto']['name'];
$temp_file = $_FILES['foto']['tmp_name'];

$file_ext = explode('.', $filename);
$file_ext = end($file_ext);
$file_ext = strtolower($file_ext);

switch ($file_ext) {
    case 'jpg':
    case 'jpeg':
    case 'png':
    case 'svg':
    case 'webp':
    case 'bmp':
    case 'gif':
        move_uploaded_file($temp_file, "uploads/{$filename}");
        echo "File berhasil di upload.";
        break;
    default:
        echo "Anda hanya bisa upload file gambar.";
}
