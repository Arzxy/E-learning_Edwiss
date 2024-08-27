<?php
require_once '../helper/connection.php';
$nidn = $_SESSION['login']['nidn'];
$dosen = mysqli_query($connection, "SELECT * FROM dosen WHERE nidn='$nidn'");
$data = mysqli_fetch_array($dosen);
?>
<div class="navbar-bg bg-greenlight"></div>
<nav class="navbar navbar-expand-lg main-navbar">
  <form class="form-inline mr-auto">
    <ul class="navbar-nav mr-3">
      <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
    </ul>
  </form>
  <ul class="navbar-nav navbar-right">
    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
        <img alt="image" src="../../<?= $data['link_profile'] ?>" class="rounded-circle mr-1">
        <div class="d-sm-none d-lg-inline-block">Hi, <?= $data['nama_dosen'] ?></div>
      </a>
      <div class="dropdown-menu dropdown-menu-right">
        <a href="../logout.php" class="dropdown-item has-icon text-danger">
          <i class="fas fa-sign-out-alt"></i> Logout
        </a>
      </div>
    </li>
  </ul>
</nav>