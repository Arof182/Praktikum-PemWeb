<?php
//Nama : Arof Andestama
//NIM : 121140182
//Kelas : RB 


//Inheritance
class Mahasiswa3 {
    protected $Nama;
    protected $Matkul;

    public function __construct($Nama, $Matkul) {
        $this->Nama = $Nama;
        $this->Matkul = $Matkul;
    }
    public function getInfo() {
        return "Nama \t: " . $this->Nama . "Matkul \t: " . $this->Matkul;
    }
}

class informatika extends Mahasiswa3 {
    private $Kelas;
    
    public function __construct($Nama, $Matkul, $Kelas) {
        parent::__construct($Nama, $Matkul);
        $this->Kelas = $Kelas;
    }
    public function getInfo() {
        return parent::getInfo() . "Kelas \t: " . $this->Kelas;
    }
}

$informatika = new informatika("Arof Andestama\n", "Pemweb\n", "RB");
echo $informatika->getInfo();
?>