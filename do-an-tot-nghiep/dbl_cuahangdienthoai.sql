-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 13, 2020 lúc 10:56 AM
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
  `ma_binh_luan` int(10) UNSIGNED NOT NULL,
  `masp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nguoi_binh_luan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thoi_gian_bl` datetime NOT NULL,
  `noi_dung_bl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt_nguoi_bl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trang_thai` int(11) NOT NULL,
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
  `so_luong` int(11) NOT NULL,
  `don_gia` int(11) NOT NULL,
  `trang_thai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuongtrinhkhuyenmai`
--

CREATE TABLE `chuongtrinhkhuyenmai` (
  `ma_chuong_trinh_km` int(10) UNSIGNED NOT NULL,
  `ten_chuong_trinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgian_batdau` datetime NOT NULL,
  `tgian_ketthuc` datetime NOT NULL,
  `gia_tri_km` int(11) NOT NULL,
  `loai_gia_tri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `toi_da` int(11) NOT NULL,
  `trang_thai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `id_gio_hang` int(10) UNSIGNED NOT NULL,
  `nguoi_mua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `so_luong` int(11) NOT NULL,
  `trang_thai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhanh`
--

CREATE TABLE `hinhanh` (
  `ma_hinh_anh` int(10) UNSIGNED NOT NULL,
  `masp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trang_thai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `ma_hd` int(10) UNSIGNED NOT NULL,
  `ten_nguoi_mua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay_lap` datetime NOT NULL,
  `ten_nguoi_nhan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_chi_gia_ohang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt_giao_hang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tong_tien` int(11) NOT NULL,
  `trang_thai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmaisp`
--

CREATE TABLE `khuyenmaisp` (
  `id_chuong_trinh_km` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trang_thai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisp`
--

CREATE TABLE `loaisp` (
  `id_loai` int(10) UNSIGNED NOT NULL,
  `ten_loai_sp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghi_chu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trang_thai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisp`
--

INSERT INTO `loaisp` (`id_loai`, `ten_loai_sp`, `ghi_chu`, `trang_thai`, `created_at`, `updated_at`) VALUES
(1, 'Dien Thoai Cam Ung', 'Dien thoai Cam Ung Full Man Hinh ', 1, NULL, NULL),
(2, 'Dien Thoai Cam Ung Man Hinh Gap', 'Dien thoai Cam Ung Man Hinh Gap moi nhat 2020', 1, NULL, NULL),
(3, 'Dien Thoai Nut', 'Dien Thoai Su Dung Bang Ngon Tai', 1, NULL, NULL);

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
  `ma_nha_sx` int(10) UNSIGNED NOT NULL,
  `ten_nha_sx` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_nha_sx` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trang_thai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhasanxuat`
--

INSERT INTO `nhasanxuat` (`ma_nha_sx`, `ten_nha_sx`, `logo_nha_sx`, `trang_thai`, `created_at`, `updated_at`) VALUES
(1, 'Apple', 'logo/nsx', 1, NULL, NULL),
(2, 'SamSung', 'logo/nsx2', 1, NULL, NULL),
(3, 'LG', 'logo/nsx3', 1, NULL, NULL),
(4, 'SamSung', 'logo/nsx4', 1, NULL, NULL),
(5, 'Nokia', 'logo/nsx5', 1, NULL, NULL),
(6, 'Vinsmart', 'logo/nsx6', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `masp` int(10) UNSIGNED NOT NULL,
  `ma_nha_sx` int(10) NOT NULL,
  `ten_sp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mo_ta_sp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia_sp` int(11) NOT NULL,
  `so_luong_ton_kho` int(11) NOT NULL,
  `loai_sp` int(10) NOT NULL,
  `che_do_bao_hanh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trang_thai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`masp`, `ma_nha_sx`, `ten_sp`, `mo_ta_sp`, `gia_sp`, `so_luong_ton_kho`, `loai_sp`, `che_do_bao_hanh`, `trang_thai`, `created_at`, `updated_at`) VALUES
(1, 1, 'iphone3', 'day la dien thoai chat', 10000000, 50, 1, 'tron don', 1, NULL, NULL),
(2, 2, 'galaxy y', 'day la dien thoai mo dau cho ky nguyen smartphone', 50000000, 50, 1, '1ngay', 1, NULL, NULL),
(3, 2, 'galaxy s', 'day la dien thoai mo dau cho ky nguyen smartphone', 3000000, 50, 1, '1ngay', 1, NULL, NULL),
(4, 1, 'iphone4', 'day la dien thoai chat', 3000000, 50, 1, '365ngay', 1, NULL, NULL),
(5, 2, 'galaxy s4', 'day la dien thoai nhanh nhat trai dat', 20000000, 50, 1, '24ngay', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `ten_tai_khoan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mat_khau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ho_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh_dai_dien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trang_thai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tenthongso`
--

CREATE TABLE `tenthongso` (
  `id_thong_so` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_thong_so` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `don_vi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trang_thai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongsosp`
--

CREATE TABLE `thongsosp` (
  `id_thong_so_sp` int(10) UNSIGNED NOT NULL,
  `masp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia_tri` int(11) NOT NULL,
  `trang_thai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `ma_tin_tuc` int(10) UNSIGNED NOT NULL,
  `tieu_de` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nguoi_dang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay_dang` datetime NOT NULL,
  `bai_viet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trang_thai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`ma_binh_luan`);

--
-- Chỉ mục cho bảng `chuongtrinhkhuyenmai`
--
ALTER TABLE `chuongtrinhkhuyenmai`
  ADD PRIMARY KEY (`ma_chuong_trinh_km`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id_gio_hang`);

--
-- Chỉ mục cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD PRIMARY KEY (`ma_hinh_anh`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`ma_hd`);

--
-- Chỉ mục cho bảng `khuyenmaisp`
--
ALTER TABLE `khuyenmaisp`
  ADD PRIMARY KEY (`id_chuong_trinh_km`);

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
  ADD PRIMARY KEY (`ma_nha_sx`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masp`);

--
-- Chỉ mục cho bảng `thongsosp`
--
ALTER TABLE `thongsosp`
  ADD PRIMARY KEY (`id_thong_so_sp`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`ma_tin_tuc`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `ma_binh_luan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chuongtrinhkhuyenmai`
--
ALTER TABLE `chuongtrinhkhuyenmai`
  MODIFY `ma_chuong_trinh_km` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id_gio_hang` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  MODIFY `ma_hinh_anh` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `ma_hd` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `id_loai` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  MODIFY `ma_nha_sx` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `masp` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `thongsosp`
--
ALTER TABLE `thongsosp`
  MODIFY `id_thong_so_sp` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `ma_tin_tuc` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
