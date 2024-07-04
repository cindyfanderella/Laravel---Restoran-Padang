-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jul 2024 pada 09.53
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
-- Database: `restoran_padang`
--

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
-- Struktur dari tabel `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_menu` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `foto` varchar(255) NOT NULL,
  `kategori` enum('makanan','minuman') NOT NULL,
  `ketersediaan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `menus`
--

INSERT INTO `menus` (`id`, `nama_menu`, `harga`, `deskripsi`, `foto`, `kategori`, `ketersediaan`, `created_at`, `updated_at`) VALUES
(1, 'Nasi Rendang Daging', 21000, 'Nasi putih yang disajikan dengan rendang daging sapi yang dimasak dalam bumbu rempah khas Padang. Dagingnya empuk dan bumbunya meresap sempurna, memberikan rasa gurih dan pedas yang khas.', 'storage/menu/nasi_rendang_daging.jpg', 'makanan', 19, '2024-07-03 11:16:51', '2024-07-03 11:26:25'),
(2, 'Nasi Rendang Ayam', 18000, 'Nasi putih yang disajikan dengan rendang ayam. Ayam dimasak dengan bumbu rendang yang kaya akan rempah, menghasilkan  cita rasa yang kaya, gurih, dan menggugah selera.', 'storage/menu/nasi_rendang_ayam.jpg', 'makanan', 20, '2024-07-03 11:16:51', '2024-07-03 11:16:51'),
(3, 'Nasi Gulai Tunjang', 15000, 'Nasi putih yang disajikan dengan gulai tunjang (tulang kaki sapi) yang dimasak dalam kuah santan yang kental dan kaya akan rempah. Sehingga menghasilkan rasa yang gurih dan lezat.', 'storage/menu/nasi_gulai_tunjang.jpg', 'makanan', 20, '2024-07-03 11:16:51', '2024-07-03 11:16:51'),
(4, 'Nasi Ayam Balado', 17500, 'Nasi putih yang disajikan dengan ayam balado. Ayam digoreng dan kemudian dimasak dengan sambal balado yang pedas dan menggugah selera. Balado adalah bumbu pedas khas Indonesia yang terbuat dari cabai dan bawang.', 'storage/menu/nasi_ayam_balado.jpg', 'makanan', 20, '2024-07-03 11:16:51', '2024-07-03 11:16:51'),
(5, 'Sate Padang', 25000, 'Sate khas Padang yang terbuat dari daging sapi atau ayam, disajikan dengan kuah kental yang terbuat dari tepung beras dan bumbu rempah. Memiliki cita rasa yang gurih dan sedikit pedas.', 'storage/menu/sate_padang.jpg', 'makanan', 19, '2024-07-03 11:16:51', '2024-07-03 11:26:25'),
(6, 'Teh', 5000, 'Minuman teh yang disajikan dengan hangat atau dicampurkan es batu serta tambahan gula.', 'storage/menu/teh.jpg', 'minuman', 25, '2024-07-03 11:16:51', '2024-07-03 11:16:51'),
(7, 'Jeruk', 6000, 'Minuman jeruk segar yang disajikan dengan hangat atau dicampurkan es batu serta tambahan gula.', 'storage/menu/jeruk.jpg', 'minuman', 25, '2024-07-03 11:16:51', '2024-07-03 11:16:51'),
(8, 'Air Mineral', 4000, 'Air putih segar yang tidak memiliki rasa atau tambahan apa pun.', 'storage/menu/air_mineral.jpg', 'minuman', 100, '2024-07-03 11:16:51', '2024-07-03 11:16:51'),
(9, 'Soda Gembira', 10000, 'Minuman dingin berkarbonasi dengan campuran es batu, susu, sirup, dan air soda yang memberikan sensasi segar dan efervesen di lidah.', 'storage/menu/soda_gembira.jpg', 'minuman', 25, '2024-07-03 11:16:51', '2024-07-03 11:16:51'),
(10, 'Susu', 8000, 'Minuman yang terbuat dari susu sapi yang kaya akan nutrisi.', 'storage/menu/susu.jpg', 'minuman', 25, '2024-07-03 11:16:51', '2024-07-03 11:16:51');

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
(1, '2024_06_27_000000_create_users_table', 1),
(2, '2024_06_27_100000_create_password_resets_table', 1),
(3, '2024_06_28_000000_create_failed_jobs_table', 1),
(4, '2024_06_28_000001_create_personal_access_tokens_table', 1),
(5, '2024_06_29_111418_create_menus_table', 1),
(6, '2024_06_29_111447_create_transaksis_table', 1),
(7, '2024_06_30_133344_create_rekap_transaksis_table', 1);

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
-- Struktur dari tabel `rekap_transaksis`
--

CREATE TABLE `rekap_transaksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transaksi_id` varchar(18) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `rekap_transaksis`
--

INSERT INTO `rekap_transaksis` (`id`, `transaksi_id`, `user_id`, `total_bayar`, `created_at`, `updated_at`) VALUES
(1, '2024070318_9373425', 4, 46000, '2024-07-03 11:26:25', '2024-07-03 11:26:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksis`
--

