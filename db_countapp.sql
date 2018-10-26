-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2018 at 10:57 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_countapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku_besars`
--

CREATE TABLE `buku_besars` (
  `bb_referensi` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bb_kode` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bb_akun` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bb_dept` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bb_debit` int(11) DEFAULT NULL,
  `bb_kredit` int(11) DEFAULT NULL,
  `bb_job` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bb_keterangan` text COLLATE utf8mb4_unicode_ci,
  `bb_tanggal` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buku_besars`
--

INSERT INTO `buku_besars` (`bb_referensi`, `bb_kode`, `bb_akun`, `bb_dept`, `bb_debit`, `bb_kredit`, `bb_job`, `bb_keterangan`, `bb_tanggal`, `created_at`, `updated_at`) VALUES
('REF10131834998', 'KD002', 'BRI', 'Perizinan', 100000, 100000, 'Finnance', 'Expedisi', '2018-10-14', '2018-10-13 16:31:24', '2018-10-14 10:47:44'),
('REF10141813769', 'KD001', 'BNI', 'Perairan', 500000, 500000, 'Finnance', 'Absensi', '2018-10-01', '2018-10-14 09:57:25', '2018-10-14 09:57:25');

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
(2, '2018_10_13_214224_create_buku_besars_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku_besars`
--
ALTER TABLE `buku_besars`
  ADD PRIMARY KEY (`bb_referensi`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
