-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 19, 2019 at 07:04 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weblib`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `BOOKID` int(5) NOT NULL,
  `BOOK_NAME` varchar(50) NOT NULL,
  `AUTHOR_NAME` varchar(30) NOT NULL,
  `CATEGORY` varchar(25) NOT NULL,
  `PUBLISHER_NAME` varchar(25) NOT NULL,
  `STOCK` int(5) NOT NULL,
  `COVER_IMG` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`BOOKID`, `BOOK_NAME`, `AUTHOR_NAME`, `CATEGORY`, `PUBLISHER_NAME`, `STOCK`, `COVER_IMG`) VALUES
(1, 'Life of PI', 'Yann Martel', 'Novel', 'Metro Reads', 101, 'Life_of_pi.jpg'),
(2, 'The 3 Mistakes of my Life', 'Chetan Bhagat', 'Novel', 'Metro', 102, 'Mistake_3.jpg'),
(3, 'Playing it my way', 'Sachin Tendulkar', 'Sports', 'Reader Digest', 100, 'Sachin.jpg'),
(4, 'The Adventures of Sherlock Holmes', 'Sir Arthur Conan Doyle', 'Detective', 'Sterling Juvenile', 102, 'Sherlock_Holmes.jpg'),
(5, 'The Black Superman', 'Muhammad Naveed Ahmed', 'Sports', 'BookRix', 100, 'The_black_superman.png'),
(6, 'Gitanjali', 'Rabindra Nath Tagore', 'Poetry', 'India Society of London', 100, 'Gitanjali.jpg'),
(7, 'Gora', 'Rabindra Nath Tagore', 'Novel', 'Sahitya Akademi', 100, 'Gora.jpg'),
(8, 'Devdas', 'Sarat Chandra Chattopadhy', 'Novel', 'GCS', 100, 'Devdas_cover.jpg'),
(9, 'Cinderella', ' Brothers Grimm', 'FairyTale', 'Scribner Press', 103, 'Cinderella.jpg'),
(10, 'Teach Yourself PHP MySQL', 'Julie C. Meloni', 'Programming', 'SAMS', 100, 'Teach_Urself_Php.PNG'),
(11, 'PHP and MySql 24 Hour Trainer', 'Andrea Tarr', 'Programming', 'Wrox', 100, 'PHP_MySQL_24Hr.PNG'),
(13, 'Learning Python', 'Mark Lutz', 'Programming', 'Oreilly', 100, 'Python.PNG'),
(14, 'Programming with Java', 'E balaguruswami', 'Programming', 'TMH', 100, 'Java.PNG'),
(15, 'The Savage Detectives', 'Roberto Bolano', 'Detective', 'Picador', 100, 'Savage_Detectives.PNG'),
(16, 'Casino Royale', 'Ian Fleming', 'Detective', 'Vintage Books', 100, 'Casino_Royale.PNG'),
(17, 'Feluda Samagra', 'Satyajit Roy', 'Detective', 'Ananda', 100, 'Feluda.PNG'),
(18, 'Alice in Wonderland', 'Charles Lutwidge Dodgson', 'FairyTale', ' Dreamland Publications', 100, 'Alice_in_Wonderland.PNG'),
(19, 'The Little Mermaid', 'Hans Christian Andersen', 'FairyTale', 'Dreamland Publications', 100, 'The_Little_Mermaid.PNG'),
(20, 'Selected Poems', 'John Keats', 'Poetry', 'Rupa Classics', 100, 'John_Keats.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `FID` int(5) NOT NULL,
  `UNAME` varchar(50) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `CATEGORY` varchar(25) DEFAULT NULL,
  `MSG` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`FID`, `UNAME`, `EMAIL`, `CATEGORY`, `MSG`) VALUES
(1, 'Suman', 'suman.g.84@gmail.com', 'General Message', 'It is good and user friendly...');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `MEMBER_NAME` varchar(50) DEFAULT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `PASSWORD` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`MEMBER_NAME`, `EMAIL`, `PASSWORD`) VALUES
('Admin', 'admin@panel.com', 'adminsenpai'),
('guest', 'guest', 'guest'),
('hello wat ', 'hello@wat.com', 'henlo'),
('Anindit Sinha', 'sinha.anindit.5@gmail.com', 'testtesttest'),
('test1', 'test@some.com', 'testtest'),
('HarvardTest', 'testing@test.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `tran_book`
--

CREATE TABLE `tran_book` (
  `TransactionID` int(5) NOT NULL,
  `BookID` int(5) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `IssueDate` varchar(20) DEFAULT NULL,
  `DueDate` varchar(20) DEFAULT NULL,
  `SubmitDate` varchar(20) DEFAULT NULL,
  `Fine` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tran_book`
