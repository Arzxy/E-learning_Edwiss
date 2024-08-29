<?php
require_once 'mahasiswa/helper/connection.php';
session_start();

if (isset($_POST['submit'])) {
  $nim = $_POST['nim'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM mahasiswa_datadiri WHERE nim='$nim' and nik='$password' LIMIT 1";
  $result = mysqli_query($connection, $sql);

  $row = mysqli_fetch_assoc($result);
  if ($row) {
    // YANG INI
     $_SESSION['login']['mahasiswa_datadiri'] = $row;
     $tables = [
         'mahasiswa_akademik', 
         'mahasiswa_alamat', 
         'mahasiswa_biodata_ayah', 
         'mahasiswa_biodata_ibu',
         'tagihan'
     ];
     foreach ($tables as $table) {
         $sql = "SELECT * FROM $table WHERE nim='$nim' LIMIT 1";
         $result = mysqli_query($connection, $sql);
         $data = mysqli_fetch_assoc($result);
         if ($data) {
             $_SESSION['login'][$table] = $data;
         }
     }
    // SAMPE SI
    // PAKAI YANG ATAS FULL $_SESSION['login'] = $row;
    header('Location: mahasiswa/index.php');
  } else {
    $_SESSION['info'] = [
      'status' => 'failed',
      'message' => "Harap masukan NIM & Password yang benar"
    ];
  }
}

$result = mysqli_query($connection, "SELECT * FROM info_singkat ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="id" translate="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portalnya Mahasiswa</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/modules/izitoast/css/iziToast.min.css">
	<style>
		* {
			padding: 0;
			margin: 0;
		}
		body {
			overflow-y: scroll;
			font-family: Inter;
		}
		.login-content p {
			color: #737580;
		}
		.login-content .main {
		}
		.main section hr {
			border: none;
			height: 2px;
			background-color: #f19f40;
			width: 5%;
			margin-bottom: 30px;
			margin-top: 4px;
		}

		.login-content hr {
			border: none;
			height: 2px;
			background-color: #b9bfc7;
		}
		.login-content footer {
			padding-top: 26px;
			padding-bottom: 26px;
		}
		.judulku {
			margin-left: -16px;
			padding-bottom: 147px;
			display: flex;
            align-items: center;
            justify-content: center;
		}
        .judulku img {
            margin-right: 15px;
        }
        .judulku .text-content {
            display: flex;
            flex-direction: column;
        }
        .judulku .text-content div {
            margin-bottom: -10px;
        }
		.login-form {
		}
		.login-form input {
			border-top: none;
			border-right: none;
			border-left: none;
		}
        .login-form input:focus {
            outline: none;
            border-bottom: 2px solid #85d95b;
        }
        .primary-color:hover {
            color: #73b850 !important;
        }
        .primary-bg:hover {
            background-color: #73b850 !important;
        }
	</style>
</head>
<body>
	<div class="login-content" style="overflow: hidden; position: relative;">
        <img class="d-lg-block" style="display: none; background-size: cover; position: fixed; z-index: -3; top: 0; right: 0; width: 100%;" src="assets/image/background-pei.jpg" alt="EDWISS">
        <div class="main row">
			<div class="col-12 col-lg-6" style="height:84vh ;background-color: white; padding-top: 30px; justify-content: center; display: flex;">
                <div style="padding-left: 20px; padding-right: 20px; padding-bottom: 20px;">
                    <div class="judulku">
                        <img width="90" height="90" src="assets/image/logos.png" alt="EDWISS">
                        <div class="text-content">
                            <div style="font-size: 24px; font-weight: 600;">INFORMATION EDWISS SCHOOL V1.0</div>
                            <div style="font-size: 20px; font-weight: 400; color: #7e8490;">Education Site With Smart Systems</div>
                        </div>
                    </div>
                    <div class="login-form">
                        <form method="POST" action="" class="needs-validation" novalidate="">
                            <div>
                                <div style="text-align: center; font-size: 2rem; font-weight: 700; color: #2d2f3a; margin-bottom: 5px; padding-bottom: 30px;">
                                    Portalnya Mahasiswa
                                </div>
                                <div style="padding-bottom: 5px;">
                                    <label for="nim" style="font-size: 13px; color: #0000008a;">Masukkan NIM</label>
                                    <input id="nim" name="nim" style="width: 100%" type="text">
                                </div>
                                <div style="padding-bottom: 30px;">
                                    <label for="password" style="font-size: 13px; color: #0000008a;">Masukkan password</label>
                                    <input id="password" name="password" style="width: 100%" type="password">
                                </div>
                                <div>
                                    <button class="primary-bg" style="width: 100%; text-align: center; background-color: #85d95b; border: none; border-radius: 8px; color: #fff; font-size: 20px; font-weight: 600;height: 62px; margin-top: 21px;"
                                    name="submit" type="submit">
                                        Login
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6" style="overflow: hidden; display: flex; align-items: center; justify-content: center;">
                <div style="padding-left: 20px; padding-right: 20px; padding-top: 40px; padding-bottom: 40px;">
                    <div class="login-form">
                        <div style="display: flex; justify-content: center; align-items: center;">
                            <img style="margin-top: -50px;" width="250" height="250" src="assets/image/background-login.png" alt="EDWISS">
					    </div>
                        <div style="position: relative; background-color: #85d95b; padding: 10px; border-radius: 12px;">
                            <div style="background-color: #85d95b; color: #fff; border-radius: 12px; overflow: hidden; padding-left: 8px; padding-bottom: 8px; padding-right: 8px;">
                                <div style="padding-top: 15px; padding-bottom: 10px; padding-left: 20px; font-size: 18px; font-weight: 700; line-height: 24px;">
                                    <img width="24" height="24" src="https://mhs.pei.ac.id/_nuxt/img/megaphone.06ebfef.png">
                                    <span style="margin-left: 10px;">Info Singkat</span>
                                </div>
                            </div>
                            <?php
                            while ($data = mysqli_fetch_array($result)) :

                                $dateTime = new DateTime($data['tanggal']);
                                $formattedDate = $dateTime->format('d F Y | H:i');
                                $months = [
                                    'January' => 'Januari',
                                    'February' => 'Februari',
                                    'March' => 'Maret',
                                    'April' => 'April',
                                    'May' => 'Mei',
                                    'June' => 'Juni',
                                    'July' => 'Juli',
                                    'August' => 'Agustus',
                                    'September' => 'September',
                                    'October' => 'Oktober',
                                    'November' => 'November',
                                    'December' => 'Desember'
                                ];
                                $tgl_pembuatan = strtr($formattedDate, $months);
                            ?>

                            <div style="padding-top: 10px;">
                                <div style="background-color: #fff; color: #000; border-radius: 12px; max-height: 375px; max-width: 488px; padding: 22px; display: flex;">
                                    <div style="padding-right: 10px;">
                                    <svg width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="#85d95b" d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192h80v56H48V192zm0 104h80v64H48V296zm128 0h96v64H176V296zm144 0h80v64H320V296zm80-48H320V192h80v56zm0 160v40c0 8.8-7.2 16-16 16H320V408h80zm-128 0v56H176V408h96zm-144 0v56H64c-8.8 0-16-7.2-16-16V408h80zM272 248H176V192h96v56z"/></svg>
                                    </div>
                                    <div>
                                        <div style="font-size: 13px; color: #7e8ca0;">
                                            <?= $tgl_pembuatan ?>
                                        </div>
                                        <div style="font-size: 14px; margin-top: 10px; line-height: 24px;">
                                            <?= $data['pesan'] ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php
                            endwhile;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main row">
            <div class="col-12 col-lg-6" style="padding-top: 20px; padding-right: 0px!important; background-color: white;">
                <hr>
                <footer style="display: flex; justify-content: center;">
                    <p>Copyright © 2024 Edwiss. All rights reserved.</p>
                </footer>
            </div>
        </div>
    </div>

    <!-- JS Libraies -->
    <script src="assets/modules/izitoast/js/iziToast.min.js"></script>

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

</body>
</html>