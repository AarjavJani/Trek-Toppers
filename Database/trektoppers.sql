-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2024 at 07:34 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trektoppers`
--
CREATE DATABASE IF NOT EXISTS `trektoppers` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `trektoppers`;

-- --------------------------------------------------------

--
-- Table structure for table `batches`
--

CREATE TABLE `batches` (
  `batch_id` int(11) NOT NULL,
  `Trek_ID` int(11) NOT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL,
  `people` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `batches`
--

INSERT INTO `batches` (`batch_id`, `Trek_ID`, `from_date`, `to_date`, `people`) VALUES
(1, 1, '2024-04-20', '2024-04-21', 1),
(2, 1, '2024-04-22', '2024-04-23', 4),
(3, 1, '2024-04-24', '2024-04-25', 19),
(4, 1, '2024-04-26', '2024-04-27', 19),
(5, 1, '2024-04-28', '2024-04-29', 16),
(6, 1, '2024-04-30', '2024-05-01', 5),
(7, 1, '2024-05-02', '2024-05-03', 19),
(8, 1, '2024-05-04', '2024-05-05', 15),
(9, 1, '2024-05-06', '2024-05-07', 0),
(10, 1, '2024-05-08', '2024-05-09', 16),
(11, 1, '2024-05-10', '2024-05-11', 20),
(12, 1, '2024-05-12', '2024-05-13', 11),
(13, 1, '2024-05-14', '2024-05-15', 14),
(14, 1, '2024-05-16', '2024-05-17', 19),
(15, 1, '2024-05-18', '2024-05-19', 11),
(16, 2, '2024-11-15', '2024-11-21', 14),
(17, 2, '2024-11-22', '2024-11-28', 5),
(18, 2, '2024-11-29', '2024-12-05', 7),
(19, 2, '2024-12-06', '2024-12-12', 22),
(20, 2, '2024-12-13', '2024-12-19', 11),
(21, 2, '2024-12-20', '2024-12-26', 14),
(22, 2, '2024-12-27', '2025-01-02', 12),
(23, 2, '2025-01-03', '2025-01-09', 19),
(24, 2, '2025-01-10', '2025-01-15', 7),
(25, 3, '2024-11-20', '2024-11-28', 24),
(26, 3, '2024-11-29', '2024-12-07', 3),
(27, 3, '2024-12-08', '2024-12-16', 19),
(28, 3, '2024-12-17', '2024-12-25', 9),
(29, 3, '2024-12-26', '2025-01-03', 15),
(30, 3, '2025-01-04', '2025-01-10', 22),
(31, 4, '2024-04-20', '2024-04-26', 8),
(32, 4, '2024-04-27', '2024-05-03', 12),
(33, 4, '2024-05-04', '2024-05-10', 5),
(34, 4, '2024-05-11', '2024-05-17', 22),
(35, 4, '2024-05-18', '2024-05-24', 0);

-- --------------------------------------------------------

--
-- Table structure for table `highlights`
--

CREATE TABLE `highlights` (
  `hsr_no` int(11) NOT NULL,
  `Trip_Nature` varchar(255) DEFAULT NULL,
  `Duration` varchar(20) DEFAULT NULL,
  `Interests` varchar(255) DEFAULT NULL,
  `Best_time` varchar(100) DEFAULT NULL,
  `start_point` varchar(255) DEFAULT NULL,
  `end_point` varchar(255) DEFAULT NULL,
  `meeting_point` varchar(255) DEFAULT NULL,
  `Trek_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `highlights`
--

INSERT INTO `highlights` (`hsr_no`, `Trip_Nature`, `Duration`, `Interests`, `Best_time`, `start_point`, `end_point`, `meeting_point`, `Trek_ID`) VALUES
(1, 'Hiking', '1 day', 'Mountain views, Wildlife', 'July to October', 'Junagadh', 'Junagadh', 'Girnar Taleti', 1),
(2, 'Trekking', '6 days', 'Snow-capped peaks, Sunrise @12500ft., Tenting in snow, Campfire, Night trek', 'Winter', 'Sankri, Uttarakhand', 'Kedarkantha Peak, Uttarakhand', 'Sankri, Uttarakhand', 2),
(3, 'Trekking on Frozen River', '9 Days', 'Tenting on frozen river, Sensational feel of -30°C, Ice formations, Cultural experience', 'Winter', 'Leh, Ladakh', 'Chadar, Ladakh', 'Leh, Ladakh', 3),
(4, 'Trekking', '7 days', 'Alpine flowers, Scenic beauty', 'Summer', 'Govindghat, Uttarakhand', 'Valley of Flowers, Uttarakhand', 'Govindghat, Uttarakhand', 4);

