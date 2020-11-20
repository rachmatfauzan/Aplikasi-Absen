<?php  

    session_start();
    include '../config/config.php';

    
    if(!isset($_SESSION['data'])){
        header("location:login.php");
    }

    $username = $_SESSION['username'];
    $level_mhs = $_SESSION['level'] == 'mahasiswa';
    $level_dsn = $_SESSION['level'] == 'dosen';
    $level_tu = $_SESSION['level'] == 'tata_usaha';

    // if(isset($level_dsn)){
    //     $query = mysqli_query($conn, "SELECT * FROM history_in WHERE level_user='mahasiswa'");
    // }
    if($level_mhs){
        $query = mysqli_query($conn, "SELECT * FROM history_in WHERE level_user='mahasiswa' AND username='$username'");
    }
    if(!$level_mhs){
        $query = mysqli_query($conn, "SELECT * FROM history_in WHERE level_user='mahasiswa'");
    }
    


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="container">

        <div class="title">
            <h2>Absen Mahasiswa</h2>
        </div>
        <table border="1">
            <tr>
                <th>Username</th>
                <th>Waktu Masuk</th>
            </tr>
            <?php foreach ($query as $data): ?>
            <tr>
                <td><?= $data['username']; ?></td>
                <td>
                    <!-- start Logik - Get lastactivity from database -->
                <?php  
                        $date = date_create($data['date_masuk']);
                 ?>
                    <!-- End Logik - Get lastactivity from database -->
                    <?= date_format($date, 'l, j F Y g:ia'); ?>
                 </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <nav>
        <a href="dashboard.php">Dashboard</a>
    </nav>
</body>

</html>