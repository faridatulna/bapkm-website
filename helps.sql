-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21 Jun 2019 pada 04.35
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.10

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
-- Struktur dari tabel `helps`
--

CREATE TABLE `helps` (
  `id` BIGINT(20) UNSIGNED NOT NULL,
  `title` VARCHAR(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` INT(11) NOT NULL,
  `fileImg` TEXT COLLATE utf8mb4_unicode_ci,
  `filePdf` TEXT COLLATE utf8mb4_unicode_ci,
  `description` LONGTEXT COLLATE utf8mb4_unicode_ci,
  `postDate` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `helps`
--

INSERT INTO `helps` (`id`, `title`, `type`, `fileImg`, `filePdf`, `description`, `postDate`, `created_at`, `updated_at`) VALUES
(1, 'Panduan Pengajuan Beasiswa', 3, 'BEASISWA1.jpg', NULL, '<ul>\r\n          <li>*Persyaratan biasanya terdiri dari:</li>\r\n          <li>1. Formulir pendaftaran</li>\r\n          <li>2. <i>Curriculum vitae</i> (daftar riwayat hidup) terbaru</li>\r\n          <li>3. Pas foto berwarna ukuran 4x6</li>\r\n          <li>4. Transkrip nilai</li>\r\n          <li>5. Surat keterangan gaji orang tua</li>\r\n          <li>6. Surat keterangan tidak mampu (opsional)</li>\r\n          <li>7. Surat rekomendasi</li>\r\n          <li>8. TOEFL</li>\r\n          <li>9. Surat pernyataan</li>\r\n          <li>10. <i>Copy cover</i> buku tabungan</li>\r\n        </ul>', '2019-06-21 02:15:13', NULL, NULL),
(2, 'Panduan Penggunaan Layanan Surat Mahasiswa', 1, NULL, 'REGDAT.pdf', NULL, '2019-06-21 02:15:13', NULL, NULL),
(3, 'Panduan Penggunaan Layanan Proposal Kegiatan Unit Kegiatan Mahasiswa (UKM)', 4, 'DATA123.jpg', NULL, '<ul>\r\n          <h4>1. Proposal</h4>\r\n          <li>1.1 Proposal UKM: ditandatangani oleh penanggung jawab kegiatan, ketua UKM, dan Pembina UKM.</li>\r\n          <li>1.2 Proposal ormawa: ditandatangani oleh penanggung jawab kegiatan, ketua himpunan mahasiswa departemen,</li>\r\n          <li style=\"margin-left: 21px;\">dan ketua departemen.</li>\r\n          <h4>2. Surat-Surat</h4>\r\n          <li>2.1 Surat permohonan rekomendasi kegiatan.</li>\r\n          <li>2.2 Surat permohonan Dana BPPTN-Badan Hukum atau NON-PNBP.</li>\r\n          <li>2.3 Point 2.1 & 2.2 ditujukan kepada Wakil Rektor Bidang Akademik dan Kemahasiswaan dan ditandatangani oleh:</li>\r\n          <li style=\"margin-left: 21px;\">a. UKM: penanggung jawab kegiatan, ketua UKM, dan pembina UKM dengan stempel basah.</li>\r\n          <li style=\"margin-left: 21px;\">b. Ormawa: penanggung jawab kegiatan, ketua himpunan mahasiswa departemen, dan ketua departemen dengan stempel basah.</li>\r\n          <li>2.4 Surat permohonan dana IKOMA, ditujukan kepada Ketua IKOMA yang ditandatangani oleh penanggungjawab</li>\r\n          <li style=\"margin-left: 21px;\">kegiatan, ketua UKM atau himpunan mahasiswa departemen, pembina UKM atau ketua departemen, serta Wakil Rektor I dengan stempel basah.</li>\r\n        </ul>', '2019-06-21 02:17:14', NULL, NULL),
(4, 'Panduan Penggunaan Layanan Proposal Kegiatan Organisasi Mahasiswa (Fakultas dan Departemen)', 4, 'DATA123.jpg', NULL, '<ul>\r\n          <h4>1. Proposal</h4>\r\n          <li>Proposal ditandatangani oleh penanggung jawab kegiatan, ketua himpunan mahasiswa departemen, dan ketua departemen.</li>\r\n          <h4>2. Surat-Surat</h4>\r\n          <li>2.1 Surat permohonan rekomendasi kegiatan.</li>\r\n          <li>2.2 Surat permohonan Dana BPPTN-Badan Hukum atau NON-PNBP.</li>\r\n          <li>2.3 Point 2.1 & 2.2 ditujukan kepada Wakil Rektor Bidang Akademik dan Kemahasiswaan dan ditandatangani oleh</li>\r\n          <li style=\"margin-left: 21px;\">penanggung jawab kegiatan, ketua himpunan mahasiswa departemen, dan ketua departemen dengan stempel basah.</li>\r\n          <li>2.4 Surat permohonan dana IKOMA, ditujukan kepada Ketua IKOMA yang ditandatangani oleh penanggung jawab</li>\r\n          <li style=\"margin-left: 21px;\">kegiatan, ketua himpunan mahasiswa departemen, ketua departemen, serta Wakil Rektor I dengan stempel basah.</li>\r\n        </ul>', '2019-06-21 02:17:14', NULL, NULL),
(5, 'Panduan Penggunaan Layanan Proposal Kegiatan Organisasi Mahasiswa (Fakultas dan Departemen)', 4, 'DATA123.jpg', NULL, '<ul>\r\n          <h4>1. Proposal</h4>\r\n          <li>Proposal ditandatangani oleh penanggung jawab kegiatan, ketua himpunan mahasiswa departemen, dan ketua departemen.</li>\r\n          <h4>2. Surat-Surat</h4>\r\n          <li>2.1 Surat permohonan rekomendasi kegiatan.</li>\r\n          <li>2.2 Surat permohonan Dana BPPTN-Badan Hukum atau NON-PNBP.</li>\r\n          <li>2.3 Point 2.1 & 2.2 ditujukan kepada Wakil Rektor Bidang Akademik dan Kemahasiswaan dan ditandatangani oleh</li>\r\n          <li style=\"margin-left: 21px;\">penanggung jawab kegiatan, ketua himpunan mahasiswa departemen, dan ketua departemen dengan stempel basah.</li>\r\n          <li>2.4 Surat permohonan dana IKOMA, ditujukan kepada Ketua IKOMA yang ditandatangani oleh penanggung jawab</li>\r\n          <li style=\"margin-left: 21px;\">kegiatan, ketua himpunan mahasiswa departemen, ketua departemen, serta Wakil Rektor I dengan stempel basah.</li>\r\n        </ul>', '2019-06-21 02:19:41', NULL, NULL),
(6, 'Panduan Penggunaan Layanan Proposal Organisasi Mahasiswa (BEM dan Himadep)', 4, 'DATA123.jpg', NULL, '<ul>\r\n          <h4>1. Proposal</h4>\r\n          <h4>2. Surat-Surat</h4>\r\n          <li>2.1 Surat permohonan rekomendasi kegiatan.</li>\r\n          <li>2.2 Surat permohonan Dana DIPA/BPPTN-Badan Hukum atau NON-PNBP.</li>\r\n          <li>2.3 Point 2.1 & 2.2 ditujukan kepada Wakil Rektor Bidang Akademik dan Kemahasiswaan dan ditandatangani oleh</li>\r\n          <li style=\"margin-left: 21px;\">penanggung jawab kegiatan, ketua himpunan mahasiswa departemen, ketua departemen, dan dekan fakultas dengan stempel basah.</li>\r\n          <li>2.4 Surat permohonan dana IKOMA, ditujukan kepada Ketua IKOMA yang ditandatangani oleh penanggung jawab</li>\r\n          <li style=\"margin-left: 21px;\">kegiatan, ketua himpunan mahasiswa departemen, ketua departemen, serta Wakil Rektor I dengan stempel basah.</li>\r\n        </ul>', '2019-06-21 02:19:41', NULL, NULL),
(7, 'Panduan Penggunaan Layanan Dana Sponsor bagi Delegasi/Tim/Mahasiswa', 4, 'DATA4.jpg', NULL, '<ul>\r\n          <li>1. Bukti transfer dari sponsor.</li>\r\n          <li>2. RBA penggunaan dana sponsor.</li>\r\n          <li>3. Kuitansi bukti penggunaan dana.</li>\r\n          <li>4. Fotokopi paspor.</li>\r\n          <li>5. Bukti tiket dan boarding pass.</li>\r\n          <li>6. Surat tugas dan surat rekomendasi kegiatan dari Wakil Rektor I.</li>\r\n          <li>7. Surat-surat yang terkait dengan pengajuan surat tugas dan surat rekomendasi kegiatan.</li>\r\n        </ul>', '2019-06-21 02:20:51', NULL, NULL),
(8, 'Panduan Penggunaan Layanan Pengesahan Laporan Pertanggungjawaban (LPJ) dan Surat Pertanggungjawaban (SPJ)', 4, 'DATA5.jpg', NULL, '<ul>\r\n          <li>1. Proposal LPJ.</li>\r\n          <li>2. Kuitansi SPJ.</li>\r\n        </ul>', '2019-06-21 02:20:51', NULL, NULL),
(9, 'Panduan Pembuatan Ijazah Bahasa Inggris', 2, 'PEP1.jpg', NULL, '<ul>\r\n          <li><i>Hard copy</i> ijazah asli.</li>\r\n        </ul>\r\n\r\n        <h3>Biaya</h3>\r\n        <ul>\r\n          <h4>Program Sarjana (S1) dan Diploma (D3)</h4>\r\n          <li>a. Lulusan baru: Rp. 15.000,00/1 lembar asli</li>\r\n          <li>b. Lulusan 1-3 tahun: Rp. 20.000,00/1 lembar asli</li>\r\n          <li>c. Lulusan 3-5 tahun: Rp. 30.000,00/1 lembar asli</li>\r\n          <li>d. Lulusan > 5 tahun: Rp. 50.000,00/1 lembar asli</li>\r\n          <h4>Program Magister (S2) dan Doktor (S3)</h4>\r\n          <li>a. Lulusan baru: Rp. 20.000,00/1 lembar asli</li>\r\n          <li>b. Lulusan 1-3 tahun: Rp. 25.000,00/1 lembar asli</li>\r\n          <li>c. Lulusan 3-5 tahun: Rp. 35.000,00/1 lembar asli</li>\r\n          <li>d. Lulusan > 5 tahun: Rp. 55.000,00/1 lembar asli</li>\r\n        </ul>', '2019-06-21 02:22:59', NULL, NULL),
(10, 'Panduan Pencetakan Transkrip', 2, 'PEP2.jpg', NULL, '<ul>\r\n          <h4>Untuk lulusan yang kehilangan transkrip:</h4>\r\n          <li>1. Surat kehilangan dari kepolisian.</li>\r\n          <li>2. Bukti pendukung untuk keperluan apa transkrip dicetak ulang.</li>\r\n          <h4>Untuk lulusan yang transkripnya rusak:</h4>\r\n          <li>1. Bukti transkrip rusak.</li>\r\n        </ul>', '2019-06-21 02:22:59', NULL, NULL),
(11, 'Panduan Pencetakan Transkrip', 2, 'PEP3.jpg', NULL, NULL, '2019-06-21 02:26:22', NULL, NULL),
(12, 'Panduan Pencetakan Transkrip untuk Mahasiswa Aktif', 2, 'PEP4.jpg\r\nPEP5.jpg', NULL, '<ul>\r\n          <h4>1. Proposal</h4>\r\n          <h4>2. Surat-Surat</h4>\r\n          <li>2.1 Surat permohonan rekomendasi kegiatan.</li>\r\n          <li>2.2 Surat permohonan Dana DIPA/BPPTN-Badan Hukum atau NON-PNBP.</li>\r\n          <li>2.3 Point 2.1 & 2.2 ditujukan kepada Wakil Rektor Bidang Akademik dan Kemahasiswaan dan ditandatangani oleh</li>\r\n          <li style=\"margin-left: 21px;\">penanggung jawab kegiatan, ketua himpunan mahasiswa departemen, ketua departemen, dan dekan fakultas dengan stempel basah.</li>\r\n          <li>2.4 Surat permohonan dana IKOMA, ditujukan kepada Ketua IKOMA yang ditandatangani oleh penanggung jawab</li>\r\n          <li style=\"margin-left: 21px;\">kegiatan, ketua himpunan mahasiswa departemen, ketua departemen, serta Wakil Rektor I dengan stempel basah.</li>\r\n        </ul>', '2019-06-21 02:26:22', NULL, NULL),
(13, 'Panduan Penggantian Ijazah yang Hilang', 2, 'PEP6.jpg\r\nPEP7.jpg', NULL, '<ul>\r\n          <h4>Untuk lulusan yang kehilangan ijazah:</h4>\r\n          <li>1. <i>Copy</i> ijazah.</li>\r\n          <li>2. Form permohonan surat keterangan pengganti ijazah.</li>\r\n          <li>3. Surat kehilangan yang dikeluarkan oleh kepolisian.</li>\r\n          <h4>Untuk lulusan yang ijazahnya rusak:</h4>\r\n          <li>1. <i>Copy</i> ijazah.</li>\r\n          <li>2. Form permohonan surat keterangan pengganti ijazah.</li>\r\n          <li>3. Fotokopi ijazah yang rusak.</li>\r\n          <h4>Untuk lulusan yang ijazahnya memiliki kesalahan data:</h4>\r\n          <li>1. <i>Copy</i> ijazah.</li>\r\n          <li>2. Form permohonan surat keterangan pengganti ijazah.</li>\r\n          <li>3. Surat pernyataan/keterangan dari sekolah/institusi/perguruan tinggi terkait kesalahan ijazah.</li>\r\n        </ul>', '2019-06-21 02:28:35', NULL, NULL),
(14, 'Panduan Pencetakan KRSM', 2, 'PEP8.jpg', NULL, NULL, '2019-06-21 02:28:35', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `helps`
--
ALTER TABLE `helps`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `helps`
--
ALTER TABLE `helps`
  MODIFY `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
