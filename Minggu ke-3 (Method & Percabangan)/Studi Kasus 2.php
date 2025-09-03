<?php
$students = [
    ["Mahasiswa 1", 55, "Ganjil"],
    ["Mahasiswa 2", 76, "Genap"],
    ["Mahasiswa 3", 65, "Ganjil"],
    ["Mahasiswa 4", 95, "Ganjil"],
    ["Mahasiswa 5", 59, "Ganjil"],
    ["Mahasiswa 6", 65, "Ganjil"],
    ["Mahasiswa 7", 70, "Genap"],
    ["Mahasiswa 8", 66, "Genap"],
    ["Mahasiswa 9", 62, "Genap"],
    ["Mahasiswa 10", 85, "Ganjil"]
];

foreach ($students as $student) {
    $nama = $student[0];
    $nilai = $student[1];
    $ket = $student[2];
    
    if ($ket == "Ganjil") {
        echo "$nama - Nilai: $nilai - Nilai Angka Ganjil<br>";
    } else {
        echo "$nama - Nilai: $nilai - Nilai Angka Genap<br>";
    }
}
?>