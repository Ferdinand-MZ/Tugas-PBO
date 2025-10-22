<?php

class Induk {
    protected $saldo;
    
    public function __construct($saldo) {
        $this->saldo = $saldo;
    }
    
    public function getSaldo() {
        return $this->saldo;
    }
    
    public function setSaldo($saldo) {
        $this->saldo = $saldo;
    }
}

class Anak extends Induk {
    private $saldo1, $saldo2, $saldo3;
    private $name1 = "Aditya Hafidz";
    private $name2 = "Eko Nugroho";
    private $name3 = "Dani Abdul";
    private $pin = "1234";
    
    public function __construct($s1, $s2, $s3) {
        parent::__construct(0);
        $this->saldo1 = $s1;
        $this->saldo2 = $s2;
        $this->saldo3 = $s3;
    }
    
    public function getName($siswa) {
        if ($siswa == 1) return $this->name1;
        if ($siswa == 2) return $this->name2;
        if ($siswa == 3) return $this->name3;
    }
    
    public function getSaldobySiswa($siswa) {
        if ($siswa == 1) return $this->saldo1;
        if ($siswa == 2) return $this->saldo2;
        if ($siswa == 3) return $this->saldo3;
    }
    
    public function setSaldobySiswa($siswa, $saldoBaruSaldo) {
        if ($siswa == 1) $this->saldo1 = $saldoBaruSaldo;
        if ($siswa == 2) $this->saldo2 = $saldoBaruSaldo;
        if ($siswa == 3) $this->saldo3 = $saldoBaruSaldo;
    }
    
    public function validasiPin($input) {
        return $input == $this->pin;
    }
    
    public function tambahSaldo($siswa, $jumlah) {
        $jumlah = (int)$jumlah;
        $saldoSekarang = $this->getSaldobySiswa($siswa);
        $bunga = $jumlah * 0.05;
        $saldoBaru = $saldoSekarang + $jumlah + $bunga;
        $this->setSaldobySiswa($siswa, $saldoBaru);
    }
    
    public function tarikTunai($siswa, $jumlah) {
        $jumlah = (int)$jumlah;
        $saldoSekarang = $this->getSaldobySiswa($siswa);
        if ($saldoSekarang < $jumlah) {
            return false;
        }
        $saldoBaru = $saldoSekarang - $jumlah;
        $this->setSaldobySiswa($siswa, $saldoBaru);
        return true;
    }
}

function formatSaldo($num) {
    return "Rp." . number_format($num, 0, '.', '.');
}

$bank = new Anak(500000, 1200000, 750000);

// Menu pilihan nyah
echo "Jumlah Nasabah Simpanan Pelajar : 3\n";
echo "Nasabah ke -1 : Aditya Hafidz Saldo " . formatSaldo(500000) . "\n";
echo "Nasbah ke -2 : Eko Nugroho Saldo " . formatSaldo(1200000) . "\n";
echo "Nasabah ke -3 : Dani Abdul Saldo " . formatSaldo(750000) . "\n";
echo "Pilih no nasabah : ";
$siswaNum = (int)trim(fgets(STDIN));

// membuat pilihan sebagai array, inget !in_array itu kalo tidak berada di dalam array
if (!in_array($siswaNum, [1, 2, 3])) {
    echo "Nomor nasabah tidak valid!\n";
    exit;
}

$name = $bank->getName($siswaNum);
$saldoStr = formatSaldo($bank->getSaldobySiswa($siswaNum));
echo "\nNasabah ke : $siswaNum $name Saldo $saldoStr\n";

// Mengecek autentikasi, ketika belum atutentikasi, maka akan dilakukan pengecekan melalui pin ATM
$authenticated = false;
while (!$authenticated) {
    echo "1. Masukan pin ATM : \n";
    $pin = trim(fgets(STDIN));
    if ($bank->validasiPin($pin)) {
        $authenticated = true;
    } else {
        echo "\nMaaf kode pin yang anda masukan tidak sesuai\nSilahkan masukan kembali kode pin yang benar !\n\n";
    }
}

// menu ketika true autentikasi dimmana uhhh sudah memilih nasabah nya
while (true) {
    $saldoStr = formatSaldo($bank->getSaldobySiswa($siswaNum));
    echo "\nNasabah ke : $siswaNum $name Saldo $saldoStr\n";
    echo "Pilihan Menu : \n";
    echo "1. Tambah saldo : Jumlah saldo terakhir + bunga 5%\n";
    echo "2. Ambil uang: saldo terakhir – nominal pengambilan\n";
    echo "Masukan angka pilihan menu : ";
    $pilihan = trim(fgets(STDIN));
    
    if ($pilihan == 1) {
        echo "Pilihan Menu : 1 Tambah Saldo\n";
        echo "Masukan nominal saldo yang akan ditambah: ";

        $jumlahStr = trim(fgets(STDIN));
        $jumlah = (int)str_replace('.', '', $jumlahStr);
        
        if ($jumlah <= 0) {
            echo "Jumlah harus positif!\n";
            continue;
        }
        
        $saldoLama = $bank->getSaldobySiswa($siswaNum);
        $bank->tambahSaldo($siswaNum, $jumlah);
        $saldoBaru = $bank->getSaldobySiswa($siswaNum);

        $bunga = $jumlah * 0.05;
        echo "Saldo terakhir : \n";
        echo formatSaldo($saldoLama) . " + " . formatSaldo($jumlah) . " + (" . formatSaldo($jumlah) . "*5% ) = " . formatSaldo($saldoLama + $jumlah) . " + " . formatSaldo($bunga) . " = " . formatSaldo($saldoBaru) . "\n";
    
    } else if ($pilihan == 2) {
        echo "Pilihan Menu : 2 Ambil Uang\n";
        echo "Masukan nominal saldo yang akan di ambil : ";
        
        $jumlahStr = trim(fgets(STDIN));
        $jumlah = (int)str_replace('.', '', $jumlahStr);
        
        if ($jumlah <= 0) {
            echo "Jumlah harus positif!\n";
            continue;
        }
        
        $saldoLama = $bank->getSaldobySiswa($siswaNum);
        
        if ($bank->tarikTunai($siswaNum, $jumlah)) {
            $saldoBaru = $bank->getSaldobySiswa($siswaNum);
            echo "Saldo terakhir : \n";
            echo formatSaldo($saldoLama) . " - " . formatSaldo($jumlah) . " = " . formatSaldo($saldoBaru) . "\n";
        } else {
            echo "Jumlah uang yang diambil terlalu melebihi saldo tabungan\n";
        }

    } else {
        echo "Pilihan tidak valid!\n";
        continue;
    }
    
    echo "Kembali ke menu awal : y/n \n";
    $kembali = trim(fgets(STDIN));
    if (strtolower($kembali) != 'y') {
        echo "Terima kasih!\n";
        break;
    }
}

?>