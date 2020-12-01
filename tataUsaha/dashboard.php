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
  <title>Absensi</title>
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- scanner -->
  <script src="scanner/vendor/modernizr/modernizr.js"></script>
  <script src="scanner/vendor/vue/vue.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- css -->
  <link rel="stylesheet" href="../css/masuk.css">
  <link rel="stylesheet" href="../css/dashboard.css">
  <!-- Link CDN font-awesome  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>

<body class="bg-dark text-light">
    <div class="container tex-light">
        <h3><i class="far fa-user-circle mr-2"></i><?= $_SESSION['username'];  ?> </h3>
        

        <?php  
            $level_mhs = $_SESSION['level'] == 'mahasiswa';
            $level_dsn = $_SESSION['level'] == 'dosen';
            $level_tu = $_SESSION['level'] == 'tata_usaha';
        ?>
        <ul>
            <?php 
                if ($level_tu) {
            ?>
            <!-- <li>
                <a href="absen-dosen.php" class="btn btn-secondary m-3"><i class="far fa-eye mr-2"></i>Lihat Absen Dosen</a>
            </li> -->
            <li>
                <a href="absen-mhs.php" class="btn btn-secondary m-3"><i class="far fa-eye mr-2"></i>Lihat Absen Mahasiswa</a>
            </li>
            <li>
                <a href="tambah-user.php" class="btn btn-secondary m-3"><i class="fas fa-user-plus mr-2"></i>Tambah User</a>
            </li>
                <?php } else if ($level_dsn){ ?>
        <!-- dosen -->
            <li>
                <a href="absen-mhs.php" class="btn btn-secondary m-3"><i class="far fa-eye mr-2"></i>Lihat Absen Mahasiswa</a>
            </li>
            <li>
                <a href="absen-dosen.php" class="btn btn-secondary m-3"><i class="far fa-eye mr-2"></i>Lihat Absen Saya</a>
            </li>
                <?php } else if($level_mhs) { ?>
        <!-- mahasiswa -->
            <li>
                <a href="absen-mhs.php" class="btn btn-secondary m-3"><i class="far fa-eye mr-2"></i>Lihat Absen Saya</a>
            </li>
                <?php } ?>
    </div>

    <footer>
        <a href="logout.php" title="Keluar"><i class="fas fa-sign-out-alt mr-2 text-light"></i></a>
    </footer>
</body>

</html>