<?php
// Array yang diberikan
$array = [12, 9, 30, "A", "M", 99, 82, "J", "N", "B"];

// Pisahkan huruf dan angka ke dalam array yang berbeda
$letters = [];
$numbers = [];

foreach ($array as $element) {
    if (is_int($element)) {
        $numbers[] = $element;
    } else {
        $letters[] = $element;
    }
}

// Urutkan huruf secara alfabetis
sort($letters);

// Urutkan angka secara numerik
sort($numbers);

// Gabungkan dua array tersebut
$result = array_merge($letters, $numbers);

// Cetak hasilnya
print_r($result);
?>



