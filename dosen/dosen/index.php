<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$result = mysqli_query($connection, "SELECT * FROM dosen");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>List Dosen</h1>
    <a href="./create.php" class="btn btn-greenlight">Tambah Data</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover table-striped w-100" id="table-1">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>NIDN</th>
                  <th>Nik</th>
                  <th>Nama dosen</th>
                  <th>Jurusan</th>
                  <th>Jenis Kelamin</th>
                  <th>Alamat</th>
                  <th>Profile</th>
                  <th style="width: 150">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                while ($data = mysqli_fetch_array($result)) :
                ?>

                  <tr>
                    <td><?= $data['id'] ?></td>
                    <td><?= $data['nidn'] ?></td>
                    <td><?= $data['nik'] ?></td>
                    <td><?= $data['nama_dosen'] ?></td>
                    <td><?= $data['jurusan'] ?></td>
                    <td><?= $data['jenkel_dosen'] ?></td>
                    <td><?= $data['alamat_dosen'] ?></td>
                    <td style="display: flex; justify-content: center; align-items: center;"><img src="../../<?= $data['link_profile'] ?>" width="50" height="50" alt=""></td>
                    <td>
                      <a class="btn btn-sm btn-danger mb-md-0 mb-1" href="delete.php?nidn=<?= $data['nidn'] ?>">
                        <i class="fas fa-trash fa-fw"></i>
                      </a>
                      <a class="btn btn-sm btn-info" href="edit.php?nidn=<?= $data['nidn'] ?>">
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