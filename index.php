<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Covid</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="form">
<h2>FORM DATA COVID-19</h2>
<div class="input">
<form action="db.php" method="POST">
    <div class="inputbox">
    <label for="wil">Nama Wilayah</label>
        <select id="wilayah" name="wilayah">
            <option value="DKI JAKARTA">DKI Jakarta</option>
            <option value="JAWA BARAT">Jawa Barat</option>
            <option value="BANTEN">Banten</option>
            <option value="JAWA TENGAH">Jawa Tengah</option>
        </select>
    </div>
    <div class="inputbox">
    <label for="pos">Jumlah Positif</label>
        <input type="text" name="pstf" required/>
    </div>
<div class="inputbox">
<label for="raw">Jumlah Dirawat</label>
        <input type="text" name="rwt" required/>
</div>
<div class="inputbox">
<label for="sem">Jumlah Sembuh</label>
        <input type="text" name="smbh" required/>
</div>
<div class="inputbox">
<label for="men">Jumlah Meninggal</label>
        <input type="text" name="mnggl" required/>
</div>
<div class="inputbox">
<label for="ope">Nama Operator</label>
        <input type="text" name="oprtr" required/>  
</div>
<div class="inputbox">
<label for="nim">NIM Mahasiswa</label>
        <input type="text" name="nim" required/>
</div>
<div class="sub">
<input type="submit" name="submit" value="Kirim Data">
</div>
</form>
</div>
</div>

</body>
</html>