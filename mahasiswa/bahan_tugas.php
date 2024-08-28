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
    </style>
</head>
<body id="body-pd">
    <?php include('layout/header_1.php'); ?>








    <div class="main bg-light">
        <div class="header-nyah pb-4">
            <h4>Bahan & Tugas</h4>
            <div class="flex gap-1" style="justify-content: center;">
                <p class="text-warning bold">
                    Pilih Periode
                </p>
                <select id="choose_agen" class="form-select form-select-sm bold">
                    <option value="2023/2024-genap">2023/2024 Genap&ensp;</opt>
                    <option value="2023/2024-ganjil">2023/2024 Ganjil&ensp;</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 pointer">
                <a href="tampilan_bahan_tugas.php">
                    <div class="card grafik">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="value">WORKSHOP PEMROGAMAN WEB 1</div>
                            </div>
                            <div class="col-lg-6">
                                <div class="bahan-kuliah">
                                    <div class="text">
                                        <svg style="box-shadow: 0 5px 30px 5px rgba(0, 0, 0, .075);" fill="#63E6BE" width="17" height="17" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path d="M249.6 471.5c10.8 3.8 22.4-4.1 22.4-15.5l0-377.4c0-4.2-1.6-8.4-5-11C247.4 52 202.4 32 144 32C93.5 32 46.3 45.3 18.1 56.1C6.8 60.5 0 71.7 0 83.8L0 454.1c0 11.9 12.8 20.2 24.1 16.5C55.6 460.1 105.5 448 144 448c33.9 0 79 14 105.6 23.5zm76.8 0C353 462 398.1 448 432 448c38.5 0 88.4 12.1 119.9 22.6c11.3 3.8 24.1-4.6 24.1-16.5l0-370.3c0-12.1-6.8-23.3-18.1-27.6C529.7 45.3 482.5 32 432 32c-58.4 0-103.4 20-123 35.6c-3.3 2.6-5 6.8-5 11L304 456c0 11.4 11.7 19.3 22.4 15.5z"/>
                                        </svg>
                                        &ensp;Bahan Kuliah
                                    </div>
                                    <p class="texted text-warning">10</p>
                                </div>
                                <div class="tugas-kuliah">
                                    <div class="text">
                                        <svg style="box-shadow: 0 5px 30px 5px rgba(0, 0, 0, .075);"  fill="#ffc107" width="17" height="17" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path d="M152.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 113C-2.3 103.6-2.3 88.4 7 79s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM224 96c0-17.7 14.3-32 32-32l224 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-224 0c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32l224 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-224 0c-17.7 0-32-14.3-32-32zM160 416c0-17.7 14.3-32 32-32l288 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-288 0c-17.7 0-32-14.3-32-32zM48 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/>
                                        </svg>
                                        &ensp;Tugas Kuliah
                                    </div>
                                    <p class="texted text-warning">1</p>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="subtitle">
                            <div>TRPL201 50 SKS - Karyawan</div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#363636" width="20" height="20" viewBox="0 0 448 512">
                                <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/>
                            </svg>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4 pointer">
                <a href="tampilan_bahan_tugas.php">
                    <div class="card grafik">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="value">WORKSHOP PEMROGAMAN WEB 1</div>
                            </div>
                            <div class="col-lg-6">
                                <div class="bahan-kuliah">
                                    <div class="text">
                                        <svg style="box-shadow: 0 5px 30px 5px rgba(0, 0, 0, .075);" fill="#63E6BE" width="17" height="17" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path d="M249.6 471.5c10.8 3.8 22.4-4.1 22.4-15.5l0-377.4c0-4.2-1.6-8.4-5-11C247.4 52 202.4 32 144 32C93.5 32 46.3 45.3 18.1 56.1C6.8 60.5 0 71.7 0 83.8L0 454.1c0 11.9 12.8 20.2 24.1 16.5C55.6 460.1 105.5 448 144 448c33.9 0 79 14 105.6 23.5zm76.8 0C353 462 398.1 448 432 448c38.5 0 88.4 12.1 119.9 22.6c11.3 3.8 24.1-4.6 24.1-16.5l0-370.3c0-12.1-6.8-23.3-18.1-27.6C529.7 45.3 482.5 32 432 32c-58.4 0-103.4 20-123 35.6c-3.3 2.6-5 6.8-5 11L304 456c0 11.4 11.7 19.3 22.4 15.5z"/>
                                        </svg>
                                        &ensp;Bahan Kuliah
                                    </div>
                                    <p class="texted text-warning">10</p>
                                </div>
                                <div class="tugas-kuliah">
                                    <div class="text">
                                        <svg style="box-shadow: 0 5px 30px 5px rgba(0, 0, 0, .075);"  fill="#ffc107" width="17" height="17" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path d="M152.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 113C-2.3 103.6-2.3 88.4 7 79s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM224 96c0-17.7 14.3-32 32-32l224 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-224 0c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32l224 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-224 0c-17.7 0-32-14.3-32-32zM160 416c0-17.7 14.3-32 32-32l288 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-288 0c-17.7 0-32-14.3-32-32zM48 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/>
                                        </svg>
                                        &ensp;Tugas Kuliah
                                    </div>
                                    <p class="texted text-warning">1</p>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="subtitle">
                            <div>TRPL201 50 SKS - Karyawan</div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#363636" width="20" height="20" viewBox="0 0 448 512">
                                <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/>
                            </svg>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4 pointer">
                <a href="tampilan_bahan_tugas.php">
                    <div class="card grafik">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="value">WORKSHOP PEMROGAMAN WEB 1</div>
                            </div>
                            <div class="col-lg-6">
                                <div class="bahan-kuliah">
                                    <div class="text">
                                        <svg style="box-shadow: 0 5px 30px 5px rgba(0, 0, 0, .075);" fill="#63E6BE" width="17" height="17" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path d="M249.6 471.5c10.8 3.8 22.4-4.1 22.4-15.5l0-377.4c0-4.2-1.6-8.4-5-11C247.4 52 202.4 32 144 32C93.5 32 46.3 45.3 18.1 56.1C6.8 60.5 0 71.7 0 83.8L0 454.1c0 11.9 12.8 20.2 24.1 16.5C55.6 460.1 105.5 448 144 448c33.9 0 79 14 105.6 23.5zm76.8 0C353 462 398.1 448 432 448c38.5 0 88.4 12.1 119.9 22.6c11.3 3.8 24.1-4.6 24.1-16.5l0-370.3c0-12.1-6.8-23.3-18.1-27.6C529.7 45.3 482.5 32 432 32c-58.4 0-103.4 20-123 35.6c-3.3 2.6-5 6.8-5 11L304 456c0 11.4 11.7 19.3 22.4 15.5z"/>
                                        </svg>
                                        &ensp;Bahan Kuliah
                                    </div>
                                    <p class="texted text-warning">10</p>
                                </div>
                                <div class="tugas-kuliah">
                                    <div class="text">
                                        <svg style="box-shadow: 0 5px 30px 5px rgba(0, 0, 0, .075);"  fill="#ffc107" width="17" height="17" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path d="M152.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 113C-2.3 103.6-2.3 88.4 7 79s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM224 96c0-17.7 14.3-32 32-32l224 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-224 0c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32l224 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-224 0c-17.7 0-32-14.3-32-32zM160 416c0-17.7 14.3-32 32-32l288 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-288 0c-17.7 0-32-14.3-32-32zM48 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/>
                                        </svg>
                                        &ensp;Tugas Kuliah
                                    </div>
                                    <p class="texted text-warning">1</p>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="subtitle">
                            <div>TRPL201 50 SKS - Karyawan</div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#363636" width="20" height="20" viewBox="0 0 448 512">
                                <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/>
                            </svg>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4 pointer">
                <a href="tampilan_bahan_tugas.php">
                    <div class="card grafik">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="value">WORKSHOP PEMROGAMAN WEB 1</div>
                            </div>
                            <div class="col-lg-6">
                                <div class="bahan-kuliah">
                                    <div class="text">
                                        <svg style="box-shadow: 0 5px 30px 5px rgba(0, 0, 0, .075);" fill="#63E6BE" width="17" height="17" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path d="M249.6 471.5c10.8 3.8 22.4-4.1 22.4-15.5l0-377.4c0-4.2-1.6-8.4-5-11C247.4 52 202.4 32 144 32C93.5 32 46.3 45.3 18.1 56.1C6.8 60.5 0 71.7 0 83.8L0 454.1c0 11.9 12.8 20.2 24.1 16.5C55.6 460.1 105.5 448 144 448c33.9 0 79 14 105.6 23.5zm76.8 0C353 462 398.1 448 432 448c38.5 0 88.4 12.1 119.9 22.6c11.3 3.8 24.1-4.6 24.1-16.5l0-370.3c0-12.1-6.8-23.3-18.1-27.6C529.7 45.3 482.5 32 432 32c-58.4 0-103.4 20-123 35.6c-3.3 2.6-5 6.8-5 11L304 456c0 11.4 11.7 19.3 22.4 15.5z"/>
                                        </svg>
                                        &ensp;Bahan Kuliah
                                    </div>
                                    <p class="texted text-warning">10</p>
                                </div>
                                <div class="tugas-kuliah">
                                    <div class="text">
                                        <svg style="box-shadow: 0 5px 30px 5px rgba(0, 0, 0, .075);"  fill="#ffc107" width="17" height="17" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path d="M152.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 113C-2.3 103.6-2.3 88.4 7 79s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM224 96c0-17.7 14.3-32 32-32l224 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-224 0c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32l224 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-224 0c-17.7 0-32-14.3-32-32zM160 416c0-17.7 14.3-32 32-32l288 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-288 0c-17.7 0-32-14.3-32-32zM48 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/>
                                        </svg>
                                        &ensp;Tugas Kuliah
                                    </div>
                                    <p class="texted text-warning">1</p>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="subtitle">
                            <div>TRPL201 50 SKS - Karyawan</div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#363636" width="20" height="20" viewBox="0 0 448 512">
                                <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/>
                            </svg>
                        </div>
                    </div>
                </a>
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