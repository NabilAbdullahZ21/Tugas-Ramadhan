<?php
function nilai($nilai) {
    if ($nilai === 100) {
        echo "A+";
    } else if ($nilai >= 90 && $nilai <= 99) {
        echo "A";
    } else if ($nilai >= 80 && $nilai <= 89) {
        echo "B";
    } else if ($nilai >= 70 && $nilai <= 79) {
        if ($nilai >= 75) {
            echo "C";
        } else {
            echo "Pas KKM";
        }
    } else if ($nilai >= 50 && $nilai <= 69) {
        echo "Belajar yg giat (Remidi)";
    } else if ($nilai >=0 && $nilai <= 49) {
        echo "Ulangi lagi 10x (Remidi)";
    } else {
        echo "Nilai harsu >=0 dan <=100";
    }
}
nilai(0);
?>