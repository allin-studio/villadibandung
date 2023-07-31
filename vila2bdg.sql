-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2023 at 11:19 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

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
(20, '2023_07_31_030415_add_updated_at_to_transaksi_booking_table', 8);

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksi_booking`
--

INSERT INTO `transaksi_booking` (`id`, `id_villa`, `nama_lengkap`, `email`, `alamat`, `notelp`, `check_in`, `check_out`, `total_bayar`, `metode_pembayaran`, `waktu_dibuat`, `waktu_diupdate`, `updated_at`) VALUES
(1, 17, 'ardii fajar maulanaq', 'ardi@gmail.com', 'wkjfkqwfgqw', '08987654321', '2024-01-01', '2024-01-02', '500000.00', 'transfer_bank', '2023-07-30 11:27:50', '2023-07-30 11:27:50', '2023-07-31 01:25:50'),
(5, 18, 'a', 'admin@gmail.com', 'a', '08765432158', '2024-01-01', '2024-01-03', '1180000.00', 'transfer_bank', '2023-07-30 11:33:33', '2023-07-30 11:33:33', NULL),
(6, 19, 'b', 'b@gmail.com', 'b', '08956231478', '2024-01-05', '2024-01-08', '3000000.00', 'transfer_bank', '2023-07-30 11:35:21', '2023-07-30 11:35:21', NULL),
(10, 18, 'ardi aja', 'apaajalah@gmail.com', 'dimana weh', '0898744564211', '2023-08-01', '2023-08-02', '590000.00', 'transfer_bank', '2023-07-30 20:47:41', '2023-07-30 20:47:41', NULL),
(11, 17, 'alllinstudio', 'allinstudio@gmail.com', 'Jl.cilengkrang', '087212121123', '2023-07-31', '2023-08-01', '500000.00', 'kartu_kredit', '2023-07-30 22:38:46', '2023-07-30 22:38:46', NULL),
(12, 18, 'petrik', 'allinstudio@gmail.com', 'cigugur tengah', '1000000', '2023-07-31', '2023-08-01', '590000.00', 'kartu_kredit', '2023-07-30 23:36:10', '2023-07-30 23:36:10', NULL),
(13, 18, 'rizkyaaa', 'rizkyayahya13@gmail.com', 'cigugur tengah', '087822611896', '2023-08-01', '2023-08-02', '590000.00', 'kartu_kredit', '2023-07-30 23:52:42', '2023-07-30 23:52:42', NULL),
(14, 17, 'asep uho', 'asepuho12@gmail.com', 'Jl.cigugur tengah', '082115149955', '2023-08-01', '2023-08-02', '500000.00', 'kartu_kredit', '2023-07-31 00:06:15', '2023-07-31 00:06:15', NULL);

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
(1, 'putri', 'admin@gmail.com', NULL, '$2y$10$36LhArkLghKyOCDLy86GZ.5jQEVQX1OQ/ExxVMG0G4gKywd0QQjV.', NULL, '2023-07-25 00:23:44', '2023-07-29 04:55:30'),
(3, 'ALLINSTUDIO', 'allinstudio@gmail.com', NULL, '$2y$10$uuSlW.BTxQpEDxWJoYSFXO09p87.9FC0bVNWY1dM8HdbUoEfLHJ5.', NULL, '2023-07-25 10:33:35', '2023-07-25 10:33:35'),
(4, 'spongebob', 'petrik123@gmail.com', NULL, '$2y$10$uoMBrfjvjvr2zB.50AxdSOzApoIweIJ73hiYOTjDq8VgZaluaK8ja', NULL, '2023-07-28 11:36:35', '2023-07-28 11:38:04');

-- --------------------------------------------------------

--
-- Table structure for table `vilas`
--

CREATE TABLE `vilas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_vila` varchar(255) NOT NULL,
  `alamat_lengkap` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `jumlah_kasur` varchar(255) NOT NULL,
  `kapasitas` varchar(255) NOT NULL,
  `fasilitas` text NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `foto` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`foto`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `jumlah_kamar_mandi` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vilas`
--

