<?php

class Karyawan {
    private $nama;
    private $golongan;
    private $jamLembur;
    private $totalGaji;

    // Constructor
    public function __construct($nama, $golongan, $jamLembur) {
        $this->nama = $nama;
        $this->golongan = $golongan;
        $this->jamLembur = $jamLembur;
    }

    // Destructor
    public function __destruct() {
        echo "Data {$this->nama} dihapus dari memori.\n";
    }

    // Setter & Getter
    public function setNama($nama) { 
        $this->nama = $nama; 
    }
    
    public function getNama() { 
        return $this->nama; 
    }

    public function setGolongan($golongan) { 
        $this->golongan = $golongan; 
    }
    
    public function getGolongan() { 
        return $this->golongan; 
    }

    public function setJamLembur($jam) {
         $this->jamLembur = $jam; 
    }

    public function getJamLembur() { 
        return $this->jamLembur; 
    }

    // Percabangan Hitung gaji pokok
    public function getGajiPokok() {
        switch($this->golongan) {
            case "Ib": return 1250000;
            case "Ic": return 1300000;
            case "Id": return 1350000;
            case "IIa": return 2000000;
            case "IIb": return 2100000;
            case "IIc": return 2200000;
            case "IId": return 2300000;
            case "IIIa": return 2400000;
            case "IIIb": return 2500000;
            case "IIIc": return 2600000;
            case "IIId": return 2700000;
            case "IVa": return 2800000;
            case "IVb": return 2900000;
            case "IVc": return 3000000;
            case "IVd": return 3100000;
            default: return 0;
        }
    }

    // Hitung total gaji
    public function hitungTotalGaji() {
        $lembur = $this->jamLembur * 15000;
        $this->totalGaji = $this->getGajiPokok() + $lembur;
        return $this->totalGaji;
    }
}

// Input jumlah karyawan
echo "Masukkan jumlah karyawan: ";
$jml = (int)trim(fgets(STDIN));

$karyawanList = [];

for ($i = 1; $i <= $jml; $i++) {
    echo "\nData Karyawan ke-$i\n";
    echo "Nama Karyawan: "; $nama = trim(fgets(STDIN));
    echo "Golongan: "; $golongan = trim(fgets(STDIN));
    echo "Total Jam Lembur: "; $jam = (int)trim(fgets(STDIN));

    $k = new Karyawan($nama, $golongan, $jam);
    $karyawanList[] = $k;
}

echo "\n==================== Data Gaji Karyawan ====================\n";
echo "Nama\t\tGolongan\tJam Lembur\tTotal Gaji\n";
echo "-----------------------------------------------------------\n";

foreach ($karyawanList as $k) {
    echo $k->getNama() . "\t\t" . $k->getGolongan() . "\t\t" . $k->getJamLembur() . "\t\t" . number_format($k->hitungTotalGaji(), 0, ',', '.') . "\n";
}

echo "===========================================================\n";

?>
