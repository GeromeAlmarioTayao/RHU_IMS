-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2022 at 03:30 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tayao_ims`
--

-- --------------------------------------------------------

--
-- Table structure for table `ims_admin`
--

CREATE TABLE `ims_admin` (
  `s_id` int(11) NOT NULL,
  `f_name` text NOT NULL,
  `m_name` text NOT NULL,
  `l_name` text NOT NULL,
  `con_num` bigint(20) NOT NULL,
  `b_day` date NOT NULL,
  `gend` text NOT NULL,
  `adrrs` text NOT NULL,
  `email` text NOT NULL,
  `pass` int(11) NOT NULL,
  `c_pass` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ims_admin`
--

INSERT INTO `ims_admin` (`s_id`, `f_name`, `m_name`, `l_name`, `con_num`, `b_day`, `gend`, `adrrs`, `email`, `pass`, `c_pass`) VALUES
(9, 'Gerome', 'A', 'Tayao', 9457819049, '2022-11-24', 'male', '(beside) 422, AC. Reyes Street', 'tayao.gerome.a@gmail.com', 112233, 112233),
(1122, 'Gerome', 'A', 'tayao', 9457819049, '2022-11-24', 'm', '(Beside) 422 A.C. Reyes Street', '6@ackerman.gq', 111, 111),
(36346, 'Geromefdsfdsf', 'A', 'Tayao', 9457819049, '2022-11-30', 'dsfgsdfg', '(beside) 422, AC. Reyes Street', 'tayao.gerome.a@gmail.com', 3456346, 34563634),
(123123, 'Gerome1111', 'A', 'Tayao', 9457819049, '2022-11-30', 'male', '(beside) 422, AC. Reyes Street', 'tayao.gerome.a@gmail.com', 123123, 123123);

-- --------------------------------------------------------

--
-- Table structure for table `ims_announce`
--

