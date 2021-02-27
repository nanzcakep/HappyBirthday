<?php

if (!isset($_POST["nama"])) {
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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Satisfy', cursive;
        }

        .button {
            background-color: red;
            /* Green */
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
        }

        .button3 {
            background-color: white;
            color: black;
            border: 2px solid #f44336;
        }

        .button3:hover {
            background-color: #f44336;
            color: white;
        }

        a {
            text-align: center;
            text-decoration: none;
            color: white;
        }
    </style>
</head>

<body>
    <h1>Hey Teruntuk Kamu Yang beranama "<?= $_POST["nama"]; ?>" ada surat dari saya tolong di buka yah :)</h1>
    <div class="button" class="butoon3" style="text-align: center;">
        <a href="pesan.php?nama=<?= $_POST["nama"] ?>">BUKA SURAT</a>
    </div>
</body>

</html>