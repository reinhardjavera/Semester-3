<?php
$arr2dim = array(
    "India" => array(
        "ibuKota" => "New Delhi",
        "kodeTelepon" => "91",
        "mataUang" => "INR"
    ),
    "Indonesia" => array(
        "ibuKota" => "Jakarta",
        "kodeTelepon" => "62",
        "mataUang" => "IDR"
    ),
    "Japan" => array(
        "ibuKota" => "Tokyo",
        "kodeTelepon" => "81",
        "mataUang" => "JPY"
    ),

);

foreach ($arr2dim as $namaNegara => $dataAtribut) {
    echo $dataAtribut['ibuKota'] . ' is the capital city of ' . $namaNegara . '. ';
    echo $namaNegara . "'s calling code is " . $dataAtribut['kodeTelepon'] . ' and has "' . $dataAtribut['mataUang'] . '" as currency code.<br>';
}
