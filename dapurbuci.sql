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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel dapurbuci.kecamatans: ~8 rows (lebih kurang)
/*!40000 ALTER TABLE `kecamatans` DISABLE KEYS */;
INSERT INTO `kecamatans` (`id`, `nama_kecamatan`, `created_at`, `updated_at`) VALUES
	(1, 'Gresik', NULL, '2021-07-28 14:51:33'),
	(3, 'Kebomas', NULL, '2021-07-28 14:54:23'),
	(4, 'Cerme', NULL, NULL),
	(5, 'Benjeng', NULL, NULL),
	(6, 'Balongpanggang', NULL, NULL),
	(7, 'Duduk Sampeyan', NULL, NULL),
	(8, 'Manyar', NULL, NULL),
	(9, 'Bungah', NULL, NULL),
	(10, 'Menganti', NULL, NULL),
	(11, 'Dukun', NULL, NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel dapurbuci.ongkirs: ~6 rows (lebih kurang)
/*!40000 ALTER TABLE `ongkirs` DISABLE KEYS */;
INSERT INTO `ongkirs` (`id`, `nama_desa`, `biaya`, `kecamatan`, `created_at`, `updated_at`) VALUES
	(2, 'Banjarsari', '2000', 'Cerme', NULL, '2021-08-05 03:53:46'),
	(3, 'Betiting', '2000', 'Cerme', NULL, NULL),
	(4, 'Cagakagung', '2000', 'Cerme', NULL, NULL),
	(5, 'Cerme Kidul', '2000', 'Cerme', NULL, NULL),
	(6, 'Cerme Lor', '2000', 'Cerme', NULL, NULL),
	(7, 'Wedani', '0', 'Cerme', NULL, NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel dapurbuci.pembayarans: ~6 rows (lebih kurang)
/*!40000 ALTER TABLE `pembayarans` DISABLE KEYS */;
INSERT INTO `pembayarans` (`id`, `gambar`, `nama_akun`, `nomor_akun`, `created_at`, `updated_at`) VALUES
	(3, '1628672255_bca-logo.png', 'BCA', '33198269196817', '2021-08-11 08:57:35', '2021-08-11 08:57:35'),
	(4, '1628672284_bni-logo.png', 'BNI', '13138249596812', '2021-08-11 08:58:04', '2021-08-11 08:58:04'),
	(5, '1628672316_mandiri-logo.png', 'Mandiri', '53438243190819', '2021-08-11 08:58:36', '2021-08-11 08:58:36'),
	(6, '1628672385_dana-logo.png', 'Dana', '+62137091872', '2021-08-11 08:59:45', '2021-08-11 08:59:45'),
	(7, '1628672411_ovo-logo.png', 'OVO', '+62837052973', '2021-08-11 09:00:11', '2021-08-11 09:00:11'),
	(8, '1628672446_shopeepay-logo.png', 'ShopeePay', '+62858162925', '2021-08-11 09:00:46', '2021-08-11 09:00:46');
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
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel dapurbuci.produks: ~17 rows (lebih kurang)
/*!40000 ALTER TABLE `produks` DISABLE KEYS */;
INSERT INTO `produks` (`id`, `gambar`, `nama_produk`, `harga`, `deskripsi`, `varian`, `created_at`, `updated_at`) VALUES
	(13, '1628392709_seblak-level-1.png', 'Seblak', '12000', 'Seblak', 'Pedas Level 1', '2021-08-08 03:18:29', '2021-08-08 03:18:29'),
	(14, '1628392734_seblak-level-2.png', 'Seblak', '12000', 'Seblak', 'Pedas Level 2', '2021-08-08 03:18:54', '2021-08-08 03:18:54'),
	(15, '1628392761_seblak-level-3.png', 'Seblak', '12000', 'Seblak', 'Pedas Level 3', '2021-08-08 03:19:21', '2021-08-08 03:19:21'),
	(16, '1628392782_seblak-level-4.png', 'Seblak', '12000', 'Seblak', 'Pedas Level 4', '2021-08-08 03:19:42', '2021-08-08 03:19:42'),
	(17, '1628392806_seblak-level-5.png', 'Seblak', '12000', 'Seblak', 'Pedas Level 5', '2021-08-08 03:20:07', '2021-08-08 03:20:07'),
	(18, '1628393582_gado-gado-original.png', 'Gado Gado', '14000', 'Gado Gado', 'Original', '2021-08-08 03:33:02', '2021-08-08 03:33:02'),
	(19, '1628393614_gado-gado-lontong.png', 'Gado Gado', '16000', 'Gado Gado', 'Lontong', '2021-08-08 03:33:34', '2021-08-08 03:33:34'),
	(20, '1628394618_salad-buah-300ml.png', 'Salad Buah', '6000', 'Salad Buah', '300 ml', '2021-08-08 03:50:18', '2021-08-08 03:50:18'),
	(21, '1628394657_salad-buah-500ml.png', 'Salad Buah', '8000', 'Salad Buah', '500 ml', '2021-08-08 03:50:57', '2021-08-08 03:50:57'),
	(23, '1628480467_ikan-bakar-gurame.png', 'Ikan Bakar', '65000', 'Ikan Bakar Gurame', 'Gurame', '2021-08-09 03:41:07', '2021-08-09 03:41:07'),
	(25, '1628481394_cumi-baby-sedang.png', 'Baby Cumi', '30000', 'Baby Cumi', 'Sedang', '2021-08-09 03:56:34', '2021-08-09 03:56:34'),
	(26, '1628481427_cumi-baby-extra.png', 'Baby Cumi', '45000', 'Baby Cumi', 'Extra', '2021-08-09 03:57:07', '2021-08-09 03:57:07'),
	(27, '1628481516_cumi-baby-pedas.png', 'Baby Cumi', '20000', 'Baby Cumi', 'Pedas', '2021-08-09 03:58:36', '2021-08-09 03:58:36'),
	(28, '1628482099_kepiting-asam-manis-pedas.png', 'Kepiting Asam Manis', '15000', 'Kepiting Asam Manis', 'Pedas', '2021-08-09 04:08:19', '2021-08-09 04:08:19'),
	(29, '1628482190_kepiting-asam-manis-sedang.png', 'Kepiting Asam Manis', '20000', 'Kepiting Asam Manis', 'Sedang', '2021-08-09 04:09:50', '2021-08-09 04:09:50'),
	(30, '1628482255_kepiting-asam-manis-extra.png', 'Kepiting Asam Manis', '30000', 'Kepiting Asam Manis', 'Extra', '2021-08-09 04:10:55', '2021-08-09 04:10:55'),
	(31, '1628687959_ikan-bakar-bandeng.png', 'Ikan Bakar', '30000', 'Ikan Bakar', 'Bandeng', '2021-08-11 13:19:19', '2021-08-11 13:19:19'),
	(32, '1628688026_ikan-bakar-mujair.png', 'Ikan Bakar', '27000', 'Ikan Bakar', 'Mujair', '2021-08-11 13:20:26', '2021-08-11 13:20:26');
/*!40000 ALTER TABLE `produks` ENABLE KEYS */;

-- membuang struktur untuk table dapurbuci.promoses
CREATE TABLE IF NOT EXISTS `promoses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sebelum_promosi` int(15) NOT NULL DEFAULT 0,
  `sesudah_promosi` int(15) DEFAULT NULL,
  `diskon` int(11) DEFAULT NULL,
  `gambar` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel dapurbuci.promoses: ~6 rows (lebih kurang)
/*!40000 ALTER TABLE `promoses` DISABLE KEYS */;
INSERT INTO `promoses` (`id`, `produk`, `sebelum_promosi`, `sesudah_promosi`, `diskon`, `gambar`, `created_at`, `updated_at`) VALUES
	(1, 'Kadal', 15000, 12000, 15, '1628392709_seblak-level-1.png', '2021-08-12 16:41:14', '2021-08-12 16:41:15'),
	(2, 'Kadal1', 15000, 12000, 15, '1628392709_seblak-level-1.png', '2021-08-12 16:51:37', '2021-08-12 16:51:43'),
	(3, 'Kadal1', 15000, 12000, 15, '1628392709_seblak-level-1.png', '2021-08-12 16:51:38', '2021-08-12 16:51:44'),
	(4, 'Kadal1', 15000, 12000, 15, '1628392709_seblak-level-1.png', '2021-08-12 16:51:39', '2021-08-12 16:51:46'),
	(5, 'Kadal1', 15000, 12000, 15, '1628392709_seblak-level-1.png', '2021-08-12 16:51:40', '2021-08-12 16:51:48'),
	(6, 'Kadal1', 15000, 12000, 15, '1628392709_seblak-level-1.png', '2021-08-12 16:51:41', '2021-08-12 16:51:49');
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
  `gambar` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel dapurbuci.users: ~1 rows (lebih kurang)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `gambar`) VALUES
	(1, 'Albert', 'Albert@gmail.com', '2021-07-19 20:54:59', '$2y$10$jvByyjjReJ79UP4Eq7dGlu4tvvwQO0piQx5SaMQLP1I8nExu42lE6', NULL, '2021-07-19 20:55:01', '2021-08-06 02:02:02', NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- membuang struktur untuk table dapurbuci.varians
CREATE TABLE IF NOT EXISTS `varians` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_varian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel dapurbuci.varians: ~15 rows (lebih kurang)
/*!40000 ALTER TABLE `varians` DISABLE KEYS */;
INSERT INTO `varians` (`id`, `nama_varian`, `created_at`, `updated_at`) VALUES
	(1, 'Pedas Level 1', '2021-07-25 11:51:33', '2021-07-26 10:05:43'),
	(2, 'Pedas Level 2', '2021-07-25 11:51:34', '2021-07-25 11:51:38'),
	(3, 'Pedas Level 3', '2021-07-25 11:51:35', '2021-07-25 11:51:38'),
	(4, 'Pedas Level 4', '2021-07-25 11:51:36', '2021-07-25 11:51:39'),
	(5, 'Pedas Level 5', '2021-07-25 11:54:52', '2021-07-25 11:54:55'),
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
/*!40000 ALTER TABLE `varians` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
