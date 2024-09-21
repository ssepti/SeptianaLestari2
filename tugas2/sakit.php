<?php
// Mengambil file koneksi.php yang berisi class Database dan koneksi ke database
include("koneksi.php");

// Membuat class Sakit yang merupakan turunan dari class Database
class Sakit extends Database {

    // Constructor class Sakit yang memanggil constructor parent-nya (class Database)
    public function __construct() {
        // Memanggil constructor dari class induk (Database) untuk mewarisi koneksi ke database
        parent::__construct();
    }

    // Membuat Method turunan untuk menampilkan data izin yang keperluannya adalah 'Sakit'
    public function tampilData(){
        // SQL query untuk mengambil semua data dari tabel izin_pegawai di mana kolom keperluan berisi 'Sakit'
        $sql = "SELECT * FROM izin_pegawai WHERE keperluan = 'Sakit'";

        // Mengembalikan hasil query dari database menggunakan koneksi yang diwarisi dari class Database
        return $this->conn->query($sql);
    }
}

// Membuat instance dari class Sakit
$sakit1 = new Sakit();

// Memanggil method tampilData() untuk mengambil data izin dengan keperluan 'Sakit'
// dan menyimpan hasilnya dalam variabel $datas
$datas = $sakit1->tampilData();
?>
