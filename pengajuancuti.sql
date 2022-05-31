-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Bulan Mei 2022 pada 19.50
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengajuancuti`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ajukan_cuti`
--

CREATE TABLE `ajukan_cuti` (
  `id` int(11) NOT NULL,
  `nama_pegawai` varchar(100) CHARACTER SET latin1 NOT NULL,
  `nip` varchar(50) CHARACTER SET latin1 NOT NULL,
  `pangkat` varchar(50) CHARACTER SET latin1 NOT NULL,
  `jabatan` varchar(50) CHARACTER SET latin1 NOT NULL,
  `kab_kota` varchar(50) CHARACTER SET latin1 NOT NULL,
  `unit_kerja` varchar(100) CHARACTER SET latin1 NOT NULL,
  `mulai_tgl` timestamp NULL DEFAULT NULL,
  `akhir_tgl` timestamp NULL DEFAULT NULL,
  `alamat` varchar(100) CHARACTER SET latin1 NOT NULL,
  `jk` varchar(12) CHARACTER SET latin1 NOT NULL,
  `jenis_cuti` varchar(50) CHARACTER SET latin1 NOT NULL,
  `ket_cuti` varchar(100) CHARACTER SET latin1 NOT NULL,
  `no_hp` varchar(50) CHARACTER SET latin1 NOT NULL,
  `blanko` varchar(100) CHARACTER SET latin1 NOT NULL,
  `sk` varchar(100) CHARACTER SET latin1 NOT NULL,
  `s_permohonan` varchar(100) CHARACTER SET latin1 NOT NULL,
  `s_pengantar` varchar(100) CHARACTER SET latin1 NOT NULL,
  `status` text CHARACTER SET latin1 NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ajukan_cuti`
--

INSERT INTO `ajukan_cuti` (`id`, `nama_pegawai`, `nip`, `pangkat`, `jabatan`, `kab_kota`, `unit_kerja`, `mulai_tgl`, `akhir_tgl`, `alamat`, `jk`, `jenis_cuti`, `ket_cuti`, `no_hp`, `blanko`, `sk`, `s_permohonan`, `s_pengantar`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Sandika Farelio', '196207301983031004', 'Guru Muda', 'Guru', 'Pekanbaru', 'SMK Muda', '2022-05-15 17:00:00', '2022-05-16 17:00:00', 'JL. KENARI', 'Laki-laki', 'Cuti Besar', 'Umroh', '0808012', '344242aab7f3d101e2274d60098103f7.pdf', 'Daftar Kelompok KI 5 B-1.pdf', 'Daftar Kelompok KI 5 B-1.pdf', 'Daftar Kelompok KI 5 B-1.pdf', 'disetujui', '2022-05-16 07:38:26', '2022-05-18 20:18:59'),
(3, 'Sandika Farelio', '196207301983031004', 'Guru Muda', 'Guru', 'Pekanbaru', 'Dinas Pendidikan Provinsi Riau', '2022-05-18 17:00:00', '2022-05-27 17:00:00', 'JL. KENARI', 'Laki-laki', 'Cuti Besar', 'Umroh', '082390909011', 'Hadir_SKP_M. Saski.pdf', 'Daftar Kelompok KI 5 B-1.pdf', 'Daftar Kelompok KI 5 B-1.pdf', 'Daftar Kelompok KI 5 B-1.pdf', 'disetujui', '2022-05-18 19:32:11', '2022-05-27 23:49:48'),
(4, 'Isnaniah', '196207301983031004', 'Guru Muda', 'Pegawai Dinas', 'Pekanbaru', 'SMK Muda', '2022-05-27 17:00:00', '2022-06-03 17:00:00', 'JL. KENARI', 'Laki-laki', 'Cuti Besar', 'Umroh', '0808012', '5_6305433588812744049.pdf', '5_6305433588812744049.pdf', '5_6305433588812744049.pdf', '5_6305433588812744049.pdf', 'disetujui', '2022-05-27 23:57:25', '2022-05-27 23:58:28'),
(5, 'M. Saski', '197907112005011006', 'Pembina Tingkat 1', 'Guru', 'Pekanbaru', 'SMK Muda', '2022-05-30 17:00:00', '2022-06-01 17:00:00', 'Bogor', 'Laki-laki', 'Cuti Tahunan', 'Umroh', '0823989942422', 'M. Saski_11950110012_5B.pdf', 'PTM_M. SASKI.pdf', 'Jaringan Komputer-B.pdf', 'CERTIFCATE PANITIA UPGRADING.pdf', 'disetujui', '2022-05-30 18:28:56', '2022-05-30 18:40:13');

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
-- Struktur dari tabel `kelola_cuti`
--

CREATE TABLE `kelola_cuti` (
  `id` int(11) NOT NULL,
  `unggah` varchar(50) CHARACTER SET latin1 NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_05_16_062431_create_posts_table', 1);

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
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(8) NOT NULL,
  `nama_pengguna` varchar(16) NOT NULL,
  `kata_sandi` varchar(100) NOT NULL,
  `peran` varchar(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama_pengguna`, `kata_sandi`, `peran`, `created_at`, `updated_at`) VALUES
(8, 'bedu', '202cb962ac59075b964b07152d234b70', 'admin', '2022-05-14 10:57:09', '2022-05-14 10:57:09'),
(9, 'boni', 'caf1a3dfb505ffed0d024130f58c5cfa', 'pegawaiumum', '2022-05-14 11:05:44', '2022-05-14 11:05:44'),
(10, 'kabag', '202cb962ac59075b964b07152d234b70', 'kabagpegawai', '2022-05-14 11:09:25', '2022-05-14 11:09:25'),
(11, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '2022-05-16 05:30:47', '2022-05-16 05:30:47'),
(12, 'juli', '202cb962ac59075b964b07152d234b70', 'admin', '2022-05-31 07:59:03', '2022-05-31 07:59:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ajukan_cuti`
--
ALTER TABLE `ajukan_cuti`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kelola_cuti`
--
ALTER TABLE `kelola_cuti`
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
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT untuk tabel `ajukan_cuti`
--
ALTER TABLE `ajukan_cuti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kelola_cuti`
--
ALTER TABLE `kelola_cuti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
