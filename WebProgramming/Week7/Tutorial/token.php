<?php

// Deklarasi variabel
$random_bytes = random_bytes(20);
echo $random_bytes;
echo "<br />";

// Konversi biner ke heksadesimal
$token = bin2hex($random_bytes);

// Tampilkan token
echo $token;
