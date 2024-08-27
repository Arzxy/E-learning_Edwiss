<?php
session_start();
require_once '../helper/connection.php';

$nidn = $_POST['nidn'];
$nama_dosen = $_POST['nama'];
$nama_jurusan = $_POST['nama_jurusan'];
$jenkel = $_POST['jenkel'];
$alamat = $_POST['alamat'];

$query = mysqli_query($connection, "UPDATE dosen SET nama_dosen = '$nama_dosen', jurusan = '$nama_jurusan', jenkel_dosen = '$jenkel', alamat_dosen = '$alamat' WHERE nidn = '$nidn'");
if ($query) {
  $_SESSION['info'] = [
    'status' => 'success',
    'message' => 'Berhasil mengubah data'
  ];
  header('Location: ./index.php');
} else {
  $_SESSION['info'] = [
    'status' => 'failed',
    'message' => mysqli_error($connection)
  ];
  header('Location: ./index.php');
}
