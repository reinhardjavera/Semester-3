<?php
// Get Data From URL:
$id = $_GET['id'];

// 1
$dsn = "mysql:host=localhost;dbname=pemweb_w6";
$kunci = new PDO($dsn, 'root', '');

// 2
$sql = "SELECT * FROM mahasiswa WHERE id = ?";

// 3
$stmt = $kunci->prepare($sql);
$data = [$id];
$stmt->execute($data);
$row = $stmt->fetch(PDO::FETCH_ASSOC)
?>

NIM: <?= $row['nim'] ?></br>
Nama: <?= $row['nama'] ?></br>
Prodi: <?= $row['prodi'] ?>