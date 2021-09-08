-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Agu 2021 pada 13.22
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dapurbuci`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `kecamatans`
--

CREATE TABLE `kecamatans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kecamatans`
--

INSERT INTO `kecamatans` (`id`, `nama_kecamatan`, `created_at`, `updated_at`) VALUES
(1, 'Gresik', NULL, '2021-07-28 07:51:33'),
(3, 'Kebomas', NULL, '2021-07-28 07:54:23'),
(4, 'Cerme', NULL, NULL),
(5, 'Benjeng', NULL, NULL),
(6, 'Balongpanggang', NULL, NULL),
(7, 'Duduk Sampeyan', NULL, NULL),
(8, 'Manyar', NULL, NULL),
(9, 'Bungah', NULL, NULL),
(10, 'Menganti', NULL, NULL),
(11, 'Dukun', NULL, NULL);

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
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2021_07_10_234853_create_produks_table', 1),
(4, '2021_07_11_012144_create_ongkirs_table', 1),
(5, '2021_07_19_001207_create_promosis_table', 1),
(6, '2021_07_19_001550_create_pembayarans_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ongkirs`
--

CREATE TABLE `ongkirs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_desa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biaya` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ongkirs`
--

INSERT INTO `ongkirs` (`id`, `nama_desa`, `biaya`, `kecamatan`, `created_at`, `updated_at`) VALUES
(2, 'Banjarsari', '2000', 'Cerme', NULL, '2021-08-04 20:53:46'),
(3, 'Betiting', '2000', 'Cerme', NULL, NULL),
(4, 'Cagakagung', '2000', 'Cerme', NULL, NULL),
(5, 'Cerme Kidul', '2000', 'Cerme', NULL, NULL),
(6, 'Cerme Lor', '2000', 'Cerme', NULL, NULL),
(7, 'Wedani', '0', 'Cerme', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayarans`
--

CREATE TABLE `pembayarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_akun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_akun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pembayarans`
--

