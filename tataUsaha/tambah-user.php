<?php  

    require '../config/config.php';
    session_start();

    if(!isset($_SESSION['data'])){
        header("location:login.php");
    }
    
    // registrasi
    if (isset($_POST['daftar'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $nim = $_POST['nim'];
        $status = $_POST['status'];

        $query = mysqli_query($conn, "INSERT INTO tb_user VALUES ('','$username','$password',now(),'admin','1','','$nim','$status')");
        if ($query){
            $berhasil = true;
        }else{
            echo "gagal";
        }

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
    <link rel="stylesheet" href="../css/tambah-user.css">
    <!-- Link CDN font-awesome  -->
    <link rel="stylesheet" href="../font-awesome/fa/css/all.css">
    <!--  CDN SWAL-->
    <script src="../swal2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="../swal2/dist/sweetalert2.min.css">

</head>

<body class="bg-dark text-light">

    <div class="container">

        <nav>
            <a href="dashboard.php">Dashboard</a>
        </nav>
        <h3>Tambah User Baru</h3>
        <form action="" method="post" class="d-flex align-items-center flex-column">
            <div class="row">
                <label for="">username</label><br>
                <input type="text" class="form-control" name="username" placeholder="username" autofocus>
            </div>
            <div class="row">
                <label for="">password</label><br>
                <input type="password" class="form-control" name="password" placeholder="password" required>
            </div>
            <div class="row">
                <label for="">nim</label><br>
                <input type="text" class="form-control" name="nim" placeholder="nim" required>
            </div>
            <div class="row">
                <label for="status">Status</label><br>

                <select name="status" class="form-control" id="status">
                    <option value="#" disabled selected>--- Choose One ---</option>
                    <optgroup>
                        <option value="mahasiswa">Mahasiswa</option>
                        <option value="tata_usaha">Dosen</option>
                    </optgroup>
                </select>
            </div>
            <button type="submit" class="btn btn-info" name="daftar">Daftar</button>
        </form>
    </div>


    <?php if(isset($berhasil)) :  ?>
        <script>
            swal.fire ("Berhasil Daftar", "Selamat Datang!", "success");
        </script>
    <?php endif; ?>
</body>

</html>