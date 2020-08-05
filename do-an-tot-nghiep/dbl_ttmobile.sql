-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 05, 2020 lúc 07:30 AM
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
-- Cơ sở dữ liệu: `dbl_ttmobile`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `id` int(10) UNSIGNED NOT NULL,
  `san_pham_id` int(11) NOT NULL,
  `nguoi_binh_luan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noi_dung_bl` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt_nguoi_bl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trang_thai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`id`, `san_pham_id`, `nguoi_binh_luan`, `noi_dung_bl`, `sdt_nguoi_bl`, `trang_thai`, `created_at`, `updated_at`) VALUES
(1, 8, 'Dr. Madeline Jacobs II', 'Sit quia dolorem voluptatem quod voluptas voluptatem hic omnis.', '012345689', 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(2, 2, 'Prof. Dell Marvin', 'Rerum nobis ipsum quibusdam similique dolores.', '012345689', 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(3, 19, 'Madisyn Renner', 'Dolor nihil necessitatibus ducimus rerum error neque.', '012345689', 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(4, 16, 'Zackery Rempel', 'Iste et neque molestiae temporibus incidunt sed velit.', '012345689', 0, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(5, 18, 'Isabelle Schaefer', 'Ad quia omnis explicabo tempora est in.', '012345689', 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(6, 3, 'Erika Wiza', 'Qui eum in quo facere.', '012345689', 0, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(7, 20, 'Mr. Gus Kihn DDS', 'Eius sint ipsam sunt minima repudiandae.', '012345689', 0, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(8, 11, 'Dr. Nicholas Bayer', 'Esse ut sed corrupti atque.', '012345689', 0, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(9, 17, 'Jevon Cummerata', 'Fuga aut distinctio aut tenetur.', '012345689', 0, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(10, 4, 'Kara Connelly', 'Et aut illum omnis ut sequi.', '012345689', 0, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(11, 20, 'Annette Oberbrunner', 'Sequi alias dolor explicabo animi voluptatibus.', '012345689', 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(12, 4, 'Paul Reichel', 'Et minus aut vel harum ab architecto enim.', '012345689', 0, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(13, 20, 'Valentin Aufderhar Jr.', 'Maiores occaecati hic est dolor.', '012345689', 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(14, 1, 'Vincenzo McLaughlin', 'Et et est sed illum assumenda vitae.', '012345689', 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(15, 1, 'Bill Leuschke', 'Ipsam perferendis dolorem aut esse modi ut ea et.', '012345689', 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(16, 2, 'Dr. Kraig Carter II', 'Eum ut dolorum omnis et qui corporis laudantium.', '012345689', 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(17, 20, 'Stacy Kuvalis I', 'Et maxime autem consequuntur ex praesentium et dolor.', '012345689', 0, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(18, 13, 'Vickie Gulgowski', 'Iusto eos qui enim qui totam earum.', '012345689', 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(19, 11, 'Prof. Kenneth Leannon', 'Rerum a tenetur distinctio omnis.', '012345689', 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(20, 12, 'Veda Denesik', 'Consequatur impedit magnam dolorem asperiores adipisci non.', '012345689', 0, '2020-08-04 20:39:58', '2020-08-04 20:39:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_don_hang`
--

CREATE TABLE `chi_tiet_don_hang` (
  `don_hang_id` int(11) NOT NULL,
  `san_pham_id` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `don_gia` int(11) NOT NULL,
  `trang_thai` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chi_tiet_don_hang`
--

INSERT INTO `chi_tiet_don_hang` (`don_hang_id`, `san_pham_id`, `so_luong`, `don_gia`, `trang_thai`, `created_at`, `updated_at`) VALUES
(303, 2, 2, 519, 3, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(219, 2, 1, 6831, 3, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(112, 6, 2, 2578, 3, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(244, 18, 2, 2499, 2, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(125, 20, 1, 4407, 3, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(455, 5, 2, 8764, 3, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(264, 16, 1, 836, 3, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(412, 12, 2, 5598, 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(380, 7, 1, 6387, 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(488, 11, 1, 8362, 3, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(303, 2, 2, 519, 3, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(219, 2, 1, 6831, 3, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(112, 6, 2, 2578, 3, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(244, 18, 2, 2499, 2, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(125, 20, 1, 4407, 3, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(455, 5, 2, 8764, 3, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(264, 16, 1, 836, 3, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(412, 12, 2, 5598, 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(380, 7, 1, 6387, 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(488, 11, 1, 8362, 3, '2020-08-04 20:39:58', '2020-08-04 20:39:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_thong_so`
--

CREATE TABLE `chi_tiet_thong_so` (
  `id` int(10) UNSIGNED NOT NULL,
  `san_pham_id` int(11) NOT NULL,
  `thong_so_id` int(11) NOT NULL,
  `gia_tri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trang_thai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuong_trinh_khuyen_mai`
--

CREATE TABLE `chuong_trinh_khuyen_mai` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_chuong_trinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgian_batdau` datetime NOT NULL,
  `tgian_ketthuc` datetime NOT NULL,
  `gia_tri_km` int(11) NOT NULL,
  `loai_gia_tri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `toi_da` int(11) NOT NULL,
  `trang_thai` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don_hang`
--

CREATE TABLE `don_hang` (
  `id` int(10) UNSIGNED NOT NULL,
  `khach_hang_id` int(11) NOT NULL,
  `tong_tien` int(11) NOT NULL,
  `ghi_chu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh_thuc_thanh_toan` int(11) NOT NULL,
  `trang_thai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `don_hang`
--

INSERT INTO `don_hang` (`id`, `khach_hang_id`, `tong_tien`, `ghi_chu`, `hinh_thuc_thanh_toan`, `trang_thai`, `created_at`, `updated_at`) VALUES
(1, 1, 238218, 'Qui autem totam quam sint ratione et.', 0, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(2, 10, 128690, 'Ex recusandae id illo velit voluptas.', 0, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(3, 10, 429949, 'Aliquam facere aliquid officiis reiciendis.', 1, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(4, 2, 670947, 'Quas ipsam velit et officia.', 1, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(5, 3, 295278, 'Repellat dolorem aut ex eum minima perspiciatis sunt expedita.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(6, 10, 351530, 'Dignissimos ut cum dolores commodi labore est sint.', 1, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(7, 8, 995987, 'Perspiciatis est rerum enim consequuntur perspiciatis quisquam.', 0, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(8, 3, 348329, 'Ut qui vero quos impedit.', 1, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(9, 1, 881106, 'Debitis illum voluptatum rerum voluptas eligendi autem doloremque autem.', 1, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(10, 9, 17901, 'Ullam natus est est repudiandae.', 0, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(11, 6, 276103, 'Dolor nihil iusto molestias.', 1, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(12, 8, 530282, 'Blanditiis dolorem recusandae porro debitis et.', 1, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(13, 5, 535536, 'Eum qui esse rerum minima sint.', 1, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(14, 1, 883148, 'Suscipit sit ducimus ducimus officia qui.', 1, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(15, 10, 919121, 'Inventore qui velit aut et minus et.', 1, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(16, 2, 220242, 'Dolore repellat dolores et perferendis voluptas quibusdam.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(17, 3, 867583, 'Dolor ut autem quo assumenda consequatur eligendi.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(18, 7, 579869, 'Optio eius vitae exercitationem iusto facilis.', 1, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(19, 10, 961474, 'Esse consectetur non cum.', 0, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(20, 9, 663998, 'Quis et sed ad debitis hic numquam.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gio_hang`
--

CREATE TABLE `gio_hang` (
  `id` int(10) UNSIGNED NOT NULL,
  `nguoi_mua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `san_pham_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `so_luong` int(11) NOT NULL,
  `trang_thai` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinh_anh_san_pham`
--

CREATE TABLE `hinh_anh_san_pham` (
  `id` int(10) UNSIGNED NOT NULL,
  `san_pham_id` int(11) NOT NULL,
  `duong_dan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trang_thai` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_khach_hang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trang_thai` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`id`, `ten_khach_hang`, `dia_chi`, `sdt`, `email`, `trang_thai`, `created_at`, `updated_at`) VALUES
(1, 'Rachael Mayer', 'Quia praesentium quia sit.', '0123456789', 'abcdedd@gmail.com', 0, '2020-08-04 20:39:56', '2020-08-04 20:39:56'),
(2, 'Filiberto Russel', 'Sed voluptates aut inventore modi ut ea suscipit.', '0123456789', 'abcdedd@gmail.com', 1, '2020-08-04 20:39:56', '2020-08-04 20:39:56'),
(3, 'Miss Belle Morissette MD', 'Et est et illo rerum repudiandae distinctio.', '0123456789', 'abcdedd@gmail.com', 0, '2020-08-04 20:39:56', '2020-08-04 20:39:56'),
(4, 'Prof. Ivah Renner', 'Voluptas nesciunt et deserunt sed aut autem enim.', '0123456789', 'abcdedd@gmail.com', 1, '2020-08-04 20:39:56', '2020-08-04 20:39:56'),
(5, 'Prof. Sherman Monahan', 'Rerum aut velit error quo dolorum neque consequatur.', '0123456789', 'abcdedd@gmail.com', 1, '2020-08-04 20:39:56', '2020-08-04 20:39:56'),
(6, 'Elvis Tillman', 'Enim aut accusamus ex ex.', '0123456789', 'abcdedd@gmail.com', 1, '2020-08-04 20:39:56', '2020-08-04 20:39:56'),
(7, 'Jayda Larkin', 'Nulla consequatur non minima.', '0123456789', 'abcdedd@gmail.com', 1, '2020-08-04 20:39:56', '2020-08-04 20:39:56'),
(8, 'Josefina Satterfield', 'Qui quaerat iste dolorum velit iste recusandae.', '0123456789', 'abcdedd@gmail.com', 0, '2020-08-04 20:39:56', '2020-08-04 20:39:56'),
(9, 'Kianna Tromp', 'Officiis nobis et earum sint.', '0123456789', 'abcdedd@gmail.com', 1, '2020-08-04 20:39:56', '2020-08-04 20:39:56'),
(10, 'Prof. Stewart Bergnaum DDS', 'Dolorem odit et tempora aspernatur ducimus aut.', '0123456789', 'abcdedd@gmail.com', 0, '2020-08-04 20:39:56', '2020-08-04 20:39:56');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyen_mai_san_pham`
--

CREATE TABLE `khuyen_mai_san_pham` (
  `id` int(10) UNSIGNED NOT NULL,
  `chuong_trinh_khuyen_mai_id` int(11) NOT NULL,
  `san_pham_id` int(11) NOT NULL,
  `trang_thai` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_san_pham`
--

CREATE TABLE `loai_san_pham` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_loai_sp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghi_chu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trang_thai` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_san_pham`
--

INSERT INTO `loai_san_pham` (`id`, `ten_loai_sp`, `ghi_chu`, `trang_thai`, `created_at`, `updated_at`) VALUES
(1, 'Điện thoại cảm ứng', 'Không', 1, '2020-08-04 20:52:57', '2020-08-04 20:52:57'),
(2, 'Điện Thoại màn hình gập', 'Không', 1, '2020-08-04 20:52:57', '2020-08-04 20:52:57'),
(3, 'Điện Thoại phổ thông', 'Không', 1, '2020-08-04 20:52:57', '2020-08-04 20:52:57');

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
(2, '2020_07_01_103554_create_gio_hangs_table', 1),
(3, '2020_07_01_103608_create_binh_luans_table', 1),
(4, '2020_07_01_103623_create_chuong_trinh_khuyen_mais_table', 1),
(5, '2020_07_01_103652_create_san_phams_table', 1),
(6, '2020_07_01_103704_create_khuyen_mai_s_p_s_table', 1),
(7, '2020_07_01_103717_create_loai_s_p_s_table', 1),
(8, '2020_07_01_103745_create_ten_thong_so_san_phams_table', 1),
(9, '2020_07_01_103759_create_nha_san_xuats_table', 1),
(10, '2020_07_01_103816_create_hinh_anh_s_p_s_table', 1),
(11, '2020_07_01_103829_create_thong_sos_table', 1),
(12, '2020_07_24_071239_create_khach_hangs_table', 1),
(13, '2020_07_24_071934_create_don_hangs_table', 1),
(14, '2020_07_24_071955_create_chi_tiet_don_hangs_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nha_san_xuat`
--

CREATE TABLE `nha_san_xuat` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_nha_sx` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghi_chu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trang_thai` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nha_san_xuat`
--

INSERT INTO `nha_san_xuat` (`id`, `ten_nha_sx`, `ghi_chu`, `trang_thai`, `created_at`, `updated_at`) VALUES
(1, 'Iphone', 'Không có', 1, '2020-08-04 20:39:56', '2020-08-04 20:39:56'),
(2, 'Samsung', 'Không có', 1, '2020-08-04 20:39:56', '2020-08-04 20:39:56'),
(3, 'Oppo', 'Không có', 1, '2020-08-04 20:39:56', '2020-08-04 20:45:06'),
(4, 'Xiaomi', 'Không có', 1, '2020-08-04 20:39:56', '2020-08-04 20:45:14'),
(5, 'Vsmart', 'Không có', 1, '2020-08-04 20:39:56', '2020-08-04 20:39:56'),
(6, 'Nokia', 'Không có', 1, '2020-08-04 20:39:56', '2020-08-04 20:45:22'),
(7, 'HuaWei', 'Không có', 1, '2020-08-04 20:39:56', '2020-08-04 20:45:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `id` int(10) UNSIGNED NOT NULL,
  `nha_san_xuat_id` int(11) NOT NULL,
  `ten_sp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mo_ta_sp` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia_sp` int(11) NOT NULL,
  `gia_khuyen_mai` int(11) NOT NULL,
  `so_luong_ton_kho` int(11) NOT NULL,
  `loai_san_pham_id` int(11) NOT NULL,
  `che_do_bao_hanh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trang_thai` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`id`, `nha_san_xuat_id`, `ten_sp`, `mo_ta_sp`, `gia_sp`, `gia_khuyen_mai`, `so_luong_ton_kho`, `loai_san_pham_id`, `che_do_bao_hanh`, `trang_thai`, `created_at`, `updated_at`) VALUES
(1, 1, 'iphone 7 32G', 'Chiếc điện thoại sở hữu camera kép đầu tiên của Apple\r\niPhone 7 Plus', 8490000, 7490000, 98, 1, '365 ngày', 1, '2020-08-04 20:39:56', '2020-08-04 20:39:56'),
(2, 1, 'iphone 7plus 32G', 'Explicabo voluptatum consequuntur tempore vitae tempora sunt libero.', 11490000, 10490000, 59, 1, '365 ngày', 1, '2020-08-04 20:39:56', '2020-08-04 20:39:56'),
(3, 1, 'iphone 8plus 64G', 'Nobis corrupti libero voluptas deleniti qui quasi.', 14990000, 13990000, 70, 1, '365 ngày', 1, '2020-08-04 20:39:56', '2020-08-04 20:39:56'),
(4, 1, 'iphone 11 64G', 'Perspiciatis voluptate voluptatem saepe aut vel.', 21990000, 20990000, 100, 1, '365 ngày', 1, '2020-08-04 20:39:56', '2020-08-04 20:39:56'),
(5, 1, 'iphone 11 promax 64G', 'Eius quas autem ea consequatur nam aut accusantium molestias.', 33990000, 30990000, 66, 1, '365 ngày', 1, '2020-08-04 20:39:56', '2020-08-04 20:39:56'),
(6, 2, 'Samsung galaxy note 10 plus', 'Error ut est aut ut non.', 26990000, 17990000, 15, 1, '365 ngày', 1, '2020-08-04 20:39:56', '2020-08-04 20:39:56'),
(7, 2, 'Samsung galaxy a51', 'Tenetur sed commodi occaecati.', 7990000, 7490000, 13, 1, '365 ngày', 1, '2020-08-04 20:39:56', '2020-08-04 20:39:56'),
(8, 2, 'Samsung galaxy a71', 'Maiores libero ad et.', 10490000, 8990000, 14, 1, '365 ngày', 1, '2020-08-04 20:39:56', '2020-08-04 20:39:56'),
(9, 2, 'Samsung galaxy z Flip', 'Et adipisci facere a illum.', 36000000, 35000000, 73, 2, '365 ngày', 1, '2020-08-04 20:39:56', '2020-08-04 20:39:56'),
(10, 2, 'Samsung galaxy s20', 'Nisi quas consequatur recusandae eveniet.', 21490000, 20490000, 88, 1, '365 ngày', 1, '2020-08-04 20:39:56', '2020-08-04 20:39:56'),
(11, 3, 'Oppo reno 3', 'Ut sed omnis ipsum error sed ab quo.', 8990000, 7490000, 48, 1, '365 ngày', 1, '2020-08-04 20:39:56', '2020-08-04 20:39:56'),
(12, 3, 'Oppo a52', 'Quos eius eveniet commodi iusto fuga esse corrupti enim.', 5990000, 0, 54, 1, '365 ngày', 1, '2020-08-04 20:39:56', '2020-08-04 20:39:56'),
(13, 3, 'Oppo find x2', 'Magnam soluta est nam esse.', 23000000, 21000000, 86, 1, '365 ngày', 1, '2020-08-04 20:39:56', '2020-08-04 20:39:56'),
(14, 3, 'Oppo A9(2020)', 'Voluptatem consequatur quas et laborum veniam.', 6990000, 5990000, 71, 1, '365 ngày', 1, '2020-08-04 20:39:56', '2020-08-04 20:39:56'),
(15, 3, 'Oppo A5(2020)', 'Fugiat dolore hic qui nihil qui.', 4490000, 0, 36, 1, '365 ngày', 1, '2020-08-04 20:39:56', '2020-08-04 20:39:56'),
(16, 4, 'Xiaomi redmi note 8 pro(6G/128G)', 'Dolor delectus voluptates labore delectus error autem libero.', 5990000, 0, 62, 1, '365 ngày', 1, '2020-08-04 20:39:56', '2020-08-04 20:39:56'),
(17, 4, 'Xiaomi redmi note 9 pro(6G/128G)', 'Corrupti voluptas est possimus quia ut aliquam.', 6990000, 0, 10, 1, '365 ngày', 1, '2020-08-04 20:39:56', '2020-08-04 20:39:56'),
(18, 4, 'Xiaomi redmi note 7(4G/64G)', 'Possimus fuga repudiandae iusto saepe.', 4990000, 4490000, 86, 1, '365 ngày', 1, '2020-08-04 20:39:56', '2020-08-04 20:39:56'),
(19, 4, 'Xiaomi mi A3', 'Cupiditate qui hic corrupti molestiae aut consectetur.', 4490000, 4000000, 96, 1, '365 ngày', 1, '2020-08-04 20:39:56', '2020-08-04 20:39:56'),
(20, 4, 'Xiaomi redmi note 10 lite', 'Non rem aut consequatur vitae consequatur a laborum sit.', 9990000, 0, 41, 1, '365 ngày', 1, '2020-08-04 20:39:56', '2020-08-04 20:39:56'),
(21, 5, 'Vsmart Active 3 (6GB/64GB)', 'Enim iure voluptatum aut ut.', 3990000, 0, 21, 1, '365 ngày', 1, '2020-08-04 21:14:22', '2020-08-04 21:14:22'),
(22, 5, 'Vsmart Joy 3 (4GB/64GB)', 'Ut exercitationem ea vero nulla sunt nobis.', 3290000, 0, 85, 1, '365 ngày', 1, '2020-08-04 21:14:22', '2020-08-04 21:14:22'),
(23, 5, 'Vsmart Start 3 (3GB/32GB)', 'Qui est libero sunt inventore rem ut.', 1990000, 0, 46, 1, '365 ngày', 1, '2020-08-04 21:14:22', '2020-08-04 21:14:22'),
(24, 5, 'Vsmart Bee 3', 'Possimus necessitatibus quia provident quis minus aut.', 1590000, 0, 39, 1, '365 ngày', 1, '2020-08-04 21:14:22', '2020-08-04 21:14:22'),
(25, 5, 'Vsmart Bee', 'Nostrum voluptas explicabo velit dolor et id odio.', 990000, 0, 28, 1, '365 ngày', 1, '2020-08-04 21:14:22', '2020-08-04 21:14:22'),
(26, 6, 'Nokia 5.1 plus', 'In deleniti qui quam laborum eos.', 2300000, 2000000, 27, 1, '365 ngày', 1, '2020-08-04 21:14:22', '2020-08-04 21:14:22'),
(27, 6, 'Nokia 2.3', 'Eum ullam delectus amet vel vitae.', 1990000, 0, 41, 1, '365 ngày', 1, '2020-08-04 21:14:22', '2020-08-04 21:14:22'),
(28, 6, 'Nokia 6.1', 'Cumque consequatur aut impedit maxime corporis odio laudantium.', 4990000, 4490000, 42, 1, '365 ngày', 1, '2020-08-04 21:14:22', '2020-08-04 21:14:22'),
(29, 6, 'Nokia 7.2', 'Sed et placeat doloribus beatae ducimus itaque.', 6990000, 6490000, 62, 1, '365 ngày', 1, '2020-08-04 21:14:22', '2020-08-04 21:14:22'),
(30, 6, 'Nokia 5.3', 'Est qui est consequatur alias laborum voluptas.', 3990000, 3490000, 95, 1, '365 ngày', 1, '2020-08-04 21:14:22', '2020-08-04 21:14:22'),
(31, 6, 'nokia 150(2020)', 'Provident porro voluptates sed aut commodi.', 650000, 0, 11, 3, '365 ngày', 1, '2020-08-04 21:14:22', '2020-08-04 21:14:22'),
(32, 6, 'Nokia 230', 'Perspiciatis nihil nisi quis fuga.', 1250000, 0, 51, 3, '365 ngày', 1, '2020-08-04 21:14:22', '2020-08-04 21:14:22'),
(33, 6, 'Nokia 210', 'Aut deserunt libero nostrum sit voluptas facilis.', 790000, 0, 50, 3, '365 ngày', 1, '2020-08-04 21:14:22', '2020-08-04 21:14:22'),
(34, 6, 'Nokia 110(2019)', 'At illo sit exercitationem quo totam.', 480000, 0, 33, 3, '365 ngày', 1, '2020-08-04 21:14:22', '2020-08-04 21:14:22'),
(35, 6, 'Nokia 105 (2019)', 'Aut non commodi atque aut dolorem voluptas porro.', 360000, 0, 85, 3, '365 ngày', 1, '2020-08-04 21:14:22', '2020-08-04 21:14:22'),
(36, 7, 'Huawei P40 Pro', 'Odit molestiae quisquam quo est.', 23990000, 21990000, 76, 1, '365 ngày', 1, '2020-08-04 21:14:22', '2020-08-04 21:14:22'),
(37, 7, 'Huawei Nova 5T', 'Dolor nostrum eveniet aspernatur ullam facere.', 8990000, 0, 63, 1, '365 ngày', 1, '2020-08-04 21:14:22', '2020-08-04 21:14:22'),
(38, 7, 'Huawei Nova 7i', 'Occaecati illo quisquam doloribus suscipit aliquid.', 6990000, 0, 17, 1, 'Dr. Delmer Farrell', 1, '2020-08-04 21:14:22', '2020-08-04 21:14:22'),
(39, 7, 'Huawei p30 lite', 'Consequuntur quo laboriosam repudiandae est possimus delectus.', 5490000, 4990000, 34, 1, 'Loy Towne', 1, '2020-08-04 21:14:22', '2020-08-04 21:14:22'),
(40, 7, 'Huawei Mate X Màn Hình Gập', 'Hic voluptatum et pariatur harum dolor hic consectetur.', 60000000, 59990000, 42, 2, 'Miss Chelsea O\'Conner Sr.', 1, '2020-08-04 21:14:22', '2020-08-04 21:14:22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tai_khoan`
--

CREATE TABLE `tai_khoan` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_tai_khoan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mat_khau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ho_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh_dai_dien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trang_thai` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tai_khoan`
--

INSERT INTO `tai_khoan` (`id`, `ten_tai_khoan`, `mat_khau`, `sdt`, `email`, `dia_chi`, `ho_ten`, `anh_dai_dien`, `trang_thai`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$WPgFLaXOXsokAqSprA68Ze4fwlgNvY58PkGCvi3qrA7EWu0NJzQP2', '123456', 'anhtuaaa', 'aaaa', 'admin', '', 1, '2020-08-04 20:36:34', '2020-08-04 20:36:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thong_so`
--

CREATE TABLE `thong_so` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_thong_so` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `don_vi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trang_thai` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thong_so`
--

INSERT INTO `thong_so` (`id`, `ten_thong_so`, `don_vi`, `trang_thai`, `created_at`, `updated_at`) VALUES
(1, 'RAM', 'GB', 1, '2020-08-04 20:35:56', '2020-08-04 20:35:56'),
(2, 'Màn hình', 'cái', 1, '2020-08-04 20:35:56', '2020-08-04 20:35:56'),
(3, 'ROM', 'GB', 1, '2020-08-04 20:35:56', '2020-08-04 20:35:56'),
(4, 'Camera trước', 'MB', 1, '2020-08-04 20:35:56', '2020-08-04 20:35:56'),
(5, 'Camera sau', 'MB', 1, '2020-08-04 20:35:56', '2020-08-04 20:35:56'),
(6, 'CPU-Hệ điều hành', 'Ghz', 1, '2020-08-04 20:35:56', '2020-08-04 20:35:56'),
(7, 'Trọng lượng', 'gam', 1, '2020-08-04 20:35:56', '2020-08-04 20:35:56'),
(8, 'PIN', 'mAh', 1, '2020-08-04 20:35:56', '2020-08-04 20:35:56'),
(9, 'RAM', 'GB', 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chi_tiet_thong_so`
--
ALTER TABLE `chi_tiet_thong_so`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chuong_trinh_khuyen_mai`
--
ALTER TABLE `chuong_trinh_khuyen_mai`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hinh_anh_san_pham`
--
ALTER TABLE `hinh_anh_san_pham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khuyen_mai_san_pham`
--
ALTER TABLE `khuyen_mai_san_pham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loai_san_pham`
--
ALTER TABLE `loai_san_pham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nha_san_xuat`
--
ALTER TABLE `nha_san_xuat`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thong_so`
--
ALTER TABLE `thong_so`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `chi_tiet_thong_so`
--
ALTER TABLE `chi_tiet_thong_so`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chuong_trinh_khuyen_mai`
--
ALTER TABLE `chuong_trinh_khuyen_mai`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=501;

--
-- AUTO_INCREMENT cho bảng `gio_hang`
--
ALTER TABLE `gio_hang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hinh_anh_san_pham`
--
ALTER TABLE `hinh_anh_san_pham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `khuyen_mai_san_pham`
--
ALTER TABLE `khuyen_mai_san_pham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loai_san_pham`
--
ALTER TABLE `loai_san_pham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `nha_san_xuat`
--
ALTER TABLE `nha_san_xuat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `thong_so`
--
ALTER TABLE `thong_so`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
