<!DOCTYPE html>
<html lang="id" translate="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portalnya Mahasiswa</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
	<style>
		* {
			padding: 0;
			margin: 0;
		}
		body {
			overflow-y: scroll;
			font-family: Inter;
		}
		.main {
			padding-top: 30px;
		}
		.login-content p {
			color: #737580;
		}
		.login-content footer p {
			margin-left: 60px;
		}
		.login-content .main {
			margin-bottom: 62px;
			margin-left: 120px;
			margin-right: 120px;
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
			display: flex;
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
	<div class="rounded-end" style="background-color: #fff; width: 700px; height: 100%; position: fixed; z-index: -2; border-top-right-radius: 20px; border-bottom-right-radius: 20px;"></div>
	<img style="background-size: cover; position: fixed; z-index: -3; right: 0;" src="assets/image/background-pei.jpg" alt="EDWISS">
    <div class="login-content">
        <div class="main">
			<img style="position: absolute; margin-left: 750px; margin-top: -50px; z-index: -1;" width="300" height="300" src="assets/image/background-login.png" alt="EDWISS">
			<div class="judulku">
				<img width="90" height="90" src="assets/image/logos.png" alt="EDWISS">
				<div class="text-content">
					<div style="font-size: 24px; font-weight: 600; margin-top: 15px;">INFORMATION EDWISS SCHOOL V1.0</div>
					<div style="font-size: 20px; font-weight: 400; color: #7e8490;">Education Site With Smart Systems</div>
				</div>
			</div>

			<div class="login-form">
				<div class="col">
					<div style="text-align: center; font-size: 2rem; font-weight: 700; color: #2d2f3a; margin-bottom: 5px; padding-bottom: 30px;">
						Portalnya Mahasiswa
					</div>
					<div style="padding-bottom: 5px;">
						<label for="nim" style="font-size: 13px; color: #0000008a;">Masukkan email/ID/NIM</label>
						<input id="nim" style="width: 100%" type="text">
					</div>
					<div style="padding-bottom: 30px;">
						<label for="password" style="font-size: 13px; color: #0000008a;">Masukkan password</label>
						<input id="password" style="width: 100%" type="password">
					</div>
					<div>
						<a href="lupa-password.php" style="text-decoration: none;">
							<div style="text-align: right; color: #85d95b; font-size: 18px; font-weight: 600; cursor: pointer;">Lupa Password ?</div>
						</a>
						<button style="width: 100%; text-align: center; background-color: #85d95b; border: none; border-radius: 8px; color: #fff; font-size: 20px; font-weight: 600;height: 62px; margin-top: 21px;" onclick="location.href='mahasiswa/index.php'">Login</button>
					</div>
				</div>
				<div class="col" style="margin-left: 53px;">
					<div style="margin-left: 120px; background-color: #85d95b; color: #fff; border-radius: 12px; overflow: hidden; padding-left: 8px; padding-bottom: 8px; padding-right: 8px;">
						<div style="padding-top: 15px; padding-bottom: 10px; padding-left: 20px; font-size: 18px; font-weight: 700; line-height: 24px;">
							<img data-v-9d0125a2="" width="24" height="24" src="https://mhs.pei.ac.id/_nuxt/img/megaphone.06ebfef.png">
							<span style="margin-left: 10px;">Info Singkat</span>
						</div>
					</div>
					<div style="margin-left: 120px; padding-top: 10px;">
						<div style="background-color: #fff; color: #000; border-radius: 12px; max-height: 375px; padding: 22px; display: flex;">
							<div style="padding-right: 10px;">
							<svg width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="#85d95b" d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192h80v56H48V192zm0 104h80v64H48V296zm128 0h96v64H176V296zm144 0h80v64H320V296zm80-48H320V192h80v56zm0 160v40c0 8.8-7.2 16-16 16H320V408h80zm-128 0v56H176V408h96zm-144 0v56H64c-8.8 0-16-7.2-16-16V408h80zM272 248H176V192h96v56z"/></svg>
							</div>
							<div>
								<div style="font-size: 13px; color: #7e8ca0;">
									5 Desember 2023 | 10:07
								</div>
								<div style="font-size: 14px; margin-top: 10px; line-height: 24px;">
									Panduan login untuk username adalah NIM Mahasiswa dan password adalah NIK atau tanggal lahir dengan format YYYY-MM-DD
								</div>
							</div>
						</div>
					</div>
					<div style="margin-left: 120px; padding-top: 10px;">
						<div style="background-color: #fff; color: #000; border-radius: 12px; max-height: 375px; padding: 22px; display: flex;">
							<div style="padding-right: 10px;">
							<svg width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="#85d95b" d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192h80v56H48V192zm0 104h80v64H48V296zm128 0h96v64H176V296zm144 0h80v64H320V296zm80-48H320V192h80v56zm0 160v40c0 8.8-7.2 16-16 16H320V408h80zm-128 0v56H176V408h96zm-144 0v56H64c-8.8 0-16-7.2-16-16V408h80zM272 248H176V192h96v56z"/></svg>
							</div>
							<div>
								<div style="font-size: 13px; color: #7e8ca0;">
									04 Desember 2023 | 10:07
								</div>
								<div style="font-size: 14px; margin-top: 10px; line-height: 24px;">
									Semoga dengan adanya web ini makin dimudahkan untuk para mahasiswa Edwiss
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
        <hr style="width: 700px;">
        <footer>
            <p>Copyright © 2024 Edwiss. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>