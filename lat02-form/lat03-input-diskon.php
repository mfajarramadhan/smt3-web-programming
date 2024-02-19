<h3>INPUT DATA PENJUALAN</h3>

<?php 
    error_reporting(0);
    if(isset($_POST['proses'])){
        $jumlah = $_POST['jumlah'];
        $harga = $_POST['harga'];
        $diskon = $_POST['diskon'] / 100;
        $hargadiskon = $jumlah *$harga * $diskon;
        $totalharga = $jumlah *$harga - $hargadiskon;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Diskon</title>
</head>
<body>
    <form action="" method="post">
    <table width="300">
        <tr>
            <td>Kode Transaksi</td>
            <td><input type="text" name="kode" size="10" 
            value="<?= $_POST['kode'] ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><select name="barang" id="">
                    <option value="<?= $_POST['barang'] ?>">
                    <?= $_POST['barang'] ?></option>
                    <option value="Monitor">Monitor</option>
                    <option value="Hardisk">Hardisk</option>
                    <option value="Motherboard">Motherboard</option>
            </select>
        </td>
        </tr>
        <tr>
            <td>Jumlah</td>
            <td><input type="text" name="jumlah" size="3" 
            value="<?= $_POST['jumlah'] ?>"></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="text" name="harga" size="15" 
            value="<?= $_POST['harga'] ?>"></td>
        </tr>
        <tr>
            <td>Diskon</td>
            <td><input type="text" name="diskon" size="5" 
            value="<?= $_POST['diskon'] ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan" name="proses">
                <input type="reset" value="Reset">
            </td>
        </tr>
        <tr>
            
        </tr>
        <tr>
            <td>Total Harga</td>
            <td><input type="text" name="totalharga" size="15" 
            value="<?= $totalharga ?>"></td>
        </tr>
    </table>
</form>
</body>
</html>