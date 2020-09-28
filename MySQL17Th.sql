-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 28, 2020 lúc 10:31 AM
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
(1, 'Thực Phẩm Tươi Sống 2'),
(2, 'Mẹ và Bé Gái'),
(3, 'Điện Thoại'),
(4, 'Làm Đẹp'),
(5, 'Sức Khỏe'),
(6, 'Thời Trang'),
(7, 'Giáo Dục'),
(8, 'Thể Thao - Dã Ngoại'),
(9, 'Điện Gia Dụng'),
(10, 'Laptop'),
(11, 'Máy Tính Bảng'),
(12, 'Nhà Cửa'),
(13, 'Hàng Quốc Tế'),
(14, 'Bách Hóa'),
(15, 'Thiết Bị Số'),
(16, 'Phụ Kiện Số'),
(17, 'Ô tô'),
(18, 'Xe Máy'),
(19, 'Xe Đạp'),
(20, 'Điện Tử'),
(21, 'Hoàng Sang'),
(22, 'Dragon Nước Uống Tinh Khiết');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `tenmathang` varchar(145) NOT NULL,
  `iddanhmuc` int(11) DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL,
  `dongia` int(11) DEFAULT NULL,
  `mota` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `tenmathang`, `iddanhmuc`, `soluong`, `dongia`, `mota`) VALUES
(7, 'Hoạt Huyết EXDEL', 5, 10, 300000, 'Hoạt huyết bổ não'),
(8, 'Trên Đỉnh Phố Wall - Hoàng Sang', 7, 77, 200000, 'Đây là một trong những cuốn sách mà các nhà đầu tư không nên đọc'),
(9, 'Farmers', 1, 400, 400000, NULL),
(10, 'Organic', 1, 33, 300000, NULL),
(11, 'FoodMap', 1, 543, 200000, NULL),
(12, 'Hải Sản', 1, 435, 900000, NULL),
(13, 'DTpro', 1, 343, 200000, NULL),
(14, 'Ozzy', 1, 654, 100000, NULL),
(15, 'Táo', 1, 654, 300000, NULL),
(16, 'Nho', 1, 432, 220000, NULL),
(17, 'Quýt', 1, 32, 220000, NULL),
(18, 'Bom', 1, 543, 230000, NULL),
(19, 'Cam', 1, 654, 650000, NULL),
(20, 'Vsmart Joy 3', 3, 3, 450000, NULL),
(21, 'iPhone 11 Pro', 3, 9, 990000, NULL),
(22, 'Vsmart Active 3', 3, 9, 270000, NULL),
(23, 'Oppo A12e', 3, 9, 150000, NULL),
(24, 'Xiaomi Redmi 9A', 3, 9, 820000, NULL),
(25, 'M11', 3, 9, 21000, NULL),
(26, 'M21', 3, 9, 280000, NULL),
(27, 'M32 SamSung 1', 3, 90, 9990000, 'Đây là 1 thế hẹ mới của sam sumg'),
(28, 'XS Max 12', 16, 10, 55555, '124'),
(29, 'Trên Đỉnh Phố Wall - Hoàng Sang 2020', 7, 10, 20000, 'Đây là một cuốn sách demo'),
(93, 'Mệt Mỏi', 4, 10, 55555, ''),
(94, 'Mệt Mỏi', 4, 10, 55555, ''),
(95, 'Mệt Mỏi', 4, 10, 55555, ''),
(96, 'tên Sản Phẩm', 1, 0, 0, ''),
(97, 'tên Sản Phẩm', 1, 0, 0, ''),
(98, 'tên Sản Phẩm', 1, 0, 0, ''),
(99, 'tên Sản Phẩm', 1, 0, 0, ''),
(100, 'Sony 17', 5, 0, 0, ''),
(101, 'Sony 17', 5, 0, 0, ''),
(102, 'Sony 17', 5, 0, 0, ''),
(103, 'XS Max 12', 1, 0, 0, ''),
(104, 'XS Max 12', 1, 0, 0, ''),
(105, 'XS Max 12', 1, 4, 3, ''),
(106, 'XS Max 12', 1, 4, 3, ''),
(107, 'XS Max 12', 1, 4, 3, ''),
(108, 'XS Max 12', 1, 4, 3, ''),
(109, 'XS Max 12', 1, 4, 3, ''),
(110, 'XS Max 12', 1, 4, 3, ''),
(111, 'XS Max 12', 1, 4, 3, ''),
(112, 'XS Max 12', 1, 4, 3, ''),
(113, 'XS Max 12', 1, 4, 3, ''),
(114, 'XS Max 12', 1, 4, 3, '');

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
(2, 24, 'Tán cô  giáo chủ nhiệm', '12345', '2020-09-25 21:03:50', NULL);

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
(1, 'user', 'user', 'phsang49@gmail.com', '2020-09-22 22:23:35', 'Hoàng Sang 2', '5595297976', '869  Vesta Drive'),
(2, 'admin', 'admin', 'VKU@Gmail.com', '2020-09-20 19:55:11', ' Hoàng Sang', '0332148505', 'Nam Kỳ Khởi Nghĩa'),
(12, 'tuongdeptrai', '1234567', 'phsang49@gmail.com', '2020-09-25 21:05:35', 'Hoàng Nguyễn Viết Nam', '', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
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
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT cho bảng `todolist`
--
ALTER TABLE `todolist`
  MODIFY `idm` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
