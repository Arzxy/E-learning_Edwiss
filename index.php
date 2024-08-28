<?php
session_start();
if(isset($_SESSION['login'])){
  header('Location: mahasiswa/index.php');
}else{
  header('Location: ./login.php');
}