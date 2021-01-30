<?php
// koneksi database
require'functions.php';

// ambil data id dari URL
$id = $_GET["id"];

//query data siswa berdasarkan id
$siswa = query("SELECT * FROM tblsiswa WHERE id =$id")[0];



//cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST['submit'])){

    // cek apakah data berhasil diubah
    if(ubah($_POST) > 0){
        echo"
        <script>
        alert('Data Berhasil Di ubah');
        document.location.href= 'index.php';
        </script>
        ";
    }else {
        echo"
        <script>
        alert('Data Gagal Di ubah');
        document.location.href= 'ubahData.php';
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
<h1>Ubah Data Siswa</h1>
<form action="" method="POST">
<input type="hidden" name="id" value="<?= $siswa["id"];?>">
    <ul>
        <li><label for="nama">
    Nama :
    <input type="text" name="nama" id="nama" required value="<?= $siswa["nmsiswa"]; ?>">
</label></li>
        <li><label for="nis">
    NIS   :
    <input type="text" name="nis" id="nis"required value="<?= $siswa["nis"]; ?>">
</label></li>
        <li><label for="alamat">
    Alamat :
    <input type="text" name="alamat" id="alamat"required value="<?= $siswa["alamat"]; ?>">
</label></li>
        <li><label for="tgllahir">
    Tanggal Lahir :
    <input type="text" name="tgllahir" id="tgllahir"required value="<?= $siswa["tgllahir"]; ?>">
</label></li>
        <li><label for="telp">
    No.Telp :
    <input type="text" name="telp" id="telp"required value="<?= $siswa["telp"]; ?>">
</label></li>
    </ul>
<button type="submit" name="submit">Ubah Data</button>

</form>

</body>
</html>