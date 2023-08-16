-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Agu 2023 pada 21.32
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

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
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `nama`, `username`, `password`) VALUES
(1, 'alex', 'admin', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
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
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan_vilas`
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
-- Struktur dari tabel `peraturandagos`
--

CREATE TABLE `peraturandagos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `isi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `peraturandagos`
--

INSERT INTO `peraturandagos` (`id`, `isi`, `created_at`, `updated_at`) VALUES
(2, 'asa', '2023-08-07 06:41:00', '2023-08-07 06:42:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peraturans`
--

CREATE TABLE `peraturans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `isi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `peraturans`
--

INSERT INTO `peraturans` (`id`, `isi`, `created_at`, `updated_at`) VALUES
(3, 'Jaminan ketersediaan Villa bisa dipastikan setelah DP minimal 50% dari total biaya menginap.', '2023-08-04 10:18:22', '2023-08-04 10:57:23'),
(4, 'Memberikan Foto KTP pada saat reservasi dan menyimpan KTP asli selama menginap.', '2023-08-04 10:18:32', '2023-08-04 10:58:41'),
(5, 'Penggunaan Villa untuk PESTA, ULANG TAHUN, PERNIKAHAN, AKAD, dan ACARA, TIDAK Diperbolehkan.', '2023-08-04 11:00:03', '2023-08-04 11:00:03'),
(6, 'Jumlah Kendaraan dilarang melebihi batas yang ditentukan.', '2023-08-04 11:00:31', '2023-08-04 11:00:31'),
(7, 'Dilarang membawa sound system, organ tunggal, dan alat musik lainnya.', '2023-08-04 11:10:36', '2023-08-04 11:10:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peraturans2`
--

CREATE TABLE `peraturans2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `isi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `reviews`
--

INSERT INTO `reviews` (`id`, `photo`, `created_at`, `updated_at`) VALUES
(4, '1691158612.jpeg', '2023-08-04 07:16:52', '2023-08-04 07:16:52'),
(5, '1691159415.jpeg', '2023-08-04 07:30:15', '2023-08-04 07:30:15'),
(7, '1691162396.jpeg', '2023-08-04 08:19:56', '2023-08-04 08:19:56'),
(8, '1691162415.jpeg', '2023-08-04 08:20:15', '2023-08-04 08:20:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_booking`
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
  `jumlah_balita` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaksi_booking`
--

INSERT INTO `transaksi_booking` (`id`, `id_villa`, `nama_lengkap`, `email`, `alamat`, `notelp`, `check_in`, `check_out`, `total_bayar`, `metode_pembayaran`, `waktu_dibuat`, `waktu_diupdate`, `updated_at`, `jumlah_dewasa`, `jumlah_anak`, `jumlah_balita`) VALUES
(39, 28, 'a', '5', 'q', '2222222222', '2023-01-02', '2023-01-03', 100000.00, 'transfer_bank', '2023-08-07 08:48:38', '2023-08-07 08:48:38', NULL, 1, 3, 1),
(40, 25, 'a', '16', 'asda', '121212', '2023-01-02', '2023-01-04', 250.00, 'transfer_bank', '2023-08-07 08:54:08', '2023-08-07 08:54:08', NULL, 12, 1, 3),
(41, 18, 'asep permana', '6', '-', '08987654321', '2023-08-08', '2023-08-09', 590000.00, 'transfer_bank', '2023-08-07 11:17:16', '2023-08-07 11:17:16', NULL, 2, 1, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'putri', 'admin@gmail.com', NULL, '$2y$10$36LhArkLghKyOCDLy86GZ.5jQEVQX1OQ/ExxVMG0G4gKywd0QQjV.', NULL, '2023-07-25 00:23:44', '2023-07-29 04:55:30'),
(3, 'ALLINSTUDIO', 'allinstudio@gmail.com', NULL, '$2y$10$uuSlW.BTxQpEDxWJoYSFXO09p87.9FC0bVNWY1dM8HdbUoEfLHJ5.', NULL, '2023-07-25 10:33:35', '2023-07-25 10:33:35'),
(4, 'spongebob', 'petrik123@gmail.com', NULL, '$2y$10$uoMBrfjvjvr2zB.50AxdSOzApoIweIJ73hiYOTjDq8VgZaluaK8ja', NULL, '2023-07-28 11:36:35', '2023-07-28 11:38:04'),
(5, 'as', 'as@gmail.com', NULL, '$2y$10$bEKJSNyCU/HYLImP7ElSSOYvlUTW0E24Phdzej8gLEJb6g1chEg9u', NULL, '2023-08-04 06:42:23', '2023-08-04 06:42:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `vilas`
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
  `harga_weekend` decimal(10,2) DEFAULT NULL,
  `foto` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`foto`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `jumlah_kamar_mandi` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `vilas`
--

INSERT INTO `vilas` (`id`, `nama_vila`, `alamat_lengkap`, `lokasi`, `deskripsi`, `jumlah_kasur`, `kapasitas`, `fasilitas`, `harga`, `harga_weekend`, `foto`, `created_at`, `updated_at`, `jumlah_kamar_mandi`) VALUES
(18, 'villa teu kahajaa', 'poho deui', 'poho nyaeta', 'bebas asal sopan', '2 kasur king, 1 kasur single bad', '5 orang', 'secukupnya', 590000.00, 600000.00, '[\"vila_photos\\/dIXYATEACTFpwIXpG5QQAJ4lm8ll5XIUcrh8NfJo.jpg\"]', '2023-07-28 00:46:19', '2023-07-30 07:14:57', 3),
(22, 'Villa Acaw', 'Jl.pesantren', 'cimahi', 'awawd', 'Kamar 2 Ruang tamu 1', '1', 'Meroko', 123456.00, NULL, '[\"vila_photos\\/QAAd4Br1jxcxhzF5D0kpPskWb63WOl8FWLB4wcRw.jpg\"]', '2023-07-29 00:46:37', '2023-07-29 00:46:37', 2),
(23, 'Vilaause', 'cigugur tengah', 'Ciwaruga', 'tidak tahu', 'Kamar 2 Ruang tamu 1', '2', 'Masak', 700.00, NULL, '[\"vila_photos\\/Xv2aWUALcGUBBG0Mw5dtAAd4OgyQV8fUyTUSoRNW.jpg\"]', '2023-07-30 05:31:17', '2023-07-30 05:31:17', 1),
(25, 'Villa Bandung', 'Jl.Aceh', 'Dago', 'daadawd', 'Kamar 2 Ruang tamu 1', '2', 'Meroko', 125.00, 150.00, '[\"vila_photos\\/V3pFAWjS0wjwGEW1StxLDVceRfW6nsqbGnWogutq.jpg\",\"vila_photos\\/FltI62u3xW0ryxvMyIrBUHfH2ngExvlCV2LSg6ap.jpg\",\"vila_photos\\/imH24CGCjlt2TCyRNQ38RbMChdrdn1HAx9jhhSR3.jpg\",\"vila_photos\\/jyNVYmWsOT2By7kHJwF0qxppf0GyXH0zglVuvgCe.jpg\"]', '2023-07-30 07:16:02', '2023-08-07 05:15:05', 2),
(28, 'Villa Malam', 'jl subang nannjak no 70', 'Lembang', 'vila nyaman dan bebas dah', '2 kasur king, 1 kasur single bad', '5 orang', 'lengkap', 100000.00, 175000.00, '[\"vila_photos\\/JNmMMWiJCMX925mYJMkFPTzuzWtE33YexBHVMWgE.png\"]', '2023-08-04 05:33:22', '2023-08-07 05:14:29', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_user_id_unique` (`user_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `pemesanan_vilas`
--
ALTER TABLE `pemesanan_vilas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pemesanan_vilas_vila_id_foreign` (`vila_id`);

--
-- Indeks untuk tabel `peraturandagos`
--
ALTER TABLE `peraturandagos`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `peraturans`
--
ALTER TABLE `peraturans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `peraturans2`
--
ALTER TABLE `peraturans2`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi_booking`
--
ALTER TABLE `transaksi_booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaksi_booking_id_villa_foreign` (`id_villa`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `vilas`
--
ALTER TABLE `vilas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `pemesanan_vilas`
--
ALTER TABLE `pemesanan_vilas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `peraturandagos`
--
ALTER TABLE `peraturandagos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `peraturans`
--
ALTER TABLE `peraturans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `peraturans2`
--
ALTER TABLE `peraturans2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `transaksi_booking`
--
ALTER TABLE `transaksi_booking`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `vilas`
--
ALTER TABLE `vilas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pemesanan_vilas`
--
ALTER TABLE `pemesanan_vilas`
  ADD CONSTRAINT `pemesanan_vilas_vila_id_foreign` FOREIGN KEY (`vila_id`) REFERENCES `vilas` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transaksi_booking`
--
ALTER TABLE `transaksi_booking`
  ADD CONSTRAINT `transaksi_booking_id_villa_foreign` FOREIGN KEY (`id_villa`) REFERENCES `vilas` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
