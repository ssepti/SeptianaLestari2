<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
    <body>
<?php 
// Mengambil data dari file koneksi.php yang biasanya berisi konfigurasi database
include 'koneksi.php';
// Membuat instance dari class Database yang diambil dari file koneksi.php
$mysqli = new Database();
?>
<?php
// Mengambil data dari file nav.php yang mungkin berisi navigasi untuk halaman ini
include 'nav.php';
?>
<div class="mt-5">
    <div class="px-5 mt-3">
    <h1 align="center">Data Izin Ketidakhadiran Pegawai</h1>
    <br>
    <br>
<!-- Membuat tabel untuk menampilkan data izin -->
    <table class="table table-sm table-success table-striped table-bordered">
    <thead>
        <tr align="center">
            <th scope="col">No</th>
            <th scope="col">IZIN ID</th>
            <th scope="col">KEPERLUAN</th>
            <th scope="col">FINGER PRINT ID</th>
            <th scope="col">TANGGAL MULAI IZIN</th>
            <th scope="col">DURASI IZIN(HARI)</th>
            <th scope="col">DURASI IZIN(JAM)</th>
            <th scope="col">DURASI IZIN(MENIT)</th>
            <th scope="col">NAMA PENGUSUL</th>
            <th scope="col">TANGGAL USUL</th>
            <th scope="col">TANDA TANGAN PENGUSUL</th>
            <th scope="col">PUTUSAN</th>
            <th scope="col">TANGGAL DISETUJUI</th>
            <th scope="col">TANDA TANGAN ATASAN</th>
            <th scope="col">CATATAN</th>
            <th scope="col">DOSEN ID</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        // Inisialisasi variabel $no untuk penomoran data dalam tabel
        $no = 1; 
        ?>
        <?php 
        // Mengambil data dari fungsi tampilData() yang ada di class Database dan melakukan loop untuk setiap datanya
        foreach ($mysqli->tampilData() as $show) { ?>
            <tr>
                <!-- Menampilkan nomor urut -->
                <td><?php echo $no++; ?></td>
                <!-- Menampilkan data izin dari setiap kolom berdasarkan nama field dari tabel database -->
                <td><?php echo $show['izin_id']; ?></td>
                <td><?php echo $show['keperluan']; ?></td>
                <td><?php echo $show['finger_print_id']; ?></td>
                <td><?php echo $show['tgl_mulai_izin']; ?></td>
                <td><?php echo $show['durasi_izin_hari']; ?></td>
                <td><?php echo $show['durasi_izin_jam']; ?></td>
                <td><?php echo $show['durasi_izin_menit']; ?></td>
                <td><?php echo $show['nama_pengusul']; ?></td>
                <td><?php echo $show['tgl_usul']; ?></td>
                <td><?php echo $show['ttd_pengusul']; ?></td>
                <td><?php echo $show['putusan']; ?></td>
                <td><?php echo $show['tgl_disetujui']; ?></td>
                <td><?php echo $show['ttd_atasan']; ?></td>
                <td><?php echo $show['catatan']; ?></td>
                <td><?php echo $show['dosen_id']; ?></td>
            </tr>
        <?php } ?>
    </tbody>
    </table>
    </div>
</div>
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
