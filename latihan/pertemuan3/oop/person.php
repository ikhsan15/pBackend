<?php
 
class Person {
    // definisikan sebuah property
    private $nama;
    private $alamat;
    private $jurusan;
 
    // definisikan sebuah getter (mengambil data) dan setter (menyimpan data)
    function getNama() {
        return $this->nama;
    }
 
    function getAlamat() {
        return $this->alamat;
    }
 
    function getjurusan() {
        return $this->jurusan;
    }
 
    function setNama($nama) {
        $this->nama = $nama;
    }
 
    function setAlamat($alamat) {
        $this->alamat = $alamat;
    }
 
    function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }
}
 
$isfa = new Person();
$isfa->setNama("ikhsan nur");
$isfa->setAlamat("Depok");
$isfa->setJurusan("Informatika");
 
echo $isfa->getNama();
echo "<br>";
 
echo $isfa->getAlamat();
echo "<br>";
 
echo $isfa->getjurusan();
echo "<br>";