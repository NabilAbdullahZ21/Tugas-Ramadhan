<?php

function capitalSentenceOnly($kalimat) {
    // Kata sambung 
    $kataKecil = ['yang', 'dan', 'di', 'ke', 'dari', 'untuk', 'atau', 'dengan', 'karena', 'tetapi', 'oleh'];

    // Ubah semua jadi lowercase, lalu pisah kata-katanya
    $kataArray = explode(" ", strtolower($kalimat));

    // Capitalize per kata, kecuali kata sambung
    $hasil = [];
    foreach ($kataArray as $i => $kata) {
        if ($i === 0 || !in_array($kata, $kataKecil)) {
            // Kapitalisasi huruf pertama
            $hasil[] = ucfirst($kata);
        } else {
            // Biarkan lowercase
            $hasil[] = $kata;
        }
    }

    return implode(" ", $hasil);
}

echo capitalSentenceOnly("DAUN YANG JATUH TAK AKAN MENYALAHKAN ANGIN") . "\n";
echo capitalSentenceOnly("NeGeRi AntAH BerAntAH") . "\n";
echo capitalSentenceOnly("laut bercerita") . "\n";
?>