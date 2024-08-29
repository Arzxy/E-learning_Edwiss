<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$jurusan = mysqli_query($connection, "SELECT * FROM info_singkat ORDER BY id DESC LIMIT 1");
$data = mysqli_fetch_array($jurusan);

if ($jurusan) {
  if($data==null){
    $id = 1;
  } else {
    $id = $data['id'] + 1;
  }
}
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Tambah Info Singkat</h1>
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
                <td>ID</td>
                <td><input class="form-control" type="text" name="id" max="100" value="<?php echo $id; ?>" disabled/></td>
              </tr>
              <tr>
                <td>Pesan Info</td>
                <td><input class="form-control" type="text" name="pesan" max="100"></td>
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