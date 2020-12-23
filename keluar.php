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

  <!-- Bootstrap4 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- css -->
  <link rel="stylesheet" href="css/night.css">
  <!-- Link CDN font-awesome  -->
  <link rel="stylesheet" href="font-awesome/fa/css/all.css">
  <!--  CDN SWAL-->
  <script src="swal2/dist/sweetalert2.min.js"></script>
  <link rel="stylesheet" href="swal2/dist/sweetalert2.min.css">

  <link rel="stylesheet" href="sweetalert2.min.css">
  <link rel="icon" href="img/TFME.jpg">

</head>

<body>

  <!-- scan -->
  <div id="app" class="box  text-white" style="width: 100%; height: 100vh;">
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
        <h4 class="text-white">Check-out attendance<i class="fas fa-moon ml-4"></i></h4>
        <h6 class="text-weight-bold">Scan the QRCODE below<i class="fas fa-level-down-alt ml-2"></i></h6>
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
          date_default_timezone_set('Asia/Jakarta');
          $tgl = date('d-m-Y');


          // 
          $sql = "SELECT * FROM tb_user WHERE username ='$username' AND password='$pass' AND IsActive = 1";
          $resultSQL = mysqli_query($conn, $sql);
          $result = mysqli_fetch_array($resultSQL);

          
         if (mysqli_num_rows($resultSQL) > 0) {

          $_SESSION['id'] = $result['id'];
          
          $_SESSION['username'] = $result['username'];
          $_SESSION['level'] = 
          $_SESSION['dateOut'] = $result ['dateCheckout'];

          $id = $_SESSION['id'];
          $date = $_SESSION ['dateOut'];
          
          $result['level_user'];
          $level_user = $_SESSION['level'];
          $username = $_SESSION['username'];
          $_SESSION['IsActive'] = TRUE;

          // $cek = "SELECT * FROM history_out ORDER BY id_out DESC";
          // $hasilCek = mysqli_query($conn, $cek);
          // $hasil = mysqli_fetch_array($hasilCek);

          // $userGanda = $hasil['username'];

          // if ( $userGanda == $username){
          //   // echo "
          //   //  <script>
          //   //     alert ('Failed');
          //   //     window.location = 'index.php';
          //   //  </script>";

          //   echo '<script>
          //     swal.fire("Data Redundant ! ", ":(", "error");
          //   </script>';
          //   echo ' <script type="text/javascript">
          //     setTimeout(function(){window.top.location="keluar.php"} , 2000);
          //    </script>';
            
          //    die;

          // }
          $cek = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = '$id'");
          $resultCek = mysqli_fetch_array($cek);
          
          $id_db = $resultCek['id'];
          $dateIN = date_create($resultCek['dateCheckout']);
          $tgl_db = date_format($dateIN, 'd-m-Y');

          if($tgl == $tgl_db){
            echo '<script>
             swal.fire("You Have Absence Today ! ", ":(", "warning");
              </script>';
             echo ' <script type="text/javascript">
               setTimeout(function(){window.top.location="keluar.php"} , 2000);
             </script>';
            die;
          }

          

          // Update data table user
          $query =  mysqli_query($conn, "UPDATE tb_user SET dateCheckout = now() WHERE username = '$username' ");
          

          $rec = "INSERT INTO history_out (date_out, username, level_user) VALUES (now(), '$username', '$level_user')";
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
          swal.fire ("Data Tidak Ditemukan !", "Jangan berbohong :(", "error");
          </script>';
        }
         

        } 

      ?>

    </div>
    <div class="col-xs-12 preview-container camera">
      <video id="preview" class="thumbnail"></video>
    </div>


    <a href="tataUsaha/index.php" class="btn btn-light"><i class="fas fa-sign-in-alt mr-2"></i>Login</a>
    <a href="index.php" class="btn btn-light"><i class="fas fa-qrcode mr-2"></i>Check-in attendance</a>
    <div class="footer d-flex justify-content-center">
      <p>Created By &copy; Rachmat Fauzan</p>
    </div>
    
    <div class="photo">
        <img src="img/tfme.jpg" alt="TFME Photo">
        <img src="img/poltek.png" alt="poltek" class="poltek">
    </div>

    <?php if(isset($berhasil)) : ?>
        <script>
        swal.fire("Check-out Completed", "Thank You <?= $username; ?> :) ", "success");
        </script>
        <!-- voice -->
        <audio autoplay>
            <source src="voice/thanks.mp3" type="audio/mpeg">
        </audio>
        <script type="text/javascript">
          setTimeout(function () {
            window.top.location = "keluar.php"
          }, 3500);
        </script>
    <?php endif; ?>

   

  </div>

  <!-- scanner -->
  <script src="scanner/js/app.js"></script>
  <script src="scanner/vendor/instascan/instascan.min.js"></script>
  <script src="scanner/js/scanner.js"></script>

</body>

</html>