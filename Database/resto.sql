-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Apr 2021 pada 10.44
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resto`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `no_meja` varchar(100) NOT NULL,
  `select_person` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `booking`
--

INSERT INTO `booking` (`id_booking`, `nama`, `email`, `no_hp`, `no_meja`, `select_person`, `status`, `time`, `date`) VALUES
(1, 'Moch Azmi Iskandar', 'azmiiskandar0@gmail.com', '082295153183', '4', '3', 'Selesai', '16:36:59', '2021-04-11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `select_person` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id_contact`, `nama`, `email`, `select_person`, `deskripsi`) VALUES
(1, 'Moch Azmi Iskandar', 'azmiiskandar0@gmail.com', '3', 'dasdas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `gambar`, `nama`) VALUES
(1, 'gallery1.jpg', 'Gallery 1'),
(2, 'gallery-img-02.jpg', 'Gallery 2'),
(3, 'gallery-img-03.jpg', 'Gallery 3'),
(4, 'gallery-img-04.jpg', 'Gallery 4'),
(5, 'gallery-img-05.jpg', 'Gallery 5'),
(7, 'gallery-img-061.jpg', 'Gallery 6');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama`, `date`) VALUES
(1, 'Coffe', '2021-04-11'),
(4, 'Juice', '2021-04-11'),
(5, 'Makanan', '2021-04-11'),
(6, 'Minuman', '2021-04-11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `kode` varchar(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nama_kategori` varchar(150) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id_menu`, `kode`, `nama`, `nama_kategori`, `harga`, `gambar`, `deskripsi`, `date`) VALUES
(2, 'JS', 'Juice Jeruk', 'Juice', 15000, 'img-03.jpg', 'dasdassadas', '2021-04-11'),
(3, 'Js1', 'Juice Stroberri', 'Juice', 15000, 'img-02.jpg', 'Juice dengan gula yang manis', '2021-04-11'),
(4, 'M1', 'Minuman 1', 'Minuman', 20000, 'img-01.jpg', 'Minuman 1', '2021-04-11'),
(5, 'MB1', 'Makanan Burger', 'Makanan', 25000, 'img-04.jpg', 'Makanan Burger', '2021-04-11'),
(6, 'SPGT', 'Spagetti', 'Makanan', 50000, 'img-06.jpg', 'Spagetti', '2021-04-11'),
(7, 'S1', 'Roti Coklat', 'Makanan', 25000, 'img-07.jpg', 'Roti Coklat Lumer', '2021-04-11'),
(8, 'SY1', 'Sayuran', 'Makanan', 60000, 'img-09.jpg', 'Sayuran Sehat ', '2021-04-11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `team`
--

CREATE TABLE `team` (
  `id_team` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `link_fb` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `team`
--

INSERT INTO `team` (`id_team`, `nama`, `deskripsi`, `pekerjaan`, `gambar`, `no_hp`, `link_fb`) VALUES
(1, 'Ujang Andi', 'sdsaidandoskn', 'Pelayan', 'team1.jpg', '082295153183', 'facebook.com'),
(3, 'Retha', 'Retha sebagai manager di perusahaan kami', 'Manager', 'stuff-img-031.jpg', '082295153183', 'dassadas'),
(4, 'Ari Gunawan', 'Ari sebagai Cheff di perusahaan kami', 'Cheff', 'stuff-img-021.jpg', '0822951531', 'dassadasdasads'),
(5, 'Adi Nur', 'Adi sebagai Cassier di perusahaan kami', 'Cassier', 'stuff-img-04.jpg', '082295153183', 'dassadasdasads'),
(6, 'Marwa', 'Marwa sebagai Penjaga di perusahaan kami', 'Penjaga', 'stuff-img-06.jpg', '082295153183', 'dassadasdasads'),
(7, 'Elvira', 'Elvira sebagai CEO di perusahaan kami', 'CEO ', 'stuff-img-05.jpg', '082295153183', 'dassadasdasads');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimoni`
--

CREATE TABLE `testimoni` (
  `id_testimoni` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `testimoni`
--

INSERT INTO `testimoni` (`id_testimoni`, `nama`, `email`, `deskripsi`) VALUES
(1, 'Moch Azmi Iskandar', 'azmiiskandar0@gmail.com', 'dsadasdsadsa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `email`, `password`, `status`, `no_hp`, `nama`, `role_id`, `date`) VALUES
(1, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Admin', '082295153183', 'Administrator', 1, '2021-04-11 11:19:14');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indeks untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indeks untuk tabel `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id_team`);

--
-- Indeks untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id_testimoni`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `team`
--
ALTER TABLE `team`
  MODIFY `id_team` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id_testimoni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
