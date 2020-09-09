-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2017 at 02:40 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seatingarrangement`
--

-- --------------------------------------------------------

--
-- Table structure for table `fourthyear`
--

CREATE TABLE `fourthyear` (
  `Roll_No` int(11) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fourthyear`
--

INSERT INTO `fourthyear` (`Roll_No`, `first_name`, `last_name`) VALUES
(1, 'Benjamin', 'Henry'),
(2, 'Raymond', 'Willis'),
(3, 'Alice', 'Edwards'),
(4, 'Michael', 'Ruiz'),
(5, 'Julie', 'Morris'),
(6, 'Jonathan', 'Bowman'),
(7, 'Tammy', 'Hill'),
(8, 'Ralph', 'Day'),
(9, 'Ronald', 'Gordon'),
(10, 'Wayne', 'Hudson'),
(11, 'Billy', 'Fowler'),
(12, 'Jason', 'Watson'),
(13, 'Sharon', 'Ward'),
(14, 'Julie', 'Sanders'),
(15, 'Douglas', 'Scott'),
(16, 'Katherine', 'Chavez'),
(17, 'Juan', 'Parker'),
(18, 'Sara', 'Harris'),
(19, 'Joan', 'Cox'),
(20, 'Teresa', 'Parker'),
(21, 'Christine', 'Smith'),
(22, 'Dennis', 'Simmons'),
(23, 'Jesse', 'Reed'),
(24, 'Nicholas', 'Stanley'),
(25, 'Patrick', 'Shaw'),
(26, 'Jack', 'Hughes'),
(27, 'James', 'Ruiz'),
(28, 'Steven', 'Greene'),
(29, 'Heather', 'Welch'),
(30, 'Cynthia', 'Hill'),
(31, 'Lisa', 'Fowler'),
(32, 'Shawn', 'Armstrong'),
(33, 'Alan', 'Williams'),
(34, 'Keith', 'Roberts'),
(35, 'Phyllis', 'Boyd'),
(36, 'Teresa', 'Wilson'),
(37, 'Earl', 'Holmes'),
(38, 'Matthew', 'Matthews'),
(39, 'Charles', 'Mitchell'),
(40, 'Shirley', 'Ferguson'),
(41, 'Arthur', 'Gardner'),
(42, 'Shirley', 'Andrews'),
(43, 'Christine', 'Thomas'),
(44, 'Frank', 'Freeman'),
(45, 'Jean', 'Willis'),
(46, 'Carolyn', 'Wilson'),
(47, 'Justin', 'Garcia'),
(48, 'Elizabeth', 'Elliott'),
(49, 'Rebecca', 'Barnes'),
(50, 'Debra', 'Washington'),
(51, 'John', 'Scott'),
(52, 'Steve', 'Smith'),
(53, 'Jose', 'Oliver'),
(54, 'Fred', 'Tucker'),
(55, 'Mary', 'Kim'),
(56, 'William', 'Perez'),
(57, 'Nancy', 'Perez'),
(58, 'Juan', 'Ramirez'),
(59, 'Joshua', 'Dean'),
(60, 'Albert', 'Fuller'),
(61, 'Juan', 'Franklin'),
(62, 'Doris', 'Kennedy'),
(63, 'Joseph', 'Banks'),
(64, 'Tammy', 'Palmer'),
(65, 'William', 'Ford'),
(66, 'Carolyn', 'Russell'),
(67, 'Thomas', 'Lane'),
(68, 'Lawrence', 'Rogers'),
(69, 'Teresa', 'Graham'),
(70, 'Patricia', 'Russell'),
(71, 'David', 'White'),
(72, 'Ronald', 'Price'),
(73, 'Jane', 'Johnston'),
(74, 'Mary', 'Williamson'),
(75, 'Earl', 'Alvarez'),
(76, 'John', 'Murphy'),
(77, 'Billy', 'Gilbert'),
(78, 'Brandon', 'Watkins'),
(79, 'Sean', 'Moreno'),
(80, 'Cheryl', 'Perez');

