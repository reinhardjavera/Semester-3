<!DOCTYPE html>
<html>

<head>
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Hello World, this is the master layout.</h1>
    <h1>Data Mahasiswa</h1>
    <table>
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Prodi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $student)
            <tr>
                <td>{{ $student['nim'] }}</td>
                <td>{{ $student['nama'] }}</td>
                <td>{{ $student['prodi'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

<style>
    table,
    th,
    td {
        border: 1px solid black;
        padding: 5px;
    }
</style>

</html>