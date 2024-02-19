<?php 
// Variabel
    $x = "M. Fajar";
    $y = "Ramadhan S.kom";
    echo $x ." ". $y;
    echo "<br>";

    // Variabel untuk integer
    $x = 10;
    $y = 5;
    $z = $x + $y;
    echo $z; 

    // POST and GET
    // POST --> Mendorong Data
    // GET --> Menarik Data
?>
<!-- POST -->
<!-- Memanggil data yang belum ada nilainya/belum diisi -->

<br><br>

<form action="" method="POST">
    <!-- Kalo action dikosongin, tandanya file yg mau di dorong masih dalam 1 folder, jika action diisi namafile.php maka file nya beda folder -->
    <table>
<tr>
    <td>Nama :</td>
    <td><input type="text" name="nama"><br></td>
</tr>
<tr>
    <td>Prodi :</td>
    <td><input type="text" name="prodi"><br></td>
</tr>
<tr>
    <td>Alamat :</td>
    <td><input type="text" name="alamat"><br></td>
</tr>
<tr>
    <td></td>
    <td></td>
    <td><input type="submit" name="submit" value="Submit"></td>
</tr>
</table>
</form>

<br><br>

<?php 
// Mendorong data/menampilkan data 
// ketika tombol submit di klik, maka yang ada di variabel nama,prodi,dan alamat akan ditampilkan
    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $prodi = $_POST['prodi'];
        $alamat = $_POST['alamat'];
        echo "
            <script>
                alert('Saya $nama rodi $prodi alamat saya di $alamat')
            </script>
            ";
        echo "Nama saya $nama dari prodi $prodi alamat saya di $alamat";
    }
?>


<!-- GET -->
<!-- Memanggil data yang sudah ada nilainya -->
<h3>Daftar Calon Istri</h3>
<ol type="a">
    <li><a href="?nama=Aisyah">Aisyah</li>
    <li><a href="?nama=Fatimah">Fatimah</li>
    <li><a href="?nama=Indah">Indah</li>
    <li><a href="?nama=Sofa">Sofa</li>
    <li><a href="?nama=Ashia">Ashia</li>
    <!-- tanda tanya ? berfungsi untuk memasukkan data ke url untuk dikirimkan ke halakam lain -->
</ol>
<br>

<?php 
    if(isset($_GET['nama'])){
        $namapilih = $_GET['nama'];
        echo "Anda memilih $namapilih sebagai kekasih anda";
    }
?>

<br><br><br><br><br><br>
<h3>Daftar Buah-Buahan</h3>
<ol type="a">
    <li><a href="?buah=Pisang">Pisang</li>
    <li><a href="?buah=Semangka">Semangka</li>
    <li><a href="?buah=Anggur">Anggur</li>
    <li><a href="?buah=Jeruk">Jeruk</li>
    <li><a href="?buah=Apel">Apel</li>
</ol>
<br>


<?php 
    if(isset($_GET['buah'])){
        $buahpilih = $_GET['buah'];
        echo "Anda memilih $buahpilih sebagai buah favorit anda";
    }
?>




