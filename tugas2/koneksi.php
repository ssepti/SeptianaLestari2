<?php 
//Membuat kelas dengan nama Database
class Database {
    //Melakukan encapsulation
    //private $host, $user, $pass, $db diberikan aksebilitas private karena 
    //Properti-properti ini bersifat sensitif karena mereka menyimpan informasi penting 
    //terkait koneksi ke basis data seperti Nama host dari server database, Nama pengguna untuk mengakses database
    // Kata sandi untuk mengakses database, dan Nama basis data yang ingin diakses.
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "izin_pegawai";
    //Alasan penggunaan protected: Properti $conn adalah objek koneksi ke database
    //yang mungkin diperlukan oleh objek lain atau komponen lain di dalam 
    protected $conn;
    //membuat constructor pada kelas database yang akan di instansiasi pada objek
    public function __construct() {
        // Membuat koneksi menggunakan mysqli
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
        
        if ($this->conn->connect_error) {
            die("Koneksi database gagal: " . $this->conn->connect_error);
        } //jika database tidak terkoneksi akan muncul tulisan koneksi database gagal
    }
       //membuat metode tampilData
    public function tampilData() {
        $data = "SELECT * FROM izin_pegawai";
        $hasil = $this->conn->query($data); // Menggunakan $this->conn untuk query
 
        $result = []; // Inisialisasi array kosong untuk hasil
        if ($hasil->num_rows > 0) {
            while ($d = $hasil->fetch_assoc()) { 
                $result[] = $d;
            }
        }
 
        return $result;
    }
}

// Membuat instance class Database
$db = new Database();
?>