<?php

class Magister
{
    const LEVEL = "Magister";
    public $nim, $nama, $prodi, $gelarsarjana;
    public function __construct($nim, $nama, $prodi, $gelar)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
        $this->gelarsarjana = $gelar;
    }
    public function getNim()
    {
        return $this->nim;
    }
    public function getNama()
    {
        return $this->nama;
    }
    public function getProdi()
    {
        return $this->prodi;
    }
    public function getGelar()
    {
        return $this->gelarsarjana;
    }
}
