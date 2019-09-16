-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2019 at 08:32 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bapkm-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `announces`
--

CREATE TABLE `announces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dt_start` datetime DEFAULT NULL,
  `dt_end` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `announces`
--

INSERT INTO `announces` (`id`, `message`, `dt_start`, `dt_end`, `created_at`, `updated_at`) VALUES
(1, 'Pesan yang lainnya', '2019-08-22 02:57:00', '2019-08-23 14:01:00', '2019-08-18 17:05:43', '2019-08-18 17:05:43');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fileImg` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filePdf` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `viewer` bigint(20) NOT NULL DEFAULT 0,
  `type` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `description`, `fileImg`, `filePdf`, `url`, `viewer`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Denah dan Urutan Tempat Duduk Wisudawan', 'Denah dan Urutan Tempat Duduk Wisudawan ke-119 ITS dapat dilihat dari <a href=\"baak.its.ac.id/wsd/\">disini</a>', NULL, NULL, 'baak.its.ac.id/wsd/', 2, 5, '2019-06-25 09:44:54', '2019-06-25 11:56:52'),
(2, 'Survei Kepuasan Pelaksanaan Upacara Wisuda Ke-119 ITS', 'Mohon bantuan rekan-rekan calon wisudawan ke-119 ITS untuk mengisi survei kepuasan pelaksanaan upacara wisuda ke-119 pada tautan berikut ini <a href=\"https://intip.in/WISUDAITS119\">https://intip.in/WISUDAITS119</a>', NULL, NULL, 'https://intip.in/WISUDAITS119', 3, 5, '2019-06-25 09:44:54', '2019-06-25 09:44:54'),
(3, 'Pengumuman SNMPTN 2019 ITS', 'Pemberian jadwal kegiatan (Pelatihan Spiritual, Psikotes, TPA, dan TEFL) serta NRP bagi mahasiswa baru jalur SNMPTN 2019 ditunda menjadi tanggal 7 Mei 2019.', NULL, NULL, NULL, 2, 3, '2019-06-25 09:44:54', '2019-06-25 09:44:54'),
(4, 'Kalender Akademik<br>2018-2019', NULL, NULL, '1561518730.pdf', NULL, 0, 6, '2019-06-25 20:12:10', '2019-06-25 20:12:10'),
(5, 'Kalender Akademik<br>2019-2020', NULL, NULL, '1561518789.pdf', NULL, 3, 6, '2019-06-25 20:13:09', '2019-06-25 20:13:09'),
(9, 'Beasiswa Camaba', NULL, '90478-2019-09-16-08-14-29.PNG', '29811-2019-09-16-08-14-29.pdf', NULL, 0, 3, '2019-09-16 01:14:29', '2019-09-16 01:23:05');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `cid` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `submit_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentable_id` bigint(20) UNSIGNED DEFAULT NULL,
  `commentable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`cid`, `user_id`, `parent_id`, `name`, `submit_time`, `body`, `commentable_id`, `commentable_type`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'john', '2019-09-05 03:26:45', 'this is comment', 3, 'App\\Article', 1, '2019-09-05 03:03:48', '2019-09-05 03:03:48'),
(2, NULL, 1, 'Rani', '2019-09-05 03:26:49', 'hello john', 3, 'App\\Article', 1, '2019-09-05 03:04:23', '2019-09-05 03:04:23'),
(3, NULL, 2, 'boy', '2019-09-05 03:26:54', 'hello rani', 3, 'App\\Article', 1, '2019-09-05 03:06:14', '2019-09-05 03:06:14'),
(6, 1, NULL, 'Administrator@BAPKM', '2019-09-05 03:49:31', 'hello gaes', 3, 'App\\Article', 1, '2019-09-05 03:36:14', '2019-09-05 03:36:14'),
(7, 1, NULL, 'Administrator@BAPKM', '2019-09-05 03:48:00', 'sr', 3, 'App\\Article', 1, '2019-09-05 03:48:00', '2019-09-05 03:48:00'),
(8, NULL, 6, 'hani', '2019-09-05 03:49:08', 'huhu', 3, 'App\\Article', 0, '2019-09-05 03:49:08', '2019-09-05 03:49:08'),
(9, NULL, NULL, 'hani', '2019-09-15 16:04:21', 'hai', 2, 'App\\Article', 0, '2019-09-15 16:04:22', '2019-09-15 16:04:22');

-- --------------------------------------------------------

--
-- Table structure for table `counters`
--

CREATE TABLE `counters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `visit_date` date NOT NULL,
  `visit_time` time NOT NULL,
  `today_visitors` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `counters`
