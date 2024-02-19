<?php 

include "koneksi.php"?>
<h3>Daftar Pegawai</h3>
<table border="1" width="800">
    <tr>
        <th>No</th>
        <th>ID</th>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>Lahir</th>
        <th>Alamat</th>
        <th colspan="2">Aksi</th>
    </tr>
    <?php
    $no=1;
    $sql=mysqli_query($koneksi, "SELECT * from pegawai ORDER by id ASC"); //query manggil data
    while($data = mysqli_fetch_array($sql)){
    ?>
    <tr>
        <td align="center"><?php echo $no;?></td>
        <td align="center"><?php echo $data['id'];?></td>
        <td><?php echo $data ['nama'];?></td>
        <td align="center"><?php echo $data ['idjab'];?></td>
        <td><?php echo $data ['lahir'];?></td>
        <td><?php echo $data ['alamat'];?></td>
        <td align="center"><a href="pegawai-ubah.php?id=<?= $data['id']; ?>">ubah</a></td>
        <td align="center"><a href="?id=<?php echo $data['id'];?>" 
        onclick="return confirm('Yakin menghapus data ?')"><b>Hapus</b></a></td>
    </tr>
        <?php $no++;}?>
</table>

<?php 
    // Hapus data
    if(isset($_GET['id'])){
        mysqli_query($koneksi, "DELETE FROM pegawai WHERE id='$_GET[id]'");

        header("location: pegawai-tampil.php");
    }
?>