<?php
switch ($_GET['prodi']) {
    case "if":
        $prodi = "Informatika";
        break;
    case "si":
        $prodi = "Sistem Informasi";
        break;
    case "tk":
        $prodi = "Teknik Komputer";
        break;
}

echo "<h1>User Registration Data</h1>";
echo "Nama: " . $_GET['nama'] . "<br />";
echo "Jenis Kelamin: " . ($_GET['gender'] == "m" ? "Laki-laki" : "Perempuan") . "<br />";
echo "Program Studi: " . $prodi . "<br />";
