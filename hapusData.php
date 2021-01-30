<?php 
require 'functions.php';

//mengambil data yang mau dihapus
$id = $_GET["id"];

//hapus data menggunakan function
if( hapus($id) > 0){

    echo"
        <script>
        alert('Data Berhasil Di hapus');
        document.location.href= 'index.php';
        </script>
        ";

}else {
    echo"
        <script>
        alert('Data Gagal Di hapus');
        document.location.href= 'index.php';
        </script>
        ";
}

?> 
