<?php include "../lib/top-page.php"; ?>

<?php
$sql = mysqli_query($connect, "SELECT * FROM jabatan WHERE id_jabatan='$_GET[id]'");
$tampil = mysqli_fetch_array($sql);
?>


<form action="" method="POST">
<table border="1" cellpadding="8" class="ubah">
    <th colspan="2"><h3> Ubah Data Jabatan </h3></th>
    <tr>
        <td width="120"> ID Jabatan</td>
        <td> <input type="text" name="id_jabatan" value="<?php echo $tampil['id_jabatan']; ?>" disabled> </td>
    </tr>
    <tr>
        <td> Nama Jabatan</td>
        <td> <input type="text" name="nama_jabatan" value="<?php echo $tampil['nama_jabatan']; ?>"> </td>
    </tr>
    <tr class="btn-submit">
        <td colspan="2"> <input type="submit" value="Ubah Data" name="ubah"> </td>
    </tr>
</table>
</form>

<?php

if(isset($_POST['ubah'])){
    mysqli_query($connect, "UPDATE jabatan SET
    nama_jabatan = '$_POST[nama_jabatan]' WHERE id_jabatan='$_GET[id]'");

    echo "<script>alert('Data berhasil diubah');document.location='jabatan-tampil.php'</script>";
}
?>