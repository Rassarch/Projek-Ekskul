<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kontak</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #8DA69F;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            width: 80%;
            max-width: 1200px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            box-sizing: border-box;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 0 auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(16px) saturate(180%);
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #74A12E;
            color: white;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        h4 {
            color: #74A12E;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
            include('koneksi.php'); // Pastikan koneksi berhasil

            // Query untuk mengambil data
            $query = "SELECT * FROM ekskul";
            $hasil = mysqli_query($conn , $query);
        
            // Inisialisasi variabel $cek untuk mengecek jumlah baris
            $cek = mysqli_num_rows($hasil);
        ?>

        <?php if($cek > 0): ?>
            <table>
                <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Hari</th>
                    <th>Mulai</th>
                    <th>Berakhir</th>
                    <th>Total siswa</th>
                    <th>Deskripsi</th>
                </tr>
                <?php
                $hasil_data = mysqli_fetch_all($hasil, MYSQLI_ASSOC);
                foreach($hasil_data as $ekskul):
                ?>
                <tr>
                    <td><?php echo $ekskul['id']?></td>
                    <td><?php echo $ekskul['nama']?></td>
                    <td><?php echo $ekskul['hari']?></td>
                    <td><?php echo $ekskul['mulai']?></td>
                    <td><?php echo $ekskul['berakhir']?></td>
                    <td><?php echo $ekskul['total_siswa']?></td>
                    <td><?php echo $ekskul['deskripsi']?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        <?php else: ?>
            <h4>Data tidak ditemukan</h4>
        <?php endif; ?>
    </div>
</body>
</html>