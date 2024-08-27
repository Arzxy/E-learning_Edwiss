<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$kode_matkul = $_GET['kode_matkul'];
$query = mysqli_query($connection, "SELECT * FROM matakuliah WHERE kode_matkul='$kode_matkul'");
$jurusan = mysqli_query($connection, "SELECT * FROM jurusan");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Ubah Data Prodi</h1>
    <a href="./index.php" class="btn btn-light">Kembali</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <!-- // Form -->
          <form action="./update.php" method="post">
            <?php
            while ($row = mysqli_fetch_array($query)) {
            ?>
              <table cellpadding="8" class="w-100">
                <tr>
                  <td>Kode Mata Kuliah</td>
                  <td>
                    <input type="hidden" name="kode_matkul" value="<?= $row['kode_matkul'] ?>">
                    <input class="form-control" required value="<?= $row['kode_matkul'] ?>" disabled>
                  </td>
                </tr>
                <tr>
                  <td>Nama Mata Kuliah</td>
                  <td><input class="form-control" type="text" name="nama_matkul" required value="<?= $row['nama_matkul'] ?>"></td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td><input class="form-control" type="number" name="sks" max="6" required value="<?= $row['sks'] ?>"></td>
                </tr>
                <tr>
                  <td>Jurusan</td>
                  <td>
                    <select class="form-control" name="nama_jurusan" id="nama_jurusan" required>
                      <?php
                      while ($r = mysqli_fetch_array($jurusan)) :
                      ?>
                        <option value="<?= $r['id'] ?>" <?php if ($row['jurusan'] == $r['id']) {
                                                                      echo "selected";
                                                                    } ?>><?= $r['nama_jurusan'] ?></option>
                      <?php
                      endwhile;
                      ?>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>Semester</td>
                  <td><input class="form-control" required value="<?= $row['semester'] ?>" disabled></td>
                </tr>
                <tr>
                  <td>
                    <input class="btn btn-greenlight d-inline" type="submit" name="proses" value="Ubah">
                    <a href="./index.php" class="btn btn-danger ml-1">Batal</a>
                  <td>
                </tr>
              </table>

            <?php } ?>
          </form>
        </div>
      </div>
    </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>