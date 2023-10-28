<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 3</title>
</head>

<body>
    <h1> User Registration</h1>
    <form action="./proses_post.php" method="post">
        <label>Nama</label>
        <input type="text" name="nama" />
        <br />
        <label>Jenis Kelamin</label>
        <input type="radio" name="gender" value="m" /> Laki-Laki
        <input type="radio" name="gender" value="f" /> Perempuan
        <br />
        <label>Tempat Lahir</label>
        <input type="text" name="bdayyear" />
        <br />
        <label>Tanggal Lahir</label>
        <input type="date" id="bday" name="bday">
        <br />
        <label>Email</label>
        <input type="text" name="email" />
        <br />
        <label>Alamat</label>
        <textarea name="address" id="" cols="30" rows="3"></textarea> </input>
        <br />
        <label>Program Studi</label>
        <select name="prodi">
            <option value="if">Informatika</option>
            <option value="si">Sistem Informasi</option>
            <option value="tk">Teknik Komputer</option>
        </select>
        <br />
        <label>Hobi</label>
        <br />
        <input type="checkbox" id="makan" name="makan" value="makan">
        <label for="makan"> Makan</label><br>
        <input type="checkbox" id="minum" name="minum" value="minum">
        <label for="minum"> Minum</label><br>
        <input type="checkbox" id="tidur" name="tidur" value="tidur">
        <label for="tidur"> Tidur</label><br><br>
        <br />
        <button type="submit">Kirim</button>
    </form>
</body>

</html>