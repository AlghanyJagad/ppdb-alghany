-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Apr 2020 pada 09.33
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(10) UNSIGNED NOT NULL,
  `jalur` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_panggilan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hoby` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anak_ke` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sodara_kandung` bigint(20) NOT NULL,
  `sodara_tiri` bigint(20) NOT NULL,
  `sodara_angkat` bigint(20) NOT NULL,
  `berat_badan` bigint(20) NOT NULL,
  `tinggi_badan` bigint(20) NOT NULL,
  `goldar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp_rumah` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tinggal_dengan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penyakit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelainan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir_ayah` date NOT NULL,
  `pekerjaan_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `warga_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp_ayah` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir_ibu` date NOT NULL,
  `pekerjaan_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `warga_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp_ibu` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pai_sm1` bigint(20) NOT NULL,
  `pai_sm2` bigint(20) NOT NULL,
  `pai_sm3` bigint(20) NOT NULL,
  `pai_sm4` bigint(20) NOT NULL,
  `pai_sm5` bigint(20) NOT NULL,
  `indo_sm1` bigint(20) NOT NULL,
  `indo_sm2` bigint(20) NOT NULL,
  `indo_sm3` bigint(20) NOT NULL,
  `indo_sm4` bigint(20) NOT NULL,
  `indo_sm5` bigint(20) NOT NULL,
  `ing_sm1` bigint(20) NOT NULL,
  `ing_sm2` bigint(20) NOT NULL,
  `ing_sm3` bigint(20) NOT NULL,
  `ing_sm4` bigint(20) NOT NULL,
  `ing_sm5` bigint(20) NOT NULL,
  `mtk_sm1` bigint(20) NOT NULL,
  `mtk_sm2` bigint(20) NOT NULL,
  `mtk_sm3` bigint(20) NOT NULL,
  `mtk_sm4` bigint(20) NOT NULL,
  `mtk_sm5` bigint(20) NOT NULL,
  `ipa_sm1` bigint(20) NOT NULL,
  `ipa_sm2` bigint(20) NOT NULL,
  `ipa_sm3` bigint(20) NOT NULL,
  `ipa_sm4` bigint(20) NOT NULL,
  `ipa_sm5` bigint(20) NOT NULL,
  `ips_sm1` bigint(20) NOT NULL,
  `ips_sm2` bigint(20) NOT NULL,
  `ips_sm3` bigint(20) NOT NULL,
  `ips_sm4` bigint(20) NOT NULL,
  `ips_sm5` bigint(20) NOT NULL,
  `prestasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `jalur`, `nama_lengkap`, `nama_panggilan`, `jk`, `tempat_lahir`, `tgl_lahir`, `agama`, `cita`, `hoby`, `anak_ke`, `sodara_kandung`, `sodara_tiri`, `sodara_angkat`, `berat_badan`, `tinggi_badan`, `goldar`, `alamat`, `no_telp_rumah`, `email`, `tinggal_dengan`, `penyakit`, `kelainan`, `nama_ayah`, `tempat_lahir_ayah`, `tgl_lahir_ayah`, `pekerjaan_ayah`, `pendidikan_ayah`, `warga_ayah`, `agama_ayah`, `no_hp_ayah`, `nama_ibu`, `tempat_lahir_ibu`, `tgl_lahir_ibu`, `pekerjaan_ibu`, `pendidikan_ibu`, `warga_ibu`, `agama_ibu`, `no_hp_ibu`, `pai_sm1`, `pai_sm2`, `pai_sm3`, `pai_sm4`, `pai_sm5`, `indo_sm1`, `indo_sm2`, `indo_sm3`, `indo_sm4`, `indo_sm5`, `ing_sm1`, `ing_sm2`, `ing_sm3`, `ing_sm4`, `ing_sm5`, `mtk_sm1`, `mtk_sm2`, `mtk_sm3`, `mtk_sm4`, `mtk_sm5`, `ipa_sm1`, `ipa_sm2`, `ipa_sm3`, `ipa_sm4`, `ipa_sm5`, `ips_sm1`, `ips_sm2`, `ips_sm3`, `ips_sm4`, `ips_sm5`, `prestasi`, `info`) VALUES
(4, 'Reguler', 'Azfar Wiseso Segoro', 'Azfar', 'L', 'Bogor', '2020-04-02', 'Islam', 'Sukses', 'Main', '3', 2, 0, 0, 29, 70, 'O', 'Gugunung,Bogor', '0211198008', 'Azfar@email.com', 'Orang Tua', '-', '-', 'Bogor', 'Jawa', '2020-04-03', 'Hotel', 'SMA', 'Indonesia', 'Islam', '08123456789', 'Melly April', 'Bogor', '2020-04-04', 'Rumah Tangga', '', 'Indonesia', 'Islam', '0987654321', 78, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 'Juara 1', 'Website'),
(5, 'Reguler', 'Steph Curry', 'Curry', 'L', 'Bogor', '2020-04-01', 'Islam', 'Pemain Basket', 'Basket', '1', 2, 0, 0, 130, 195, 'O', 'Amerika', '0222222222', 'cury@email.com', 'Orang Tua', '-', '-', 'Bogor', 'amerika', '2020-04-02', 'Nonton', 'D1', 'Usa', 'Islam', '098765', 'Lupa', 'Amerika', '2020-04-03', 'Rumah Tangga', '', 'Usa', 'Islam', '01223455', 80, 85, 85, 85, 85, 85, 85, 85, 85, 85, 85, 85, 85, 85, 85, 85, 85, 85, 85, 85, 85, 58, 85, 85, 85, 85, 85, 85, 85, 85, 'Juara NBA', 'Family'),
(6, 'Reguler', 'Lebron James', 'jeng', 'L', 'Bogor', '2020-04-02', 'Islam', 'Pemain Basket', 'Basket', '1', 0, 0, 0, 123, 200, 'A', 'lakers', '123212342', 'lebong@email.com', 'Orang Tua', '-', '-', 'Bogor', 'amrik', '2020-04-03', 'Gawe', 'SMA', 'Usa', 'Islam', '2412421424', 'dwefwfwf', 'Amerika', '2020-04-04', 'Rumah Tangga', '', 'Usa', 'Kristen', '42423424', 90, 90, 90, 76, 76, 76, 76, 76, 76, 76, 76, 76, 76, 76, 76, 76, 76, 76, 76, 76, 76, 76, 76, 76, 76, 76, 76, 76, 76, 76, 'juara nba juga', 'Family'),
(9, 'Reguler', 'Muhammad Alghany Jagad', 'Jagad', 'L', 'Bogor', '2020-04-01', 'Islam', 'Polisi', 'Basket', '1', 2, 0, 0, 50, 167, 'O', 'Jl.veteran 3 Kec.Ciawi Kab.Bogor', '0211198008', 'alghanyjagad@gmail.com', 'Orang Tua', '-', '-', 'Bogor', 'amerika', '2020-04-11', 'Kerja', 'SMA', 'Indonesia', 'Islam', '08123456789', 'wert', 'Amerika', '2020-04-18', 'Rumah Tangga', '', 'Indonesia', 'Islam', '0987654321', 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 'Juara NBA', 'Family');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `siswa_email_siswa_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
