-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 13, 2025 at 12:40 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yayasan_arrahman`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_tunggakans`
--

CREATE TABLE `kategori_tunggakans` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_tunggakans`
--

INSERT INTO `kategori_tunggakans` (`id`, `nama`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 'Kos Makan ', 380000, '2025-01-10 23:22:33', '2025-01-12 09:29:40');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_01_08_054954_create_wali_santris_table', 1),
(6, '2025_01_08_055003_create_santris_table', 1),
(7, '2025_01_08_055019_create_yayasans_table', 1),
(8, '2025_01_08_141400_create_kategori_tunggakans_table', 1),
(9, '2025_01_08_141410_create_tunggakan_santris_table', 1),
(10, '2025_01_08_141426_create_pembayarans_table', 1),
(11, '2025_01_09_075911_create_user_logs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pembayarans`
--

CREATE TABLE `pembayarans` (
  `id` bigint UNSIGNED NOT NULL,
  `tanggal_pembayaran` timestamp NOT NULL,
  `bukti_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metode_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bulan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `tunggakan_santri_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pembayarans`
--

INSERT INTO `pembayarans` (`id`, `tanggal_pembayaran`, `bukti_pembayaran`, `metode_pembayaran`, `bulan`, `nama`, `status`, `tunggakan_santri_id`, `created_at`, `updated_at`) VALUES
(3, '2025-01-13 00:02:10', 'bukti_pembayaran/I2nTutF2u2jF80v7GhK3fojQOYEmbTUb2cH7pQG4.jpg', 'Transfer', 'Januari', 'sd', 1, 3, '2025-01-13 00:02:10', '2025-01-13 00:05:26'),
(4, '2025-01-13 00:06:17', 'bukti_pembayaran/HPt9LdmpvNup0Xiv1y1mEAAU4Crh6iSeEXCUfVaV.jpg', 'Transfer', 'Januari', 'Santri 2', 1, 3, '2025-01-13 00:06:17', '2025-01-13 03:09:32'),
(5, '2025-01-13 00:23:52', 'bukti_pembayaran/Sd3bnybe1qHVHgDGn04gxTc8ykbOrzpWNhJnI03L.jpg', 'Transfer', 'Januari', 'aa', 0, 3, '2025-01-13 00:23:52', '2025-01-13 00:23:52'),
(6, '2025-01-13 00:25:35', 'bukti_pembayaran/S3uD0Ff8Ez4zRKGrDihxoUptPIW3XOOo1AKHpYPO.png', 'Transfer', 'Januari', 'h', 0, 3, '2025-01-13 00:25:35', '2025-01-13 00:25:35'),
(7, '2025-01-13 00:37:47', 'bukti_pembayaran/wXS4sal4kOgMZjYgP9kv6cqkwTnQrGc4IYiK9vyn.jpg', 'Transfer', 'Januari', 'aa', 0, 4, '2025-01-13 00:37:47', '2025-01-13 00:37:47');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `santris`
--

CREATE TABLE `santris` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_tgl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tingkat_pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wali_santri_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `santris`
--

INSERT INTO `santris` (`id`, `nama`, `gambar`, `tempat_tgl`, `alamat`, `jenis_kelamin`, `tingkat_pendidikan`, `wali_santri_id`, `created_at`, `updated_at`) VALUES
(1, 'Yuli Ana', NULL, 'Kedondon, 2011-11-09', 'Kedondon', 'Perempuan', 'MTS', 2, '2025-01-10 23:11:12', '2025-01-10 23:11:12'),
(2, 'Riki Azhari', NULL, 'Bebuak, 2009-03-18', 'Bebuak', 'Laki-laki', 'SMK', 3, '2025-01-10 23:11:12', '2025-01-10 23:11:12'),
(3, 'Rian Hafiz', NULL, 'Aik Bukak, 2011-04-11', 'Aik Bukak', 'Laki-laki', 'MTS', 4, '2025-01-10 23:11:12', '2025-01-10 23:11:12'),
(4, 'M. Patan Rizki', NULL, 'Karang Lebah, 2011-11-25', 'Karang Lebah', 'Laki-laki', 'MTS', 5, '2025-01-10 23:11:12', '2025-01-10 23:11:12'),
(5, 'Adam Tantra', NULL, 'Lendang Are, 2011-04-08', 'Lendang Are', 'Laki-laki', 'MTS', 6, '2025-01-10 23:11:12', '2025-01-10 23:11:12'),
(6, 'M. Azandi Zohri', NULL, 'Jurit, 2011-07-23', 'Jurit', 'Laki-laki', 'MTS', 7, '2025-01-10 23:11:12', '2025-01-10 23:11:12'),
(7, 'Zahira Rosiana', NULL, 'Sumbek, 2012-11-08', 'Sumbek', 'Perempuan', 'MTS', 8, '2025-01-10 23:11:12', '2025-01-10 23:11:12'),
(8, 'M. Ziana Alpa', NULL, 'Sumbek, 2012-07-03', 'Sumbek', 'Laki-laki', 'MTS', 9, '2025-01-10 23:11:12', '2025-01-10 23:11:12'),
(9, 'Repa Julia', NULL, 'Dompu, 2011-07-10', 'Dompu', 'Perempuan', 'MTS', 10, '2025-01-10 23:11:12', '2025-01-10 23:11:12'),
(10, 'Alpian Hairi', NULL, 'Sumbek, 2012-03-24', 'Sumbek', 'Laki-laki', 'MTS', 11, '2025-01-10 23:11:12', '2025-01-10 23:11:12'),
(11, 'M. Wirian Ramdani', NULL, 'Sumbek, 2012-08-02', 'Sumbek', 'Laki-laki', 'MTS', 12, '2025-01-10 23:11:12', '2025-01-10 23:11:12'),
(12, 'Malana Malik Ibrahim', NULL, 'Pondk Gedang, 2011-12-05', 'Pondk Gedang', 'Laki-laki', 'MTS', 13, '2025-01-10 23:11:12', '2025-01-10 23:11:12'),
(13, 'Ahmad Fauzan', NULL, 'Bukit Mente, 2011-01-15', 'Bukit Mente', 'Laki-laki', 'MTS', 14, '2025-01-10 23:11:12', '2025-01-10 23:11:12'),
(14, 'Aisyah Putri', NULL, 'Mataram, 2010-05-25', 'Mataram', 'Perempuan', 'SMP', 15, '2025-01-10 23:11:12', '2025-01-10 23:11:12'),
(15, 'Ali Syahbana', NULL, 'Lombok Timur, 2009-07-12', 'Lombok Timur', 'Laki-laki', 'SMA', 16, '2025-01-10 23:11:12', '2025-01-10 23:11:12'),
(16, 'Zara Amelia', NULL, 'Praya, 2008-08-19', 'Praya', 'Perempuan', 'SD', 17, '2025-01-10 23:11:12', '2025-01-10 23:11:12'),
(17, 'Faris Muhammad', NULL, 'Kediri, 2009-10-01', 'Kediri', 'Laki-laki', 'SMP', 18, '2025-01-10 23:11:12', '2025-01-10 23:11:12'),
(18, 'Raya Salsabila', NULL, 'Lombok Tengah, 2010-11-22', 'Lombok Tengah', 'Perempuan', 'MTS', 19, '2025-01-10 23:11:12', '2025-01-10 23:11:12'),
(19, 'Imam Syafiq', NULL, 'Selong, 2007-12-10', 'Selong', 'Perempuan', 'SMA', 20, '2025-01-10 23:11:12', '2025-01-11 06:31:28'),
(20, 'Muhamad Ependi', NULL, '2001-06-17', 'Butak, Bakan', 'Laki-laki', 'SMK', 6, '2025-01-12 06:51:10', '2025-01-12 06:51:10'),
(21, 'adam', NULL, '--', 'praya', 'Laki-laki', 'MTS', 6, '2025-01-13 00:40:54', '2025-01-13 00:40:54');

-- --------------------------------------------------------

--
-- Table structure for table `tunggakan_santris`
--

CREATE TABLE `tunggakan_santris` (
  `id` bigint UNSIGNED NOT NULL,
  `santri_id` bigint UNSIGNED NOT NULL,
  `kategori_tunggakan_id` bigint UNSIGNED NOT NULL,
  `tahun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `January` tinyint(1) NOT NULL DEFAULT '0',
  `February` tinyint(1) NOT NULL DEFAULT '0',
  `March` tinyint(1) NOT NULL DEFAULT '0',
  `April` tinyint(1) NOT NULL DEFAULT '0',
  `May` tinyint(1) NOT NULL DEFAULT '0',
  `June` tinyint(1) NOT NULL DEFAULT '0',
  `July` tinyint(1) NOT NULL DEFAULT '0',
  `August` tinyint(1) NOT NULL DEFAULT '0',
  `September` tinyint(1) NOT NULL DEFAULT '0',
  `October` tinyint(1) NOT NULL DEFAULT '0',
  `November` tinyint(1) NOT NULL DEFAULT '0',
  `December` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tunggakan_santris`
--

INSERT INTO `tunggakan_santris` (`id`, `santri_id`, `kategori_tunggakan_id`, `tahun`, `January`, `February`, `March`, `April`, `May`, `June`, `July`, `August`, `September`, `October`, `November`, `December`, `created_at`, `updated_at`) VALUES
(1, 19, 1, '2025', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2025-01-10 23:22:47', '2025-01-12 06:53:02'),
(2, 13, 1, '2025', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2025-01-10 23:54:47', '2025-01-12 06:54:13'),
(3, 5, 1, '2025', 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2025-01-12 08:57:14', '2025-01-13 03:08:38'),
(4, 20, 1, '2025', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2025-01-12 09:45:03', '2025-01-13 03:10:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'a@gmail.com', NULL, '$2y$12$dMVNfKDCCqZoq6KOt0wO9Or/FnbBOCZoki7ArSmVyDJXssbSg4Com', NULL, '2025-01-10 23:11:41', '2025-01-10 23:11:41'),
(2, 'admin', 'admin@gmail.com', NULL, '$2y$12$.dC9Qf8NarYGP36hTjkO/O4cdi86Iw.Z/rgoxolHg5UWxbslOppKS', NULL, '2025-01-12 18:38:37', '2025-01-12 18:38:37');

-- --------------------------------------------------------

--
-- Table structure for table `user_logs`
--

CREATE TABLE `user_logs` (
  `id` bigint UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wali_santri_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_logs`
--

INSERT INTO `user_logs` (`id`, `username`, `password`, `wali_santri_id`, `created_at`, `updated_at`) VALUES
(1, 'coba', '$2y$12$jwLACS6inTVgVXAl3hjGxOHe.UPBTIU/a5wSsjYxrwf0IkCRrAHTC', 1, '2025-01-12 05:12:44', '2025-01-13 00:49:33'),
(2, 'tes', '$2y$12$4hxCVPIcQ5U2CC7y0K6ImOeUV3V0rO1bkiAPnBV7/ZDelzZvgRCFS', 6, '2025-01-12 05:31:28', '2025-01-12 05:31:28');

-- --------------------------------------------------------

--
-- Table structure for table `wali_santris`
--

CREATE TABLE `wali_santris` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wali_santris`
--

INSERT INTO `wali_santris` (`id`, `nama_ayah`, `nama_ibu`, `no_hp`, `created_at`, `updated_at`) VALUES
(1, 'Budi Santoso', 'Siti Nurhaliza', '081234567890', '2025-01-10 23:11:12', '2025-01-10 23:11:12'),
(2, 'M. Lazim', 'Husnul Khatimah', '87713463584', '2025-01-10 23:11:12', '2025-01-10 23:11:12'),
(3, 'M. Yen', 'Mahriana', '87894712019', '2025-01-10 23:11:12', '2025-01-10 23:11:12'),
(4, 'M. Tohidi', 'Nurhayati', '83141620621', '2025-01-10 23:11:12', '2025-01-10 23:11:12'),
(5, 'Samsul Hadi', 'Lestari Dewi', '81234567890', '2025-01-10 23:11:12', '2025-01-10 23:11:12'),
(6, 'Fahmi Hidayat', 'Rahmawati', '85789012345', '2025-01-10 23:11:12', '2025-01-10 23:11:12'),
(7, 'Sugeng Priyono', 'Sulastri', '85678901234', '2025-01-10 23:11:12', '2025-01-10 23:11:12'),
(8, 'Ahmad Soleh', 'Fatimah', '81356789012', '2025-01-10 23:11:12', '2025-01-10 23:11:12'),
(9, 'Hendra Wijaya', 'Rina Puspita', '81123456789', '2025-01-10 23:11:12', '2025-01-10 23:11:12'),
(10, 'Agus Riyanto', 'Lina Kartini', '85987654321', '2025-01-10 23:11:12', '2025-01-10 23:11:12'),
(11, 'Darmawan', 'Siti Aminah', '82134567890', '2025-01-10 23:11:12', '2025-01-10 23:11:12'),
(12, 'Irwan Syahputra', 'Nurlina', '85123456789', '2025-01-10 23:11:12', '2025-01-10 23:11:12'),
(13, 'Bambang Sutrisno', 'Yuli Astuti', '88234567890', '2025-01-10 23:11:12', '2025-01-10 23:11:12'),
(14, 'Eko Prasetyo', 'Sri Wahyuni', '81198765432', '2025-01-10 23:11:12', '2025-01-10 23:11:12'),
(15, 'Hariyanto', 'Dewi Sartika', '87123456789', '2025-01-10 23:11:12', '2025-01-10 23:11:12'),
(16, 'Andi Firmansyah', 'Indah Lestari', '81134567890', '2025-01-10 23:11:12', '2025-01-10 23:11:12'),
(17, 'Yusuf Iskandar', 'Rahayu Pertiwi', '83198765432', '2025-01-10 23:11:12', '2025-01-10 23:11:12'),
(18, 'Ahmad Fauzi', 'Nur Aini', '88987654321', '2025-01-10 23:11:12', '2025-01-10 23:11:12'),
(19, 'Suyatno', 'Kartini', '81345678901', '2025-01-10 23:11:12', '2025-01-10 23:11:12'),
(20, 'Rizal Ramli', 'Fitriani', '85678901234', '2025-01-10 23:11:12', '2025-01-10 23:11:12');

-- --------------------------------------------------------

--
-- Table structure for table `yayasans`
--

CREATE TABLE `yayasans` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_yayasan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sejarah_yayasan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_yayasan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `benner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail_satu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail_dua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail_tiga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_satu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_dua` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `yayasans`
--

INSERT INTO `yayasans` (`id`, `nama_yayasan`, `alamat`, `telepon`, `email`, `sejarah_yayasan`, `deskripsi_yayasan`, `logo`, `benner`, `thumbnail_satu`, `thumbnail_dua`, `thumbnail_tiga`, `link_satu`, `link_dua`, `created_at`, `updated_at`) VALUES
(1, 'Ponpes Darul Kamilin Jati Bakan', 'JL Langko, No. 1, Bakan, Janapria, Loteng, Darmaji, Kec. Praya, Kabupaten Lombok Tengah, Nusa Tenggara Bar. 83553', '+66 77 88 909', 'Darulkamilin@gmail.com', 'MTSS DARUL KAMILIN merupakan salah satu sekolah jenjang MTs berstatus Swasta yang berada di wilayah Kec. Janapria, Kab. Lombok Tengah, Nusa Tenggara Barat. MTSS DARUL KAMILIN didirikan pada tanggal 27 Agustus 1999 dengan Nomor SK Pendirian IIX/1-b/526/1999 yang berada dalam naungan Kementerian Agama. Dalam kegiatan pembelajaran, sekolah yang memiliki 160 siswa ini dibimbing oleh guru-guru yang profesional di bidangnya. Operator yang bertanggung jawab adalah Zohriatun Hasanah', 'Bergabung bersama Kami', '01JHAQXFTQCPKV20WB66FA979T.png', '01JHAQXFTX2B0X6M28YKGBN45K.png', '01JHAQXFV2TQ3M4WCSR3WSBFA5.jpg', '01JHAQXFV52DV2250WN9E4NR48.jpg', '01JHAQXFV94YKGPHAYNEBST219.jpg', 'https://youtu.be/Kzxyp0ya0xw?si=Ecm474Td9fxqOttk', 'https://youtu.be/pQ5MmHcT6a0?si=u5UCvDrzojbjrXvH', '2025-01-11 05:12:37', '2025-01-11 21:14:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kategori_tunggakans`
--
ALTER TABLE `kategori_tunggakans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pembayarans`
--
ALTER TABLE `pembayarans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pembayarans_tunggakan_santri_id_foreign` (`tunggakan_santri_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `santris`
--
ALTER TABLE `santris`
  ADD PRIMARY KEY (`id`),
  ADD KEY `santris_wali_santri_id_foreign` (`wali_santri_id`);

--
-- Indexes for table `tunggakan_santris`
--
ALTER TABLE `tunggakan_santris`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tunggakan_santris_santri_id_foreign` (`santri_id`),
  ADD KEY `tunggakan_santris_kategori_tunggakan_id_foreign` (`kategori_tunggakan_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_logs`
--
ALTER TABLE `user_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_logs_wali_santri_id_foreign` (`wali_santri_id`);

--
-- Indexes for table `wali_santris`
--
ALTER TABLE `wali_santris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yayasans`
--
ALTER TABLE `yayasans`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori_tunggakans`
--
ALTER TABLE `kategori_tunggakans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pembayarans`
--
ALTER TABLE `pembayarans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `santris`
--
ALTER TABLE `santris`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tunggakan_santris`
--
ALTER TABLE `tunggakan_santris`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_logs`
--
ALTER TABLE `user_logs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wali_santris`
--
ALTER TABLE `wali_santris`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `yayasans`
--
ALTER TABLE `yayasans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembayarans`
--
ALTER TABLE `pembayarans`
  ADD CONSTRAINT `pembayarans_tunggakan_santri_id_foreign` FOREIGN KEY (`tunggakan_santri_id`) REFERENCES `tunggakan_santris` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `santris`
--
ALTER TABLE `santris`
  ADD CONSTRAINT `santris_wali_santri_id_foreign` FOREIGN KEY (`wali_santri_id`) REFERENCES `wali_santris` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tunggakan_santris`
--
ALTER TABLE `tunggakan_santris`
  ADD CONSTRAINT `tunggakan_santris_kategori_tunggakan_id_foreign` FOREIGN KEY (`kategori_tunggakan_id`) REFERENCES `kategori_tunggakans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tunggakan_santris_santri_id_foreign` FOREIGN KEY (`santri_id`) REFERENCES `santris` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_logs`
--
ALTER TABLE `user_logs`
  ADD CONSTRAINT `user_logs_wali_santri_id_foreign` FOREIGN KEY (`wali_santri_id`) REFERENCES `wali_santris` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
