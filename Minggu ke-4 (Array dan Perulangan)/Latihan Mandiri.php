<?php
class Segitiga {
    private $tinggi;

    // Setter
    public function setTinggi($tinggi) {
        $this->tinggi = $tinggi;
    }

    // Getter
    public function getTinggi() {
        return $this->tinggi;
    }

    // Segitiga rata kiri (terbalik)
    public function segitigaKiri() {
        $n = $this->getTinggi();
        for ($i = $n; $i >= 1; $i--) {
            for ($j = 1; $j <= $i; $j++) {
                echo "* ";
            }
            echo "<br>";
        }
    }

    // Segitiga rata kanan
    public function segitigaKanan() {
        $n = $this->getTinggi();
        for ($i = 1; $i <= $n; $i++) {
            // spasi
            for ($s = $n; $s > $i; $s--) {
                echo "&nbsp;&nbsp;";
            }
            for ($j = 1; $j <= $i; $j++) {
                echo "* ";
            }
            echo "<br>";
        }
    }

    // Segitiga sama sisi
    public function segitigaSamaSisi() {
        $n = $this->getTinggi();
        for ($i = 1; $i <= $n; $i++) {
            // spasi
            for ($s = $n; $s > $i; $s--) {
                echo "&nbsp;&nbsp;";
            }
            // bintang
            for ($j = 1; $j <= (2*$i-1); $j++) {
                echo "*";
            }
            echo "<br>";
        }
    }
}

// ====== OUTPUT ======
$segitiga = new Segitiga();
$segitiga->setTinggi(5);

echo "<h3>Segitiga Terbalik (Kiri)</h3>";
$segitiga->segitigaKiri();

echo "<h3>Segitiga Sama Sisi</h3>";
$segitiga->segitigaSamaSisi();

echo "<h3>Segitiga Rata Kanan</h3>";
$segitiga->segitigaKanan();
?>