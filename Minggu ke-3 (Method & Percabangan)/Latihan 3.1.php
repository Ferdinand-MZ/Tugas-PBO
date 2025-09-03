<?php
class Guru {
    var $nama_nama = array("de","ce","ve","re"); // array (string)
    var $nama_guru;   // belum ada value
    var $NIK;         // belum ada value
    var $jabatan;     // belum ada value
    var $alamat;      // belum ada value
}

class Murid {
    var $nama_siswa;  // belum ada value
    var $NIS;         // belum ada value
    var $kelas;       // belum ada value
    var $alamat;      // belum ada value
}

class Kurikulum {
    var $tahun_akademik; // belum ada value
    var $sks_matkul;     // belum ada value
}

class Mobil {
    var $jumlahRoda = 4;          // integer (4)
    var $warna = "Merah";         // string ("Merah")
    var $bahanBakar = "Pertamax"; // string ("Pertamax")
    var $harga = 1200000000;      // integer (1200000000)
    var $merek = 'A';             // char/string ('A')

    public function statusHarga() {
        if ($this->harga > 500000000) 
            $status = 'Mahal';   // string
        else    
            $status = 'Murah';   // string
        return $status;
    }
}

// Membuat object dari class Mobil
$ObjekBMW = new Mobil();   // object Mobil
$ObjekTesla = new Mobil(); // object Mobil
$ObjekAudi = new Mobil();  // object Mobil

// Output
echo "Mobil BMW: <br>";
echo "Jumlah Roda: " . $ObjekBMW->jumlahRoda . "<br>";
echo "Warna: " . $ObjekBMW->warna . "<br>";
echo "Bahan Bakar: " . $ObjekBMW->bahanBakar . "<br>";
echo "Harga: " . $ObjekBMW->harga . "<br>";
echo "Merek: " . $ObjekBMW->merek . "<br>";
echo "Status Harga: " . $ObjekBMW->statusHarga() . "<br><br>";

echo "Mobil Tesla: <br>";
$ObjekTesla->harga = 300000000; // ubah harga biar keliatan beda
echo "Harga: " . $ObjekTesla->harga . "<br>";
echo "Status Harga: " . $ObjekTesla->statusHarga() . "<br><br>";

echo "Mobil Audi: <br>";
$ObjekAudi->warna = "Hitam"; // ubah warna
$ObjekAudi->harga = 700000000;
echo "Warna: " . $ObjekAudi->warna . "<br>";
echo "Harga: " . $ObjekAudi->harga . "<br>";
echo "Status Harga: " . $ObjekAudi->statusHarga() . "<br>";
?>
