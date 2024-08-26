<!DOCTYPE html>
<html lang="id" translate="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Password</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <style>
		* {
			padding: 0;
			margin: 0;
		}
		body {
			overflow-y: scroll;
			font-family: Inter;
            display: flex;
            align-items: center;
            justify-content: center;
		}
		.main {
			padding-top: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            max-width: 600px;
		}
		.judulku {
			padding-bottom: 50px;
			display: flex;
		}
        .judulku img {
            margin-right: 15px;
        }
        .judulku .text-content {
            display: flex;
            justify-content: center;
            flex-direction: column;
        }
        .judulku .text-content div {
            margin-bottom: -10px;
        }
        .login-form {
            margin-left: 15px;
            margin-right: 15px;
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
    </style>
</head>
<body>
    <div class="main">
        <section>
            <div class="judulku">
                <img width="90" height="90" src="assets/image/logos.png" alt="Logo">
                <div class="text-content">
                    <div style="font-size: 24px; font-weight: 600;">INFORMATION EDWISS SCHOOL V1.0</div>
                    <div style="font-size: 20px; font-weight: 400; color: #7e8490;">Education Site With Smart Systems</div>
                </div>
            </div>
            
            <div class="login-form">
                <div style="font-size: 2rem; font-weight: 700; color: #2d2f3a; margin-bottom: 5px; padding-bottom: 10px;">Lupa Password</div>
                <div style="font-size: 20px; font-weight: 400; color: #7e8490;">Masukkan email untuk menerima link reset password</div><br><br>
                <div style="padding-bottom: 5px;">
                    <label for="nim" style="font-size: 13px; color: #0000008a;">Email</label>
                    <input id="nim" style="width: 100%" type="text" required>
                </div>
                <div>
                    <br>
                    <div style="color: #a15f20; font-size: 16px; opacity: .8;">
                        Pastikan email Anda terdaftar di sistem. Dengan melakukan Reset Kata Sandi maka sistem akan mengirimkan email berisi informasi perubahan kata Sandi.
                    </div>
                    <br>
                    <button style="width: 100%; text-align: center; background-color: #85d95b; border: none; border-radius: 8px; color: #fff; font-size: 20px; font-weight: 600;height: 62px; margin-top: 21px;">Reset Password</button>
                    <br><br>
                    <a href="index.php" style="text-decoration: none;">
                        <div style="text-align: center; color: #85d95b; font-size: 18px; font-weight: 600; cursor: pointer;">Kembali ke Halaman Login</div>
                    </a>
                    <br><br>
                </div>
            </div>
        </section>
    </div>
</body>
</html>