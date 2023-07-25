-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 16 Jun 2023 pada 10.50
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vinnvilla`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `amenities`
--

CREATE TABLE `amenities` (
  `id_foto` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `amenities`
--

INSERT INTO `amenities` (`id_foto`, `nama`, `foto`) VALUES
(28, 'Kopi', 'nescafe1.jpg'),
(29, 'Krimer', 'krimer1.jpg'),
(30, 'Teh', 'teh1.jpg'),
(31, 'Gula Putih', 'gula.jpg'),
(32, 'Gula Merah', 'gula_merah.jpg'),
(33, 'Gula Tropicana', 'gula_tropicana.jpg'),
(34, 'Fanta Kaleng', 'fanta_kaleng.jpeg'),
(35, 'Sprite Kaleng', 'sprite_kaleng.jpg'),
(36, 'Coca-Cola Kaleng', 'cola_kaleng1.jpg'),
(37, 'Air Mineral 600ml', 'mineral4.jpg'),
(38, 'Sabun', 'sabun.jpg'),
(39, 'Shampo', 'sampho.jpg'),
(40, 'Sikat Gigi', 'sikat_gigi.jpg'),
(41, 'Shower Cap', 'showercap.jpg'),
(42, 'Cotton Bud', 'cotton_bud1.jpg'),
(43, 'Sisir', 'sisir.jpg'),
(44, 'Sandal', 'sandal1.jpg'),
(45, 'Londry Bag', 'londry_bag.jpg'),
(46, 'Tisu Toilet', 'Tisu_Toilet.jpeg'),
(47, 'Facial Tisu', 'Facial_Tisu.jpeg'),
(48, 'Pencil', 'pencil.jpg'),
(49, 'Buku Note', 'Buku_Note.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_masuk`
--

CREATE TABLE `data_masuk` (
  `id_amenities` int(11) NOT NULL,
  `id_foto` int(50) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `harga_satuan` int(50) NOT NULL,
  `kuan_pemakaian` int(50) NOT NULL,
  `n_penyerapandana` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_masuk`
--

INSERT INTO `data_masuk` (`id_amenities`, `id_foto`, `satuan`, `harga_satuan`, `kuan_pemakaian`, `n_penyerapandana`) VALUES
(82, 37, 'Karton', 50900, 70, 3563000),
(83, 49, 'Picis', 1500, 350, 525000),
(84, 36, 'Karton', 104000, 3, 312000),
(85, 42, 'Picis', 1000, 500, 500000),
(86, 47, 'Picis', 21245, 30, 637350),
(87, 34, 'Karton', 104000, 3, 312000),
(88, 32, 'Pack', 34000, 5, 170000),
(89, 31, 'Pack', 37000, 5, 185000),
(90, 33, 'Pack', 48000, 6, 288000),
(91, 28, 'Pack', 6166, 40, 246640),
(92, 29, 'Pack', 51000, 2, 102000),
(93, 45, 'Picis', 1400, 500, 700000),
(94, 48, 'Picis', 900, 200, 180000),
(95, 38, 'Picis', 1700, 700, 1190000),
(96, 44, 'Picis', 2000, 700, 1400000),
(97, 39, 'Picis', 1700, 700, 1190000),
(98, 41, 'Picis', 625, 500, 312500),
(99, 40, 'Picis', 1570, 700, 1099000),
(100, 43, 'Picis', 1000, 400, 400000),
(101, 35, 'Karton', 104000, 3, 312000),
(102, 30, 'Pack', 5500, 40, 220000),
(103, 46, 'Picis', 2208, 50, 110400);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE `hasil` (
  `id_hasil` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `n_penyerapandana` int(11) NOT NULL,
  `pers_penyerapandana` double NOT NULL,
  `pers_kumulatif` double NOT NULL,
  `pers_item` double NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hasil`
--

INSERT INTO `hasil` (`id_hasil`, `nama`, `n_penyerapandana`, `pers_penyerapandana`, `pers_kumulatif`, `pers_item`, `kategori`) VALUES
(1, 'Air Mineral 600ml', 3563000, 25.5, 25.5, 4.5, 'A'),
(2, 'Sandal', 1400000, 10, 35.6, 4.5, 'A'),
(3, 'Shampo', 1190000, 8.5, 44.1, 4.5, 'A'),
(4, 'Sabun', 1190000, 8.5, 52.6, 4.5, 'A'),
(5, 'Sikat Gigi', 1099000, 7.9, 60.5, 4.5, 'A'),
(6, 'Londry Bag', 700000, 5, 65.5, 4.5, 'A'),
(7, 'Facial Tisu', 637350, 4.6, 70.1, 4.5, 'B'),
(8, 'Buku Note', 525000, 3.8, 73.8, 4.5, 'B'),
(9, 'Cotton Bud', 500000, 3.6, 77.4, 4.5, 'B'),
(10, 'Sisir', 400000, 2.9, 80.3, 4.5, 'B'),
(11, 'Shower Cap', 312500, 2.2, 82.5, 4.5, 'B'),
(12, 'Fanta Kaleng', 312000, 2.2, 84.8, 4.5, 'B'),
(13, 'Sprite Kaleng', 312000, 2.2, 87, 4.5, 'B'),
(14, 'Coca-Cola Kaleng', 312000, 2.2, 89.2, 4.5, 'B'),
(15, 'Gula Tropicana', 288000, 2.1, 91.3, 4.5, 'C'),
(16, 'Kopi', 246640, 1.8, 93.1, 4.5, 'C'),
(17, 'Teh', 220000, 1.6, 94.6, 4.5, 'C'),
(18, 'Gula Putih', 185000, 1.3, 96, 4.5, 'C'),
(19, 'Pencil', 180000, 1.3, 97.3, 4.5, 'C'),
(20, 'Gula Merah', 170000, 1.2, 98.5, 4.5, 'C'),
(21, 'Tisu Toilet', 110400, 0.8, 99.3, 4.5, 'C'),
(22, 'Krimer', 102000, 0.7, 100, 4.5, 'C');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', '123456');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `amenities`
--
ALTER TABLE `amenities`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indeks untuk tabel `data_masuk`
--
ALTER TABLE `data_masuk`
  ADD PRIMARY KEY (`id_amenities`),
  ADD UNIQUE KEY `id_foto` (`id_foto`);

--
-- Indeks untuk tabel `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `amenities`
--
ALTER TABLE `amenities`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT untuk tabel `data_masuk`
--
ALTER TABLE `data_masuk`
  MODIFY `id_amenities` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT untuk tabel `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_masuk`
--
ALTER TABLE `data_masuk`
  ADD CONSTRAINT `data_masuk_ibfk_1` FOREIGN KEY (`id_foto`) REFERENCES `amenities` (`id_foto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
