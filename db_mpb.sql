-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2020 at 07:44 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mpb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detail_barang`
--

CREATE TABLE `detail_barang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_pengiriman` int(11) NOT NULL,
  `biaya` int(11) NOT NULL,
  `nama_barang` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `berat_barang` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_barang`
--

INSERT INTO `detail_barang` (`id`, `no_pengiriman`, `biaya`, `nama_barang`, `berat_barang`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 20000, 'Sopenir ', 5, NULL, NULL, NULL),
(2, 2, 150000, 'Food', 2, NULL, '2020-09-05 23:46:53', '2020-09-05 23:46:53');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `informasi_biaya`
--

CREATE TABLE `informasi_biaya` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kota_asal` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota_tujuan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_berat` int(11) NOT NULL,
  `biaya` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_08_27_082151_create_pengiriman_barang_tables', 1),
(4, '2020_08_28_064240_create_detail_pengiriman_table', 2),
(5, '2020_08_28_071113_create_status_pengiriman_table', 3),
(6, '2020_08_28_072007_create_informasi_biaya_table', 4),
(7, '2020_08_28_075557_create_contact_table', 5),
(8, '2020_08_28_083306_create_profile_table', 6),
(9, '2020_08_29_102524_add_roles_field_to_users_table', 7),
(10, '2014_10_12_100000_create_password_resets_table', 8),
(11, '2020_09_01_180116_create_pelanggan_table', 8),
(12, '2020_09_01_191211_create_tracking_area_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama`, `jenis_kelamin`, `alamat`, `telepon`, `email`, `foto`, `created_at`, `updated_at`) VALUES
(8, 'Haqqul Amby', 'Prempuan', 'Jl.Jendral Sudirman Cikokol Tangerang Banten', '08137772277', 'haqqulamby@gmail.com', '1599295255_Haqqul Amby.jpeg', '2020-09-02 05:41:48', '2020-09-05 01:40:55'),
(9, 'Arief Setiawan', 'Pria', 'Jl.Pinggir Kali Pasar Kemis Tangerang Banten', '08212233442', 'ariefsetiawan@gmail.com', '1599068844_Arief Setiawan.png', '2020-09-02 07:01:27', '2020-09-02 10:47:24'),
(10, 'Shopi Ramdhani', 'Pria', 'Jl.Indah dunia Tangerang Banten', '0987978211', 'shopiramdhani@gmail.com', '1599308477_Shopi Ramdhani.jpeg', '2020-09-05 05:21:17', '2020-09-05 05:21:17');

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman_barang`
--

CREATE TABLE `pengiriman_barang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_pengiriman` datetime NOT NULL,
  `nama_pengirim` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota_asal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota_tujuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_penerima` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `organisasi_penerima` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengiriman_barang`
--

INSERT INTO `pengiriman_barang` (`id`, `tanggal_pengiriman`, `nama_pengirim`, `kota_asal`, `kota_tujuan`, `nama_penerima`, `organisasi_penerima`, `alamat`, `email`, `created_at`, `updated_at`) VALUES
(9, '2020-01-02 12:00:00', 'Shopi Ramdhani', 'Tangerang', 'Jakarta Pusat', 'Aji wahyugi', 'PT.Coding Indonesia', 'Jl.Bundaran HI Jakarta Pusat', 'main.shora@gmail.com', '2020-09-01 08:09:01', '2020-09-02 10:48:38'),
(10, '2020-01-02 12:00:00', 'Haqqul Amby', 'Tangerang', 'Jakarta Pusat', 'Aji wahyugi', 'PT.Coding Indonesia', 'Jl.Bundaran HI Jakarta Pusat', 'ajiwahyugi@gmail.com', '2020-09-01 08:11:56', '2020-09-02 10:49:37'),
(11, '2020-01-02 13:00:00', 'Arief Setiawan', 'Tangerang', 'Jakarta Pusat', 'Aji wahyugi', 'PT.Coding Indonesia', 'Jl.Bundaran HI Jakarta Pusat', 'ariefsetiawan@gmail.com', '2020-09-02 10:57:46', '2020-09-02 10:57:46');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `our_profile` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `our_mission` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `status_pengiriman`
--

CREATE TABLE `status_pengiriman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pengirim` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lacak` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu` datetime NOT NULL,
  `destinasi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status_pengiriman`
--

INSERT INTO `status_pengiriman` (`id`, `nama_pengirim`, `lacak`, `waktu`, `destinasi`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Shopi Ramdhani', '+', '2020-09-24 15:28:17', 'Bandara Soekarno Hatta, Tangerang', NULL, NULL, NULL),
(2, 'Shopi Ramdahani', '+', '2020-09-18 00:00:00', 'Barang diterima [Grogol] Jakarta Barat', NULL, '2020-09-04 01:43:28', '2020-09-04 01:43:28'),
(3, 'Shopi Ramdahani', '+', '2020-09-18 00:00:00', 'Barang diterima [Bundaran HI] Jakarta Pusat', NULL, '2020-09-04 11:22:26', '2020-09-04 11:22:26');

-- --------------------------------------------------------

--
-- Table structure for table `tracking_area`
--

CREATE TABLE `tracking_area` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `resi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` int(20) NOT NULL,
  `kota_asal` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota_tujuan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tracking_area`
--

INSERT INTO `tracking_area` (`id`, `resi`, `email`, `telepon`, `kota_asal`, `kota_tujuan`, `alamat`, `created_at`, `updated_at`) VALUES
(3, 'ASDG52161', 'ariefsetiawan@gmail.com', 887978211, 'Tangerang', 'Jakarta Pusat', 'Tangerang Banten', '2020-09-02 03:48:10', '2020-09-02 11:05:30'),
(4, 'AB75HJGASI', 'shopiramdhani@gmail.com', 896554434, 'Tangerang', 'Jakarta Pusat', 'Jl.Bundaran HI Jakarta Pusat', '2020-09-02 04:33:13', '2020-09-02 11:04:21'),
(5, 'AB2564521', 'haqqulamby@gmail.com', 818797821, 'Tangerang', 'Jakarta Pusat', 'Jl.Bundaran HI Jakarta Pusat', '2020-09-02 11:06:54', '2020-09-02 11:06:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USER'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`) VALUES
(3, 'admin', 'admin@gmail.com', NULL, '$2y$10$bDxgYXcRDXBd9XPAzt3AZejrjb2jyyyblciPUL/E1Vusz4.mmUyom', NULL, '2020-08-29 11:13:58', '2020-08-29 11:13:58', 'ADMIN'),
(4, 'Shopi Ramdhani', 'shopiramdhani@gmail.com', NULL, '$2y$10$9gb2UI61hUQyB7VzvwPFheC3mPSrvWl8js8c5Go1tyARhzuvbnmt6', NULL, '2020-08-29 11:14:53', '2020-09-05 04:57:05', 'USER'),
(5, 'Haqqul Anby', 'haqqulamby@gmail.com', '2020-08-29 11:29:19', '$2y$10$qwyyw7AOheQO0AZ8hzHb9erqRyBsfLDumyTSGD2NPfKfddOLrY5ri', NULL, '2020-08-29 11:28:42', '2020-09-05 01:29:26', 'USER'),
(13, 'Arief Setiawam', 'ariefsetiawan@gmail.com', '2020-09-05 04:50:15', '$2y$10$7SzzNkbkEvmpUSlXUez/c.4cGEmca9UqPWKJn7q5Whx6T1AlZTJqa', NULL, '2020-09-05 04:49:42', '2020-09-05 04:50:15', 'USER');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_barang`
--
ALTER TABLE `detail_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `informasi_biaya`
--
ALTER TABLE `informasi_biaya`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengiriman_barang`
--
ALTER TABLE `pengiriman_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_pengiriman`
--
ALTER TABLE `status_pengiriman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tracking_area`
--
ALTER TABLE `tracking_area`
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
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detail_barang`
--
ALTER TABLE `detail_barang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `informasi_biaya`
--
ALTER TABLE `informasi_biaya`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pengiriman_barang`
--
ALTER TABLE `pengiriman_barang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status_pengiriman`
--
ALTER TABLE `status_pengiriman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tracking_area`
--
ALTER TABLE `tracking_area`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
