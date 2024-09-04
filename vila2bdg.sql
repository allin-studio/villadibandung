-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2024 at 09:22 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vila2bdg`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `nama`, `username`, `password`) VALUES
(1, 'alex', 'admin', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2023_07_24_175456_create_vilas_table', 1),
(13, '2023_07_25_093252_add_jumlah_kamar_mandi_to_vilas_table', 2),
(14, '2023_07_28_075414_create_admins_table', 3),
(15, '2023_07_28_083646_create_pemesanan_vilas_table', 4),
(16, '2023_07_28_091111_add_tanggal_booking_to_bookings', 5),
(17, '2023_07_28_092406_create_bookings_table', 5),
(18, '2023_07_28_094058_create_bookings_table', 6),
(19, '2023_07_30_164741_create_transaksi_booking_table', 7),
(20, '2023_07_31_030415_add_updated_at_to_transaksi_booking_table', 8),
(21, '2023_08_04_112458_add_harga_weekend_to_vilas', 9),
(22, '2023_08_04_133749_create_reviews_table', 10),
(23, '2023_08_04_165451_create_peraturans_table', 11),
(24, '2023_08_07_125137_create_peraturans2_table', 12),
(25, '2023_08_07_132502_create_peraturandagos_table', 13),
(26, '2023_08_07_150506_add_guest_columns_to_vilas', 14),
(27, '2023_08_07_150801_add_guest_columns_to_transaksi_booking', 15),
(28, '2023_08_07_153425_add_guest_columns_to_transaksi_booking', 16);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan_vilas`
--

CREATE TABLE `pemesanan_vilas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `jumlah_hari` int(11) NOT NULL,
  `vila_id` bigint(20) UNSIGNED NOT NULL,
  `jumlah_bayar` decimal(10,2) NOT NULL,
  `metode_pembayaran` varchar(255) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peraturandagos`
--

CREATE TABLE `peraturandagos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `isi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `peraturandagos`
--

INSERT INTO `peraturandagos` (`id`, `isi`, `created_at`, `updated_at`) VALUES
(2, 'asa', '2023-08-07 06:41:00', '2023-08-07 06:42:22'),
(3, 'Boleh membawa alkohol/miras dan sejenisnya', '2023-08-15 06:43:46', '2023-08-15 06:43:46'),
(4, 'Isi kamar diusahakan harus 10 orang minimal', '2023-08-15 06:44:36', '2023-08-16 02:54:17'),
(5, 'Boleh bakar bakar pork', '2023-08-15 06:44:57', '2023-08-15 06:44:57'),
(6, 'wajib menggunakan kaos kaki', '2023-08-15 06:45:21', '2023-08-16 02:53:56');

-- --------------------------------------------------------

--
-- Table structure for table `peraturans`
--

CREATE TABLE `peraturans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `isi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `peraturans`
--

INSERT INTO `peraturans` (`id`, `isi`, `created_at`, `updated_at`) VALUES
(3, 'Jaminan ketersediaan Villa bisa dipastikan setelah DP minimal 50% dari total biaya menginap.', '2023-08-04 10:18:22', '2023-08-04 10:57:23'),
(4, 'Memberikan Foto KTP pada saat reservasi dan menyimpan KTP asli selama menginap.', '2023-08-04 10:18:32', '2023-08-04 10:58:41'),
(5, 'Penggunaan Villa untuk PESTA, ULANG TAHUN, PERNIKAHAN, AKAD, dan ACARA, TIDAK Diperbolehkan.', '2023-08-04 11:00:03', '2023-08-04 11:00:03'),
(6, 'Jumlah Kendaraan dilarang melebihi batas yang ditentukan.', '2023-08-04 11:00:31', '2023-08-04 11:00:31'),
(7, 'Dilarang membawa sound system, organ tunggal, dan alat musik lainnya.', '2023-08-04 11:10:36', '2023-08-04 11:10:36');

-- --------------------------------------------------------

--
-- Table structure for table `peraturans2`
--

