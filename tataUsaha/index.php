<?php  
    session_start();
    require '../config/config.php';

    if (isset($_POST['login'])){
        $user = $_POST['username'];
        $pass = $_POST['password'];

        $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username='$user' AND password='$pass'");
        $hasil = mysqli_fetch_array($result);
        if (mysqli_num_rows($result) > 0){

            $_SESSION['data'] = $hasil;
            $_SESSION['username'] = $hasil['username'];
            $_SESSION['level'] = $hasil['level_user'];


            header('location:dashboard.php');
        } else{
            echo "
            <script>
                alert ('USERNAME ATAU PASSWORD SALAH !');
            </script>";
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
  <link rel="stylesheet" href="../css/login.css">
  <!-- Link CDN font-awesome  -->
  <link rel="stylesheet" href="../font-awesome/fa/css/all.css">

</head>
<body class="bg-dark text-light" style="height: 100%;">
    <div class="container">
        <div class="formulir">
            <form method="POST" align="center" size="80%" action="" >
                <table class="d-flex justify-content-center align-items-center">
                    <tr>
                        <th>Login</th>
                    </tr>
                    <tr>
                        <td><input autofocus type="text" name="username" id="username" placeholder="username" required class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td><input type="password" name="password" id="password" placeholder="password" required class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="submit" name="login" id="login" class="btn btn-dark"><i class="fas fa-sign-in-alt mr-2"></i>Login</button>
                            <a href="../index.php" class="text-light">QRCode</a>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>

</html>