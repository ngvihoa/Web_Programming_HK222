-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3311
-- Generation Time: May 12, 2023 at 09:28 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cvwebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE `certificate` (
  `certid` int(11) NOT NULL,
  `namecert` varchar(255) NOT NULL,
  `time` date NOT NULL,
  `organization` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `cvid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `certificate`
--

INSERT INTO `certificate` (`certid`, `namecert`, `time`, `organization`, `description`, `cvid`) VALUES
(1, 'Certificate of Office Information Technology', '2004-04-01', 'ITO center', '', 24),
(2, 'IELTS', '2007-08-01', 'British Council', 'Listening: 7.5, Reading: 8.5, Writing: 7.0, Speaking: 7.5\r\n', 25),
(3, 'Sports Medicine Trainer', '2020-05-01', 'American College of Sports Medicine', '', 32);

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

CREATE TABLE `cv` (
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `cvid` int(11) NOT NULL,
  `jobtitle` varchar(255) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `hobby` varchar(255) DEFAULT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `cv`
--

INSERT INTO `cv` (`firstname`, `lastname`, `cvid`, `jobtitle`, `country`, `city`, `hobby`, `userid`) VALUES
('Sheridan', 'Pheasant', 1, 'Structural Analysis ', 'Vietnam', 'Nam Dinh', NULL, 3),
('Viv', 'MacVean', 2, 'Senior Developer', 'Vietnam', 'Bien Hoa', NULL, 2),
('Jeremy', 'Velten', 3, 'Health Coach I', 'Vietnam', 'Viet Lam', NULL, 4),
('Thacher', 'Jent', 4, 'Teacher', 'Vietnam', 'Sa Pa', NULL, 1),
('Hali', 'Simnel', 5, 'Desktop Support Tech', 'Vietnam', 'An Chau', NULL, 5),
('Hoa', 'Nguyen', 18, 'Frontend Developer', 'Vietnam', 'Ho Chi Minh', '', 8),
('Phu ', 'Nguyen', 19, 'Backend Developer', 'Vietnam', 'Ho Chi Minh', 'Basketball', 9),
('Thuy', 'Thanh', 20, 'Product Engineer', 'USA ', 'Texas', 'Gym, Jogging', 10),
('Thai', 'Nguyen', 21, 'Information Systems Manager', 'ThaiLand', 'Phuket', '', 11),
('Lui', 'Thai', 22, 'Web Designer', 'Laos', 'Vientiane', 'Coding, Teaching', 12),
('Nam Hoa', 'Nguyen', 23, 'Accounting Manager', 'Vietnam', 'Thai Binh', '', 13),
('Thi Phuong', 'Do', 24, 'Mathemetics Teacher  ', 'Vietnam', 'Vung Tau', '', 14),
('Jane', 'Franklin', 25, 'English Teacher', 'USA', 'Philadelphia', 'Reading books, writing', 15),
('Matthew', 'Jones', 26, 'Finance Analyst', 'Vietnam', 'Hanoi', '', 16),
('Nicole ', 'Diaz', 27, 'Sale Executive', 'England', 'London', '', 17),
('Arman', 'Lafitte', 28, 'Film Director', 'USA', 'Las Vegas', '', 18),
('Catherine', 'Jones', 29, 'Medical Support Assistant', 'England', 'London', '', 19),
('Gary', 'Evans', 30, 'Engineer Consultant', 'UK', 'Manchester', '', 20),
('Dani', 'Schwaiger', 31, 'Creative Director', 'USA', 'New York', '', 21),
('Jonatan ', 'Padberg', 32, 'Medicine Doctor', 'USA', 'Washington DC', '', 22);

-- --------------------------------------------------------

--
-- Table structure for table `degree`
--

CREATE TABLE `degree` (
  `degreeid` int(11) NOT NULL,
  `namedegree` varchar(255) NOT NULL,
  `gradtime` date NOT NULL,
  `school` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `cvid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `degree`
--

INSERT INTO `degree` (`degreeid`, `namedegree`, `gradtime`, `school`, `description`, `cvid`) VALUES
(3, 'Bachelor of Computer Science', '2023-01-01', 'BK University', '', 18),
(4, 'Bachelor of Computer Engineering', '2023-02-01', 'BK University', '', 18),
(5, 'Master of Computer Engineering', '2013-06-01', 'University of British Columbia', '', 19),
(6, 'Bachelor of Business', '2019-06-01', 'Stockholm School of Economics', '', 20),
(7, 'Master of Technology Information', '2010-06-01', 'University of Ilorin', '', 21),
(8, 'Master of Computer Technology', '2009-08-01', 'Baker University', '', 22),
(9, 'Master of Business Management', '2010-06-01', 'University of Ilorin', '', 23),
(10, 'Bachelor of Education', '2002-06-01', 'HCM University of Education', '', 24),
(11, 'Master of Mathemetics', '2004-06-01', 'HCM University of Education', '', 24),
(12, 'PhD in Comparative Literature', '2008-05-01', 'University of Chicago', '', 25),
(13, 'Master of Science in Accounting and Finance', '2016-05-01', 'Labour Mobility University', '', 26),
(14, 'Master in Business Administration', '2010-08-01', 'University of Arizona', '', 27),
(15, 'Bachelor of Fine Arts', '2018-05-01', 'University of Nevada', '', 28),
(16, 'Bachelor of Biology', '2018-02-01', 'Imperial College', '', 29),
(17, 'Bachelor of Science in Engineering', '2009-09-01', 'Essex University', '', 30),
(18, 'Master degree in graphic designs', '2011-09-01', 'New York University', '', 31),
(19, 'Doctor of Science in Biology', '2018-09-01', 'University of Detroit Mercy', '', 32);

-- --------------------------------------------------------

--
-- Table structure for table `reference`
--

CREATE TABLE `reference` (
  `refid` int(11) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `refname` varchar(40) NOT NULL,
  `company` varchar(255) NOT NULL,
  `relationship` varchar(20) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `cvid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `reference`
--

INSERT INTO `reference` (`refid`, `phone`, `refname`, `company`, `relationship`, `email`, `cvid`) VALUES
(21, '0999314005', 'Tho Nguyen', 'University of Technology', 'Boss', 'hcmut@gmail.com', 18),
(22, '5621838941', 'Ludwig Dagg', 'KMS', 'Group Leader', 'ldagg0@mapy.cz', 19),
(23, '1996379200', 'Shermy Attenborough', 'Talane', 'Project Manager', 'sattenborough5@loc.gov', 20),
(24, '2905382883', 'Vu Thuy Linh', 'KMS', 'Lead Manager', 'vtlinh@kms.com', 21),
(25, '2817333645', 'Grete Keningley', 'Trilia', 'Lead Manager', 'gkeningleyb@cdbaby.com', 21),
(26, '7932911240', 'Lizzy Gimblett', 'RealCube', 'Group Leader', 'lgimblett2@desdev.cn', 22),
(27, '0944417265', 'Tran Kieu Phong', 'Xelex', 'HR Manager', 'phongtk@xelex.org.com', 23),
(28, '72916635284', 'Do Thanh Binh', 'Le Hong Phong high school for the gifted', 'Head Officer', 'binhtd@gmail.com', 24),
(29, '0987654321', 'John Doe', 'University of Chicago', 'Instructor ', 'johnd@gmail.com', 25),
(30, '0845459999', 'Dever Dahl', 'Independent Financials', 'Manager', 'matthewjones123@gmail.com', 26),
(31, '01452594392', 'David Siegel', 'Niche Software Ltd', 'Manager', 'david.siegel@gmail.com', 27),
(32, '6255152773', 'Chris Patterson', 'University of Nevada', 'Instructor', 'arman12345@gmail.com', 28),
(33, '6846882109', 'Jose Orion', 'LMC Medical', 'Instructor', 'orion@lmc.com', 29),
(34, '7266839467', 'Ed Long', 'Essex', 'Team Leader', 'edl@essex.com', 30),
(35, '1254796832', 'Farrah Mendez', 'American Movie Company', 'Manager', 'farah@amc.com', 31),
(36, '1254796832', 'Irving Ryan', 'University of Detroit Mercy', 'Instructor', 'ryan@dmu.edu.com', 32);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(75) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `password`, `phone`, `email`) VALUES
(1, 'employee1', '123456', '1234567890', 'employee1@gmail.com'),
(2, 'employee2', 'abcdabc', '0987654321', 'employee2@gmail.com'),
(3, 'employee3', 'abcd123', '90983123', 'employee3@gmail.com'),
(4, 'employee4', 'xyzabcd123', '3143534234', 'employee4@gmail.com'),
(5, 'employee5', 'abcdabcd2', '418329', 'employee5@gmail.com'),
(6, 'employer1', 'abcdabcd', '123219381', 'employer1@gmail.com'),
(7, 'employer2', '123456', '983279842', 'employer2@gmail.com'),
(8, 'HoaNguyen', '$2y$10$F4GgJO3QebTJvotWD5MEFO9zxAS.HfpXKgqEWR8dgEE/HyVfCN.S6', '0983786674', 'hoa@gmail.com'),
(9, 'PhuNguyen', '$2y$10$zPo0Kdv8y.SG7LIK/14Vp.1dPEWUL2CRPWdKEjZPgfC3eHEyiQuRC', '0977411463', 'phu@gmail.com'),
(10, 'ThanhThuy', '$2y$10$nK4FL.Gd8FA0qjQ0ZzE/S.Z0Zizqr.3pulSTCSoTRxuSgxc005GF6', '09372372813', 'thanhthuy@gmail.com'),
(11, 'ThaiNguyen111', '$2y$10$XcJRHPzkdGP4bXHy7IJWOe9Fnqk8r8qbAISuoUlTpAhVANNzy6.E.', '0922132475', 'thai@gmail.com'),
(12, 'LuiThai', '$2y$10$NBzM0Z6OD91iJJr8SlH7KORwNjVGIBGME8MrUFU79h3vOBMAOsP2G', '09993726534', 'lui@gmail.com'),
(13, 'HoaNguyen121', '$2y$10$Y2k24/J8E.2WMo0EMx3wUex3zrJrmZSDBNp72wGGUfNvH3j1jbIcS', '09836274653', 'hoa@gmail.com'),
(14, 'PhuongDo', '$2y$10$.be3uy2g6HASyfiTpdo.lOcqZiG4bSc/0jqUmFbJ9sOclCnjJ9VQ.', '983627111845', 'phuong.do@gmail.com'),
(15, 'janefranklin', '$2y$10$ftVrs/HIBex0Uk3K/XTIh.JuuH3DMCAAUi881LYyxdSqtU7OPQRuO', '0987654321', 'janefranklin512@gmail.com'),
(16, 'matthewjones', '$2y$10$Jr8ho4MzFgJbyGJjplBy0eeSzDI/GqHptRxkUL.bbvfuhqYBFcOHy', '0845459999', 'matjohn@gamial.com'),
(17, 'Nicolediaz', '$2y$10$Ti/55EZdtdWxbxfoAgEWmOhgkTu/2cCLL7IqVnaWNxwxca6/VXWx6', '7438737393', 'nicole.dz@gmail.com'),
(18, 'armanlaffle', '$2y$10$iIXhc.FqstHFUUCvb1nuye96qtFPRyT82Wzi1tENEncxIraYnaOle', '07261946628', 'ajbdkad@gmail.com'),
(19, 'cathJones', '$2y$10$OdVNA9OweUYuqn0aejmYxORWImy1Uq9qosgkDwlS/L.UcmLrwJZf2', '86253379256', 'cathjj@gmail.com'),
(20, 'GaryEvans', '$2y$10$Xc4MuvkOokVVd8GJUwkZM.CqliIRmXkLPHCnHAqdTuVrApX6.d1iq', '0264883729', 'garyE@gmail.com'),
(21, 'daninewbie', '$2y$10$kJsk2UAhw.rWs4vTklzhS.O5.oF7jDbYf1tQeZTn88S2Gd3lAWq6W', '8725553672', 'danisc@gmail.com'),
(22, 'johnathan231', '$2y$10$0yFm1PtbCylbCMGl3pTAU.JKPdEVLue37AI15EA9eSl1haa0DcBGq', '76173601722', 'jonnyth@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `workexp`
--

CREATE TABLE `workexp` (
  `workid` int(11) NOT NULL,
  `jobtitle` varchar(255) NOT NULL,
  `starttime` date NOT NULL,
  `endtime` date NOT NULL,
  `company` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `country` varchar(255) NOT NULL,
  `cvid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `workexp`
--

INSERT INTO `workexp` (`workid`, `jobtitle`, `starttime`, `endtime`, `company`, `description`, `country`, `cvid`) VALUES
(3, 'Backend Developer', '2016-01-01', '2022-11-01', 'ITDSV', '', 'Singapore', 19),
(4, 'Software Deveoper ', '2022-12-01', '2023-03-01', 'KMS', '', 'Vietnam', 19),
(5, 'Product Engineer', '2019-01-01', '2020-06-01', 'Talane', '', 'USA', 20),
(6, 'Information Systems Manager', '2010-06-01', '2014-07-01', 'Trilia', '', 'ThaiLand', 21),
(7, 'Information Systems Manager', '2014-12-01', '2019-04-01', 'KMS', '', 'Vietnam', 21),
(8, 'Web Designer ', '2009-12-01', '2020-05-01', 'RealCube', '', 'USA', 22),
(9, 'Accounting Manager ', '2015-05-01', '2023-03-01', 'Xelex', '', 'Vietnam', 23),
(10, 'Math Teacher', '2005-08-01', '2017-05-01', 'Le Hong Phong high school for the gifted', '', 'Vetnam', 24),
(11, 'Teacher Assistant of English', '2008-01-01', '2013-08-01', 'University of Chicago', 'Assisted in developing and executing core curriculum requirements for over 20 under- and postgraduate courses.', 'USA', 25),
(12, 'Financial Analyst Intern', '2014-09-01', '2015-02-01', 'Independent Financials', 'Performed high quality analysis on financial data.\r\nCreated ad hoc financial reports using Excel.', 'UK', 26),
(13, 'Junior Sales Executive', '2010-01-01', '2012-12-01', 'Niche Software Ltd', '', 'England', 27),
(14, 'Creative Director', '2017-08-01', '2019-12-01', 'Fender', 'Led development of creative strategy', 'USA', 28),
(15, 'Lab assistant', '2020-05-01', '2020-08-01', 'London Medical Center', 'Led tours of lab facilities for small groups. Entered data and managed results database\r\n', 'England', 29),
(16, 'Engineer Consultant', '2017-09-01', '2020-04-01', 'Essex', 'Implement a comprehensive maintenance strategy which increased product service revenues by 130% and established a significant income source', 'UK', 30),
(17, 'Creative Director', '2017-09-01', '2021-04-01', 'American Movie Company', '', 'USA', 31);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `certificate`
--
ALTER TABLE `certificate`
  ADD PRIMARY KEY (`certid`),
  ADD KEY `cvid` (`cvid`);

--
-- Indexes for table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`cvid`),
  ADD KEY `FK_UserCV` (`userid`);

--
-- Indexes for table `degree`
--
ALTER TABLE `degree`
  ADD PRIMARY KEY (`degreeid`),
  ADD KEY `cvid` (`cvid`);

--
-- Indexes for table `reference`
--
ALTER TABLE `reference`
  ADD PRIMARY KEY (`refid`),
  ADD KEY `cvid` (`cvid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `workexp`
--
ALTER TABLE `workexp`
  ADD PRIMARY KEY (`workid`),
  ADD KEY `cvid` (`cvid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `certificate`
--
ALTER TABLE `certificate`
  MODIFY `certid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cv`
--
ALTER TABLE `cv`
  MODIFY `cvid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `degree`
--
ALTER TABLE `degree`
  MODIFY `degreeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `reference`
--
ALTER TABLE `reference`
  MODIFY `refid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `workexp`
--
ALTER TABLE `workexp`
  MODIFY `workid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `certificate`
--
ALTER TABLE `certificate`
  ADD CONSTRAINT `certificate_ibfk_1` FOREIGN KEY (`cvid`) REFERENCES `cv` (`cvid`);

--
-- Constraints for table `cv`
--
ALTER TABLE `cv`
  ADD CONSTRAINT `FK_UserCV` FOREIGN KEY (`userid`) REFERENCES `users` (`userID`);

--
-- Constraints for table `degree`
--
ALTER TABLE `degree`
  ADD CONSTRAINT `degree_ibfk_1` FOREIGN KEY (`cvid`) REFERENCES `cv` (`cvid`);

--
-- Constraints for table `reference`
--
ALTER TABLE `reference`
  ADD CONSTRAINT `reference_ibfk_1` FOREIGN KEY (`cvid`) REFERENCES `cv` (`cvid`);

--
-- Constraints for table `workexp`
--
ALTER TABLE `workexp`
  ADD CONSTRAINT `workexp_ibfk_1` FOREIGN KEY (`cvid`) REFERENCES `cv` (`cvid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
