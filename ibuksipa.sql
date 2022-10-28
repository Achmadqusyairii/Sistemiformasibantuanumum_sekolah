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


-- Dumping database structure for tamuunda_ibuk-sipa
DROP DATABASE IF EXISTS `tamuunda_ibuk-sipa`;
CREATE DATABASE IF NOT EXISTS `tamuunda_ibuk-sipa` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `tamuunda_ibuk-sipa`;

-- Dumping structure for table tamuunda_ibuk-sipa.tbl_guru
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

-- Dumping data for table tamuunda_ibuk-sipa.tbl_guru: ~1 rows (approximately)
DELETE FROM `tbl_guru`;
INSERT INTO `tbl_guru` (`id`, `kd_guru`, `nip`, `nama`, `kd_jabatan`, `kd_mapel`) VALUES
	(8, 1, '1803231009960001', 'YOSI PRATIWI', 3, 2);

-- Dumping structure for table tamuunda_ibuk-sipa.tbl_jabatan
DROP TABLE IF EXISTS `tbl_jabatan`;
CREATE TABLE IF NOT EXISTS `tbl_jabatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kd_jabatan` int(10) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table tamuunda_ibuk-sipa.tbl_jabatan: ~5 rows (approximately)
DELETE FROM `tbl_jabatan`;
INSERT INTO `tbl_jabatan` (`id`, `kd_jabatan`, `jabatan`) VALUES
	(4, 1, 'KEPALA SEKOLAH'),
	(6, 2, 'WAKIL KEPALA SEKOLAH'),
	(7, 3, 'GURU'),
	(18, 4, 'SATPAM'),
	(20, 5, 'KANTIN');

-- Dumping structure for table tamuunda_ibuk-sipa.tbl_kelas
DROP TABLE IF EXISTS `tbl_kelas`;
CREATE TABLE IF NOT EXISTS `tbl_kelas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_kelas` int(50) NOT NULL,
  `nm_kelas` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table tamuunda_ibuk-sipa.tbl_kelas: ~2 rows (approximately)
DELETE FROM `tbl_kelas`;
INSERT INTO `tbl_kelas` (`id`, `kode_kelas`, `nm_kelas`) VALUES
	(8, 1, '10 A'),
	(9, 2, '10 B');

-- Dumping structure for table tamuunda_ibuk-sipa.tbl_mapel
DROP TABLE IF EXISTS `tbl_mapel`;
CREATE TABLE IF NOT EXISTS `tbl_mapel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kd_mapel` int(50) NOT NULL,
  `nm_mapel` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table tamuunda_ibuk-sipa.tbl_mapel: ~3 rows (approximately)
DELETE FROM `tbl_mapel`;
INSERT INTO `tbl_mapel` (`id`, `kd_mapel`, `nm_mapel`) VALUES
	(5, 1, 'MATIMATIKA'),
	(6, 2, 'IPA'),
	(7, 3, 'BAHASA INGGRIS');

