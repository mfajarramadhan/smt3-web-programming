<?php 
    // array
    // variabel dapat memiliki banyak nilai
    // elemen array boleh memiliki tipe data yang berbeda
    // elemen array dimulai dari index ke 0
    $hari = ["Senin", "Selasa", "Rabu"];
    $bulan = ["Januari", "Februari", "Maret"];

    // Menampilkan array menggunakan var_dumb() atau print_r()
    // echo tidak bisa digunakan untuk mencetak array
    // var_dump menampilkan tipe data beserta key dan valuenya
    // print_r hanya key dan value saja
    // cek hasilnya di view page source
    echo "var_dump";   
    echo "<br>";     
    var_dump($hari);
    echo "<br>";
    echo "<br>";

    echo "print_r";   
    echo "<br>";   
    print_r($bulan);
    echo "<br>";
    echo "<br>";


    // Maenampilkan 1 elemen array saja
    echo "echo memunculkan 1 elemen saja";   
    echo "<br>";   
    echo $hari[1];
    echo "<br>";
    echo "<br>";   

    // Menambahkan elemen baru pada array
    echo "var_dump + 1 array baru";   
    echo "<br>";   
    $hari[] = "Kamis";
    var_dump($hari);

    // var_dump dan print_r bukan ditampilkan untuk user (versi debugging), hanya untuk developer
    // gunakan pengulangan untuk ditampilkan kepada user 
?>