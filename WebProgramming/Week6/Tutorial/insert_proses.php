<?php

// Form Data:
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];

//1
$dsn = "mysql:host=localhost;dbname=pemweb_w6";
$kunci = new PDO($dsn, 'root', '');

//2
$sql = "INSERT INTO mahasiswa (nim, nama, prodi) 
        VALUES (?, ?, ?)";

// 3
$stmt = $kunci->prepare($sql);
$data = [$nim, $nama, $prodi];
$stmt->execute($data);
