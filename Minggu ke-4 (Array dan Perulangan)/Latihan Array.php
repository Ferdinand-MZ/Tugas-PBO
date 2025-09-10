<?php
class Mahasiswa {
    private $nama;
    private $kelas;
    private $mataKuliah;
    private $nilai;

    public function __construct($nama, $kelas, $mataKuliah, $nilai) {
        $this->nama = $nama;
        $this->kelas = $kelas;
        $this->mataKuliah = $mataKuliah;
        $this->nilai = $nilai;
    }

    public function getNama() { return $this->nama; }
    public function getKelas() { return $this->kelas; }
    public function getMataKuliah() { return $this->mataKuliah; }
    public function getNilai() { return $this->nilai; }

    public function getStatus() {
        return ($this->nilai >= 75) ? "Lulus" : "Tidak Lulus";
    }
}

$mahasiswa = array(
    new Mahasiswa("Aditya", "SI 2", "Pemrograman Berorientasi Objek", 80),
    new Mahasiswa("Shinta", "SI 2", "Pemrograman Berorientasi Objek", 75),
    new Mahasiswa("Tadak", "SI 2", "Pemrograman Berorientasi Objek", 55)
);

foreach ($mahasiswa as $m) {
    echo "<hr>";
    echo "Nama: " . $m->getNama() . "<br>";
    echo "Kelas: " . $m->getKelas() . "<br>";
    echo "Mata Kuliah: " . $m->getMataKuliah() . "<br>";
    echo "Nilai: " . $m->getNilai() . "<br>";
    echo "Lulus: " . $m->getStatus() . "<br><br>";
}
echo "<hr>";
?>