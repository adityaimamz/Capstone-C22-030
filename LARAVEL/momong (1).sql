-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Des 2022 pada 12.30
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `momong`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `title` text NOT NULL,
  `article` text NOT NULL,
  `date` date NOT NULL,
  `source` text NOT NULL,
  `img` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `articles`
--

INSERT INTO `articles` (`id`, `category`, `title`, `article`, `date`, `source`, `img`) VALUES
(1, 3, 'Hubungan Pola Asuh Orang Tua Dengan Konsep Diri Anak Usia Sekolah (10-12 Tahun)', 'Parenting is a process in a family, the interaction between parents and their children. Parenting has been applied since the child was born and adjusted in accordance with the age and stage of development, for example in children aged 10-12 years. The mentioned age is the preadolescent\'s period that has various development characteristics that will affect an individual perspective. Individual knowledge about themselves, the combination of feelings, attitudes, and perceptions are labeled as self-concept. Individual knowledge about themselves, the combination of feelings, attitudes, and perceptions are labeled as self-concept. This study aimed to determine the correlation between parenting style of parents with school-age child\'s self concept (10-12 years). The type of research was the non-experimental quantitative with correlation study and data collection using questionnaires. Respondents in this research were children aged 10-12 years and determined by total sampling technique. Total respondents were 149 people. Data were verified by using Chi Square and the results showed that there was correlation between parents\' parenting style with school-age child\'s self concept (10-12 years) (x2=6.808; p=0.033). In the authoritatif parenting, more children were found with positive self-concept 73.3%, while the authoritarian and permissive parenting got more children with negative self-concept that was 18.9% and 28.4%. It was suggested that parents should apply authoritatif parenting where children 10-12 year olds with the most positive self-concept are derived from the style, the school and parents should collaborate to improve student achievement accordance with the interests and abilities, community nurses is expected with their role in the community to be able to help locate the problem and provide health education related to parenting style and children\'s self-concept', '2022-12-01', 'www.neliti.com/id/publications/89951', 'pola-asuh-anak-usia-sekolah.jpg'),
(2, 1, 'Apakah Orang Tua Mewariskan Berat Badan ke Anak?', 'Anda mungkin sudah tahu beberapa hal dari orang tua yang dapat diturunkan secara genetis pada anak, antara lain adalah bentuk rambut, warna mata, warna kulit, juga tinggi badan. Sebuah penelitian yang diterbitkan dalam jurnal Economics and Human Biology menunjukkan bahwa berat badan anak ternyata juga merupakan warisan genetis dari orang tua.\r\n \r\nSecara garis besar, penelitian yang dilakukan oleh Prof. Peter Dalton, Ph.D., dari University of Sussex di Inggris ini bekerja dengan cara memperkirakan transmisi berat massa tubuh antargenerasi, yakni antara orang tua dan anak. Timnya menghitung berapa banyak berat massa tubuh anak yang didapat dari berat massa tubuh orang tuanya.\r\n \r\nHasilnya menunjukkan bahwa anak-anak mewarisi sekitar 40% berat massa tubuh atau body mass index (BMI) orang tuanya. Analisis terhadap sekitar 100.000 anak yang tersebar di 6 negara, yakni Amerika Serikat, Inggris, Cina, Indonesia, Spanyol, dan Meksiko ini memperlihatkan bahwa sekitar 20% indeks massa tubuh anak diwarisi dari ayahnya, sementara sekitar 20%-nya lagi diwarisi dari ibu mereka.\r\n \r\nRisiko Obesitas\r\nDari sini, tim peneliti menemukan bahwa orang tua yang memiliki berat massa tubuh berlebih memiliki risiko 2 kali lebih banyak untuk mengalami obesitas. Obesitas yang dialami pada masa anak-anak memiliki risiko jangka panjang pada kesehatan, termasuk risiko asma, diabetes tipe 2, penyakit jantung, serta beberapa bentuk kanker. Di samping itu, anak-anak yang obesitas juga lebih cenderung memiliki masalah kesehatan emosional, seperti minder dan harga diri yang rendah.\r\n \r\nPerhatikan, ya, Ma...\r\nPerlu diperhatikan bahwa penting bagi anak-anak untuk memiliki pola makan yang sehat serta melakukan aktivitas fisik secara teratur untuk menjaga berat badan tetap sehat.\r\n', '2022-12-06', 'bunda.com', 'orangtua-mewariskan-berat-badan.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `category_articles`
--

CREATE TABLE `category_articles` (
  `id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `category_articles`
--

INSERT INTO `category_articles` (`id`, `category_name`) VALUES
(1, 'Keluarga'),
(2, 'Bayi'),
(3, 'Usia Sekolah'),
(4, 'Orang tua');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_11_26_152826_create_tb_user_table', 1);

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'kha@gmail.com', '$2y$10$rxzqZCOGuwOzmbVEEe4mkOAvvomWIsKf95s0F6LlhxB3Du.UrvMw6', '2022-11-26 09:11:04', '2022-11-26 09:11:04'),
(3, 'kharismaharani@gmail.com', '$2y$10$s3u6mZHrqAkUzwVc7Oge8u2W0Cuo9ZchTFUvPsaY7gNcWCtcYfwLi', '2022-11-26 09:12:56', '2022-11-26 09:12:56'),
(4, 'yukbisa@gmail.com', '$2y$10$pSjabyjkTYgw0em487hI4urB9xwIEQTLVWW15.St6dLogQVqL5w1u', '2022-11-26 09:13:44', '2022-11-26 09:13:44'),
(5, 'bimis@gmail', '$2y$10$8VySlqgZTH8f1pDFx2zstuBa2Bf8sZbvV2u0rvcYEIBet53Db9IkG', '2022-11-26 09:16:55', '2022-11-26 09:16:55'),
(6, 'alala@gmail', '$2y$10$ZrS1i5EaK8hudNs7aWca2unYTV9Uifpl95feS3JTd4o2O9suOk8Ge', '2022-11-26 09:17:25', '2022-11-26 09:17:25'),
(7, 'kh11@gmail.com', '$2y$10$IeGo/b04.ynR3nve5ugUGekoO6wDOgvMMkAM0K0TZSZrRVF6f.Yny', '2022-11-26 09:18:23', '2022-11-26 09:18:23'),
(9, 'qwqwqwq@gmail', '$2y$10$CdWgU/Cdu20DbmHevKgKwuNHFgxp2pmTr6Tet2XEPeN/7ZvdSGdCm', '2022-11-26 09:19:00', '2022-11-26 09:19:00'),
(10, 'sakdino@gmail.com', '$2y$10$jtD26QfhE590U3nUvAllLeQ.EzqhPhD3261sJxiO.nPND19i9iYLa', '2022-11-26 09:20:26', '2022-11-26 09:20:26'),
(11, 'yeyeylalala@gmail.com', '$2y$10$sT5Kj65GC/1evK37paqlweDfOUf9PGVxt2ocF4.JMzs/BWw1wllsy', '2022-11-26 09:20:45', '2022-11-26 09:20:45'),
(13, 'kh111@gmail.com', '$2y$10$0R8bMbO1el19CClgqkshKuNCxMRj1Tahr93UxEQr3brRUO6HtFo4e', '2022-11-26 09:21:23', '2022-11-26 09:21:23'),
(14, 'alalaa@gmail', '$2y$10$ZbCqkRQv4fa7RmclrGUScurrjjI36zpFnBnpQSxY2Y2pm97ntR5La', '2022-11-26 09:21:42', '2022-11-26 09:21:42'),
(15, 'khaa@gmail.com', '$2y$10$pm9tOUe2yhm1fO1LFvr8aOWrCbYyXsbYB9QzQJRVfFzLCVN8Q1LBe', '2022-11-26 09:22:02', '2022-11-26 09:22:02'),
(16, 'kharismaharanaaai@gmail', '$2y$10$pPKtqO4s6tCP/9UtvMbNvOXUJ8K3PST/EnnsmmwMzeH1aQ0sh28r6', '2022-11-26 09:24:51', '2022-11-26 09:24:51'),
(18, 'mamam@gmail.com', '$2y$10$xEbdXbDvyoW9CaadtTmKkuS7/IJ2LO1lSDV3vkoaDdwWdHqayCDMa', '2022-11-26 09:26:32', '2022-11-26 09:26:32'),
(19, 'momong@gmail.xom', '$2y$10$BXpQCRXtJorLpVD4um.cVuluBP08HaEo2yJV1pEHdz7I9JjxgQMTe', '2022-11-26 09:27:07', '2022-11-26 09:27:07'),
(20, 'kharismaharaasaaaai@gmail', '$2y$10$vyvLo.yRhVMFh4BtoLS6xObglyjJMw.KWObkl6QaXCqbTcQKHkuGK', '2022-11-26 09:27:45', '2022-11-26 09:27:45'),
(21, 'firda@gmail.com', '$2y$10$4e9P1TeCH/SJGDpqmlFmjuoIczzLPuKHBsBw58HJUOKlJx46J0uPO', '2022-11-26 19:09:45', '2022-11-26 19:09:45'),
(22, 'ple@gmail.com', '$2y$10$iMoQMwEz0fA0mD6rX0UdcOZZBRkf1L6uXzPKxEB.DHl6biuDgj.nC', '2022-11-26 19:19:53', '2022-11-26 19:19:53'),
(23, 'tes@gmail.com', '$2y$10$paH/YPTK7byb7.ofEvJTie92UbkUWSXUMofzGD43xJ3bixm2kCjM2', '2022-11-26 19:21:01', '2022-11-26 19:21:01'),
(24, 'ayoayo@gmail', '$2y$10$d6sDf3nSk5BwO545vjJtMu0sEY5DLfLA.AI2B8e5Z2OnHXgOI3jLu', '2022-11-26 19:22:59', '2022-11-26 19:22:59'),
(25, 'yuk@gmail', '$2y$10$3KXgT.5aHO8Yj7lckGUEburg1ZP7rVRFZx9CySkux2D3/My9Vs7Ua', '2022-11-26 19:23:33', '2022-11-26 19:23:33'),
(26, 'ggg@gmail.com', '$2y$10$KveAO7YleuZQ/5mJa5iJjuWPjrXvP3J3r0/200M91.lzUBmBw1nkO', '2022-11-26 19:25:33', '2022-11-26 19:25:33'),
(27, 'yoyoyolalalla@gmail', '$2y$10$wVfTBtDbZKnIsOYGJdux9ufC5l5yWURhmgGZwO7HKy7kiRWR/xvIW', '2022-11-26 19:31:22', '2022-11-26 19:31:22'),
(28, 'kharisma@gmail.com', '$2y$10$FmsteE3/dw8/3P6ov0QhyeMoP4Svg.jxYw4c8ipexCt8cxA1KUSdq', '2022-11-26 19:45:57', '2022-11-26 19:45:57'),
(29, 'khaaa@gmail.com', '$2y$10$5RdLXWWgjHsFok9wk43EYuvNOKN9pho5o7SPvdEmaM1LZCM3.BkRq', '2022-11-26 20:10:34', '2022-11-26 20:10:34'),
(30, 'kharismaa@gmail.com', '$2y$10$vOXQxf5vrPQjAMGL0Z6mEe5hjYExjTo2UlpbiMI5WqLUmNZBZfpl2', '2022-11-26 20:13:58', '2022-11-26 20:13:58'),
(32, 'kharismaaa@gmail.com', '$2y$10$WQmqy3Rk12LlfQos3Ud/TuYym/kQkgw8Vxe50GLYTPVkaQ7pw1tk2', '2022-11-26 20:17:01', '2022-11-26 20:17:01'),
(33, 'dunia@gmail', '$2y$10$agDn3p2/Gek7xOCoEwCxoO.Uk9.kv02BBtWRuyF2njTBoia.bvN7e', '2022-11-30 08:21:02', '2022-11-30 08:21:02');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `category_articles`
--
ALTER TABLE `category_articles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`) USING BTREE,
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`) USING BTREE;

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `tb_user_email_unique` (`email`) USING BTREE,
  ADD UNIQUE KEY `tb_user_password_unique` (`password`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `category_articles`
--
ALTER TABLE `category_articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
