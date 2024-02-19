<?php  

include "koneksi.php";

$sql = mysqli_query($koneksi, "SELECT * FROM project, pegawai WHERE 
                    project.pegawai_id = pegawai.id AND project_id = '$_GET[id]'");
$data = mysqli_fetch_array($sql);
?>


<h3> Update project </h3>
<form action="" method="POST">
<table>
    <tr>
        <td width="120"> Nama Project </td>
        <td> <input type="text" name="nama_project" value="<?php echo $data['nama_project']; ?>"> </td>
    </tr>
    <tr>
        <td> Waktu Pelaksanaan </td>
        <td> <input type="date" name="tanggal" value="<?php echo $data['tanggal']; ?>"> </td>
    </tr>
    <tr>
        <td> Biaya Project </td>
        <td> <input type="text" name="biaya" value="<?php echo $data['biaya']; ?>"> </td>
    </tr>
    <tr>
        <td> Pelaksana </td>
        <td> 
            <select name="pegawai_id" id="" required> 
                <option value="<?php echo $data['pegawai_id']; ?>"><?php echo $data['nama']; ?></option>
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
    mysqli_query($koneksi, "UPDATE project SET
    nama_project = '$_POST[nama_project]',
    tanggal = '$_POST[tanggal]',
    biaya = '$_POST[biaya]',
    pegawai_id = '$_POST[pegawai_id]' WHERE project_id='$_GET[id]'");
    echo "<script>
        alert('Data berhasil diubah');
        document.location='project-tampil.php';
        </script>";
}
?>
    