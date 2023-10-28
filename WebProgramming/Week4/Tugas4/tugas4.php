<?php
abstract class Mahasiswa
{
    const KAMPUS = 'Universitas Multimedia Nusantara';

    abstract protected function getTugasAkhir();
    abstract protected function getProgram($postfix);

    public function tugasAkhir()
    {
        echo $this->getProgram('Mahasiswa') . ' ' . $this->getTugasAkhir() . "<br />";
    }
}

class Sarjana extends Mahasiswa
{
    protected function getTugasAkhir()
    {
        return "Skripsi";
    }

    public function getProgram($postfix)
    {
        return "{$postfix} S1";
    }
}

class Magister extends Mahasiswa
{
    protected function getTugasAkhir()
    {
        return "Tesis";
    }

    public function getProgram($postfix)
    {
        return "{$postfix} S2";
    }
}

echo Mahasiswa::KAMPUS . "<br />";

$s = new Sarjana();
$s->tugasAkhir();

$m = new Magister();
$m->tugasAkhir();
