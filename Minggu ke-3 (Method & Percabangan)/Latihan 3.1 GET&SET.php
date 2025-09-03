<?php

Class barangHarian {
    var $namaBarang; 
    var $harga; 
    var $jumlah;
    var $total;
    var $merek; 

    function hitungTotalPembayaran() {
        // kode untuk menghitung total pembayaran
        $total = $this->harga * $this->jumlah; 
        return $total;
    }

    function statusPembayaran() {
        $total = $this->hitungTotalPembayaran();
        if ($total > 10000) {
            return "Mahal";
        } else {
            return "Murah";
        }
    }

        function setMerek($x)
    {
        $this->merek = $x;
    }

    function getMerek()
    {
        return $this->merek;
    }
}

// mie instan, kopi, air mineral
$barang1 = new barangHarian();
$barang1->setMerek('Indomie');
$barang1->namaBarang = "Mie Instan";
$barang1->harga = 3000;
$barang1->jumlah = 3;

$barang2 = new barangHarian();
$barang2->setMerek('Indocafe');
$barang2->namaBarang = "Kopi";
$barang2->harga = 3000;
$barang2->harga = 3000;
$barang2->jumlah = 3;

$barang3 = new barangHarian();
$barang2->setMerek('Aqua');
$barang3->namaBarang = "Air Mineral";   
$barang3->harga = 5000;
$barang3->jumlah = 4;

echo "Nama Barang: " . $barang1->namaBarang . "<br>";
echo "Merk Barang: " . $barang1->merek . "<br>";
echo "Harga Per Barang: " . $barang1->harga . "<br>";
echo "Total Harga: " . $barang1->hitungTotalPembayaran() . "<br>";
echo "Status Harga: " . $barang1->statusPembayaran() . "<br><br>";

echo "Nama Barang: " . $barang2->namaBarang . "<br>";
echo "Merk Barang: " . $barang2->merek . "<br>";
echo "Harga Per Barang: " . $barang2->harga . "<br>";
echo "Total Harga: " . $barang2->hitungTotalPembayaran() . "<br>";
echo "Status Harga: " . $barang2->statusPembayaran() . "<br><br>";

echo "Nama Barang: " . $barang3->namaBarang . "<br>";
echo "Merk Barang: " . $barang3->merek . "<br>";
echo "Harga Per Barang: " . $barang3->harga . "<br>";
echo "Total Harga: " . $barang3->hitungTotalPembayaran() . "<br>";
echo "Status Harga: " . $barang3->statusPembayaran() . "<br><br>";
