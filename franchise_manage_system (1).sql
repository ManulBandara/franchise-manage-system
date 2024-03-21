-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2024 at 07:58 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `franchise_manage_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `agreement`
--

CREATE TABLE `agreement` (
  `id` int(11) NOT NULL,
  `filename` varchar(150) NOT NULL,
  `filesize` int(50) NOT NULL,
  `filetype` varchar(150) NOT NULL,
  `upload_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agreement`
--

INSERT INTO `agreement` (`id`, `filename`, `filesize`, `filetype`, `upload_date`) VALUES
(1, 'sample.pdf', 155542, 'application/pdf', 0),
(6, 'Software_Requirement_Specification NEW.pdf', 1397124, 'application/pdf', 0);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `filename` varchar(200) NOT NULL,
  `filesize` int(11) NOT NULL,
  `filetype` varchar(100) NOT NULL,
  `upload_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `filename`, `filesize`, `filetype`, `upload_date`) VALUES
(1, 'Form I-3A (4).docx', 52944, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '2024-03-04 15:39:27'),
(2, 'AutoRecovery save of AssignmentLab_Report_Cover_Page.docx', 4122560, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '2024-03-04 15:43:00'),
(3, 'Form I-3A (4) (1).docx', 52944, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '2024-03-04 20:21:51');

-- --------------------------------------------------------

--
-- Table structure for table `fr_shops`
--

