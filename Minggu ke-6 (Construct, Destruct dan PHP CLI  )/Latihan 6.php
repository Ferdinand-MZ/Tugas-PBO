<?php

class Belanja {
    public $namaBarang, $harga, $jumlah, $total;

    public function __destruct() {
        echo "Destructor : Data Belanja `$this->namaBarang` dihapus.\n";
    }

    public function __construct($namaBarang, $harga, $jumlah)  {
        $this->namaBarang = $namaBarang;
        $this->harga = $harga;
        $this->jumlah = $jumlah;
        $this->total = $this->harga * $this->jumlah;
        echo "Constructor : Data Belanja `$this->namaBarang` dibuat . \n";
    }

    public function getInfo() {
        return $this->namaBarang . " (" . $this->harga . " x " . $this->jumlah . ") = " . $this->total;
    }

    
}

echo "Masukkan jumlah barang belanja yang dibeli:";
$jml = (int)trim(fgets(STDIN));

$barang = [];
$totalBelanja = 0;

for ($i = 1; $i <=$jml; $i++) {
    echo "\nBarang ke-$i\n";
    echo "Nama barang : "; $namaBarang = trim(fgets(STDIN));
    echo "Harga satuan : "; $harga = (int)trim(fgets(STDIN));
    echo "Jumlah beli : "; $jumlah = (int)trim(fgets(STDIN));
    $mie = new Belanja($namaBarang, $harga, $jumlah);
    $barang[] = $mie;
    $totalBelanja += $mie->total;
}

echo "====================Daftar Belanja=========================\n";

foreach ($barang as $b) {
    echo $b->getInfo() . "\n";
}

echo "=============================================\n";
echo "Total Belanja : " . $totalBelanja . "\n";

?>