-- --------------------------------------------------------

--
-- Table structure for table `secondyear`
--

CREATE TABLE `secondyear` (
  `Roll_No` int(11) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `secondyear`
--

INSERT INTO `secondyear` (`Roll_No`, `first_name`, `last_name`) VALUES
(1, 'Ronald', 'Mendoza'),
(2, 'Howard', 'Crawford'),
(3, 'Lois', 'Peters'),
(4, 'Rachel', 'Sims'),
(5, 'Joyce', 'Hanson'),
(6, 'Gerald', 'Morales'),
(7, 'Thomas', 'Lawrence'),
(8, 'Kimberly', 'Riley'),
(9, 'Roger', 'Woods'),
(10, 'Adam', 'Williamson'),
(11, 'Barbara', 'Young'),
(12, 'Elizabeth', 'Knight'),
(13, 'Frank', 'Baker'),
(14, 'Alan', 'Weaver'),
(15, 'Cynthia', 'Hernandez'),
(16, 'Patricia', 'Bryant'),
(17, 'George', 'Gordon'),
(18, 'Louis', 'Ford'),
(19, 'Anna', 'George'),
(20, 'Christina', 'Torres'),
(21, 'Marie', 'Reynolds'),
(22, 'Russell', 'Fernandez'),
(23, 'Robin', 'Edwards'),
(24, 'Thomas', 'Martinez'),
(25, 'Beverly', 'Rose'),
(26, 'Dennis', 'Murray'),
(27, 'Mark', 'Banks'),
(28, 'Christopher', 'Sullivan'),
(29, 'Samuel', 'Mcdonald'),
(30, 'Laura', 'Flores'),
(31, 'Mildred', 'Ruiz'),
(32, 'Joan', 'Hayes'),
(33, 'Justin', 'Jackson'),
(34, 'Thomas', 'Dunn'),
(35, 'Elizabeth', 'Edwards'),
(36, 'Brenda', 'Martinez'),
(37, 'Teresa', 'Owens'),
(38, 'Lawrence', 'Patterson'),
(39, 'Jonathan', 'Cox'),
(40, 'Lori', 'Rodriguez'),
(41, 'Eugene', 'Ortiz'),
(42, 'Catherine', 'Clark'),
(43, 'Kathryn', 'Gomez'),
(44, 'Sandra', 'Robertson'),
(45, 'Michael', 'Owens'),
(46, 'Margaret', 'Fernandez'),
(47, 'Stephen', 'Gibson'),
(48, 'Dorothy', 'Sullivan'),
(49, 'Sean', 'Carpenter'),
(50, 'Steven', 'James'),
(51, 'Edward', 'Berry'),
(52, 'Scott', 'Cole'),
(53, 'Cynthia', 'Murray'),
(54, 'Jacqueline', 'Diaz'),
(55, 'Melissa', 'Lynch'),
(56, 'Cynthia', 'Peterson'),
(57, 'Debra', 'Robinson'),
(58, 'Lawrence', 'Mendoza'),
(59, 'Jean', 'Griffin'),
(60, 'Annie', 'Burns'),
(61, 'Billy', 'Marshall'),
(62, 'Roger', 'Holmes'),
(63, 'David', 'Moreno'),
(64, 'Johnny', 'Wright'),
(65, 'Stephen', 'Mendoza'),
(66, 'Jose', 'Alvarez'),
(67, 'Russell', 'Pierce'),
(68, 'Brian', 'Spencer'),
(69, 'William', 'Brooks'),
(70, 'Chris', 'Fields'),
(71, 'Adam', 'Davis'),
(72, 'Harold', 'Price'),
(73, 'Tammy', 'Peters'),
(74, 'Louise', 'Watson'),
(75, 'Denise', 'Murphy'),
(76, 'Edward', 'Kelley'),
(77, 'Donald', 'Wallace'),
(78, 'Raymond', 'Foster'),
(79, 'Steven', 'Fowler'),
(80, 'Catherine', 'Oliver');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `SubjectCode` varchar(20) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `ShortNames` varchar(10) NOT NULL,
  `Lecturer_Id` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`SubjectCode`, `Name`, `ShortNames`, `Lecturer_Id`) VALUES
