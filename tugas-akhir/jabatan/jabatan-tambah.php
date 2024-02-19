<?php include "../lib/top-page.php"; ?>


<form action="" method="POST">
<table border="1" cellpadding="10" class="tambah">
    <th colspan="2"><h3> Tambah Jabatan</h3></th>
    <tr>
        <td width="150"> Nama Jabatan</td>
        <td> <input type="text" name="nama_jabatan"> </td>
    </tr>
    <tr class="btn-submit">
        <td colspan="2"> <input type="submit" value="Simpan" name="save"> </td>
    </tr> 
</table>
</form>

<?php

if(isset($_POST['save'])){
    mysqli_query($connect, "INSERT INTO jabatan SET
    nama_jabatan = '$_POST[nama_jabatan]'");

    echo "<script>alert('Data berhasil ditambah');document.location='jabatan-tampil.php'</script>";
}
?>