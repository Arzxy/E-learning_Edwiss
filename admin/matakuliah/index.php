<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

// $result = mysqli_query($connection, "SELECT * FROM matakuliah");

$result = mysqli_query($connection, "
    SELECT 
        mk.smt, 
        mk.kode_matkul, 
        mk.nama_matkul, 
        d.nama_dosen, 
        mk.sks, 
        j.nama_jurusan, 
        mk.semester 
    FROM 
        matakuliah mk
    JOIN 
        dosen d ON mk.dosen = d.id
    JOIN 
        jurusan j ON mk.jurusan = j.id
    ORDER BY 
        mk.semester, mk.kode_matkul
");

?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>List Mata Kuliah</h1>
    <a href="./create.php" class="btn btn-greenlight">Tambah Data</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover table-striped w-100" id="table-1">
              <thead>
                <tr class="text-center">
                  <th>No</th>
                  <th>Kode Matkul</th>
                  <th>Nama Matakuliah</th>
                  <th>SKS</th>
                  <th>Jurusan</th>
                  <th>Dosen</th>
                  <th>Semester</th>
                  <th style="width: 150">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                while ($data = mysqli_fetch_array($result)) :
                ?>

                  <tr class="text-center">
                    <td><?= $no ?></td>
                    <td><?= $data['kode_matkul'] ?></td>
                    <td><?= $data['nama_matkul'] ?></td>
                    <td><?= $data['sks'] ?></td>
                    <td><?= $data['nama_jurusan'] ?></td>
                    <td><?= $data['nama_dosen'] ?></td>
                    <td><?= $data['semester'] ?> (<?= $data['smt'] ?>)</td>
                    <td>
                      <a class="btn btn-sm btn-danger mb-md-0 mb-1" href="delete.php?kode_matkul=<?= $data['kode_matkul'] ?>">
                        <i class="fas fa-trash fa-fw"></i>
                      </a>
                      <a class="btn btn-sm btn-info" href="edit.php?kode_matkul=<?= $data['kode_matkul'] ?>">
                        <i class="fas fa-edit fa-fw"></i>
                      </a>
                    </td>
                  </tr>

                <?php
                  $no++;
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