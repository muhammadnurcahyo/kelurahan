/*
 Navicat Premium Data Transfer

 Source Server         : MYSQL LOCAL
 Source Server Type    : MySQL
 Source Server Version : 50736
 Source Host           : 127.0.0.1:3306
 Source Schema         : kelurahan_v1_db_tmp

 Target Server Type    : MySQL
 Target Server Version : 50736
 File Encoding         : 65001

 Date: 19/04/2022 00:51:46
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for abouts
-- ----------------------------
DROP TABLE IF EXISTS `abouts`;
CREATE TABLE `abouts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of abouts
-- ----------------------------
BEGIN;
INSERT INTO `abouts` VALUES (5, 'Visi Misi', 'visi-misi', '<h3><strong>Visi :</strong></h3>\r\n<p class=\"MsoNoSpacing\" style=\"margin-left: 21.3pt; text-indent: -.25in; mso-list: l0 level1 lfo1;\"><span lang=\"IN\">Visi BUMDesa &ldquo;LUHUR SEMBADA&rdquo; adalah Menjadi Badan Usaha Milik Desa yang Sejahtera dan Mandiri.</span></p>\r\n<p class=\"MsoNoSpacing\" style=\"margin-left: 21.3pt; text-indent: -.25in; mso-list: l0 level1 lfo1;\">&nbsp;</p>\r\n<h3><strong>Misi :</strong></h3>\r\n<p class=\"MsoNoSpacing\" style=\"margin-left: 21.3pt; text-indent: -0.25in;\"><span lang=\"IN\" style=\"font-family: Symbol;\"><span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \'Times New Roman\';\">&nbsp; &nbsp;&nbsp;&nbsp;</span></span><span lang=\"IN\">Misi BUMDesa &ldquo;LUHUR SEMBADA&rdquo; adalah :</span></p>\r\n<p class=\"MsoNoSpacing\" style=\"margin-left: 21.3pt;\"><span lang=\"IN\">a)&nbsp;&nbsp;&nbsp;Menggali potensi yang ada di desa untuk didayagunakan;</span></p>\r\n<p class=\"MsoNoSpacing\" style=\"margin-left: 21.3pt;\"><span lang=\"IN\">b)&nbsp;&nbsp;Meningkatkan perekonomian desa;</span></p>\r\n<p class=\"MsoNoSpacing\" style=\"margin-left: 21.3pt;\"><span lang=\"IN\">c)&nbsp;&nbsp;&nbsp;Menciptakan lapangan kerja bagi warga masyarakat desa;</span></p>\r\n<p class=\"MsoNoSpacing\" style=\"margin-left: 21.3pt;\"><span lang=\"IN\">d)&nbsp;&nbsp;Memberikan dan meningkatkan pelayananan kepada masyarakat;</span></p>\r\n<p class=\"MsoNoSpacing\" style=\"margin-left: 21.3pt;\"><span lang=\"IN\">e)&nbsp;&nbsp;Membuka peluang wirausaha bagi warga masyarakat desa;</span></p>\r\n<p class=\"MsoNoSpacing\" style=\"margin-left: 21.3pt;\"><span lang=\"IN\">f)&nbsp;&nbsp;&nbsp;Meningkatkan kesejahteraan masyarakat;</span></p>\r\n<p class=\"MsoNoSpacing\" style=\"margin-left: 21.3pt;\"><span lang=\"IN\">g)&nbsp;&nbsp;&nbsp;Meningkatkan perekonomian desa.</span></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', 'unitt_1634466103.jpg', '2021-09-07 20:19:53', '2021-10-17 10:25:30');
INSERT INTO `abouts` VALUES (6, 'Sejarah BUMDesa', 'sejarah-bumdes', '<p class=\"MsoNoSpacing\" style=\"text-align: justify; text-indent: 0.5in;\"><span lang=\"IN\">Berdasarkan Perdes Sidoluhur Nomor: 05 Tahun 2018 (Tentang Pembentukan BUMDes LUHUR SEMBADA) Pemerintah Kalurahan Sidoluhur mendirikan Badan Usaha Milik Desa (BUMDesa) dalam upaya pemberdayaan, pengembangan ekonomi masyarakat dan pembangunan desa sesuai kebutuhan dan potensi desa. Lembaga ini bernama Badan Usaha Milik Desa &ldquo;LUHUR SEMBADA&rdquo; (BUMDes &ldquo;LUHUR SEMBADA&rdquo;) berdiri pada tanggal 14 November 2018. Daerah kerja BUMDes &ldquo;LUHUR SEMBADA&rdquo; berada di wilayah Kalurahan Sidoluhur, Kapanewon Godean, Kabupaten Sleman, Daerah Istimewa Yogyakarta.</span></p>\r\n<p class=\"MsoNoSpacing\" style=\"text-align: justify; text-indent: 0.5in;\"><span lang=\"IN\">BUMDes &ldquo;LUHUR SEMBADA&rdquo; didirikan / berfungsi Lembaga Ekonomi Desa yang mengembangkan berbagai usaha untuk mewujudkan kesejahteraan warga masyarakat Kalurahan Sidoluhur melalui usaha pengembangan ekonomi produktif, industri kecil dan menengah, perikanan, pertanian dan perkebunan, sektor jasa, pengelolaan sampah serta lainnya.</span></p>\r\n<div class=\"MsoNoSpacing\" style=\"text-align: justify; text-indent: 0.5in;\"><span lang=\"IN\">Tujuan mulia BUMDes &ldquo;LUHUR SEMBADA&rdquo; yaitu</span></div>\r\n<div class=\"MsoNoSpacing\" style=\"text-indent: 0.5in; text-align: left;\"><span lang=\"IN\">a) Meningkatkan perekonomian desa;</span></div>\r\n<div class=\"MsoNoSpacing\" style=\"text-indent: 0.5in; text-align: left;\"><span lang=\"IN\">b) Mengoptimalkan aset desa agar bermanfaat untuk kesejahteraan desa;</span></div>\r\n<div class=\"MsoNoSpacing\" style=\"text-indent: 0.5in; text-align: left;\"><span lang=\"IN\">c) Meningkatkan usaha masyarakat dalam pengelolahan potensi ekonomi desa;&nbsp;&nbsp;&nbsp;&nbsp;</span></div>\r\n<div class=\"MsoNoSpacing\" style=\"text-indent: 0.5in; text-align: left;\"><span lang=\"IN\">d) Mengembangkan rencana kerja sama usaha antar desa dan/atau dengan pihak ketiga;</span></div>\r\n<div class=\"MsoNoSpacing\" style=\"text-indent: 0.5in; text-align: left;\"><span lang=\"IN\">e)Menciptakan peluang dan jaringan pasar yang mendukung kebutuhan layanan umum warga;</span></div>\r\n<div class=\"MsoNoSpacing\" style=\"text-indent: 0.5in; text-align: left;\"><span lang=\"IN\">f) Membuka lapangan kerja;</span></div>\r\n<div class=\"MsoNoSpacing\" style=\"text-indent: 0.5in; text-align: left;\"><span lang=\"IN\">g)Meningkatkan kesejahteraan masyarakat melalui perbaikan pelayanan umum, pertumbuhan dan pemerataan ekonomi desa;</span></div>\r\n<div class=\"MsoNoSpacing\" style=\"text-indent: 0.5in; text-align: left;\"><span lang=\"IN\">h) dan Meningkatkan pendapatan masyarakat desa dan Pendapatan Asli Desa.</span></div>\r\n<div style=\"text-align: left;\">&nbsp;</div>\r\n<div style=\"text-align: left;\">&nbsp;</div>\r\n<div style=\"text-align: left;\">\r\n<p class=\"MsoNoSpacing\" style=\"text-align: center;\" align=\"center\"><strong><span lang=\"IN\" style=\"mso-ansi-language: IN;\">Arti dan filosofi Logo BUMDes &ldquo;LUHUR SEMBADA&rdquo;</span><span lang=\"IN\" style=\"mso-ansi-language: IN;\"> </span></strong></p>\r\n<p class=\"MsoNoSpacing\" style=\"text-align: justify;\"><strong><span lang=\"IN\">a. PADI KAPAS</span></strong></p>\r\n<p class=\"MsoNoSpacing\" style=\"margin-left: 14.2pt; text-align: justify;\"><span lang=\"IN\">Merupakan kebutuhan dasar setiap manusia, yakni Pangan dan Sandang sabagai syarat utama untuk mencapai kemakmuran. Padi kapas bermakna merupakan cita-cita tercukupinya kebutuhan Pangan dan Sandang, dan kebutuhan sekunder lainnya untuk seluruh warga.</span></p>\r\n<p class=\"MsoNoSpacing\" style=\"text-align: justify;\"><strong><span lang=\"IN\">b. LUHUR</span></strong></p>\r\n<p class=\"MsoNoSpacing\" style=\"margin-left: 14.2pt;\"><span lang=\"IN\">Luhur berarti Tinggi atau Mulia. Luhur bermakna cita-cita yang tinggi atau mulia.</span></p>\r\n<p class=\"MsoNoSpacing\"><strong><span lang=\"IN\">c.&nbsp;</span></strong><strong style=\"text-align: justify; text-indent: -0.25in;\"><span lang=\"IN\">SEMBADA</span></strong></p>\r\n<p class=\"MsoNoSpacing\" style=\"margin-left: 14.2pt;\"><span lang=\"IN\">Sembada berarti serba cukup, atau kuat dengan kekuatan sendiri, patut, pantas dan cocok. Sembada bermakna Mandiri.</span></p>\r\n<p class=\"MsoNoSpacing\" style=\"margin-left: 14.2pt;\">&nbsp;</p>\r\n<p class=\"MsoNoSpacing\" style=\"margin-left: 14.2pt; text-align: center;\" align=\"center\"><strong style=\"mso-bidi-font-weight: normal;\"><span lang=\"IN\" style=\"mso-ansi-language: IN;\">UNIT USAHA BUMDes LUHUR SEMBADA</span></strong></p>\r\n<p class=\"MsoNoSpacing\" style=\"margin-left: 14.2pt; text-align: justify;\"><span lang=\"IN\" style=\"mso-ansi-language: IN;\">Kegiatan<span style=\"mso-spacerun: yes;\">&nbsp; </span>unit<span style=\"mso-spacerun: yes;\">&nbsp; </span>usaha<span style=\"mso-spacerun: yes;\">&nbsp; </span>BUMDes &ldquo;LUHUR SEMBADA&rdquo; sesuai potensi yang ada di wilayah Kalurahan Sidoluhur</span></p>\r\n</div>\r\n<div style=\"text-align: left;\">\r\n<p class=\"MsoNoSpacing\" style=\"text-align: justify;\"><strong><span lang=\"IN\">a. </span></strong><strong style=\"text-indent: -0.25in;\"><span lang=\"IN\"><span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \'Times New Roman\';\">&nbsp;</span></span></strong><strong style=\"text-indent: -0.25in;\"><span lang=\"IN\">Unit Usaha Perdagangan (Pupuk Non Subsidi)</span></strong></p>\r\n<p class=\"MsoNoSpacing\" style=\"margin-left: 14.2pt; text-align: justify;\"><span style=\"text-align: justify; font-size: 12pt;\">Bisnis yang berproduksi dan/atau berdagang (<em>trading</em>) barang-barang </span><span lang=\"IN\" style=\"text-align: justify; font-size: 12pt;\">produksi pertanian terutama aneka macam Pupuk Non Subsidi</span><span style=\"text-align: justify; font-size: 12pt;\"> untuk memenuhi kebutuhan </span><span lang=\"IN\" style=\"text-align: justify; font-size: 12pt;\">sarana pertanian </span><span style=\"text-align: justify; font-size: 12pt;\">masyarakat </span><span lang=\"IN\" style=\"text-align: justify; font-size: 12pt;\">Kalurahan Sidoluhur </span><span style=\"text-align: justify; font-size: 12pt;\">maupun dipasarkan pada skala pasar yang lebih luas</span><span lang=\"IN\" style=\"text-align: justify; font-size: 12pt;\">.</span></p>\r\n<p class=\"MsoNoSpacing\" style=\"text-align: justify;\"><strong><span lang=\"IN\">b. </span></strong><strong style=\"text-align: justify; text-indent: -0.25in;\"><span lang=\"IN\"><span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \'Times New Roman\';\">&nbsp;</span></span></strong><strong style=\"text-align: justify; text-indent: -0.25in;\"><span lang=\"IN\">Unit Usaha Pengelolaan Sampah&nbsp;</span></strong></p>\r\n<p class=\"MsoNoSpacing\" style=\"margin-left: 14.2pt; text-align: justify;\"><span style=\"font-size: 12pt;\">Usaha perantara (<em>brokering</em>) yang memberikan jasa pelayanan kepada warga</span><span lang=\"IN\" style=\"font-size: 12pt;\"> Sidoluhur melalui Unit usaha jasa pengelolaan dan atau pengangkutan (kolektif) sampah rumah tangga, kantor, warung, penginapan (kontrakan / kamar kos). Unit usaha ini merupakan perpanjangan tangan pemerintah Kalurahan Sidoluhur dalam memberikan solusi aktif (setelah himbauan-himbauan / larangan) dalam rangka penanggulangan masalah sampah yang akan menimbulkan gangguan lingkungan ataupun masalah sosial.</span></p>\r\n<p class=\"MsoNoSpacing\" style=\"text-align: justify;\"><strong><span lang=\"IN\">c. </span></strong><strong style=\"text-align: justify; text-indent: -0.25in;\"><span lang=\"IN\"><span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \'Times New Roman\';\">&nbsp;</span></span></strong><strong style=\"text-align: justify; text-indent: -0.25in;\"><span lang=\"IN\">Unit Usaha Jasa Boga / Catering Service</span></strong></p>\r\n<p class=\"MsoNoSpacing\" style=\"margin-left: 14.2pt; text-align: justify;\"><span style=\"text-align: justify;\">Kegiatan usaha yang mengkonsolidasikan</span><span lang=\"IN\" style=\"text-align: justify;\"> potensi-potensi /</span><span style=\"text-align: justify;\"> jenis usaha lokal </span><span lang=\"IN\" style=\"text-align: justify;\">(UMKM) dibidang boga (aneka kuliner masakan) yang ada di 15 padukuhan seluruh Sidoluhur</span><span style=\"text-align: justify;\"> untuk melayani </span><span lang=\"IN\" style=\"text-align: justify;\">kebutuhan </span><span style=\"text-align: justify;\">konsumsi acara-acara</span><span lang=\"IN\" style=\"text-align: justify;\"> kegiatan</span><span style=\"text-align: justify;\"> pemerintah </span><span lang=\"IN\" style=\"text-align: justify;\">Kalurahan Sidoluhur </span><span style=\"text-align: justify; font-size: 12pt;\">maupun </span><span lang=\"IN\" style=\"text-align: justify; font-size: 12pt;\">kedepannya </span><span style=\"text-align: justify; font-size: 12pt;\">dipasarkan pada skala pasar yang lebih luas</span><span lang=\"IN\" style=\"text-align: justify; font-size: 12pt;\">. Harapannya melalui unit usaha ini, BUMDes LUHUR SEMBADA maju berkembang bersama UMKM boga yang ada di Sidoluhur.</span></p>\r\n<p class=\"MsoNoSpacing\" style=\"text-align: justify;\">&nbsp;</p>\r\n</div>', 'imgonline-com-ua-CompressToSize-hhoM8wb8vbkfWiw_1634466955.jpg', '2021-09-07 20:19:53', '2021-10-18 13:57:42');
INSERT INTO `abouts` VALUES (7, 'Struktur Organisasi', 'struktur-organisasi', '<p class=\"MsoListParagraphCxSpFirst\" style=\"text-indent: -.25in; mso-list: l0 level1 lfo1;\"><!-- [if !supportLists]--><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-fareast-font-family: Cambria; mso-bidi-font-family: Cambria; mso-ansi-language: IN;\"><span style=\"mso-list: Ignore;\">1.<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-ansi-language: IN;\">Penasehat<span style=\"mso-tab-count: 1;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>:</span><span style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-ansi-language: EN-US;\"> HERNAWAN ZUDANTO, S.E.</span></p>\r\n<p class=\"MsoListParagraphCxSpLast\" style=\"margin-bottom: 0in; mso-add-space: auto; text-indent: -.25in; mso-list: l0 level1 lfo1;\"><!-- [if !supportLists]--><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-fareast-font-family: Cambria; mso-bidi-font-family: Cambria; mso-ansi-language: IN;\"><span style=\"mso-list: Ignore;\">2.<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-ansi-language: IN;\">Pengawas<span style=\"mso-tab-count: 1;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>:</span><span style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-ansi-language: EN-US;\"> dr. SALMAN SANTOSA (Ketua)</span></p>\r\n<p class=\"MsoListParagraphCxSpLast\" style=\"margin-bottom: 0in; mso-add-space: auto; text-indent: -.25in; mso-list: l0 level1 lfo1;\"><span style=\"font-size: 12.0pt; font-family: \'Cambria\',serif; mso-ansi-language: EN-US;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ESTI NURYANI, S.E. </span></p>\r\n<p class=\"MsoListParagraphCxSpLast\" style=\"margin-bottom: 0in; mso-add-space: auto; text-indent: -.25in; mso-list: l0 level1 lfo1;\"><span style=\"font-size: 12.0pt; font-family: \'Cambria\',serif; mso-ansi-language: EN-US;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Drs. SUKARDI, M.Si.</span></p>\r\n<p class=\"MsoListParagraphCxSpFirst\" style=\"text-indent: -.25in; mso-list: l0 level1 lfo1;\"><!-- [if !supportLists]--><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-fareast-font-family: Cambria; mso-bidi-font-family: Cambria; mso-ansi-language: IN;\"><span style=\"mso-list: Ignore;\">3.<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-ansi-language: IN;\">Direktur<span style=\"mso-tab-count: 1;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>:</span><span style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-ansi-language: EN-US;\"> Ir. HARJANTO</span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent: -.25in; mso-list: l0 level1 lfo1;\"><!-- [if !supportLists]--><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-fareast-font-family: Cambria; mso-bidi-font-family: Cambria; mso-ansi-language: IN;\"><span style=\"mso-list: Ignore;\">4.<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-ansi-language: IN;\">Sekre</span><span style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-ansi-language: EN-US;\">tar</span><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-ansi-language: IN;\">is<span style=\"mso-tab-count: 1;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>:</span><span style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-ansi-language: EN-US;\"> PUTUT PURNAWANTO, A.Md.</span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent: -.25in; mso-list: l0 level1 lfo1;\"><!-- [if !supportLists]--><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-fareast-font-family: Cambria; mso-bidi-font-family: Cambria; mso-ansi-language: IN;\"><span style=\"mso-list: Ignore;\">5.<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-ansi-language: IN;\">Bendahara<span style=\"mso-tab-count: 1;\">&nbsp;&nbsp;&nbsp;&nbsp; </span>:</span><span style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-ansi-language: EN-US;\"> DIAN PANGESTU DASAYANTI, S.E.</span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent: -.25in; mso-list: l0 level1 lfo1;\"><!-- [if !supportLists]--><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-fareast-font-family: Cambria; mso-bidi-font-family: Cambria; mso-ansi-language: IN;\"><span style=\"mso-list: Ignore;\">6.<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-ansi-language: IN;\">Ketua Unit<span style=\"mso-tab-count: 1;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>:</span><span style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-ansi-language: EN-US;\"> ANANG WISNU MARBANGUN</span></p>\r\n<p class=\"MsoListParagraphCxSpLast\" style=\"text-indent: -.25in; mso-list: l0 level1 lfo1;\"><!-- [if !supportLists]--><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-fareast-font-family: Cambria; mso-bidi-font-family: Cambria; mso-ansi-language: IN;\"><span style=\"mso-list: Ignore;\">7.<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-ansi-language: IN;\">Pegawai<span style=\"mso-tab-count: 1;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>:</span><span style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-ansi-language: EN-US;\"> SUGIHARTO</span><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-ansi-language: IN;\"> &amp; TIM PENGAMBIL</span><span style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-ansi-language: EN-US;\">, JUWAKIR, SU</span><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-ansi-language: IN;\">YA</span><span style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-ansi-language: EN-US;\">DI</span><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-ansi-language: IN;\">, RAJI</span></p>', 'imgonline-com-ua-resize-Usf44NgIcVIVh_1635194065.jpg', '2021-09-07 20:19:53', '2021-10-25 20:34:25');
COMMIT;

-- ----------------------------
-- Table structure for blogs
-- ----------------------------
DROP TABLE IF EXISTS `blogs`;
CREATE TABLE `blogs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) unsigned NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `blogs_category_index` (`category_id`),
  CONSTRAINT `blogs_category_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of blogs
-- ----------------------------
BEGIN;
INSERT INTO `blogs` VALUES (11, 'Pupuk UREA \"PETRO\"', 7, '<p>Pupuk UREA \"PETRO\" ini mempunyai berat bersih 50 Kg/Sak.</p>\r\n<p>Kandungan N (Nitrogen) didalamnya 46%.</p>\r\n<p><strong>Harga per Sak Rp300.000,-</strong></p>\r\n<p><strong>Harga ecer Rp6.000/Kg</strong></p>\r\n<p style=\"margin-bottom: 80px;\"><a href=\"https://wa.me/62895614609090?text=Hai%20BUMDesa,%20izin%20bertanya\" target=\"_blank\" rel=\"noopener\"><button class=\"btn btn-primary\"> Pesan Sekarang </button></a></p>', 'imgonline-com-ua-resize-lRfVFFnbhrCk7xo_1635190269.jpg', '2021-10-17 10:07:44', '2021-10-27 14:08:31', 'pupuk-urea-petro');
INSERT INTO `blogs` VALUES (12, 'Unit Usaha Pengelolaan Sampah / Pengambilan Sampah Kolektif', 1, '<p class=\"MsoNoSpacing\" style=\"text-align: justify;\"><span lang=\"EN-US\" style=\"font-size: 12.0pt; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin;\">Usaha perantara (<em>brokering</em>) yang memberikan jasa pelayanan kepada warga</span><span lang=\"IN\" style=\"font-size: 12.0pt; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; mso-ansi-language: IN;\"> Sidoluhur melalui Unit usaha jasa pengelolaan dan atau pengangkutan (kolektif) sampah rumah tangga, kantor, warung, penginapan (kontrakan / kamar kos). Unit usaha ini merupakan perpanjangan tangan Pemerintah Kalurahan Sidoluhur dalam memberikan solusi aktif (setelah himbauan-himbauan / larangan yang telah dilakukan) dalam rangka penanggulangan masalah sampah yang akan menimbulkan gangguan lingkungan ataupun masalah sosial.&nbsp;</span></p>\r\n<p class=\"MsoNoSpacing\" style=\"text-align: justify;\">&nbsp;</p>\r\n<p>&nbsp;</p>', 'imgonline-com-ua-CompressToSize-YAdybfu2ISUfPhc_1649908234.jpg', '2021-10-18 14:15:44', '2022-04-14 03:54:39', 'unit-usaha-pengelolaan-sampah-pengambilan-sampah-kolektif');
INSERT INTO `blogs` VALUES (16, 'Pupuk UREA \"MESTAC\"', 7, '<p>Pupuk UREA \"MESTAC\" ini mempunyai berat bersih 25 Kg/Sak.</p>\r\n<p>Kandungan N (Nitrogen) didalamnya 26%. Butiran besar (Granule) akan mempermudah dalam aplikasi penaburannya.</p>\r\n<p><strong>Harga per Sak Rp150.000,-</strong></p>\r\n<p><strong>Harga ecer Rp6.000/Kg</strong></p>\r\n<p style=\"margin-bottom: 80px;\"><a href=\"https://wa.me/62895614609090?text=Hai%20BUMDesa,%20izin%20bertanya\" target=\"_blank\" rel=\"noopener\"><button class=\"btn btn-primary\">Pesan Sekarang</button></a></p>', 'imgonline-com-ua-resize-9WJ2OQfE0Zxn_1635190636.jpg', '2021-10-25 19:37:16', '2021-10-27 14:10:07', 'pupuk-urea-mestac');
INSERT INTO `blogs` VALUES (17, 'Pupuk Organik \"PATIGAN\"', 7, '<p style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; background: #ffffff; line-height: 1.6; color: #5d5c5c; font-family: Poppins, sans-serif;\">Pupuk Organik \"PATIGAN\"&nbsp; ini mempunyai berat bersih 40 Kg/Sak.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; background: #ffffff; line-height: 1.6; color: #5d5c5c; font-family: Poppins, sans-serif;\">Mengandung arang aktif sebagai penambat N (Nitrogen). Super kompos ini berguna untuk memperbaiki struktur tanah. Sangat efektif jika dikombinasikan dengan Pupuk NPK. Pupuk PATIGAN ini sudah terdaftar di DEPTAN 02.03.2016.154</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; background: #ffffff; line-height: 1.6; color: #5d5c5c; font-family: Poppins, sans-serif;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; background: transparent; font-weight: bold;\">Harga per Sak Rp35.000,-</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; background: #ffffff; line-height: 1.6; color: #5d5c5c; font-family: Poppins, sans-serif;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; background: transparent; font-weight: bold;\">Harga ecer Rp - /Kg</span></p>', 'imgonline-com-ua-resize-zLV7IhlhJ0JCs9_1635191331.jpg', '2021-10-25 19:48:51', '2021-10-25 19:48:51', 'pupuk-organik-patigan');
INSERT INTO `blogs` VALUES (18, 'Pupuk NPK \"PELANGI\"', 7, '<p style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; background: #ffffff; line-height: 1.6; color: #5d5c5c; font-family: Poppins, sans-serif;\">Pupuk NPK \"PELANGI\"&nbsp; ini mempunyai berat bersih 20 Kg/Sak.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; background: #ffffff; line-height: 1.6; color: #5d5c5c; font-family: Poppins, sans-serif;\"><span style=\"background-color: transparent;\">Pupuk NPK 16 16 16 memiliki kandungan Hara 16% N, 16% P<sub>2</sub>O<sub>5</sub>, 16% K<sub>2</sub>O sehingga ini termasuk golongan pupuk komplit.</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; background: #ffffff; line-height: 1.6; color: #5d5c5c; font-family: Poppins, sans-serif;\"><span style=\"background-color: transparent; font-weight: bold;\">Harga per Sak Rp165.000,-</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; background: #ffffff; line-height: 1.6; color: #5d5c5c; font-family: Poppins, sans-serif;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; background: transparent; font-weight: bold;\">Harga ecer Rp 8.500 /Kg</span></p>', 'imgonline-com-ua-resize-VZjhEzIg07Ovc_1635192060.jpg', '2021-10-25 20:01:00', '2021-10-25 20:01:00', 'pupuk-npk-pelangi');
INSERT INTO `blogs` VALUES (19, 'Pupuk \"PHOSKA\"', 7, '<p style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; background: #ffffff; line-height: 1.6; color: #5d5c5c; font-family: Poppins, sans-serif;\">Pupuk \"PHOSKA\"&nbsp; ini mempunyai berat bersih 50 Kg/Sak.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; background: #ffffff; line-height: 1.6; color: #5d5c5c; font-family: Poppins, sans-serif;\">Butiran besar (Granule) berwarna merah. Mengandung MgO 15%, CaO 15%, CaCO3 15%</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; background: #ffffff; line-height: 1.6; color: #5d5c5c; font-family: Poppins, sans-serif;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; background: transparent; font-weight: bold;\">Harga per Sak Rp130.000,-</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; background: #ffffff; line-height: 1.6; color: #5d5c5c; font-family: Poppins, sans-serif;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; background: transparent; font-weight: bold;\">Harga ecer Rp 3.000/Kg</span></p>', 'imgonline-com-ua-resize-0xViDf4BdcnvZKn_1635192770.jpg', '2021-10-25 20:12:50', '2021-10-25 20:12:50', 'pupuk-phoska');
INSERT INTO `blogs` VALUES (20, 'Pupuk TSP \"LADANG SUBUR 36\"', 7, '<p style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; background: #ffffff; line-height: 1.6; color: #5d5c5c; font-family: Poppins, sans-serif;\"><strong>Pupuk TSP \"LADANG SUBUR 36\"&nbsp;</strong> ini mempunyai berat bersih 50 Kg/Sak.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; background: #ffffff; line-height: 1.6; color: #5d5c5c; font-family: Poppins, sans-serif;\">Butiran besar <em>(Granule)</em> berwarna abu-abu. Mengandung CaO 42,07%, MgO 19,88%, CaCO3 102,64%</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; background: #ffffff; line-height: 1.6; color: #5d5c5c; font-family: Poppins, sans-serif;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; background: transparent; font-weight: bold;\">Harga per Sak Rp110.000,-</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; background: #ffffff; line-height: 1.6; color: #5d5c5c; font-family: Poppins, sans-serif;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; background: transparent; font-weight: bold;\">Harga ecer Rp 3.000/Kg</span></p>', 'imgonline-com-ua-resize-RxQ8SsdpeN_1635193084.jpg', '2021-10-25 20:18:04', '2021-10-25 20:18:04', 'pupuk-tsp-ladang-subur-36');
INSERT INTO `blogs` VALUES (21, 'Air Minum Dalam Kemasan \"DAXU\"', 7, '<p><strong>Air Minum Dalam Kemasan \"DAXU\" </strong>berasal dari sumber air Kaliurang - Sleman Yogyakarta, diproduksi oleh PDAM Sleman. Seluruh produk DAXU ini sudah teruji kelayakaannya dan terjamin kualitasnya (BADAN POM RI 255212001058)</p>\r\n<p>Harga DAXU&nbsp;</p>\r\n<p>- 120ml Cup Kecil / Rp16.000 /Dus isi 45</p>\r\n<p>- 240ml Gelas (Cup) / Rp23.000 /Dus isi 48</p>\r\n<p>- 330ml Botol (Kecil) / Rp30.000 /Dus isi 24</p>\r\n<p>- 600ml Botol (Sedang) / Rp35.000 /Dus isi 24</p>', 'imgonline-com-ua-CompressToSize-SEli8ZjJEsjdeh_1649910105.jpg', '2021-10-25 20:30:23', '2022-04-14 04:21:45', 'air-minum-dalam-kemasan-daxu');
INSERT INTO `blogs` VALUES (22, 'Himbauan dari Direktur BUM Kalurahan \"LUHUR SEMBADA\" Sidoluhur', 8, '<p>Himbauan dari Direktur BUM kalurahan \"LUHUR SEMBADA\" Sidoluhur</p>\r\n<p>\".... meski sedang pandemi, jangan kendor tetap jalankan giat ekonomi produktif.\" Ir. HARJANTO (Direktur BUM kalurahan \"LUHUR SEMBADA\" Sidoluhur</p>', 'Giat Ekonomi Produktif oleh Ir. Harjanto_1635194781.jpg', '2021-10-25 20:46:21', '2022-04-14 05:52:35', 'himbauan-dari-direktur-bum-kalurahan-luhur-sembada-sidoluhur');
INSERT INTO `blogs` VALUES (23, 'BUMKal Luhur Sembada Sidoluhur Serahkan LPJ dan Proker ke Dinas PMK Sleman', 2, '<p>Jogjakeren.com &ndash; Badan Usaha Milik Kalurahan (BUMKal) Luhur Sembada, Sidoluhur, Godean, Sleman melalui Direktur Ir. Harjanto menyerahkan Laporan Pertanggungjawaban (LPJ) dan program kerja tahun 2022-2023 ke Dinas Pemberdayaan Masyarakat dan Kalurahan (PMK) Kabupaten Sleman, Kamis (31/3/2022). Penyerahan turut didampingi Sekretaris BUMKal Putut Purnawanto, A.Md. dan KaBag Unit Pengelolaan Sampah Anang Wisnu Marbangun. Sejak diberi amanah sebagai Direktur BUMKal pada Oktober 2020, ia bersama timnya berkesempatan untuk menyerahkan laporan tahunan tahun 2021, &ldquo;Alhamdulillah LPJ kami diterima dengan baik dari Dinas PMK Sleman,&rdquo; katanya. Sebelumnya, Pemerintah Kalurahan Sidoluhur menggelar musyawarah Kalurahan Sidoluhur yang membahas perkembangan BUMKal Luhur Sembada, Selasa (29/3/2022) lalu. Beberapa poin yang dibahas di antaranya laporan pertanggungjawaban pengelolaan BUM Desa Luhur Sembada tahun 2021, penyusunan rencana program kerja BUM Kalurahan Luhur Sembada Sidoluhur tahun 2022 dan penyusunan rancangan peraturan Kalurahan Sidoluhur tentang pendirian Badan Usaha Milik Kalurahan Luhur Sembada Sidoluhur. Diketahui, usaha BUM Desa Luhur Sembada terdiri dari unit usaha jasa boga/catering service, unit usaha perdagangan, unit usaha pengelolaan sampah, unit usaha pertanian dan perikanan, dan unit usaha jasa pembayaran.</p>\r\n<p><em>https://jogjakeren.com/bumkal-luhur-sembada-sidoluhur-serahkan-lpj-dan-proker-ke-dinas-pmk-sleman/</em></p>', 'imgonline-com-ua-CompressToSize-Aotq5dx4dKZxwN_1649911753.jpg', '2022-04-14 04:29:59', '2022-04-14 04:49:13', 'bumkal-luhur-sembada-sidoluhur-serahkan-lpj-dan-proker-ke-dinas-pmk-sleman');
COMMIT;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kind` enum('produk','lainya') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of categories
-- ----------------------------
BEGIN;
INSERT INTO `categories` VALUES (1, 'Unit Usaha Pengelolaan Sampah', 'unit-usaha-pengelolaan-sampah', 'produk', '2021-09-07 20:05:26', '2021-09-07 20:05:26');
INSERT INTO `categories` VALUES (2, 'Kegiatan BUMKal', 'kegiatan-bumkal', 'lainya', '2021-09-07 20:05:31', '2022-04-14 04:51:02');
INSERT INTO `categories` VALUES (6, 'Unit Usaha Jasa Boga', 'unit-usaha-jasa-boga', 'produk', '2021-10-17 09:29:25', '2021-10-17 09:29:25');
INSERT INTO `categories` VALUES (7, 'Unit Usaha Perdagangan', 'unit-usaha-perdagangan', 'produk', '2021-10-17 09:30:34', '2021-10-17 09:30:34');
INSERT INTO `categories` VALUES (8, 'Kegiatan yang akan datang', 'kegiatan-yang-akan-datang', 'lainya', '2021-10-17 09:36:10', '2021-10-17 09:36:10');
COMMIT;

-- ----------------------------
-- Table structure for comments
-- ----------------------------
DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `blog_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_id_blog_index` (`blog_id`),
  CONSTRAINT `comments_id_blog_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of comments
-- ----------------------------
BEGIN;
INSERT INTO `comments` VALUES (3, 11, 'AsepaGueks', '89238968225', 'I apologise, but, in my opinion, you are mistaken. Let\'s discuss. Write to me in PM. \r\nhttps://howyoutoknowa.online/map.php', '2022-03-09 05:32:21', '2022-03-09 05:32:21');
INSERT INTO `comments` VALUES (4, 11, 'AsepaGueks', '85986332237', 'Clearly, I thank for the information. \r\nhttps://howytooutoknowb.fun/map.php', '2022-03-09 11:23:19', '2022-03-09 11:23:19');
COMMIT;

-- ----------------------------
-- Table structure for displays
-- ----------------------------
DROP TABLE IF EXISTS `displays`;
CREATE TABLE `displays` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of displays
-- ----------------------------
BEGIN;
INSERT INTO `displays` VALUES (1, 'Luhur Sembada', 'Website Resmi BUM Kalurahan \"Luhur Sembada\" Sidoluhur yang memberikan tentang berita terbaru BUM Kalurahan \"Luhur Sembada\" Sidoluhur hari ini, Termasuk event/kegiatan, product, dan unit usahanya.', 'imgonline-com-ua-CompressToSize-cHXptN5QKhjmHd9u_logo.jpg', '2021-10-03 10:36:38', '2022-04-14 05:58:12');
COMMIT;

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for greets
-- ----------------------------
DROP TABLE IF EXISTS `greets`;
CREATE TABLE `greets` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `greeting` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of greets
-- ----------------------------
BEGIN;
INSERT INTO `greets` VALUES (1, 'Lurah', 'Hernawan Zudanto, S.E.', 'IMG-20211022-WA0001_kades.jpg', '<p class=\"MsoNormal\" style=\"text-align: justify;\"><span lang=\"IN\">Dengan adanya website di BUM Desa / BUM Kalurahan \"LUHUR SEMBADA\" ini, kami dari Pemerintah Kalurahan Sidoluhur sangat mendukung karena banyak memberikan Informasi dari kegiatan BUMDesa untuk khususnya bagi masyarakat Sidoluhur dan umumnya masyarakat luas. Selain itu dapat memberikan dampak positif demi kemajuan BUMDesa dan Pemerintah Kalurahan Sidoluhur. Keberadaan website agar dapat digunakan secara maksimal untuk mendukung kegiatan BUMDesa. </span></p>\r\n<p class=\"MsoNormal\" style=\"text-align: justify;\"><span lang=\"IN\">Semoga dapat bermanfaat.&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"text-align: justify;\"><span lang=\"IN\">Terima Kasih...</span></p>', '2021-10-03 10:29:37', '2022-04-14 05:53:32');
INSERT INTO `greets` VALUES (2, 'Direktur', 'Ir. HARJANTO', 'WhatsApp Image 2021-10-17 at 15.47.28_kades.jpeg', '<p class=\"MsoNormal\" style=\"text-align: justify;\"><span lang=\"IN\" style=\"mso-ansi-language: IN;\">Selamat datang di Website kami BUM Desa / BUM Kalurahan \"LUHUR SEMBADA\" Kalurahan Sidoluhur, Kapanewon Godean, Kabupaten Sleman, D.I.Yogyakarta. Website ini dimaksudkan sebagai sarana publikasi untuk memberikan informasi dan gambaran BUM Desa / BUM Kalurahan &ldquo;LUHUR SEMBADA&rdquo; kepada masyarakat. Melalui keberadaan website ini kiranya masyarakat dapat mengetahui seluruh informasi tentang kegiatan usaha, bidang usaha, serta produk dari BUMDesa&nbsp;</span>/ BUM Kalurahan&nbsp;&nbsp;&ldquo;LUHUR SEMBADA&rdquo;.</p>\r\n<p class=\"MsoNormal\" style=\"text-align: justify;\"><span lang=\"IN\" style=\"mso-ansi-language: IN;\">Kritik dan Saran terhadap kekurangan dan kesalahan yang ada sangat kami harapkan guna penyempurnaan website ini dimasa yang akan datang. Semoga website ini dapat memberikan manfaat bagi kita semua.</span></p>\r\n<p class=\"MsoNormal\" style=\"text-align: justify;\"><span lang=\"IN\" style=\"mso-ansi-language: IN;\">Terima kasih.</span></p>', '2021-10-03 10:29:37', '2022-04-14 05:54:46');
COMMIT;

-- ----------------------------
-- Table structure for messages
-- ----------------------------
DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `isread` enum('true','false') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of messages
-- ----------------------------
BEGIN;
INSERT INTO `messages` VALUES (1, 'mukhamad Mukhamad nur cahyo', 'muhammadnurcahyo24@gmail.com', '+62895388458497', 'coba gan', 'true', '2021-10-18 17:33:58', '2021-10-25 19:20:18');
INSERT INTO `messages` VALUES (41, 'Henrymex', 'sharif0011@yahoo.com', '89031938517', 'Only one click can grow up your money really fast. \r\nhttps://profit-gold-strategy.life/?u=bdlkd0x&o=x7t8nng', 'false', '2022-04-17 07:59:14', '2022-04-17 07:59:14');
INSERT INTO `messages` VALUES (42, 'Eric Jones', 'eric.jones.z.mail@gmail.com', '555-555-1212', 'My name’s Eric and I just came across your website - bumdesaluhursembada.com - in the search results.\r\n\r\nHere’s what that means to me…\r\n\r\nYour SEO’s working.\r\n\r\nYou’re getting eyeballs – mine at least.\r\n\r\nYour content’s pretty good, wouldn’t change a thing.\r\n\r\nBUT…\r\n\r\nEyeballs don’t pay the bills.\r\n\r\nCUSTOMERS do.\r\n\r\nAnd studies show that 7 out of 10 visitors to a site like bumdesaluhursembada.com will drop by, take a gander, and then head for the hills without doing anything else.\r\n\r\nIt’s like they never were even there.\r\n\r\nYou can fix this.\r\n\r\nYou can make it super-simple for them to raise their hand, say, “okay, let’s talk” without requiring them to even pull their cell phone from their pocket… thanks to Talk With Web Visitor.\r\n\r\nTalk With Web Visitor is a software widget that sits on your site, ready and waiting to capture any visitor’s Name, Email address and Phone Number.  It lets you know immediately – so you can talk to that lead immediately… without delay… BEFORE they head for those hills.\r\n  \r\nCLICK HERE https://jumboleadmagnet.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nNow it’s also true that when reaching out to hot leads, you MUST act fast – the difference between contacting someone within 5 minutes versus 30 minutes later is huge – like 100 times better!\r\n\r\nThat’s what makes our new SMS Text With Lead feature so powerful… you’ve got their phone number, so now you can start a text message (SMS) conversation with them… so even if they don’t take you up on your offer right away, you continue to text them new offers, new content, and new reasons to do business with you.\r\n\r\nThis could change everything for you and your business.\r\n\r\nCLICK HERE https://jumboleadmagnet.com to learn more about everything Talk With Web Visitor can do and start turing eyeballs into money.\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – you could be converting up to 100x more leads immediately!   \r\nIt even includes International Long Distance Calling. \r\nPaying customers are out there waiting. \r\nStarting connecting today by CLICKING HERE https://jumboleadmagnet.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://jumboleadmagnet.com/unsubscribe.aspx?d=bumdesaluhursembada.com', 'false', '2022-04-18 09:15:43', '2022-04-18 09:15:43');
COMMIT;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
BEGIN;
INSERT INTO `migrations` VALUES (33, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (34, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (35, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (36, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (37, '2021_08_27_231314_create_categories_table', 1);
INSERT INTO `migrations` VALUES (38, '2021_08_27_231351_create_sliders_table', 1);
INSERT INTO `migrations` VALUES (39, '2021_08_27_233155_create_blogs_table', 1);
INSERT INTO `migrations` VALUES (40, '2021_08_28_184220_create_abouts_table', 1);
INSERT INTO `migrations` VALUES (77, '2021_09_07_213625_create_comments_table', 2);
INSERT INTO `migrations` VALUES (78, '2021_09_16_084557_create_displays_table', 2);
INSERT INTO `migrations` VALUES (79, '2021_09_16_084744_create_socials_table', 2);
INSERT INTO `migrations` VALUES (80, '2021_09_17_221705_create_messages_table', 2);
INSERT INTO `migrations` VALUES (81, '2021_09_19_211100_create_greets_table', 2);
COMMIT;

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for sliders
-- ----------------------------
DROP TABLE IF EXISTS `sliders`;
CREATE TABLE `sliders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of sliders
-- ----------------------------
BEGIN;
INSERT INTO `sliders` VALUES (1, 'unitt_1634462695.jpg', 'Selamat Datang di BUMDesa Luhur Sembada', 'https://bumdesaluhursembada.com/about/5', '2021-09-07 20:06:39', '2021-10-21 14:26:15');
INSERT INTO `sliders` VALUES (4, 'imgonline-com-ua-CompressToSize-y3XVj2hMyL_1649908954.jpg', 'jangan kendor tetap jalankan giat ekonomi produktif', 'https://bumdesaluhursembada.com/berita/22', '2021-10-25 20:48:20', '2022-04-14 04:02:34');
COMMIT;

-- ----------------------------
-- Table structure for socials
-- ----------------------------
DROP TABLE IF EXISTS `socials`;
CREATE TABLE `socials` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of socials
-- ----------------------------
BEGIN;
INSERT INTO `socials` VALUES (1, 'fab fa-whatsapp', '0895614609090', 'https://wa.me/62895614609090?text=Hai%20BUMDesa,%20izin%20bertanya', '2021-10-18 14:00:13', '2021-10-22 03:54:52');
INSERT INTO `socials` VALUES (2, 'fas fa-envelope', 'bumdes.luhursembada@gmail.com', 'https://www.google.com/intl/id/gmail/about/#', '2021-10-18 14:01:13', '2021-10-18 14:01:13');
INSERT INTO `socials` VALUES (3, 'fab fa-facebook-f', 'BLS Sidoluhur', 'https://web.facebook.com/bls.sidoluhur', '2021-10-18 14:12:11', '2021-10-18 14:12:11');
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES (1, 'admin', '081704567543', 'Godean Sleman Yogyakarta', 'use_profile.png', 'email@tes.com', '2021-09-07 20:05:00', '$2y$10$Rt0uk4pjQJwgI5Nb5FceM.B232Aqyf/L/SO.JZsXIPGcOhTlSqmFC', NULL, '2021-09-07 20:05:00', '2021-10-22 04:38:04');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
