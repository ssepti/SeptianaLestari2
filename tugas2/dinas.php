<?php
// Menghubungkan ke file koneksi.php yang berisi detail koneksi database
include("koneksi.php");

// Membuat class Dinas yang merupakan turunan dari class Database
class Dinas extends Database{

    // Membuat Constructor yang akan memanggil constructor parent (Database) untuk menginisialisasi koneksi ke database
    public function __construct()
    {
        parent::__construct(); // Memanggil constructor dari parent class
    }

    // Membuat Method turunan untuk mengambil data izin dengan keperluan 'Dinas'
    public function tampilData(){
        // Query SQL untuk mengambil semua data dari tabel izin_pegawai yang memiliki keperluan 'Dinas'
        $sql = "SELECT * FROM izin_pegawai WHERE keperluan = 'Dinas'";
        
        // Menjalankan query dan mengembalikan hasilnya
        return $this->conn->query($sql);
    }
}

// Membuat instance dari class Dinas
$dinas1 = new Dinas();

// Menjalankan method tampilData untuk mengambil data izin dengan keperluan 'Dinas'
$datas = $dinas1->tampilData();
?>
