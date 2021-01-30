<?php
// koneksi database
require'functions.php';

//cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST['submit'])){

    // cek apakah data berhasil ditambahkan
    if(tambah($_POST) > 0){
        echo"
        <script>
        alert('Data Berhasil Di tambahkan');
        document.location.href= 'index.php';
        </script>
        ";
    }else {
        echo"
        <script>
        alert('Data Berhasil Di tambahkan');
        document.location.href= 'tambahData.php';
        </script>
        ";
    }

}

?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<a href="index.php">Kembali</a>
<h1>Tambah Data Siswa</h1>
<form action="" method="POST">
    <ul>
        <li><label for="nama">
    Nama :
    <input type="text" name="nama" id="nama" required>
</label></li>
        <li><label for="nis">
    NIS   :
    <input type="text" name="nis" id="nis" required>
</label></li>
        <li><label for="alamat" required>
    Alamat :
    <input type="text" name="alamat" id="alamat" required>
</label></li>
        <li><label for="tgllahir">
    Tanggal Lahir :
    <input type="text" name="tgllahir" id="tgllahir" required>
</label></li>
        <li><label for="telp">
    No.Telp :
    <input type="text" name="telp" id="telp" required>
</label></li>
    </ul>
<button type="submit" name="submit">Tambah Data</button>

</form>

</body>
</html>