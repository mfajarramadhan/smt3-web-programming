<?php include "../lib/top-page.php"; ?>

<h2> Daftar Pegawai </h2>

<table border="1" cellpadding="8" width="800">
<tr>
    <th> No </th>
    <th> ID </th>
    <th> Nama </th>
    <th> Jabatan </th>
    <th> Lahir </th>
    <th> Alamat </th>
    <th colspan="2"> Aksi </th>
</tr>

<?php

$no=1;
$sql = mysqli_query($connect, "SELECT * FROM pegawai, jabatan WHERE
pegawai.idjab = jabatan.id_jabatan  ORDER by id ASC"); //query manggil data
while($tampil = mysqli_fetch_array($sql)){

?>

<tr>
    <td align="center"> <?php echo $no; ?> </td>
    <td align="center"> <?php echo $tampil['id']; ?> </td>
    <td> <?php echo $tampil['nama']; ?> </td>
    <td align="center"> <?php echo $tampil['nama_jabatan']; ?> </td>
    <td> <?php echo $tampil['lahir']; ?> </td>
    <td> <?php echo $tampil['alamat']; ?> </td>
    <td align="center" class="aksi"> <a href="pegawai-ubah.php?id=<?php echo $tampil['id']; ?>"> Ubah </a> </td>
    <td align="center" class="aksi"> <a href="?id=<?php echo $tampil['id']; ?>" 
    onclick="return confirm('Yakin Hapus data?')"> <b>Hapus</b> </a> </td>
</tr>

<?php $no++; } ?>

</table>

<?php

//bagian untuk proses hapus data

if(isset($_GET['id'])){
mysqli_query($connect, "DELETE FROM pegawai WHERE id='$_GET[id]'");

echo "<script> document.location='pegawai-tampil.php'</script>";

}

?>