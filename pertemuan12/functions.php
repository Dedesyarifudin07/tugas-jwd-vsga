<?php
//koneksi ke database
$host = "localhost";
$username = "root";
$password = "";
$database = "tugasjwd";
$connect = mysqli_connect($host, $username, $password, $database);


function query($query)
{
    global $connect;

    $result = mysqli_query($connect, $query);

    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function tambah($data)
{
    global $connect;

    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $jenisKelamin = htmlspecialchars($data["jenis_kelamin"]);
    $agama = htmlspecialchars($data["agama"]);
    $asalSekolah = htmlspecialchars($data["asal_sekolah"]);


    $query = "       INSERT INTO siswa 
    (`id`,`nama`,`alamat`,`jenis_kelamin`,`agama`,`asal_sekolah`)
                    VALUES 
    (NULL,'$nama','$alamat','$jenisKelamin','$agama','$asalSekolah')";

    mysqli_query($connect, $query);

    return mysqli_affected_rows($connect);
}
