-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2020 at 01:10 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `classroom`
--

CREATE TABLE `classroom` (
  `Classroom_ID` varchar(10) NOT NULL,
  `Classroom_Name` varchar(20) NOT NULL,
  `Available_Seat` int(10) NOT NULL,
  `Assigned_At` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classroom`
--

INSERT INTO `classroom` (`Classroom_ID`, `Classroom_Name`, `Available_Seat`, `Assigned_At`) VALUES
('DT101', 'DT 101', 40, '0000-00-00'),
('DT102', 'DT 102', 50, '0000-00-00'),
('DT103', 'DT 103', 60, '0000-00-00');

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
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(10) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `uname`, `pass`) VALUES
(1, 'admin', 'admin'),
(2, 'uday15-9779@diu.edu.bd', '172-15-9779'),
(3, 'neelima15-10150@diu.edu.bd', '172-15-10150'),
(4, 'syeda15-10000@diu.edu.bd', '172-15-10000');

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
  `Name` varchar(100) NOT NULL,
  `ShortNames` varchar(10) NOT NULL,
  `program_ID` int(20) NOT NULL,
  `level_ID` int(20) NOT NULL,
  `term_ID` int(20) NOT NULL,
  `Lecturer_Id` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`SubjectCode`, `Name`, `ShortNames`, `program_ID`, `level_ID`, `term_ID`, `Lecturer_Id`) VALUES
('MAT121', 'Mathematics II: Linear algebra and Coordinate Geometry', 'MAT 121', 2, 1, 1, '1005'),
('CSE131', 'Discrete Mathematics', ' CSE 131', 2, 1, 1, '1002'),
('ENG113', 'English Language-1', 'ENG 113', 2, 1, 1, '1004'),
('PHY123', 'Physics- II: Electricity, Magnetism and Modern Physics', 'PHY 123', 2, 1, 1, '1001'),
('PHY123L', 'Physics-II Lab', 'PHY 123L', 2, 1, 1, '1010'),
('CSE213', 'Algorithms', 'CSE 213', 2, 1, 2, '1001'),
('CSE213L', 'Algorithm Lab', 'CSE 213L', 2, 1, 2, '1005'),
('ACC214', 'Accounting', 'ACC 214', 2, 1, 2, '1005'),
('ECO314', ' Economics', ' ECO 314', 2, 1, 2, '1009'),
('MAT134', 'Mathematics III : Ordinary and Partial Differential Equations', ' MAT 134', 2, 1, 2, '1008'),
('CSE221', 'Theory of Computing', ' CSE 221', 2, 1, 3, '1009'),
('CSE222', 'Object Oriented Programming', ' CSE 222', 2, 1, 3, '1005'),
('CSE222L', 'Object Oriented Programming Lab', 'CSE 222L', 2, 1, 3, '1001'),
('MAT211', 'Mathematics-IV : Engineering Mathematics', ' MAT 211', 2, 1, 3, '1001'),
('STA223', ' Statistics', ' STA 223', 2, 1, 3, '1004'),
('CSE231', 'Microprocessor and Assembly Language', ' CSE 231', 2, 2, 1, '1001'),
('CSE231L', ' Microprocessor and assembly Language Lab', ' CSE 231L', 2, 2, 1, '1007'),
('CSE224', 'Electronic Devices and Circuits', ' CSE 224', 2, 2, 1, '1010'),
('CSE224L', 'Electronic Devices and Circuits Lab', ' CSE 224L', 2, 2, 1, '1002'),
('CSE232', 'Instrumentation and Control', 'CSE 232', 2, 2, 1, '1010'),
('CSE233', 'Data Communication', 'CSE 233', 2, 2, 1, '1010'),
('CSE322', 'Computer Architecture and Organization', ' CSE 322', 2, 2, 2, '1008'),
('CSE313', 'Computer Networks', 'CSE 313', 2, 2, 2, '1010'),
('CSE313L', 'Computer Networks Lab', 'CSE 313L', 2, 2, 2, '1007'),
('CSE311', 'Database Management System', 'CSE 311', 2, 2, 2, '1001'),
('CSE311L', 'Database Management System Lab', 'CSE 311L', 2, 2, 2, '1010'),
('CSE312', 'Numerical Methods', ' CSE 312', 2, 2, 2, '1005'),
('CSE331', 'Compiler Design', 'CSE 331', 2, 2, 3, '1002'),
('CSE331L', 'Compiler Design Lab', 'CSE 331L', 2, 2, 3, '1007'),
('CSE413', 'Simulation and Modeling', 'CSE 413', 2, 2, 3, '1006'),
('CSE413L', 'Simulation and Modeling Lab', ' CSE 413L', 2, 2, 3, '1003'),
('CSE323', 'Operating System', 'CSE 323', 2, 2, 3, '1010'),
('CSE323L', 'Operating System Lab', 'CSE 323L', 2, 2, 3, '1003'),
('CSE321', 'System Analysis and Design', 'CSE 321', 2, 3, 1, '1003'),
('CSE321L', 'System Analysis and Design Lab', 'CSE 321L', 2, 3, 1, '1008'),
('CSE421', 'Computer Graphics', 'CSE 421', 2, 3, 1, '1004'),
('CSE421L', 'Computer Graphics Lab', 'CSE 421L', 2, 3, 1, '1004'),
('CSE431', 'E-Commerce & Web Application', 'CSE 431', 2, 3, 1, '1005'),
('MGT414', ' Industrial Management', ' MGT 414', 2, 3, 1, '1006'),
('CSE412', 'Artificial Intelligence', 'CSE 412', 2, 3, 2, '1007'),
('CSE412L', 'Artificial Intelligence Lab', 'CSE 412L', 2, 3, 2, '1007'),
('CSE411', 'Communication Engineering', 'CSE 411', 2, 3, 2, '1008'),
('CSE332', 'Software Engineering', 'CSE 332', 2, 3, 2, '1009'),
('CSE333', 'Peripherals & Interfacing', 'CSE 333', 2, 3, 3, '1009'),
('CSE432', 'Computer and Network Security', 'CSE 432', 2, 3, 3, '1006'),
('CSE112', 'Computer Fundamentals', 'CSE 112', 1, 1, 1, '1001'),
('MAT111', 'Mathematics-I: Differential and Integral Calculus', 'MAT 111', 1, 1, 1, '1010'),
('ENG113D', 'Basic Functional English and English Spoken', 'ENG 113', 1, 1, 1, '1003'),
('PHY113', 'Physics-I: Mechanics, Heat & Thermodynamics,Waves & Oscillation, Optics', 'PHY 113', 1, 1, 1, '1004'),
('MAT121D', 'Mathematics -II: Complex Variable, Linear Algebra and Coordinate Geometry', 'MAT 121', 1, 1, 2, '1005'),
('CSE122', 'Programming and Problem Solving', 'CSE 122', 1, 1, 2, '1006'),
('CSE123', 'Problem Solving  Lab', 'CSE 123', 1, 1, 2, '1007'),
('PHY123D', 'Physics-II: Electricity, Magnetism and Modern Physics', 'PHY 123', 1, 1, 2, '1008'),
('PHY124', 'Physics-II Lab', 'PHY 124', 1, 1, 2, '1009'),
('ENG123', 'Writing and Comprehension', 'ENG 123', 1, 1, 2, '1010'),
('CSE131D', 'Discrete Mathematics', 'CSE 131', 1, 1, 3, '1010'),
('CSE132', 'Electrical Circuits', 'CSE 132', 1, 1, 3, '1001'),
('CSE133', 'Electrical Circuits Lab', 'CSE 133', 1, 1, 3, '1002'),
('CSE134', 'Data Structure', 'CSE 134', 1, 1, 3, '1003'),
('CSE135', 'Data Structure Lab', 'CSE 135', 1, 1, 3, '1002'),
('MAT131', 'Ordinary and Partial Differential Equations', 'MAT 131', 1, 1, 3, '1003'),
('MAT211D', 'Engineering Mathematics', 'MAT 211', 1, 2, 1, '1004'),
('CSE212', 'Digital Electronics', 'CSE 212', 1, 2, 1, '1005'),
('CSE213D', 'Digital Electronics Lab', 'CSE 213', 1, 2, 1, '1006'),
('CSE214', 'Object Oriented Programming', 'CSE 214', 1, 2, 1, '1007'),
('CSE215', 'Object Oriented Programming Lab', 'CSE 215', 1, 2, 1, '1008'),
('ED201', 'G Bangladesh Studies', 'ED 201', 1, 2, 1, '1009'),
('CSE221D', 'Algorithms', 'CSE 221', 1, 2, 2, '1010'),
('CSE222D', 'Algorithms Lab', 'CSE 222', 1, 2, 2, '1003'),
('STA133D', 'Statistics and Probability', 'STA 133', 1, 2, 2, '1004'),
('CSE224D', 'Electronic Devices and Circuits', 'CSE 224', 1, 2, 2, '1003'),
('CSE225', 'Electronic Devices and Circuits Lab', 'CSE 225', 1, 2, 2, '1004'),
('CSE231D', 'Microprocessor and Assembly Language', 'CSE 231', 1, 2, 3, '1005'),
('CSE232D', 'Microprocessor and Assembly Language Lab', 'CSE 232', 1, 2, 3, '1006'),
('CSE233D', 'Data Communication', 'CSE 233', 1, 2, 3, '1005'),
('CSE234D', 'Numerical Methods', 'CSE 234', 1, 2, 3, '1006'),
('CSE235', 'Introduction to Bio-Informatics', 'CSE 235', 1, 2, 3, '1006'),
('CSE311D', 'Database Management System', 'CSE 311', 1, 3, 1, '1007'),
('CSE312D', 'Database Management System Lab', 'CSE 312', 1, 3, 1, '1008'),
('CSE313D', 'Computer Networks', 'CSE 313', 1, 3, 1, '1009'),
('ECO314D', 'Economics', 'ECO 314', 1, 3, 1, '1008'),
('CSE321D', 'System Analysis and Design', 'CSE 321', 1, 3, 2, '1008'),
('CSE322D', 'Computer Architecture and Organization', 'CSE 322', 1, 3, 2, '1009'),
('CSE323D', 'Operating Systems', 'CSE 323', 1, 3, 2, '1008'),
('CSE324', 'Operating Systems Lab', 'CSE 324', 1, 3, 2, '1009'),
('GED321', 'Art of Effective Living', 'GED 321', 1, 3, 2, '1010'),
('CSE314D', 'Computer Networks Lab', 'CSE 314', 1, 3, 1, '1002'),
('CSE331D', 'Complier Design', 'CSE 331', 1, 3, 3, '1002'),
('CSE332D', 'Complier Design Lab', 'CSE 332', 1, 3, 3, '1003'),
('CSE333D', 'Software Engineering', 'CSE 333', 1, 3, 3, '1004'),
('CSE334', 'Wireless Programming', 'CSE 334', 1, 3, 3, '1003'),
('ACT301', 'Financial and Managerial Accounting 2', 'ACT 301', 1, 3, 3, '1004'),
('CSE412D', 'Artificial Intelligence', 'CSE 412', 1, 4, 1, '1005'),
('CSE413D', 'Artificial Intelligence Lab', 'CSE 413', 1, 4, 1, '1006'),
('CSE414D', 'Simulation and Modelling', 'CSE 414', 1, 4, 1, '1005'),
('CSE415D', 'Simulation and Modelling Lab', 'CSE 415', 1, 4, 1, '1006'),
('CSE417', 'Web Engineering', 'CSE 417', 1, 4, 1, '1007'),
('CSE418', 'Web Engineering Lab', 'CSE418', 1, 4, 1, '1008'),
('CSE421D', 'Computer Graphics', 'CSE 421', 1, 4, 2, '1008'),
('CSE422D', 'Computer Graphics Lab', 'CSE 422', 1, 4, 2, '1009'),
('CSE423', 'Embedded Systems', 'CSE 423', 1, 4, 2, '1009'),
('CSE498', 'Social and Professional Issues in Computing', 'CSE 498', 1, 4, 3, '1010');

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
('1001', 'Prof. Dr. Syed Akhter Hossain', 'Head of the Dept'),
('1002', 'Dr. Sheak Rashed Haider Noori', 'Associate Head'),
('1003', 'Dr. Md. Mustafizur Rahman', 'Associate Professor'),
('1004', 'Dr. S. M. Aminul Haque', 'Associate Professor'),
('1005', 'Professor Dr. Md. Ismail Jabiullah', 'Professor'),
('1006', 'Dr. S.R.Subramanya', 'Visiting Professor'),
('1007', 'Dr. Neil Perez Balba', 'Visiting Professor'),
('1008', 'Dr. Bibhuti Roy', 'Visiting Professor'),
('1009', 'Mr. Anisur Rahman', 'Assistant Professor'),
('1010', 'Mr. Gazi Zahirul Islam', 'Assistant Professor');

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
-- Indexes for table `classroom`
--
ALTER TABLE `classroom`
  ADD PRIMARY KEY (`Classroom_ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

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

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
