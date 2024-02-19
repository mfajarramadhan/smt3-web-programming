<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Partai</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body>
        <div class="header">
            <h1>Tambah Partai</h1>
        </div>
        <div class="content">
            <form action="" method="post">
                <div class="tbody">
                    <table border="0" cellpadding="10" cellspacing="0">
                        <tr>
                            <td><label for="id_partai">Id Partai :</label><br>
                            <input type="text" name="id_partai" id="id_partai" placeholder="Masukkan id partai..." required></td>
                        </tr>
                        <tr>
                            <td><label for="no_partai">Nomor Urut Partai :</label><br>
                            <input type="text" name="no_partai" id="no_partai" placeholder="Masukkan nomor partai..." required></td>
                        </tr>
                        <tr>
                            <td><label for="nama_partai">Nama Partai :</label><br>
                            <input type="text" name="nama_partai" id="nama_partai" placeholder="Masukkan nama partai..." required></td>                        
                        </tr>
                        <tr>
                            <td><label for="alamat">Alamat Partai :</label><br>
                            <input type="text" name="alamat" id="alamat" placeholder="Masukkan alamat partai..." required></td>                         
                        </tr>
                        <tr>
                            <td><button type="submit" name="tambah">Tambah</button></td>
                        </tr>
                    </table>
                </div>
            </form>
        </div>
</body>
</html>
<?php 
    include "database.php";

    if(isset($_POST["tambah"])){

        mysqli_query($koneksi, "INSERT INTO partai SET
            id_partai = '$_POST[id_partai]',
            nomor_urut = '$_POST[no_partai]',
            nama_partai = '$_POST[nama_partai]',
            alamat = '$_POST[alamat]'
        ");
        echo "<script>
                alert('Data berhasil ditambahkan!');
            </script>";
    }
?>




