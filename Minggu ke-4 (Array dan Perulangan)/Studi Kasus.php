<?php
class BangunRuang {
    // Atribut
    private $jenis;
    private $sisi;
    private $jari;
    private $tinggi;

    // Setter
    public function setJenis($jenis) {
        $this->jenis = $jenis;
    }
    public function setSisi($sisi) {
        $this->sisi = $sisi;
    }
    public function setJari($jari) {
        $this->jari = $jari;
    }
    public function setTinggi($tinggi) {
        $this->tinggi = $tinggi;
    }

    // Getter
    public function getJenis() { return $this->jenis; }
    public function getSisi() { return $this->sisi; }
    public function getJari() { return $this->jari; }
    public function getTinggi() { return $this->tinggi; }

    // Hitung volume
    public function getVolume() {
        switch($this->jenis) {
            case "Bola":
                return (4/3) * pi() * pow($this->jari, 3);
            case "Kerucut":
                return (1/3) * pi() * pow($this->jari, 2) * $this->tinggi;
            case "Limas Segi Empat":
                return (1/3) * pow($this->sisi, 2) * $this->tinggi;
            case "Kubus":
                return pow($this->sisi, 3);
            case "Tabung":
                return pi() * pow($this->jari, 2) * $this->tinggi;
            default:
                return 0;
        }
    }
}

// Data array input
$input = [
    ["Bola", 0, 7, 0],
    ["Kerucut", 0, 7, 10],
    ["Limas Segi Empat", 8, 0, 24],
    ["Kubus", 30, 0, 0],
    ["Tabung", 0, 7, 10],
];

// Buat array objek
$data = [];
foreach ($input as $row) {
    $obj = new BangunRuang();
    $obj->setJenis($row[0]);
    $obj->setSisi($row[1]);
    $obj->setJari($row[2]);
    $obj->setTinggi($row[3]);
    $data[] = $obj;
}

// Output tabel
echo "<table border='1' cellpadding='5' cellspacing='0' style='border-collapse: collapse; width: 60%; margin: auto;'>";
echo "<tr style='background-color: #0652fe; color: white; text-align: center;'>
        <th>Jenis Bangun Ruang</th>
        <th>Sisi</th>
        <th>Jari-jari</th>
        <th>Tinggi</th>
        <th>Volume</th>
      </tr>";

foreach ($data as $d) {
    echo "<tr style='text-align: center;'>";
    echo "<td>".$d->getJenis()."</td>";
    echo "<td>".$d->getSisi()."</td>";
    echo "<td>".$d->getJari()."</td>";
    echo "<td>".$d->getTinggi()."</td>";
    echo "<td>".$d->getVolume()."</td>";
    echo "</tr>";
}
echo "</table>";
?>
