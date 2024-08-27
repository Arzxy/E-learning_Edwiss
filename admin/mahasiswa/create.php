<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$jurusan = mysqli_query($connection, "SELECT * FROM jurusan");
$dosen = mysqli_query($connection, "SELECT * FROM dosen");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Tambah Mahasiswa</h1>
    <a href="./index.php" class="btn btn-light">Kembali</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <!-- // Form -->
          <form action="./store.php" method="POST">
            <table cellpadding="8" class="w-100">
              <tr style="background-color: #d8d8d8;">
                <td style="display: flex; align-items: center;"><h6 style="margin-bottom: 0px!important; padding: 4px">Data Diri</h6></td>
                <td></td>
              </tr>
              <tr>
                <td>Nomor Induk Kependudukan (NIK)</td>
                <td><input class="form-control" type="text" name="nik"></td>
              </tr>
              <tr>
                <td>Nama Mahasiswa</td>
                <td><input class="form-control" type="text" name="nama"></td>
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
                <td>Tempat Lahir</td>
                <td><input class="form-control" type="text" name="tempat_lahir" size="20"></td>
              </tr>
              <tr>
                <td>Tanggal Lahir</td>
                <td><input class="form-control" type="date" id="datepicker" name="tanggal_lahir"></td>
              </tr>
              <tr style="background-color: #d8d8d8;">
                <td style="display: flex; align-items: center;"><h6 style="margin-bottom: 0px!important; padding: 4px">Akademik</h6></td>
                <td></td>
              </tr>
              <tr>
                <td>Perguruan Tinggi</td>
                <td><input class="form-control" type="text" name="perguruan_tinggi" size="20" value="Edwiss School" disabled></td>
              </tr>
              <tr>
                <td>NIM</td>
                <td><input class="form-control" type="text" name="nim"></td>
              </tr>
              <tr>
                <td>Program Studi</td>
                <td>
                  <select class="form-control" name="nama_jurusan" id="nama_jurusan" required>
                    <option value="">--Pilih Program Prodi--</option>
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
                <td>Tahun Masuk</td>
                <td>
                  <select class="form-control" name="tahun_masuk" id="tahun_masuk" required>
                    <option value="">--Pilih Tahun Masuk--</option>
                    <?php
                    for ($x = 2015; $x <= date("Y"); $x++) {
                    ?>
                      <option value=<?= $x ?>><?= $x ?></option>
                    <?php
                    }
                    ?>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Status</td>
                <td><input class="form-control" type="text" name="status" size="20" value="Aktif" disabled></td>
              </tr>
              <tr>
                <td>Jenis Kelas</td>
                <td>
                  <select class="form-control" name="jenis_kelas" id="jenis_kelas" required>
                    <option value="">--Pilih Jenis Kelas--</option>
                    <option value="Reguler 1">Reguler 1</option>
                    <option value="Karyawan">Karyawan</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Dosen PA/Wali</td>
                <td>
                  <div id="dosen_paa" style="display: block;">
                    <select class="form-control">
                      <option value="">--Pilih Dosen PA/Wali--</option>
                    </select>
                  </div>
                  <select class="form-control" name="dosen_pa" id="dosen_pa" style="display: none;" required>
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
                <td>Jalur Pendaftaran</td>
                <td>
                  <select class="form-control" name="jalur_pendaftaran" id="jalur_pendaftaran" required>
                    <option value="">--Pilih Jalur Pendaftaran--</option>
                    <option value="Mandiri">Mandiri</option>
                    <option value="Ujian Masuk">Ujian Masuk</option>
                    <option value="Beasiswa">Beasiswa</option>
                    <option value="KIP">KIP</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Gelombang Masuk</td>
                <td>
                  <select class="form-control" name="gelombang_masuk" id="gelombang_masuk" required>
                    <option value="">--Pilih Gelombang Masuk--</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Tanggal Masuk</td>
                <td><input class="form-control" type="date" id="datepickerr" name="tanggal_masuk"></td>
              </tr>
              <tr>
                <td>Periode Masuk</td>
                <td>
                  <select class="form-control" name="periode_masuk" id="periode_masuk" required>
                    <option value="">--Pilih Periode Masuk--</option>
                    <?php
                    for ($x = 2015; $x <= date("Y"); $x++) {
                    ?>
                      <option value=<?= $x ?>><?= $x ?></option>
                    <?php
                    }
                    ?>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Periode Akhir</td>
                <td>
                  <select class="form-control" name="periode_akhir" id="periode_akhir" required>
                    <option value="">--Pilih Periode Akhir--</option>
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
    var dosenPa = document.getElementById('dosen_pa');
    var dosenPaa = document.getElementById('dosen_paa');
    
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

<script>
  document.getElementById('periode_masuk').addEventListener('change', function() {
    var selectedPeriodeMasuk = parseInt(this.value);
    var periodeAkhir = document.getElementById('periode_akhir');
    
    console.log("Periode : "+parseInt(this.value));
    // Clear existing options
    periodeAkhir.innerHTML = '<option value="">--Pilih Periode Akhir--</option>';
    
    if (selectedPeriodeMasuk) {
      for (var i = selectedPeriodeMasuk; i <= selectedPeriodeMasuk + 6; i++) {
        var option = document.createElement('option');
        option.value = i;
        option.text = i;
        periodeAkhir.add(option);
      }
    }
  });
</script>