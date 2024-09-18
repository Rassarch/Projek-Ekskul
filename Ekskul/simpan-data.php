<?php
    include('koneksi.php');

    // mengambil input dari fom yang dikirim
    $nama = $_POST['nama'];
    $hari= $_POST['hari'];
    $mulai= $_POST['mulai'];
    $berakhir= $_POST['berakhir'];
    $total_siswa= $_POST['total_siswa'];      
    $deskripsi= $_POST['deskripsi'];


    if (empty($nama) || empty($hari) || empty($mulai) || empty($berakhir) || empty($total_siswa) || empty($deskripsi) ) {
        die('Harap di isi data nya le..');
    }

    // Membuat query untuk memasukkan data ke database
    $sql = "INSERT INTO ekskul(nama, hari, mulai, berakhir, total_siswa, deskripsi) VALUES ('$nama', '$hari', '$mulai', '$berakhir', '$total_siswa', '$deskripsi')";


    // Mengeksekusi query dengan sql
    $simpan = mysqli_query($conn, $sql);

    // Mengecek query
    if ($simpan) {
        echo "Data berhasil disimpan";
    } else {
        echo "Data gagal disimpan, error: ".mysqli_error($conn);
    }


    // menutup sql
    mysqli_close($conn);

    echo "<a href='input-data.php'>Kembali</a>";




































































































?>
