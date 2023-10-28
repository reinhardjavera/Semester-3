<?php
class Manusia
{
    protected $nama;

    function __construct($nama)
    {
        $this->nama = $nama;
    }

    final public function getNama()
    {
        return $this->nama;
    }
}

class Bayi extends Manusia
{
    private $berat;

    function __construct($nama, $berat)
    {
        parent::__construct($nama);
        $this->berat = $berat;
    }

    public function getBerat()
    {
        return $this->berat;
    }
}

$john = new Manusia('John Thor');
$wick = new Bayi('Dababy', '3Kg');

echo "Data 1 <br />Nama: " . $john->getNama() . "<br />";
echo "<hr />";
echo "Data 2 <br />Nama: " . $wick->getNama() . "<br />";
echo "Berat: " . $wick->getBerat();
