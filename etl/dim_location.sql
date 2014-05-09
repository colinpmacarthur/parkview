-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 11, 2014 at 07:14 AM
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
-- Table structure for table `dim_location`
--
USE ParkDB;

CREATE TABLE IF NOT EXISTS `dim_location` (
  `city` varchar(30) DEFAULT NULL,
  `state` varchar(2) NOT NULL,
  `recid` varchar(40) NOT NULL,
  `locationID` int(11) NOT NULL,
  PRIMARY KEY (`locationID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dim_location`
--

INSERT INTO `dim_location` (`city`, `state`, `recid`, `locationID`) VALUES
('Sunnyvale', 'CA', 'x6n7mNdjG5k0j8lKSILJ7wCA', 0),
('Berkeley', 'CA', 'Vn7JtT64IYTKFbqJ5vvKAQCA', 1),
('San Francisco', 'CA', '3EIc7WAoiojTFdy3TGOMfQCA', 2),
('Carmichael', 'CA', 'peq-X8LFPJ4omE9QbogFCwCA', 3),
('San Diego', 'CA', 'QT-ThcQQ_PhrmkzOHtiS5ACA', 4),
('San Francisco', 'CA', 'U13tLFucJNz1fNv_Xgdj0gCA', 5),
('San Francisco', 'CA', '97YdD8tkMkUSvGUw6_u4GQCA', 6),
('San Francisco', 'CA', 'NQ0REATs1_MehrNtnCaV2QCA', 7),
('Reno', 'NV', '40-zLltre2Tta9NChc1G8QNV', 8),
('Haddonfield', 'NJ', 'U7NLhaVfOJrHb9XLsZbJnQNJ', 9),
('Oakland', 'CA', 'RlXfOTtpgTfcisRmukrGbwCA', 10),
('Palo Alto', 'CA', 'Wxd-EKF2Z4RHZUmwQ6EeewCA', 11),
('Sunnyvale', 'CA', 'IGhepIyCDPaZkNonWvceLACA', 12),
('Sunnyvale', 'CA', 'IGhepIyCDPaZkNonWvceLACA', 13),
('Mountain View', 'CA', 'P5bUL3Engv-2z6kKohB6qQCA', 14),
('Fremont', 'CA', '08mOpJRCpZe3D8UHszP4FACA', 15),
('Fremont', 'CA', '08mOpJRCpZe3D8UHszP4FACA', 16),
('San Francisco', 'CA', 'Qq_fV6NFDnu7sKuScVS5GgCA', 17),
('Menlo Park', 'CA', 'McnAn0w_Fff4ikbWJXIVwwCA', 18),
('Albany', 'CA', 'HFECrzYDpgbS5EmTBtj2zQCA', 19),
('Sausalito', 'CA', 'RlpgGCfTA8K6RHPVZSUbCACA', 20),
('San Francisco', 'CA', 'wRMo3F2F2q7rVUJ5HWL94gCA', 21),
('Fresh Meadows', 'NY', 'qbbCqdPbdkL2d_E9QeA2fwNY', 22),
('Raleigh', 'NC', 'ksbTOC-TPTE6ElU7MdSv2wNC', 23),
('Burlingame', 'CA', 'PQTL15CKWk_wl1Au_epEZwCA', 24),
('Tenderloin- San Francisco', 'CA', 'PYvw6bSQQTmRNHG9UIhdIACA', 25),
('South San Francisco', 'CA', 'U0i1d6m-wc1QfsmnfwhskQCA', 26),
('Soulsbyville', 'CA', 'CmjKn7A7xg9owg3-v8HrKACA', 27),
('Olympia', 'WA', 'jcqiLhW9yFauyYsgXrbtuwWA', 28),
('Mountain View', 'CA', '8ciQzrRSDqCeS9EIYdpkvACA', 29),
('Roseville', 'CA', 'jDaC8AA80M_9qrjbKfcp3ACA', 30),
('Sunnyvale', 'CA', 'wgV2YW61zD-J1Ve8BGRCAwCA', 31),
('Riverside', 'CA', 'gX-hlVr73YFUnP7kV1mNwgCA', 32),
('San Francisco', 'CA', 's3kRi7b8t2sdtYcsMbqlJACA', 33),
('Fort Wayne', 'IN', 'B8Y9TkqurPFtKVRp7SkjmgIN', 34),
('Davis', 'CA', 'oHYPM5byJHvp_V6tO3Gw0ACA', 35),
('Fairfax', 'CA', 'uhk0McY6qtKHIaqrXw4d3ACA', 36),
('Pleasanton', 'CA', 'frPIlvonqY5P7zlJrJBmZACA', 37),
('Cupertino', 'CA', 'DJaQV3r153ZsBQArxAPl8gCA', 38),
('Lomita', 'CA', 'HGCYnby9JHO2COCqRZFFUwCA', 39),
('San Rafael', 'CA', 'uWwtG9mtkS_aJ4NYIQv5vQCA', 40),
('Berkeley', 'CA', 'JsbKIJsnrgQTMfYn03sLNACA', 41),
('Fairfield', 'CA', 'eGctxT0vVkXkJo5PQKqRqACA', 42),
('Seattle', 'WA', 'i_Oqany6v_R3N4wp9pD_cwWA', 43),
('Santa Clara', 'CA', 'NIeLhx7kQ7KROhH2zs5qYwCA', 44),
('Orange', 'CA', 'nPkTidQvXdVPZH7dgDWarwCA', 45),
('Napa', 'CA', 'Rhvt5HoMG7mayNd437Vm2wCA', 46),
('San Francisco', 'CA', 'LibQbvb4QV7k4-VkBjzj7gCA', 47),
('San Rafael', 'CA', 'EHwNw8KOy8PbkCz46mdhhACA', 48),
('Palo Alto', 'CA', 'SA5sUiuj2IZVuUA3Eh04agCA', 49),
('Ypsilanti', 'MI', '9YOhegAGsDiY_NkgKhidcgMI', 50),
('Reno', 'NV', 'm-n_AHwndmHAgZIsu52kYANV', 51),
('Benicia', 'CA', 'WOw9TLTaTzJd4Do4MBbcHACA', 52),
('Pleasant Hill', 'CA', 'lTOI2bMO1w-uKhbFdLHyCACA', 53),
('Logan Square- Chicago', 'IL', '6y4eje_xWus0GSO3EYSl7wIL', 54),
('Redding', 'CA', 'WXx3gZnrIysGFnpGMCskwgCA', 55),
('San Francisco', 'CA', 'tUKLf9n7RsqIB3yMaSvHSQCA', 56),
('Los Altos', 'CA', 'AGm0ij7gr0KsB34LDRInNwCA', 57),
('Livermore', 'CA', '9QUc43ndukaWJn4zp9qKbwCA', 58),
('Berkeley', 'CA', 'CpYy-uIO7V5TY30DnkoeOwCA', 59),
('San Jose', 'CA', 'Mofkwxg3OeKDDMog3bO7TgCA', 60),
('San Francisco', 'CA', '0CaycNoMFFXZSnSr1p3rRgCA', 61),
('Pacifica', 'CA', 'Amw8k9QMUo4Fqec0gL1fwgCA', 62),
('Campbell', 'CA', '4P8EDoVkcSLJs2XP5DJIPgCA', 63),
('San Francisco', 'CA', 'CQ2_oP57ObaLTgjqVzbERwCA', 64),
('Santa Cruz', 'CA', 'JMCK1SCOL5tc0Fv6KuvTtACA', 65),
('Concord', 'CA', 'p6OCnoxtRv8vE-vJqY7g5gCA', 66),
('Portland', 'OR', 'rkycWb53TaYk27F1POlswwOR', 67),
('Los Angeles', 'CA', 'LgdmczjO47SjwwTrAjqJcwCA', 68),
('Redwood City', 'CA', 'ErN45NaxbX5qumx9s4qr3wCA', 69),
('Oakland', 'CA', 'vD_F55lR1hMPxV3Y2Z1jEACA', 70),
('Milpitas', 'CA', 'YkFOjXpZcTHRdt6FNQCvWgCA', 71),
('Denver', 'CO', 'Z11XMewR8U4fCzxpDEbCcgCO', 72),
('San Francisco', 'CA', 'ZtmeHAQyNFku338dJMIfTgCA', 73),
('San Francisco', 'CA', 'eRV6cKVHNqzXuESU6dAP-QCA', 74),
('San Francisco', 'CA', '4Myw3LTiv88e21qDRi5GHQCA', 75),
('San Mateo', 'CA', '5L0eiAkoQIVvI_XOjzhFpACA', 76),
('Stow', 'OH', '51munej7rdZuB7KfPofhaAOH', 77),
('Ithaca', 'NY', 'Q4LcMIymPIEU9ZrGit4TfwNY', 78),
('Akron', 'OH', 'hHOsJjdR1R4rzB08DivfvwOH', 79),
('Medina', 'OH', 'qnbh2dQj-RaICIk-nr-B_AOH', 80),
('Grand Rapids', 'MI', 'fhQFQY5kxQ8KEvVczDrJygMI', 81),
('Los Angeles', 'CA', 'QuZbJquRtbY9O9JrB9NpxQCA', 82),
('San Jose', 'CA', 'EbbOIQ5oAamS9D_B_7cC7wCA', 83),
('Northfield', 'OH', 'V1QpQwlAqfBGF5HnF43kqgOH', 84),
('Foster City', 'CA', 'B2Enx8HdwU6GZf4DUoBnbACA', 85),
('San Francisco', 'CA', 'Bf87HcPERF9yiSjb2tQBqwCA', 86),
('Lake Villa', 'IL', 'A4tYnpJPUMXQpbx9TcyTbQIL', 87),
('Glens Falls', 'NY', 'wr6LCS0KEsh2HfSuMURWdgNY', 88),
('Cleveland', 'OH', 'dt9IHwfuZs9D9LOH7gjNewOH', 89),
('Red Bank', 'NJ', '#NAME?NJ', 90),
('Hudson', 'OH', 'hsTKuARh2meQxbTfKctbawOH', 91),
('Atlanta', 'GA', 'IgnxtqWIR21FztbdIdT0_wGA', 92),
('San Francisco', 'CA', 'ey-4MP3wXg9byW4QFj2_dgCA', 93),
('Royal Oak', 'MI', 'EL-zatPbzHVew4YTSwzazwMI', 94),
('Haddonfield', 'NJ', 'U7NLhaVfOJrHb9XLsZbJnQNJ', 95),
('Saint Paul', 'MN', 'ySqKXdWrWSsMk9hHAORlSAMN', 96);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 11, 2014 at 07:14 AM
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
-- Table structure for table `dim_location`
--
USE ParkDB;

CREATE TABLE IF NOT EXISTS `dim_location` (
  `city` varchar(30) DEFAULT NULL,
  `state` varchar(2) NOT NULL,
  `recid` varchar(40) NOT NULL,
  `locationID` int(11) NOT NULL,
  PRIMARY KEY (`locationID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dim_location`
--

INSERT INTO `dim_location` (`city`, `state`, `recid`, `locationID`) VALUES
('Sunnyvale', 'CA', 'x6n7mNdjG5k0j8lKSILJ7wCA', 0),
('Berkeley', 'CA', 'Vn7JtT64IYTKFbqJ5vvKAQCA', 1),
('San Francisco', 'CA', '3EIc7WAoiojTFdy3TGOMfQCA', 2),
('Carmichael', 'CA', 'peq-X8LFPJ4omE9QbogFCwCA', 3),
('San Diego', 'CA', 'QT-ThcQQ_PhrmkzOHtiS5ACA', 4),
('San Francisco', 'CA', 'U13tLFucJNz1fNv_Xgdj0gCA', 5),
('San Francisco', 'CA', '97YdD8tkMkUSvGUw6_u4GQCA', 6),
('San Francisco', 'CA', 'NQ0REATs1_MehrNtnCaV2QCA', 7),
('Reno', 'NV', '40-zLltre2Tta9NChc1G8QNV', 8),
('Haddonfield', 'NJ', 'U7NLhaVfOJrHb9XLsZbJnQNJ', 9),
('Oakland', 'CA', 'RlXfOTtpgTfcisRmukrGbwCA', 10),
('Palo Alto', 'CA', 'Wxd-EKF2Z4RHZUmwQ6EeewCA', 11),
('Sunnyvale', 'CA', 'IGhepIyCDPaZkNonWvceLACA', 12),
('Sunnyvale', 'CA', 'IGhepIyCDPaZkNonWvceLACA', 13),
('Mountain View', 'CA', 'P5bUL3Engv-2z6kKohB6qQCA', 14),
('Fremont', 'CA', '08mOpJRCpZe3D8UHszP4FACA', 15),
('Fremont', 'CA', '08mOpJRCpZe3D8UHszP4FACA', 16),
('San Francisco', 'CA', 'Qq_fV6NFDnu7sKuScVS5GgCA', 17),
('Menlo Park', 'CA', 'McnAn0w_Fff4ikbWJXIVwwCA', 18),
('Albany', 'CA', 'HFECrzYDpgbS5EmTBtj2zQCA', 19),
('Sausalito', 'CA', 'RlpgGCfTA8K6RHPVZSUbCACA', 20),
('San Francisco', 'CA', 'wRMo3F2F2q7rVUJ5HWL94gCA', 21),
('Fresh Meadows', 'NY', 'qbbCqdPbdkL2d_E9QeA2fwNY', 22),
('Raleigh', 'NC', 'ksbTOC-TPTE6ElU7MdSv2wNC', 23),
('Burlingame', 'CA', 'PQTL15CKWk_wl1Au_epEZwCA', 24),
('Tenderloin- San Francisco', 'CA', 'PYvw6bSQQTmRNHG9UIhdIACA', 25),
('South San Francisco', 'CA', 'U0i1d6m-wc1QfsmnfwhskQCA', 26),
('Soulsbyville', 'CA', 'CmjKn7A7xg9owg3-v8HrKACA', 27),
('Olympia', 'WA', 'jcqiLhW9yFauyYsgXrbtuwWA', 28),
('Mountain View', 'CA', '8ciQzrRSDqCeS9EIYdpkvACA', 29),
('Roseville', 'CA', 'jDaC8AA80M_9qrjbKfcp3ACA', 30),
('Sunnyvale', 'CA', 'wgV2YW61zD-J1Ve8BGRCAwCA', 31),
('Riverside', 'CA', 'gX-hlVr73YFUnP7kV1mNwgCA', 32),
('San Francisco', 'CA', 's3kRi7b8t2sdtYcsMbqlJACA', 33),
('Fort Wayne', 'IN', 'B8Y9TkqurPFtKVRp7SkjmgIN', 34),
('Davis', 'CA', 'oHYPM5byJHvp_V6tO3Gw0ACA', 35),
('Fairfax', 'CA', 'uhk0McY6qtKHIaqrXw4d3ACA', 36),
('Pleasanton', 'CA', 'frPIlvonqY5P7zlJrJBmZACA', 37),
('Cupertino', 'CA', 'DJaQV3r153ZsBQArxAPl8gCA', 38),
('Lomita', 'CA', 'HGCYnby9JHO2COCqRZFFUwCA', 39),
('San Rafael', 'CA', 'uWwtG9mtkS_aJ4NYIQv5vQCA', 40),
('Berkeley', 'CA', 'JsbKIJsnrgQTMfYn03sLNACA', 41),
('Fairfield', 'CA', 'eGctxT0vVkXkJo5PQKqRqACA', 42),
('Seattle', 'WA', 'i_Oqany6v_R3N4wp9pD_cwWA', 43),
('Santa Clara', 'CA', 'NIeLhx7kQ7KROhH2zs5qYwCA', 44),
('Orange', 'CA', 'nPkTidQvXdVPZH7dgDWarwCA', 45),
('Napa', 'CA', 'Rhvt5HoMG7mayNd437Vm2wCA', 46),
('San Francisco', 'CA', 'LibQbvb4QV7k4-VkBjzj7gCA', 47),
('San Rafael', 'CA', 'EHwNw8KOy8PbkCz46mdhhACA', 48),
('Palo Alto', 'CA', 'SA5sUiuj2IZVuUA3Eh04agCA', 49),
('Ypsilanti', 'MI', '9YOhegAGsDiY_NkgKhidcgMI', 50),
('Reno', 'NV', 'm-n_AHwndmHAgZIsu52kYANV', 51),
('Benicia', 'CA', 'WOw9TLTaTzJd4Do4MBbcHACA', 52),
('Pleasant Hill', 'CA', 'lTOI2bMO1w-uKhbFdLHyCACA', 53),
('Logan Square- Chicago', 'IL', '6y4eje_xWus0GSO3EYSl7wIL', 54),
('Redding', 'CA', 'WXx3gZnrIysGFnpGMCskwgCA', 55),
('San Francisco', 'CA', 'tUKLf9n7RsqIB3yMaSvHSQCA', 56),
('Los Altos', 'CA', 'AGm0ij7gr0KsB34LDRInNwCA', 57),
('Livermore', 'CA', '9QUc43ndukaWJn4zp9qKbwCA', 58),
('Berkeley', 'CA', 'CpYy-uIO7V5TY30DnkoeOwCA', 59),
('San Jose', 'CA', 'Mofkwxg3OeKDDMog3bO7TgCA', 60),
('San Francisco', 'CA', '0CaycNoMFFXZSnSr1p3rRgCA', 61),
('Pacifica', 'CA', 'Amw8k9QMUo4Fqec0gL1fwgCA', 62),
('Campbell', 'CA', '4P8EDoVkcSLJs2XP5DJIPgCA', 63),
('San Francisco', 'CA', 'CQ2_oP57ObaLTgjqVzbERwCA', 64),
('Santa Cruz', 'CA', 'JMCK1SCOL5tc0Fv6KuvTtACA', 65),
('Concord', 'CA', 'p6OCnoxtRv8vE-vJqY7g5gCA', 66),
('Portland', 'OR', 'rkycWb53TaYk27F1POlswwOR', 67),
('Los Angeles', 'CA', 'LgdmczjO47SjwwTrAjqJcwCA', 68),
('Redwood City', 'CA', 'ErN45NaxbX5qumx9s4qr3wCA', 69),
('Oakland', 'CA', 'vD_F55lR1hMPxV3Y2Z1jEACA', 70),
('Milpitas', 'CA', 'YkFOjXpZcTHRdt6FNQCvWgCA', 71),
('Denver', 'CO', 'Z11XMewR8U4fCzxpDEbCcgCO', 72),
('San Francisco', 'CA', 'ZtmeHAQyNFku338dJMIfTgCA', 73),
('San Francisco', 'CA', 'eRV6cKVHNqzXuESU6dAP-QCA', 74),
('San Francisco', 'CA', '4Myw3LTiv88e21qDRi5GHQCA', 75),
('San Mateo', 'CA', '5L0eiAkoQIVvI_XOjzhFpACA', 76),
('Stow', 'OH', '51munej7rdZuB7KfPofhaAOH', 77),
('Ithaca', 'NY', 'Q4LcMIymPIEU9ZrGit4TfwNY', 78),
('Akron', 'OH', 'hHOsJjdR1R4rzB08DivfvwOH', 79),
('Medina', 'OH', 'qnbh2dQj-RaICIk-nr-B_AOH', 80),
('Grand Rapids', 'MI', 'fhQFQY5kxQ8KEvVczDrJygMI', 81),
('Los Angeles', 'CA', 'QuZbJquRtbY9O9JrB9NpxQCA', 82),
('San Jose', 'CA', 'EbbOIQ5oAamS9D_B_7cC7wCA', 83),
('Northfield', 'OH', 'V1QpQwlAqfBGF5HnF43kqgOH', 84),
('Foster City', 'CA', 'B2Enx8HdwU6GZf4DUoBnbACA', 85),
('San Francisco', 'CA', 'Bf87HcPERF9yiSjb2tQBqwCA', 86),
('Lake Villa', 'IL', 'A4tYnpJPUMXQpbx9TcyTbQIL', 87),
('Glens Falls', 'NY', 'wr6LCS0KEsh2HfSuMURWdgNY', 88),
('Cleveland', 'OH', 'dt9IHwfuZs9D9LOH7gjNewOH', 89),
('Red Bank', 'NJ', '#NAME?NJ', 90),
('Hudson', 'OH', 'hsTKuARh2meQxbTfKctbawOH', 91),
('Atlanta', 'GA', 'IgnxtqWIR21FztbdIdT0_wGA', 92),
('San Francisco', 'CA', 'ey-4MP3wXg9byW4QFj2_dgCA', 93),
('Royal Oak', 'MI', 'EL-zatPbzHVew4YTSwzazwMI', 94),
('Haddonfield', 'NJ', 'U7NLhaVfOJrHb9XLsZbJnQNJ', 95),
('Saint Paul', 'MN', 'ySqKXdWrWSsMk9hHAORlSAMN', 96);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
