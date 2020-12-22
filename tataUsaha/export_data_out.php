<?php  
    session_start();
    include '../config/config.php';

    // Excel
    header('Content-Type: application/vnd-ms-excel');
    header('Content-Disposition: attachment; filename=Data Absen Magang.xls');

    $dataAbsen = mysqli_query($conn, "SELECT * FROM history_out ORDER BY id_out DESC");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export Data Karyawan</title>
    <link rel="icon" href="../img/TFME.jpg">

</head>
<body>

<center><h2>Absen Pulang</h2></center>

<center>Data Absen Magang TFME Politeknik Negeri Batam</center>

<table border="1">
<tr>
    <th>No</th>
    <th>Nama Mahasiswa</th>
    <th>Tanggal</th>
    <th>Bulan</th>
    <th>Tahun</th>
    <th>Waktu Masuk</th>
</tr>
<?php $no = 1; ?>
<?php foreach ($dataAbsen as $mhs) : ?>
<tr>
    <td><?= $no; ?></td>
    <td><?= $mhs['username']; ?></td>
    <!-- // -->
    <?php $date = date_create($mhs['date_out']); ?>
    <td><?= date_format($date, "j"); ?></td>
    <td><?= date_format($date, "F"); ?></td>
    <td><?= date_format($date, "Y"); ?></td>    
    <td>
        <?= date_format($date, 'g:i:a'); ?>
    </td>
</tr>
<?php $no++; ?>
<?php endforeach; ?>
     
</table>
    
</body>
</html>