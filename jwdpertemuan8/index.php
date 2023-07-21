<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
  <img src="images/jokowi.png" alt="" />
  <?php

  function hitungUmur($tahunLahir, $tahunSekarang)
  {
    $umur = $tahunSekarang - $tahunLahir;
    return $umur;
  }

  function perkenalan($nama, $salam = "selamat datang",)
  {
    echo $salam;
    echo "</br>";
    echo "perkenalkan nama saya " . $nama;
    echo "</br>";
    //memanggil fungsi lain
    echo "saya berusia " . hitungUmur(2005, 2023) . "tahun";
    echo "</br>";
    echo "senang berkenalan dengan anda";
  }
  //kirm parameter ke fungsi perkenalan
  perkenalan("dedesyarifudin");
  ?>
</body>

</html>