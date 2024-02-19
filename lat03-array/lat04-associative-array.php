<?php 
    $mahasiswa = [
        ["4337857201220003", "M. Fajar Ramadhan", "Sistem Informasi", "Malam", "2022"],
        ["4337857201220004", "M. Hanif Ramadhan", "Sistem Informasi", "Malam", "2022"],
        ["4337857201220005", "M. Diva Ramadhan", "Sistem Informasi", "Malam", "2022"],
        ["4337857201220006", "M. Tian Ramadhan", "Sistem Informasi", "Malam", "2022"],
    ];

?>

<h1>Data Mahasiswa</h1>

<table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>NPM</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Kelas</th>
            <th>Angkatan</th>
        </tr>

        <?php foreach($mahasiswa as $mhs) : ?>

        <tr>
            <td><?= $mhs[0]; ?></td>
            <td><?= $mhs[1]; ?></td>
            <td><?= $mhs[2]; ?></td>
            <td><?= $mhs[3]; ?></td>
            <td><?= $mhs[4]; ?></td>
        </tr>



        <?php endforeach; ?>
</table>