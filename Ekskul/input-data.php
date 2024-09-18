<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak</title>
    <style>
        body {
            font-family: Arial, Geneva, Tahoma, sans-serif;
            margin: 0;
            padding: 0;
            margin-top: 50px;
            background-color: #8DA69F;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #F2F2F2;
            border-radius: 5px;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            padding-left: 10px;
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        input, select, textarea {
            width: 95%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 14px;
        }
        button {
            background-color: #74A12E;
            color: #ffffff;
            border: none;
            border-radius: 3px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 14px;
        }
        button:hover {
            background-color: #577923;
        }

        h3 {
            text-align: center;
            margin-top: 8px;
            font-weight: 800;
            
        }
    </style>
</head>
<body>
    <form action="simpan-data.php" method="post">
        <h3>Formulir Data</h3>
        <label for="nama">Nama ekskul:</label>
        <input type="text" id="nama" name="nama" placeholder="Masukkan nama ekskul...">
        
        <label for="hari">Hari:</label>
        <select name="hari" id="hari">
        <option value="Senin">Senin</option>
        <option value="Selasa">Selasa</option>
        <option value="Rabu">Rabu</option>
        <option value="Kamis">Kamis</option>
        <option value="Jumat">Jum'at</option>
        <option value="Sabtu">Sabtu</option>
        <option value="Minggu">Minggu</option>
        </select>

        <label for="mulai">Mulai:</label>
        <input type="time" id="mulai" name="mulai" placeholder="Masukkan jam mulai kegiatan...">
        
        <label for="berakhir">Berakhir:</label>
        <input type="time" id="berakhir" name="berakhir" placeholder="Masukkan jam berakhir kegiatan...">
        
        <label for="total_siswa">Total Siswa:</label>
        <input type="number" name="total_siswa" id="total_siswa">
        
        <label for="deskripsi">Deskripsi:</label>
        <textarea id="deskripsi" name="deskripsi" placeholder="Masukkan deskripsi kegiatan..." cols="30" rows="10"></textarea>
        
        <button type="submit">Submit</button>
    </form>

    
</body>
</html