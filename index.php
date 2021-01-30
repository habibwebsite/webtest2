<?php 

require'functions.php';

$siswa = query("SELECT * FROM tblsiswa");


?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Data Siswa</h1>


<a href="tambahData.php">Tambah Data</a>
<br><br>
<table border="1" cellspacing="0" cellpadding="10"> 
<tr>

<td>No.</td>
<td>Nama</td>
<td>NIS</td>
<td>Alamat</td>
<td>Tanggal Lahir</td>
<td>No.Telp</td>
<td>Aksi</td>

</tr>

<?php $i = 1;  ?> 
<?php  foreach($siswa as $row) : ?> 

<tr>
<td><?= $i; ?></td>
<td><?= $row["nmsiswa"]; ?></td>
<td><?= $row["nis"]; ?></td>
<td><?= $row["alamat"]; ?></td>
<td><?= $row["tgllahir"]; ?></td>
<td><?= $row["telp"]; ?></td>
<td>
<a href="ubahData.php?id=<?=$row["id"];?>"onclick="return confirm('Apakah anda yakin untuk mengubah data ini?');">Ubah</a> |
<a href="hapusData.php?id=<?=$row["id"];?>"onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');">Hapus</a>
</td>
</tr>
<?php $i++; ?> 
<?php endforeach; ?> 
</table>


</body>
</html>