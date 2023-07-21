<?php
//koneksi ke database
$host = "localhost";
$username = "root";
$password = "";
$database = "tugasjwd";
$db = mysqli_connect($host, $username, $password, $database);


function query($query)
{
    global $db;

    //ambil data (fetch) ada dua parameter
    $result = mysqli_query($db, $query);

    //siapkan array kosong untuk menammpung nilai nya
    $rows = [];

    //loop
    while ($row = mysqli_fetch_assoc($result)) {
        //masukan data nya ke dalam array
        $rows[] = $row;
    }
    //kembalikan nilai nya supaya bisa ditampilkan
    return $rows;
}

function tambah($data)
{
    global $db;

    $judul = htmlspecialchars($data["judul"]);
    $pengarang = htmlspecialchars($data["pengarang"]);
    $tahunTerbit = htmlspecialchars($data["tahun_terbit"]);
    $isbn = htmlspecialchars($data["isbn"]);

    $query = "          INSERT INTO buku 
            (`id`,`judul`,`pengarang`,`tahun_terbit`,`isbn`)
                            VALUES 
            (NULL,'$judul','$pengarang','$tahunTerbit','$isbn')";

    mysqli_query($db, $query);


    return mysqli_affected_rows($db);
}

function hapus($id)
{
    global $db;

    mysqli_query($db, "DELETE FROM buku WHERE `buku`.`id` = $id");
    return  mysqli_affected_rows($db);
}

function update($data)
{
    global $db;
    $id = $data["id"];
    $judul = htmlspecialchars($data["judul"]);
    $pengarang = htmlspecialchars($data["pengarang"]);
    $tahun_terbit = htmlspecialchars($data["tahun_terbit"]);
    $isbn = htmlspecialchars($data["isbn"]);

    // query insert data 
    $query = "UPDATE buku SET 
                    judul = '$judul',
                    pengarang = '$pengarang',  
                    tahun_terbit = '$tahun_terbit',
                    isbn = '$isbn'
                    WHERE id = $id ";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
