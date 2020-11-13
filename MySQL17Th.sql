-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 13, 2020 lúc 04:23 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `sit`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `ID_Admin` varchar(45) NOT NULL,
  `Email_Admin` varchar(45) NOT NULL,
  `Password_Admin` varchar(45) NOT NULL,
  `Name_Admin` varchar(45) DEFAULT NULL,
  `Image_Admin` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`ID_Admin`, `Email_Admin`, `Password_Admin`, `Name_Admin`, `Image_Admin`) VALUES
('', 'Admin@gmail.com', 'admin@gmail.com', 'Sang Admin', 'Avatar.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `catalog`
--

CREATE TABLE `catalog` (
  `ID_Catalog` int(11) NOT NULL,
  `Name_Catalog` varchar(145) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `catalog`
--

INSERT INTO `catalog` (`ID_Catalog`, `Name_Catalog`) VALUES
(1, 'Office'),
(2, 'Đồ Họa 2D'),
(3, 'Đồ Họa 3D'),
(4, 'Tối Ưu Hệ Thống'),
(5, 'Driver'),
(6, 'Bảo Mật'),
(7, 'Diệt Virus'),
(8, 'Game'),
(9, 'Hệ Điều Hành'),
(10, 'Chứng Khoán'),
(11, 'Phát Triển Bản Thân'),
(12, 'Dịch Vụ'),
(13, 'Bổ Trợ Windows');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `ID_Comment` int(11) NOT NULL,
  `ID_Product` int(11) NOT NULL,
  `ID_User` varchar(70) NOT NULL,
  `Comment` text NOT NULL,
  `Date_Comment` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`ID_Comment`, `ID_Product`, `ID_User`, `Comment`, `Date_Comment`) VALUES
(1, 3, '1', 'Đây là một lần test trong vô số lần test của tôi', '2020-10-19'),
(47, 4, '1', 'Đây là bình luận về sản phẩm Powerpoint của Hoàng Sang', '2020-10-20'),
(48, 2, '1', 'Chat số 1 với tài khoảng user số 2', '2020-11-02'),
(49, 2, '1', '123', '2020-11-03'),
(50, 5, '1', 'Bình luận test 5', '2020-11-05'),
(51, 7, '1', 'Bình luận tesst 6', '2020-11-05'),
(52, 6, '1', 'Bình luận test 7', '2020-11-05'),
(53, 1, '1', '3ee32', '2020-11-12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `ID_Order` int(11) NOT NULL,
  `ID_User` int(11) NOT NULL,
  `Address_User` varchar(255) NOT NULL,
  `Phone_User` varchar(255) NOT NULL,
  `Status_Order` varchar(255) NOT NULL,
  `Date_Order` varchar(255) NOT NULL,
  `Date_De` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`ID_Order`, `ID_User`, `Address_User`, `Phone_User`, `Status_Order`, `Date_Order`, `Date_De`) VALUES
(51, 1, 'Nam Kỳ Khởi Nghĩa', '0332148505', 'Chưa Giải Quyết', '19:58:16 13/11/2020', ''),
(52, 1, 'Nam Kỳ Khởi Nghĩa', '0332148505', 'Chưa Giải Quyết', '20:01:39 13/11/2020', ''),
(53, 1, 'Nam Kỳ Khởi Nghĩa', '0332148505', 'Chưa Giải Quyết', '20:03:12 13/11/2020', ''),
(54, 1, 'Nam Kỳ Khởi Nghĩa', '0332148505', 'Chưa Giải Quyết', '20:04:38 13/11/2020', ''),
(55, 1, 'Nam Kỳ Khởi Nghĩa', '0332148505', 'Chưa Giải Quyết', '20:05:37 13/11/2020', ''),
(56, 1, 'Nam Kỳ Khởi Nghĩa', '0332148505', 'Chưa Giải Quyết', '20:05:58 13/11/2020', ''),
(57, 1, 'Nam Kỳ Khởi Nghĩa', '0332148505', 'Chưa Giải Quyết', '20:06:31 13/11/2020', ''),
(58, 1, 'Nam Kỳ Khởi Nghĩa', '0332148505', 'Chưa Giải Quyết', '20:07:02 13/11/2020', ''),
(59, 1, 'Nam Kỳ Khởi Nghĩa', '0332148505', 'Chưa Giải Quyết', '20:08:19 13/11/2020', ''),
(60, 1, 'Nam Kỳ Khởi Nghĩa', '0332148505', 'Chưa Giải Quyết', '20:32:46 13/11/2020', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderdetail`
--

CREATE TABLE `orderdetail` (
  `ID_OrderDetail` int(11) NOT NULL,
  `ID_Order` int(11) NOT NULL,
  `ID_Product` int(11) NOT NULL,
  `Quanlity_Order` int(11) NOT NULL,
  `Price_Order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `orderdetail`
--

INSERT INTO `orderdetail` (`ID_OrderDetail`, `ID_Order`, `ID_Product`, `Quanlity_Order`, `Price_Order`) VALUES
(1, 51, 1, 1, 15000),
(2, 51, 4, 1, 25000),
(3, 52, 2, 7, 105000),
(4, 53, 2, 1, 15000),
(5, 54, 2, 1, 15000),
(6, 55, 2, 1, 15000),
(7, 56, 2, 1, 15000),
(8, 57, 2, 1, 15000),
(9, 58, 2, 1, 15000),
(10, 59, 2, 1, 15000),
(11, 60, 2, 1, 15000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `ID_Product` int(11) NOT NULL,
  `Name_Product` varchar(145) NOT NULL,
  `ID_Catalog` int(11) NOT NULL,
  `Brand_Product` varchar(45) DEFAULT NULL,
  `Price_Product` int(11) DEFAULT NULL,
  `Des_Product` varchar(2000) DEFAULT NULL,
  `Image_Product` varchar(100) DEFAULT NULL,
  `Title_Product` varchar(45) DEFAULT NULL,
  `Keywords_Product` varchar(500) DEFAULT NULL,
  `Des_Page` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`ID_Product`, `Name_Product`, `ID_Catalog`, `Brand_Product`, `Price_Product`, `Des_Product`, `Image_Product`, `Title_Product`, `Keywords_Product`, `Des_Page`) VALUES
(1, 'Word 2019', 1, 'Microsoft', 15, 'Bản quyền đến từ công ty công nghệ lớn nhất thế giới', 'Word.png', 'Word 2019 SIT', 'download, word, 2019, sit', 'Em là nguồn cảm hứng bất tận để anh viết văn bản'),
(2, 'Excel 2019', 1, 'Microsoft', 15, '', 'Excel.png', '', '', ''),
(3, 'PowerPoint 2019', 1, 'Microsoft', 15, '', 'Powerpoint.png', '', '', ''),
(4, 'Adobe Photoshop CC 2019', 2, 'Adobe Create Cloud', 25, 'Đây là 1 sản phẩm ra mắt vào năm 2018', 'Photoshop.png', '', '', ''),
(5, '7Zip', 13, '7Zip', 0, '7-Zip là phần mềm miễn phí với mã nguồn mở . Phần lớn mã là theo giấy phép GNU LGPL . Một số phần của mã nằm trong Giấy phép 3 điều khoản BSD. Ngoài ra, có giới hạn giấy phép unRAR cho một số phần của mã. Đọc thông tin Giấy phép 7-Zip .\r\n\r\nBạn có thể sử dụng 7-Zip trên bất kỳ máy tính nào, kể cả máy tính trong tổ chức thương mại. Bạn không cần phải đăng ký hoặc thanh toán cho 7-Zip.', '7Zip.png', '', '', ''),
(6, 'OBS Studio', 13, 'OBS', 5, 'OBS  là một chương trình ghi và phát trực tuyến đa nền tảng mã nguồn mở và miễn phí được xây dựng bằng Qt và được duy trì bởi Dự án OBS. Tính đến năm 2016, phần mềm hiện được gọi là OBS Studio', 'Obs.png', 'OBS Studio SIT', '', ''),
(7, '17Th Security', 6, 'Hoàng Sang', 1777, 'Là một phần mềm bảo mật dành cho hệ điều hành Windows, ra đời vào năm 1999. Đến nay sản phẩm đã trở thành một thương hiệu nổi tiếng là doanh nghiệp tốt nhất Việt Nam', '17ThSecurity.png', '17Th Security', '17Th Securrity, SIT Security', 'Phần mềm bảo mật dành cho windows'),
(8, 'Adobe Illustrator 2019', 2, 'Hoàng Sang', 25, 'Adobe Illustrator là một chương trình thiết kế và biên tập đồ họa vector được phát triển và tiếp thị bởi Adobe Inc. Ban đầu được thiết kế cho Apple Macintosh, quá trình phát triển Adobe Illustrator bắt đầu vào năm 1985. Cùng với Creative Cloud, Illustrator CC đã được phát hành.', 'Ai.png', 'Adobe Illustrator 2019 SIT', '', ''),
(9, 'Sữa Lỗi Mã Nguồn Website', 12, 'SIT Hoàng Sang', 30, 'Thời gian sử dụng dịch vụ là 60 phút bao gồm cả thời gian bạn mô tả mục đích của trang và lỗi gặp phải. Dịch vụ được trao đổi thông qua phần mềm TeamView.', 'Fixbug.png', 'Sữa Lỗi Mã Nguồn Website - SIT', 'Fix, Code, Fix Code, SIT, Hoàng Sang, Hoàng Sang Fix Code', 'Thời gian sử dụng dịch vụ là 60 phút bao gồm cả thời gian bạn mô tả mục đích của trang và lỗi gặp phải. Dịch vụ được trao đổi thông qua phần mềm TeamView.'),
(10, 'Phạm Hoàng Sang', 11, 'HoangSang17Th', 0, 'Phạm Hoàng Sang là một chàng trai Ế đến từ Ban Mê. Năm nay Ế vừa tròn 20 năm nên muốn bán đi với giá hữu nghị. Ai mua có thể bấm nút mua ngay lập tức! Yêu cầu người mua là NỮ', '17ThSecurity.png', '', '', ''),
(11, 'Access 2019', 1, 'Microsoft', 15, '', 'Access.png', '', '', ''),
(12, 'OneNote 2019', 1, 'Microsoft', 15, '', 'Onenote.png', '', '', ''),
(13, 'Fix Bug Fontend', 12, 'Hoàng Sang', 30, 'Thời gian sử dụng dịch vụ sữa lỗi mã nguồn là 60 phút, thực hiện dịch vụ qua Teamview, ', '17ThSecurity.png', '', '', ''),
(14, 'Fix Bug Backend', 12, 'SIT Hoàng Sang', 30, '', '17ThSecurity.png', '', '', ''),
(91, 'Sang Đẹp Trai', 12, 'SIT Hoàng Sang', 55555, '<p style=\"text-align: justify;\"><strong>Đ&acirc;y l&agrave; d&ograve;ng m&ocirc; tả của Sang</strong></p>\r\n<p style=\"text-align: justify;\"><strong><em>Căn giữa, in nghi&ecirc;ng v&agrave; đậm</em></strong></p>\r\n<p style=\"text-align: justify;\"><strong><span style=\"color: #f1c40f;\"><em>Th&ecirc;m 1 t&iacute; m&agrave;u v&agrave;ng cho đời bớt nhạt</em></span></strong></p>', '17ThSecurity.png', 'Tiêu đề tranhg là 1 sản phẩm max ngầu', 'Tình yêu, tình bạn, tình cha', 'Trang này không cần mô tả vẫn top 1 gôgle');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `subcribe`
--

CREATE TABLE `subcribe` (
  `ID_Subcribe` int(45) NOT NULL,
  `Email_Subcribe` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `subcribe`
--

INSERT INTO `subcribe` (`ID_Subcribe`, `Email_Subcribe`) VALUES
(21, 'Admin@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `todolist`
--

CREATE TABLE `todolist` (
  `ID_ToDo` int(50) NOT NULL,
  `ID_User` int(11) NOT NULL,
  `Mission_ToDo` varchar(225) NOT NULL,
  `Des_ToDo` varchar(5000) DEFAULT NULL,
  `Start_Date` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Completion_Date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `todolist`
--

INSERT INTO `todolist` (`ID_ToDo`, `ID_User`, `Mission_ToDo`, `Des_ToDo`, `Start_Date`, `Completion_Date`) VALUES
(3, 1, 'Cày xong phim One Piece', 'bắt đầu từ tập 23 tôi đã cảm thấy vô cùng xúc động. Kaido là một chàng trai thân thiện :_))', '2020-09-21 22:59:20', '2020-09-21 22:59:20'),
(4, 1, 'Bắt đầu một ngày từ sớm', 'Nếu buổi sáng của bạn thường lộn xộn, giải pháp đơn giản cho chuyện này là bạn nên dậy sớm trước đám lộn xộn đó. Điều này hiển nhiên có nghĩa là bạn phải đi ngủ sớm hơn vào tối hôm trước.\r\n\r\nBạn nên điều chỉnh từng chút một, dậy sớm hơn khoảng 10 phút mỗi tuần trong 6-9 tuần tới, và bạn sẽ hầu như không nhận thấy sự thay đổi này đang diễn ra ngày qua ngày. Thời gian có thêm này sẽ giúp bạn tránh được sự căng thẳng, những vé phạt quá tốc độ, việc đi trễ và những chuyện đau đầu không cần thiết khác.', '2020-09-22 09:02:39', '2020-09-22 09:02:39'),
(5, 1, 'Thực hành thiền suy ngẫm về những điều tốt đẹp.', 'Hãy bắt đầu mỗi ngày bằng việc suy ngẫm về tình yêu, những ơn phước và lòng biết ơn. Khi bạn thức giấc vào mỗi sáng, hãy nghĩ về đặc ân được sống, được là chính mình, được nhìn, được nghe, được suy nghĩ, được yêu thương, được mong đơi một điều gì đó. Thật ra, hạnh phúc được hình thành từ những điều nhỏ bé này trong cuộc sống; và niềm vui đơn giản là cảm giác nâng niu chúng.\r\n\r\nHãy nhận biết rằng hạnh phúc không làm cho chúng ta biết ơn, mà chính lòng biết ơn làm cho chúng ta hạnh phúc. Tập thói quen nghĩ về những điều tốt đẹp thuộc về bạn ngay khi vừa thức dậy, rồi bạn sẽ nhìn thấy nhiều điều tốt đẹp hơn ở mọi nơi mỗi ngày. \r\n\r\nVà hãy nhớ, mỗi ngày phải đọc 1 trang sách. dẫu sách trả cho ta cái gì cả, nó chiếm lấy thời gian và trí não của ta, nhưng vẫn hãy đọc, đọc đọc thật nhiều. Đến 1 lúc nào đó nó ẽ phải giúp chúng ta', '2020-09-22 08:39:47', '2020-09-22 08:39:47'),
(7, 1, 'Uống một ly nước đầy trước khi bạn ăn uống những thứ khác.', 'Một thói quen có lợi nữa hay bị lãng quên….\r\n\r\nHơn 60% cơ thể của bạn là nước, trong khi bạn ngủ cả đêm và không uống nước, cơ thể sẽ bị mất nước và rất cần được cung cấp nước. Vậy hãy giải cơn khát cho cơ thể của bạn. Bạn nên tránh uống cà phê, trà hoặc các thức uống khác trước khi bạn uống ít nhất một ly nước đầy. Khi đó cơ thể bạn sẽ bắt đầu tỉnh dậy và bạn sẽ tự nhiên cảm thấy tràn trề năng lượng sống.', '2020-09-22 08:59:51', '2020-09-22 08:59:51'),
(8, 1, 'Làm một số việc truyền cảm hứng cho bạn.', 'Như tôi đã nói, bạn ĐỪNG sắp xếp những việc bạn phải làm vào buổi sáng… mà NÊN làm những thứ khiến bạn bồn chồn muốn nhảy ngay ra khỏi giường để thực hiện. Với tôi, đó chính là danh sách tối cao của tôi, bao gồm việc đọc sách và viết lách, hai niềm đam mê lớn nhất của tôi. Với bạn, đó có thể là việc tản bộ thư giãn, tập yoga, cầu nguyện, vẽ tranh, hoặc chỉ đơn giản là đọc báo sáng.\r\n\r\nNói cách khác, bạn đừng lên một danh sách dài những việc bạn phải làm, mà chưa chắc thật sự là những việc bạn muốn làm. Hãy làm sao để những buổi sớm mai là một món quà cho chính bản thân bạn.', '2020-09-21 22:50:10', '2020-09-21 17:50:10'),
(9, 1, 'Đọc, rồi đọc lại hoặc lắng nghe thứ gì đấy nuôi dưỡng tinh thần của bạn.', 'Một số người hạnh phúc và thành công nhất tôi được biết đọc một vài đoạn Kinh Thánh vào mỗi sáng, một số người đọc những quyển sách, bài báo hoặc những câu nói truyền cảm hứng, trong khi một số người khác lại nghe đài, sách nói hoặc những chương trình truyền thanh khiến họ tràn trề năng lượng bắt đầu một ngày mới. Mấu chốt là có được thói quen tập trung tự hoàn thiện bản thân từng chút một để mở rộng và nuôi dưỡng tầm nhìn và nền tảng kiến thức của bạn. Điều này giúp bạn định hướng cả một ngày của mình một cách tích cực bằng những ý tưởng tích cực và hữu ích. Và đây là một yếu tố quan trọng vì tư tưởng của bạn là thứ dẫn dắt thực tế.\r\n\r\nVậy hãy tự thưởng cho mình thứ gì đấy lạc quan mỗi buổi sáng khi bạn thức giấc và để tinh thần này truyền cho bạn cảm hứng làm điều gì đấy tích cực trước khi bạn quay lại giường vào buổi tối. Đó là cách để sống được những ngày đáng nhớ và dễ chịu.', '2020-09-21 23:06:57', '2020-09-21 23:06:57'),
(17, 1, 'Cà Khịa Anh Thành IT2', 'Anh này là pro của lớp, nên phải cà khịa 1 cách tế nhị :))', '2020-09-21 22:49:54', '2020-09-21 17:49:54'),
(18, 1, 'Đọc xong 4 cuốn sách trong 1 tuần', '', '2020-09-22 09:15:20', '2020-09-22 09:15:20'),
(19, 1, 'Làm xong đồ án cho năm sau', 'Chắc có lẽ không đủ kinh nghiệp để làm rồi. Chắc phải nhờ anh quốc r', '2020-09-28 15:14:48', '2020-09-28 15:14:48'),
(20, 1, 'Tỏ tình với crush', '', '2020-09-22 09:15:49', '2020-09-22 09:15:49'),
(21, 1, 'Biết bơi', 'trở thành 1 chàng trai bơi lội:))\r\n', '2020-09-22 09:14:50', NULL),
(22, 1, 'Tri Ana hahaha', '123', '2020-10-24 15:24:51', '2020-10-24 15:24:51'),
(23, 1, 'Muốn được đi thực tập', 'Nhưng mà ở đâu họ cũng cabaf có tiếng Anh giỏi cả\r\n', '2020-09-22 21:40:35', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `ID_User` int(11) NOT NULL,
  `Email_User` varchar(100) NOT NULL,
  `Password_User` varchar(45) NOT NULL,
  `Image_User` varchar(77) NOT NULL,
  `Date_Join_User` datetime NOT NULL DEFAULT current_timestamp(),
  `Name_User` varchar(45) DEFAULT NULL,
  `Phone_User` varchar(12) NOT NULL,
  `Address_User` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`ID_User`, `Email_User`, `Password_User`, `Image_User`, `Date_Join_User`, `Name_User`, `Phone_User`, `Address_User`) VALUES
(1, 'Admin@gmail.com', 'Admin@gmail.com', '', '2020-10-18 21:26:19', 'Hoàng Sang', '0332148505', 'Nam Kỳ Khởi Nghĩa'),
(17, 'hoangsang@gamil.com', '123', '', '2020-10-23 09:36:07', 'sang', '', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_Admin`,`Email_Admin`);

--
-- Chỉ mục cho bảng `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`ID_Catalog`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`ID_Comment`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`ID_Order`);

--
-- Chỉ mục cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`ID_OrderDetail`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID_Product`);

--
-- Chỉ mục cho bảng `subcribe`
--
ALTER TABLE `subcribe`
  ADD PRIMARY KEY (`ID_Subcribe`);

--
-- Chỉ mục cho bảng `todolist`
--
ALTER TABLE `todolist`
  ADD PRIMARY KEY (`ID_ToDo`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID_User`,`Email_User`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `catalog`
--
ALTER TABLE `catalog`
  MODIFY `ID_Catalog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `ID_Comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `ID_Order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `ID_OrderDetail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `ID_Product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT cho bảng `subcribe`
--
ALTER TABLE `subcribe`
  MODIFY `ID_Subcribe` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `todolist`
--
ALTER TABLE `todolist`
  MODIFY `ID_ToDo` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `ID_User` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
