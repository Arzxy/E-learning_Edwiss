<?php
session_start();
require_once '../helper/connection.php';

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$jenkel = $_POST['jenkel'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$nim = $_POST['nim'];
$nama_jurusan = $_POST['nama_jurusan'];
$tahun_masuk = $_POST['tahun_masuk'];
$jenis_kelas = $_POST['jenis_kelas'];
$dosen_pa = $_POST['dosen_pa'];
$jalur_pendaftaran = $_POST['jalur_pendaftaran'];
$gelombang_masuk = $_POST['gelombang_masuk'];
$tanggal_masuk = $_POST['tanggal_masuk'];
$periode_masuk = $_POST['periode_masuk'];
$periode_akhir = $_POST['periode_akhir'];

$months = array(
  '01' => 'Januari', '02' => 'Februari', '03' => 'Maret', '04' => 'April',
  '05' => 'Mei', '06' => 'Juni', '07' => 'Juli', '08' => 'Agustus',
  '09' => 'September', '10' => 'Oktober', '11' => 'November', '12' => 'Desember'
);

$date_lahir = new DateTime($tanggal_lahir);
$day = $date_lahir->format('d');
$month = $months[$date_lahir->format('m')];
$year = $date_lahir->format('Y');
$formattedDate_lahir = "$day $month $year";

$date_masuk = new DateTime($tanggal_masuk);
$dayy = $date_masuk->format('d');
$monthh = $months[$date_masuk->format('m')];
$yearr = $date_masuk->format('Y');
$formattedDate_masuk = "$dayy $monthh $yearr";

$query = mysqli_query($connection, "insert into mahasiswa_datadiri 
(nim, nama, nik, jenis_kelamin, tempat_lahir, tanggal_lahir) 
value('$nim', '$nama', '$nik', '$jenkel', '$tempat_lahir', '$formattedDate_lahir')
");

$queryy = mysqli_query($connection, "insert into mahasiswa_akademik 
(nim, program_studi, angkatan, jenis_kelas, dosen_pa, jalur_pendaftaran, gelombang_masuk, tanggal_masuk, periode_masuk, periode_akhir) 
value('$nim', '$nama_jurusan', '$tahun_masuk', '$jenis_kelas', '$dosen_pa', '$jalur_pendaftaran', '$gelombang_masuk', '$formattedDate_masuk', '$periode_masuk', '$periode_akhir')
");

$queryyy = mysqli_query($connection, "insert into mahasiswa_alamat 
(nim) 
value('$nim')
");

$queryyyy = mysqli_query($connection, "insert into mahasiswa_biodata_ayah 
(nim) 
value('$nim')
");

$queryyyyy = mysqli_query($connection, "insert into mahasiswa_biodata_ibu 
(nim) 
value('$nim')
");

if (mysqli_affected_rows($connection) > 0) {
//if ($query && $queryy && $queryyy && $queryyyy && $queryyyyy) {
  $_SESSION['info'] = [
    'status' => 'success',
    'message' => 'Berhasil menambah data'
  ];
  header('Location: ./index.php');
} else {
  $_SESSION['info'] = [
    'status' => 'failed',
    'message' => mysqli_error($connection)
  ];
  header('Location: ./index.php');
}
