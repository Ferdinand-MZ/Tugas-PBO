<?php

class Mobil {
    var $jumlahRoda = 4;
    var $warna;
    var $bahanBakar;
    var $harga;
    var $merek;

    public function statusHarga () {
        if ($this->harga > 500000000) $status = "Mahal";
        else $status = "Murah";
        return $status;
    }

    public function getJumlahRoda() {
        return $this->jumlahRoda;
    }
}

$object1 = new Mobil();
$object2 = new Mobil();
echo $object1->getJumlahRoda();
PHP_EOL;
echo $object1->statusHarga();

?>
