<?php include "../lib/top-page.php"; ?>

<?php
$sql = mysqli_query($connect, "SELECT * FROM pegawai WHERE id='$_GET[id]'");
$tampil = mysqli_fetch_array($sql);
?>


<form action="" method="POST">
<table border="1" cellpadding="8" class="ubah">
    <th colspan="2"><h3> Ubah Data Pegawai </h3></th>
    <tr>
        <td width="120"> ID </td>
        <td> <input type="text" name="id" value="<?php echo $tampil['id']; ?>"> </td>
    </tr>
    <tr>
        <td> Nama </td>
        <td> <input type="text" name="nama" value="<?php echo $tampil['nama']; ?>"> </td>
    </tr>
    <tr>
        <td> Jabatan </td>
        <td> <input type="text" name="idjab" value="<?php echo $tampil['idjab']; ?>"> </td>
    </tr>
    <tr>
        <td> Lahir </td>
        <td> <input type="text" name="lahir" value="<?php echo $tampil['lahir']; ?>"> </td>
    </tr>
    <tr>
        <td> Alamat </td>
        <td> <textarea rows="5" name="alamat"> <?php echo $tampil['alamat']; ?></textarea></td>
    </tr>
    <tr class="btn-submit">
        <td colspan="2"> <input type="submit" value="Ubah Data" name="ubah"> </td>
    </tr>
</table>
</form>

<?php

if(isset($_POST['ubah'])){
    mysqli_query($connect, "UPDATE pegawai SET
    id = '$_POST[id]',
    nama = '$_POST[nama]',
    idjab = '$_POST[idjab]',
    lahir = '$_POST[lahir]',
    alamat = '$_POST[alamat]' WHERE id='$_GET[id]'");

    echo "<script>alert('Data berhasil diubah');document.location='pegawai-tampil.php'</script>";
}
?>