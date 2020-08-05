-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 05, 2020 lúc 07:10 AM
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
(20, 9, 663998, 'Quis et sed ad debitis hic numquam.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(21, 10, 248088, 'Adipisci voluptatem aspernatur nobis.', 0, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(22, 3, 562507, 'Animi et voluptatem quis ipsam iure harum sed atque.', 1, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(23, 4, 901590, 'Incidunt facere facilis est et ipsum sunt.', 0, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(24, 4, 652159, 'Possimus laudantium exercitationem modi fugit quia esse similique.', 1, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(25, 9, 183218, 'Laboriosam qui commodi reprehenderit exercitationem exercitationem labore minus.', 0, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(26, 8, 715120, 'Sunt sunt laudantium qui repudiandae.', 1, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(27, 5, 530041, 'Deserunt error voluptatem sed facere reprehenderit ducimus quia accusamus.', 0, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(28, 1, 506470, 'Aspernatur rerum itaque ipsam sed voluptatibus asperiores.', 1, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(29, 1, 475031, 'Ut dicta repellendus repellendus ipsum.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(30, 3, 679176, 'Et mollitia aut ea.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(31, 6, 353822, 'Dolorem et voluptates quod earum fuga debitis dolor.', 1, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(32, 2, 936179, 'Ratione corrupti occaecati modi et.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(33, 2, 681291, 'Quae blanditiis aut laborum ea aperiam enim amet non.', 1, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(34, 8, 131150, 'Error labore culpa saepe nesciunt sit.', 0, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(35, 8, 314550, 'Soluta velit et minima maxime sed explicabo.', 1, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(36, 8, 380734, 'Enim voluptate illum minus similique fugiat aliquam aperiam odio.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(37, 9, 279253, 'Occaecati adipisci corporis doloremque sed suscipit culpa modi.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(38, 3, 417008, 'Ratione assumenda animi rerum harum nesciunt quam sint id.', 1, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(39, 8, 260549, 'Ullam tempore delectus occaecati ipsum alias hic laborum.', 1, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(40, 3, 281484, 'Officiis sit nesciunt tenetur quos ipsam a modi.', 1, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(41, 2, 510576, 'Voluptatem rerum sint aut voluptatem illum.', 1, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(42, 4, 873941, 'Quo sunt molestias quia dolore.', 1, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(43, 8, 169225, 'Nihil vel ut laboriosam et recusandae libero sit.', 0, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(44, 9, 131428, 'Laudantium necessitatibus culpa laudantium sit omnis.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(45, 1, 487178, 'Qui itaque nihil sed quae consequatur eos.', 1, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(46, 7, 395091, 'Et est voluptatum nostrum temporibus voluptatem nemo eos.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(47, 5, 548447, 'Laboriosam assumenda iusto ratione quae qui enim.', 1, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(48, 3, 156467, 'Voluptates sint nesciunt ea sit voluptates consequatur.', 1, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(49, 1, 37327, 'Molestiae et at est quas accusamus quisquam.', 0, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(50, 2, 642580, 'Ea itaque labore autem.', 1, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(51, 6, 462857, 'Accusamus aut quibusdam excepturi totam facere.', 1, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(52, 5, 277327, 'Cum quam dolorem sit.', 1, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(53, 6, 492126, 'Odio aut quos doloremque et praesentium.', 1, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(54, 3, 595409, 'Repellendus dolorum est dolores.', 1, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(55, 7, 477873, 'Aspernatur quo quod et consequatur et.', 1, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(56, 3, 875085, 'Sit vitae est deserunt consequatur doloremque iure.', 0, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(57, 1, 457528, 'Quia aspernatur maxime earum nesciunt fugit assumenda qui.', 0, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(58, 4, 251382, 'Dignissimos magnam esse perferendis nisi quo qui.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(59, 9, 594635, 'Est quod quia eos excepturi ea dolorem rerum necessitatibus.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(60, 6, 482843, 'Aut similique voluptatum sapiente velit labore impedit doloremque.', 1, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(61, 7, 180342, 'Hic autem incidunt sed blanditiis dolor aut.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(62, 1, 828392, 'Iusto voluptas aut vel soluta sint officiis facilis.', 0, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(63, 6, 506833, 'Exercitationem quia pariatur aut sed.', 1, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(64, 3, 263824, 'Aperiam ipsa doloremque voluptatum quaerat.', 1, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(65, 6, 830147, 'Qui nisi et et et rerum facere.', 1, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(66, 6, 260753, 'Doloribus dicta est explicabo provident.', 0, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(67, 7, 341394, 'Accusantium ut vel dolores eaque dignissimos repellendus quisquam.', 0, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(68, 7, 602708, 'Ullam nesciunt tenetur eos ut.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(69, 10, 998257, 'Voluptas vel omnis non labore.', 0, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(70, 10, 922473, 'Iure nulla tenetur sed beatae et animi enim.', 1, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(71, 2, 82180, 'Deleniti eum laboriosam quia nostrum non.', 0, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(72, 5, 539947, 'Ut in inventore vel veniam tenetur quo nesciunt.', 1, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(73, 7, 310060, 'Velit suscipit quia et ducimus.', 0, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(74, 8, 181064, 'Doloribus ut eum dolore officiis at.', 1, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(75, 2, 236231, 'Est ut et quo doloremque vitae.', 1, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(76, 10, 923832, 'Illum veniam reprehenderit aliquam porro illo eos.', 1, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(77, 1, 255941, 'Numquam omnis expedita occaecati tenetur.', 1, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(78, 6, 938096, 'Laborum sed doloremque est et fugit quibusdam.', 1, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(79, 8, 808512, 'Dolorem molestias eum veniam aspernatur.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(80, 2, 312046, 'Blanditiis aut ducimus sit sit.', 0, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(81, 4, 828672, 'Voluptatibus ut voluptatem velit.', 1, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(82, 9, 67556, 'Beatae consequuntur incidunt et pariatur.', 0, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(83, 10, 456401, 'Ea et ad labore aliquam.', 1, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(84, 3, 306079, 'Qui sint quam nesciunt quia aperiam est odit.', 1, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(85, 3, 78109, 'Suscipit dicta est ut ut nihil illo.', 0, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(86, 9, 675255, 'Architecto aut aperiam ipsam voluptatem sed impedit minima qui.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(87, 1, 581596, 'Labore dolor rerum molestias ducimus fugit perferendis.', 1, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(88, 2, 348206, 'Placeat aut sunt sint consequatur totam veniam modi.', 0, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(89, 6, 586689, 'Perspiciatis corporis numquam cum.', 0, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(90, 1, 848200, 'Et earum culpa rerum earum provident vel architecto.', 0, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(91, 10, 325222, 'Quis qui sequi blanditiis voluptas quae.', 1, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(92, 7, 740069, 'Quam numquam ad tenetur quis distinctio molestiae a.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(93, 3, 295674, 'Quaerat magni facere tempore et quibusdam ea.', 0, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(94, 9, 747216, 'Atque harum dolores quo assumenda exercitationem.', 0, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(95, 5, 452779, 'Blanditiis qui minima repellat ut et.', 1, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(96, 1, 984451, 'Sequi quia molestiae quia illo consequatur dolorem quia.', 1, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(97, 10, 301113, 'Rerum sapiente voluptas voluptas reprehenderit.', 1, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(98, 4, 333752, 'Necessitatibus dolor vero molestiae neque unde.', 0, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(99, 6, 829224, 'Aut asperiores quis magnam nam dignissimos similique hic.', 0, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(100, 4, 860298, 'Amet qui aut reprehenderit sed quo voluptatem sed.', 1, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(101, 5, 160777, 'Architecto doloribus veritatis dolorem delectus culpa.', 1, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(102, 1, 82710, 'Dolorum qui hic hic distinctio ab sit doloribus.', 1, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(103, 4, 637238, 'Cum sed qui sapiente et eius deleniti.', 1, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(104, 3, 146854, 'Et distinctio fugiat dicta nostrum animi et rerum amet.', 1, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(105, 4, 496978, 'Vel placeat dolorum aperiam corrupti minus nobis.', 0, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(106, 5, 211934, 'Totam officia quae sit libero blanditiis earum voluptatem.', 0, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(107, 7, 865320, 'Libero modi alias adipisci facere aut ab.', 1, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(108, 5, 882186, 'Eaque animi fugiat quaerat ad.', 1, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(109, 3, 521998, 'Consectetur eum vero laudantium dignissimos.', 0, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(110, 4, 207342, 'Dignissimos beatae officia tempora illum laboriosam quibusdam commodi nam.', 0, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(111, 9, 630203, 'Et necessitatibus non nobis ullam.', 0, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(112, 5, 979665, 'Quaerat ducimus sed aliquid voluptas.', 0, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(113, 6, 394073, 'Eveniet numquam et consequuntur.', 1, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(114, 5, 865693, 'Doloremque cumque nesciunt laborum aliquam ipsam sunt.', 0, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(115, 3, 565317, 'Dolor saepe soluta labore reiciendis.', 0, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(116, 1, 285701, 'Enim et aliquam culpa sint commodi fuga.', 1, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(117, 7, 452964, 'Pariatur et occaecati sapiente quo error in quasi.', 0, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(118, 9, 568781, 'Eveniet perspiciatis est illo dolor iusto fugit qui.', 1, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(119, 7, 17745, 'Placeat quidem quia autem fugit omnis nisi.', 0, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(120, 3, 993148, 'Autem et cumque nobis eveniet id.', 1, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(121, 1, 453497, 'Iure ea rerum quo et sunt vel.', 0, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(122, 6, 634256, 'Voluptatibus non delectus repudiandae veniam explicabo provident a.', 0, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(123, 1, 555454, 'Est ut libero ducimus nihil est cum.', 0, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(124, 9, 544428, 'Dolores quae sint voluptatum tempore.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(125, 3, 143288, 'Aut voluptas animi quae animi.', 1, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(126, 9, 84890, 'Odio dignissimos velit aliquam eveniet veniam.', 0, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(127, 8, 670331, 'Nemo assumenda tempora et.', 0, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(128, 2, 258261, 'Corporis sit sunt sit voluptatem sunt.', 1, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(129, 10, 616938, 'Consequatur optio animi corrupti temporibus fugiat sit accusantium consectetur.', 0, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(130, 9, 231750, 'Minus repellat deleniti optio eum optio numquam.', 0, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(131, 9, 530493, 'Et doloremque itaque sint ut veniam soluta.', 1, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(132, 8, 155028, 'Occaecati quos earum sed qui incidunt et.', 0, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(133, 7, 679800, 'Qui corrupti consequuntur dolorum.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(134, 5, 951911, 'Eius molestias et porro vel voluptatem doloremque distinctio accusamus.', 0, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(135, 2, 407242, 'Assumenda autem in nihil quos itaque.', 1, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(136, 3, 972492, 'Ea eum quas libero harum.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(137, 3, 415927, 'Omnis explicabo ut voluptate ipsa natus impedit blanditiis.', 1, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(138, 2, 149634, 'Fugit velit pariatur sint alias aliquid tempora dolorem.', 1, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(139, 1, 194974, 'Minima voluptatibus ipsa voluptates perspiciatis ipsa aut.', 0, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(140, 8, 336794, 'Necessitatibus ex repudiandae voluptatem qui dolorem dolore et.', 1, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(141, 8, 108785, 'Enim sequi officia quidem molestiae qui aut maiores.', 1, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(142, 1, 726432, 'Alias debitis atque qui tempore unde et.', 0, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(143, 5, 490246, 'Eaque odit veritatis sunt alias qui laboriosam mollitia.', 1, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(144, 7, 416194, 'Blanditiis sit aut earum repellendus.', 1, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(145, 10, 147635, 'Dolore qui earum voluptatem quo.', 0, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(146, 10, 974709, 'At veniam voluptatem non et suscipit earum corporis.', 0, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(147, 9, 925407, 'Est magnam quo aut quis aut.', 0, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(148, 10, 150551, 'Occaecati consequuntur consequatur enim.', 1, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(149, 1, 402953, 'Perferendis natus voluptate recusandae rerum quam ut nostrum ullam.', 0, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(150, 8, 611704, 'Aliquam error qui molestiae non adipisci ut.', 1, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(151, 8, 805537, 'Cum porro consequatur nam suscipit culpa.', 1, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(152, 8, 931732, 'Illo iste itaque et sint.', 1, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(153, 6, 35907, 'Quasi ipsa possimus veniam natus.', 0, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(154, 10, 579923, 'Velit voluptatum molestiae vel amet possimus voluptas doloribus.', 0, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(155, 10, 898041, 'Omnis dicta dolor ut ullam distinctio qui.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(156, 3, 627400, 'Blanditiis laborum aliquam fugiat nulla consequatur illo.', 0, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(157, 1, 122387, 'Qui possimus totam qui molestias harum aut incidunt expedita.', 1, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(158, 6, 531406, 'Dolor tenetur inventore porro quia.', 1, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(159, 1, 678632, 'Corporis error labore consequatur quaerat dignissimos neque error.', 1, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(160, 1, 661265, 'Facilis autem sunt dolorem enim accusantium.', 0, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(161, 7, 656329, 'Quas sed sit consequatur et.', 0, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(162, 1, 15283, 'Cupiditate eius laudantium commodi quaerat iusto reiciendis autem est.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(163, 2, 87647, 'Debitis vero eius officiis molestias nesciunt.', 1, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(164, 7, 476525, 'Magni expedita quibusdam sed porro eaque.', 0, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(165, 4, 468461, 'Consequatur expedita voluptatum optio quasi incidunt non.', 0, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(166, 5, 723982, 'Asperiores eaque qui eveniet.', 1, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(167, 10, 235334, 'Dolorum facilis earum ducimus.', 0, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(168, 6, 222797, 'Vel ut voluptate quae omnis tenetur est et.', 1, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(169, 7, 844793, 'Aut ipsa expedita vel non corporis amet quo.', 1, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(170, 8, 364387, 'Et error harum sed iusto.', 1, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(171, 1, 654931, 'Eum adipisci quas sequi aut quos et id voluptas.', 1, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(172, 9, 563061, 'Quidem dolor quam sunt praesentium.', 1, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(173, 1, 979426, 'Modi et rem et officia molestiae sapiente eaque.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(174, 9, 637322, 'Fugiat qui iusto maxime molestiae aut rerum ullam architecto.', 0, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(175, 8, 467879, 'Enim sapiente non error dolor.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(176, 3, 59646, 'Id tempora quia qui quos voluptatem dolor a autem.', 1, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(177, 3, 146928, 'Sint numquam vel rerum sunt.', 1, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(178, 4, 376177, 'Quia ducimus laboriosam optio vitae aut fugiat.', 0, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(179, 3, 607832, 'Ut in unde impedit recusandae eligendi aut.', 1, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(180, 1, 400408, 'Natus dicta numquam omnis sint quae aut sed.', 1, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(181, 4, 714292, 'Et repellat sequi hic omnis quia quasi enim.', 0, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(182, 7, 422248, 'Voluptatem cum inventore minus eaque.', 1, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(183, 9, 490722, 'Id nisi beatae illum autem enim.', 1, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(184, 3, 363766, 'Vel aliquam eum commodi ut mollitia quo.', 1, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(185, 9, 902051, 'Veritatis atque est doloribus sint totam dolor quia.', 1, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(186, 3, 896818, 'Reprehenderit est vero unde quibusdam.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(187, 1, 613263, 'Quidem at quia nesciunt doloribus dolorum neque quo.', 0, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(188, 6, 339477, 'Ipsa est ut doloribus rerum repellendus a pariatur.', 0, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(189, 9, 487577, 'Quia in perspiciatis eos exercitationem qui.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(190, 7, 847118, 'Fugit rerum ipsum dolor est quae est.', 0, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(191, 6, 571757, 'Sit eveniet dignissimos aspernatur fugiat illum iusto.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(192, 2, 722993, 'Sit architecto mollitia quibusdam nobis quod in accusantium.', 1, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(193, 3, 66745, 'Facere non iste dicta.', 0, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(194, 6, 814569, 'Eius nesciunt sed qui explicabo et velit.', 1, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(195, 9, 333197, 'Occaecati libero veritatis exercitationem.', 0, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(196, 10, 308065, 'Modi voluptatem perferendis ut voluptates et et nihil illo.', 1, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(197, 9, 447483, 'Neque repellendus et nihil eius tempore officia.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(198, 1, 962224, 'Ut inventore sed tenetur est praesentium sed repellat.', 0, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(199, 6, 432331, 'Quo distinctio fuga consequuntur eum harum qui.', 1, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(200, 7, 933256, 'Ab iure ut enim aspernatur quis repudiandae autem ut.', 1, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(201, 7, 448413, 'Quod porro eius illo.', 0, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(202, 8, 137648, 'Quia assumenda officia enim et et enim possimus veritatis.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(203, 3, 867654, 'Nobis laudantium aut temporibus maxime rerum quos quia.', 1, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(204, 8, 266345, 'Maxime voluptate voluptatem et.', 0, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(205, 3, 132673, 'Id ut fugit deserunt placeat odit quia cumque.', 1, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(206, 3, 917240, 'Ad a beatae et libero.', 0, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(207, 7, 343918, 'Placeat nam nulla veniam ut aliquam eveniet voluptatem.', 1, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(208, 3, 588324, 'Molestiae laborum neque ut non et debitis perspiciatis.', 1, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(209, 7, 848000, 'Dolore aut sequi officiis repudiandae est.', 1, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(210, 10, 251612, 'Molestiae dolor odio nobis cumque.', 1, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(211, 1, 595876, 'In ab quidem sit est amet.', 0, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(212, 8, 967166, 'Dignissimos nostrum vero libero laudantium optio.', 0, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(213, 6, 42109, 'Quasi cupiditate blanditiis quidem.', 0, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(214, 10, 692873, 'Architecto qui cum dolorum ut suscipit minus voluptatibus.', 0, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(215, 4, 573416, 'Rerum quia aut cupiditate aliquid nobis nihil.', 1, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(216, 7, 290177, 'Est rem enim non saepe ut aperiam animi.', 0, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(217, 6, 181474, 'Praesentium provident enim dolorem reprehenderit magnam non expedita sed.', 0, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(218, 4, 746174, 'Quae ducimus quia totam quos soluta nam necessitatibus incidunt.', 1, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(219, 2, 85521, 'Hic eius eius est consectetur assumenda facilis repellendus.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(220, 2, 733580, 'Veniam a ut voluptas hic et.', 0, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(221, 2, 766562, 'Voluptatem consectetur qui iusto harum.', 1, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(222, 6, 353332, 'Expedita autem quae iste non tempore sit assumenda.', 1, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(223, 8, 823892, 'Nulla officia ratione rerum sunt et non inventore.', 1, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(224, 8, 232491, 'Fugit ut enim sit eveniet nobis in.', 1, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(225, 1, 910605, 'Nemo aut ad sunt aut.', 0, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(226, 10, 543975, 'Voluptatum sequi ut quia ipsum.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(227, 6, 819778, 'Iste enim eveniet animi nisi ratione.', 0, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(228, 4, 282536, 'Nisi placeat quisquam non et nobis praesentium blanditiis et.', 0, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(229, 5, 302182, 'Quam quia nihil dolorum nihil et rem.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(230, 1, 802069, 'Qui atque perspiciatis voluptatibus quos.', 0, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(231, 4, 185345, 'Qui quis voluptate id.', 0, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(232, 1, 647069, 'Provident maxime est placeat vero.', 0, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(233, 3, 390244, 'Nihil odit ut itaque vero.', 0, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(234, 6, 239326, 'Sapiente veniam debitis quae illum est assumenda voluptatem accusantium.', 1, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(235, 4, 151369, 'Tempore rerum nostrum qui minus.', 0, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(236, 6, 412489, 'Distinctio consectetur possimus quis.', 0, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(237, 7, 780293, 'Veritatis dolor nihil ratione.', 0, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(238, 8, 379874, 'Nostrum odit voluptatem qui accusamus error qui.', 1, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(239, 1, 111751, 'Perferendis et ut nihil nisi.', 1, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(240, 9, 61568, 'Pariatur alias provident eos repellendus ut consequatur.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(241, 1, 52983, 'Iste deserunt corrupti harum et est.', 0, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(242, 10, 820727, 'Rem deserunt sint possimus.', 0, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(243, 10, 42312, 'Animi nostrum hic eos et ea quis.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(244, 7, 986381, 'Saepe veritatis non rerum rerum.', 0, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(245, 6, 174362, 'Voluptas doloremque voluptate accusamus hic.', 1, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(246, 7, 210885, 'Consequatur enim atque dolores consequatur.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(247, 2, 984074, 'Et mollitia voluptate expedita et distinctio quis.', 1, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(248, 9, 817776, 'Officiis illo eum voluptas.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(249, 1, 416851, 'Ut qui voluptatibus at.', 1, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(250, 3, 149166, 'Ducimus provident et magni eius expedita doloremque consequuntur.', 1, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(251, 5, 895188, 'Unde rerum repellat et earum consequatur et.', 1, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(252, 3, 202778, 'Et omnis ab voluptatem.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(253, 4, 688216, 'Et quisquam eveniet quam maxime quam sint.', 1, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(254, 3, 421186, 'Id ad aspernatur est aut et facilis porro.', 0, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(255, 8, 878740, 'Voluptatem molestiae ipsam ut et nesciunt.', 0, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(256, 9, 455683, 'Ut molestiae et aut deserunt.', 0, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(257, 10, 995997, 'Molestiae soluta aut vero iusto dolorem rerum animi.', 1, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(258, 6, 508060, 'Perspiciatis laboriosam unde officiis.', 1, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(259, 8, 860161, 'Amet odit recusandae qui rerum sunt architecto quasi.', 0, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(260, 10, 959029, 'Et aliquam illo reiciendis repudiandae et dolore nobis.', 0, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(261, 3, 436634, 'Tenetur ipsa non dolores id.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(262, 7, 209314, 'Id nihil neque iure in suscipit.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(263, 5, 972517, 'Illum qui ut ex.', 1, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(264, 1, 56130, 'Rem iure veniam quasi qui.', 0, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(265, 2, 121366, 'Ut voluptate ut sit.', 0, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(266, 1, 589133, 'Minima adipisci quaerat ea sit totam hic.', 0, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(267, 1, 143101, 'Neque fugiat impedit ipsam occaecati laudantium provident est.', 1, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(268, 2, 609155, 'Culpa at doloribus reprehenderit vel aliquid.', 0, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(269, 6, 167630, 'Odit molestiae consectetur eum deserunt earum.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(270, 4, 560062, 'Illum minima culpa dicta rerum et.', 0, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(271, 3, 193711, 'Eos ut aut et nobis itaque dolorem.', 1, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(272, 3, 425860, 'Magnam vero dicta debitis et fuga ut doloribus.', 1, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(273, 3, 333613, 'Quos quisquam dolorem ex at.', 1, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(274, 10, 957242, 'Nobis at dolores sed.', 1, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(275, 7, 275532, 'Nam deserunt temporibus repellat incidunt.', 0, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(276, 2, 630010, 'Dolor similique nostrum laudantium ea.', 1, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(277, 3, 591965, 'Aut nemo quia laboriosam.', 1, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(278, 1, 792684, 'Perferendis debitis et harum esse neque distinctio quia.', 1, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(279, 7, 101205, 'Nobis consequatur consectetur quae repellendus nulla.', 1, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(280, 3, 183463, 'Laborum nihil velit modi consequuntur voluptatibus omnis et.', 0, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(281, 9, 268544, 'Cumque deleniti ut laborum id a esse.', 1, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(282, 7, 105150, 'Doloribus suscipit velit voluptatem occaecati tempora.', 1, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(283, 7, 180378, 'Fugit tenetur fuga laborum consequuntur.', 0, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(284, 5, 370167, 'Saepe aperiam consequatur non id.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(285, 2, 550178, 'Esse aliquam dolor ipsum atque.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(286, 10, 671266, 'Error iusto quia consectetur aut voluptatem.', 1, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(287, 7, 968745, 'Nisi fuga nam minima molestiae quibusdam iusto nihil.', 0, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(288, 2, 772521, 'Quos vero ut libero.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(289, 9, 966677, 'Quia qui earum eum deserunt ea dolores.', 0, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(290, 6, 444456, 'Deleniti velit aut debitis.', 0, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(291, 3, 998867, 'Eos porro qui omnis culpa dolores eaque sed iste.', 0, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(292, 7, 319948, 'Impedit incidunt ab neque placeat nam.', 1, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(293, 8, 370126, 'Non officiis quaerat est dolorem molestias.', 0, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(294, 10, 800329, 'Ipsa a perferendis fuga unde.', 1, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(295, 8, 406194, 'Sunt neque qui magni consequatur expedita eos a quaerat.', 1, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(296, 2, 621387, 'Tenetur ab officia incidunt qui possimus nulla sapiente illum.', 0, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(297, 8, 67456, 'Id corrupti perferendis nulla tenetur.', 0, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(298, 4, 929172, 'Minima est quia in provident.', 1, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(299, 4, 311284, 'Voluptatum hic eum qui fuga laboriosam qui voluptatem recusandae.', 0, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(300, 7, 175041, 'Rerum quod soluta inventore omnis mollitia dolorem illum.', 0, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(301, 5, 939635, 'In aut ipsam odit est.', 0, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(302, 8, 104637, 'Totam asperiores earum ut autem voluptatem voluptas soluta.', 1, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(303, 8, 248471, 'Ipsum quos ipsum repellat sint adipisci quis.', 0, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(304, 8, 999453, 'Dolor consequuntur error repellendus.', 1, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(305, 8, 950285, 'Et ipsa consequatur nulla quia.', 0, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(306, 1, 623988, 'Autem non est et libero nesciunt vitae nesciunt.', 1, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(307, 5, 151395, 'Et alias odit nulla porro sit occaecati.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(308, 9, 227266, 'Nihil et aliquid exercitationem deleniti ipsa.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(309, 8, 841754, 'Ipsam dolore recusandae facilis aperiam perferendis debitis nihil.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(310, 10, 371056, 'Sit et veritatis est ut.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(311, 2, 982527, 'Aut blanditiis facere quo maxime optio architecto aut pariatur.', 0, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(312, 9, 299048, 'Provident magni aut nemo voluptates qui ut.', 0, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(313, 9, 346100, 'Recusandae eum inventore assumenda id sunt unde.', 1, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(314, 2, 508171, 'Molestias quibusdam et corporis sint non.', 1, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(315, 9, 770491, 'Modi similique quae quisquam itaque occaecati commodi.', 0, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(316, 9, 854493, 'Adipisci officia dolor qui.', 1, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(317, 10, 589761, 'Enim est voluptatem perspiciatis explicabo est.', 1, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(318, 10, 453637, 'Inventore reiciendis mollitia aperiam earum.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(319, 10, 63861, 'Qui maiores debitis eos quasi praesentium corporis.', 0, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(320, 10, 192384, 'Vero exercitationem quia minima rerum.', 0, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(321, 3, 493969, 'Accusantium deserunt sunt aspernatur atque et nemo.', 1, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(322, 8, 768659, 'Cupiditate mollitia et et minus ratione sint non debitis.', 1, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(323, 2, 97377, 'Dolore perspiciatis est similique consectetur.', 1, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(324, 4, 565629, 'Qui eum cum qui perferendis.', 0, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(325, 1, 737209, 'Autem sed omnis incidunt ipsum.', 1, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(326, 2, 591651, 'Quis quaerat rerum hic sunt voluptas necessitatibus voluptas.', 1, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(327, 1, 494800, 'Maxime repellendus harum nobis esse officia aut.', 1, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(328, 6, 872549, 'Eos numquam et placeat quia aliquam ut.', 1, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(329, 9, 149095, 'Qui at nihil officia consequatur quasi.', 0, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(330, 10, 336008, 'Vero reprehenderit dolorem dolorem.', 1, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(331, 1, 473908, 'Sed in facere expedita ea fugiat incidunt suscipit.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(332, 7, 728234, 'Quisquam facere enim nihil aut nihil quis error quia.', 1, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(333, 6, 899381, 'Ab sunt et voluptatem voluptatum consequuntur magnam voluptates.', 0, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(334, 10, 609654, 'Nemo dolores nam tenetur deleniti quia.', 1, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(335, 7, 528449, 'Magnam qui maxime tempore voluptas.', 1, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(336, 7, 647244, 'Molestiae nihil et aspernatur iusto alias.', 1, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(337, 10, 450201, 'Qui consectetur unde qui tempore temporibus beatae molestiae.', 0, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(338, 10, 493286, 'Enim sit delectus ab pariatur fugit rerum.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(339, 9, 200357, 'Officia iste et quia suscipit qui.', 1, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(340, 4, 37676, 'Et autem laudantium quia repellat minus.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(341, 10, 708157, 'Deleniti minus commodi praesentium libero sequi similique.', 0, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(342, 9, 741347, 'Consequatur nesciunt ab dolor animi qui eius earum.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(343, 10, 334983, 'Deleniti dolores possimus ea excepturi ducimus aut.', 0, 1, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(344, 4, 214997, 'Deleniti repudiandae eos dolorum.', 1, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(345, 8, 957283, 'Dolorem quod deserunt ratione saepe voluptatem sit.', 0, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(346, 10, 569027, 'Veniam qui maxime eos maxime ducimus ad nam.', 1, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(347, 2, 791868, 'Id dolorem molestiae sequi at voluptatem enim minus.', 1, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(348, 5, 382749, 'Dolorem et et nesciunt vel molestiae.', 1, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(349, 9, 190209, 'Rerum eveniet eum occaecati consequatur quia.', 1, 2, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(350, 6, 36037, 'Dolorem et perferendis sapiente aut et beatae rem.', 1, 3, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(351, 8, 214671, 'Sit est est commodi ut.', 0, 0, '2020-08-04 20:39:57', '2020-08-04 20:39:57'),
(352, 6, 733014, 'Officiis iusto nesciunt expedita dolorum.', 0, 0, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(353, 6, 899043, 'Soluta et eos consectetur veritatis optio earum alias.', 1, 2, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(354, 9, 294236, 'Eos vitae sequi dolorum quibusdam sint.', 1, 3, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(355, 2, 637580, 'Et asperiores aut voluptatem eum ipsum autem.', 1, 3, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(356, 8, 299415, 'Delectus qui ad praesentium non assumenda sapiente.', 0, 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(357, 10, 671688, 'Occaecati non dicta autem non maxime rerum.', 0, 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(358, 9, 175886, 'Sed nulla vel et.', 1, 3, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(359, 10, 852028, 'Beatae hic omnis deleniti.', 0, 0, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(360, 4, 521712, 'Impedit et ullam maxime quo qui non.', 0, 2, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(361, 5, 784479, 'Mollitia eum rerum non modi.', 0, 0, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(362, 9, 465885, 'Itaque error ab vel officia quae aut.', 0, 2, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(363, 7, 569220, 'Qui qui qui rerum harum nostrum minima.', 0, 2, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(364, 4, 475056, 'Aut velit voluptatem excepturi sit iusto sunt.', 0, 0, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(365, 6, 83820, 'Magni vero incidunt sequi aut non cum.', 1, 3, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(366, 7, 695371, 'Aliquid vitae adipisci amet voluptate totam qui quo quae.', 0, 2, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(367, 5, 191601, 'Explicabo officiis aut a.', 1, 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(368, 4, 944782, 'Illum tenetur eos natus impedit voluptatem totam quam.', 1, 3, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(369, 9, 265868, 'Commodi et reiciendis quidem quisquam dolor.', 1, 2, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(370, 2, 610090, 'Quia suscipit et animi.', 0, 0, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(371, 10, 919328, 'Asperiores dicta minus ipsum fuga perferendis provident et et.', 1, 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(372, 5, 33579, 'Cumque tempora assumenda modi sit culpa itaque.', 1, 0, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(373, 9, 27902, 'Minus omnis excepturi harum commodi rerum.', 1, 3, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(374, 9, 834098, 'Impedit officia fugiat asperiores aut aut.', 1, 2, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(375, 9, 858877, 'Aut iste atque quis ea incidunt non.', 1, 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(376, 9, 254920, 'Iure deleniti voluptas debitis quia aut.', 0, 3, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(377, 5, 695586, 'Qui quis ut dolor et.', 0, 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(378, 3, 208664, 'Et aut doloremque qui illo et non vel.', 1, 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(379, 10, 74031, 'Qui possimus suscipit error sunt eaque dolorem molestias.', 0, 0, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(380, 3, 425911, 'Ea aut non quo eos cupiditate.', 1, 0, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(381, 6, 656693, 'Natus est est ut quas unde.', 0, 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(382, 5, 995227, 'Esse laudantium occaecati omnis eius.', 1, 2, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(383, 4, 258844, 'Aut quo sequi labore nihil natus.', 1, 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(384, 4, 667434, 'Harum vitae quod reiciendis molestiae sint voluptatem.', 0, 2, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(385, 5, 970065, 'Nam porro perspiciatis quos et vitae vel rem.', 0, 3, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(386, 1, 778121, 'Eos nemo non ullam aut pariatur.', 0, 3, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(387, 10, 664762, 'Dolores odio qui asperiores quis voluptate et et at.', 0, 2, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(388, 5, 84455, 'Quidem in corporis culpa omnis molestiae.', 0, 2, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(389, 8, 867062, 'Quos ut assumenda veniam laboriosam velit aut porro.', 1, 0, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(390, 4, 301344, 'Qui fugiat aut pariatur rerum quisquam.', 1, 2, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(391, 5, 358559, 'Veritatis omnis quas tenetur voluptas ut voluptatem blanditiis nobis.', 1, 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(392, 2, 975706, 'Dolorum laudantium omnis sed quos quo vero et quisquam.', 1, 3, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(393, 4, 33170, 'Autem temporibus sit voluptas perspiciatis laudantium.', 1, 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(394, 3, 500544, 'Nostrum eos laborum ipsam.', 1, 0, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(395, 10, 328400, 'Quas quia voluptas quas iure voluptatem cum.', 1, 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(396, 6, 525681, 'Quod et quia ut occaecati.', 1, 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(397, 5, 392782, 'Aut ut sequi ut iste.', 0, 3, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(398, 6, 158940, 'Assumenda doloribus non accusamus.', 0, 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(399, 3, 202362, 'Voluptates in nesciunt ut totam officia tempore.', 0, 2, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(400, 3, 329604, 'Voluptatum debitis et provident.', 1, 3, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(401, 2, 737007, 'Est aut odit et et ut.', 1, 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(402, 1, 409301, 'Nihil ut iure pariatur totam expedita harum.', 0, 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(403, 10, 322000, 'Neque odio repudiandae reiciendis asperiores aut voluptatem eveniet.', 0, 2, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(404, 4, 221599, 'Fuga odio molestiae consequatur dolores alias velit voluptatem.', 1, 2, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(405, 2, 690490, 'Distinctio ut tempora consequatur reprehenderit nam autem sint laboriosam.', 0, 3, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(406, 7, 209564, 'Est reprehenderit impedit mollitia non cum et est.', 1, 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(407, 8, 979992, 'Quia quisquam nihil aut voluptatibus quo nostrum.', 0, 0, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(408, 6, 763062, 'Sequi possimus consequuntur eaque eos sapiente molestiae.', 1, 0, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(409, 5, 548197, 'Expedita maxime fugit et consectetur vel ipsa quas quasi.', 0, 0, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(410, 8, 475512, 'Error ducimus iste velit qui harum cumque aut.', 1, 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(411, 4, 618631, 'Non occaecati voluptatem sed consectetur quod eum.', 1, 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(412, 6, 236917, 'Id eveniet voluptates id consequuntur rerum et voluptatum omnis.', 1, 2, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(413, 1, 674346, 'Ut et et molestias saepe fuga ad voluptatem.', 1, 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(414, 8, 303214, 'Molestiae reprehenderit unde sapiente sint.', 0, 3, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(415, 10, 168291, 'Beatae odit incidunt nihil optio quod.', 1, 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(416, 9, 229924, 'Aut voluptatibus architecto in doloremque harum et velit mollitia.', 1, 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(417, 2, 749863, 'Cupiditate est iste nostrum consectetur.', 0, 0, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(418, 1, 325151, 'Rerum maiores aut exercitationem officia omnis voluptate.', 1, 3, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(419, 5, 193774, 'Dolorem voluptate at animi explicabo et non.', 0, 0, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(420, 1, 515111, 'Voluptas iusto alias impedit voluptatum at voluptatem aut et.', 1, 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(421, 9, 621121, 'Consequatur nulla dignissimos doloremque aut vitae cupiditate.', 1, 0, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(422, 6, 343814, 'Animi commodi dolores dolor quibusdam.', 1, 3, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(423, 8, 631520, 'Sint pariatur debitis illum assumenda voluptas.', 1, 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(424, 2, 687564, 'Eaque id qui voluptates mollitia placeat.', 0, 3, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(425, 5, 161737, 'Ut aut dolores totam officiis qui iste totam.', 1, 0, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(426, 1, 147709, 'Est occaecati sequi ad earum aut necessitatibus.', 1, 2, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(427, 5, 570576, 'Consequatur molestiae accusantium in sed voluptas.', 0, 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(428, 1, 255623, 'Ad distinctio voluptatem rerum ex.', 0, 3, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(429, 1, 246801, 'Vel delectus quia culpa.', 1, 2, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(430, 8, 46939, 'Aut error perferendis iste eos quos soluta.', 1, 3, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(431, 3, 941878, 'Quo pariatur dignissimos sit similique facere.', 0, 3, '2020-08-04 20:39:58', '2020-08-04 20:39:58');
INSERT INTO `don_hang` (`id`, `khach_hang_id`, `tong_tien`, `ghi_chu`, `hinh_thuc_thanh_toan`, `trang_thai`, `created_at`, `updated_at`) VALUES
(432, 9, 311347, 'Dolorum iusto cum velit quisquam sequi eligendi.', 1, 3, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(433, 4, 897335, 'Blanditiis nihil fugiat cum.', 1, 3, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(434, 2, 140957, 'Delectus est dolorum ullam cupiditate quas.', 1, 3, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(435, 8, 41193, 'Ut et minus quis velit vel.', 1, 0, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(436, 10, 513135, 'Qui alias amet et officiis officia laboriosam ipsa.', 1, 3, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(437, 4, 81890, 'Neque fuga iste sed laborum magnam qui sed.', 0, 3, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(438, 1, 934215, 'Vel doloribus incidunt tempore cumque dolor est dolorum.', 0, 2, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(439, 9, 143309, 'Quas rerum ut vitae beatae doloremque in.', 1, 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(440, 5, 736986, 'Sed aspernatur iste magnam accusantium dignissimos hic.', 0, 2, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(441, 9, 765519, 'Tenetur ut nesciunt autem similique qui eveniet facilis.', 1, 3, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(442, 3, 722918, 'Aperiam porro quia enim non veniam optio.', 0, 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(443, 7, 86375, 'Et dolores et molestiae laborum laudantium.', 0, 0, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(444, 3, 361242, 'Dolorem quas est eaque ipsum.', 1, 2, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(445, 7, 784368, 'Aliquid eligendi quia ullam aut sit inventore.', 1, 3, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(446, 9, 152722, 'Autem nesciunt adipisci eligendi sapiente dolorem est.', 1, 0, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(447, 1, 259841, 'Eos qui atque ex commodi porro odio incidunt.', 1, 2, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(448, 4, 993971, 'Dignissimos minus quis rem provident.', 1, 0, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(449, 5, 831557, 'Temporibus rerum harum est nihil.', 1, 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(450, 7, 183080, 'Dolorum pariatur est veniam.', 0, 0, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(451, 8, 918772, 'Laborum quibusdam vero aut eligendi saepe et.', 0, 0, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(452, 5, 370597, 'Qui cumque facilis consequatur rerum dicta est.', 0, 2, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(453, 3, 192487, 'Quasi placeat velit qui tempora.', 0, 3, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(454, 3, 898977, 'Corporis totam aut illo veniam qui.', 1, 0, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(455, 4, 382153, 'Voluptatem ullam accusamus quia.', 0, 3, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(456, 7, 671422, 'Eos aperiam blanditiis harum sed iure et dolorem in.', 1, 2, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(457, 7, 258656, 'Quisquam nam eum est quod sint molestias quae.', 1, 2, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(458, 5, 99259, 'Ipsum et ut porro nemo nihil.', 0, 2, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(459, 1, 713559, 'Ut nulla praesentium exercitationem cumque.', 0, 2, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(460, 6, 692049, 'Minima dolorem est dolorum at assumenda.', 1, 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(461, 10, 658042, 'Rerum voluptates velit voluptatem at earum id.', 0, 0, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(462, 7, 370799, 'Iusto quod totam voluptatibus eius reprehenderit.', 1, 0, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(463, 9, 744485, 'Voluptas sequi quam iusto velit id perferendis.', 1, 2, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(464, 10, 847370, 'Expedita architecto occaecati qui repudiandae hic.', 1, 0, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(465, 8, 506506, 'Voluptas autem error repellendus odio nobis cumque.', 1, 3, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(466, 3, 387751, 'Cumque corrupti numquam non amet nihil sequi laborum.', 1, 3, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(467, 5, 728273, 'Atque quis at vitae sunt aut et veritatis.', 0, 3, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(468, 1, 380992, 'Laborum quae et dolorem aut aliquam sunt amet.', 1, 2, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(469, 2, 838855, 'Inventore suscipit aut nostrum est ad quia.', 0, 2, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(470, 10, 182088, 'Consequatur eum voluptatem laudantium rerum.', 1, 2, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(471, 7, 314763, 'Temporibus exercitationem ut iste et veritatis aut fuga.', 1, 3, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(472, 10, 931708, 'Molestiae qui nemo quisquam molestiae.', 0, 2, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(473, 8, 895677, 'Magnam cumque rerum aut autem sed.', 1, 3, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(474, 9, 53062, 'Aliquam voluptatem dolorem dignissimos voluptates voluptatem unde id.', 1, 0, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(475, 6, 31345, 'Dolores ratione ut officia voluptas vel.', 1, 0, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(476, 5, 668900, 'Ratione qui sit atque pariatur.', 0, 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(477, 6, 558946, 'Deserunt numquam cumque qui sint magni aut nisi.', 1, 2, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(478, 4, 231920, 'Unde et praesentium neque laudantium suscipit aperiam maxime rerum.', 1, 3, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(479, 1, 575163, 'Unde repellendus dolor aut nesciunt.', 1, 3, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(480, 4, 110063, 'Perferendis blanditiis quia tempore quo accusantium vitae.', 0, 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(481, 7, 675659, 'Eum libero officia qui dignissimos incidunt placeat.', 0, 3, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(482, 1, 916888, 'Veniam officia aut tenetur nihil minus sequi rerum.', 0, 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(483, 7, 814368, 'Quia tenetur rerum qui.', 0, 0, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(484, 3, 755896, 'Aliquam dolores aliquam at ut deserunt omnis.', 1, 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(485, 2, 273851, 'Aut veniam quasi porro velit dolor molestiae perspiciatis.', 0, 0, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(486, 6, 992772, 'Officia aperiam cupiditate optio voluptas ex et eum.', 1, 3, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(487, 8, 401763, 'Ut aspernatur dolores minima quas amet expedita quia.', 1, 2, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(488, 10, 711177, 'Voluptates fugit minus earum.', 1, 0, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(489, 8, 673615, 'Provident sequi et ut.', 0, 2, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(490, 5, 608327, 'Culpa deserunt officia et velit aut aliquam.', 0, 2, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(491, 6, 143212, 'Cupiditate nihil nihil sit quod.', 1, 3, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(492, 2, 20922, 'Minima at nostrum laborum veniam voluptatem eum.', 0, 2, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(493, 1, 296262, 'Rem quia quisquam laudantium.', 1, 3, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(494, 10, 437437, 'Doloribus autem dolor voluptas numquam quis.', 0, 0, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(495, 9, 576894, 'Qui sint quis consequatur error necessitatibus nesciunt voluptate sunt.', 0, 2, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(496, 7, 836815, 'Quis nostrum consequatur sed non nobis.', 0, 2, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(497, 3, 15588, 'Consequatur sint sapiente modi.', 1, 2, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(498, 7, 987690, 'Magni modi inventore dicta hic praesentium sed voluptatem.', 1, 0, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(499, 1, 660101, 'Praesentium ducimus qui dolorem ut iure et optio.', 1, 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(500, 9, 652834, 'Aspernatur omnis qui corporis beatae assumenda enim.', 1, 2, '2020-08-04 20:39:58', '2020-08-04 20:39:58');

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
(1, 'admin', '$2y$10$WPgFLaXOXsokAqSprA68Ze4fwlgNvY58PkGCvi3qrA7EWu0NJzQP2', '123456', 'anhtuaaa', 'aaaa', 'admin', '', 1, '2020-08-04 20:36:34', '2020-08-04 20:36:34'),
(2, 'admin', '$2y$10$wWMJh51ejaHo6/kSgHpOh.tceFKAZAX7ZRiOiVH2Dl/aZvO5dzcAG', '123456', 'anhtuaaa', 'aaaa', 'admin', '', 1, '2020-08-04 20:39:56', '2020-08-04 20:39:56');

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
(9, 'RAM', 'GB', 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(10, 'Màn hình', 'cái', 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(11, 'ROM', 'GB', 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(12, 'Camera trước', 'MB', 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(13, 'Camera sau', 'MB', 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(14, 'CPU-Hệ điều hành', 'Ghz', 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(15, 'Trọng lượng', 'gam', 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58'),
(16, 'PIN', 'mAh', 1, '2020-08-04 20:39:58', '2020-08-04 20:39:58');

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
