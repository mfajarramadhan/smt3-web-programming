<?php  

include "koneksi.php";
$sql = mysqli_query($koneksi, "SELECT * FROM pegawai WHERE id='$_GET[id]'"); 
$data = mysqli_fetch_array($sql);
?>


<h3> Ubah Data Pegawai </h3>
<form action="" method="POST">
<table>
    <tr>
        <td width="120"> ID </td>
        <td> <input type="text" name="id" value="<?php echo $data['id']; ?>"> </td>
    </tr>
    <tr>
        <td> Nama </td>
        <td> <input type="text" name="nama" value="<?php echo $data['nama']; ?>"> </td>
    </tr>
    <tr>
        <td> Jabatan </td>
        <td> <input type="text" name="idjab" value="<?php echo $data['idjab']; ?>"> </td>
    </tr>
    <tr>
        <td> Lahir </td>
        <td> <input type="text" name="lahir" value="<?php echo $data['lahir']; ?>"> </td>
    </tr>
    <tr>
        <td> Nama </td>
        <td> <textarea rows="5" name="alamat"> <?php echo $data['alamat']; ?></textarea></td>
    </tr>
    <tr>
        <td></td>
    <td> <input type="submit" value="Ubah Data" name="ubah"> </td>
    </tr>
</table>
</form>

<?php
if(isset($_POST['ubah'])){
    mysqli_query($koneksi, "UPDATE pegawai SET
    id = '$_POST[id]',
    nama = '$_POST[nama]',
    idjab = '$_POST[idjab]',
    lahir = '$_POST[lahir]',
    alamat = '$_POST[alamat]' WHERE id='$_GET[id]'");
    echo "<script>alert('Data berhasil diubah');document.location='pegawai-tampil.php'</script>";
}
?>
    