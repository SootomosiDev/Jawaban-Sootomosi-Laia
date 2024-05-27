<?php
function pattern_count($text, $pattern) {
    $textLength = strlen($text);
    $patternLength = strlen($pattern);

    // Jika panjang pattern adalah 0, langsung kembalikan 0
    if ($patternLength == 0) {
        return 0;
    }

    $count = 0;

    // Loop melalui text dan periksa setiap substring dengan panjang pattern
    for ($i = 0; $i <= $textLength - $patternLength; $i++) {
        $match = true;
        for ($j = 0; $j < $patternLength; $j++) {
            if ($text[$i + $j] != $pattern[$j]) {
                $match = false;
                break;
            }
        }
        if ($match) {
            $count++;
        }
    }

    return $count;
}

// Contoh pengujian
echo pattern_count("palindrom", "ind") . "\n"; // Output: 1
echo pattern_count("abakadabra", "ab") . "\n"; // Output: 2
echo pattern_count("hello", "") . "\n"; // Output: 0
echo pattern_count("ababab", "aba") . "\n"; // Output: 2
echo pattern_count("aaaaaa", "aa") . "\n"; // Output: 5
echo pattern_count("hell", "hello") . "\n"; // Output: 0
?>
