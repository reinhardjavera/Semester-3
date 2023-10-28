<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih object</title>
</head>

<body>
    <h1>
        Pilih Object yang mau dibuat
    </h1>
    <a href="./form_sarjana.php">Mahasiswa Sarjana</a> <br>
    <a href="./form_magister.php">Mahasiswa Magister</a>

    <?php
    if (isset($_GET['err'])) {
    ?>
        <h3 style="color:red;">Error 404.exe</h3>
    <?php
    }
    ?>
</body>

</html>