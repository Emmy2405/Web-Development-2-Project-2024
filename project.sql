-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2024 at 06:42 PM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `ISBN` varchar(20) NOT NULL,
  `BookTitle` text DEFAULT NULL,
  `Author` text DEFAULT NULL,
  `Edition` int(11) DEFAULT NULL,
  `Year` int(11) DEFAULT NULL,
  `CategoryID` varchar(3) DEFAULT NULL,
  `Reservation` char(1) DEFAULT NULL CHECK (`Reservation` in ('N','Y'))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`ISBN`, `BookTitle`, `Author`, `Edition`, `Year`, `CategoryID`, `Reservation`) VALUES
('001-01', 'To Kill a Mockingbird', 'Harper Lee', 1, 1960, '008', 'Y'),
('001-02', '1984', 'George Orwell', 1, 1949, '008', 'N'),
('001-03', 'Pride and Prejudice', 'Jane Austen', 1, 1813, '008', 'N'),
('001-04', 'The Great Gatsby', 'F. Scott Fitzgerald', 1, 1925, '008', 'N'),
('001-05', 'The Catcher in the Rye', 'J.D. Salinger', 1, 1951, '008', 'N'),
('001-06', 'The Hobbit', 'J.R.R. Tolkien', 1, 1937, '008', 'N'),
('001-07', 'The Odyssey', 'Homer', 1, -800, '008', 'N'),
('001-08', 'Crime and Punishment', 'Fyodor Dostoevsky', 1, 1866, '008', 'N'),
('001-09', 'The Divine Comedy', 'Dante Alighieri', 1, 1320, '008', 'N'),
('001-10', 'Brave New World', 'Aldous Huxley', 1, 1932, '008', 'N'),
('001-11', 'Wuthering Heights', 'Emily Brontë', 1, 1847, '008', 'N'),
('001-12', 'The Iliad', 'Homer', 1, -750, '008', 'N'),
('001-13', 'Les Misérables', 'Victor Hugo', 1, 1862, '008', 'N'),
('001-14', 'The Lord of the Rings', 'J.R.R. Tolkien', 1, 1954, '008', 'N'),
('001-15', 'Great Expectations', 'Charles Dickens', 1, 1861, '008', 'N'),
('001-16', 'The Scarlet Letter', 'Nathaniel Hawthorne', 1, 1850, '008', 'N'),
('001-17', 'Animal Farm', 'George Orwell', 1, 1945, '008', 'N'),
('001-18', 'The Handmaid’s Tale', 'Margaret Atwood', 1, 1985, '008', 'N'),
('002-01', 'Moby-Dick', 'Herman Melville', 1, 1851, '005', 'N'),
('002-02', 'Fahrenheit 451', 'Ray Bradbury', 1, 1953, '002', 'Y'),
('002-03', 'Slaughterhouse-Five', 'Kurt Vonnegut', 1, 1969, '002', 'N'),
('002-04', 'A Clockwork Orange', 'Anthony Burgess', 1, 1962, '002', 'N'),
('002-05', 'Catch-22', 'Joseph Heller', 1, 1961, '002', 'N'),
('003-01', 'War and Peace', 'Leo Tolstoy', 1, 1869, '003', 'N'),
('003-02', 'Jane Eyre', 'Charlotte Brontë', 1, 1847, '003', 'N'),
('003-03', 'Anna Karenina', 'Leo Tolstoy', 1, 1877, '003', 'N'),
('003-04', 'A Tale of Two Cities', 'Charles Dickens', 1, 1859, '003', 'N'),
('003-05', 'The Kite Runner', 'Khaled Hosseini', 1, 2003, '003', 'N'),
('003-06', 'The Book Thief', 'Markus Zusak', 1, 2005, '003', 'N'),
('003-07', 'Beloved', 'Toni Morrison', 1, 1987, '003', 'N'),
('003-08', 'East of Eden', 'John Steinbeck', 1, 1952, '003', 'N'),
('003-09', 'Gone with the Wind', 'Margaret Mitchell', 1, 1936, '003', 'Y'),
('004-01', 'Ulysses', 'James Joyce', 1, 1922, '004', 'Y'),
('004-02', 'Frankenstein', 'Mary Shelley', 1, 1818, '004', 'N'),
('004-03', 'The Brothers Karamazov', 'Fyodor Dostoevsky', 1, 1880, '004', 'N'),
('004-04', 'The Picture of Dorian Gray', 'Oscar Wilde', 1, 1890, '004', 'N'),
('004-05', 'Dracula', 'Bram Stoker', 1, 1897, '004', 'N'),
('004-06', 'Lolita', 'Vladimir Nabokov', 1, 1955, '004', 'N'),
('005-01', 'Don Quixote', 'Miguel de Cervantes', 1, 1615, '005', 'N'),
('005-02', 'The Count of Monte Cristo', 'Alexandre Dumas', 1, 1844, '005', 'N'),
('005-03', 'Life of Pi', 'Yann Martel', 1, 2001, '005', 'N'),
('005-04', 'The Road', 'Cormac McCarthy', 1, 2006, '005', 'N'),
('005-05', 'The Old Man and the Sea', 'Ernest Hemingway', 1, 1952, '005', 'N'),
('005-06', 'The Grapes of Wrath', 'John Steinbeck', 1, 1939, '005', 'N'),
('005-07', 'Of Mice and Men', 'John Steinbeck', 1, 1937, '005', 'N'),
('005-08', 'The Pearl', 'John Steinbeck', 1, 1947, '005', 'N'),
('006-01', 'The Alchemist', 'Paulo Coelho', 1, 1988, '006', 'N'),
('006-02', 'One Hundred Years of Solitude', 'Gabriel García Márquez', 1, 1967, '006', 'N'),
('093-403992', 'Computers in Business', 'Alicia Oneill', 3, 1997, '003', 'N'),
('23472-8729', 'Exploring Peru', 'Stephanie Birchi', 4, 2005, '003', 'N'),
('237-34823', 'Business Strategy', 'Joe Peppard', 2, 2002, '002', 'N'),
('23u8-923849', 'A guide to nutrition', 'John Thorpe', 2, 1997, '001', 'N'),
('2983-3494', 'Cooking for children', 'Anabelle Sharpe', 1, 2003, '007', 'Y'),
('828n-308', 'computers for idiots', 'Susan O\'Neill', 5, 1998, '004', 'N'),
('9823-23984', 'My life in picture', 'Kevin Graham', 8, 2004, '002', 'N'),
('9823-2403-0', 'DaVinci Code', 'Dan Brown', 1, 2005, '001', 'N'),
('9823-98345', 'How to cook Italian food', 'Jamie Oliver', 2, 2007, '007', 'Y'),
('9823-98487', 'Optimising your business', 'Cleo Blair', 1, 2007, '003', 'N'),
('98234-029384', 'My ranch in Texas', 'George Bush', 1, 2005, '001', 'N'),
('988745-234', 'Tara Road', 'Maeve Binchy', 4, 2002, '008', 'N'),
('993-004-00', 'My life in bits', 'John Smith', 1, 2001, '001', 'N'),
('9987-0039882', 'Shooting History', 'Jon Snow', 1, 2003, '001', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `CategoryID` varchar(3) NOT NULL,
  `CategoryDescription` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`CategoryID`, `CategoryDescription`) VALUES
