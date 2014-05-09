-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 11, 2014 at 07:13 AM
-- Server version: 5.6.12
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ParkDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `dim_userinfo`
--
USE ParkDB;

CREATE TABLE IF NOT EXISTS `dim_userinfo` (
  `yuserid` varchar(25) NOT NULL,
  `avatar` text,
  `username` varchar(30) NOT NULL,
  `badge` varchar(10) NOT NULL,
  `friendcount` int(11) NOT NULL,
  `reviewComment` text,
  `reviewCount` int(5) NOT NULL,
  `ucomment` int(5) NOT NULL,
  `fcomment` int(5) NOT NULL,
  `ccomment` int(5) NOT NULL,
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dim_userinfo`
--

INSERT INTO `dim_userinfo` (`yuserid`, `avatar`, `username`, `badge`, `friendcount`, `reviewComment`, `reviewCount`, `ucomment`, `fcomment`, `ccomment`, `userid`) VALUES
('x6n7mNdjG5k0j8lKSILJ7w', 'http://s3-media2.ak.yelpcdn.com/photo/U8cQH1cygBuwacIK4gMLnw/60s.jpg', 'Meghna S.', 'Elite ', 90, '193', 0, 17, 1, 4, 0),
('Vn7JtT64IYTKFbqJ5vvKAQ', 'http://s3-media1.ak.yelpcdn.com/photo/LxXYznItbGEK0hFoXzd8nw/60s.jpg', 'Angelo D.', 'Elite ', 66, '105', 0, 2, 1, 0, 1),
('3EIc7WAoiojTFdy3TGOMfQ', 'http://s3-media1.ak.yelpcdn.com/photo/CHYWHIz-2k5YRjiSzE3JPQ/60s.jpg', 'Anthony D.', 'Elite ', 124, '380', 0, 1, 0, 0, 2),
('peq-X8LFPJ4omE9QbogFCw', 'http://s3-media3.ak.yelpcdn.com/photo/A6nXGVJKBoERzcy5PsQSmw/60s.jpg', 'Jen J.', 'Elite ', 151, '223', 0, 14, 3, 9, 3),
('QT-ThcQQ_PhrmkzOHtiS5A', 'http://s3-media3.ak.yelpcdn.com/photo/VL2R8W12PAlCupSEjpCsig/60s.jpg', 'Tiffany H.', 'Elite ', 273, '272', 0, 3, 0, 0, 4),
('U13tLFucJNz1fNv_Xgdj0g', 'http://s3-media3.ak.yelpcdn.com/photo/KPjIxkVdRuAN_t_bvLs3CQ/60s.jpg', 'Mel G.', 'Elite ', 88, '1319', 0, 4, 0, 0, 5),
('97YdD8tkMkUSvGUw6_u4GQ', 'http://s3-media2.ak.yelpcdn.com/photo/9R13bz34dWBk_7r1gXcgKQ/60s.jpg', 'Rebecca C.', 'Elite ', 161, '283', 0, 4, 0, 0, 6),
('NQ0REATs1_MehrNtnCaV2Q', 'http://s3-media1.ak.yelpcdn.com/photo/JEaxX6ROizAanCVp6IriYA/60s.jpg', 'Angela B.', 'Elite ', 100, '396', 0, 23, 0, 0, 7),
('40-zLltre2Tta9NChc1G8Q', 'http://s3-media1.ak.yelpcdn.com/photo/P-9CHAb5lXnwS3Oy7kcMPA/60s.jpg', 'Kara V.', 'Elite ', 183, '1737', 0, 1, 0, 0, 8),
('U7NLhaVfOJrHb9XLsZbJnQ', 'http://s3-media1.ak.yelpcdn.com/photo/MtlJl9njXo_vw2swqkaNdQ/60s.jpg', 'Paul V.', 'Elite ', 554, '348', 0, 0, 0, 0, 9),
('RlXfOTtpgTfcisRmukrGbw', 'http://s3-media2.ak.yelpcdn.com/photo/CoaOVxvh7njc7XEgwduP8Q/60s.jpg', 'Jenn C.', 'Elite ', 709, '1124', 0, 3, 1, 2, 10),
('Wxd-EKF2Z4RHZUmwQ6Eeew', 'http://s3-media4.ak.yelpcdn.com/photo/SZWYlqDxR3_OtmNFoyovpg/60s.jpg', 'Adrienne M.', 'Elite ', 523, '923', 0, 3, 0, 2, 11),
('IGhepIyCDPaZkNonWvceLA', 'http://s3-media3.ak.yelpcdn.com/photo/ww7LtDOXuVmh3oK9aLi5-w/60s.jpg', 'Bill G.', 'Elite ', 26, '491', 0, 1, 0, 0, 12),
('IGhepIyCDPaZkNonWvceLA', 'http://s3-media3.ak.yelpcdn.com/photo/ww7LtDOXuVmh3oK9aLi5-w/60s.jpg', 'Bill G.', 'Elite ', 26, '491', 0, 1, 0, 1, 13),
('P5bUL3Engv-2z6kKohB6qQ', 'http://s3-media2.ak.yelpcdn.com/photo/CmsLLJGrWqFTusYsfyLCAA/60s.jpg', 'Kim N.', 'Elite ', 1977, '7552', 0, 2, 0, 2, 14),
('08mOpJRCpZe3D8UHszP4FA', 'http://s3-media4.ak.yelpcdn.com/photo/cfMtSWqqELy5tX6Xk6aWYA/60s.jpg', 'Ann L.', 'Elite ', 480, '2561', 2, 12, 1, 4, 15),
('08mOpJRCpZe3D8UHszP4FA', 'http://s3-media4.ak.yelpcdn.com/photo/cfMtSWqqELy5tX6Xk6aWYA/60s.jpg', 'Ann L.', 'Elite ', 480, '2561', 0, 2, 0, 1, 16),
('Qq_fV6NFDnu7sKuScVS5Gg', 'http://s3-media3.ak.yelpcdn.com/photo/Kvomc87mH9v_uxZxKS4TYQ/60s.jpg', 'Mariko F.', 'Elite ', 206, '607', 0, 4, 1, 3, 17),
('McnAn0w_Fff4ikbWJXIVww', 'http://s3-media4.ak.yelpcdn.com/photo/iOWpW7J-ett2RFXdFoIs_g/60s.jpg', 'Susan L.', 'Elite ', 52, '534', 0, 1, 1, 0, 18),
('HFECrzYDpgbS5EmTBtj2zQ', 'http://s3-media1.ak.yelpcdn.com/photo/QCQbQFA0IyFOGy3J74fj2g/60s.jpg', 'Eric B.', 'Elite ', 1904, '4478', 0, 3, 0, 3, 19),
('RlpgGCfTA8K6RHPVZSUbCA', 'http://s3-media1.ak.yelpcdn.com/photo/kvgt22ZBI1XakyXHonCELg/60s.jpg', 'Keiko E.', '', 14, '21', 0, 0, 0, 0, 20),
('wRMo3F2F2q7rVUJ5HWL94g', 'http://s3-media1.ak.yelpcdn.com/assets/2/www/img/20983a63ea50/default_avatars/user_60_square.png', 'Joe G.', '', 5, '20', 0, 0, 1, 0, 21),
('qbbCqdPbdkL2d_E9QeA2fw', 'http://s3-media1.ak.yelpcdn.com/photo/xAeiBbIRm48TnrVw6ENQrw/60s.jpg', 'Chun M.', '', 202, '191', 0, 2, 2, 1, 22),
('ksbTOC-TPTE6ElU7MdSv2w', 'http://s3-media1.ak.yelpcdn.com/assets/2/www/img/20983a63ea50/default_avatars/user_60_square.png', 'Yelp U.', '', 0, '5', 0, 2, 0, 0, 23),
('PQTL15CKWk_wl1Au_epEZw', 'http://s3-media1.ak.yelpcdn.com/assets/2/www/img/20983a63ea50/default_avatars/user_60_square.png', 'Thomas S.', '', 0, '2', 0, 0, 0, 0, 24),
('PYvw6bSQQTmRNHG9UIhdIA', 'http://s3-media3.ak.yelpcdn.com/photo/k4kuBO_CrMsYQhg2fMmFmw/60s.jpg', 'Zi Jie T.', '', 19, '5', 0, 1, 4, 0, 25),
('U0i1d6m-wc1QfsmnfwhskQ', 'http://s3-media1.ak.yelpcdn.com/photo/TfVkZR6ite2eU7-ZPfto6w/60s.jpg', 'Chung L M.', '', 0, '35', 0, 7, 0, 0, 26),
('CmjKn7A7xg9owg3-v8HrKA', 'http://s3-media4.ak.yelpcdn.com/photo/mzGBNRnQj7Jcyj0qntt7ag/60s.jpg', 'Kara B.', '', 5, '10', 0, 2, 0, 1, 27),
('jcqiLhW9yFauyYsgXrbtuw', 'http://s3-media1.ak.yelpcdn.com/assets/2/www/img/20983a63ea50/default_avatars/user_60_square.png', 'Patty V.', '', 0, '1', 0, 0, 0, 0, 28),
('8ciQzrRSDqCeS9EIYdpkvA', 'http://s3-media2.ak.yelpcdn.com/photo/GzjlhykoZY9hStMU-Q_veA/60s.jpg', 'Kaori M.', '', 59, '522', 0, 0, 0, 0, 29),
('jDaC8AA80M_9qrjbKfcp3A', 'http://s3-media1.ak.yelpcdn.com/assets/2/www/img/20983a63ea50/default_avatars/user_60_square.png', 'Janelle Y.', '', 1, '22', 0, 0, 0, 0, 30),
('wgV2YW61zD-J1Ve8BGRCAw', 'http://s3-media1.ak.yelpcdn.com/assets/2/www/img/20983a63ea50/default_avatars/user_60_square.png', 'ken b.', '', 0, '28', 0, 0, 0, 0, 31),
('gX-hlVr73YFUnP7kV1mNwg', 'http://s3-media3.ak.yelpcdn.com/photo/eBKDeyY837r_iOUe-Ppijw/60s.jpg', 'Teresa E.', '', 0, '20', 0, 0, 0, 0, 32),
('s3kRi7b8t2sdtYcsMbqlJA', 'http://s3-media3.ak.yelpcdn.com/photo/S4Cc2fghCh-BTfLFWN9hpA/60s.jpg', 'jazzy l.', '', 27, '1626', 0, 0, 1, 0, 33),
('B8Y9TkqurPFtKVRp7Skjmg', 'http://s3-media3.ak.yelpcdn.com/photo/iZDtStP8NETiAlaQmcABdQ/60s.jpg', 'Melissa J.', '', 7, '92', 0, 0, 0, 0, 34),
('oHYPM5byJHvp_V6tO3Gw0A', 'http://s3-media4.ak.yelpcdn.com/photo/_YEqfn5d5aYC8HY5DTjntg/60s.jpg', 'Melissa B.', '', 8, '30', 0, 6, 0, 0, 35),
('uhk0McY6qtKHIaqrXw4d3A', 'http://s3-media4.ak.yelpcdn.com/photo/2Vw7CTor_AAu9TCycYFGUw/60s.jpg', 'Neil M.', '', 2, '38', 0, 0, 0, 0, 36),
('frPIlvonqY5P7zlJrJBmZA', 'http://s3-media2.ak.yelpcdn.com/photo/fEB3PO8N2WD1P_gxX4Ljng/60s.jpg', 'Charles C.', '', 15, '54', 0, 3, 0, 0, 37),
('DJaQV3r153ZsBQArxAPl8g', 'http://s3-media2.ak.yelpcdn.com/photo/H0T9TLqL9QPi2Z5Z1jHoCg/60s.jpg', 'Soni K.', '', 499, '177', 0, 5, 1, 1, 38),
('HGCYnby9JHO2COCqRZFFUw', 'http://s3-media2.ak.yelpcdn.com/photo/znFzME-uFUQK180LpMXCoA/60s.jpg', 'Nadeline R.', '', 119, '9', 0, 3, 0, 2, 39),
('uWwtG9mtkS_aJ4NYIQv5vQ', 'http://s3-media3.ak.yelpcdn.com/photo/tpqlYyrrBK-R6hGRhzA6UQ/60s.jpg', 'Debbie H.', '', 12, '20', 0, 0, 0, 0, 40),
('JsbKIJsnrgQTMfYn03sLNA', 'http://s3-media3.ak.yelpcdn.com/photo/f_A06kDhN6YVxXbD9FdV9w/60s.jpg', 'kimberly v.', '', 179, '193', 0, 11, 4, 5, 41),
('eGctxT0vVkXkJo5PQKqRqA', 'http://s3-media4.ak.yelpcdn.com/photo/UGdGt0o7gNYeWKyB8yDoXQ/60s.jpg', 'Dan R.', '', 3, '36', 0, 1, 0, 0, 42),
('i_Oqany6v_R3N4wp9pD_cw', 'http://s3-media1.ak.yelpcdn.com/assets/2/www/img/20983a63ea50/default_avatars/user_60_square.png', 'Jessi R.', '', 0, '21', 0, 1, 0, 0, 43),
('NIeLhx7kQ7KROhH2zs5qYw', 'http://s3-media2.ak.yelpcdn.com/photo/aqXgVEQWRYuPFEmlgwhIvw/60s.jpg', 'Sam K.', '', 173, '729', 0, 3, 0, 0, 44),
('nPkTidQvXdVPZH7dgDWarw', 'http://s3-media3.ak.yelpcdn.com/photo/hyurjACWUQyR93I0Bd-NJw/60s.jpg', 'Kay D.', '', 364, '779', 0, 5, 1, 2, 45),
('Rhvt5HoMG7mayNd437Vm2w', 'http://s3-media4.ak.yelpcdn.com/photo/ZoLsjeV-jJgTz-_2fm6Dyw/60s.jpg', 'Chrysanthemum A.', '', 614, '539', 0, 4, 2, 6, 46),
('LibQbvb4QV7k4-VkBjzj7g', 'http://s3-media3.ak.yelpcdn.com/photo/cTgZ0nzWf_y76yEILaKdQw/60s.jpg', 'Mike M.', '', 29, '426', 0, 1, 0, 1, 47),
('EHwNw8KOy8PbkCz46mdhhA', 'http://s3-media1.ak.yelpcdn.com/photo/F4Pgc1nkOpVD8FXVaZJmyQ/60s.jpg', 'Owen S.', '', 0, '123', 0, 2, 0, 2, 48),
('SA5sUiuj2IZVuUA3Eh04ag', 'http://s3-media2.ak.yelpcdn.com/photo/N_zoikPIV4unVpnq6i6Log/60s.jpg', 'Peter Y.', '', 0, '19', 0, 1, 0, 0, 49),
('9YOhegAGsDiY_NkgKhidcg', 'http://s3-media3.ak.yelpcdn.com/photo/iHDyrQWUnjLqmjtmlpUXuQ/60s.jpg', 'Jennifer R.', '', 9, '63', 0, 0, 0, 0, 50),
('m-n_AHwndmHAgZIsu52kYA', 'http://s3-media3.ak.yelpcdn.com/photo/sWy9nX9w2MLwQ0AdLIKG9w/60s.jpg', 'Tracy S.', '', 173, '481', 0, 16, 3, 0, 51),
('WOw9TLTaTzJd4Do4MBbcHA', 'http://s3-media1.ak.yelpcdn.com/photo/qjEnnUnRZrEclF2X7H20pQ/60s.jpg', 'Litta R.', '', 2, '51', 0, 3, 0, 0, 52),
('lTOI2bMO1w-uKhbFdLHyCA', 'http://s3-media2.ak.yelpcdn.com/photo/ny2rimLhLJtV1u8sPMbI-Q/60s.jpg', 'Lisa G.', '', 9, '44', 0, 4, 0, 1, 53),
('6y4eje_xWus0GSO3EYSl7w', 'http://s3-media1.ak.yelpcdn.com/photo/Y28tnhIJBTlab_v2T3zo4g/60s.jpg', 'Carri H.', '', 12, '47', 0, 6, 3, 2, 54),
('WXx3gZnrIysGFnpGMCskwg', 'http://s3-media3.ak.yelpcdn.com/photo/P_1KDFyTmUWtP_FCX4GMEQ/60s.jpg', 'Buzz F.', '', 110, '265', 0, 1, 0, 4, 55),
('tUKLf9n7RsqIB3yMaSvHSQ', 'http://s3-media3.ak.yelpcdn.com/photo/kdpZb29XaDDTLgQ_7Hj61w/60s.jpg', 'Cindi L.', '', 7, '45', 0, 1, 1, 1, 56),
('AGm0ij7gr0KsB34LDRInNw', 'http://s3-media3.ak.yelpcdn.com/photo/JJmpGdBS5X-zdOwAo4DrCA/60s.jpg', 'Michelle W.', '', 62, '409', 0, 3, 0, 5, 57),
('9QUc43ndukaWJn4zp9qKbw', 'http://s3-media4.ak.yelpcdn.com/photo/gI4kE5ebTWDRHAykvIlQWQ/60s.jpg', 'Candace K.', '', 23, '67', 0, 1, 1, 1, 58),
('CpYy-uIO7V5TY30DnkoeOw', 'http://s3-media4.ak.yelpcdn.com/photo/tqK9uX0id5XQD9be9bpyvg/60s.jpg', 'Lane W.', '', 52, '120', 0, 2, 0, 2, 59),
('Mofkwxg3OeKDDMog3bO7Tg', 'http://s3-media1.ak.yelpcdn.com/assets/2/www/img/20983a63ea50/default_avatars/user_60_square.png', 'Marc I.', '', 0, '9', 0, 5, 0, 2, 60),
('0CaycNoMFFXZSnSr1p3rRg', 'http://s3-media1.ak.yelpcdn.com/photo/qQT8g7yBhONu5jKjoPKpeg/60s.jpg', 'Mitsi M.', '', 120, '240', 0, 8, 8, 9, 61),
('Amw8k9QMUo4Fqec0gL1fwg', 'http://s3-media4.ak.yelpcdn.com/photo/dTs7wYpW6YdND-Kr_oY2LQ/60s.jpg', 'Stuart G.', '', 3, '32', 0, 6, 0, 1, 62),
('4P8EDoVkcSLJs2XP5DJIPg', 'http://s3-media3.ak.yelpcdn.com/photo/Y7CuUQcvvsaZWDiZXTDDuw/60s.jpg', 'Tomomi S.', '', 144, '394', 0, 9, 2, 6, 63),
('CQ2_oP57ObaLTgjqVzbERw', 'http://s3-media4.ak.yelpcdn.com/photo/2Us-kLP1Kga1SYLHS9VEwA/60s.jpg', 'Ji K.', '', 1, '3', 0, 1, 0, 1, 64),
('JMCK1SCOL5tc0Fv6KuvTtA', 'http://s3-media2.ak.yelpcdn.com/photo/O9c1DYjRzUqRyrjPzCbrpw/60s.jpg', 'Sara A.', '', 44, '163', 0, 6, 5, 7, 65),
('p6OCnoxtRv8vE-vJqY7g5g', 'http://s3-media2.ak.yelpcdn.com/photo/tfDpdEeGwuKyKafbDLOoFA/60s.jpg', 'Patrick K.', '', 10, '72', 0, 1, 0, 1, 66),
('rkycWb53TaYk27F1POlsww', 'http://s3-media3.ak.yelpcdn.com/photo/eTUsuPeus79r_rFbugwkjw/60s.jpg', 'Jenny H.', '', 45, '71', 0, 7, 14, 4, 67),
('LgdmczjO47SjwwTrAjqJcw', 'http://s3-media4.ak.yelpcdn.com/photo/Q8PgzmOD-41jtjrgYFQzNQ/60s.jpg', 'Will M.', '', 72, '387', 0, 1, 0, 0, 68),
('ErN45NaxbX5qumx9s4qr3w', 'http://s3-media1.ak.yelpcdn.com/photo/3--gUI4zfI8nrYQl06bEZg/60s.jpg', 'Ile F.', '', 4, '254', 0, 1, 0, 1, 69),
('vD_F55lR1hMPxV3Y2Z1jEA', 'http://s3-media1.ak.yelpcdn.com/photo/YdL9Kqz5dOt1jGPEeMbJ1A/60s.jpg', 'JJ C.', '', 38, '121', 0, 1, 0, 1, 70),
('YkFOjXpZcTHRdt6FNQCvWg', 'http://s3-media1.ak.yelpcdn.com/photo/UherDOEqrxUnbR4Z2CxNuw/60s.jpg', 'Dave A.', '', 78, '50', 0, 1, 0, 0, 71),
('Z11XMewR8U4fCzxpDEbCcg', 'http://s3-media3.ak.yelpcdn.com/photo/SuZalUo1c2p1WZTdixvHfQ/60s.jpg', 'Taj M.', '', 200, '158', 0, 0, 0, 0, 72),
('ZtmeHAQyNFku338dJMIfTg', 'http://s3-media2.ak.yelpcdn.com/photo/Dwi5kMwsVl4k3LyjqRNWYQ/60s.jpg', 'Derek B.', '', 29, '369', 0, 3, 0, 3, 73),
('eRV6cKVHNqzXuESU6dAP-Q', 'http://s3-media1.ak.yelpcdn.com/photo/er8XQFzbHM_ZoHI2pMUJlQ/60s.jpg', 'DD B.', '', 125, '312', 0, 5, 1, 5, 74),
('4Myw3LTiv88e21qDRi5GHQ', 'http://s3-media4.ak.yelpcdn.com/photo/MUGK9l98nItUBFyHjS50TA/60s.jpg', 'robyn s.', '', 11, '148', 0, 4, 1, 1, 75),
('5L0eiAkoQIVvI_XOjzhFpA', 'http://s3-media3.ak.yelpcdn.com/photo/EuGbvCS11gpEA9os2aG1LQ/60s.jpg', 'Rob M.', '', 70, '598', 0, 1, 0, 1, 76),
('51munej7rdZuB7KfPofhaA', 'Eryion H.', ':http://s3-media3.ak.yelpcdn.c', '', 4, '127', 0, 1, 0, 0, 77),
('Q4LcMIymPIEU9ZrGit4Tfw', 'J K.', ':http://s3-media3.ak.yelpcdn.c', '', 6, '58', 0, 1, 1, 0, 78),
('hHOsJjdR1R4rzB08Divfvw', 'Zack H.', ':http://s3-media1.ak.yelpcdn.c', 'Elite ', 89, '359', 0, 1, 0, 0, 79),
('qnbh2dQj-RaICIk-nr-B_A', 'Kevin S.', ':http://s3-media4.ak.yelpcdn.c', '', 53, '236', 0, 17, 14, 9, 80),
('fhQFQY5kxQ8KEvVczDrJyg', 'Anissa C.', ':http://s3-media2.ak.yelpcdn.c', '', 10, '71', 0, 1, 1, 0, 81),
('QuZbJquRtbY9O9JrB9NpxQ', 'Jim W.', ':http://s3-media1.ak.yelpcdn.c', 'Elite ', 618, '1434', 0, 5, 4, 4, 82),
('EbbOIQ5oAamS9D_B_7cC7w', 'Ryan L.', ':http://s3-media1.ak.yelpcdn.c', 'Elite ', 316, '854', 0, 7, 0, 6, 83),
('V1QpQwlAqfBGF5HnF43kqg', 'Edward H.', ':http://s3-media3.ak.yelpcdn.c', '', 0, '33', 0, 8, 2, 4, 84),
('B2Enx8HdwU6GZf4DUoBnbA', 'Heather F.', ':http://s3-media1.ak.yelpcdn.c', '', 45, '286', 0, 3, 2, 2, 85),
('Bf87HcPERF9yiSjb2tQBqw', 'Kevin S.', ':http://s3-media2.ak.yelpcdn.c', '', 410, '1599', 0, 2, 0, 3, 86),
('A4tYnpJPUMXQpbx9TcyTbQ', 'Alison B.', ':http://s3-media3.ak.yelpcdn.c', '', 1, '97', 0, 1, 0, 5, 87),
('wr6LCS0KEsh2HfSuMURWdg', 'mr w.', ':http://s3-media2.ak.yelpcdn.c', '', 0, '42', 0, 1, 1, 1, 88),
('dt9IHwfuZs9D9LOH7gjNew', 'P W.', ':http://s3-media2.ak.yelpcdn.c', '', 256, '921', 0, 1, 0, 1, 89),
('#NAME?', 'Kri B.', ':http://s3-media4.ak.yelpcdn.c', '', 34, '118', 0, 0, 0, 2, 90),
('hsTKuARh2meQxbTfKctbaw', 'Erin M.', ':http://s3-media3.ak.yelpcdn.c', '', 0, '5', 0, 1, 0, 0, 91),
('IgnxtqWIR21FztbdIdT0_w', 'Lexi R.', ':http://s3-media2.ak.yelpcdn.c', '', 20, '17', 0, 2, 1, 1, 92),
('ey-4MP3wXg9byW4QFj2_dg', 'Kimberly K.', ':http://s3-media4.ak.yelpcdn.c', '', 259, '624', 0, 2, 7, 2, 93),
('EL-zatPbzHVew4YTSwzazw', 'Dominique K.', ':http://s3-media3.ak.yelpcdn.c', 'Elite ', 37, '188', 0, 3, 0, 2, 94),
('U7NLhaVfOJrHb9XLsZbJnQ', 'Paul V.', ':http://s3-media1.ak.yelpcdn.c', 'Elite ', 554, '347', 0, 1, 0, 1, 95),
('ySqKXdWrWSsMk9hHAORlSA', 'Phillip Y.', ':http://s3-media1.ak.yelpcdn.c', '', 93, '706', 0, 0, 0, 0, 96);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
