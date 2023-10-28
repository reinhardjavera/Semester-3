<?php

//db.php
// DB Credentials
define('DSN', 'mysql:host=localhost; dbname=umn_genap2122_pemweb_w7');
define('DBUSER', 'root');
define('DBPASS', '');

// 1. Connect to DB
$db = new PDO(DSN, DBUSER, DBPASS);