-- Dumping structure for table tamuunda_ibuk-sipa.tbl_point
DROP TABLE IF EXISTS `tbl_point`;
CREATE TABLE IF NOT EXISTS `tbl_point` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kd_point` int(10) NOT NULL,
  `nm_point` varchar(50) NOT NULL,
  `nilai_point` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `kd_point` (`kd_point`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table tamuunda_ibuk-sipa.tbl_point: ~2 rows (approximately)
DELETE FROM `tbl_point`;
INSERT INTO `tbl_point` (`id`, `kd_point`, `nm_point`, `nilai_point`) VALUES
	(4, 1, 'Bolos', 51),
	(5, 2, 'maling', 10);

-- Dumping structure for table tamuunda_ibuk-sipa.tbl_point_siswa
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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table tamuunda_ibuk-sipa.tbl_point_siswa: ~4 rows (approximately)
DELETE FROM `tbl_point_siswa`;
INSERT INTO `tbl_point_siswa` (`id`, `kd_siswa`, `kd_point`, `keterangan`, `tanggal`) VALUES
	(13, 1, 1, 'main judi', '2022-10-21'),
	(14, 1, 2, 'kawin', '2022-10-21'),
	(15, 2, 2, 'ssss', '2022-10-21'),
	(16, 3, 1, 'aaa', '2022-10-25');

-- Dumping structure for table tamuunda_ibuk-sipa.tbl_siswa
DROP TABLE IF EXISTS `tbl_siswa`;
CREATE TABLE IF NOT EXISTS `tbl_siswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kd_siswa` int(10) NOT NULL,
  `nisn` int(10) NOT NULL,
  `nis` int(10) NOT NULL,
  `nm_siswa` varchar(50) NOT NULL,
  `kode_kelas` int(10) DEFAULT NULL,
  `nm_wali` varchar(50) DEFAULT NULL,
  `nik_wali` varchar(50) DEFAULT NULL,
  `nomor_wali` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `kd_siswa` (`kd_siswa`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table tamuunda_ibuk-sipa.tbl_siswa: ~3 rows (approximately)
DELETE FROM `tbl_siswa`;
INSERT INTO `tbl_siswa` (`id`, `kd_siswa`, `nisn`, `nis`, `nm_siswa`, `kode_kelas`, `nm_wali`, `nik_wali`, `nomor_wali`) VALUES
	(3, 1, 876654, 133245, 'ACHMAD QUSYAIRI,SE', 1, NULL, NULL, NULL),
	(5, 2, 19777, 21210014, 'YOSI PRATIWI', 1, NULL, NULL, NULL),
	(7, 3, 2147483647, 5656, 'MUHAMMAD AKBAR', 2, 'ACHMAD QUSYAIRI', '1803231009960001', '081272500317');

-- Dumping structure for table tamuunda_ibuk-sipa.tbl_users
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

-- Dumping data for table tamuunda_ibuk-sipa.tbl_users: ~1 rows (approximately)
DELETE FROM `tbl_users`;
INSERT INTO `tbl_users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_level`, `created_at`, `created_by`, `pass`) VALUES
	(1, 'Admin Super Power', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '1', '0000-00-00', '0', '123456');

-- Dumping structure for view tamuunda_ibuk-sipa.view_detail_point_siswa
DROP VIEW IF EXISTS `view_detail_point_siswa`;
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `view_detail_point_siswa` (
	`id` INT(11) NOT NULL,
	`kode_kelas` INT(10) NULL,
	`nm_kelas` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_general_ci',
	`kd_siswa` INT(10) NOT NULL,
	`nm_siswa` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_general_ci',
	`nisn` INT(10) NOT NULL,
	`nm_point` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_general_ci',
	`nilai_point` INT(10) NOT NULL,
	`keterangan` VARCHAR(125) NOT NULL COLLATE 'utf8mb4_general_ci',
	`nis` INT(10) NOT NULL,
	`tanggal` DATE NULL
) ENGINE=MyISAM;

-- Dumping structure for view tamuunda_ibuk-sipa.view_point_siswa
DROP VIEW IF EXISTS `view_point_siswa`;
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `view_point_siswa` (
	`id` INT(11) NOT NULL,
	`kd_siswa` INT(10) NOT NULL,
	`nm_siswa` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_general_ci',
	`nisn` INT(10) NOT NULL,
	`pointsiswa` DECIMAL(32,0) NULL,
	`keterangan` VARCHAR(125) NOT NULL COLLATE 'utf8mb4_general_ci',
	`nis` INT(10) NOT NULL
) ENGINE=MyISAM;

-- Dumping structure for view tamuunda_ibuk-sipa.view_detail_point_siswa
DROP VIEW IF EXISTS `view_detail_point_siswa`;
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `view_detail_point_siswa`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `view_detail_point_siswa` AS select `a`.`id` AS `id`,`b`.`kode_kelas` AS `kode_kelas`,`d`.`nm_kelas` AS `nm_kelas`,`b`.`kd_siswa` AS `kd_siswa`,`b`.`nm_siswa` AS `nm_siswa`,`b`.`nisn` AS `nisn`,`c`.`nm_point` AS `nm_point`,`c`.`nilai_point` AS `nilai_point`,`a`.`keterangan` AS `keterangan`,`b`.`nis` AS `nis`,`a`.`tanggal` AS `tanggal` from (((`tbl_point_siswa` `a` join `tbl_siswa` `b` on(`a`.`kd_siswa` = `b`.`kd_siswa`)) join `tbl_point` `c` on(`a`.`kd_point` = `c`.`kd_point`)) join `tbl_kelas` `d` on(`b`.`kode_kelas` = `d`.`kode_kelas`));

-- Dumping structure for view tamuunda_ibuk-sipa.view_point_siswa
DROP VIEW IF EXISTS `view_point_siswa`;
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `view_point_siswa`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `view_point_siswa` AS select `a`.`id` AS `id`,`b`.`kd_siswa` AS `kd_siswa`,`b`.`nm_siswa` AS `nm_siswa`,`b`.`nisn` AS `nisn`,sum(`c`.`nilai_point`) AS `pointsiswa`,`a`.`keterangan` AS `keterangan`,`b`.`nis` AS `nis` from ((`tbl_point_siswa` `a` join `tbl_siswa` `b` on(`a`.`kd_siswa` = `b`.`kd_siswa`)) join `tbl_point` `c` on(`a`.`kd_point` = `c`.`kd_point`)) group by `a`.`kd_siswa` order by sum(`c`.`nilai_point`) desc;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
