-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 Sep 2017 pada 15.59
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_adventure`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Tenda', '2017-08-10 05:43:12', '2017-08-10 05:43:12'),
(2, 'Sleeping Bag', '2017-08-10 05:43:22', '2017-08-10 05:43:22'),
(3, 'Backpack', '2017-08-10 05:43:31', '2017-08-10 05:43:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_transaction`
--

CREATE TABLE `detail_transaction` (
  `id` int(11) NOT NULL,
  `transaction_id` varchar(50) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` float NOT NULL,
  `total` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_transaction`
--

INSERT INTO `detail_transaction` (`id`, `transaction_id`, `product_id`, `qty`, `price`, `total`, `created_at`, `updated_at`) VALUES
(1, 'TR17090001', 2, 2, 450000, 900000, '2017-09-10 22:07:54', '2017-09-10 22:07:54'),
(2, 'TR17090001', 1, 1, 300000, 300000, '2017-09-10 22:07:54', '2017-09-10 22:07:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `transaction_id` varchar(50) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `stock` int(11) NOT NULL,
  `discount` float NOT NULL,
  `isSale` enum('1','0') NOT NULL,
  `available` enum('1','0') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id`, `category_id`, `name`, `description`, `price`, `stock`, `discount`, `isSale`, `available`, `created_at`, `updated_at`) VALUES
(1, 1, 'Tenda Mini', 'Tenda dengan ukuran kecil yang bagus', 300000, 2, 0, '1', '1', '2017-09-06 06:34:17', '2017-09-10 22:07:54'),
(2, 1, 'Tenda Besar', 'Tenda dengan ukuran yang besar dan nyaman saat digunakan', 500000, 2, 10, '1', '1', '2017-09-06 06:35:21', '2017-09-10 22:07:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_detail`
--

CREATE TABLE `product_detail` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `label` varchar(100) NOT NULL,
  `value` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `product_detail`
--

INSERT INTO `product_detail` (`id`, `product_id`, `label`, `value`, `created_at`, `updated_at`) VALUES
(1, 1, 'Material', 'Parasut', '2017-09-06 06:34:17', '2017-09-06 06:34:17'),
(2, 1, 'Warna', 'Merah', '2017-09-06 06:34:17', '2017-09-06 06:34:17'),
(3, 1, 'Panjang', '2m', '2017-09-06 06:34:17', '2017-09-06 06:34:17'),
(4, 2, 'Material', 'Parasut', '2017-09-06 06:35:21', '2017-09-06 06:35:21'),
(5, 2, 'Warna', 'Biru', '2017-09-06 06:35:21', '2017-09-06 06:35:21'),
(6, 2, 'Panjang', '5m', '2017-09-06 06:35:21', '2017-09-06 06:35:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(5, 1, '2ccaf4f2703ba1873d5c97ce3554236c.jpg', '2017-09-07 18:07:08', '2017-09-07 18:07:08'),
(6, 1, '0feb0141885fc06f16fb64e03fe2eb36.jpg', '2017-09-07 18:07:18', '2017-09-07 18:07:18'),
(7, 2, '66034e1394e0f3f024aa36076c7c079a.jpg', '2017-09-07 18:07:37', '2017-09-07 18:07:37'),
(8, 2, '85273476d58e80a20c844233f77f5db9.jpg', '2017-09-07 18:09:15', '2017-09-07 18:09:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `type` varchar(100) DEFAULT NULL,
  `value` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `setting`
--

INSERT INTO `setting` (`id`, `type`, `value`, `created_at`, `updated_at`) VALUES
(2, 'product_detail', 'Material', '2017-06-02 18:19:13', '2017-06-02 18:23:42'),
(3, 'product_detail', 'Warna', '2017-06-02 18:19:27', '2017-06-05 19:46:56'),
(4, 'product_detail', 'Panjang', '2017-06-02 18:20:11', '2017-06-05 19:47:05'),
(5, 'product_detail', 'Lebar', '2017-06-05 19:47:20', '2017-06-05 19:47:20'),
(6, 'product_detail', 'Tinggi', '2017-06-05 19:47:29', '2017-06-05 19:47:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(11) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaction`
--

CREATE TABLE `transaction` (
  `id` varchar(50) NOT NULL,
  `member_id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `address` varchar(255) NOT NULL,
  `durasi` int(11) NOT NULL,
  `total` float NOT NULL,
  `denda` float NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaction`
--

INSERT INTO `transaction` (`id`, `member_id`, `fullname`, `phone`, `address`, `durasi`, `total`, `denda`, `status`, `created_at`, `updated_at`) VALUES
('TR17090001', 4, 'Member Baru', '086734747', 'Jalan Wisnu Marga Belayu No 19', 2, 1200000, 30000, 5, '2017-09-10 22:07:54', '2017-09-11 05:38:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `isActive` int(1) NOT NULL DEFAULT '1',
  `type` int(1) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `address`, `isActive`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@mail.com', '$2y$10$bLGu/CEj58z2G1QX9J9DVegK6KScKwW0aUZOyhkXMld/7NhnVpOhu', '0822464828', 'Jalan Nangka', 1, 1, '9RLey6C7EvXceFBYf54x6IamYDfFs8PqZA7MT5AWuXxXTS1VlkeXnwXjHrHH', '2017-05-26 20:49:12', '2017-05-30 00:55:14'),
(2, 'Admn Baru', 'baru@mail.com', '$2y$10$iKM.KC4IV6PlDsakdfC.JO/UPUOzBj.adt16uxpFIVX.WAqHixNtq', '08483748473', 'Jalan Merdeka No. 120', 1, 1, NULL, '2017-05-29 23:30:18', '2017-05-29 23:30:18'),
(4, 'Member Bedebah', 'member@mail.com', '$2y$10$Mj7tSGJJ786GO8Yuau1f2u.jTK40TOvlVroOFQkv2KPSRvPHZm3lm', '086734747', 'Jalan Wisnu Marga Belayu No 19', 1, 3, 'rpKSvaYAJGb8FJuO8cAUIq7fM7rydxXa82UAAfDY2IU1w6sjCK6VXUEm0JBi', '2017-05-30 00:00:40', '2017-09-10 22:38:36'),
(6, 'Bedebah Edan', 'bedebah@mail.com', '$2y$10$z14Tf8v9zTeyQ56RDvtEduwl6lIMB1PqyyzpBf9t2UnNHzArBFzbK', '08476474638', 'Jalan Bedebah No. 666', 1, 3, 'RVYSGjvV7zoDEpcCor2aWrQh0kpjSElDT1lMMH86zaFbZYIzWcWKboA3awNM', '2017-06-12 23:00:06', '2017-06-12 23:00:06'),
(8, 'Made Bleger', 'made@mail.com', '$2y$10$NrfF0JNCS2uoBs.8PJhvjOXah3b77PXuPr.rvJSfQuLRyOSY97dG6', '082264546353', 'Jalan Raya Kapal No. 666', 1, 3, 'wC9KqMSRMUGA8Qtyj00lAXVQUV6cnKVEiveQ2QPPB7dW9MWMxNHnJB0g6Nza', '2017-09-08 17:53:48', '2017-09-08 17:53:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_transaction`
--
ALTER TABLE `detail_transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `detail_transaction`
--
ALTER TABLE `detail_transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `product_detail`
--
ALTER TABLE `product_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
