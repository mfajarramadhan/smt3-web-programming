<?php 
    $barang = [
        [1, "Sepeda", 2000],
        [2, "Motor", 4000],
        [3, "Mobil", 5000]
    ]
?>

<h1>Daftar Barang</h1>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>Kode</th>
        <th>Barang</th>
        <th>Harga</th>
    </tr>

    <?php foreach($barang as $item){ ?>
    
    <tr>
        <td><?= $item[0]; ?></td>
        <td><?= $item[1]; ?></td>
        <td><?= $item[2]; ?></td>
    </tr>

    <?php } ?>
</table>