<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$mahasiswa = mysqli_query($connection, "SELECT COUNT(*) FROM mahasiswa_datadiri");
$dosen = mysqli_query($connection, "SELECT COUNT(*) FROM dosen");
$matakuliah = mysqli_query($connection, "SELECT COUNT(*) FROM matakuliah");
$jurusan = mysqli_query($connection, "SELECT COUNT(*) FROM jurusan");
// $nilai = mysqli_query($connection, "SELECT COUNT(*) FROM nilai");

$total_mahasiswa = mysqli_fetch_array($mahasiswa)[0];
$total_dosen = mysqli_fetch_array($dosen)[0];
$total_matakuliah = mysqli_fetch_array($matakuliah)[0];
$total_jurusan = mysqli_fetch_array($jurusan)[0];
// $total_nilai = mysqli_fetch_array($nilai)[0];
?>

<section class="section">
  <div class="section-header">
    <h1>Dashboard</h1>
  </div>
  <div>
    <h3>Selamat Datang <?php echo $data['nama_dosen'] ?>...</h3>
  </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>