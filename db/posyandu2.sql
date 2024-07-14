-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Bulan Mei 2024 pada 08.50
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posyandu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `balita`
--

CREATE TABLE `balita` (
  `idBalita` varchar(20) NOT NULL,
  `namaBayi` varchar(255) NOT NULL,
  `tempatLahir` varchar(255) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `namaAyah` varchar(255) NOT NULL,
  `namaIbu` varchar(255) NOT NULL,
  `alamatOrtu` text NOT NULL,
  `anakKe` int(11) NOT NULL,
  `jenisKelamin` tinyint(1) NOT NULL,
  `usiaBayi` int(11) NOT NULL,
  `beratLahir` decimal(11,2) NOT NULL,
  `panjangLahir` decimal(11,2) NOT NULL,
  `golonganDarah` varchar(2) NOT NULL,
  `beratSekarang` decimal(11,2) NOT NULL,
  `panjangSekarang` decimal(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `balita`
--

INSERT INTO `balita` (`idBalita`, `namaBayi`, `tempatLahir`, `tanggalLahir`, `namaAyah`, `namaIbu`, `alamatOrtu`, `anakKe`, `jenisKelamin`, `usiaBayi`, `beratLahir`, `panjangLahir`, `golonganDarah`, `beratSekarang`, `panjangSekarang`) VALUES
('BAYI0005', 'Hifzal Asadil Zaky', 'Luwuk', '2010-05-10', 'Harbudi', 'Ama', 'Jl. Amuri Lantak No.003', 2, 0, 171, '6.00', '10.00', 'O', '6.00', '10.00'),
('BAYI0006', 'Zulkararnain Hunto', 'Desa Cibutu', '2024-01-02', 'galang', 'agung gawa', 'Jl. Ampi', 3, 0, 5, '45.00', '12.00', 'O', '45.00', '12.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ibuhamil`
--

CREATE TABLE `ibuhamil` (
  `idIbu` varchar(20) NOT NULL,
  `namaBumil` varchar(255) NOT NULL,
  `namaSuami` varchar(255) NOT NULL,
  `alamatBumil` text NOT NULL,
  `umur` int(11) NOT NULL,
  `usiaKandungan` int(11) NOT NULL,
  `kandunganKe` int(11) NOT NULL,
  `tempatLahir` varchar(50) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `beratUpdate` decimal(11,2) NOT NULL,
  `beratAwal` decimal(11,2) NOT NULL,
  `hpht` date NOT NULL,
  `perkiraanLahir` date NOT NULL,
  `tinggiIbu` decimal(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ibuhamil`
--

INSERT INTO `ibuhamil` (`idIbu`, `namaBumil`, `namaSuami`, `alamatBumil`, `umur`, `usiaKandungan`, `kandunganKe`, `tempatLahir`, `tanggalLahir`, `beratUpdate`, `beratAwal`, `hpht`, `perkiraanLahir`, `tinggiIbu`) VALUES
('00968719', 'Aliska Nasri', 'John Cena', 'Jl. Jeruk, Kota gorontalo', 1, 12, 3, 'Desa Cibutu', '2024-04-11', '70.00', '56.00', '2024-04-03', '2025-01-10', '140.00'),
('192827363687', 'Nama Saya', 'Nama Suami', 'Surabaya', 1, 8, 2, 'Surabaya', '2017-10-24', '67.00', '54.00', '2017-10-11', '2018-07-18', '160.00'),
('27326913912732', 'Ibu Hamil', 'Suami', 'Alamat', 16, 12, 8, 'Tempat Lahir', '2002-01-01', '59.00', '59.00', '2017-09-01', '2018-06-08', '168.00'),
('3171015408850008', 'Sasha Middle', 'Suami Sasha Middle', 'Surabaya', 33, 4, 2, 'California', '1985-08-17', '50.00', '50.00', '0000-00-00', '2018-07-08', '155.00'),
('3171015408850009', 'Sasha Middle', 'Suami Sasha Middle', 'Surabaya', 33, 4, 2, 'California', '1985-08-17', '50.00', '50.00', '0000-00-00', '2018-07-08', '155.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kader_admin`
--

CREATE TABLE `kader_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kader_admin`
--

INSERT INTO `kader_admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lansia`
--

CREATE TABLE `lansia` (
  `id_lansia` int(11) NOT NULL,
  `nik` int(16) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `notelp` int(15) NOT NULL,
  `tgl_lahir` varchar(50) NOT NULL,
  `usia` varchar(50) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `riwayat_PTMdk` varchar(50) NOT NULL,
  `riwayat_PTMds` varchar(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lansia`
--

INSERT INTO `lansia` (`id_lansia`, `nik`, `nama_lengkap`, `notelp`, `tgl_lahir`, `usia`, `agama`, `status`, `alamat`, `jenis_kelamin`, `pekerjaan`, `riwayat_PTMdk`, `riwayat_PTMds`, `tanggal`) VALUES
(10, 2147483647, 'Abdul Rahman Umar', 895990000, 'Gorontalo, 31-12-1950', '13', 'Islam', 'Kawin', 'Desa Bulila', 'L', 'Pedagang', 'Diabetes', 'Asam Urat', '2024-05-18'),
(11, 2147483647, 'Wahyu S Tammu', 82291111, 'Gorontalo, 07-12-2005', '19', 'Islam', 'Mahasiswa', 'Membramo', 'L', 'Web Developer', 'malas tidor', 'malas', '2024-05-18'),
(12, 2147483647, 'Alif Bima Pradana', 895990000, 'sambiut 07-juni-2005', '19', 'Islam', 'Mahasiswa', 'Desa Butu', 'L', 'Web Developer', 'Tidur Siang', 'Cari Masalah', '2024-05-18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemeriksaan`
--

CREATE TABLE `pemeriksaan` (
  `id_pemeriksaan` int(11) NOT NULL,
  `id_lansia` int(11) NOT NULL,
  `tgl_pemeriksaan` date NOT NULL,
  `TB` int(20) NOT NULL,
  `BB` int(20) NOT NULL,
  `LP` int(20) NOT NULL,
  `IMT` int(20) NOT NULL,
  `TD` varchar(20) NOT NULL,
  `visus_mata_kiri` int(5) NOT NULL,
  `visus_mata_kanan` int(5) NOT NULL,
  `pndgrn_kiri` int(5) NOT NULL,
  `pndgrn_kanan` int(5) NOT NULL,
  `GDP_GDS` int(20) NOT NULL,
  `CHOL` int(20) NOT NULL,
  `AU` decimal(20,0) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `balita`
--
ALTER TABLE `balita`
  ADD PRIMARY KEY (`idBalita`);

--
-- Indeks untuk tabel `ibuhamil`
--
ALTER TABLE `ibuhamil`
  ADD PRIMARY KEY (`idIbu`);

--
-- Indeks untuk tabel `kader_admin`
--
ALTER TABLE `kader_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lansia`
--
ALTER TABLE `lansia`
  ADD PRIMARY KEY (`id_lansia`),
  ADD KEY `id_lansia` (`id_lansia`);

--
-- Indeks untuk tabel `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  ADD PRIMARY KEY (`id_pemeriksaan`),
  ADD KEY `id_lansia` (`id_lansia`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kader_admin`
--
ALTER TABLE `kader_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `lansia`
--
ALTER TABLE `lansia`
  MODIFY `id_lansia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  MODIFY `id_pemeriksaan` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  ADD CONSTRAINT `pemeriksaan_ibfk_1` FOREIGN KEY (`id_lansia`) REFERENCES `lansia` (`id_lansia`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
