<?php
// Mengambil data dari file koneksi.php yang berisi class Database untuk koneksi ke database
include("koneksi.php");

// Membuat class Cuti yang merupakan turunan dari class Database
class Cuti extends Database {

    // Konstruktor class Cuti, menggunakan parent::__construct() untuk memanggil konstruktor class induk (Database)
    public function __construct() {
        // Memanggil konstruktor parent (Database) agar koneksi database dari class Database bisa digunakan
        parent::__construct();
    }

    // Membuat method turunan untuk menampilkan data izin pegawai dengan keperluan 'Cuti'
    public function tampilData() {
        // Query SQL untuk mengambil semua data dari tabel izin_pegawai di mana keperluan adalah 'Cuti'
        $sql = "SELECT * FROM izin_pegawai WHERE keperluan = 'Cuti'";
        
        // Mengembalikan hasil dari eksekusi query menggunakan koneksi database ($this->conn adalah koneksi dari class Database)
        return $this->conn->query($sql);
    }
}

// Membuat objek dari class Cuti
$cuti1 = new Cuti();

// Memanggil method tampilData() dari objek $cuti1 untuk mendapatkan data dari database
$datas = $cuti1->tampilData();
?>
