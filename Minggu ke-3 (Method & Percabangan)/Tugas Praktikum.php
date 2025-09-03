<?php
$pembeli = "Pembeli 1";
$kartu_member = "Memiliki";
$total_belanja = 20000;

switch (true) {
    case ($kartu_member == "Memiliki" && $total_belanja > 100000):
        $diskon = 15000;
        break;
    case ($kartu_member == "Memiliki" && $total_belanja > 50000):
        $diskon = 5000;
        break;
    case ($kartu_member == "Memiliki" && $total_belanja > 10000):
        $diskon = 5000;
        break;
    default:
        $diskon = 0;
}

$bayar = $total_belanja - $diskon;

echo "No: 1<br>";
echo "Pembeli: $pembeli<br>";
echo "Kartu Member: $kartu_member<br>";
echo "Total Belanja: $total_belanja<br>";
echo "Diskon: $diskon<br>";
echo "Bayar yang dikeluarkan: $bayar<br>";
?>