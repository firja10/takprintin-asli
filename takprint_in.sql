-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 09, 2021 at 08:02 AM
-- Server version: 5.7.35-log
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `takprint_in`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kertas`
--

CREATE TABLE `kertas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kertas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ukuran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `toko_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kertas`
--

INSERT INTO `kertas` (`id`, `kertas`, `jenis`, `harga`, `ukuran`, `toko_id`, `created_at`, `updated_at`) VALUES
(1, 'Warna', 'HVS', '250', 'A4', 1, NULL, NULL),
(2, 'Warna', 'HVS', '250', 'A5', 1, NULL, NULL),
(3, 'Warna', 'HVS', '250', 'B5', 1, NULL, NULL),
(4, 'Warna', 'HVS', '250', 'F4', 1, NULL, NULL),
(5, 'BnW', 'HVS', '200', 'A5', 1, NULL, NULL),
(6, 'BnW', 'HVS', '200', 'B5', 1, NULL, NULL),
(7, 'BnW', 'HVS', '250', 'A4', 1, NULL, NULL),
(8, 'BnW', 'HVS', '250', 'B5', 1, NULL, NULL),
(9, 'Buffalo', 'Buffalo', '1000', 'A4', 1, NULL, NULL),
(10, 'Buffalo', 'Buffalo', '1000', 'A5', 1, NULL, NULL),
(11, 'Buffalo', 'Buffalo', '1000', 'F4', 1, NULL, NULL),
(12, 'Buffalo', 'Buffalo', '1000', 'B5', 1, NULL, NULL),
(13, 'BnW', 'HVS', '150', 'A4', 2, NULL, NULL),
(14, 'BnW', 'HVS', '150', 'F4', 2, NULL, NULL),
(15, 'Warna', 'HVS', '250', 'A4', 2, NULL, NULL),
(16, 'Warna', 'HVS', '250', 'F4', 2, NULL, NULL);

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_06_12_081637_add_admin_column_to_users_table', 2),
(5, '2021_06_16_150255_create_tokos_table', 2),
(6, '2021_06_16_171550_create_pembelis_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('dpt07111840000121@gmail.com', '$2y$10$r9AS.GP7ifpB3eBcTb7NfumSpxM//I4Vkhm6MVxdTtErCUTbymZWC', '2021-07-05 07:05:55'),
('fairuzfirjatullah3@gmail.com', '$2y$10$VjpzMQef697hz4j.wa80G.6fSHy7rb0DRLYJtoOIa8v1ZtmE4036y', '2021-07-05 20:54:38');

-- --------------------------------------------------------

--
-- Table structure for table `pembelis`
--

CREATE TABLE `pembelis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_pemesan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kertas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ukuran_kertas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catatan` longtext COLLATE utf8mb4_unicode_ci,
  `jumlah_halaman` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_toko` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_asli` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_pembayaran` int(11) DEFAULT NULL,
  `bukti_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `progress` int(11) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `bukti_progress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pengantar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bintang_rating` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `peta_toko` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pembelis`
--

INSERT INTO `pembelis` (`id`, `nama_file`, `nama_pemesan`, `telepon`, `email`, `file`, `kategori`, `jenis_kertas`, `ukuran_kertas`, `catatan`, `jumlah_halaman`, `nama_toko`, `harga`, `harga_asli`, `pembayaran`, `status_pembayaran`, `bukti_pembayaran`, `progress`, `user_id`, `bukti_progress`, `pengantar`, `bintang_rating`, `peta_toko`, `created_at`, `updated_at`) VALUES
(39, 'Tugas Saya', NULL, '087847972064', 'fairuzf1010@gmail.com', '3 cooling tower.PNG', NULL, 'Warna - A4 - 250', NULL, 'no', '15', 'COPYER INDO', '3,750', '3,751', 'BNI', 2, 'jawaban b soal 15.4 part 2.PNG', 2, 3, NULL, 'pickup', '5', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15830.608858065983!2d112.7893499!3d-7.2803544!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbd8ccb8cf8a0ff1e!2sMitra%20abadi%20digital%20copier!5e0!3m2!1sen!2sid!4v1624948351418!5m2!1sen!2sid', '2021-06-30 22:38:00', '2021-06-30 23:27:00'),
(42, 'Sertifikat Kegiatan Selama Online Course', NULL, '087847972064', 'fairuzfirjatullah3@gmail.com', '10 Mar 2021 SURAT KUASA.docx', NULL, 'Warna - A4 - 250', NULL, 'no steples', '2', 'COPYER INDO', '500', '501', 'BNI', 2, '4.png', 2, 3, NULL, 'pickup', NULL, 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15830.608858065983!2d112.7893499!3d-7.2803544!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbd8ccb8cf8a0ff1e!2sMitra%20abadi%20digital%20copier!5e0!3m2!1sen!2sid!4v1624948351418!5m2!1sen!2sid', '2021-07-05 20:52:28', '2021-07-07 22:33:08'),
(43, 'Tugas Akhir', NULL, '0808080136276764', 'yuzkaazmi@yahoo.com', 'PKM-K Takprint.in.docx', NULL, 'Warna - A4 - 250', NULL, 'tidak usah dijepret', '12', 'COPYER INDO', '3,000', '3,001', 'GoPay', 2, '59e43d8f377c2_13.jpg', 2, 9, NULL, 'pickup', '4', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15830.608858065983!2d112.7893499!3d-7.2803544!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbd8ccb8cf8a0ff1e!2sMitra%20abadi%20digital%20copier!5e0!3m2!1sen!2sid!4v1624948351418!5m2!1sen!2sid', '2021-07-07 22:23:13', '2021-07-07 22:33:34'),
(44, 'Proposal PKM', NULL, '0897346730128', 'yuzkaazmi234@gmail.com', 'PKM-K Takprint.in.docx', NULL, 'Warna - A4 - 250', NULL, 'jangan disteples', '12', 'COPYER INDO', '3,000', '3,001', 'GoPay', 2, 'Bukti Tf.jpg', 2, 9, NULL, 'pickup', '5', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15830.608858065983!2d112.7893499!3d-7.2803544!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbd8ccb8cf8a0ff1e!2sMitra%20abadi%20digital%20copier!5e0!3m2!1sen!2sid!4v1624948351418!5m2!1sen!2sid', '2021-07-08 00:23:51', '2021-07-08 00:27:58'),
(45, 'Proposal PIMNAS', NULL, '0841794691741', 'yuzkaa@yahoo.com', '1299-3260-1-PB.pdf', NULL, 'Warna - B5 - 250', NULL, NULL, '10', 'COPYER INDO', '2,500', '2,501', 'GoPay', 2, 'Business Model Canvas Kelompok 5 Teknopreneur 27-dikonversi_page-0001.jpg', 2, 9, NULL, 'pickup', NULL, 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15830.608858065983!2d112.7893499!3d-7.2803544!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbd8ccb8cf8a0ff1e!2sMitra%20abadi%20digital%20copier!5e0!3m2!1sen!2sid!4v1624948351418!5m2!1sen!2sid', '2021-07-13 00:32:30', '2021-07-13 00:50:32'),
(46, 'WebinarSoftwareEngineerPEPSIHIMATEKTROITS', NULL, '087847972064', 'fairuzfirjatullah3@gmail.com', 'Screenshot (4995).png', NULL, 'BnW - A5 - 200', NULL, 'No Steples', '2', 'COPYER INDO', '400', '401', NULL, 0, NULL, NULL, 3, NULL, NULL, NULL, 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15830.608858065983!2d112.7893499!3d-7.2803544!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbd8ccb8cf8a0ff1e!2sMitra%20abadi%20digital%20copier!5e0!3m2!1sen!2sid!4v1624948351418!5m2!1sen!2sid', '2021-07-13 08:17:44', '2021-07-13 08:17:44'),
(47, 'Tugas PIS 1', NULL, '087847972064', 'fairuzfirjatullah3@gmail.com', 'Screenshot (4995).png', NULL, 'BnW - A5 - 200', NULL, 'No Steples', '2', 'COPYER INDO', '400', '401', 'BNI', 0, NULL, NULL, 3, NULL, 'pickup', NULL, 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15830.608858065983!2d112.7893499!3d-7.2803544!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbd8ccb8cf8a0ff1e!2sMitra%20abadi%20digital%20copier!5e0!3m2!1sen!2sid!4v1624948351418!5m2!1sen!2sid', '2021-07-13 08:18:25', '2021-07-13 08:19:03'),
(48, 'Sertifikat Pelatihan', NULL, '087847972064', 'fairuzfirjatullah3@gmail.com', 'Andra Cahaya Khalief-Sertif DIKLAT-1.png', NULL, 'Warna - A4 - 250', NULL, '1 halaman aja', '1', 'COPYER INDO', '250', '251', 'BNI', 0, NULL, NULL, 1, NULL, 'pickup', NULL, 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15830.608858065983!2d112.7893499!3d-7.2803544!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbd8ccb8cf8a0ff1e!2sMitra%20abadi%20digital%20copier!5e0!3m2!1sen!2sid!4v1624948351418!5m2!1sen!2sid', '2021-07-18 04:48:56', '2021-07-18 04:49:13');

-- --------------------------------------------------------

--
-- Table structure for table `tokos`
--

CREATE TABLE `tokos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_toko` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penilaian` int(11) DEFAULT NULL,
  `alamat_toko` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kertas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ukuran_kertas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga` longtext COLLATE utf8mb4_unicode_ci,
  `open` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lambang_toko` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `waktu_buka` time DEFAULT NULL,
  `waktu_tutup` time DEFAULT NULL,
  `pembeli_id` bigint(20) UNSIGNED DEFAULT NULL,
  `peta` longtext COLLATE utf8mb4_unicode_ci,
  `waktu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tokos`
--

INSERT INTO `tokos` (`id`, `nama_toko`, `penilaian`, `alamat_toko`, `jenis_kertas`, `ukuran_kertas`, `harga`, `open`, `lambang_toko`, `waktu_buka`, `waktu_tutup`, `pembeli_id`, `peta`, `waktu`, `created_at`, `updated_at`) VALUES
(1, 'COPYER INDO', NULL, 'Jl. Gebang Lor Blok S-5, Surabaya', 'HVS. Bufallo.', 'A4. A5. B5. F4.', 'BnW: Rp 200/lbr (A5; B5). BnW: Rp 250/lbr (A4; F4). Warna: Rp 250/lbr. Buffalo: Rp 1000/lbr.', '0', 'Image Copy@1x (2).png', '08:00:00', '23:59:00', NULL, 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15830.608858065983!2d112.7893499!3d-7.2803544!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbd8ccb8cf8a0ff1e!2sMitra%20abadi%20digital%20copier!5e0!3m2!1sen!2sid!4v1624948351418!5m2!1sen!2sid', NULL, '2021-06-16 09:09:39', '2021-06-29 00:16:24'),
(2, 'Aan Printing', NULL, 'Jl. Arif Rahman Hakim Gang Makam Blok H-26, Keputih, Surabaya', 'HVS', 'A4. F4', 'BnW: Rp 150/lbr. Warna: Rp 250/lbr', '0', 'Image Copy 2@1x.png', '01:00:00', '21:00:00', NULL, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.5373861677167!2d112.79515721432111!3d-7.293355273712952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa6fc41e9751%3A0x5b4f503506933e89!2sJl.%20Keputih%20Makam%20Blk.%20E%20Blok%20H%20No.19%2C%20Keputih%2C%20Kec.%20Sukolilo%2C%20Kota%20SBY%2C%20Jawa%20Timur%2060111!5e0!3m2!1sen!2sid!4v1624949610124!5m2!1sen!2sid', NULL, '2021-06-16 09:23:36', '2021-06-28 23:54:40'),
(3, 'Spectrum', NULL, 'Jl. Raya Mulyosari No.95A, Kalisari, Kec. Mulyorejo, Surabaya', 'HVS. Bufallo. Concorde', 'A4. A5. F4. B5', 'BnW: Rp 300/lbr. Buffalo A5: Rp 600/lbr. Concorde: Rp 2500/lbr. Buffalo A4: Rp 800/lbr. Warna: Rp 400 - Rp 2000/lbr', '0', 'Image Copy@1x (1).png', '06:30:00', '22:00:00', NULL, 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15831.182949215698!2d112.7959392!3d-7.2640722!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x86b961109e24e8e8!2sSpectrum%20Digital%20Printing%20%26%20Fotocopy%20Mulyosari!5e0!3m2!1sen!2sid!4v1624950044357!5m2!1sen!2sid', NULL, '2021-06-16 09:25:35', '2021-06-29 00:00:55'),
(4, 'Mitra Jaya', NULL, 'Jl. Arief Rahman Hakim No.59, Keputih, Kec. Sukolilo, Surabaya', 'HVS. Manilla. Bufallo.', 'A4. A5. F4.', 'BnW: Rp 300/lbr. Buffalo A5: Rp 600/lbr. Concorde: Rp 2500/lbr. Buffalo A4: Rp 800/lbr. Warna: Rp 400 - Rp 2000/lbr.', '0', 'Image Copy 3@1x.png', '06:00:00', '23:00:00', NULL, 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15830.269862663668!2d112.7988378!3d-7.2899519!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x48e871e14b6f0102!2sMitra%20Jaya%20Keputih%201!5e0!3m2!1sen!2sid!4v1624949968831!5m2!1sen!2sid', NULL, '2021-06-16 09:42:24', '2021-06-28 23:59:37'),
(5, 'Okta Printing', NULL, 'Jl Keputih Perintis IA No 3, Keputih, Sukolilo, Surabaya', 'HVS.', 'A4.', 'BnW: Rp 500/lbr. Warna: Rp 1000/lbr', '0', 'Image Copy 2@1x (1).png', '17:30:00', '23:59:00', NULL, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.569714458262!2d112.79860271477501!3d-7.289697394738577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa71900845c1%3A0xdf5d9956d5454d18!2sKeputih%20Perintis%20I%2C%20Keputih%2C%20Kec.%20Sukolilo%2C%20Kota%20SBY%2C%20Jawa%20Timur%2060111!5e0!3m2!1sen!2sid!4v1624950293595!5m2!1sen!2sid', NULL, '2021-06-16 09:43:18', '2021-06-30 23:29:38'),
(6, 'Rafen Printing', NULL, 'Jl Keputih Tegal Timur 3C No 31', 'HVS.', 'A4. F4.', 'BnW: Rp 500/lbr. Warna: Rp 750/lbr.', '0', 'Image Copy 4@1x.png', '12:00:00', '16:00:00', NULL, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.5557185527978!2d112.8101132397979!3d-7.29128122643197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa77d38a2693%3A0x66e950e8da49b6f3!2sJl.%20Keputih%20Tegal%20Timur%20Blok%20O%20No.3%2C%20RT.000%2FRW.00%2C%20Keputih%2C%20Kec.%20Sukolilo%2C%20Kota%20SBY%2C%20Jawa%20Timur%2060111!5e0!3m2!1sen!2sid!4v1624950410932!5m2!1sen!2sid', NULL, '2021-06-16 09:44:04', '2021-06-29 00:08:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `github_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `google_id`, `facebook_id`, `github_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'Admin', 'fairuzf1010@gmail.com', NULL, NULL, NULL, NULL, '$2y$10$M0f.m789dq/E7b9YwO1rP.nC5JO0KMDm7G.3uFGREp/zGWh3PaCy.', 'tw4DKOIhuAkjl27laANNvRoQGFHV01JMpb9pBXKlAO6QqPGF1caB8D83EPeA', '2021-06-16 08:56:53', '2021-06-16 08:56:53', 1),
(2, 'User', 'user@itsolutionstuff.com', NULL, NULL, NULL, NULL, '$2y$10$A0RTfgEMZH87KR0oSV7pyexq7d3cftByJNNjYfB3sBk.tEc2eGgLa', NULL, '2021-06-16 08:56:53', '2021-06-23 18:49:23', 1),
(3, 'Fairuz Firjatullah', 'fairuzfirjatullah3@gmail.com', NULL, NULL, NULL, NULL, '$2y$10$AcXgfZkPVdyeIl5NxewS9unrYV7LEnyFsB43ljiq3S32fFKHBPr7O', 'Z8haHRIveSVMKdoSwuoxWpteWUXSiFKf0skbL1ewP0WflABm1W3GxWQQ4XZN', '2021-06-18 03:40:54', '2021-06-18 03:40:54', NULL),
(4, 'Fawwaz', 'fawwaz.firdaus32@gmail.com', NULL, NULL, NULL, NULL, '$2y$10$xAajb5v9kIo52gLSe5vWEuEPMr7Js5eouEbD3ogVRNqghH2Jt/b3i', NULL, '2021-06-23 08:41:28', '2021-06-23 08:41:28', NULL),
(5, 'Fairuz', 'endanghidayat20@yahoo.co.id', NULL, NULL, NULL, NULL, '$2y$10$mJXo0cVBVCiq2mE5CeucmepgxPHRDAWEG2q.FRldYBRHde676XGfS', NULL, '2021-06-23 08:49:14', '2021-06-23 08:49:14', NULL),
(6, 'Rofi', 'dpt07111840000121@gmail.com', NULL, NULL, NULL, NULL, '$2y$10$LGmL.c3vArNv/KR4WKXOpO7pksYijxmzJZDJNRXjoZRz4zl3y08z6', NULL, '2021-06-23 08:49:55', '2021-06-23 08:49:55', NULL),
(7, 'Admins', 'unprettygirl@gmail.com', NULL, NULL, NULL, NULL, '$2y$10$cGdgHZ3neGcg2iq4sAoPlOkphi.hfgwsfR6XzB2wOitR.4lBt4OI2', NULL, '2021-06-23 22:29:19', '2021-06-23 22:30:18', 1),
(8, 'Vulka', 'yuzkaazmi@yahoo.com', NULL, NULL, NULL, NULL, '$2y$10$W3TsNvNjsPrULUfaaQ97reQrYx/PBn79mrG67iquqZh5O4Tg546Hy', NULL, '2021-06-23 22:58:28', '2021-06-23 22:58:28', NULL),
(9, 'Yuzka', 'yuzkaazmi234@gmail.com', NULL, NULL, NULL, NULL, '$2y$10$0ATFz4WsqLmAO48W5sGRuuif83ntzNPJ.k3QZlTykf5D/02r5AQTO', 'MG9qLtuAApLnPNScUscg06F7ZMaQYSLiEJGZZv6q3AmPhu4f9nkSWOXL8Yy6', '2021-06-28 01:29:06', '2021-06-29 05:21:26', 1),
(10, 'KMTC Tasik', 'kmtctasik@gmail.com', '108201993952087444131', NULL, NULL, NULL, '$2y$10$MKDrFbqe/iCqklbp2P7TauFBl1kjdYILl7m4eDpFdttg1y2JRryNG', 'vyDqUQj7wX0DEV8piHDGfcUBVARTAikQjTRZowNOLrLJhqjfSOh14824uYtx', '2021-07-05 02:52:38', '2021-07-05 02:52:38', NULL),
(11, 'Fairuz Firjatullah', 'seiryuu80@yahoo.com', NULL, '2199290073540976', NULL, '2021-07-05 03:31:30', '$2y$10$o3eyhqxOPYNxiNOwqLt6PecbXLN6wpvoUGRYuO9.MDp0aqU1uLZ4W', 'E7KPYzvIrvfxGeyECiuWLkNkvlqjl6LL9KWQCXO4UP8sN4kfGYjoRM9wmuoN', '2021-07-05 03:31:30', '2021-07-05 03:31:30', NULL),
(12, 'Fathia fauzia Ramadhani', 'fte07111840000121@gmail.com', '109484673719484084802', NULL, NULL, NULL, '$2y$10$ho244FWUEZC.oBV5XqPmDOnvH3RgCf0KIAELOXIyObH47UBInHmV2', 's3sZo3Hq8gtokzNJ2IG4Ej5Azqt90qR2h5jIknVnto0GpwyYJiodKsImYz5y', '2021-07-05 03:36:56', '2021-07-05 03:36:56', NULL),
(13, 'Atha Rafifi', 'rafifi0607@gmail.com', '105120631788891333597', '105120631788891333597', NULL, NULL, '$2y$10$7jIKFOESLUR7Po2o0ONFsue27sYISMpEPub3WCmAAVJBHBq.yTuFy', 'ILc2BwthuMpFMdER4riwdQJPbt8yV9fBc3R4ivfJNsvMtmOizA8XgvwK9FjI', '2021-07-05 06:01:11', '2021-07-05 06:01:11', NULL),
(14, 'Aziz Amanza', 'amanza63@gmail.com', '113079393630242711979', '113079393630242711979', NULL, NULL, '$2y$10$nLdASBwF028y7TjtTbqlX.MSdGquLfBoIDFnQOKNfGEKasSJAL8tS', 'U175y1imFWLGikpe7AYCwIpTTltU7wQySuR8tfeVldgZVhvcMckI893SgIc9', '2021-07-08 00:22:10', '2021-07-08 00:22:10', NULL),
(15, 'kimakk', 'kimakk@gmail.com', NULL, NULL, NULL, NULL, '$2y$10$ReNMopEeqL9KZ5lAzOxEQeIIMapA1uWfSHa2cpqkMb7tNlp2B9UYi', NULL, '2021-07-08 00:24:28', '2021-07-08 00:24:28', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kertas`
--
ALTER TABLE `kertas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kertas_toko_id_foreign` (`toko_id`);

--
-- Indexes for table `pembelis`
--
ALTER TABLE `pembelis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pembelis_user_id_foreign` (`user_id`);

--
-- Indexes for table `tokos`
--
ALTER TABLE `tokos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tokos_pembeli_id_foreign` (`pembeli_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kertas`
--
ALTER TABLE `kertas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pembelis`
--
ALTER TABLE `pembelis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tokos`
--
ALTER TABLE `tokos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kertas`
--
ALTER TABLE `kertas`
  ADD CONSTRAINT `kertas_toko_id_foreign` FOREIGN KEY (`toko_id`) REFERENCES `tokos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pembelis`
--
ALTER TABLE `pembelis`
  ADD CONSTRAINT `pembelis_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tokos`
--
ALTER TABLE `tokos`
  ADD CONSTRAINT `tokos_pembeli_id_foreign` FOREIGN KEY (`pembeli_id`) REFERENCES `pembelis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
