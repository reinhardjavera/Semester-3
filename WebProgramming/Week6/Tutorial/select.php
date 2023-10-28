<?php
// 1
$dsn = "mysql:host=localhost;dbname=pemweb_w6";
$kunci = new PDO($dsn, 'root', '');

// 2
$sql = "SELECT * FROM mahasiswa";

// 3
$hasil = $kunci->query($sql);
?>

<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Tindakan</th>
        </tr>
        <?php
        while ($row = $hasil->fetch(PDO::FETCH_ASSOC)) {
        ?>

            <tr>
                <td><?= $row['nim'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['prodi'] ?></td>
                <td>
                    <a href="individu.php?id=<?= $row['id'] ?>">Detail</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>