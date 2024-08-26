<?php
session_start();
require_once '../helper/connection.php';

$id = $_POST['id'];
$nama_jurusan = $_POST['nama_jurusan'];

$query = mysqli_query($connection, "UPDATE jurusan SET nama_jurusan = '$nama_jurusan' WHERE id='$id'");

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
