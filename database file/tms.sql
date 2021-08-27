-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql306.epizy.com
-- Generation Time: Aug 27, 2021 at 07:46 AM
-- Server version: 5.6.48-88.0
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_28320084_tms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `updationDate` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', '2017-05-13 11:18:49');

-- --------------------------------------------------------

--
-- Table structure for table `signinsignup`
--

CREATE TABLE `signinsignup` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `prefer` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signinsignup`
--

INSERT INTO `signinsignup` (`email`, `password`, `username`, `prefer`) VALUES
('shanto@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'shanto', '1'),
('shakilhossain79677@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'hasib_hossain', '1'),
('shahana@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'shahana', '1'),
('rithygolumolu@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'rithyk', '2'),
('ddsssd@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'shams', '2'),
('1@a.com', 'b0baee9d279d34fa1dfd71aadb908c3f', '11111', '0'),
('ahanatanjela@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Ahana0', '3'),
('p@gmail.com', 'ef401979ea1d0681f3c99ee153e3a164', 'pal113', '1'),
('n@yahoo.com', 'ce3feba98c671d3d1750a9bfe75b1e8f', 'ssssss', '2'),
('tazneen99@gmail.com', 'afa4a5c5287b6c61e72068f05c8f0dd0', 'munni', '3'),
('abdullahallibi@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Abdullah Al Libi', '1'),
('170104096@aust.edu', 'e10adc3949ba59abbe56e057f20f883e', 'rasel096', '1'),
('shakil@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'hello', '2'),
('sha@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'shakilhossain', '3');

-- --------------------------------------------------------

--
-- Table structure for table `tblblog`
--

CREATE TABLE `tblblog` (
  `blogid` int(11) NOT NULL,
  `blogheading` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `blogdetails` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `blogimage` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `blogtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `blogplace` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblblog`
--

INSERT INTO `tblblog` (`blogid`, `blogheading`, `blogdetails`, `blogimage`, `blogtime`, `blogplace`) VALUES
(6, 'My most amazing tour experience', 'I enjoyed a lot', 'blog-2.jpg', '2021-04-05 18:00:00', 'I have a dream'),
(7, 'apoijwopijgpoarweg', 'aoeiwfojiaeworigar', 'image444.jpeg', '2021-04-05 18:00:00', 'gawoiergopaireojipgjaoweiprgr'),
(10, 'Hasib\'s Blog', 'Onnnnnk kisu', 'asia-best-places-to-visit-mount-fuji-japan.jpg', '2021-04-05 18:00:00', 'Japan'),
(17, 'I love this experience', 'Enjoying environment!!', 'blog-1.jpg', '2021-04-05 18:00:00', 'Kaptai');

-- --------------------------------------------------------

--
-- Table structure for table `tblbooking`
--

CREATE TABLE `tblbooking` (
  `BookingId` int(11) NOT NULL,
  `PackageId` int(11) DEFAULT NULL,
  `UserEmail` varchar(100) DEFAULT NULL,
  `FromDate` varchar(100) DEFAULT NULL,
  `ToDate` varchar(100) DEFAULT NULL,
  `Comment` mediumtext,
  `RegDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT NULL,
  `CancelledBy` varchar(5) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbooking`
--

INSERT INTO `tblbooking` (`BookingId`, `PackageId`, `UserEmail`, `FromDate`, `ToDate`, `Comment`, `RegDate`, `status`, `CancelledBy`, `UpdationDate`) VALUES
(2, 1, 'RITHY@gmail.com', '05/18/2017', '05/31/2017', '\"Lorem ipsum dolor sit amet, cpariatur. Excepteur sint ', '2017-05-13 19:01:10', 2, 'u', '2021-04-05 19:35:02'),
(3, 2, 'RITHY@gmail.com', '05/16/2017', '05/31/2017', 'casf esd sg gd gdfh df', '2017-05-13 20:20:01', 2, 'a', '2021-04-05 19:35:10'),
(4, 1, 'SHANTO@gmail.com', '05/16/2017', '05/31/2017', 'dwef  fwe', '2017-05-13 20:32:54', 2, 'a', '2021-04-05 19:35:21'),
(5, 1, 'PPP@gmail.com', '05/16/2017', '05/31/2017', 'dwef  fwe', '2017-05-13 20:33:17', 2, 'a', '2021-04-05 19:35:27'),
(6, 2, 'aKKK@gmail.com', '05/14/2017', '05/24/2017', 'test demo', '2017-05-13 21:18:37', 2, 'a', '2021-04-05 19:35:15'),
(7, 4, 'sarita@gmail.com', '05/26/2017', '05/30/2017', 'est laborum.\" velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\" velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2017-05-14 05:09:11', 2, 'a', '2017-05-14 07:47:39'),
(8, 2, 'rita@gmail.com', '05/27/2017', '05/28/2017', 'ubub5u6', '2017-05-14 05:10:24', 2, 'a', '2021-04-05 19:35:40'),
(9, 1, 'demo@test.com', '05/19/2017', '05/21/2017', 'demo test demo test', '2017-05-14 07:45:11', 2, 'a', '2021-04-03 16:28:47'),
(10, 5, 'abc@g.com', '05/22/2017', '05/24/2017', 'test test t test test ttest test ttest test ttest test ttest test ttest test ttest test ttest test ttest test ttest test ttest test ttest test ttest test t', '2017-05-14 07:56:26', 1, NULL, '2017-05-14 07:58:19'),
(11, 4, 'aBCD@gmail.com', '2019-07-31', '2019-08-02', 'This is sample text for testing,', '2019-07-20 20:15:35', 0, NULL, '2021-04-05 19:35:50'),
(12, 7, '180104133@aust.edu', '2021-04-12', '2021-04-22', 'sg', '2021-04-03 16:27:35', 1, NULL, '2021-04-04 22:49:21');

-- --------------------------------------------------------

--
-- Table structure for table `tblenquiry`
--

CREATE TABLE `tblenquiry` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `EmailId` varchar(100) DEFAULT NULL,
  `MobileNumber` char(10) DEFAULT NULL,
  `Subject` varchar(100) DEFAULT NULL,
  `Description` mediumtext,
  `PostingDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` int(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblenquiry`
