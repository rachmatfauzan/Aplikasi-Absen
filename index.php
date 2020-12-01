<?php  

  session_start();
  include "config/config.php";

?>
<html>

<head>
  <meta charset="UTF-8">
  <title>Login with Qrcode</title>
  <style>
    fieldset {
      display: none;
    }
  </style>
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- scanner -->
  <script src="scanner/vendor/modernizr/modernizr.js"></script>
  <script src="scanner/vendor/vue/vue.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- css -->
  <link rel="stylesheet" href="css/masuk.css">
  <!-- Link CDN font-awesome  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  <!--  CDN SWAL-->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body>

  <!-- scan -->
  <div id="app" class="box bg-dark text-white">
    <div class="sidebar">
      <ul>
        <li v-if="cameras.length === 0" class="empty">No cameras found</li>
        <li v-for="camera in cameras">
          <span v-if="camera.id == activeCameraId" :title="formatName(camera.name)" class="active"><input type="radio"
              class="align-middle mr-1" checked> {{ formatName(camera.name) }}</span>
          <span v-if="camera.id != activeCameraId" :title="formatName(camera.name)">
            <a @click.stop="selectCamera(camera)"> <input type="radio"
                class="align-middle mr-1">@{{ formatName(camera.name) }}</a>
          </span>
        </li>
      </ul>
      <div class="clearfix"></div>
      <!-- form scan -->
      <form action="" method="POST" id="myForm">
        <fieldset class="scheduler-border">
          <legend class="scheduler-border"> Scan Pada Box </legend>
          <input type="text" name="qrcode" id="code" autofocus>
          <input type="date" name="date">
        </fieldset>
      </form>

      <div class="title">
        <h4 class="bg-light text-dark">Absensi</h4>
        <h4 class="text-weight-bold">SCAN QRCODE DIBAWAH INI</h4>
      </div>


      <?php 
      
        if (!empty($_POST['qrcode'])){
          // 
          $qrcode = $_POST['qrcode'];
          $arr = explode("|", $qrcode);

          $id = $arr[0];

          error_reporting ( E_ALL & ~E_NOTICE);
          $username = $arr[1];
          $pass = $arr[2];


          // 
          $sql = "SELECT * FROM tb_user WHERE username ='$username' AND password='$pass' AND IsActive = 1";
          $resultSQL = mysqli_query($conn, $sql);
          $result = mysqli_fetch_array($resultSQL);

          
         if (mysqli_num_rows($resultSQL) > 0) {

          $_SESSION['id'] = $result['id'];
          
          $_SESSION['username'] = $result['username'];
          $_SESSION['level'] = $result['level_user'];
          $level_user = $_SESSION['level'];
          $username = $_SESSION['username'];
          $_SESSION['IsActive'] = TRUE;

          
          $rec = "INSERT INTO history_in (date_masuk, username, level_user) VALUES (now(), '$username', '$level_user')";
          $hasil = mysqli_query($conn, $rec);


          // alternatif alert JS
          // echo "
          //   <script>
          //       alert ('Absen Berhasil Bro');
          //   </script>";
          // 
          
          $berhasil = true;
          // echo '<script>
          // swal("Absen Berhasil!", "Selamat Berkerja :)", "success");
          // </script>';
         } else{
          echo '<script>
          swal("Data Tidak Ditemukan !", "Jangan berbohong :(", "error");
          </script>';
        }
         

        } 

      ?>

    </div>
    <div class="col-xs-12 preview-container camera">
      <video id="preview" class="thumbnail"></video>
    </div>


    <a href="tataUsaha/index.php" class="btn btn-light"><i class="fas fa-sign-in-alt mr-2"></i>Login</a>

    <div class="footer d-flex justify-content-center">
      <p>Created By &copy; Rachmat Fauzan</p>
    </div>
    
    <?php if( isset($berhasil)) : ?>
      <script>
        swal("Absen Berhasil!", "Selamat Berkerja <?= $username; ?> :) ", "success");
      </script>
    <?php endif; ?>

  </div>
  
  <!-- scanner -->
  <script src="scanner/js/app.js"></script>
  <script src="scanner/vendor/instascan/instascan.min.js"></script>
  <script src="scanner/js/scanner.js"></script>
</body>

</html>