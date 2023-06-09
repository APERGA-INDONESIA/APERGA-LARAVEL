-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 08 Jun 2023 pada 06.26
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aperga`
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_23_182705_add_token_to_users', 2),
(7, '2023_05_23_183532_add_reset_token_to_users_table', 3),
(8, '2023_05_24_154600_create_prt_table', 4),
(9, '2023_05_24_175948_add_user_id_to_prts', 5),
(10, '2023_05_24_184335_add_user_id_to_prts', 6),
(11, '2023_05_26_102625_add_saldo_and_poin_to_users', 7),
(12, '2023_05_27_030351_create_transaksi_point_table', 8),
(13, '2023_05_27_030931_add_user_id_to_transaksi_point', 9),
(14, '2023_05_27_043552_create_transaksi_points_table', 10),
(15, '2023_05_29_114927_create_info_payments_table', 11),
(16, '2023_05_29_123815_create_order_transactions_table', 12),
(17, '2023_05_29_172339_create_order_transactions_table', 13);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('adit@gmail.com', '$2y$10$ahq.C62K9We.gnjkD48vO.rUZU3rKXWXIX7uKVozhMfE8HLZ7O9DC', '2023-05-22 22:13:56'),
('tes@gmail.com', '$2y$10$FfA68FBoxr5rHOpKFaImv.LXkzXfFs2oEC.WQFn4rGmDNV2FiDv2y', '2023-05-23 20:35:10'),
('admin@gmail.com', '$2y$10$LBYTte4RqBdM.Fn/mo2b4.K7HHSg0OLsat8Njo4nhmMD7EsK3JOxK', '2023-05-24 02:34:26');

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
-- Struktur dari tabel `prts`
--

CREATE TABLE `prts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gaji` int(100) NOT NULL,
  `umur` int(11) NOT NULL,
  `rating` decimal(3,1) DEFAULT NULL,
  `lokasi` varchar(255) NOT NULL,
  `durasi` int(11) NOT NULL,
  `jamkerja` int(11) DEFAULT NULL,
  `catatan` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `no_telepon` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `prts`
--

INSERT INTO `prts` (`id`, `user_id`, `nama`, `gaji`, `umur`, `rating`, `lokasi`, `durasi`, `jamkerja`, `catatan`, `deskripsi`, `no_telepon`, `created_at`, `updated_at`) VALUES
(1, 0, 'Eva Nurhayati', 5100000, 29, '4.9', 'Jakarta', 0, NULL, NULL, 'Pengalaman 6 tahun sebagai pekerja rumah tangga. Ahli dalam merapikan rumah, mencuci pakaian, dan menjaga kebersihan lingkungan.', '0898901234', '2023-05-24 18:04:07', '2023-06-05 06:50:09'),
(2, 0, 'Fahmi Hakim', 4500000, 35, '3.7', 'Bandung', 0, NULL, NULL, 'Saya telah bekerja sebagai pekerja rumah tangga selama 4 tahun. Saya menjalankan tugas-tugas rumah tangga dengan baik, seperti membersihkan rumah, mencuci pakaian, dan merawat anak-anak dengan penuh perhatian.', '0899012345', '2023-05-24 18:04:07', '2023-06-04 06:14:55'),
(3, 1, 'Gita Permata', 4900000, 30, '4.8', 'Yogyakarta', 1456, 24, 'sddada', 'Dalam 3 tahun terakhir, saya telah menjadi pekerja rumah tangga yang terampil dalam mengatur jadwal kegiatan rumah tangga, menjaga kebersihan, serta memberikan perhatian kepada anggota keluarga.', '0812345678', '2023-05-24 18:04:07', '2023-06-07 09:45:22'),
(4, 0, 'Hendra Setiawan', 5300000, 31, '4.7', 'Surabaya', 0, NULL, NULL, 'Pengalaman 6 tahun sebagai pekerja rumah tangga. Saya mampu melakukan berbagai tugas rumah tangga dengan teliti dan bertanggung jawab.', '0823456789', '2023-05-24 18:04:07', '2023-06-04 23:39:36'),
(5, 0, 'Indah Sari', 4700000, 26, '4.0', 'Jakarta', 0, NULL, NULL, 'Saya adalah pekerja rumah tangga berpengalaman selama 7 tahun. Saya terampil dalam membersihkan rumah, mencuci pakaian, dan merawat anak-anak.', '0834567890', '2023-05-24 18:04:07', '2023-06-05 00:47:50'),
(6, 0, 'Joko Prabowo', 5100000, 32, '4.2', 'Bandung', 11000, 120, 'tes cuktes cuktes cuktes cuktes cuktestestestestes', 'Pekerja rumah tangga dengan pengalaman 4 tahun. Saya ahli dalam membersihkan rumah, merapikan pakaian, dan menyiapkan makanan.', '0845678901', '2023-05-24 18:04:07', '2023-06-07 08:30:26'),
(7, 0, 'Kartika Dewi', 4500000, 27, '4.0', 'Yogyakarta', 0, NULL, NULL, 'Saya telah bekerja sebagai pekerja rumah tangga selama 5 tahun. Selama periode tersebut, saya telah melaksanakan berbagai tugas, termasuk membersihkan rumah, mencuci pakaian, menyiapkan makanan, dan merawat anak-anak.', '0890123456', '2023-05-24 18:04:07', '2023-06-05 00:58:15'),
(8, 0, 'Lia Utami', 4900000, 33, '3.9', 'Surabaya', 0, NULL, NULL, 'Dalam 3 tahun terakhir, saya telah menjadi pekerja rumah tangga yang ahli dalam merapikan rumah, mencuci dan melipat pakaian, serta merawat anak-anak dengan penuh perhatian.', '0891234567', '2023-05-24 18:04:07', '2023-06-06 17:35:28'),
(9, 0, 'Maulana Yusuf', 5300000, 28, '4.2', 'Jakarta', 0, NULL, NULL, 'Pekerja rumah tangga selama 4 tahun, menjalankan tugas-tugas rumah tangga dengan baik, seperti membersihkan rumah, mencuci pakaian, dan merawat anak-anak dengan penuh perhatian.', '0892345678', '2023-05-24 18:04:07', '2023-06-02 23:16:38'),
(10, 0, 'Nadia Permata', 4700000, 34, '3.9', 'Bandung', 0, NULL, NULL, 'Saya adalah pekerja rumah tangga yang berpengalaman selama 5 tahun. Saya terampil dalam membersihkan, mencuci, dan merawat anak-anak dengan penuh perhatian.', '0893456789', '2023-05-24 18:04:07', '2023-05-26 06:53:52'),
(11, 0, 'Oscar Prasetyo', 5100000, 29, '3.7', 'Yogyakarta', 0, NULL, NULL, 'Pengalaman 3 tahun sebagai pekerja rumah tangga. Saya ahli dalam merapikan rumah, mencuci pakaian, dan menjaga kebersihan lingkungan rumah.', '0894567890', '2023-05-24 18:04:07', '2023-06-03 09:56:36'),
(12, 0, 'Putri Rahayu', 4500000, 35, '4.7', 'Surabaya', 0, NULL, NULL, 'Saya telah bekerja sebagai pekerja rumah tangga selama 4 tahun. Saya menjalankan tugas-tugas rumah tangga dengan baik, seperti membersihkan rumah, mencuci pakaian, dan merawat anak-anak dengan penuh perhatian.', '0895678901', '2023-05-24 18:04:07', '2023-06-03 09:33:16'),
(13, 0, 'Qori Abdullah', 4900000, 30, '4.4', 'Jakarta', 0, NULL, NULL, 'Dalam 3 tahun terakhir, saya telah menjadi pekerja rumah tangga yang terampil dalam mengatur jadwal kegiatan rumah tangga, menjaga kebersihan, serta memberikan perhatian kepada anggota keluarga.', '0896789012', '2023-05-24 18:04:07', '2023-06-03 10:09:18'),
(14, 0, 'Rini Utami', 5300000, 31, '4.4', 'Bandung', 0, NULL, NULL, 'Pengalaman 6 tahun sebagai pekerja rumah tangga. Saya mampu melakukan berbagai tugas rumah tangga dengan teliti dan bertanggung jawab.', '0897890123', '2023-05-24 18:04:07', '2023-05-26 07:11:54'),
(15, 0, 'Santoso Susanto', 4700000, 26, '3.8', 'Yogyakarta', 0, NULL, NULL, 'Saya adalah pekerja rumah tangga berpengalaman selama 7 tahun. Saya terampil dalam membersihkan rumah, mencuci pakaian, dan merawat anak-anak.', '0898901234', '2023-05-24 18:04:07', '2023-06-02 11:17:42'),
(16, 1, 'Vita Agustina', 5000000, 25, '4.0', 'Jakarta', 60, 60, '', 'Pekerja rumah tangga dengan pengalaman 4 tahun. Saya ahli dalam membersihkan rumah, merapikan pakaian, dan menyiapkan makanan.', '0812345678', '2023-05-24 18:17:42', '2023-06-07 21:16:28'),
(17, 1, 'Michael Jordan', 4500000, 30, '4.8', 'Surabaya', 0, 12, '', 'Saya telah bekerja sebagai pekerja rumah tangga selama 5 tahun. Selama periode tersebut, saya telah melaksanakan berbagai tugas, termasuk membersihkan rumah, mencuci pakaian, menyiapkan makanan, dan merawat anak-anak.', '0823456789', '2023-05-24 18:17:42', '2023-06-07 12:51:23'),
(18, 0, 'Anisa Putri', 5500000, 28, '4.0', 'Bandung', 0, NULL, NULL, 'Dalam 3 tahun terakhir, saya telah menjadi pekerja rumah tangga yang ahli dalam merapikan rumah, mencuci dan melipat pakaian, serta merawat anak-anak dengan penuh perhatian.', '0834567890', '2023-05-24 18:17:42', '2023-06-05 00:42:16'),
(19, 1, 'Kusnanto Purwoto', 4800000, 32, '3.9', 'Yogyakarta', 0, 12, '', 'Pekerja rumah tangga selama 4 tahun, menjalankan tugas-tugas rumah tangga dengan baik, seperti membersihkan rumah, mencuci pakaian, dan merawat anak-anak dengan penuh perhatian.', '0845678901', '2023-05-24 18:17:42', '2023-06-07 12:53:40'),
(20, 0, 'Gempita Sari', 5200000, 27, '3.7', 'Medan', 0, NULL, NULL, 'Saya adalah pekerja rumah tangga yang berpengalaman selama 5 tahun. Saya terampil dalam membersihkan, mencuci, dan merawat anak-anak dengan penuh perhatian.', '0890123456', '2023-05-24 18:17:42', '2023-05-28 18:18:10'),
(21, 1, 'Fajar Wijaya', 4600000, 31, '4.7', 'Surabaya', 12, 12, 'mantapp bang', 'Pengalaman 3 tahun sebagai pekerja rumah tangga. Saya ahli dalam merapikan rumah, mencuci pakaian, dan menjaga kebersihan lingkungan rumah.', '0812345678', '2023-05-24 18:17:42', '2023-06-07 10:16:22'),
(22, 0, 'Gita Susanti', 4900000, 29, '4.7', 'Jakarta', 0, NULL, NULL, 'Saya telah bekerja sebagai pekerja rumah tangga selama 4 tahun. Saya menjalankan tugas-tugas rumah tangga dengan baik, seperti membersihkan rumah, mencuci pakaian, dan merawat anak-anak dengan penuh perhatian.', '0823456789', '2023-05-24 18:17:42', '2023-05-26 07:53:19'),
(23, 1, 'Radhika Putri', 5100000, 26, '4.2', 'Bandung', 1400, 12, '', 'Dalam 3 tahun terakhir, saya telah menjadi pekerja rumah tangga yang terampil dalam mengatur jadwal kegiatan rumah tangga, menjaga kebersihan, serta memberikan perhatian kepada anggota keluarga.', '0834567890', '2023-05-24 18:17:42', '2023-06-07 09:50:25'),
(24, 1, 'Indra Perdana', 4700000, 33, '3.5', 'Yogyakarta', 1, 12, 'tes', 'Pengalaman 6 tahun sebagai pekerja rumah tangga. Saya mampu melakukan berbagai tugas rumah tangga dengan teliti dan bertanggung jawab.', '0845678901', '2023-05-24 18:17:42', '2023-06-07 12:49:42'),
(25, 0, 'Anatasya Kosasri', 5300000, 27, '4.5', 'Medan', 0, NULL, NULL, 'Saya adalah pekerja rumah tangga berpengalaman selama 7 tahun. Saya terampil dalam membersihkan rumah, mencuci pakaian, dan merawat anak-anak.', '0890123456', '2023-05-24 18:17:42', '2023-06-05 01:04:23'),
(26, 0, 'Kartika Sari', 4800000, 30, '3.8', 'Surabaya', 0, NULL, NULL, 'Pekerja rumah tangga dengan pengalaman 4 tahun. Saya ahli dalam membersihkan rumah, merapikan pakaian, dan menyiapkan makanan.', '0812345678', '2023-05-24 18:17:42', '2023-05-26 08:06:09'),
(27, 0, 'Laras Ayu', 4600000, 28, '4.9', 'Jakarta', 0, NULL, NULL, 'Saya telah bekerja sebagai pekerja rumah tangga selama 5 tahun. Selama periode tersebut, saya telah melaksanakan berbagai tugas, termasuk membersihkan rumah, mencuci pakaian, menyiapkan makanan, dan merawat anak-anak.', '0823456789', '2023-05-24 18:17:42', '2023-06-04 23:37:37'),
(28, 0, 'Maman Hidayat', 5200000, 31, '3.7', 'Bandung', 2400, 24, 'oke gesoke ges', 'Dalam 3 tahun terakhir, saya telah menjadi pekerja rumah tangga yang ahli dalam merapikan rumah, mencuci dan melipat pakaian, serta merawat anak-anak dengan penuh perhatian.', '0834567890', '2023-05-24 18:17:42', '2023-06-07 08:32:58'),
(29, 0, 'Nadia Putri', 5000000, 29, '4.8', 'Yogyakarta', 12, 12, 'sangat mantap', 'Pekerja rumah tangga selama 4 tahun, menjalankan tugas-tugas rumah tangga dengan baik, seperti membersihkan rumah, mencuci pakaian, dan merawat anak-anak dengan penuh perhatian.', '0845678901', '2023-05-24 18:17:42', '2023-06-06 22:33:47'),
(30, 0, 'Oscar Aditya', 4800000, 26, '4.9', 'Medan', 0, NULL, NULL, 'Saya adalah pekerja rumah tangga yang berpengalaman selama 5 tahun. Saya terampil dalam membersihkan, mencuci, dan merawat anak-anak dengan penuh perhatian.', '0890123456', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(31, 0, 'Tono Suhanto', 5100000, 33, '3.8', 'Surabaya', 0, NULL, NULL, 'Pengalaman 3 tahun sebagai pekerja rumah tangga. Saya ahli dalam merapikan rumah, mencuci pakaian, dan menjaga kebersihan lingkungan rumah.', '0812345678', '2023-05-24 18:17:42', '2023-06-05 04:41:17'),
(32, 0, 'Rudi Hartono', 4700000, 27, '3.5', 'Jakarta', 0, NULL, NULL, 'Saya telah bekerja sebagai pekerja rumah tangga selama 4 tahun. Saya menjalankan tugas-tugas rumah tangga dengan baik, seperti membersihkan rumah, mencuci pakaian, dan merawat anak-anak dengan penuh perhatian.', '0823456789', '2023-05-24 18:17:42', '2023-06-04 01:11:55'),
(33, 0, 'Siti Rahayu', 5300000, 30, '4.3', 'Bandung', 0, NULL, NULL, 'Dalam 3 tahun terakhir, saya telah menjadi pekerja rumah tangga yang terampil dalam mengatur jadwal kegiatan rumah tangga, menjaga kebersihan, serta memberikan perhatian kepada anggota keluarga.', '0834567890', '2023-05-24 18:17:42', '2023-06-05 06:48:48'),
(34, 0, 'Widya Sari', 4800000, 28, '4.6', 'Yogyakarta', 0, NULL, NULL, 'Pengalaman 6 tahun sebagai pekerja rumah tangga. Saya mampu melakukan berbagai tugas rumah tangga dengan teliti dan bertanggung jawab.', '0845678901', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(35, 0, 'Udin Prasetyo', 5200000, 31, '3.5', 'Medan', 36, 36, '', 'Saya adalah pekerja rumah tangga berpengalaman selama 7 tahun. Saya terampil dalam membersihkan rumah, mencuci pakaian, dan merawat anak-anak.', '0890123456', '2023-05-24 18:17:42', '2023-06-07 06:47:43'),
(36, 0, 'Herman Suherman', 5000000, 29, '4.9', 'Surabaya', 0, NULL, NULL, 'Pekerja rumah tangga dengan pengalaman 4 tahun. Saya ahli dalam membersihkan rumah, merapikan pakaian, dan menyiapkan makanan.', '0812345678', '2023-05-24 18:17:42', '2023-05-26 11:03:19'),
(37, 0, 'Jeje Slebew', 4600000, 26, '4.3', 'Jakarta', 24, 24, 'sangat mantapsangat mantap', 'Saya telah bekerja sebagai pekerja rumah tangga selama 5 tahun. Selama periode tersebut, saya telah melaksanakan berbagai tugas, termasuk membersihkan rumah, mencuci pakaian, menyiapkan makanan, dan merawat anak-anak.', '0823456789', '2023-05-24 18:17:42', '2023-06-07 03:36:20'),
(38, 0, 'Ahmad Subardjo', 8000000, 33, '4.9', 'Bandung', 0, NULL, NULL, 'Dalam 3 tahun terakhir, saya telah menjadi pekerja rumah tangga yang ahli dalam merapikan rumah, mencuci dan melipat pakaian, serta merawat anak-anak dengan penuh perhatian.', '0834567890', '2023-05-24 18:17:42', '2023-06-06 11:13:30'),
(39, 0, 'Zaki Rahman', 4900000, 27, '3.7', 'Yogyakarta', 0, NULL, NULL, 'Pekerja rumah tangga selama 4 tahun, menjalankan tugas-tugas rumah tangga dengan baik, seperti membersihkan rumah, mencuci pakaian, dan merawat anak-anak dengan penuh perhatian.', '0845678901', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(40, 0, 'Adi Nugroho', 5300000, 30, '4.7', 'Medan', 0, NULL, NULL, 'Saya adalah pekerja rumah tangga yang berpengalaman selama 5 tahun. Saya terampil dalam membersihkan, mencuci, dan merawat anak-anak dengan penuh perhatian.', '0890123456', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(41, 0, 'Bella Putri', 4800000, 28, '4.3', 'Surabaya', 0, NULL, NULL, 'Pengalaman 3 tahun sebagai pekerja rumah tangga. Saya ahli dalam merapikan rumah, mencuci pakaian, dan menjaga kebersihan lingkungan rumah.', '0812345678', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(42, 0, 'Cindy Kusuma', 5200000, 31, '3.9', 'Jakarta', 0, NULL, NULL, 'Saya telah bekerja sebagai pekerja rumah tangga selama 4 tahun. Saya menjalankan tugas-tugas rumah tangga dengan baik, seperti membersihkan rumah, mencuci pakaian, dan merawat anak-anak dengan penuh perhatian.', '0823456789', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(43, 0, 'Denny Pratama', 5000000, 29, '4.8', 'Bandung', 0, NULL, NULL, 'Dalam 3 tahun terakhir, saya telah menjadi pekerja rumah tangga yang terampil dalam mengatur jadwal kegiatan rumah tangga, menjaga kebersihan, serta memberikan perhatian kepada anggota keluarga.', '0834567890', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(44, 0, 'Eka Putri', 4700000, 26, '4.4', 'Yogyakarta', 0, NULL, NULL, 'Pengalaman 6 tahun sebagai pekerja rumah tangga. Saya mampu melakukan berbagai tugas rumah tangga dengan teliti dan bertanggung jawab.', '0845678901', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(45, 0, 'Fandi Susanto', 5100000, 33, '3.9', 'Medan', 0, NULL, NULL, 'Saya adalah pekerja rumah tangga berpengalaman selama 7 tahun. Saya terampil dalam membersihkan rumah, mencuci pakaian, dan merawat anak-anak.', '0890123456', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(46, 0, 'Gita Ramadhani', 4900000, 27, '4.2', 'Surabaya', 0, NULL, NULL, 'Pekerja rumah tangga dengan pengalaman 4 tahun. Saya ahli dalam membersihkan rumah, merapikan pakaian, dan menyiapkan makanan.', '0812345678', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(47, 0, 'Hendro Wibowo', 5300000, 30, '4.4', 'Jakarta', 0, NULL, NULL, 'Saya telah bekerja sebagai pekerja rumah tangga selama 5 tahun. Selama periode tersebut, saya telah melaksanakan berbagai tugas, termasuk membersihkan rumah, mencuci pakaian, menyiapkan makanan, dan merawat anak-anak.', '0823456789', '2023-05-24 18:17:42', '2023-06-05 01:10:44'),
(48, 0, 'Intan Permata', 4800000, 28, '4.3', 'Bandung', 0, NULL, NULL, 'Dalam 3 tahun terakhir, saya telah menjadi pekerja rumah tangga yang ahli dalam merapikan rumah, mencuci dan melipat pakaian, serta merawat anak-anak dengan penuh perhatian.', '0834567890', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(49, 0, 'Joko Prasetyo', 5200000, 31, '4.7', 'Yogyakarta', 0, NULL, NULL, 'Pekerja rumah tangga selama 4 tahun, menjalankan tugas-tugas rumah tangga dengan baik, seperti membersihkan rumah, mencuci pakaian, dan merawat anak-anak dengan penuh perhatian.', '0845678901', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(50, 0, 'Kiki Rahman', 5000000, 29, '4.3', 'Medan', 0, NULL, NULL, 'Saya adalah pekerja rumah tangga yang berpengalaman selama 5 tahun. Saya terampil dalam membersihkan, mencuci, dan merawat anak-anak dengan penuh perhatian.', '0890123456', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(51, 0, 'Lina Sari', 4600000, 26, '3.6', 'Surabaya', 0, NULL, NULL, 'Pengalaman 6 tahun sebagai pekerja rumah tangga. Ahli dalam merapikan rumah, mencuci pakaian, dan menjaga kebersihan lingkungan.', '0812345678', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(52, 0, 'Mila Putri', 5300000, 30, '4.9', 'Jakarta', 0, NULL, NULL, 'Saya telah bekerja sebagai pekerja rumah tangga selama 4 tahun. Saya menjalankan tugas-tugas rumah tangga dengan baik, seperti membersihkan rumah, mencuci pakaian, dan merawat anak-anak dengan penuh perhatian.', '0823456789', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(53, 0, 'Nana Kusuma', 4800000, 28, '4.3', 'Bandung', 0, NULL, NULL, 'Dalam 3 tahun terakhir, saya telah menjadi pekerja rumah tangga yang terampil dalam mengatur jadwal kegiatan rumah tangga, menjaga kebersihan, serta memberikan perhatian kepada anggota keluarga.', '0834567890', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(54, 0, 'Oscar Prasetyo', 5200000, 31, '4.5', 'Yogyakarta', 0, NULL, NULL, 'Pengalaman 6 tahun sebagai pekerja rumah tangga. Saya mampu melakukan berbagai tugas rumah tangga dengan teliti dan bertanggung jawab.', '0845678901', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(55, 0, 'Putri Rahayu', 5000000, 29, '4.8', 'Medan', 0, NULL, NULL, 'Saya adalah pekerja rumah tangga berpengalaman selama 7 tahun. Saya terampil dalam membersihkan rumah, mencuci pakaian, dan merawat anak-anak.', '0890123456', '2023-05-24 18:17:42', '2023-06-06 13:20:39'),
(56, 0, 'Rudi Nugroho', 4700000, 26, '3.8', 'Surabaya', 0, NULL, NULL, 'Pekerja rumah tangga dengan pengalaman 4 tahun. Saya ahli dalam membersihkan rumah, merapikan pakaian, dan menyiapkan makanan.', '0812345678', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(57, 0, 'Sinta Agustina', 5100000, 33, '4.4', 'Jakarta', 0, NULL, NULL, 'Saya telah bekerja sebagai pekerja rumah tangga selama 5 tahun. Selama periode tersebut, saya telah melaksanakan berbagai tugas, termasuk membersihkan rumah, mencuci pakaian, menyiapkan makanan, dan merawat anak-anak.', '0823456789', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(58, 0, 'Tono Suharyanto', 4800000, 28, '4.0', 'Bandung', 0, NULL, NULL, 'Dalam 3 tahun terakhir, saya telah menjadi pekerja rumah tangga yang ahli dalam merapikan rumah, mencuci dan melipat pakaian, serta merawat anak-anak dengan penuh perhatian.', '0834567890', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(59, 0, 'Udin Pratama', 5300000, 30, '4.6', 'Yogyakarta', 0, NULL, NULL, 'Pekerja rumah tangga selama 4 tahun, menjalankan tugas-tugas rumah tangga dengan baik, seperti membersihkan rumah, mencuci pakaian, dan merawat anak-anak dengan penuh perhatian.', '0845678901', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(60, 0, 'Vita Susanti', 5000000, 29, '4.8', 'Medan', 0, NULL, NULL, 'Saya adalah pekerja rumah tangga yang berpengalaman selama 5 tahun. Saya terampil dalam membersihkan, mencuci, dan merawat anak-anak dengan penuh perhatian.', '0890123456', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(61, 0, 'Wawan Kusuma', 4600000, 26, '3.6', 'Surabaya', 0, NULL, NULL, 'Pengalaman 6 tahun sebagai pekerja rumah tangga. Ahli dalam merapikan rumah, mencuci pakaian, dan menjaga kebersihan lingkungan.', '0812345678', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(62, 0, 'Yanti Pratiwi', 5100000, 33, '4.5', 'Jakarta', 0, NULL, NULL, 'Saya telah bekerja sebagai pekerja rumah tangga selama 4 tahun. Saya menjalankan tugas-tugas rumah tangga dengan baik, seperti membersihkan rumah, mencuci pakaian, dan merawat anak-anak dengan penuh perhatian.', '0823456789', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(63, 0, 'Zara Rahayu', 4900000, 27, '3.9', 'Bandung', 0, NULL, NULL, 'Dalam 3 tahun terakhir, saya telah menjadi pekerja rumah tangga yang terampil dalam mengatur jadwal kegiatan rumah tangga, menjaga kebersihan, serta memberikan perhatian kepada anggota keluarga.', '0834567890', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(64, 0, 'Abdi Nugroho', 5300000, 30, '3.9', 'Yogyakarta', 0, NULL, NULL, 'Pengalaman 6 tahun sebagai pekerja rumah tangga. Saya mampu melakukan berbagai tugas rumah tangga dengan teliti dan bertanggung jawab.', '0845678901', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(65, 0, 'Bunga Kusuma', 5000000, 29, '4.1', 'Medan', 0, NULL, NULL, 'Saya adalah pekerja rumah tangga berpengalaman selama 7 tahun. Saya terampil dalam membersihkan rumah, mencuci pakaian, dan merawat anak-anak.', '0890123456', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(66, 0, 'Citra Susanto', 4800000, 26, '3.9', 'Surabaya', 0, NULL, NULL, 'Pekerja rumah tangga dengan pengalaman 4 tahun. Saya ahli dalam membersihkan rumah, merapikan pakaian, dan menyiapkan makanan.', '0812345678', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(67, 0, 'Dharma Wijaya', 5200000, 31, '3.7', 'Jakarta', 0, NULL, NULL, 'Saya telah bekerja sebagai pekerja rumah tangga selama 5 tahun. Selama periode tersebut, saya telah melaksanakan berbagai tugas, termasuk membersihkan rumah, mencuci pakaian, menyiapkan makanan, dan merawat anak-anak.', '0823456789', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(68, 0, 'Eva Pratiwi', 5000000, 29, '4.8', 'Bandung', 0, NULL, NULL, 'Dalam 3 tahun terakhir, saya telah menjadi pekerja rumah tangga yang ahli dalam merapikan rumah, mencuci dan melipat pakaian, serta merawat anak-anak dengan penuh perhatian.', '0834567890', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(69, 0, 'Fandy Wibowo', 4700000, 26, '5.0', 'Yogyakarta', 0, NULL, NULL, 'Pekerja rumah tangga selama 4 tahun, menjalankan tugas-tugas rumah tangga dengan baik, seperti membersihkan rumah, mencuci pakaian, dan merawat anak-anak dengan penuh perhatian.', '0845678901', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(70, 0, 'Gita Rahayu', 5100000, 33, '3.9', 'Medan', 0, NULL, NULL, 'Saya adalah pekerja rumah tangga yang berpengalaman selama 5 tahun. Saya terampil dalam membersihkan, mencuci, dan merawat anak-anak dengan penuh perhatian.', '0890123456', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(71, 0, 'Hendra Nugroho', 5300000, 30, '3.9', 'Surabaya', 0, NULL, NULL, 'Pengalaman 6 tahun sebagai pekerja rumah tangga. Ahli dalam merapikan rumah, mencuci pakaian, dan menjaga kebersihan lingkungan.', '0812345678', '2023-05-24 18:17:42', '2023-05-26 08:11:50'),
(72, 0, 'Indah Putri', 4800000, 28, '4.4', 'Jakarta', 0, NULL, NULL, 'Saya telah bekerja sebagai pekerja rumah tangga selama 4 tahun. Saya menjalankan tugas-tugas rumah tangga dengan baik, seperti membersihkan rumah, mencuci pakaian, dan merawat anak-anak dengan penuh perhatian.', '0823456789', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(73, 0, 'Joni Suharyanto', 5200000, 31, '3.9', 'Bandung', 0, NULL, NULL, 'Dalam 3 tahun terakhir, saya telah menjadi pekerja rumah tangga yang terampil dalam mengatur jadwal kegiatan rumah tangga, menjaga kebersihan, serta memberikan perhatian kepada anggota keluarga.', '0834567890', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(74, 0, 'Kiki Rahayu', 5000000, 29, '4.3', 'Yogyakarta', 0, NULL, NULL, 'Pengalaman 6 tahun sebagai pekerja rumah tangga. Saya mampu melakukan berbagai tugas rumah tangga dengan teliti dan bertanggung jawab.', '0845678901', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(75, 0, 'Lina Susanti', 4600000, 26, '5.0', 'Medan', 0, NULL, NULL, 'Saya adalah pekerja rumah tangga berpengalaman selama 7 tahun. Saya terampil dalam membersihkan rumah, mencuci pakaian, dan merawat anak-anak.', '0890123456', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(76, 0, 'Mila Wijaya', 5100000, 33, '3.8', 'Surabaya', 0, NULL, NULL, 'Pekerja rumah tangga dengan pengalaman 4 tahun. Saya ahli dalam membersihkan rumah, merapikan pakaian, dan menyiapkan makanan.', '0812345678', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(77, 0, 'Nadia Rahayu', 5300000, 30, '3.7', 'Jakarta', 0, NULL, NULL, 'Saya telah bekerja sebagai pekerja rumah tangga selama 5 tahun. Selama periode tersebut, saya telah melaksanakan berbagai tugas, termasuk membersihkan rumah, mencuci pakaian, menyiapkan makanan, dan merawat anak-anak.', '0823456789', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(78, 0, 'Oscar Prasetya', 4800000, 28, '3.7', 'Bandung', 0, NULL, NULL, 'Dalam 3 tahun terakhir, saya telah menjadi pekerja rumah tangga yang ahli dalam merapikan rumah, mencuci dan melipat pakaian, serta merawat anak-anak dengan penuh perhatian.', '0834567890', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(79, 0, 'Putri Nugroho', 5200000, 31, '3.9', 'Yogyakarta', 0, NULL, NULL, 'Pekerja rumah tangga selama 4 tahun, menjalankan tugas-tugas rumah tangga dengan baik, seperti membersihkan rumah, mencuci pakaian, dan merawat anak-anak dengan penuh perhatian.', '0845678901', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(80, 0, 'Rudi Suharto', 5000000, 29, '4.8', 'Medan', 0, NULL, NULL, 'Saya adalah pekerja rumah tangga yang berpengalaman selama 5 tahun. Saya terampil dalam membersihkan, mencuci, dan merawat anak-anak dengan penuh perhatian.', '0890123456', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(81, 0, 'Sinta Wijaya', 4700000, 26, '4.1', 'Surabaya', 0, NULL, NULL, 'Pengalaman 6 tahun sebagai pekerja rumah tangga. Ahli dalam merapikan rumah, mencuci pakaian, dan menjaga kebersihan lingkungan.', '0812345678', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(82, 0, 'Tono Rahayu', 5300000, 30, '4.3', 'Jakarta', 0, NULL, NULL, 'Saya telah bekerja sebagai pekerja rumah tangga selama 4 tahun. Saya menjalankan tugas-tugas rumah tangga dengan baik, seperti membersihkan rumah, mencuci pakaian, dan merawat anak-anak dengan penuh perhatian.', '0823456789', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(83, 0, 'Udin Prasetya', 4800000, 28, '4.0', 'Bandung', 0, NULL, NULL, 'Dalam 3 tahun terakhir, saya telah menjadi pekerja rumah tangga yang terampil dalam mengatur jadwal kegiatan rumah tangga, menjaga kebersihan, serta memberikan perhatian kepada anggota keluarga.', '0834567890', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(84, 0, 'Vita Susanti', 5200000, 31, '3.6', 'Yogyakarta', 0, NULL, NULL, 'Pengalaman 6 tahun sebagai pekerja rumah tangga. Saya mampu melakukan berbagai tugas rumah tangga dengan teliti dan bertanggung jawab.', '0845678901', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(85, 0, 'Wawan Nugroho', 5000000, 29, '4.0', 'Medan', 0, NULL, NULL, 'Saya adalah pekerja rumah tangga berpengalaman selama 7 tahun. Saya terampil dalam membersihkan rumah, mencuci pakaian, dan merawat anak-anak.', '0890123456', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(86, 0, 'Yanti Prasetyo', 4700000, 26, '4.2', 'Surabaya', 0, NULL, NULL, 'Pekerja rumah tangga dengan pengalaman 4 tahun. Saya ahli dalam membersihkan rumah, merapikan pakaian, dan menyiapkan makanan.', '0812345678', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(87, 0, 'Zara Wijaya', 5300000, 30, '3.9', 'Jakarta', 0, NULL, NULL, 'Saya telah bekerja sebagai pekerja rumah tangga selama 5 tahun. Selama periode tersebut, saya telah melaksanakan berbagai tugas, termasuk membersihkan rumah, mencuci pakaian, menyiapkan makanan, dan merawat anak-anak.', '0823456789', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(88, 0, 'Abdi Rahayu', 5000000, 29, '4.9', 'Bandung', 0, NULL, NULL, 'Dalam 3 tahun terakhir, saya telah menjadi pekerja rumah tangga yang ahli dalam merapikan rumah, mencuci dan melipat pakaian, serta merawat anak-anak dengan penuh perhatian.', '0834567890', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(89, 0, 'Bella Nugroho', 4800000, 28, '4.7', 'Yogyakarta', 0, NULL, NULL, 'Pekerja rumah tangga selama 4 tahun, menjalankan tugas-tugas rumah tangga dengan baik, seperti membersihkan rumah, mencuci pakaian, dan merawat anak-anak dengan penuh perhatian.', '0845678901', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(90, 0, 'Citra Susanti', 5200000, 31, '4.0', 'Medan', 0, NULL, NULL, 'Saya adalah pekerja rumah tangga yang berpengalaman selama 5 tahun. Saya terampil dalam membersihkan, mencuci, dan merawat anak-anak dengan penuh perhatian.', '0890123456', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(91, 0, 'Dharma Prasetya', 5000000, 29, '4.0', 'Surabaya', 0, NULL, NULL, 'Pengalaman 6 tahun sebagai pekerja rumah tangga. Ahli dalam merapikan rumah, mencuci pakaian, dan menjaga kebersihan lingkungan.', '0812345678', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(92, 0, 'Eva Wijaya', 4700000, 26, '4.2', 'Jakarta', 0, NULL, NULL, 'Saya telah bekerja sebagai pekerja rumah tangga selama 4 tahun. Saya menjalankan tugas-tugas rumah tangga dengan baik, seperti membersihkan rumah, mencuci pakaian, dan merawat anak-anak dengan penuh perhatian.', '0823456789', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(93, 0, 'Fandy Rahayu', 5300000, 30, '4.2', 'Bandung', 0, NULL, NULL, 'Dalam 3 tahun terakhir, saya telah menjadi pekerja rumah tangga yang terampil dalam mengatur jadwal kegiatan rumah tangga, menjaga kebersihan, serta memberikan perhatian kepada anggota keluarga.', '0834567890', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(94, 0, 'Gita Prasetyo', 4900000, 27, '3.6', 'Yogyakarta', 0, NULL, NULL, 'Pengalaman 6 tahun sebagai pekerja rumah tangga. Saya mampu melakukan berbagai tugas rumah tangga dengan teliti dan bertanggung jawab.', '0845678901', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(95, 0, 'Hendra Nugroho', 5100000, 33, '4.6', 'Medan', 0, NULL, NULL, 'Saya adalah pekerja rumah tangga berpengalaman selama 7 tahun. Saya terampil dalam membersihkan rumah, mencuci pakaian, dan merawat anak-anak.', '0890123456', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(96, 0, 'Indah Susanti', 5300000, 30, '4.2', 'Surabaya', 0, NULL, NULL, 'Pekerja rumah tangga dengan pengalaman 4 tahun. Saya ahli dalam membersihkan rumah, merapikan pakaian, dan menyiapkan makanan.', '0812345678', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(97, 0, 'Joni Prasetyo', 4800000, 28, '3.9', 'Jakarta', 0, NULL, NULL, 'Saya telah bekerja sebagai pekerja rumah tangga selama 5 tahun. Selama periode tersebut, saya telah melaksanakan berbagai tugas, termasuk membersihkan rumah, mencuci pakaian, menyiapkan makanan, dan merawat anak-anak.', '0823456789', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(98, 0, 'Kiki Nugroho', 5200000, 31, '5.0', 'Bandung', 0, NULL, NULL, 'Dalam 3 tahun terakhir, saya telah menjadi pekerja rumah tangga yang ahli dalam merapikan rumah, mencuci dan melipat pakaian, serta merawat anak-anak dengan penuh perhatian.', '0834567890', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(99, 0, 'Lina Rahayu', 5000000, 29, '3.7', 'Yogyakarta', 0, NULL, NULL, 'Pekerja rumah tangga selama 4 tahun, menjalankan tugas-tugas rumah tangga dengan baik, seperti membersihkan rumah, mencuci pakaian, dan merawat anak-anak dengan penuh perhatian.', '0845678901', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(100, 0, 'Mila Prasetyo', 4800000, 28, '4.3', 'Medan', 0, NULL, NULL, 'Saya adalah pekerja rumah tangga yang berpengalaman selama 5 tahun. Saya terampil dalam membersihkan, mencuci, dan merawat anak-anak dengan penuh perhatian.', '0890123456', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(101, 0, 'Nadia Nugroho', 5100000, 33, '4.8', 'Surabaya', 0, NULL, NULL, 'Pengalaman 6 tahun sebagai pekerja rumah tangga. Ahli dalam merapikan rumah, mencuci pakaian, dan menjaga kebersihan lingkungan.', '0812345678', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(102, 0, 'Oscar Susanto', 4700000, 26, '4.5', 'Jakarta', 0, NULL, NULL, 'Saya telah bekerja sebagai pekerja rumah tangga selama 4 tahun. Saya menjalankan tugas-tugas rumah tangga dengan baik, seperti membersihkan rumah, mencuci pakaian, dan merawat anak-anak dengan penuh perhatian.', '0823456789', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(103, 0, 'Putri Wijaya', 5300000, 30, '4.4', 'Bandung', 0, NULL, NULL, 'Dalam 3 tahun terakhir, saya telah menjadi pekerja rumah tangga yang terampil dalam mengatur jadwal kegiatan rumah tangga, menjaga kebersihan, serta memberikan perhatian kepada anggota keluarga.', '0834567890', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(104, 0, 'Rudi Rahayu', 5000000, 29, '3.5', 'Yogyakarta', 0, NULL, NULL, 'Pengalaman 6 tahun sebagai pekerja rumah tangga. Saya mampu melakukan berbagai tugas rumah tangga dengan teliti dan bertanggung jawab.', '0845678901', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(105, 0, 'Sinta Prasetyo', 4800000, 28, '4.0', 'Medan', 0, NULL, NULL, 'Saya adalah pekerja rumah tangga berpengalaman selama 7 tahun. Saya terampil dalam membersihkan rumah, mencuci pakaian, dan merawat anak-anak.', '0890123456', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(106, 0, 'Tono Nugroho', 5200000, 31, '4.4', 'Surabaya', 0, NULL, NULL, 'Pekerja rumah tangga dengan pengalaman 4 tahun. Saya ahli dalam membersihkan rumah, merapikan pakaian, dan menyiapkan makanan.', '0812345678', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(107, 0, 'Udin Susanti', 5000000, 29, '3.6', 'Jakarta', 0, NULL, NULL, 'Saya telah bekerja sebagai pekerja rumah tangga selama 5 tahun. Selama periode tersebut, saya telah melaksanakan berbagai tugas, termasuk membersihkan rumah, mencuci pakaian, menyiapkan makanan, dan merawat anak-anak.', '0823456789', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(108, 0, 'Vita Prasetyo', 4700000, 26, '4.4', 'Bandung', 0, NULL, NULL, 'Dalam 3 tahun terakhir, saya telah menjadi pekerja rumah tangga yang ahli dalam merapikan rumah, mencuci dan melipat pakaian, serta merawat anak-anak dengan penuh perhatian.', '0834567890', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(109, 0, 'Wawan Nugroho', 5300000, 30, '4.4', 'Yogyakarta', 0, NULL, NULL, 'Pekerja rumah tangga selama 4 tahun, menjalankan tugas-tugas rumah tangga dengan baik, seperti membersihkan rumah, mencuci pakaian, dan merawat anak-anak dengan penuh perhatian.', '0845678901', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(110, 0, 'Yanti Rahayu', 5100000, 33, '4.1', 'Medan', 0, NULL, NULL, 'Saya adalah pekerja rumah tangga yang berpengalaman selama 5 tahun. Saya terampil dalam membersihkan, mencuci, dan merawat anak-anak dengan penuh perhatian.', '0890123456', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(111, 0, 'Zara Prasetyo', 4900000, 27, '3.7', 'Surabaya', 0, NULL, NULL, 'Pengalaman 6 tahun sebagai pekerja rumah tangga. Ahli dalam merapikan rumah, mencuci pakaian, dan menjaga kebersihan lingkungan.', '0812345678', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(112, 0, 'Abdi Susanti', 5300000, 30, '4.1', 'Jakarta', 0, NULL, NULL, 'Saya telah bekerja sebagai pekerja rumah tangga selama 4 tahun. Saya menjalankan tugas-tugas rumah tangga dengan baik, seperti membersihkan rumah, mencuci pakaian, dan merawat anak-anak dengan penuh perhatian.', '0823456789', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(113, 0, 'Bella Prasetyo', 5100000, 33, '4.2', 'Bandung', 0, NULL, NULL, 'Dalam 3 tahun terakhir, saya telah menjadi pekerja rumah tangga yang terampil dalam mengatur jadwal kegiatan rumah tangga, menjaga kebersihan, serta memberikan perhatian kepada anggota keluarga.', '0834567890', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(114, 0, 'Citra Nugroho', 4900000, 27, '4.1', 'Yogyakarta', 0, NULL, NULL, 'Pengalaman 6 tahun sebagai pekerja rumah tangga. Saya mampu melakukan berbagai tugas rumah tangga dengan teliti dan bertanggung jawab.', '0845678901', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(115, 0, 'Dharma Susanto', 5300000, 30, '4.2', 'Medan', 0, NULL, NULL, 'Saya adalah pekerja rumah tangga berpengalaman selama 7 tahun. Saya terampil dalam membersihkan rumah, mencuci pakaian, dan merawat anak-anak.', '0890123456', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(116, 0, 'Eva Prasetyo', 5100000, 33, '3.8', 'Surabaya', 0, NULL, NULL, 'Pekerja rumah tangga dengan pengalaman 4 tahun. Saya ahli dalam membersihkan rumah, merapikan pakaian, dan menyiapkan makanan.', '0812345678', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(117, 0, 'Fandy Nugroho', 4700000, 26, '4.5', 'Jakarta', 0, NULL, NULL, 'Saya telah bekerja sebagai pekerja rumah tangga selama 5 tahun. Selama periode tersebut, saya telah melaksanakan berbagai tugas, termasuk membersihkan rumah, mencuci pakaian, menyiapkan makanan, dan merawat anak-anak.', '0823456789', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(118, 0, 'Gita Susanto', 5300000, 30, '4.6', 'Bandung', 0, NULL, NULL, 'Dalam 3 tahun terakhir, saya telah menjadi pekerja rumah tangga yang ahli dalam merapikan rumah, mencuci dan melipat pakaian, serta merawat anak-anak dengan penuh perhatian.', '0834567890', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(119, 0, 'Hendra Prasetyo', 5100000, 33, '4.4', 'Yogyakarta', 0, NULL, NULL, 'Pekerja rumah tangga selama 4 tahun, menjalankan tugas-tugas rumah tangga dengan baik, seperti membersihkan rumah, mencuci pakaian, dan merawat anak-anak dengan penuh perhatian.', '0845678901', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(120, 0, 'Indah Nugroho', 4700000, 26, '4.8', 'Medan', 0, NULL, NULL, 'Saya adalah pekerja rumah tangga yang berpengalaman selama 5 tahun. Saya terampil dalam membersihkan, mencuci, dan merawat anak-anak dengan penuh perhatian.', '0890123456', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(121, 0, 'Joni Susanto', 5300000, 30, '4.3', 'Surabaya', 0, NULL, NULL, 'Pengalaman 6 tahun sebagai pekerja rumah tangga. Ahli dalam merapikan rumah, mencuci pakaian, dan menjaga kebersihan lingkungan.', '0812345678', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(122, 0, 'Kiki Prasetyo', 5100000, 33, '3.5', 'Jakarta', 0, NULL, NULL, 'Saya telah bekerja sebagai pekerja rumah tangga selama 4 tahun. Saya menjalankan tugas-tugas rumah tangga dengan baik, seperti membersihkan rumah, mencuci pakaian, dan merawat anak-anak dengan penuh perhatian.', '0823456789', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(123, 0, 'Lina Nugroho', 4700000, 26, '4.2', 'Bandung', 0, NULL, NULL, 'Dalam 3 tahun terakhir, saya telah menjadi pekerja rumah tangga yang terampil dalam mengatur jadwal kegiatan rumah tangga, menjaga kebersihan, serta memberikan perhatian kepada anggota keluarga.', '0834567890', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(124, 0, 'Mila Susanto', 5300000, 30, '3.8', 'Yogyakarta', 0, NULL, NULL, 'Pengalaman 6 tahun sebagai pekerja rumah tangga. Saya mampu melakukan berbagai tugas rumah tangga dengan teliti dan bertanggung jawab.', '0845678901', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(125, 0, 'Nadia Prasetyo', 4900000, 27, '4.4', 'Medan', 0, NULL, NULL, 'Saya adalah pekerja rumah tangga berpengalaman selama 7 tahun. Saya terampil dalam membersihkan rumah, mencuci pakaian, dan merawat anak-anak.', '0890123456', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(126, 0, 'Oscar Nugroho', 5300000, 30, '4.0', 'Surabaya', 0, NULL, NULL, 'Pekerja rumah tangga dengan pengalaman 4 tahun. Saya ahli dalam membersihkan rumah, merapikan pakaian, dan menyiapkan makanan.', '0812345678', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(127, 0, 'Putri Susanto', 4700000, 26, '3.6', 'Jakarta', 0, NULL, NULL, 'Saya telah bekerja sebagai pekerja rumah tangga selama 5 tahun. Selama periode tersebut, saya telah melaksanakan berbagai tugas, termasuk membersihkan rumah, mencuci pakaian, menyiapkan makanan, dan merawat anak-anak.', '0823456789', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(128, 0, 'Rudi Prasetyo', 5300000, 30, '4.0', 'Bandung', 0, NULL, NULL, 'Dalam 3 tahun terakhir, saya telah menjadi pekerja rumah tangga yang ahli dalam merapikan rumah, mencuci dan melipat pakaian, serta merawat anak-anak dengan penuh perhatian.', '0834567890', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(129, 0, 'Sinta Nugroho', 5100000, 33, '4.0', 'Yogyakarta', 0, NULL, NULL, 'Pekerja rumah tangga selama 4 tahun, menjalankan tugas-tugas rumah tangga dengan baik, seperti membersihkan rumah, mencuci pakaian, dan merawat anak-anak dengan penuh perhatian.', '0845678901', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(130, 0, 'Tono Susanto', 4700000, 26, '4.8', 'Medan', 0, NULL, NULL, 'Saya adalah pekerja rumah tangga yang berpengalaman selama 5 tahun. Saya terampil dalam membersihkan, mencuci, dan merawat anak-anak dengan penuh perhatian.', '0890123456', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(131, 0, 'Udin Prasetyo', 5300000, 30, '3.8', 'Surabaya', 0, NULL, NULL, 'Pengalaman 6 tahun sebagai pekerja rumah tangga. Saya mampu melakukan berbagai tugas rumah tangga dengan teliti dan bertanggung jawab.', '0812345678', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(132, 0, 'Vita Nugroho', 4900000, 27, '4.2', 'Jakarta', 0, NULL, NULL, 'Saya adalah pekerja rumah tangga berpengalaman selama 7 tahun. Saya terampil dalam membersihkan rumah, mencuci pakaian, dan merawat anak-anak.', '0823456789', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(133, 0, 'Wawan Susanto', 5300000, 30, '4.4', 'Bandung', 0, NULL, NULL, 'Pekerja rumah tangga dengan pengalaman 4 tahun. Saya ahli dalam membersihkan rumah, merapikan pakaian, dan menyiapkan makanan.', '0834567890', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(134, 0, 'Yanti Prasetyo', 5100000, 33, '4.4', 'Yogyakarta', 0, NULL, NULL, 'Saya telah bekerja sebagai pekerja rumah tangga selama 5 tahun. Selama periode tersebut, saya telah melaksanakan berbagai tugas, termasuk membersihkan rumah, mencuci pakaian, menyiapkan makanan, dan merawat anak-anak.', '0845678901', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(135, 0, 'Zara Nugroho', 4900000, 27, '3.9', 'Medan', 0, NULL, NULL, 'Dalam 3 tahun terakhir, saya telah menjadi pekerja rumah tangga yang ahli dalam merapikan rumah, mencuci dan melipat pakaian, serta merawat anak-anak dengan penuh perhatian.', '0890123456', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(136, 0, 'Abdi Prasetyo', 5300000, 30, '4.4', 'Surabaya', 0, NULL, NULL, 'Pekerja rumah tangga selama 4 tahun, menjalankan tugas-tugas rumah tangga dengan baik, seperti membersihkan rumah, mencuci pakaian, dan merawat anak-anak dengan penuh perhatian.', '0812345678', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(137, 0, 'Bella Susanto', 4700000, 26, '3.6', 'Jakarta', 0, NULL, NULL, 'Saya adalah pekerja rumah tangga yang berpengalaman selama 5 tahun. Saya terampil dalam membersihkan, mencuci, dan merawat anak-anak dengan penuh perhatian.', '0823456789', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(138, 0, 'Citra Nugroho', 5300000, 30, '4.2', 'Bandung', 0, NULL, NULL, 'Pengalaman 6 tahun sebagai pekerja rumah tangga. Ahli dalam merapikan rumah, mencuci pakaian, dan menjaga kebersihan lingkungan.', '0834567890', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(139, 0, 'Dharma Prasetyo', 5100000, 33, '4.0', 'Yogyakarta', 0, NULL, NULL, 'Saya telah bekerja sebagai pekerja rumah tangga selama 4 tahun. Saya menjalankan tugas-tugas rumah tangga dengan baik, seperti membersihkan rumah, mencuci pakaian, dan merawat anak-anak dengan penuh perhatian.', '0845678901', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(140, 0, 'Eva Nugroho', 4900000, 27, '3.7', 'Medan', 0, NULL, NULL, 'Dalam 3 tahun terakhir, saya telah menjadi pekerja rumah tangga yang terampil dalam mengatur jadwal kegiatan rumah tangga, menjaga kebersihan, serta memberikan perhatian kepada anggota keluarga.', '0890123456', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(141, 0, 'Fandy Susanto', 5300000, 30, '4.5', 'Surabaya', 0, NULL, NULL, 'Pengalaman 6 tahun sebagai pekerja rumah tangga. Saya mampu melakukan berbagai tugas rumah tangga dengan teliti dan bertanggung jawab.', '0812345678', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(142, 0, 'Gita Prasetyo', 4700000, 26, '4.8', 'Jakarta', 0, NULL, NULL, 'Saya adalah pekerja rumah tangga berpengalaman selama 7 tahun. Saya terampil dalam membersihkan rumah, mencuci pakaian, dan merawat anak-anak.', '0823456789', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(143, 0, 'Hendra Nugroho', 5300000, 30, '4.2', 'Bandung', 0, NULL, NULL, 'Pekerja rumah tangga dengan pengalaman 4 tahun. Saya ahli dalam membersihkan rumah, merapikan pakaian, dan menyiapkan makanan.', '0834567890', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(144, 0, 'Indah Susanto', 5100000, 33, '4.4', 'Yogyakarta', 0, NULL, NULL, 'Saya telah bekerja sebagai pekerja rumah tangga selama 5 tahun. Selama periode tersebut, saya telah melaksanakan berbagai tugas, termasuk membersihkan rumah, mencuci pakaian, menyiapkan makanan, dan merawat anak-anak.', '0845678901', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(145, 0, 'Joni Nugroho', 4700000, 26, '4.5', 'Medan', 0, NULL, NULL, 'Dalam 3 tahun terakhir, saya telah menjadi pekerja rumah tangga yang ahli dalam merapikan rumah, mencuci dan melipat pakaian, serta merawat anak-anak dengan penuh perhatian.', '0890123456', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(146, 0, 'Kiki Prasetyo', 5300000, 30, '4.3', 'Surabaya', 0, NULL, NULL, 'Pekerja rumah tangga selama 4 tahun, menjalankan tugas-tugas rumah tangga dengan baik, seperti membersihkan rumah, mencuci pakaian, dan merawat anak-anak dengan penuh perhatian.', '0812345678', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(147, 0, 'Lina Susanto', 4900000, 27, '4.4', 'Jakarta', 0, NULL, NULL, 'Saya adalah pekerja rumah tangga yang berpengalaman selama 5 tahun. Saya terampil dalam membersihkan, mencuci, dan merawat anak-anak dengan penuh perhatian.', '0823456789', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(148, 0, 'Mila Nugroho', 5300000, 30, '4.0', 'Bandung', 0, NULL, NULL, 'Pengalaman 6 tahun sebagai pekerja rumah tangga. Ahli dalam merapikan rumah, mencuci pakaian, dan menjaga kebersihan lingkungan.', '0834567890', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(149, 0, 'Nadia Prasetyo', 5100000, 33, '3.6', 'Yogyakarta', 0, NULL, NULL, 'Saya telah bekerja sebagai pekerja rumah tangga selama 4 tahun. Saya menjalankan tugas-tugas rumah tangga dengan baik, seperti membersihkan rumah, mencuci pakaian, dan merawat anak-anak dengan penuh perhatian.', '0845678901', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(150, 0, 'Oscar Nugroho', 4700000, 26, '3.8', 'Medan', 0, NULL, NULL, 'Dalam 3 tahun terakhir, saya telah menjadi pekerja rumah tangga yang terampil dalam mengatur jadwal kegiatan rumah tangga, menjaga kebersihan, serta memberikan perhatian kepada anggota keluarga.', '0890123456', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(151, 0, 'Putri Prasetyo', 5300000, 30, '4.6', 'Surabaya', 0, NULL, NULL, 'Pengalaman 6 tahun sebagai pekerja rumah tangga. Saya mampu melakukan berbagai tugas rumah tangga dengan teliti dan bertanggung jawab.', '0812345678', '2023-05-24 18:17:42', '2023-05-24 18:17:42'),
(152, 0, 'Agus Setiawan', 5000000, 25, '3.8', 'Jakarta', 0, NULL, NULL, 'Saya adalah pekerja rumah tangga berpengalaman selama 7 tahun. Saya terampil dalam membersihkan rumah, mencuci pakaian, dan merawat anak-anak.', '0812345678', '2023-05-25 01:33:15', '2023-05-25 01:33:15'),
(153, 0, 'Wawan Saputra', 4500000, 30, '4.6', 'Surabaya', 0, NULL, NULL, 'Pekerja rumah tangga dengan pengalaman 4 tahun. Saya ahli dalam membersihkan rumah, merapikan pakaian, dan menyiapkan makanan.', '0823456789', '2023-05-25 01:33:15', '2023-05-25 01:33:15'),
(154, 0, 'Citra Mulyani', 5500000, 28, '3.6', 'Bandung', 0, NULL, NULL, 'Saya telah bekerja sebagai pekerja rumah tangga selama 5 tahun. Selama periode tersebut, saya telah melaksanakan berbagai tugas, termasuk membersihkan rumah, mencuci pakaian, menyiapkan makanan, dan merawat anak-anak.', '0834567890', '2023-05-25 01:33:15', '2023-05-25 01:33:15'),
(155, 0, 'Dewi Indah', 4800000, 32, '3.8', 'Yogyakarta', 0, NULL, NULL, 'Dalam 3 tahun terakhir, saya telah menjadi pekerja rumah tangga yang ahli dalam merapikan rumah, mencuci dan melipat pakaian, serta merawat anak-anak dengan penuh perhatian.', '0845678901', '2023-05-25 01:33:15', '2023-05-25 01:33:15'),
(156, 0, 'Eko Pratama', 5200000, 27, '4.5', 'Medan', 0, NULL, NULL, 'Pekerja rumah tangga selama 4 tahun, menjalankan tugas-tugas rumah tangga dengan baik, seperti membersihkan rumah, mencuci pakaian, dan merawat anak-anak dengan penuh perhatian.', '0890123456', '2023-05-25 01:33:15', '2023-05-25 01:33:15'),
(157, 0, 'Fanny Sari', 4700000, 31, '4.5', 'Surabaya', 0, NULL, NULL, 'Saya adalah pekerja rumah tangga yang berpengalaman selama 5 tahun. Saya terampil dalam membersihkan, mencuci, dan merawat anak-anak dengan penuh perhatian.', '0891234567', '2023-05-25 01:33:15', '2023-05-25 01:33:15'),
(158, 0, 'Gita Purnama', 5100000, 26, '4.3', 'Jakarta', 0, NULL, NULL, 'Pengalaman 6 tahun sebagai pekerja rumah tangga. Ahli dalam merapikan rumah, mencuci pakaian, dan menjaga kebersihan lingkungan.', '0892345678', '2023-05-25 01:33:15', '2023-05-25 01:33:15'),
(159, 0, 'Hadi Susanto', 4600000, 29, '4.4', 'Bandung', 0, NULL, NULL, 'Saya telah bekerja sebagai pekerja rumah tangga selama 4 tahun. Saya menjalankan tugas-tugas rumah tangga dengan baik, seperti membersihkan rumah, mencuci pakaian, dan merawat anak-anak dengan penuh perhatian.', '0893456789', '2023-05-25 01:33:15', '2023-05-25 01:33:15'),
(160, 0, 'Ika Nurhayati', 4900000, 33, '4.0', 'Yogyakarta', 0, NULL, NULL, 'Dalam 3 tahun terakhir, saya telah menjadi pekerja rumah tangga yang terampil dalam mengatur jadwal kegiatan rumah tangga, menjaga kebersihan, serta memberikan perhatian kepada anggota keluarga.', '0894567890', '2023-05-25 01:33:15', '2023-05-25 01:33:15'),
(161, 0, 'Joko Wibowo', 5300000, 28, '4.7', 'Surabaya', 0, NULL, NULL, 'Pengalaman 6 tahun sebagai pekerja rumah tangga. Saya mampu melakukan berbagai tugas rumah tangga dengan teliti dan bertanggung jawab.', '0895678901', '2023-05-25 01:33:15', '2023-05-25 01:33:15'),
(162, 0, 'Kartika Sari', 4800000, 34, '3.7', 'Jakarta', 0, NULL, NULL, 'Saya adalah pekerja rumah tangga berpengalaman selama 7 tahun. Saya terampil dalam membersihkan rumah, mencuci pakaian, dan merawat anak-anak.', '0896789012', '2023-05-25 01:33:15', '2023-05-25 01:33:15'),
(163, 0, 'Lukman Hakim', 5200000, 29, '3.7', 'Bandung', 0, NULL, NULL, 'Pekerja rumah tangga dengan pengalaman 4 tahun. Saya ahli dalam membersihkan rumah, merapikan pakaian, dan menyiapkan makanan.', '0897890123', '2023-05-25 01:33:15', '2023-05-25 01:33:15'),
(164, 0, 'Mita Wijaya', 4700000, 26, '4.0', 'Jakarta', 0, NULL, NULL, 'Saya telah bekerja sebagai pekerja rumah tangga selama 5 tahun. Selama periode tersebut, saya telah melaksanakan berbagai tugas, termasuk membersihkan rumah, mencuci pakaian, menyiapkan makanan, dan merawat anak-anak.', '0898901234', '2023-05-25 01:33:15', '2023-05-25 01:33:15'),
(165, 0, 'Nina Puspita', 5100000, 31, '4.1', 'Surabaya', 0, NULL, NULL, 'Dalam 3 tahun terakhir, saya telah menjadi pekerja rumah tangga yang ahli dalam merapikan rumah, mencuci dan melipat pakaian, serta merawat anak-anak dengan penuh perhatian.', '0899012345', '2023-05-25 01:33:15', '2023-05-25 01:33:15');
INSERT INTO `prts` (`id`, `user_id`, `nama`, `gaji`, `umur`, `rating`, `lokasi`, `durasi`, `jamkerja`, `catatan`, `deskripsi`, `no_telepon`, `created_at`, `updated_at`) VALUES
(166, 0, 'Oscar Gunawan', 4900000, 27, '4.8', 'Bandung', 0, NULL, NULL, 'Pekerja rumah tangga selama 4 tahun, menjalankan tugas-tugas rumah tangga dengan baik, seperti membersihkan rumah, mencuci pakaian, dan merawat anak-anak dengan penuh perhatian.', '0890123456', '2023-05-25 01:33:15', '2023-05-25 01:33:15'),
(167, 0, 'Putri Anggraini', 5300000, 32, '3.9', 'Yogyakarta', 0, NULL, NULL, 'Saya adalah pekerja rumah tangga yang berpengalaman selama 5 tahun. Saya terampil dalam membersihkan, mencuci, dan merawat anak-anak dengan penuh perhatian.', '0891234567', '2023-05-25 01:33:15', '2023-05-25 01:33:15'),
(168, 0, 'Rudi Santoso', 4700000, 28, '4.5', 'Medan', 0, NULL, NULL, 'Pengalaman 6 tahun sebagai pekerja rumah tangga. Ahli dalam merapikan rumah, mencuci pakaian, dan menjaga kebersihan lingkungan.', '0892345678', '2023-05-25 01:33:15', '2023-05-25 01:33:15'),
(169, 0, 'Sari Mulia', 5200000, 33, '4.3', 'Surabaya', 0, NULL, NULL, 'Saya telah bekerja sebagai pekerja rumah tangga selama 4 tahun. Saya menjalankan tugas-tugas rumah tangga dengan baik, seperti membersihkan rumah, mencuci pakaian, dan merawat anak-anak dengan penuh perhatian.', '0893456789', '2023-05-25 01:33:15', '2023-05-25 01:33:15'),
(170, 0, 'Taufik Hidayat', 4800000, 29, '4.5', 'Jakarta', 0, NULL, NULL, 'Dalam 3 tahun terakhir, saya telah menjadi pekerja rumah tangga yang terampil dalam mengatur jadwal kegiatan rumah tangga, menjaga kebersihan, serta memberikan perhatian kepada anggota keluarga.', '0894567890', '2023-05-25 01:33:15', '2023-05-25 01:33:15'),
(171, 0, 'Uci Indah', 5100000, 34, '4.7', 'Bandung', 0, NULL, NULL, 'Pengalaman 6 tahun sebagai pekerja rumah tangga. Saya mampu melakukan berbagai tugas rumah tangga dengan teliti dan bertanggung jawab.', '0895678901', '2023-05-25 01:33:15', '2023-05-25 01:33:15'),
(172, 0, 'Vina Puspitasari', 4600000, 30, '4.7', 'Yogyakarta', 0, NULL, NULL, 'Saya adalah pekerja rumah tangga berpengalaman selama 7 tahun. Saya terampil dalam membersihkan rumah, mencuci pakaian, dan merawat anak-anak.', '0896789012', '2023-05-25 01:33:15', '2023-05-25 01:33:15'),
(173, 0, 'Wahyu Santoso', 5000000, 35, '4.7', 'Surabaya', 0, NULL, NULL, 'Pekerja rumah tangga dengan pengalaman 4 tahun. Saya ahli dalam membersihkan rumah, merapikan pakaian, dan menyiapkan makanan.', '0897890123', '2023-05-25 01:33:15', '2023-05-25 01:33:15'),
(174, 0, 'Xavier Wijaya', 4800000, 31, '4.4', 'Medan', 0, NULL, NULL, 'Saya telah bekerja sebagai pekerja rumah tangga selama 5 tahun. Selama periode tersebut, saya telah melaksanakan berbagai tugas, termasuk membersihkan rumah, mencuci pakaian, menyiapkan makanan, dan merawat anak-anak.', '0898901234', '2023-05-25 01:33:15', '2023-05-25 01:33:15'),
(175, 0, 'Yunita Mulia', 5300000, 26, '4.5', 'Jakarta', 0, NULL, NULL, 'Dalam 3 tahun terakhir, saya telah menjadi pekerja rumah tangga yang ahli dalam merapikan rumah, mencuci dan melipat pakaian, serta merawat anak-anak dengan penuh perhatian.', '0899012345', '2023-05-25 01:33:15', '2023-05-25 01:33:15'),
(176, 0, 'Zaki Susanto', 4700000, 32, '4.3', 'Bandung', 0, NULL, NULL, 'Pekerja rumah tangga selama 4 tahun, menjalankan tugas-tugas rumah tangga dengan baik, seperti membersihkan rumah, mencuci pakaian, dan merawat anak-anak dengan penuh perhatian.', '0890123456', '2023-05-25 01:33:15', '2023-05-25 01:33:15'),
(177, 0, 'Ani Wijaya', 5100000, 27, '4.4', 'Yogyakarta', 0, NULL, NULL, 'Saya adalah pekerja rumah tangga yang berpengalaman selama 5 tahun. Saya terampil dalam membersihkan, mencuci, dan merawat anak-anak dengan penuh perhatian.', '0891234567', '2023-05-25 01:33:15', '2023-05-25 01:33:15'),
(178, 0, 'Bambang Santoso', 4900000, 33, '4.1', 'Surabaya', 0, NULL, NULL, 'Pengalaman 6 tahun sebagai pekerja rumah tangga. Ahli dalam merapikan rumah, mencuci pakaian, dan menjaga kebersihan lingkungan.', '0892345678', '2023-05-25 01:33:15', '2023-05-25 01:33:15'),
(179, 0, 'Cindy Mulia', 5300000, 28, '3.9', 'Jakarta', 0, NULL, NULL, 'Saya telah bekerja sebagai pekerja rumah tangga selama 4 tahun. Saya menjalankan tugas-tugas rumah tangga dengan baik, seperti membersihkan rumah, mencuci pakaian, dan merawat anak-anak dengan penuh perhatian.', '0893456789', '2023-05-25 01:33:15', '2023-05-25 01:33:15'),
(180, 0, 'Dodi Purnama', 4800000, 34, '5.0', 'Bandung', 0, NULL, NULL, 'Dalam 3 tahun terakhir, saya telah menjadi pekerja rumah tangga yang terampil dalam mengatur jadwal kegiatan rumah tangga, menjaga kebersihan, serta memberikan perhatian kepada anggota keluarga.', '0894567890', '2023-05-25 01:33:15', '2023-05-25 01:33:15'),
(181, 0, 'Eva Sari', 5200000, 29, '3.7', 'Yogyakarta', 0, NULL, NULL, 'Pengalaman 6 tahun sebagai pekerja rumah tangga. Saya mampu melakukan berbagai tugas rumah tangga dengan teliti dan bertanggung jawab.', '0895678901', '2023-05-25 01:33:15', '2023-05-25 01:33:15'),
(182, 0, 'Faisal Hakim', 4700000, 35, '4.8', 'Medan', 0, NULL, NULL, 'Saya adalah pekerja rumah tangga berpengalaman selama 7 tahun. Saya terampil dalam membersihkan rumah, mencuci pakaian, dan merawat anak-anak.', '0896789012', '2023-05-25 01:33:15', '2023-05-25 01:33:15'),
(183, 0, 'Gita Nurhayati', 5000000, 30, '4.9', 'Surabaya', 0, NULL, NULL, 'Pekerja rumah tangga dengan pengalaman 4 tahun. Saya ahli dalam membersihkan rumah, merapikan pakaian, dan menyiapkan makanan.', '0897890123', '2023-05-25 01:33:15', '2023-05-25 01:33:15'),
(184, 0, 'Hendra Wibowo', 4600000, 26, '3.7', 'Jakarta', 0, NULL, NULL, 'Saya telah bekerja sebagai pekerja rumah tangga selama 5 tahun. Selama periode tersebut, saya telah melaksanakan berbagai tugas, termasuk membersihkan rumah, mencuci pakaian, menyiapkan makanan, dan merawat anak-anak.', '0898901234', '2023-05-25 01:33:15', '2023-05-25 01:33:15'),
(185, 0, 'Indah Puspita', 5100000, 31, '4.7', 'Bandung', 0, NULL, NULL, 'Dalam 3 tahun terakhir, saya telah menjadi pekerja rumah tangga yang ahli dalam merapikan rumah, mencuci dan melipat pakaian, serta merawat anak-anak dengan penuh perhatian.', '0899012345', '2023-05-25 01:33:15', '2023-05-27 14:04:42'),
(186, 0, 'Joko Santoso', 4900000, 27, '4.6', 'Yogyakarta', 0, NULL, NULL, 'Pekerja rumah tangga selama 4 tahun, menjalankan tugas-tugas rumah tangga dengan baik, seperti membersihkan rumah, mencuci pakaian, dan merawat anak-anak dengan penuh perhatian.', '0890123456', '2023-05-25 01:33:15', '2023-05-25 01:33:15'),
(187, 0, 'Kartika Mulia', 5300000, 32, '3.6', 'Surabaya', 0, NULL, NULL, 'Saya adalah pekerja rumah tangga yang berpengalaman selama 5 tahun. Saya terampil dalam membersihkan, mencuci, dan merawat anak-anak dengan penuh perhatian.', '0891234567', '2023-05-25 01:33:15', '2023-05-25 01:33:15'),
(188, 0, 'Lia Wijaya', 4700000, 28, '3.6', 'Medan', 0, NULL, NULL, 'Pengalaman 6 tahun sebagai pekerja rumah tangga. Ahli dalam merapikan rumah, mencuci pakaian, dan menjaga kebersihan lingkungan.', '0892345678', '2023-05-25 01:33:15', '2023-05-25 01:33:15'),
(189, 0, 'Miftah Hakim', 5100000, 33, '4.0', 'Jakarta', 0, NULL, NULL, 'Saya telah bekerja sebagai pekerja rumah tangga selama 4 tahun. Saya menjalankan tugas-tugas rumah tangga dengan baik, seperti membersihkan rumah, mencuci pakaian, dan merawat anak-anak dengan penuh perhatian.', '0893456789', '2023-05-25 01:33:15', '2023-05-25 01:33:15'),
(190, 0, 'Nadia Sari', 4700000, 29, '4.0', 'Bandung', 0, NULL, NULL, 'Dalam 3 tahun terakhir, saya telah menjadi pekerja rumah tangga yang terampil dalam mengatur jadwal kegiatan rumah tangga, menjaga kebersihan, serta memberikan perhatian kepada anggota keluarga.', '0894567890', '2023-05-25 01:33:15', '2023-05-25 01:33:15'),
(191, 0, 'Oscar Nurhayati', 5200000, 34, '4.7', 'Yogyakarta', 0, NULL, NULL, 'Pengalaman 6 tahun sebagai pekerja rumah tangga. Saya mampu melakukan berbagai tugas rumah tangga dengan teliti dan bertanggung jawab.', '0895678901', '2023-05-25 01:33:15', '2023-05-25 01:33:15'),
(192, 0, 'Putri Wibowo', 4800000, 30, '4.8', 'Surabaya', 0, NULL, NULL, 'Saya adalah pekerja rumah tangga berpengalaman selama 7 tahun. Saya terampil dalam membersihkan rumah, mencuci pakaian, dan merawat anak-anak.', '0896789012', '2023-05-25 01:33:15', '2023-05-25 01:33:15'),
(193, 0, 'Rudi Hakim', 5300000, 35, '5.0', 'Jakarta', 0, NULL, NULL, 'Pekerja rumah tangga dengan pengalaman 4 tahun. Saya ahli dalam membersihkan rumah, merapikan pakaian, dan menyiapkan makanan.', '0897890123', '2023-05-25 01:33:15', '2023-05-25 01:33:15'),
(194, 0, 'Sari Santoso', 4700000, 31, '3.9', 'Bandung', 0, NULL, NULL, 'Saya telah bekerja sebagai pekerja rumah tangga selama 5 tahun. Selama periode tersebut, saya telah melaksanakan berbagai tugas, termasuk membersihkan rumah, mencuci pakaian, menyiapkan makanan, dan merawat anak-anak.', '0898901234', '2023-05-25 01:33:15', '2023-05-25 01:33:15'),
(195, 0, 'Taufik Mulia', 5100000, 26, '4.1', 'Yogyakarta', 0, NULL, NULL, 'Dalam 3 tahun terakhir, saya telah menjadi pekerja rumah tangga yang ahli dalam merapikan rumah, mencuci dan melipat pakaian, serta merawat anak-anak dengan penuh perhatian.', '0899012345', '2023-05-25 01:33:15', '2023-05-25 01:33:15'),
(196, 0, 'Uci Hakim', 4800000, 32, '3.7', 'Surabaya', 0, NULL, NULL, 'Pekerja rumah tangga selama 4 tahun, menjalankan tugas-tugas rumah tangga dengan baik, seperti membersihkan rumah, mencuci pakaian, dan merawat anak-anak dengan penuh perhatian.', '0890123456', '2023-05-25 01:33:15', '2023-05-25 01:33:15'),
(197, 0, 'Vina Nurhayati', 5300000, 27, '4.4', 'Medan', 0, NULL, NULL, 'Saya adalah pekerja rumah tangga yang berpengalaman selama 5 tahun. Saya terampil dalam membersihkan, mencuci, dan merawat anak-anak dengan penuh perhatian.', '0891234567', '2023-05-25 01:33:15', '2023-05-25 01:33:15'),
(198, 0, 'Wahyu Wibowo', 4700000, 33, '4.5', 'Jakarta', 0, NULL, NULL, 'Pengalaman 6 tahun sebagai pekerja rumah tangga. Ahli dalam merapikan rumah, mencuci pakaian, dan menjaga kebersihan lingkungan.', '0892345678', '2023-05-25 01:33:15', '2023-05-25 01:33:15'),
(199, 0, 'Xavier Mulia', 5200000, 28, '4.1', 'Bandung', 0, NULL, NULL, 'Saya telah bekerja sebagai pekerja rumah tangga selama 4 tahun. Saya menjalankan tugas-tugas rumah tangga dengan baik, seperti membersihkan rumah, mencuci pakaian, dan merawat anak-anak dengan penuh perhatian.', '0893456789', '2023-05-25 01:33:15', '2023-05-25 01:33:15'),
(200, 0, 'Yunita Hakim', 4800000, 34, '5.0', 'Yogyakarta', 0, NULL, NULL, 'Dalam 3 tahun terakhir, saya telah menjadi pekerja rumah tangga yang terampil dalam mengatur jadwal kegiatan rumah tangga, menjaga kebersihan, serta memberikan perhatian kepada anggota keluarga.', '0894567890', '2023-05-25 01:33:15', '2023-05-25 01:33:15'),
(201, 0, 'Zaki Wijaya', 5300000, 29, '4.7', 'Surabaya', 0, NULL, NULL, 'Pengalaman 6 tahun sebagai pekerja rumah tangga. Ahli dalam merapikan rumah, mencuci pakaian, dan menjaga kebersihan lingkungan.', '0895678901', '2023-05-25 01:33:15', '2023-05-25 01:33:15'),
(202, 0, 'Agus Setiawan', 5000000, 25, '4.9', 'Jakarta', 0, NULL, NULL, 'Saya telah bekerja sebagai pekerja rumah tangga selama 4 tahun. Saya menjalankan tugas-tugas rumah tangga dengan baik, seperti membersihkan rumah, mencuci pakaian, dan merawat anak-anak dengan penuh perhatian.', '0812345678', '2023-05-25 02:14:45', '2023-05-25 02:14:45'),
(203, 0, 'Budi Santoso', 4500000, 30, '4.1', 'Surabaya', 0, NULL, NULL, 'Dalam 3 tahun terakhir, saya telah menjadi pekerja rumah tangga yang terampil dalam mengatur jadwal kegiatan rumah tangga, menjaga kebersihan, serta memberikan perhatian kepada anggota keluarga.', '0823456789', '2023-05-25 02:14:45', '2023-05-25 02:14:45'),
(204, 0, 'Kiran Yunita', 5500000, 28, '3.6', 'Bandung', 0, NULL, NULL, 'Pengalaman 6 tahun sebagai pekerja rumah tangga. Saya mampu melakukan berbagai tugas rumah tangga dengan teliti dan bertanggung jawab.', '0834567890', '2023-05-25 02:14:45', '2023-05-25 02:14:45'),
(205, 0, 'Dewi Indah', 4800000, 32, '3.8', 'Yogyakarta', 0, NULL, NULL, 'Saya adalah pekerja rumah tangga berpengalaman selama 7 tahun. Saya terampil dalam membersihkan rumah, mencuci pakaian, dan merawat anak-anak.', '0845678901', '2023-05-25 02:14:45', '2023-05-25 02:14:45'),
(206, 0, 'Eko Pratama', 5200000, 27, '4.5', 'Medan', 0, NULL, NULL, 'Pekerja rumah tangga dengan pengalaman 4 tahun. Saya ahli dalam membersihkan rumah, merapikan barang-barang, dan menjaga kebersihan lingkungan.', '0890123456', '2023-05-25 02:14:45', '2023-05-25 02:14:45'),
(207, 0, 'Fanny Sari', 4700000, 31, '4.9', 'Surabaya', 0, NULL, NULL, 'Saya telah bekerja sebagai pekerja rumah tangga selama 5 tahun. Saya berpengalaman dalam merawat anak-anak, membersihkan rumah, dan melakukan pekerjaan rumah tangga lainnya.', '0891234567', '2023-05-25 02:14:45', '2023-05-25 02:14:45'),
(208, 0, 'Gita Purnama', 5100000, 26, '4.5', 'Jakarta', 0, NULL, NULL, 'Dalam 4 tahun terakhir, saya telah menjadi pekerja rumah tangga yang handal. Saya dapat melakukan tugas-tugas rumah tangga dengan baik dan menjaga kebersihan rumah.', '0892345678', '2023-05-25 02:14:45', '2023-05-25 02:14:45'),
(209, 0, 'Hadi Susanto', 4600000, 29, '4.1', 'Bandung', 0, NULL, NULL, 'Pengalaman 7 tahun sebagai pekerja rumah tangga. Saya terampil dalam merapikan rumah, mencuci dan menyetrika pakaian, serta menjaga kebersihan lingkungan.', '0893456789', '2023-05-25 02:14:45', '2023-05-25 02:14:45'),
(210, 0, 'Ika Nurhayati', 4900000, 33, '3.5', 'Yogyakarta', 0, NULL, NULL, 'Saya adalah pekerja rumah tangga dengan pengalaman 5 tahun. Saya ahli dalam membersihkan rumah, mencuci pakaian, dan merawat anak-anak.', '0894567890', '2023-05-25 02:14:45', '2023-05-25 02:14:45'),
(211, 0, 'Joko Tinker', 5300000, 28, '4.9', 'Surabaya', 0, NULL, NULL, 'Saya telah bekerja sebagai pekerja rumah tangga selama 6 tahun. Saya terampil dalam membersihkan rumah, mencuci dan menyetrika pakaian, serta merawat anak-anak dengan penuh perhatian.', '0895678901', '2023-05-25 02:14:45', '2023-06-03 10:00:35'),
(212, 0, 'Kartika Sari', 4800000, 34, '4.2', 'Jakarta', 0, NULL, NULL, 'Pekerja rumah tangga dengan pengalaman 3 tahun. Saya menjalankan tugas-tugas rumah tangga dengan teliti dan bertanggung jawab.', '0896789012', '2023-05-25 02:14:45', '2023-05-25 02:14:45'),
(213, 0, 'Lukman Hakim', 5200000, 29, '4.5', 'Bandung', 0, NULL, NULL, 'Pengalaman 5 tahun sebagai pekerja rumah tangga. Saya ahli dalam merapikan rumah, mencuci pakaian, dan menjaga kebersihan lingkungan.', '0897890123', '2023-05-25 02:14:45', '2023-05-25 02:14:45'),
(214, 0, 'Mila Rachmawati', 5100000, 27, '4.8', 'Surabaya', 0, NULL, NULL, 'Saya telah bekerja sebagai pekerja rumah tangga selama 6 tahun. Saya berpengalaman dalam membersihkan rumah, merawat anak-anak, dan menjaga kebersihan lingkungan.', '0898901234', '2023-05-25 02:14:45', '2023-05-25 02:14:45'),
(215, 0, 'Nugroho Prasetyo', 4600000, 32, '4.0', 'Jakarta', 0, NULL, NULL, 'Dalam 4 tahun terakhir, saya telah menjadi pekerja rumah tangga yang handal. Saya dapat menjalankan tugas-tugas rumah tangga dengan baik dan bertanggung jawab.', '0899012345', '2023-05-25 02:14:45', '2023-05-25 02:14:45'),
(216, 0, 'Oscar Wijaya', 5000000, 29, '3.7', 'Bandung', 0, NULL, NULL, 'Pengalaman 7 tahun sebagai pekerja rumah tangga. Saya terampil dalam merapikan rumah, mencuci dan menyetrika pakaian, serta menjaga kebersihan lingkungan.', '0810987654', '2023-05-25 02:14:45', '2023-05-25 02:14:45'),
(217, 0, 'Putri Hapsari', 4800000, 35, '4.3', 'Yogyakarta', 0, NULL, NULL, 'Saya adalah pekerja rumah tangga berpengalaman selama 5 tahun. Saya ahli dalam membersihkan rumah, mencuci pakaian, dan merawat anak-anak.', '0821098765', '2023-05-25 02:14:45', '2023-05-25 02:14:45'),
(218, 0, 'Qori Ramadhan', 5100000, 28, '3.9', 'Surabaya', 0, NULL, NULL, 'Pekerja rumah tangga dengan pengalaman 4 tahun. Saya dapat menjalankan tugas-tugas rumah tangga dengan baik dan teliti.', '0832109876', '2023-05-25 02:14:45', '2023-05-25 02:14:45'),
(219, 0, 'Rina Susanti', 4700000, 30, '4.7', 'Jakarta', 0, NULL, NULL, 'Saya telah bekerja sebagai pekerja rumah tangga selama 6 tahun. Saya terampil dalam membersihkan rumah, mencuci dan menyetrika pakaian, serta merawat anak-anak dengan penuh perhatian.', '0843210987', '2023-05-25 02:14:45', '2023-05-25 02:14:45'),
(220, 0, 'Siti Rahmawati', 5300000, 26, '3.7', 'Bandung', 0, NULL, NULL, 'Pengalaman 5 tahun sebagai pekerja rumah tangga. Saya ahli dalam merapikan rumah, mencuci pakaian, dan menjaga kebersihan lingkungan.', '0854321098', '2023-05-25 02:14:45', '2023-05-25 02:14:45'),
(221, 0, 'Taufik Hidayat', 5000000, 31, '4.0', 'Yogyakarta', 0, NULL, NULL, 'Saya telah bekerja sebagai pekerja rumah tangga selama 7 tahun. Saya berpengalaman dalam membersihkan rumah, merawat anak-anak, dan menjaga kebersihan lingkungan.', '0865432109', '2023-05-25 02:14:45', '2023-06-03 09:47:13'),
(222, 0, 'Umi Kusumawati', 5200000, 27, '3.9', 'Surabaya', 0, NULL, NULL, 'Dalam 4 tahun terakhir, saya telah menjadi pekerja rumah tangga yang handal. Saya dapat menjalankan tugas-tugas rumah tangga dengan baik dan bertanggung jawab.', '0876543210', '2023-05-25 02:14:45', '2023-05-25 02:14:45'),
(223, 0, 'Vina Kartika', 4800000, 33, '3.8', 'Jakarta', 0, NULL, NULL, 'Pengalaman 7 tahun sebagai pekerja rumah tangga. Saya terampil dalam merapikan rumah, mencuci dan menyetrika pakaian, serta menjaga kebersihan lingkungan.', '0887654321', '2023-05-25 02:14:45', '2023-05-25 02:14:45'),
(224, 0, 'Wawan Sugianto', 5000000, 28, '4.1', 'Bandung', 0, NULL, NULL, 'Saya adalah pekerja rumah tangga berpengalaman selama 5 tahun. Saya ahli dalam membersihkan rumah, mencuci pakaian, dan merawat anak-anak.', '0898765432', '2023-05-25 02:14:45', '2023-05-25 02:14:45'),
(225, 0, 'Xavier Gunawan', 5300000, 34, '4.0', 'Yogyakarta', 0, NULL, NULL, 'Pekerja rumah tangga dengan pengalaman 4 tahun. Saya dapat menjalankan tugas-tugas rumah tangga dengan baik dan teliti.', '0810987654', '2023-05-25 02:14:45', '2023-06-03 10:07:50'),
(226, 0, 'Yanti Pratiwi', 5100000, 29, '4.4', 'Surabaya', 0, NULL, NULL, 'Saya telah bekerja sebagai pekerja rumah tangga selama 6 tahun. Saya terampil dalam membersihkan rumah, mencuci dan menyetrika pakaian, serta merawat anak-anak dengan penuh perhatian.', '0821098765', '2023-05-25 02:14:45', '2023-05-25 02:14:45'),
(227, 0, 'Zainal Abidin', 4700000, 35, '4.7', 'Jakarta', 0, NULL, NULL, 'Pengalaman 5 tahun sebagai pekerja rumah tangga. Saya ahli dalam merapikan rumah, mencuci pakaian, dan menjaga kebersihan lingkungan.', '0832109876', '2023-05-25 02:14:45', '2023-05-25 02:14:45'),
(228, 0, 'Anita Putri', 4800000, 26, '3.9', 'Bandung', 0, NULL, NULL, 'Saya telah bekerja sebagai pekerja rumah tangga selama 7 tahun. Saya berpengalaman dalam membersihkan rumah, merawat anak-anak, dan menjaga kebersihan lingkungan.', '0843210987', '2023-05-25 02:14:45', '2023-06-04 01:02:37'),
(229, 0, 'Bayu Santoso', 5200000, 30, '3.5', 'Yogyakarta', 0, NULL, NULL, 'Dalam 4 tahun terakhir, saya telah menjadi pekerja rumah tangga yang handal. Saya dapat menjalankan tugas-tugas rumah tangga dengan baik dan bertanggung jawab.', '0854321098', '2023-05-25 02:14:45', '2023-05-25 02:14:45'),
(230, 0, 'Citra Puspita', 5000000, 27, '3.9', 'Surabaya', 0, NULL, NULL, 'Pengalaman 7 tahun sebagai pekerja rumah tangga. Saya terampil dalam merapikan rumah, mencuci dan menyetrika pakaian, serta menjaga kebersihan lingkungan.', '0865432109', '2023-05-25 02:14:45', '2023-05-25 02:14:45'),
(231, 0, 'Dewi Anggraini', 4900000, 33, '3.9', 'Jakarta', 0, NULL, NULL, 'Saya adalah pekerja rumah tangga berpengalaman selama 4 tahun. Saya ahli dalam membersihkan rumah, mencuci pakaian, dan merawat anak-anak.', '0876543210', '2023-05-25 02:14:45', '2023-05-25 02:14:45'),
(232, 0, 'Eka Susilawati', 5300000, 28, '4.4', 'Bandung', 0, NULL, NULL, 'Pekerja rumah tangga dengan pengalaman 5 tahun. Saya dapat menjalankan tugas-tugas rumah tangga dengan baik dan teliti.', '0887654321', '2023-05-25 02:14:45', '2023-05-25 02:14:45'),
(233, 0, 'Fajar Nugraha', 5100000, 34, '3.9', 'Yogyakarta', 0, NULL, NULL, 'Saya telah bekerja sebagai pekerja rumah tangga selama 7 tahun. Saya terampil dalam merapikan rumah, mencuci dan menyetrika pakaian, serta merawat anak-anak dengan penuh perhatian.', '0898765432', '2023-05-25 02:14:45', '2023-05-25 02:14:45'),
(234, 0, 'Gita Permata', 5000000, 29, '4.3', 'Surabaya', 0, NULL, NULL, 'Pengalaman 6 tahun sebagai pekerja rumah tangga. Saya ahli dalam membersihkan rumah, mencuci pakaian, dan menjaga kebersihan lingkungan.', '0810987654', '2023-05-25 02:14:45', '2023-05-25 02:14:45'),
(235, 0, 'Hadi Setiawan', 5200000, 35, '4.7', 'Jakarta', 0, NULL, NULL, 'Saya telah bekerja sebagai pekerja rumah tangga selama 5 tahun. Saya berpengalaman dalam membersihkan rumah, merawat anak-anak, dan menjaga kebersihan lingkungan.', '0821098765', '2023-05-25 02:14:45', '2023-05-26 04:18:13'),
(236, 0, 'Indah Sari', 4700000, 26, '4.1', 'Bandung', 0, NULL, NULL, 'Dalam 3 tahun terakhir, saya telah menjadi pekerja rumah tangga yang handal. Saya dapat menjalankan tugas-tugas rumah tangga dengan baik dan bertanggung jawab.', '0832109876', '2023-05-25 02:14:45', '2023-05-25 02:14:45'),
(237, 0, 'Joko Widodo', 4800000, 30, '4.5', 'Yogyakarta', 0, NULL, NULL, 'Pengalaman 6 tahun sebagai pekerja rumah tangga. Saya terampil dalam merapikan rumah, mencuci dan menyetrika pakaian, serta menjaga kebersihan lingkungan.', '0843210987', '2023-05-25 02:14:45', '2023-05-25 02:14:45'),
(238, 0, 'Kartika Dewi', 5200000, 27, '3.7', 'Surabaya', 0, NULL, NULL, 'Saya adalah pekerja rumah tangga berpengalaman selama 4 tahun. Saya ahli dalam membersihkan rumah, mencuci pakaian, dan merawat anak-anak.', '0854321098', '2023-05-25 02:14:45', '2023-05-25 02:14:45'),
(239, 0, 'Lukman Hakim', 5300000, 33, '4.6', 'Jakarta', 0, NULL, NULL, 'Pekerja rumah tangga dengan pengalaman 5 tahun. Saya dapat menjalankan tugas-tugas rumah tangga dengan baik dan teliti.', '0865432109', '2023-05-25 02:14:45', '2023-06-03 10:08:45'),
(240, 0, 'Mila Kusuma', 4800000, 28, '4.0', 'Bandung', 0, NULL, NULL, 'Saya telah bekerja sebagai pekerja rumah tangga selama 7 tahun. Saya terampil dalam merapikan rumah, mencuci dan menyetrika pakaian, serta merawat anak-anak dengan penuh perhatian.', '0876543210', '2023-05-25 02:14:45', '2023-05-25 02:14:45'),
(241, 0, 'Nina Wulandari', 5000000, 34, '4.1', 'Yogyakarta', 0, NULL, NULL, 'Pengalaman 6 tahun sebagai pekerja rumah tangga. Saya ahli dalam membersihkan rumah, mencuci pakaian, dan menjaga kebersihan lingkungan.', '0887654321', '2023-05-25 02:14:45', '2023-05-25 02:14:45'),
(242, 0, 'Oscar Pratama', 4700000, 29, '4.9', 'Surabaya', 0, NULL, NULL, 'Saya telah bekerja sebagai pekerja rumah tangga selama 5 tahun. Saya berpengalaman dalam membersihkan rumah, merawat anak-anak, dan menjaga kebersihan lingkungan.', '0898765432', '2023-05-25 02:14:45', '2023-05-25 02:14:45'),
(243, 0, 'Putri Lestari', 4900000, 35, '4.1', 'Jakarta', 0, NULL, NULL, 'Dalam 3 tahun terakhir, saya telah menjadi pekerja rumah tangga yang handal. Saya dapat menjalankan tugas-tugas rumah tangga dengan baik dan bertanggung jawab.', '0810987654', '2023-05-25 02:14:45', '2023-05-25 02:14:45'),
(244, 0, 'Qori Rahman', 5200000, 26, '4.1', 'Bandung', 0, NULL, NULL, 'Pengalaman 6 tahun sebagai pekerja rumah tangga. Saya terampil dalam merapikan rumah, mencuci dan menyetrika pakaian, serta menjaga kebersihan lingkungan.', '0821098765', '2023-05-25 02:14:45', '2023-05-25 02:14:45'),
(245, 0, 'Rina Rahmawati', 5300000, 30, '4.6', 'Yogyakarta', 0, NULL, NULL, 'Saya adalah pekerja rumah tangga berpengalaman selama 4 tahun. Saya ahli dalam membersihkan rumah, mencuci pakaian, dan merawat anak-anak.', '0832109876', '2023-05-25 02:14:45', '2023-05-25 02:14:45'),
(246, 0, 'Siti Widianti', 4800000, 27, '4.2', 'Surabaya', 0, NULL, NULL, 'Pekerja rumah tangga dengan pengalaman 5 tahun. Saya dapat menjalankan tugas-tugas rumah tangga dengan baik dan teliti.', '0843210987', '2023-05-25 02:14:45', '2023-05-25 02:14:45'),
(247, 0, 'Taufik Pratama', 5000000, 33, '3.5', 'Jakarta', 0, NULL, NULL, 'Saya telah bekerja sebagai pekerja rumah tangga selama 7 tahun. Saya terampil dalam merapikan rumah, mencuci dan menyetrika pakaian, serta merawat anak-anak dengan penuh perhatian.', '0854321098', '2023-05-25 02:14:45', '2023-05-25 02:14:45'),
(248, 0, 'Umi Sari', 4700000, 28, '4.6', 'Bandung', 0, NULL, NULL, 'Pengalaman 6 tahun sebagai pekerja rumah tangga. Saya ahli dalam membersihkan rumah, mencuci pakaian, dan menjaga kebersihan lingkungan.', '0865432109', '2023-05-25 02:14:45', '2023-05-25 02:14:45'),
(249, 0, 'Vina Susanti', 4900000, 34, '4.4', 'Yogyakarta', 0, NULL, NULL, 'Saya telah bekerja sebagai pekerja rumah tangga selama 5 tahun. Saya berpengalaman dalam membersihkan rumah, merawat anak-anak, dan menjaga kebersihan lingkungan.', '0876543210', '2023-05-25 02:14:45', '2023-05-25 02:14:45'),
(250, 0, 'Wawan Prasetyo', 5300000, 29, '4.9', 'Surabaya', 0, NULL, NULL, 'Dalam 3 tahun terakhir, saya telah menjadi pekerja rumah tangga yang handal. Saya dapat menjalankan tugas-tugas rumah tangga dengan baik dan bertanggung jawab.', '0887654321', '2023-05-25 02:14:45', '2023-05-25 02:14:45'),
(251, 0, 'Xavier Nugraha', 5100000, 35, '4.5', 'Jakarta', 0, NULL, NULL, 'Pengalaman 6 tahun sebagai pekerja rumah tangga. Saya terampil dalam merapikan rumah, mencuci dan menyetrika pakaian, serta menjaga kebersihan lingkungan.', '0898765432', '2023-05-25 02:14:45', '2023-05-25 02:14:45'),
(252, 0, 'Yanti Kartika', 4800000, 26, '4.4', 'Bandung', 0, NULL, NULL, 'Saya adalah pekerja rumah tangga berpengalaman selama 4 tahun. Saya ahli dalam membersihkan rumah, mencuci pakaian, dan merawat anak-anak.', '0810987654', '2023-05-25 02:14:45', '2023-05-25 02:14:45'),
(253, 0, 'Zainal Setiawan', 5000000, 30, '4.8', 'Yogyakarta', 0, NULL, NULL, 'Pekerja rumah tangga dengan pengalaman 5 tahun. Saya dapat menjalankan tugas-tugas rumah tangga dengan baik dan teliti.', '0821098765', '2023-05-25 02:14:45', '2023-05-28 11:21:37'),
(254, 0, 'Anita Puspita', 5200000, 27, '4.5', 'Surabaya', 0, NULL, NULL, 'Saya telah bekerja sebagai pekerja rumah tangga selama 7 tahun. Saya terampil dalam merapikan rumah, mencuci dan menyetrika pakaian, serta merawat anak-anak dengan penuh perhatian.', '0832109876', '2023-05-25 02:14:45', '2023-05-28 06:04:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `profesi` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `tanggallahir` date DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `header_image` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `reset_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `saldo` float DEFAULT 0,
  `poin` bigint(100) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `profesi`, `alamat`, `tanggallahir`, `email`, `phone`, `profile_image`, `header_image`, `email_verified_at`, `password`, `remember_token`, `reset_token`, `created_at`, `updated_at`, `token`, `saldo`, `poin`) VALUES
(1, 'Adhitya Pratama Mangku Purnama', NULL, NULL, NULL, 'adit@aperga.id', '083192925747', NULL, NULL, NULL, '$2y$10$N0.WUjCHsKqZ9CvvkroiKuSMhQnkJRac9BZQkqp9YTAgyOXevIBQa', NULL, NULL, '2023-06-07 09:34:09', '2023-06-07 21:16:28', NULL, 874000000, 673516653);

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
-- Indeks untuk tabel `prts`
--
ALTER TABLE `prts`
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
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `prts`
--
ALTER TABLE `prts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=255;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
