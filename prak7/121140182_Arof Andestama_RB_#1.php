<?php
//Nama : Arof Andestama
//NIM : 121140182
//Kelas : RB 


//Class dan Object 
class Mahasiswa {
    public $Nama;
    public $NIM;
    public $Kelas;
    
    public function __construct($Nama, $NIM, $Kelas) {
        $this->Nama = $Nama;
        $this->NIM = $NIM;
        $this->Kelas = $Kelas;
    }
    public function getInfo() {
        return "Nama \t: " . $this->Nama . "\nNIM \t: " . $this->NIM . " \nKelas \t: " . $this->Kelas;
    }
}
$Nama = new Mahasiswa("Arof Andestama", 121140182, "RB\n\n");
echo $Nama->getInfo();


//Constructor dan Destructor
class Mahasiswa2 {
    public $Nama;
    public $Umur;

    public function __construct($Nama, $Umur) {
        $this->Nama = $Nama;
        $this->Umur = $Umur;
        echo "Objek mahasiswa {$this->Nama} telah dibuat dengan umur {$this->Umur}.\n";
    }
    public function __destruct() {
        echo "Objek mahasiswa {$this->Nama} dengan umur {$this->Umur} telah dihapus.\n\n";
    }
}
$mahasiswa2 = new Mahasiswa2("Arof", "21 Tahun");
?>