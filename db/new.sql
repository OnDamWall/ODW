-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- 생성 시간: 22-06-06 06:20
-- 서버 버전: 10.4.20-MariaDB
-- PHP 버전: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `new`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `register`
--

CREATE TABLE `register` (
  `no` int(11) NOT NULL,
  `id` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userid` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pw` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 테이블의 덤프 데이터 `register`
--

INSERT INTO `register` (`no`, `id`, `userid`, `pw`, `name`, `sex`, `tel`, `email`, `redate`) VALUES
(1, 'register', 'sd', 'sdf', 'dsf', 'male', 'dsf', 'dsf', '2022-06-02'),
(2, 'register', 'sdf', 'sdf', 'sdf', 'male', 'sdf', 'sdf', '2022-06-02'),
(3, 'register', 'asdf', 'ASAS', 'asdf', 'male', 'SDF', 'sdf', '2022-06-02'),
(4, 'register', 'ff', 'asdf', 'ff', 'male', 'asdfasdf', 'ff', '2022-06-02'),
(5, 'register', 'yechan', '1234', '채예찬', 'male', '01082664111', 'chae971012@naver.com', '2022-06-03'),
(6, 'register', 'yechan', '1234', '채예찬', 'male', '01082664111', 'chae971012@naver.com', '2022-06-03'),
(7, 'register', 'yechan', '1234', '채예찬', 'male', '01082664111', 'chae971012@naver.com', '2022-06-03'),
(8, 'register', 'yechan', '1234', '채예찬', 'male', '01082664111', 'chae971012@naver.com', '2022-06-03'),
(9, 'register', 'yechan', '1234', '채예찬', 'male', '01082664111', 'chae971012@naver.com', '2022-06-03'),
(10, 'register', 'yechan', '1234', '채예찬', 'male', '01082664111', 'chae971012@naver.com', '2022-06-03'),
(11, 'register', 'yechan', '1234', '채예찬', 'male', '01082664111', 'chae971012@naver.com', '2022-06-03'),
(12, 'register', 'yechan', '1234', '채예찬', 'male', '01082664111', 'chae971012@naver.com', '2022-06-03'),
(13, 'register', 'yechan', '1234', '채예찬', 'male', '01082664111', 'chae971012@naver.com', '2022-06-03');

-- --------------------------------------------------------

--
-- 테이블 구조 `review`
--

CREATE TABLE `review` (
  `no` int(11) NOT NULL,
  `id` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userid` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `story` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `redate` datetime NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 테이블의 덤프 데이터 `review`
--

INSERT INTO `review` (`no`, `id`, `userid`, `name`, `title`, `story`, `redate`, `image`) VALUES
(1, 'review', 'sd', 'dsf', 'odw testt1', 'test1', '2022-06-02 16:37:53', NULL),
(2, 'review', 'sd', 'dsf', 'image teest', 'image test1', '2022-06-02 16:49:41', 'qy06020749413.jpg'),
(3, 'review', 'sd', 'dsf', 'test3', 'test33', '2022-06-03 15:27:33', NULL),
(4, 'review', 'sd', 'dsf', 'test3', 'test33', '2022-06-03 15:28:18', NULL),
(5, 'review', 'sd', 'dsf', 'image2', 'image22', '2022-06-03 15:30:05', 'ne06030630059.jpg'),
(6, 'review', 'sd', 'dsf', 'image33', 'imag3', '2022-06-03 15:37:39', 'ra06030637391.png');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`no`);

--
-- 테이블의 인덱스 `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`no`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `register`
--
ALTER TABLE `register`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- 테이블의 AUTO_INCREMENT `review`
--
ALTER TABLE `review`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