CREATE TABLE `fr_shops` (
  `id` int(11) NOT NULL,
  `fr_name` varchar(150) NOT NULL,
  `fr_code` varchar(150) NOT NULL,
  `fr_location` varchar(150) NOT NULL,
  `regions` varchar(150) NOT NULL,
  `start_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fr_shops`
--

INSERT INTO `fr_shops` (`id`, `fr_name`, `fr_code`, `fr_location`, `regions`, `start_date`) VALUES
(15, 'shop21', 'R-MRG', 'SAB & UVA', 'REGION 02', '2024-03-08'),
(17, 'grgr,grg,rgrg,ggrg', 'R-MRG', 'WPN', 'REGION 02', '2024-03-08'),
(25, 'kk', '4t4t5', 'yyyyyy', 'bbgtb', '2024-03-01');

-- --------------------------------------------------------

--
-- Table structure for table `login_tbl`
--

CREATE TABLE `login_tbl` (
  `tbl_user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_tbl`
--

INSERT INTO `login_tbl` (`tbl_user_id`, `name`, `username`, `password`, `role`) VALUES
(1, 'Lorem Ipsum', 'admin', 'admin', 'admin'),
(3, 'John Doe', 'user', 'user', 'user'),
(4, 'shanika ', 'shanu', '1234', 'admin'),
(5, 'ww', 'ww', 'ww', 'admin'),
(6, 'ww', 'ww', 'ww', 'admin'),
(7, 'nirmal', 'nirmal', 'nirmal', 'admin'),
(8, '', '', '', '-select-');

-- --------------------------------------------------------

--
-- Table structure for table `markers`
--

CREATE TABLE `markers` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `address` varchar(80) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `markers`
--

INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`, `type`) VALUES
(1, 'Sri Lanka Telecom Head Office', 'Lotus Road, Colombo 01', 6.927079, 79.861244, 'office');

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `id` int(11) NOT NULL,
  `province_name` varchar(50) NOT NULL,
  `region_name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `province_name`, `region_name`) VALUES
(16, 'SAB & UVA', 'REGION 02'),
(17, 'NWP', 'REGION 01'),
(18, 'WPN ', 'REGION 01'),
(19, 'Metro 02', 'METRO'),
(20, 'CP', 'REGION 01'),
(22, 'Metro 01', 'METRO'),
(23, 'EP', 'REGION 03'),
(24, 'NP', 'REGION 03'),
(25, 'SP', 'REGION 02'),
(26, 'WPS', 'REGION 02');

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `id` int(11) NOT NULL,
  `region_name` varchar(150) NOT NULL,
  `province_name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`id`, `region_name`, `province_name`) VALUES
(28, 'REGION 01', ''),
(29, 'REGION 02', ''),
(30, 'METRO', ''),
(31, 'REGION 03', '');

-- --------------------------------------------------------

--
-- Table structure for table `rtom`
--

CREATE TABLE `rtom` (
  `id` int(11) NOT NULL,
  `rtom_code` varchar(50) NOT NULL,
  `region_name` varchar(150) NOT NULL,
  `province_name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rtom`
--

INSERT INTO `rtom` (`id`, `rtom_code`, `region_name`, `province_name`) VALUES
(15, 'R-MRG', 'REGION 02', 'SAB & UVA'),
(16, 'R-KLY', 'REGION 01', 'NWP'),
(17, 'R-CW', 'REGION 01', 'NWP'),
(18, 'R-PX', 'REGION 01', 'NWP'),
(19, 'R-KI', 'REGION 01', 'WPN '),
(20, 'R-RN', 'REGION 02', 'SAB & UVA'),
(21, 'R-NG', 'REGION 01', 'WPN '),
(22, 'R-NTB', 'REGION 01', 'WPN '),
(24, 'R-GP', 'REGION 01', 'CP'),
(25, 'R-MD', 'METRO', 'Metro 01'),
(26, 'R-AP', 'REGION 03', 'EP'),
(27, 'R-JA', 'REGION 03', 'NP'),
(28, 'R-GL', 'REGION 02', 'SP'),
(29, 'R-KT', 'REGION 02', 'WPS');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `fr_code` varchar(150) NOT NULL,
  `full_name` varchar(150) NOT NULL,
  `address` varchar(150) NOT NULL,
  `mob_no` int(10) NOT NULL,
  `nic` int(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `fr_code`, `full_name`, `address`, `mob_no`, `nic`, `status`) VALUES
(21, 'code1', 'Ajith', 'Colombo', 666666666, 66666666, 1),
(33, 'code1', 'Kamal', 'malabe', 715400000, 2147483647, 1),
(34, 'code2', 'kasun', 'kegalle', 2147483647, 2147483647, 0),
(35, 'code3', 'Amal', 'Ragama', 333333333, 2147483647, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_data`
--

CREATE TABLE `tb_data` (
  `id` int(50) NOT NULL,
  `regions` varchar(20) NOT NULL,
  `province` varchar(50) NOT NULL,
  `rtom_code` varchar(50) NOT NULL,
  `lea` varchar(50) NOT NULL,
  `so_id` varchar(50) NOT NULL,
  `product_label` varchar(50) NOT NULL,
  `so_datecreated` date DEFAULT NULL,
  `so_ordt_type` varchar(150) NOT NULL,
  `service_type` varchar(150) NOT NULL,
  `cr` varchar(150) NOT NULL,
  `acct_number` int(150) NOT NULL,
  `so_status` varchar(150) NOT NULL,
  `so_statusdate` date DEFAULT NULL,
  `sod_approved_date` date DEFAULT NULL,
  `milestone_1_actual_end_date` date DEFAULT NULL,
  `sales_channel` varchar(150) NOT NULL,
  `sales_person` varchar(150) NOT NULL,
  `so_initiator` varchar(150) NOT NULL,
  `actual_dsp_date` date DEFAULT NULL,
  `iptv_package` varchar(150) NOT NULL,
  `bb_package` varchar(150) NOT NULL,
  `iptv_previous_package` varchar(150) NOT NULL,
  `bb_previous_package` varchar(150) NOT NULL,
  `customer_contact` varchar(150) NOT NULL,
  `imei_no` int(150) NOT NULL,
  `payment_method` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_data`
--

INSERT INTO `tb_data` (`id`, `regions`, `province`, `rtom_code`, `lea`, `so_id`, `product_label`, `so_datecreated`, `so_ordt_type`, `service_type`, `cr`, `acct_number`, `so_status`, `so_statusdate`, `sod_approved_date`, `milestone_1_actual_end_date`, `sales_channel`, `sales_person`, `so_initiator`, `actual_dsp_date`, `iptv_package`, `bb_package`, `iptv_previous_package`, `bb_previous_package`, `customer_contact`, `imei_no`, `payment_method`) VALUES
(789, 'REGIONS', 'PROVINCE', 'RTOM_CODE', 'LEA', 'SO_ID    ', 'PRODUCT_LABEL', '0000-00-00', 'SO_ORDT_TYPE', 'SERVICE_TYPE', 'CR', 0, 'SO_STATUS', '0000-00-00', '0000-00-00', '0000-00-00', 'SALES_CHANNEL', 'SALES_PERSON', 'SO_INITIATOR', '0000-00-00', 'IPTV_PACKAGE', 'BB_PACKAGE', 'IPTV_PREVIOUS_PACKAGE', 'BB_PREVIOUS_PACKAGE', 'Customer_contact', 0, 'PAYMENT_METHOD'),
(790, 'REGION 02', 'SAB & UVA', 'R-MRG', 'MRG', 'MRG202401010050727', '94552276898', '2001-01-24', 'CREATE', 'BB-INTERNET FTTH', 'CR004611634', 51577574, 'CLOSED', '2001-04-24', '2001-03-24', '0000-00-00', 'Talentfort', 'Franchise-MN-2210', 'MNFS02-LAKSHIKA KONARA', '0000-00-00', '', 'FTTH_WEB PAL', '', '', '764680438', 0, ''),
(791, 'REGION 01 ', 'NWP', 'R-KLY', 'KLY', 'KLY202401010057272', '94372280481', '2001-01-24', 'CREATE', 'BB-INTERNET FTTH', 'CR004611002', 51571888, 'CLOSED', '2001-03-24', '0000-00-00', '0000-00-00', 'Talentfort', 'Franchise-KP-2142', 'KPFS01-S M V S SAMARAKOON', '0000-00-00', '', 'FTTH_WEB FAMILY PLUS', '', '', '761952188', 0, ''),
(792, 'REGION 02', 'SAB & UVA', 'R-MRG', 'BZ', 'BZ202401030014854', 'LTE0553133078', '2001-03-24', 'CREATE', 'AB-WIRELESS ACCESS', 'CR004289738', 0, 'CLOSED', '2001-03-24', '2001-03-24', '0000-00-00', 'L.C.Enterprises', 'Franchise-BU-2366', 'BUFS01-ANUSARANI UDDIPANI', '0000-00-00', '', 'PREPAID PRIMARY', '', '', '718089610', 2147483647, 'Prepaid'),
(793, 'REGION 01 ', 'NWP', 'R-CW', 'MC', 'MC202401020084484', '322056092', '2001-02-24', 'CREATE-UPGRD SAME NO', 'V-VOICE FTTH', 'CR003380599', 44481738, 'CLOSED', '2001-04-24', '0000-00-00', '0000-00-00', 'Talentfort', 'Franchise-WP-2049', 'WPFS02-H.P.S.M.G FERNANDO', '0000-00-00', '', '', '', '', '0771275511/0779647439,Mr M M S J Manchanayaka,0771275511', 0, ''),
(794, 'REGION 02', 'SAB & UVA', 'R-MRG', 'MRG', 'MRG202401030012508', 'LTE0553130179', '2001-03-24', 'CREATE', 'AB-WIRELESS ACCESS', 'CR004613763', 0, 'CLOSED', '2001-03-24', '2001-03-24', '0000-00-00', 'Talentfort', 'Franchise-MN-2084', 'MNFS03-LALANTHI SUDARSHANI', '0000-00-00', '', 'PREPAID PRIMARY', '', '', '776765291', 2147483647, 'Prepaid'),
(795, 'REGION 01 ', 'NWP', 'R-PX', 'PX', 'PX202401010052072', 'LTE0323124689', '2001-01-24', 'CREATE', 'AB-WIRELESS ACCESS', 'CR004613153', 0, 'CLOSED', '2001-01-24', '2001-01-24', '0000-00-00', 'Talentfort', 'Franchise-PX-2187', 'PXFS01-T SASIKALA', '0000-00-00', '', 'PREPAID PRIMARY', '', '', '740961826', 2147483647, 'Prepaid'),
(796, 'REGION 01 ', 'NWP', 'R-PX', 'PX', 'PX202401030011619', 'LTE0323124693', '2001-03-24', 'CREATE-RECON', 'AB-WIRELESS ACCESS', 'CR003451504', 39944380, 'CLOSED', '2001-04-24', '2001-03-24', '0000-00-00', 'Talentfort', 'Franchise-PX-2115', 'PXFS01-T SASIKALA', '0000-00-00', '', 'LTE Unlimited 2', '', '', '779153162', 0, 'Postpaid'),
(797, 'REGION 01 ', 'WPN', 'R-KI', 'VR', 'VR202401010055626', '94332258208', '2001-01-24', 'CREATE', 'BB-INTERNET FTTH', 'CR000065882', 35863563, 'CLOSED', '2001-01-24', '0000-00-00', '0000-00-00', 'Talentfort', 'Franchise-WE-2038', 'WEFS02-P D THATHSARANI', '0000-00-00', '', 'FTTH_WEB FAMILY PLUS', '', '', '717125525', 0, ''),
(798, 'REGION 02', 'SAB & UVA', 'R-RN', 'RN', 'RN202401010054301', 'LTE0553139053', '2001-01-24', 'CREATE', 'AB-WIRELESS ACCESS', 'CR004613258', 0, 'CLOSED', '2001-01-24', '2001-01-24', '0000-00-00', 'L.C.Enterprises', 'Franchise-PL-001', 'PLFS02-BHAGYA KULARATHNA', '0000-00-00', '', 'PREPAID PRIMARY', '', '', '764312861', 2147483647, 'Prepaid'),
(799, 'REGION 01 ', 'NWP', 'R-CW', 'LW', 'LW202401020089203', 'IPTV0312266257', '2001-02-24', 'CREATE', 'E-IPTV FTTH', 'CR004613448', 51595450, 'CLOSED', '2001-04-24', '0000-00-00', '0000-00-00', 'Talentfort', 'Franchise-WP-2192', 'WPFS02-H.P.S.M.G FERNANDO', '0000-00-00', 'PEO_SILVER_FTTH', '', '', '', '0740565115,Mr W. S. K. S. Fernando,0740565115', 0, ''),
(800, 'REGION 01 ', 'NWP', 'R-CW', 'LW', 'LW202312280041685', '312255986', '0000-00-00', 'CREATE-UPGRD SAME NO', 'V-VOICE FTTH', 'CR004347366', 47642388, 'CLOSED', '2001-04-24', '0000-00-00', '0000-00-00', 'Talentfort', 'Franchise-WP-2192', 'WPFS02-H.P.S.M.G FERNANDO', '0000-00-00', '', '', '', '', '0717146526,Mrs W. R. S. Padidilian,0775891799', 0, ''),
(801, 'REGION 01 ', 'WPN', 'R-NG', 'NG', 'NG202401020089917', '94313140922', '2001-02-24', 'CREATE', 'BB-INTERNET', 'CR004613523', 0, 'CLOSED', '2001-02-24', '0000-00-00', '0000-00-00', 'Starcom International', 'Franchise-DP-001', 'FT_DIV_NG-STARCOM INTERNATIONAL FT_DIV_NG', '0000-00-00', '', 'LTE_PREPAID PRIMARY', '', '', '717928319', 2147483647, 'Prepaid'),
(802, 'REGION 02', 'SAB & UVA', 'R-MRG', 'MRG', 'MRG202401010047549', 'LTE0553130080', '2001-01-24', 'CREATE', 'AB-WIRELESS ACCESS', 'CR004612858', 0, 'CLOSED', '2001-01-24', '2001-01-24', '0000-00-00', 'Talentfort', 'Franchise-MN-2084', 'MNFS03-LALANTHI SUDARSHANI', '0000-00-00', '', 'PREPAID PRIMARY', '', '', '719696597', 2147483647, 'Prepaid'),
(803, 'REGION 01 ', 'WPN', 'R-KI', 'KDW', 'KDW202312140063748', 'LTE0113458334', '0000-00-00', 'CREATE', 'AB-WIRELESS ACCESS', 'CR004609725', 0, 'CLOSED', '2001-04-24', '0000-00-00', '0000-00-00', 'Talentfort', 'Franchise-KI-0119', 'KHFS02-K.G.S.M.D MUNAWEERA', '0000-00-00', '', 'PREPAID PRIMARY', '', '', '703335187', 2147483647, 'Prepaid'),
(804, 'REGION 01 ', 'NWP', 'R-KLY', 'KLY', 'KLY202401010051738', '94373157459', '2001-01-24', 'CREATE-RECON', 'BB-INTERNET', 'CR003638458', 41590524, 'CLOSED', '2001-01-24', '0000-00-00', '0000-00-00', 'Talentfort', 'Franchise-KP-2142', 'KPFS01-S M V S SAMARAKOON', '0000-00-00', '', 'LTE_WEB STARTER', '', '', '779540280', 0, 'Postpaid'),
(805, 'REGION 01 ', 'WPN', 'R-KI', 'KI', 'KI202401030014551', '113502863', '2001-03-24', 'CREATE', 'V-VOICE', 'CR004443130', 49040247, 'CLOSED', '2001-03-24', '2001-03-24', '0000-00-00', 'Talentfort', 'Franchise-KH-2412', 'KHFS02-K.G.S.M.D MUNAWEERA', '0000-00-00', '', 'Any Joy', '', '', '0778255137,Mr J. A. N. D. Ranasinghe,0778255137', 0, ''),
(806, 'REGION 02', 'SAB & UVA', 'R-RN', 'PE', 'PE202312290095456', 'IPTV0452276200', '0000-00-00', 'CREATE', 'E-IPTV FTTH', 'CR004610261', 51564147, 'CLOSED', '2001-01-24', '0000-00-00', '0000-00-00', 'L.C.Enterprises', 'Franchise-PL-001', 'ND_LCEN_RN-L.C ENTERPRISES ND_LCEN_RN', '0000-00-00', 'PEO_BRONZE_FTTH', '', '', '', '0754996564,Mr D. Dilipa Sadakelum,0754996564', 0, ''),
(807, 'REGION 01 ', 'WPN', 'R-NTB', 'RAN', 'RAN202401040027542', 'LTE0333150144', '2001-04-24', 'CREATE', 'AB-WIRELESS ACCESS', 'CR000724078', 0, 'CLOSED', '2001-04-24', '2001-04-24', '0000-00-00', 'Starcom International', 'Franchise-WA-001', 'RD_STAR_NTB-STARCOM INTERNATIONAL RD_STAR_NTB', '0000-00-00', '', 'PREPAID PRIMARY', '', '', '717579941', 2147483647, 'Prepaid'),
(808, 'METRO', 'Metro 02', 'R-AW', 'PK', 'PK202401040021375', '94112831942', '2001-04-24', 'CREATE', 'BB-INTERNET FTTH', 'CR001132663', 11326633, 'CLOSED', '2001-04-24', '0000-00-00', '0000-00-00', 'Talentfort', 'Franchise-PD-3339', 'PDFS02-W.P.G.K GAYAMALI', '0000-00-00', '', 'FTTH_WEB FAMILY PLUS', '', '', '779492323', 0, ''),
(809, 'REGIONS', 'PROVINCE', 'RTOM_CODE', 'LEA', 'SO_ID    ', 'PRODUCT_LABEL', '0000-00-00', 'SO_ORDT_TYPE', 'SERVICE_TYPE', 'CR', 0, 'SO_STATUS', '0000-00-00', '0000-00-00', '0000-00-00', 'SALES_CHANNEL', 'SALES_PERSON', 'SO_INITIATOR', '0000-00-00', 'IPTV_PACKAGE', 'BB_PACKAGE', 'IPTV_PREVIOUS_PACKAGE', 'BB_PREVIOUS_PACKAGE', 'Customer_contact', 0, 'PAYMENT_METHOD'),
(810, 'REGION 02', 'SAB & UVA', 'R-MRG', 'MRG', 'MRG202401010050727', '94552276898', '2001-01-24', 'CREATE', 'BB-INTERNET FTTH', 'CR004611634', 51577574, 'CLOSED', '2001-04-24', '2001-03-24', '0000-00-00', 'Talentfort', 'Franchise-MN-2210', 'MNFS02-LAKSHIKA KONARA', '0000-00-00', '', 'FTTH_WEB PAL', '', '', '764680438', 0, ''),
(811, 'REGION 01 ', 'NWP', 'R-KLY', 'KLY', 'KLY202401010057272', '94372280481', '2001-01-24', 'CREATE', 'BB-INTERNET FTTH', 'CR004611002', 51571888, 'CLOSED', '2001-03-24', '0000-00-00', '0000-00-00', 'Talentfort', 'Franchise-KP-2142', 'KPFS01-S M V S SAMARAKOON', '0000-00-00', '', 'FTTH_WEB FAMILY PLUS', '', '', '761952188', 0, ''),
(812, 'REGION 02', 'SAB & UVA', 'R-MRG', 'BZ', 'BZ202401030014854', 'LTE0553133078', '2001-03-24', 'CREATE', 'AB-WIRELESS ACCESS', 'CR004289738', 0, 'CLOSED', '2001-03-24', '2001-03-24', '0000-00-00', 'L.C.Enterprises', 'Franchise-BU-2366', 'BUFS01-ANUSARANI UDDIPANI', '0000-00-00', '', 'PREPAID PRIMARY', '', '', '718089610', 2147483647, 'Prepaid'),
(813, 'REGION 01 ', 'NWP', 'R-CW', 'MC', 'MC202401020084484', '322056092', '2001-02-24', 'CREATE-UPGRD SAME NO', 'V-VOICE FTTH', 'CR003380599', 44481738, 'CLOSED', '2001-04-24', '0000-00-00', '0000-00-00', 'Talentfort', 'Franchise-WP-2049', 'WPFS02-H.P.S.M.G FERNANDO', '0000-00-00', '', '', '', '', '0771275511/0779647439,Mr M M S J Manchanayaka,0771275511', 0, ''),
(814, 'REGION 02', 'SAB & UVA', 'R-MRG', 'MRG', 'MRG202401030012508', 'LTE0553130179', '2001-03-24', 'CREATE', 'AB-WIRELESS ACCESS', 'CR004613763', 0, 'CLOSED', '2001-03-24', '2001-03-24', '0000-00-00', 'Talentfort', 'Franchise-MN-2084', 'MNFS03-LALANTHI SUDARSHANI', '0000-00-00', '', 'PREPAID PRIMARY', '', '', '776765291', 2147483647, 'Prepaid'),
(815, 'REGION 01 ', 'NWP', 'R-PX', 'PX', 'PX202401010052072', 'LTE0323124689', '2001-01-24', 'CREATE', 'AB-WIRELESS ACCESS', 'CR004613153', 0, 'CLOSED', '2001-01-24', '2001-01-24', '0000-00-00', 'Talentfort', 'Franchise-PX-2187', 'PXFS01-T SASIKALA', '0000-00-00', '', 'PREPAID PRIMARY', '', '', '740961826', 2147483647, 'Prepaid'),
(816, 'REGION 01 ', 'NWP', 'R-PX', 'PX', 'PX202401030011619', 'LTE0323124693', '2001-03-24', 'CREATE-RECON', 'AB-WIRELESS ACCESS', 'CR003451504', 39944380, 'CLOSED', '2001-04-24', '2001-03-24', '0000-00-00', 'Talentfort', 'Franchise-PX-2115', 'PXFS01-T SASIKALA', '0000-00-00', '', 'LTE Unlimited 2', '', '', '779153162', 0, 'Postpaid'),
(817, 'REGION 01 ', 'WPN', 'R-KI', 'VR', 'VR202401010055626', '94332258208', '2001-01-24', 'CREATE', 'BB-INTERNET FTTH', 'CR000065882', 35863563, 'CLOSED', '2001-01-24', '0000-00-00', '0000-00-00', 'Talentfort', 'Franchise-WE-2038', 'WEFS02-P D THATHSARANI', '0000-00-00', '', 'FTTH_WEB FAMILY PLUS', '', '', '717125525', 0, ''),
(818, 'REGION 02', 'SAB & UVA', 'R-RN', 'RN', 'RN202401010054301', 'LTE0553139053', '2001-01-24', 'CREATE', 'AB-WIRELESS ACCESS', 'CR004613258', 0, 'CLOSED', '2001-01-24', '2001-01-24', '0000-00-00', 'L.C.Enterprises', 'Franchise-PL-001', 'PLFS02-BHAGYA KULARATHNA', '0000-00-00', '', 'PREPAID PRIMARY', '', '', '764312861', 2147483647, 'Prepaid'),
(819, 'REGION 01 ', 'NWP', 'R-CW', 'LW', 'LW202401020089203', 'IPTV0312266257', '2001-02-24', 'CREATE', 'E-IPTV FTTH', 'CR004613448', 51595450, 'CLOSED', '2001-04-24', '0000-00-00', '0000-00-00', 'Talentfort', 'Franchise-WP-2192', 'WPFS02-H.P.S.M.G FERNANDO', '0000-00-00', 'PEO_SILVER_FTTH', '', '', '', '0740565115,Mr W. S. K. S. Fernando,0740565115', 0, ''),
(820, 'REGION 01 ', 'NWP', 'R-CW', 'LW', 'LW202312280041685', '312255986', '0000-00-00', 'CREATE-UPGRD SAME NO', 'V-VOICE FTTH', 'CR004347366', 47642388, 'CLOSED', '2001-04-24', '0000-00-00', '0000-00-00', 'Talentfort', 'Franchise-WP-2192', 'WPFS02-H.P.S.M.G FERNANDO', '0000-00-00', '', '', '', '', '0717146526,Mrs W. R. S. Padidilian,0775891799', 0, ''),
(821, 'REGION 01 ', 'WPN', 'R-NG', 'NG', 'NG202401020089917', '94313140922', '2001-02-24', 'CREATE', 'BB-INTERNET', 'CR004613523', 0, 'CLOSED', '2001-02-24', '0000-00-00', '0000-00-00', 'Starcom International', 'Franchise-DP-001', 'FT_DIV_NG-STARCOM INTERNATIONAL FT_DIV_NG', '0000-00-00', '', 'LTE_PREPAID PRIMARY', '', '', '717928319', 2147483647, 'Prepaid'),
(822, 'REGION 02', 'SAB & UVA', 'R-MRG', 'MRG', 'MRG202401010047549', 'LTE0553130080', '2001-01-24', 'CREATE', 'AB-WIRELESS ACCESS', 'CR004612858', 0, 'CLOSED', '2001-01-24', '2001-01-24', '0000-00-00', 'Talentfort', 'Franchise-MN-2084', 'MNFS03-LALANTHI SUDARSHANI', '0000-00-00', '', 'PREPAID PRIMARY', '', '', '719696597', 2147483647, 'Prepaid'),
(823, 'REGION 01 ', 'WPN', 'R-KI', 'KDW', 'KDW202312140063748', 'LTE0113458334', '0000-00-00', 'CREATE', 'AB-WIRELESS ACCESS', 'CR004609725', 0, 'CLOSED', '2001-04-24', '0000-00-00', '0000-00-00', 'Talentfort', 'Franchise-KI-0119', 'KHFS02-K.G.S.M.D MUNAWEERA', '0000-00-00', '', 'PREPAID PRIMARY', '', '', '703335187', 2147483647, 'Prepaid'),
(824, 'REGION 01 ', 'NWP', 'R-KLY', 'KLY', 'KLY202401010051738', '94373157459', '2001-01-24', 'CREATE-RECON', 'BB-INTERNET', 'CR003638458', 41590524, 'CLOSED', '2001-01-24', '0000-00-00', '0000-00-00', 'Talentfort', 'Franchise-KP-2142', 'KPFS01-S M V S SAMARAKOON', '0000-00-00', '', 'LTE_WEB STARTER', '', '', '779540280', 0, 'Postpaid'),
(825, 'REGION 01 ', 'WPN', 'R-KI', 'KI', 'KI202401030014551', '113502863', '2001-03-24', 'CREATE', 'V-VOICE', 'CR004443130', 49040247, 'CLOSED', '2001-03-24', '2001-03-24', '0000-00-00', 'Talentfort', 'Franchise-KH-2412', 'KHFS02-K.G.S.M.D MUNAWEERA', '0000-00-00', '', 'Any Joy', '', '', '0778255137,Mr J. A. N. D. Ranasinghe,0778255137', 0, ''),
(826, 'REGION 02', 'SAB & UVA', 'R-RN', 'PE', 'PE202312290095456', 'IPTV0452276200', '0000-00-00', 'CREATE', 'E-IPTV FTTH', 'CR004610261', 51564147, 'CLOSED', '2001-01-24', '0000-00-00', '0000-00-00', 'L.C.Enterprises', 'Franchise-PL-001', 'ND_LCEN_RN-L.C ENTERPRISES ND_LCEN_RN', '0000-00-00', 'PEO_BRONZE_FTTH', '', '', '', '0754996564,Mr D. Dilipa Sadakelum,0754996564', 0, ''),
(827, 'REGION 01 ', 'WPN', 'R-NTB', 'RAN', 'RAN202401040027542', 'LTE0333150144', '2001-04-24', 'CREATE', 'AB-WIRELESS ACCESS', 'CR000724078', 0, 'CLOSED', '2001-04-24', '2001-04-24', '0000-00-00', 'Starcom International', 'Franchise-WA-001', 'RD_STAR_NTB-STARCOM INTERNATIONAL RD_STAR_NTB', '0000-00-00', '', 'PREPAID PRIMARY', '', '', '717579941', 2147483647, 'Prepaid'),
(828, 'METRO', 'Metro 02', 'R-AW', 'PK', 'PK202401040021375', '94112831942', '2001-04-24', 'CREATE', 'BB-INTERNET FTTH', 'CR001132663', 11326633, 'CLOSED', '2001-04-24', '0000-00-00', '0000-00-00', 'Talentfort', 'Franchise-PD-3339', 'PDFS02-W.P.G.K GAYAMALI', '0000-00-00', '', 'FTTH_WEB FAMILY PLUS', '', '', '779492323', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agreement`
--
ALTER TABLE `agreement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fr_shops`
--
ALTER TABLE `fr_shops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_tbl`
--
ALTER TABLE `login_tbl`
  ADD PRIMARY KEY (`tbl_user_id`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rtom`
--
ALTER TABLE `rtom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_data`
--
ALTER TABLE `tb_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agreement`
--
ALTER TABLE `agreement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fr_shops`
--
ALTER TABLE `fr_shops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `login_tbl`
--
ALTER TABLE `login_tbl`
  MODIFY `tbl_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `rtom`
--
ALTER TABLE `rtom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tb_data`
--
ALTER TABLE `tb_data`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=829;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
