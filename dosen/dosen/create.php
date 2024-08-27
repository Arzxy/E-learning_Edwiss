<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';
$jurusan = mysqli_query($connection, "SELECT * FROM jurusan");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Tambah Dosen</h1>
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
                <td>NIDN</td>
                <td><input class="form-control" type="text" name="nidn" size="20" required></td>
              </tr>
              <tr>
                <td>Nik</td>
                <td><input class="form-control" type="text" name="nik" size="20" required></td>
              </tr>
              <tr>
                <td>Nama Dosen</td>
                <td><input class="form-control" type="text" name="nama" size="20" required></td>
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
                <td>Jenis Kelamin</td>
                <td>
                  <select class="form-control" name="jenkel" id="jenkel" required>
                    <option value="">--Pilih Jenis Kelamin--</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td colspan="3"><textarea class="form-control" name="alamat" id="alamat" required></textarea></td>
              </tr>
              <tr>
                <td>
                  <input class="btn btn-greenlight" type="submit" name="proses" value="Simpan">
                  <input class="btn btn-danger" type="reset" name="batal" value="Bersihkan"></td>
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