CREATE TABLE `peraturans2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `isi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_booking`
--

CREATE TABLE `transaksi_booking` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_villa` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `notelp` varchar(255) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `total_bayar` decimal(10,2) NOT NULL,
  `metode_pembayaran` varchar(255) NOT NULL,
  `waktu_dibuat` timestamp NULL DEFAULT NULL,
  `waktu_diupdate` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `jumlah_dewasa` int(11) NOT NULL,
  `jumlah_anak` int(11) NOT NULL,
  `jumlah_balita` int(11) NOT NULL,
  `no_booking` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksi_booking`
--

INSERT INTO `transaksi_booking` (`id`, `id_villa`, `nama_lengkap`, `email`, `alamat`, `notelp`, `check_in`, `check_out`, `total_bayar`, `metode_pembayaran`, `waktu_dibuat`, `waktu_diupdate`, `updated_at`, `jumlah_dewasa`, `jumlah_anak`, `jumlah_balita`, `no_booking`) VALUES
(76, 47, 'rizkya', '6', '-', '08127712', '2024-08-28', '2024-08-29', 2000000.00, 'transfer_bank', '2024-08-27 02:08:49', '2024-08-27 02:08:49', NULL, 1, 2, 3, '202408001'),
(77, 49, 'alee', '4', 'akw', '01291', '2024-08-28', '2024-08-30', 8000000.00, 'transfer_bank', '2024-08-27 02:29:28', '2024-08-27 02:29:28', NULL, 1, 2, 1, '202408002'),
(78, 50, 'aw', '6', 'awaw', '9182182', '2024-08-28', '2024-08-29', 3000000.00, 'transfer_bank', '2024-08-27 02:33:15', '2024-08-27 02:33:15', NULL, 1, 2, 3, '202408003'),
(79, 50, 'kiaa', '3', '-', '08172718812', '2024-08-28', '2024-08-29', 3000000.00, 'transfer_bank', '2024-08-27 02:51:45', '2024-08-27 02:51:45', NULL, 1, 1, 1, '202408004'),
(80, 47, 'putri', '6', '-', '08172712', '2024-08-29', '2024-08-30', 2000000.00, 'transfer_bank', '2024-08-28 09:57:52', '2024-08-28 09:57:52', NULL, 1, 2, 3, '202408005');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 'admin', 'admin13@gmail.com', NULL, '$2y$10$KmiboQHyJaYLdnPA8TCIgu9fVqnf8mHLlqoIFdI1ZkvaAI1tfkG8.', NULL, '2023-12-07 02:24:43', '2023-12-07 02:24:43'),
(7, 'rizkya', 'rizkya@gmail.com', NULL, '$2y$10$7teeMirQ2V0WnAILpeFXt.kzQencBWRSA3vNaV9PChEU/Kk/FO3J.', NULL, '2024-08-07 05:42:26', '2024-08-07 05:42:26'),
(8, 'rizkya', 'rizkyayahya12@gmail.com', NULL, '$2y$10$QAgm3Nm5sVRvvY8Mr3aE.epGO8N0bFFDav/Aur0kexLvC7ycgGUXW', NULL, '2024-08-08 04:49:39', '2024-08-08 04:49:39');

-- --------------------------------------------------------

--
-- Table structure for table `vilas`
--

CREATE TABLE `vilas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_vila` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `jumlah_kasur` varchar(255) NOT NULL,
  `kapasitas` varchar(255) NOT NULL,
  `fasilitas` text NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `harga_weekend` decimal(10,2) DEFAULT NULL,
  `foto` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`foto`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `jumlah_kamar_mandi` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vilas`
--

