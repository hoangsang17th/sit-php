-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 13, 2020 lúc 04:20 PM
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
  `user` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`user`, `password`, `name`) VALUES
('admin', 'admin', 'Hoàng Sang'),
('administrator', '123', 'SIT');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `idpro` int(11) NOT NULL,
  `username` varchar(70) NOT NULL,
  `comment` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `idpro`, `username`, `comment`, `date`) VALUES
(25, 3, '2', '324', '2020-10-13'),
(26, 3, '2', '324', '2020-10-13'),
(27, 3, '2', '123', '2020-10-13'),
(28, 3, '2', 'tr', '2020-10-13'),
(29, 3, '2', 'tr', '2020-10-13'),
(30, 3, '2', 'tr', '2020-10-13'),
(31, 3, '2', 'tr', '2020-10-13'),
(32, 3, '2', 'tr', '2020-10-13'),
(33, 3, '2', '32', '2020-10-13'),
(34, 0, '2', '1', '2020-10-13'),
(35, 0, '2', 'ewrew', '2020-10-13'),
(36, 3, '2', '3ee32', '2020-10-13'),
(37, 3, '2', 're', '2020-10-13'),
(38, 0, '2', 'ew', '2020-10-13'),
(39, 5, '2', '3ee32', '2020-10-13'),
(41, 5, '13', '324324', '2020-10-13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `tendanhmuc` varchar(145) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `tendanhmuc`) VALUES
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
-- Cấu trúc bảng cho bảng `photos`
--

CREATE TABLE `photos` (
  `id` int(12) NOT NULL,
  `idpro` int(45) NOT NULL,
  `images` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `photos`
--

INSERT INTO `photos` (`id`, `idpro`, `images`) VALUES
(1, 11, '17Th_Security.svg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `tenmathang` varchar(145) NOT NULL,
  `iddanhmuc` int(11) DEFAULT NULL,
  `thuonghieu` varchar(45) DEFAULT NULL,
  `dongia` int(11) DEFAULT NULL,
  `mota` varchar(2000) DEFAULT NULL,
  `title` varchar(45) DEFAULT NULL,
  `keywords` varchar(500) DEFAULT NULL,
  `motatrang` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `tenmathang`, `iddanhmuc`, `thuonghieu`, `dongia`, `mota`, `title`, `keywords`, `motatrang`) VALUES
(1, 'Word 2019', 1, 'Microsoft', 15, 'Bản quyền đến từ công ty công nghệ lớn nhất thế giới', 'Word 2019 SIT', 'download, word, 2019, sit', 'Em là nguồn cảm hứng bất tận để anh viết văn bản'),
(3, 'Excel 2019', 1, 'Microsoft', 15, '', '', '', ''),
(4, 'PowerPoint 2019', 1, 'Microsoft', 15, '', '', '', ''),
(5, 'Adobe Photoshop CC 2019', 2, 'Adobe Create Cloud', 25, 'Đây là 1 sản phẩm ra mắt vào năm 2018', '', '', ''),
(6, '7Zip', 13, '7Zip', 0, '7-Zip là phần mềm miễn phí với mã nguồn mở . Phần lớn mã là theo giấy phép GNU LGPL . Một số phần của mã nằm trong Giấy phép 3 điều khoản BSD. Ngoài ra, có giới hạn giấy phép unRAR cho một số phần của mã. Đọc thông tin Giấy phép 7-Zip .\r\n\r\nBạn có thể sử dụng 7-Zip trên bất kỳ máy tính nào, kể cả máy tính trong tổ chức thương mại. Bạn không cần phải đăng ký hoặc thanh toán cho 7-Zip.', '', '', ''),
(8, 'OBS Studio', 13, 'OBS', 5, 'OBS  là một chương trình ghi và phát trực tuyến đa nền tảng mã nguồn mở và miễn phí được xây dựng bằng Qt và được duy trì bởi Dự án OBS. Tính đến năm 2016, phần mềm hiện được gọi là OBS Studio', 'OBS Studio SIT', '', ''),
(9, 'One Driver', 5, 'Hoàng Sang', 5, NULL, NULL, NULL, NULL),
(11, '17Th Security', 6, 'Hoàng Sang', 1777, 'Là một phần mềm bảo mật dành cho hệ điều hành Windows, ra đời vào năm 1999. Đến nay sản phẩm đã trở thành một thương hiệu nổi tiếng là doanh nghiệp tốt nhất Việt Nam', '17Th Security', '17Th Securrity, SIT Security', 'Phần mềm bảo mật dành cho windows'),
(13, 'Adobe Illustrator 2019', 2, 'Hoàng Sang', 25, 'Adobe Illustrator là một chương trình thiết kế và biên tập đồ họa vector được phát triển và tiếp thị bởi Adobe Inc. Ban đầu được thiết kế cho Apple Macintosh, quá trình phát triển Adobe Illustrator bắt đầu vào năm 1985. Cùng với Creative Cloud, Illustrator CC đã được phát hành.', 'Adobe Illustrator 2019 SIT', '', ''),
(39, 'Sữa Lỗi Mã Nguồn Website', 12, 'SIT Hoàng Sang', 30, 'Thời gian sử dụng dịch vụ là 60 phút bao gồm cả thời gian bạn mô tả mục đích của trang và lỗi gặp phải. Dịch vụ được trao đổi thông qua phần mềm TeamView.', 'Sữa Lỗi Mã Nguồn Website - SIT', 'Fix, Code, Fix Code, SIT, Hoàng Sang, Hoàng Sang Fix Code', 'Thời gian sử dụng dịch vụ là 60 phút bao gồm cả thời gian bạn mô tả mục đích của trang và lỗi gặp phải. Dịch vụ được trao đổi thông qua phần mềm TeamView.'),
(40, 'Phạm Hoàng Sang', 11, 'HoangSang17Th', 0, 'Phạm Hoàng Sang là một chàng trai Ế đến từ Ban Mê. Năm nay Ế vừa tròn 20 năm nên muốn bán đi với giá hữu nghị. Ai mua có thể bấm nút mua ngay lập tức! Yêu cầu người mua là NỮ', '', '', ''),
(44, 'Access 2019', 1, 'Microsoft', 15, '', '', '', ''),
(45, 'OneNote 2019', 1, 'Microsoft', 15, '', '', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `subcribe`
--

CREATE TABLE `subcribe` (
  `id` int(45) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `subcribe`
--

INSERT INTO `subcribe` (`id`, `email`) VALUES
(5, 'phsang49@gmail.com'),
(11, 'phsang49@gmail.com'),
(13, 'a'),
(14, ''),
(15, 'hello'),
(16, 'sang492001@gmail.com'),
(17, 'sang492001@gmail.com'),
(18, 'admin@17team.work'),
(19, 'dtanh.19it2@vku.udn.vn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `todolist`
--

CREATE TABLE `todolist` (
  `id` int(11) NOT NULL,
  `idm` int(50) NOT NULL,
  `mission` varchar(225) NOT NULL,
  `description` varchar(5000) DEFAULT NULL,
  `startdate` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `completiondate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `todolist`
--

INSERT INTO `todolist` (`id`, `idm`, `mission`, `description`, `startdate`, `completiondate`) VALUES
(3, 2, 'Mua sổ xố Vietlott', 'Chúng 50 tỉ nào hahaha', '2020-09-20 22:33:22', NULL),
(1, 3, 'Cày xong phim One Piece', 'bắt đầu từ tập 23 tôi đã cảm thấy vô cùng xúc động. Kaido là một chàng trai thân thiện :_))', '2020-09-21 22:59:20', '2020-09-21 22:59:20'),
(1, 4, 'Bắt đầu một ngày từ sớm', 'Nếu buổi sáng của bạn thường lộn xộn, giải pháp đơn giản cho chuyện này là bạn nên dậy sớm trước đám lộn xộn đó. Điều này hiển nhiên có nghĩa là bạn phải đi ngủ sớm hơn vào tối hôm trước.\r\n\r\nBạn nên điều chỉnh từng chút một, dậy sớm hơn khoảng 10 phút mỗi tuần trong 6-9 tuần tới, và bạn sẽ hầu như không nhận thấy sự thay đổi này đang diễn ra ngày qua ngày. Thời gian có thêm này sẽ giúp bạn tránh được sự căng thẳng, những vé phạt quá tốc độ, việc đi trễ và những chuyện đau đầu không cần thiết khác.', '2020-09-22 09:02:39', '2020-09-22 09:02:39'),
(1, 5, 'Thực hành thiền suy ngẫm về những điều tốt đẹp.', 'Hãy bắt đầu mỗi ngày bằng việc suy ngẫm về tình yêu, những ơn phước và lòng biết ơn. Khi bạn thức giấc vào mỗi sáng, hãy nghĩ về đặc ân được sống, được là chính mình, được nhìn, được nghe, được suy nghĩ, được yêu thương, được mong đơi một điều gì đó. Thật ra, hạnh phúc được hình thành từ những điều nhỏ bé này trong cuộc sống; và niềm vui đơn giản là cảm giác nâng niu chúng.\r\n\r\nHãy nhận biết rằng hạnh phúc không làm cho chúng ta biết ơn, mà chính lòng biết ơn làm cho chúng ta hạnh phúc. Tập thói quen nghĩ về những điều tốt đẹp thuộc về bạn ngay khi vừa thức dậy, rồi bạn sẽ nhìn thấy nhiều điều tốt đẹp hơn ở mọi nơi mỗi ngày. \r\n\r\nVà hãy nhớ, mỗi ngày phải đọc 1 trang sách. dẫu sách trả cho ta cái gì cả, nó chiếm lấy thời gian và trí não của ta, nhưng vẫn hãy đọc, đọc đọc thật nhiều. Đến 1 lúc nào đó nó ẽ phải giúp chúng ta', '2020-09-22 08:39:47', '2020-09-22 08:39:47'),
(1, 7, 'Uống một ly nước đầy trước khi bạn ăn uống những thứ khác.', 'Một thói quen có lợi nữa hay bị lãng quên….\r\n\r\nHơn 60% cơ thể của bạn là nước, trong khi bạn ngủ cả đêm và không uống nước, cơ thể sẽ bị mất nước và rất cần được cung cấp nước. Vậy hãy giải cơn khát cho cơ thể của bạn. Bạn nên tránh uống cà phê, trà hoặc các thức uống khác trước khi bạn uống ít nhất một ly nước đầy. Khi đó cơ thể bạn sẽ bắt đầu tỉnh dậy và bạn sẽ tự nhiên cảm thấy tràn trề năng lượng sống.', '2020-09-22 08:59:51', '2020-09-22 08:59:51'),
(1, 8, 'Làm một số việc truyền cảm hứng cho bạn.', 'Như tôi đã nói, bạn ĐỪNG sắp xếp những việc bạn phải làm vào buổi sáng… mà NÊN làm những thứ khiến bạn bồn chồn muốn nhảy ngay ra khỏi giường để thực hiện. Với tôi, đó chính là danh sách tối cao của tôi, bao gồm việc đọc sách và viết lách, hai niềm đam mê lớn nhất của tôi. Với bạn, đó có thể là việc tản bộ thư giãn, tập yoga, cầu nguyện, vẽ tranh, hoặc chỉ đơn giản là đọc báo sáng.\r\n\r\nNói cách khác, bạn đừng lên một danh sách dài những việc bạn phải làm, mà chưa chắc thật sự là những việc bạn muốn làm. Hãy làm sao để những buổi sớm mai là một món quà cho chính bản thân bạn.', '2020-09-21 22:50:10', '2020-09-21 17:50:10'),
(1, 9, 'Đọc, rồi đọc lại hoặc lắng nghe thứ gì đấy nuôi dưỡng tinh thần của bạn.', 'Một số người hạnh phúc và thành công nhất tôi được biết đọc một vài đoạn Kinh Thánh vào mỗi sáng, một số người đọc những quyển sách, bài báo hoặc những câu nói truyền cảm hứng, trong khi một số người khác lại nghe đài, sách nói hoặc những chương trình truyền thanh khiến họ tràn trề năng lượng bắt đầu một ngày mới. Mấu chốt là có được thói quen tập trung tự hoàn thiện bản thân từng chút một để mở rộng và nuôi dưỡng tầm nhìn và nền tảng kiến thức của bạn. Điều này giúp bạn định hướng cả một ngày của mình một cách tích cực bằng những ý tưởng tích cực và hữu ích. Và đây là một yếu tố quan trọng vì tư tưởng của bạn là thứ dẫn dắt thực tế.\r\n\r\nVậy hãy tự thưởng cho mình thứ gì đấy lạc quan mỗi buổi sáng khi bạn thức giấc và để tinh thần này truyền cho bạn cảm hứng làm điều gì đấy tích cực trước khi bạn quay lại giường vào buổi tối. Đó là cách để sống được những ngày đáng nhớ và dễ chịu.', '2020-09-21 23:06:57', '2020-09-21 23:06:57'),
(3, 10, '', 'Cô giáo quỳnh', '2020-09-21 10:06:17', NULL),
(3, 11, 'Tán cô  giáo chủ nhiệm', 'Cô giáo Quỳnh Búp bê', '2020-09-21 10:07:34', NULL),
(1, 17, 'Cà Khịa Anh Thành IT2', 'Anh này là pro của lớp, nên phải cà khịa 1 cách tế nhị :))', '2020-09-21 22:49:54', '2020-09-21 17:49:54'),
(1, 18, 'Đọc xong 4 cuốn sách trong 1 tuần', '', '2020-09-22 09:15:20', '2020-09-22 09:15:20'),
(1, 19, 'Làm xong đồ án cho năm sau', 'Chắc có lẽ không đủ kinh nghiệp để làm rồi. Chắc phải nhờ anh quốc r', '2020-09-28 15:14:48', '2020-09-28 15:14:48'),
(1, 20, 'Tỏ tình với crush', '', '2020-09-22 09:15:49', '2020-09-22 09:15:49'),
(1, 21, 'Biết bơi', 'trở thành 1 chàng trai bơi lội:))\r\n', '2020-09-22 09:14:50', NULL),
(1, 22, 'Tri Ana hahaha', '123', '2020-09-22 15:06:21', NULL),
(1, 23, 'Muốn được đi thực tập', 'Nhưng mà ở đâu họ cũng cabaf có tiếng Anh giỏi cả\r\n', '2020-09-22 21:40:35', NULL),
(2, 24, 'Tán cô  giáo chủ nhiệm', '12345', '2020-10-07 14:37:33', '2020-10-07 14:37:33'),
(2, 25, 'Bài Tập', 'Hoàn thành trang sản phẩn và htaccess', '2020-10-10 19:56:08', NULL),
(2, 26, 'Tán cô  giáo chủ nhiệm', '12321', '2020-10-13 10:58:38', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `name` varchar(45) DEFAULT NULL,
  `phone` varchar(12) NOT NULL,
  `address` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `date`, `name`, `phone`, `address`) VALUES
(1, 'user', 'user', 'phsang49@gmail.com', '2020-09-22 22:23:35', 'Hoàng Sang', '5595297976', '869  Vesta Drive'),
(2, 'admin', 'admin', 'VKU@Gmail.com', '2020-09-20 19:55:11', 'Tuấn Anh', '0332148505', 'Nam Kỳ Khởi Nghĩa'),
(12, 'tuongdeptrai', '1234567', 'phsang49@gmail.com', '2020-09-25 21:05:35', 'Hoàng Nguyễn Viết Nam', '', ''),
(13, 'admin11', '123', '', '2020-09-30 22:06:04', 'Hello', '', ''),
(15, 'admin234', '123', 'phsang49@gmail.com', '2020-10-03 09:37:53', 'Phạm Hoàng Sang', '', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `subcribe`
--
ALTER TABLE `subcribe`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `todolist`
--
ALTER TABLE `todolist`
  ADD PRIMARY KEY (`idm`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`,`username`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT cho bảng `subcribe`
--
ALTER TABLE `subcribe`
  MODIFY `id` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `todolist`
--
ALTER TABLE `todolist`
  MODIFY `idm` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
