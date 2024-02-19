<?php include "../lib/top-page.php"; ?>

<h2> Data gaji</h2>

<table border="1" cellpadding="8">
<tr>
    <th width="50"> No </th>
    <th width="100"> ID Gaji </th>
    <th width="100"> Pegawai </th>
    <th width="100"> Bulan </th>
    <th width="100"> Tahun </th>
    <th width="100"> Total Gaji </th>
    <th colspan="2"> Aksi </th>
</tr>

<?php

$no=1;
$sql = mysqli_query($connect, "SELECT * FROM gaji, pegawai WHERE
gaji.id = pegawai.id  ORDER by id_gaji ASC"); //query manggil data
while($data = mysqli_fetch_array($sql)){

?>

<tr>
    <td align="center"> <?php echo $no; ?> </td>
    <td align="center"> <?php echo $data['id_gaji']; ?> </td>
    <td align="center"> <?php echo $data['nama']; ?> </td>
    <td align="center"> <?php echo $data['bulan']; ?> </td>
    <td align="center"> <?php echo $data['tahun']; ?> </td>
    <td align="right"> <?php echo number_format($data['total_gaji'], 0, ",","."); ?> </td>
    <td align="center" class="aksi"> <a href="gaji-ubah.php?id=<?php echo $data['id_gaji']; ?>"> Ubah </a> </td>
    <td align="center" class="aksi"> <a href="?id=<?php echo $data['id_gaji']; ?>" 
    onclick="return confirm('Yakin Hapus data?')"> Hapus </a> </td>
</tr>

<?php $no++; } ?>

</table>

<?php

if(isset($_GET['id'])){
mysqli_query($connect, "DELETE FROM gaji WHERE id_gaji='$_GET[id]'");

echo "<script> document.location='gaji-tampil.php'</script>";

}

?>


