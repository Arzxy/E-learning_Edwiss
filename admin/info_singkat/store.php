<?php
session_start();
require_once '../helper/connection.php';

$id = $_POST['id'];
$pesan = $_POST['pesan'];

$query = mysqli_query($connection, "insert into info_singkat (pesan) value('$pesan')");

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
