.<?php
    if (!isset($_POST['nim']) || !isset($_POST['nama']) || !isset($_POST['prodi'])) {
        header("location:./index.php?err");
    }
    require_once("./init.php");
    $lvl = $_POST['level'];
    $gelar = "";
    if (isset($_POST['gelar'])) {
        $gelar = $_POST['gelar'];
    }
    $mhs = new $lvl($_POST['nim'], $_POST['nama'], $_POST['prodi'], $gelar);

    echo "Object Mahasiswa " . $mhs::LEVEL . " berhasil dibuat. <br/>";
    if ($mhs::LEVEL == "Sarjana") {
        echo "NIM: " . $mhs->getNim() . "<br/>";
        echo "Nama: " . $mhs->getNama() . "<br/>";
        echo "Prodi: " . $mhs->getProdi() . "<br/>";
    } else {
        echo "NIM: " . $mhs->getNim() . "<br/>";
        echo "Nama: " . $mhs->getNama() . "<br/>";
        echo "Prodi: " . $mhs->getProdi() . "<br/>";
        echo "Gelar Sarjana: " . $mhs->getGelar() . "<br/>";
    }
