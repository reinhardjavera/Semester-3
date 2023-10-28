<?php
switch ($_POST['prodi']) {
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
echo "Nama: " . $_POST['nama'] . "<br />";
echo "Jenis Kelamin: " . ($_POST['gender'] == "m" ? "Laki-laki" : "Perempuan") . "<br />";
echo "Tempat Lahir: " . $_POST['bdayyear'] . "<br />";
echo "Tanggal Lahir: " . $_POST['bday'] . "<br />";
echo "Email: " . $_POST['email'] . "<br />";
echo "Alamat: " . $_POST['address'] . "<br />";
echo "Program Studi: " . $prodi . "<br />";

$hobi = [];

if (isset($_POST['makan'])) {
    $hobi[] = "Makan";
}

if (isset($_POST['minum'])) {
    $hobi[] = "Minum";
}

if (isset($_POST['tidur'])) {
    $hobi[] = "Tidur";
}

if (!empty($hobi)) {
    echo "Hobi: " . implode(', ', $hobi) . "<br />";
}
