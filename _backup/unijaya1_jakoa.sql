-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jan 07, 2017 at 09:21 PM
-- Server version: 5.5.52-cll
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `unijaya1_jakoa`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE IF NOT EXISTS `assignments` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`itemname`, `userid`, `bizrule`, `data`) VALUES
('Administrator', '2', '', 's:0:"";'),
('Administrator', '3', '', 's:0:"";'),
('Administrator', '4', '', 's:0:"";'),
('Administrator', '5', '', 's:0:"";'),
('Administrator', '6', '', 's:0:"";'),
('Developer', '1', '', 's:0:"";'),
('PegawaiDaerah', '8', '', 's:0:"";'),
('PegawaiNegeri', '7', '', 's:0:"";'),
('PegawaiPejabat', '9', '', 's:0:"";');

-- --------------------------------------------------------

--
-- Table structure for table `backup`
--

CREATE TABLE IF NOT EXISTS `backup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `ip` varchar(20) DEFAULT NULL,
  `browser` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `backup`
--

INSERT INTO `backup` (`id`, `name`, `ip`, `browser`, `date`, `description`) VALUES
(8, 'itemchildren.sql', '192.168.1.140', 'Google Chrome', '20-05-2016', 'Data pengurusan kerja '),
(9, 'orangasli.sql', '192.168.1.140', 'Google Chrome', '20-05-2016', 'Data Orang Asli 2016');

-- --------------------------------------------------------

--
-- Table structure for table `dummy`
--

CREATE TABLE IF NOT EXISTS `dummy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value1` varchar(255) DEFAULT NULL,
  `value2` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `dummy`
--

INSERT INTO `dummy` (`id`, `value1`, `value2`) VALUES
(10, '2', '16');

-- --------------------------------------------------------

--
-- Table structure for table `itemchildren`
--

CREATE TABLE IF NOT EXISTS `itemchildren` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `itemchildren`
--

INSERT INTO `itemchildren` (`parent`, `child`) VALUES
('Administrator', 'Dashboard'),
('Developer', 'Dashboard'),
('PegawaiDaerah', 'Dashboard'),
('PegawaiNegeri', 'Dashboard'),
('PegawaiPejabat', 'Dashboard'),
('Dashboard', 'dashboard@DefaultIndex'),
('Administrator', 'Jakoa'),
('PegawaiDaerah', 'Jakoa'),
('PegawaiNegeri', 'Jakoa'),
('PegawaiPejabat', 'Jakoa'),
('Administrator', 'Pegawai Daerah'),
('PegawaiDaerah', 'Pegawai Daerah'),
('Administrator', 'Pegawai Negeri'),
('PegawaiNegeri', 'Pegawai Negeri'),
('Administrator', 'Pegawai Pejabat'),
('PegawaiPejabat', 'Pegawai Pejabat'),
('Administrator', 'Roles Manage'),
('Developer', 'Roles Manage'),
('Roles Manage', 'roles@DefaultAssignTask'),
('Roles Manage', 'roles@DefaultCreateroles'),
('Roles Manage', 'roles@DefaultDeleteroles'),
('Roles Manage', 'roles@DefaultDeletetask'),
('Roles Manage', 'roles@DefaultIndex'),
('Roles Manage', 'roles@DefaultReloadTask'),
('Roles Manage', 'roles@DefaultUpdateroles'),
('Administrator', 'User Assignments'),
('Developer', 'User Assignments'),
('Administrator', 'User Manage'),
('Developer', 'User Manage'),
('Administrator', 'User Profile'),
('Developer', 'User Profile'),
('User Assignments', 'user@DefaultAssignRole'),
('User Manage', 'user@DefaultCreate'),
('User Manage', 'user@DefaultDelete'),
('User Profile', 'user@DefaultEditprofile'),
('User Manage', 'user@DefaultIndex'),
('User Assignments', 'user@DefaultReloadRoles'),
('User Assignments', 'user@DefaultRevokeRole'),
('User Manage', 'user@DefaultUpdate'),
('User Manage', 'user@DefaultView'),
('User Profile', 'user@DefaultViewprofile');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('Administrator', 2, '', '', 's:0:"";'),
('Dashboard', 1, '', '', 's:0:"";'),
('dashboard@DefaultIndex', 0, NULL, NULL, 'N;'),
('Developer', 2, NULL, NULL, NULL),
('Jakoa', 1, '', '', 's:0:"";'),
('Pegawai Daerah', 1, '', '', 's:0:"";'),
('Pegawai Negeri', 1, '', '', 's:0:"";'),
('Pegawai Pejabat', 1, '', '', 's:0:"";'),
('PegawaiDaerah', 2, '', NULL, 'N;'),
('PegawaiNegeri', 2, '', NULL, 'N;'),
('PegawaiPejabat', 2, '', NULL, 'N;'),
('Roles Manage', 1, '', '', 's:0:"";'),
('roles@DefaultAssignTask', 0, NULL, NULL, 'N;'),
('roles@DefaultCreateroles', 0, NULL, NULL, 'N;'),
('roles@DefaultDeleteroles', 0, NULL, NULL, 'N;'),
('roles@DefaultDeletetask', 0, NULL, NULL, 'N;'),
('roles@DefaultIndex', 0, NULL, NULL, 'N;'),
('roles@DefaultReloadTask', 0, NULL, NULL, 'N;'),
('roles@DefaultUpdateroles', 0, NULL, NULL, 'N;'),
('User Assignments', 1, '', '', 's:0:"";'),
('User Manage', 1, '', '', 's:0:"";'),
('User Profile', 1, '', '', 's:0:"";'),
('user@DefaultAssignRole', 0, NULL, NULL, 'N;'),
('user@DefaultCreate', 0, NULL, NULL, 'N;'),
('user@DefaultDelete', 0, NULL, NULL, 'N;'),
('user@DefaultEditprofile', 0, NULL, NULL, 'N;'),
('user@DefaultIndex', 0, NULL, NULL, 'N;'),
('user@DefaultReloadRoles', 0, NULL, NULL, 'N;'),
('user@DefaultRevokeRole', 0, NULL, NULL, 'N;'),
('user@DefaultUpdate', 0, NULL, NULL, 'N;'),
('user@DefaultView', 0, NULL, NULL, 'N;'),
('user@DefaultViewprofile', 0, NULL, NULL, 'N;');

-- --------------------------------------------------------

--
-- Table structure for table `kadbancian`
--

CREATE TABLE IF NOT EXISTS `kadbancian` (
  `kadbancian_id` int(11) NOT NULL AUTO_INCREMENT,
  `keluarga_id` int(11) NOT NULL,
  `statuscetakan` int(11) DEFAULT NULL,
  `catatan` text,
  `negeri` varchar(255) NOT NULL,
  `daerah` varchar(255) NOT NULL,
  `kampung` varchar(255) NOT NULL,
  `no_rumah` varchar(255) NOT NULL,
  `tarikh` varchar(255) NOT NULL,
  `keluargakadbanci` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`kadbancian_id`),
  KEY `keluarga_id` (`keluarga_id`),
  KEY `statuscetakan` (`statuscetakan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `kadbancian`
