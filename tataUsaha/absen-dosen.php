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

    
    if($level_dsn){
        $query = mysqli_query($conn, "SELECT * FROM history_in WHERE level_user='dosen' AND username='$username'");
    }
    if(!$level_dsn){
        $query = mysqli_query($conn, "SELECT * FROM history_in WHERE level_user='dosen'");
    }

?>

<!DOCTYPE html>
<html lang="en">

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Absensi</title>
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- scanner -->
    <script src="scanner/vendor/modernizr/modernizr.js"></script>
    <script src="scanner/vendor/vue/vue.min.js"></script>
    <!-- Bootstrap4 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- css -->
    <link rel="stylesheet" href="../css/masuk.css">
    <link rel="stylesheet" href="../css/absen-dosen.css">
    <!-- Link CDN font-awesome  -->
  <link rel="stylesheet" href="../font-awesome/fa/css/all.css">
</head>

<body class="bg-dark text-light">

    <div class="container d-flex align-items-center flex-column">

        <nav>
            <a href="dashboard.php"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a>
        </nav>

        <div class="title">
            <h2>Absen Dosen</h2>
        </div>
        <div class="table-responsive table-bordered">
        <table class="table">
            <tr class="bg-light text-dark">
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
    </div>
</body>

</html>