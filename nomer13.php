<?php
interface BangunRuang {
    public function hitungVolume();
}

class Kubus implements BangunRuang {
    private $sisi;

    public function __construct($sisi) {
        $this->sisi = $sisi;
    }

    public function hitungVolume() {
        $hasil = 1;
        for ($i = 0; $i < 3; $i++) {
            $hasil *= $this->sisi;
        }
        return $hasil;
    }
}

class Bola implements BangunRuang {
    private $jariJari;

    public function __construct($jariJari) {
        $this->jariJari = $jariJari;
    }

    public function hitungVolume() {
        $pi = 0;
        for ($i = 0; $i < 1000000; $i++) {
            $pi += 4 * pow(-1, $i) / (2 * $i + 1);
        }
        $hasil = (4/3) * $pi;
        $hasil *= $this->jariJari * $this->jariJari * $this->jariJari;
        return $hasil;
    }
}

$kubus = new Kubus(5);
$bola = new Bola(7);

echo "Volume Kubus: " . $kubus->hitungVolume() . "\n";
echo "Volume Bola: " . $bola->hitungVolume() . "\n";


?>