-- --------------------------------------------------------

--
-- Table structure for table `itinerary`
--

CREATE TABLE `itinerary` (
  `itinerary_id` int(11) NOT NULL,
  `Trek_ID` int(11) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Day` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `itinerary`
--

INSERT INTO `itinerary` (`itinerary_id`, `Trek_ID`, `Description`, `Day`) VALUES
(1, 1, '10:00 AM : Arrival at Junagadh, greet and meet at Bhavnath Taleti. \n12:00 PM : After Damo Kund bathing refreshment, take lunch at hotel then depart for most awaited trek from Bhavnath Taleti – GIRNAR TREK. \n04:00 PM : Reach at Hanumandhara, and take break for some time. Spend some time, see mesmerising beauty around and enjoy Maggie in lap of lush green mountains. *We can reach at the top of the highest mountain of Gujarat if weather and time permits. \n06:00 PM: After the summit of highest peak of Gujarat, hike back to Bhavnath Taleti. \n09:00 PM : Later you can depart carrying beautiful memories.', 1),
(2, 2, 'Upon arrival in the morning at Rishikesh, freshen up, and begin your day. Later, embark on cliff jumping and river rafting (16 Km*). Spend leisure time or explore nearby places on your own. In the evening, at around 6:00 pm, indulge in tea/coffee with cookies. Enjoy a bonfire with vegetarian snacks and music at 7:30 pm. Dinner will be served at 9:00 pm, followed by an overnight stay at the campsite. Meals included: Lunch, Hi-tea & Dinner.', 1),
(3, 2, 'After breakfast, our journey will take us alongside the picturesque Yamuna and Tons rivers to Mori/Sankri. The scenic drive offers views of stunning pine forests. Upon arrival, we\'ll take the opportunity to explore the charming village in preparation for our trek. We\'ll spend the night in Mori/Sankri, enjoying meals of breakfast and dinner.', 2),
(4, 2, 'Prepare yourself in the morning for a moderate hike, primarily traversing through the forest.\nOur route will lead us to Saur village, followed by an ascent to a small frozen pond known as Juda-ka-Talab, offering intermittent views of the snow-capped Himalayan peaks.\nAfter 3 to 4 hours of hiking, we\'ll arrive at the meadows where we\'ll set up camp for the night.\nWe\'ll spend the night in tents, and meals provided will include breakfast, lunch or packed lunch, hi-tea, and dinner.', 3),
(5, 2, 'Our journey leads us to the KedarKantha base today, beginning after breakfast. For photography enthusiasts, today promises to be bustling, with the trek route offering splendid panoramic views and expansive snow fields adorned with green patches. Envision vast open snow fields, stretching as far as two football fields, with a tranquil stream nearby and misty mountains in the background – this picturesque setting is where we\'ll camp overnight in tents. Our accommodation for the night will be in tents, and meals provided will include breakfast, lunch, or packed lunch, and dinner.', 4),
(6, 2, 'Imagine the stunning view from the summit of Kedar Kantha after a steep climb of about 2-3 hours. From there, you\'ll see the majestic mountains of Yumnotri, Gangotri, and the Kinner Kailash range, along with the valleys below. After descending, we\'ll return to Juda ka Talab/Sankri for the night, enjoying meals of breakfast, lunch, or packed lunch, hi-tea, and dinner.', 5),
(7, 2, 'Upon reaching, settle into the campsite and immerse yourself in the serene beauty of the mountains, offering captivating natural vistas. Afterwards, take a leisurely stroll along Mall Road and marvel at the enchanting Kempty Falls. Rest for the night at the luxurious campsite, indulging in meals comprising breakfast, lunch, and dinner.', 6),
(8, 2, 'Begin your day with a morning wake-up call and embark on a nature trek to explore the surrounding areas at your own pace. Afterwards, depart for your hometown, cherishing the wonderful memories you\'ve created. Before leaving, enjoy a delicious breakfast.', 7),
(9, 3, 'Leh, situated at an elevation exceeding 3500 meters above sea level, ranks as the second largest district in the nation. During winters, when most passes leading to Leh are inaccessible, you\'ll be airlifted to Leh airport, distinguished as the world\'s highest airport. Upon touchdown, you\'ll be met by the crisp, chilly air, while your gaze will be captured by the towering, snow-capped mountains enveloping the landscape; a mesmerizing spectacle etched in your memory forever. Following arrival procedures and collecting your luggage, proceed to the designated hotel via taxi. Indulge in an overnight stay at the hotel.', 1),
(10, 3, 'Get up early in the morning and start acclimatizing to the high altitude. Head towards Shanti Stupa, a revered Buddhist stupa, where you can marvel at the sunrise and enjoy a panoramic view of Leh town. Remember to stay hydrated as you begin your trekking journey in Leh.', 2),
(11, 3, 'Due to the demanding nature of this specific trek, it is compulsory for participants to obtain medical certification before undertaking the Chadar trek. A clearance certificate following a medical examination will be provided by the Sonam Narbu Hospital. The certificate will only be issued to individuals who are sufficiently fit and acclimatized for the trek.', 3),
(12, 3, 'Enjoy tea and breakfast in the morning and begin your journey by driving to Shingra Koma. Brace yourself, as this ride is not for the faint-hearted, with bumpy roads and frequent hairpin bends along the route. The sight of the towering mountains around you will inspire a sense of awe. Eventually, you\'ll reach a point where you\'ll need to disembark from the vehicle and trek towards the Somo Paldar campsite. This marks the beginning of your Chadar trek expedition.', 4),
(13, 3, 'Today, you\'ll embark on a trek to Dib Cave/Tibb, where you\'ll witness the stunning beauty of the region, characterized by ravines and gorges. Due to the steep cliffs, sunlight might be partially obstructed. Upon reaching Dib, you\'ll encounter a spacious cave, your accommodation for the night. Don\'t miss the chance to savor butter tea, a local specialty. Enjoy an overnight stay at the campsite.', 5),
(14, 3, 'Today, you will trek through the most picturesque part of the region, where you\'ll have the opportunity to behold the largest frozen waterfall and prayer flags. Adjacent to the waterfall, there stands a bridge typically utilized in the summer months to access Zanskar from Leh. Following this, you can continue your journey towards the village of Naerak, engaging with the local community to gain insights into their way of life. Enjoy a comfortable overnight stay at the village camp.', 6),
(15, 3, 'On this particular day, commence your journey back and head towards Tibb. The return path may pose challenges as the river swiftly responds to temperature fluctuations. By now, the frozen river may have transformed significantly. Along the way, appreciate the scenic beauty of the area, capture memorable photographs, and interact with locals adorned in traditional woolen Gonchas (robes). Upon reaching Dib Cave, unwind and spend the night at the campsite.', 7),
(16, 3, 'In the morning, prepare to depart from Tibb and head towards Shingra Koma, passing through Gyalpo. Today\'s trail offers the opportunity to admire towering mountains and spot traces of wild animals such as snow leopards, ibex, and foxes. With luck, you may even catch a glimpse of a leopard; however, even if you don\'t, rest assured that you may still be under their watchful gaze. In the evening, return to Leh by drive and spend the night at the hotel.', 8),
(17, 3, 'Today, the captivating journey to one of India\'s most breathtaking destinations draws to a close. We trust that the entire experience has left you with an unparalleled sense of achievement and fulfillment. In the morning, check out from the guesthouse and make your way to Leh airport for departure.', 9),
(18, 4, 'Around 7 am, gather at the designated spot in Haridwar where a representative will brief you on your journey. Then, embark on a picturesque uphill drive from Haridwar to Govindghat, passing through Devaprayag to witness the sacred confluence of the Bhagirathi and Alaknanda Rivers forming the River Ganges. The roads wind along mountain edges, offering glimpses of the river below. Passing through Joshimath, a hub for religious pilgrimages, you\'ll eventually reach Govindghat by evening for an overnight stop.', 1),
(19, 4, 'Start your day with a satisfying meal amidst stunning lush green mountain views. Then, head to Poolna, where your trek to Ghangaria begins. Follow the well-marked trail through lush forests along the picturesque Lakshman Ganga River. Appreciate the efforts of volunteers maintaining the trail\'s cleanliness. Along the way, find dhabas for refreshments and water refills. After a 9 km ascent, arrive at Ghangaria, a charming village nestled among mountains. Check into your hotel, explore the surroundings, and enjoy a delicious dinner of local cuisine to end the day.', 2),
(20, 4, 'Fuel up with a hearty breakfast before embarking on today\'s adventure. Prepare to ascend to a height of 3,505m, where the enchanting Valley of Flowers awaits. Marvel at the breathtaking landscape adorned with vibrant flowers, a sight that will surely leave you in awe. After soaking in the beauty, begin your descent back to Ghangaria in time for dinner and a well-deserved rest.', 3),
(21, 4, 'Wake up to the melodious chants of bhajans and savor a warm cup of chai. The trek to Hemkund Sahib is challenging, with steep ascents where a trekking stick can be useful. Take it slow, as the high altitude may affect you. Hemkund Sahib, surrounded by seven snow-capped peaks and a pristine lake, offers a serene atmosphere. Afternoon brings the descent back to Ghangaria, where weather changes are common. End the day with a dinner under the stars and a comfortable overnight stay at the hotel.', 4),
(22, 4, 'After breakfast, begin the gentle 9 km descent to Poolna along the familiar trail. From there, a cab will transport you the 4 km back to Govindghat. Optionally, explore scenic Auli in the evening before returning to your hotel in Govindghat for the night.', 5),
(23, 4, 'Depart from Govindghat early for your journey back to Haridwar. The Valley of Flowers Trekking package concludes here, carrying with you a collection of unforgettable memories.', 6);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `user_id` varchar(20) DEFAULT NULL,
  `Trek_ID` int(11) DEFAULT NULL,
  `batch_id` int(11) DEFAULT NULL,
  `payment_amount` decimal(10,2) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trek`
--

CREATE TABLE `trek` (
  `Trek_ID` int(11) NOT NULL,
  `TrekName` varchar(50) DEFAULT NULL,
  `Season` varchar(10) DEFAULT NULL,
  `Start_date` date DEFAULT NULL,
  `End_date` date DEFAULT NULL,
  `Price` decimal(10,2) DEFAULT NULL,
  `Batch_capacity` int(11) DEFAULT NULL,
  `Difficulty_level` varchar(15) DEFAULT NULL,
  `Location` varchar(100) DEFAULT NULL,
  `Overview` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trek`
--

INSERT INTO `trek` (`Trek_ID`, `TrekName`, `Season`, `Start_date`, `End_date`, `Price`, `Batch_capacity`, `Difficulty_level`, `Location`, `Overview`) VALUES
(1, 'Gorgeous Girnar', 'Summer', '2024-04-20', '2024-05-20', 5000.00, 20, 'Beginner', 'Girnar, Junagadh, Gujarat, India', 'Mount Girnar is older than the Himalayas and the Jain temples upon it are amongst the most ancient in the country. The base of the mountain, known as Girnar Taleti, is about 4 km east of the center of Junagadh. Girnar – a group of mountains in the Junagadh district of Gujarat are a haven for thrill seekers and religious devotees alike due to their ability to be both – a hub for religious activity and also a retreat for trekkers, because of the hills that lead up to splendid views.'),
(2, 'Kedarkantha Peak', 'Winter', '2024-11-15', '2025-01-15', 14000.00, 25, 'Intermediate', 'Uttarakhand, India', 'Mussoorie, Queen of the Hills, is a captivating paradise for every kind of travellers. Mussoorie offers superb scenic view of peaks of the Himalayas in western Garhwal. Mussoorie overlooks the majestic Doon valley to its south and the impressive Himalayas up north. The mountains beckon climbers, trekkers and adventure sport enthusiasts. Kedarkantha trek takes you towards giant mountains, and past picturesque lakes of the state of Uttarakhand. The trip commences from Dehradun, from where you drive to the small, but pretty village of Sankri. Rishikesh and located in the laps of lower Himalayas and is surrounded by scenic beauty of the hills on three sides with Holy Ganga flowing through it. Rishikesh is measured to be well-known for its white river rafting because it is the start of the river Ganga. It makes this place an ideal destination for wildlife and adventure lovers.'),
(3, 'Chadar Trek', 'Winter', '2024-11-20', '2025-01-10', 20000.00, 25, 'Expert', 'Laddakh, India', '“Chadar” refers to the sheet of ice that from over the Zanskar river as it transforms itself from a rapid flowing river into a white blanket of ice during winter. It becomes a frozen spectacle of glass ice ranging from a bluishtinge to golden yellow that is seen during the few hours that sunlight reaches directly into the gorge to the milky whitish on a moonlit night – as said a trek journey like no other. Chadar connects villages in the Zanskar valley (deep in the mountains) with Chilling (on the road to Leh) along the frozen Zanskar River. This route has been used for centuries for trade and transportation, and is most reliable in February when the ice is most stable.'),
(4, 'Valley of flowers', 'Summer', '2024-04-20', '2024-05-20', 11000.00, 30, 'Beginner', 'Valley of Flowers national Park, Uttarakhand, India', 'Valley of Flowers \"Foolon ki Ghati\" is one of those beautiful trekking expeditions that can be enjoyed during the monsoon season. It is flawlessly nestled in the West Himalayan region of Uttarakhand and lies at a lofty height of 3600 m above sea level. With an opportunity to spot the very rare blue Primula, the Valley Of Flowers trek is one of the best-known treks in the world. The Valley of Flowers is also believed to be the place from where Hanuman brought the magical herb to resuscitate Lakshman in the Hindu epic Ramayan. Just as you set your foot into the valley, the intoxicating mix of fragrances emitted from the flowers makes you feel in a paradise. The hidden lake at the height of 14,400 ft, creates a hidden coop for numerous species of wildflowers like the saxifrages, sedums, lilies, poppy, calendulas, daisies, geranium, zinnia, and petunia.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(12) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `phoneno` bigint(10) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL CHECK (`gender` in ('male','female'))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `password`, `firstname`, `lastname`, `phoneno`, `dob`, `gender`) VALUES
('a123', 'a@gmail.com', '1234', 'aarjav', 'jani', NULL, '2024-05-01', 'male'),
('devii', 'devendra@example.com', 'password3', 'Devendra', 'Solanki', 1234567890, '2001-05-10', 'male'),
('haiderali', 'haiderali@example.com', 'password2', 'Haider', 'Ali', 9876543210, '2005-05-10', 'male'),
('janiaarjav', 'janiaarjav@example.com', 'password1', 'Aarjav', 'Jani', 9099442552, '2005-01-11', 'male'),
('rajjani', 'raj.jani@gmail.com', 'password4', 'Raj', 'Jani', NULL, '1996-09-18', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batches`
--
ALTER TABLE `batches`
  ADD PRIMARY KEY (`batch_id`),
  ADD KEY `Trek_ID` (`Trek_ID`);

--
-- Indexes for table `highlights`
--
ALTER TABLE `highlights`
  ADD PRIMARY KEY (`hsr_no`),
  ADD KEY `Trek_ID` (`Trek_ID`);

--
-- Indexes for table `itinerary`
--
ALTER TABLE `itinerary`
  ADD PRIMARY KEY (`itinerary_id`),
  ADD KEY `Trek_ID` (`Trek_ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `Trek_ID` (`Trek_ID`),
  ADD KEY `batch_id` (`batch_id`);

--
-- Indexes for table `trek`
--
ALTER TABLE `trek`
  ADD PRIMARY KEY (`Trek_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `password` (`password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batches`
--
ALTER TABLE `batches`
  MODIFY `batch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `highlights`
--
ALTER TABLE `highlights`
  MODIFY `hsr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `itinerary`
--
ALTER TABLE `itinerary`
  MODIFY `itinerary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `batches`
--
ALTER TABLE `batches`
  ADD CONSTRAINT `batches_ibfk_1` FOREIGN KEY (`Trek_ID`) REFERENCES `trek` (`Trek_ID`);

--
-- Constraints for table `highlights`
--
ALTER TABLE `highlights`
  ADD CONSTRAINT `highlights_ibfk_1` FOREIGN KEY (`Trek_ID`) REFERENCES `trek` (`Trek_ID`);

--
-- Constraints for table `itinerary`
--
ALTER TABLE `itinerary`
  ADD CONSTRAINT `itinerary_ibfk_1` FOREIGN KEY (`Trek_ID`) REFERENCES `trek` (`Trek_ID`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`Trek_ID`) REFERENCES `trek` (`Trek_ID`),
  ADD CONSTRAINT `payment_ibfk_3` FOREIGN KEY (`batch_id`) REFERENCES `batches` (`batch_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
