<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$result = mysqli_query($connection, "SELECT * FROM mahasiswa_datadiri");
$resultt = mysqli_query($connection, "SELECT * FROM mahasiswa_akademik");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>List Mahasiswa</h1>
    <a href="./create.php" class="btn btn-greenlight">Tambah Data</a>
  </div>

  <h6>Data Diri</h6>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover table-striped w-100" id="table-1">
              <thead>
                <tr class="text-center">
                  <th>Nim</th>
                  <th>Nama</th>
                  <th>Nik</th>
                  <th>NPWP</th>
                  <th>Email</th>
                  <th>No. Handphone</th>
                  <th>Jenis Kelamin</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>Agama</th>
                  <th>Profile</th>
                  <th style="width: 150">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                while ($data = mysqli_fetch_array($result)) :
                ?>

                  <tr>
                    <td><?= $data['nim'] ?></td>
                    <td><?= $data['nama'] ?></td>
                    <td><?= $data['nik'] ?></td>
                    <td><?= $data['npwp'] ?></td>
                    <td><?= $data['email'] ?></td>
                    <td><?= $data['no_handphone'] ?></td>
                    <td><?= $data['jenis_kelamin'] ?></td>
                    <td><?= $data['tempat_lahir'] ?></td>
                    <td><?= $data['tanggal_lahir'] ?></td>
                    <td><?= $data['agama'] ?></td>
                    <td style="display: flex; justify-content: center; align-items: center;"><img src="../../<?= $data['link_profile'] ?>" width="50" height="50" alt=""></td>
                    <td>
                      <a class="btn btn-sm btn-danger mb-md-0 mb-1" href="delete.php?nim=<?= $data['nim'] ?>">
                        <i class="fas fa-trash fa-fw"></i>
                      </a>
                      <a class="btn btn-sm btn-info" href="edit.php?nim=<?= $data['nim'] ?>">
                        <i class="fas fa-edit fa-fw"></i>
                      </a>
                    </td>
                  </tr>

                <?php
                endwhile;
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <h6>Akademik</h6>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover table-striped w-100" id="table-2">
              <thead>
                <tr class="text-center">
                  <th>Nim</th>
                  <th>Tagihan</th>
                  <th>Perguruan Tinggi</th>
                  <th>Program Studi</th>
                  <th>Angkatan</th>
                  <th>Status</th>
                  <th>Jenis Kelas</th>
                  <th>Dosen PA</th>
                  <th>Jalur Pendaftaran</th>
                  <th>Gelombang Masuk</th>
                  <th>Tanggal Masuk</th>
                  <th>Periode Masuk</th>
                  <th>Periode Akhir</th>
                  <th style="width: 150">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                while ($data = mysqli_fetch_array($resultt)) :
                ?>

                  <tr>
                    <td><?= $data['nim'] ?></td>
                    <td>Rp&nbsp;<?= number_format($data['tagihan'], 0,',',',') ?></td>
                    <td><?= $data['perguruan_tinggi'] ?></td>
                    <td><?= $data['program_studi'] ?></td>
                    <td><?= $data['angkatan'] ?></td>
                    <td><?= $data['status'] ?></td>
                    <td><?= $data['jenis_kelas'] ?></td>
                    <td><?= $data['dosen_pa'] ?></td>
                    <td><?= $data['jalur_pendaftaran'] ?></td>
                    <td><?= $data['gelombang_masuk'] ?></td>
                    <td><?= $data['tanggal_masuk'] ?></td>
                    <td><?= $data['periode_masuk'] ?></td>
                    <td><?= $data['periode_akhir'] ?></td>
                    <td>
                      <a class="btn btn-sm btn-danger mb-md-0 mb-1" href="delete.php?nim=<?= $data['nim'] ?>">
                        <i class="fas fa-trash fa-fw"></i>
                      </a>
                      <a class="btn btn-sm btn-info" href="edit.php?nim=<?= $data['nim'] ?>">
                        <i class="fas fa-edit fa-fw"></i>
                      </a>
                    </td>
                  </tr>

                <?php
                endwhile;
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>
<!-- Page Specific JS File -->
<?php
if (isset($_SESSION['info'])) :
  if ($_SESSION['info']['status'] == 'success') {
?>
    <script>
      iziToast.success({
        title: 'Sukses',
        message: `<?= $_SESSION['info']['message'] ?>`,
        position: 'topCenter',
        timeout: 5000
      });
    </script>
  <?php
  } else {
  ?>
    <script>
      iziToast.error({
        title: 'Gagal',
        message: `<?= $_SESSION['info']['message'] ?>`,
        timeout: 5000,
        position: 'topCenter'
      });
    </script>
<?php
  }

  unset($_SESSION['info']);
  $_SESSION['info'] = null;
endif;
?>
<script src="../assets/js/page/modules-datatables.js"></script>