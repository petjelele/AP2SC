/*
Navicat MySQL Data Transfer

Source Server         : DB SMARTAPPS
Source Server Version : 50173
Source Host           : 200.10.3.129:3306
Source Database       : db_itsc

Target Server Type    : MYSQL
Target Server Version : 50173
File Encoding         : 65001

Date: 2020-02-01 18:46:24
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tb_admin
-- ----------------------------
DROP TABLE IF EXISTS `tb_admin`;
CREATE TABLE `tb_admin` (
  `id_admin` int(2) NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `passwd` text,
  `lvl_admin` int(1) DEFAULT NULL,
  PRIMARY KEY (`id_admin`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_admin
-- ----------------------------
INSERT INTO `tb_admin` VALUES ('1', 'Admin', 'Admin', '0ead93fbe4eefc8365bb225d1be9f6bfff961343', '1');

-- ----------------------------
-- Table structure for tb_galery
-- ----------------------------
DROP TABLE IF EXISTS `tb_galery`;
CREATE TABLE `tb_galery` (
  `id_gal` int(2) NOT NULL AUTO_INCREMENT,
  `photo_gal` text,
  `judul` text,
  `desc` text,
  `cat` int(1) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  PRIMARY KEY (`id_gal`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_galery
-- ----------------------------
INSERT INTO `tb_galery` VALUES ('10', '1578365354168.jpg', 'Workshop Bongkar Laptop', 'Bandung, 2017. Mahasiswa sedang melakukan wokshop Troubleshooting laptop dengan cara membongkar laptop guna salah satu cara untuk mengetahui jenis kerusakan / melakukan pergantian komponen pada laptop', '1', '2020-01-07');
INSERT INTO `tb_galery` VALUES ('8', '1578293839092.jpg', 'Rekor Muri Merakit dan Instalasi PC 2012', 'Bandung, 2012. Divisi Hardware bekerja sama dengan HIMA (Himpunan Mahasiswa) Teknik Komputer dan Teknik Elekro menggelar acara pemecahan rekor muri dengan kategori &amp;quot;Merakit dan Instalasi PC&amp;quot; pada Tahun 2012 di Gedung Auditorium Miracle, Universitas Komputer Indonesia.', '1', '2020-01-06');
INSERT INTO `tb_galery` VALUES ('9', '1578297768136.jpg', 'Workshop Jaringan', 'Bandung, 2013. Mahasiswa yang sedang melaksanakan kegiatan Workshop Jaringan komputer dengan menggunakan sistem operasi &quot;Clear OS&quot;.', '1', '2020-01-06');
INSERT INTO `tb_galery` VALUES ('11', '1578365562805.jpg', 'Workshop IoT dengan Raspberry Pi', 'Bandung, 2017. Internet of Things merupakan salah satu teknologi yang sedang berkembang pesat saat ini, salah satu alat yang dapat menggunakan Teknologi IoT ini adalah dengan Raspberry Pi. Pelatihan dengan mengontrol lampu menggunakan jaringan Internet dilakukan pada workshop ini.', '1', '2020-01-07');
INSERT INTO `tb_galery` VALUES ('12', '1578365720197.png', 'Doorprize Workshop', 'Bandung, 2017. Salah satu penerima doorprize dalam pelaksanaan Workshop program Office khusus untuk mahasiswa non Teknik, Universitas Komputer Indonesia', '1', '2020-01-07');

-- ----------------------------
-- Table structure for tb_inbox
-- ----------------------------
DROP TABLE IF EXISTS `tb_inbox`;
CREATE TABLE `tb_inbox` (
  `id_inbox` int(3) NOT NULL AUTO_INCREMENT,
  `nama` text,
  `email` text,
  `subject` text,
  `tanya` text,
  `jawab` text,
  `tgl` date DEFAULT NULL,
  `sts` int(1) DEFAULT NULL,
  PRIMARY KEY (`id_inbox`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_inbox
-- ----------------------------
INSERT INTO `tb_inbox` VALUES ('38', 'Risqi', 'risqiwindu.h@gmail.com', 'Test', 'test', 'OK', '2020-01-03', '1');

-- ----------------------------
-- Table structure for tb_news
-- ----------------------------
DROP TABLE IF EXISTS `tb_news`;
CREATE TABLE `tb_news` (
  `id_news` int(2) NOT NULL AUTO_INCREMENT,
  `photo_news` text,
  `judul` text,
  `desc` text,
  `cat` int(1) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  PRIMARY KEY (`id_news`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_news
-- ----------------------------
INSERT INTO `tb_news` VALUES ('5', '1577068756274.jpg', 'Test', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1', '2019-12-23');
INSERT INTO `tb_news` VALUES ('6', '1577068868301.jpg', 'Lorem Ipsuma', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '3', '2019-12-23');

-- ----------------------------
-- Table structure for tb_slider
-- ----------------------------
DROP TABLE IF EXISTS `tb_slider`;
CREATE TABLE `tb_slider` (
  `id_slider` int(2) NOT NULL AUTO_INCREMENT,
  `photo_slider` text,
  `judul` text,
  `deskripsi` text,
  `tgl` date DEFAULT NULL,
  PRIMARY KEY (`id_slider`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_slider
-- ----------------------------
INSERT INTO `tb_slider` VALUES ('36', '1577063566676.jpg', 'ITSC UNIKOM', 'IT Training &amp; Service Center', '2019-12-23');
INSERT INTO `tb_slider` VALUES ('37', '1577063614138.jpg', 'ITSC UNIKOM', 'IT Training &amp; Service Center', '2019-12-23');
INSERT INTO `tb_slider` VALUES ('38', '1578464879572.jpg', 'Workshop Office', '  ', '2020-01-08');
INSERT INTO `tb_slider` VALUES ('39', '1578466143215.jpg', 'Workshop Jaringan', '  ', '2020-01-08');
INSERT INTO `tb_slider` VALUES ('40', '1578468498304.jpg', 'Workshop Troubleshooting Laptop', '  ', '2020-01-08');

-- ----------------------------
-- Table structure for tb_subscribe
-- ----------------------------
DROP TABLE IF EXISTS `tb_subscribe`;
CREATE TABLE `tb_subscribe` (
  `id_subscribe` int(3) NOT NULL AUTO_INCREMENT,
  `email` text,
  `tgl` date DEFAULT NULL,
  PRIMARY KEY (`id_subscribe`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=77 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_subscribe
-- ----------------------------
INSERT INTO `tb_subscribe` VALUES ('75', 'itscunikom@gmail.com', '2019-12-30');
INSERT INTO `tb_subscribe` VALUES ('74', 'risqiwindu.h@gmail.com', '2019-12-27');
