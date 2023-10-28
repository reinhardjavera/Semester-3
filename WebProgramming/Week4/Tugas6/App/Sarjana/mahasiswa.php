<?php

class Sarjana
{
    const LEVEL = "Sarjana";
    public $nim, $nama, $prodi;
    public function __construct($nim, $nama, $prodi)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
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
}