--

INSERT INTO `tblenquiry` (`id`, `FullName`, `EmailId`, `MobileNumber`, `Subject`, `Description`, `PostingDate`, `Status`) VALUES
(1, 'anuj', 'anuj.lpu1@gmail.com', '2354235235', 'The standard Lorem Ipsum passage, used since the 1500s', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2017-05-13 22:23:53', 1),
(2, 'efgegter', 'terterte@gmail.com', '3454353453', 'The standard Lorem Ipsum passage', 'nventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat volup', '2017-05-13 22:27:00', 1),
(3, 'fwerwetrwet', 'fwsfhrtre@hdhdhqw.com', '8888888888', 'erwt wet', 'nventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat volup', '2017-05-13 22:28:11', 1),
(4, 'Test', 'test@gm.com', '4747474747', 'Test', 'iidiidiidiidiidiidiidiidiidiidiidiidiidiidiidiidiidiidiidiidiidiidiidiidiidiid', '2017-05-14 07:54:07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblhotelrooms`
--

CREATE TABLE `tblhotelrooms` (
  `hotelid` int(100) NOT NULL,
  `roomname` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `roomprice` int(100) NOT NULL,
  `roomdetails` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `roomimage` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `roomid` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblhotelrooms`
--

INSERT INTO `tblhotelrooms` (`hotelid`, `roomname`, `roomprice`, `roomdetails`, `roomimage`, `roomid`) VALUES
(3, 'FAMILY ROOM', 4500, 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.', 'room-1.jpg', 2),
(3, 'LUXURY ROOM', 7500, 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.', 'room-2.jpg', 3),
(3, 'DOUBLE ROOM', 4000, 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.', 'room-3.jpg', 4),
(3, 'SUITE ROOM', 2500, 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.', 'room-4.jpg', 5),
(3, 'SUPERIOR DOUBLE ROOM', 5000, 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.', 'room-5.jpg', 6),
(3, 'CLASSIC DOUBLE ROOM', 4800, 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.', 'room-6.jpg', 7),
(4, 'abcd', 2500, 'onek moja', 'room-6.jpg', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tblhotels`
--

CREATE TABLE `tblhotels` (
  `hotelid` int(100) NOT NULL,
  `hotelname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotellocation` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotelprice` int(100) NOT NULL,
  `hoteldetails` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotelimage` varchar(200) CHARACTER SET latin1 NOT NULL,
  `createdateofhotel` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblhotels`
--

INSERT INTO `tblhotels` (`hotelid`, `hotelname`, `hotellocation`, `hotelprice`, `hoteldetails`, `hotelimage`, `createdateofhotel`) VALUES
(3, 'Hotel Meghaloy', 'Shilong, Meghaloy', 1200, 'foiawejoihwo gihapowierhgpa iwherpi aweroghoawhgpi aowrhegoaihrea goahrg aiwre gaowerh gapoewrh gpawe rgha r', 'hotel-6.jpg', '2021-04-04 18:00:00'),
(4, 'হোটেল শশীলজ', 'শশীলজ,মেঘালয়', 1400, 'শশীলজ এবং মুক্তাগাছা জমিদারবাড়ি ঘাট থেকে নীল জলরাশি আর মেঘালয়ের বিশাল পাহাড় দেখতে দেখতে...', 'hotel-3.jpg', '2021-04-04 18:00:00'),
(5, 'হোটেল কাপ্তাই হ্রদ', 'তবলছড়ি ,রাঙামাটি', 1200, 'রাঙামাটি তবলছড়ি থেকে ২০ কিমি হেটে ঘাট থেকে নীল জলরাশি আর মেঘালয়ের বিশাল পাহাড় দেখতে দেখতে', 'hotel-7.jpg', '2021-04-04 18:00:00'),
(6, 'হোটেল রাতারগুল', 'সোয়াম্প ফরেস্ট, সিলেট', 1200, 'সিলেটর রাজ্যের সোয়াম্প ফরেস্ট বাজার হয়ে বাংলাদেশের পাহাড়ের কাছ দিয়ে...', 'hotel-8.jpg', '2021-04-04 18:00:00'),
(7, 'হোটেল মালনিছড়া', 'মালনিছড়া,সিলেট', 1540, 'কদমতলি থেকে ১০০ টাকা সিএনজি রিজার্ভ করে মাজার গেইটে যাই। প্রথমেই হোটেল বুক করি, মাজারের চা বাগানের পাশেই হোটেল দরগা...', 'hotel-9.jpg', '2021-04-04 18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblissues`
--

CREATE TABLE `tblissues` (
  `id` int(11) NOT NULL,
  `UserEmail` varchar(100) DEFAULT NULL,
  `Issue` varchar(100) DEFAULT NULL,
  `Description` mediumtext,
  `PostingDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `AdminRemark` mediumtext,
  `AdminremarkDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblissues`
--

INSERT INTO `tblissues` (`id`, `UserEmail`, `Issue`, `Description`, `PostingDate`, `AdminRemark`, `AdminremarkDate`) VALUES
(4, 'RITHY@gmail.com', 'Cancellation', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco ', '2017-05-13 22:03:33', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur', '2021-03-23 23:50:40'),
(5, 'rita@gmail.com', 'Cancellation', 'tbt 3y 34y4 3y3hgg34t', '2017-05-14 05:12:14', 'sg sd gs g sdgfs ', '2021-04-05 19:30:20'),
(6, 'demo@test.com', 'Refund', 'demo test.com demo test.comdemo test.comdemo test.comdemo test.com', '2017-05-14 07:45:37', NULL, '0000-00-00 00:00:00'),
(7, 'abc@g.com', 'Refund', 'test test ttest test ttest test ttest test ttest test ttest test t', '2017-05-14 07:56:46', 'vetet ert erteryre', '2017-05-14 07:58:43'),
(8, NULL, NULL, NULL, '2021-04-03 16:26:04', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblpages`
--

CREATE TABLE `tblpages` (
  `id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT '',
  `detail` longtext
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpages`
--

INSERT INTO `tblpages` (`id`, `type`, `detail`) VALUES
(1, 'terms', '																				<p align=\"justify\"><font size=\"2\"><strong><font color=\"#990000\">(1) ACCEPTANCE OF TERMS</font><br><br></strong>Welcome to Yahoo! India. 1Yahoo Web Services India Private Limited Yahoo\", \"we\" or \"us\" as the case may be) provides the Service (defined below) to you, subject to the following Terms of Service (\"TOS\"), which may be updated by us from time to time without notice to you. You can review the most current version of the TOS at any time at: <a href=\"http://in.docs.yahoo.com/info/terms/\">http://in.docs.yahoo.com/info/terms/</a>. In addition, when using particular Yahoo services or third party services, you and Yahoo shall be subject to any posted guidelines or rules applicable to such services which may be posted from time to time. All such guidelines or rules, which maybe subject to change, are hereby incorporated by reference into the TOS. In most cases the guides and rules are specific to a particular part of the Service and will assist you in applying the TOS to that part, but to the extent of any inconsistency between the TOS and any guide or rule, the TOS will prevail. We may also offer other services from time to time that are governed by different Terms of Services, in which case the TOS do not apply to such other services if and to the extent expressly excluded by such different Terms of Services. Yahoo also may offer other services from time to time that are governed by different Terms of Services. These TOS do not apply to such other services that are governed by different Terms of Service. </font></p>\r\n<blockquote style=\"margin: 0 0 0 40px; border: none; padding: 0px;\"><p><span style=\"font-size: medium; font-family: &quot;comic sans ms&quot;;\">Welcome to Yahoo! India. Yahoo Web Services India Private Limited Yahoo\", \"we\" or \"us\" as the case may be) provides the Service (defined below) to you, subject to the following Terms of Service (\"TOS\"), which may be updated by us from time to time without notice to you. You can review the most current version of the TOS at any time at: <a href=\"http://in.docs.yahoo.com/info/terms/\" style=\"\">http://in.docs.yahoo.com/info/terms/</a>. In addition, when using particular Yahoo services or third party services, you and Yahoo shall be subject to any posted guidelines or rules applicable to such services which may be posted from time to time. All such guidelines or rules, which maybe subject to change, are hereby incorporated by reference into the TOS. In most cases the guides and rules are specific to a particular part of the Service and will assist you in applying the TOS to that part, but to the extent of any inconsistency between the TOS and any guide or rule, the TOS will prevail. We may also offer other services from time to time that are governed by different Terms of Services, in which case the TOS do not apply to such other services if and to the extent expressly excluded by such different Terms of Services. Yahoo also may offer other services from time to time that are governed by different Terms of Services. These TOS do not apply to such other services that are governed by different Terms of Service. </span></p></blockquote>\r\n<p align=\"justify\"><span style=\"font-size: x-large;\">Welcome to Yahoo! India. Yahoo Web Services India Private Limited Yahoo\", \"we\" or \"us\" as the case may be) provides the Service (defined below) to you, subject to the following Terms of Service (\"TOS\"), which may be updated by us from time to time without notice to you. You can review the most current version of the TOS at any time at: <a href=\"http://in.docs.yahoo.com/info/terms/\">http://in.docs.yahoo.com/info/terms/</a>. In addition, when using particular Yahoo services or third party services, you and Yahoo shall be subject to any posted guidelines or rules applicable to such services which may be posted from time to time. All such guidelines or rules, which maybe subject to change, are hereby incorporated by reference into the TOS. In most cases the guides and rules are specific to a particular part of the Service and will assist you in applying the TOS to that part, but to the extent of any inconsistency between the TOS and any guide or rule, the TOS will prevail. We may also offer other services from time to time that are governed by different Terms of Services, in which case the TOS do not apply to such other services if and to the extent expressly excluded by such different Terms of Services. Yahoo also may offer other services from time to time that are governed by different Terms of Services. These TOS do not apply to such other services that are governed by different Terms of Service. </span></p><p align=\"justify\"><font size=\"2\"><br></font></p>\r\n										\r\n										'),
(2, 'privacy', '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat</span>'),
(3, 'aboutus', '										<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Test test</span>'),
(11, 'contact', '										<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Address------Test</span>');

-- --------------------------------------------------------

--
-- Table structure for table `tbltourpackages`
--

CREATE TABLE `tbltourpackages` (
  `PackageId` int(11) NOT NULL,
  `PackageName` varchar(200) DEFAULT NULL,
  `PackageType` varchar(150) DEFAULT NULL,
  `PackageLocation` varchar(100) DEFAULT NULL,
  `PackagePrice` int(11) DEFAULT NULL,
  `PackageFetures` varchar(255) DEFAULT NULL,
  `PackageDetails` mediumtext,
  `PackageImage` varchar(100) DEFAULT NULL,
  `Creationdate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `day1image` varchar(100) DEFAULT NULL,
  `day1heading` varchar(200) DEFAULT NULL,
  `day1details` mediumtext,
  `day2image` varchar(100) DEFAULT NULL,
  `day2heading` varchar(200) DEFAULT NULL,
  `day2details` mediumtext,
  `day3image` varchar(100) DEFAULT NULL,
  `day3heading` varchar(200) DEFAULT NULL,
  `day3details` mediumtext,
  `daycount` int(11) DEFAULT NULL,
  `reviewsCount` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltourpackages`
--

INSERT INTO `tbltourpackages` (`PackageId`, `PackageName`, `PackageType`, `PackageLocation`, `PackagePrice`, `PackageFetures`, `PackageDetails`, `PackageImage`, `Creationdate`, `UpdationDate`, `day1image`, `day1heading`, `day1details`, `day2image`, `day2heading`, `day2details`, `day3image`, `day3heading`, `day3details`, `daycount`, `reviewsCount`) VALUES
(1, 'SOLO TRIP TO AMIYAKHUM', '1', 'AMIYAKHUM, BANDARBAN', 2550, 'Adventure', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.aoooooooo ooooooo ooooooooo ooooooooooooooooo ooooooooooooo oooooooooooooo ooooooo oooooooo ooofaofasdf aowiejfpawe awoeifj aoweif awef jaoweifa pegjuapw ergpaw jfgpai wejgpia werg apwoerfgps\'piahwo\'gei hawperi ghaweijfia sdpfag apwersadjfp\' awefgpapwe gpiawpsdfj a\'wiefj pa jpasd jo\'aiwhgawepgiawperfjpej pawe jfapwj ef\"', 'tour1.jpg', '2017-05-13 14:23:44', '2021-04-06 07:13:04', 'am.jpg', 'ADVENTURE', 'Enjoy the natural heavenly beauty of AMIYAKHUM, BANDARBAN', 'vela.jpg', 'VISITING VELAKHUM', 'Our trip will start at 8 PM sharp. It\'s the most beautyful place of Bandarban.', 'img_bg_1.jpg', 'Visiting the beauty', 'You\'ll be amazed for sure', 3, 400),
(2, 'SOLO TRIP TO TANGUAR HAOR', '1', 'TANGUAR HAOR, SUNAMGANJ', 3500, 'ENJOY THE BEAUTY OF TANGUAR HAOR, SUNAMGANJ', 'demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test ', 'tour-2.jpg', '2017-05-13 15:24:26', '2021-04-05 20:34:37', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 300),
(3, 'FAMILY TOUR IN SAJEK VALLEY', '2', 'SAJEK VALLEY, KHAGRACHORI', 10000, 'Demo Demo  test', 'Sample Text for testing.', 'tour-3.jpg', '2017-05-13 16:00:58', '2021-04-05 20:34:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 250),
(4, 'DAY TOUR IN ZINDA PARK', '3', 'ZINDA PARK, NARAYANGANJ', 850, ' velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', ' velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\" velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\" velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\" velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', 'tour-4.jpg', '2017-05-13 22:39:37', '2021-04-05 20:34:58', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 525),
(5, 'FAMILY TOUR TO SAINT MARTIN', '2', 'SAINT MARTIN, COX\'S BAZAR', 8500, ' velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', ' velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\" velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\" velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\" velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\" velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\" velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\" velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\" velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', 'tour-5.jpg', '2017-05-13 22:42:10', '2021-04-05 20:34:42', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 102),
(6, 'DAY OUTINING TO MAHERA JAMIDAR BARI', '3', 'MIRZAPUR,TANGAIL', 750, 'Frree wifi, pickup and drop etc', 'Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test ', 'tour-6.jpg', '2017-05-14 08:01:08', '2021-04-05 20:34:55', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 450),
(7, 'BANGLADESH TO SINGAPORE', '4', 'SINGAPORE', 19950, 'skuhgaogd', 'askjghaowuhrsdf', 'singapore.jpg', '2021-04-03 15:51:59', '2021-04-05 20:34:52', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 232),
(8, 'DHAKA TO SYLHET', '2', 'LALAKHAL, SYLHET', 8500, 'aodgaiojsgsf', 'aowihgolawergfsdfg', 'tour-8.jpg', '2021-04-04 17:23:53', '2021-04-05 20:35:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 111),
(9, 'DHAKA TO KASHMIR', '4', 'INDIA', 10500, 'zfgsdf', 'afgsd', 'kashmir.jpg', '2021-04-04 17:29:38', '2021-04-05 20:35:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 35),
(10, 'ADVENTURE TO SUNDARBAN', '1', 'SUNDARBAN, BAGERHAT', 5000, 'KADHFKAHUSD', 'KASDHNFAOHBUGOABOJDFSKJGUGEWG', 'tour-8.jpg', '2021-04-04 22:30:03', '2021-04-05 21:27:45', NULL, 'Adventure', 'SO much fun and enjoyable', 'am.jpg', 'Party', 'Fun and enjoyable', 'vela.jpg', NULL, NULL, NULL, 351),
(11, 'BANGLADESH TO BALI', '4', 'BALI INDONESIA', 19800, 'aoijfoisadhgeo', 'awoiughauihersifg', 'bali.jpg', '2021-04-04 22:41:43', '2021-04-05 20:50:24', 'kal.jpg', 'SKYDIVING', 'aiufgishofawheorgwergar', 'download.jpg', 'HIKING', 'aiowuhigougawhorugwr', 'download.jpg', 'DIVING', 'aiufoghrwga', 3, 320);

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `MobileNumber` char(10) DEFAULT NULL,
  `EmailId` varchar(70) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `FullName`, `MobileNumber`, `EmailId`, `Password`, `RegDate`, `UpdationDate`) VALUES
(1, 'RITHY', '1111111111', 'anuj@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2017-05-10 10:38:17', '2021-04-05 19:29:29'),
(3, 'Rita', '9999999999', 'sarita@gmail.com', '5c428d8875d2948607f3e3fe134d71b4', '2017-05-10 10:50:48', '2021-04-05 19:36:50'),
(7, 'test', '7676767676', 'test@gm.com', 'f925916e2754e5e03f75dd58a5733251', '2017-05-10 10:54:56', '0000-00-00 00:00:00'),
(8, 'KJr', '9999999999', 'demo@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2017-05-14 07:17:44', '2021-04-05 19:36:44'),
(9, 'XYZabc', '3333333333', 'xyz@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2017-05-14 07:25:13', '2017-05-14 07:25:42'),
(10, 'SHANTO', '4543534534', 'demo@test.com', 'f925916e2754e5e03f75dd58a5733251', '2017-05-14 07:43:23', '2021-04-05 19:36:36'),
(11, 'XYZ', '8888888888', 'abc@g.com', 'f925916e2754e5e03f75dd58a5733251', '2017-05-14 07:54:32', '2017-05-14 07:55:17'),
(12, 'Hasib Hossain Shakil', '1795983301', '180104133@aust.edu', '827ccb0eea8a706c4c34a16891f84e7b', '2021-04-03 16:26:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `websitereview`
--

CREATE TABLE `websitereview` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(128) NOT NULL,
  `review` varchar(500) NOT NULL,
  `gender` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `websitereview`
--

INSERT INTO `websitereview` (`id`, `name`, `address`, `review`, `gender`) VALUES
(1, 'HASIB HOSSAIN', 'TEJGAON, DHAKA', 'GOOD SERVICE AND REASONABLE PRICE', 'male'),
(2, 'Rithy Kabir', 'Dhaka, Bangladesh', 'Loved There Service ', 'female'),
(3, 'SHAMSE NUR', 'MOHAMMADPUR, DHAKA', 'I LOVED THERE SERVICE', 'male'),
(4, 'created', 'Dhaka, Bangladesh', 'Loved There Service ', 'female'),
(0, 'Eisa Ahmed', 'Mirpur, Dhaka', 'Loved There Service ', 'female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblblog`
--
ALTER TABLE `tblblog`
  ADD PRIMARY KEY (`blogid`);

--
-- Indexes for table `tblbooking`
--
ALTER TABLE `tblbooking`
  ADD PRIMARY KEY (`BookingId`);

--
-- Indexes for table `tblenquiry`
--
ALTER TABLE `tblenquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblhotelrooms`
--
ALTER TABLE `tblhotelrooms`
  ADD PRIMARY KEY (`roomid`);

--
-- Indexes for table `tblhotels`
--
ALTER TABLE `tblhotels`
  ADD PRIMARY KEY (`hotelid`);

--
-- Indexes for table `tblissues`
--
ALTER TABLE `tblissues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpages`
--
ALTER TABLE `tblpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbltourpackages`
--
ALTER TABLE `tbltourpackages`
  ADD PRIMARY KEY (`PackageId`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `EmailId` (`EmailId`),
  ADD KEY `EmailId_2` (`EmailId`);

--
-- Indexes for table `websitereview`
--
ALTER TABLE `websitereview`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblblog`
--
ALTER TABLE `tblblog`
  MODIFY `blogid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tblbooking`
--
ALTER TABLE `tblbooking`
  MODIFY `BookingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tblenquiry`
--
ALTER TABLE `tblenquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblhotelrooms`
--
ALTER TABLE `tblhotelrooms`
  MODIFY `roomid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblhotels`
--
ALTER TABLE `tblhotels`
  MODIFY `hotelid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblissues`
--
ALTER TABLE `tblissues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblpages`
--
ALTER TABLE `tblpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbltourpackages`
--
ALTER TABLE `tbltourpackages`
  MODIFY `PackageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
