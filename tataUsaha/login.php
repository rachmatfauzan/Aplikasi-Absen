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
                 alert ('user name atau password salah');
             </script>";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard TU</title>

<body>
    <div class="container">
        <div class="formulir">
            <form method="POST" align="center" size="80%" action="">
                <table>
                    <tr>
                        <th>Login</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="username" id="username" placeholder="username">
                        </td>
                    </tr>
                    <tr>
                        <td><input type="password" name="password" id="password" placeholder="password">
                        </td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="login" value="masuk">
                        </td>
                    </tr>
                </table>
            </form>
        </div>

    </div>

</body>

</html>