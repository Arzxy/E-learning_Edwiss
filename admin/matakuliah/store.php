<?php
session_start();
require_once '../helper/connection.php';

$kode_matkul = $_POST['kode_matkul'];
$nama_matkul = $_POST['nama_matkul'];
$sks = $_POST['sks'];
$nama_jurusan = $_POST['nama_jurusan'];
$dosen_pengampu = $_POST['dosen_pengampu'];
$semester = $_POST['semester'];
if ($semester % 2 == 0){ 
  $smt = "Genap"; 
}else {
  $smt = "Ganjil"; 
}
$query = mysqli_query($connection, "insert into matakuliah (kode_matkul, nama_matkul, sks, jurusan, dosen, semester, smt) value ('$kode_matkul', '$nama_matkul', '$sks', '$nama_jurusan', '$dosen_pengampu', '$semester', '$smt')");

if ($query) {
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
