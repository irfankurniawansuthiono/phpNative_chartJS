-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 8.0.30 - MySQL Community Server - GPL
-- OS Server:                    Win64
-- HeidiSQL Versi:               12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Membuang struktur basisdata untuk db_22101152630330
CREATE DATABASE IF NOT EXISTS `db_22101152630330` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_22101152630330`;

-- membuang struktur untuk table db_22101152630330.irfan
CREATE TABLE IF NOT EXISTS `irfan` (
  `id_barang` int unsigned NOT NULL AUTO_INCREMENT,
  `barang` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='tabel barang';

-- Membuang data untuk tabel db_22101152630330.irfan: ~10 rows (lebih kurang)
INSERT INTO `irfan` (`id_barang`, `barang`) VALUES
	(23, 'Keyboard Rexus'),
	(24, 'Mouse Gamen'),
	(25, 'Laptop HP'),
	(26, 'Scanner Canon'),
	(27, 'HeadPhone FANTECH'),
	(28, 'Flashdisk - 64GB'),
	(29, 'PowerBank VIVAN'),
	(30, 'Jam Rolex'),
	(31, 'Iphone 14'),
	(32, 'Iphone 15');

-- membuang struktur untuk table db_22101152630330.kurniawan
CREATE TABLE IF NOT EXISTS `kurniawan` (
  `id_penjualan` int NOT NULL AUTO_INCREMENT,
  `id_barang` int DEFAULT NULL,
  `jumlah` int DEFAULT NULL,
  `tgl_penjualan` date DEFAULT NULL,
  PRIMARY KEY (`id_penjualan`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='tabel penjualan';

-- Membuang data untuk tabel db_22101152630330.kurniawan: ~40 rows (lebih kurang)
INSERT INTO `kurniawan` (`id_penjualan`, `id_barang`, `jumlah`, `tgl_penjualan`) VALUES
	(4, 23, 2, '2024-06-01'),
	(5, 23, 5, '2024-06-04'),
	(6, 23, 5, '2024-08-01'),
	(7, 24, 1, '2024-06-19'),
	(8, 24, 5, '2024-06-12'),
	(9, 24, 10, '2024-06-15'),
	(10, 25, 11, '2024-06-13'),
	(11, 25, 2, '2024-06-12'),
	(12, 24, 2, '2024-06-03'),
	(13, 25, 12, '2024-06-14'),
	(14, 26, 2, '2024-06-08'),
	(15, 26, 5, '2024-06-09'),
	(16, 26, 2, '2024-05-29'),
	(17, 23, 5, '2024-05-15'),
	(18, 23, 11, '2024-05-24'),
	(19, 24, 20, '2024-05-06'),
	(20, 24, 3, '2024-05-08'),
	(21, 27, 1, '2024-06-01'),
	(22, 27, 4, '2024-05-29'),
	(23, 28, 4, '2024-05-18'),
	(24, 27, 13, '2024-06-18'),
	(25, 29, 12, '2024-07-05'),
	(26, 29, 1, '2024-05-23'),
	(27, 29, 13, '2024-05-18'),
	(28, 30, 13, '2024-05-24'),
	(29, 30, 11, '2024-07-06'),
	(30, 30, 5, '2024-05-23'),
	(31, 25, 12, '2024-05-21'),
	(32, 23, 1, '2024-05-25'),
	(33, 31, 13, '2024-07-04'),
	(34, 31, 5, '2024-07-27'),
	(35, 31, 11, '2024-07-04'),
	(36, 32, 5, '2024-05-16'),
	(37, 29, 1, '2024-05-29'),
	(38, 24, 12, '2024-07-08'),
	(39, 23, 5, '2024-06-01'),
	(40, 32, 12, '2024-06-07'),
	(41, 31, 22, '2024-05-31'),
	(42, 32, 2, '2024-05-30'),
	(43, 30, 12, '2024-07-10');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

