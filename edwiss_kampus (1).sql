-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Agu 2024 pada 09.11
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edwiss_kampus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id` int(12) NOT NULL,
  `nidn` varchar(12) NOT NULL,
  `link_profile` text NOT NULL DEFAULT 'assets/image/profile_newbie.png',
  `nik` text NOT NULL,
  `nama_dosen` text NOT NULL,
  `jurusan` text NOT NULL,
  `jenkel_dosen` varchar(10) NOT NULL,
  `alamat_dosen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id`, `nidn`, `link_profile`, `nik`, `nama_dosen`, `jurusan`, `jenkel_dosen`, `alamat_dosen`) VALUES
(1, '0123456789', 'assets/image/profile_newbie.png', '3201010101010001', 'RAHMI DARNIS', '4', 'Perempuan', 'Jl. Merdeka No. 123, Kecamatan Cibinong, Kabupaten Bogor, Jawabarat'),
(2, '1122334455', 'assets/image/profile_newbie.png', '3403030303030003', 'BAMBANG SUDARMONO', '2', 'Laki-laki', 'Jl. Soekarno-Hatta No. 89, Kecamatan Ujung Berung, Kota Bandung'),
(3, '5566778899', 'assets/image/profile_newbie.png', '3504040404040004', 'RATNA SARI', '2', 'Perempuan', 'Jl. Ahmad Yani No. 56, Kecamatan Ciputat, Kota Tangerang Selatan'),
(4, '6677889900', 'assets/image/profile_newbie.png', '3605050505050005', 'FADLI RAMADHAN', '1', 'Laki-laki', 'Jl. Teuku Umar No. 77, Kecamatan Palmerah, Kota Jakarta Barat'),
(5, '9876543210', 'assets/image/profile_newbie.png', '3302020202020002', 'ANDINI WULANDARI', '3', 'Perempuan', 'Jl. Diponegoro No. 45, Kecamatan Sukmajaya, Kota Depok, Jawabarat'),
(6, '9900112233', 'assets/image/profile_newbie.png', '3908080808080008', 'MUHAMMAD NUGRAHA', '4', 'Laki-laki', 'Jl. Mangkubumi No. 19, Kecamatan Gondomanan, Kota Yogyakarta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `info_singkat`
--

CREATE TABLE `info_singkat` (
  `id` int(20) NOT NULL,
  `pesan` text NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `info_singkat`
--

INSERT INTO `info_singkat` (`id`, `pesan`, `tanggal`) VALUES
(4, 'Panduan login untuk username adalah NIM Mahasiswa dan password adalah NIK', '2024-08-28 22:44:21'),
(5, 'Apabila ingin melakukan pembayaran uang semester atau uang kuliah bisa langsung ke administrasi kampus', '2024-08-28 22:46:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(11) NOT NULL,
  `nama_jurusan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id`, `nama_jurusan`) VALUES
(1, 'Teknologi Manufaktur - Mesin'),
(2, 'Teknologi Mekatronika'),
(3, 'Teknologi Listrik'),
(4, 'Teknologi RPL - Informatika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa_akademik`
--

