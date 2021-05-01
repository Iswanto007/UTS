<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pemantauan Covid</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
</head>

<style>
    body{
        font-family: 'Poppins', sans-serif;
    }
    table {
        margin-left: auto;
        margin-right: auto;
    }

    table,
    th,
    td {
        border: 2px solid;
        color : #03a9f4;
        border-collapse: collapse;
        text-align: center;
    }
</style>

<?php
$hariIni = new DateTime();
if (isset($_POST['submit'])) {
    $wil = $_POST['wilayah'];
    $pstf = $_POST['pstf'];
    $rwt = $_POST['rwt'];
    $smbh = $_POST['smbh'];
    $mnggl = $_POST['mnggl'];
    $mahasiswa = $_POST['oprtr'];
    $nim = $_POST['nim'];
}

?>

<body>
    <h1 style="text-align: center;">DATA PEMANTAUAN COVID-19 WILAYAH <?= $wil ?></h1>
    <h2 style="text-align: center;">Per <?= $hariIni->format('d F Y H:i:s') ?></h2>
    <h3 style="text-align: center;"><?= $mahasiswa ?> / <?= $nim ?></h3>

    <table style="width:50%">
        <tr>
            <th>Positif</th>
            <th>Dirawat</th>
            <th>Sembuh</th>
            <th>Meninggal</th>
        </tr>
        <tr>
            <td><?= number_format($pstf,2,",",".")?></td>
            <td><?= number_format($rwt,2,",",".")  ?></td>
            <td><?= number_format($smbh,2,",",".") ?></td>
            <td><?=number_format($mnggl,2,",",".")?></td>
        </tr>
    </table>
</body>

</html>