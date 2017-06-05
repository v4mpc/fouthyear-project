-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 30, 2017 at 12:11 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `JPAIDb`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountInfo`
--

CREATE TABLE `accountInfo` (
  `accountID` int(11) NOT NULL,
  `accountType` varchar(15) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accountInfo`
--

INSERT INTO `accountInfo` (`accountID`, `accountType`, `userName`, `password`) VALUES
(6, 'Job seeker', 'Juma', 'e10adc3949ba59abbe56'),
(7, 'Job seeker', 'Jus', '123456'),
(8, 'Employer', 'airexcel', '123456'),
(9, 'Employer', 'airtanzania', '123456'),
(10, 'Employer', 'airtel', '123456'),
(11, 'Employer', 'bakhresa', '123456'),
(12, 'Employer', 'dailynews', '123456'),
(13, 'Employer', 'dangote', '123456'),
(14, 'Employer', 'dse', '123456'),
(15, 'Job seeker', 'Akai', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `jobApplications`
--

CREATE TABLE `jobApplications` (
  `AID` int(11) NOT NULL,
  `jobID` int(11) NOT NULL,
  `EID` int(11) NOT NULL,
  `SID` int(11) NOT NULL,
  `applicationDate` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobApplications`
--

INSERT INTO `jobApplications` (`AID`, `jobID`, `EID`, `SID`, `applicationDate`) VALUES
(1, 1, 2, 6, '2015-04-04'),
(2, 2, 3, 6, '2016-04-09'),
(3, 9, 10, 6, '2017-04-28'),
(5, 1, 2, 7, '2017-05-08'),
(6, 10, 2, 7, '2017-05-08'),
(7, 2, 3, 7, '2017-05-08');

-- --------------------------------------------------------

--
-- Table structure for table `job_Post`
--

CREATE TABLE `job_Post` (
  `jobID` int(11) NOT NULL,
  `jobTitle` varchar(50) NOT NULL,
  `discription` varchar(500) NOT NULL,
  `postDate` date NOT NULL,
  `salary` int(20) NOT NULL,
  `skillsAndExperience` varchar(500) NOT NULL,
  `onlineInterview` varchar(3) NOT NULL,
  `EID` int(11) NOT NULL,
  `TotalApplications` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_Post`
--

INSERT INTO `job_Post` (`jobID`, `jobTitle`, `discription`, `postDate`, `salary`, `skillsAndExperience`, `onlineInterview`, `EID`, `TotalApplications`) VALUES
(1, 'Sales Manager', 'You\'ll get to do what you do best - coach and develop your own team of junior and senior Account Executives, while helping to shape our long-term sales strategy. You will work directly with the VP of Sales to maximize sales performance, profits, and the company\'s share of the market, while occasionally attending and/or facilitating client-facing meetings.', '2017-04-05', 200000, 'A minimum of 3 years of demonstrated success in a direct sales role within the IT industry.\r\nA proven ability to develop and graduate sales professionals, regardless of experience level.\r\nOutstanding communication skills and a talent for relationship development.\r\n', 'Yes', 2, 2),
(2, ' Engineering Director', 'If you have strong tech skills, thrive in an agile environment and have real-world experience as a hiring manager for software developers within a fast-paced early-stage venture you\'ll be perfect for this role. We\'re looking for someone with a strong technical background who will spend some of their time researching new technologies and staying abreast of trends in the tech industry. The ability to contribute on the development or dev-ops side is a very strong plus.', '2017-04-19', 3000000, 'Reports directly to CTO and works closely with Product Managers & stakeholders to execute on shared goals.\r\nDirects, manages and mentors engineers in an agile scrum environment.\r\nReinforces culture consistent with core values of the full company', 'No', 3, 2),
(4, 'Accoutant', 'Playing a very important role in the accurate and timely entry of financial data and reporting to management, this individual must possess great attention to detail, strong financial acumen, high aptitude for technology and financial systems and a strong desire and ability to work within a dynamic environment. The Accountant will have a broad range of responsibilities involving all aspects of the monthly close and reconciliations and development of process inefficiencies.', '2017-04-04', 50000, 'A minimum of 2-3 years experience in general ledger accounting (preferably, consumer products manufacturing or similar environment).', 'No', 5, 0),
(6, 'Chemical Engineer', 'Will be asked to develop and implement processes for vitamin based gummy products and other specific products, working with other departments including Product Development, Package Development, and Plant Manufacturing to scale up and optimize new and existing product manufacture through pilot and plant trials.', '2017-04-24', 450000, 'BS Chemical Engineering with minimum of 3-5 years\' experience in industry ', 'No', 7, 0),
(7, 'Reporter', 'We cover the breaking business news in the state, everything from economic development to health care, real estate to politics, manufacturing to retail, not to mention higher education, technology, banking, accounting, law and everything else that makes the economy work. We produce good, solid journalism that has impact and influence. And we have fun doing it.\r\n\r\nInterested? We’d love to hear from you. Please send a resume, some clips and a cover letter.', '2017-04-29', 700000, '', 'No', 8, 0),
(8, 'Industrial Engineer', 'Review production schedules, engineering specifications, process flows, and other information to understand methods and activities in manufacturing and services\r\nFigure out how to manufacture parts or products, or deliver services, with maximum efficiency\r\nDevelop management control systems to make financial planning and cost analysis more efficient\r\nEnact quality control procedures to resolve production problems or minimize costs ', '2017-04-10', 7000000, '', 'Yes', 9, 0),
(9, 'Equity Dealer', 'Dealing on behalf of clients.\r\nUpdate client for order and trade on recorded line during market hour.\r\nMaintain 0% dealing error.\r\nMaintain active clients as per the defined norms.\r\nMaintain daily unique outgoing client call.\r\nActivate dormant clients.\r\nGenerate Non-broking revenue from existing clients.', '2017-04-18', 1000000, 'Any Graduate ', 'yes', 10, 1),
(10, 'IP Engineer', 'Very important', '2017-05-08', 1000, '1 year udsm', 'Yes', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `jpai_sessions`
--

CREATE TABLE `jpai_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jpai_sessions`
--

INSERT INTO `jpai_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('lsnrefqi0ksg0vq2vd2donbltl9ca01j', '::1', 1496138696, 0x757365726e616d657c733a333a22647365223b6163636f756e7449447c733a323a223134223b6163636f756e74547970657c733a383a22456d706c6f796572223b4549447c733a323a223130223b);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `LID` int(11) NOT NULL,
  `region` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`LID`, `region`, `district`) VALUES
(1, 'Arusha', 'Meru'),
(2, 'Arusha', 'Arusha'),
(3, 'Arusha', 'Karatu'),
(4, 'Arusha', 'Longido'),
(5, 'Arusha', 'Monduli'),
(6, 'Arusha', 'Ngorongoro'),
(7, 'Dodoma', 'Bahi'),
(8, 'Dodoma', 'Chamwino'),
(9, 'Dodoma', 'Chemba'),
(10, 'Dodoma', 'Kondoa'),
(11, 'Dodoma', 'Kongwa'),
(12, 'Dodoma', 'Mpwapwa'),
(13, 'Geita', 'Bukombe'),
(14, 'Geita', 'Chato'),
(15, 'Geita', 'Mbongwe'),
(16, 'Iringa', 'Iringa'),
(17, 'Iringa', 'Kilolo'),
(18, 'Iringa', 'Mufindi'),
(19, 'Kagera', 'Biharamulo'),
(20, 'Kagera', 'Bukoba'),
(21, 'Kagera', 'Karagwe'),
(22, 'Kagera', 'Kyerwa'),
(23, 'Kagera', 'Missenyi'),
(24, 'Kagera', 'Muleba'),
(25, 'Kagera', 'Ngara'),
(26, 'Katavi', 'Mlele'),
(27, 'Katavi', 'Mpanda'),
(28, 'Kigoma', 'Buhigwe'),
(29, 'Kigoma', 'Kakonko'),
(30, 'Kigoma', 'Kasulu'),
(31, 'Kigoma', 'Kibondo'),
(32, 'Kigoma', 'Kigoma'),
(33, 'Kigoma', 'Uvinza'),
(34, 'Kilimanjaro', 'Hai'),
(35, 'Kilimanjaro', 'Moshi'),
(36, 'Kilimanjaro', 'Mwanga'),
(37, 'Kilimanjaro', 'Rombo'),
(38, 'Kilimanjaro', 'Same'),
(39, 'Kilimanjaro', 'Siha'),
(40, 'Lindi', 'Kilwa'),
(41, 'Lindi', 'Lindi'),
(42, 'Lindi', 'Liwale'),
(43, 'Lindi', 'Nachingwea'),
(44, 'Lindi', 'Ruangwa'),
(45, 'Manyara', 'Babati'),
(46, 'Manyara', 'Hanang'),
(47, 'Manyara', 'Kiteto'),
(48, 'Manyara', 'Mbulu'),
(49, 'Manyara', 'Simanjiro'),
(50, 'Mara', 'Bunda'),
(51, 'Mara', 'Butiama'),
(52, 'Mara', 'Musoma'),
(53, 'Mara', 'Rorya'),
(54, 'Mara', 'Serengeti'),
(55, 'Mara', 'Tarime'),
(56, 'Mbeya', 'Chunya'),
(57, 'Mbeya', 'Ileje'),
(58, 'Mbeya', 'Kyela'),
(59, 'Mbeya', 'Mbarali'),
(60, 'Mbeya', 'Mbeya'),
(61, 'Mbeya', 'Mbozi'),
(62, 'Mbeya', 'Momba'),
(63, 'Mbeya', 'Rungwe'),
(64, 'Morogoro', 'Gairo'),
(65, 'Morogoro', 'Kilombero'),
(66, 'Morogoro', 'Kilosa'),
(67, 'Morogoro', 'Morogoro'),
(68, 'Morogoro', 'Mvomero'),
(69, 'Morogoro', 'Ulanga'),
(70, 'Mtwara', 'Masasi'),
(71, 'Mtwara', 'Mtwara'),
(72, 'Mtwara', 'Nanyumbu'),
(73, 'Mtwara', 'Newala'),
(74, 'Mtwara', 'Tandahimba'),
(75, 'Mwanza', 'Kwimba'),
(76, 'Mwanza', 'Magu'),
(77, 'Mwanza', 'Misungwi'),
(78, 'Mwanza', 'Sengerema'),
(79, 'Mwanza', 'Ukerewe'),
(80, 'Njombe', 'Ludewa'),
(81, 'Njombe', 'Makete'),
(82, 'Njombe', 'Njombe'),
(83, 'Pwani', 'Bagamoyo'),
(84, 'Pwani', 'Kibaha'),
(85, 'Pwani', 'Kisarawe'),
(86, 'Pwani', 'Mafia'),
(87, 'Pwani', 'Mkuranga'),
(88, 'Pwani', 'Rufiji'),
(89, 'Rukwa', 'Kalambo'),
(90, 'Rukwa', 'Nkasi'),
(91, 'Rukwa', 'Sumbawanga'),
(92, 'Ruvuma', 'Mbinga'),
(93, 'Ruvuma', 'Songea'),
(94, 'Ruvuma', 'Tunduru'),
(95, 'Ruvuma', 'Namtumbo'),
(96, 'Ruvuma', 'Nyasa'),
(97, 'Shinyanga', 'Kahama'),
(98, 'Shinyanga', 'Kishapu'),
(99, 'Shinyanga', 'Shinyanga'),
(100, 'Simiyu', 'Bariadi'),
(101, 'Simiyu', 'Busega'),
(102, 'Simiyu', 'Itilima'),
(103, 'Simiyu', 'Maswa'),
(104, 'Simiyu', 'Meatu'),
(105, 'Singida', 'Ikungi'),
(106, 'Singida', 'Iramba'),
(107, 'Singida', 'Manyoni'),
(108, 'Singida', 'Mkalama'),
(109, 'Singida', 'Singida'),
(110, 'Tabora', 'Igunga'),
(111, 'Tabora', 'Kaliua'),
(112, 'Tabora', 'Nzega'),
(113, 'Tabora', 'Sikonge'),
(114, 'Tabora', 'Urambo'),
(115, 'Tabora', 'Uyui'),
(116, 'Tanga', 'Handeni'),
(117, 'Tanga', 'Kilindi'),
(118, 'Tanga', 'Korogwe'),
(119, 'Tanga', 'Lushoto'),
(120, 'Tanga', 'Muheza'),
(121, 'Tanga', 'Mkinga'),
(122, 'Tanga', 'Pangani'),
(126, 'tga', 'tga');

-- --------------------------------------------------------

--
-- Table structure for table `registerEmployer`
--

CREATE TABLE `registerEmployer` (
  `EID` int(11) NOT NULL,
  `companyName` varchar(50) NOT NULL,
  `emailE` varchar(30) NOT NULL,
  `regionE` varchar(20) NOT NULL,
  `districtE` varchar(20) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `website` varchar(40) NOT NULL,
  `size` int(20) NOT NULL,
  `industryType` varchar(100) NOT NULL,
  `revenue` int(20) NOT NULL,
  `founded` int(20) NOT NULL,
  `securityQuestion` varchar(100) NOT NULL,
  `securityAnswer` varchar(100) NOT NULL,
  `accountID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registerEmployer`
--

INSERT INTO `registerEmployer` (`EID`, `companyName`, `emailE`, `regionE`, `districtE`, `logo`, `website`, `size`, `industryType`, `revenue`, `founded`, `securityQuestion`, `securityAnswer`, `accountID`) VALUES
(2, 'Tigo', 'tigo@gamil.com', 'Dar es Salaam', 'Kinondoni', '/assets/companyLogo/tigo.png', 'www.tigo.tz', 500, 'Telecommunication ', 40000, 2004, 'what is your name', 'tigo', 7),
(3, 'Vodacom', 'vodacom@gmail.com', 'Dar es Salaam', 'Kinondoni', '/assets/companyLogo/vodacom.png', 'www.vodacom.tz', 500, 'Telecomuniaction company', 50000, 2001, 'voda', 'voda', 6),
(4, 'Air Excel', ' info@airexcelonline.com ', 'Arusha', 'Arusha', '/assets/companyLogo/airexcel.png', 'www.airexcelonline.com/', 100, 'Travel and leisure', 30000000, 1997, 'what', 'what', 8),
(5, 'Air Tanzania', 'info@airtanzania.co.tz', 'Dar es Salaam', 'Temeke', '/assets/companyLogo/airtanzania.png', 'www.airtanzania.co.tz/', 90, 'Travel and leisure', 500, 1977, 'what', 'what', 9),
(6, 'Airtel Tanzania', 'helpdesk@tz.airtel.com', 'Dar es Salaam', 'Kinondoni', '/assets/companyLogo/airtel.png', 'africa.airtel.com/tanzania/', 250, 'Mobile Telecommunication', 100, 2010, 'what', 'what', 10),
(7, 'Bakhresa Group', 'info@bakhresa.com', 'Dar es Salaam', 'Ubungo', '/assets/companyLogo/bakhresa.png', 'www.bakhresa.com/', 1000, 'Food and Beverage', 799, 1983, 'what', 'what', 11),
(8, 'Daily News', 'info@dailynews.co.tz', 'Dar es Salaam', 'Ilala', '/assets/companyLogo/dailynews.png', 'www.dailynews.co.tz', 500, 'Media', 90, 1972, 'what', 'what', 12),
(9, 'Dangote Cement', 'info@dangote.com', 'Mtwara', '', '/assets/companyLogo/dangote.png', 'www.dangote.com/', 700, 'Basic materials', 70, 2015, 'what', 'what', 13),
(10, 'Dar es Salaam Stock Exchange', 'info@dse.com', 'Dar es Salaam', 'Kinondoni', '/assets/companyLogo/dse.png', 'www.dse.co.tz', 200, 'Financials', 40, 1996, 'what', 'what', 14);

-- --------------------------------------------------------

--
-- Table structure for table `registerJobSeeker`
--

CREATE TABLE `registerJobSeeker` (
  `SID` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `region` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `DOB` varchar(11) NOT NULL,
  `securityQuestion` varchar(90) NOT NULL,
  `securityAnswer` varchar(50) NOT NULL,
  `accountID` int(11) NOT NULL,
  `FieldOfStudy` varchar(20) NOT NULL,
  `gender` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registerJobSeeker`
--

INSERT INTO `registerJobSeeker` (`SID`, `firstName`, `lastName`, `email`, `region`, `district`, `DOB`, `securityQuestion`, `securityAnswer`, `accountID`, `FieldOfStudy`, `gender`) VALUES
(5, 'John', 'James', 'yona101992@gmail.com', 'Dodoma', 'Arusha', '02-21-2012', 'What is the name of your favorite childhood friend?', 'sdfsdfsd', 6, '', 'M'),
(6, 'Jux', 'Fggg', 'yona101992@gmail.com', 'Dodoma', 'Bariadi', '02-21-2012', 'What was your favorite food as a child?', 'dsfsdfsf', 7, '', 'F'),
(7, 'Gido', 'Mahundi', 'gido81998@gmail.com', 'Arusha', 'Arusha', '02-20-2012', 'What is the name of your favorite childhood friend?', 'helo', 15, 'Electrical Engineer', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `resumeID` int(11) NOT NULL,
  `resumeLink` varchar(50) NOT NULL,
  `SID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`resumeID`, `resumeLink`, `SID`) VALUES
(7, './assets/uploads/myCv/Jus.pdf', 6);

-- --------------------------------------------------------

--
-- Table structure for table `securityQuestionLookupTable`
--

CREATE TABLE `securityQuestionLookupTable` (
  `QAID` int(11) NOT NULL,
  `securityQuestion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `securityQuestionLookupTable`
--

INSERT INTO `securityQuestionLookupTable` (`QAID`, `securityQuestion`) VALUES
(1, 'What was your childhood nickname?'),
(2, 'What is the name of your favorite childhood friend?'),
(3, 'In what town did your mother and father meet?'),
(4, 'What is the middle name of your oldest child?'),
(5, 'What is your favorite team?'),
(6, 'What is your favorite movie?'),
(7, 'What was your favorite sport in high school?'),
(8, 'What was your favorite food as a child?'),
(9, 'What was the name of the hospital where you were born?'),
(10, 'In what town was your first job?'),
(11, 'What was the name of the company where you had your first job?');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accountInfo`
--
ALTER TABLE `accountInfo`
  ADD PRIMARY KEY (`accountID`);

--
-- Indexes for table `jobApplications`
--
ALTER TABLE `jobApplications`
  ADD PRIMARY KEY (`AID`),
  ADD KEY `jobID` (`jobID`),
  ADD KEY `EID` (`EID`),
  ADD KEY `SID` (`SID`);

--
-- Indexes for table `job_Post`
--
ALTER TABLE `job_Post`
  ADD PRIMARY KEY (`jobID`),
  ADD KEY `EID` (`EID`);

--
-- Indexes for table `jpai_sessions`
--
ALTER TABLE `jpai_sessions`
  ADD KEY `jpai_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`LID`);

--
-- Indexes for table `registerEmployer`
--
ALTER TABLE `registerEmployer`
  ADD PRIMARY KEY (`EID`),
  ADD KEY `accountID` (`accountID`);

--
-- Indexes for table `registerJobSeeker`
--
ALTER TABLE `registerJobSeeker`
  ADD PRIMARY KEY (`SID`),
  ADD KEY `FK_registerJobSeeker` (`accountID`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`resumeID`),
  ADD KEY `accountID` (`SID`);

--
-- Indexes for table `securityQuestionLookupTable`
--
ALTER TABLE `securityQuestionLookupTable`
  ADD PRIMARY KEY (`QAID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accountInfo`
--
ALTER TABLE `accountInfo`
  MODIFY `accountID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `jobApplications`
--
ALTER TABLE `jobApplications`
  MODIFY `AID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `job_Post`
--
ALTER TABLE `job_Post`
  MODIFY `jobID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `LID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;
--
-- AUTO_INCREMENT for table `registerEmployer`
--
ALTER TABLE `registerEmployer`
  MODIFY `EID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `registerJobSeeker`
--
ALTER TABLE `registerJobSeeker`
  MODIFY `SID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `resumeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `securityQuestionLookupTable`
--
ALTER TABLE `securityQuestionLookupTable`
  MODIFY `QAID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `jobApplications`
--
ALTER TABLE `jobApplications`
  ADD CONSTRAINT `jobApplications_ibfk_1` FOREIGN KEY (`jobID`) REFERENCES `job_Post` (`jobID`),
  ADD CONSTRAINT `jobApplications_ibfk_2` FOREIGN KEY (`EID`) REFERENCES `registerEmployer` (`EID`),
  ADD CONSTRAINT `jobApplications_ibfk_3` FOREIGN KEY (`SID`) REFERENCES `registerJobSeeker` (`SID`);

--
-- Constraints for table `job_Post`
--
ALTER TABLE `job_Post`
  ADD CONSTRAINT `job_Post_ibfk_1` FOREIGN KEY (`EID`) REFERENCES `registerEmployer` (`EID`);

--
-- Constraints for table `registerEmployer`
--
ALTER TABLE `registerEmployer`
  ADD CONSTRAINT `registerEmployer_ibfk_1` FOREIGN KEY (`accountID`) REFERENCES `accountInfo` (`accountID`);

--
-- Constraints for table `registerJobSeeker`
--
ALTER TABLE `registerJobSeeker`
  ADD CONSTRAINT `FK_registerJobSeeker` FOREIGN KEY (`accountID`) REFERENCES `accountInfo` (`accountID`);

--
-- Constraints for table `resume`
--
ALTER TABLE `resume`
  ADD CONSTRAINT `FK_registerjobseeker_resume` FOREIGN KEY (`SID`) REFERENCES `registerJobSeeker` (`SID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
