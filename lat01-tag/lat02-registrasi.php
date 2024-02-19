<?php 
    include "lat03-header.php";
?>
<h3>Registrasi</h3>
<form action="" method="POST">
        <!-- Kalo action dikosongin, tandanya file yg mau di dorong masih dalam 1 folder, jika action diisi namafile.php maka file nya beda folder -->
<table>
    <tr>
        <td width="100">NIM</td>
        <!-- Cukup kasih nilai di kolom pertama, yg lain mengikuti -->
        <td><input type="text" name="nim" size="20" placeholder="24434"></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td><input type="text" name="nama" size="30" placeholder="Hamba Allah"></td>
    </tr>
    <tr>
        <td>Prodi</td>
        <td><select name="prodi" id="">
            <option value="None">--</option>
            <option value="Informatika">IF</option>
            <option value="Sistem Informasi">SI</option>
            </select>
        </td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="Simpan" name="proses"></td>
    </tr>
</table>
</form>

<?php 
    if(isset($_POST['proses'])){
        // Baris proses menampung data
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $prodi = $_POST['prodi'];

        // Baris eksekusi
        echo "Berikut data registrasi : <br>";
        echo "NIM : $nim <br>";
        echo "Nama`: $nama `<br>";
        echo "Prodi : $prodi <br>";
    }


?>