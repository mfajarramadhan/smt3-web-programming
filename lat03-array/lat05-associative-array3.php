<?php 
    $mahasiswa = [
        // ["4337857201220004", "M. Fajar Ramadhan", "Sistem Informasi", "Malam", "2022"],
        // ["4337857201220004", "M. Hanif Ramadhan", "Sistem Informasi", "Malam", "2022"],
        // ["4337857201220005", "M. Diva Ramadhan", "Sistem Informasi", "Malam", "2022"],
        // ["4337857201220006", "M. Tian Ramadhan", "Sistem Informasi", "Malam", "2022"],
    [
        "NPM" => "4337857201220004",
        "Nama" => "M. Fajar Ramadhan",
        "Prodi" => "Sistem Informasi"
    ],
    [
        "NPM" => "4337857201220004",
        "Nama" => "M. Fajar Ramadhan",
        "Prodi" => "Sistem Informasi"
    ],
    [
        "NPM" => "4337857201220004",
        "Nama" => "M. Fajar Ramadhan",
        "Prodi" => "Sistem Informasi"
    ]
];

    foreach($mahasiswa as $mhs){
        echo $mhs["Prodi"];
        echo "<br>";
    }
?>

