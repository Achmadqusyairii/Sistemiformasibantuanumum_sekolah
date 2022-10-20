-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Okt 2022 pada 03.19
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ibuksipa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `id` int(11) NOT NULL,
  `kd_guru` int(10) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kd_jabatan` int(10) NOT NULL,
  `kd_mapel` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_guru`
--

INSERT INTO `tbl_guru` (`id`, `kd_guru`, `nip`, `nama`, `kd_jabatan`, `kd_mapel`) VALUES
(8, 1, '1803231009960001', 'YOSI PRATIWI', 3, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jabatan`
--

CREATE TABLE `tbl_jabatan` (
  `id` int(11) NOT NULL,
  `kd_jabatan` int(10) NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_jabatan`
--

INSERT INTO `tbl_jabatan` (`id`, `kd_jabatan`, `jabatan`) VALUES
(4, 1, 'KEPALA SEKOLAH'),
(6, 2, 'WAKIL KEPALA SEKOLAH'),
(7, 3, 'GURU'),
(18, 4, 'SATPAM'),
(20, 5, 'KANTIN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `id` int(11) NOT NULL,
  `kode_kelas` int(50) NOT NULL,
  `nm_kelas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`id`, `kode_kelas`, `nm_kelas`) VALUES
(8, 1, '10 A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mapel`
--

CREATE TABLE `tbl_mapel` (
  `id` int(11) NOT NULL,
  `kd_mapel` int(50) NOT NULL,
  `nm_mapel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_mapel`
--

INSERT INTO `tbl_mapel` (`id`, `kd_mapel`, `nm_mapel`) VALUES
(5, 1, 'MATIMATIKA'),
(6, 2, 'IPA'),
(7, 3, 'BAHASA INGGRIS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_point`
--

CREATE TABLE `tbl_point` (
  `id` int(11) NOT NULL,
  `kd_point` int(10) NOT NULL,
  `nm_point` varchar(50) NOT NULL,
  `nilai_point` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_point`
--

INSERT INTO `tbl_point` (`id`, `kd_point`, `nm_point`, `nilai_point`) VALUES
(4, 1, 'Bolos', 51);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_point_siswa`
--

CREATE TABLE `tbl_point_siswa` (
  `id` int(11) NOT NULL,
  `kd_siswa` int(50) NOT NULL,
  `kd_point` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_point_siswa`
--

INSERT INTO `tbl_point_siswa` (`id`, `kd_siswa`, `kd_point`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `id` int(11) NOT NULL,
  `kd_siswa` int(10) NOT NULL,
  `nisn` int(10) NOT NULL,
  `nis` int(10) NOT NULL,
  `nm_siswa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id`, `kd_siswa`, `nisn`, `nis`, `nm_siswa`) VALUES
(3, 1, 876654, 133245, 'ACHMAD QUSYAIRI,SE'),
(5, 2, 19777, 21210014, 'YOSI PRATIWI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) DEFAULT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `user_password` varchar(100) DEFAULT NULL,
  `user_level` varchar(100) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_level`, `created_at`, `created_by`, `pass`) VALUES
(1, 'Admin Super Power', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '1', '0000-00-00', '0', '123456');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_point`
--
ALTER TABLE `tbl_point`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_point_siswa`
--
ALTER TABLE `tbl_point_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_guru`
--
ALTER TABLE `tbl_guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_point`
--
ALTER TABLE `tbl_point`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_point_siswa`
--
ALTER TABLE `tbl_point_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
