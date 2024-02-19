<?php 

include "koneksi.php"?>
<h3>Daftar project</h3>
<p><a href="project-tambah.php">Tambah Project</a></p>
<br>
<table border="1" width="800">
    <tr>
        <th width="50">No</th>
        <th width="300">Nama Project</th>
        <th width="100">Waktu</th>
        <th width="100">Biaya</th>
        <th width="150">Pelaksana</th>
        <th colspan="2">Aksi</th>
    </tr>
    <?php
    $no = 1;
    $sql = mysqli_query($koneksi, "SELECT * from project, pegawai WHERE 
                        project.pegawai_id = pegawai.id ORDER by project_id ASC"); //query manggil data
    while($data = mysqli_fetch_array($sql)){
    ?>
    <tr>
        <td align="center"><?php echo $no;?></td>
        <td align="center"><?php echo $data['nama_project'];?></td>
        <td><?php echo $data ['tanggal'];?></td>
        <td align="center"><?php echo $data ['biaya'];?></td>
        <td><?php echo $data ['nama'];?></td>
        <td align="center"><a href="project_ubah.php?id=<?= $data['project_id']; ?>">ubah</a></td>
        <td align="center"><a href="?id=<?php echo $data['project_id'];?>" 
        onclick="return confirm('Yakin menghapus data ?')"><b>Hapus</b></a></td>
    </tr>
        <?php $no++;}?>
</table>

<?php 
    // Hapus data
    if(isset($_GET['id'])){
        mysqli_query($koneksi, "DELETE FROM project WHERE project_id='$_GET[id]'");
        header("location: project-tampil.php");
    }
?>