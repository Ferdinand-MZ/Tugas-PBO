<?php
$harga = 30000000;
$tahun = 2017;
$plat = "genap";

if ($harga > 50000000) {
    $status_harga = "Mahal";
} else {
    $status_harga = "Murah";
}

if ($tahun < 2005 && strpos("Premium", "bahan_bakar") !== false) {
    $status_bbm = "Mendapat Subsidi";
} else {
    $status_bbm = "Tidak Mendapat Subsidi";
}

$harga_bekas = $harga;
if ($tahun <= 2000) {
    $harga_bekas *= 0.6; // 40% turun
} elseif ($tahun <= 2005) {
    $harga_bekas *= 0.8; // 20% turun
} elseif ($tahun <= 2010) {
    $harga_bekas *= 0.7; // 30% turun
}

$pajak = ($tahun == 2017) ? $harga * 0.025 : 0;

$hari_operasi = ($plat == "genap") ? "Selasa,Kamis,Sabtu" : "Senin,Rabu,Jumat,Minggu";

echo "Status Harga: $status_harga<br>";
echo "Status BBM: $status_bbm<br>";
echo "Harga Bekas: $harga_bekas<br>";
echo "Jumlah Pajak: $pajak<br>";
echo "Hari Operasi: $hari_operasi";
?>