CREATE TABLE `transaksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transaksi_id` varchar(18) NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `pegawai_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaksis`
--

INSERT INTO `transaksis` (`id`, `transaksi_id`, `nama_pelanggan`, `user_id`, `menu_id`, `jumlah`, `total_harga`, `pegawai_id`, `created_at`, `updated_at`) VALUES
(1, '2024070318_9373425', 'Macca', 4, 5, 1, 25000, NULL, '2024-07-03 11:26:24', '2024-07-03 11:26:24'),
(2, '2024070318_9373425', 'Macca', 4, 1, 1, 21000, NULL, '2024-07-03 11:26:25', '2024-07-03 11:26:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `role` enum('admin','kasir','manajer','pelanggan') NOT NULL DEFAULT 'pelanggan',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `pass`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Macca', 'maccaa1', '$2y$10$/GgGW1oobTiYM/.hNbQJaOiLqbFoWYG40XNjopM7a6MmePwtpu7Ha', 'pass', 'admin', NULL, '2024-07-03 11:16:51', '2024-07-03 11:16:51'),
(2, 'Macca', 'maccaa2', '$2y$10$N.NgXDKh8ZYteLo/KPYEy.Yg8fN18EMv8CLyGOTLtAly1Po1cQgX2', 'pass', 'kasir', NULL, '2024-07-03 11:16:51', '2024-07-03 11:16:51'),
(3, 'Macca', 'maccaa3', '$2y$10$ZsJgXi27q26MXMxNS8MGY.XY2hjQQyObf8M98GG.vaOpM5srjFW6C', 'pass', 'manajer', NULL, '2024-07-03 11:16:51', '2024-07-03 11:16:51'),
(4, 'Macca', 'maccaa', '$2y$10$Xn76wFOlyBIHubW93Y5oROYggwBnkpmZ/5/mDQCTq/ML.piq6d8ma', 'pass', 'pelanggan', NULL, '2024-07-03 11:16:51', '2024-07-03 11:16:51');

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
-- Indeks untuk tabel `menus`
--
ALTER TABLE `menus`
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
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `rekap_transaksis`
--
ALTER TABLE `rekap_transaksis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksis`
--
ALTER TABLE `transaksis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaksis_user_id_foreign` (`user_id`),
  ADD KEY `transaksis_menu_id_foreign` (`menu_id`),
  ADD KEY `transaksis_pegawai_id_foreign` (`pegawai_id`);

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
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `rekap_transaksis`
--
ALTER TABLE `rekap_transaksis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `transaksis`
--
ALTER TABLE `transaksis`
  ADD CONSTRAINT `transaksis_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`),
  ADD CONSTRAINT `transaksis_pegawai_id_foreign` FOREIGN KEY (`pegawai_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `transaksis_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
