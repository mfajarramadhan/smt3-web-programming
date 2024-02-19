<?php include "../lib/top-page.php"; ?>

<form action="" method="POST">
<table border="1" cellpadding="10" class="tambah">
    <th colspan="2"><h3> Tambah Project</h3></th>
    <tr>
        <td width="150"> Nama Project</td>
        <td> <input type="text" name="nama_project"> </td>
    </tr>
    <tr>
        <td> Waktu Pelaksanaan </td>
        <td> <input type="DATE" name="tanggal"> </td>
    </tr>
    <tr>
        <td> Biaya Project </td>
        <td> <input type="text" name="biaya"> </td>
    </tr>
    <tr>
        <td> Pelaksana</td>
        <td> <select name="pegawai_id" required>
        <option value=""> ---- </option>
        <?php
        $sql=mysqli_query($connect, "SELECT * FROM pegawai ORDER by nama ASC");
        while($data = mysqli_fetch_array($sql)){
            echo "<option value=$data[id]> $data[nama]</option>";
        }
        ?>
        </select> 
        </td>
    </tr>
    <tr class="btn-submit">
        <td colspan="2"> <input type="submit" value="Simpan" name="save"> </td>
    </tr>
</table>
</form>

<?php

if(isset($_POST['save'])){
    mysqli_query($connect, "INSERT INTO project SET
    nama_project = '$_POST[nama_project]',
    tanggal = '$_POST[tanggal]',
    biaya = '$_POST[biaya]',
    pegawai_id = '$_POST[pegawai_id]'");

    echo "<h4>Data Berhasil disimpan</h4>";
    echo "<meta http-equiv='refresh' content='1; url=project-tampil.php'>";
}
?>