--

INSERT INTO `counters` (`id`, `visit_date`, `visit_time`, `today_visitors`, `created_at`, `updated_at`) VALUES
(1, '2019-08-04', '23:06:26', 5, '2019-08-04 16:06:26', '2019-08-04 16:06:26'),
(2, '2019-08-05', '08:59:35', 107, NULL, NULL),
(3, '2019-08-07', '08:44:43', 104, NULL, NULL),
(4, '2019-08-08', '06:35:10', 191, NULL, NULL),
(104, '2019-08-17', '03:52:38', 21, NULL, NULL),
(105, '2019-08-18', '00:29:56', 2, NULL, NULL),
(106, '2019-08-19', '00:23:07', 8, NULL, NULL),
(107, '2019-08-22', '07:45:33', 7, NULL, NULL),
(108, '2019-08-25', '20:28:29', 18, NULL, NULL),
(109, '2019-08-26', '00:00:36', 35, NULL, NULL),
(110, '2019-08-27', '06:29:37', 3, NULL, NULL),
(111, '2019-08-28', '06:40:20', 2, NULL, NULL),
(112, '2019-08-29', '05:45:00', 11, NULL, NULL),
(113, '2019-09-05', '08:04:15', 28, NULL, NULL),
(114, '2019-09-15', '23:03:03', 1, NULL, NULL),
(115, '2019-09-16', '08:08:01', 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateOfEvent` datetime NOT NULL,
  `fromTime` time DEFAULT NULL,
  `toTime` time DEFAULT NULL,
  `place` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `dateOfEvent`, `fromTime`, `toTime`, `place`, `created_at`, `updated_at`) VALUES
(1, 'Agenda 1', '2019-08-23 00:00:00', '03:03:00', '15:04:00', 'Lapangan', '2019-08-10 19:57:53', '2019-08-10 19:57:53'),
(2, 'Agenda 2', '2019-08-22 00:00:00', '14:00:00', '16:00:00', 'Lapangan ITS', '2019-08-22 01:01:34', '2019-08-22 01:02:23'),
(3, 'Agenda 1', '2019-08-23 00:00:00', '03:03:00', '15:04:00', 'Lapangan', '2019-08-10 19:57:53', '2019-08-10 19:57:53'),
(4, 'Agenda 2', '2019-08-22 00:00:00', '14:00:00', '16:00:00', 'Lapangan ITS', '2019-08-22 01:01:34', '2019-08-22 01:02:23'),
(5, 'Agenda 1', '2019-08-23 00:00:00', '03:03:00', '15:04:00', 'Lapangan', '2019-08-10 19:57:53', '2019-08-10 19:57:53'),
(6, 'Agenda 2', '2019-08-22 00:00:00', '14:00:00', '16:00:00', 'Lapangan ITS', '2019-08-22 01:01:34', '2019-08-22 01:02:23');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'anonymous',
  `rating` int(11) NOT NULL,
  `opinion` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `username`, `rating`, `opinion`, `created_at`, `updated_at`) VALUES
(1, 'Putri', 5, 'Awesome', '2019-08-22 00:53:10', '2019-08-22 00:53:10'),
(2, 'Nabilla', 4, 'Cool', '2019-08-22 00:53:49', '2019-08-22 00:53:49'),
(3, 'Awan', 5, 'Awesome web ever', '2019-08-22 00:53:10', '2019-08-22 00:53:10'),
(4, 'Endah', 4, 'So Cool', '2019-08-22 00:53:49', '2019-08-22 00:53:49'),
(5, 'Tina', 3, 'Cool! I like IT', '2019-08-25 16:46:48', '2019-08-25 16:46:48'),
(6, 'Anonymous User', 2, 'This website is awesome', '2019-08-25 17:27:39', '2019-08-25 17:27:39'),
(7, 'Anonymous User', 2, 'Good', '2019-08-29 09:05:14', '2019-08-29 09:05:14'),
(8, 'Anonymous User', 2, 'This webs super cool', '2019-09-05 03:00:41', '2019-09-05 03:00:41');

-- --------------------------------------------------------

--
-- Table structure for table `filters`
--

CREATE TABLE `filters` (
  `id` int(10) UNSIGNED NOT NULL,
  `filter_code` char(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filter_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `filters`
--

INSERT INTO `filters` (`id`, `filter_code`, `filter_name`, `created_at`, `updated_at`) VALUES
(1, 'A01', 'Akademik', '2019-08-04 16:06:30', '2019-08-04 16:06:30'),
(2, 'A02', 'Beasiswa', '2019-08-04 16:06:30', '2019-08-04 16:06:30'),
(3, 'A03', 'Camaba', '2019-08-04 16:06:30', '2019-08-04 16:06:30'),
(4, 'A04', 'Wisuda', '2019-08-04 16:06:30', '2019-08-04 16:06:30'),
(5, 'A05', 'UKM', '2019-08-04 16:06:30', '2019-08-04 16:06:30'),
(6, 'A06', 'Calendar', '2019-08-04 16:06:30', '2019-08-04 16:06:30');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('carousel','gallery') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `banner`, `type`, `created_at`, `updated_at`) VALUES
(2, '1561517056.jpg', 'carousel', '2019-06-25 19:44:16', '2019-06-25 19:44:16'),
(3, '1561517081.jpg', 'carousel', '2019-06-25 19:44:41', '2019-06-25 19:44:41'),
(4, '1561517108.jpg', 'carousel', '2019-06-25 19:45:08', '2019-06-25 19:45:08'),
(5, '1561533333.jpg', 'carousel', '2019-06-26 00:15:33', '2019-06-26 00:15:33');

-- --------------------------------------------------------

--
-- Table structure for table `helps`
--

CREATE TABLE `helps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `fileImg` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filePdf` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `helps`
--

INSERT INTO `helps` (`id`, `title`, `type`, `fileImg`, `filePdf`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Panduan Pengajuan Beasiswa', 3, 'BEASISWA1.jpg', NULL, '<ul>\r\n          <li>*Persyaratan biasanya terdiri dari:</li>\r\n          <li>1. Formulir pendaftaran</li>\r\n          <li>2. <i>Curriculum vitae</i> (daftar riwayat hidup) terbaru</li>\r\n          <li>3. Pas foto berwarna ukuran 4x6</li>\r\n          <li>4. Transkrip nilai</li>\r\n          <li>5. Surat keterangan gaji orang tua</li>\r\n          <li>6. Surat keterangan tidak mampu (opsional)</li>\r\n          <li>7. Surat rekomendasi</li>\r\n          <li>8. TOEFL</li>\r\n          <li>9. Surat pernyataan</li>\r\n          <li>10. <i>Copy cover</i> buku tabungan</li>\r\n        </ul>', NULL, NULL),
(2, 'Panduan Penggunaan Layanan Surat Mahasiswa', 1, NULL, 'REGDAT.pdf', NULL, NULL, NULL),
(3, 'Panduan Penggunaan Layanan Proposal Kegiatan Unit Kegiatan Mahasiswa (UKM)', 4, 'DATA123.jpg', NULL, '<ul>\r\n          <h4>1. Proposal</h4>\r\n          <li>1.1 Proposal UKM: ditandatangani oleh penanggung jawab kegiatan, ketua UKM, dan Pembina UKM.</li>\r\n          <li>1.2 Proposal ormawa: ditandatangani oleh penanggung jawab kegiatan, ketua himpunan mahasiswa departemen,</li>\r\n          <li style=\"margin-left: 21px;\">dan ketua departemen.</li>\r\n          <h4>2. Surat-Surat</h4>\r\n          <li>2.1 Surat permohonan rekomendasi kegiatan.</li>\r\n          <li>2.2 Surat permohonan Dana BPPTN-Badan Hukum atau NON-PNBP.</li>\r\n          <li>2.3 Point 2.1 & 2.2 ditujukan kepada Wakil Rektor Bidang Akademik dan Kemahasiswaan dan ditandatangani oleh:</li>\r\n          <li style=\"margin-left: 21px;\">a. UKM: penanggung jawab kegiatan, ketua UKM, dan pembina UKM dengan stempel basah.</li>\r\n          <li style=\"margin-left: 21px;\">b. Ormawa: penanggung jawab kegiatan, ketua himpunan mahasiswa departemen, dan ketua departemen dengan stempel basah.</li>\r\n          <li>2.4 Surat permohonan dana IKOMA, ditujukan kepada Ketua IKOMA yang ditandatangani oleh penanggungjawab</li>\r\n          <li style=\"margin-left: 21px;\">kegiatan, ketua UKM atau himpunan mahasiswa departemen, pembina UKM atau ketua departemen, serta Wakil Rektor I dengan stempel basah.</li>\r\n        </ul>', NULL, NULL),
(4, 'Panduan Penggunaan Layanan Proposal Kegiatan Organisasi Mahasiswa (Fakultas dan Departemen)', 4, 'DATA123.jpg', NULL, '<ul>\r\n          <h4>1. Proposal</h4>\r\n          <li>Proposal ditandatangani oleh penanggung jawab kegiatan, ketua himpunan mahasiswa departemen, dan ketua departemen.</li>\r\n          <h4>2. Surat-Surat</h4>\r\n          <li>2.1 Surat permohonan rekomendasi kegiatan.</li>\r\n          <li>2.2 Surat permohonan Dana BPPTN-Badan Hukum atau NON-PNBP.</li>\r\n          <li>2.3 Point 2.1 & 2.2 ditujukan kepada Wakil Rektor Bidang Akademik dan Kemahasiswaan dan ditandatangani oleh</li>\r\n          <li style=\"margin-left: 21px;\">penanggung jawab kegiatan, ketua himpunan mahasiswa departemen, dan ketua departemen dengan stempel basah.</li>\r\n          <li>2.4 Surat permohonan dana IKOMA, ditujukan kepada Ketua IKOMA yang ditandatangani oleh penanggung jawab</li>\r\n          <li style=\"margin-left: 21px;\">kegiatan, ketua himpunan mahasiswa departemen, ketua departemen, serta Wakil Rektor I dengan stempel basah.</li>\r\n        </ul>', NULL, NULL),
(5, 'Panduan Penggunaan Layanan Proposal Organisasi Mahasiswa (BEM dan Himadep)', 4, 'DATA123.jpg', NULL, '<ul>\r\n          <h4>1. Proposal</h4>\r\n          <li>Proposal ditandatangani oleh penanggung jawab kegiatan, ketua himpunan mahasiswa departemen, dan ketua departemen.</li>\r\n          <h4>2. Surat-Surat</h4>\r\n          <li>2.1 Surat permohonan rekomendasi kegiatan.</li>\r\n          <li>2.2 Surat permohonan Dana DIPA/BPPTN-Badan Hukum atau NON-PNBP.</li>\r\n          <li>2.3 Point 2.1 & 2.2 ditujukan kepada Wakil Rektor Bidang Akademik dan Kemahasiswaan dan ditandatangani oleh</li>\r\n          <li style=\"margin-left: 21px;\">penanggung jawab kegiatan, ketua himpunan mahasiswa departemen, dan ketua departemen dengan stempel basah.</li>\r\n          <li>2.4 Surat permohonan dana IKOMA, ditujukan kepada Ketua IKOMA yang ditandatangani oleh penanggung jawab</li>\r\n          <li style=\"margin-left: 21px;\">kegiatan, ketua himpunan mahasiswa departemen, ketua departemen, serta Wakil Rektor I dengan stempel basah.</li>\r\n        </ul>', NULL, NULL),
(6, 'Panduan Penggunaan Layanan Dana Sponsor bagi Delegasi/Tim/Mahasiswa', 4, 'DATA4.jpg', NULL, '<ul>\r\n          <li>1. Bukti transfer dari sponsor.</li>\r\n          <li>2. RBA penggunaan dana sponsor.</li>\r\n          <li>3. Kuitansi bukti penggunaan dana.</li>\r\n          <li>4. Fotokopi paspor.</li>\r\n          <li>5. Bukti tiket dan boarding pass.</li>\r\n          <li>6. Surat tugas dan surat rekomendasi kegiatan dari Wakil Rektor I.</li>\r\n          <li>7. Surat-surat yang terkait dengan pengajuan surat tugas dan surat rekomendasi kegiatan.</li>\r\n        </ul>', NULL, NULL),
(7, 'Panduan Penggunaan Layanan Pengesahan Laporan Pertanggungjawaban (LPJ) dan Surat Pertanggungjawaban (SPJ)', 4, 'DATA5.jpg', NULL, '<ul>\r\n          <li>1. Proposal LPJ.</li>\r\n          <li>2. Kuitansi SPJ.</li>\r\n        </ul>', NULL, NULL),
(8, 'Panduan Pembuatan Ijazah Bahasa Inggris', 2, 'PEP1.jpg', NULL, '<ul>\r\n          <li><i>Hard copy</i> ijazah asli.</li>\r\n        </ul>\r\n\r\n        <h3>Biaya</h3>\r\n        <ul>\r\n          <h4>Program Sarjana (S1) dan Diploma (D3)</h4>\r\n          <li>a. Lulusan baru: Rp. 15.000,00/1 lembar asli</li>\r\n          <li>b. Lulusan 1-3 tahun: Rp. 20.000,00/1 lembar asli</li>\r\n          <li>c. Lulusan 3-5 tahun: Rp. 30.000,00/1 lembar asli</li>\r\n          <li>d. Lulusan > 5 tahun: Rp. 50.000,00/1 lembar asli</li>\r\n          <h4>Program Magister (S2) dan Doktor (S3)</h4>\r\n          <li>a. Lulusan baru: Rp. 20.000,00/1 lembar asli</li>\r\n          <li>b. Lulusan 1-3 tahun: Rp. 25.000,00/1 lembar asli</li>\r\n          <li>c. Lulusan 3-5 tahun: Rp. 35.000,00/1 lembar asli</li>\r\n          <li>d. Lulusan > 5 tahun: Rp. 55.000,00/1 lembar asli</li>\r\n        </ul>', NULL, NULL),
(9, 'Panduan Pencetakan Transkrip Hilang', 2, 'PEP2.jpg', NULL, '<ul>\r\n          <li>1. Surat kehilangan dari kepolisian.</li>\r\n          <li>2. Bukti pendukung untuk keperluan apa transkrip dicetak ulang.</li>\r\n        </ul>', NULL, NULL),
(10, 'Panduan Pencetakan Transkrip Rusak', 2, 'PEP3.jpg', NULL, '<ul>\r\n          <li>Bukti transkrip rusak.</li>\r\n        </ul>', NULL, NULL),
(11, 'Panduan Pencetakan Transkrip untuk Mahasiswa Aktif', 2, 'PEP45.jpg', NULL, '', NULL, NULL),
(12, 'Panduan Penggantian Ijazah yang Hilang atau Rusak', 2, 'PEP6.jpg', NULL, '<ul>\r\n          <h4>Untuk lulusan yang kehilangan ijazah:</h4>\r\n          <li>1. <i>Copy</i> ijazah.</li>\r\n          <li>2. Form permohonan surat keterangan pengganti ijazah.</li>\r\n          <li>3. Surat kehilangan yang dikeluarkan oleh kepolisian.</li>\r\n          <h4>Untuk lulusan yang ijazahnya rusak:</h4>\r\n          <li>1. <i>Copy</i> ijazah.</li>\r\n          <li>2. Form permohonan surat keterangan pengganti ijazah.</li>\r\n          <li>3. Fotokopi ijazah yang rusak.</li>\r\n        </ul>', NULL, NULL),
(13, 'Panduan Penggantian Ijazah yang Datanya Salah', 2, 'PEP7.jpg', '', '<ul>\r\n          <h4>Untuk lulusan yang ijazahnya memiliki kesalahan data:</h4>\r\n          <li>1. <i>Copy</i> ijazah.</li>\r\n          <li>2. Form permohonan surat keterangan pengganti ijazah.</li>\r\n          <li>3. Surat pernyataan/keterangan dari sekolah/institusi/perguruan tinggi terkait kesalahan ijazah.</li>\r\n        </ul>', NULL, NULL),
(14, 'Panduan Pencetakan KRSM', 2, 'PEP8.jpg', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_05_04_194135_create_filters_table', 1),
(4, '2019_05_05_063434_create_articles_table', 1),
(5, '2019_05_07_063433_create_comments_table', 1),
(6, '2019_06_17_042234_create_quicklinks_table', 1),
(7, '2019_06_17_042252_create_services_table', 1),
(8, '2019_06_17_043503_create_helps_table', 1),
(9, '2019_06_17_043521_create_galleries_table', 1),
(10, '2019_06_17_043537_create_events_table', 1),
(11, '2019_06_27_220334_create_counters_table', 1),
(12, '2019_07_30_011216_create_announces_table', 1),
(14, '2019_08_10_224958_create_feedback_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quicklinks`
--

CREATE TABLE `quicklinks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quicklinks`
--

INSERT INTO `quicklinks` (`id`, `title`, `url`, `created_at`, `updated_at`) VALUES
(1, 'Integra', 'http://integra.its.ac.id/', NULL, NULL),
(2, 'Laporan Semester', 'http://10.103.1.158/i_repot/jurusan.php', NULL, NULL),
(3, 'SMITS', 'http://smits.its.ac.id/', NULL, NULL),
(4, 'Pencarian SK', 'http://10.103.1.10/sk/', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filePdf` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fileImg` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `filePdf`, `fileImg`, `description`, `url`, `created_at`, `updated_at`) VALUES
(1, 'Layanan Persuratan', 'lsm.pdf', 'persuratan.jpg', 'Layanan persuratan daring yang dapat diakses melalui Integra.', 'https://integra.its.ac.id/', NULL, NULL),
(2, 'Layanan Wisuda', NULL, 'wisuda.jpeg', 'Layanan pencarian tempat duduk untuk wisuda.', 'http://baak.its.ac.id/wsd/cari.php', NULL, NULL),
(3, 'Service Desk', 'servicedesk.pdf', 'sd.jpg', 'Layanan penerimaan keluhan yang terintegrasi dengan semua badan di ITS.', 'https://servicedesk.its.ac.id/', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass_seen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `role_id`, `gambar`, `email`, `email_verified_at`, `password`, `pass_seen`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'superadmin', 0, NULL, 'superadmin@admin.com', NULL, '$2y$10$hMMe9Xy9F1Ur.NEObKYXg.AN.luN/bJLhbQkTGNFDthSqj3mrQ7KW', 'superadmin123', NULL, '2019-08-04 16:06:25', '2019-08-04 16:06:25'),
(2, 'Admin AP', 'adminap', 0, NULL, 'adminap@admin.com', NULL, '$2y$10$r187d.dEK8RWLQVwmLv40.5YnMaDbffGJp.MYMjElpHT6Um7Wim1a', 'adminap123', NULL, '2019-08-04 16:06:26', '2019-08-04 16:06:26'),
(3, 'Admin KM', 'adminkm', 0, NULL, 'adminkm@admin.com', NULL, '$2y$10$AFGCZvpvJpegO2P7LeyIHexN8KlzxK82cn7B2Xrfh/26vmmKGeA6O', 'adminkm123', NULL, '2019-08-04 16:06:26', '2019-08-04 16:06:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announces`
--
ALTER TABLE `announces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_type_foreign` (`type`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `counters`
--
ALTER TABLE `counters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `counters_visit_date_unique` (`visit_date`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filters`
--
ALTER TABLE `filters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `helps`
--
ALTER TABLE `helps`
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
-- Indexes for table `quicklinks`
--
ALTER TABLE `quicklinks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announces`
--
ALTER TABLE `announces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `cid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `counters`
--
ALTER TABLE `counters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `filters`
--
ALTER TABLE `filters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `helps`
--
ALTER TABLE `helps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `quicklinks`
--
ALTER TABLE `quicklinks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_type_foreign` FOREIGN KEY (`type`) REFERENCES `filters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
