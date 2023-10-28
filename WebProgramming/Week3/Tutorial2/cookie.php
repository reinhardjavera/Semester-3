<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie.php</title>
</head>

<body>
    <?php
    setcookie('nama', "John Thor");
    if (!isset($_COOKIE['nama'])) {
        echo "COOKIE['nama'] belum di-set.";
    } else {
        echo "COOKIE['nama'] sudah di-set. <br>";
        echo "COOKIE['nama'] = " . $_COOKIE['nama'];
    }
    ?>
</body>

</html>