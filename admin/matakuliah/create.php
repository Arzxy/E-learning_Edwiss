<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';
$jurusan = mysqli_query($connection, "SELECT * FROM jurusan");
$dosen = mysqli_query($connection, "SELECT * FROM dosen");
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
                <td>Dosen</td>
                <td>
                  <div id="dosen_pengampus" style="display: block;">
                    <select class="form-control">
                      <option value="">--Pilih Dosen PA/Wali--</option>
                    </select>
                  </div>
                  <select class="form-control" name="dosen_pengampu" id="dosen_pengampu" style="display: none;" required>
                    <option value="">--Pilih Dosen PA/Wali--</option>
                    <?php
                    while ($r = mysqli_fetch_array($dosen)) :
                    ?>
                      <option value="<?= $r['id'] ?>" data-jurusan="<?= $r['jurusan'] ?>"><?= $r['nama_dosen'] ?></option>
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
                    for ($x = 1; $x <= 14; $x++) {
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

<script>
  document.getElementById('nama_jurusan').addEventListener('change', function() {
    var selectedJurusan = this.value;
    var dosenPa = document.getElementById('dosen_pengampu');
    var dosenPaa = document.getElementById('dosen_pengampus');
    
    if (selectedJurusan !== "") {
        dosenPa.style.display = 'block';
        dosenPaa.style.display = 'none';
    } else {
        dosenPa.style.display = 'none';
        dosenPaa.style.display = 'block';
    }

    for (var i = 0; i < dosenPa.options.length; i++) {
      var option = dosenPa.options[i];
      var jurusan = option.getAttribute('data-jurusan');

      if (jurusan === selectedJurusan || option.value === "") {
        option.style.display = 'block';
      } else {
        option.style.display = 'none';
      }
    }
  });
</script>