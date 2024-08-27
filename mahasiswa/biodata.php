<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata - Mahasiswa</title>
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
        #biodata {
            color: var(--white-color);
            background-color: #85d95b;
            border-radius: 0px 10px 10px 0px;
        }
        #biodata::before {
            content: '';
            position: absolute;
            left: 0;
            width: 2px;
            height: 32px;
            background-color: var(--white-color)
        }
        p {
            margin-top: 0;
            margin-bottom: 0;
            font-size: 12px;
        }
        .label-p {
            font-size: 14px;
            margin-bottom: 5px;
            color: #888;
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
        .profile_picture {
            align-items: center;
            flex-wrap: wrap;
        }
        .pb-custom-8px {
            padding-bottom: 11px!important;
        }
        .bg-green-light {
            background-color: #85d95b;
            color: #fff;
        }
        input[type="file"] {
            display: none;
        }

        .custom-file-upload {
            border: 1px solid #85d95b;
            display: inline-block;
            padding: 6px 12px;
            cursor: pointer;
            color: #85d95b;
            background-color: transparent;
        }
        .custom-file-upload:hover {
            color: #fff;
            background-color: #85d95b;
        }
        .btn:hover {
            color: #fff;
            background-color: #73b850;
        }
    </style>
</head>
<body id="body-pd">
    <?php include('../header_1.php'); ?>








    <div class="main bg-light">
        <div class="header-nyah">
            <h4>Biodata</h4>
            <div>
                <select id="choose_agen" class="form-select form-select-sm">
                    <option value="data-diri">Data Diri&ensp;</option>
                    <option value="akademik">Akademik&ensp;</option>
                    <option value="alamat">Alamat&ensp;</option>
                    <option value="orang-tua">Orang Tua&ensp;</option>
                </select>
            </div>
        </div>
        <div id="data-diri">
            <div class="row">
                <div class="col-12 col-md-6">
                    <p class="label-p">Profile picture</p>
                    <div class="flex gap-3 gap-lg-5 profile_picture pb-custom-8px">
                        <div class="bg-green-light p-3 rounded">
                            <img width="150" height="150" src="../assets/image/profile_newbie.png" alt="">
                        </div>
                        <div>
                            <label for="file-upload" class="custom-file-upload rounded-2">
                                Ganti gambar
                            </label>
                            <input id="file-upload" type="file" />
                            <p class="pt-1">Besar file maksimal 1 MB, Ekstensi file: jpeg/jpg, png</p>
                        </div>
                    </div>
                    <p class="label-p">Email</p>
                    <div class="flex profile_picture pb-3">
                        <div class="input-group input-group-sm">
                            <input type="text" id="mahasiswa_email" class="form-control" size="100" value="">
                        </div>
                    </div>
                    <p class="label-p">No. Handphone</p>
                    <div class="flex profile_picture pb-3">
                        <div class="input-group input-group-sm">
                            <input type="text" id="mahasiswa_nohp" class="form-control" size="100" value="">
                        </div>
                    </div>
                    <p class="label-p">Jenis Kelamin</p>
                    <div class="flex profile_picture pb-3">
                        <div class="input-group input-group-sm">
                            <select id="mahasiswa_jk" class="form-select form-select-sm">
                                <option value="Laki-laki">Laki-laki&ensp;</option>
                                <option value="Perempuan">Perempuan&ensp;</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <p class="label-p">Nama Mahasiswa</p>
                    <div class="flex profile_picture pb-3">
                        <div class="input-group input-group-sm">
                            <input type="text" id="mahasiswa_nama" class="form-control" size="100" value="MUHAMMAD AKMAL RIZKI" disabled>
                        </div>
                    </div>
                    <p class="label-p">NIK</p>
                    <div class="flex profile_picture pb-3">
                        <div class="input-group input-group-sm">
                            <input type="text" id="mahasiswa_nik" class="form-control" size="100" value="" disabled>
                        </div>
                    </div>
                    <p class="label-p">NPWP</p>
                    <div class="flex profile_picture pb-3">
                        <div class="input-group input-group-sm">
                            <input type="text" id="mahasiswa_npwp" class="form-control" size="100" value="">
                        </div>
                    </div>
                    <p class="label-p">Tempat Lahir</p>
                    <div class="flex profile_picture pb-3">
                        <div class="input-group input-group-sm">
                            <input type="text" id="mahasiswa_tempatlahir" class="form-control" size="100" value="">
                        </div>
                    </div>
                    <p class="label-p">Tanggal Lahir</p>
                    <div class="flex profile_picture pb-3">
                        <div class="input-group input-group-sm">
                            <input type="text" id="mahasiswa_tanggallahir" class="form-control" size="100" value="">
                        </div>
                    </div>
                    <p class="label-p">Agama</p>
                    <div class="flex profile_picture pb-3">
                        <select id="mahasiswa_agama" class="form-select form-select-sm">
                            <option value="Islam">Islam&ensp;</option>
                            <option value="Kristen">Kristen&ensp;</option>
                            <option value="Hindu">Hindu&ensp;</option>
                            <option value="Budha">Budha&ensp;</option>
                            <option value="Kong Hu Cu">Kong Hu Cu&ensp;</option>
                            <option value="Tidak Diisi">Tidak Diisi&ensp;</option>
                            <option value="Lainnya">Lainnya&ensp;</option>
                        </select>
                    </div>
                </div>
                <div class="d-grid d-md-block right">
                    <button class="btn bg-green-light" type="button">Simpan</button>
                </div>
            </div>
        </div>
        <div id="akademik" style="display: none;">
            <div class="row">
                <div class="col-12 col-md-6">
                    <p class="label-p">Perguruan Tinggi</p>
                    <div class="flex profile_picture pb-3">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" size="100" value="Edwiss School" disabled>
                        </div>
                    </div>
                    <p class="label-p">NIM/NPM</p>
                    <div class="flex profile_picture pb-3">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" size="100" value="202304023" disabled>
                        </div>
                    </div>
                    <p class="label-p">Program Studi</p>
                    <div class="flex profile_picture pb-3">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" size="100" value="D4 - Teknologi Rekayasa Perangkat Lunak" disabled>
                        </div>
                    </div>
                    <p class="label-p">Angkatan</p>
                    <div class="flex profile_picture pb-3">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" size="100" value="2023" disabled>
                        </div>
                    </div>
                    <p class="label-p">Status</p>
                    <div class="flex profile_picture pb-3">
                        <div class="input-group input-group-sm">
                            <input style="background-color: #4caf50; color: #fff; border-color: #4caf50;"  type="text" class="form-control" size="100" value="Aktif" disabled>
                            <!-- Khusus Tidak Aktif <input style="background-color: #d80000; color: #fff; border-color: #d80000;"  type="text" class="form-control" size="100" value="Tidak Aktif" disabled> -->
                        </div>
                    </div>
                    <p class="label-p">Jenis Kelas</p>
                    <div class="flex profile_picture pb-3">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" size="100" value="Reguler 1" disabled>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <p class="label-p">Dosen PA/Wali</p>
                    <div class="flex profile_picture pb-3">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" size="100" value="MUHAMMAD NUGRAHA M.Eng" disabled>
                        </div>
                    </div>
                    <p class="label-p">Jalur Pendaftaran</p>
                    <div class="flex profile_picture pb-3">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" size="100" value="Mandiri" disabled>
                        </div>
                    </div>
                    <p class="label-p">Gelombang Masuk</p>
                    <div class="flex profile_picture pb-3">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" size="100" value="1" disabled>
                        </div>
                    </div>
                    <p class="label-p">Tanggal Masuk</p>
                    <div class="flex profile_picture pb-3">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" size="100" value="18 September 2023" disabled>
                        </div>
                    </div>
                    <p class="label-p">Periode Masuk</p>
                    <div class="flex profile_picture pb-3">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" size="100" value="2023" disabled>
                        </div>
                    </div>
                    <p class="label-p">Periode Akhir</p>
                    <div class="flex profile_picture pb-3">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" size="100" value="2029" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="alamat" style="display: none;">
            <div class="row">
                <div class="col-12 col-md-6">
                    <p class="label-p">Jalan</p>
                    <div class="flex profile_picture pb-3">
                        <div class="input-group input-group-sm">
                            <input type="text" id="mahasiswa_alamat" class="form-control" size="100" value="Perumahan Griya Mukti blok i/17, Ciwareng, Babakancikao, Purwakarta">
                        </div>
                    </div>
                    <div class="flex gap-5">
                        <div>
                            <p class="label-p">RT</p>
                            <div class="flex profile_picture pb-3">
                                <div class="input-group input-group-sm">
                                    <input type="text" id="mahasiswa_rt" class="form-control" size="100" value="007">
                                </div>
                            </div>
                        </div>
                        <div>
                            <p class="label-p">RW</p>
                            <div class="flex profile_picture pb-3">
                                <div class="input-group input-group-sm">
                                    <input type="text" id="mahasiswa_rw" class="form-control" size="100" value="006">
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="label-p">Kode Pos</p>
                    <div class="flex profile_picture pb-3">
                        <div class="input-group input-group-sm">
                            <input type="text" id="mahasiswa_kodepos" class="form-control" size="100" value="41151">
                        </div>
                    </div>
                    <p class="label-p">Tinggal</p>
                    <div class="flex profile_picture pb-3">
                        <select id="mahasiswa_tinggal" class="form-select form-select-sm">
                            <option value="Bersama Orang Tua">Bersama Orang Tua&ensp;</option>
                            <option value="Wali">Wali&ensp;</option>
                            <option value="Kost">Kost&ensp;</option>
                            <option value="Asrama">Asrama&ensp;</option>
                            <option value="Panti Asuhan">Panti Asuhan&ensp;</option>
                            <option value="Lainnya">Lainnya&ensp;</option>
                        </select>
                    </div>
                    <p class="label-p">Transportasi</p>
                    <div class="flex profile_picture pb-3">
                        <select id="mahasiswa_transportasi" class="form-select form-select-sm">
                            <option value="Jalan Kaki">Jalan Kaki&ensp;</option>
                            <option value="Sepeda Motor">Sepeda Motor Pribadi&ensp;</option>
                            <option value="Angkutan Umum">Angkutan Umum&ensp;</option>
                            <option value="Mobil Pribadi">Mobil Pribadi&ensp;</option>
                            <option value="Lainnya">Lainnya&ensp;</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <p class="label-p">Dusun</p>
                    <div class="flex profile_picture pb-3">
                        <div class="input-group input-group-sm">
                            <input type="text" id="mahasiswa_dusun" class="form-control" size="100" value="">
                        </div>
                    </div>
                    <p class="label-p">Kelurahan</p>
                    <div class="flex profile_picture pb-3">
                        <div class="input-group input-group-sm">
                            <input type="text" id="mahasiswa_kelurahan" class="form-control" size="100" value="Ciwareng">
                        </div>
                    </div>
                    <p class="label-p">Kecamatan</p>
                    <div class="flex profile_picture pb-3">
                        <div class="input-group input-group-sm">
                            <input type="text" id="mahasiswa_kecamatan" class="form-control" size="100" value="Kec. Babakancikao">
                        </div>
                    </div>
                    <p class="label-p">Kota</p>
                    <div class="flex profile_picture pb-3">
                        <div class="input-group input-group-sm">
                            <input type="text" id="mahasiswa_kota" class="form-control" size="100" value="Purwakarta">
                        </div>
                    </div>
                    <p class="label-p">Provinsi</p>
                    <div class="flex profile_picture pb-3">
                        <div class="input-group input-group-sm">
                            <input type="text" id="mahasiswa_provinsi" class="form-control" size="100" value="Jawabarat">
                        </div>
                    </div>
                </div>
                <div class="d-grid d-md-block right">
                    <button class="btn bg-green-light" type="button">Simpan</button>
                </div>
            </div>
        </div>
        <div id="orang-tua" style="display: none;">
            <div class="row">
                <div class="col-12 col-md-6">
                    <p class="label-p center">Biodata Ibu</p>
                    <p class="label-p">Nama Lengkap</p>
                    <div class="flex profile_picture pb-3">
                        <div class="input-group input-group-sm">
                            <input type="text" id="ibu_nama" class="form-control" size="100" value="">
                        </div>
                    </div>
                    <p class="label-p">NIK</p>
                    <div class="flex profile_picture pb-3">
                        <div class="input-group input-group-sm">
                            <input type="text" id="ibu_nik" class="form-control" size="100" value="Purwakarta">
                        </div>
                    </div>
                    <p class="label-p">No. Handphone</p>
                    <div class="flex profile_picture pb-3">
                        <div class="input-group input-group-sm">
                            <input type="text" id="ibu_nohp" class="form-control" size="100" value="Ciwareng">
                        </div>
                    </div>
                    <p class="label-p">Email</p>
                    <div class="flex profile_picture pb-3">
                        <div class="input-group input-group-sm">
                            <input type="text" id="ibu_email" class="form-control" size="100" value="Kec. Babakancikao">
                        </div>
                    </div>
                    <p class="label-p">Tanggal Lahir</p>
                    <div class="flex profile_picture pb-3">
                        <div class="input-group input-group-sm">
                            <input type="text" id="ibu_tanggallahir" class="form-control" size="100" value="Jawabarat">
                        </div>
                    </div>
                    <p class="label-p">Status Hidup</p>
                    <div class="flex profile_picture pb-3">
                        <select id="ibu_statushidup" class="form-select form-select-sm">
                            <option value="Hidup">Hidup&ensp;</option>
                            <option value="Meninggal">Meninggal&ensp;</option>
                        </select>
                    </div>
                    <p class="label-p">Alamat</p>
                    <div class="flex profile_picture pb-3">
                        <div class="input-group input-group-sm">
                            <input id="ibu_alamat" type="text" class="form-control" size="100" value="Perumahan Griya Mukti blok i/17, Ciwareng, Babakancikao, Purwakarta">
                        </div>
                    </div>
                    <p class="label-p">Kota</p>
                    <div class="flex profile_picture pb-3">
                        <div class="input-group input-group-sm">
                            <input type="text" id="ibu_kota" class="form-control" size="100" value="Purwakarta">
                        </div>
                    </div>
                    <p class="label-p">Pendidikan</p>
                    <div class="flex profile_picture pb-3">
                        <select id="ibu_pendidikan" class="form-select form-select-sm">
                            <option value="Tidak sekolah">Tidak sekolah</option>
                            <option value="PAUD">PAUD</option>
                            <option value="TK / sederajat">TK / sederajat</option>
                            <option value="Putus SD">Putus SD</option>
                            <option value="SD / sederajat">SD / sederajat</option>
                            <option value="SMP / sederajat">SMP / sederajat</option>
                            <option value="SMA / sederajat">SMA / sederajat</option>
                            <option value="Paket A">Paket A</option>
                            <option value="Paket B">Paket B</option>
                            <option value="Paket C">Paket C</option>
                            <option value="D1">D1</option>
                            <option value="D2">D2</option>
                            <option value="D3">D3</option>
                            <option value="D4">D4</option>
                            <option value="Profesi">Profesi</option>
                            <option value="S1">S1</option>
                            <option value="Sp-1">Sp-1</option>
                            <option value="S2">S2</option>
                            <option value="Sp-2">Sp-2</option>
                            <option value="S3">S3</option>
                            <option value="Non formal">Non formal</option>
                            <option value="Informal">Informal</option>
                            <option value="S1">Tidak Diisi</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <p class="label-p center">Biodata Ayah</p>
                    <p class="label-p">Nama Lengkap</p>
                    <div class="flex profile_picture pb-3">
                        <div class="input-group input-group-sm">
                            <input type="text" id="ayah_nama" class="form-control" size="100" value="">
                        </div>
                    </div>
                    <p class="label-p">NIK</p>
                    <div class="flex profile_picture pb-3">
                        <div class="input-group input-group-sm">
                            <input type="text" id="ayah_nik" class="form-control" size="100" value="Purwakarta">
                        </div>
                    </div>
                    <p class="label-p">No. Handphone</p>
                    <div class="flex profile_picture pb-3">
                        <div class="input-group input-group-sm">
                            <input type="text" id="ayah_nohp" class="form-control" size="100" value="Ciwareng">
                        </div>
                    </div>
                    <p class="label-p">Email</p>
                    <div class="flex profile_picture pb-3">
                        <div class="input-group input-group-sm">
                            <input type="text" id="ayah_email" class="form-control" size="100" value="Kec. Babakancikao">
                        </div>
                    </div>
                    <p class="label-p">Tanggal Lahir</p>
                    <div class="flex profile_picture pb-3">
                        <div class="input-group input-group-sm">
                            <input type="text" id="ayah_tanggallahir" class="form-control" size="100" value="Jawabarat">
                        </div>
                    </div>
                    <p class="label-p">Status Hidup</p>
                    <div class="flex profile_picture pb-3">
                        <select id="ayah_statushidup" class="form-select form-select-sm">
                            <option value="Hidup">Hidup&ensp;</option>
                            <option value="Meninggal">Meninggal&ensp;</option>
                        </select>
                    </div>
                    <p class="label-p">Alamat</p>
                    <div class="flex profile_picture pb-3">
                        <div class="input-group input-group-sm">
                            <input type="text" id="ayah_alamat" class="form-control" size="100" value="Perumahan Griya Mukti blok i/17, Ciwareng, Babakancikao, Purwakarta">
                        </div>
                    </div>
                    <p class="label-p">Kota</p>
                    <div class="flex profile_picture pb-3">
                        <div class="input-group input-group-sm">
                            <input type="text" id="ayah_kota" class="form-control" size="100" value="Purwakarta">
                        </div>
                    </div>
                    <p class="label-p">Pendidikan</p>
                    <div class="flex profile_picture pb-3">
                        <select id="ayah_pendidikan" class="form-select form-select-sm">
                            <option value="Tidak sekolah">Tidak sekolah</option>
                            <option value="PAUD">PAUD</option>
                            <option value="TK / sederajat">TK / sederajat</option>
                            <option value="Putus SD">Putus SD</option>
                            <option value="SD / sederajat">SD / sederajat</option>
                            <option value="SMP / sederajat">SMP / sederajat</option>
                            <option value="SMA / sederajat">SMA / sederajat</option>
                            <option value="Paket A">Paket A</option>
                            <option value="Paket B">Paket B</option>
                            <option value="Paket C">Paket C</option>
                            <option value="D1">D1</option>
                            <option value="D2">D2</option>
                            <option value="D3">D3</option>
                            <option value="D4">D4</option>
                            <option value="Profesi">Profesi</option>
                            <option value="S1">S1</option>
                            <option value="Sp-1">Sp-1</option>
                            <option value="S2">S2</option>
                            <option value="Sp-2">Sp-2</option>
                            <option value="S3">S3</option>
                            <option value="Non formal">Non formal</option>
                            <option value="Informal">Informal</option>
                            <option value="S1">Tidak Diisi</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                </div>
                <div class="d-grid d-md-block right">
                    <button class="btn bg-green-light" type="button">Simpan</button>
                </div>
            </div>
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

<script>
    var product1 = document.getElementById("data-diri");
    var product2 = document.getElementById("akademik");
    var product3 = document.getElementById("alamat");
    var product4 = document.getElementById("orang-tua");
    var choose_agen = document.getElementById("choose_agen");

    choose_agen.addEventListener("change", function(){
        if(choose_agen.value == 'data-diri'){
            if(product1.style.display !== 'block'){
                product1.style.display = 'block';
                product2.style.display = 'none';
                product3.style.display = 'none';
                product4.style.display = 'none';
            }
        }
        if(choose_agen.value == 'akademik'){
            if(product2.style.display !== 'block'){
                product2.style.display = 'block';
                product3.style.display = 'none';
                product4.style.display = 'none';
                product1.style.display = 'none';
            }
        }
        if(choose_agen.value == 'alamat'){
            if(product3.style.display !== 'block'){
                product3.style.display = 'block';
                product4.style.display = 'none';
                product1.style.display = 'none';
                product2.style.display = 'none';
            }
        }
        if(choose_agen.value == 'orang-tua'){
            if(product4.style.display !== 'block'){
                product4.style.display = 'block';
                product3.style.display = 'none';
                product2.style.display = 'none';
                product1.style.display = 'none';
            }
        }
    });
</script>

</body>
</html>