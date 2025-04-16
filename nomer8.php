<?php

function enkripsi($teks) {
    $hasil = '';
    $panjang = strlen($teks);

    for ($i = 0; $i < $panjang; $i++) {
        $char = $teks[$i];

        // Jika huruf besar
        if (ctype_upper($char)) {
            $hasil .= chr(((ord($char) - 65 + 1) % 26) + 65);
        }
        // Jika huruf kecil
        elseif (ctype_lower($char)) {
            $hasil .= chr(((ord($char) - 97 + 1) % 26) + 97);
        }
        // Selain huruf (biarkan)
        else {
            $hasil .= $char;
        }
    }

    return $hasil;
}

function deskripsi($teks) {
    $hasil = '';
    $panjang = strlen($teks);

    for ($i = 0; $i < $panjang; $i++) {
        $char = $teks[$i];

        if (ctype_upper($char)) {
            $hasil .= chr(((ord($char) - 65 - 1 + 26) % 26) + 65);
        } elseif (ctype_lower($char)) {
            $hasil .= chr(((ord($char) - 97 - 1 + 26) % 26) + 97);
        } else {
            $hasil .= $char;
        }
    }

    return $hasil;
}

// Contoh penggunaan
$pesan = "Assalamualaikum";
$terenkripsi = enkripsi($pesan);
$terdekripsi = deskripsi($terenkripsi);

echo "Pesan asli     : $pesan\n";
echo "Hasil Enkripsi : $terenkripsi\n";
echo "Hasil Dekripsi : $terdekripsi\n";