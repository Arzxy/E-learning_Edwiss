<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$id = $_GET['id'];
$query = mysqli_query($connection, "SELECT * FROM jurusan WHERE id='$id'");
$data = mysqli_fetch_array($query);
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Ubah Data Nilai</h1>
    <a href="./index.php" class="btn btn-light">Kembali</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <!-- // Form -->
          <form action="./update.php" method="post">
            <table cellpadding="8" class="w-100">
              <tr>
                <td>ID</td>
                <td><input class="form-control" type="text" name="id" max="100" value="<?php echo $id; ?>" disabled/></td>
              </tr>
              <tr>
                <td>Nama Prodi Lama</td>
                <td><input class="form-control" type="text" name="nama_jurusan" max="100" value="<?php echo $data['nama_jurusan']; ?>" disabled/></td>
              </tr>
              <tr>
                <td>Nama Prodi Baru</td>
                <td><input class="form-control" type="text" name="nama_jurusan" max="100"></td>
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