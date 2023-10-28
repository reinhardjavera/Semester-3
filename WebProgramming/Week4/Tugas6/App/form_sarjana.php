<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Sarjana</title>
</head>

<body>
    <h1>Form Sarjana</h1>
    <form action="proses.php" method="post">
        <label for="nim">NIM</label>
        <input type="text" name="nim" required style="margin: 5px 0;">
        <br>
        <label for="nama">Nama</label>
        <input type="text" name="nama" required style="margin: 5px 0;">
        <br>
        <label for="prodi">Prodi</label>
        <input type="text" name="prodi" required style="margin: 5px 0;">
        <br>
        <input type="hidden" name="level" value="Sarjana">
        <button type="submit">Submit</button>
    </form>
</body>

</html>