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
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($student['nim']); ?></td>
                <td><?php echo e($student['nama']); ?></td>
                <td><?php echo e($student['prodi']); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

</html><?php /**PATH C:\xampp\htdocs\Semester3\WebProgramming\TugasLAB\Week9\app-w9\resources\views/students/index.blade.php ENDPATH**/ ?>