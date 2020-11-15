--
-- Cơ sở dữ liệu: `sit`
--
CREATE TABLE `admin` (
  `ID_Admin` varchar(45) NOT NULL,
  `Email_Admin` varchar(45) NOT NULL,
  `Password_Admin` varchar(45) NOT NULL,
  `Name_Admin` varchar(45) DEFAULT NULL,
  `Image_Admin` varchar(110) NOT NULL
);
--
-- Cấu trúc bảng cho bảng `catalog`
--
CREATE TABLE `catalog` (
  `ID_Catalog` int(11) NOT NULL,
  `Name_Catalog` varchar(145) NOT NULL
);
--
-- Cấu trúc bảng cho bảng `comment`
--
CREATE TABLE `comment` (
  `ID_Comment` int(11) NOT NULL,
  `ID_Product` int(11) NOT NULL,
  `ID_User` varchar(70) NOT NULL,
  `Comment` text NOT NULL,
  `Date_Comment` date NOT NULL DEFAULT current_timestamp()
);
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
);
--
-- Cấu trúc bảng cho bảng `orderdetail`
--
CREATE TABLE `orderdetail` (
  `ID_OrderDetail` int(11) NOT NULL,
  `ID_Order` int(11) NOT NULL,
  `ID_Product` int(11) NOT NULL,
  `Quanlity_Order` int(11) NOT NULL,
  `Price_Order` int(11) NOT NULL
);
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
);
--
-- Cấu trúc bảng cho bảng `subcribe`
--
CREATE TABLE `subcribe` (
  `ID_Subcribe` int(45) NOT NULL,
  `Email_Subcribe` varchar(50) NOT NULL
);
CREATE TABLE `todolist` (
  `ID_ToDo` int(50) NOT NULL,
  `ID_User` int(11) NOT NULL,
  `Mission_ToDo` varchar(225) NOT NULL,
  `Des_ToDo` varchar(5000) DEFAULT NULL,
  `Start_Date` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Completion_Date` datetime DEFAULT NULL
);
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
);
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