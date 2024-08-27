<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$nim = $_GET['nim'];
$query = mysqli_query($connection, "SELECT * FROM mahasiswa_datadiri WHERE nim='$nim'");
$data = mysqli_fetch_array($query);

$queryy = mysqli_query($connection, "SELECT * FROM mahasiswa_akademik WHERE nim='$nim'");
$datas = mysqli_fetch_array($queryy);
$program_studi = $datas['program_studi'];
$dosen_pa = $datas['dosen_pa'];

$jurusan = mysqli_query($connection, "SELECT * FROM jurusan");

$dosen = mysqli_query($connection, "SELECT * FROM dosen");

$jurusanAsli = mysqli_query($connection, "SELECT * FROM jurusan WHERE id='$program_studi'");
$dataName = mysqli_fetch_array($jurusanAsli);
$jurusanNamaAsli = $dataName['nama_jurusan'];

$jurusanAslii = mysqli_query($connection, "SELECT * FROM dosen WHERE id='$dosen_pa'");
$dataNamee = mysqli_fetch_array($jurusanAslii);
$dosen_paNamaAsli = $dataNamee['nama_dosen'];

// Array untuk memetakan nama bulan dari bahasa Indonesia ke angka bulan
$bulanIndo = [
  'Januari' => '01',
  'Februari' => '02',
  'Maret' => '03',
  'April' => '04',
  'Mei' => '05',
  'Juni' => '06',
  'Juli' => '07',
  'Agustus' => '08',
  'September' => '09',
  'Oktober' => '10',
  'November' => '11',
  'Desember' => '12'
];

list($hari, $bulan, $tahun) = explode(' ', $data['tanggal_lahir']);
$tanggal_lahir = $tahun . '-' . $bulanIndo[$bulan] . '-' . $hari;

list($hari, $bulan, $tahun) = explode(' ', $datas['tanggal_masuk']);
$tanggal_masuk = $tahun . '-' . $bulanIndo[$bulan] . '-' . $hari;
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Ubah Data Mahasiswa</h1>
    <a href="./index.php" class="btn btn-light">Kembali</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <!-- // Form -->
          <form action="./update.php" method="post">
              <table cellpadding="8" class="w-100">
                <tr style="background-color: #d8d8d8;">
                  <td style="display: flex; align-items: center;"><h6 style="margin-bottom: 0px!important; padding: 4px">Data Diri</h6></td>
                  <td></td>
                </tr>
                <tr>
                  <td>Nomor Induk Kependudukan (NIK)</td>
                  <td><input class="form-control" type="text" name="nik" value="<?= $data['nik'] ?>" required></td>
                </tr>
                <tr>
                  <td>Nama Mahasiswa</td>
                  <td><input class="form-control" type="text" name="nama" value="<?= $data['nama'] ?>" required></td>
                </tr>
                <tr>
                  <td>Jenis Kelamin</td>
                  <td>
                    <select class="form-control" name="jenkel" id="jenkel" required>
                      <option value="<?= $data['jenis_kelamin'] ?>"><?= $data['jenis_kelamin'] ?> (Dipilih)</option>
                      <option value="Laki-laki">Laki-laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>Tempat Lahir</td>
                  <td><input class="form-control" type="text" name="tempat_lahir" size="20" value="<?= $data['tempat_lahir'] ?>" required></td>
                </tr>
                <tr>
                  <td>Tanggal Lahir</td>
                  <td><input class="form-control" type="date" id="datepicker" name="tanggal_lahir" value="<?= $tanggal_lahir ?>" required></td>
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
                  <td><input class="form-control" type="text" name="nim" value="<?= $data['nim'] ?>" required></td>
                </tr>
                <tr>
                  <td>Program Studi</td>
                  <td>
                    <select class="form-control" name="nama_jurusan" id="nama_jurusan" required>
                      <option value="<?= $datas['program_studi'] ?>"><?= $jurusanNamaAsli ?> (Dipilih)</option>
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
                      <option value="<?= $datas['angkatan'] ?>"><?= $datas['angkatan'] ?> (Dipilih)</option>
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
                  <td>
                    <select class="form-control" name="status" id="status" required>
                      <option value="<?= $datas['status'] ?>"><?= $datas['status'] ?> (Dipilih)</option>
                      <option value="Aktif">Aktif</option>
                      <option value="Non Aktif">Non Aktif</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>Jenis Kelas</td>
                  <td>
                    <select class="form-control" name="jenis_kelas" id="jenis_kelas" required>
                      <option value="<?= $datas['jenis_kelas'] ?>"><?= $datas['jenis_kelas'] ?> (Dipilih)</option>
                      <option value="Reguler 1">Reguler 1</option>
                      <option value="Karyawan">Karyawan</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>Dosen PA/Wali</td>
                  <td>
                    <select class="form-control" name="dosen_pa" id="dosen_pa" required>
                      <option value="<?= $datas['dosen_pa'] ?>"><?= $dosen_paNamaAsli ?> (Dipilih)</option>
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
                      <option value="<?= $datas['jalur_pendaftaran'] ?>"><?= $datas['jalur_pendaftaran'] ?> (Dipilih)</option>
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
                      <option value="<?= $datas['gelombang_masuk'] ?>"><?= $datas['gelombang_masuk'] ?> (Dipilih)</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>Tanggal Masuk</td>
                  <td><input class="form-control" type="date" id="datepickerr" name="tanggal_masuk" value="<?= $tanggal_masuk ?>" required></td>
                </tr>
                <tr>
                  <td>Periode Masuk</td>
                  <td>
                    <select class="form-control" name="periode_masuk" id="periode_masuk" required>
                      <option value="<?= $datas['periode_masuk'] ?>"><?= $datas['periode_masuk'] ?> (Dipilih)</option>
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
                      <option value="<?= $datas['periode_akhir'] ?>"><?= $datas['periode_akhir'] ?> (Dipilih)</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>
                    <input class="btn btn-greenlight d-inline" type="submit" name="proses" value="Ubah">
                    <a href="./index.php" class="btn btn-danger ml-1">Batal</a>
                  <td>
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
  function adjustDosenPA() {
    var selectedJurusan = document.getElementById('nama_jurusan').value;
    var dosenPa = document.getElementById('dosen_pa');

    for (var i = 0; i < dosenPa.options.length; i++) {
      var option = dosenPa.options[i];
      var jurusan = option.getAttribute('data-jurusan');

      if (jurusan === selectedJurusan || option.value === "") {
        option.style.display = 'block';
      } else {
        option.style.display = 'none';
      }
    }
  }

  window.onload = function() {
    adjustDosenPA();
  };

  document.getElementById('nama_jurusan').addEventListener('change', function() {
    document.getElementById('dosen_pa').value = "";
    adjustDosenPA();
  });
</script>

<script>
  document.getElementById('periode_masuk').addEventListener('change', function() {
    var selectedPeriodeMasuk = parseInt(this.value);
    var periodeAkhir = document.getElementById('periode_akhir');
    
    periodeAkhir.innerHTML = '<option value="" style="display: none;"></option>';
    
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