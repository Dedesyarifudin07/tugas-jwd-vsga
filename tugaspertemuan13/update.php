<?php

require "functions.php";

$id = $_GET["id"];

$siswa = query("SELECT * FROM siswa WHERE id = $id");


if (isset($_POST["submit"])) {
    if (update($_POST) > 0) {
        echo "Selamat Data Anda Berhasil Di ubah";
        // header('location:index.php');
    } else {
        echo "<script>
        alert('maaf data anda gagal di ubah');
        document.location.href='update.php';
        </script>";
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
    <h3 class="mb-5 text-center mt-5">Formulir pendaftaran Siswa Baru</h3>

    <form class="w-50 m-auto" action="" method="post">
        <?php foreach ($siswa as $row) : ?>
            <div class="mb-3 mx-5 name">
                <input type="hidden" value="<?= $id; ?>" name="id"><br>
                <label class="form-label " for="nama">Nama :</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $row["nama"]; ?>">
            </div>
            <div class="mb-3 mx-5 alamat">
                <label class="form-label " for="alamat">Alamat :</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="5"><?= $row["alamat"] ?></textarea>
            </div>
            <div class="mb-3 mx-5 jenisKelamin">
                <label class="form-label " for="gender">Jenis Kelamin :</label>
                <input type="radio" name="jenis_kelamin" value="laki-laki" <?php if ($row["jenis_kelamin"] == "laki-laki") echo "checked"; ?>>Laki -laki </input>
                <input type="radio" name="jenis_kelamin" value="perempuan" <?php if ($row["jenis_kelamin"] == "perempuan") echo "checked"; ?>>Perempuan</input>
            </div>
            <div class="mb-3 mx-5 agama">
                <label class="form-select-lg " for="agama">agama :</label>
                <select name="agama" class="form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option value="<?= $row["agama"] ?>" selected><?= $row["agama"] ?></option>
                    <option value="Islam"> Islam</option>
                    <option value="Kristen"> Kristen</option>
                    <option value="Hindu"> Hindu</option>
                    <option value="Budha"> Budha</option>
                    <option value="Konghuchu"> Konghuchu</option>
                </select>
            </div>
            <div class="mb-3 mx-5 sekolah">
                <label class="form-label " for="sekolah">Asal sekolah :</label>
                <input type="text" class="form-control" id="sekolah" name="asal_sekolah" placeholder="" value="<?= $row["asal_sekolah"] ?> ">
            </div>
            <button type="submit" class="btn btn-primary  mx-5 text-center" name="submit">simpan</button>
        <?php endforeach; ?>
    </form>
</body>

</html>