INSERT INTO `vilas` (`id`, `nama_vila`, `lokasi`, `deskripsi`, `jumlah_kasur`, `kapasitas`, `fasilitas`, `harga`, `harga_weekend`, `foto`, `created_at`, `updated_at`, `jumlah_kamar_mandi`) VALUES
(47, 'FE-22', 'Dago', 'Villa cantik dengan harga yang SUPER MURAH!', 'Bedroom 4', '15 Orang', 'Kolam Renang, Barbeque Set, Wifi, Tv Kabel, Alat Masak Standar Lengkap, Alat Makan Standar Lengkap, Barbeque Set, Carport, Ruang Keluarga, Ruang Makan & Dapur, Kolam Renang Anak', 2000000.00, 3500000.00, '[\"vila_photos\\/1R62YfdEiKC0Qu1jF4unKGeTD0cLF8m7sXZ9UCLM.jpg\",\"vila_photos\\/8fZLYo6h3vLvwQPedqeyoPY5ZUa4m42IoFf4pNwc.jpg\",\"vila_photos\\/hrzWKkQXwlyxyIJFvtaXQArVhXllY6sFTYM33S6o.jpg\",\"vila_photos\\/uR3Ad7wiOF6IkpCnbuY50jNtzIPma2flPLq41H88.jpg\",\"vila_photos\\/oxr0uZyflAtWFenoYjPGmjej9zKroxDy3oIRveHB.jpg\",\"vila_photos\\/FO9HCbeKGzngiOXRcXqqfodbIbfgmywwGHob6Kxf.jpg\"]', '2024-08-08 04:51:25', '2024-08-14 04:58:16', 3),
(48, 'K-28', 'Dago', 'Luas dan lengkap, cocok untuk staycation bareng keluarga!', 'Bedroom 5', '20 Orang', 'Kolam Renang, Karaoke Room, Barbeque Set, Wifi, Tv Kabel, Alat Masak Standar Lengkap, Barbeque Set, Carport, Ruang Keluarga, Ruang Makan & Dapur, Kolam Renang Anak', 3750000.00, 6000000.00, '[\"vila_photos\\/3SHOaFP7LiZMdgYHeTslA3BApuWMtTAUfevOFuek.jpg\",\"vila_photos\\/J2F8xfHBuHf11GUgnP56w3ylsdQJ5NnoJJhi7RwQ.jpg\",\"vila_photos\\/2jinz0RvOm8pM9v22dQEvJj3WCvr3CwiMNHewAOd.jpg\",\"vila_photos\\/YxoQZQBoZ60JI5DNphwsHgPX9PCFDthtjm9Mfw0c.jpg\",\"vila_photos\\/VxqJj83QIkFJSQZTmiFLcgmz7i0b8aaMVE9wPNYD.jpg\",\"vila_photos\\/WMGvjVyJigyR71ABjZdGrCNav3S6zUNOCpJp7AAs.jpg\",\"vila_photos\\/16xvpO1Zc5Kw4lWYKfSlWieync4E3capS5K7tyTt.jpg\",\"vila_photos\\/GgMDp8YXvn88cH5bH6Ta0PWvTiRCzOaVsBaTwbIO.jpg\"]', '2024-08-14 04:56:31', '2024-08-14 04:56:31', 4),
(49, 'M-08', 'Dago', 'Villa dengan Private Pool dan Interior Mewah! Instragamable!!', 'Bedroom 1', '16 Orang', 'Barbeque Set, Carport, Ruang Keluarga, Ruang Makan & Dapur, Kolam Renang Anak', 4000000.00, 5500000.00, '[\"vila_photos\\/3oVLSulAudY1G6NBY9efLcp53dESYP1PYEJFeHca.jpg\",\"vila_photos\\/dGhb18y8MOSjHa1LWjL6Cws260T67iICeHWuCbvT.jpg\",\"vila_photos\\/E5G8gDLbFNFb1tvtIMbqNWpdLgZaEPFBrztoePMv.jpg\",\"vila_photos\\/7SpEcOcggJLCRs2XUraRO1ogcQjQDeWBpDD4M8cl.jpg\",\"vila_photos\\/9bOMZip8VGyum9XKMXVMjUwZQrXfVNicxnKn0RDg.jpg\",\"vila_photos\\/efKC8L1ygdLuJcW9pgIEjbFmFHo2rJqrMKr1WgVC.jpg\",\"vila_photos\\/gd0hsQDUnK32cwm9n1gFIIemU7msw2eTX4eVdMkP.jpg\",\"vila_photos\\/s7f9k4UGRjVVXDfeHD5xoBBSK9AAtIHqwU9QrU5U.jpg\",\"vila_photos\\/WR1QIUzWsWxDTCSgIkyzJKuYKHpxsK23W0r4cyg2.jpg\",\"vila_photos\\/WxnPe5toSmpHguzSKdxaHxZNifuAKPLIa7NP67K3.jpg\",\"vila_photos\\/gDqph0gnfRksqVwhk1Q80cFzIADlXooSuTpZl5lM.jpg\"]', '2024-08-14 05:04:07', '2024-08-14 05:05:00', 1),
(50, 'M-09', 'Dago', 'Villa Aesthetic dengan kolam renang air hangat indoor dan Meja Billiard!', 'Bedroom 3', '15 Orang', 'Kolam Renang, Barbeque Set, Wifi, Tv Kabel, Alat Masak Standar Lengkap, Alat Makan Standar Lengkap, Barbeque Set, Carport, Ruang Keluarga, Ruang Makan & Dapur, Kolam Renang Anak', 3000000.00, 4500000.00, '[\"vila_photos\\/9yJAApch7dQdxEV7wZSsfKUUpsH7eDPvPfx8REtV.jpg\",\"vila_photos\\/N5lpSwiAqHfPrby2kBf86ODphCxy28KB8GXd0MFP.jpg\",\"vila_photos\\/1NW492ds0eHXRyLplZ11IbcwmGbkLHR7Ck54RQ2n.jpg\",\"vila_photos\\/3f2d2d9TdKnSzjHv0o1ZmaVg42ZymiOMImRYXdMK.jpg\",\"vila_photos\\/tayEwXOIXEuInDuw4Z7Gzkh3elsof7dPK9PTQDXD.jpg\",\"vila_photos\\/2qkyg9UhkHu2xxe8m9ChGgKASYLZyb8Bm87i2nZj.jpg\",\"vila_photos\\/MAa01ilYxiIRDB5xmHTFuMbrG7UKDQSXEx1ijCFa.jpg\",\"vila_photos\\/uHrIPREV661aitVd0cwBy9GLIJEki6DaAmvuB8Bu.jpg\",\"vila_photos\\/76sTXNvNaKf5FVr91APmaddpktMfGmLjathNS4H5.jpg\"]', '2024-08-18 13:34:43', '2024-08-18 13:37:46', 3),
(51, 'M-26', 'Dago', 'Villa minimalis dengan View yang indah', 'Bedroom 2', '8 Orang', 'Alat Masak Standar Lengkap, Alat Makan Standar Lengkap, Barbeque Set, Carport, Ruang Keluarga, Ruang Makan & Dapur, Kolam Renang Anak', 850000.00, 1250000.00, '[\"vila_photos\\/eGBJaumrEWi1Mr3RNQEMC7wchUAEa85K2Ien9646.jpg\",\"vila_photos\\/7pYWdhN125LArfcJkptKEARyK0XV9iTJmmLOqtZE.jpg\",\"vila_photos\\/hef3vQmFcK37h5u3XzZvVpIRpIOqaLNxVcOzOTCV.jpg\",\"vila_photos\\/9yqNsFknbChw4Q9DzTqMRst3jhoHXPwj1e6ZmMWx.jpg\",\"vila_photos\\/NlXCpgTI84j24Ny4EHrzowxeeCHa6XP8S8pd1h1y.jpg\",\"vila_photos\\/7s5GcdVqy4KHYEiDsmEWzksPaMqTxVXGrRVy9YuD.jpg\",\"vila_photos\\/Qlc8UAuH2NTjWl6WqGSKaV2RvwHPWi9yEjaAwhvU.jpg\",\"vila_photos\\/VhIi2CqxZcpA2YEFgW6TpthMyeGofg6FlKGMRusI.jpg\",\"vila_photos\\/SU79lBxoZcSK7CEVRUHvrNb5wv9HbYyneerdBQlA.jpg\"]', '2024-08-20 03:54:31', '2024-08-20 03:55:38', 2),
(52, 'KB-5', 'Lembang', 'Villa dengan Private Pool', 'Bedroom 4', '15 Orang', 'Kolam Renang, Barbeque Set, Wifi, Tv Kabel, Alat Masak Standar Lengkap, Alat Makan Standar Lengkap, Barbeque Set, Carport, Ruang Keluarga, Ruang Makan & Dapur', 2750000.00, 4250000.00, '[\"vila_photos\\/hv1xUzYHalaA0y2AanWylXMX1TxBRdjnS0nqpdek.jpg\",\"vila_photos\\/MjtJ9q5PHpTAggEceerd4j2PXOj5XVtPn3JoNDtq.jpg\",\"vila_photos\\/eWbjV1EI304MLwnTJfReScBR6i1GjbcwZsZ8MIyY.jpg\",\"vila_photos\\/dASHpJYZwhx2l4yC8RWuC2IyEKhcMrOZmzDNFzTa.jpg\",\"vila_photos\\/GOl6zyA0bogNz0nheVS3fg39urcXV6k984MMlb2x.jpg\",\"vila_photos\\/Ive3hGw6zGeXJbUtw5m9TGWxK1pzPp1ZDAxu04x0.jpg\",\"vila_photos\\/mcU2Q4Z5lZl5EshfRghNRrCCSEJJbNhIA6r6kNfz.jpg\",\"vila_photos\\/sywjy8sNjMNYJPpADVCG3CM32BQwVsb7XVmEK3H9.jpg\",\"vila_photos\\/YhsQzmPFrURjJwgwyjYKiCFIchAhYKO6fQT1j2WA.jpg\",\"vila_photos\\/ry7P4WaDz0ALQroJhgXA3I5PnTZ6OjClj909mYDt.jpg\"]', '2024-08-20 04:23:15', '2024-08-20 04:23:15', 3),
(53, 'M-18', 'Dago', 'Villa dengan Kolam Air Hangat yang Pas Banget Buat Kalian yang Ingin Liburan Bersama Keluarga', 'Bedroom 4', '15 Orang', 'Kolam Renang Hangat, Barbeque Set, Wifi, Tv Kabel, Alat Masak Standar Lengkap, Alat Makan Standar Lengkap, Barbeque Set, Carport, Ruang Keluarga, Ruang Makan & Dapur, Kolam Renang Anak', 2750000.00, 4500000.00, '[\"vila_photos\\/QMAXhhVVPHoNYds7JsCoqwj3P4T0tUzVx5XukF0N.jpg\",\"vila_photos\\/wA6bR0oxUH32qjfK6vTLnhsKolJuCCivx3RwWPFL.jpg\",\"vila_photos\\/lMp7hkfErQ6i9OKd9pBsAsclGEvXXC882Vc5bxcE.jpg\",\"vila_photos\\/nq9HALBHOs3bWVPiTSZhR3b26qGomxfhk3Kp2EK4.jpg\",\"vila_photos\\/hDdWnQ3pnYUnTedSlHsvdspNA094d6XKzRbCUjpV.jpg\",\"vila_photos\\/4YteQ4SCSanJnFc6ohc0JvW3PyxNyjbceOyyW1us.jpg\",\"vila_photos\\/7WcTL5tAhjoqEjvVDYxciZ1l8s8yW5xb91CBPhFb.jpg\",\"vila_photos\\/kIfn9Jc95BtfWAcJEZbdQIriO2t9laNQoEhBOzHp.jpg\",\"vila_photos\\/4rx4DgDtN7XZvvJMKIZQEMApdVQZtwTj7FWRSnhN.jpg\",\"vila_photos\\/uitBZrxvmdRXbxtp6wmgZgZQh3aRIIS9FLu2L6xB.jpg\",\"vila_photos\\/9n8uClzdTeypVmixNMHtK5DiZiSNcTkTXufLRTWw.jpg\",\"vila_photos\\/5clBnfSl4WONYNgfFgxa79n8GeMT64HYkLgYfR6g.jpg\",\"vila_photos\\/w3IDZ6r4ZOZgWT4lN9Ffrgkz2kmhEUKdUmcZPVpK.jpg\",\"vila_photos\\/lv3oBxgY2paoiFwsMqKMN2ocQ5HchYbfeIG4qwlU.jpg\",\"vila_photos\\/JFCHt5A6LDLWwLO6RTBlYAM1Ms5RagroT8JqrMek.jpg\"]', '2024-08-20 04:26:25', '2024-08-20 04:26:25', 3),
(54, 'M-57', 'Dago', 'Villa dengan Private Pool dan Billiard', 'Bedroom 1', '15 Orang', 'Kolam Renang, Barbeque Set, Carport, Ruang Keluarga, Ruang Makan & Dapur, Kolam Renang Anak', 2500000.00, 3750000.00, '[\"vila_photos\\/3ZjblwsLwJJLhCWuB8cxoJCMSToWByHUtNOLpvpX.jpg\",\"vila_photos\\/58U0oDaZpW3s10w9qjzFZAtS1vFDAgNBbzdE9XhO.jpg\",\"vila_photos\\/rHlFS7lgC7bScxNj7C4lBYeYiS9xFbL83iT1QcK3.jpg\",\"vila_photos\\/r54zfLx9Ih9xyrdFEvvZzS6NzNAmAO9mIvmFSTv8.jpg\",\"vila_photos\\/TmFWMSn7wNdOE9GX1FmyWr6e0CH7scZiTRcFoELR.jpg\",\"vila_photos\\/VPIJqa6I1yY992SwCsp7Gw5Ft6CvvTLNzZbhNkKR.jpg\",\"vila_photos\\/X0CHfboi2lilN2OasOWsDBI84LF0zuO5TAItYuqv.jpg\",\"vila_photos\\/9s8eCwNk9qTdPPPepM2r6FqunHVwAINUJMw9I5dJ.jpg\",\"vila_photos\\/fVZb20INRfA3eQm7T1U4wxyi5LrirZxIVp5ceUiU.jpg\"]', '2024-08-20 04:29:41', '2024-08-20 04:29:41', 1),
(55, 'P-12A', 'Dago', 'Villa Cozy yang Cocok Banget Buat Kumpul sama Keluarga', 'Bedroom 5', '20 Orang', 'Kolam Renang, Wifi, Tv Kabel, Alat Masak Standar Lengkap, Alat Makan Standar Lengkap, Barbeque Set, Carport, Ruang Keluarga, Ruang Makan & Dapur', 2500000.00, 4250000.00, '[\"vila_photos\\/AvtmlRZgViDZzw8slLO9qmnL2xYsKJobd8oUxJUb.jpg\",\"vila_photos\\/UNtHhx6TJjagX5EaCUMrUoeprIq50DOUIQs6XRch.jpg\",\"vila_photos\\/JSv3CHiOLIWd44eEP41dG9KkFQ6SUUyJ7IdZ8VqG.jpg\",\"vila_photos\\/KsfdI1ZnE0yIHxWI0K09rH06DhdztjU80E85M6Jr.jpg\",\"vila_photos\\/o2I4sygJfddLjgA6tV73kVEiyuNEhsZ3c82DWfmp.jpg\",\"vila_photos\\/3gUF1XyzP9BBQyaz1NfeBVcGK3mt7KqqCxan5ECd.jpg\",\"vila_photos\\/VMx9WW1sVdPymp5C6cnwabwz2MMdyDCQadzBviiT.jpg\",\"vila_photos\\/BnRG8Rv6hWfWQRFWD2oXHUfJ6EeWqFMi8eRpyp20.jpg\",\"vila_photos\\/ysZIvqCDrOAfXgTfXX1dv52m6qpI9KCZtQNxrkSS.jpg\",\"vila_photos\\/AVb7FM7UJ8rtwpsDnz8pwDzp9qgjmJMC3mINl7pn.jpg\"]', '2024-08-20 04:33:13', '2024-08-20 04:33:13', 4),
(56, 'M-59', 'Dago', 'Villa Keluarga Yang Cocok Banget Buat Liburan', 'Bedroom 4', '20 Orang', 'Kolam Renang, Wifi, Tv Kabel, Alat Masak Standar Lengkap, Alat Makan Standar Lengkap, Barbeque Set, Carport, Ruang Keluarga, Ruang Makan & Dapur', 2750000.00, 4500000.00, '[\"vila_photos\\/IyuDs75T3igxgi81Kp5KXVudiLz5hHeAzOUqKP6M.jpg\",\"vila_photos\\/VsLisDvOujK1ItlCCUEonmX1cQ4TCIYoHMsCetKW.jpg\",\"vila_photos\\/fFTBeay0WiJrK06QsDjKxe8Yyrfqfm81CrsyuKRB.jpg\",\"vila_photos\\/Q3q6J2krBxLAJ723ItoEiPHss1GH0AZojpRoTSaN.jpg\",\"vila_photos\\/534o9UKPX851emhrwZOlQrdohtIEllVAvLlxUlar.jpg\",\"vila_photos\\/ijxBqdSV8RkGhnTJuv6x4tpraKnSq6McTCwoOES8.jpg\",\"vila_photos\\/IJ0YQ7JucGeyHUIq1NPA3fvCeXmSNISSpkFVUz72.jpg\",\"vila_photos\\/3kNIUzXulxHgmntPKESU8oTLZQVfivWRNsPFTZu7.jpg\",\"vila_photos\\/PnEe5aodvsnoIUHfKZKOCVcY74N8PKYzvGjDqd8Z.jpg\",\"vila_photos\\/wXznMrAh4oVUIp4oelhswzSFxY9tfyXgiKreQcux.jpg\",\"vila_photos\\/uCaQBGA7DSHOVRPcSYSCKqvLOQsOnrXpCy6iBC6h.jpg\",\"vila_photos\\/uiu6K8R4JLoFM9MfWBHxLjXEjEYECHTWmNDY0Ubb.jpg\",\"vila_photos\\/JcyclYyBL1UtBwCgjnZhWWpyTHmP7dCkEJNbwASU.jpg\",\"vila_photos\\/61HAYN8GmQqOxmrucLScNCmciJh8Ehrxmb2ea6OZ.jpg\",\"vila_photos\\/FfzP4MzzuiKyeAII0Q2arDdkzZqFKMoJdJQp8xxF.jpg\"]', '2024-08-20 04:38:39', '2024-08-20 04:38:39', 4),
(57, 'PG-28', 'Dago', 'Villa Cozy dengan Private Pool yang Cocok Banget Buat Liburan', 'Bedroom 3', '15 Orang', 'Kolam Renang, Karaoke Set, Wifi, Tv Kabel, Alat Masak Standar Lengkap, Alat Makan Standar Lengkap, Barbeque Set, Carport, Ruang Keluarga, Ruang Makan & Dapur, Kolam Renang Anak', 2250000.00, 3750000.00, '[\"vila_photos\\/ycCBB6CW4gD5jkLtdfSOZT3xC2sOtICIyxz510V2.jpg\",\"vila_photos\\/lVNyqG5SwBrGic24kyxGnq4P1ch7gdrNLvkPRFo4.jpg\",\"vila_photos\\/XMjVXnUoH5ODdohGQSMFQrYjIs2iAMAuFcsKiH3R.jpg\",\"vila_photos\\/CQCLwE9BWZrl8fhp3GAdKbZ1nXHx5pL4Y0lwYqu6.jpg\",\"vila_photos\\/jHgC87BBufJWF2magg5l8ZuTN8v8y2eQ4ou7ia5v.jpg\",\"vila_photos\\/dLSSgfZBukMNzU0NCv49V8tC4DCNEfNkGpRSY5E3.jpg\",\"vila_photos\\/RbIx989cwy50rm5NHEburoGEgIgQpZJ2jKPSJefC.jpg\",\"vila_photos\\/PbdmOis7vGRcd748rDeH9kMGmaj5LS8nfuKh7tXg.jpg\",\"vila_photos\\/nbgeGXX4RfY6hRj8BbVQf6CxHxTxy86rw6LcNLR4.jpg\",\"vila_photos\\/0nmxHKcUOomHmCQFXwVX6K9wkFNONNSeTve7c4Fz.jpg\",\"vila_photos\\/ghjvxl7NQAu1ppx4BRh5QJB5MzzItosKKgIBp5RZ.jpg\"]', '2024-08-20 04:42:48', '2024-08-20 04:42:48', 2),
(58, 'M-92', 'Dago', 'Villa di Bandung yang vibes nya Bali Banget', 'Bedroom 5', '20 Orang', 'Kolam Renang, Karaoke Set, Wifi, Tv Kabel, Alat Masak Standar Lengkap, Alat Makan Standar Lengkap, Barbeque Set, Carport, Ruang Keluarga, Ruang Makan & Dapur', 3750000.00, 5500000.00, '[\"vila_photos\\/SXMBNH8p5zQ3HNowL4bRuFl5tJESLxnf9L5Pw9Xj.jpg\",\"vila_photos\\/bONLWfkNjUxz4ZkXeAwcmvdbTDUlnOAZIiZaNRRg.jpg\",\"vila_photos\\/hYJKU8W6KTKmjmiLmrZJmQ9d6bKByBNOIOzvko9L.jpg\",\"vila_photos\\/nrjizplJaLOCSpmrNOwD8iJY1IpvPcCUoRebTH6X.jpg\",\"vila_photos\\/5Vvay7xW7O6wnS7fLxHj3TDmKzUuEsKMVEDZoCwE.jpg\",\"vila_photos\\/FYSgT5qdbWJGPTMrIcM2YEwTLzQqK4OjkwbhNCJ7.jpg\",\"vila_photos\\/mQD98rcOjqatnEGMUwMIcUFPo6CWirXXpkWKmPk4.jpg\",\"vila_photos\\/Xk77mXhgXMxdMA7BsKSWSRc8IcoGfQmqW7rwIPwg.jpg\",\"vila_photos\\/vDe41n3D8fyXV5aZI8F1ZfLZA26o5nQQPr9I56Y3.jpg\",\"vila_photos\\/dbFYwnZ3sDSwufVBfeoPSMyl1xzUd7c6DcNjQ87k.jpg\",\"vila_photos\\/nDZAY2FsFfITQeiPoOVB5auObSFEbsWzqLKmNAdA.jpg\",\"vila_photos\\/TpIRmolNo4FM9XWEKM9iWcktlHSD3RPYowK1qdXW.jpg\",\"vila_photos\\/ww4c0caITwLwxxsX91AExF4cfQ9mAxPzI4xNygSd.jpg\",\"vila_photos\\/FlbFn9ruApjia2jIxIUMXPLpyqcN2CKn7n8TgyQp.jpg\"]', '2024-08-20 04:50:45', '2024-08-20 04:50:45', 5),
(59, 'PR-31', 'Dago', 'Villa Cozy yang Cocok Buat Keluarga', 'Bedroom 4', '15 Orang', 'Kolam Renang, Wifi, Tv Kabel, Alat Masak Standar Lengkap, Alat Makan Standar Lengkap, Barbeque Set, Carport, Ruang Keluarga, Ruang Makan & Dapur', 2500000.00, 4000000.00, '[\"vila_photos\\/RbjTDwwH3nAzMUPC4xQDd0GpwbUAn1QSfR9cvdn8.jpg\",\"vila_photos\\/wy60txevyuaoYiwaIjApfRiXY6DT4xVTjaKPKlDr.jpg\",\"vila_photos\\/WSG1uZzbSxM1eaCXSBZjXG8YAhb5pe5xOh6UnSqL.jpg\",\"vila_photos\\/MdugeVdPuahpdolEbSM7xGadgxjPA9rs64JljgBZ.jpg\",\"vila_photos\\/vGJ2vkcq8NHbKc1t6We8Mys50msyNzYIlebz1Mls.jpg\",\"vila_photos\\/Kjleaty1rRd4mFG3b7jJuLqFQWZxF8Xcs5iDc9VX.jpg\",\"vila_photos\\/scD2JTLXIcw8q799Nqwyecf4wKWjEQbyIFBPXd2w.jpg\",\"vila_photos\\/k7NgMp7yZnZH1a7hderK8eo383LJbozxQ9OEOM9e.jpg\",\"vila_photos\\/JavIOAYjnfhGGjPuEsaZjFuoc3WfIsJyuyIL4xA2.jpg\",\"vila_photos\\/PKPQ8hDLxgAeE00daVtuCLekowwpVYs9E7KPQMVY.jpg\",\"vila_photos\\/kTIkTeFLQQv2Ws6CfnorvCdnVfpEQ59Q4TGzeHXF.jpg\",\"vila_photos\\/uzhXgcB7HeUNnnBFgBgkqHInUZ6zdn1nhcxETBjE.jpg\",\"vila_photos\\/1Yez6SZ0OaQsRaicLvTYUDQjSXvTsXTlBK3uw3tn.jpg\",\"vila_photos\\/T5aG4ErNOEVUjzdCcxgwAgWGqOjKqmNeIv6aU5zy.jpg\"]', '2024-08-20 04:56:09', '2024-08-20 04:56:09', 3),
(60, 'S-09', 'Lembang', 'Villa Industrial dan Modern', 'Bedroom 3', '15 Orang', 'Kolam Renang, Karaoke Set, Wifi, Tv Kabel, Alat Masak Standar Lengkap, Alat Makan Standar Lengkap, Barbeque Set, Carport, Ruang Keluarga, Ruang Makan & Dapur', 2750000.00, 4000000.00, '[\"vila_photos\\/TFyWm7Ex1J0iItctmirJbkhjB8yRG6kAdJgEiX7W.jpg\",\"vila_photos\\/xpNDCsnjjMW2V6ofOilRTJRHi9CPmXz0LF48aPP3.jpg\",\"vila_photos\\/dSlZHNhfCsOIhX06liFE0DqBOJth1Zag7glIowZH.jpg\",\"vila_photos\\/1gt6hIbMsVJH8DpTxYOFZsymZWcI0y6iWRrkibWN.jpg\",\"vila_photos\\/2yWjG1UPqW82bcWAhQ1X41JuPAxkczwPQnGyrkqL.jpg\",\"vila_photos\\/UuE4GKPUePqUNUWVs0qEXAJdQmO0430EqBFaoXwt.jpg\",\"vila_photos\\/9zaLK2c3qvpZYcD4E3YNX7JbUoPefRYYu6Q7F54p.jpg\",\"vila_photos\\/AD7ISQ8wDSDj4SweRPWPLinLgmvGHfumT5jIDAmV.jpg\",\"vila_photos\\/O59qgHdWk8tDHF2LLtrSlapNRkjzHaEyD6aVyasB.jpg\",\"vila_photos\\/niwjHfewfvBULBu4y2rz4nl8Ufqx2UHBrmq3h8GJ.jpg\",\"vila_photos\\/jC3UkJAyv7UKFpywmXyF5hehr0ol7CZXbdvMv3ZG.jpg\"]', '2024-08-20 05:00:13', '2024-08-20 05:00:13', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_user_id_unique` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
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
-- Indexes for table `pemesanan_vilas`
--
ALTER TABLE `pemesanan_vilas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pemesanan_vilas_vila_id_foreign` (`vila_id`);

--
-- Indexes for table `peraturandagos`
--
ALTER TABLE `peraturandagos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peraturans`
--
ALTER TABLE `peraturans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peraturans2`
--
ALTER TABLE `peraturans2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi_booking`
--
ALTER TABLE `transaksi_booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaksi_booking_id_villa_foreign` (`id_villa`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vilas`
--
ALTER TABLE `vilas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `pemesanan_vilas`
--
ALTER TABLE `pemesanan_vilas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `peraturandagos`
--
ALTER TABLE `peraturandagos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `peraturans`
--
ALTER TABLE `peraturans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `peraturans2`
--
ALTER TABLE `peraturans2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `transaksi_booking`
--
ALTER TABLE `transaksi_booking`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vilas`
--
ALTER TABLE `vilas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pemesanan_vilas`
--
ALTER TABLE `pemesanan_vilas`
  ADD CONSTRAINT `pemesanan_vilas_vila_id_foreign` FOREIGN KEY (`vila_id`) REFERENCES `vilas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transaksi_booking`
--
ALTER TABLE `transaksi_booking`
  ADD CONSTRAINT `transaksi_booking_id_villa_foreign` FOREIGN KEY (`id_villa`) REFERENCES `vilas` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
