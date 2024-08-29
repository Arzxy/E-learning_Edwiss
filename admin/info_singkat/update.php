<?php
session_start();
require_once '../helper/connection.php';

$id = $_POST['id'];
$pesan = $_POST['pesan'];

$query = mysqli_query($connection, "UPDATE info_singkat SET pesan = '$pesan' WHERE id='$id'");

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
