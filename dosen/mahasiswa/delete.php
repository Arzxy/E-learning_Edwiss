<?php
session_start();
require_once '../helper/connection.php';

$nim = $_GET['nim'];

$result = mysqli_query($connection, "DELETE FROM mahasiswa_datadiri WHERE nim='$nim'");
$results = mysqli_query($connection, "DELETE FROM mahasiswa_akademik WHERE nim='$nim'");
$resultss = mysqli_query($connection, "DELETE FROM mahasiswa_alamat WHERE nim='$nim'");
$resultsss = mysqli_query($connection, "DELETE FROM mahasiswa_biodata_ayah WHERE nim='$nim'");
$resultssss = mysqli_query($connection, "DELETE FROM mahasiswa_biodata_ibu WHERE nim='$nim'");

if (mysqli_affected_rows($connection) > 0) {
  $_SESSION['info'] = [
    'status' => 'success',
    'message' => 'Berhasil menghapus data'
  ];
  header('Location: ./index.php');
} else {
  $_SESSION['info'] = [
    'status' => 'failed',
    'message' => mysqli_error($connection)
  ];
  header('Location: ./index.php');
}
