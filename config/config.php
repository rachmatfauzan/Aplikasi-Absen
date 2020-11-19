<?php  
    
    // koneksi database
    $conn = mysqli_connect("localhost", "root", "", "absensi");


    if (!$conn) {
        die ("Database tidak ditemukan". mysqli_connect_error());
    }

?>