INSERT INTO `vilas` (`id`, `nama_vila`, `alamat_lengkap`, `lokasi`, `deskripsi`, `jumlah_kasur`, `kapasitas`, `fasilitas`, `harga`, `foto`, `created_at`, `updated_at`, `jumlah_kamar_mandi`) VALUES
(17, 'Villa Naonn', 'kp salak busuk', 'kuburan', 'horor abiss', 'keranda', '1 orang', 'cari sendiri', '500000.00', '[\"vila_photos\\/0QswuQXPIMGoD633VolncVP7KyS8NHVKLMCO7M5o.jpg\"]', '2023-07-28 00:45:07', '2023-07-31 01:51:37', 3),
(18, 'villa teu kahajaa', 'poho deui', 'poho nyaeta', 'bebas asal sopan', '2 kasur king, 1 kasur single bad', '5 orang', 'secukupnya', '590000.00', '[\"vila_photos\\/dIXYATEACTFpwIXpG5QQAJ4lm8ll5XIUcrh8NfJo.jpg\"]', '2023-07-28 00:46:19', '2023-07-30 07:14:57', 3),
(19, 'vila lapang bola', 'gedebage', 'depan masjid al jabbar', 'luas', '5 kasur besar 2 kasur kecil', '100 orang', 'bebas', '1000000.00', '[\"vila_photos\\/732R4CU39bacryziaiECDl98CszZQ0ksJ59vCfT1.jpg\",\"vila_photos\\/nw9oLpSa66H8hvyoZDxjHYGapE1YIQwtgSkzCFcT.jpg\",\"vila_photos\\/ZUkRjOTPpr56ZFmY1GgXIOCJZF7metLqnpNw880b.jpg\"]', '2023-07-28 00:47:24', '2023-07-28 00:47:24', 3),
(20, 'Villa Itenas', 'Jl.Pahlawan', 'Cikutra', 'teuing', 'Kamar 2 Ruang tamu 1', '3', 'Boleh ngerokok', '159.00', '[\"vila_photos\\/wxlxD9IoadqtOX3jKFK9liOev7jd7cedDqCCLjkP.jpg\"]', '2023-07-28 11:25:15', '2023-07-28 11:25:15', 2),
(21, 'Villa Amburadul', 'Astana anyar', 'Tegalega', 'teuing', 'Kamar 2 Ruang tamu 1', '1', 'kompor', '1259999.00', '[\"vila_photos\\/wLVxnlAkjuVSVl4kpvQr33OSyHLQ6WnYGRAeCh4K.jpg\"]', '2023-07-28 11:32:48', '2023-07-28 11:32:49', 1),
(22, 'Villa Acaw', 'Jl.pesantren', 'cimahi', 'awawd', 'Kamar 2 Ruang tamu 1', '1', 'Meroko', '123456.00', '[\"vila_photos\\/QAAd4Br1jxcxhzF5D0kpPskWb63WOl8FWLB4wcRw.jpg\"]', '2023-07-29 00:46:37', '2023-07-29 00:46:37', 2),
(23, 'Vilaause', 'cigugur tengah', 'Ciwaruga', 'tidak tahu', 'Kamar 2 Ruang tamu 1', '2', 'Masak', '700.00', '[\"vila_photos\\/Xv2aWUALcGUBBG0Mw5dtAAd4OgyQV8fUyTUSoRNW.jpg\"]', '2023-07-30 05:31:17', '2023-07-30 05:31:17', 1),
(25, 'Villa Bandung', 'Jl.Aceh', 'Bandung', 'daadawd', 'Kamar 2 Ruang tamu 1', '2', 'Meroko', '125.00', '[\"vila_photos\\/V3pFAWjS0wjwGEW1StxLDVceRfW6nsqbGnWogutq.jpg\",\"vila_photos\\/FltI62u3xW0ryxvMyIrBUHfH2ngExvlCV2LSg6ap.jpg\",\"vila_photos\\/imH24CGCjlt2TCyRNQ38RbMChdrdn1HAx9jhhSR3.jpg\",\"vila_photos\\/jyNVYmWsOT2By7kHJwF0qxppf0GyXH0zglVuvgCe.jpg\"]', '2023-07-30 07:16:02', '2023-07-30 07:16:02', 2);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pemesanan_vilas`
--
ALTER TABLE `pemesanan_vilas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi_booking`
--
ALTER TABLE `transaksi_booking`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vilas`
--
ALTER TABLE `vilas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

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
