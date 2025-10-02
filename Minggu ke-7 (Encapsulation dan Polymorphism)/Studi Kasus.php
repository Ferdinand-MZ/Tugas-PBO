<?php

class Induk {
    protected $tabungan;
    
    public function __construct($saldo) {
        $this->tabungan = $saldo;
    }
    
    public function getTabungan() {
        return $this->tabungan;
    }
    
    public function setTabungan($saldo) {
        $this->tabungan = $saldo;
    }
}

class Anak extends Induk {
    private $siswa1, $siswa2, $siswa3;
    
    public function __construct($s1, $s2, $s3) {
        // Panggil konstruktor Induk dengan saldo awal 0
        parent::__construct(0);
        $this->siswa1 = $s1;
        $this->siswa2 = $s2;
        $this->siswa3 = $s3;
    }
    
    public function tambahTabungan($siswa, $jumlah) {
        // Pastikan input siswa adalah angka
        $siswa = (int)$siswa;
        $jumlah = (int)$jumlah;

        if ($siswa == 1) $this->tabungan += $jumlah;
        else if ($siswa == 2 && $this->siswa1 == $this->siswa2) $this->tabungan += $jumlah;
        else if ($siswa == 3 && $this->siswa1 == $this->siswa3) $this->tabungan += $jumlah;
    }
    
    public function tarikTunai($siswa, $jumlah) {
        // Pastikan input siswa dan jumlah adalah angka
        $siswa = (int)$siswa;
        $jumlah = (int)$jumlah;

        if ($this->tabungan < $jumlah) {
            echo "Saldo tidak mencukupi!\n";
            return;
        }

        if ($siswa == 1) $this->tabungan -= $jumlah;
        else if ($siswa == 2 && $this->siswa1 == $this->siswa2) $this->tabungan -= $jumlah;
        else if ($siswa == 3 && $this->siswa1 == $this->siswa3) $this->tabungan -= $jumlah;
    }
}

$siswa = new Anak(1000, 1000, 1000);

while (true) {
    echo "\n--------------------------\n";
    echo "1. Cek Saldo\n2. Tambah Saldo\n3. Tarik Tunai\n4. Keluar\nPilih: ";
    $pilihan = trim(fgets(STDIN));
    
    if ($pilihan == 4) {
        echo "Terima kasih!\n";
        break;
    }
    
    if (!in_array($pilihan, ['1', '2', '3'])) {
        echo "Pilihan tidak valid!\n";
        continue;
    }

    // Input siswa hanya dibutuhkan untuk pilihan 1, 2, atau 3
    echo "Siswa (1/2/3): ";
    $siswaNum = trim(fgets(STDIN));

    // Validasi nomor siswa
    if (!in_array($siswaNum, ['1', '2', '3'])) {
        echo "Nomor Siswa tidak valid!\n";
        continue;
    }

    if ($pilihan == 1) {
        echo "Saldo: " . $siswa->getTabungan() . "\n";
    } else {
        echo "Jumlah: ";
        $jumlah = trim(fgets(STDIN));
        
        if (!is_numeric($jumlah) || $jumlah <= 0) {
            echo "Jumlah harus angka positif!\n";
            continue;
        }

        if ($pilihan == 2) {
            $siswa->tambahTabungan($siswaNum, $jumlah);
            echo "Penambahan saldo berhasil.\n";
        }
        else if ($pilihan == 3) {
            $siswa->tarikTunai($siswaNum, $jumlah);
        }
    }
}

?>