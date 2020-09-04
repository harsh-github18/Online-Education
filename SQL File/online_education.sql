-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2020 at 06:06 PM
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
-- Database: `online_education`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `subjectname` varchar(100) NOT NULL,
  `behalf` varchar(100) NOT NULL,
  `studentname` varchar(100) NOT NULL,
  `student_id` int(11) NOT NULL,
  `class` varchar(100) NOT NULL,
  `stream` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `subjectname`, `behalf`, `studentname`, `student_id`, `class`, `stream`, `status`, `date`) VALUES
(1, 'Physics', 'Snikhdha Singh', 'Prajjwal Gupta', 2, '12', 'Science Student', 'Present', '2020-08-14'),
(2, 'English', 'Prateek Kumar', 'Aradhya Gupta', 4, '11', 'Medical Student', 'Absent', '2020-08-20'),
(5, 'Physics', 'Snikhdha Singh', 'Aradhya Gupta', 4, '11', 'Medical Student', 'Present', '2020-08-28'),
(6, 'Physics', 'Prateek Kumar', 'Aradhya Gupta', 4, '11', 'Medical Student', 'Present', '2020-08-12'),
(7, 'English', 'Om Prakash', 'Aradhya Gupta', 4, '11', 'Medical Student', 'Present', '2020-08-09'),
(8, 'Maths', 'Om Prakash', 'Ujjwal Gupta', 5, '12', 'Science Student', 'Present', '2020-02-08'),
(10, 'Maths', 'Preeta Dixit', 'Prajjwal Gupta', 7, '12', 'Science Student', 'Absent', '2020-08-19'),
(11, 'English', 'Snikhdha Singh', 'Prajjwal Gupta', 7, '12', 'Science Student', 'Present', '2020-08-06');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`) VALUES
(1, 'admin@admin.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `notice` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `notice`, `description`) VALUES
(2, 'Spring Carnival', 'To inform all the students about the Spring Carnival Event which is going to be held on school premi'),
(3, 'Online  classes', 'Classes will be start on the online basis from next month.');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `stream` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `doj` date NOT NULL,
  `fee` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `name`, `gender`, `stream`, `class`, `age`, `email`, `dob`, `doj`, `fee`, `phone`, `password`) VALUES
(4, 'Aradhya Gupta', 'Female', 'Medical Student', '11', '19', 'dak@ks.omn', '2020-09-05', '2020-09-04', '4744', '74125', '123456'),
(5, 'Ujjwal Gupta', 'Male', 'Science Student', '12', '20', 'ujjwal@mail.in', '2020-08-27', '2020-08-29', '25000', '9874563214', '123456'),
(6, 'Prajjwal Gupta', 'Male', 'Science Student', '12', '20', '123456', '2020-02-28', '2020-08-01', '18500', '7896547896', ''),
(7, 'Prajjwal Gupta', 'Male', 'Science Student', '12', '20', 'samplestudent@mail.com', '2020-02-28', '2020-08-01', '28500', '78451254788', '123456'),
(8, 'xyz student', 'Male', 'Science Student', '12', '20', 'xyzstudeny@mail.in', '2020-09-04', '2020-09-30', '78945', '7896541236', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `studymaterial`
--

CREATE TABLE `studymaterial` (
  `material_id` int(11) NOT NULL,
  `chapternumber` varchar(10000) NOT NULL,
  `chaptername` varchar(10000) NOT NULL,
  `subjectname` varchar(10000) NOT NULL,
  `englishlink` mediumtext NOT NULL,
  `hindilink` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studymaterial`
--

INSERT INTO `studymaterial` (`material_id`, `chapternumber`, `chaptername`, `subjectname`, `englishlink`, `hindilink`) VALUES
(1, '1', 'Sets', 'Maths', 'https://www.nios.ac.in/media/documents/SrSec311NEW/311_Maths_Eng/311_Maths_Eng_Lesson1.pdf', 'https://www.nios.ac.in/media/documents/SrSec311NEW/311_Maths_Hindi/311_Maths_Hin_Lesson1.pdf'),
(2, '1', 'First Steps', 'English', 'https://www.nios.ac.in/media/documents/srsec302new/302EL1.pdf', ''),
(3, '2', 'Leisure', 'English', 'https://www.nios.ac.in/media/documents/srsec302new/302EL2.pdf', ''),
(4, '3', 'Reading With Understanding', 'English', 'https://www.nios.ac.in/media/documents/srsec302new/302EL3.pdf', ''),
(5, '4', 'Father,Dear Father', 'English', 'https://www.nios.ac.in/media/documents/srsec302new/302EL4.pdf', ''),
(6, '5', 'Fuel of Future', 'Select', 'https://www.nios.ac.in/media/documents/srsec302new/302EL5.pdf', ''),
(7, '5', 'Fuel of Future', 'English', 'https://www.nios.ac.in/media/documents/srsec302new/302EL5.pdf', ''),
(8, '1', 'Unit,Dimensions and vectors', 'Physics', 'https://www.nios.ac.in/media/documents/SrSec312NEW/312_Physics_Eng/312_Physics_Eng_Lesson1.pdf', 'https://www.nios.ac.in/media/documents/SrSec312NEW/312_Physics_Hindi/312_Physics_Hindi_Lesson1.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `name`, `type`) VALUES
(1, 'English', 'Common Stream'),
(2, 'Physics', 'Science Stream'),
(4, 'Maths', 'Common Stream'),
(5, 'Hindi', 'Common Stream'),
(6, 'Chemistry', 'Science Stream');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `name`, `subject`, `type`, `gender`, `age`, `email`, `phone`, `password`) VALUES
(1, 'Snikhdha Singh', 'English', 'Common Teacher', 'Female', '29', 'snik@gmail.com', '7845214785', '123456'),
(3, 'Prateek Kumar', 'Physics', 'Science Teacher', 'Male', '30', 'pk@gmail.com', '7896541236', '123456'),
(4, 'Om Prakash', 'Maths', 'Common Teacher', 'Male', '39', 'op@mail.in', '7896554125', '123456'),
(5, 'Preeta Dixit', 'English', 'Medical Teacher', 'Female', '35', 'sampleteacher@mail.com', '7896541236', '123456'),
(6, 'xyz', 'English', 'Common Teacher', 'Female', '31', 'xyz@mail.in', '9874563214', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `studymaterial`
--
ALTER TABLE `studymaterial`
  ADD PRIMARY KEY (`material_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `studymaterial`
--
ALTER TABLE `studymaterial`
  MODIFY `material_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
