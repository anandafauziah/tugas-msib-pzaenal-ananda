<?php
class Mahasiswa {
    public $nama;
    public $dosen;
    public $kampus;

    public function __construct($nama, $dosen, $kampus) {
        $this->nama = $nama;
        $this->dosen = $dosen;
        $this->kampus = $kampus;
    }

    public function getInfo() {
        return "Nama: {$this->nama}, Dosen: {$this->dosen}, Kampus: {$this->kampus}";
    }
}
?>