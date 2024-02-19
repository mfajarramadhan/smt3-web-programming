<?php include "../lib/top-page.php"; ?>

<?php 
$sql = mysqli_query($connect, "SELECT * FROM project, pegawai WHERE
project.pegawai_id = pegawai.id  AND project_id='$_GET[id]'"); //query manggil data
$data = mysqli_fetch_array($sql);

?>

<form action="" method="POST">
<table border="1" cellpadding="8" class="ubah">
    <th colspan="2"><h3> Ubah Data Project </h3></th>
    <tr>
        <td width="150"> Nama Project</td>
        <td> <input type="text" name="nama_project" size="50" value="<?php echo $data['nama_project'];?>"> </td>
    </tr>
    <tr>
        <td> Waktu Pelaksanaan </td>
        <td> <input type="DATE" name="tanggal" value="<?php echo $data['tanggal'];?>"> </td>
    </tr>
    <tr>
        <td> Biaya Project </td>
        <td> <input type="text" name="biaya" value="<?php echo $data['biaya'];?>"> </td>
    </tr> 
    <tr>
        <td> Pelaksana</td>
        <td> <select name="pegawai_id" required>
        <option value="<?php echo $data['pegawai_id'];?>"> <?php echo $data['nama'];?></option>
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
    mysqli_query($connect, "UPDATE project SET
    nama_project = '$_POST[nama_project]',
    tanggal = '$_POST[tanggal]',
    biaya = '$_POST[biaya]',
    pegawai_id = '$_POST[pegawai_id]' WHERE project_id='$_GET[id]'");

    echo "<h4>Data Berhasil diupdate</h4>";
    echo "<meta http-equiv='refresh' content='1; url=project-tampil.php'>";
}
?>