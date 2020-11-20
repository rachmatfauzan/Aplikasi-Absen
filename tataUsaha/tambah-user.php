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
            echo "
             <script>
                 alert ('Berhasil Ditambahkan');
             </script>";
        }else{
            echo "gagal";
        }

    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah User</title>
    <style>
        .row label {
            display: block;
        }
    </style>
</head>

<body>

    <div class="container">

        
        <nav>
            <a href="dashboard.php">Dashboard</a>
        </nav>
        <h3>Tambah User Baru</h3>
        <form action="" method="post">
            <div class="row">
                <label for="">username</label>
                <input type="text" name="username" placeholder="username" autofocus>
            </div>
            <div class="row">
                <label for="">password</label>
                <input type="password" name="password" placeholder="password" required>
            </div>
            <div class="row">
                <label for="">nim</label>
                <input type="text" name="nim" placeholder="nim" required>
            </div>
            <div class="row">
                <label for="status">Status</label>

                <select name="status" id="status">
                    <option value="#" disabled selected>--- Choose One ---</option>
                    <optgroup>
                        <option value="mahasiswa">Mahasiswa</option>
                        <option value="dosen">Dosen</option>
                        <option value="tata_usaha">Tata Usaha</option>
                    </optgroup>
                </select>
            </div>
            <button type="submit" name="daftar">Daftar</button>
        </form>


    </div>

</body>

</html>