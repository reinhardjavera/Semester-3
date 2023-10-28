<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>User Registration</h1>
    <form action="proses_get.php" method="get">
        <label>Nama</label>
        <input type="text" name="nama" />
        <br />
        <label>Jenis Kelamin</label>
        <input type="radio" name="gender" value="m" /> Laki-laki
        <input type="radio" name="gender" value="f" /> Perempuan
        <br />
        <label>Program Studi</label>
        <select name="prodi">
            <option value="if">Informatika</option>
            <option value="si">Sistem Informasi</option>
            <option value="tk">Teknik Komputer</option>
        </select>
        <br />
        <button type="submit">Kirim</button>
    </form>
</body>

</html>