<?php
// 1. Definisikan Custom Exception Class untuk Error Format Email
// Menggunakan pesan error yang mencakup file dan baris (seperti contoh di materi)
class FormatException extends Exception {
    public function errorMessage() {
        $errorMsg = 'Error caught on line '.$this->getLine().' in '.$this->getFile().
        ': '.$this->getMessage().' is no valid E-Mail address';
        return $errorMsg;
    }
}

// 2. Definisikan Custom Exception Class untuk Error Konten Email (Bonus: Sesuai Output di Soal)
class ContentException extends Exception {
    public function errorMessage() {
        return 'Email mengandung kata \'lab4\' dan E-mail valid';
    }
}


// 3. Siapkan Array Data Email
$emails = [
    // Email Valid & Mengandung 'lab4'/'lab5'
    "lab4a@polsub.ac.id",
    "lab4b@polsub.ac.id",
    "lab4c@polsub.ac.id",
    "lab4d@polsub.ac.id",
    // Email Invalid
    "someone@example...com", // Format salah
    // Email Valid & Mengandung 'lab5'
    "lab5a@polsub.ac.id",
    "lab5b@polsub.ac.id",
    "lab5c@polsub.ac.id",
    "lab5d@polsub.ac.id",
    "lab5@polsub.ac.id",
    // Email yang tidak mengandung labX (DIASUMSIKAN LULUS SEMUA CEK)
    "aman@polsub.ac.id" 
];

$valid_count_lab4 = 0;
$valid_count_lab5 = 0;
$invalid_format_count = 0;
$total_valid_final = 0;

echo "--- Memulai Validasi Email ---<br><br>";

// 4. Lakukan Perulangan untuk Validasi dan Pengecekan
foreach ($emails as $email) {
    try {
        // Pengecekan 1: Validasi Format Email (Menggunakan FILTER_VALIDATE_EMAIL)
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
            // Jika format salah, lempar FormatException
            throw new FormatException("Format: " . $email);
        }

        // Pengecekan 2: Validasi Konten Email (Menggunakan strpos)
        // Jika format sudah benar, cek apakah mengandung 'lab4' atau 'lab5'
        if (strpos($email, "lab4") !== FALSE) {
            echo "Valid: " . $email . ". <br>"; // Dianggap valid secara format, tapi masuk kategori lab4
            $valid_count_lab4++;
        }
        else if (strpos($email, "lab5") !== FALSE) {
            echo "Valid: " . $email . ". <br>"; // Dianggap valid secara format, tapi masuk kategori lab5
            $valid_count_lab5++;
        }
        else {
            // Jika format benar dan tidak mengandung 'lab4' atau 'lab5'
            $total_valid_final++;
            echo "Valid: " . $email . ". <br>"; 
        }

    } catch (FormatException $e) {
        // Menangkap exception jika format email salah
        echo "INVALID: " . $e->errorMessage() . "<br>";
        $invalid_format_count++;
    } catch (Exception $e) {
        // Menangkap exception lain (jika ada, walau di kode ini semua ditangani di atas)
        echo "Terjadi Error: " . $e->getMessage() . "<br>";
        $invalid_format_count++;
    }
}

// 5. Hitung dan Tampilkan Hasil Akhir (Counting)
$total_valid_count = $valid_count_lab4 + $valid_count_lab5 + $total_valid_final;

echo "<br>--- Hasil Perhitungan ---<br>";
echo "Total Email Valid: " . $total_valid_count . "<br>";
echo "Total Email Tidak Valid (Format Error): " . $invalid_format_count . "<br>";
echo "Email Mengandung lab4: " . $valid_count_lab4 . "<br>";
echo "Email Mengandung lab5: " . $valid_count_lab5 . "<br>";
?>