<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event System</title>
    <style>
        h1{
            text-align: center;
        }
        form table{
            margin : 40px auto;
        }

        table tr:nth-child(even){
            background-color: silver;
        }
        table tr:nth-child(odd){
            background-color: lightblue;
        }

        button{
            background-color: blue;
            color: white;
            transition: all .4s;
        }
        button:hover{
            background-color: white;
            color: black;
            scale: 1.1;
        }
    </style>
</head>
<body>
    <h1>Tambah Data Layanan</h1>

    <form action="" method="post">
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <td width="150"><label for="kode">Kode Layanan :</label></td>
                <td><input type="text" name="kode" id="kode" size="50"></td>
            </tr>
            <tr>
                <td><label for="nama">Nama Layanan :</label></td>
                <td><input type="text" name="nama" id="nama" size="50"></td>
            </tr>
            <tr>
                <td><label for="deskripsi">Deskripsi Layanan :</label></td>
                <td><input type="text" name="deskripsi" id="deskripsi" size="50"></td>
            </tr>
            <tr>
                <td><label for="harga">Harga Layanan :</label></td>
                <td><input type="text" name="harga" id="harga" size="50"></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" name="simpan">Tambah Data</button></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php 

    require "connect_db.php";

    if(isset($_POST["simpan"])){

        mysqli_query($koneksi, "INSERT INTO layanan SET
            id = '$_POST[kode]',
            nama_layanan = '$_POST[nama]',
            deskripsi = '$_POST[deskripsi]',
            harga = '$_POST[harga]'
        ");
        echo "<script>
                alert('Data berhasil ditambahkan!');
            </script>";
    }
?>