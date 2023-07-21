<?php

require 'functions.php';
$id = $_GET["id"];


$book = query("SELECT * FROM buku WHERE id = $id")[0];

//cek apakah tombol submit sudah ditekan
if (isset($_POST["submit"])) {
    if (update($_POST) > 0) {
        echo "Data Berhasil di ubah";
        header("location:index.php?status=sukses");
    } else {
        echo "<script> alert('maaf data anda gagal di update')</script>";
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>

    <h1 class="mb-5 text-center mt-5">Halaman tambah data Dede Syarifudin</h1>
    <form class="w-50 m-auto " method="post" action="">
        <div class="mb-3 mx-5 ">
            <input type="hidden" name="id" class="form-control" value="<?= $book["id"]; ?>">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" value=<?= $book["judul"]; ?> required>
        </div>
        <div class="mb-3 mx-5">
            <label for="pengarang" class="form-label">Pengarang</label>
            <input type="text" class="form-control" id="pengarang" name="pengarang" value=<?= $book["pengarang"]; ?> required>
        </div>
        <div class="mb-3 mx-5">
            <label for="tahun_terbit" class="form-label">Tahun terbit</label>
            <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit" value=<?= $book["tahun_terbit"]; ?> required>
        </div>
        <div class="mb-3 mx-5">
            <label for="isbn" class="form-label">Isbn</label>
            <input type="text" class="form-control" id="isbn" name="isbn" value=<?= $book["isbn"]; ?> required>
        </div>
        <button type="submit" class="btn btn-primary  mx-5 " name="submit">Submit</button>
    </form>
</body>

</html>