('001', 'Health'),
('002', 'Business'),
('003', 'Biography'),
('004', 'Technology'),
('005', 'Travel'),
('006', 'Self-Help'),
('007', 'Cookery'),
('008', 'Fiction');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `ISBN` varchar(20) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `ReservedDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`ISBN`, `Username`, `ReservedDate`) VALUES
('001-01', 'alanjmckenna', '2024-12-06'),
('2983-3494', 'alanjmckenna', '2024-12-06');

-- --------------------------------------------------------

--
-- Table structure for table `usersinfo`
--

CREATE TABLE `usersinfo` (
  `UserID` int(11) NOT NULL,
  `firstname` text DEFAULT NULL,
  `surname` text DEFAULT NULL,
  `AddressLine1` text NOT NULL,
  `AddressLine2` text NOT NULL,
  `City` text NOT NULL,
  `email` text DEFAULT NULL,
  `Telephone` int(10) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usersinfo`
--

INSERT INTO `usersinfo` (`UserID`, `firstname`, `surname`, `AddressLine1`, `AddressLine2`, `City`, `email`, `Telephone`, `phone`, `username`, `password`) VALUES
(6, 'Alan', 'McKenna', '38 Cranley Road', 'Fairview', 'Dublin', 'alan@gmail.com', 9998377, '856625567', 'alanjmckenna', 't1234s'),
(8, 'Joseph', 'Crotty', 'Apt 5 Clyde Road', 'DonnyBrook', 'Dublin', 'joe@gmail.com', 8887889, '876654456', 'joecrotty', 'kj7899'),
(9, 'Tom', 'Behan', '14 Hyde Road', 'Dalkey', 'Dublin', 'tommy@gmail.com', 9983747, '876738782', 'tommy100', '123456'),
(10, 'Eman', 'Abdelatti', '33 Curragh Park', '33', 'Mullagh', 'Uemail82@gmail.com', 872311488, '0872311488', 'emmy.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`ISBN`),
  ADD KEY `category_fk` (`CategoryID`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`ISBN`,`Username`),
  ADD UNIQUE KEY `isbn_fk` (`ISBN`) USING BTREE,
  ADD KEY `user_fk` (`Username`);

--
-- Indexes for table `usersinfo`
--
ALTER TABLE `usersinfo`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usersinfo`
--
ALTER TABLE `usersinfo`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `category_fk` FOREIGN KEY (`CategoryID`) REFERENCES `categories` (`CategoryID`);

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `isbn_fk` FOREIGN KEY (`ISBN`) REFERENCES `books` (`ISBN`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_fk` FOREIGN KEY (`Username`) REFERENCES `usersinfo` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
