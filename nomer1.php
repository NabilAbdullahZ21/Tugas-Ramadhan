<?php

class Mahasiswa {
    public $nama;
    public $nim;
    public $nilai;
    public $jurusan;

    public function __construct($nama, $nim, $nilai, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->nilai = $nilai;
        $this->jurusan = $jurusan;
    }
    public static function urutkanMahasiswa(&$daftarMahasiswa) {
        usort($daftarMahasiswa, function($a, $b) {
            if ($a->nilai == $b->nilai) {
                return strcmp($a->nama, $b->nama);
            }
            return ($a->nilai < $b->nilai) ? 1 : -1;
        });
    }
}

$mahasigma = [
    new Mahasiswa("Bejo", "11122", 85, "Elektro"),
    new Mahasiswa("Amad", "22233", 90, "Managemen Bisnis"),
    new Mahasiswa("Sinta", "33322", 80, "Teknik Jaringan"),
];

Mahasiswa::urutkanMahasiswa($mahasigma);

foreach ($mahasigma as $maha) {
    echo "Nama: {$maha->nama}, NIM: {$maha->nim}, Nilai: {$maha->nilai}, Jurusan: {$maha->jurusan}\n";
}
?>