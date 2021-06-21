-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jun 2021 pada 00.12
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `takprint`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
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
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelis`
--

CREATE TABLE `pembelis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kertas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ukuran_kertas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catatan` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_halaman` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_toko` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_pembayaran` int(11) DEFAULT NULL,
  `bukti_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `progress` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pembelis`
--

INSERT INTO `pembelis` (`id`, `nama_file`, `telepon`, `email`, `file`, `kategori`, `jenis_kertas`, `ukuran_kertas`, `catatan`, `jumlah_halaman`, `nama_toko`, `harga`, `pembayaran`, `status_pembayaran`, `bukti_pembayaran`, `progress`, `created_at`, `updated_at`) VALUES
(8, 'WebinarSoftwareEngineerPEPSIHIMATEKTROITS', '087847972064', 'fairuzfirjatullah3@gmail.com', 'http://bit.ly/FolderTakprintin', 'BnW', NULL, 'A4', 'Jangan Disteples', '1', 'COPYER INDO', NULL, 'Mandiri', NULL, NULL, NULL, '2021-06-16 20:52:50', '2021-06-16 21:07:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tokos`
--

CREATE TABLE `tokos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_toko` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_toko` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kertas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ukuran_kertas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `open` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lambang_toko` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `waktu_buka` time DEFAULT NULL,
  `waktu_tutup` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tokos`
--

INSERT INTO `tokos` (`id`, `nama_toko`, `alamat_toko`, `jenis_kertas`, `ukuran_kertas`, `harga`, `open`, `lambang_toko`, `waktu_buka`, `waktu_tutup`, `created_at`, `updated_at`) VALUES
(1, 'COPYER INDO', 'Jl. Gebang Lor Blok S-5, Surabaya', 'HVS. Bufallo. ', ' A4. A5. B5. F4. ', 'BnW: Rp 200/lbr (A5; B5). BnW: Rp 250/lbr (A4; F4). Warna: Rp 250/lbr. Buffalo: Rp 1000/lbr.', 'Open', 'copyer-indo.png', NULL, NULL, '2021-06-16 09:09:39', '2021-06-16 09:17:04'),
(2, 'Aan Printing', 'Jl. Arif Rahman Hakim Gang Makam Blok H-26, Keputih', 'HVS', 'A4. F4', 'BnW: Rp 150/lbr. Warna: Rp 250/lbr', 'Close', 'aan-printing.png', NULL, NULL, '2021-06-16 09:23:36', '2021-06-16 09:32:08'),
(3, 'Spectrum', 'Jl. Raya Mulyosari No 95A', 'HVS. Bufallo. Concorde', 'A4. A5. F4. B5', 'BnW: Rp 300/lbr. Buffalo A5: Rp 600/lbr. Concorde: Rp 2500/lbr. Buffalo A4: Rp 800/lbr. Warna: Rp 400 - Rp 2000/lbr', 'Open', 'spectrum.png', NULL, NULL, '2021-06-16 09:25:35', '2021-06-16 09:36:57'),
(4, 'Mitra Jaya', 'Jl Arif Rahman Hakim No 59, Keputih', 'HVS. Manilla. Bufallo.', 'A4. A5. F4.', 'BnW: Rp 300/lbr. Buffalo A5: Rp 600/lbr. Concorde: Rp 2500/lbr. Buffalo A4: Rp 800/lbr. Warna: Rp 400 - Rp 2000/lbr.', 'Close', 'mitra-jaya.png', NULL, NULL, '2021-06-16 09:42:24', '2021-06-16 09:45:01'),
(5, 'Okta Printing', 'Jl Keputih Perintis IA No 3', 'HVS.', 'A4.', 'BnW: Rp 500/lbr. Warna: Rp 1000/lbr', 'Close', 'okta-printing.png', NULL, NULL, '2021-06-16 09:43:18', '2021-06-16 09:45:18'),
(6, 'Rafen Printing', 'Jl Keputih Tegal Timur 3C No 31', 'HVS.', 'A4. F4.', 'BnW: Rp 500/lbr. Warna: Rp 750/lbr.', 'Open', 'rafen-printing.png', NULL, NULL, '2021-06-16 09:44:04', '2021-06-16 09:45:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
  `is_admin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'Admin', 'fairuzf1010@gmail.com', NULL, '$2y$10$M0f.m789dq/E7b9YwO1rP.nC5JO0KMDm7G.3uFGREp/zGWh3PaCy.', NULL, '2021-06-16 08:56:53', '2021-06-16 08:56:53', 1),
(2, 'User', 'user@itsolutionstuff.com', NULL, '$2y$10$A0RTfgEMZH87KR0oSV7pyexq7d3cftByJNNjYfB3sBk.tEc2eGgLa', NULL, '2021-06-16 08:56:53', '2021-06-16 08:56:53', 0),
(3, 'Fairuz Firjatullah', 'fairuzfirjatullah3@gmail.com', NULL, '$2y$10$AcXgfZkPVdyeIl5NxewS9unrYV7LEnyFsB43ljiq3S32fFKHBPr7O', NULL, '2021-06-18 03:40:54', '2021-06-18 03:40:54', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pembelis`
--
ALTER TABLE `pembelis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tokos`
--
ALTER TABLE `tokos`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pembelis`
--
ALTER TABLE `pembelis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tokos`
--
ALTER TABLE `tokos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
