<?php

class Pembeli {
    private $nama;
    private $kartu_member;
    private $total_belanja;
    private $diskon;
    private $bayar;

    // === Setter ===
    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function setKartuMember($status) {
        $this->kartu_member = ($status == "Memiliki"); //akan membuat Memiliki itu true
    }

    public function setTotalBelanja($total) {
        $this->total_belanja = $total;
    }

    // === Getter ===
    public function getNama() {
        return $this->nama;
    }

    public function getKartuMember() {
        return $this->kartu_member ? "Memiliki" : "Tidak Memiliki";
    }

    public function getTotalBelanja() {
        return $this->total_belanja;
    }

    public function getDiskon() {
        return $this->diskon;
    }

    public function getBayar() {
        return $this->bayar;
    }

    // === Hitung Diskon & Bayar ===
    public function hitungBayar() {
        if ($this->kartu_member) {
            if ($this->total_belanja > 500000) {
                $this->diskon = 50000;
            } elseif ($this->total_belanja > 100000) {
                $this->diskon = 15000;
            } else {
                $this->diskon = 0;
            }
        } else {
            if ($this->total_belanja > 100000) {
                $this->diskon = 5000;
            } else {
                $this->diskon = 0;
            }
        }

        $this->bayar = $this->total_belanja - $this->diskon;
    }
}

// === Output ===
$p1 = new Pembeli();
$p1->setNama("Pembeli 1");
$p1->setKartuMember("Memiliki");
$p1->setTotalBelanja(200000);
$p1->hitungBayar();

$p2 = new Pembeli();
$p2->setNama("Pembeli 2");
$p2->setKartuMember("Memiliki");
$p2->setTotalBelanja(570000);
$p2->hitungBayar();

$p3 = new Pembeli();
$p3->setNama("Pembeli 3");
$p3->setKartuMember("Tidak Memiliki");
$p3->setTotalBelanja(120000);
$p3->hitungBayar();

$p4 = new Pembeli();
$p4->setNama("Pembeli 4");
$p4->setKartuMember("Tidak Memiliki");
$p4->setTotalBelanja(90000);
$p4->hitungBayar();

$daftar = [$p1, $p2, $p3, $p4];
$no = 1;

foreach ($daftar as $p) {
    echo "No: $no<br>";
    echo "Pembeli: " . $p->getNama() . "<br>";
    echo "Kartu Member: " . $p->getKartuMember() . "<br>";
    echo "Total Belanja: " . $p->getTotalBelanja() . "<br>";
    echo "Diskon: " . $p->getDiskon() . "<br>";
    echo "Bayar yang dikeluarkan: " . $p->getBayar() . "<br><br>";
    $no++;
}

?>
