<?php include "../lib/top-page.php"; ?>

<form action="" method="POST">
<table border="1" cellpadding="10" class="tambah">
    <th colspan="2"><h3> Tambah Gaji</h3></th>
    <tr>
        <td width="150"> Pegawai</td>
        <td> <select name="id" required>
        <option value=""> ---- </option>
        <?php
        $sql=mysqli_query($connect, "SELECT * FROM pegawai ORDER by nama ASC");
        while($data = mysqli_fetch_array($sql)){
            echo "<option value=$data[id]> $data[nama]</option>";
        }
        ?>
        </select> 
        </td>
    </tr>
    <tr>
        <td> Bulan </td>
        <td> 
            <select name="bulan" required>
                <option value=""> ---- </option> 
                <option value="1"> 1 </option> 
                <option value="2"> 2 </option> 
                <option value="3"> 3 </option> 
                <option value="4"> 4 </option> 
                <option value="5"> 5 </option> 
                <option value="6"> 6 </option> 
                <option value="7"> 7 </option> 
                <option value="8"> 8 </option> 
                <option value="9"> 9 </option> 
                <option value="10"> 10 </option> 
                <option value="11"> 11 </option> 
                <option value="12"> 12 </option> 
            </select>
        </td>
    </tr>
    <tr>
        <td> Tahun </td>
        <td> <input type="text" name="tahun"> </td>
    </tr>
    <tr>
        <td> Total Gaji</td>
        <td> <input type="text" name="total_gaji"> </td>
    </tr>
    <tr class="btn-submit">
        <td colspan="2"> <input type="submit" value="Simpan" name="save"> </td>
    </tr>
</table>
</form>

<?php

if(isset($_POST['save'])){
    mysqli_query($connect, "INSERT INTO gaji SET
    id = '$_POST[id]',
    bulan = '$_POST[bulan]',
    tahun = '$_POST[tahun]',
    total_gaji = '$_POST[total_gaji]'");

    echo "<h4>Data Berhasil disimpan</h4>";
    echo "<meta http-equiv='refresh' content='1; url=gaji-tampil.php'>";
}
?>