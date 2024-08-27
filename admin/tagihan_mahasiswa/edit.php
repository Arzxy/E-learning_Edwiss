<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$nim = $_GET['nim'];
$query = mysqli_query($connection, "SELECT * FROM tagihan WHERE nim='$nim'");
$data = mysqli_fetch_array($query);
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Ubah Data Tagihan</h1>
    <a href="./index.php" class="btn btn-light">Kembali</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <!-- // Form -->
          <form id="formTagihan" action="./update.php" method="post">
            <table cellpadding="8" class="w-100">
              <tr>
                <td>NIM</td>
                <td>
                  <input class="form-control" type="hidden" name="nim" value="<?php echo $nim; ?>"/>
                  <input class="form-control" type="text" max="100" value="<?php echo $nim; ?>" disabled/>
                </td>
              </tr>
              <tr>
                <td>Nama Mahasiswa</td>
                <td><input class="form-control" type="text" max="100" value="<?php echo $data['nama_mahasiswa']; ?>" disabled/></td>
              </tr>
              <tr>
                <td>Status</td>
                <td><input class="form-control" type="text" max="100" value="<?php echo $data['status']; ?>" disabled/></td>
              </tr>
              <tr>
                <td>Tagihan Lama</td>
                <td><input class="form-control" type="text" max="100" value="Rp&nbsp;<?= number_format($data['tagihan'], 0,',','.') ?>" disabled/></td>
              </tr>
              <tr>
                <td>Tagihan Baru</td>
                <td><input class="form-control" type="text" name="tagihan_baru" id="tagihan_baru" max="100" placeholder="Rp&nbsp;0"></td>
              </tr>
              <tr>
                <td>
                  <input class="btn btn-greenlight" type="submit" name="proses" value="Simpan">
                  <a href="./index.php" class="btn btn-danger ml-1">Batal</a>
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
  // Fungsi untuk memformat angka menjadi format Rupiah
  function formatRupiah(angka, prefix) {
    var number_string = angka.replace(/[^,\d]/g, '').toString(),
    split = number_string.split(','),
    sisa = split[0].length % 3,
    rupiah = split[0].substr(0, sisa),
    ribuan = split[0].substr(sisa).match(/\d{3}/gi);
    if (ribuan) {
      separator = sisa ? '.' : '';
      rupiah += separator + ribuan.join('.');
    }
    rupiah = split[1] !== undefined ? rupiah + ',' + split[1] : rupiah;
    return prefix === undefined ? rupiah : (rupiah ? 'Rp ' + rupiah : '');
  }

  function bersihkanFormatRupiah(angka) {
    return angka.replace(/[^,\d]/g, '');
  }

  var tagihanBaru = document.getElementById('tagihan_baru');
  tagihanBaru.addEventListener('keyup', function(e) {
    this.value = formatRupiah(this.value, 'Rp ');
  });

  document.getElementById('formTagihan').addEventListener('submit', function(e) {
    var tagihanBaru = document.getElementById('tagihan_baru');
    tagihanBaru.value = bersihkanFormatRupiah(tagihanBaru.value);
  });
</script>