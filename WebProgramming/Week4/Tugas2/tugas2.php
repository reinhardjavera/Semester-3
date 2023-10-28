<?php
class Mahasiswa
{
    private $nim;
    private $nama;

    public function setNim($n)
    {
        $this->nim = $n;
    }

    public function setNama($n)
    {
        $this->nama = $n;
    }

    public function getNim()
    {
        return $this->nim;
    }

    public function getNama()
    {
        return $this->nama;
    }
}

$john = new Mahasiswa();
$john->setNim('00000071748');
$john->setNama('Johnny Johnny yes papa');

echo $john->getNim() . " " . $john->getNama();
