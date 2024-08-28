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
    <title>Dashboard - Mahasiswa</title>
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
        #dashboard {
            color: var(--white-color);
            background-color: #85d95b;
            border-radius: 0px 10px 10px 0px;
        }
        #dashboard::before {
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
        .card {
            padding: 20px;
            border-radius: 10px;
            color: white;
            margin-bottom: 20px;
            box-shadow: 0 2px 6px -2px gray;
        }
        .card h3 {
            margin: 0;
            font-size: 17px;
            font-weight: bold;
        }
        .card .value {
            font-size: 24px;
            font-weight: bold;
            margin: 5px 0;
        }
        .card .subtitle {
            font-size: 12px;
        }
        .ipk { background-color: #8e44ad; }
        .tagihan { background-color: #3498db; }
        .semester { background-color: #e74c3c; }
        .sks { background-color: #9b59b6; }
        .grafik {background-color: #fff; color: #212529;}
        .card hr {
            margin: 10px 0px;
        }
    </style>
</head>
<body id="body-pd">
    <?php include('layout/header_1.php'); ?>








    <div class="main bg-light">
        <h4>Dashboard</h4>
        <div class="row">
            <div class="col-6 col-lg-3">
                <div class="card ipk">
                    <h3>IPK</h3>
                    <hr>
                    <div class="value">3,39</div>
                    <div class="subtitle" style="display: flex; align-items: center;">
                        <svg width="17" height="17" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="#fff">
                            <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/>
                        </svg>
                        &ensp;Tetap dari semester lalu
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="card semester">
                    <h3>Semester</h3>
                    <hr>
                    <div class="value">2</div>
                    <div class="subtitle">Batas studi : 14 semester</div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="card sks">
                    <h3>Jumlah SKS</h3>
                    <hr>
                    <div class="value">19 SKS</div>
                    <div class="subtitle">125 SKS lagi untuk lulus</div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="card sks">
                    <h3>Tagihan</h3>
                    <hr>
                    <div class="value">Rp 1,000,000</div>
                    <div class="subtitle">Total tunggakan terakhir</div>
                </div>
            </div>
            <div class="col-12">
                <div class="card grafik">
                    <h3>Grafik IPS dan IPK</h3>
                    <hr>
                    <div class="value">Kepengennya gini, Angka dibawah itu Semester, Angka di samping kiri itu IPS/IPK nya</div>
                    <div class="subtitle">Link: https://www.malasngoding.com/membuat-grafik-dari-database-mysql-dan-php-dengan-chart-js/</div>
                </div>
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