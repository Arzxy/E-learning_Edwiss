<?php
require_once 'helper/auth.php';
require_once 'helper/connection.php';

$nim = $_SESSION['login']['mahasiswa_datadiri']['nim'];
$tabels = [
    'mahasiswa_datadiri', 
    'mahasiswa_akademik', 
    'mahasiswa_alamat', 
    'mahasiswa_biodata_ayah', 
    'mahasiswa_biodata_ibu',
    'tagihan'
];
foreach ($tabels as $tabel) {
    $sql = "SELECT * FROM $tabel WHERE nim='$nim' LIMIT 1";
    $result = mysqli_query($connection, $sql);
    $data = mysqli_fetch_assoc($result);
    if ($data) {
        $_SESSION['login'][$tabel] = $data;
    }
}

isLogin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai - Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />

    <link rel="stylesheet" href="assets/modules/izitoast/css/iziToast.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

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
            padding: 4px 10px;
            color: #00bf8e;
            font-weight: bold;
            background-color: #00bf8e1a;
        }
        .red {
            border-radius: 5px;
            padding: 4px 10px;
            color: #feae37;
            font-weight: bold;
            background-color: #feae371a;
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
    </style>
</head>
<body id="body-pd">
    <?php include('layout/header_1.php'); ?>








    <div class="main bg-light">
        <h4>Nilai</h4>
        <div style="padding: 15px!important;" class="card grafik table-responsive mt-5">
            <table style="margin-bottom: 0px;" class="table table-borderless">
                <thead style="border-bottom: 2px solid #dbdbdb;">
                    <tr>
                        <th scope="col" class="pb-4 fw-normal">2023/2024 Genap</th>
                        <th scope="col" class="pb-4 fw-normal">SKS Semester</th>
                        <th scope="col" class="pb-4 fw-normal">SKS Total</th>
                        <th scope="col" class="pb-4 fw-normal">IP Semester</th>
                        <th scope="col" class="pb-4 fw-normal">IP Komulatif</th>
                        <th scope="col" class="pb-4 fw-normal"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="pt-3 flex">
                            <p class="status-upload green bold">Aktif</p>
                        </td>
                        <td class="pt-3 bold">20</td>
                        <td class="pt-3 bold">20</td>
                        <td class="pt-3 bold">0.0000</td>
                        <td class="pt-3 bold">3.3947</td>
                        <td class="pt-3">
                            <a href="tampilan_nilai.php" class="flex align-items-center justify-content-center">
                                <div class="logo-lihatkhs pointer rounded">
                                    <svg style="margin-right: 2px;" xmlns="http://www.w3.org/2000/svg" fill="#4c9f4b" width="14" height="14" viewBox="0 0 576 512">
                                        <path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/>
                                    </svg>
                                    Lihat KHS
                                </div>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div style="padding: 15px!important;" class="card grafik table-responsive">
            <table style="margin-bottom: 0px;" class="table table-borderless">
                <thead style="border-bottom: 2px solid #dbdbdb;">
                    <tr>
                        <th scope="col" class="pb-4 fw-normal">2023/2024 Genap</th>
                        <th scope="col" class="pb-4 fw-normal">SKS Semester</th>
                        <th scope="col" class="pb-4 fw-normal">SKS Total</th>
                        <th scope="col" class="pb-4 fw-normal">IP Semester</th>
                        <th scope="col" class="pb-4 fw-normal">IP Komulatif</th>
                        <th scope="col" class="pb-4 fw-normal"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="pt-3 flex">
                            <p class="status-upload green bold">Aktif</p>
                        </td>
                        <td class="pt-3 bold">20</td>
                        <td class="pt-3 bold">20</td>
                        <td class="pt-3 bold">0.0000</td>
                        <td class="pt-3 bold">3.3947</td>
                        <td class="pt-3">
                            <a href="tampilan_nilai.php" class="flex align-items-center justify-content-center">
                                <div class="logo-lihatkhs pointer rounded">
                                    <svg style="margin-right: 2px;" xmlns="http://www.w3.org/2000/svg" fill="#4c9f4b" width="14" height="14" viewBox="0 0 576 512">
                                        <path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/>
                                    </svg>
                                    Lihat KHS
                                </div>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>













    <div class="main-footer">
        <?php include('layout/footer_1.php'); ?>
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