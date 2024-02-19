<?php  

include "koneksi.php";
?>


<h3> Tambah project </h3>
<form action="" method="POST">
<table>
    <tr>
        <td width="120"> Nama Project </td>
        <td> <input type="text" name="nama_project" size="50"> </td>
    </tr>
    <tr>
        <td> Waktu Pelaksanaan </td>
        <td> <input type="date" name="tanggal"> </td>
    </tr>
    <tr>
        <td> Biaya Project </td>
        <td> <input type="text" name="biaya"> </td>
    </tr>
    <tr>
        <td> Pelaksana </td>
        <td> 
            <select name="pegawai_id" id="" required> 
                <option value=""> -------- </option>
                <?php 
                $sql = mysqli_query($koneksi, "SELECT * FROM pegawai ORDER by nama ASC");
                while($data = mysqli_fetch_array($sql)){
                    echo "<option value=$data[id]> $data[nama]</option>";
                }
                ?>
            </select>    
        </td>
    </tr>
    <tr>
        <td></td>
    <td> <input type="submit" value="Simpan" name="save"> </td>
    </tr>
</table>
</form>

<?php
if(isset($_POST['save'])){
    mysqli_query($koneksi, "INSERT INTO project SET
    nama_project = '$_POST[nama_project]',
    tanggal = '$_POST[tanggal]',
    biaya = '$_POST[biaya]',
    pegawai_id = '$_POST[pegawai_id]'");
    echo "<script>
        alert('Data berhasil disimpan');
        document.location='project-tampil.php';
        </script>";
}
?>
    