<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ekskul_db";
    
    
    // Untuk mengkoneksikan ke database
    $conn = mysqli_connect($servername, $username, $password, $dbname);


    // mengecek jika koneksi tidak terjadi
    if (!$conn) {
        die('Koneksi database gagal');
    }
?>