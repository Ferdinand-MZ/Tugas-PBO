<?php
//class manusia
class manusia {
    //menentukan property dengan protected
    protected $Nama = "Ardi";
    var $Kelas = "SI 2";

    //method protected
    protected function nama(){
        return "Nama : ".$this->Nama;
    }

    public function tampilkan_nama(){
        return $this->nama();
    }

    protected function tampilkan_kelas(){
        return "Kelas : ".$this->Kelas;
    }
}

//instansiasi class manusia
$manusia = new manusia();

//memanggil method public tampilkan_nama dari class manusia
echo $manusia->tampilkan_nama()."<br />";
echo $manusia->tampilkan_kelas();
?>