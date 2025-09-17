<?php
// class-kendaraan.php
class Kendaraan {
    protected $merek;
    protected $harga;

    public function __construct($merek, $harga) {
        $this->merek = $merek;
        $this->harga = $harga;
    }

    public function getMerek() {
        return $this->merek;
    }

    public function getHarga() {
        return $this->harga;
    }
}

class Pesawat extends Kendaraan {
    private $tinggiMaks;
    private $kecepatanMaks;

    public function setTinggiMaks($tinggi) {
        $this->tinggiMaks = $tinggi;
    }

    public function setKecepatanMaks($kecepatan) {
        $this->kecepatanMaks = $kecepatan;
    }

    public function bacaTinggiMaks() {
        return $this->tinggiMaks;
    }

    public function getKecepatanMaks() {
        return $this->kecepatanMaks;
    }

    public function biayaOperasional() {
        $harga = $this->getHarga();
        $tinggi = $this->tinggiMaks;
        $kecepatan = $this->kecepatanMaks;

        if ($tinggi > 5000 && $kecepatan > 800) {
            return 0.30 * $harga;
        } elseif ($tinggi >= 3000 && $tinggi <= 5000 && $kecepatan >= 500 && $kecepatan <= 800) {
            return 0.20 * $harga;
        } elseif ($tinggi < 3000 && $kecepatan < 500) {
            return 0.10 * $harga;
        } else {
            return 0.05 * $harga;
        }
    }
}

// Contoh penggunaan
$pesawat1 = new Pesawat("Boeing 737", 2000);
$pesawat1->setTinggiMaks(7500);
$pesawat1->setKecepatanMaks(650);

$pesawat2 = new Pesawat("Boeing 747", 3500);
$pesawat2->setTinggiMaks(5000);
$pesawat2->setKecepatanMaks(850);

$pesawat3 = new Pesawat("Cassa", 350);
$pesawat3->setTinggiMaks(3500);
$pesawat3->setKecepatanMaks(500);

// Output
$daftar = [$pesawat1, $pesawat2, $pesawat3];
foreach ($daftar as $p) {
    echo "Biaya operasional pesawat {$p->getMerek()} dengan harga Rp {$p->getHarga()}.000.000 ";
    echo "yang memiliki tinggi maksimum {$p->bacaTinggiMaks()} feet ";
    echo "dan kecepatan maksimum {$p->getKecepatanMaks()} km/jam ";
    echo "adalah Rp " . $p->biayaOperasional() . " juta\n\n";
    echo "<br>";
    echo "<br>";
}
