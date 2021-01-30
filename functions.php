<?php  
// koneksi database
$conn = mysqli_connect("localhost", "root", "", "dbsekolah");


// ambil data siswa dari tblsiswa
function query($query){
global $conn;

$result = mysqli_query($conn,$query);
$rows = [];

while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}

return $rows;

}

//tambah data
function tambah($data){
    global $conn;

    $nama =  htmlspecialchars($data["nama"]);
    $nis = htmlspecialchars($data["nis"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $tgllahir = htmlspecialchars($data["tgllahir"]);
    $telp = htmlspecialchars($data["telp"]);


    $query = "INSERT INTO tblsiswa 
                            VALUES
                            ('', '$nama', '$nis', '$alamat', 'tgllahir', '$telp')
                            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}


//hapus data
function hapus($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM tblsiswa WHERE id= '$id' ");
    return mysqli_affected_rows($conn);
}

//ubah data
function ubah($data){
global $conn;

    $id = $data["id"];
    $nama =  htmlspecialchars($data["nama"]);
    $nis = htmlspecialchars($data["nis"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $tgllahir = htmlspecialchars($data["tgllahir"]);
    $telp = htmlspecialchars($data["telp"]);


    $query = "UPDATE tblsiswa SET
                    nama = '$nama',
                    nis = '$nis',
                    alamat = '$alamat',
                    tgllahir = '$tgllahir',
                    telp = '$telp'
                    WHERE id = $id
                    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

?> 