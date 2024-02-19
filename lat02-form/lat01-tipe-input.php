<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perancangan Form</title>
</head>
<body>
    <h1>Perancangan Form</h1>
    <h3>1. Field Text</h3>
    Nama : <input type="text" size="20">

    <h3>2. Combo Box</h3>
    <select name="pekerjaan" id="">
        <option value="">--Pilih--</option>
        <option value="PNS">PNS</option>
        <option value="Karyawan">Karyawan</option>
        <option value="Wiraswasta">Wiraswasta</option>
    </select>

    <h3>3. Radio Button</h3>
    <input type="radio" name="jenkel" value="pria">Pria
    <input type="radio" name="jenkel" value="Wanita">Wanita

    <h3>4. Checkbox</h3>
    <input type="checkbox" name="keahlian" value="web programming">
    Web Programming<br>
    <input type="checkbox" name="keahlian" value="Sistem Operasi">
    Sistem Operasi<br>
    <input type="checkbox" name="keahlian" value="Networking">
    Networking

    <h3>5. Textarea</h3>
    <textarea name="alamat" id="" cols="20" rows="2"></textarea>

    <h3>6. Submit dan Reset</h3>
    <input type="submit" name="simpan" value="Simpan">
    <input type="reset" name="reset" value="Reset">

    <h3>7. Insert Image / Menyisipkan Gambar</h3>
    <img src="./img/ukhty.jpg" alt="" width="150" heigth="150">

    <h3>8. Link / Menyisipkan link halaman</h3>
    <a href="lat02-inputdata.php">Pindah</a>

    <h3>9. Font Setting</h3>
    <font size="1" face="arial">Font dengan ukuran 2</font>
    <b>Font dengan di bold</b>
    <i>Font dengan huruf miring</i>
    <u>Font dengan underline</u></body>
</html>