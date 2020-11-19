<?php  

    session_start();

    if(!isset($_SESSION['data'])){
        header("location:login.php");
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
        <h3><?= $_SESSION['username'];  ?>&copy;<?= $_SESSION['level']; ?></h3>

        

        <?php  
            $level_mhs = $_SESSION['level'] == 'mahasiswa';
            $level_dsn = $_SESSION['level'] == 'dosen';
            $level_tu = $_SESSION['level'] == 'tata_usaha'
        ?>
        <ul>
            <?php 
                if ($level_tu) {
            ?>
            <li>
                <a href="#">Lihat Absen Dosen</a>
            </li>
            <li>
                <a href="#">Lihat Absen Mahasiswa</a>
            </li>
                <?php } else if ($level_dsn){ ?>
        <!-- dosen -->
            <li>
                <a href="#">Lihat Absen Mahasiswa</a>
            </li>
            <li>
                <a href="#">Lihat Absen Saya</a>
            </li>
                <?php } else if($level_mhs) { ?>
        <!-- mahasiswa -->
            <li>
                <a href="#">Lihat Absen Saya</a>
            </li>
                <?php } ?>
    </div>

    <a href="logout.php">logout</a>
</body>

</html>