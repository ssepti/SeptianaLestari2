# Tugas 2 Praktikum WEB II
<hr>
<h3>Membuat View berbasis OOP yang mengambil data dari MySQL dalam PHP dari 'Studi Kasus Izin Ketidakhadiran Pegawai'</h3>
<hr>
Nama : Septiana Lestari

NPM : 230202089

Kelas : TI2D
<hr>
<h4>Task 1</h4>

Membuat View berbasis OOP yang mengambil data dari MySQL dalam PHP

Mengambil Data dari database

    class Database {
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "izin_pegawai";
    //Alasan penggunaan public: Properti $conn adalah objek koneksi ke database
    //yang mungkin diperlukan oleh objek lain atau komponen lain di dalam aplikasi
    public $conn;
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


Membuat file koneksi.php yang digunakan mengkoneksikan tampilan php oop dengan database
    <hr>
    <h4>Task 2</h4>

Menggunakan _construct sebagai penghubung ke database

     public function __construct() {
        // Membuat koneksi menggunakan mysqli
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
        
        if ($this->conn->connect_error) {
            die("Koneksi database gagal: " . $this->conn->connect_error);
        } //jika database tidak terkoneksi akan muncul tulisan koneksi database gagal
    }
Membuat koneksi ke database MySQL menggunakan kelas MySQLi. Variabel $this->conn akan menyimpan koneksi yang berhasil dibuat dan memeriksa apakah terjadi kesalahan saat mencoba terhubung ke database. Jika ada kesalahan koneksi, program akan menghentikan eksekusi dan menampilkan pesan "Koneksi database gagal"
<hr>
<h4>Task 3</h4>

Menerapkan enkapsulasi sesuai dengan logika studi kasus.

Aksebilitas private

    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "izin_pegawai";
private $host, $user, $pass, $db diberikan aksebilitas private karena Properti-properti ini bersifat sensitif karena mereka menyimpan informasi penting. terkait koneksi ke basis data seperti Nama host dari server database, Nama pengguna untuk mengakses database, Kata sandi untuk mengakses database, dan Nama basis data yang ingin diakses.

Aksebilitas Protected

    protected $conn;

$conn diberi aksebilitas protected agar dapat diakses oleh kelas turunan (subclass), tetapi tetap menjaga agar tidak bisa diakses langsung dari luar kelas.

Aksebilitas Public pada method

    public function tampilData() {

method tersebut diberi aksebilitas public agar dapat dipanggil dari luar kelas, seperti dari file lain atau instance objek yang dibuat di luar kelas.
<hr>
<h4>Task 4</h4>

Membuat kelas turunan menggunakan konsep pewarisan (inheritance).

    class Database {
     }
     
Class Database merupakan class parent yang akan menurukan properti conn dan methodnya ke kelas turunannya.

    class Sakit extends Database {
    public function __construct() {
        parent::__construct();
    }

Class sakit adalah class yang mewarisi properti dan method dari class parentnya

    class Cuti extends Database {
    public function __construct() {
        parent::__construct();
    }
Class Cuti adalah class yang mewarisi properti dan method dari class parentnya

    class Dinas extends Database{
    public function __construct()
    {
        parent::__construct();
    }

<hr>
<h4>Task 5</h4>

Terapkan polimorfisme untuk setidaknya 2 peran sesuai dengan studi kasus Izin Ketidakhadiran Pegawai.


    class Database {
       ...
       }
          public function tampilData() {
          $data = "SELECT * FROM izin_pegawai";
          $hasil = $this->conn->query($data);
 
          $result = []; // Inisialisasi array kosong untuk hasil
          if ($hasil->num_rows > 0) {
            while ($d = $hasil->fetch_assoc()) { 
                $result[] = $d;
            }
          }
 
        return $result;
    }
    }

Pada Class Database, dibuat method tampilData yang akan menampilkan Data izin Ketidakhadiran Pegawai secara keseuluruhan. Method ini kemudian diimplementasikan disetiap kelas turunannya dengan hasil yang berbeda.

    class Sakit extends Database {
      ...
    }
    public function tampilData(){
        $sql = "SELECT * FROM izin_pegawai WHERE keperluan = 'Sakit'";
        return $this->conn->query($sql);
    }
    }

Pada Class Sakit. dilakukan implementasi method tampilData yang diturunkan dari kelas parent tetapi, dalam kelas ini hanya menampilkan data izin ketidakhadiran pegawai yang memiliki keperluan Sakit.

    class Cuti extends Database {
      ...
    }

    public function tampilData() {
        $sql = "SELECT * FROM izin_pegawai WHERE keperluan = 'Cuti'";
        return $this->conn->query($sql);
    }
    }

Pada Class Cuti. dilakukan implementasi method tampilData yang diturunkan dari kelas parent tetapi, dalam kelas ini hanya menampilkan data izin ketidakhadiran pegawai yang memiliki keperluan Cuti.

    class Dinas extends Database{
      ...
    }
    public function tampilData(){
        $sql = "SELECT * FROM izin_pegawai WHERE keperluan = 'Dinas'";
        return $this->conn->query($sql);
    }
    }

Pada Class Dinas. dilakukan implementasi method tampilData yang diturunkan dari kelas parent tetapi, dalam kelas ini hanya menampilkan data izin ketidakhadiran pegawai yang memiliki keperluan Dinas.

<hr>
<h4>Hasil Tampilan</h4>

1. Tampilan Data Izin Ketidakhadiran Pegawai awal.

![hasil1](https://github.com/user-attachments/assets/2cfa5ca3-dba4-4866-85d9-a26c74a5bb4b)


2. Tampilan Data Izin Ketidakhadiran Pegawai keperluan Sakit.

![hasil2](https://github.com/user-attachments/assets/e2180060-3216-4a69-801c-28621d377dd6)

3. Tampilan Data Izin Ketidakhadiran Pegawai keperluan Cuti.

![hasil3](https://github.com/user-attachments/assets/e374ae2f-796d-4f7c-8abd-0c49d3f32572)

4. Tampilan Data Izin Ketidakhadiran Pegawai keperluan Dinas.

![hasil4](https://github.com/user-attachments/assets/1ee09ff1-b67c-40c6-a2c6-8379e75c4812)
