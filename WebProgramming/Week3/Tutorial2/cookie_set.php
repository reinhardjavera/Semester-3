<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Set.php</title>
</head>

<body>
    <?php
    if (!isset($_COOKIE['index_cookie'])) {
        setcookie('index_cookie', 0);
        $index = 0;

        $data1 = array(
            "nama" => "John Thor",
            "prodi" => "Informatika",
            "info" => "First data",
        );

        setcookie("data[$index]", json_encode($data1));
        echo "log0";
    } else {
        setcookie('index_cookie', $_COOKIE['index_cookie'] + 1);
        $index = $_COOKIE['index_cookie'] + 1;

        $data2 = array(
            "nama" => "John Wick",
            "prodi" => "Sistem Informasi",
            "info" => "Next data"
        );
        setcookie("data[$index]", json_encode($data2));
        echo "log1";
    }
    ?>
    <a href="./cookie_read.php">Goto Cookie Read</a>


</body>

</html>