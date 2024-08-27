<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';
$jurusan = mysqli_query($connection, "SELECT * FROM jurusan");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Tambah Mata Kuliah</h1>
    <a href="./index.php" class="btn btn-light">Kembali</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <!-- // Form -->
          <form action="./store.php" method="POST">
            <table cellpadding="8" class="w-100">
              <tr>
                <td>Kode Mata Kuliah</td>
                <td><input class="form-control" type="text" name="kode_matkul"></td>
              </tr>
              <tr>
                <td>Nama Mata Kuliah</td>
                <td><input class="form-control" type="text" name="nama_matkul"></td>
              </tr>
              <tr>
                <td>SKS</td>
                <td><input class="form-control" type="number" max="6" name="sks"></td>
              </tr>
              <tr>
                <td>Jurusan</td>
                <td>
                  <select class="form-control" name="nama_jurusan" id="nama_jurusan" required>
                    <option value="">--Pilih Prodi--</option>
                    <?php
                    while ($r = mysqli_fetch_array($jurusan)) :
                    ?>
                      <option value="<?= $r['id'] ?>"><?= $r['nama_jurusan'] ?></option>
                    <?php
                    endwhile;
                    ?>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Semester</td>
                <td>
                  <select class="form-control" name="semester" id="semester" required>
                    <option value="">--Pilih Semester--</option>
                    <?php
                    for ($x = 1; $x <= 12; $x++) {
                    ?>
                      <option value=<?= $x ?>><?= $x ?></option>
                    <?php
                    }
                    ?>
                  </select>
                </td>
              </tr>
              <tr>
                <td>
                  <input class="btn btn-greenlight" type="submit" name="proses" value="Simpan">
                  <input class="btn btn-danger" type="reset" name="batal" value="Bersihkan">
                </td>
              </tr>
            </table>
          </form>
        </div>
      </div>
    </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>