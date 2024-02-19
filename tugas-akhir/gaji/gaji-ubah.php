<?php include "../lib/top-page.php"; ?>

<?php 
$sql = mysqli_query($connect, "SELECT * FROM gaji, pegawai WHERE
gaji.id = pegawai.id  AND id_gaji='$_GET[id]'"); //query manggil data
$data = mysqli_fetch_array($sql);

?>

<form action="" method="POST">
<table border="1" cellpadding="8" class="ubah">
    <th colspan="2"><h3> Ubah Data Gaji </h3></th>
    <tr>
        <td width="150"> ID Gaji</td>
        <td> <input type="text" name="id_gaji" size="50" value="<?php echo $data['id_gaji'];?>" disabled> </td>
    </tr>
    <tr>
        <td> Bulan </td>
        <td> <input type="text" name="bulan" value="<?php echo $data['bulan'];?>"> </td>
    </tr>
    <tr>
        <td> Tahun </td>
        <td> <input type="text" name="tahun" value="<?php echo $data['tahun'];?>"> </td>
    </tr>
    <tr>
        <td width="150"> Total Gaji</td>
        <td> <input type="text" name="total_gaji" size="50" value="<?php echo $data['total_gaji'];?>"> </td>
    </tr>
    <tr>
        <td> ID Pegawai</td>
        <td> <select name="id" required>
        <option value="<?php echo $data['id'];?>"> <?php echo $data['nama'];?></option>
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
    mysqli_query($connect, "UPDATE gaji SET
    id = '$_POST[id]',
    bulan = '$_POST[bulan]',
    tahun = '$_POST[tahun]',
    total_gaji = '$_POST[total_gaji]' WHERE id_gaji='$_GET[id]'");

    echo "<h4>Data Berhasil diupdate</h4>";
    echo "<meta http-equiv='refresh' content='1; url=gaji-tampil.php'>";
}
?>