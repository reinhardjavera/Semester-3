<?php
interface Buah
{
    public function setJumlahBiji();
}

interface Sayur
{
    public function setWarna();
}

interface SayurBuah extends Sayur, Buah
{
    public function setCaraMakan();
}

class KacangPolong implements SayurBuah
{
    public function setJumlahBiji()
    {
        return "6 Biji";
    }

    public function setWarna()
    {
        return "Ijo";
    }

    public function setCaraMakan()
    {
        return "Direbus";
    }

    public function __construct()
    {
        echo "Kacang Polong";
    }
}

$kacang = new KacangPolong();
