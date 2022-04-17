/*
 Navicat Premium Data Transfer

 Source Server         : MYSQL LOCAL
 Source Server Type    : MySQL
 Source Server Version : 50736
 Source Host           : 127.0.0.1:3306
 Source Schema         : kelurahan_v1_db

 Target Server Type    : MySQL
 Target Server Version : 50736
 File Encoding         : 65001

 Date: 18/04/2022 00:52:54
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of abouts
-- ----------------------------
BEGIN;
INSERT INTO `abouts` VALUES (1, 'Visi Misi', 'visi-misi', '<h3><strong>Visi :</strong></h3>\\r\\n<p class=\\\"MsoNoSpacing\\\" style=\\\"margin-left: 21.3pt; text-indent: -.25in; mso-list: l0 level1 lfo1;\\\"><span lang=\\\"IN\\\">Visi BUMDesa &ldquo;LUHUR SEMBADA&rdquo; adalah Menjadi Badan Usaha Milik Desa yang Sejahtera dan Mandiri.</span></p>\\r\\n<p class=\\\"MsoNoSpacing\\\" style=\\\"margin-left: 21.3pt; text-indent: -.25in; mso-list: l0 level1 lfo1;\\\">&nbsp;</p>\\r\\n<h3><strong>Misi :</strong></h3>\\r\\n<p class=\\\"MsoNoSpacing\\\" style=\\\"margin-left: 21.3pt; text-indent: -0.25in;\\\"><span lang=\\\"IN\\\" style=\\\"font-family: Symbol;\\\"><span style=\\\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \'Times New Roman\';\\\">&nbsp; &nbsp;&nbsp;&nbsp;</span></span><span lang=\\\"IN\\\">Misi BUMDesa &ldquo;LUHUR SEMBADA&rdquo; adalah :</span></p>\\r\\n<p class=\\\"MsoNoSpacing\\\" style=\\\"margin-left: 21.3pt;\\\"><span lang=\\\"IN\\\">a)&nbsp;&nbsp;&nbsp;Menggali potensi yang ada di desa untuk didayagunakan;</span></p>\\r\\n<p class=\\\"MsoNoSpacing\\\" style=\\\"margin-left: 21.3pt;\\\"><span lang=\\\"IN\\\">b)&nbsp;&nbsp;Meningkatkan perekonomian desa;</span></p>\\r\\n<p class=\\\"MsoNoSpacing\\\" style=\\\"margin-left: 21.3pt;\\\"><span lang=\\\"IN\\\">c)&nbsp;&nbsp;&nbsp;Menciptakan lapangan kerja bagi warga masyarakat desa;</span></p>\\r\\n<p class=\\\"MsoNoSpacing\\\" style=\\\"margin-left: 21.3pt;\\\"><span lang=\\\"IN\\\">d)&nbsp;&nbsp;Memberikan dan meningkatkan pelayananan kepada masyarakat;</span></p>\\r\\n<p class=\\\"MsoNoSpacing\\\" style=\\\"margin-left: 21.3pt;\\\"><span lang=\\\"IN\\\">e)&nbsp;&nbsp;Membuka peluang wirausaha bagi warga masyarakat desa;</span></p>\\r\\n<p class=\\\"MsoNoSpacing\\\" style=\\\"margin-left: 21.3pt;\\\"><span lang=\\\"IN\\\">f)&nbsp;&nbsp;&nbsp;Meningkatkan kesejahteraan masyarakat;</span></p>\\r\\n<p class=\\\"MsoNoSpacing\\\" style=\\\"margin-left: 21.3pt;\\\"><span lang=\\\"IN\\\">g)&nbsp;&nbsp;&nbsp;Meningkatkan perekonomian desa.</span></p>\\r\\n<p>&nbsp;</p>\\r\\n<p>&nbsp;</p>', 'unitt_1634466103.jpg', '2022-04-17 17:49:07', '2022-04-17 17:49:07');
INSERT INTO `abouts` VALUES (2, 'Sejarah BUMDesa', 'sejarah-bumdesa', '<p class=\\\"MsoNoSpacing\\\" style=\\\"text-align: justify; text-indent: 0.5in;\\\"><span lang=\\\"IN\\\">Berdasarkan Perdes Sidoluhur Nomor: 05 Tahun 2018 (Tentang Pembentukan BUMDes LUHUR SEMBADA) Pemerintah Kalurahan Sidoluhur mendirikan Badan Usaha Milik Desa (BUMDesa) dalam upaya pemberdayaan, pengembangan ekonomi masyarakat dan pembangunan desa sesuai kebutuhan dan potensi desa. Lembaga ini bernama Badan Usaha Milik Desa &ldquo;LUHUR SEMBADA&rdquo; (BUMDes &ldquo;LUHUR SEMBADA&rdquo;) berdiri pada tanggal 14 November 2018. Daerah kerja BUMDes &ldquo;LUHUR SEMBADA&rdquo; berada di wilayah Kalurahan Sidoluhur, Kapanewon Godean, Kabupaten Sleman, Daerah Istimewa Yogyakarta.</span></p>\\r\\n<p class=\\\"MsoNoSpacing\\\" style=\\\"text-align: justify; text-indent: 0.5in;\\\"><span lang=\\\"IN\\\">BUMDes &ldquo;LUHUR SEMBADA&rdquo; didirikan / berfungsi Lembaga Ekonomi Desa yang mengembangkan berbagai usaha untuk mewujudkan kesejahteraan warga masyarakat Kalurahan Sidoluhur melalui usaha pengembangan ekonomi produktif, industri kecil dan menengah, perikanan, pertanian dan perkebunan, sektor jasa, pengelolaan sampah serta lainnya.</span></p>\\r\\n<div class=\\\"MsoNoSpacing\\\" style=\\\"text-align: justify; text-indent: 0.5in;\\\"><span lang=\\\"IN\\\">Tujuan mulia BUMDes &ldquo;LUHUR SEMBADA&rdquo; yaitu</span></div>\\r\\n<div class=\\\"MsoNoSpacing\\\" style=\\\"text-indent: 0.5in; text-align: left;\\\"><span lang=\\\"IN\\\">a) Meningkatkan perekonomian desa;</span></div>\\r\\n<div class=\\\"MsoNoSpacing\\\" style=\\\"text-indent: 0.5in; text-align: left;\\\"><span lang=\\\"IN\\\">b) Mengoptimalkan aset desa agar bermanfaat untuk kesejahteraan desa;</span></div>\\r\\n<div class=\\\"MsoNoSpacing\\\" style=\\\"text-indent: 0.5in; text-align: left;\\\"><span lang=\\\"IN\\\">c) Meningkatkan usaha masyarakat dalam pengelolahan potensi ekonomi desa;&nbsp;&nbsp;&nbsp;&nbsp;</span></div>\\r\\n<div class=\\\"MsoNoSpacing\\\" style=\\\"text-indent: 0.5in; text-align: left;\\\"><span lang=\\\"IN\\\">d) Mengembangkan rencana kerja sama usaha antar desa dan/atau dengan pihak ketiga;</span></div>\\r\\n<div class=\\\"MsoNoSpacing\\\" style=\\\"text-indent: 0.5in; text-align: left;\\\"><span lang=\\\"IN\\\">e)Menciptakan peluang dan jaringan pasar yang mendukung kebutuhan layanan umum warga;</span></div>\\r\\n<div class=\\\"MsoNoSpacing\\\" style=\\\"text-indent: 0.5in; text-align: left;\\\"><span lang=\\\"IN\\\">f) Membuka lapangan kerja;</span></div>\\r\\n<div class=\\\"MsoNoSpacing\\\" style=\\\"text-indent: 0.5in; text-align: left;\\\"><span lang=\\\"IN\\\">g)Meningkatkan kesejahteraan masyarakat melalui perbaikan pelayanan umum, pertumbuhan dan pemerataan ekonomi desa;</span></div>\\r\\n<div class=\\\"MsoNoSpacing\\\" style=\\\"text-indent: 0.5in; text-align: left;\\\"><span lang=\\\"IN\\\">h) dan Meningkatkan pendapatan masyarakat desa dan Pendapatan Asli Desa.</span></div>\\r\\n<div style=\\\"text-align: left;\\\">&nbsp;</div>\\r\\n<div style=\\\"text-align: left;\\\">&nbsp;</div>\\r\\n<div style=\\\"text-align: left;\\\">\\r\\n<p class=\\\"MsoNoSpacing\\\" style=\\\"text-align: center;\\\" align=\\\"center\\\"><strong><span lang=\\\"IN\\\" style=\\\"mso-ansi-language: IN;\\\">Arti dan filosofi Logo BUMDes &ldquo;LUHUR SEMBADA&rdquo;</span><span lang=\\\"IN\\\" style=\\\"mso-ansi-language: IN;\\\"> </span></strong></p>\\r\\n<p class=\\\"MsoNoSpacing\\\" style=\\\"text-align: justify;\\\"><strong><span lang=\\\"IN\\\">a. PADI KAPAS</span></strong></p>\\r\\n<p class=\\\"MsoNoSpacing\\\" style=\\\"margin-left: 14.2pt; text-align: justify;\\\"><span lang=\\\"IN\\\">Merupakan kebutuhan dasar setiap manusia, yakni Pangan dan Sandang sabagai syarat utama untuk mencapai kemakmuran. Padi kapas bermakna merupakan cita-cita tercukupinya kebutuhan Pangan dan Sandang, dan kebutuhan sekunder lainnya untuk seluruh warga.</span></p>\\r\\n<p class=\\\"MsoNoSpacing\\\" style=\\\"text-align: justify;\\\"><strong><span lang=\\\"IN\\\">b. LUHUR</span></strong></p>\\r\\n<p class=\\\"MsoNoSpacing\\\" style=\\\"margin-left: 14.2pt;\\\"><span lang=\\\"IN\\\">Luhur berarti Tinggi atau Mulia. Luhur bermakna cita-cita yang tinggi atau mulia.</span></p>\\r\\n<p class=\\\"MsoNoSpacing\\\"><strong><span lang=\\\"IN\\\">c.&nbsp;</span></strong><strong style=\\\"text-align: justify; text-indent: -0.25in;\\\"><span lang=\\\"IN\\\">SEMBADA</span></strong></p>\\r\\n<p class=\\\"MsoNoSpacing\\\" style=\\\"margin-left: 14.2pt;\\\"><span lang=\\\"IN\\\">Sembada berarti serba cukup, atau kuat dengan kekuatan sendiri, patut, pantas dan cocok. Sembada bermakna Mandiri.</span></p>\\r\\n<p class=\\\"MsoNoSpacing\\\" style=\\\"margin-left: 14.2pt;\\\">&nbsp;</p>\\r\\n<p class=\\\"MsoNoSpacing\\\" style=\\\"margin-left: 14.2pt; text-align: center;\\\" align=\\\"center\\\"><strong style=\\\"mso-bidi-font-weight: normal;\\\"><span lang=\\\"IN\\\" style=\\\"mso-ansi-language: IN;\\\">UNIT USAHA BUMDes LUHUR SEMBADA</span></strong></p>\\r\\n<p class=\\\"MsoNoSpacing\\\" style=\\\"margin-left: 14.2pt; text-align: justify;\\\"><span lang=\\\"IN\\\" style=\\\"mso-ansi-language: IN;\\\">Kegiatan<span style=\\\"mso-spacerun: yes;\\\">&nbsp; </span>unit<span style=\\\"mso-spacerun: yes;\\\">&nbsp; </span>usaha<span style=\\\"mso-spacerun: yes;\\\">&nbsp; </span>BUMDes &ldquo;LUHUR SEMBADA&rdquo; sesuai potensi yang ada di wilayah Kalurahan Sidoluhur</span></p>\\r\\n</div>\\r\\n<div style=\\\"text-align: left;\\\">\\r\\n<p class=\\\"MsoNoSpacing\\\" style=\\\"text-align: justify;\\\"><strong><span lang=\\\"IN\\\">a. </span></strong><strong style=\\\"text-indent: -0.25in;\\\"><span lang=\\\"IN\\\"><span style=\\\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \'Times New Roman\';\\\">&nbsp;</span></span></strong><strong style=\\\"text-indent: -0.25in;\\\"><span lang=\\\"IN\\\">Unit Usaha Perdagangan (Pupuk Non Subsidi)</span></strong></p>\\r\\n<p class=\\\"MsoNoSpacing\\\" style=\\\"margin-left: 14.2pt; text-align: justify;\\\"><span style=\\\"text-align: justify; font-size: 12pt;\\\">Bisnis yang berproduksi dan/atau berdagang (<em>trading</em>) barang-barang </span><span lang=\\\"IN\\\" style=\\\"text-align: justify; font-size: 12pt;\\\">produksi pertanian terutama aneka macam Pupuk Non Subsidi</span><span style=\\\"text-align: justify; font-size: 12pt;\\\"> untuk memenuhi kebutuhan </span><span lang=\\\"IN\\\" style=\\\"text-align: justify; font-size: 12pt;\\\">sarana pertanian </span><span style=\\\"text-align: justify; font-size: 12pt;\\\">masyarakat </span><span lang=\\\"IN\\\" style=\\\"text-align: justify; font-size: 12pt;\\\">Kalurahan Sidoluhur </span><span style=\\\"text-align: justify; font-size: 12pt;\\\">maupun dipasarkan pada skala pasar yang lebih luas</span><span lang=\\\"IN\\\" style=\\\"text-align: justify; font-size: 12pt;\\\">.</span></p>\\r\\n<p class=\\\"MsoNoSpacing\\\" style=\\\"text-align: justify;\\\"><strong><span lang=\\\"IN\\\">b. </span></strong><strong style=\\\"text-align: justify; text-indent: -0.25in;\\\"><span lang=\\\"IN\\\"><span style=\\\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \'Times New Roman\';\\\">&nbsp;</span></span></strong><strong style=\\\"text-align: justify; text-indent: -0.25in;\\\"><span lang=\\\"IN\\\">Unit Usaha Pengelolaan Sampah&nbsp;</span></strong></p>\\r\\n<p class=\\\"MsoNoSpacing\\\" style=\\\"margin-left: 14.2pt; text-align: justify;\\\"><span style=\\\"font-size: 12pt;\\\">Usaha perantara (<em>brokering</em>) yang memberikan jasa pelayanan kepada warga</span><span lang=\\\"IN\\\" style=\\\"font-size: 12pt;\\\"> Sidoluhur melalui Unit usaha jasa pengelolaan dan atau pengangkutan (kolektif) sampah rumah tangga, kantor, warung, penginapan (kontrakan / kamar kos). Unit usaha ini merupakan perpanjangan tangan pemerintah Kalurahan Sidoluhur dalam memberikan solusi aktif (setelah himbauan-himbauan / larangan) dalam rangka penanggulangan masalah sampah yang akan menimbulkan gangguan lingkungan ataupun masalah sosial.</span></p>\\r\\n<p class=\\\"MsoNoSpacing\\\" style=\\\"text-align: justify;\\\"><strong><span lang=\\\"IN\\\">c. </span></strong><strong style=\\\"text-align: justify; text-indent: -0.25in;\\\"><span lang=\\\"IN\\\"><span style=\\\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \'Times New Roman\';\\\">&nbsp;</span></span></strong><strong style=\\\"text-align: justify; text-indent: -0.25in;\\\"><span lang=\\\"IN\\\">Unit Usaha Jasa Boga / Catering Service</span></strong></p>\\r\\n<p class=\\\"MsoNoSpacing\\\" style=\\\"margin-left: 14.2pt; text-align: justify;\\\"><span style=\\\"text-align: justify;\\\">Kegiatan usaha yang mengkonsolidasikan</span><span lang=\\\"IN\\\" style=\\\"text-align: justify;\\\"> potensi-potensi /</span><span style=\\\"text-align: justify;\\\"> jenis usaha lokal </span><span lang=\\\"IN\\\" style=\\\"text-align: justify;\\\">(UMKM) dibidang boga (aneka kuliner masakan) yang ada di 15 padukuhan seluruh Sidoluhur</span><span style=\\\"text-align: justify;\\\"> untuk melayani </span><span lang=\\\"IN\\\" style=\\\"text-align: justify;\\\">kebutuhan </span><span style=\\\"text-align: justify;\\\">konsumsi acara-acara</span><span lang=\\\"IN\\\" style=\\\"text-align: justify;\\\"> kegiatan</span><span style=\\\"text-align: justify;\\\"> pemerintah </span><span lang=\\\"IN\\\" style=\\\"text-align: justify;\\\">Kalurahan Sidoluhur </span><span style=\\\"text-align: justify; font-size: 12pt;\\\">maupun </span><span lang=\\\"IN\\\" style=\\\"text-align: justify; font-size: 12pt;\\\">kedepannya </span><span style=\\\"text-align: justify; font-size: 12pt;\\\">dipasarkan pada skala pasar yang lebih luas</span><span lang=\\\"IN\\\" style=\\\"text-align: justify; font-size: 12pt;\\\">. Harapannya melalui unit usaha ini, BUMDes LUHUR SEMBADA maju berkembang bersama UMKM boga yang ada di Sidoluhur.</span></p>\\r\\n<p class=\\\"MsoNoSpacing\\\" style=\\\"text-align: justify;\\\">&nbsp;</p>\\r\\n</div>', 'imgonline-com-ua-CompressToSize-hhoM8wb8vbkfWiw_1634466955.jpg', '2022-04-17 17:49:07', '2022-04-17 17:49:07');
INSERT INTO `abouts` VALUES (3, 'Struktur Organisasi', 'struktur-organisasi', '<p class=\\\"MsoListParagraphCxSpFirst\\\" style=\\\"text-indent: -.25in; mso-list: l0 level1 lfo1;\\\"><!-- [if !supportLists]--><span lang=\\\"IN\\\" style=\\\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-fareast-font-family: Cambria; mso-bidi-font-family: Cambria; mso-ansi-language: IN;\\\"><span style=\\\"mso-list: Ignore;\\\">1.<span style=\\\"font: 7.0pt \'Times New Roman\';\\\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span lang=\\\"IN\\\" style=\\\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-ansi-language: IN;\\\">Penasehat<span style=\\\"mso-tab-count: 1;\\\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>:</span><span style=\\\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-ansi-language: EN-US;\\\"> HERNAWAN ZUDANTO, S.E.</span></p>\\r\\n<p class=\\\"MsoListParagraphCxSpLast\\\" style=\\\"margin-bottom: 0in; mso-add-space: auto; text-indent: -.25in; mso-list: l0 level1 lfo1;\\\"><!-- [if !supportLists]--><span lang=\\\"IN\\\" style=\\\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-fareast-font-family: Cambria; mso-bidi-font-family: Cambria; mso-ansi-language: IN;\\\"><span style=\\\"mso-list: Ignore;\\\">2.<span style=\\\"font: 7.0pt \'Times New Roman\';\\\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span lang=\\\"IN\\\" style=\\\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-ansi-language: IN;\\\">Pengawas<span style=\\\"mso-tab-count: 1;\\\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>:</span><span style=\\\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-ansi-language: EN-US;\\\"> dr. SALMAN SANTOSA (Ketua)</span></p>\\r\\n<p class=\\\"MsoListParagraphCxSpLast\\\" style=\\\"margin-bottom: 0in; mso-add-space: auto; text-indent: -.25in; mso-list: l0 level1 lfo1;\\\"><span style=\\\"font-size: 12.0pt; font-family: \'Cambria\',serif; mso-ansi-language: EN-US;\\\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ESTI NURYANI, S.E. </span></p>\\r\\n<p class=\\\"MsoListParagraphCxSpLast\\\" style=\\\"margin-bottom: 0in; mso-add-space: auto; text-indent: -.25in; mso-list: l0 level1 lfo1;\\\"><span style=\\\"font-size: 12.0pt; font-family: \'Cambria\',serif; mso-ansi-language: EN-US;\\\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Drs. SUKARDI, M.Si.</span></p>\\r\\n<p class=\\\"MsoListParagraphCxSpFirst\\\" style=\\\"text-indent: -.25in; mso-list: l0 level1 lfo1;\\\"><!-- [if !supportLists]--><span lang=\\\"IN\\\" style=\\\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-fareast-font-family: Cambria; mso-bidi-font-family: Cambria; mso-ansi-language: IN;\\\"><span style=\\\"mso-list: Ignore;\\\">3.<span style=\\\"font: 7.0pt \'Times New Roman\';\\\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span lang=\\\"IN\\\" style=\\\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-ansi-language: IN;\\\">Direktur<span style=\\\"mso-tab-count: 1;\\\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>:</span><span style=\\\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-ansi-language: EN-US;\\\"> Ir. HARJANTO</span></p>\\r\\n<p class=\\\"MsoListParagraphCxSpMiddle\\\" style=\\\"text-indent: -.25in; mso-list: l0 level1 lfo1;\\\"><!-- [if !supportLists]--><span lang=\\\"IN\\\" style=\\\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-fareast-font-family: Cambria; mso-bidi-font-family: Cambria; mso-ansi-language: IN;\\\"><span style=\\\"mso-list: Ignore;\\\">4.<span style=\\\"font: 7.0pt \'Times New Roman\';\\\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span lang=\\\"IN\\\" style=\\\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-ansi-language: IN;\\\">Sekre</span><span style=\\\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-ansi-language: EN-US;\\\">tar</span><span lang=\\\"IN\\\" style=\\\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-ansi-language: IN;\\\">is<span style=\\\"mso-tab-count: 1;\\\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>:</span><span style=\\\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-ansi-language: EN-US;\\\"> PUTUT PURNAWANTO, A.Md.</span></p>\\r\\n<p class=\\\"MsoListParagraphCxSpMiddle\\\" style=\\\"text-indent: -.25in; mso-list: l0 level1 lfo1;\\\"><!-- [if !supportLists]--><span lang=\\\"IN\\\" style=\\\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-fareast-font-family: Cambria; mso-bidi-font-family: Cambria; mso-ansi-language: IN;\\\"><span style=\\\"mso-list: Ignore;\\\">5.<span style=\\\"font: 7.0pt \'Times New Roman\';\\\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span lang=\\\"IN\\\" style=\\\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-ansi-language: IN;\\\">Bendahara<span style=\\\"mso-tab-count: 1;\\\">&nbsp;&nbsp;&nbsp;&nbsp; </span>:</span><span style=\\\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-ansi-language: EN-US;\\\"> DIAN PANGESTU DASAYANTI, S.E.</span></p>\\r\\n<p class=\\\"MsoListParagraphCxSpMiddle\\\" style=\\\"text-indent: -.25in; mso-list: l0 level1 lfo1;\\\"><!-- [if !supportLists]--><span lang=\\\"IN\\\" style=\\\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-fareast-font-family: Cambria; mso-bidi-font-family: Cambria; mso-ansi-language: IN;\\\"><span style=\\\"mso-list: Ignore;\\\">6.<span style=\\\"font: 7.0pt \'Times New Roman\';\\\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span lang=\\\"IN\\\" style=\\\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-ansi-language: IN;\\\">Ketua Unit<span style=\\\"mso-tab-count: 1;\\\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>:</span><span style=\\\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-ansi-language: EN-US;\\\"> ANANG WISNU MARBANGUN</span></p>\\r\\n<p class=\\\"MsoListParagraphCxSpLast\\\" style=\\\"text-indent: -.25in; mso-list: l0 level1 lfo1;\\\"><!-- [if !supportLists]--><span lang=\\\"IN\\\" style=\\\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-fareast-font-family: Cambria; mso-bidi-font-family: Cambria; mso-ansi-language: IN;\\\"><span style=\\\"mso-list: Ignore;\\\">7.<span style=\\\"font: 7.0pt \'Times New Roman\';\\\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span lang=\\\"IN\\\" style=\\\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-ansi-language: IN;\\\">Pegawai<span style=\\\"mso-tab-count: 1;\\\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>:</span><span style=\\\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-ansi-language: EN-US;\\\"> SUGIHARTO</span><span lang=\\\"IN\\\" style=\\\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-ansi-language: IN;\\\"> &amp; TIM PENGAMBIL</span><span style=\\\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-ansi-language: EN-US;\\\">, JUWAKIR, SU</span><span lang=\\\"IN\\\" style=\\\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-ansi-language: IN;\\\">YA</span><span style=\\\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-ansi-language: EN-US;\\\">DI</span><span lang=\\\"IN\\\" style=\\\"font-size: 12.0pt; line-height: 107%; font-family: \'Cambria\',serif; mso-ansi-language: IN;\\\">, RAJI</span></p>', 'imgonline-com-ua-resize-Usf44NgIcVIVh_1635194065.jpg', '2022-04-17 17:49:07', '2022-04-17 17:49:07');
COMMIT;

-- ----------------------------
-- Table structure for blogs
-- ----------------------------
DROP TABLE IF EXISTS `blogs`;
CREATE TABLE `blogs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) unsigned NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `blogs_category_id_index` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of blogs
-- ----------------------------
BEGIN;
INSERT INTO `blogs` VALUES (1, 'Pupuk UREA \\\"PETRO\\\"', 'pupuk-urea-petro', 4, '<p>Pupuk UREA \\\"PETRO\\\" ini mempunyai berat bersih 50 Kg/Sak.</p>\\r\\n<p>Kandungan N (Nitrogen) didalamnya 46%.</p>\\r\\n<p><strong>Harga per Sak Rp300.000,-</strong></p>\\r\\n<p><strong>Harga ecer Rp6.000/Kg</strong></p>\\r\\n<p style=\\\"margin-bottom: 80px;\\\"><a href=\\\"https://wa.me/62895614609090?text=Hai%20BUMDesa,%20izin%20bertanya\\\" target=\\\"_blank\\\" rel=\\\"noopener\\\"><button class=\\\"btn btn-primary\\\"> Pesan Sekarang </button></a></p>', 'imgonline-com-ua-resize-lRfVFFnbhrCk7xo_1635190269.jpg', '2022-04-17 17:49:07', '2022-04-17 17:49:07');
INSERT INTO `blogs` VALUES (2, 'Unit Usaha Pengelolaan Sampah / Pengambilan Sampah Kolektif', 'unit-usaha-pengelolaan-sampah-pengambilan-sampah-kolektif', 1, '<p class=\\\"MsoNoSpacing\\\" style=\\\"text-align: justify;\\\"><span lang=\\\"EN-US\\\" style=\\\"font-size: 12.0pt; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin;\\\">Usaha perantara (<em>brokering</em>) yang memberikan jasa pelayanan kepada warga</span><span lang=\\\"IN\\\" style=\\\"font-size: 12.0pt; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; mso-ansi-language: IN;\\\"> Sidoluhur melalui Unit usaha jasa pengelolaan dan atau pengangkutan (kolektif) sampah rumah tangga, kantor, warung, penginapan (kontrakan / kamar kos). Unit usaha ini merupakan perpanjangan tangan Pemerintah Kalurahan Sidoluhur dalam memberikan solusi aktif (setelah himbauan-himbauan / larangan yang telah dilakukan) dalam rangka penanggulangan masalah sampah yang akan menimbulkan gangguan lingkungan ataupun masalah sosial.&nbsp;</span></p>\\r\\n<p class=\\\"MsoNoSpacing\\\" style=\\\"text-align: justify;\\\">&nbsp;</p>\\r\\n<p>&nbsp;</p>', 'imgonline-com-ua-CompressToSize-YAdybfu2ISUfPhc_1649908234.jpg', '2022-04-17 17:49:07', '2022-04-17 17:49:07');
INSERT INTO `blogs` VALUES (3, 'Pupuk UREA \\\"MESTAC\\\"', 'pupuk-urea-mestac', 4, '<p>Pupuk UREA \\\"MESTAC\\\" ini mempunyai berat bersih 25 Kg/Sak.</p>\\r\\n<p>Kandungan N (Nitrogen) didalamnya 26%. Butiran besar (Granule) akan mempermudah dalam aplikasi penaburannya.</p>\\r\\n<p><strong>Harga per Sak Rp150.000,-</strong></p>\\r\\n<p><strong>Harga ecer Rp6.000/Kg</strong></p>\\r\\n<p style=\\\"margin-bottom: 80px;\\\"><a href=\\\"https://wa.me/62895614609090?text=Hai%20BUMDesa,%20izin%20bertanya\\\" target=\\\"_blank\\\" rel=\\\"noopener\\\"><button class=\\\"btn btn-primary\\\">Pesan Sekarang</button></a></p>', 'imgonline-com-ua-resize-9WJ2OQfE0Zxn_1635190636.jpg', '2022-04-17 17:49:07', '2022-04-17 17:49:07');
INSERT INTO `blogs` VALUES (4, 'Pupuk Organik \\\"PATIGAN\\\"', 'pupuk-organik-patigan', 4, '<p style=\\\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; background: #ffffff; line-height: 1.6; color: #5d5c5c; font-family: Poppins, sans-serif;\\\">Pupuk Organik \\\"PATIGAN\\\"&nbsp; ini mempunyai berat bersih 40 Kg/Sak.</p>\\r\\n<p style=\\\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; background: #ffffff; line-height: 1.6; color: #5d5c5c; font-family: Poppins, sans-serif;\\\">Mengandung arang aktif sebagai penambat N (Nitrogen). Super kompos ini berguna untuk memperbaiki struktur tanah. Sangat efektif jika dikombinasikan dengan Pupuk NPK. Pupuk PATIGAN ini sudah terdaftar di DEPTAN 02.03.2016.154</p>\\r\\n<p style=\\\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; background: #ffffff; line-height: 1.6; color: #5d5c5c; font-family: Poppins, sans-serif;\\\"><span style=\\\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; background: transparent; font-weight: bold;\\\">Harga per Sak Rp35.000,-</span></p>\\r\\n<p style=\\\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; background: #ffffff; line-height: 1.6; color: #5d5c5c; font-family: Poppins, sans-serif;\\\"><span style=\\\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; background: transparent; font-weight: bold;\\\">Harga ecer Rp - /Kg</span></p>', 'imgonline-com-ua-resize-zLV7IhlhJ0JCs9_1635191331.jpg', '2022-04-17 17:49:07', '2022-04-17 17:49:07');
INSERT INTO `blogs` VALUES (5, 'Pupuk NPK \\\"PELANGI\\\"', 'pupuk-npk-pelangi', 4, '<p style=\\\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; background: #ffffff; line-height: 1.6; color: #5d5c5c; font-family: Poppins, sans-serif;\\\">Pupuk NPK \\\"PELANGI\\\"&nbsp; ini mempunyai berat bersih 20 Kg/Sak.</p>\\r\\n<p style=\\\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; background: #ffffff; line-height: 1.6; color: #5d5c5c; font-family: Poppins, sans-serif;\\\"><span style=\\\"background-color: transparent;\\\">Pupuk NPK 16 16 16 memiliki kandungan Hara 16% N, 16% P<sub>2</sub>O<sub>5</sub>, 16% K<sub>2</sub>O sehingga ini termasuk golongan pupuk komplit.</span></p>\\r\\n<p style=\\\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; background: #ffffff; line-height: 1.6; color: #5d5c5c; font-family: Poppins, sans-serif;\\\"><span style=\\\"background-color: transparent; font-weight: bold;\\\">Harga per Sak Rp165.000,-</span></p>\\r\\n<p style=\\\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; background: #ffffff; line-height: 1.6; color: #5d5c5c; font-family: Poppins, sans-serif;\\\"><span style=\\\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; background: transparent; font-weight: bold;\\\">Harga ecer Rp 8.500 /Kg</span></p>', 'imgonline-com-ua-resize-VZjhEzIg07Ovc_1635192060.jpg', '2022-04-17 17:49:07', '2022-04-17 17:49:07');
INSERT INTO `blogs` VALUES (6, 'Pupuk \\\"PHOSKA\\\"', 'pupuk-phoska', 4, '<p style=\\\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; background: #ffffff; line-height: 1.6; color: #5d5c5c; font-family: Poppins, sans-serif;\\\">Pupuk \\\"PHOSKA\\\"&nbsp; ini mempunyai berat bersih 50 Kg/Sak.</p>\\r\\n<p style=\\\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; background: #ffffff; line-height: 1.6; color: #5d5c5c; font-family: Poppins, sans-serif;\\\">Butiran besar (Granule) berwarna merah. Mengandung MgO 15%, CaO 15%, CaCO3 15%</p>\\r\\n<p style=\\\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; background: #ffffff; line-height: 1.6; color: #5d5c5c; font-family: Poppins, sans-serif;\\\"><span style=\\\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; background: transparent; font-weight: bold;\\\">Harga per Sak Rp130.000,-</span></p>\\r\\n<p style=\\\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; background: #ffffff; line-height: 1.6; color: #5d5c5c; font-family: Poppins, sans-serif;\\\"><span style=\\\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; background: transparent; font-weight: bold;\\\">Harga ecer Rp 3.000/Kg</span></p>', 'imgonline-com-ua-resize-0xViDf4BdcnvZKn_1635192770.jpg', '2022-04-17 17:49:07', '2022-04-17 17:49:07');
INSERT INTO `blogs` VALUES (7, 'Pupuk TSP \\\"LADANG SUBUR 36\\\"', 'pupuk-tsp-ladang-subur-36', 4, '<p style=\\\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; background: #ffffff; line-height: 1.6; color: #5d5c5c; font-family: Poppins, sans-serif;\\\"><strong>Pupuk TSP \\\"LADANG SUBUR 36\\\"&nbsp;</strong> ini mempunyai berat bersih 50 Kg/Sak.</p>\\r\\n<p style=\\\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; background: #ffffff; line-height: 1.6; color: #5d5c5c; font-family: Poppins, sans-serif;\\\">Butiran besar <em>(Granule)</em> berwarna abu-abu. Mengandung CaO 42,07%, MgO 19,88%, CaCO3 102,64%</p>\\r\\n<p style=\\\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; background: #ffffff; line-height: 1.6; color: #5d5c5c; font-family: Poppins, sans-serif;\\\"><span style=\\\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; background: transparent; font-weight: bold;\\\">Harga per Sak Rp110.000,-</span></p>\\r\\n<p style=\\\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; background: #ffffff; line-height: 1.6; color: #5d5c5c; font-family: Poppins, sans-serif;\\\"><span style=\\\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; background: transparent; font-weight: bold;\\\">Harga ecer Rp 3.000/Kg</span></p>', 'imgonline-com-ua-resize-RxQ8SsdpeN_1635193084.jpg', '2022-04-17 17:49:07', '2022-04-17 17:49:07');
INSERT INTO `blogs` VALUES (8, 'Air Minum Dalam Kemasan \\\"DAXU\\\"', 'air-minum-dalam-kemasan-daxu', 4, '<p><strong>Air Minum Dalam Kemasan \\\"DAXU\\\" </strong>berasal dari sumber air Kaliurang - Sleman Yogyakarta, diproduksi oleh PDAM Sleman. Seluruh produk DAXU ini sudah teruji kelayakaannya dan terjamin kualitasnya (BADAN POM RI 255212001058)</p>\\r\\n<p>Harga DAXU&nbsp;</p>\\r\\n<p>- 120ml Cup Kecil / Rp16.000 /Dus isi 45</p>\\r\\n<p>- 240ml Gelas (Cup) / Rp23.000 /Dus isi 48</p>\\r\\n<p>- 330ml Botol (Kecil) / Rp30.000 /Dus isi 24</p>\\r\\n<p>- 600ml Botol (Sedang) / Rp35.000 /Dus isi 24</p>', 'imgonline-com-ua-CompressToSize-SEli8ZjJEsjdeh_1649910105.jpg', '2022-04-17 17:49:07', '2022-04-17 17:49:07');
INSERT INTO `blogs` VALUES (9, 'Himbauan dari Direktur BUM Kalurahan \\\"LUHUR SEMBADA\\\" Sidoluhur', 'himbauan-dari-direktur-bum-kalurahan-luhur-sembada-sidoluhur', 5, '<p>Himbauan dari Direktur BUM kalurahan \\\"LUHUR SEMBADA\\\" Sidoluhur</p>\\r\\n<p>\\\".... meski sedang pandemi, jangan kendor tetap jalankan giat ekonomi produktif.\\\" Ir. HARJANTO (Direktur BUM kalurahan \\\"LUHUR SEMBADA\\\" Sidoluhur</p>', 'Giat Ekonomi Produktif oleh Ir. Harjanto_1635194781.jpg', '2022-04-17 17:49:07', '2022-04-17 17:49:07');
INSERT INTO `blogs` VALUES (10, 'BUMKal Luhur Sembada Sidoluhur Serahkan LPJ dan Proker ke Dinas PMK Sleman', 'bumkal-luhur-sembada-sidoluhur-serahkan-lpj-dan-proker-ke-dinas-pmk-sleman', 2, '<p>Jogjakeren.com &ndash; Badan Usaha Milik Kalurahan (BUMKal) Luhur Sembada, Sidoluhur, Godean, Sleman melalui Direktur Ir. Harjanto menyerahkan Laporan Pertanggungjawaban (LPJ) dan program kerja tahun 2022-2023 ke Dinas Pemberdayaan Masyarakat dan Kalurahan (PMK) Kabupaten Sleman, Kamis (31/3/2022). Penyerahan turut didampingi Sekretaris BUMKal Putut Purnawanto, A.Md. dan KaBag Unit Pengelolaan Sampah Anang Wisnu Marbangun. Sejak diberi amanah sebagai Direktur BUMKal pada Oktober 2020, ia bersama timnya berkesempatan untuk menyerahkan laporan tahunan tahun 2021, &ldquo;Alhamdulillah LPJ kami diterima dengan baik dari Dinas PMK Sleman,&rdquo; katanya. Sebelumnya, Pemerintah Kalurahan Sidoluhur menggelar musyawarah Kalurahan Sidoluhur yang membahas perkembangan BUMKal Luhur Sembada, Selasa (29/3/2022) lalu. Beberapa poin yang dibahas di antaranya laporan pertanggungjawaban pengelolaan BUM Desa Luhur Sembada tahun 2021, penyusunan rencana program kerja BUM Kalurahan Luhur Sembada Sidoluhur tahun 2022 dan penyusunan rancangan peraturan Kalurahan Sidoluhur tentang pendirian Badan Usaha Milik Kalurahan Luhur Sembada Sidoluhur. Diketahui, usaha BUM Desa Luhur Sembada terdiri dari unit usaha jasa boga/catering service, unit usaha perdagangan, unit usaha pengelolaan sampah, unit usaha pertanian dan perikanan, dan unit usaha jasa pembayaran.</p>\\r\\n<p><em>https://jogjakeren.com/bumkal-luhur-sembada-sidoluhur-serahkan-lpj-dan-proker-ke-dinas-pmk-sleman/</em></p>', 'imgonline-com-ua-CompressToSize-Aotq5dx4dKZxwN_1649911753.jpg', '2022-04-17 17:49:07', '2022-04-17 17:49:07');
COMMIT;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kind` enum('produk','lainya') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of categories
-- ----------------------------
BEGIN;
INSERT INTO `categories` VALUES (1, 'Unit Usaha Pengelolaan Sampah', 'unit-usaha-pengelolaan-sampah', 'produk', '2022-04-17 17:49:07', '2022-04-17 17:49:07');
INSERT INTO `categories` VALUES (2, 'Kegiatan BUMKal', 'kegiatan-bumkal', 'lainya', '2022-04-17 17:49:07', '2022-04-17 17:49:07');
INSERT INTO `categories` VALUES (3, 'Unit Usaha Jasa Boga', 'unit-usaha-jasa-boga', 'produk', '2022-04-17 17:49:07', '2022-04-17 17:49:07');
INSERT INTO `categories` VALUES (4, 'Unit Usaha Perdagangan', 'unit-usaha-perdagangan', 'produk', '2022-04-17 17:49:07', '2022-04-17 17:49:07');
INSERT INTO `categories` VALUES (5, 'Kegiatan yang akan datang', 'kegiatan-yang-akan-datang', 'lainya', '2022-04-17 17:49:07', '2022-04-17 17:49:07');
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
  KEY `comments_blog_id_index` (`blog_id`),
  CONSTRAINT `comments_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of comments
-- ----------------------------
BEGIN;
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
INSERT INTO `displays` VALUES (1, 'Luhur Sembada', 'Website Resmi BUM Kalurahan \"Luhur Sembada\" Sidoluhur yang memberikan tentang berita terbaru BUM Kalurahan \"Luhur Sembada\" Sidoluhur hari ini, Termasuk event/kegiatan, product, dan unit usahanya.', 'imgonline-com-ua-CompressToSize-cHXptN5QKhjmHd9u_logo.jpg', '2022-04-17 17:49:07', '2022-04-17 17:49:07');
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
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
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
INSERT INTO `greets` VALUES (1, 'sambutan-lurah', 'Lurah', 'Hernawan Zudanto, S.E', 'IMG-20211022-WA0001_kades.jpg', '<p class=\\\"MsoNormal\\\" style=\\\"text-align: justify;\\\"><span lang=\\\"IN\\\">Dengan adanya website di BUM Desa / BUM Kalurahan \\\"LUHUR SEMBADA\\\" ini, kami dari Pemerintah Kalurahan Sidoluhur sangat mendukung karena banyak memberikan Informasi dari kegiatan BUMDesa untuk khususnya bagi masyarakat Sidoluhur dan umumnya masyarakat luas. Selain itu dapat memberikan dampak positif demi kemajuan BUMDesa dan Pemerintah Kalurahan Sidoluhur. Keberadaan website agar dapat digunakan secara maksimal untuk mendukung kegiatan BUMDesa. </span></p>\\r\\n<p class=\\\"MsoNormal\\\" style=\\\"text-align: justify;\\\"><span lang=\\\"IN\\\">Semoga dapat bermanfaat.&nbsp;</span></p>\\r\\n<p class=\\\"MsoNormal\\\" style=\\\"text-align: justify;\\\"><span lang=\\\"IN\\\">Terima Kasih...</span></p>', '2022-04-17 17:49:07', '2022-04-17 17:49:07');
INSERT INTO `greets` VALUES (2, 'sambutan-direktur', 'Direktur', 'Ir. HARJANTO', 'WhatsApp Image 2021-10-17 at 15.47.28_kades.jpeg', '<p class=\\\"MsoNormal\\\" style=\\\"text-align: justify;\\\"><span lang=\\\"IN\\\" style=\\\"mso-ansi-language: IN;\\\">Selamat datang di Website kami BUM Desa / BUM Kalurahan \\\"LUHUR SEMBADA\\\" Kalurahan Sidoluhur, Kapanewon Godean, Kabupaten Sleman, D.I.Yogyakarta. Website ini dimaksudkan sebagai sarana publikasi untuk memberikan informasi dan gambaran BUM Desa / BUM Kalurahan &ldquo;LUHUR SEMBADA&rdquo; kepada masyarakat. Melalui keberadaan website ini kiranya masyarakat dapat mengetahui seluruh informasi tentang kegiatan usaha, bidang usaha, serta produk dari BUMDesa&nbsp;</span>/ BUM Kalurahan&nbsp;&nbsp;&ldquo;LUHUR SEMBADA&rdquo;.</p>\\r\\n<p class=\\\"MsoNormal\\\" style=\\\"text-align: justify;\\\"><span lang=\\\"IN\\\" style=\\\"mso-ansi-language: IN;\\\">Kritik dan Saran terhadap kekurangan dan kesalahan yang ada sangat kami harapkan guna penyempurnaan website ini dimasa yang akan datang. Semoga website ini dapat memberikan manfaat bagi kita semua.</span></p>\\r\\n<p class=\\\"MsoNormal\\\" style=\\\"text-align: justify;\\\"><span lang=\\\"IN\\\" style=\\\"mso-ansi-language: IN;\\\">Terima kasih.</span></p>', '2022-04-17 17:49:07', '2022-04-17 17:49:07');
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of messages
-- ----------------------------
BEGIN;
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
BEGIN;
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (5, '2021_08_27_231314_create_categories_table', 1);
INSERT INTO `migrations` VALUES (6, '2021_08_27_231351_create_sliders_table', 1);
INSERT INTO `migrations` VALUES (7, '2021_08_27_233155_create_blogs_table', 1);
INSERT INTO `migrations` VALUES (8, '2021_08_28_184220_create_abouts_table', 1);
INSERT INTO `migrations` VALUES (9, '2021_09_07_213625_create_comments_table', 1);
INSERT INTO `migrations` VALUES (10, '2021_09_16_084557_create_displays_table', 1);
INSERT INTO `migrations` VALUES (11, '2021_09_16_084744_create_socials_table', 1);
INSERT INTO `migrations` VALUES (12, '2021_09_17_221705_create_messages_table', 1);
INSERT INTO `migrations` VALUES (13, '2021_09_19_211100_create_greets_table', 1);
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of sliders
-- ----------------------------
BEGIN;
INSERT INTO `sliders` VALUES (1, 'unitt_1634462695.jpg', 'Selamat Datang di BUMDesa Luhur Sembada', 'https://bumdesaluhursembada.com/about/5', '2022-04-17 17:49:07', '2022-04-17 17:49:07');
INSERT INTO `sliders` VALUES (2, 'imgonline-com-ua-CompressToSize-y3XVj2hMyL_1649908954.jpg', 'jangan kendor tetap jalankan giat ekonomi produktif', 'https://bumdesaluhursembada.com/berita/22', '2022-04-17 17:49:07', '2022-04-17 17:49:07');
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of socials
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
INSERT INTO `users` VALUES (1, 'Administrator', '081706543241', 'fakfak', NULL, 'admin@codeinaja.net', NULL, '$2y$10$hQ0Zlli4Jyex2oK7U5DyQ.hEzG07UM87HLA6Sth8ePDRQWI1pC7Oy', NULL, '2022-04-17 17:49:07', '2022-04-17 17:49:07');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
