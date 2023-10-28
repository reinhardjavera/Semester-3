<?php

$lowonganPekerjaan = array(
    array( //1
        "Nama" => "PT. Maju Terus Pantang Mundur",
        "Kota" => "Jakarta",
        "Posisi" => "General Manager",
        "Gaji" => 20000000
    ),
    array( //2
        "Nama" => "CV. Jaya Abadi Selamanya",
        "Kota" => "Bandung",
        "Posisi" => "Cleaning Service",
        "Gaji" => 50000000
    ),
    array( //3
        "Nama" => "PT. Mars Serpong Damai",
        "Kota" => "Denpasar",
        "Posisi" => "Marketing Manager",
        "Gaji" => 100000000
    ),
    array( //4
        "Nama" => "PT. Happy Birthday To You",
        "Kota" => "Palembang",
        "Posisi" => "Badut",
        "Gaji" => 500000000
    ),
    array( //5
        "Nama" => "CV. Avengers Nusantara",
        "Kota" => "Lampung",
        "Posisi" => "Security",
        "Gaji" => 25000000
    ),
    array( //6
        "Nama" => "Toko Tajir Mampus",
        "Kota" => "Jakarta",
        "Posisi" => "Kasir",
        "Gaji" => 100000000000
    ),
    array( //7
        "Nama" => "Universitas Keren Banget",
        "Kota" => "Tangerang",
        "Posisi" => "Dosen",
        "Gaji" => 100000000
    ),
    array( //8
        "Nama" => "Restauran Amigos - Agak Minggir Got Sedikit",
        "Kota" => "Surabaya",
        "Posisi" => "Koki",
        "Gaji" => 900000000
    ),
    array( //9
        "Nama" => "Bengkel Mobil Listrik Konslet",
        "Kota" => "Jayapura",
        "Posisi" => "Mekanik",
        "Gaji" => 300000000
    ),
    array( //10
        "Nama" => "PT. Langit ke-7",
        "Kota" => "Manado",
        "Posisi" => "Pilot",
        "Gaji" => 150000000
    ),
    array( //11
        "Nama" => "ByteBit Corporation",
        "Kota" => "Tangerang",
        "Posisi" => "Admin",
        "Gaji" => 1000000
    ),
    array( //12
        "Nama" => "Abah Zeus Tech",
        "Kota" => "Jakarta",
        "Posisi" => "Programmer",
        "Gaji" => 30000000
    ),
    array( //13
        "Nama" => "Rumah Makan Ayam Bawang",
        "Kota" => "Solo",
        "Posisi" => "Kasir",
        "Gaji" => 100000000
    ),
    array( //14
        "Nama" => "PT. Cenderawasih Jaya",
        "Kota" => "Fak-fak",
        "Posisi" => "Sekretaris",
        "Gaji" => 900000000
    ),
    array( //15
        "Nama" => "LivingSoft",
        "Kota" => "Banjarmasin",
        "Posisi" => "Desainer",
        "Gaji" => 52000000
    ),
    array( //16
        "Nama" => "PT. Mental Baja",
        "Kota" => "Cilegon",
        "Posisi" => "Teknisi",
        "Gaji" => 700000000
    ),
    array( //17
        "Nama" => "Sekolah Musik Doremi",
        "Kota" => "Jakarta",
        "Posisi" => "Guru",
        "Gaji" => 100000000
    ),
    array( //18
        "Nama" => "Ronin Tech",
        "Kota" => "Surabaya",
        "Posisi" => "Programmer",
        "Gaji" => 60000000
    ),
    array( //19
        "Nama" => "PT. Bina Ragawan",
        "Kota" => "Medan",
        "Posisi" => "Pelatih",
        "Gaji" => 300000000
    ),
    array( //20
        "Nama" => "Sano Tama Corp",
        "Kota" => "Ambon",
        "Posisi" => "Sales Marketing",
        "Gaji" => 150000000
    ),
    array( //21
        "Nama" => "Jakarta Derma Clinic",
        "Kota" => "Jakarta",
        "Posisi" => "Dokter Umum",
        "Gaji" => 10000000
    ),
    array( //22
        "Nama" => "Starling",
        "Kota" => "Semarang",
        "Posisi" => "Barista",
        "Gaji" => 30000000
    ),
    array( //23
        "Nama" => "Skytree",
        "Kota" => "Depok",
        "Posisi" => "Social Media Specialist",
        "Gaji" => 100000000
    ),
    array( //24
        "Nama" => "Rohtech",
        "Kota" => "Pontianak",
        "Posisi" => "Customer Service",
        "Gaji" => 800000000
    ),
    array( //25
        "Nama" => "menit.com",
        "Kota" => "Jakarta",
        "Posisi" => "Jurnalis",
        "Gaji" => 4000000
    ),
    array( //26
        "Nama" => "Sukses Makmur Organizer",
        "Kota" => "Surabaya",
        "Posisi" => "Fotografer",
        "Gaji" => 700000000
    ),
    array( //27
        "Nama" => "Petra Construction",
        "Kota" => "Jakarta",
        "Posisi" => "Arsitek",
        "Gaji" => 100000000
    ),
    array( //28
        "Nama" => "Bravo Delta Sigma",
        "Kota" => "Surabaya",
        "Posisi" => "Call Center",
        "Gaji" => 60000000
    ),
    array( //29
        "Nama" => "SuperFinance",
        "Kota" => "Jakarta",
        "Posisi" => "Akuntan",
        "Gaji" => 300000000
    ),
    array( //30
        "Nama" => "Universitas Keren Banget",
        "Kota" => "Tangerang",
        "Posisi" => "Tukang Kebun",
        "Gaji" => 150000000
    )
);

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Week 2 - Solution 2</title>
    <link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet">
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            text-align: center;
        }
    </style>
</head>

<body>
    <table id="tabel" style="width: 100%; ">
        <thead>
            <th>No.</th>
            <th>Nama Perusahaan</th>
            <th>Kota</th>
            <th>Posisi</th>
            <th>Gaji</th>
        </thead>
        <tbody>
            <?php
            $int = 1;
            foreach ($lowonganPekerjaan as $key => $value) {
                echo
                "
                <tr>
                    <td>$int</td>
                    <td>$key</td>
                    <td>" . $value["Kota"] . "</td>
                    <td>" . $value["Posisi"] . "</td>
                    <td>Rp. " . number_format($value["Gaji"]) . "</td>
                </tr>
                ";
                $int++;
            }
            ?>
        </tbody>
    </table>
    <?php
    foreach ($lowonganPekerjaan as $key => $value) {
        echo $key;
    }
    ?>
</body>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script>
    new DataTable('#tabel');
</script>

</html>