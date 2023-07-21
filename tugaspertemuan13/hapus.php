<?php

require 'functions.php';
$id = $_GET["id"];

if (hapus($id) > 0) {

    echo "<script>
    alert('data anda berhasil diubah')
    window.location.href='Pendaftar.php'

    </script>";
} else {
    echo "Data Gagal Di hapus";
}
