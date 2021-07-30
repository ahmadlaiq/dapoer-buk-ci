-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 10.4.18-MariaDB - mariadb.org binary distribution
-- OS Server:                    Win64
-- HeidiSQL Versi:               11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Membuang struktur basisdata untuk dapurbuci
CREATE DATABASE IF NOT EXISTS `dapurbuci` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `dapurbuci`;

-- membuang struktur untuk table dapurbuci.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel dapurbuci.failed_jobs: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- membuang struktur untuk table dapurbuci.kecamatans
CREATE TABLE IF NOT EXISTS `kecamatans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel dapurbuci.kecamatans: ~1 rows (lebih kurang)
/*!40000 ALTER TABLE `kecamatans` DISABLE KEYS */;
INSERT INTO `kecamatans` (`id`, `nama_kecamatan`, `created_at`, `updated_at`) VALUES
	(1, 'Gresik', NULL, '2021-07-28 14:51:33'),
	(3, 'Kebomas', NULL, '2021-07-28 14:54:23');
/*!40000 ALTER TABLE `kecamatans` ENABLE KEYS */;

-- membuang struktur untuk table dapurbuci.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel dapurbuci.migrations: ~6 rows (lebih kurang)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2019_08_19_000000_create_failed_jobs_table', 1),
	(3, '2021_07_10_234853_create_produks_table', 1),
	(4, '2021_07_11_012144_create_ongkirs_table', 1),
	(5, '2021_07_19_001207_create_promosis_table', 1),
	(6, '2021_07_19_001550_create_pembayarans_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- membuang struktur untuk table dapurbuci.ongkirs
CREATE TABLE IF NOT EXISTS `ongkirs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_desa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biaya` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel dapurbuci.ongkirs: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `ongkirs` DISABLE KEYS */;
/*!40000 ALTER TABLE `ongkirs` ENABLE KEYS */;

-- membuang struktur untuk table dapurbuci.pembayarans
CREATE TABLE IF NOT EXISTS `pembayarans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_akun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_akun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel dapurbuci.pembayarans: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `pembayarans` DISABLE KEYS */;
/*!40000 ALTER TABLE `pembayarans` ENABLE KEYS */;

-- membuang struktur untuk table dapurbuci.produks
CREATE TABLE IF NOT EXISTS `produks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(3000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `varian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel dapurbuci.produks: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `produks` DISABLE KEYS */;
INSERT INTO `produks` (`id`, `gambar`, `nama_produk`, `harga`, `deskripsi`, `varian`, `created_at`, `updated_at`) VALUES
	(2, '1627563898_2607892.jpg', 'Seblak', '12000', 'aaaaaaaaaaaaaaaaa', 'Pedas Level 1', '2021-07-29 13:04:58', '2021-07-29 13:04:58');
/*!40000 ALTER TABLE `produks` ENABLE KEYS */;

-- membuang struktur untuk table dapurbuci.promoses
CREATE TABLE IF NOT EXISTS `promoses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_promosi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel dapurbuci.promoses: ~2 rows (lebih kurang)
/*!40000 ALTER TABLE `promoses` DISABLE KEYS */;
INSERT INTO `promoses` (`id`, `gambar`, `nama_promosi`, `created_at`, `updated_at`) VALUES
	(1, '1627293992_user-flow-rev1-Page-2.png', 'Promosi Jumat Berbagi', '2021-07-26 10:06:32', '2021-07-26 10:06:32');
/*!40000 ALTER TABLE `promoses` ENABLE KEYS */;

-- membuang struktur untuk table dapurbuci.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel dapurbuci.users: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Admin', 'admin@gmail.com', '2021-07-19 20:54:59', '$2y$10$N/YcwTVeCiC7wtAGTlNHjOq9jrSLz9Vm2cjCE/WCiFLsiRo6x8wiu', NULL, '2021-07-19 20:55:01', '2021-07-19 20:55:02');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- membuang struktur untuk table dapurbuci.varians
CREATE TABLE IF NOT EXISTS `varians` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_varian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel dapurbuci.varians: ~10 rows (lebih kurang)
/*!40000 ALTER TABLE `varians` DISABLE KEYS */;
INSERT INTO `varians` (`id`, `nama_varian`, `created_at`, `updated_at`) VALUES
	(1, 'Pedas Level 1', '2021-07-25 11:51:33', '2021-07-26 10:05:43'),
	(2, 'Pedas Level 2', '2021-07-25 11:51:34', '2021-07-25 11:51:38'),
	(3, 'Pedas Level 3', '2021-07-25 11:51:35', '2021-07-25 11:51:38'),
	(4, 'Pedas Level 4', '2021-07-25 11:51:36', '2021-07-25 11:51:39'),
	(5, 'Pedas Level 5', '2021-07-25 11:54:52', '2021-07-25 11:54:55'),
	(6, 'Pedas Level 6', '2021-07-25 11:54:53', '2021-07-25 11:54:56'),
	(7, 'Pedas Level 7', '2021-07-25 11:54:54', '2021-07-25 11:54:57'),
	(8, 'Pedas Level 8', '2021-07-25 11:54:55', '2021-07-25 11:54:58'),
	(9, 'Pedas Level 9', '2021-07-25 12:36:51', '2021-07-25 12:36:53'),
	(10, 'Pedas Level 10', '2021-07-25 12:36:52', '2021-07-25 12:36:54'),
	(12, 'Ceker + Pentol', '2021-07-25 20:05:47', '2021-07-25 20:05:49');
/*!40000 ALTER TABLE `varians` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
