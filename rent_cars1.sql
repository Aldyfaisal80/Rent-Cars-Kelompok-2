-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jul 2024 pada 06.54
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rent_cars1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('356a192b7913b04c54574d18c28d46e6395428ab', 'i:2;', 1719892444),
('356a192b7913b04c54574d18c28d46e6395428ab:timer', 'i:1719892444;', 1719892444);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
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
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_06_28_062138_create_mobils_table', 1),
(5, '2024_06_28_062225_create_transaksis_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobils`
--

CREATE TABLE `mobils` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nopolisi` varchar(255) NOT NULL,
  `merk` varchar(255) DEFAULT NULL,
  `jenis` enum('BMW','Ferrari','Lamborghini') DEFAULT NULL,
  `harga` varchar(255) DEFAULT NULL,
  `foto` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mobils`
--

INSERT INTO `mobils` (`id`, `user_id`, `nopolisi`, `merk`, `jenis`, `harga`, `foto`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'AB 7890 STU', 'i4 G26', 'BMW', '750000', 'lYlby5uRUUejhMmTu745E1miuy3kSy4hAISJkj73.png', '2024-06-30 09:08:44', '2024-06-30 09:08:44', NULL),
(2, 1, 'D 1122 MNO', 'i7 G70', 'BMW', '750000', '3LqQ8cZBkY2GcF4V58X1Ckg8aXnhHN3ci0B4cKvg.png', '2024-06-30 09:09:12', '2024-06-30 09:09:12', NULL),
(3, 1, 'B 1234 RFS', 'M2 Coupe', 'BMW', '780000', 'zTilEljkTZv8Ch6ccjd2i5M7w4EZrrLD6VzuVi4r.png', '2024-06-30 09:09:50', '2024-06-30 09:09:50', NULL),
(4, 1, 'L 4567 YZA', 'M3 CS', 'BMW', '700000', 'JowlhN1hB4Q77T92NKy5YTh2D0Ca5FL3d9qRkd9F.png', '2024-06-30 09:14:07', '2024-06-30 09:14:07', NULL),
(5, 1, 'L 8901 BCD', '812 Competizione A', 'Ferrari', '750000', 'QOZTLVtNllTwjsL6iaixw5njN1jefxi51IENJ785.png', '2024-06-30 09:14:39', '2024-06-30 09:14:39', NULL),
(6, 1, 'B 1122 MNO', 'Daytona SP3', 'Ferrari', '980000', 'B8xS29HHRR6PWKqHroonpiva55oqJ1cJWLof3Wtr.png', '2024-06-30 09:15:48', '2024-06-30 09:15:48', NULL),
(7, 1, 'B 2233 VWX', 'LaFerrari 2013', 'Ferrari', '890000', 'FvuEHMhVC4ZF5QOWDQxEdEvzkt7DniudrARqwmRe.png', '2024-06-30 09:16:18', '2024-06-30 09:16:18', NULL),
(8, 1, 'D 1122 MNO', 'SF90 XX Stradale', 'Ferrari', '890000', 'un8IitttizLkAk4MgkcHsueO57Ce84irqvjM0oBz.png', '2024-06-30 09:16:47', '2024-06-30 09:16:47', NULL),
(9, 1, 'D 7890 STU', 'Aventador', 'Lamborghini', '1000000', 'nq1x5lb62YIFCeMMUqdhDunMx2wlVgCCgZ5ETQzq.png', '2024-06-30 09:17:18', '2024-06-30 09:17:18', NULL),
(10, 1, 'D 8899 HIJ', 'Huracan Evo', 'Lamborghini', '1300000', 'VttcRWrJ1XRiqRuXuECR7VYntejBwLij84j8WiSJ.png', '2024-06-30 09:17:53', '2024-06-30 09:17:53', NULL),
(11, 1, 'D 5566 YZA', 'Huracan Sterrato', 'Lamborghini', '940000', 'e0uQTvjDOmqJiJicKXh2mIp7YtO8jJvRFiXcEH1c.png', '2024-06-30 09:19:42', '2024-06-30 09:19:42', NULL),
(12, 1, 'AB 6677 BCD', 'Revuelto', 'Lamborghini', '1200000', 'QbHjWp3erqhyt7vghzJ3O8Dp01PEuyPmb8JyCLGH.png', '2024-06-30 09:20:41', '2024-06-30 09:20:41', NULL),
(13, 1, '1', 'sipder', 'BMW', '300', 'xTU7syiI2gsw6BmPG6ovBF7VGADDZO6fOk2jbzho.png', '2024-07-01 20:53:16', '2024-07-01 20:53:16', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('N5Uw2wlV340bBmzRrEluXCNkAyPFTDoMBM0HAydd', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiY2k5aVA2bUhGTnRLUXI2QzNDNGdzV2h5ZjY3REt3cFNTWWpzTUhtRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tb2JpbCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1719892421);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksis`
--

CREATE TABLE `transaksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `mobil_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `ponsel` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `lama` varchar(255) DEFAULT NULL,
  `tgl_pesan` date DEFAULT NULL,
  `total` varchar(255) DEFAULT NULL,
  `status` enum('WAIT','PROSES','SELESAI') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaksis`
--

INSERT INTO `transaksis` (`id`, `user_id`, `mobil_id`, `nama`, `ponsel`, `alamat`, `lama`, `tgl_pesan`, `total`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, 1, 'eka', '505129394929', 'Blitar', '3', '2024-07-05', '2250000', 'SELESAI', '2024-07-01 20:24:31', '2024-07-01 20:27:37', NULL),
(2, 3, 3, 'Tono', '50384104801', 'Blitar', '3', '2024-07-05', '2340000', 'WAIT', '2024-07-01 20:26:07', '2024-07-01 20:26:07', NULL),
(3, 4, 6, 'Tono', '9572030', 'Blitar', '3', '2024-07-05', '2940000', 'WAIT', '2024-07-01 20:29:16', '2024-07-01 20:29:16', NULL);

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
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ALDY IBNU FAIZAL', 'aldyfaisal80@gmail.com', NULL, '$2y$12$7sXxks9bKlP8xzY.d8WZMOd5wbn2/i30h3Cxr3RbdICvrzu4iMrom', 'admin', NULL, '2024-06-30 09:03:38', '2024-06-30 09:03:38'),
(2, 'user', 'user@example.com', NULL, '$2y$12$FYvxtEaS5oLNGeQKXBzkZu42XjS5.2T6WrCe.UmAHxWlmjLRKvFNO', 'user', NULL, '2024-07-01 18:10:30', '2024-07-01 18:10:30'),
(3, 'user2', 'user2@example.com', NULL, '$2y$12$Ade91gh4NofcvLFd/lJts.0Ab/TRDIoV/TM/UfQp4Bb1iUj3aIXby', 'user', NULL, '2024-07-01 20:23:46', '2024-07-01 20:23:46'),
(4, 'user3', 'user3@example.com', NULL, '$2y$12$z38CbRFhUJfm24h3ygLleu9Sv5gnJDZusCtGMmkUDfbwkeIP.t/a.', 'user', NULL, '2024-07-01 20:28:33', '2024-07-01 20:28:33');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mobils`
--
ALTER TABLE `mobils`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `transaksis`
--
ALTER TABLE `transaksis`
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
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `mobils`
--
ALTER TABLE `mobils`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
