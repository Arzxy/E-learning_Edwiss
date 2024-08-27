<?php
session_start();
require_once '../helper/connection.php';

$nidn = $_POST['nidn'];
$nik = $_POST['nik'];
$nama_dosen = $_POST['nama'];
$nama_jurusan = $_POST['nama_jurusan'];
$jenkel = $_POST['jenkel'];
$alamat = $_POST['alamat'];

$query = mysqli_query($connection, "insert into dosen(nidn, nik, nama_dosen, jurusan, jenkel_dosen, alamat_dosen) value('$nidn', '$nik', '$nama_dosen', '$nama_jurusan', '$jenkel', '$alamat')");
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
