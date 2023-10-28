<?php
class Autoloader
{
    public static function load($namaKelas)
    {
        $direktori = __DIR__ . '/' . $namaKelas . '/mahasiswa.php';
        if (file_exists($direktori)) {
            require $direktori;
        }
    }
}

spl_autoload_register([Autoloader::class, 'load']);
