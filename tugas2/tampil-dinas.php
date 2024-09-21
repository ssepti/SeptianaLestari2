<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
<?php 
// Smengambil data pada file dinas.php yang berisi class Dinas (termasuk koneksi database)
include 'dinas.php';

// Membuat instance dari class Database yang merupakan parent class dari Dinas
$mysqli = new Database();
?>

<?php
// Menyertakan file nav.php untuk menampilkan navigasi di halaman
include 'nav.php';
?>
<div class="mt-5">
<div class="px-5 mt-3">
        <h1 align="center">Data Izin Ketidakhadiran Pegawai Keperluan Dinas</h1>
        <br><br>

        <!-- Membuat Tabel untuk menampilkan data -->
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
                <!-- Variabel $no digunakan untuk penomoran -->
                <?php $no = 1; ?>
                
                <!-- Perulangan data yang didapatkan dari class Dinas -->
                <?php foreach ($datas as $show) { ?>
                    <tr>
                        <!-- Menampilkan data dinas per baris -->
                        <td><?php echo $no++; ?></td>
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
