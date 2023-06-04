-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 26 Bulan Mei 2023 pada 15.35
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
(11, '2023_05_26_102625_add_saldo_and_poin_to_users', 7);

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
  `gaji` int(11) NOT NULL,
  `umur` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `durasi` int(11) NOT NULL,
  `catatan` varchar(255) DEFAULT NULL,
  `harga` int(11) NOT NULL,
  `no_telepon` varchar(255) NOT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `jamkerja` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `prts`
--

INSERT INTO `prts` (`id`, `user_id`, `nama`, `gaji`, `umur`, `rating`, `lokasi`, `durasi`, `catatan`, `harga`, `no_telepon`, `profile_image`, `created_at`, `updated_at`, `jamkerja`) VALUES
(16, 0, 'Eva Nurhayati', 5100000, 29, 4, 'Jakarta', 9, 'Tidak berpenyakit', 860000, '0898901234', NULL, '2023-05-24 18:04:07', '2023-05-26 06:18:29', '8'),
(17, 0, 'Fahmi Hakim', 4500000, 35, 3, 'Bandung', 11, 'Memiliki riwayat alergi makanan', 870000, '0899012345', NULL, '2023-05-24 18:04:07', '2023-05-26 06:22:51', '7'),
(18, 0, 'Gita Permata', 4900000, 30, 4, 'Yogyakarta', 8, 'Tidak memiliki kondisi kesehatan khusus', 880000, '0812345678', NULL, '2023-05-24 18:04:07', '2023-05-26 06:27:32', '10'),
(19, 0, 'Hendra Setiawan', 5300000, 31, 5, 'Surabaya', 10, 'Berkebutuhan khusus penglihatan', 890000, '0823456789', NULL, '2023-05-24 18:04:07', '2023-05-26 06:27:43', '11'),
(20, 34, 'Indah Sari', 4700000, 26, 3, 'Jakarta', 12, 'Tidak memiliki riwayat penyakit', 900000, '0834567890', NULL, '2023-05-24 18:04:07', '2023-05-24 18:04:07', '6'),
(21, 34, 'Joko Prabowo', 5100000, 32, 4, 'Bandung', 9, 'Sehat tanpa riwayat penyakit', 910000, '0845678901', NULL, '2023-05-24 18:04:07', '2023-05-24 18:04:07', '7'),
(22, 34, 'Kartika Dewi', 4500000, 27, 3, 'Yogyakarta', 11, 'Berkebutuhan khusus pendengaran', 920000, '0890123456', NULL, '2023-05-24 18:04:07', '2023-05-24 18:04:07', '9'),
(23, 34, 'Lia Utami', 4900000, 33, 4, 'Surabaya', 8, 'Memiliki alergi debu', 930000, '0891234567', NULL, '2023-05-24 18:04:07', '2023-05-24 18:04:07', '9'),
(24, 34, 'Maulana Yusuf', 5300000, 28, 5, 'Jakarta', 10, 'Tidak berpenyakit', 940000, '0892345678', NULL, '2023-05-24 18:04:07', '2023-05-24 18:04:07', '9'),
(25, 34, 'Nadia Permata', 4700000, 34, 3, 'Bandung', 7, 'Membutuhkan perhatian ekstra', 950000, '0893456789', NULL, '2023-05-24 18:04:07', '2023-05-24 18:04:07', '9'),
(26, 34, 'Oscar Prasetyo', 5100000, 29, 4, 'Yogyakarta', 9, 'Tidak memiliki penyakit', 960000, '0894567890', NULL, '2023-05-24 18:04:07', '2023-05-25 06:41:23', '11'),
(27, 34, 'Putri Rahayu', 4500000, 35, 3, 'Surabaya', 11, 'Sehat tanpa riwayat penyakit', 970000, '0895678901', NULL, '2023-05-24 18:04:07', '2023-05-25 06:48:00', '12'),
(28, 34, 'Qori Abdullah', 4900000, 30, 4, 'Jakarta', 8, 'Memiliki riwayat alergi makanan', 980000, '0896789012', NULL, '2023-05-24 18:04:07', '2023-05-25 06:59:58', '12'),
(29, 34, 'Rini Utami', 5300000, 31, 5, 'Bandung', 10, 'Tidak memiliki kondisi kesehatan khusus', 990000, '0897890123', NULL, '2023-05-24 18:04:07', '2023-05-25 07:11:31', '5'),
(30, 34, 'Santoso Susanto', 4700000, 26, 3, 'Yogyakarta', 12, 'Berkebutuhan khusus penglihatan', 1000000, '0898901234', NULL, '2023-05-24 18:04:07', '2023-05-25 12:34:13', '7'),
(31, 34, 'Agus Setiawan', 5000000, 25, 4, 'Jakarta', 8, 'Sehat tanpa riwayat penyakit', 100000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-25 19:50:52', '9'),
(32, 34, 'Budi Santoso', 4500000, 30, 3, 'Surabaya', 12, 'Membutuhkan perhatian ekstra', 120000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-25 06:43:31', '12'),
(33, 34, 'Citra Mulyani', 5500000, 28, 5, 'Bandung', 6, 'Tanpa kondisi kesehatan khusus', 80000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-25 06:42:29', '12'),
(34, 34, 'Dewi Indah', 4800000, 32, 4, 'Yogyakarta', 10, 'Beberapa alergi makanan', 150000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-25 12:34:44', '11'),
(35, 34, 'Eko Pratama', 5200000, 27, 3, 'Medan', 8, 'Tidak memiliki riwayat penyakit', 90000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-25 12:30:15', '8'),
(36, 34, 'Fajar Wijaya', 4600000, 31, 4, 'Surabaya', 9, 'Kondisi kesehatan baik', 110000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-25 06:16:26', '8'),
(37, 34, 'Gita Susanti', 4900000, 29, 3, 'Jakarta', 7, 'Memiliki riwayat asma', 100000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-25 07:13:56', '6'),
(38, 34, 'Hendra Gunawan', 5100000, 26, 5, 'Bandung', 8, 'Sehat dan berenergi tinggi', 95000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-25 06:21:16', '8'),
(39, 34, 'Indra Perdana', 4700000, 33, 4, 'Yogyakarta', 11, 'Mengalami alergi debu', 130000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-25 07:00:44', '11'),
(40, 34, 'Joko Wibowo', 5300000, 27, 3, 'Medan', 9, 'Membutuhkan aksesibilitas', 90000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-25 19:56:40', '11'),
(41, 34, 'Kartika Sari', 4800000, 30, 4, 'Surabaya', 10, 'Sehat dan bugar', 100000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10'),
(42, 34, 'Laras Ayu', 4600000, 28, 3, 'Jakarta', 8, 'Berkebutuhan khusus penglihatan', 120000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '6'),
(43, 34, 'Maman Hidayat', 5200000, 31, 4, 'Bandung', 9, 'Tidak memiliki riwayat penyakit', 90000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '8'),
(44, 34, 'Nadia Putri', 5000000, 29, 5, 'Yogyakarta', 7, 'Tidak berpenyakit', 100000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '12'),
(45, 34, 'Oscar Aditya', 4800000, 26, 3, 'Medan', 8, 'Sehat tanpa masalah kesehatan', 95000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '7'),
(46, 34, 'Putri Kusuma', 5100000, 33, 4, 'Surabaya', 10, 'Membutuhkan perawatan khusus', 130000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '11'),
(47, 34, 'Rudi Hartono', 4700000, 27, 3, 'Jakarta', 9, 'Berkebutuhan khusus pendengaran', 100000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '8'),
(48, 34, 'Siti Rahayu', 5300000, 30, 4, 'Bandung', 11, 'Tidak memiliki masalah kesehatan', 90000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '8'),
(49, 34, 'Tono Suharto', 4800000, 28, 3, 'Yogyakarta', 8, 'Berkebutuhan khusus mobilitas', 95000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '5'),
(50, 34, 'Udin Prasetyo', 5200000, 31, 4, 'Medan', 9, 'Tidak berpenyakit', 90000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10'),
(51, 34, 'Vita Agustina', 5000000, 29, 5, 'Surabaya', 7, 'Sehat dan bugar', 100000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '9'),
(52, 34, 'Wawan Nugroho', 4600000, 26, 3, 'Jakarta', 8, 'Memiliki riwayat alergi', 120000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '11'),
(53, 34, 'Yulia Sari', 5100000, 33, 4, 'Bandung', 9, 'Berkebutuhan khusus penglihatan', 90000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '7'),
(54, 34, 'Zaki Rahman', 4900000, 27, 3, 'Yogyakarta', 10, 'Tidak berpenyakit', 130000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '11'),
(55, 34, 'Adi Nugroho', 5300000, 30, 4, 'Medan', 7, 'Sehat tanpa riwayat penyakit', 95000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '6'),
(56, 34, 'Bella Putri', 4800000, 28, 3, 'Surabaya', 8, 'Berkebutuhan khusus pendengaran', 100000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10'),
(57, 34, 'Cindy Kusuma', 5200000, 31, 4, 'Jakarta', 9, 'Tidak berpenyakit', 90000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10'),
(58, 34, 'Denny Pratama', 5000000, 29, 5, 'Bandung', 10, 'Sehat dan bugar', 100000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '8'),
(59, 34, 'Eka Putri', 4700000, 26, 3, 'Yogyakarta', 8, 'Berkebutuhan khusus mobilitas', 120000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '6'),
(60, 34, 'Fandi Susanto', 5100000, 33, 4, 'Medan', 9, 'Tidak memiliki masalah kesehatan', 95000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10'),
(61, 34, 'Gita Ramadhani', 4900000, 27, 3, 'Surabaya', 7, 'Tidak berpenyakit', 100000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '11'),
(62, 34, 'Hendro Wibowo', 5300000, 30, 4, 'Jakarta', 8, 'Sehat dan bugar', 90000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '7'),
(63, 34, 'Intan Permata', 4800000, 28, 3, 'Bandung', 9, 'Berkebutuhan khusus penglihatan', 95000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10'),
(64, 34, 'Joko Prasetyo', 5200000, 31, 4, 'Yogyakarta', 10, 'Tidak berpenyakit', 90000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '5'),
(65, 34, 'Kiki Rahman', 5000000, 29, 5, 'Medan', 8, 'Memiliki riwayat alergi', 100000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10'),
(66, 34, 'Lina Sari', 4600000, 26, 3, 'Surabaya', 9, 'Sehat tanpa riwayat penyakit', 120000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10'),
(67, 34, 'Mila Putri', 5300000, 30, 4, 'Jakarta', 7, 'Berkebutuhan khusus pendengaran', 95000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '8'),
(68, 34, 'Nana Kusuma', 4800000, 28, 3, 'Bandung', 8, 'Tidak berpenyakit', 90000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '11'),
(69, 34, 'Oscar Prasetyo', 5200000, 31, 4, 'Yogyakarta', 9, 'Sehat dan bugar', 95000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '7'),
(70, 34, 'Putri Rahayu', 5000000, 29, 5, 'Medan', 10, 'Tidak memiliki riwayat penyakit', 100000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '9'),
(71, 34, 'Rudi Nugroho', 4700000, 26, 3, 'Surabaya', 8, 'Berkebutuhan khusus mobilitas', 120000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '8'),
(72, 34, 'Sinta Agustina', 5100000, 33, 4, 'Jakarta', 9, 'Membutuhkan perawatan khusus', 90000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '11'),
(73, 34, 'Tono Suharyanto', 4800000, 28, 3, 'Bandung', 10, 'Tidak berpenyakit', 95000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '8'),
(74, 34, 'Udin Pratama', 5300000, 30, 4, 'Yogyakarta', 7, 'Sehat dan bugar', 90000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10'),
(75, 34, 'Vita Susanti', 5000000, 29, 5, 'Medan', 8, 'Berkebutuhan khusus penglihatan', 100000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '6'),
(76, 34, 'Wawan Kusuma', 4600000, 26, 3, 'Surabaya', 9, 'Tidak berpenyakit', 120000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10'),
(77, 34, 'Yanti Pratiwi', 5100000, 33, 4, 'Jakarta', 10, 'Sehat tanpa riwayat penyakit', 90000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '7'),
(78, 34, 'Zara Rahayu', 4900000, 27, 3, 'Bandung', 8, 'Memiliki riwayat alergi', 95000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '7'),
(79, 34, 'Abdi Nugroho', 5300000, 30, 4, 'Yogyakarta', 9, 'Tidak berpenyakit', 90000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '7'),
(80, 34, 'Bunga Kusuma', 5000000, 29, 5, 'Medan', 7, 'Sehat dan bugar', 100000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '11'),
(81, 34, 'Citra Susanto', 4800000, 26, 3, 'Surabaya', 8, 'Berkebutuhan khusus pendengaran', 95000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '6'),
(82, 34, 'Dharma Wijaya', 5200000, 31, 4, 'Jakarta', 9, 'Tidak berpenyakit', 90000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '6'),
(83, 34, 'Eva Pratiwi', 5000000, 29, 5, 'Bandung', 10, 'Sehat dan bugar', 100000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10'),
(84, 34, 'Fandy Wibowo', 4700000, 26, 3, 'Yogyakarta', 8, 'Berkebutuhan khusus penglihatan', 120000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10'),
(85, 34, 'Gita Rahayu', 5100000, 33, 4, 'Medan', 9, 'Tidak berpenyakit', 90000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '7'),
(86, 34, 'Hendra Nugroho', 5300000, 30, 4, 'Surabaya', 10, 'Sehat tanpa masalah kesehatan', 95000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '9'),
(87, 34, 'Indah Putri', 4800000, 28, 3, 'Jakarta', 9, 'Membutuhkan perawatan khusus', 90000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10'),
(88, 34, 'Joni Suharyanto', 5200000, 31, 4, 'Bandung', 10, 'Tidak berpenyakit', 100000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '6'),
(89, 34, 'Kiki Rahayu', 5000000, 29, 5, 'Yogyakarta', 7, 'Sehat dan bugar', 90000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10'),
(90, 34, 'Lina Susanti', 4600000, 26, 3, 'Medan', 8, 'Berkebutuhan khusus pendengaran', 95000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '12'),
(91, 34, 'Mila Wijaya', 5100000, 33, 4, 'Surabaya', 9, 'Tidak berpenyakit', 90000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10'),
(92, 34, 'Nadia Rahayu', 5300000, 30, 4, 'Jakarta', 10, 'Sehat dan bugar', 95000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '9'),
(93, 34, 'Oscar Prasetya', 4800000, 28, 3, 'Bandung', 9, 'Memiliki riwayat alergi', 90000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '9'),
(94, 34, 'Putri Nugroho', 5200000, 31, 4, 'Yogyakarta', 10, 'Tidak berpenyakit', 100000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '5'),
(95, 34, 'Rudi Suharto', 5000000, 29, 5, 'Medan', 8, 'Sehat tanpa riwayat penyakit', 90000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10'),
(96, 34, 'Sinta Wijaya', 4700000, 26, 3, 'Surabaya', 9, 'Berkebutuhan khusus mobilitas', 95000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '6'),
(97, 34, 'Tono Rahayu', 5300000, 30, 4, 'Jakarta', 10, 'Tidak berpenyakit', 90000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '5'),
(98, 34, 'Udin Prasetya', 4800000, 28, 3, 'Bandung', 9, 'Sehat dan bugar', 90000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '9'),
(99, 34, 'Vita Susanti', 5200000, 31, 4, 'Yogyakarta', 10, 'Tidak memiliki riwayat penyakit', 100000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '11'),
(100, 34, 'Wawan Nugroho', 5000000, 29, 5, 'Medan', 7, 'Berkebutuhan khusus pendengaran', 90000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10'),
(101, 34, 'Yanti Prasetyo', 4700000, 26, 3, 'Surabaya', 8, 'Tidak berpenyakit', 95000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10'),
(102, 34, 'Zara Wijaya', 5300000, 30, 4, 'Jakarta', 9, 'Sehat dan bugar', 90000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '9'),
(103, 34, 'Abdi Rahayu', 5000000, 29, 5, 'Bandung', 10, 'Memiliki riwayat alergi', 100000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10'),
(104, 34, 'Bella Nugroho', 4800000, 28, 3, 'Yogyakarta', 9, 'Tidak berpenyakit', 90000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10'),
(105, 34, 'Citra Susanti', 5200000, 31, 4, 'Medan', 10, 'Sehat dan bugar', 95000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '7'),
(106, 34, 'Dharma Prasetya', 5000000, 29, 5, 'Surabaya', 8, 'Tidak memiliki masalah kesehatan', 90000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '7'),
(107, 34, 'Eva Wijaya', 4700000, 26, 3, 'Jakarta', 9, 'Berkebutuhan khusus mobilitas', 95000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '11'),
(108, 34, 'Fandy Rahayu', 5300000, 30, 4, 'Bandung', 10, 'Tidak berpenyakit', 90000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '9'),
(109, 34, 'Gita Prasetyo', 4900000, 27, 3, 'Yogyakarta', 8, 'Sehat tanpa masalah kesehatan', 95000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '6'),
(110, 34, 'Hendra Nugroho', 5100000, 33, 4, 'Medan', 9, 'Berkebutuhan khusus penglihatan', 90000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '6'),
(111, 34, 'Indah Susanti', 5300000, 30, 4, 'Surabaya', 10, 'Tidak berpenyakit', 100000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '12'),
(112, 34, 'Joni Prasetyo', 4800000, 28, 3, 'Jakarta', 9, 'Sehat dan bugar', 95000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '9'),
(113, 34, 'Kiki Nugroho', 5200000, 31, 4, 'Bandung', 10, 'Tidak berpenyakit', 90000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '6'),
(114, 34, 'Lina Rahayu', 5000000, 29, 5, 'Yogyakarta', 7, 'Memiliki riwayat alergi', 100000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10'),
(115, 34, 'Mila Prasetyo', 4800000, 28, 3, 'Medan', 8, 'Tidak berpenyakit', 95000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '8'),
(116, 34, 'Nadia Nugroho', 5100000, 33, 4, 'Surabaya', 9, 'Sehat dan bugar', 90000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '11'),
(117, 34, 'Oscar Susanto', 4700000, 26, 3, 'Jakarta', 10, 'Berkebutuhan khusus penglihatan', 95000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '11'),
(118, 34, 'Putri Wijaya', 5300000, 30, 4, 'Bandung', 9, 'Tidak berpenyakit', 90000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '11'),
(119, 34, 'Rudi Rahayu', 5000000, 29, 5, 'Yogyakarta', 10, 'Sehat dan bugar', 100000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10'),
(120, 34, 'Sinta Prasetyo', 4800000, 28, 3, 'Medan', 9, 'Tidak memiliki riwayat penyakit', 95000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '5'),
(121, 34, 'Tono Nugroho', 5200000, 31, 4, 'Surabaya', 10, 'Sehat tanpa masalah kesehatan', 90000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '5'),
(122, 34, 'Udin Susanti', 5000000, 29, 5, 'Jakarta', 8, 'Berkebutuhan khusus mobilitas', 95000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '12'),
(123, 34, 'Vita Prasetyo', 4700000, 26, 3, 'Bandung', 9, 'Tidak berpenyakit', 90000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10'),
(124, 34, 'Wawan Nugroho', 5300000, 30, 4, 'Yogyakarta', 10, 'Sehat dan bugar', 100000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10'),
(125, 34, 'Yanti Rahayu', 5100000, 33, 4, 'Medan', 9, 'Berkebutuhan khusus pendengaran', 95000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10'),
(126, 34, 'Zara Prasetyo', 4900000, 27, 3, 'Surabaya', 10, 'Tidak berpenyakit', 90000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '6'),
(127, 34, 'Abdi Susanti', 5300000, 30, 4, 'Jakarta', 9, 'Sehat dan bugar', 90000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '11'),
(128, 34, 'Bella Prasetyo', 5100000, 33, 4, 'Bandung', 10, 'Tidak memiliki masalah kesehatan', 100000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '9'),
(129, 34, 'Citra Nugroho', 4900000, 27, 3, 'Yogyakarta', 8, 'Berkebutuhan khusus penglihatan', 95000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '9'),
(130, 34, 'Dharma Susanto', 5300000, 30, 4, 'Medan', 9, 'Tidak berpenyakit', 90000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '5'),
(131, 34, 'Eva Prasetyo', 5100000, 33, 4, 'Surabaya', 10, 'Sehat dan bugar', 95000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '8'),
(132, 34, 'Fandy Nugroho', 4700000, 26, 3, 'Jakarta', 9, 'Berkebutuhan khusus pendengaran', 90000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '5'),
(133, 34, 'Gita Susanto', 5300000, 30, 4, 'Bandung', 10, 'Tidak berpenyakit', 90000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '11'),
(134, 34, 'Hendra Prasetyo', 5100000, 33, 4, 'Yogyakarta', 7, 'Sehat dan bugar', 100000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '5'),
(135, 34, 'Indah Nugroho', 4700000, 26, 3, 'Medan', 8, 'Berkebutuhan khusus mobilitas', 95000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '9'),
(136, 34, 'Joni Susanto', 5300000, 30, 4, 'Surabaya', 9, 'Tidak berpenyakit', 90000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '12'),
(137, 34, 'Kiki Prasetyo', 5100000, 33, 4, 'Jakarta', 10, 'Sehat dan bugar', 95000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '6'),
(138, 34, 'Lina Nugroho', 4700000, 26, 3, 'Bandung', 9, 'Tidak berpenyakit', 90000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '11'),
(139, 34, 'Mila Susanto', 5300000, 30, 4, 'Yogyakarta', 10, 'Memiliki riwayat alergi', 100000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '11'),
(140, 34, 'Nadia Prasetyo', 4900000, 27, 3, 'Medan', 8, 'Tidak berpenyakit', 95000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10'),
(141, 34, 'Oscar Nugroho', 5300000, 30, 4, 'Surabaya', 9, 'Sehat dan bugar', 90000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '12'),
(142, 34, 'Putri Susanto', 4700000, 26, 3, 'Jakarta', 10, 'Tidak berpenyakit', 95000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10'),
(143, 34, 'Rudi Prasetyo', 5300000, 30, 4, 'Bandung', 9, 'Sehat tanpa riwayat penyakit', 90000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '8'),
(144, 34, 'Sinta Nugroho', 5100000, 33, 4, 'Yogyakarta', 10, 'Berkebutuhan khusus mobilitas', 100000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '8'),
(145, 34, 'Tono Susanto', 4700000, 26, 3, 'Medan', 9, 'Tidak berpenyakit', 90000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '9'),
(146, 34, 'Udin Prasetyo', 5300000, 30, 4, 'Surabaya', 10, 'Sehat dan bugar', 95000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '8'),
(147, 34, 'Vita Nugroho', 4900000, 27, 3, 'Jakarta', 8, 'Memiliki riwayat alergi', 90000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10'),
(148, 34, 'Wawan Susanto', 5300000, 30, 4, 'Bandung', 9, 'Tidak berpenyakit', 90000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '7'),
(149, 34, 'Yanti Prasetyo', 5100000, 33, 4, 'Yogyakarta', 10, 'Sehat dan bugar', 100000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '7'),
(150, 34, 'Zara Nugroho', 4900000, 27, 3, 'Medan', 9, 'Berkebutuhan khusus pendengaran', 95000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '7'),
(151, 34, 'Abdi Prasetyo', 5300000, 30, 4, 'Surabaya', 10, 'Tidak berpenyakit', 90000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '11'),
(152, 34, 'Bella Susanto', 4700000, 26, 3, 'Jakarta', 9, 'Sehat dan bugar', 95000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '6'),
(153, 34, 'Citra Nugroho', 5300000, 30, 4, 'Bandung', 10, 'Tidak berpenyakit', 90000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '9'),
(154, 34, 'Dharma Prasetyo', 5100000, 33, 4, 'Yogyakarta', 8, 'Memiliki riwayat alergi', 100000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '7'),
(155, 34, 'Eva Nugroho', 4900000, 27, 3, 'Medan', 9, 'Tidak berpenyakit', 95000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10'),
(156, 34, 'Fandy Susanto', 5300000, 30, 4, 'Surabaya', 10, 'Sehat dan bugar', 90000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '9'),
(157, 34, 'Gita Prasetyo', 4700000, 26, 3, 'Jakarta', 9, 'Berkebutuhan khusus penglihatan', 95000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '6'),
(158, 34, 'Hendra Nugroho', 5300000, 30, 4, 'Bandung', 10, 'Tidak berpenyakit', 90000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '8'),
(159, 34, 'Indah Susanto', 5100000, 33, 4, 'Yogyakarta', 7, 'Sehat dan bugar', 100000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '6'),
(160, 34, 'Joni Nugroho', 4700000, 26, 3, 'Medan', 8, 'Berkebutuhan khusus mobilitas', 95000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '9'),
(161, 34, 'Kiki Prasetyo', 5300000, 30, 4, 'Surabaya', 9, 'Tidak berpenyakit', 90000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '6'),
(162, 34, 'Lina Susanto', 4900000, 27, 3, 'Jakarta', 10, 'Sehat dan bugar', 95000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '8'),
(163, 34, 'Mila Nugroho', 5300000, 30, 4, 'Bandung', 9, 'Tidak berpenyakit', 90000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '6'),
(164, 34, 'Nadia Prasetyo', 5100000, 33, 4, 'Yogyakarta', 10, 'Berkebutuhan khusus pendengaran', 100000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '11'),
(165, 34, 'Oscar Nugroho', 4700000, 26, 3, 'Medan', 9, 'Tidak berpenyakit', 90000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '8'),
(166, 34, 'Putri Prasetyo', 5300000, 30, 4, 'Surabaya', 10, 'Sehat dan bugar', 95000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '11'),
(167, 34, 'Agus Setiawan', 5000000, 25, 4, 'Jakarta', 8, 'Sehat tanpa riwayat penyakit', 100000, '0812345678', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '6'),
(168, 34, 'Budi Santoso', 4500000, 30, 3, 'Surabaya', 12, 'Membutuhkan perhatian ekstra', 120000, '0823456789', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '7'),
(169, 34, 'Citra Mulyani', 5500000, 28, 5, 'Bandung', 6, 'Tanpa kondisi kesehatan khusus', 80000, '0834567890', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '9'),
(170, 34, 'Dewi Indah', 4800000, 32, 4, 'Yogyakarta', 10, 'Beberapa alergi makanan', 150000, '0845678901', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '8'),
(171, 34, 'Eko Pratama', 5200000, 27, 3, 'Medan', 8, 'Tidak memiliki riwayat penyakit', 90000, '0890123456', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '6'),
(172, 34, 'Fanny Sari', 4700000, 31, 4, 'Surabaya', 7, 'Memiliki alergi debu', 95000, '0891234567', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '6'),
(173, 34, 'Gita Purnama', 5100000, 26, 5, 'Jakarta', 9, 'Tidak berpenyakit', 100000, '0892345678', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '10'),
(174, 34, 'Hadi Susanto', 4600000, 29, 3, 'Bandung', 11, 'Membutuhkan perawatan medis rutin', 110000, '0893456789', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '7'),
(175, 34, 'Ika Nurhayati', 4900000, 33, 4, 'Yogyakarta', 8, 'Berkebutuhan khusus penglihatan', 120000, '0894567890', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '12'),
(176, 34, 'Joko Wibowo', 5300000, 28, 5, 'Surabaya', 10, 'Sehat tanpa riwayat penyakit', 130000, '0895678901', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '11'),
(177, 34, 'Kartika Sari', 4800000, 34, 3, 'Jakarta', 7, 'Tidak memiliki kondisi kesehatan khusus', 140000, '0896789012', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '10'),
(178, 34, 'Lukman Hakim', 5200000, 29, 4, 'Bandung', 9, 'Memiliki riwayat penyakit', 90000, '0897890123', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '6'),
(179, 34, 'Mita Wijaya', 4700000, 26, 5, 'Jakarta', 8, 'Sehat tanpa riwayat penyakit', 100000, '0898901234', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '8'),
(180, 34, 'Nina Puspita', 5100000, 31, 4, 'Surabaya', 10, 'Tidak memiliki kondisi kesehatan khusus', 110000, '0899012345', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '11'),
(181, 34, 'Oscar Gunawan', 4900000, 27, 3, 'Bandung', 9, 'Memiliki riwayat penyakit', 120000, '0890123456', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '11'),
(182, 34, 'Putri Anggraini', 5300000, 32, 5, 'Yogyakarta', 8, 'Sehat tanpa riwayat penyakit', 130000, '0891234567', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '8'),
(183, 34, 'Rudi Santoso', 4700000, 28, 4, 'Medan', 7, 'Berkebutuhan khusus penglihatan', 90000, '0892345678', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '11'),
(184, 34, 'Sari Mulia', 5200000, 33, 3, 'Surabaya', 9, 'Membutuhkan perawatan medis rutin', 110000, '0893456789', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '10'),
(185, 34, 'Taufik Hidayat', 4800000, 29, 4, 'Jakarta', 11, 'Sehat tanpa riwayat penyakit', 120000, '0894567890', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '8'),
(186, 34, 'Uci Indah', 5100000, 34, 5, 'Bandung', 8, 'Tidak berpenyakit', 130000, '0895678901', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '11'),
(187, 34, 'Vina Puspitasari', 4600000, 30, 3, 'Yogyakarta', 10, 'Memiliki riwayat penyakit', 140000, '0896789012', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '12'),
(188, 34, 'Wahyu Santoso', 5000000, 35, 4, 'Surabaya', 7, 'Sehat tanpa riwayat penyakit', 100000, '0897890123', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '7'),
(189, 34, 'Xavier Wijaya', 4800000, 31, 5, 'Medan', 9, 'Berkebutuhan khusus penglihatan', 110000, '0898901234', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '9'),
(190, 34, 'Yunita Mulia', 5300000, 26, 4, 'Jakarta', 8, 'Tidak memiliki kondisi kesehatan khusus', 120000, '0899012345', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '12'),
(191, 34, 'Zaki Susanto', 4700000, 32, 3, 'Bandung', 10, 'Memiliki riwayat penyakit', 130000, '0890123456', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '5'),
(192, 34, 'Ani Wijaya', 5100000, 27, 4, 'Yogyakarta', 9, 'Sehat tanpa riwayat penyakit', 140000, '0891234567', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '7'),
(193, 34, 'Bambang Santoso', 4900000, 33, 5, 'Surabaya', 8, 'Tidak berpenyakit', 100000, '0892345678', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '9'),
(194, 34, 'Cindy Mulia', 5300000, 28, 3, 'Jakarta', 11, 'Berkebutuhan khusus penglihatan', 110000, '0893456789', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '11'),
(195, 34, 'Dodi Purnama', 4800000, 34, 4, 'Bandung', 9, 'Memiliki riwayat penyakit', 120000, '0894567890', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '7'),
(196, 34, 'Eva Sari', 5200000, 29, 5, 'Yogyakarta', 10, 'Sehat tanpa riwayat penyakit', 130000, '0895678901', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '6'),
(197, 34, 'Faisal Hakim', 4700000, 35, 3, 'Medan', 7, 'Tidak memiliki kondisi kesehatan khusus', 140000, '0896789012', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '5'),
(198, 34, 'Gita Nurhayati', 5000000, 30, 4, 'Surabaya', 8, 'Membutuhkan perawatan medis rutin', 100000, '0897890123', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '8'),
(199, 34, 'Hendra Wibowo', 4600000, 26, 5, 'Jakarta', 9, 'Berkebutuhan khusus penglihatan', 110000, '0898901234', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '7'),
(200, 34, 'Indah Puspita', 5100000, 31, 3, 'Bandung', 10, 'Memiliki riwayat penyakit', 120000, '0899012345', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '11'),
(201, 34, 'Joko Santoso', 4900000, 27, 4, 'Yogyakarta', 8, 'Sehat tanpa riwayat penyakit', 130000, '0890123456', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '9'),
(202, 34, 'Kartika Mulia', 5300000, 32, 5, 'Surabaya', 9, 'Tidak berpenyakit', 140000, '0891234567', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '8'),
(203, 34, 'Lia Wijaya', 4700000, 28, 3, 'Medan', 11, 'Berkebutuhan khusus penglihatan', 90000, '0892345678', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '6'),
(204, 34, 'Miftah Hakim', 5100000, 33, 4, 'Jakarta', 10, 'Sehat tanpa riwayat penyakit', 100000, '0893456789', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '7'),
(205, 34, 'Nadia Sari', 4700000, 29, 5, 'Bandung', 8, 'Tidak memiliki kondisi kesehatan khusus', 110000, '0894567890', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '6'),
(206, 34, 'Oscar Nurhayati', 5200000, 34, 3, 'Yogyakarta', 7, 'Memiliki riwayat penyakit', 120000, '0895678901', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '6'),
(207, 34, 'Putri Wibowo', 4800000, 30, 4, 'Surabaya', 9, 'Sehat tanpa riwayat penyakit', 130000, '0896789012', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '11'),
(208, 34, 'Rudi Hakim', 5300000, 35, 5, 'Jakarta', 8, 'Berkebutuhan khusus penglihatan', 140000, '0897890123', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '6'),
(209, 34, 'Sari Santoso', 4700000, 31, 3, 'Bandung', 10, 'Memiliki riwayat penyakit', 100000, '0898901234', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '12'),
(210, 34, 'Taufik Mulia', 5100000, 26, 4, 'Yogyakarta', 11, 'Sehat tanpa riwayat penyakit', 110000, '0899012345', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '9'),
(211, 34, 'Uci Hakim', 4800000, 32, 5, 'Surabaya', 9, 'Tidak berpenyakit', 120000, '0890123456', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '10'),
(212, 34, 'Vina Nurhayati', 5300000, 27, 3, 'Medan', 8, 'Berkebutuhan khusus penglihatan', 130000, '0891234567', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '12'),
(213, 34, 'Wahyu Wibowo', 4700000, 33, 4, 'Jakarta', 10, 'Sehat tanpa riwayat penyakit', 140000, '0892345678', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '9'),
(214, 34, 'Xavier Mulia', 5200000, 28, 5, 'Bandung', 9, 'Tidak memiliki kondisi kesehatan khusus', 100000, '0893456789', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '6'),
(215, 34, 'Yunita Hakim', 4800000, 34, 3, 'Yogyakarta', 7, 'Memiliki riwayat penyakit', 110000, '0894567890', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '10'),
(216, 34, 'Zaki Wijaya', 5300000, 29, 4, 'Surabaya', 8, 'Sehat tanpa riwayat penyakit', 120000, '0895678901', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '6'),
(217, 34, 'Agus Setiawan', 5000000, 25, 4, 'Jakarta', 8, 'Sehat tanpa riwayat penyakit', 100000, '0812345678', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '9'),
(218, 34, 'Budi Santoso', 4500000, 30, 3, 'Surabaya', 12, 'Membutuhkan perhatian ekstra', 120000, '0823456789', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '8'),
(219, 34, 'Citra Mulyani', 5500000, 28, 5, 'Bandung', 6, 'Tanpa kondisi kesehatan khusus', 80000, '0834567890', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '7'),
(220, 34, 'Dewi Indah', 4800000, 32, 4, 'Yogyakarta', 10, 'Beberapa alergi makanan', 150000, '0845678901', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '8'),
(221, 34, 'Eko Pratama', 5200000, 27, 3, 'Medan', 8, 'Tidak memiliki riwayat penyakit', 90000, '0890123456', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '7'),
(222, 34, 'Fanny Sari', 4700000, 31, 4, 'Surabaya', 7, 'Memiliki alergi debu', 95000, '0891234567', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '7'),
(223, 34, 'Gita Purnama', 5100000, 26, 5, 'Jakarta', 9, 'Tidak berpenyakit', 100000, '0892345678', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '8'),
(224, 34, 'Hadi Susanto', 4600000, 29, 3, 'Bandung', 11, 'Membutuhkan perawatan medis rutin', 110000, '0893456789', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '7'),
(225, 34, 'Ika Nurhayati', 4900000, 33, 4, 'Yogyakarta', 8, 'Berkebutuhan khusus penglihatan', 120000, '0894567890', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '7'),
(226, 34, 'Joko Wibowo', 5300000, 28, 5, 'Surabaya', 10, 'Sehat tanpa riwayat penyakit', 130000, '0895678901', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '7'),
(227, 34, 'Kartika Sari', 4800000, 34, 3, 'Jakarta', 7, 'Tidak memiliki kondisi kesehatan khusus', 140000, '0896789012', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '10'),
(228, 34, 'Lukman Hakim', 5200000, 29, 4, 'Bandung', 9, 'Memiliki riwayat penyakit asma', 90000, '0897890123', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '10'),
(229, 34, 'Mila Rachmawati', 5100000, 27, 4, 'Surabaya', 8, 'Sehat tanpa riwayat penyakit', 100000, '0898901234', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '8'),
(230, 34, 'Nugroho Prasetyo', 4600000, 32, 3, 'Jakarta', 12, 'Memiliki alergi terhadap kacang', 110000, '0899012345', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '7'),
(231, 34, 'Oscar Wijaya', 5000000, 29, 5, 'Bandung', 6, 'Sehat tanpa riwayat penyakit', 120000, '0810987654', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '11'),
(232, 34, 'Putri Hapsari', 4800000, 35, 4, 'Yogyakarta', 10, 'Tidak memiliki kondisi kesehatan khusus', 130000, '0821098765', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '7'),
(233, 34, 'Qori Ramadhan', 5100000, 28, 3, 'Surabaya', 7, 'Memiliki riwayat penyakit diabetes', 140000, '0832109876', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '11'),
(234, 34, 'Rina Susanti', 4700000, 30, 4, 'Jakarta', 9, 'Sehat tanpa riwayat penyakit', 150000, '0843210987', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '10'),
(235, 34, 'Siti Rahmawati', 5300000, 26, 5, 'Bandung', 11, 'Tidak berpenyakit', 90000, '0854321098', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '11'),
(236, 34, 'Taufik Hidayat', 5000000, 31, 4, 'Yogyakarta', 8, 'Membutuhkan perawatan medis rutin', 100000, '0865432109', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '12'),
(237, 34, 'Umi Kusumawati', 5200000, 27, 3, 'Surabaya', 10, 'Sehat tanpa riwayat penyakit', 110000, '0876543210', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '8'),
(238, 34, 'Vina Kartika', 4800000, 33, 4, 'Jakarta', 7, 'Tidak memiliki kondisi kesehatan khusus', 120000, '0887654321', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '6'),
(239, 34, 'Wawan Sugianto', 5000000, 28, 5, 'Bandung', 9, 'Memiliki riwayat penyakit asma', 130000, '0898765432', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '9'),
(240, 34, 'Xavier Gunawan', 5300000, 34, 3, 'Yogyakarta', 8, 'Sehat tanpa riwayat penyakit', 140000, '0810987654', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '9'),
(241, 34, 'Yanti Pratiwi', 5100000, 29, 4, 'Surabaya', 12, 'Memiliki alergi terhadap debu', 150000, '0821098765', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '12'),
(242, 34, 'Zainal Abidin', 4700000, 35, 3, 'Jakarta', 6, 'Berkebutuhan khusus pendengaran', 90000, '0832109876', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '7'),
(243, 34, 'Anita Putri', 4800000, 26, 4, 'Bandung', 10, 'Tidak berpenyakit', 100000, '0843210987', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '7'),
(244, 34, 'Bayu Santoso', 5200000, 30, 5, 'Yogyakarta', 7, 'Sehat tanpa riwayat penyakit', 110000, '0854321098', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '11'),
(245, 34, 'Citra Puspita', 5000000, 27, 4, 'Surabaya', 9, 'Membutuhkan perawatan medis rutin', 120000, '0865432109', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '5'),
(246, 34, 'Dewi Anggraini', 4900000, 33, 3, 'Jakarta', 11, 'Memiliki riwayat penyakit hipertensi', 130000, '0876543210', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '11'),
(247, 34, 'Eka Susilawati', 5300000, 28, 4, 'Bandung', 8, 'Sehat tanpa riwayat penyakit', 140000, '0887654321', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '11'),
(248, 34, 'Fajar Nugraha', 5100000, 34, 5, 'Yogyakarta', 10, 'Tidak memiliki kondisi kesehatan khusus', 150000, '0898765432', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '6'),
(249, 34, 'Gita Permata', 5000000, 29, 4, 'Surabaya', 7, 'Memiliki riwayat penyakit asma', 90000, '0810987654', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '10'),
(250, 34, 'Hadi Setiawan', 5200000, 35, 3, 'Jakarta', 9, 'Sehat tanpa riwayat penyakit', 100000, '0821098765', NULL, '2023-05-25 02:14:45', '2023-05-26 04:18:13', '6'),
(251, 34, 'Indah Sari', 4700000, 26, 4, 'Bandung', 8, 'Berkebutuhan khusus penglihatan', 110000, '0832109876', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '10'),
(252, 34, 'Joko Widodo', 4800000, 30, 5, 'Yogyakarta', 10, 'Tidak berpenyakit', 120000, '0843210987', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '7'),
(253, 34, 'Kartika Dewi', 5200000, 27, 3, 'Surabaya', 11, 'Membutuhkan perhatian ekstra', 130000, '0854321098', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '12'),
(254, 34, 'Lukman Hakim', 5300000, 33, 4, 'Jakarta', 7, 'Sehat tanpa riwayat penyakit', 140000, '0865432109', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '7'),
(255, 34, 'Mila Kusuma', 4800000, 28, 5, 'Bandung', 9, 'Tidak memiliki kondisi kesehatan khusus', 150000, '0876543210', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '7'),
(256, 34, 'Nina Wulandari', 5000000, 34, 4, 'Yogyakarta', 8, 'Memiliki riwayat penyakit diabetes', 90000, '0887654321', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '10'),
(257, 34, 'Oscar Pratama', 4700000, 29, 3, 'Surabaya', 10, 'Sehat tanpa riwayat penyakit', 100000, '0898765432', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '8'),
(258, 34, 'Putri Lestari', 4900000, 35, 4, 'Jakarta', 7, 'Tidak berpenyakit', 110000, '0810987654', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '6'),
(259, 34, 'Qori Rahman', 5200000, 26, 3, 'Bandung', 11, 'Memiliki riwayat penyakit asma', 120000, '0821098765', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '9'),
(260, 34, 'Rina Rahmawati', 5300000, 30, 4, 'Yogyakarta', 9, 'Sehat tanpa riwayat penyakit', 130000, '0832109876', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '8'),
(261, 34, 'Siti Widianti', 4800000, 27, 5, 'Surabaya', 8, 'Tidak memiliki kondisi kesehatan khusus', 140000, '0843210987', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '7'),
(262, 34, 'Taufik Pratama', 5000000, 33, 4, 'Jakarta', 10, 'Membutuhkan perawatan medis rutin', 150000, '0854321098', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '6'),
(263, 34, 'Umi Sari', 4700000, 28, 3, 'Bandung', 7, 'Berkebutuhan khusus pendengaran', 90000, '0865432109', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '12'),
(264, 34, 'Vina Susanti', 4900000, 34, 4, 'Yogyakarta', 9, 'Sehat tanpa riwayat penyakit', 100000, '0876543210', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '7'),
(265, 34, 'Wawan Prasetyo', 5300000, 29, 5, 'Surabaya', 11, 'Memiliki alergi terhadap debu', 110000, '0887654321', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '8'),
(266, 34, 'Xavier Nugraha', 5100000, 35, 3, 'Jakarta', 8, 'Tidak berpenyakit', 120000, '0898765432', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '8'),
(267, 34, 'Yanti Kartika', 4800000, 26, 4, 'Bandung', 10, 'Memiliki riwayat penyakit hipertensi', 130000, '0810987654', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '9'),
(268, 34, 'Zainal Setiawan', 5000000, 30, 3, 'Yogyakarta', 9, 'Sehat tanpa riwayat penyakit', 140000, '0821098765', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '9'),
(269, 34, 'Anita Puspita', 5200000, 27, 4, 'Surabaya', 7, 'Tidak memiliki kondisi kesehatan khusus', 150000, '0832109876', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '9');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `reset_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `saldo` varchar(20) NOT NULL DEFAULT '0.00',
  `poin` int(8) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `profile_image`, `email_verified_at`, `password`, `remember_token`, `reset_token`, `created_at`, `updated_at`, `token`, `saldo`, `poin`) VALUES
(34, 'Budi Santoso', 'budisantoso@gmail.com', '0812345678', NULL, NULL, '$2y$10$fQy8/pwD8crPPQvo3MaBPemNy37jDITKv/LIG/dymfnTHF/hNemW2', NULL, NULL, '2023-05-24 18:31:42', '2023-05-26 06:34:31', NULL, '1.000.000', 1000000),
(35, 'Dewi Indah', 'dewiindah@gmail.com', '0823456789', NULL, NULL, '$2y$10$fQy8/pwD8crPPQvo3MaBPemNy37jDITKv/LIG/dymfnTHF/hNemW2', NULL, NULL, '2023-05-24 18:31:42', '2023-05-24 18:31:42', NULL, '0.00', 0),
(36, 'Siti Rahayu', 'sitirahayu@gmail.com', '0834567890', NULL, NULL, '$2y$10$fQy8/pwD8crPPQvo3MaBPemNy37jDITKv/LIG/dymfnTHF/hNemW2', NULL, NULL, '2023-05-24 18:31:42', '2023-05-26 04:54:08', NULL, '10000', 0),
(37, 'Agus Prabowo', 'agusprabowo@gmail.com', '0845678901', NULL, NULL, '$2y$10$fQy8/pwD8crPPQvo3MaBPemNy37jDITKv/LIG/dymfnTHF/hNemW2', NULL, NULL, '2023-05-24 18:31:42', '2023-05-24 18:31:42', NULL, '0.00', 0),
(38, 'Rina Utami', 'rinautami@gmail.com', '0856789012', NULL, NULL, '$2y$10$fQy8/pwD8crPPQvo3MaBPemNy37jDITKv/LIG/dymfnTHF/hNemW2', NULL, NULL, '2023-05-24 18:31:42', '2023-05-24 18:31:42', NULL, '0.00', 0),
(39, 'Ahmad Surya', 'ahmadsurya@gmail.com', '0867890123', NULL, NULL, '$2y$10$fQy8/pwD8crPPQvo3MaBPemNy37jDITKv/LIG/dymfnTHF/hNemW2', NULL, NULL, '2023-05-24 18:31:42', '2023-05-24 18:31:42', NULL, '0.00', 0),
(40, 'Yuli Setiawan', 'yulisetiawan@gmail.com', '0878901234', NULL, NULL, '$2y$10$fQy8/pwD8crPPQvo3MaBPemNy37jDITKv/LIG/dymfnTHF/hNemW2', NULL, NULL, '2023-05-24 18:31:42', '2023-05-24 18:31:42', NULL, '0.00', 0),
(41, 'Rini Puspita', 'rinipuspita@gmail.com', '0889012345', NULL, NULL, '$2y$10$fQy8/pwD8crPPQvo3MaBPemNy37jDITKv/LIG/dymfnTHF/hNemW2', NULL, NULL, '2023-05-24 18:31:42', '2023-05-24 18:31:42', NULL, '0.00', 0),
(42, 'Eko Wijaya', 'ekowijaya@gmail.com', '0890123456', NULL, NULL, '$2y$10$fQy8/pwD8crPPQvo3MaBPemNy37jDITKv/LIG/dymfnTHF/hNemW2', NULL, NULL, '2023-05-24 18:31:42', '2023-05-24 18:31:42', NULL, '0.00', 0),
(43, 'Rita Kusuma', 'ritakusuma@gmail.com', '0901234567', NULL, NULL, '$2y$10$fQy8/pwD8crPPQvo3MaBPemNy37jDITKv/LIG/dymfnTHF/hNemW2', NULL, NULL, '2023-05-24 18:31:42', '2023-05-24 18:31:42', NULL, '0.00', 0),
(44, 'asdsada', 'adminn@gmail.com', '1212121', NULL, NULL, '$2y$10$fQy8/pwD8crPPQvo3MaBPemNy37jDITKv/LIG/dymfnTHF/hNemW2', NULL, NULL, '2023-05-24 20:55:39', '2023-05-24 20:55:39', NULL, '0.00', 0);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `prts`
--
ALTER TABLE `prts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=290;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
