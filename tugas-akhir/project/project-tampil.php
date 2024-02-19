<?php include "../lib/top-page.php"; ?>

<h2> Data Project</h2>

<table border="1" cellpadding="8">
<tr>
    <th width="50"> No </th>
    <th width="300"> Nama Project </th>
    <th width="100"> Waktu </th>
    <th width="100"> Biaya </th>
    <th width="150"> Pelaksana </th>
    <th colspan="2"> Aksi </th>
</tr>

<?php

$no=1;
$sql = mysqli_query($connect, "SELECT * FROM project, pegawai WHERE
project.pegawai_id = pegawai.id  ORDER by project_id ASC"); //query manggil data
while($data = mysqli_fetch_array($sql)){

?>

<tr>
    <td align="center"> <?php echo $no; ?> </td>
    <td> <?php echo $data['nama_project']; ?> </td>
    <td align="center"> <?php echo $data['tanggal']; ?> </td>
    <td align="right"> <?php echo number_format($data['biaya'], 0, ",","."); ?> </td>
    <td> <?php echo $data['nama']; ?> </td>
    <td align="center" class="aksi"> <a href="project-ubah.php?id=<?php echo $data['project_id']; ?>"> Ubah </a> </td>
    <td align="center" class="aksi"> <a href="?id=<?php echo $data['project_id']; ?>" 
    onclick="return confirm('Yakin Hapus data?')"> Hapus </a> </td>
</tr>

<?php $no++; } ?>

</table>

<?php

if(isset($_GET['id'])){
mysqli_query($connect, "DELETE FROM project WHERE project_id='$_GET[id]'");

echo "<script> document.location='project-tampil.php'</script>";

}

?>


