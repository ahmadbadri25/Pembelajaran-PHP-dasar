<?php 
// koneksi database
$conn = mysqli_connect("localhost", "root", "", "r66");

function query($query) {
    global $conn; 
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

// tambah
function tambah($data){
    global $conn;

    // ambil data dari tiap elemen dalam form
    $Npm = htmlspecialchars($data["Npm"]);
    $Nama = htmlspecialchars($data["Nama"]);
    $Telp = htmlspecialchars($data["Telp"]);
    $Email = htmlspecialchars($data["Email"]);
    $Alamat = htmlspecialchars($data["Alamat"]);
    $TempatLahir = htmlspecialchars($data["TempatLahir"]);
    $TglLahir = htmlspecialchars($data["TglLahir"]);
    $JenisKelamin = htmlspecialchars($data["JenisKelamin"]);
    $Agama = htmlspecialchars($data["Agama"]);
    $Prodi = htmlspecialchars($data["Prodi"]);

    // query insert data
    $query = "INSERT INTO t_biodata VALUES('','$Npm','$Nama', '$Telp', '$Email', '$Alamat', '$TempatLahir',
    '$TglLahir','$JenisKelamin', '$Agama', '$Prodi')";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// query hapus
function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM t_biodata WHERE id = $id"); 
    return mysqli_affected_rows($conn);
}




?>