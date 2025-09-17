<?php
class warung
{
  public $namaBarang;
  public $harga;
  public function __construct($namaBarang, $harga)
  {
    $this->namaBarang = $namaBarang;
    $this->harga = $harga;
 
  }
  public function information()
  {
    echo "Barang $this->namaBarang, harga : Rp $this->harga<br>";
  }
}
 
class Warung2 extends warung {
  public $exp;
 
  public function __construct($namaBarang, $harga, $exp) {
    parent:: __construct($namaBarang, $harga);
    $this->exp = $exp;
  }
  public function information() {
    echo "Barang2: $this->namaBarang, Harga: Rp $this->harga, Kadaluarsa: $this->exp<br>";
  }
}

// overloading
class Warung3 {
    public function __call($namaBarang, $x) {
        if ($namaBarang == "total") {
            if (count($x) == 1) {
                return $x[0];
            }
            else if (count($x) == 2) {
                return $x[0] * $x[1];
            }
            else {
                return 0;
            }
        }
    }
}
 
$barang1 = new Warung("Susu Kotak", 10000);
$barang1->information();

$barang2 = new Warung2("Yogurt", 10000, "2024-12-31");
$barang1->information();

$barang3 = new Warung3();
echo "Harga Indomie Setelah diskon: Rp " . $barang3->total(4000) . "<br>";
echo "Harga Telur: Rp " . $barang3->total(2000, 5) . "<br>"; 
?>