CREATE TABLE `ims_announce` (
  `a_code` text NOT NULL,
  `a_type` text NOT NULL,
  `a_cont` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ims_announce`
--

INSERT INTO `ims_announce` (`a_code`, `a_type`, `a_cont`) VALUES
('001', 'Important', 'Kasalukuyang estado ng COVID-19 sa ating Bayan ng Plaridel: ACTIVE Confirmed - 3 RECOVERED  Confirmed - 5,098 REINFECTION  - 0 DEATH  - 261 ACTIVE Suspect - 3 CLEARED Suspect - 2,831 *Ang bilang ng mga kaso ay mula sa pinagsama-samang datos mula sa ating Provincial at Municipal Health Offices. Ang mga naitalang pasyente ay mga  Plarideleño na nagpatingin sa ating RHU at iba’t-ibang ospital. Sa kasulukuyan, mayroon po tayong naitalang 4 na bagong kaso ng kumpirmadong COVID-19. 29 taong gulang mula sa Parulan  64 taong gulang mula sa Sta. Ines 71 taong gulang mula sa Banga 2nd Kasama po ng aming tanggapan, ang Barangay Health Emergency Response Team at ang Philippine National Police- Plaridel upang siguruhin na hindi lalabag sa order na strict home quarantine at sa patuloy na contact tracing sa mga symptomatic close contacts. Tayo po ay nasa ilalim pa rin ng pandemya at patuloy pa rin ang pananalasa ng COVID-19. Bagaman pinapayagan na ang boluntaryong pagsusuot ng mask sa mga hindi matao at open spaces na maganda ang bentilasyon (outdoors), panatilihin pa rin po natin ang maayos na pagsusuot ng mask sa mga lugar na matao, hindi maganda ang bentilasyon, pampublikong sasakyan, at sa iba pang enclosed o indoor spaces. Gayundin ang paghuhugas ng kamay at physical distancing upang maiwasan ang pagkalat ng COVID-19. Patuloy po tayong mag-ingat. Maraming Salamat po!'),
('002', 'Event', '𝙋𝙇𝘼𝙍𝙄𝘿𝙀𝙇 𝘽𝘼𝙆𝙐𝙉𝘼 𝙐𝙋𝘿𝘼𝙏𝙀 𝐏𝐈𝐍𝐀𝐒 𝐋𝐀𝐊𝐀𝐒💪 𝗕𝗔𝗞𝗨𝗡𝗔𝗛𝗔𝗡𝗚 𝗕𝗔𝗬𝗔𝗡 𝗞𝗜𝗗𝗦 𝟱-𝟭𝟭 𝗬𝗘𝗔𝗥𝗦 𝗢𝗟𝗗 | 𝗠𝗜𝗡𝗢𝗥 𝟭𝟮-𝟭𝟳 𝗬𝗘𝗔𝗥𝗦 𝗢𝗟𝗗 | 𝗔𝗗𝗨𝗟𝗧 📍 𝗪𝗔𝗟𝗧𝗘𝗥𝗠𝗔𝗥𝗧 𝗣𝗟𝗔𝗥𝗜𝗗𝗘𝗟 | 𝗗𝗘𝗖𝗘𝗠𝗕𝗘𝗥 𝟱-𝟳,𝟮𝟬𝟮𝟮 🕗𝟵:𝟬𝟬𝗔𝗠 - 𝟰:𝟬𝟬𝗣𝗠 Araw-araw ang pagbabakuna para sa edad 5-PATAAS na nagnanais magpabakuna ng: ✔️First dose ✔️Second dose ✔️Booster(12-17 years old | Adult) ✔️Second Booster(Adult) Dalhin lamang ang mga sumusunod: 1. Magdala ng Birth Certificarte o Baptismal Certificate at ID 2. Valid ID o School ID ng bata. 3. Valid ID ng magulang o ng legal guardian para sa makakasama ng babakunahan. 4. Authorization letter galing sa magulang o Brgy. Certificate of Guardianship o Special power of Attorney. #safePLARIDEL #DisiplinaMuna #PlaridelBulacan #PinasLakas'),
('003', 'Event', '📣𝐏𝐀𝐁𝐀𝐓𝐈𝐃 Bilang pakikiisa sa  paggunita ng Undas, ang pagbabakuna ay ipagpapatuloy sa 𝗡𝗢𝗩𝗘𝗠𝗕𝗘𝗥 𝟯, 𝟮𝟬𝟮𝟮.  Maraming salamat po. #SafePlaridel #DisiplinaMuna #PlaridelBulacan');

-- --------------------------------------------------------

--
-- Table structure for table `ims_date`
--

CREATE TABLE `ims_date` (
  `man_date` date NOT NULL,
  `exp_date` date NOT NULL,
  `ship_date` date NOT NULL,
  `prod_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ims_date`
--

INSERT INTO `ims_date` (`man_date`, `exp_date`, `ship_date`, `prod_date`) VALUES
('2022-11-30', '2022-11-30', '0000-00-00', '2022-11-30'),
('2022-11-30', '2022-11-30', '2022-11-30', '2022-11-30');

-- --------------------------------------------------------

--
-- Table structure for table `ims_gallery`
--

CREATE TABLE `ims_gallery` (
  `p_gal` blob NOT NULL,
  `s_gal` blob NOT NULL,
  `g_gal` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ims_inventory`
--

CREATE TABLE `ims_inventory` (
  `prod_id` text NOT NULL,
  `prod_quan` int(11) NOT NULL,
  `prod_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ims_inventory`
--

INSERT INTO `ims_inventory` (`prod_id`, `prod_quan`, `prod_type`) VALUES
('fgfhdgh', 5445, '4ghnfnfh'),
('aaaa', 111, 'hakdog'),
('a', 42455, 'gsgsfg');

-- --------------------------------------------------------

--
-- Table structure for table `ims_product`
--

CREATE TABLE `ims_product` (
  `p_id` int(11) NOT NULL,
  `p_name` text NOT NULL,
  `p_desc` text NOT NULL,
  `man` text NOT NULL,
  `p_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ims_product`
--

INSERT INTO `ims_product` (`p_id`, `p_name`, `p_desc`, `man`, `p_type`) VALUES
(2147483647, 'paracetamol', 'analgesic', 'unilab', ' medicine');

-- --------------------------------------------------------

--
-- Table structure for table `ims_staff`
--

CREATE TABLE `ims_staff` (
  `staff_id` int(11) NOT NULL,
  `m_name` text NOT NULL,
  `l_name` text NOT NULL,
  `s_name` text NOT NULL,
  `con_num` text NOT NULL,
  `b_day` date NOT NULL,
  `gend` text NOT NULL,
  `adrrs` date NOT NULL,
  `f_name` text NOT NULL,
  `pass` text NOT NULL,
  `cpass` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ims_staff`
--

INSERT INTO `ims_staff` (`staff_id`, `m_name`, `l_name`, `s_name`, `con_num`, `b_day`, `gend`, `adrrs`, `f_name`, `pass`, `cpass`, `email`) VALUES
(0, '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', ''),
(2147483647, 'A', 'Tayao', '', '09457819049', '2022-11-30', 'male', '0000-00-00', 'Geromestaff', '2345235', '23453245', 'tayao.gerome.a@gmail.com'),
(33636, 'A', 'Tayao', '', '09457819049', '2022-11-30', 'dsdsds', '0000-00-00', 'Gerome2', '3456346', '346346', 'tayao.gerome.a@gmail.com'),
(1122, 'A', 'Tayao', '', '09457819049', '2022-12-15', 'male', '0000-00-00', 'gerome', 'admin', 'admin', 'tayao.gerome.a@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
