-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2018 at 12:05 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minna_nihongo`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(3) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `level` tinyint(2) NOT NULL DEFAULT '1',
  `avatar` varchar(200) NOT NULL,
  `flag` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`, `fullname`, `email`, `level`, `avatar`, `flag`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'WamiDev', 'wamidev@mailinator.com', 0, 'upload/avatars/1517773709airbender.png', 1),
(2, 'admin1', '202cb962ac59075b964b07152d234b70', 'Administrator', 'adminadmin@mailinator.com', 1, 'img/user1.png', 1),
(10, 'admin2', 'e10adc3949ba59abbe56e057f20f883e', 'Administrator 2', 'adminadmin2@mailinator.com', 1, 'upload/avatars/default.png', 1),
(12, 'admin3', 'e10adc3949ba59abbe56e057f20f883e', 'Administrator 3', 'adminadmin3@mailinator.com', 1, 'upload/avatars/1517716346tumblr_mj4ru0DWOK1s3vgluo1_500.jpg', 1),
(16, 'xxxxxxxxxxxx', 'e10adc3949ba59abbe56e057f20f883e', 'admin2xx', 'admin2xx@ewtr.com', 1, 'upload/avatars/1518224618boss.png', 1),
(17, '123', 'e10adc3949ba59abbe56e057f20f883e', '123', 'admin2xx@ewtr.com', 1, 'upload/avatars/default.png', 1),
(18, '111', 'e10adc3949ba59abbe56e057f20f883e', '111111111', '1111111@mail.com', 1, 'upload/avatars/default.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alphabet`
--

CREATE TABLE `tbl_alphabet` (
  `id` int(5) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '1',
  `original` char(5) NOT NULL,
  `romaji` char(5) NOT NULL,
  `audio` varchar(200) NOT NULL,
  `flag` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_alphabet`
--

INSERT INTO `tbl_alphabet` (`id`, `type`, `original`, `romaji`, `audio`, `flag`) VALUES
(1, 1, 'あ', 'a', '', 1),
(2, 2, 'ア', 'a', '', 1),
(3, 1, 'い', 'i', '', 1),
(5, 1, 'う', 'u', '', 1),
(6, 2, 'イ', 'i', '', 1),
(7, 2, 'ウ', 'u', '', 1),
(8, 1, 'え', 'e', '', 1),
(10, 2, 'エ', 'e', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_answer`
--

CREATE TABLE `tbl_answer` (
  `id` int(10) NOT NULL,
  `is_answer` tinyint(1) NOT NULL DEFAULT '0',
  `question_id` int(10) NOT NULL,
  `answer` varchar(500) NOT NULL,
  `flag` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_answer`
--

INSERT INTO `tbl_answer` (`id`, `is_answer`, `question_id`, `answer`, `flag`) VALUES
(81, 1, 26, 'kyo', 1),
(82, 0, 26, 'kya', 1),
(83, 0, 26, 'yo', 1),
(84, 0, 26, 'ki', 1),
(85, 0, 27, 'ga', 1),
(86, 1, 27, 'ro', 1),
(87, 0, 27, 'gya', 1),
(88, 0, 27, 'e', 1),
(89, 0, 28, 'bo', 1),
(90, 0, 28, 'pyo', 1),
(91, 1, 28, 'byo', 1),
(92, 0, 28, 'ka', 1),
(93, 1, 29, 'chết', 1),
(94, 0, 29, 'ăn', 1),
(95, 0, 29, 'đánh', 1),
(96, 0, 29, 'về nhà', 1),
(97, 0, 30, 'ahihi', 1),
(98, 0, 30, 'áhihi', 1),
(99, 1, 30, 'ăhihi', 1),
(100, 0, 30, 'ậhihi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_answer_jlpt`
--

CREATE TABLE `tbl_answer_jlpt` (
  `id` int(10) NOT NULL,
  `type` tinyint(1) NOT NULL,
  `question_id` int(10) NOT NULL,
  `answer` varchar(500) NOT NULL,
  `flag` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_conversation`
--

CREATE TABLE `tbl_conversation` (
  `id` int(5) NOT NULL,
  `type` int(5) NOT NULL,
  `vietnam_con` varchar(2000) NOT NULL,
  `japan_con` varchar(2000) NOT NULL,
  `romaji_con` varchar(2000) NOT NULL,
  `audio` char(200) NOT NULL,
  `flag` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_exam_jlpt`
--

CREATE TABLE `tbl_exam_jlpt` (
  `id` int(2) NOT NULL,
  `type` int(2) NOT NULL,
  `name` char(50) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `answer_id` int(11) NOT NULL,
  `flag` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_grammar`
--

CREATE TABLE `tbl_grammar` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` varchar(2500) NOT NULL,
  `lesson_id` int(2) NOT NULL,
  `flag` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_grammar`
--

INSERT INTO `tbl_grammar` (`id`, `title`, `content`, `lesson_id`, `flag`) VALUES
(1, '123', '<!DOCTYPE html>\n<html>\n<head>\n</head>\n<body>\n<p>123123</p>\n</body>\n</html>', 55, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kaiwa`
--

CREATE TABLE `tbl_kaiwa` (
  `id` int(5) NOT NULL,
  `lesson_id` int(5) NOT NULL,
  `title` varchar(200) NOT NULL,
  `romaji_title` varchar(200) NOT NULL,
  `vietnam_title` varchar(200) NOT NULL,
  `flag` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_kaiwa`
--

INSERT INTO `tbl_kaiwa` (`id`, `lesson_id`, `title`, `romaji_title`, `vietnam_title`, `flag`) VALUES
(1, 50, 'はじめまして', 'Tiêu đề 2', 'Tiêu đề 3', 1),
(2, 1, 'はじめまして', 'hajimemashite', 'Rất vui được làm quen với bạn', 1),
(3, 2, 'ほんのきもちです', 'honno ki mochi desu', 'Chỉ là chút lòng thành.', 1),
(4, 55, 'Tiêu đề 1', 'Tiêu đề 2', 'Tiêu đề 3', 1),
(5, 52, 'Tiêu đề 1', 'Tiêu đề 2', 'Tiêu đề 3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kaiwa_content`
--

CREATE TABLE `tbl_kaiwa_content` (
  `id` int(5) NOT NULL,
  `name_jp` varchar(100) NOT NULL,
  `name_rm` varchar(100) NOT NULL,
  `content_jp` varchar(1000) NOT NULL,
  `content_rm` varchar(1000) NOT NULL,
  `content_vn` varchar(1000) NOT NULL,
  `sort_no` int(5) NOT NULL,
  `kaiwa_id` int(5) NOT NULL,
  `flag` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_kaiwa_content`
--

INSERT INTO `tbl_kaiwa_content` (`id`, `name_jp`, `name_rm`, `content_jp`, `content_rm`, `content_vn`, `sort_no`, `kaiwa_id`, `flag`) VALUES
(1, '佐藤', 'satou', 'おはよう　ございます。', 'ohayou gozai masu.', 'Chào anh!', 0, 2, 1),
(2, '山田', 'yamada', ' yamada おはよう　ございます。', 'ohayou gozai masu.', 'Chào chị!', 0, 2, 1),
(3, '山田', 'yamada', '佐藤さん、こちらは　マイク・ミラーさんです。', 'satou san, kochira ha maiku. mira san desu.', 'Chị Sato, đây là anh Mike Miller.', 0, 2, 1),
(4, 'ミラー', 'mira', '初めまして。', 'hajime mashite.', 'Rất vui được làm quen với chị.', 0, 2, 1),
(5, 'ミラー', 'mira', 'マイク・ミラーです。', 'maiku. mira desu.', 'Tôi là Mike Miller.', 0, 2, 1),
(6, 'ミラー', 'mira', 'アメリカから　来ました。', 'amerika kara ki mashi ta.', 'Tôi đến từ Mỹ.', 0, 2, 1),
(7, 'ミラー', 'mira', 'どうぞ　よろしく。', 'douzo yoroshiku.', 'Rất mong sẽ nhận được sự giúp đỡ của chị.', 0, 2, 1),
(8, '佐藤', 'satou', '佐藤けい子です。', 'satou keiko desu.', 'Tôi là Sato Keiko.', 0, 2, 1),
(9, '佐藤', 'satou', 'どうぞ　よろしく。', 'douzo yoroshiku.', 'Rất vui được làm quen với anh.', 0, 2, 1),
(12, '123', '123123123', '123123', '123123', '213123', 0, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kana_test`
--

CREATE TABLE `tbl_kana_test` (
  `id` int(10) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '1',
  `question` varchar(1000) NOT NULL,
  `answer_id` int(10) NOT NULL,
  `flag` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_kana_test`
--

INSERT INTO `tbl_kana_test` (`id`, `type`, `question`, `answer_id`, `flag`) VALUES
(26, 1, '<p>Chữ&nbsp;<big><strong>ぎょ</strong></big>&nbsp;c&oacute; phi&ecirc;n &acirc;m ra sao ?x</p>\r\n', 1, 1),
(27, 2, '<p>Chữ&nbsp;<big><strong>ロ</strong></big>&nbsp;c&oacute; phi&ecirc;n &acirc;m ra sao?</p>\r\n', 2, 1),
(28, 1, '<p>Chữ<big><strong>&nbsp;びょ</strong></big>&nbsp;c&oacute; phi&ecirc;n &acirc;m ra sao?</p>\r\n', 3, 1),
(30, 2, '<p>t&ocirc;i xin bạn Duy&nbsp;</p>\r\n', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kanji_basic`
--

CREATE TABLE `tbl_kanji_basic` (
  `id` int(5) NOT NULL,
  `lesson` varchar(20) NOT NULL,
  `kanji_word` char(50) NOT NULL,
  `china_sound` char(50) NOT NULL,
  `vietnam_word` char(100) NOT NULL,
  `kunyomi` char(100) NOT NULL,
  `onyomi` char(100) NOT NULL,
  `draw_img` varchar(500) NOT NULL,
  `example` varchar(500) NOT NULL,
  `flag` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lesson`
--

CREATE TABLE `tbl_lesson` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `new_words_audio` varchar(200) NOT NULL,
  `kaiwa_audio` varchar(200) NOT NULL,
  `mondai_audio` varchar(200) NOT NULL,
  `bunkei_audio` varchar(200) NOT NULL,
  `reibun_audio` varchar(200) NOT NULL,
  `flag` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_lesson`
--

INSERT INTO `tbl_lesson` (`id`, `name`, `new_words_audio`, `kaiwa_audio`, `mondai_audio`, `bunkei_audio`, `reibun_audio`, `flag`) VALUES
(1, 'Bài 1', '', '', '', '', '', 1),
(2, 'Bài 2', '', '', '', '', '', 1),
(3, 'Bài 3', '', '', '', '', '', 1),
(4, 'Bài 4', '', '', '', '', '', 1),
(5, 'Bài 5', '', '', '', '', '', 1),
(6, 'Bài 6', '', '', '', '', '', 1),
(7, 'Bài 7', '', '', '', '', '', 1),
(8, 'Bài 8', '', '', '', '', '', 1),
(9, 'Bài 9', '', '', '', '', '', 1),
(10, 'Bài 10', '', '', '', '', '', 1),
(11, 'Bài 11', '', '', '', '', '', 1),
(12, 'Bài 12', '', '', '', '', '', 1),
(13, 'Bài 13', '', '', '', '', '', 1),
(14, 'Bài 14', '', '', '', '', '', 1),
(15, 'Bài 15', '', '', '', '', '', 1),
(16, 'Bài 16', '', '', '', '', '', 1),
(17, 'Bài 17', '', '', '', '', '', 1),
(18, 'Bài 18', '', '', '', '', '', 1),
(19, 'Bài 19', '', '', '', '', '', 1),
(20, 'Bài 20', '', '', '', '', '', 1),
(21, 'Bài 21', '', '', '', '', '', 1),
(22, 'Bài 22', '', '', '', '', '', 1),
(23, 'Bài 23', '', '', '', '', '', 1),
(24, 'Bài 24', '', '', '', '', '', 1),
(25, 'Bài 25', '', '', '', '', '', 1),
(26, 'Bài 26', '', '', '', '', '', 1),
(27, 'Bài 27', '', '', '', '', '', 1),
(28, 'Bài 28', '', '', '', '', '', 1),
(29, 'Bài 29', '', '', '', '', '', 1),
(30, 'Bài 30', '', '', '', '', '', 1),
(31, 'Bài 31', '', '', '', '', '', 1),
(32, 'Bài 32', '', '', '', '', '', 1),
(33, 'Bài 33', '', '', '', '', '', 1),
(34, 'Bài 34', '', '', '', '', '', 1),
(35, 'Bài 35', '', '', '', '', '', 1),
(36, 'Bài 36', '', '', '', '', '', 1),
(37, 'Bài 37', '', '', '', '', '', 1),
(38, 'Bài 38', '', '', '', '', '', 1),
(39, 'Bài 39', '', '', '', '', '', 1),
(40, 'Bài 40', '', '', '', '', '', 1),
(41, 'Bài 41', '', '', '', '', '', 1),
(42, 'Bài 42', '', '', '', '', '', 1),
(43, 'Bài 43', '', '', '', '', '', 1),
(44, 'Bài 44', '', '', '', '', '', 1),
(45, 'Bài 45', '', '', '', '', '', 1),
(46, 'Bài 46', '', '', '', '', '', 1),
(47, 'Bài 47', '', '', '', '', '', 1),
(48, 'Bài 48', '', '', '', '', '', 1),
(49, 'Bài 49', '', '', '', '', '', 1),
(50, 'Bài 50', '', '', '', '', '', 1),
(52, 'Bài 51', '', '', '', '', '', 1),
(53, 'Bài 52', 'upload/audios/word/1518084413Alan Walker - Alone.mp3', 'upload/audios/kaiwa/1518084413Ed Sheeran - Shape Of You ( cover by J.Fla ).mp3', 'upload/audios/mondai/1518084413Fly-Away-feat-Anjulie-TheFatRat.mp3', 'upload/audios/bunkei/1518084413Galantis - No Money.mp3', 'upload/audios/reibun/1518084413Lola Blanc - Dont Say You Do (Official Audio).mp3', 1),
(54, 'test', 'upload/audios/word/1518106058123321.png', 'upload/audios/kaiwa/1518106058carrot.png', 'upload/audios/mondai/1518106058cr.png', 'upload/audios/bunkei/1518106058Untitled.png', 'upload/audios/reibun/1518106058lactroi.png', 2),
(55, 'ahihi', '', '', '', '', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mondai`
--

CREATE TABLE `tbl_mondai` (
  `id` int(5) NOT NULL,
  `lesson_id` int(5) NOT NULL,
  `answer_st` varchar(500) NOT NULL,
  `answer_nd` varchar(500) NOT NULL,
  `answer_rd` varchar(500) NOT NULL,
  `flag` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_new_words`
--

CREATE TABLE `tbl_new_words` (
  `id` int(10) NOT NULL,
  `kana_word` varchar(500) NOT NULL,
  `vietnam_word` varchar(500) NOT NULL,
  `lesson_id` int(2) NOT NULL,
  `kanji_word` char(100) NOT NULL,
  `kanji_mean` varchar(500) NOT NULL,
  `flag` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_new_words`
--

INSERT INTO `tbl_new_words` (`id`, `kana_word`, `vietnam_word`, `lesson_id`, `kanji_word`, `kanji_mean`, `flag`) VALUES
(1, 'わたし', 'Tôi', 1, '私', 'tư', 1),
(2, 'わたしたち', 'chúng tôi, chúng ta', 1, '私たち', 'tư', 1),
(3, 'あなた', 'anh/ chị/ ông/ bà, bạn (ngôi thứ 2 số ít)', 1, '貴方', 'quý phương', 1),
(4, 'x', 'x', 54, 'x', 'x', 1),
(5, 'q1x23', 'q2x', 54, 'q3x', 'q4x123', 2),
(6, 'eqw', 'qew', 56, 'qewe', 'e', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_refer`
--

CREATE TABLE `tbl_refer` (
  `id` int(5) NOT NULL,
  `lesson_id` int(5) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `sort_no` int(5) NOT NULL,
  `flag` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_share`
--

CREATE TABLE `tbl_share` (
  `id` int(10) NOT NULL,
  `title` varchar(500) NOT NULL,
  `content` varchar(10000) NOT NULL,
  `admin_id` int(5) NOT NULL,
  `create_date` date NOT NULL,
  `flag` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_alphabet`
--
ALTER TABLE `tbl_alphabet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_answer`
--
ALTER TABLE `tbl_answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_answer_jlpt`
--
ALTER TABLE `tbl_answer_jlpt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_conversation`
--
ALTER TABLE `tbl_conversation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_exam_jlpt`
--
ALTER TABLE `tbl_exam_jlpt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_grammar`
--
ALTER TABLE `tbl_grammar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kaiwa`
--
ALTER TABLE `tbl_kaiwa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kaiwa_content`
--
ALTER TABLE `tbl_kaiwa_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kana_test`
--
ALTER TABLE `tbl_kana_test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kanji_basic`
--
ALTER TABLE `tbl_kanji_basic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_lesson`
--
ALTER TABLE `tbl_lesson`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_mondai`
--
ALTER TABLE `tbl_mondai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_new_words`
--
ALTER TABLE `tbl_new_words`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_refer`
--
ALTER TABLE `tbl_refer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_share`
--
ALTER TABLE `tbl_share`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tbl_alphabet`
--
ALTER TABLE `tbl_alphabet`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_answer`
--
ALTER TABLE `tbl_answer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `tbl_answer_jlpt`
--
ALTER TABLE `tbl_answer_jlpt`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_conversation`
--
ALTER TABLE `tbl_conversation`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_exam_jlpt`
--
ALTER TABLE `tbl_exam_jlpt`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_grammar`
--
ALTER TABLE `tbl_grammar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_kaiwa`
--
ALTER TABLE `tbl_kaiwa`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_kaiwa_content`
--
ALTER TABLE `tbl_kaiwa_content`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_kana_test`
--
ALTER TABLE `tbl_kana_test`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `tbl_kanji_basic`
--
ALTER TABLE `tbl_kanji_basic`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_lesson`
--
ALTER TABLE `tbl_lesson`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `tbl_mondai`
--
ALTER TABLE `tbl_mondai`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_new_words`
--
ALTER TABLE `tbl_new_words`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_refer`
--
ALTER TABLE `tbl_refer`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_share`
--
ALTER TABLE `tbl_share`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
