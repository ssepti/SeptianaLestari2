<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
<?php 
// Mengambil data dari file sakit.php yang berisi class untuk koneksi ke database
include 'sakit.php';

// Membuat instance class Database
$mysqli = new Database();
?>
<?php
// Mengambil file nav.php
include 'nav.php';
?>
<div class="mt-5">
    <div class="px-5 mt-3">
        <h1 align="center">Data Izin Ketidakhadiran Pegawai Keperluan Sakit</h1>
        <br>
        <br>
        <!-- Membuat tabel untuk menampilkan data -->
        <table class="table table-sm table-success table-striped table-bordered">
            <thead>
                <tr align="center">
                    <th>No</th>
                    <th>IZIN ID</th>
                    <th>KEPERLUAN</th>
                    <th>FINGER PRINT ID</th>
                    <th>TANGGAL MULAI IZIN</th>
                    <th>DURASI IZIN (HARI)</th>
                    <th>DURASI IZIN (JAM)</th>
                    <th>DURASI IZIN (MENIT)</th>
                    <th>NAMA PENGUSUL</th>
                    <th>TANGGAL USUL</th>
                    <th>TANDA TANGAN PENGUSUL</th>
                    <th>PUTUSAN</th>
                    <th>TANGGAL DISETUJUI</th>
                    <th>TANDA TANGAN ATASAN</th>
                    <th>CATATAN</th>
                    <th>DOSEN ID</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                // Inisialisasi variabel $no untuk penomoran data dalam tabel
                $no = 1; 
                ?>
                <!-- Perulangan data yang diambil dari query dalam class sakit.php -->
                <?php foreach ($datas as $show) { ?>
                    <tr>
                        <!-- Menampilkan nomor urut -->
                        <td><?php echo $no++; ?></td>
                        <!-- Menampilkan data dari setiap kolom berdasarkan field dari database -->
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