--

INSERT INTO `tran_book` (`TransactionID`, `BookID`, `Email`, `IssueDate`, `DueDate`, `SubmitDate`, `Fine`) VALUES
(1, 2, 'suman.g.84@gmail.com', '2016-07-15', '2016-07-30', '2016-07-17', 0),
(2, 1, 'ayon.g.84@gmail.com', '2016-07-16', '2016-07-31', '2016-07-17', 0),
(3, 1, 'ayon.g.84@gmail.com', '2016-07-16', '2016-07-31', '2016-07-17', 0),
(4, 4, 'ayon.g.84@gmail.com', '2016-07-16', '2016-07-31', '2016-07-17', 0),
(5, 4, 'ayon.g.84@gmail.com', '2016-07-17', '2016-08-01', '2016-07-17', 0),
(6, 2, 'ayon.g.84@gmail.com', '2016-07-17', '2016-08-01', '2016-07-17', 0),
(7, 2, 'ayon.g.84@gmail.com', '2016-07-24', '2016-08-08', '2016-07-24', 0),
(8, 9, 'suman.g.84@gmail.com', '2016-07-30', '2016-08-14', '2016-07-31', 0),
(9, 2, 'suman.g.84@gmail.com', '2016-07-30', '2016-08-14', '2016-07-31', 0),
(10, 4, 'suman.g.84@gmail.com', '2016-07-30', '2016-08-14', '2016-07-31', 0),
(11, 8, 'suman.g.84@gmail.com', '2016-07-30', '2016-08-14', '2016-07-31', 0),
(12, 9, 'suman.g.84@gmail.com', '2016-07-31', '2016-08-15', '2016-07-31', 0),
(13, 2, 'suman.g.84@gmail.com', '2016-07-31', '2016-08-15', '2016-07-31', 0),
(14, 3, 'suman.g.84@gmail.com', '2016-07-31', '2016-08-15', '2016-07-31', 0),
(15, 5, 'suman.g.84@gmail.com', '2016-07-31', '2016-08-15', '2016-07-31', 0),
(16, 6, 'suman.g.84@gmail.com', '2016-07-31', '2016-08-15', '2016-07-31', 0),
(17, 8, 'suman.g.84@gmail.com', '2016-07-31', '2016-08-15', NULL, NULL),
(18, 1, 'suman.g.84@gmail.com', '2016-07-31', '2016-08-15', NULL, NULL),
(19, 2, 'admin@panel.com', '2019-10-17', '2019-11-01', '2019-10-17', 0),
(20, 4, 'admin@panel.com', '2019-10-18', '2019-11-02', '2019-10-18', 0),
(21, 2, 'testing@test.com', '2019-10-18', '2019-11-02', '2019-10-18', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`BOOKID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`FID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`EMAIL`);

--
-- Indexes for table `tran_book`
--
ALTER TABLE `tran_book`
  ADD PRIMARY KEY (`TransactionID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `BOOKID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `FID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tran_book`
--
ALTER TABLE `tran_book`
  MODIFY `TransactionID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
