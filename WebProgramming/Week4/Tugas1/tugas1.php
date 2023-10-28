<?php
class mobil
{
    public $nama;
    public $merk;

    function __construct($nama, $merk)
    {
        $this->nama = $nama;
        $this->merk = $merk;
    }

    function getNama()
    {
        echo "Nama Mobil: " . $this->nama . "<br />";
    }

    function getMerk()
    {
        echo "Merk Mobil: " . $this->merk;
    }
}

$gt86 = new mobil("GT 86", "Toyota");
echo $gt86->getNama();
echo $gt86->getMerk();
