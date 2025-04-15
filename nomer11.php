<?php
function isPrime($n) {
    if ($n <= 1) {
        return false;
    }
    for ($i = 2; $i * $i <= $n; $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

function hitungBilanganPrima($min, $max) {
    $bilanganPrima = [];
    $count = 0;
    for ($i = $min; $i <= $max; $i++) {
        if (isPrime($i)) {
            $bilanganPrima[] = $i;
            $count++;
        }
    }
    echo "Bilangan prima antara $min dan $max adalah: ";
    for ($i = 0; $i < $count; $i++) {
        echo $bilanganPrima[$i];
        if ($i < $count - 1) {
            echo ", ";
        }
    }
    echo "\nTotal: $count";
}

$min = 10;
$max = 30;
hitungBilanganPrima($min, $max);


?>