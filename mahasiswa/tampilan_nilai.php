<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai - Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
    <style>
        /* WAJIB ADA SETIAP PAGE */
        @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");
        :root {
            --header-height: 3rem;
            --nav-width: 68px;
            --first-color: #4723D9;
            --first-color-light: #AFA5D9;
            --white-color: #fff;
            --black-color: #000;
            --body-font: 'Nunito', sans-serif;
            --normal-font-size: 1rem;
            --z-fixed: 100
        }
        *, ::before, ::after {
            box-sizing: border-box
        }
        body {
            position: relative;
            margin: var(--header-height) 0 0 0;
            padding: 0 1rem;
            font-family: var(--body-font);
            font-size: var(--normal-font-size);
            transition: .5s;
            background-color: #f8f9fa;
        }
        .body-pd {
            padding-left: calc(var(--nav-width) + 1rem)
        }
        .main {
            padding-top: 2rem;
            padding-bottom: 2.6rem;
        }
        @media screen and (min-width: 768px) {
            .main {
                padding-top: 1rem;
            }
        }
        .main-footer {
            padding-top: 2rem;
            padding-bottom: 4.6rem;
        }
        .main h4 {
            font-weight: bold;
            font-size: 25px;
            margin-bottom: 20px;
        }
        #nilai {
            color: var(--white-color);
            background-color: #85d95b;
            border-radius: 0px 10px 10px 0px;
        }
        #nilai::before {
            content: '';
            position: absolute;
            left: 0;
            width: 2px;
            height: 32px;
            background-color: var(--white-color)
        }
        .left {
            text-align: left;
        }
        .right {
            text-align: right;
        }
        .center {
            text-align: center;
        }
        /* END */
        .header-nyah {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .flex {
            display: flex;
        }
        p {
            margin-top: 0;
            margin-bottom: 0;
            font-size: 15px;
        }
        .bold {
            font-weight: bold;
        }
        .card {
            padding: 20px;
            color: #363636!important;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 5px 30px 5px rgba(0, 0, 0, .075);
        }
        .card h3 {
            margin: 0;
            font-size: 15px;
            font-weight: bold;
        }
        .card .value {
            font-size: 15px;
            font-weight: bold;
            margin: 5px 0;
        }
        .card .text {
            font-size: 15px;
            margin: 5px 0;
        }
        .card .subtitle {
            font-size: 15px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .grafik {background-color: #fff; color: #212529;}
        .bahan-kuliah {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .tugas-kuliah {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .tugas-kuliah .texted, .bahan-kuliah .texted {
            font-size: 10px;
            background-color: #fbd5a9;
            border-radius: 5px;
            padding: 1px;
            text-align: center;
            border: 1px solid #fbd5a9;
            min-width: 16px;
        }
        .pointer {
            cursor: pointer;
        }
        a {
            text-decoration: none;
        }
        td {
            padding: 10px!important;
            font-size: 15px;
        }
        .table {
            color: #363636!important;
        }
        .align-items-center {
            align-items: center;
        }
        .logo-calender {
            padding: 3px 5px;
            border: 1px solid #4c9f4b;
        }
        .center {
            text-align: center;
        }
        .justify-content-center {
            justify-content: center;
        }
        .dropdown-menu {
            margin-left: 5px!important;
            border: none;
            box-shadow: 0 5px 30px 5px rgba(0, 0, 0, .075);
            transition: .5s;
        }
        .status-upload {
            font-size: 15px;
        }
        .green {
            border-radius: 5px;
            padding: 4px;
            color: #00bf8e;
            font-weight: bold;
            background-color: #00bf8e1a;
        }
        td {
            vertical-align: middle;
        }
        .logo-lihatkhs {
            padding: 3px 5px;
            background-color: transparent;
            border: 1px solid #4c9f4b;
            color: #4c9f4b;
        }
        .logo-lihatkhs:hover {
            padding: 3px 5px;
            background-color: #4c9f4b;
            border: 1px solid #4c9f4b;
            color: #fff;
        }
        .logo-lihatkhs:hover svg {
            fill: #fff;
        }
        .arah-keluar {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        .arah-keluar .logos {
            border: 1px solid #e7e7e7;
        }
        .arah-keluar .logos:hover {
            border: 1px solid #cccccc;
        }
        .submain-text {
            font-size: 21px;
            font-weight: bold;
        }
        .text-align-center {
            text-align: center;
        }
        .text-sub {
            font-size: 20px;
        }
    </style>
</head>
<body id="body-pd">
    <?php include('../header_1.php'); ?>








    <div class="main bg-light">
        <h4>Nilai</h4>
        <div class="arah-keluar pb-3">
            <a href="nilai.php" class="logos p-2 rounded-circle bg-white pointer">
                <svg width="23" height="23" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/>
                </svg>
            </a>
            <p class="submain-text">2023/2024 Genap</p>
        </div>
        <div class="btn-group dropend">
            <a href="#" class="pb-4 flex align-items-center pointer">
                <div class="rounded-2 flex" style="padding: 10px; background-color: #85d95b; color: #fff; gap: 10px;">
                    <svg fill="#fff" width="23" height="22" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M128 0C92.7 0 64 28.7 64 64l0 96 64 0 0-96 226.7 0L384 93.3l0 66.7 64 0 0-66.7c0-17-6.7-33.3-18.7-45.3L400 18.7C388 6.7 371.7 0 354.7 0L128 0zM384 352l0 32 0 64-256 0 0-64 0-16 0-16 256 0zm64 32l32 0c17.7 0 32-14.3 32-32l0-96c0-35.3-28.7-64-64-64L64 192c-35.3 0-64 28.7-64 64l0 96c0 17.7 14.3 32 32 32l32 0 0 64c0 35.3 28.7 64 64 64l256 0c35.3 0 64-28.7 64-64l0-64zM432 248a24 24 0 1 1 0 48 24 24 0 1 1 0-48z"/>
                    </svg>
                    <p>Cetak KHS</p>
                </div> 
            </a>
        </div>
        <div class="card grafik">
            <div class="row">
                <div class="col-4 text-align-center">
                    <div class="text">
                        SKS Semester
                    </div>
                    <div class="text-sub bold">
                        19
                    </div>
                </div>
                <div class="col-4 text-align-center">
                    <div class="text">
                        IP Semester
                    </div>
                    <div class="text-sub bold">
                        3.3947
                    </div>
                </div>
                <div class="col-4 text-align-center">
                    <div class="text">
                        IP Total
                    </div>
                    <div class="text-sub bold">
                        3.3947
                    </div>
                </div>
            </div>
        </div>
        <div style="padding: 20px 20px;!important;" class="card grafik table-responsive">
            <table style="margin-bottom: 0px;" class="table table-striped table-borderless">
                <thead style="border-bottom: 2px solid #dbdbdb;">
                    <tr>
                        <th scope="col">Kode</th>
                        <th scope="col">Mata Kuliah</th>
                        <th scope="col">SKS</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Nilai</th>
                        <th scope="col">Indeks</th>
                        <th scope="col">Nilai Angka</th>
                        <th scope="col">Dosen</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>MKU101/01</td>
                        <td>BAHASA INGGRIS 2</td>
                        <td>2</td>
                        <td>Reguler 1</td>
                        <td>80</td>
                        <td>AB</td>
                        <td>3.5</td>
                        <td>WIDYA ANDAYANI RAHAYU, M.Pd</td>
                    </tr>
                    <tr>
                        <td>MKU101/01</td>
                        <td>KOMUNIKASI DATA DAN JARINGAN KOMPUTER</td>
                        <td>2</td>
                        <td>Reguler 1</td>
                        <td>80</td>
                        <td>AB</td>
                        <td>3.5</td>
                        <td>WIDYA ANDAYANI RAHAYU, M.Pd</td>
                    </tr>
                    <tr>
                        <td>MKU101/01</td>
                        <td>PRAKTIKUM KOMUNIKASI DATA DAN JARINGAN KOMPUTER</td>
                        <td>2</td>
                        <td>Reguler 1</td>
                        <td>80</td>
                        <td>AB</td>
                        <td>3.5</td>
                        <td>WIDYA ANDAYANI RAHAYU, M.Pd</td>
                    </tr>
                    <tr>
                        <td>MKU101/01</td>
                        <td>BAHASA INGGRIS 2</td>
                        <td>2</td>
                        <td>Reguler 1</td>
                        <td>80</td>
                        <td>AB</td>
                        <td>3.5</td>
                        <td>WIDYA ANDAYANI RAHAYU, M.Pd</td>
                    </tr>
                    <tr>
                        <td>MKU101/01</td>
                        <td>KOMUNIKASI DATA DAN JARINGAN KOMPUTER</td>
                        <td>2</td>
                        <td>Reguler 1</td>
                        <td>80</td>
                        <td>AB</td>
                        <td>3.5</td>
                        <td>WIDYA ANDAYANI RAHAYU, M.Pd</td>
                    </tr>
                    <tr>
                        <td>MKU101/01</td>
                        <td>PRAKTIKUM KOMUNIKASI DATA DAN JARINGAN KOMPUTER</td>
                        <td>2</td>
                        <td>Reguler 1</td>
                        <td>80</td>
                        <td>AB</td>
                        <td>3.5</td>
                        <td>WIDYA ANDAYANI RAHAYU, M.Pd</td>
                    </tr>
                    <tr>
                        <td>MKU101/01</td>
                        <td>BAHASA INGGRIS 2</td>
                        <td>2</td>
                        <td>Reguler 1</td>
                        <td>80</td>
                        <td>AB</td>
                        <td>3.5</td>
                        <td>WIDYA ANDAYANI RAHAYU, M.Pd</td>
                    </tr>
                    <tr>
                        <td>MKU101/01</td>
                        <td>KOMUNIKASI DATA DAN JARINGAN KOMPUTER</td>
                        <td>2</td>
                        <td>Reguler 1</td>
                        <td>80</td>
                        <td>AB</td>
                        <td>3.5</td>
                        <td>WIDYA ANDAYANI RAHAYU, M.Pd</td>
                    </tr>
                    <tr>
                        <td>MKU101/01</td>
                        <td>PRAKTIKUM KOMUNIKASI DATA DAN JARINGAN KOMPUTER</td>
                        <td>2</td>
                        <td>Reguler 1</td>
                        <td>80</td>
                        <td>AB</td>
                        <td>3.5</td>
                        <td>WIDYA ANDAYANI RAHAYU, M.Pd</td>
                    </tr>
                    <tr>
                        <td>MKU101/01</td>
                        <td>BAHASA INGGRIS 2</td>
                        <td>2</td>
                        <td>Reguler 1</td>
                        <td>80</td>
                        <td>AB</td>
                        <td>3.5</td>
                        <td>WIDYA ANDAYANI RAHAYU, M.Pd</td>
                    </tr>
                    <tr>
                        <td>MKU101/01</td>
                        <td>KOMUNIKASI DATA DAN JARINGAN KOMPUTER</td>
                        <td>2</td>
                        <td>Reguler 1</td>
                        <td>80</td>
                        <td>AB</td>
                        <td>3.5</td>
                        <td>WIDYA ANDAYANI RAHAYU, M.Pd</td>
                    </tr>
                    <tr>
                        <td>MKU101/01</td>
                        <td>PRAKTIKUM KOMUNIKASI DATA DAN JARINGAN KOMPUTER</td>
                        <td>2</td>
                        <td>Reguler 1</td>
                        <td>80</td>
                        <td>AB</td>
                        <td>3.5</td>
                        <td>WIDYA ANDAYANI RAHAYU, M.Pd</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>













    <div class="main-footer">
        <?php include('../footer_1.php'); ?>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        const showNavbar = (toggleId, navId, bodyId, headerId) => {
            const toggle = document.getElementById(toggleId), nav = document.getElementById(navId), bodypd = document.getElementById(bodyId), headerpd = document.getElementById(headerId)
            if(toggle && nav && bodypd && headerpd){
                toggle.addEventListener('click', ()=>{
                    // show navbar
                    nav.classList.toggle('showen')
                    // change icon
                    toggle.classList.toggle('bx-x')
                    // add padding to body
                    bodypd.classList.toggle('body-pd')
                    // add padding to header
                    headerpd.classList.toggle('body-pd')
                })
            }
        }
        showNavbar('header-toggle','nav-bar','body-pd','header')
        /*===== LINK ACTIVE =====*/
        const linkColor = document.querySelectorAll('.nav_link')
        function colorLink(){
            if(linkColor){
                linkColor.forEach(l=> l.classList.remove('active'))
                this.classList.add('active')
            }
        }
        linkColor.forEach(l=> l.addEventListener('click', colorLink))
   });
</script>

</body>
</html>