<?php
    // For
    // Gunakan count($variabel) untuk memunculkan semua elemen array
    // $i = 0 memanggil elemen array dengan index ke 0
    // Gunakan echo " " untuk spasi antar elemen array
    $bulan = ["Januari", "Februari", "Maret"];
    for($i = 0; $i < count ($bulan); $i++){
        echo $bulan[$i];
        echo " ";
    }

    echo "<br>";
    echo "<br>";

    // Foreach
    $bulan = ["Januari", "Februari", "Maret", "April"];
    foreach ($bulan as $bln){
        echo $bln;
    }

?>