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

    <!-- link script datatable
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css"> -->

    <!-- datatables -->
    <script src="../datatable/js/jquery.js"></script>
    <script src="../datatable/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="../datatable/data/css/dataTables.bootstrap4.min.css">
</head>


<body class="bg-dark text-light">

    <div class="container">

        <nav>
            <a href="dashboard.php"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a>
        </nav>

        <div class="title">
            <h2>Absen Mahasiswa Magang</h2>
        </div>
        <div class="table-responsive" style="width: 100%;">
            <table class="table" id="data" style="text-align: left;">
                <thead>
                    <tr class="bg-light text-dark">
                        <th style="display: none;">No</th>
                        <th>Username</th>
                        <th>Waktu Masuk</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($query as $data): ?>
                    <tr class="text-white">
                        <td style="display: none;"><?= $no; ?></td>
                        <td><?= $data['username']; ?></td>
                        <td>
                            <!-- start Logik - Get lastactivity from database -->
                            <?php  
                                $date = date_create($data['date_masuk']);
                        ?>
                            <!-- End Logik - Get lastactivity from database -->
                            <?= date_format($date, 'j F Y g:ia'); ?>
                        </td>
                    </tr>
                    <?php $no++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>





    <!-- script data tables -->
    <script>
        $(document).ready(function () {
            $('#data').DataTable({
                scrollX: false,
                "lengthMenu": [
                    [17, 25, 50, -1],
                    [17, 50, 100, "All"]
                ],
                "ordering": true,
                "order": [[0, 'desc']]
                });
        });
    </script>
</body>

</html>