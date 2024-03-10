<?php
// Include class Mahasiswa
include 'Mahasiswa.php';

// Membuat objek Mahasiswa
$mahasiswa = new Mahasiswa("Ananda Fauziah", "Tutut Wurijanto", "Universitas Dinamika");

// Menampilkan informasi mahasiswa
echo $mahasiswa->getInfo();
?>