INSERT INTO `pembayarans` (`id`, `gambar`, `nama_akun`, `nomor_akun`, `created_at`, `updated_at`) VALUES
(3, '1628672255_bca-logo.png', 'BCA', '33198269196817', '2021-08-11 01:57:35', '2021-08-11 01:57:35'),
(4, '1628672284_bni-logo.png', 'BNI', '13138249596812', '2021-08-11 01:58:04', '2021-08-11 01:58:04'),
(5, '1628672316_mandiri-logo.png', 'Mandiri', '53438243190819', '2021-08-11 01:58:36', '2021-08-11 01:58:36'),
(6, '1628672385_dana-logo.png', 'Dana', '+62137091872', '2021-08-11 01:59:45', '2021-08-11 01:59:45'),
(7, '1628672411_ovo-logo.png', 'OVO', '+62837052973', '2021-08-11 02:00:11', '2021-08-11 02:00:11'),
(8, '1628672446_shopeepay-logo.png', 'ShopeePay', '+62858162925', '2021-08-11 02:00:46', '2021-08-11 02:00:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produks`
--

CREATE TABLE `produks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(3000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `varian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `produks`
--

INSERT INTO `produks` (`id`, `gambar`, `nama_produk`, `harga`, `deskripsi`, `varian`, `created_at`, `updated_at`) VALUES
(13, '1628392709_seblak-level-1.png', 'Seblak', '12000', 'Seblak', 'Pedas Level 1', '2021-08-07 20:18:29', '2021-08-07 20:18:29'),
(14, '1628392734_seblak-level-2.png', 'Seblak', '12000', 'Seblak', 'Pedas Level 2', '2021-08-07 20:18:54', '2021-08-07 20:18:54'),
(15, '1628392761_seblak-level-3.png', 'Seblak', '12000', 'Seblak', 'Pedas Level 3', '2021-08-07 20:19:21', '2021-08-07 20:19:21'),
(16, '1628392782_seblak-level-4.png', 'Seblak', '12000', 'Seblak', 'Pedas Level 4', '2021-08-07 20:19:42', '2021-08-07 20:19:42'),
(17, '1628392806_seblak-level-5.png', 'Seblak', '12000', 'Seblak', 'Pedas Level 5', '2021-08-07 20:20:07', '2021-08-07 20:20:07'),
(18, '1628393582_gado-gado-original.png', 'Gado Gado', '14000', 'Gado Gado', 'Original', '2021-08-07 20:33:02', '2021-08-07 20:33:02'),
(19, '1628393614_gado-gado-lontong.png', 'Gado Gado', '16000', 'Gado Gado', 'Lontong', '2021-08-07 20:33:34', '2021-08-07 20:33:34'),
(20, '1628394618_salad-buah-300ml.png', 'Salad Buah', '6000', 'Salad Buah', '300 ml', '2021-08-07 20:50:18', '2021-08-07 20:50:18'),
(21, '1628394657_salad-buah-500ml.png', 'Salad Buah', '8000', 'Salad Buah', '500 ml', '2021-08-07 20:50:57', '2021-08-07 20:50:57'),
(23, '1628480467_ikan-bakar-gurame.png', 'Ikan Bakar', '65000', 'Ikan Bakar Gurame', 'Gurame', '2021-08-08 20:41:07', '2021-08-08 20:41:07'),
(25, '1628481394_cumi-baby-sedang.png', 'Baby Cumi', '30000', 'Baby Cumi', 'Sedang', '2021-08-08 20:56:34', '2021-08-08 20:56:34'),
(26, '1628481427_cumi-baby-extra.png', 'Baby Cumi', '45000', 'Baby Cumi', 'Extra', '2021-08-08 20:57:07', '2021-08-08 20:57:07'),
(27, '1628481516_cumi-baby-pedas.png', 'Baby Cumi', '20000', 'Baby Cumi', 'Pedas', '2021-08-08 20:58:36', '2021-08-08 20:58:36'),
(28, '1628482099_kepiting-asam-manis-pedas.png', 'Kepiting Asam Manis', '15000', 'Kepiting Asam Manis', 'Pedas', '2021-08-08 21:08:19', '2021-08-08 21:08:19'),
(29, '1628482190_kepiting-asam-manis-sedang.png', 'Kepiting Asam Manis', '20000', 'Kepiting Asam Manis', 'Sedang', '2021-08-08 21:09:50', '2021-08-08 21:09:50'),
(30, '1628482255_kepiting-asam-manis-extra.png', 'Kepiting Asam Manis', '30000', 'Kepiting Asam Manis', 'Extra', '2021-08-08 21:10:55', '2021-08-08 21:10:55'),
(31, '1628687959_ikan-bakar-bandeng.png', 'Ikan Bakar', '30000', 'Ikan Bakar', 'Bandeng', '2021-08-11 06:19:19', '2021-08-11 06:19:19'),
(32, '1628688026_ikan-bakar-mujair.png', 'Ikan Bakar', '27000', 'Ikan Bakar', 'Mujair', '2021-08-11 06:20:26', '2021-08-11 06:20:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `promoses`
--

CREATE TABLE `promoses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sebelum_promosi` int(15) NOT NULL DEFAULT 0,
  `sesudah_promosi` int(15) DEFAULT NULL,
  `diskon` int(11) DEFAULT NULL,
  `gambar` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `promoses`
--

INSERT INTO `promoses` (`id`, `produk`, `sebelum_promosi`, `sesudah_promosi`, `diskon`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Seblak Pedas Level 1', 15000, 12000, 15, '1628392709_seblak-level-1.png', '2021-08-12 09:41:14', '2021-08-12 09:41:15'),
(2, 'Seblak Pedas Level 2', 15000, 12000, 15, '1628392709_seblak-level-1.png', '2021-08-12 09:51:37', '2021-08-12 09:51:43'),
(3, 'Seblak Pedas Level 3', 15000, 12000, 15, '1628392709_seblak-level-1.png', '2021-08-12 09:51:38', '2021-08-12 09:51:44'),
(4, 'Seblak Pedas Level 4', 15000, 12000, 15, '1628392709_seblak-level-1.png', '2021-08-12 09:51:39', '2021-08-12 09:51:46'),
(5, 'Seblak Pedas Level 5', 15000, 12000, 15, '1628392709_seblak-level-1.png', '2021-08-12 09:51:40', '2021-08-12 09:51:48'),
(6, 'Gado Gado Original', 15000, 12000, 15, '1628392709_seblak-level-1.png', '2021-08-12 09:51:41', '2021-08-12 09:51:49'),
(7, 'Gado Gado Lontong', 15000, 12000, 15, '1628392709_seblak-level-1.png', '2021-08-14 11:18:26', '2021-08-14 11:18:27'),
(8, 'Salad Buah 300ml', 15000, 12000, 15, '1628392709_seblak-level-1.png', '2021-08-14 11:19:39', '2021-08-14 11:19:42'),
(9, 'Salad Buah 500ml', 15000, 12000, 15, '1628392709_seblak-level-1.png', '2021-08-14 11:19:41', '2021-08-14 11:19:43'),
(10, 'Ikan Bakar Gurame', 15000, 12000, 15, '1628392709_seblak-level-1.png', '2021-08-14 11:21:09', '2021-08-14 11:21:11');

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
  `gambar` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `gambar`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Albert', 'Albert@gmail.com', '2021-07-19 13:54:59', '$2y$10$jvByyjjReJ79UP4Eq7dGlu4tvvwQO0piQx5SaMQLP1I8nExu42lE6', NULL, NULL, '2021-07-19 13:55:01', '2021-08-05 19:02:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `varians`
--

CREATE TABLE `varians` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_varian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `varians`
--

INSERT INTO `varians` (`id`, `nama_varian`, `created_at`, `updated_at`) VALUES
(1, 'Pedas Level 1', '2021-07-25 04:51:33', '2021-07-26 03:05:43'),
(2, 'Pedas Level 2', '2021-07-25 04:51:34', '2021-07-25 04:51:38'),
(3, 'Pedas Level 3', '2021-07-25 04:51:35', '2021-07-25 04:51:38'),
(4, 'Pedas Level 4', '2021-07-25 04:51:36', '2021-07-25 04:51:39'),
(5, 'Pedas Level 5', '2021-07-25 04:54:52', '2021-07-25 04:54:55'),
(13, 'Original', NULL, NULL),
(14, 'Lontong', NULL, NULL),
(15, '300 ml', NULL, NULL),
(16, '500 ml', NULL, NULL),
(17, 'Pedas', NULL, NULL),
(18, 'Sedang', NULL, NULL),
(19, 'Extra', NULL, NULL),
(20, 'Bandeng', NULL, NULL),
(21, 'Gurame', NULL, NULL),
(22, 'Mujair', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kecamatans`
--
ALTER TABLE `kecamatans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ongkirs`
--
ALTER TABLE `ongkirs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pembayarans`
--
ALTER TABLE `pembayarans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `promoses`
--
ALTER TABLE `promoses`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `varians`
--
ALTER TABLE `varians`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kecamatans`
--
ALTER TABLE `kecamatans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `ongkirs`
--
ALTER TABLE `ongkirs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pembayarans`
--
ALTER TABLE `pembayarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `produks`
--
ALTER TABLE `produks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `promoses`
--
ALTER TABLE `promoses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `varians`
--
ALTER TABLE `varians`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
