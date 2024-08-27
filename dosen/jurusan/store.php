<?php
session_start();
require_once '../helper/connection.php';

$id = $_POST['id'];
$nama_jurusan = $_POST['nama_jurusan'];

$query = mysqli_query($connection, "insert into jurusan (id, nama_jurusan) value('$id', '$nama_jurusan')");

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
