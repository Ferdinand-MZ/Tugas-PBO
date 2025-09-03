<?php
class PinjamanSyariah {
    private $jumlahPinjaman = 1000000;
    private $tingkatKeuntungan = 10; // %
    private $jangkaAngsuran = 5; // bulan
    private $hariTelat = 40;
    private $tingkatDendaTelat = 0.15; // 0.15% per hari

    public function hitungAngsuran() {
        $totalPinjaman = $this->jumlahPinjaman * (1 + ($this->tingkatKeuntungan / 100));
        $angsuran = $totalPinjaman / $this->jangkaAngsuran;
        return $angsuran;
    }

    public function hitungDendaTelat() {
        $dendaHarian = $this->tingkatDendaTelat / 100 * $this->hitungAngsuran();
        $totalDenda = $dendaHarian * $this->hariTelat;
        return round($totalDenda);
    }

    public function hitungTotalPembayaran() {
        return $this->hitungAngsuran() + $this->hitungDendaTelat();
    }
}

$pinjaman = new PinjamanSyariah();
$angsuran = $pinjaman->hitungAngsuran();
$denda = $pinjaman->hitungDendaTelat();
$totalPembayaran = $pinjaman->hitungTotalPembayaran();

echo "TOKO PEGADAIAN SYARIAH" . "<br>";
echo "Jl Keadilan No 16" . "<br>";
echo "Telp. 72353459" . "<br>";

echo "<br>";

echo "Program Penghitung Besaran Angsuran Hutang<br>";
echo "Besaran Pinjaman : Rp. 1,000,000<br>";
echo "Masukan besar bunga (%) : 10<br>";
echo "Total Pinjaman : Rp. 1,100,000<br>";
echo "Lama angsuran (bulan) : 5<br>";
echo "Besaran angsuran : Rp. " . number_format($angsuran, 0, ',', '.') . "<br>";
echo "Keterlambatan Angsuran (Hari) : 40<br>";
echo "Denda Keterlambatan : Rp. " . number_format($denda, 0, ',', '.') . "<br>";
echo "Besaran Pembayaran : Rp. " . number_format($totalPembayaran, 0, ',', '.') . "<br>";
?>