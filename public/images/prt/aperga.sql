-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 25 Bulan Mei 2023 pada 11.51
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
(10, '2023_05_24_184335_add_user_id_to_prts', 6);

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
(16, 34, 'Eva Nurhayati', 5100000, 29, 4, 'Jakarta', 9, 'Tidak berpenyakit', 860000, '0898901234', 'sudah', '2023-05-24 18:04:07', '2023-05-24 18:04:07', NULL),
(17, 34, 'Fahmi Hakim', 4500000, 35, 3, 'Bandung', 11, 'Memiliki riwayat alergi makanan', 870000, '0899012345', NULL, '2023-05-24 18:04:07', '2023-05-24 18:04:07', NULL),
(18, 34, 'Gita Permata', 4900000, 30, 4, 'Yogyakarta', 8, 'Tidak memiliki kondisi kesehatan khusus', 880000, '0812345678', NULL, '2023-05-24 18:04:07', '2023-05-24 18:04:07', NULL),
(19, 34, 'Hendra Setiawan', 5300000, 31, 5, 'Surabaya', 10, 'Berkebutuhan khusus penglihatan', 890000, '0823456789', NULL, '2023-05-24 18:04:07', '2023-05-24 18:04:07', NULL),
(20, 34, 'Indah Sari', 4700000, 26, 3, 'Jakarta', 12, 'Tidak memiliki riwayat penyakit', 900000, '0834567890', NULL, '2023-05-24 18:04:07', '2023-05-24 18:04:07', NULL),
(21, 34, 'Joko Prabowo', 5100000, 32, 4, 'Bandung', 9, 'Sehat tanpa riwayat penyakit', 910000, '0845678901', NULL, '2023-05-24 18:04:07', '2023-05-24 18:04:07', NULL),
(22, 34, 'Kartika Dewi', 4500000, 27, 3, 'Yogyakarta', 11, 'Berkebutuhan khusus pendengaran', 920000, '0890123456', NULL, '2023-05-24 18:04:07', '2023-05-24 18:04:07', NULL),
(23, 34, 'Lia Utami', 4900000, 33, 4, 'Surabaya', 8, 'Memiliki alergi debu', 930000, '0891234567', NULL, '2023-05-24 18:04:07', '2023-05-24 18:04:07', NULL),
(24, 34, 'Maulana Yusuf', 5300000, 28, 5, 'Jakarta', 10, 'Tidak berpenyakit', 940000, '0892345678', NULL, '2023-05-24 18:04:07', '2023-05-24 18:04:07', NULL),
(25, 34, 'Nadia Permata', 4700000, 34, 3, 'Bandung', 7, 'Membutuhkan perhatian ekstra', 950000, '0893456789', NULL, '2023-05-24 18:04:07', '2023-05-24 18:04:07', NULL),
(26, 35, 'Oscar Prasetyo', 5100000, 29, 4, 'Yogyakarta', 9, 'Tidak memiliki penyakit', 960000, '0894567890', NULL, '2023-05-24 18:04:07', '2023-05-24 18:04:07', NULL),
(27, 35, 'Putri Rahayu', 4500000, 35, 3, 'Surabaya', 11, 'Sehat tanpa riwayat penyakit', 970000, '0895678901', NULL, '2023-05-24 18:04:07', '2023-05-24 18:04:07', NULL),
(28, 35, 'Qori Abdullah', 4900000, 30, 4, 'Jakarta', 8, 'Memiliki riwayat alergi makanan', 980000, '0896789012', NULL, '2023-05-24 18:04:07', '2023-05-24 18:04:07', NULL),
(29, 35, 'Rini Utami', 5300000, 31, 5, 'Bandung', 10, 'Tidak memiliki kondisi kesehatan khusus', 990000, '0897890123', NULL, '2023-05-24 18:04:07', '2023-05-24 18:04:07', NULL),
(30, 35, 'Santoso Susanto', 4700000, 26, 3, 'Yogyakarta', 12, 'Berkebutuhan khusus penglihatan', 1000000, '0898901234', NULL, '2023-05-24 18:04:07', '2023-05-24 18:04:07', NULL),
(31, 35, 'Agus Setiawan', 5000000, 25, 4, 'Jakarta', 8, 'Sehat tanpa riwayat penyakit', 100000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(32, 35, 'Budi Santoso', 4500000, 30, 3, 'Surabaya', 12, 'Membutuhkan perhatian ekstra', 120000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(33, 35, 'Citra Mulyani', 5500000, 28, 5, 'Bandung', 6, 'Tanpa kondisi kesehatan khusus', 80000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(34, 35, 'Dewi Indah', 4800000, 32, 4, 'Yogyakarta', 10, 'Beberapa alergi makanan', 150000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(35, 35, 'Eko Pratama', 5200000, 27, 3, 'Medan', 8, 'Tidak memiliki riwayat penyakit', 90000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(36, 35, 'Fajar Wijaya', 4600000, 31, 4, 'Surabaya', 9, 'Kondisi kesehatan baik', 110000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(37, 35, 'Gita Susanti', 4900000, 29, 3, 'Jakarta', 7, 'Memiliki riwayat asma', 100000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(38, 35, 'Hendra Gunawan', 5100000, 26, 5, 'Bandung', 8, 'Sehat dan berenergi tinggi', 95000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(39, 35, 'Indra Perdana', 4700000, 33, 4, 'Yogyakarta', 11, 'Mengalami alergi debu', 130000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(40, 35, 'Joko Wibowo', 5300000, 27, 3, 'Medan', 9, 'Membutuhkan aksesibilitas', 90000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(41, 35, 'Kartika Sari', 4800000, 30, 4, 'Surabaya', 10, 'Sehat dan bugar', 100000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(42, 35, 'Laras Ayu', 4600000, 28, 3, 'Jakarta', 8, 'Berkebutuhan khusus penglihatan', 120000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(43, 35, 'Maman Hidayat', 5200000, 31, 4, 'Bandung', 9, 'Tidak memiliki riwayat penyakit', 90000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(44, 35, 'Nadia Putri', 5000000, 29, 5, 'Yogyakarta', 7, 'Tidak berpenyakit', 100000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(45, 35, 'Oscar Aditya', 4800000, 26, 3, 'Medan', 8, 'Sehat tanpa masalah kesehatan', 95000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(46, 39, 'Putri Kusuma', 5100000, 33, 4, 'Surabaya', 10, 'Membutuhkan perawatan khusus', 130000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(47, 39, 'Rudi Hartono', 4700000, 27, 3, 'Jakarta', 9, 'Berkebutuhan khusus pendengaran', 100000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(48, 39, 'Siti Rahayu', 5300000, 30, 4, 'Bandung', 11, 'Tidak memiliki masalah kesehatan', 90000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(49, 39, 'Tono Suharto', 4800000, 28, 3, 'Yogyakarta', 8, 'Berkebutuhan khusus mobilitas', 95000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(50, 39, 'Udin Prasetyo', 5200000, 31, 4, 'Medan', 9, 'Tidak berpenyakit', 90000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(51, 39, 'Vita Agustina', 5000000, 29, 5, 'Surabaya', 7, 'Sehat dan bugar', 100000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(52, 39, 'Wawan Nugroho', 4600000, 26, 3, 'Jakarta', 8, 'Memiliki riwayat alergi', 120000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(53, 39, 'Yulia Sari', 5100000, 33, 4, 'Bandung', 9, 'Berkebutuhan khusus penglihatan', 90000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(54, 39, 'Zaki Rahman', 4900000, 27, 3, 'Yogyakarta', 10, 'Tidak berpenyakit', 130000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(55, 39, 'Adi Nugroho', 5300000, 30, 4, 'Medan', 7, 'Sehat tanpa riwayat penyakit', 95000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(56, 39, 'Bella Putri', 4800000, 28, 3, 'Surabaya', 8, 'Berkebutuhan khusus pendengaran', 100000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(57, 39, 'Cindy Kusuma', 5200000, 31, 4, 'Jakarta', 9, 'Tidak berpenyakit', 90000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(58, 39, 'Denny Pratama', 5000000, 29, 5, 'Bandung', 10, 'Sehat dan bugar', 100000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(59, 39, 'Eka Putri', 4700000, 26, 3, 'Yogyakarta', 8, 'Berkebutuhan khusus mobilitas', 120000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(60, 39, 'Fandi Susanto', 5100000, 33, 4, 'Medan', 9, 'Tidak memiliki masalah kesehatan', 95000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(61, 39, 'Gita Ramadhani', 4900000, 27, 3, 'Surabaya', 7, 'Tidak berpenyakit', 100000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(62, 39, 'Hendro Wibowo', 5300000, 30, 4, 'Jakarta', 8, 'Sehat dan bugar', 90000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(63, 39, 'Intan Permata', 4800000, 28, 3, 'Bandung', 9, 'Berkebutuhan khusus penglihatan', 95000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(64, 39, 'Joko Prasetyo', 5200000, 31, 4, 'Yogyakarta', 10, 'Tidak berpenyakit', 90000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(65, 39, 'Kiki Rahman', 5000000, 29, 5, 'Medan', 8, 'Memiliki riwayat alergi', 100000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(66, 39, 'Lina Sari', 4600000, 26, 3, 'Surabaya', 9, 'Sehat tanpa riwayat penyakit', 120000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(67, 39, 'Mila Putri', 5300000, 30, 4, 'Jakarta', 7, 'Berkebutuhan khusus pendengaran', 95000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(68, 39, 'Nana Kusuma', 4800000, 28, 3, 'Bandung', 8, 'Tidak berpenyakit', 90000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(69, 39, 'Oscar Prasetyo', 5200000, 31, 4, 'Yogyakarta', 9, 'Sehat dan bugar', 95000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(70, 39, 'Putri Rahayu', 5000000, 29, 5, 'Medan', 10, 'Tidak memiliki riwayat penyakit', 100000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(71, 0, 'Rudi Nugroho', 4700000, 26, 3, 'Surabaya', 8, 'Berkebutuhan khusus mobilitas', 120000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(72, 0, 'Sinta Agustina', 5100000, 33, 4, 'Jakarta', 9, 'Membutuhkan perawatan khusus', 90000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(73, 0, 'Tono Suharyanto', 4800000, 28, 3, 'Bandung', 10, 'Tidak berpenyakit', 95000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(74, 0, 'Udin Pratama', 5300000, 30, 4, 'Yogyakarta', 7, 'Sehat dan bugar', 90000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(75, 0, 'Vita Susanti', 5000000, 29, 5, 'Medan', 8, 'Berkebutuhan khusus penglihatan', 100000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(76, 0, 'Wawan Kusuma', 4600000, 26, 3, 'Surabaya', 9, 'Tidak berpenyakit', 120000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(77, 0, 'Yanti Pratiwi', 5100000, 33, 4, 'Jakarta', 10, 'Sehat tanpa riwayat penyakit', 90000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(78, 0, 'Zara Rahayu', 4900000, 27, 3, 'Bandung', 8, 'Memiliki riwayat alergi', 95000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(79, 0, 'Abdi Nugroho', 5300000, 30, 4, 'Yogyakarta', 9, 'Tidak berpenyakit', 90000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(80, 0, 'Bunga Kusuma', 5000000, 29, 5, 'Medan', 7, 'Sehat dan bugar', 100000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(81, 0, 'Citra Susanto', 4800000, 26, 3, 'Surabaya', 8, 'Berkebutuhan khusus pendengaran', 95000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(82, 0, 'Dharma Wijaya', 5200000, 31, 4, 'Jakarta', 9, 'Tidak berpenyakit', 90000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(83, 0, 'Eva Pratiwi', 5000000, 29, 5, 'Bandung', 10, 'Sehat dan bugar', 100000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(84, 0, 'Fandy Wibowo', 4700000, 26, 3, 'Yogyakarta', 8, 'Berkebutuhan khusus penglihatan', 120000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(85, 0, 'Gita Rahayu', 5100000, 33, 4, 'Medan', 9, 'Tidak berpenyakit', 90000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(86, 0, 'Hendra Nugroho', 5300000, 30, 4, 'Surabaya', 10, 'Sehat tanpa masalah kesehatan', 95000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(87, 0, 'Indah Putri', 4800000, 28, 3, 'Jakarta', 9, 'Membutuhkan perawatan khusus', 90000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(88, 0, 'Joni Suharyanto', 5200000, 31, 4, 'Bandung', 10, 'Tidak berpenyakit', 100000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(89, 0, 'Kiki Rahayu', 5000000, 29, 5, 'Yogyakarta', 7, 'Sehat dan bugar', 90000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(90, 0, 'Lina Susanti', 4600000, 26, 3, 'Medan', 8, 'Berkebutuhan khusus pendengaran', 95000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(91, 0, 'Mila Wijaya', 5100000, 33, 4, 'Surabaya', 9, 'Tidak berpenyakit', 90000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(92, 0, 'Nadia Rahayu', 5300000, 30, 4, 'Jakarta', 10, 'Sehat dan bugar', 95000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(93, 0, 'Oscar Prasetya', 4800000, 28, 3, 'Bandung', 9, 'Memiliki riwayat alergi', 90000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(94, 0, 'Putri Nugroho', 5200000, 31, 4, 'Yogyakarta', 10, 'Tidak berpenyakit', 100000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(95, 0, 'Rudi Suharto', 5000000, 29, 5, 'Medan', 8, 'Sehat tanpa riwayat penyakit', 90000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(96, 0, 'Sinta Wijaya', 4700000, 26, 3, 'Surabaya', 9, 'Berkebutuhan khusus mobilitas', 95000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(97, 0, 'Tono Rahayu', 5300000, 30, 4, 'Jakarta', 10, 'Tidak berpenyakit', 90000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(98, 0, 'Udin Prasetya', 4800000, 28, 3, 'Bandung', 9, 'Sehat dan bugar', 90000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(99, 0, 'Vita Susanti', 5200000, 31, 4, 'Yogyakarta', 10, 'Tidak memiliki riwayat penyakit', 100000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(100, 0, 'Wawan Nugroho', 5000000, 29, 5, 'Medan', 7, 'Berkebutuhan khusus pendengaran', 90000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(101, 0, 'Yanti Prasetyo', 4700000, 26, 3, 'Surabaya', 8, 'Tidak berpenyakit', 95000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(102, 0, 'Zara Wijaya', 5300000, 30, 4, 'Jakarta', 9, 'Sehat dan bugar', 90000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(103, 0, 'Abdi Rahayu', 5000000, 29, 5, 'Bandung', 10, 'Memiliki riwayat alergi', 100000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(104, 0, 'Bella Nugroho', 4800000, 28, 3, 'Yogyakarta', 9, 'Tidak berpenyakit', 90000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(105, 0, 'Citra Susanti', 5200000, 31, 4, 'Medan', 10, 'Sehat dan bugar', 95000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(106, 0, 'Dharma Prasetya', 5000000, 29, 5, 'Surabaya', 8, 'Tidak memiliki masalah kesehatan', 90000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(107, 0, 'Eva Wijaya', 4700000, 26, 3, 'Jakarta', 9, 'Berkebutuhan khusus mobilitas', 95000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(108, 0, 'Fandy Rahayu', 5300000, 30, 4, 'Bandung', 10, 'Tidak berpenyakit', 90000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(109, 0, 'Gita Prasetyo', 4900000, 27, 3, 'Yogyakarta', 8, 'Sehat tanpa masalah kesehatan', 95000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(110, 0, 'Hendra Nugroho', 5100000, 33, 4, 'Medan', 9, 'Berkebutuhan khusus penglihatan', 90000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(111, 0, 'Indah Susanti', 5300000, 30, 4, 'Surabaya', 10, 'Tidak berpenyakit', 100000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(112, 0, 'Joni Prasetyo', 4800000, 28, 3, 'Jakarta', 9, 'Sehat dan bugar', 95000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(113, 0, 'Kiki Nugroho', 5200000, 31, 4, 'Bandung', 10, 'Tidak berpenyakit', 90000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(114, 0, 'Lina Rahayu', 5000000, 29, 5, 'Yogyakarta', 7, 'Memiliki riwayat alergi', 100000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(115, 0, 'Mila Prasetyo', 4800000, 28, 3, 'Medan', 8, 'Tidak berpenyakit', 95000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(116, 0, 'Nadia Nugroho', 5100000, 33, 4, 'Surabaya', 9, 'Sehat dan bugar', 90000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(117, 0, 'Oscar Susanto', 4700000, 26, 3, 'Jakarta', 10, 'Berkebutuhan khusus penglihatan', 95000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(118, 0, 'Putri Wijaya', 5300000, 30, 4, 'Bandung', 9, 'Tidak berpenyakit', 90000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(119, 0, 'Rudi Rahayu', 5000000, 29, 5, 'Yogyakarta', 10, 'Sehat dan bugar', 100000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(120, 0, 'Sinta Prasetyo', 4800000, 28, 3, 'Medan', 9, 'Tidak memiliki riwayat penyakit', 95000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(121, 0, 'Tono Nugroho', 5200000, 31, 4, 'Surabaya', 10, 'Sehat tanpa masalah kesehatan', 90000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(122, 0, 'Udin Susanti', 5000000, 29, 5, 'Jakarta', 8, 'Berkebutuhan khusus mobilitas', 95000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(123, 0, 'Vita Prasetyo', 4700000, 26, 3, 'Bandung', 9, 'Tidak berpenyakit', 90000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(124, 0, 'Wawan Nugroho', 5300000, 30, 4, 'Yogyakarta', 10, 'Sehat dan bugar', 100000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(125, 0, 'Yanti Rahayu', 5100000, 33, 4, 'Medan', 9, 'Berkebutuhan khusus pendengaran', 95000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(126, 0, 'Zara Prasetyo', 4900000, 27, 3, 'Surabaya', 10, 'Tidak berpenyakit', 90000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(127, 0, 'Abdi Susanti', 5300000, 30, 4, 'Jakarta', 9, 'Sehat dan bugar', 90000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(128, 0, 'Bella Prasetyo', 5100000, 33, 4, 'Bandung', 10, 'Tidak memiliki masalah kesehatan', 100000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(129, 0, 'Citra Nugroho', 4900000, 27, 3, 'Yogyakarta', 8, 'Berkebutuhan khusus penglihatan', 95000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(130, 0, 'Dharma Susanto', 5300000, 30, 4, 'Medan', 9, 'Tidak berpenyakit', 90000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(131, 0, 'Eva Prasetyo', 5100000, 33, 4, 'Surabaya', 10, 'Sehat dan bugar', 95000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(132, 0, 'Fandy Nugroho', 4700000, 26, 3, 'Jakarta', 9, 'Berkebutuhan khusus pendengaran', 90000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(133, 0, 'Gita Susanto', 5300000, 30, 4, 'Bandung', 10, 'Tidak berpenyakit', 90000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(134, 0, 'Hendra Prasetyo', 5100000, 33, 4, 'Yogyakarta', 7, 'Sehat dan bugar', 100000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(135, 0, 'Indah Nugroho', 4700000, 26, 3, 'Medan', 8, 'Berkebutuhan khusus mobilitas', 95000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(136, 0, 'Joni Susanto', 5300000, 30, 4, 'Surabaya', 9, 'Tidak berpenyakit', 90000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(137, 0, 'Kiki Prasetyo', 5100000, 33, 4, 'Jakarta', 10, 'Sehat dan bugar', 95000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(138, 0, 'Lina Nugroho', 4700000, 26, 3, 'Bandung', 9, 'Tidak berpenyakit', 90000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(139, 0, 'Mila Susanto', 5300000, 30, 4, 'Yogyakarta', 10, 'Memiliki riwayat alergi', 100000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(140, 0, 'Nadia Prasetyo', 4900000, 27, 3, 'Medan', 8, 'Tidak berpenyakit', 95000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(141, 0, 'Oscar Nugroho', 5300000, 30, 4, 'Surabaya', 9, 'Sehat dan bugar', 90000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(142, 0, 'Putri Susanto', 4700000, 26, 3, 'Jakarta', 10, 'Tidak berpenyakit', 95000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(143, 0, 'Rudi Prasetyo', 5300000, 30, 4, 'Bandung', 9, 'Sehat tanpa riwayat penyakit', 90000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(144, 0, 'Sinta Nugroho', 5100000, 33, 4, 'Yogyakarta', 10, 'Berkebutuhan khusus mobilitas', 100000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(145, 0, 'Tono Susanto', 4700000, 26, 3, 'Medan', 9, 'Tidak berpenyakit', 90000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(146, 0, 'Udin Prasetyo', 5300000, 30, 4, 'Surabaya', 10, 'Sehat dan bugar', 95000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(147, 0, 'Vita Nugroho', 4900000, 27, 3, 'Jakarta', 8, 'Memiliki riwayat alergi', 90000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(148, 0, 'Wawan Susanto', 5300000, 30, 4, 'Bandung', 9, 'Tidak berpenyakit', 90000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(149, 0, 'Yanti Prasetyo', 5100000, 33, 4, 'Yogyakarta', 10, 'Sehat dan bugar', 100000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(150, 0, 'Zara Nugroho', 4900000, 27, 3, 'Medan', 9, 'Berkebutuhan khusus pendengaran', 95000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(151, 0, 'Abdi Prasetyo', 5300000, 30, 4, 'Surabaya', 10, 'Tidak berpenyakit', 90000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(152, 0, 'Bella Susanto', 4700000, 26, 3, 'Jakarta', 9, 'Sehat dan bugar', 95000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(153, 0, 'Citra Nugroho', 5300000, 30, 4, 'Bandung', 10, 'Tidak berpenyakit', 90000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(154, 0, 'Dharma Prasetyo', 5100000, 33, 4, 'Yogyakarta', 8, 'Memiliki riwayat alergi', 100000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(155, 0, 'Eva Nugroho', 4900000, 27, 3, 'Medan', 9, 'Tidak berpenyakit', 95000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(156, 0, 'Fandy Susanto', 5300000, 30, 4, 'Surabaya', 10, 'Sehat dan bugar', 90000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(157, 0, 'Gita Prasetyo', 4700000, 26, 3, 'Jakarta', 9, 'Berkebutuhan khusus penglihatan', 95000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(158, 0, 'Hendra Nugroho', 5300000, 30, 4, 'Bandung', 10, 'Tidak berpenyakit', 90000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(159, 0, 'Indah Susanto', 5100000, 33, 4, 'Yogyakarta', 7, 'Sehat dan bugar', 100000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(160, 0, 'Joni Nugroho', 4700000, 26, 3, 'Medan', 8, 'Berkebutuhan khusus mobilitas', 95000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(161, 0, 'Kiki Prasetyo', 5300000, 30, 4, 'Surabaya', 9, 'Tidak berpenyakit', 90000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(162, 0, 'Lina Susanto', 4900000, 27, 3, 'Jakarta', 10, 'Sehat dan bugar', 95000, '0823456789', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(163, 0, 'Mila Nugroho', 5300000, 30, 4, 'Bandung', 9, 'Tidak berpenyakit', 90000, '0834567890', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(164, 0, 'Nadia Prasetyo', 5100000, 33, 4, 'Yogyakarta', 10, 'Berkebutuhan khusus pendengaran', 100000, '0845678901', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(165, 0, 'Oscar Nugroho', 4700000, 26, 3, 'Medan', 9, 'Tidak berpenyakit', 90000, '0890123456', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(166, 0, 'Putri Prasetyo', 5300000, 30, 4, 'Surabaya', 10, 'Sehat dan bugar', 95000, '0812345678', NULL, '2023-05-24 18:17:42', '2023-05-24 18:17:42', NULL),
(167, 0, 'Agus Setiawan', 5000000, 25, 4, 'Jakarta', 8, 'Sehat tanpa riwayat penyakit', 100000, '0812345678', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', NULL),
(168, 0, 'Budi Santoso', 4500000, 30, 3, 'Surabaya', 12, 'Membutuhkan perhatian ekstra', 120000, '0823456789', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', NULL),
(169, 0, 'Citra Mulyani', 5500000, 28, 5, 'Bandung', 6, 'Tanpa kondisi kesehatan khusus', 80000, '0834567890', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', NULL),
(170, 0, 'Dewi Indah', 4800000, 32, 4, 'Yogyakarta', 10, 'Beberapa alergi makanan', 150000, '0845678901', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', NULL),
(171, 0, 'Eko Pratama', 5200000, 27, 3, 'Medan', 8, 'Tidak memiliki riwayat penyakit', 90000, '0890123456', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', NULL),
(172, 0, 'Fanny Sari', 4700000, 31, 4, 'Surabaya', 7, 'Memiliki alergi debu', 95000, '0891234567', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', NULL),
(173, 0, 'Gita Purnama', 5100000, 26, 5, 'Jakarta', 9, 'Tidak berpenyakit', 100000, '0892345678', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', NULL),
(174, 0, 'Hadi Susanto', 4600000, 29, 3, 'Bandung', 11, 'Membutuhkan perawatan medis rutin', 110000, '0893456789', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', NULL),
(175, 0, 'Ika Nurhayati', 4900000, 33, 4, 'Yogyakarta', 8, 'Berkebutuhan khusus penglihatan', 120000, '0894567890', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', NULL),
(176, 0, 'Joko Wibowo', 5300000, 28, 5, 'Surabaya', 10, 'Sehat tanpa riwayat penyakit', 130000, '0895678901', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', NULL),
(177, 0, 'Kartika Sari', 4800000, 34, 3, 'Jakarta', 7, 'Tidak memiliki kondisi kesehatan khusus', 140000, '0896789012', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', NULL),
(178, 0, 'Lukman Hakim', 5200000, 29, 4, 'Bandung', 9, 'Memiliki riwayat penyakit', 90000, '0897890123', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', NULL),
(179, 0, 'Mita Wijaya', 4700000, 26, 5, 'Jakarta', 8, 'Sehat tanpa riwayat penyakit', 100000, '0898901234', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', NULL),
(180, 0, 'Nina Puspita', 5100000, 31, 4, 'Surabaya', 10, 'Tidak memiliki kondisi kesehatan khusus', 110000, '0899012345', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', NULL),
(181, 0, 'Oscar Gunawan', 4900000, 27, 3, 'Bandung', 9, 'Memiliki riwayat penyakit', 120000, '0890123456', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', NULL),
(182, 0, 'Putri Anggraini', 5300000, 32, 5, 'Yogyakarta', 8, 'Sehat tanpa riwayat penyakit', 130000, '0891234567', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', NULL),
(183, 0, 'Rudi Santoso', 4700000, 28, 4, 'Medan', 7, 'Berkebutuhan khusus penglihatan', 90000, '0892345678', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', NULL),
(184, 0, 'Sari Mulia', 5200000, 33, 3, 'Surabaya', 9, 'Membutuhkan perawatan medis rutin', 110000, '0893456789', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', NULL),
(185, 0, 'Taufik Hidayat', 4800000, 29, 4, 'Jakarta', 11, 'Sehat tanpa riwayat penyakit', 120000, '0894567890', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', NULL),
(186, 0, 'Uci Indah', 5100000, 34, 5, 'Bandung', 8, 'Tidak berpenyakit', 130000, '0895678901', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', NULL),
(187, 0, 'Vina Puspitasari', 4600000, 30, 3, 'Yogyakarta', 10, 'Memiliki riwayat penyakit', 140000, '0896789012', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', NULL),
(188, 0, 'Wahyu Santoso', 5000000, 35, 4, 'Surabaya', 7, 'Sehat tanpa riwayat penyakit', 100000, '0897890123', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', NULL),
(189, 0, 'Xavier Wijaya', 4800000, 31, 5, 'Medan', 9, 'Berkebutuhan khusus penglihatan', 110000, '0898901234', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', NULL),
(190, 0, 'Yunita Mulia', 5300000, 26, 4, 'Jakarta', 8, 'Tidak memiliki kondisi kesehatan khusus', 120000, '0899012345', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', NULL),
(191, 0, 'Zaki Susanto', 4700000, 32, 3, 'Bandung', 10, 'Memiliki riwayat penyakit', 130000, '0890123456', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', NULL),
(192, 0, 'Ani Wijaya', 5100000, 27, 4, 'Yogyakarta', 9, 'Sehat tanpa riwayat penyakit', 140000, '0891234567', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', NULL),
(193, 0, 'Bambang Santoso', 4900000, 33, 5, 'Surabaya', 8, 'Tidak berpenyakit', 100000, '0892345678', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', NULL),
(194, 0, 'Cindy Mulia', 5300000, 28, 3, 'Jakarta', 11, 'Berkebutuhan khusus penglihatan', 110000, '0893456789', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', NULL),
(195, 0, 'Dodi Purnama', 4800000, 34, 4, 'Bandung', 9, 'Memiliki riwayat penyakit', 120000, '0894567890', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', NULL),
(196, 0, 'Eva Sari', 5200000, 29, 5, 'Yogyakarta', 10, 'Sehat tanpa riwayat penyakit', 130000, '0895678901', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', NULL),
(197, 0, 'Faisal Hakim', 4700000, 35, 3, 'Medan', 7, 'Tidak memiliki kondisi kesehatan khusus', 140000, '0896789012', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', NULL),
(198, 0, 'Gita Nurhayati', 5000000, 30, 4, 'Surabaya', 8, 'Membutuhkan perawatan medis rutin', 100000, '0897890123', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', NULL),
(199, 0, 'Hendra Wibowo', 4600000, 26, 5, 'Jakarta', 9, 'Berkebutuhan khusus penglihatan', 110000, '0898901234', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', NULL),
(200, 0, 'Indah Puspita', 5100000, 31, 3, 'Bandung', 10, 'Memiliki riwayat penyakit', 120000, '0899012345', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', NULL),
(201, 0, 'Joko Santoso', 4900000, 27, 4, 'Yogyakarta', 8, 'Sehat tanpa riwayat penyakit', 130000, '0890123456', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', NULL),
(202, 0, 'Kartika Mulia', 5300000, 32, 5, 'Surabaya', 9, 'Tidak berpenyakit', 140000, '0891234567', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', NULL),
(203, 0, 'Lia Wijaya', 4700000, 28, 3, 'Medan', 11, 'Berkebutuhan khusus penglihatan', 90000, '0892345678', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', NULL),
(204, 0, 'Miftah Hakim', 5100000, 33, 4, 'Jakarta', 10, 'Sehat tanpa riwayat penyakit', 100000, '0893456789', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', NULL),
(205, 0, 'Nadia Sari', 4700000, 29, 5, 'Bandung', 8, 'Tidak memiliki kondisi kesehatan khusus', 110000, '0894567890', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', NULL),
(206, 0, 'Oscar Nurhayati', 5200000, 34, 3, 'Yogyakarta', 7, 'Memiliki riwayat penyakit', 120000, '0895678901', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', NULL),
(207, 0, 'Putri Wibowo', 4800000, 30, 4, 'Surabaya', 9, 'Sehat tanpa riwayat penyakit', 130000, '0896789012', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', NULL),
(208, 0, 'Rudi Hakim', 5300000, 35, 5, 'Jakarta', 8, 'Berkebutuhan khusus penglihatan', 140000, '0897890123', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', NULL),
(209, 0, 'Sari Santoso', 4700000, 31, 3, 'Bandung', 10, 'Memiliki riwayat penyakit', 100000, '0898901234', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', NULL),
(210, 0, 'Taufik Mulia', 5100000, 26, 4, 'Yogyakarta', 11, 'Sehat tanpa riwayat penyakit', 110000, '0899012345', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', NULL),
(211, 0, 'Uci Hakim', 4800000, 32, 5, 'Surabaya', 9, 'Tidak berpenyakit', 120000, '0890123456', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', NULL),
(212, 0, 'Vina Nurhayati', 5300000, 27, 3, 'Medan', 8, 'Berkebutuhan khusus penglihatan', 130000, '0891234567', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', NULL),
(213, 0, 'Wahyu Wibowo', 4700000, 33, 4, 'Jakarta', 10, 'Sehat tanpa riwayat penyakit', 140000, '0892345678', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', NULL),
(214, 0, 'Xavier Mulia', 5200000, 28, 5, 'Bandung', 9, 'Tidak memiliki kondisi kesehatan khusus', 100000, '0893456789', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', NULL),
(215, 0, 'Yunita Hakim', 4800000, 34, 3, 'Yogyakarta', 7, 'Memiliki riwayat penyakit', 110000, '0894567890', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', NULL),
(216, 0, 'Zaki Wijaya', 5300000, 29, 4, 'Surabaya', 8, 'Sehat tanpa riwayat penyakit', 120000, '0895678901', NULL, '2023-05-25 01:33:15', '2023-05-25 01:33:15', NULL),
(217, 0, 'Agus Setiawan', 5000000, 25, 4, 'Jakarta', 8, 'Sehat tanpa riwayat penyakit', 100000, '0812345678', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', NULL),
(218, 0, 'Budi Santoso', 4500000, 30, 3, 'Surabaya', 12, 'Membutuhkan perhatian ekstra', 120000, '0823456789', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', NULL),
(219, 0, 'Citra Mulyani', 5500000, 28, 5, 'Bandung', 6, 'Tanpa kondisi kesehatan khusus', 80000, '0834567890', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', NULL),
(220, 0, 'Dewi Indah', 4800000, 32, 4, 'Yogyakarta', 10, 'Beberapa alergi makanan', 150000, '0845678901', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', NULL),
(221, 0, 'Eko Pratama', 5200000, 27, 3, 'Medan', 8, 'Tidak memiliki riwayat penyakit', 90000, '0890123456', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', NULL),
(222, 0, 'Fanny Sari', 4700000, 31, 4, 'Surabaya', 7, 'Memiliki alergi debu', 95000, '0891234567', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', NULL),
(223, 0, 'Gita Purnama', 5100000, 26, 5, 'Jakarta', 9, 'Tidak berpenyakit', 100000, '0892345678', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', NULL),
(224, 0, 'Hadi Susanto', 4600000, 29, 3, 'Bandung', 11, 'Membutuhkan perawatan medis rutin', 110000, '0893456789', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', NULL),
(225, 0, 'Ika Nurhayati', 4900000, 33, 4, 'Yogyakarta', 8, 'Berkebutuhan khusus penglihatan', 120000, '0894567890', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', NULL),
(226, 0, 'Joko Wibowo', 5300000, 28, 5, 'Surabaya', 10, 'Sehat tanpa riwayat penyakit', 130000, '0895678901', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', NULL),
(227, 0, 'Kartika Sari', 4800000, 34, 3, 'Jakarta', 7, 'Tidak memiliki kondisi kesehatan khusus', 140000, '0896789012', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', NULL),
(228, 0, 'Lukman Hakim', 5200000, 29, 4, 'Bandung', 9, 'Memiliki riwayat penyakit asma', 90000, '0897890123', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', NULL),
(229, 0, 'Mila Rachmawati', 5100000, 27, 4, 'Surabaya', 8, 'Sehat tanpa riwayat penyakit', 100000, '0898901234', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', NULL),
(230, 0, 'Nugroho Prasetyo', 4600000, 32, 3, 'Jakarta', 12, 'Memiliki alergi terhadap kacang', 110000, '0899012345', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', NULL),
(231, 0, 'Oscar Wijaya', 5000000, 29, 5, 'Bandung', 6, 'Sehat tanpa riwayat penyakit', 120000, '0810987654', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', NULL),
(232, 0, 'Putri Hapsari', 4800000, 35, 4, 'Yogyakarta', 10, 'Tidak memiliki kondisi kesehatan khusus', 130000, '0821098765', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', NULL),
(233, 0, 'Qori Ramadhan', 5100000, 28, 3, 'Surabaya', 7, 'Memiliki riwayat penyakit diabetes', 140000, '0832109876', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', NULL),
(234, 0, 'Rina Susanti', 4700000, 30, 4, 'Jakarta', 9, 'Sehat tanpa riwayat penyakit', 150000, '0843210987', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', NULL),
(235, 0, 'Siti Rahmawati', 5300000, 26, 5, 'Bandung', 11, 'Tidak berpenyakit', 90000, '0854321098', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', NULL),
(236, 0, 'Taufik Hidayat', 5000000, 31, 4, 'Yogyakarta', 8, 'Membutuhkan perawatan medis rutin', 100000, '0865432109', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', NULL),
(237, 0, 'Umi Kusumawati', 5200000, 27, 3, 'Surabaya', 10, 'Sehat tanpa riwayat penyakit', 110000, '0876543210', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', NULL),
(238, 0, 'Vina Kartika', 4800000, 33, 4, 'Jakarta', 7, 'Tidak memiliki kondisi kesehatan khusus', 120000, '0887654321', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', NULL),
(239, 0, 'Wawan Sugianto', 5000000, 28, 5, 'Bandung', 9, 'Memiliki riwayat penyakit asma', 130000, '0898765432', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', NULL),
(240, 0, 'Xavier Gunawan', 5300000, 34, 3, 'Yogyakarta', 8, 'Sehat tanpa riwayat penyakit', 140000, '0810987654', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', NULL),
(241, 0, 'Yanti Pratiwi', 5100000, 29, 4, 'Surabaya', 12, 'Memiliki alergi terhadap debu', 150000, '0821098765', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', NULL),
(242, 0, 'Zainal Abidin', 4700000, 35, 3, 'Jakarta', 6, 'Berkebutuhan khusus pendengaran', 90000, '0832109876', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', NULL),
(243, 0, 'Anita Putri', 4800000, 26, 4, 'Bandung', 10, 'Tidak berpenyakit', 100000, '0843210987', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', NULL),
(244, 0, 'Bayu Santoso', 5200000, 30, 5, 'Yogyakarta', 7, 'Sehat tanpa riwayat penyakit', 110000, '0854321098', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', NULL),
(245, 0, 'Citra Puspita', 5000000, 27, 4, 'Surabaya', 9, 'Membutuhkan perawatan medis rutin', 120000, '0865432109', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', NULL),
(246, 0, 'Dewi Anggraini', 4900000, 33, 3, 'Jakarta', 11, 'Memiliki riwayat penyakit hipertensi', 130000, '0876543210', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', NULL),
(247, 0, 'Eka Susilawati', 5300000, 28, 4, 'Bandung', 8, 'Sehat tanpa riwayat penyakit', 140000, '0887654321', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', NULL),
(248, 0, 'Fajar Nugraha', 5100000, 34, 5, 'Yogyakarta', 10, 'Tidak memiliki kondisi kesehatan khusus', 150000, '0898765432', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', NULL),
(249, 0, 'Gita Permata', 5000000, 29, 4, 'Surabaya', 7, 'Memiliki riwayat penyakit asma', 90000, '0810987654', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', NULL),
(250, 0, 'Hadi Setiawan', 5200000, 35, 3, 'Jakarta', 9, 'Sehat tanpa riwayat penyakit', 100000, '0821098765', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', NULL),
(251, 0, 'Indah Sari', 4700000, 26, 4, 'Bandung', 8, 'Berkebutuhan khusus penglihatan', 110000, '0832109876', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', NULL),
(252, 0, 'Joko Widodo', 4800000, 30, 5, 'Yogyakarta', 10, 'Tidak berpenyakit', 120000, '0843210987', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', NULL),
(253, 0, 'Kartika Dewi', 5200000, 27, 3, 'Surabaya', 11, 'Membutuhkan perhatian ekstra', 130000, '0854321098', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', NULL),
(254, 0, 'Lukman Hakim', 5300000, 33, 4, 'Jakarta', 7, 'Sehat tanpa riwayat penyakit', 140000, '0865432109', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', NULL),
(255, 0, 'Mila Kusuma', 4800000, 28, 5, 'Bandung', 9, 'Tidak memiliki kondisi kesehatan khusus', 150000, '0876543210', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', NULL),
(256, 0, 'Nina Wulandari', 5000000, 34, 4, 'Yogyakarta', 8, 'Memiliki riwayat penyakit diabetes', 90000, '0887654321', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', NULL),
(257, 0, 'Oscar Pratama', 4700000, 29, 3, 'Surabaya', 10, 'Sehat tanpa riwayat penyakit', 100000, '0898765432', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', NULL),
(258, 0, 'Putri Lestari', 4900000, 35, 4, 'Jakarta', 7, 'Tidak berpenyakit', 110000, '0810987654', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', NULL),
(259, 0, 'Qori Rahman', 5200000, 26, 3, 'Bandung', 11, 'Memiliki riwayat penyakit asma', 120000, '0821098765', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', NULL),
(260, 0, 'Rina Rahmawati', 5300000, 30, 4, 'Yogyakarta', 9, 'Sehat tanpa riwayat penyakit', 130000, '0832109876', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', NULL),
(261, 0, 'Siti Widianti', 4800000, 27, 5, 'Surabaya', 8, 'Tidak memiliki kondisi kesehatan khusus', 140000, '0843210987', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', NULL),
(262, 0, 'Taufik Pratama', 5000000, 33, 4, 'Jakarta', 10, 'Membutuhkan perawatan medis rutin', 150000, '0854321098', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', NULL),
(263, 0, 'Umi Sari', 4700000, 28, 3, 'Bandung', 7, 'Berkebutuhan khusus pendengaran', 90000, '0865432109', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', NULL),
(264, 0, 'Vina Susanti', 4900000, 34, 4, 'Yogyakarta', 9, 'Sehat tanpa riwayat penyakit', 100000, '0876543210', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', NULL),
(265, 0, 'Wawan Prasetyo', 5300000, 29, 5, 'Surabaya', 11, 'Memiliki alergi terhadap debu', 110000, '0887654321', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', NULL),
(266, 0, 'Xavier Nugraha', 5100000, 35, 3, 'Jakarta', 8, 'Tidak berpenyakit', 120000, '0898765432', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', NULL),
(267, 0, 'Yanti Kartika', 4800000, 26, 4, 'Bandung', 10, 'Memiliki riwayat penyakit hipertensi', 130000, '0810987654', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', NULL),
(268, 0, 'Zainal Setiawan', 5000000, 30, 3, 'Yogyakarta', 9, 'Sehat tanpa riwayat penyakit', 140000, '0821098765', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', NULL),
(269, 0, 'Anita Puspita', 5200000, 27, 4, 'Surabaya', 7, 'Tidak memiliki kondisi kesehatan khusus', 150000, '0832109876', NULL, '2023-05-25 02:14:45', '2023-05-25 02:14:45', NULL);

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
  `token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `profile_image`, `email_verified_at`, `password`, `remember_token`, `reset_token`, `created_at`, `updated_at`, `token`) VALUES
(34, 'Budi Santoso', 'budisantoso@gmail.com', '0812345678', NULL, NULL, '$2y$10$qRA57Fahp1MqGZnF.XovNuZeJMmlV7Re8X1LcjgV00HXp5b4uDsKi', NULL, NULL, '2023-05-24 18:31:42', '2023-05-24 23:20:51', NULL),
(35, 'Dewi Indah', 'dewiindah@gmail.com', '0823456789', NULL, NULL, '$2y$10$4DJCpnM5K7mUOephV3COu.a9l.D3VEuL7LBF94qeEEvDJkZSbyYOi', NULL, NULL, '2023-05-24 18:31:42', '2023-05-24 18:31:42', NULL),
(36, 'Siti Rahayu', 'sitirahayu@gmail.com', '0834567890', NULL, NULL, '$2y$10$4DJCpnM5K7mUOephV3COu.a9l.D3VEuL7LBF94qeEEvDJkZSbyYOi', NULL, NULL, '2023-05-24 18:31:42', '2023-05-24 18:31:42', NULL),
(37, 'Agus Prabowo', 'agusprabowo@gmail.com', '0845678901', NULL, NULL, '$2y$10$4DJCpnM5K7mUOephV3COu.a9l.D3VEuL7LBF94qeEEvDJkZSbyYOi', NULL, NULL, '2023-05-24 18:31:42', '2023-05-24 18:31:42', NULL),
(38, 'Rina Utami', 'rinautami@gmail.com', '0856789012', NULL, NULL, '$2y$10$4DJCpnM5K7mUOephV3COu.a9l.D3VEuL7LBF94qeEEvDJkZSbyYOi', NULL, NULL, '2023-05-24 18:31:42', '2023-05-24 18:31:42', NULL),
(39, 'Ahmad Surya', 'ahmadsurya@gmail.com', '0867890123', NULL, NULL, '$2y$10$4DJCpnM5K7mUOephV3COu.a9l.D3VEuL7LBF94qeEEvDJkZSbyYOi', NULL, NULL, '2023-05-24 18:31:42', '2023-05-24 18:31:42', NULL),
(40, 'Yuli Setiawan', 'yulisetiawan@gmail.com', '0878901234', NULL, NULL, '$2y$10$4DJCpnM5K7mUOephV3COu.a9l.D3VEuL7LBF94qeEEvDJkZSbyYOi', NULL, NULL, '2023-05-24 18:31:42', '2023-05-24 18:31:42', NULL),
(41, 'Rini Puspita', 'rinipuspita@gmail.com', '0889012345', NULL, NULL, '$2y$10$4DJCpnM5K7mUOephV3COu.a9l.D3VEuL7LBF94qeEEvDJkZSbyYOi', NULL, NULL, '2023-05-24 18:31:42', '2023-05-24 18:31:42', NULL),
(42, 'Eko Wijaya', 'ekowijaya@gmail.com', '0890123456', NULL, NULL, '$2y$10$4DJCpnM5K7mUOephV3COu.a9l.D3VEuL7LBF94qeEEvDJkZSbyYOi', NULL, NULL, '2023-05-24 18:31:42', '2023-05-24 18:31:42', NULL),
(43, 'Rita Kusuma', 'ritakusuma@gmail.com', '0901234567', NULL, NULL, '$2y$10$4DJCpnM5K7mUOephV3COu.a9l.D3VEuL7LBF94qeEEvDJkZSbyYOi', NULL, NULL, '2023-05-24 18:31:42', '2023-05-24 18:31:42', NULL),
(44, 'asdsada', 'adminn@gmail.com', '1212121', NULL, NULL, '$2y$10$XBw4hbsJZKG8sVmanSni4OZKzZTvSrY84F.kHeVxIzW9ZFh0S1Mhm', NULL, NULL, '2023-05-24 20:55:39', '2023-05-24 20:55:39', NULL);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `prts`
--
ALTER TABLE `prts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=270;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
