<?php
class Kendaraan
{
    var $merek;
    var $jmlroda;
    var $harga;
    var $warna;
    var $bhnbakar;
    var $tahun;

    function setMerek($m) { $this->merek = $m; }
    function setJmlroda($j) { $this->jmlroda = $j; }
    function setHarga($h) { $this->harga = $h; }
    function setWarna($w) { $this->warna = $w; }
    function setBhnbakar($b) { $this->bhnbakar = $b; }
    function setTahun($t) { $this->tahun = $t; }

    function getMerek() { return $this->merek; }
    function getJmlroda() { return $this->jmlroda; }
    function getHarga() { return $this->harga; }
    function getWarna() { return $this->warna; }
    function getBhnBakar() { return $this->bhnbakar; }
    function getTahun() { return $this->tahun; }

    function statusHarga() {
        return ($this->harga > 50000000) ? "Mahal" : "Murah";
    }

    function dapatSubsidi() {
        return ($this->tahun < 2010) ? "Ya" : "Tidak";
    }

    function hargaSecondKendaraan() {
        return $this->harga * 0.5;
    }
}

$sData1 = array("Honda Scoopy", "4", "16000000", "Merah", "Pertamax", "2014");
$sData2 = array("Honda Scoopy", "2", "13000000", "Putih", "Premium", "2005");
$sData3 = array("Isuzu Panther", "4", "40000000", "Hitam", "Solar", "1994");

for($i = 1; $i <= 3; $i++) {
    ${"kendaraan".$i}[0] = new Kendaraan();
    ${"kendaraan".$i}[0]->setMerek(${"sData".$i}[0]);
    ${"kendaraan".$i}[0]->setJmlroda(${"sData".$i}[1]);
    ${"kendaraan".$i}[0]->setHarga(${"sData".$i}[2]);
    ${"kendaraan".$i}[0]->setWarna(${"sData".$i}[3]);
    ${"kendaraan".$i}[0]->setBhnbakar(${"sData".$i}[4]);
    ${"kendaraan".$i}[0]->setTahun(${"sData".$i}[5]);
}

for($i = 1; $i <= 3; $i++) {
    echo ${"kendaraan".$i}[0]->getMerek()."<br>";
    echo ${"kendaraan".$i}[0]->getJmlroda()."<br>";
    echo ${"kendaraan".$i}[0]->getHarga()."<br>";
    echo ${"kendaraan".$i}[0]->getWarna()."<br>";
    echo ${"kendaraan".$i}[0]->getBhnBakar()."<br>";
    echo ${"kendaraan".$i}[0]->getTahun()."<br>";
    echo ${"kendaraan".$i}[0]->hargaSecondKendaraan()."<br><br>";
}
?>