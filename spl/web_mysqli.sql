-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 01, 2023 lúc 08:27 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_mysqli`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `admin_status`) VALUES
(1, 'trungadmin', '148535', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id_cart` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `cart_status` int(11) NOT NULL,
  `cart_payment` varchar(50) NOT NULL,
  `cart_shipping` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`id_cart`, `id_khachhang`, `code_cart`, `cart_status`, `cart_payment`, `cart_shipping`) VALUES
(90, 82, '3514', 1, 'tienmat', 2),
(91, 80, '8134', 1, 'tienmat', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart_details`
--

CREATE TABLE `tbl_cart_details` (
  `id_cart_details` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart_details`
--

INSERT INTO `tbl_cart_details` (`id_cart_details`, `code_cart`, `id_sanpham`, `soluongmua`) VALUES
(56, '3514', 100, 1),
(57, '8134', 95, 1),
(58, '8134', 92, 1),
(59, '8134', 85, 1),
(60, '8134', 91, 1),
(61, '8134', 102, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dangky`
--

CREATE TABLE `tbl_dangky` (
  `id_dangky` int(11) NOT NULL,
  `tenkhachhang` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `dienthoai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_dangky`
--

INSERT INTO `tbl_dangky` (`id_dangky`, `tenkhachhang`, `email`, `diachi`, `matkhau`, `dienthoai`) VALUES
(80, 'phuctrung', 'tranphuctrung102@gmail.com', 'Bến Tre', '111111', '0348034110'),
(82, 'tran phuc trung', 'trung@gmail.com', 'Bến Tre', '111111', '0348034110');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(48, 'Apple', 1),
(49, 'Samsung', 2),
(50, 'Sony', 3),
(51, 'OPPO', 4),
(52, 'Huawei', 5),
(53, 'Xiaomi', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `tensanpham` varchar(250) NOT NULL,
  `masp` varchar(100) NOT NULL,
  `giasp` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `tomtat` text NOT NULL,
  `noidung` tinytext NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `tensanpham`, `masp`, `giasp`, `soluong`, `hinhanh`, `tomtat`, `noidung`, `tinhtrang`, `id_danhmuc`) VALUES
(62, 'iPhone 14 256GB | Chính hãng VN/A', '001', '23400000', 10, '1679158900_t_m_20.webp', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 1, 48),
(63, 'iPhone 14 Pro 256GB | Chính hãng VN/A', '002', '25400000', 4, '1679159043_t_m_20.webp', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 1, 48),
(64, 'iPhone 14 Pro Max 256GB | Chính hãng VN/A', '003', '28340000', 5, '1679159099_t_m_20.webp', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 1, 48),
(65, 'iPhone 12 256GB | Chính hãng VN/A', '004', '14400000', 7, '1679159167_2_241_2.webp', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 1, 48),
(66, 'iPhone 13 Pro 256GB | Chính hãng VN/A', '005', '25400000', 3, '1679192597_3_224_1.webp', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 1, 48),
(67, 'iPhone 13 Pro Max 256GB | Chính hãng VN/A', '006', '33340000', 8, '1679191153_b_c_1_11.webp', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 1, 48),
(68, 'iPhone 11 256GB | Chính hãng VN/A', '007', '15340000', 2, '1679191259_11_3_12_2_1_6.webp', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 1, 48),
(69, 'iPhone 13 Pro Max 256GB | Chính hãng VN/A', '008', '35340000', 6, '1679191355_iphone.webp', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 1, 48),
(70, 'iPhone 13 Pro 256GB | Chính hãng VN/A', '009', '28340000', 9, '1679191412_x_m_26.webp', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 1, 48),
(71, 'Samsung Galaxy A04', '010', '2590000', 6, '1679191539_22_13.webp', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 1, 49),
(72, 'Samsung Galaxy A23', '011', '4990000', 7, '1679191588_samsung-galaxy.webp', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 1, 49),
(73, 'Samsung Galaxy S22 Ultra (12GB - 256GB)', '012', '24340000', 5, '1679192537_SS_galaxy.webp', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 1, 49),
(74, 'Samsung Galaxy Z Flip4 256GB', '013', '21900000', 2, '1679192663_SAMSUNG.webp', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 1, 49),
(75, 'Samsung Galaxy S23 Plus 8GB 256GB', '014', '24990000', 5, '1679192727_samsung-galaxy-s21-ultra-1_1.webp', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 1, 49),
(76, 'Samsung Galaxy S23 Plus 8GB 256GB', '015', '18900000', 7, '1679192785_s22_4_1.webp', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 1, 49),
(77, 'Samsung Galaxy A23 Ultra', '016', '23400000', 2, '1679192911_samsung-galaxy-s21-ultra-1_1.webp', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 1, 49),
(78, 'Tai nghe Sony MDR-ZX110AP', '017', '490000', 2, '1679193063_group_17333.webp', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 1, 50),
(79, 'Tai nghe không dây Sony WF-1000XM4', '018', '4909000', 8, '1679193119_group_187_2.webp', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 1, 50),
(80, 'Tai nghe không dây Sony WF C500', '019', '2090900', 5, '1679193166_group_187_2_.webp', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 1, 50),
(81, 'Tai nghe chụp tai Sony WH-CH510', '020', '990000', 4, '1685190764_group_17333.webp', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 1, 50),
(82, 'Loa Buluetooth Sony SRS-XE300', '021', '3490000', 8, '1679193300_group_217_1_1.webp', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 1, 50),
(83, 'Tai nghe chụp tai Sony MDR-ZX310AP', '022', '690000', 6, '1679193372_group_17333.webp', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 1, 50),
(84, 'Tai nghe không dây Sony WF-1000XM4', '023', '3334000', 3, '1679193447_group_189_2.webp', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 1, 50),
(85, 'Tai nghe không dây Sony C500', '024', '2780000', 4, '1679193527_group_187_2.webp', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 1, 50),
(86, 'OPPO A77s', '025', '6290000', 2, '1679193587_combo_a16k_-_black.webp', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 1, 51),
(87, 'OPPO Reno8 Z', '026', '7990000', 7, '1679193624_combo_product_-_blue_-_reno7_5g.webp', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 1, 51),
(88, 'OPPO Reno8 Z', '027', '7890000', 10, '1679193704_OPPO.webp', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 1, 51),
(89, 'OPPO Reno8 5G 8GB 256GB', '028', '13580000', 8, '1679193775_oppo_RENO8.webp', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 1, 51),
(90, 'OPPO Reno 7 Pro', '029', '11990000', 4, '1679193844_oppo_reno8_pro_1_.webp', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 1, 51),
(91, 'OPPO Pad Air', '030', '6690000', 4, '1679193914_okcscsfd.webp', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 1, 51),
(92, 'Samsung Galaxy A08', '031', '5490000', 9, '1679194066_OPPO.webp', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 1, 51),
(93, 'Đồng hồ thông minh Huawei Watch Fit 2', '032', '2690000', 5, '1679194165_huawei-band.webp', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 1, 52),
(94, 'Đồng hồ thông minh Huawei Watch GT3 SE', '033', '3490000', 5, '1679194210_huawei-band-7.webp', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 1, 52),
(95, 'Tai nghe không dây Huawei Freebuds 4', '034', '2090000', 4, '1679194257_huawei-freebuds-4_1.webp', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 1, 52),
(96, 'Máy tính bảng Huawawei Matepad 2020 4GB', '035', '5990000', 6, '1679194309_huawei-table.webp', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 1, 52),
(97, 'Huawei MatePad SE 10.4', '036', '5490000', 4, '1679313303_hww.webp', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 1, 52),
(98, 'Xiaomi 12T', '037', '11490000', 8, '1679194465_xiaomi-12t-den_1.webp', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 1, 53),
(99, 'Xiaomo 12T Pro', '038', '15490000', 9, '1679194520_xiaomi-12-pro_arenamobiles.webp', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 1, 53),
(100, 'Xiaomi Redmi 10 (4GB - 128GB)', '039', '3700000', 4, '1679194662_pms_1670745783.80967984.webp', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 1, 53),
(101, 'Xiaomi 12T 128GB', '040', '4890000', 2, '1679199055_redmi_9a_0005_background.webp', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 1, 53),
(102, 'Xiaomi note 11 Pro', '041', '4790000', 4, '1679199107_redmi.webp', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 1, 53),
(103, 'Xiaomi Redmi 12T 128GB', '042', '7890000', 7, '1679762588_combo_product_-_blue_-_reno7_5g.webp', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 1, 53),
(104, 'iPhone 13 128GB | Chính hãng VN/A', '043', '16690000', 5, '1685190589_13pro.webp', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 1, 48),
(105, 'Samsung Galaxy Z Fold4', '044', '31760000', 8, '1685190963_samsung_galaxy_z_fold_4-7.webp', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 1, 49),
(106, 'Samsung Galaxy S23 Plus 8GB 256GB', '045', '18590000', 3, '1685191179_samsungg.webp', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 1, 49),
(107, 'Samsung Galaxy A73 (5G) 256GB - Độc quyền', '046', '10990000', 3, '1685191282_samsung-galaxy-a73.webp', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 1, 49),
(108, 'Tai nghe Sony MDR-EX155AP', '047', '320000', 3, '1685191459_tainghesony.webp', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 1, 50),
(109, 'Tai nghe Sony MDR E9LP', '048', '249000', 8, '1685191509_sonytainghe.webp', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 1, 50),
(110, 'OPPO Reno8 Z', '049', '7890000', 6, '1685191646_oppo8z.webp', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 1, 51),
(111, 'OPPO A57 4GB 128GB', '050', '4380000', 4, '1685191821_combo_a57_-_black_3.webp', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 1, 51),
(112, 'OPPO A17', '051', '3990000', 2, '1685191894_oppoa70.webp', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 1, 51),
(113, 'iPhone 14 128GB  | Chính hãng VN/A', '052', '19190000', 8, '1685192016_iphone-14-storage.webp', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 'Hỗ trợ trả góp 0% khi thanh toán qua momo, vnpay.', 1, 48);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `id_shipping` int(11) NOT NULL,
  `id_dangky` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`id_shipping`, `id_dangky`, `name`, `phone`, `address`, `note`) VALUES
(2, 82, 'Phuc Trung', '0348034110', 'Ben tre', 'con me m'),
(3, 80, 'Phuc Trung', '0348034110', 'Bến Tre', 'Giao đến công viên phú nhuận');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_tintuc`
--

CREATE TABLE `tbl_tintuc` (
  `id_tintuc` int(11) NOT NULL,
  `tentintuc` varchar(255) NOT NULL,
  `tomtat` mediumtext NOT NULL,
  `noidung` text NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `hinhanh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_tintuc`
--

INSERT INTO `tbl_tintuc` (`id_tintuc`, `tentintuc`, `tomtat`, `noidung`, `tinhtrang`, `hinhanh`) VALUES
(8, 'Cùng dự đoán giá bán Samsung Galaxy Note 30 Ultra 5G: Sẽ được nâng cấp toàn diện về cấu hình và thiết kế, liệu giá có đắt không?', 'Theo đó, trang Bestmobile24 đã dự đoán giá bán Galaxy Note 30 Ultra 5G sẽ rơi vào khoảng 56.900 INR (khoảng 17.2 triệu đồng) tại Ấn Độ, còn trang GSMArena24 dự đoán giá bán của điện thoại sẽ là 665 EUR (khoảng 17.1 triệu đồng) tại Châu Âu.\r\n\r\nTuy nhiên, mình dự đoán nếu Galaxy Note 30 Ultra 5G về Việt Nam sẽ có giá bán khá cao dao động từ 25 đến 30 triệu đồng. Trước giờ Galaxy Note Ultra về Việt Nam thì ít khi thấp hơn mức 25 triệu đồng lúc mới mở bán, vì vậy cũng dễ đưa ra dự đoán như trên.', 'Theo đó, trang Bestmobile24 đã dự đoán giá bán Galaxy Note 30 Ultra 5G sẽ rơi vào khoảng 56.900 INR (khoảng 17.2 triệu đồng) tại Ấn Độ, còn trang GSMArena24 dự đoán giá bán của điện thoại sẽ là 665 EUR (khoảng 17.1 triệu đồng) tại Châu Âu.\r\n\r\nTuy nhiên, mình dự đoán nếu Galaxy Note 30 Ultra 5G về Việt Nam sẽ có giá bán khá cao dao động từ 25 đến 30 triệu đồng. Trước giờ Galaxy Note Ultra về Việt Nam thì ít khi thấp hơn mức 25 triệu đồng lúc mới mở bán, vì vậy cũng dễ đưa ra dự đoán như trên.', 1, '1679764036_123345.jpg'),
(9, 'Thích đồng hồ thông mình nhưng không đủ lúa, mách bạn cách mua smartwatch Apple, Samsung, Garmin được giảm lên đến 52%', '1', '1', 1, '1679764513_1.jpg'),
(10, 'Dự đoán cấu hình Galaxy S23 5G: Trang bị hai loại vi xử lý đi kèm với RAM khủng, pin trâu và có bốn camera sau rất xịn sò', '2', '2', 1, '1679765565_2.jpg'),
(17, 'Apple dẫn đầu xu hướng công nghệ tương lai, tuyên bố sẽ thay thế iPhone bằng tai nghe công nghệ AR trong 10 năm tới', 'd', 'ddd', 1, '1679801996_1638712763_gasfadsad.jpg'),
(18, 'Cùng dự đoán giá bán Galaxy S23 5G: Liệu tương lai sẽ rẻ hơn các bản tiền nhiệm để tiếp cận người dùng?', 'dddd', 'dd', 1, '1679803046_1638712857_2.jpg'),
(19, 'Cùng dự đoán giá bán Galaxy S23 5G: Liệu tương lai sẽ rẻ hơn các bản tiền nhiệm để tiếp cận người dùng?', 'daSDSAd', 'ASD', 1, '1679803101_3.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Chỉ mục cho bảng `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  ADD PRIMARY KEY (`id_cart_details`);

--
-- Chỉ mục cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  ADD PRIMARY KEY (`id_dangky`);

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- Chỉ mục cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`id_shipping`);

--
-- Chỉ mục cho bảng `tbl_tintuc`
--
ALTER TABLE `tbl_tintuc`
  ADD PRIMARY KEY (`id_tintuc`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT cho bảng `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  MODIFY `id_cart_details` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  MODIFY `id_dangky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `id_shipping` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_tintuc`
--
ALTER TABLE `tbl_tintuc`
  MODIFY `id_tintuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
