<?php
$teks = "Selamat ulang tahun yang ke-171";

// mencari semua simbol (karakter yang bukan huruf atau angka)
// preg_match ini untuk memeriksa apakah sebuah string dalam php berisi karakter selain a-zA-Z0-9
preg_match_all('/[^a-zA-Z0-9\s]/', $teks, $matches);

//fungsi count untuk menghitung jumlah elemen dalam array
if (count($matches[0]) > 0) {
    // menghitung duplikasi simbol
    $uniqueSymbols = array_unique($matches[0]);
    echo "Karakter yang terdapat pada kalimat : ". implode(', ', $uniqueSymbols);
} else {
    echo "Tidak terdapat simbol pada kalimat";
} 
?>