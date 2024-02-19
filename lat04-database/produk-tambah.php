

<h1>Tambah Produk</h1>

<form action="" method="post">
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <td width="150">Kode Produk</td>
            <td><input type="text" name="kode" id="kode" size="8"></td>
        </tr>
        <tr>
            <td>Nama Produk</td>
            <td><input type="text" name="nama" id="nama" size="30"></td>
        </tr>
        <tr>
            <td>Harga Produk</td>
            <td><input type="text" name="harga" id="harga" size="15"></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit" name="kirim">Submit</button></td>
        </tr>
    </table>
</form>
<?php  
include "koneksi.php";



if(isset($_POST["kirim"])){

        mysqli_query($koneksi, "INSERT INTO produk SET
        
        kode_produk = '$_POST[kode]',
        nama_produk = '$_POST[nama]',
        harga = '$_POST[harga]'");
 
    echo "Data telah tersimpan";
}
?>
        
