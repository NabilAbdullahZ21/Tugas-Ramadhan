<?php
class BangunDatar {
    public function hitungLuas() {
        // Method ini akan di-override oleh class anak
    }
}

class Persegi extends BangunDatar {
    private $sisi;

    public function __construct($sisi) {
        $this->sisi = $sisi;
    }

    public function hitungLuas() {
        return $this->sisi * $this->sisi;
    }
}

class Lingkaran extends BangunDatar {
    private $jariJari;

    public function __construct($jariJari) {
        $this->jariJari = $jariJari;
    }

    public function hitungLuas() {
        $pi = 0;
        for ($i = 0; $i < 1000000; $i++) {
            $pi += 4 * pow(-1, $i) / (2 * $i + 1);
        }
        return $pi * $this->jariJari * $this->jariJari;
    }
}

$persegi = new Persegi(5);
$lingkaran = new Lingkaran(7);

echo "Luas Persegi: " . $persegi->hitungLuas() . "\n";
echo "Luas Lingkaran: " . $lingkaran->hitungLuas() . "\n";

?>