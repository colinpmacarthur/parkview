-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 11, 2014 at 09:12 AM
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
-- Table structure for table `FACEBOOK_COMMENTS`
--

CREATE TABLE IF NOT EXISTS `FACEBOOK_COMMENTS` (
  `id` int(11) NOT NULL,
  `created_time` datetime DEFAULT NULL,
  `user_id` varchar(45) DEFAULT NULL,
  `message` longtext,
  `name` varchar(45) DEFAULT NULL,
  `post_created_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `FACEBOOK_COMMENTS`
--

INSERT INTO `FACEBOOK_COMMENTS` (`id`, `created_time`, `user_id`, `message`, `name`, `post_created_time`) VALUES
(0, '2014-02-28 17:48:59', '1423955340', 'yeah.... finally more !!!', 'Sharon Booth', '2014-02-28 17:46:21'),
(1, '2014-02-28 17:50:03', '1665022267', 'Split Board and a couple days of some pow turns! Can''t wait for Sunday! I''m thinking Diamond Pk and Ridge lakes area will be money!', 'Daniel Dobyns', '2014-02-28 17:46:21'),
(2, '2014-02-28 17:52:29', '11804300', 'AT Skis!!', 'Keith Crawford', '2014-02-28 17:46:21'),
(3, '2014-02-28 17:53:51', '1.00005E+14', 'is there a good place to go sledding near the visitor center?', 'Dustin Panger', '2014-02-28 17:46:21'),
(4, '2014-02-28 18:09:23', '543277674', 'Beautiful!', 'Vienna Taylor', '2014-02-28 17:46:21'),
(5, '2014-02-28 18:11:29', '1E+14', 'Sob. Makes me think of the good times I had when the old ski area was there.', 'Lin Diehl', '2014-02-28 17:46:21'),
(6, '2014-02-28 18:14:36', '1.42959E+14', 'Dustin, there are good spots above and below the snow-covered park highway just behind the visitor center. -AS', 'Lassen Volcanic National Park', '2014-02-28 17:46:21'),
(7, '2014-02-28 18:18:40', '1E+14', 'Yea!', 'Sylvia Smith', '2014-02-28 17:46:21'),
(8, '2014-02-28 18:22:12', '1.00004E+14', 'Yes! You could use some snow!!', 'Marcia Lee Lamson-Shive', '2014-02-28 17:46:21'),
(9, '2014-02-28 18:42:43', '1348931041', 'No snow in our mountains :( Happy for you though. We all need it!!!!!', 'Robin Dressler Smith', '2014-02-28 17:46:21'),
(10, '2014-02-28 19:17:03', '26206158', 'Finally! We had to go to Utah instead for our snowshoeing this year though.', 'Amanda Sutter', '2014-02-28 17:46:21'),
(11, '2014-02-28 19:43:38', '1.00002E+14', 'About time. We just need 15 feet more to break even this year right?', 'Dawna Williams', '2014-02-28 17:46:21'),
(12, '2014-02-28 19:57:22', '1200298571', 'So beautiful!', 'Ann Maresh Troy', '2014-02-28 17:46:21'),
(13, '2014-02-28 20:00:18', '1124381461', 'Please put a chairlift run by renewable energy back in. Dyer Mountain failed, mt. She started ski bowl is too low. This region needs more recreational assets. It is hard for families to go backcountry, so we all spend our money at Tahoe. Chester needs a chairlift back where it was. Please.', 'Joel Rathje', '2014-02-28 17:46:21'),
(14, '2014-02-28 20:03:35', '1124381461', 'It should read Mt. Shasta Ski Bowl is too low.', 'Joel Rathje', '2014-02-28 17:46:21'),
(15, '2014-02-28 21:10:25', '1.00002E+14', 'Melissa - Take a look at this.', 'Corinne Corson', '2014-02-28 17:46:21'),
(16, '2014-02-28 21:44:48', '1.00008E+14', 'That''s where I removed the very last remains'' of the old ski lift still a fun place to sled with the kid''s !', 'Robert Leon', '2014-02-28 17:46:21'),
(17, '2014-02-28 23:00:34', '1.00003E+14', 'So glad CA is getting some much needed moisture!', 'JoAnn Wirth', '2014-02-28 17:46:21'),
(18, '2014-03-01 03:36:19', '1571179654', 'Top o'' The Face.', 'Keith Hoofard', '2014-02-28 17:46:21'),
(19, '2014-03-01 06:46:59', '1.00004E+14', 'Wendy', 'Rebekah Coffey', '2014-02-28 17:46:21'),
(20, '2014-03-01 07:02:14', '1119203785', 'such good news!', 'Michelle Peebles', '2014-02-28 17:46:21'),
(21, '2014-03-01 15:02:57', '731324401', 'I remember that view well!', 'Stacey Hammer Love', '2014-02-28 17:46:21'),
(22, '2014-03-01 15:39:54', '1816314054', 'That is great news and a nice picture. Let''s keep the white stuff coming down. :)', 'Marygail Bender', '2014-02-28 17:46:21'),
(23, '2014-02-26 17:02:14', '1386715497', 'They had perfect weather to do it!', 'Eric Leslie', '2014-02-26 16:58:14'),
(24, '2014-02-26 17:02:36', '1200298571', 'Wonderful!', 'Ann Maresh Troy', '2014-02-26 16:58:14'),
(25, '2014-02-26 17:07:17', '788739029', 'Awesome!', 'Melissa Heitzler', '2014-02-26 16:58:14'),
(26, '2014-02-26 17:30:34', '1004010752', 'Awesome!!', 'Sabine Bungardt Luedecke', '2014-02-26 16:58:14'),
(27, '2014-02-26 18:47:55', '1.21107E+14', 'Keep up the great work! Thank you Landon and Andrew', 'Durango RV Resort', '2014-02-26 16:58:14'),
(28, '2014-02-26 19:23:19', '1350667224', 'Awesome work guys! http://www.auburnjournal.com/article/epic-mountain-climb-personal-patriotic-quest-meadow-vistan', 'Taylor Stanton', '2014-02-26 16:58:14'),
(29, '2014-02-27 02:02:03', '1299431654', 'Wonderful!', 'Sarah Webster', '2014-02-26 16:58:14'),
(30, '2014-02-27 02:07:15', '1531633132', 'That is awesome. Kudos to those guys!', 'Dina Kelley Cochrane', '2014-02-26 16:58:14'),
(31, '2014-02-27 20:08:35', '1E+14', 'Brokeoff is my favorite hike!', 'Shawn Fitzgerald', '2014-02-26 16:58:14'),
(32, '2014-02-23 20:33:24', '1450143852', 'Two of my favorite places combined!!', 'Rebecca Feickert', '2014-02-23 17:27:43'),
(33, '2014-02-23 21:07:07', '1200298571', 'Me, too, Rebecca!', 'Ann Maresh Troy', '2014-02-23 17:27:43'),
(34, '2014-02-22 16:36:22', '1E+14', 'Met some of Lassen''s Pika survey folks last summer. Thanks for volunteering.', 'Sandy Oberg', '2014-02-22 16:00:30'),
(35, '2014-02-20 18:14:22', '1348931041', 'Hope you pick me!!!', 'Robin Dressler Smith', '2014-02-20 16:48:44'),
(36, '2014-02-20 19:08:33', '1273838941', 'This is at the top of my list of things to do during my retirement!', 'Aaron Pollard', '2014-02-20 16:48:44'),
(37, '2014-02-20 19:09:36', '1484672655', 'Hey! That''s my family!! :). They loved hosting Lassen and we loved our visit there too!!', 'Terrielynn Caputo', '2014-02-20 16:48:44'),
(38, '2014-02-20 20:06:27', '1385094057', 'Dad and I would scare away all the tourists!', 'Denise Fortier Switzer', '2014-02-20 16:48:44'),
(39, '2014-02-20 20:36:45', '695211869', 'Nah Denise! Besides, you could welcome the tourists in French! And you have your dog patrol to guard the site!', 'Sylvain Beauregard', '2014-02-20 16:48:44'),
(40, '2014-02-21 02:10:51', '1E+14', 'When I worked for the Forest Service I would often meet campground hosts, they were always the nicest and friendliest people.', 'Patrick Fenton', '2014-02-20 16:48:44'),
(41, '2014-02-21 03:51:17', '1E+14', 'In 5 years. I will be an awesome campground host.', 'Cheyenne Spetzler', '2014-02-20 16:48:44'),
(42, '2014-02-21 06:00:55', '1.00003E+14', 'I love campground hosts!', 'Theresa Kelly', '2014-02-20 16:48:44'),
(43, '2014-02-21 07:27:29', '567338728', 'I''d like to do this!', 'Nancy Hamilton', '2014-02-20 16:48:44'),
(44, '2014-02-14 21:22:11', '1.00008E+14', 'Happy Valentines Day to all the girl''s that work at the park !', 'Robert Leon', '2014-02-14 19:25:48'),
(45, '2014-02-13 22:37:57', '1590679709', 'View from the top of Brokeoff! Is this a recent photo? If so, that''s a pretty hardcore trek in the snow up to the top.', 'Scott Einberger', '2014-02-13 16:03:22'),
(46, '2014-02-16 19:37:20', '1.00001E+14', 'Hello there, I was wondering how much snow that beautiful mountain has gotten? My wife and I went snow shoeing there last year and we fell in love with it and also the winter landscape, and we would love to come back and go snowshoeing. We have just been waiting for winter to arrive.', 'Casey Black', '2014-02-13 16:03:22'),
(47, '2014-02-12 01:03:36', '1E+14', 'Thank you for this, all of the pictures are wonderful!', 'Ruth Darrell Thompson', '2014-02-12 00:53:28'),
(48, '2014-02-12 01:03:38', '5021305', 'Melissa Lockwood - go take some photos!', 'Joshua Contois', '2014-02-12 00:53:28'),
(49, '2014-02-12 01:37:48', '1526513745', 'Tell me about the ranger-led snowshoe walks! :)', 'Jeannie Trizzino', '2014-02-12 00:53:28'),
(50, '2014-02-12 01:55:16', '593444169', 'Great news!', 'Heide Pedersen', '2014-02-12 00:53:28'),
(51, '2014-02-12 02:21:37', '1E+14', 'Great news for sure!', 'Sandy Oberg', '2014-02-12 00:53:28'),
(52, '2014-02-12 02:27:42', '1316598561', 'Might not be enough...yet, but it''s a lovely start!!!', 'Glennis Roseberry', '2014-02-12 00:53:28'),
(53, '2014-02-12 03:09:00', '1.00003E+14', 'Yay for snow play!!', 'Pam Clackler', '2014-02-12 00:53:28'),
(54, '2014-02-12 06:32:45', '747381420', 'It''s a good base to build upon. By the way, is the PG&E remote sensor broken? http://cdec.water.ca.gov/cgi-progs/queryDaily?LLP', 'Michael Bechauf', '2014-02-12 00:53:28'),
(55, '2014-02-12 08:19:12', '1E+14', 'Wait for spring so I can ride my bike on motorless roads.', 'Mark Jaramillo', '2014-02-12 00:53:28'),
(56, '2014-02-12 18:23:06', '1.00003E+14', 'Thanks for the view!', 'Gary Kolosick', '2014-02-12 00:53:28'),
(57, '2014-02-11 04:00:54', '1E+14', 'much better than july. :)', 'Jude Price', '2014-02-10 22:06:08'),
(58, '2014-02-10 16:16:10', '1748667277', 'excellent ?', 'W Earl Leeds II', '2014-02-10 16:02:23'),
(59, '2014-02-10 16:33:43', '1E+14', 'So intricate. How much snow has Lassen recieved?', 'Sandy Oberg', '2014-02-10 16:02:23'),
(60, '2014-02-10 17:06:59', '9391234', 'how much snow you guys get up there with this past storm? by the way it was raining in Redding, I''m guessing A LOT!', 'Ryan Sean Heron', '2014-02-10 16:02:23'),
(61, '2014-02-10 17:24:53', '1.00003E+14', 'Stunning!', 'Pam Clackler', '2014-02-10 16:02:23'),
(62, '2014-02-10 17:53:05', '1453221039', 'Hydrogen bonding at its best!', 'Nan Haynes', '2014-02-10 16:02:23'),
(63, '2014-02-12 00:37:56', '1.42959E+14', '@Ryan We received 18 inches at the southwest visitor center and up to 3 feet at the higher elevations. -AS', 'Lassen Volcanic National Park', '2014-02-10 16:02:23'),
(64, '2014-02-12 00:40:14', '1E+14', 'Thanks AS. That''s good news.....at least it''s a start.', 'Sandy Oberg', '2014-02-10 16:02:23'),
(65, '2014-02-12 03:00:35', '1.00003E+14', 'Looks pretty from Redding.', 'Pam Clackler', '2014-02-10 16:02:23'),
(66, '2014-02-08 23:59:51', '1.00006E+14', 'exceptionally beautiful place!', 'Lon Kimler', '2014-02-08 19:47:44'),
(67, '2014-02-09 02:17:41', '1.71475E+14', 'Indeed, Go', 'Long Distance Backpacking', '2014-02-08 19:47:44'),
(68, '2014-02-11 00:40:47', '1582343226', 'Interesting project.', 'Nadine Cronkhite-Watson', '2014-02-08 19:47:44'),
(69, '2014-02-07 16:18:19', '1460536671', 'Dangerous.', 'Troy Hawkins', '2014-02-07 16:16:11'),
(70, '2014-02-07 16:19:48', '1640896753', 'Idiotic ', 'Niki Sierra', '2014-02-07 16:16:11'),
(71, '2014-02-07 16:20:11', '1E+14', 'EMT job security!', 'Janiska Nordstrom', '2014-02-07 16:16:11'),
(72, '2014-02-07 16:21:59', '1E+14', 'Jerks. Destroyed the unbroken beauty for everyone else.', 'Kendall Martin Ermann', '2014-02-07 16:16:11'),
(73, '2014-02-07 16:27:35', '734955267', 'Definite LNT violation.', 'Amanda Stonehouse', '2014-02-07 16:16:11'),
(74, '2014-02-07 16:38:17', '1039935256', 'Rank stupidity!', 'Paul Young', '2014-02-07 16:16:11'),
(75, '2014-02-07 16:42:06', '1.00003E+14', 'The letters are gonna let sun threw to the ice and melt it..bad if you want to let beuty be..mother nature doesnt like being tampered with..', 'Robert A Houston', '2014-02-07 16:16:11'),
(76, '2014-02-07 16:44:40', '1.00002E+14', 'LEAVE NO TRACE.... We do not want to see the limited mentality that resides in your head... Graffiti,pure and simple...', 'Dennis Ducilla', '2014-02-07 16:16:11'),
(77, '2014-02-07 16:51:37', '1159457844', 'As silly as they were to venture out on thin ice, Better to make tracks in the snow that will melt or be covered by the next snowfall than something more permanent like scribing the rocks or carving the trees.', 'Chris Jeka', '2014-02-07 16:16:11'),
(78, '2014-02-07 16:52:36', '1038466569', 'My son refers to any act of defacing nature or graffiti as "dumber." This qualifies as dumber!', 'Kristi Meyer', '2014-02-07 16:16:11'),
(79, '2014-02-07 16:58:23', '1067659417', 'Treading on thin ice......', 'Scott Lyon', '2014-02-07 16:16:11'),
(80, '2014-02-07 17:00:08', '1235225645', 'Very sad', 'Melissa Robinson', '2014-02-07 16:16:11'),
(81, '2014-02-07 17:04:51', '1519450749', 'Can''t read it', 'Debi Shrum', '2014-02-07 16:16:11'),
(82, '2014-02-07 17:26:53', '1410537946', '@chris jeka, that''s probably what they were thinking. I say, points for the person in both columns. ', 'Kat Wade', '2014-02-07 16:16:11'),
(83, '2014-02-07 17:31:27', '1186471702', 'Foolish.', 'Old Begonia', '2014-02-07 16:16:11'),
(84, '2014-02-07 17:39:22', '748339515', 'Could have had a much different outcome!', 'Becky Delmonico-Smith', '2014-02-07 16:16:11'),
(85, '2014-02-07 18:10:07', '1321749165', 'More than one thought...people having fun, should have used a shovel to make a skate rink, obviously it was thick enough. I use an ice drill to check first. Don''t outlaw ice play.', 'Chuck Elliot', '2014-02-07 16:16:11'),
(86, '2014-02-07 18:16:35', '1454891866', 'Dumb', 'Tammy Irwin Ferencz', '2014-02-07 16:16:11'),
(87, '2014-02-07 18:42:55', '612026571', 'i don''t see the harm in this at all..is just on the ice doesn''t deface the land or leave permanent mark...people just out enjoying their surroundings', 'Kathy Mallar', '2014-02-07 16:16:11'),
(88, '2014-02-07 19:15:54', '1488360915', 'Selfish. Stupidity. People like that don''t need to visit national parks.', 'Kim Hatfield', '2014-02-07 16:16:11'),
(89, '2014-02-07 19:34:15', '1699043362', 'I prefer pristine nature ...', 'Karen M. Lewis', '2014-02-07 16:16:11'),
(90, '2014-02-07 19:36:47', '1.00008E+14', 'look''s better untouched', 'Robert Leon', '2014-02-07 16:16:11'),
(91, '2014-02-07 19:48:09', '1E+14', 'Seems like they are luck to be alive.', 'Mark Jaramillo', '2014-02-07 16:16:11'),
(92, '2014-02-07 20:29:44', '1122771285', 'Jenn we have to go this summer', 'Nicole Harrell', '2014-02-07 16:16:11'),
(93, '2014-02-07 20:32:44', '1E+14', 'do attend.. but this is a really strange post from Lassen Volcanic National Park How about the snow-tubers and X-country skiers... they are leaving lots of marks...', 'Gene Aubin', '2014-02-07 16:16:11'),
(94, '2014-02-06 16:13:02', '1.00001E+14', 'That''s how lassen is suppose to look.', 'Beri Fowler', '2014-02-06 16:02:57'),
(95, '2014-02-06 16:18:25', '1444161355', 'Lets pray that the snow level looks like this again VERY soon.', 'Linda Voorhees', '2014-02-06 16:02:57'),
(96, '2014-02-06 16:21:05', '71800720', 'Any snow pack at all?', 'Luke D. Perkins', '2014-02-06 16:02:57'),
(97, '2014-02-06 16:32:46', '1200298571', 'Beautiful!', 'Ann Maresh Troy', '2014-02-06 16:02:57'),
(98, '2014-02-06 17:09:29', '1.00007E+14', 'Great Pic.', 'George Trefz', '2014-02-06 16:02:57'),
(99, '2014-02-06 18:35:22', '1.00003E+14', 'Many times (even when avalanche warnings were posted). Some of my X-country pals used the Sulfur Works as an access point to get to Lassen Peak and skied down to Manzanita Lake.', 'Chuck Kitterman', '2014-02-06 16:02:57'),
(100, '2014-02-06 19:21:31', '1101002562', '2009 was pretty dry too, right?', 'Katie Gillespie', '2014-02-06 16:02:57'),
(101, '2014-02-06 19:56:08', '1.00008E+14', 'every year it was there since 1994', 'Robert Leon', '2014-02-06 16:02:57'),
(102, '2014-02-07 07:36:51', '1E+14', 'Hi A, please post 2014 Winter snow pictures soon. I''ve been checking your weather and am very glad to see feet of snow coming Lassen''s way. =)', 'Sandy Oberg', '2014-02-06 16:02:57'),
(103, '2014-02-07 15:25:00', '1748667277', '?', 'W Earl Leeds II', '2014-02-06 16:02:57'),
(104, '2014-02-02 16:24:12', '1488360915', 'I hope my son tries this when he''s old enough. (He''s only 13 right now.) But with Boy Scouts and me dragging my kids to Lassen as often as I do, he''ll be well versed in the way and know-hows of Lassen by the time he''s old enough to apply!!', 'Kim Hatfield', '2014-02-02 16:00:42'),
(105, '2014-02-02 18:32:33', '1.00003E+14', 'Matthew Prentiss, Adam Wymer, Tammy Prentiss, Markus McBroome, Lonnie Risling Jr., Garrett Pitsenbarger, Colt Brockman', 'Keith Bova', '2014-02-02 16:00:42'),
(106, '2014-02-03 01:28:02', '1.00002E+14', 'I''ve wanted for a while now to work at a national park. I''m to young to though. Only 13. Bit its my dream to work at Yellowstone or the Badlands', 'Maddie Schultz', '2014-02-02 16:00:42'),
(107, '2014-02-03 04:27:22', '1289085578', 'My time will come!!!', 'Pattie Bunting Shafer', '2014-02-02 16:00:42'),
(108, '2014-02-01 17:11:00', '1626175467', 'What does this mean? What mechanical device is used?', 'Dee Warenycia', '2014-02-01 16:01:04'),
(109, '2014-02-01 17:37:26', '1.00001E+14', 'This is great, we need this amongst the redwoods on the coast.\rThe floor litter is dangerous and we have had almost NO rain.', 'Lisa Cunningham-Gibson', '2014-02-01 16:01:04'),
(110, '2014-02-01 17:52:35', '654568957', 'How about goats? Of course you''d have to keep them safe...', 'Susan Stienstra', '2014-02-01 16:01:04'),
(111, '2014-02-01 18:30:27', '1.42959E+14', 'Good question Dee. In this case, a contractor will be using industrial forestry equipment to cut and remove trees. This process has been effective in areas where hand thinning and prescribed burning have not. Mechanical thinning has been successful in places like Lassen''s Manzanita Lake Campground and Yosemite National Park. -AS', 'Lassen Volcanic National Park', '2014-02-01 16:01:04'),
(112, '2014-02-01 18:44:50', '1626175467', 'We camp at Manzanita Lake, and I noticed lots of the smaller trees had been removed. It never occurred to me that this was done by a machine! I prefer the hand-thinning/burning....it employs people.', 'Dee Warenycia', '2014-02-01 16:01:04'),
(113, '2014-02-01 19:16:38', '1539845628', 'Thank you . We are fortunate to have natural resource professionals with your expertise caring for our natural treasures.', 'Tricia Parker Hamelberg', '2014-02-01 16:01:04'),
(114, '2014-01-31 16:15:58', '1488360915', 'Can''t wait!!', 'Kim Hatfield', '2014-01-31 16:03:33'),
(115, '2014-01-31 16:37:25', '1526261408', 'Reached the Peak last July!', 'Pam Wilson', '2014-01-31 16:03:33'),
(116, '2014-01-31 18:03:53', '1186471702', 'The bulletins attached to the web are from last year.', 'Old Begonia', '2014-01-31 16:03:33'),
(117, '2014-01-31 18:29:29', '64379487984', 'The final year?! Whoohoo! Looking forward to having the impressive new trail open.', 'Pacific Crest Trail Association', '2014-01-31 16:03:33'),
(118, '2014-01-31 19:06:08', '1.42959E+14', 'Thanks Old Begonia, we haven''t quite finished the 2013 reports. -AS', 'Lassen Volcanic National Park', '2014-01-31 16:03:33'),
(119, '2014-01-31 19:22:39', '1.00003E+14', 'Yea! Thank you:))', 'Lillian DeSoto', '2014-01-31 16:03:33'),
(120, '2014-02-07 00:06:34', '1757312418', 'The website says Thursday, July 3 through Monday, July 6 ?? \rIs that Fri 3 through Sun 6, Thur 2 through Monday 7? Please can you clarify. http://www.nps.gov/lavo/parkmgmt/current-lassen-peak-trail-status.htm', 'Rob Woodall', '2014-01-31 16:03:33'),
(121, '2014-01-31 00:31:23', '1644761370', 'Brandi Smith', 'Zach Miller', '2014-01-31 00:11:03'),
(122, '2014-01-31 00:43:21', '1407923746', 'Paul', 'Melissa Markese-Sabelnik', '2014-01-31 00:11:03'),
(123, '2014-01-30 18:04:39', '1488360915', 'Time for church <3', 'Kim Hatfield', '2014-01-30 17:45:04'),
(124, '2014-01-30 18:25:36', '1.00001E+14', 'Hope to see it up close and personally in a few weeks, weather and schedules permitting. :)', 'Cathy Stonehouse', '2014-01-30 17:45:04'),
(125, '2014-01-30 18:59:34', '1355541467', 'My family enjoyed the festival last year when we visited the park for the first time. Your park and Whiskeytown National Recreation Area rock on that one!', 'Marichelle Chung', '2014-01-30 17:45:04'),
(126, '2014-01-30 23:16:12', '1705167393', 'We had a great time last year!', 'Tracey Maxson Wescott', '2014-01-30 17:45:04'),
(127, '2014-01-29 23:24:00', '2.67937E+14', 'Will lassen areas be open? Sulfur flats etc.', 'Michael Keel Photography', '2014-01-29 23:19:47'),
(128, '2014-01-29 23:26:58', '1.42959E+14', 'There are no plans to open the park highway. The park is expected to receive 2-4" of snow tonight. -AS', 'Lassen Volcanic National Park', '2014-01-29 23:19:47'),
(129, '2014-01-29 23:30:11', '1.00001E+14', 'What''s coming tomorrow?', 'Michael Fitzwater', '2014-01-29 23:19:47'),
(130, '2014-01-29 23:33:33', '500743223', 'So no roads open partially around lassen? All just hiking in?', 'Michael Keel', '2014-01-29 23:19:47'),
(131, '2014-01-30 00:19:44', '1200298571', 'Fantastic!', 'Ann Maresh Troy', '2014-01-29 23:19:47'),
(132, '2014-01-30 02:51:41', '1748667277', 'excellent photo...?', 'W Earl Leeds II', '2014-01-29 23:19:47'),
(133, '2014-01-30 03:39:41', '26206158', 'This is a beautiful photo. Would love to purchase a print!', 'Amanda Sutter', '2014-01-29 23:19:47'),
(134, '2014-01-30 03:50:40', '596201469', 'Rad!', 'Julia Cozby', '2014-01-29 23:19:47'),
(135, '2014-01-30 04:24:17', '1224221082', 'Nice one huh Monte Penley!', 'Kelli Grace Roberts', '2014-01-29 23:19:47'),
(136, '2014-01-30 04:33:55', '1.00007E+14', 'Yes it is Kelli Roberts', 'Monte Penley', '2014-01-29 23:19:47'),
(137, '2014-01-30 04:51:56', '1.00002E+14', 'yes, I''d like a print of this. lovely!', 'Martha Paterson-Cohen', '2014-01-29 23:19:47'),
(138, '2014-01-30 05:42:25', '1422218044', 'Yes, Michael Fitzwater!! I too would like to understand what is coming tomorrow!!', 'Cindy VanBiene', '2014-01-29 23:19:47'),
(139, '2014-01-25 22:03:46', '1E+14', 'Praying for snow & rain. But it sure is beautiful. Can''t wait for Lassen''s camping season to start again.', 'Sandy Oberg', '2014-01-25 21:40:13'),
(140, '2014-01-26 04:34:16', '1446228935', 'Even I (someone who hates rain and cold weather in general) am hoping every day that the sky will start pouring down soon. It would be terrific to see Lassen blanketed as it should be.', 'Elizabeth Waybright', '2014-01-25 21:40:13'),
(141, '2014-01-26 05:41:57', '1455426574', 'Would have been a profitable year for the visitors center to be open ;)', 'Rosey Bertoluzza', '2014-01-25 21:40:13'),
(142, '2014-01-26 16:24:16', '1.00001E+14', 'It was a great hike Wednesday to the top of Brokeoff', 'John Loveless', '2014-01-25 21:40:13'),
(143, '2014-01-31 16:18:58', '1.00008E+14', 'No snow how come the roads not open?', 'Robert Leon', '2014-01-25 21:40:13');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
