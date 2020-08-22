-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 23 Agu 2020 pada 02.19
-- Versi server: 10.3.23-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u6117788_report`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `contacts`
--

CREATE TABLE `contacts` (
  `id_contact` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `division` varchar(100) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `contacts`
--

INSERT INTO `contacts` (`id_contact`, `phone`, `division`, `address`) VALUES
('CONT0001', '081234556789', 'Polisi', 'Jalan Polisi'),
('CONT0002', '087544612166', 'Damkar', 'jalan ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `locations`
--

CREATE TABLE `locations` (
  `id_location` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `locations`
--

INSERT INTO `locations` (`id_location`, `name`, `address`, `latitude`, `longitude`) VALUES
('LOCA0001', 'Universitas Telkom', 'Jl. Telekomunikasi No.1, Sukapura, Kec. Dayeuhkolot, Bandung, Jawa Barat 40257', '-6.974038', '107.630483');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reports`
--

CREATE TABLE `reports` (
  `id_report` varchar(20) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `date` datetime NOT NULL,
  `img` text NOT NULL,
  `report` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `reports`
--

INSERT INTO `reports` (`id_report`, `id_user`, `date`, `img`, `report`) VALUES
('REPO0001', 'USER0001', '0000-00-00 00:00:00', 'Report/REPO0001.jpg', 'kejadian'),
('REPO0002', 'USER0001', '0000-00-00 00:00:00', 'Report/REPO0002.jpg', 'kejadian lamaaaaadasd'),
('REPO0003', 'USER0001', '2020-08-20 23:59:34', 'Report/REPO0003.jpg', 'wggww'),
('REPO0004', 'USER0001', '2020-08-21 05:17:25', 'Report/REPO0004.jpg', 'test');

-- --------------------------------------------------------

--
-- Struktur dari tabel `schedules`
--

CREATE TABLE `schedules` (
  `id_schedule` varchar(20) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `day` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `schedules`
--

INSERT INTO `schedules` (`id_schedule`, `id_user`, `day`) VALUES
('SCHE0001', 'USER0003', 'SENIN'),
('SCHE0002', 'USER0001', 'SELASA'),
('SCHE0003', 'USER0001', 'RABU'),
('SCHE0004', 'USER0001', 'KAMIS'),
('SCHE0005', 'USER0001', 'JUMAT'),
('SCHE0006', 'USER0001', 'SABTU'),
('SCHE0007', 'USER0001', 'MINGGU');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `email`, `role`, `name`, `address`, `phone`, `password`, `img`) VALUES
('USER0001', 'test@mail.com', 1, 'Aditya Nur Riskan N', 'Jl. MT Haryono No 16', '08123456789', '123456', 'User/USER0001.jpg'),
('USER0002', 'admin@mail.com', 0, 'admin', 'alamat', '0', '123456', 'null'),
('USER0003', 'officer@mail.com', 2, 'petugas', 'alamat', '123', '123456', 'null');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id_contact`),
  ADD UNIQUE KEY `id_contact` (`id_contact`);

--
-- Indeks untuk tabel `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id_location`);

--
-- Indeks untuk tabel `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id_report`),
  ADD UNIQUE KEY `id_report` (`id_report`);

--
-- Indeks untuk tabel `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id_schedule`),
  ADD UNIQUE KEY `id_schedule` (`id_schedule`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `id_user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
