<?php include "../lib/top-page.php"; ?>


<form action="" method="POST">
<table border="1" cellpadding="10" class="tambah">
    <th colspan="2"><h3> Tambah Data Pegawai</h3></th>
    <tr>
        <td width="100"> Nama </td>
        <td> <input type="text" name="nama"> </td>
    </tr>
    <tr>
        <td> Jabatan</td>
        <td> <select name="idjab" required>
        <option value=""> ---- </option>
        <?php
        $sql=mysqli_query($connect, "SELECT * FROM jabatan ORDER by id_jabatan ASC");
        while($data = mysqli_fetch_array($sql)){
            echo "<option value=$data[id_jabatan]> $data[nama_jabatan]</option>";
        }
        ?>
        </select> 
        </td>
    </tr>
    <tr>
        <td> Lahir </td>
        <td> <input type="text" name="lahir" placeholder="yyyy-mm-dd"> </td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td> <textarea rows="5" name="alamat"></textarea></td>
    </tr>
    <tr class="btn-submit">
        <td colspan="2"> <input type="submit" value="Simpan" name="save"> </td>
    </tr>
</table>
</form>

<?php

if(isset($_POST['save'])){
    mysqli_query($connect, "INSERT INTO pegawai SET
    nama = '$_POST[nama]',
    idjab = '$_POST[idjab]',
    lahir = '$_POST[lahir]',
    alamat = '$_POST[alamat]'");

    echo "<script>alert('Data berhasil disimpan');document.location='pegawai-tampil.php'</script>";
}
?>