-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 11, 2014 at 09:15 AM
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
-- Table structure for table `FACEBOOK_POSTS`
--

CREATE TABLE IF NOT EXISTS `FACEBOOK_POSTS` (
  `id` int(11) NOT NULL,
  `comments` int(11) DEFAULT NULL,
  `created_time` datetime DEFAULT NULL,
  `likes` int(11) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  `message` longtext,
  `picture` varchar(200) DEFAULT NULL,
  `shares` int(11) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `FACEBOOK_POSTS`
--

INSERT INTO `FACEBOOK_POSTS` (`id`, `comments`, `created_time`, `likes`, `link`, `message`, `picture`, `shares`, `type`, `updated_time`) VALUES
(0, 23, '2014-02-28 17:46:21', 25, 'https://www.facebook.com/LassenNPS/photos/a.206534759379976.57606.142958832404236/787067464660033/?t', 'The snow keeps falling! We have 1.5 feet of new snow and 3 feet total on the top of the old ski area just above the Kohm Yah-mah-nee Visitor Center. What will you pull out of your winter quiver this weekend--skis, snowshoes, a sled? -AS', 'https://fbcdn-photos-d-a.akamaihd.net/hphotos-ak-prn2/t1/1779968_787067464660033_144645865_s.jpg', 71, 'photo', '2014-03-01 15:39:54'),
(1, 9, '2014-02-26 16:58:14', 25, 'https://www.facebook.com/LassenNPS/photos/a.206534759379976.57606.142958832404236/785890271444419/?t', 'Applause goes to two cousins from Oroville who climbed snow-covered Brokeoff Mountain and Lassen Peak in a two-day benefit challenge for disadvantaged kids in the Pacific Northwest. http://ow.ly/u1J78 -AS', 'https://fbcdn-photos-f-a.akamaihd.net/hphotos-ak-ash4/t1/1912072_785890271444419_234057546_s.jpg', 26, 'photo', '2014-02-27 20:08:35'),
(2, 0, '2014-02-23 17:31:18', 0, 'https://www.facebook.com/LassenNPS/photos/a.784228714943908.1073741830.142958832404236/7842333849434', 'Like Sierra Nevada, Lassen recycles metal, wood, batteries, light bulbs, motor oil, toner, propane canisters, e-waste, and more. Every item kept out of a landfill is a success.', 'https://fbcdn-photos-h-a.akamaihd.net/hphotos-ak-ash3/t1/1969164_784233384943441_2007072634_s.jpg', 0, 'photo', '2014-02-23 17:31:18'),
(3, 0, '2014-02-23 17:31:18', 0, 'https://www.facebook.com/LassenNPS/photos/a.784228714943908.1073741830.142958832404236/7842333682767', 'Businesses, Lassen, and California as a whole have taken a stand against unnecessary idling. What do you do to help end smog in the sunshine state?', 'https://fbcdn-photos-b-a.akamaihd.net/hphotos-ak-frc3/t1/1743635_784233368276776_1488083747_s.jpg', 0, 'photo', '2014-02-23 17:31:18'),
(4, 2, '2014-02-23 17:27:43', 25, 'https://www.facebook.com/LassenNPS/photos/a.784228714943908.1073741830.142958832404236/7842288382772', 'Lassen Volcanic National Park staff joined Sierra Nevada for a sustainability tour at their Chico facility which received certification from the U.S. Zero Waste Business Council for diverting 99.8% of its waste from landfill.', 'https://fbcdn-photos-e-a.akamaihd.net/hphotos-ak-frc1/t1/1891224_784228838277229_1380002290_s.jpg', 0, 'photo', '2014-02-23 21:07:07'),
(5, 1, '2014-02-22 16:00:30', 22, 'http://ow.ly/tSxdV', 'Pikas, are alpine members of the rabbit family, and are also very susceptible to climate change. This video highlights what many parks, including Lassen, are doing to learn more about pikas and how climate change could affect them. http://ow.ly/tSxdV -so', 'https://fbexternal-a.akamaihd.net/safe_image.php?d=AQAJve2dWVTk8R3u&w=130&h=130&url=http%3A%2F%2Fi1.ytimg.com%2Fvi%2FOVgyIoPU40U%2Fmaxresdefault.jpg', 0, 'video', '2014-02-22 16:36:22'),
(6, 9, '2014-02-20 16:48:44', 25, 'https://www.facebook.com/LassenNPS/photos/a.206534759379976.57606.142958832404236/782476121785834/?t', 'Looking for a great way to give back to your national park? Spend a summer in one! Lassen is now recruiting campground hosts for the summer season! http://www.volunteer.gov/results.cfm?ID=13797 -AS', 'https://fbcdn-photos-b-a.akamaihd.net/hphotos-ak-ash3/t1/1379551_782476121785834_11883793_s.jpg', 51, 'photo', '2014-02-21 07:27:29'),
(7, 1, '2014-02-14 19:25:48', 25, 'https://www.facebook.com/LassenNPS/photos/a.206534759379976.57606.142958832404236/778243918875721/?t', 'We hope that you all have a happy Valentine', 'https://fbcdn-photos-c-a.akamaihd.net/hphotos-ak-frc3/t1/1921986_778243918875721_2081346249_s.jpg', 0, 'photo', '2014-02-14 21:22:11'),
(8, 2, '2014-02-13 16:03:22', 25, 'https://www.facebook.com/LassenNPS/photos/a.206534759379976.57606.142958832404236/777348122298634/?t', 'Remember winter? We''re headed sky high for this aerial view of the northeast side of Lassen Peak. -AS', 'https://fbcdn-photos-e-a.akamaihd.net/hphotos-ak-ash3/t1/1010982_777348122298634_1846717680_s.jpg', 41, 'photo', '2014-02-16 19:37:20'),
(9, 10, '2014-02-12 00:53:28', 25, 'https://www.facebook.com/LassenNPS/photos/a.206534759379976.57606.142958832404236/776311245735655/?t', 'I am very happy to share photos of the recent snowfall in the park! The park received amounts ranging from approximately 3 inches at Manzanita up to 3 feet on Lassen Peak. There is plenty of snow for play on the southwest side of the park. What are you going to do first? http://www.flickr.com/photos/lassennps/sets/72157640152591574/ -AS', 'https://fbcdn-photos-g-a.akamaihd.net/hphotos-ak-ash3/t1/1932476_776311245735655_685348952_s.jpg', 52, 'photo', '2014-02-12 18:23:06'),
(10, 1, '2014-02-10 22:06:08', 9, '', 'Fire Management will take advantage of the recent snow and rain and resume pile burning in the Table Mountain area starting today. If the wet weather holds, work may continue into the Nobles area as well. -LW http://ow.ly/tubJq', '', 0, 'status', '2014-02-11 04:00:54'),
(11, 8, '2014-02-10 16:02:23', 25, 'https://www.facebook.com/LassenNPS/photos/a.206534759379976.57606.142958832404236/775518062481640/?t', 'Have you ever tried to get a good look at a snowflake only to watch it melt in your hand? These incredible images capture their intricate beauty frozen in time. http://ow.ly/tbpgG -AS', 'https://fbcdn-photos-a-a.akamaihd.net/hphotos-ak-frc3/t1/1794780_775518062481640_1161759975_s.jpg', 12, 'photo', '2014-02-12 03:00:35'),
(12, 3, '2014-02-08 19:47:44', 25, 'https://www.facebook.com/photo.php?fbid=10151862971566389&set=a.74409236388.86690.59420116388&type=1', 'Lassen Volcanic National Park shared National Park Service''s photo.', 'https://fbcdn-photos-e-a.akamaihd.net/hphotos-ak-prn1/t1/71477_10151862971566389_1410127154_s.jpg', 0, 'photo', '2014-02-11 00:40:47'),
(13, 25, '2014-02-07 16:16:11', 25, 'https://www.facebook.com/LassenNPS/photos/a.206534759379976.57606.142958832404236/773697145997065/?t', 'Underneath these letters in the snow is a layer of ice, partially covering Reflection Lake. What are your thought about this act? -so http://ow.ly/i/4tgIM', 'https://fbcdn-photos-h-a.akamaihd.net/hphotos-ak-ash3/t1/923114_773697145997065_1611790779_s.jpg', 0, 'photo', '2014-02-10 20:54:02'),
(14, 10, '2014-02-06 16:02:57', 25, 'https://www.facebook.com/LassenNPS/photos/a.206534759379976.57606.142958832404236/773163622717084/?t', 'Remember winter? We''re going way back with this 2009 photo from Maurice Kugler. Did you walk on the old Sulphur Works trail? -AS', 'https://fbcdn-photos-b-a.akamaihd.net/hphotos-ak-prn2/t1/1901608_773163622717084_1250779918_s.jpg', 1, 'photo', '2014-02-07 15:25:00'),
(15, 0, '2014-02-05 16:03:50', 13, 'http://vimeo.com/78188069', 'What would it look like if birds left visible trails behind them, like jets tracing the sky with smoke? -AS', 'https://fbexternal-a.akamaihd.net/safe_image.php?d=AQDnNZAeZq47pvZM&w=130&h=130&url=http%3A%2F%2Fb.vimeocdn.com%2Fts%2F453%2F540%2F453540769_640.jpg', 0, 'video', '2014-02-05 16:03:50'),
(16, 0, '2014-02-03 16:01:44', 20, 'http://youtu.be/95bYATFIOxs', 'How exactly did the Devastated Area get its name? This video from an active volcano in Indonesia captures the dramatic force of a pyroclastic flow. -AS', 'https://fbexternal-a.akamaihd.net/safe_image.php?d=AQBVHVkemK5pFBL1&w=130&h=130&url=http%3A%2F%2Fi1.ytimg.com%2Fvi%2F95bYATFIOxs%2Fmaxresdefault.jpg', 2, 'video', '2014-02-03 16:01:44'),
(17, 0, '2014-02-02 17:29:34', 25, 'http://www.wired.com/wiredscience/2014/02/large-explosive-eruption-ecuadors-tungurahua/', 'See the ongoing eruption of a stratovolcano in Ecuador via webcam. This volcano has had periods of activity including major eruptions since 1999. -AS', 'https://fbexternal-a.akamaihd.net/safe_image.php?d=AQDoKWTBV31X-TZa&w=154&h=154&url=http%3A%2F%2Fwww.wired.com%2Fimages_blogs%2Fwiredscience%2F2014%2F02%2Fovt-3.jpg', 18, 'link', '2014-02-02 17:29:34'),
(18, 4, '2014-02-02 16:00:42', 25, 'https://www.facebook.com/LassenNPS/photos/a.206534759379976.57606.142958832404236/770971266269653/?t', 'Are you interested in joining the Lassen team? Announcements are now open for summer trail maintenance, masonry, park guide, and fire positions. Learn more and apply at http://ow.ly/tbgKW -AS', 'https://fbcdn-photos-a-a.akamaihd.net/hphotos-ak-frc1/t1/1000920_770971266269653_278299068_s.jpg', 30, 'photo', '2014-02-03 04:27:22'),
(19, 6, '2014-02-01 16:01:04', 25, 'https://www.facebook.com/LassenNPS/photos/a.206534759379976.57606.142958832404236/770444716322308/?t', 'Lassen will begin a fuel reduction project in the NW corner of the park in early February. Onetime entry mechanical treatment will be used to reduce unhealthy fuel loads in these areas. go.nps.gov/nwg -AS', 'https://fbcdn-photos-g-a.akamaihd.net/hphotos-ak-prn2/t1/1800475_770444716322308_509820882_s.jpg', 1, 'photo', '2014-02-01 19:16:38'),
(20, 7, '2014-01-31 16:03:33', 25, 'https://www.facebook.com/LassenNPS/photos/a.206534759379976.57606.142958832404236/769908616375918/?t', 'We have reached the final year of the Lassen Peak Trail restoration project! Enjoy a hike to the summit on one of six selected weekends this summer. http://ow.ly/t7Ckq', 'https://fbcdn-photos-e-a.akamaihd.net/hphotos-ak-prn2/t1/1662680_769908616375918_94223560_s.jpg', 21, 'photo', '2014-02-07 00:06:34'),
(21, 2, '2014-01-31 00:11:03', 25, 'http://youtu.be/tbPhGN69E3Q', 'Here''s a repost of this morning with the video embedded! -AS', 'https://fbexternal-a.akamaihd.net/safe_image.php?d=AQC7blsl4h2xSIn7&w=130&h=130&url=http%3A%2F%2Fi1.ytimg.com%2Fvi%2FtbPhGN69E3Q%2Fmaxresdefault.jpg', 2, 'video', '2014-01-31 00:43:21'),
(22, 4, '2014-01-30 17:45:04', 24, 'http://youtu.be/tbPhGN69E3Q', 'The 2014 Dark Sky Festival dates are here! Discover what the dark sky holds for you.\rhttp://youtu.be/tbPhGN69E3Q', 'http://youtu.be/tbPhGN69E3Q', 11, 'status', '2014-01-30 23:16:12'),
(23, 12, '2014-01-29 23:19:47', 25, 'https://www.facebook.com/LassenNPS/photos/a.206534759379976.57606.142958832404236/768995833133863/?t', 'It''s coming. Tomorrow. Photographer Josh Hawley is ready. Are you? -AS', 'https://fbcdn-photos-c-a.akamaihd.net/hphotos-ak-frc3/t1/1656136_768995833133863_715858825_s.jpg', 56, 'photo', '2014-01-30 05:42:25'),
(24, 5, '2014-01-25 21:40:13', 25, 'https://www.facebook.com/LassenNPS/photos/a.206534759379976.57606.142958832404236/766578140042299/?t', 'It''s a good time to take advantage of the spring-like conditions throughout the park. New photos of this mild January are available on Flickr: http://www.flickr.com/photos/lassennps/sets/72157640152591574/ -AS', 'https://fbcdn-photos-b-a.akamaihd.net/hphotos-ak-prn2/t1/1622127_766578140042299_938291834_s.jpg', 22, 'photo', '2014-01-31 16:18:58');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 11, 2014 at 09:15 AM
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
-- Table structure for table `FACEBOOK_POSTS`
--

CREATE TABLE IF NOT EXISTS `FACEBOOK_POSTS` (
  `id` int(11) NOT NULL,
  `comments` int(11) DEFAULT NULL,
  `created_time` datetime DEFAULT NULL,
  `likes` int(11) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  `message` longtext,
  `picture` varchar(200) DEFAULT NULL,
  `shares` int(11) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `FACEBOOK_POSTS`
--

INSERT INTO `FACEBOOK_POSTS` (`id`, `comments`, `created_time`, `likes`, `link`, `message`, `picture`, `shares`, `type`, `updated_time`) VALUES
(0, 23, '2014-02-28 17:46:21', 25, 'https://www.facebook.com/LassenNPS/photos/a.206534759379976.57606.142958832404236/787067464660033/?t', 'The snow keeps falling! We have 1.5 feet of new snow and 3 feet total on the top of the old ski area just above the Kohm Yah-mah-nee Visitor Center. What will you pull out of your winter quiver this weekend--skis, snowshoes, a sled? -AS', 'https://fbcdn-photos-d-a.akamaihd.net/hphotos-ak-prn2/t1/1779968_787067464660033_144645865_s.jpg', 71, 'photo', '2014-03-01 15:39:54'),
(1, 9, '2014-02-26 16:58:14', 25, 'https://www.facebook.com/LassenNPS/photos/a.206534759379976.57606.142958832404236/785890271444419/?t', 'Applause goes to two cousins from Oroville who climbed snow-covered Brokeoff Mountain and Lassen Peak in a two-day benefit challenge for disadvantaged kids in the Pacific Northwest. http://ow.ly/u1J78 -AS', 'https://fbcdn-photos-f-a.akamaihd.net/hphotos-ak-ash4/t1/1912072_785890271444419_234057546_s.jpg', 26, 'photo', '2014-02-27 20:08:35'),
(2, 0, '2014-02-23 17:31:18', 0, 'https://www.facebook.com/LassenNPS/photos/a.784228714943908.1073741830.142958832404236/7842333849434', 'Like Sierra Nevada, Lassen recycles metal, wood, batteries, light bulbs, motor oil, toner, propane canisters, e-waste, and more. Every item kept out of a landfill is a success.', 'https://fbcdn-photos-h-a.akamaihd.net/hphotos-ak-ash3/t1/1969164_784233384943441_2007072634_s.jpg', 0, 'photo', '2014-02-23 17:31:18'),
(3, 0, '2014-02-23 17:31:18', 0, 'https://www.facebook.com/LassenNPS/photos/a.784228714943908.1073741830.142958832404236/7842333682767', 'Businesses, Lassen, and California as a whole have taken a stand against unnecessary idling. What do you do to help end smog in the sunshine state?', 'https://fbcdn-photos-b-a.akamaihd.net/hphotos-ak-frc3/t1/1743635_784233368276776_1488083747_s.jpg', 0, 'photo', '2014-02-23 17:31:18'),
(4, 2, '2014-02-23 17:27:43', 25, 'https://www.facebook.com/LassenNPS/photos/a.784228714943908.1073741830.142958832404236/7842288382772', 'Lassen Volcanic National Park staff joined Sierra Nevada for a sustainability tour at their Chico facility which received certification from the U.S. Zero Waste Business Council for diverting 99.8% of its waste from landfill.', 'https://fbcdn-photos-e-a.akamaihd.net/hphotos-ak-frc1/t1/1891224_784228838277229_1380002290_s.jpg', 0, 'photo', '2014-02-23 21:07:07'),
(5, 1, '2014-02-22 16:00:30', 22, 'http://ow.ly/tSxdV', 'Pikas, are alpine members of the rabbit family, and are also very susceptible to climate change. This video highlights what many parks, including Lassen, are doing to learn more about pikas and how climate change could affect them. http://ow.ly/tSxdV -so', 'https://fbexternal-a.akamaihd.net/safe_image.php?d=AQAJve2dWVTk8R3u&w=130&h=130&url=http%3A%2F%2Fi1.ytimg.com%2Fvi%2FOVgyIoPU40U%2Fmaxresdefault.jpg', 0, 'video', '2014-02-22 16:36:22'),
(6, 9, '2014-02-20 16:48:44', 25, 'https://www.facebook.com/LassenNPS/photos/a.206534759379976.57606.142958832404236/782476121785834/?t', 'Looking for a great way to give back to your national park? Spend a summer in one! Lassen is now recruiting campground hosts for the summer season! http://www.volunteer.gov/results.cfm?ID=13797 -AS', 'https://fbcdn-photos-b-a.akamaihd.net/hphotos-ak-ash3/t1/1379551_782476121785834_11883793_s.jpg', 51, 'photo', '2014-02-21 07:27:29'),
(7, 1, '2014-02-14 19:25:48', 25, 'https://www.facebook.com/LassenNPS/photos/a.206534759379976.57606.142958832404236/778243918875721/?t', 'We hope that you all have a happy Valentine', 'https://fbcdn-photos-c-a.akamaihd.net/hphotos-ak-frc3/t1/1921986_778243918875721_2081346249_s.jpg', 0, 'photo', '2014-02-14 21:22:11'),
(8, 2, '2014-02-13 16:03:22', 25, 'https://www.facebook.com/LassenNPS/photos/a.206534759379976.57606.142958832404236/777348122298634/?t', 'Remember winter? We''re headed sky high for this aerial view of the northeast side of Lassen Peak. -AS', 'https://fbcdn-photos-e-a.akamaihd.net/hphotos-ak-ash3/t1/1010982_777348122298634_1846717680_s.jpg', 41, 'photo', '2014-02-16 19:37:20'),
(9, 10, '2014-02-12 00:53:28', 25, 'https://www.facebook.com/LassenNPS/photos/a.206534759379976.57606.142958832404236/776311245735655/?t', 'I am very happy to share photos of the recent snowfall in the park! The park received amounts ranging from approximately 3 inches at Manzanita up to 3 feet on Lassen Peak. There is plenty of snow for play on the southwest side of the park. What are you going to do first? http://www.flickr.com/photos/lassennps/sets/72157640152591574/ -AS', 'https://fbcdn-photos-g-a.akamaihd.net/hphotos-ak-ash3/t1/1932476_776311245735655_685348952_s.jpg', 52, 'photo', '2014-02-12 18:23:06'),
(10, 1, '2014-02-10 22:06:08', 9, '', 'Fire Management will take advantage of the recent snow and rain and resume pile burning in the Table Mountain area starting today. If the wet weather holds, work may continue into the Nobles area as well. -LW http://ow.ly/tubJq', '', 0, 'status', '2014-02-11 04:00:54'),
(11, 8, '2014-02-10 16:02:23', 25, 'https://www.facebook.com/LassenNPS/photos/a.206534759379976.57606.142958832404236/775518062481640/?t', 'Have you ever tried to get a good look at a snowflake only to watch it melt in your hand? These incredible images capture their intricate beauty frozen in time. http://ow.ly/tbpgG -AS', 'https://fbcdn-photos-a-a.akamaihd.net/hphotos-ak-frc3/t1/1794780_775518062481640_1161759975_s.jpg', 12, 'photo', '2014-02-12 03:00:35'),
(12, 3, '2014-02-08 19:47:44', 25, 'https://www.facebook.com/photo.php?fbid=10151862971566389&set=a.74409236388.86690.59420116388&type=1', 'Lassen Volcanic National Park shared National Park Service''s photo.', 'https://fbcdn-photos-e-a.akamaihd.net/hphotos-ak-prn1/t1/71477_10151862971566389_1410127154_s.jpg', 0, 'photo', '2014-02-11 00:40:47'),
(13, 25, '2014-02-07 16:16:11', 25, 'https://www.facebook.com/LassenNPS/photos/a.206534759379976.57606.142958832404236/773697145997065/?t', 'Underneath these letters in the snow is a layer of ice, partially covering Reflection Lake. What are your thought about this act? -so http://ow.ly/i/4tgIM', 'https://fbcdn-photos-h-a.akamaihd.net/hphotos-ak-ash3/t1/923114_773697145997065_1611790779_s.jpg', 0, 'photo', '2014-02-10 20:54:02'),
(14, 10, '2014-02-06 16:02:57', 25, 'https://www.facebook.com/LassenNPS/photos/a.206534759379976.57606.142958832404236/773163622717084/?t', 'Remember winter? We''re going way back with this 2009 photo from Maurice Kugler. Did you walk on the old Sulphur Works trail? -AS', 'https://fbcdn-photos-b-a.akamaihd.net/hphotos-ak-prn2/t1/1901608_773163622717084_1250779918_s.jpg', 1, 'photo', '2014-02-07 15:25:00'),
(15, 0, '2014-02-05 16:03:50', 13, 'http://vimeo.com/78188069', 'What would it look like if birds left visible trails behind them, like jets tracing the sky with smoke? -AS', 'https://fbexternal-a.akamaihd.net/safe_image.php?d=AQDnNZAeZq47pvZM&w=130&h=130&url=http%3A%2F%2Fb.vimeocdn.com%2Fts%2F453%2F540%2F453540769_640.jpg', 0, 'video', '2014-02-05 16:03:50'),
(16, 0, '2014-02-03 16:01:44', 20, 'http://youtu.be/95bYATFIOxs', 'How exactly did the Devastated Area get its name? This video from an active volcano in Indonesia captures the dramatic force of a pyroclastic flow. -AS', 'https://fbexternal-a.akamaihd.net/safe_image.php?d=AQBVHVkemK5pFBL1&w=130&h=130&url=http%3A%2F%2Fi1.ytimg.com%2Fvi%2F95bYATFIOxs%2Fmaxresdefault.jpg', 2, 'video', '2014-02-03 16:01:44'),
(17, 0, '2014-02-02 17:29:34', 25, 'http://www.wired.com/wiredscience/2014/02/large-explosive-eruption-ecuadors-tungurahua/', 'See the ongoing eruption of a stratovolcano in Ecuador via webcam. This volcano has had periods of activity including major eruptions since 1999. -AS', 'https://fbexternal-a.akamaihd.net/safe_image.php?d=AQDoKWTBV31X-TZa&w=154&h=154&url=http%3A%2F%2Fwww.wired.com%2Fimages_blogs%2Fwiredscience%2F2014%2F02%2Fovt-3.jpg', 18, 'link', '2014-02-02 17:29:34'),
(18, 4, '2014-02-02 16:00:42', 25, 'https://www.facebook.com/LassenNPS/photos/a.206534759379976.57606.142958832404236/770971266269653/?t', 'Are you interested in joining the Lassen team? Announcements are now open for summer trail maintenance, masonry, park guide, and fire positions. Learn more and apply at http://ow.ly/tbgKW -AS', 'https://fbcdn-photos-a-a.akamaihd.net/hphotos-ak-frc1/t1/1000920_770971266269653_278299068_s.jpg', 30, 'photo', '2014-02-03 04:27:22'),
(19, 6, '2014-02-01 16:01:04', 25, 'https://www.facebook.com/LassenNPS/photos/a.206534759379976.57606.142958832404236/770444716322308/?t', 'Lassen will begin a fuel reduction project in the NW corner of the park in early February. Onetime entry mechanical treatment will be used to reduce unhealthy fuel loads in these areas. go.nps.gov/nwg -AS', 'https://fbcdn-photos-g-a.akamaihd.net/hphotos-ak-prn2/t1/1800475_770444716322308_509820882_s.jpg', 1, 'photo', '2014-02-01 19:16:38'),
(20, 7, '2014-01-31 16:03:33', 25, 'https://www.facebook.com/LassenNPS/photos/a.206534759379976.57606.142958832404236/769908616375918/?t', 'We have reached the final year of the Lassen Peak Trail restoration project! Enjoy a hike to the summit on one of six selected weekends this summer. http://ow.ly/t7Ckq', 'https://fbcdn-photos-e-a.akamaihd.net/hphotos-ak-prn2/t1/1662680_769908616375918_94223560_s.jpg', 21, 'photo', '2014-02-07 00:06:34'),
(21, 2, '2014-01-31 00:11:03', 25, 'http://youtu.be/tbPhGN69E3Q', 'Here''s a repost of this morning with the video embedded! -AS', 'https://fbexternal-a.akamaihd.net/safe_image.php?d=AQC7blsl4h2xSIn7&w=130&h=130&url=http%3A%2F%2Fi1.ytimg.com%2Fvi%2FtbPhGN69E3Q%2Fmaxresdefault.jpg', 2, 'video', '2014-01-31 00:43:21'),
(22, 4, '2014-01-30 17:45:04', 24, 'http://youtu.be/tbPhGN69E3Q', 'The 2014 Dark Sky Festival dates are here! Discover what the dark sky holds for you.\rhttp://youtu.be/tbPhGN69E3Q', 'http://youtu.be/tbPhGN69E3Q', 11, 'status', '2014-01-30 23:16:12'),
(23, 12, '2014-01-29 23:19:47', 25, 'https://www.facebook.com/LassenNPS/photos/a.206534759379976.57606.142958832404236/768995833133863/?t', 'It''s coming. Tomorrow. Photographer Josh Hawley is ready. Are you? -AS', 'https://fbcdn-photos-c-a.akamaihd.net/hphotos-ak-frc3/t1/1656136_768995833133863_715858825_s.jpg', 56, 'photo', '2014-01-30 05:42:25'),
(24, 5, '2014-01-25 21:40:13', 25, 'https://www.facebook.com/LassenNPS/photos/a.206534759379976.57606.142958832404236/766578140042299/?t', 'It''s a good time to take advantage of the spring-like conditions throughout the park. New photos of this mild January are available on Flickr: http://www.flickr.com/photos/lassennps/sets/72157640152591574/ -AS', 'https://fbcdn-photos-b-a.akamaihd.net/hphotos-ak-prn2/t1/1622127_766578140042299_938291834_s.jpg', 22, 'photo', '2014-01-31 16:18:58');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
