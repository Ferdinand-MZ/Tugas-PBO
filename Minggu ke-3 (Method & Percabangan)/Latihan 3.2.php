<?php

class Kendaraan
{
    var $jumlahRoda;
    var $warna;
    var $bahanBakar;
    var $harga;
    var $merek;

    function statusHarga()
    {
        if ($this->harga > 50000000) {
            $status = 'Mahal';
        } else {
            $status = 'Murah';
        }
        return $status;
    }

    function setMerek($x)
    {
        $this->merek = $x;
    }

    function setHarga($x)
    {
        $this->harga = $x;
    }
}

$kendaraan1 = new Kendaraan();
$kendaraan1->setMerek('Yamaha MIO');
$kendaraan1->setHarga(10000000);

echo "Status: " . $kendaraan1->statusHarga();

