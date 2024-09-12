<?php
//Fungsi wrapText untuk memformat teks

function wrapText($lorem) {
    //mengubah string $text menjadi array karakter dengan str_split
    $count = str_split($lorem);

    //Mengecek jika jumlah karakter lebih dari 50
    if (count($count) > 50) {
        // memotong string $text hingga 50 karakter
        $text = substr ($lorem, 0, 50);
        //Menambahkan elipsis ("...") diakhir string yang sudah dipotong
        $text .= "...";
    }

    //mencetak hasil akhir dari $text
    echo $text;
    }

   
?>
