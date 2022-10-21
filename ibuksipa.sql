-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.24-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for ibuksipa
DROP DATABASE IF EXISTS `ibuksipa`;
CREATE DATABASE IF NOT EXISTS `ibuksipa` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `ibuksipa`;

-- Dumping structure for table ibuksipa.tbl_guru
DROP TABLE IF EXISTS `tbl_guru`;
CREATE TABLE IF NOT EXISTS `tbl_guru` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kd_guru` int(10) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kd_jabatan` int(10) NOT NULL,
  `kd_mapel` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table ibuksipa.tbl_jabatan
DROP TABLE IF EXISTS `tbl_jabatan`;
CREATE TABLE IF NOT EXISTS `tbl_jabatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kd_jabatan` int(10) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table ibuksipa.tbl_kelas
DROP TABLE IF EXISTS `tbl_kelas`;
CREATE TABLE IF NOT EXISTS `tbl_kelas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_kelas` int(50) NOT NULL,
  `nm_kelas` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table ibuksipa.tbl_mapel
DROP TABLE IF EXISTS `tbl_mapel`;
CREATE TABLE IF NOT EXISTS `tbl_mapel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kd_mapel` int(50) NOT NULL,
  `nm_mapel` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table ibuksipa.tbl_point
DROP TABLE IF EXISTS `tbl_point`;
CREATE TABLE IF NOT EXISTS `tbl_point` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kd_point` int(10) NOT NULL,
  `nm_point` varchar(50) NOT NULL,
  `nilai_point` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `kd_point` (`kd_point`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table ibuksipa.tbl_point_siswa
DROP TABLE IF EXISTS `tbl_point_siswa`;
CREATE TABLE IF NOT EXISTS `tbl_point_siswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kd_siswa` int(50) NOT NULL,
  `kd_point` int(50) NOT NULL,
  `keterangan` varchar(125) NOT NULL,
  `tanggal` date DEFAULT curdate(),
  PRIMARY KEY (`id`),
  KEY `kd_siswa` (`kd_siswa`),
  KEY `kd_point` (`kd_point`),
  CONSTRAINT `FK_tbl_point_siswa_tbl_point` FOREIGN KEY (`kd_point`) REFERENCES `tbl_point` (`kd_point`) ON UPDATE CASCADE,
  CONSTRAINT `FK_tbl_point_siswa_tbl_siswa` FOREIGN KEY (`kd_siswa`) REFERENCES `tbl_siswa` (`kd_siswa`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table ibuksipa.tbl_siswa
DROP TABLE IF EXISTS `tbl_siswa`;
CREATE TABLE IF NOT EXISTS `tbl_siswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kd_siswa` int(10) NOT NULL,
  `nisn` int(10) NOT NULL,
  `nis` int(10) NOT NULL,
  `nm_siswa` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `kd_siswa` (`kd_siswa`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table ibuksipa.tbl_users
DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE IF NOT EXISTS `tbl_users` (
  `user_id` int(11) DEFAULT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `user_password` varchar(100) DEFAULT NULL,
  `user_level` varchar(100) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for view ibuksipa.view_point_siswa
DROP VIEW IF EXISTS `view_point_siswa`;
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `view_point_siswa` (
	`id` INT(11) NOT NULL,
	`nm_siswa` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_general_ci',
	`nisn` INT(10) NOT NULL,
	`pointsiswa` DECIMAL(32,0) NULL,
	`keterangan` VARCHAR(125) NOT NULL COLLATE 'utf8mb4_general_ci'
) ENGINE=MyISAM;

-- Dumping structure for view ibuksipa.view_point_siswa
DROP VIEW IF EXISTS `view_point_siswa`;
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `view_point_siswa`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `view_point_siswa` AS SELECT a.id,b.nm_siswa, b.nisn, SUM(c.nilai_point) AS pointsiswa, a.keterangan FROM tbl_point_siswa a INNER JOIN tbl_siswa b ON
a.kd_siswa = b.kd_siswa
INNER JOIN tbl_point c ON
a.kd_point = c.kd_point
GROUP BY a.kd_siswa ;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
