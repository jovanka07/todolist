-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Agu 2021 pada 16.11
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latihan-lks`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `boards`
--

CREATE TABLE `boards` (
  `id` int(11) NOT NULL,
  `creator_id` bigint(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `boards`
--

INSERT INTO `boards` (`id`, `creator_id`, `name`, `created_at`, `updated_at`) VALUES
(31, 1, 'Jadwal Pelajaran', '2021-07-10 03:58:01', '2021-07-10 03:58:01'),
(33, 1, 'belanja', '2021-07-10 04:00:07', '2021-07-10 04:00:07'),
(34, 6, 'Film Favorite', '2021-07-10 06:39:54', '2021-07-10 06:39:54'),
(36, 6, 'Buku Favorite', '2021-07-10 06:44:00', '2021-07-10 06:44:36'),
(38, 7, 'n', '2021-08-09 07:08:14', '2021-08-09 07:08:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `boards_list`
--

CREATE TABLE `boards_list` (
  `id` int(11) NOT NULL,
  `board_id` bigint(20) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `boards_list`
--

INSERT INTO `boards_list` (`id`, `board_id`, `order`, `name`, `created_at`, `updated_at`) VALUES
(30, 31, 1, 'Senins', '2021-07-10 03:58:21', '2021-07-10 03:58:26'),
(33, 34, 1, 'Romance', '2021-07-10 06:40:29', '2021-07-10 06:40:29'),
(34, 34, 2, 'Action', '2021-07-10 06:42:40', '2021-07-10 06:42:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `board_member`
--

CREATE TABLE `board_member` (
  `id` int(11) NOT NULL,
  `board_id` bigint(20) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `board_member`
--

INSERT INTO `board_member` (`id`, `board_id`, `user_id`, `created_at`, `updated_at`) VALUES
(12, 31, 1, '2021-07-10 03:58:01', '2021-07-10 03:58:01'),
(14, 33, 1, '2021-07-10 04:00:08', '2021-07-10 04:00:08'),
(16, 34, 6, '2021-07-10 06:39:54', '2021-07-10 06:39:54'),
(18, 36, 6, '2021-07-10 06:44:00', '2021-07-10 06:44:00'),
(20, 38, 7, '2021-08-09 07:08:14', '2021-08-09 07:08:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cards`
--

CREATE TABLE `cards` (
  `id` int(11) NOT NULL,
  `list_id` bigint(20) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `task` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cards`
--

INSERT INTO `cards` (`id`, `list_id`, `order`, `task`, `created_at`, `updated_at`) VALUES
(39, 24, 1, 'test', '2021-07-10 02:41:22', '2021-07-10 02:41:22'),
(40, 25, 1, 'm', '2021-07-10 02:41:34', '2021-07-10 02:41:34'),
(42, 27, 1, 'asas', '2021-07-10 03:43:01', '2021-07-10 03:49:12'),
(44, 30, 1, 'ss', '2021-07-10 03:59:19', '2021-07-10 03:59:35'),
(46, 33, 1, 'Something In Beetwen', '2021-07-10 06:40:43', '2021-07-10 06:40:43'),
(47, 33, 2, 'One Fine Day', '2021-07-10 06:41:03', '2021-07-10 06:42:16'),
(48, 34, 1, 'Avenger Endgame', '2021-07-10 06:42:52', '2021-07-10 06:42:52');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

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
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jovanka', 'alexandro', 'jovan', NULL, '$2y$10$1pJVeG0HXJ3Wp6PZ1g20meKWK326ftOQ9JFoMPx.3j3b91O.NdGQm', NULL, '2021-07-08 20:05:31', '2021-07-08 20:05:31'),
(2, 'Vannesa', 'Aurellya', 'vannesa', NULL, '$2y$10$B4UTf6mRuAiUYkgzfm.KEeRtVPCzAmysAh0ftgbY68sj9zq1J3Sha', NULL, '2021-07-09 08:54:34', '2021-07-09 08:54:34'),
(3, 'Alex', 'Jopan', 'alex', NULL, '$2y$10$3ICjHbmwqqhOuciOO7gQHOC86VwP/ckXSKhM5IEhM/U9td5e6SLie', NULL, '2021-07-09 08:55:09', '2021-07-09 08:55:09'),
(4, 'Jop', 'alex', 'jopp', NULL, '$2y$10$sh3.JbQ8uiJpSeL0UcsE4e6kR8PrDAudquIORi5ZaDEUwoC.t24ia', NULL, '2021-07-09 16:54:03', '2021-07-09 16:54:03'),
(5, 'coba', 'coba', 'coba', NULL, '$2y$10$ADIm7k65SGr3f.igMkpKt.8hPs5yJe03dcc3QTwJVvqU8Or8CdNrS', NULL, '2021-07-09 17:11:29', '2021-07-09 17:11:29'),
(6, 'Leman', 'Maulana', 'leman', NULL, '$2y$10$wGNgFLQ2TgTp.ry3jGe96ujUQuR0V8LUlmkrBJliWHsKQU9uQ/1di', NULL, '2021-07-10 06:38:38', '2021-07-10 06:38:38'),
(7, 'jojp', 'jass', 'jop123', NULL, '$2y$10$ZKcjNQfGq35VeMJxNFo3lOwsCAb4.4uQ/CJqy5F1mUkwcXMrnF2kS', NULL, '2021-08-09 07:08:01', '2021-08-09 07:08:01');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `boards`
--
ALTER TABLE `boards`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `boards_list`
--
ALTER TABLE `boards_list`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `board_member`
--
ALTER TABLE `board_member`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `boards`
--
ALTER TABLE `boards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `boards_list`
--
ALTER TABLE `boards_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `board_member`
--
ALTER TABLE `board_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