--

INSERT INTO `kadbancian` (`kadbancian_id`, `keluarga_id`, `statuscetakan`, `catatan`, `negeri`, `daerah`, `kampung`, `no_rumah`, `tarikh`, `keluargakadbanci`) VALUES
(1, 1, 1, '', 'Johor', 'Kulai Jaya', 'Kampung Manis', '121', '12/05/2016', 'WIRAWAN PANAWAN'),
(2, 1, 2, NULL, 'Kedah', 'Kulim', 'Kampung Damai', 'B-1-2', '05-12-2016', 'ANAWATI PRATAMA');

-- --------------------------------------------------------

--
-- Table structure for table `keluarga`
--

CREATE TABLE IF NOT EXISTS `keluarga` (
  `keluarga_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `nama_kir` varchar(255) DEFAULT NULL,
  `kp_baru` varchar(255) DEFAULT NULL,
  `kp_lama` varchar(255) DEFAULT NULL,
  `warna_kp` varchar(255) DEFAULT NULL,
  `alamat_kir` text,
  `poskod` varchar(255) DEFAULT NULL,
  `negeri` int(11) DEFAULT NULL,
  `daerah` int(11) DEFAULT NULL,
  `mukim` varchar(255) DEFAULT NULL,
  `kampung` varchar(255) DEFAULT NULL,
  `status_perjawatan` int(11) DEFAULT NULL,
  `kampung_jkkk` varchar(255) DEFAULT NULL,
  `status_ahli` int(11) DEFAULT NULL,
  `parlimen` varchar(255) DEFAULT NULL,
  `dun` varchar(255) DEFAULT NULL,
  `catatan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`keluarga_id`),
  KEY `negeri` (`negeri`),
  KEY `daerah` (`daerah`),
  KEY `status_perjawatan` (`status_perjawatan`),
  KEY `status_ahli` (`status_ahli`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `keluarga`
--

INSERT INTO `keluarga` (`keluarga_id`, `nama`, `nama_kir`, `kp_baru`, `kp_lama`, `warna_kp`, `alamat_kir`, `poskod`, `negeri`, `daerah`, `mukim`, `kampung`, `status_perjawatan`, `kampung_jkkk`, `status_ahli`, `parlimen`, `dun`, `catatan`) VALUES
(1, 'WIRAWAN', 'WIRAWAN PARWAN', '700404044199', '650404034519', 'Biru', 'No 121 Jalan Kintak, Kampung Tanjung Bachik', '54100', 1, 1, 'Mukim Johor', 'Kampung Manis', 1, 'Kampung Manis ', 1, 'Kulai Jaya', 'Kulai', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `list_agama`
--

CREATE TABLE IF NOT EXISTS `list_agama` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `list_agama`
--

INSERT INTO `list_agama` (`id`, `nama`) VALUES
(1, 'Islam'),
(2, 'Kristian'),
(3, 'Animisme'),
(4, 'Atheis');

-- --------------------------------------------------------

--
-- Table structure for table `list_bangsa`
--

CREATE TABLE IF NOT EXISTS `list_bangsa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_bangsa` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `list_bangsa`
--

INSERT INTO `list_bangsa` (`id`, `jenis_bangsa`, `nama`) VALUES
(1, 'Negrito', 'Kintaq'),
(2, 'Negrito', 'Lanok'),
(3, 'Negrito', 'Kensiu'),
(4, 'Negrito', 'Jahai'),
(5, 'Negrito', 'Mendriq'),
(6, 'Negrito', 'Bateq'),
(7, 'Senoi', 'Temiar'),
(8, 'Senoi', 'Semai'),
(9, 'Senoi', 'Mah Meri'),
(10, 'Senoi', 'Che Wong'),
(11, 'Senoi', 'Ja Hut'),
(12, 'Senoi', 'Semoq Beri'),
(13, 'Malayu Asli', 'Orang Selatar'),
(14, 'Malayu Asli', 'Jakum'),
(15, 'Malayu Asli', 'Orang Kuala'),
(16, 'Malayu Asli', 'Orang Kanaq'),
(17, 'Malayu Asli', 'Temuan'),
(18, 'Malayu Asli', 'Semelai');

-- --------------------------------------------------------

--
-- Table structure for table `list_daerah`
--

CREATE TABLE IF NOT EXISTS `list_daerah` (
  `list_district_id` int(11) NOT NULL AUTO_INCREMENT,
  `list_district_name` varchar(255) NOT NULL,
  `list_state_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`list_district_id`),
  KEY `list_state_id` (`list_state_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=145 ;

--
-- Dumping data for table `list_daerah`
--

INSERT INTO `list_daerah` (`list_district_id`, `list_district_name`, `list_state_id`) VALUES
(1, 'Johor Bahru', 1),
(2, 'Batu Pahat', 1),
(3, 'Kluang', 1),
(4, 'Kulai Jaya', 1),
(5, 'Muar', 1),
(6, 'Kota Tinggi', 1),
(7, 'Segamat', 1),
(8, 'Pontian', 1),
(9, 'Ledang', 1),
(10, 'Mersing', 1),
(11, 'Sungai Petani', 2),
(12, 'Alor Setar', 2),
(13, 'Kulim', 2),
(14, 'Kubang Pasu', 2),
(15, 'Baling', 2),
(16, 'Pendang', 2),
(17, 'Langkawi', 2),
(18, 'Sik', 2),
(19, 'Padang Terap', 2),
(20, 'Pokok Sena', 2),
(21, 'Bandar Baharu', 2),
(22, 'Kota Bharu', 3),
(23, 'Pasir Mas', 3),
(24, 'Tumpat ', 3),
(25, 'Bachok', 3),
(26, 'Tanah Merah', 3),
(27, 'Pasir Puteh', 3),
(28, 'Kuala Krai', 3),
(29, 'Machang', 3),
(30, 'Gua Musang', 3),
(31, 'Jeli', 3),
(32, 'Lojing', 3),
(33, 'Melaka Tengah', 4),
(34, 'Alor Gajah', 4),
(35, 'Jasin', 4),
(36, 'Seremban', 5),
(37, 'Jempol', 5),
(38, 'Port Dickson', 5),
(39, 'Tampin', 5),
(40, 'Kuala Pilah', 5),
(41, 'Rembau', 5),
(42, 'Jelebu', 5),
(43, 'Kuantan', 6),
(44, 'Temerloh', 6),
(45, 'Bentong', 6),
(46, 'Maran', 6),
(47, 'Rompin', 6),
(48, 'Pekan', 6),
(49, 'Bera', 6),
(50, 'Raub', 6),
(51, 'Jerantut', 6),
(52, 'Lipis', 6),
(53, 'Cameron Highlands', 6),
(54, 'Kinta', 7),
(55, 'Larut, Matang dan Selama', 7),
(56, 'Manjung', 7),
(57, 'Hilir Perak', 7),
(58, 'Kerian', 7),
(59, 'Batang Padang', 7),
(60, 'Kuala Kangsar', 7),
(61, 'Perak Tengah', 7),
(62, 'Hulu Perak', 7),
(63, 'Perlis', 8),
(64, 'Timur Laut Pulau Pinang', 9),
(65, 'Seberang Perai Tengah', 9),
(66, 'Seberang Perai Utara', 9),
(67, 'Barat Daya Pulau Pinang', 9),
(68, 'Seberang Perai Selatan', 9),
(69, 'Kota Kinabalu', 10),
(70, 'Tawau', 10),
(71, 'Sandakan', 10),
(72, 'Lahad Datu', 10),
(73, 'Keningau', 10),
(74, 'Kinabatangan', 10),
(75, 'Semporna', 10),
(76, 'Papar', 10),
(77, 'Penampang', 10),
(78, 'Beluran', 10),
(79, 'Tuaran', 10),
(80, 'Ranau', 10),
(81, 'Kota Belud', 10),
(82, 'Kudat', 10),
(83, 'Kota Marudu', 10),
(84, 'Beaufort', 10),
(85, 'Kunak', 10),
(86, 'Tenom', 10),
(87, 'Putatan', 10),
(88, 'Pitas', 10),
(89, 'Tambunan', 10),
(90, 'Tongod', 10),
(91, 'Sipitang', 10),
(92, 'Nabawan', 10),
(93, 'Kuala Penyu', 10),
(94, 'Kuching', 11),
(95, 'Miri', 11),
(96, 'Sibu', 11),
(97, 'Bintulu', 11),
(98, 'Serian', 11),
(99, 'Samarahan', 11),
(100, 'Sri Aman', 11),
(101, 'Marudi', 11),
(102, 'Betong', 11),
(103, 'Sarikei', 11),
(104, 'Kapit', 11),
(105, 'Bau', 11),
(106, 'Limbang', 11),
(107, 'Saratok', 11),
(108, 'Mukah', 11),
(109, 'Simunjan', 11),
(110, 'Lawas', 11),
(111, 'Belaga', 11),
(112, 'Lundu', 11),
(113, 'Asajaya', 11),
(114, 'Daro', 11),
(115, 'Tatau', 11),
(116, 'Maradong', 11),
(117, 'Kanowit', 11),
(118, 'Lubok Antu', 11),
(119, 'Selangau', 11),
(120, 'Song', 11),
(121, 'Dalat', 11),
(122, 'Matu', 11),
(123, 'Julau', 11),
(124, 'Pakan', 11),
(125, 'Padawan', 11),
(126, 'Petaling', 12),
(127, 'Hulu Langat', 12),
(128, 'Klang', 12),
(129, 'Gombak', 12),
(130, 'Kuala Langat', 12),
(131, 'Sepang', 12),
(132, 'Kuala Selangor', 12),
(133, 'Hulu Selangor', 12),
(134, 'Sabak Bernam', 12),
(135, 'Kuala Terengganu', 13),
(136, 'Kemaman', 13),
(137, 'Dungun', 13),
(138, 'Besut', 13),
(139, 'Marang', 13),
(140, 'Hulu Terengganu', 13),
(141, 'Setiu', 13),
(142, 'Kuala Lumpur', 14),
(143, 'Labuan', 14),
(144, 'Putrajaya', 14);

-- --------------------------------------------------------

--
-- Table structure for table `list_kampung`
--

CREATE TABLE IF NOT EXISTS `list_kampung` (
  `kampung_id` int(11) NOT NULL AUTO_INCREMENT,
  `kampung_name` varchar(255) NOT NULL,
  `list_district_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`kampung_id`),
  KEY `list_district_id` (`list_district_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `list_kampung`
--

INSERT INTO `list_kampung` (`kampung_id`, `kampung_name`, `list_district_id`) VALUES
(1, 'Kampung Manis', 11),
(2, 'Kampung Mempelam', 10),
(3, 'Kampung Awah', NULL),
(4, 'Kampung Bagan Belat', NULL),
(5, 'Kampung Baru Cina', NULL),
(6, 'Kampung Baru, Kuala Lumpur', NULL),
(7, 'Kampung Baru Rhu Muda', NULL),
(8, 'Kampung Basong', NULL),
(9, 'Kampung Batu Berangkai', NULL),
(10, 'Kampung Belukar Luas', NULL),
(11, 'Kampung Betong', NULL),
(12, 'Kampung Bukit Parit', NULL),
(13, 'Kampung Bukit Tok Beng', NULL),
(14, 'Kampung Changkat Belulang', NULL),
(15, 'Kampung Changkat Keruing', NULL),
(16, 'Kampung Changkat Tin', NULL),
(17, 'Kampung Dato Seri Kamaruddin', NULL),
(18, 'Kampung Durian Mentangau', NULL),
(19, 'Kampung Gelam Melaka', NULL),
(20, 'Kampung Gong Nangka', NULL),
(21, 'Kampung Gong Sentol', NULL),
(22, 'Kampung Gunung Mesah', NULL),
(23, 'Kampung Jenderam Hulu', NULL),
(24, 'Kampung Jerangau Barat', NULL),
(25, 'Kampung Jong, Grik', NULL),
(26, 'Kampung Kachau', NULL),
(27, 'Kampung Dato'' Haji Abdul Ghani Othman', NULL),
(28, 'Kampung Tanjung Batu Darat', NULL),
(29, 'Kampung Kayan', NULL),
(30, 'Kampung Kepayang', NULL),
(31, 'Kampung Kolam, Pulau Pinang', NULL),
(32, 'Kampung Kuala Jengai', NULL),
(33, 'Kampung Kubang Chandung', NULL),
(34, 'Kampung Landas', NULL),
(35, 'Kampung Melayu Majidee', NULL),
(36, 'Kampung Morten', NULL),
(37, 'Kampung Nako Nambua', NULL),
(38, 'Kampung Nenasi Darat', NULL),
(39, 'Kampung Nenasi Pantai', NULL),
(40, 'Kampung Padang, Perak', NULL),
(41, 'Kampung Padang Gajah', NULL),
(42, 'Kampung Pali', NULL),
(43, 'Kampung Pali', NULL),
(44, 'Kampung Pandan, Kuala Lumpur', NULL),
(45, 'Kampung Pantai Seberang Marang', NULL),
(46, 'Kampung Pasir Raja Dungun', NULL),
(47, 'Rusila', NULL),
(48, 'Kampung Tok Fakir', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `list_negeri`
--

CREATE TABLE IF NOT EXISTS `list_negeri` (
  `list_state_id` int(11) NOT NULL AUTO_INCREMENT,
  `list_state_name` varchar(255) NOT NULL,
  `list_state_nicename` varchar(255) NOT NULL,
  PRIMARY KEY (`list_state_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `list_negeri`
--

INSERT INTO `list_negeri` (`list_state_id`, `list_state_name`, `list_state_nicename`) VALUES
(1, 'JOHOR', 'Johor'),
(2, 'KEDAH', 'Kedah'),
(3, 'KELANTAN', 'Kelantan'),
(4, 'MELAKA', 'Melaka'),
(5, 'NEGERI SEMBILAN', 'Negeri Sembilan'),
(6, 'PAHANG', 'Pahang'),
(7, 'PERAK', 'Perak'),
(8, 'PERLIS', 'Perlis'),
(9, 'PULAU PINANG', 'Pulau Pinang'),
(10, 'SABAH', 'Sabah'),
(11, 'SARAWAK', 'Sarawak'),
(12, 'SELANGOR', 'Selangor'),
(13, 'TERENGGANU', 'Terengganu'),
(14, 'WILAYAH PERSEKUTUAN KUALA LUMPUR', 'Wilayah Persekutuan Kuala Lumpur');

-- --------------------------------------------------------

--
-- Table structure for table `list_pekerjaan`
--

CREATE TABLE IF NOT EXISTS `list_pekerjaan` (
  `pekerjaan_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  PRIMARY KEY (`pekerjaan_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `list_pekerjaan`
--

INSERT INTO `list_pekerjaan` (`pekerjaan_id`, `nama`) VALUES
(1, 'Pengajar'),
(2, 'Buruh'),
(3, 'Kontraktor'),
(4, 'Penjawat Awam'),
(5, 'Penjawat Kerajaan'),
(6, 'Menteri'),
(7, 'Jurutera'),
(8, 'Penganggur'),
(9, 'Lain-lain'),
(10, 'Juruteknik ICT'),
(11, 'Tiada');

-- --------------------------------------------------------

--
-- Table structure for table `list_status_kadbancian`
--

CREATE TABLE IF NOT EXISTS `list_status_kadbancian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `list_status_kadbancian`
--

INSERT INTO `list_status_kadbancian` (`id`, `name`, `label`) VALUES
(1, 'Belum Dicetak', 'info'),
(2, 'Sudah Dicetak', 'alert');

-- --------------------------------------------------------

--
-- Table structure for table `list_status_orangasli`
--

CREATE TABLE IF NOT EXISTS `list_status_orangasli` (
  `status_orangasli_id` int(11) NOT NULL AUTO_INCREMENT,
  `status_orangasli_name` varchar(255) NOT NULL,
  `status_orangasli_label` varchar(255) NOT NULL,
  PRIMARY KEY (`status_orangasli_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `list_status_orangasli`
--

INSERT INTO `list_status_orangasli` (`status_orangasli_id`, `status_orangasli_name`, `status_orangasli_label`) VALUES
(1, 'Baru Didaftarkan', 'info'),
(2, 'Menunggu Pendaftaran Ahli Keluarga', 'alert'),
(3, 'Selesai Untuk Cetakan Kad Bancian', 'success');

-- --------------------------------------------------------

--
-- Table structure for table `list_status_temujanji`
--

CREATE TABLE IF NOT EXISTS `list_status_temujanji` (
  `status_temujanji_id` int(11) NOT NULL AUTO_INCREMENT,
  `status_temujanji_nama` varchar(255) NOT NULL,
  `status_temujanji_label` varchar(255) NOT NULL,
  PRIMARY KEY (`status_temujanji_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `list_status_temujanji`
--

INSERT INTO `list_status_temujanji` (`status_temujanji_id`, `status_temujanji_nama`, `status_temujanji_label`) VALUES
(1, 'Belum Ditetapkan', 'info'),
(2, 'Dalam Proses', 'alert'),
(3, 'Selesai', 'success');

-- --------------------------------------------------------

--
-- Table structure for table `orangasli`
--

CREATE TABLE IF NOT EXISTS `orangasli` (
  `orangasli_id` int(11) NOT NULL AUTO_INCREMENT,
  `ic` varchar(14) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `keturunan` int(11) DEFAULT NULL,
  `agama` int(11) DEFAULT NULL,
  `jantina` varchar(20) DEFAULT NULL,
  `alamat` varchar(60) DEFAULT NULL,
  `negeri` int(11) DEFAULT NULL,
  `daerah` int(11) DEFAULT NULL,
  `poskod` int(11) DEFAULT NULL,
  `statuskahwin` varchar(20) DEFAULT NULL,
  `catatan` text,
  `status_orangasli_id` int(11) DEFAULT NULL,
  `telefon` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pekerjaan` int(11) DEFAULT NULL,
  `negeri_kelahiran` int(11) DEFAULT NULL,
  `pendapatan` varchar(255) DEFAULT NULL,
  `keluarga_id` int(11) DEFAULT NULL,
  `saiz_gambar` varchar(255) DEFAULT NULL,
  `nama_gambar` varchar(255) DEFAULT NULL,
  `kampung` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`orangasli_id`),
  KEY `daerah` (`daerah`),
  KEY `keturunan` (`keturunan`),
  KEY `agama` (`agama`),
  KEY `negeri` (`negeri`),
  KEY `status_orangasli_id` (`status_orangasli_id`),
  KEY `pekerjaan` (`pekerjaan`),
  KEY `negeri_kelahiran` (`negeri_kelahiran`),
  KEY `keluarga_id` (`keluarga_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=88 ;

--
-- Dumping data for table `orangasli`
--

INSERT INTO `orangasli` (`orangasli_id`, `ic`, `nama`, `dob`, `keturunan`, `agama`, `jantina`, `alamat`, `negeri`, `daerah`, `poskod`, `statuskahwin`, `catatan`, `status_orangasli_id`, `telefon`, `email`, `pekerjaan`, `negeri_kelahiran`, `pendapatan`, `keluarga_id`, `saiz_gambar`, `nama_gambar`, `kampung`) VALUES
(87, '700101044197', '', '1970-01-01', 6, NULL, 'Lelaki', '', 3, 23, NULL, 'Belum Berkahwin', NULL, 2, '', '', NULL, NULL, '', NULL, NULL, NULL, 'Kampung Baru Rhu Muda');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `name`) VALUES
(1, 'Aktif'),
(2, 'Tidak Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `temujanji`
--

CREATE TABLE IF NOT EXISTS `temujanji` (
  `temujanji_id` int(11) NOT NULL AUTO_INCREMENT,
  `orangasli_id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `negeri` int(11) DEFAULT NULL,
  `daerah` int(11) DEFAULT NULL,
  `postcode` varchar(255) DEFAULT NULL,
  `tarikh` varchar(255) DEFAULT NULL,
  `masa` varchar(255) DEFAULT NULL,
  `tempat` varchar(255) DEFAULT NULL,
  `penemuduga` varchar(255) DEFAULT NULL,
  `status_temujanji_id` int(11) NOT NULL,
  PRIMARY KEY (`temujanji_id`),
  KEY `orangasli_id` (`orangasli_id`),
  KEY `negeri` (`negeri`),
  KEY `daerah` (`daerah`),
  KEY `status` (`status_temujanji_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(20) NOT NULL,
  `secretkey` char(34) NOT NULL,
  `status_id` int(1) NOT NULL DEFAULT '2',
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`),
  KEY `user_status_fk` (`status_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `login`, `secretkey`, `status_id`, `email`, `phone`, `fullname`) VALUES
(2, 'admin', '$1$2m2.hl5.$Zm/EPiQU7mXqaAbv326z41', 1, 'admin@gmail.com', '01012345678', 'Administrator'),
(7, 'negeri', '$1$B33.0E2.$u7BV07tlNME1Dm3lhSRnZ/', 1, 'pegawainegeri@gmail.com', '01012345678', 'Pegawai Negeri'),
(8, 'daerah', '$1$H22.Ex0.$vEFCMcxh.BGIl0KBpObJ/1', 1, 'pegawaidaerah@gmail.com', '01012345678', 'Pegawai Daerah'),
(9, 'pejabat', '$1$7J1.Ct/.$fRbLd.qWbuIQeg2si0VWw0', 1, 'pegawaipejabat@gmail.com', '01012345678', 'Pegawai Pejabat');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assignments`
--
ALTER TABLE `assignments`
  ADD CONSTRAINT `assignments_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `items` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `itemchildren`
--
ALTER TABLE `itemchildren`
  ADD CONSTRAINT `itemchildren_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `items` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `itemchildren_ibfk_2` FOREIGN KEY (`child`) REFERENCES `items` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kadbancian`
--
ALTER TABLE `kadbancian`
  ADD CONSTRAINT `cetakankeluarga` FOREIGN KEY (`keluarga_id`) REFERENCES `keluarga` (`keluarga_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `statuscetakan` FOREIGN KEY (`statuscetakan`) REFERENCES `list_status_kadbancian` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `keluarga`
--
ALTER TABLE `keluarga`
  ADD CONSTRAINT `daerahkeluarga` FOREIGN KEY (`daerah`) REFERENCES `list_daerah` (`list_district_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `jawatankeluarga` FOREIGN KEY (`status_perjawatan`) REFERENCES `list_pekerjaan` (`pekerjaan_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `negerikeluarga` FOREIGN KEY (`negeri`) REFERENCES `list_negeri` (`list_state_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `statuskeluarga` FOREIGN KEY (`status_ahli`) REFERENCES `list_status_orangasli` (`status_orangasli_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `list_daerah`
--
ALTER TABLE `list_daerah`
  ADD CONSTRAINT `negeridaerah` FOREIGN KEY (`list_state_id`) REFERENCES `list_negeri` (`list_state_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `list_kampung`
--
ALTER TABLE `list_kampung`
  ADD CONSTRAINT `list_kampung_ibfk_1` FOREIGN KEY (`list_district_id`) REFERENCES `list_daerah` (`list_district_id`);

--
-- Constraints for table `orangasli`
--
ALTER TABLE `orangasli`
  ADD CONSTRAINT `agamaorangasli` FOREIGN KEY (`agama`) REFERENCES `list_agama` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `bangsaorangasli` FOREIGN KEY (`keturunan`) REFERENCES `list_bangsa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `daerahorangasli` FOREIGN KEY (`daerah`) REFERENCES `list_daerah` (`list_district_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `keluargaorangasli` FOREIGN KEY (`keluarga_id`) REFERENCES `keluarga` (`keluarga_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `negerikelahiranorangasli` FOREIGN KEY (`negeri_kelahiran`) REFERENCES `list_negeri` (`list_state_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `negeriorangasli` FOREIGN KEY (`negeri`) REFERENCES `list_negeri` (`list_state_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pekerjaanorangasli` FOREIGN KEY (`pekerjaan`) REFERENCES `list_pekerjaan` (`pekerjaan_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `statusorangasli` FOREIGN KEY (`status_orangasli_id`) REFERENCES `list_status_orangasli` (`status_orangasli_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `temujanji`
--
ALTER TABLE `temujanji`
  ADD CONSTRAINT `daerahtemujanji` FOREIGN KEY (`daerah`) REFERENCES `list_daerah` (`list_district_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `negeritemujanji` FOREIGN KEY (`negeri`) REFERENCES `list_negeri` (`list_state_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `statustemujanji` FOREIGN KEY (`status_temujanji_id`) REFERENCES `list_status_temujanji` (`status_temujanji_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `temujanjiorangasli` FOREIGN KEY (`orangasli_id`) REFERENCES `orangasli` (`orangasli_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_status_fk` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
