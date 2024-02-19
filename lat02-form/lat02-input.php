<h3>INPUT DATA KARYAWAN</h3>
<form action="" method="post">
<table>
    <tr>
        <td>NIK</td>
        <td><input type="text" name="nik" size="5"></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td><input type="text" name="nama" size="30"></td>
    </tr>
    <tr>
        <td>Jabatan</td>
        <td><input type="text" name="jabatan" size="30"></td>
    </tr>
    <tr>
        <td valign="top">Alamat</td>
        <td><textarea name="alamat" id="" cols="30" rows=""></textarea></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="proses" value="Simpan">
        <input type="reset" value="Reset"></td>
    </tr>
</table>
</form>

<?php 
    if(isset($_POST['proses'])){
        $nik = $_POST['nik'];
        $nama = $_POST['nama'];
        $jabatan = $_POST['jabatan'];
        $alamat = $_POST['alamat'];

        echo "
        NIK = $nik<br>
        Nama = $nama<br>
        Jabatan = $jabatan<br>
        Alamat = $alamat<br>
        ";
    }
?>

