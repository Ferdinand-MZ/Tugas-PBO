<?php

class Kendaraan
{
    public $jumlahRoda = 4;
    public $warna;
    public $bahanBakar = "Premium";
    public $harga = 100000000;
    public $merek; 
    public $tahunPembuatan = 2004;
    
    public function statusHarga() {
        if($this->harga > 50000000) {
            $status = "Harga Kendaraan Mahal";
        } else { 
            $status = "Harga Kendaraan Murah";
        }
        return $status;
    }
    
    public function statusSubsidi() {
        if($this->tahunPembuatan < 2005 && $this->bahanBakar == "Premium") {
            $status = "DAPAT SUBSIDI";
        } else {
            $status = "TIDAK DAPAT SUBSIDI";
        }
        return $status;
    }

    public function hargaSecondKendaraan() {
        if($this->tahunPembuatan < 2005) {
            $hargaSecond = $this->harga * 0.2;
        } else {
            $hargaSecond = $this->harga * 0.5;
        }
        return $hargaSecond;
    }

    public function dapatSubsidi() {
        if($this->bahanBakar == "Premium") {
            $status = "DAPAT SUBSIDI";
        } else {
            $status = "TIDAK DAPAT SUBSIDI";
        }
        return $status;
    }
}


$ObjekKendaraan = new Kendaraan();
echo "jumlahRoda : " . $ObjekKendaraan->jumlahRoda . "<br />";
echo "Status Harga : " . $ObjekKendaraan->statusHarga() . "<br />";
echo "Status Subsidi : " . $ObjekKendaraan->statusSubsidi() . "<br />";

//Objek 1
//deklarasi objek dan instansiasi objek (berada di luar class)
 $objekKendaraan1 = new Kendaraan;
//setting properties
$objekKendaraan1 ->harga=1000000; 
$objekKendaraan1 ->tahunPembuatan = 1999;
//instansiasi objek (pemanggilan method/function)
echo "Status Harga : ".$ObjekKendaraan ->statusHarga();
 //Objek 2
//deklarasi objek dan instansiasi objek (berada di luar class)
$objekKendaraan2 = new Kendaraan;
//setting properties 
$objekKendaraan2 -> bahanBakar = "Pertamax";
$objekKendaraan2->tahunPembuatan = 1999;
//instansiasi objek (pemanggilan method/function)
echo "<br>";
echo "Status BBM: ".$objekKendaraan2 ->dapatSubsidi();
echo "<br>";
echo "Harga Bekas: ". $objekKendaraan2 ->hargaSecondKendaraan();

?>