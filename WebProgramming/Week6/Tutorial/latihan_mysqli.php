<?php
// 1. Koneksi DB
$kunci = mysqli_connect("localhost", "root", "", "pemweb_w6");

// 2. Query SQL
$sql = "INSERT INTO mahasiswa (nim, nama, prodi) VALUES ('003', 'John Doel', 'Teknik Komputer')";
$sql = "SELECT * FROM mahasiswa";

// 3. Eksekusi SQL
mysqli_query($kunci, $sql);
$mhs = mysqli_query($kunci, $sql);

// 4. Menampilkan hasil query
while ($data = mysqli_fetch_assoc($mhs)) {
        echo $data['nama'] . " ";
        echo $data['nim'] . " ";
        echo $data['prodi'];
        echo "</br>";
}
