-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 10, 2020 lúc 05:47 AM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dbl_cuahangdienthoai`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `mabinhluan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nguoibinhluan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thoigianbl` datetime NOT NULL,
  `noidungbl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdtnguoibl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `mahd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `dongia` int(11) NOT NULL,
  `trangthai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuongtrinhkhuyenmai`
--

CREATE TABLE `chuongtrinhkhuyenmai` (
  `machuongtrinhkm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenchuongtrinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgianbatdau` datetime NOT NULL,
  `tgianketthuc` datetime NOT NULL,
  `giatrikm` int(11) NOT NULL,
  `loaigiatri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `toida` int(11) NOT NULL,
  `trangthai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `id_giohang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nguoimua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `trangthai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhanh`
--

CREATE TABLE `hinhanh` (
  `mahinhanh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duongdan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `mahd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tennguoimua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaylap` datetime NOT NULL,
  `tennguoinhan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachigiaohang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdtgiaohang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tongtien` int(11) NOT NULL,
  `trangthai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmaisp`
--

CREATE TABLE `khuyenmaisp` (
  `id_chuongtrinhkm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisp`
--

CREATE TABLE `loaisp` (
  `id_loai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_loai_sp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghichu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisp`
--

INSERT INTO `loaisp` (`id_loai`, `ten_loai_sp`, `ghichu`, `trangthai`, `created_at`, `updated_at`) VALUES
('LSP01', 'Dien Thoai Cam Ung', 'Dien thoai Cam Ung Full Man Hinh ', 1, NULL, NULL),
('LSP02', 'Dien Thoai Cam Ung Man Hinh Gap', 'Dien thoai Cam Ung Man Hinh Gap', 1, NULL, NULL),
('LSP03', 'Dien Thoai Nut', 'Dien Thoai Su Dung Bang Ngon Tai', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_07_01_103524_create_tai_khoans_table', 1),
(2, '2020_07_01_103533_create_tin_tucs_table', 1),
(3, '2020_07_01_103544_create_hoa_dons_table', 1),
(4, '2020_07_01_103554_create_gio_hangs_table', 1),
(5, '2020_07_01_103608_create_binh_luans_table', 1),
(6, '2020_07_01_103623_create_chuong_trinh_khuyen_mais_table', 1),
(7, '2020_07_01_103640_create_chi_tiet_hoa_dons_table', 1),
(8, '2020_07_01_103652_create_san_phams_table', 1),
(9, '2020_07_01_103704_create_khuyen_mai_s_p_s_table', 1),
(10, '2020_07_01_103717_create_loai_s_p_s_table', 1),
(11, '2020_07_01_103745_create_ten_thong_so_san_phams_table', 1),
(12, '2020_07_01_103759_create_nha_san_xuats_table', 1),
(13, '2020_07_01_103816_create_hinh_anh_s_p_s_table', 1),
(14, '2020_07_01_103829_create_thong_sos_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhasanxuat`
--

CREATE TABLE `nhasanxuat` (
  `manhasx` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tennhasx` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logonhasx` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhasanxuat`
--

INSERT INTO `nhasanxuat` (`manhasx`, `tennhasx`, `logonhasx`, `trangthai`, `created_at`, `updated_at`) VALUES
('NSX01', 'Apple', 'logo/nsx', 1, NULL, NULL),
('NSX02', 'SamSung', 'logo/nsx2', 1, NULL, NULL),
('NSX03', 'LG', 'logo/nsx2', 1, NULL, NULL),
('NSX04', 'SamSung', 'logo/nsx2', 1, NULL, NULL),
('NSX05', 'Nokia', 'logo/nsx3', 1, NULL, NULL),
('NSX06', 'Vinsmart', 'logo/nsx4', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `masp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manhasanxuat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tensp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motasp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giasp` int(11) NOT NULL,
  `soluongtonkho` int(11) NOT NULL,
  `loaisp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chedobaohanh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`masp`, `manhasanxuat`, `tensp`, `motasp`, `giasp`, `soluongtonkho`, `loaisp`, `chedobaohanh`, `trangthai`, `created_at`, `updated_at`) VALUES
('SP01', 'NSX01', 'iphone3', 'day la dien thoai chat', 10000000, 50, 'LSP01', 'tron don', 1, NULL, NULL),
('SP02', 'NSX02', 'galaxy y', 'day la dien thoai mo dau cho ky nguyen smartphone', 50000000, 50, 'LSP01', '1ngay', 1, NULL, NULL),
('SP03', 'NSX02', 'galaxy s', 'day la dien thoai mo dau cho ky nguyen smartphone', 3000000, 50, 'LSP01', '1ngay', 1, NULL, NULL),
('SP04', 'NSX01', 'iphone4', 'day la dien thoai chat', 3000000, 50, 'LSP01', '365ngay', 1, NULL, NULL),
('SP05', 'NSX02', 'galaxy s4', 'day la dien thoai nhanh nhat trai dat', 20000000, 50, 'LSP01', '24ngay', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `tentaikhoan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hoten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anhdaidien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tenthongsosp`
--

CREATE TABLE `tenthongsosp` (
  `id_thongsosp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giatri` int(11) NOT NULL,
  `trangthai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongso`
--

CREATE TABLE `thongso` (
  `id_thongso` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenthongso` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `donvi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `matintuc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tieude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nguoidang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaydang` datetime NOT NULL,
  `baiviet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`id_loai`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  ADD PRIMARY KEY (`manhasx`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masp`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
