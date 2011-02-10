-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 10, 2011 at 08:06 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `widget`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `url`, `company_name`, `price`, `description`) VALUES
(1, 'Canon PowerShot SD1400IS 14.1 MP Digital Camera with 4x Wide Angle Optical Image Stabilized Zoom and 2.7-Inch LCD (Black)', 'http://www.amazon.com/gp/product/B0035FZJJ4/ref=s9_ri_gw_ir01/188-1218669-7239429?pf_rd_m=ATVPDKIKX0DER&pf_rd_s=center-2&pf_rd_r=1B9TQTH6A4HNPK9XJBZ8&pf_rd_t=101&pf_rd_p=1263340922&pf_rd_i=507846', 'Canon', 149.99, 'Canon''s commitment to innovation defines the excitement of the PowerShot SD1400 IS Digital ELPH. 14.1-megapixel resolution is more than a number, it''s your cutting-edge link to the outstanding clarity and quality you''ve always wanted in your images. Think bold and big, because razor-sharp oversized prints are a breeze. Get the picture? It''s absolutely brilliant. '),
(2, 'Panasonic Lumix DMC-FH20K 14.1 MP Digital Camera with 8x Optical Image Stabilized Zoom and 2.7-Inch LCD (Black)', 'http://www.amazon.com/gp/product/B003962DXE/ref=s9_ri_gw_ir03/188-1218669-7239429?pf_rd_m=ATVPDKIKX0DER&pf_rd_s=center-2&pf_rd_r=1B9TQTH6A4HNPK9XJBZ8&pf_rd_t=101&pf_rd_p=1263340922&pf_rd_i=507846', 'Panasonic', 179, 'The 28mm wide-angle lens* lets you easily capture large groups of people indoors or expansive architectural structures and scenes with dynamic width and rich perspective, even from short distances.'),
(3, 'Fujifilm FinePix HS20 16 MP Digital Camera with EXR BSI CMOS High Speed Sensor and Fujinon 30x Wide Angle Optical Zoom Lens', 'http://www.amazon.com/gp/product/B004HO58OI/ref=s9_hps_bw_ir03?pf_rd_m=ATVPDKIKX0DER&pf_rd_s=gp-center-3&pf_rd_r=14JE769BHJG41JQ7ZZ2H&pf_rd_t=101&pf_rd_p=1286527822&pf_rd_i=502394', 'Fuji', 499.95, 'Fujifilm''s FinePix HS20EXR is a high quality, advanced function SLR-styled long-zoom camera built for the professional or enthusiast photographer, but also easy enough for even a first time user. Improving on the excellence of its predecessor, the FinePix HS10EXR, the FinePix HS20EXR features a new 16-megapixel EXR-CMOS sensor, a powerful FUJINON 30x manual optical zoom (24mm-720mm equivalent) lens, a tilting 3.0-inch high contrast LCD with a electronic viewfinder featuring a "heads up" sensor that automatically changes from LCD to EVF, and countless features serious photographers seek for versatility and performance. ');
