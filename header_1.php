    <style>
        a {
            text-decoration: none
        }
        .header {
        width: 100%;
        height: var(--header-height);
        position: fixed;
        top: 0;
        left: 0;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 2rem 1rem;
        background-color: var(--white-color);
        z-index: var(--z-fixed);
        transition: .5s;
        box-shadow: 0 2px 6px -4px gray;
        padding-right: 5px!important;
        }
        #header-toggle {
            background-color: white;
            padding: 5px;
            border-radius: 999px;
            box-shadow: 0 2px 6px -3px gray;
        }
        .header_toggle {
            color: var(--black-color);
            font-size: 1.5rem;
            cursor: pointer
        }
        .header_img {
            width: 35px;
            height: 35px;
            display: flex;
            justify-content: center;
            border-radius: 50%;
            overflow: hidden
        }
        .header_img img {
            width: 40px
        }
        .l-navbar {
            position: fixed;
            top: 0;
            left: -30%;
            width: var(--nav-width);
            height: 100vh;
            background-color: var(--white-color);
            padding: .5rem 1rem 0 0;
            transition: .5s;
            z-index: var(--z-fixed)
        }
        .nav {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            overflow: hidden
        }
        .nav_logo, .nav_link {
            display: grid;
            grid-template-columns: max-content max-content;
            align-items: center;
            column-gap: 1rem;
            padding: .5rem 0 .5rem 1.5rem
        }
        .nav_logo {
            margin-bottom: 2rem
        }
        .nav_logo-icon {
            font-size: 1.25rem;
            color: var(--black-color)
        }
        .nav_logo-name {
            color: var(--black-color);
            font-weight: 700
        }
        .nav_link {
            position: relative;
            color: var(--black-color);
            margin-bottom: 1rem;
            transition: .3s;
            padding-right: 20px;
        }
        .nav_link::before {
            content: '';
            position: absolute;
            left: 0;
            width: 2px;
            height: 32px;
            background-color: var(--white-color)
        }
        .nav_link:hover {
            color: var(--white-color);
            background-color: #85d95b;
            border-radius: 0px 10px 10px 0px;
        }
        .nav_icon {
            font-size: 1.25rem
        }
        .showen {
            left: 0
        }
        .height-100 {
            height: 100vh
        }
        .notifikasi {
            display: none!important;
        }
        @media screen and (min-width: 768px) {
            .header_toggle {
                margin-left: -20px;
            }
            body {
                margin: calc(var(--header-height) + 1rem) 0 0 0;
                padding-left: calc(var(--nav-width) + 2rem)
            }
            .header {
                height: calc(var(--header-height) + 1rem);
                padding: 0 2rem 0 calc(var(--nav-width) + 2rem)
            }
            .header_img {
                width: 40px;
                height: 40px;
            }
            .header_img img {
                width: 45px;
            }
            .l-navbar {
                left: 0;
                padding: 1rem 1rem 0 0;
            }
            /* .show {
                width: calc(var(--nav-width) + 156px)
            } */
            .showen {
                width: calc(var(--nav-width) + 156px)
            }
            .body-pd {
                padding-left: calc(var(--nav-width) + 188px)
            }
            .nav {
                flex-direction: unset;
            }
            .notifikasi {
                display: flex!important;
            }
        }
        .header_toggle2 {
            display: flex;
        }
        .profile_siswa {
            display: flex;
            gap: 10px;
            padding: 5px 10px;
        }
        .profile_siswa:hover {
            background-color: #ebecf1;
        }
        .header_nama {
            display: flex;
            flex-direction: column;
        }
        .header_nama .p-nama {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            width: 180px;
            font-weight: bold;
            font-size: 15px;
            margin-bottom: 0px;
            text-transform: uppercase;
        }
        .header_nama .p-nim {
            color: #7e8490;
            font-size: 13px;
            margin-bottom: 0px;
            text-transform: uppercase;
        }
        .header_pembuka {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .profile_detail {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        .notifikasi {
            display: flex;
            align-items: center;
            gap: 20px;
            padding: 5px 10px;
        }
        .notifikasi .display1, .notifikasi .display2 {
            position: relative;
            background-color: #f5f5f5;
            padding: 9px;
            border-radius: 999px;
        }
        .notifikasi .display1 .info {
            background-color: #f19f40;
            border-radius: 2rem;
            color: #fff;
            border: 1px solid #f6f7fd;
            font-size: 12px;
            font-style: normal;
            font-weight: 600;
            position: absolute;
            top: 0;
            right: 0;
            margin-top: -1px;
            margin-right: 2px;
            padding-right: 5px;
            padding-left: 5px;
        }
        .notifikasi:hover {
            background-color: #ebecf1;
        }
        .pointer {
            cursor: pointer;
        }
        .absolute {
            position: absolute;
        }
    </style>
    <header class="header" id="header">
        <div class="header_toggle">
            <i class='bx bx-menu' id="header-toggle"></i>
        </div>
        <div class="header_toggle2">
            <div id="info1" class="notifikasi pointer">
                <div class="display1">
                    <div class="info">
                        1
                    </div>
                    <svg width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="#85d95b">
                        <path d="M224 0c-17.7 0-32 14.3-32 32l0 19.2C119 66 64 130.6 64 208l0 18.8c0 47-17.3 92.4-48.5 127.6l-7.4 8.3c-8.4 9.4-10.4 22.9-5.3 34.4S19.4 416 32 416l384 0c12.6 0 24-7.4 29.2-18.9s3.1-25-5.3-34.4l-7.4-8.3C401.3 319.2 384 273.9 384 226.8l0-18.8c0-77.4-55-142-128-156.8L256 32c0-17.7-14.3-32-32-32zm45.3 493.3c12-12 18.7-28.3 18.7-45.3l-64 0-64 0c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7z"/>
                    </svg>
                </div>
            </div>
            <div id="info2" class="notifikasi pointer">
                <div class="display2">
                    <svg width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#85d95b">
                        <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336l24 0 0-64-24 0c-13.3 0-24-10.7-24-24s10.7-24 24-24l48 0c13.3 0 24 10.7 24 24l0 88 8 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-80 0c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/>
                    </svg>
                </div>
            </div>
            <div class="profile_siswa pointer">
                <div class="header_img"> 
                    <img src="../assets/image/profile_newbie.png" alt="">
                </div>
                <div class="profile_detail">
                    <div class="header_nama">
                        <p class="p-nama">Muhammad Akmal Rizki</p>
                        <p class="p-nim">202304023</p>
                    </div>
                    <div class="header_pembuka">
                        <svg width="12" height="12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#7e8490">
                            <path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> 
                <a href="index.php" class="nav_logo"> 
                    <i class='bx bx-layer nav_logo-icon'></i> 
                    <span class="nav_logo-name">Edwiss School</span>
                </a>
                <div class="nav_list"> 
                    <a href="dashboard.php" class="nav_link active" id="dashboard"> 
                        <i class='bx bx-grid-alt nav_icon'></i> 
                        <span class="nav_name">Dashboard</span> 
                    </a> 
                    <a href="biodata.php" class="nav_link" id="biodata"> 
                        <i class='bx bx-user nav_icon'></i> 
                        <span class="nav_name">Biodata</span> 
                    </a> 
                    <a href="krs.php" class="nav_link" id="krs"> 
                        <i class='bx bx-message-square-detail nav_icon'></i> 
                        <span class="nav_name">KRS</span> 
                    </a> 
                    <a href="bahan_tugas.php" class="nav_link" id="bahan_tugas"> 
                        <i class='bx bx-folder nav_icon'></i> 
                        <span class="nav_name">Bahan & Tugas</span> 
                    </a> 
                    <a href="jadwal_absen.php" class="nav_link" id="jadwal_absen"> 
                        <i class='bx bx-bookmark nav_icon'></i> 
                        <span class="nav_name">Jadwal & Absen</span> 
                    </a> 
                    <a href="nilai.php" class="nav_link" id="nilai"> 
                        <i class='bx bx-bar-chart-alt-2 nav_icon'></i> 
                        <span class="nav_name">Nilai</span> 
                    </a> 
                </div>
            </div> 
            <div class="nav_list"> 
            <a href=".." class="nav_link" style="padding-right: 80px;"> 
                <i class='bx bx-log-out nav_icon'></i> 
                <span class="nav_name">Logout</span> 
            </a>
            </div>
        </nav>
    </div>