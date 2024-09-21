<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>

<?php 
// Mengambil class Cuti dari file cuti.php yang menangani koneksi database dan query keperluan cuti
include 'cuti.php';

// Membuat instance dari class Database yang diwarisi oleh class Cuti
$mysqli = new Database();
?>

<?php
// Menyertakan file nav.php yang berisi navigasi
include 'nav.php';
?>
<div class="mt-5">
<div class="px-5 mt-3">
        <h1 align="center">Data Izin Ketidakhadiran Pegawai Keperluan Cuti</h1>
        <br><br>

        <!-- Tabel untuk menampilkan data izin cuti -->
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
                    <th>TTD PENGUSUL</th>
                    <th>PUTUSAN</th>
                    <th>TANGGAL DISETUJUI</th>
                    <th>TTD ATASAN</th>
                    <th>CATATAN</th>
                    <th>DOSEN ID</th>
                </tr>
            </thead>
            <tbody>
                <!-- Perulangan data cuti dari database -->
                <?php $no = 1; ?>
                <?php foreach ($datas as $show) { ?>
                    <tr>
                        <!-- Menampilkan data cuti per baris -->
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>