('TEITC602', 'Distributed System', 'D.S', '1005'),
('TEITC604', 'Data mining and business Intelligence', 'D.M.B.I', '1002'),
('TEITC605', 'Advanced Internet Technology', 'A.I.T', '1004'),
('TEITC601', 'Software Engineering', 'S.E', '1001'),
('TEITC603', 'Software and Web Security', 'S.W.S', '1010'),
('BEITC701', 'Software Project Management', 'S.P.M', '1001'),
('BEITC702', 'Cloud Computing', 'C.C', '1005'),
('BEITC703', 'Intelligent System', 'I.S', '1005'),
('BEITC704', 'Wireless Technology', 'W.T', '1009'),
('BEITC705', 'Elective-1', 'E-1', '1008'),
('BEITC801', 'Storage Network Management and Retrieval', 'S.N.M.R', '1009'),
('BEITC802', 'Big Data Analytics', 'B.D.A', '1005'),
('BEITC803', 'Computer Simulation and Modeling', 'C.S.M', '1001'),
('BEITC804', 'Elective-2', 'E-2', '1001'),
('TEITC501', 'Computer Graphics And Virtual Reality', 'C.G.V.R', '1004'),
('TEITC502', 'Operating System', 'O.S', '1001'),
('TEITC503', 'Microcontroller and Embeded System', 'M.C.E.S', '1007'),
('TEITC504', 'Advanced Database Management Systems', 'A.D.B.M.S', '1010'),
('TEITC505', 'Open Source Technologies', 'O.S.T', '1002'),
('TEITC506', 'Business Communication And Ethics', 'B.C.E', ''),
('SEITC301', 'Applied Mathemetics 3', 'A.M 3', ''),
('SEITC302', 'Data Structure And Algorithm', 'D.S.A', '1008'),
('SEITC303', 'Object Oriented Programming Methodology', 'O.O.P.M', '1010'),
('SEITC304', 'Analog And Digital Circuits', 'A.D.C', '1007'),
('SEITC306', 'Principles Of Analog And Digital Comm', 'P.A.D.C', ''),
('SEITC305', 'Database Management System', 'D.B.M.S', '1010'),
('SEITC401', 'Applied Mathemetics 4', 'A.M 4', ''),
('SEITC402', 'Computer Networks', 'C.N', '1002'),
('SEITC403', 'Computer Organization And Architecture', 'C.O.A', '1007'),
('SEITC404', 'Automata Theory', 'A.T', '1006'),
('SEITC405', 'Web Programming', 'W.P', '1003'),
('SEITC406', 'Information Theory And Coding', 'I.T.C', '1010');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `EmpId` varchar(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Designation` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`EmpId`, `Name`, `Designation`) VALUES
('1001', 'Mahalaxmi', 'Lecturer'),
('1002', 'Tayyabali', 'Assistant Professor'),
('1003', 'Nilesh', 'Assistant Professor'),
('1004', 'Vaishali', 'Assistant Professor'),
('1005', 'Sunantha', 'Lecturer'),
('1006', 'Uday', 'Lecturer'),
('1007', 'Jhanavi', 'Head Of Department'),
('1008', 'Sushree', 'Assistant Professor'),
('1009', 'Prasad', 'Lecturer'),
('1010', 'Aruna', 'Assistant Lectuter');

-- --------------------------------------------------------

--
-- Table structure for table `thirdyear`
--

CREATE TABLE `thirdyear` (
  `Roll_No` int(11) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thirdyear`
--

INSERT INTO `thirdyear` (`Roll_No`, `first_name`, `last_name`) VALUES
(1, 'Michelle', 'James'),
(2, 'Kimberly', 'Richardson'),
(3, 'Raymond', 'Coleman'),
(4, 'Arthur', 'Lynch'),
(5, 'Juan', 'Hicks'),
(6, 'Jennifer', 'Bishop'),
(7, 'Kelly', 'Burton'),
(8, 'Richard', 'Davis'),
(9, 'Frank', 'Weaver'),
(10, 'Martha', 'Schmidt'),
(11, 'Henry', 'Arnold'),
(12, 'Jacqueline', 'Morales'),
(13, 'Alice', 'Kim'),
(14, 'Cynthia', 'Kennedy'),
(15, 'Ryan', 'Miller'),
(16, 'Alan', 'Smith'),
(17, 'Jeremy', 'Jenkins'),
(18, 'Adam', 'Stephens'),
(19, 'Phyllis', 'Castillo'),
(20, 'Jeffrey', 'Williams'),
(21, 'Jimmy', 'Alvarez'),
(22, 'Christopher', 'Shaw'),
(23, 'Ann', 'Hanson'),
(24, 'Anna', 'Burns'),
(25, 'George', 'Gutierrez'),
(26, 'Bonnie', 'Nichols'),
(27, 'Annie', 'Castillo'),
(28, 'Chris', 'Austin'),
(29, 'Anna', 'Moore'),
(30, 'James', 'Cruz'),
(31, 'Fred', 'Smith'),
(32, 'Linda', 'Rice'),
(33, 'Thomas', 'Barnes'),
(34, 'Albert', 'Nichols'),
(35, 'Gregory', 'Rogers'),
(36, 'Lisa', 'Hughes'),
(37, 'Christine', 'Simmons'),
(38, 'Scott', 'Barnes'),
(39, 'James', 'Lynch'),
(40, 'Cheryl', 'Webb'),
(41, 'Annie', 'Alexander'),
(42, 'Matthew', 'Sanders'),
(43, 'Scott', 'Moreno'),
(44, 'Paula', 'Rose'),
(45, 'Betty', 'Lawson'),
(46, 'Walter', 'Sanders'),
(47, 'Jack', 'Porter'),
(48, 'Jean', 'Hernandez'),
(49, 'Anne', 'Sims'),
(50, 'Louis', 'Hart'),
(51, 'Joseph', 'Hernandez'),
(52, 'Larry', 'Murphy'),
(53, 'Stephen', 'Gonzales'),
(54, 'Tammy', 'Rogers'),
(55, 'Lori', 'Dunn'),
(56, 'Andrea', 'Willis'),
(57, 'Cheryl', 'Harrison'),
(58, 'Stephen', 'Miller'),
(59, 'Sharon', 'Ferguson'),
(60, 'Joseph', 'Roberts'),
(61, 'Ruby', 'Jones'),
(62, 'Brandon', 'Payne'),
(63, 'Joshua', 'Sims'),
(64, 'Lois', 'Cunningham'),
(65, 'Margaret', 'Lane'),
(66, 'Eugene', 'Frazier'),
(67, 'Marilyn', 'Torres'),
(68, 'John', 'Kennedy'),
(69, 'Diana', 'Turner'),
(70, 'Joyce', 'Hanson'),
(71, 'Jose', 'Anderson'),
(72, 'Lillian', 'Reyes'),
(73, 'Carolyn', 'Jacobs'),
(74, 'Ryan', 'Medina'),
(75, 'Marie', 'Murray'),
(76, 'Matthew', 'Hughes'),
(77, 'Anthony', 'Edwards'),
(78, 'Aaron', 'Bishop'),
(79, 'Linda', 'Mendoza'),
(80, 'Craig', 'Alvarez');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`SubjectCode`),
  ADD KEY `Lecturer_Id` (`Lecturer_Id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`EmpId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
