<?php include "../lib/top-page.php"; ?>

<h2> Daftar Jabatan </h2>
<table border="1" cellpadding="8" width="500">
<tr>
    <th width="50"> No </th>
    <th width="100"> ID Jabatan </th>
    <th width="200"> Nama Jabatan </th>
    <th colspan="2" width="150"> Aksi </th>
</tr>

<?php

$no = 1;
$sql = mysqli_query($connect, "select * from  jabatan order by id_jabatan ASC");
while($data = mysqli_fetch_array($sql)){
?>

<tr>
    <td align="center"> <?php echo $no; ?> </td>
    <td align="center"> <?php echo $data['id_jabatan']; ?> </td>
    <td> <?php echo $data['nama_jabatan']; ?> </td>
    <td align="center" class="aksi"> <a href="jabatan-ubah.php?id=<?php echo $data['id_jabatan']; ?>"> Ubah </a> </td>
    <td align="center" class="aksi"> <a href="?id=<?php echo $data['id_jabatan']; ?>" 
    onclick="return confirm('Yakin Hapus data?')"> Hapus </a> </td>
</tr>


<?php $no++; } ?>

</table>


<?php

//bagian untuk proses hapus data

if(isset($_GET['id'])){
mysqli_query($connect, "DELETE FROM jabatan WHERE id_jabatan='$_GET[id]'");

echo "<script> document.location='jabatan-tampil.php'</script>";

}

?>