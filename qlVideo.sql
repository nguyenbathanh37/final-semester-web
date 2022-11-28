SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE qlVideo;
USE qlVideo;


--
-- Cơ sở dữ liệu: `qlVideo`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `fullname` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(120) NOT NULL,
  `email` varchar(128) NOT NULL,
  `img` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`fullname`, `username`, `password`, `email`, `img`) VALUES
('Nguyễn Bá Thành', 'nguyenbathanh1', '$2y$10$Ke2PXGcLGBQt8CROEvnbZOGiraGwzKWMCpSqEsZtMYpac2mCSRm/W', 'nbt1@gmail.com', ''),
('Võ Luyện', 'voluyen2', '$2y$10$wuVO7l/dViBjzE89WJGDJ.oZVgy2jK/GQLVjjvegyvajNuROJ5GFu', 'vl2@gmail.com234', ''),
('Nguyễn Tấn Thành', 'nguyentanthanh3', '$2y$10$hXcdu03GTOVot/LDky3SSuMw03elDk6mairaoA.a76l3RPmKe6Hva', 'ntt3@gmail.com', ''),
('Lê Hải Tiến', 'lehaitien4', '$2y$10$7MJkd0uvXXEv2KIpY55jiuoS2H6EJj.JKbrmFOcyq9p5ZaFsLcXDW', 'lht4@gmail.com', ''),
('Lữ Phú', 'luphu5', '$2y$10$7MJkd0uvXXEv2KIpY55jlksjfdguoiwaFsLcXDW', 'lp5@gmail.com', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `video`
--

CREATE TABLE `video` (
  `id_video` int(11) NOT NULL,
  `namevideo` varchar(128) NOT NULL,
  `chanel` varchar(128) NOT NULL,
  `view` int(15) NOT NULL,
  `dayupload` datetime NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `active` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `video`
--

INSERT INTO `video` (`id_video`, `namevideo`, `chanel`, `view`, `dayupload`, `thumbnail`, `active`) VALUES
(11, 'Basic Python', 'LuyenPro123', 123345, '2022-10-27', '', 1),
(21, 'Pro PHP', 'Luyện Siêu Cấp Vip Pro', 192854, '2022-10-27', '', 0),
(31, 'Learn NodeJS with TT', 'Tấn Thành TDTU', 23756, '2022-10-27', '', 1);

-- --------------------------------------------------------


--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);


--
-- Chỉ mục cho bảng `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);  

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
COMMIT;