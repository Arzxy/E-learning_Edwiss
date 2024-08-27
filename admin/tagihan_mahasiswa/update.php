<?php
session_start();
require_once '../helper/connection.php';

$nim = $_POST['nim'];
$tagihan_baru = $_POST['tagihan_baru'];

$query = mysqli_query($connection, "UPDATE tagihan SET tagihan = '$tagihan_baru' WHERE nim='$nim'");

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
