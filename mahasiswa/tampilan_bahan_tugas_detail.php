<?php
require_once 'helper/auth.php';
require_once 'helper/connection.php';

isLogin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bahan & Tugas - Mahasiswa</title>
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
        #bahan_tugas {
            color: var(--white-color);
            background-color: #85d95b;
            border-radius: 0px 10px 10px 0px;
        }
        #bahan_tugas::before {
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
        .submain-text {
            font-size: 21px;
            font-weight: bold;
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
        .submain-more-text {
            font-size: 18px;
            font-weight: bold;
        }
        .downloadpdf {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .texteder {
            font-size: 14px;
            color: gray;
        }
        .status-upload {
            font-size: 11px;
        }
        .green {
            border-radius: 5px;
            padding: 4px;
            color: #00bf8e;
            font-weight: bold;
            background-color: #00bf8e1a;
        }
        .red {
            border-radius: 5px;
            padding: 4px;
            color: #feae37;
            font-weight: bold;
            background-color: #feae371a;
        }
        .status-upload2 {
            font-size: 13px;
            padding: 3px;
        }
        .subtitle .sekat::before {
            content: " ";
            border-left: 1px solid #dee2e6 !important;
        }
        .flex-wrap-wrap {
            flex-wrap: wrap;
        }
        .bg-green-light {
            background-color: #85d95b;
            color: #fff;
        }
        .btn:hover {
            color: #fff;
            background-color: #73b850;
        }
    </style>
</head>
<body id="body-pd">
    <?php include('layout/header_1.php'); ?>








    <div class="main bg-light">
        <h4>Bahan & Tugas</h4>
        <div class="arah-keluar pb-3">
            <a href="tampilan_bahan_tugas.php" class="logos p-2 rounded-circle bg-white pointer">
                <svg width="23" height="23" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/>
                </svg>
            </a>
            <p class="submain-text">Tugas Buat Website PEI</p>
        </div>
        <div class="card grafik">
            <div class="row">
                <div class="col-lg-3">
                    <div class="text">
                        Status Tugas
                    </div>
                    <div class="flex">
                        <p class="status-upload green">Sudah diunggah</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="text">
                        Jenis Tugas
                    </div>
                    <p class="texteder">Online</p>
                </div>
                <div class="col-lg-3">
                    <div class="text">
                        Maksimal Unggah
                    </div>
                    <p class="texteder">Tidak Terbatas</p>
                </div>
                <div class="col-lg-3">
                    <div class="text">
                        Rentang Waktu
                    </div>
                    <div class="flex gap-1 flex-wrap-wrap align-items-center">
                        <svg style="box-shadow: 0 5px 30px 5px rgba(0, 0, 0, .075);" fill="#363636" width="12" height="12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M128 0c17.7 0 32 14.3 32 32l0 32 128 0 0-32c0-17.7 14.3-32 32-32s32 14.3 32 32l0 32 48 0c26.5 0 48 21.5 48 48l0 48L0 160l0-48C0 85.5 21.5 64 48 64l48 0 0-32c0-17.7 14.3-32 32-32zM0 192l448 0 0 272c0 26.5-21.5 48-48 48L48 512c-26.5 0-48-21.5-48-48L0 192zm64 80l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm128 0l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0zM64 400l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0zm112 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16z"/>
                        </svg>
                        <p style="font-size: 11px; background-color: #e3e6f8; padding: 3px 7px; border-radius: 4px;" class="texted bold">
                            13:16 | 25 Juni 2024
                        </p>
                        -
                        <p style="font-size: 11px; background-color: #e3e6f8; padding: 3px 7px; border-radius: 4px;" class="texted bold">
                            13:16 | 25 Juni 2024
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card grafik">
            <p class="submain-more-text pb-1">Deskripsi Tugas</p>
            <div class="text">
                    <p>Computer Evolutions:</p>
                    <p>Buatlah resume tentang sejarah perkembangan computer dari generasi pertama hingga saat ini.</p>
                    <p>Sajikan dalam bentuk presentasi yang menarik dan sertakan juga referensinya</p>
                    <p>Submit tugas pada SIAKAD dalam format *.pdf dan pada E-Learning dalam format power point</p>
            </div>
        </div>
        <div class="card grafik">
            <p class="submain-more-text pb-1">Upload Tugas</p>
            <div class="input-group mb-3">
                <input type="file" class="form-control" id="inputGroupFile02">
            </div>
            <p class="pt-1">Besar file maksimal 1 MB, Ekstensi file: jpeg/jpg, png</p>
            <div class="d-grid d-md-block right">
                <button class="btn bg-green-light" type="button">Simpan</button>
            </div>
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