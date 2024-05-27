<?php
function count_and_sort_letters($input) {
    // Buat array untuk menyimpan jumlah setiap huruf
    $letter_count = array();

    // Loop melalui setiap karakter dalam input
    for ($i = 0; $i < strlen($input); $i++) {
        $char = $input[$i];
        // Abaikan karakter non-huruf
        if (!ctype_alpha($char)) {
            continue;
        }
        // Tambahkan atau perbarui jumlah huruf dalam array
        if (array_key_exists($char, $letter_count)) {
            $letter_count[$char]++;
        } else {
            $letter_count[$char] = 1;
        }
    }

    // Urutkan array berdasarkan kunci (huruf) secara alfabetis
    ksort($letter_count);

    return $letter_count;
}

// Contoh kasus uji:
print_r(count_and_sort_letters("Hello World")); 
// Output: ["d" => 1, "e" => 1, "H" => 1, "l" => 3, "o" => 2, "r" => 1, "W" => 1]

print_r(count_and_sort_letters("Bismillah"));   
// Output: ["a" => 1, "B" => 1, "h" => 1, "i" => 2, "l" => 2, "m" => 1, "s" => 1]

print_r(count_and_sort_letters("MasyaAllah"));  
// Output: ["A" => 1, "a" => 3, "h" => 1, "l" => 2, "M" => 1, "s" => 1, "y" => 1]
?>