CREATE TABLE `mahasiswa_akademik` (
  `nim` varchar(20) NOT NULL,
  `perguruan_tinggi` text NOT NULL DEFAULT 'Edwiss School',
  `program_studi` text NOT NULL,
  `angkatan` text NOT NULL,
  `status` text NOT NULL DEFAULT 'Aktif',
  `jenis_kelas` text NOT NULL,
  `dosen_pa` text NOT NULL,
  `jalur_pendaftaran` text NOT NULL,
  `gelombang_masuk` text NOT NULL,
  `tanggal_masuk` text NOT NULL,
  `periode_masuk` text NOT NULL,
  `periode_akhir` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mahasiswa_akademik`
--

INSERT INTO `mahasiswa_akademik` (`nim`, `perguruan_tinggi`, `program_studi`, `angkatan`, `status`, `jenis_kelas`, `dosen_pa`, `jalur_pendaftaran`, `gelombang_masuk`, `tanggal_masuk`, `periode_masuk`, `periode_akhir`) VALUES
('202404001', 'Edwiss School', '4', '2024', 'Aktif', 'Reguler 1', '6', 'Mandiri', '1', '27 Agustus 2024', '2024', '2030'),
('202404002', 'Edwiss School', '4', '2024', 'Aktif', 'Reguler 1', '6', 'Ujian Masuk', '1', '27 Agustus 2024', '2024', '2030'),
('202404003', 'Edwiss School', '4', '2024', 'Aktif', 'Reguler 1', '1', 'Beasiswa', '1', '27 Agustus 2024', '2024', '2030');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa_alamat`
--

CREATE TABLE `mahasiswa_alamat` (
  `nim` varchar(20) NOT NULL,
  `jalan` text NOT NULL,
  `rt` text NOT NULL,
  `rw` text NOT NULL,
  `dusun` text NOT NULL,
  `kelurahan` text NOT NULL,
  `kecamatan` text NOT NULL,
  `kode_pos` text NOT NULL,
  `kota` text NOT NULL,
  `provinsi` text NOT NULL,
  `tinggal` text NOT NULL,
  `transportasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mahasiswa_alamat`
--

INSERT INTO `mahasiswa_alamat` (`nim`, `jalan`, `rt`, `rw`, `dusun`, `kelurahan`, `kecamatan`, `kode_pos`, `kota`, `provinsi`, `tinggal`, `transportasi`) VALUES
('202404001', '', '', '', '', '', '', '', '', '', '', ''),
('202404002', '', '', '', '', '', '', '', '', '', '', ''),
('202404003', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa_biodata_ayah`
--

CREATE TABLE `mahasiswa_biodata_ayah` (
  `nim` varchar(20) NOT NULL,
  `nama_lengkap` text NOT NULL,
  `nik` text NOT NULL,
  `no_handphone` text NOT NULL,
  `email` text NOT NULL,
  `tanggal_lahir` text NOT NULL,
  `status_hidup` text NOT NULL,
  `alamat` text NOT NULL,
  `kota` text NOT NULL,
  `pendidikan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mahasiswa_biodata_ayah`
--

INSERT INTO `mahasiswa_biodata_ayah` (`nim`, `nama_lengkap`, `nik`, `no_handphone`, `email`, `tanggal_lahir`, `status_hidup`, `alamat`, `kota`, `pendidikan`) VALUES
('202404001', '', '', '', '', '', '', '', '', ''),
('202404002', '', '', '', '', '', '', '', '', ''),
('202404003', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa_biodata_ibu`
--

CREATE TABLE `mahasiswa_biodata_ibu` (
  `nim` varchar(20) NOT NULL,
  `nama_lengkap` text NOT NULL,
  `nik` text NOT NULL,
  `no_handphone` text NOT NULL,
  `email` text NOT NULL,
  `tanggal_lahir` text NOT NULL,
  `status_hidup` text NOT NULL,
  `alamat` text NOT NULL,
  `kota` text NOT NULL,
  `pendidikan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mahasiswa_biodata_ibu`
--

INSERT INTO `mahasiswa_biodata_ibu` (`nim`, `nama_lengkap`, `nik`, `no_handphone`, `email`, `tanggal_lahir`, `status_hidup`, `alamat`, `kota`, `pendidikan`) VALUES
('202404001', '', '', '', '', '', '', '', '', ''),
('202404002', '', '', '', '', '', '', '', '', ''),
('202404003', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa_datadiri`
--

CREATE TABLE `mahasiswa_datadiri` (
  `nim` varchar(20) NOT NULL,
  `link_profile` text NOT NULL DEFAULT 'assets/image/profile_newbie.png',
  `nama` text NOT NULL,
  `nik` text NOT NULL,
  `npwp` text NOT NULL,
  `email` text NOT NULL,
  `no_handphone` text NOT NULL,
  `jenis_kelamin` text NOT NULL,
  `tempat_lahir` text NOT NULL,
  `tanggal_lahir` text NOT NULL,
  `agama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mahasiswa_datadiri`
--

INSERT INTO `mahasiswa_datadiri` (`nim`, `link_profile`, `nama`, `nik`, `npwp`, `email`, `no_handphone`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`) VALUES
('202404001', 'assets/image/profile_newbie.png', 'Muhammad Akmal Rizki', '3201042506980003', '', '', '', 'Laki-laki', 'Purwakarta', '01 Februari 2005', ''),
('202404002', 'assets/image/profile_newbie.png', 'Rafli Kamal', '3174021504950002', '', '', '', 'Laki-laki', 'Purwakarta', '24 Juli 2003', ''),
('202404003', 'assets/image/profile_newbie.png', 'Arya Maulana', '3305062201760005', '', '', '', 'Laki-laki', 'Purwakarta', '19 Juni 2004', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matakuliah`
--

CREATE TABLE `matakuliah` (
  `kode_matkul` varchar(12) NOT NULL,
  `nama_matkul` varchar(50) NOT NULL,
  `dosen` int(20) NOT NULL,
  `sks` int(3) NOT NULL,
  `jurusan` int(11) NOT NULL,
  `semester` int(12) NOT NULL,
  `smt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `matakuliah`
--

INSERT INTO `matakuliah` (`kode_matkul`, `nama_matkul`, `dosen`, `sks`, `jurusan`, `semester`, `smt`) VALUES
('TL101', 'MATEMATIKA TERAPAN 1', 5, 2, 3, 1, 'Ganjil'),
('TL201', 'RANGKAIAN LISTRIK 1', 5, 2, 3, 2, 'Genap'),
('TL202', 'Matematika Tahapan 1', 5, 3, 3, 2, 'Genap'),
('TMK101', 'Algoritma Pemrograman', 2, 2, 2, 1, 'Ganjil'),
('TMK201', 'Aljabar Linier', 3, 2, 2, 2, 'Genap'),
('TMM101', 'Bahasa Inggris', 4, 2, 1, 1, 'Ganjil'),
('TMM102', 'Bahasa Indonesia', 4, 1, 1, 1, 'Ganjil'),
('TMM201', 'Pengantar Teknik Mesin', 4, 1, 1, 2, 'Genap'),
('TMM202', 'Material Teknik 1', 4, 2, 1, 2, 'Genap'),
('TRPL101', 'Bahasa Inggris', 6, 2, 4, 1, 'Ganjil'),
('TRPL102', 'Pemrograman Web 1', 6, 2, 4, 1, 'Ganjil'),
('TRPL103', 'Pemrograman Dasar 1', 1, 2, 4, 1, 'Ganjil'),
('TRPL104', 'Matematika Dasar', 1, 1, 4, 1, 'Ganjil'),
('TRPL105', 'Sistem Basis Data', 1, 2, 4, 1, 'Ganjil'),
('TRPL201', 'Rekayasa Perangkat Lunak', 6, 2, 4, 2, 'Genap'),
('TRPL202', 'Matematika District', 6, 2, 4, 2, 'Genap'),
('TRPL301', 'Bahasa Inggris 3', 1, 3, 4, 3, 'Ganjil');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tagihan`
--

CREATE TABLE `tagihan` (
  `nim` varchar(20) NOT NULL,
  `nama_mahasiswa` text NOT NULL,
  `jalur_pendaftaran` text NOT NULL,
  `status` text NOT NULL DEFAULT 'Aktif',
  `tagihan` varchar(20) NOT NULL DEFAULT '21000000'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tagihan`
--

INSERT INTO `tagihan` (`nim`, `nama_mahasiswa`, `jalur_pendaftaran`, `status`, `tagihan`) VALUES
('202404001', 'Muhammad Akmal Rizki', 'Mandiri', 'Aktif', '21000000'),
('202404002', 'Rafli Kamal', 'Ujian Masuk', 'Aktif', '21000000'),
('202404003', 'Arya Maulana', 'Beasiswa', 'Aktif', '1000000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `info_singkat`
--
ALTER TABLE `info_singkat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswa_akademik`
--
ALTER TABLE `mahasiswa_akademik`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `mahasiswa_alamat`
--
ALTER TABLE `mahasiswa_alamat`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `mahasiswa_biodata_ayah`
--
ALTER TABLE `mahasiswa_biodata_ayah`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `mahasiswa_biodata_ibu`
--
ALTER TABLE `mahasiswa_biodata_ibu`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `mahasiswa_datadiri`
--
ALTER TABLE `mahasiswa_datadiri`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`kode_matkul`),
  ADD KEY `dosen_id` (`dosen`),
  ADD KEY `jurusan_id` (`jurusan`);

--
-- Indeks untuk tabel `tagihan`
--
ALTER TABLE `tagihan`
  ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `info_singkat`
--
ALTER TABLE `info_singkat`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD CONSTRAINT `dosen_id` FOREIGN KEY (`dosen`) REFERENCES `dosen` (`id`),
  ADD CONSTRAINT `jurusan_id` FOREIGN KEY (`jurusan`) REFERENCES `jurusan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
