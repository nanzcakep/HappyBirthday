<?php

if (!isset($_GET["nama"])) {
    echo " <script>
    alert('SILAHKAN ISI NAMA DULU');
    document.location.href = 'index.php';
  </script>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style2.css">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">

</head>

<div id="player">
    <audio controls autoplay hidden>
        <source src="audio/hbd.mp3" type="audio/mpeg">
    </audio>
</div>

<form action="" method="get">
    <div class="paper">
        <div class="paper-content">
            <textarea autofocus class="animasi-teks"><?= date('d-m-Y'); ?> &#10;Hallo, <?= $_GET["nama"]; ?>! &#10;Terimakasih Telah Membuka Surat Ini , Untuk Kamu yang bernama  <?= $_GET["nama"]; ?> yang sedang berulang tahun hari ini , aku cuma mau bilang HAPPY BIRTHDAY yah, Semoga doa nya dikabulkan yang baik baik kalo yang buruk mah jangan , dan pesan untukmu semoga ,di umur yang sekarang, kamu sudah tidak menjadi BEBAN KELUARGA Lagi HEHEHEHEH</textarea>
        </div>
    </div>
</form>

</html>