<?php

Class barangHarian {
    var $namaBarang; 
    var $harga; 
    var $jumlah;
    var $total;

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

    function setNama($x)
    {
        $this->nama = $x;
    }

    function getNama()
    {
        return $this->nama;
    }

    function setHarga($x)
    {
        $this->harga = $x;
    }

    function getHarga()
    {
        return $this->harga;
    }

    function setJumlah($x)
    {
        $this->jumlah = $x;
    }

    function getJumlah()
    {
        return $this->jumlah;
    }
}

// mie instan, kopi, air mineral
$barang1 = new barangHarian();
$barang1->setNama("Mie Instan");
$barang1->setHarga(3000);
$barang1->setJumlah(3);

$barang2 = new barangHarian(); 
$barang2->setNama("Kopi");
$barang2->setHarga(3500);
$barang2->setJumlah(5);

$barang3 = new barangHarian();
$barang3->setNama("Air Mineral");
$barang3->setHarga(5000);
$barang3->setJumlah(2);

echo "Nama Barang: " . $barang1->namaBarang . "<br>";
echo "Harga Per Barang: " . $barang1->harga . "<br>";
echo "Total Harga: " . $barang1->hitungTotalPembayaran() . "<br>";
echo "Status Harga: " . $barang1->statusPembayaran() . "<br><br>";

echo "Nama Barang: " . $barang2->namaBarang . "<br>";
echo "Harga Per Barang: " . $barang2->harga . "<br>";
echo "Total Harga: " . $barang2->hitungTotalPembayaran() . "<br>";
echo "Status Harga: " . $barang2->statusPembayaran() . "<br><br>";

echo "Nama Barang: " . $barang3->namaBarang . "<br>";
echo "Harga Per Barang: " . $barang3->harga . "<br>";
echo "Total Harga: " . $barang3->hitungTotalPembayaran() . "<br>";
echo "Status Harga: " . $barang3->statusPembayaran() . "<br><br>";
