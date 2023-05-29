-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 28 Bulan Mei 2023 pada 19.09
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
(14, '2023_05_27_043552_create_transaksi_points_table', 10);

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
  `jamkerja` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `prts`
--

INSERT INTO `prts` (`id`, `user_id`, `nama`, `gaji`, `umur`, `rating`, `lokasi`, `durasi`, `catatan`, `harga`, `no_telepon`, `profile_image`, `created_at`, `updated_at`, `jamkerja`, `deskripsi`) VALUES
(16, 1, 'Eva Nurhayati', 5100000, 29, 4, 'Jakarta', 9, 'Tidak berpenyakit', 860000, '0898901234', NULL, '2023-05-24 18:04:07', '2023-05-27 08:49:28', '8', NULL),
(17, 1, 'Fahmi Hakim', 4500000, 35, 3, 'Bandung', 11, 'Memiliki riwayat alergi makanan', 870000, '0899012345', NULL, '2023-05-24 18:04:07', '2023-05-26 10:49:31', '7', NULL),
(18, 1, 'Gita Permata', 4900000, 30, 4, 'Yogyakarta', 8, 'Tidak memiliki kondisi kesehatan khusus', 880000, '0812345678', NULL, '2023-05-24 18:04:07', '2023-05-26 10:58:05', '10', NULL),
(19, 1, 'Hendra Setiawan', 5300000, 31, 5, 'Surabaya', 10, 'Berkebutuhan khusus penglihatan', 890000, '0823456789', NULL, '2023-05-24 18:04:07', '2023-05-26 06:27:43', '11', NULL),
(20, 1, 'Indah Sari', 4700000, 26, 3, 'Jakarta', 12, 'Tidak memiliki riwayat penyakit', 900000, '0834567890', NULL, '2023-05-24 18:04:07', '2023-05-26 06:37:10', '6', NULL),
(21, 1, 'Joko Prabowo', 5100000, 32, 4, 'Bandung', 9, 'Sehat tanpa riwayat penyakit', 910000, '0845678901', NULL, '2023-05-24 18:04:07', '2023-05-26 06:39:06', '7', NULL),
(22, 1, 'Kartika Dewi', 4500000, 27, 3, 'Yogyakarta', 11, 'Berkebutuhan khusus pendengaran', 920000, '0890123456', NULL, '2023-05-24 18:04:07', '2023-05-26 06:41:13', '9', NULL),
(23, 1, 'Lia Utami', 4900000, 33, 4, 'Surabaya', 8, 'Memiliki alergi debu', 930000, '0891234567', NULL, '2023-05-24 18:04:07', '2023-05-26 06:51:33', '9', NULL),
(24, 1, 'Maulana Yusuf', 5300000, 28, 5, 'Jakarta', 10, 'Tidak berpenyakit', 940000, '0892345678', NULL, '2023-05-24 18:04:07', '2023-05-26 18:54:49', '9', NULL),
(25, 1, 'Nadia Permata', 4700000, 34, 3, 'Bandung', 7, 'Membutuhkan perhatian ekstra', 950000, '0893456789', NULL, '2023-05-24 18:04:07', '2023-05-26 06:53:52', '9', NULL),
(26, 1, 'Oscar Prasetyo', 5100000, 29, 4, 'Yogyakarta', 9, 'Tidak memiliki penyakit', 960000, '0894567890', NULL, '2023-05-24 18:04:07', '2023-05-26 07:02:25', '11', NULL),
(27, 1, 'Putri Rahayu', 4500000, 35, 3, 'Surabaya', 11, 'Sehat tanpa riwayat penyakit', 970000, '0895678901', NULL, '2023-05-24 18:04:07', '2023-05-26 07:02:46', '12', NULL),
(28, 1, 'Qori Abdullah', 4900000, 30, 4, 'Jakarta', 8, 'Memiliki riwayat alergi makanan', 980000, '0896789012', NULL, '2023-05-24 18:04:07', '2023-05-26 06:55:53', '12', NULL),
(29, 1, 'Rini Utami', 5300000, 31, 5, 'Bandung', 10, 'Tidak memiliki kondisi kesehatan khusus', 990000, '0897890123', NULL, '2023-05-24 18:04:07', '2023-05-26 07:11:54', '5', NULL),
(30, 0, 'Santoso Susanto', 4700000, 26, 3, 'Yogyakarta', 12, 'Berkebutuhan khusus penglihatan', 1000000, '0898901234', NULL, '2023-05-24 18:04:07', '2023-05-26 07:25:04', '7', NULL),
(31, 0, 'Agus Setiawan', 5000000, 25, 4, 'Jakarta', 8, 'Sehat tanpa riwayat penyakit', 100000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-26 07:30:08', '9', NULL),
(32, 0, 'Budi Santoso', 4500000, 30, 3, 'Surabaya', 12, 'Membutuhkan perhatian ekstra', 120000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-26 07:35:36', '12', NULL),
(33, 0, 'Citra Mulyani', 5500000, 28, 5, 'Bandung', 6, 'Tanpa kondisi kesehatan khusus', 80000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-26 07:40:15', '12', NULL),
(34, 0, 'Dewi Indah', 4800000, 32, 4, 'Yogyakarta', 10, 'Beberapa alergi makanan', 150000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-26 07:43:18', '11', NULL),
(35, 0, 'Eko Pratama', 5200000, 27, 3, 'Medan', 8, 'Tidak memiliki riwayat penyakit', 90000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-26 07:45:32', '8', NULL),
(36, 0, 'Fajar Wijaya', 4600000, 31, 4, 'Surabaya', 9, 'Kondisi kesehatan baik', 110000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-26 07:49:14', '8', NULL),
(37, 0, 'Gita Susanti', 4900000, 29, 3, 'Jakarta', 7, 'Memiliki riwayat asma', 100000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-26 07:53:19', '6', NULL),
(38, 0, 'Hendra Gunawan', 5100000, 26, 5, 'Bandung', 8, 'Sehat dan berenergi tinggi', 95000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-26 08:01:03', '8', NULL),
(39, 0, 'Indra Perdana', 4700000, 33, 4, 'Yogyakarta', 11, 'Mengalami alergi debu', 130000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-26 08:05:13', '11', NULL),
(40, 0, 'Joko Wibowo', 5300000, 27, 3, 'Medan', 9, 'Membutuhkan aksesibilitas', 90000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-26 08:05:19', '11', NULL),
(41, 0, 'Kartika Sari', 4800000, 30, 4, 'Surabaya', 10, 'Sehat dan bugar', 100000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-26 08:06:09', '10', NULL),
(42, 0, 'Laras Ayu', 4600000, 28, 3, 'Jakarta', 8, 'Berkebutuhan khusus penglihatan', 120000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-26 08:15:47', '6', NULL),
(43, 0, 'Maman Hidayat', 5200000, 31, 4, 'Bandung', 9, 'Tidak memiliki riwayat penyakit', 90000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-26 08:16:09', '8', NULL),
(44, 0, 'Nadia Putri', 5000000, 29, 5, 'Yogyakarta', 7, 'Tidak berpenyakit', 100000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-26 08:19:28', '12', NULL),
(45, 0, 'Oscar Aditya', 4800000, 26, 3, 'Medan', 8, 'Sehat tanpa masalah kesehatan', 95000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '7', NULL),
(46, 0, 'Putri Kusuma', 5100000, 33, 4, 'Surabaya', 10, 'Membutuhkan perawatan khusus', 130000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '11', NULL),
(47, 0, 'Rudi Hartono', 4700000, 27, 3, 'Jakarta', 9, 'Berkebutuhan khusus pendengaran', 100000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '8', NULL),
(48, 0, 'Siti Rahayu', 5300000, 30, 4, 'Bandung', 11, 'Tidak memiliki masalah kesehatan', 90000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '8', NULL),
(49, 0, 'Tono Suharto', 4800000, 28, 3, 'Yogyakarta', 8, 'Berkebutuhan khusus mobilitas', 95000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '5', NULL),
(50, 0, 'Udin Prasetyo', 5200000, 31, 4, 'Medan', 9, 'Tidak berpenyakit', 90000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10', NULL),
(51, 0, 'Vita Agustina', 5000000, 29, 5, 'Surabaya', 7, 'Sehat dan bugar', 100000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-26 11:03:19', '9', NULL),
(52, 0, 'Wawan Nugroho', 4600000, 26, 3, 'Jakarta', 8, 'Memiliki riwayat alergi', 120000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '11', NULL),
(53, 0, 'Yulia Sari', 5100000, 33, 4, 'Bandung', 9, 'Berkebutuhan khusus penglihatan', 90000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '7', NULL),
(54, 0, 'Zaki Rahman', 4900000, 27, 3, 'Yogyakarta', 10, 'Tidak berpenyakit', 130000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '11', NULL),
(55, 0, 'Adi Nugroho', 5300000, 30, 4, 'Medan', 7, 'Sehat tanpa riwayat penyakit', 95000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '6', NULL),
(56, 0, 'Bella Putri', 4800000, 28, 3, 'Surabaya', 8, 'Berkebutuhan khusus pendengaran', 100000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10', NULL),
(57, 0, 'Cindy Kusuma', 5200000, 31, 4, 'Jakarta', 9, 'Tidak berpenyakit', 90000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10', NULL),
(58, 0, 'Denny Pratama', 5000000, 29, 5, 'Bandung', 10, 'Sehat dan bugar', 100000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '8', NULL),
(59, 0, 'Eka Putri', 4700000, 26, 3, 'Yogyakarta', 8, 'Berkebutuhan khusus mobilitas', 120000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '6', NULL),
(60, 0, 'Fandi Susanto', 5100000, 33, 4, 'Medan', 9, 'Tidak memiliki masalah kesehatan', 95000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10', NULL),
(61, 0, 'Gita Ramadhani', 4900000, 27, 3, 'Surabaya', 7, 'Tidak berpenyakit', 100000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '11', NULL),
(62, 0, 'Hendro Wibowo', 5300000, 30, 4, 'Jakarta', 8, 'Sehat dan bugar', 90000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '7', NULL),
(63, 0, 'Intan Permata', 4800000, 28, 3, 'Bandung', 9, 'Berkebutuhan khusus penglihatan', 95000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10', NULL),
(64, 0, 'Joko Prasetyo', 5200000, 31, 4, 'Yogyakarta', 10, 'Tidak berpenyakit', 90000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '5', NULL),
(65, 0, 'Kiki Rahman', 5000000, 29, 5, 'Medan', 8, 'Memiliki riwayat alergi', 100000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10', NULL),
(66, 0, 'Lina Sari', 4600000, 26, 3, 'Surabaya', 9, 'Sehat tanpa riwayat penyakit', 120000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10', NULL),
(67, 0, 'Mila Putri', 5300000, 30, 4, 'Jakarta', 7, 'Berkebutuhan khusus pendengaran', 95000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '8', NULL),
(68, 0, 'Nana Kusuma', 4800000, 28, 3, 'Bandung', 8, 'Tidak berpenyakit', 90000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '11', NULL),
(69, 0, 'Oscar Prasetyo', 5200000, 31, 4, 'Yogyakarta', 9, 'Sehat dan bugar', 95000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '7', NULL),
(70, 0, 'Putri Rahayu', 5000000, 29, 5, 'Medan', 10, 'Tidak memiliki riwayat penyakit', 100000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '9', NULL),
(71, 0, 'Rudi Nugroho', 4700000, 26, 3, 'Surabaya', 8, 'Berkebutuhan khusus mobilitas', 120000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '8', NULL),
(72, 0, 'Sinta Agustina', 5100000, 33, 4, 'Jakarta', 9, 'Membutuhkan perawatan khusus', 90000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '11', NULL),
(73, 0, 'Tono Suharyanto', 4800000, 28, 3, 'Bandung', 10, 'Tidak berpenyakit', 95000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '8', NULL),
(74, 0, 'Udin Pratama', 5300000, 30, 4, 'Yogyakarta', 7, 'Sehat dan bugar', 90000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10', NULL),
(75, 0, 'Vita Susanti', 5000000, 29, 5, 'Medan', 8, 'Berkebutuhan khusus penglihatan', 100000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '6', NULL),
(76, 0, 'Wawan Kusuma', 4600000, 26, 3, 'Surabaya', 9, 'Tidak berpenyakit', 120000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10', NULL),
(77, 0, 'Yanti Pratiwi', 5100000, 33, 4, 'Jakarta', 10, 'Sehat tanpa riwayat penyakit', 90000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '7', NULL),
(78, 0, 'Zara Rahayu', 4900000, 27, 3, 'Bandung', 8, 'Memiliki riwayat alergi', 95000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '7', NULL),
(79, 0, 'Abdi Nugroho', 5300000, 30, 4, 'Yogyakarta', 9, 'Tidak berpenyakit', 90000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '7', NULL),
(80, 0, 'Bunga Kusuma', 5000000, 29, 5, 'Medan', 7, 'Sehat dan bugar', 100000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '11', NULL),
(81, 0, 'Citra Susanto', 4800000, 26, 3, 'Surabaya', 8, 'Berkebutuhan khusus pendengaran', 95000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '6', NULL),
(82, 0, 'Dharma Wijaya', 5200000, 31, 4, 'Jakarta', 9, 'Tidak berpenyakit', 90000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '6', NULL),
(83, 0, 'Eva Pratiwi', 5000000, 29, 5, 'Bandung', 10, 'Sehat dan bugar', 100000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10', NULL),
(84, 0, 'Fandy Wibowo', 4700000, 26, 3, 'Yogyakarta', 8, 'Berkebutuhan khusus penglihatan', 120000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10', NULL),
(85, 0, 'Gita Rahayu', 5100000, 33, 4, 'Medan', 9, 'Tidak berpenyakit', 90000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '7', NULL),
(86, 0, 'Hendra Nugroho', 5300000, 30, 4, 'Surabaya', 10, 'Sehat tanpa masalah kesehatan', 95000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-26 08:11:50', '9', NULL),
(87, 0, 'Indah Putri', 4800000, 28, 3, 'Jakarta', 9, 'Membutuhkan perawatan khusus', 90000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10', NULL),
(88, 0, 'Joni Suharyanto', 5200000, 31, 4, 'Bandung', 10, 'Tidak berpenyakit', 100000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '6', NULL),
(89, 0, 'Kiki Rahayu', 5000000, 29, 5, 'Yogyakarta', 7, 'Sehat dan bugar', 90000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10', NULL),
(90, 0, 'Lina Susanti', 4600000, 26, 3, 'Medan', 8, 'Berkebutuhan khusus pendengaran', 95000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '12', NULL),
(91, 0, 'Mila Wijaya', 5100000, 33, 4, 'Surabaya', 9, 'Tidak berpenyakit', 90000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10', NULL),
(92, 0, 'Nadia Rahayu', 5300000, 30, 4, 'Jakarta', 10, 'Sehat dan bugar', 95000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '9', NULL),
(93, 0, 'Oscar Prasetya', 4800000, 28, 3, 'Bandung', 9, 'Memiliki riwayat alergi', 90000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '9', NULL),
(94, 0, 'Putri Nugroho', 5200000, 31, 4, 'Yogyakarta', 10, 'Tidak berpenyakit', 100000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '5', NULL),
(95, 0, 'Rudi Suharto', 5000000, 29, 5, 'Medan', 8, 'Sehat tanpa riwayat penyakit', 90000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10', NULL),
(96, 0, 'Sinta Wijaya', 4700000, 26, 3, 'Surabaya', 9, 'Berkebutuhan khusus mobilitas', 95000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '6', NULL),
(97, 0, 'Tono Rahayu', 5300000, 30, 4, 'Jakarta', 10, 'Tidak berpenyakit', 90000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '5', NULL),
(98, 0, 'Udin Prasetya', 4800000, 28, 3, 'Bandung', 9, 'Sehat dan bugar', 90000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '9', NULL),
(99, 0, 'Vita Susanti', 5200000, 31, 4, 'Yogyakarta', 10, 'Tidak memiliki riwayat penyakit', 100000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '11', NULL),
(100, 0, 'Wawan Nugroho', 5000000, 29, 5, 'Medan', 7, 'Berkebutuhan khusus pendengaran', 90000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10', NULL),
(101, 0, 'Yanti Prasetyo', 4700000, 26, 3, 'Surabaya', 8, 'Tidak berpenyakit', 95000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10', NULL),
(102, 0, 'Zara Wijaya', 5300000, 30, 4, 'Jakarta', 9, 'Sehat dan bugar', 90000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '9', NULL),
(103, 0, 'Abdi Rahayu', 5000000, 29, 5, 'Bandung', 10, 'Memiliki riwayat alergi', 100000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10', NULL),
(104, 0, 'Bella Nugroho', 4800000, 28, 3, 'Yogyakarta', 9, 'Tidak berpenyakit', 90000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10', NULL),
(105, 0, 'Citra Susanti', 5200000, 31, 4, 'Medan', 10, 'Sehat dan bugar', 95000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '7', NULL),
(106, 0, 'Dharma Prasetya', 5000000, 29, 5, 'Surabaya', 8, 'Tidak memiliki masalah kesehatan', 90000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '7', NULL),
(107, 0, 'Eva Wijaya', 4700000, 26, 3, 'Jakarta', 9, 'Berkebutuhan khusus mobilitas', 95000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '11', NULL),
(108, 0, 'Fandy Rahayu', 5300000, 30, 4, 'Bandung', 10, 'Tidak berpenyakit', 90000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '9', NULL),
(109, 0, 'Gita Prasetyo', 4900000, 27, 3, 'Yogyakarta', 8, 'Sehat tanpa masalah kesehatan', 95000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '6', NULL),
(110, 0, 'Hendra Nugroho', 5100000, 33, 4, 'Medan', 9, 'Berkebutuhan khusus penglihatan', 90000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '6', NULL),
(111, 0, 'Indah Susanti', 5300000, 30, 4, 'Surabaya', 10, 'Tidak berpenyakit', 100000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '12', NULL),
(112, 0, 'Joni Prasetyo', 4800000, 28, 3, 'Jakarta', 9, 'Sehat dan bugar', 95000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '9', NULL),
(113, 0, 'Kiki Nugroho', 5200000, 31, 4, 'Bandung', 10, 'Tidak berpenyakit', 90000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '6', NULL),
(114, 0, 'Lina Rahayu', 5000000, 29, 5, 'Yogyakarta', 7, 'Memiliki riwayat alergi', 100000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10', NULL),
(115, 0, 'Mila Prasetyo', 4800000, 28, 3, 'Medan', 8, 'Tidak berpenyakit', 95000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '8', NULL),
(116, 0, 'Nadia Nugroho', 5100000, 33, 4, 'Surabaya', 9, 'Sehat dan bugar', 90000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '11', NULL),
(117, 0, 'Oscar Susanto', 4700000, 26, 3, 'Jakarta', 10, 'Berkebutuhan khusus penglihatan', 95000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '11', NULL),
(118, 0, 'Putri Wijaya', 5300000, 30, 4, 'Bandung', 9, 'Tidak berpenyakit', 90000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '11', NULL),
(119, 0, 'Rudi Rahayu', 5000000, 29, 5, 'Yogyakarta', 10, 'Sehat dan bugar', 100000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10', NULL),
(120, 0, 'Sinta Prasetyo', 4800000, 28, 3, 'Medan', 9, 'Tidak memiliki riwayat penyakit', 95000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '5', NULL),
(121, 0, 'Tono Nugroho', 5200000, 31, 4, 'Surabaya', 10, 'Sehat tanpa masalah kesehatan', 90000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '5', NULL),
(122, 0, 'Udin Susanti', 5000000, 29, 5, 'Jakarta', 8, 'Berkebutuhan khusus mobilitas', 95000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '12', NULL),
(123, 0, 'Vita Prasetyo', 4700000, 26, 3, 'Bandung', 9, 'Tidak berpenyakit', 90000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10', NULL),
(124, 0, 'Wawan Nugroho', 5300000, 30, 4, 'Yogyakarta', 10, 'Sehat dan bugar', 100000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10', NULL),
(125, 0, 'Yanti Rahayu', 5100000, 33, 4, 'Medan', 9, 'Berkebutuhan khusus pendengaran', 95000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10', NULL),
(126, 0, 'Zara Prasetyo', 4900000, 27, 3, 'Surabaya', 10, 'Tidak berpenyakit', 90000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '6', NULL),
(127, 0, 'Abdi Susanti', 5300000, 30, 4, 'Jakarta', 9, 'Sehat dan bugar', 90000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '11', NULL),
(128, 0, 'Bella Prasetyo', 5100000, 33, 4, 'Bandung', 10, 'Tidak memiliki masalah kesehatan', 100000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '9', NULL),
(129, 0, 'Citra Nugroho', 4900000, 27, 3, 'Yogyakarta', 8, 'Berkebutuhan khusus penglihatan', 95000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '9', NULL),
(130, 0, 'Dharma Susanto', 5300000, 30, 4, 'Medan', 9, 'Tidak berpenyakit', 90000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '5', NULL),
(131, 0, 'Eva Prasetyo', 5100000, 33, 4, 'Surabaya', 10, 'Sehat dan bugar', 95000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '8', NULL),
(132, 0, 'Fandy Nugroho', 4700000, 26, 3, 'Jakarta', 9, 'Berkebutuhan khusus pendengaran', 90000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '5', NULL),
(133, 0, 'Gita Susanto', 5300000, 30, 4, 'Bandung', 10, 'Tidak berpenyakit', 90000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '11', NULL),
(134, 0, 'Hendra Prasetyo', 5100000, 33, 4, 'Yogyakarta', 7, 'Sehat dan bugar', 100000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '5', NULL),
(135, 0, 'Indah Nugroho', 4700000, 26, 3, 'Medan', 8, 'Berkebutuhan khusus mobilitas', 95000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '9', NULL),
(136, 0, 'Joni Susanto', 5300000, 30, 4, 'Surabaya', 9, 'Tidak berpenyakit', 90000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '12', NULL),
(137, 0, 'Kiki Prasetyo', 5100000, 33, 4, 'Jakarta', 10, 'Sehat dan bugar', 95000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '6', NULL),
(138, 0, 'Lina Nugroho', 4700000, 26, 3, 'Bandung', 9, 'Tidak berpenyakit', 90000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '11', NULL),
(139, 0, 'Mila Susanto', 5300000, 30, 4, 'Yogyakarta', 10, 'Memiliki riwayat alergi', 100000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '11', NULL),
(140, 0, 'Nadia Prasetyo', 4900000, 27, 3, 'Medan', 8, 'Tidak berpenyakit', 95000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10', NULL),
(141, 0, 'Oscar Nugroho', 5300000, 30, 4, 'Surabaya', 9, 'Sehat dan bugar', 90000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '12', NULL),
(142, 0, 'Putri Susanto', 4700000, 26, 3, 'Jakarta', 10, 'Tidak berpenyakit', 95000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10', NULL),
(143, 0, 'Rudi Prasetyo', 5300000, 30, 4, 'Bandung', 9, 'Sehat tanpa riwayat penyakit', 90000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '8', NULL),
(144, 0, 'Sinta Nugroho', 5100000, 33, 4, 'Yogyakarta', 10, 'Berkebutuhan khusus mobilitas', 100000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '8', NULL),
(145, 0, 'Tono Susanto', 4700000, 26, 3, 'Medan', 9, 'Tidak berpenyakit', 90000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '9', NULL),
(146, 0, 'Udin Prasetyo', 5300000, 30, 4, 'Surabaya', 10, 'Sehat dan bugar', 95000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '8', NULL),
(147, 0, 'Vita Nugroho', 4900000, 27, 3, 'Jakarta', 8, 'Memiliki riwayat alergi', 90000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10', NULL),
(148, 0, 'Wawan Susanto', 5300000, 30, 4, 'Bandung', 9, 'Tidak berpenyakit', 90000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '7', NULL),
(149, 0, 'Yanti Prasetyo', 5100000, 33, 4, 'Yogyakarta', 10, 'Sehat dan bugar', 100000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '7', NULL),
(150, 0, 'Zara Nugroho', 4900000, 27, 3, 'Medan', 9, 'Berkebutuhan khusus pendengaran', 95000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '7', NULL),
(151, 0, 'Abdi Prasetyo', 5300000, 30, 4, 'Surabaya', 10, 'Tidak berpenyakit', 90000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '11', NULL),
(152, 0, 'Bella Susanto', 4700000, 26, 3, 'Jakarta', 9, 'Sehat dan bugar', 95000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '6', NULL),
(153, 0, 'Citra Nugroho', 5300000, 30, 4, 'Bandung', 10, 'Tidak berpenyakit', 90000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '9', NULL),
(154, 0, 'Dharma Prasetyo', 5100000, 33, 4, 'Yogyakarta', 8, 'Memiliki riwayat alergi', 100000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '7', NULL),
(155, 0, 'Eva Nugroho', 4900000, 27, 3, 'Medan', 9, 'Tidak berpenyakit', 95000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '10', NULL),
(156, 0, 'Fandy Susanto', 5300000, 30, 4, 'Surabaya', 10, 'Sehat dan bugar', 90000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '9', NULL),
(157, 0, 'Gita Prasetyo', 4700000, 26, 3, 'Jakarta', 9, 'Berkebutuhan khusus penglihatan', 95000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '6', NULL),
(158, 0, 'Hendra Nugroho', 5300000, 30, 4, 'Bandung', 10, 'Tidak berpenyakit', 90000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '8', NULL),
(159, 0, 'Indah Susanto', 5100000, 33, 4, 'Yogyakarta', 7, 'Sehat dan bugar', 100000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '6', NULL),
(160, 0, 'Joni Nugroho', 4700000, 26, 3, 'Medan', 8, 'Berkebutuhan khusus mobilitas', 95000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '9', NULL),
(161, 0, 'Kiki Prasetyo', 5300000, 30, 4, 'Surabaya', 9, 'Tidak berpenyakit', 90000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '6', NULL),
(162, 0, 'Lina Susanto', 4900000, 27, 3, 'Jakarta', 10, 'Sehat dan bugar', 95000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '8', NULL),
(163, 0, 'Mila Nugroho', 5300000, 30, 4, 'Bandung', 9, 'Tidak berpenyakit', 90000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '6', NULL),
(164, 0, 'Nadia Prasetyo', 5100000, 33, 4, 'Yogyakarta', 10, 'Berkebutuhan khusus pendengaran', 100000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '11', NULL),
(165, 0, 'Oscar Nugroho', 4700000, 26, 3, 'Medan', 9, 'Tidak berpenyakit', 90000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '8', NULL),
(166, 0, 'Putri Prasetyo', 5300000, 30, 4, 'Surabaya', 10, 'Sehat dan bugar', 95000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', '11', NULL),
(167, 0, 'Agus Setiawan', 5000000, 25, 4, 'Jakarta', 8, 'Sehat tanpa riwayat penyakit', 100000, '0812345678', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '6', NULL),
(168, 0, 'Budi Santoso', 4500000, 30, 3, 'Surabaya', 12, 'Membutuhkan perhatian ekstra', 120000, '0823456789', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '7', NULL),
(169, 0, 'Citra Mulyani', 5500000, 28, 5, 'Bandung', 6, 'Tanpa kondisi kesehatan khusus', 80000, '0834567890', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '9', NULL),
(170, 0, 'Dewi Indah', 4800000, 32, 4, 'Yogyakarta', 10, 'Beberapa alergi makanan', 150000, '0845678901', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '8', NULL),
(171, 0, 'Eko Pratama', 5200000, 27, 3, 'Medan', 8, 'Tidak memiliki riwayat penyakit', 90000, '0890123456', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '6', NULL),
(172, 0, 'Fanny Sari', 4700000, 31, 4, 'Surabaya', 7, 'Memiliki alergi debu', 95000, '0891234567', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '6', NULL),
(173, 0, 'Gita Purnama', 5100000, 26, 5, 'Jakarta', 9, 'Tidak berpenyakit', 100000, '0892345678', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '10', NULL),
(174, 0, 'Hadi Susanto', 4600000, 29, 3, 'Bandung', 11, 'Membutuhkan perawatan medis rutin', 110000, '0893456789', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '7', NULL),
(175, 0, 'Ika Nurhayati', 4900000, 33, 4, 'Yogyakarta', 8, 'Berkebutuhan khusus penglihatan', 120000, '0894567890', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '12', NULL),
(176, 0, 'Joko Wibowo', 5300000, 28, 5, 'Surabaya', 10, 'Sehat tanpa riwayat penyakit', 130000, '0895678901', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '11', NULL),
(177, 0, 'Kartika Sari', 4800000, 34, 3, 'Jakarta', 7, 'Tidak memiliki kondisi kesehatan khusus', 140000, '0896789012', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '10', NULL),
(178, 0, 'Lukman Hakim', 5200000, 29, 4, 'Bandung', 9, 'Memiliki riwayat penyakit', 90000, '0897890123', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '6', NULL),
(179, 0, 'Mita Wijaya', 4700000, 26, 5, 'Jakarta', 8, 'Sehat tanpa riwayat penyakit', 100000, '0898901234', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '8', NULL),
(180, 0, 'Nina Puspita', 5100000, 31, 4, 'Surabaya', 10, 'Tidak memiliki kondisi kesehatan khusus', 110000, '0899012345', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '11', NULL),
(181, 0, 'Oscar Gunawan', 4900000, 27, 3, 'Bandung', 9, 'Memiliki riwayat penyakit', 120000, '0890123456', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '11', NULL),
(182, 0, 'Putri Anggraini', 5300000, 32, 5, 'Yogyakarta', 8, 'Sehat tanpa riwayat penyakit', 130000, '0891234567', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '8', NULL),
(183, 0, 'Rudi Santoso', 4700000, 28, 4, 'Medan', 7, 'Berkebutuhan khusus penglihatan', 90000, '0892345678', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '11', NULL),
(184, 0, 'Sari Mulia', 5200000, 33, 3, 'Surabaya', 9, 'Membutuhkan perawatan medis rutin', 110000, '0893456789', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '10', NULL),
(185, 0, 'Taufik Hidayat', 4800000, 29, 4, 'Jakarta', 11, 'Sehat tanpa riwayat penyakit', 120000, '0894567890', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '8', NULL),
(186, 0, 'Uci Indah', 5100000, 34, 5, 'Bandung', 8, 'Tidak berpenyakit', 130000, '0895678901', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '11', NULL),
(187, 0, 'Vina Puspitasari', 4600000, 30, 3, 'Yogyakarta', 10, 'Memiliki riwayat penyakit', 140000, '0896789012', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '12', NULL),
(188, 0, 'Wahyu Santoso', 5000000, 35, 4, 'Surabaya', 7, 'Sehat tanpa riwayat penyakit', 100000, '0897890123', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '7', NULL),
(189, 0, 'Xavier Wijaya', 4800000, 31, 5, 'Medan', 9, 'Berkebutuhan khusus penglihatan', 110000, '0898901234', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '9', NULL),
(190, 0, 'Yunita Mulia', 5300000, 26, 4, 'Jakarta', 8, 'Tidak memiliki kondisi kesehatan khusus', 120000, '0899012345', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '12', NULL),
(191, 0, 'Zaki Susanto', 4700000, 32, 3, 'Bandung', 10, 'Memiliki riwayat penyakit', 130000, '0890123456', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '5', NULL),
(192, 0, 'Ani Wijaya', 5100000, 27, 4, 'Yogyakarta', 9, 'Sehat tanpa riwayat penyakit', 140000, '0891234567', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '7', NULL),
(193, 0, 'Bambang Santoso', 4900000, 33, 5, 'Surabaya', 8, 'Tidak berpenyakit', 100000, '0892345678', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '9', NULL),
(194, 0, 'Cindy Mulia', 5300000, 28, 3, 'Jakarta', 11, 'Berkebutuhan khusus penglihatan', 110000, '0893456789', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '11', NULL),
(195, 0, 'Dodi Purnama', 4800000, 34, 4, 'Bandung', 9, 'Memiliki riwayat penyakit', 120000, '0894567890', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '7', NULL),
(196, 0, 'Eva Sari', 5200000, 29, 5, 'Yogyakarta', 10, 'Sehat tanpa riwayat penyakit', 130000, '0895678901', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '6', NULL),
(197, 0, 'Faisal Hakim', 4700000, 35, 3, 'Medan', 7, 'Tidak memiliki kondisi kesehatan khusus', 140000, '0896789012', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '5', NULL),
(198, 0, 'Gita Nurhayati', 5000000, 30, 4, 'Surabaya', 8, 'Membutuhkan perawatan medis rutin', 100000, '0897890123', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '8', NULL),
(199, 0, 'Hendra Wibowo', 4600000, 26, 5, 'Jakarta', 9, 'Berkebutuhan khusus penglihatan', 110000, '0898901234', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '7', NULL),
(200, 0, 'Indah Puspita', 5100000, 31, 3, 'Bandung', 10, 'Memiliki riwayat penyakit', 120000, '0899012345', NULL, '2023-05-25 01:33:15', '2023-05-27 14:04:42', '11', NULL),
(201, 0, 'Joko Santoso', 4900000, 27, 4, 'Yogyakarta', 8, 'Sehat tanpa riwayat penyakit', 130000, '0890123456', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '9', NULL),
(202, 0, 'Kartika Mulia', 5300000, 32, 5, 'Surabaya', 9, 'Tidak berpenyakit', 140000, '0891234567', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '8', NULL),
(203, 0, 'Lia Wijaya', 4700000, 28, 3, 'Medan', 11, 'Berkebutuhan khusus penglihatan', 90000, '0892345678', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '6', NULL),
(204, 0, 'Miftah Hakim', 5100000, 33, 4, 'Jakarta', 10, 'Sehat tanpa riwayat penyakit', 100000, '0893456789', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '7', NULL),
(205, 0, 'Nadia Sari', 4700000, 29, 5, 'Bandung', 8, 'Tidak memiliki kondisi kesehatan khusus', 110000, '0894567890', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '6', NULL),
(206, 0, 'Oscar Nurhayati', 5200000, 34, 3, 'Yogyakarta', 7, 'Memiliki riwayat penyakit', 120000, '0895678901', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '6', NULL),
(207, 0, 'Putri Wibowo', 4800000, 30, 4, 'Surabaya', 9, 'Sehat tanpa riwayat penyakit', 130000, '0896789012', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '11', NULL),
(208, 0, 'Rudi Hakim', 5300000, 35, 5, 'Jakarta', 8, 'Berkebutuhan khusus penglihatan', 140000, '0897890123', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '6', NULL),
(209, 0, 'Sari Santoso', 4700000, 31, 3, 'Bandung', 10, 'Memiliki riwayat penyakit', 100000, '0898901234', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '12', NULL),
(210, 0, 'Taufik Mulia', 5100000, 26, 4, 'Yogyakarta', 11, 'Sehat tanpa riwayat penyakit', 110000, '0899012345', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '9', NULL),
(211, 0, 'Uci Hakim', 4800000, 32, 5, 'Surabaya', 9, 'Tidak berpenyakit', 120000, '0890123456', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '10', NULL),
(212, 0, 'Vina Nurhayati', 5300000, 27, 3, 'Medan', 8, 'Berkebutuhan khusus penglihatan', 130000, '0891234567', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '12', NULL),
(213, 0, 'Wahyu Wibowo', 4700000, 33, 4, 'Jakarta', 10, 'Sehat tanpa riwayat penyakit', 140000, '0892345678', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '9', NULL),
(214, 0, 'Xavier Mulia', 5200000, 28, 5, 'Bandung', 9, 'Tidak memiliki kondisi kesehatan khusus', 100000, '0893456789', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '6', NULL),
(215, 0, 'Yunita Hakim', 4800000, 34, 3, 'Yogyakarta', 7, 'Memiliki riwayat penyakit', 110000, '0894567890', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '10', NULL),
(216, 0, 'Zaki Wijaya', 5300000, 29, 4, 'Surabaya', 8, 'Sehat tanpa riwayat penyakit', 120000, '0895678901', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', '6', NULL),
(217, 0, 'Agus Setiawan', 5000000, 25, 4, 'Jakarta', 8, 'Sehat tanpa riwayat penyakit', 100000, '0812345678', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '9', NULL),
(218, 0, 'Budi Santoso', 4500000, 30, 3, 'Surabaya', 12, 'Membutuhkan perhatian ekstra', 120000, '0823456789', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '8', NULL),
(219, 0, 'Citra Mulyani', 5500000, 28, 5, 'Bandung', 6, 'Tanpa kondisi kesehatan khusus', 80000, '0834567890', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '7', NULL),
(220, 0, 'Dewi Indah', 4800000, 32, 4, 'Yogyakarta', 10, 'Beberapa alergi makanan', 150000, '0845678901', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '8', NULL),
(221, 0, 'Eko Pratama', 5200000, 27, 3, 'Medan', 8, 'Tidak memiliki riwayat penyakit', 90000, '0890123456', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '7', NULL),
(222, 0, 'Fanny Sari', 4700000, 31, 4, 'Surabaya', 7, 'Memiliki alergi debu', 95000, '0891234567', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '7', NULL),
(223, 0, 'Gita Purnama', 5100000, 26, 5, 'Jakarta', 9, 'Tidak berpenyakit', 100000, '0892345678', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '8', NULL),
(224, 0, 'Hadi Susanto', 4600000, 29, 3, 'Bandung', 11, 'Membutuhkan perawatan medis rutin', 110000, '0893456789', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '7', NULL),
(225, 0, 'Ika Nurhayati', 4900000, 33, 4, 'Yogyakarta', 8, 'Berkebutuhan khusus penglihatan', 120000, '0894567890', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '7', NULL),
(226, 0, 'Joko Wibowo', 5300000, 28, 5, 'Surabaya', 10, 'Sehat tanpa riwayat penyakit', 130000, '0895678901', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '7', NULL),
(227, 0, 'Kartika Sari', 4800000, 34, 3, 'Jakarta', 7, 'Tidak memiliki kondisi kesehatan khusus', 140000, '0896789012', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '10', NULL),
(228, 0, 'Lukman Hakim', 5200000, 29, 4, 'Bandung', 9, 'Memiliki riwayat penyakit asma', 90000, '0897890123', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '10', NULL),
(229, 0, 'Mila Rachmawati', 5100000, 27, 4, 'Surabaya', 8, 'Sehat tanpa riwayat penyakit', 100000, '0898901234', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '8', NULL),
(230, 0, 'Nugroho Prasetyo', 4600000, 32, 3, 'Jakarta', 12, 'Memiliki alergi terhadap kacang', 110000, '0899012345', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '7', NULL),
(231, 0, 'Oscar Wijaya', 5000000, 29, 5, 'Bandung', 6, 'Sehat tanpa riwayat penyakit', 120000, '0810987654', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '11', NULL),
(232, 0, 'Putri Hapsari', 4800000, 35, 4, 'Yogyakarta', 10, 'Tidak memiliki kondisi kesehatan khusus', 130000, '0821098765', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '7', NULL),
(233, 0, 'Qori Ramadhan', 5100000, 28, 3, 'Surabaya', 7, 'Memiliki riwayat penyakit diabetes', 140000, '0832109876', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '11', NULL),
(234, 0, 'Rina Susanti', 4700000, 30, 4, 'Jakarta', 9, 'Sehat tanpa riwayat penyakit', 150000, '0843210987', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '10', NULL),
(235, 0, 'Siti Rahmawati', 5300000, 26, 5, 'Bandung', 11, 'Tidak berpenyakit', 90000, '0854321098', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '11', NULL),
(236, 0, 'Taufik Hidayat', 5000000, 31, 4, 'Yogyakarta', 8, 'Membutuhkan perawatan medis rutin', 100000, '0865432109', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '12', NULL),
(237, 0, 'Umi Kusumawati', 5200000, 27, 3, 'Surabaya', 10, 'Sehat tanpa riwayat penyakit', 110000, '0876543210', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '8', NULL),
(238, 0, 'Vina Kartika', 4800000, 33, 4, 'Jakarta', 7, 'Tidak memiliki kondisi kesehatan khusus', 120000, '0887654321', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '6', NULL),
(239, 0, 'Wawan Sugianto', 5000000, 28, 5, 'Bandung', 9, 'Memiliki riwayat penyakit asma', 130000, '0898765432', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '9', NULL),
(240, 0, 'Xavier Gunawan', 5300000, 34, 3, 'Yogyakarta', 8, 'Sehat tanpa riwayat penyakit', 140000, '0810987654', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '9', NULL),
(241, 0, 'Yanti Pratiwi', 5100000, 29, 4, 'Surabaya', 12, 'Memiliki alergi terhadap debu', 150000, '0821098765', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '12', NULL),
(242, 0, 'Zainal Abidin', 4700000, 35, 3, 'Jakarta', 6, 'Berkebutuhan khusus pendengaran', 90000, '0832109876', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '7', NULL),
(243, 0, 'Anita Putri', 4800000, 26, 4, 'Bandung', 10, 'Tidak berpenyakit', 100000, '0843210987', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '7', NULL),
(244, 0, 'Bayu Santoso', 5200000, 30, 5, 'Yogyakarta', 7, 'Sehat tanpa riwayat penyakit', 110000, '0854321098', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '11', NULL),
(245, 0, 'Citra Puspita', 5000000, 27, 4, 'Surabaya', 9, 'Membutuhkan perawatan medis rutin', 120000, '0865432109', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '5', NULL),
(246, 0, 'Dewi Anggraini', 4900000, 33, 3, 'Jakarta', 11, 'Memiliki riwayat penyakit hipertensi', 130000, '0876543210', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '11', NULL),
(247, 0, 'Eka Susilawati', 5300000, 28, 4, 'Bandung', 8, 'Sehat tanpa riwayat penyakit', 140000, '0887654321', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '11', NULL),
(248, 0, 'Fajar Nugraha', 5100000, 34, 5, 'Yogyakarta', 10, 'Tidak memiliki kondisi kesehatan khusus', 150000, '0898765432', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '6', NULL),
(249, 0, 'Gita Permata', 5000000, 29, 4, 'Surabaya', 7, 'Memiliki riwayat penyakit asma', 90000, '0810987654', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '10', NULL),
(250, 0, 'Hadi Setiawan', 5200000, 35, 3, 'Jakarta', 9, 'Sehat tanpa riwayat penyakit', 100000, '0821098765', NULL, '2023-05-25 02:14:45', '2023-05-26 04:18:13', '6', NULL),
(251, 0, 'Indah Sari', 4700000, 26, 4, 'Bandung', 8, 'Berkebutuhan khusus penglihatan', 110000, '0832109876', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '10', NULL),
(252, 0, 'Joko Widodo', 4800000, 30, 5, 'Yogyakarta', 10, 'Tidak berpenyakit', 120000, '0843210987', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '7', NULL),
(253, 0, 'Kartika Dewi', 5200000, 27, 3, 'Surabaya', 11, 'Membutuhkan perhatian ekstra', 130000, '0854321098', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '12', NULL),
(254, 0, 'Lukman Hakim', 5300000, 33, 4, 'Jakarta', 7, 'Sehat tanpa riwayat penyakit', 140000, '0865432109', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '7', NULL),
(255, 0, 'Mila Kusuma', 4800000, 28, 5, 'Bandung', 9, 'Tidak memiliki kondisi kesehatan khusus', 150000, '0876543210', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '7', NULL),
(256, 0, 'Nina Wulandari', 5000000, 34, 4, 'Yogyakarta', 8, 'Memiliki riwayat penyakit diabetes', 90000, '0887654321', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '10', NULL),
(257, 0, 'Oscar Pratama', 4700000, 29, 3, 'Surabaya', 10, 'Sehat tanpa riwayat penyakit', 100000, '0898765432', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '8', NULL),
(258, 0, 'Putri Lestari', 4900000, 35, 4, 'Jakarta', 7, 'Tidak berpenyakit', 110000, '0810987654', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '6', NULL),
(259, 0, 'Qori Rahman', 5200000, 26, 3, 'Bandung', 11, 'Memiliki riwayat penyakit asma', 120000, '0821098765', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '9', NULL),
(260, 0, 'Rina Rahmawati', 5300000, 30, 4, 'Yogyakarta', 9, 'Sehat tanpa riwayat penyakit', 130000, '0832109876', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '8', NULL),
(261, 0, 'Siti Widianti', 4800000, 27, 5, 'Surabaya', 8, 'Tidak memiliki kondisi kesehatan khusus', 140000, '0843210987', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '7', NULL),
(262, 0, 'Taufik Pratama', 5000000, 33, 4, 'Jakarta', 10, 'Membutuhkan perawatan medis rutin', 150000, '0854321098', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '6', NULL),
(263, 0, 'Umi Sari', 4700000, 28, 3, 'Bandung', 7, 'Berkebutuhan khusus pendengaran', 90000, '0865432109', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '12', NULL),
(264, 0, 'Vina Susanti', 4900000, 34, 4, 'Yogyakarta', 9, 'Sehat tanpa riwayat penyakit', 100000, '0876543210', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '7', NULL),
(265, 0, 'Wawan Prasetyo', 5300000, 29, 5, 'Surabaya', 11, 'Memiliki alergi terhadap debu', 110000, '0887654321', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '8', NULL),
(266, 0, 'Xavier Nugraha', 5100000, 35, 3, 'Jakarta', 8, 'Tidak berpenyakit', 120000, '0898765432', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '8', NULL),
(267, 0, 'Yanti Kartika', 4800000, 26, 4, 'Bandung', 10, 'Memiliki riwayat penyakit hipertensi', 130000, '0810987654', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '9', NULL),
(268, 1, 'Zainal Setiawan', 5000000, 30, 3, 'Yogyakarta', 9, 'Sehat tanpa riwayat penyakit', 140000, '0821098765', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', '9', NULL),
(269, 0, 'Anita Puspita', 5200000, 27, 4, 'Surabaya', 7, 'Tidak memiliki kondisi kesehatan khusus', 150000, '0832109876', NULL, '2023-05-25 02:14:45', '2023-05-28 06:04:46', '9', NULL);

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
  `saldo` float DEFAULT 0,
  `poin` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `profile_image`, `email_verified_at`, `password`, `remember_token`, `reset_token`, `created_at`, `updated_at`, `token`, `saldo`, `poin`) VALUES
(1, 'Budi Santoso', 'budisantoso@gmail.com', '0812345678', NULL, NULL, '$2y$10$mQWTLc3OEbzHDJzQ4D.C0O7.nB/UDb21.64Da1reFacD3QaJcgD5C', NULL, NULL, '2023-05-24 18:31:42', '2023-05-27 22:12:24', NULL, 111000, 418),
(35, 'Dewi Indah', 'dewiindah@gmail.com', '0823456789', NULL, NULL, '$2y$10$fQy8/pwD8crPPQvo3MaBPemNy37jDITKv/LIG/dymfnTHF/hNemW2', NULL, NULL, '2023-05-24 18:31:42', '2023-05-24 18:31:42', NULL, 0, 0),
(36, 'Siti Rahayu', 'sitirahayu@gmail.com', '0834567890', NULL, NULL, '$2y$10$fQy8/pwD8crPPQvo3MaBPemNy37jDITKv/LIG/dymfnTHF/hNemW2', NULL, NULL, '2023-05-24 18:31:42', '2023-05-26 04:54:08', NULL, 10000, 10000),
(37, 'Agus Prabowo', 'agusprabowo@gmail.com', '0845678901', NULL, NULL, '$2y$10$fQy8/pwD8crPPQvo3MaBPemNy37jDITKv/LIG/dymfnTHF/hNemW2', NULL, NULL, '2023-05-24 18:31:42', '2023-05-24 18:31:42', NULL, 0, 0),
(38, 'Rina Utami', 'rinautami@gmail.com', '0856789012', NULL, NULL, '$2y$10$fQy8/pwD8crPPQvo3MaBPemNy37jDITKv/LIG/dymfnTHF/hNemW2', NULL, NULL, '2023-05-24 18:31:42', '2023-05-24 18:31:42', NULL, 0, 0),
(39, 'Ahmad Surya', 'ahmadsurya@gmail.com', '0867890123', NULL, NULL, '$2y$10$fQy8/pwD8crPPQvo3MaBPemNy37jDITKv/LIG/dymfnTHF/hNemW2', NULL, NULL, '2023-05-24 18:31:42', '2023-05-24 18:31:42', NULL, 0, 0),
(40, 'Yuli Setiawan', 'yulisetiawan@gmail.com', '0878901234', NULL, NULL, '$2y$10$fQy8/pwD8crPPQvo3MaBPemNy37jDITKv/LIG/dymfnTHF/hNemW2', NULL, NULL, '2023-05-24 18:31:42', '2023-05-24 18:31:42', NULL, 0, 0),
(41, 'Rini Puspita', 'rinipuspita@gmail.com', '0889012345', NULL, NULL, '$2y$10$fQy8/pwD8crPPQvo3MaBPemNy37jDITKv/LIG/dymfnTHF/hNemW2', NULL, NULL, '2023-05-24 18:31:42', '2023-05-24 18:31:42', NULL, 0, 0),
(42, 'Eko Wijaya', 'ekowijaya@gmail.com', '0890123456', NULL, NULL, '$2y$10$fQy8/pwD8crPPQvo3MaBPemNy37jDITKv/LIG/dymfnTHF/hNemW2', NULL, NULL, '2023-05-24 18:31:42', '2023-05-24 18:31:42', NULL, 0, 0),
(43, 'Rita Kusuma', 'ritakusuma@gmail.com', '0901234567', NULL, NULL, '$2y$10$fQy8/pwD8crPPQvo3MaBPemNy37jDITKv/LIG/dymfnTHF/hNemW2', NULL, NULL, '2023-05-24 18:31:42', '2023-05-24 18:31:42', NULL, 0, 0),
(44, 'asdsada', 'adminn@gmail.com', '1212121', NULL, NULL, '$2y$10$fQy8/pwD8crPPQvo3MaBPemNy37jDITKv/LIG/dymfnTHF/hNemW2', NULL, NULL, '2023-05-24 20:55:39', '2023-05-24 20:55:39', NULL, 0, 0);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
