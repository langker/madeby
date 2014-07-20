-- phpMyAdmin SQL Dump
-- version 2.11.2.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 04 月 05 日 07:20
-- 服务器版本: 5.0.45
-- PHP 版本: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- 数据库: `report`
--

-- --------------------------------------------------------

--
-- 表的结构 `answer`
--

CREATE TABLE `answer` (
  `id` int(4) NOT NULL auto_increment,
  `EMAIL` varchar(64) default NULL,
  `1X` varchar(4) character set ascii collate ascii_bin default NULL,
  `2A` varchar(4) default NULL,
  `2B` varchar(4) default NULL,
  `2C` varchar(4) default NULL,
  `2D` varchar(4) default NULL,
  `2E` text character set utf8,
  `3A` varchar(4) default NULL,
  `3B` varchar(4) default NULL,
  `3C` varchar(4) default NULL,
  `3D` varchar(4) default NULL,
  `3E` text character set utf8,
  `3F` varchar(4) default NULL,
  `4A` varchar(4) default NULL,
  `4B` varchar(4) default NULL,
  `4C` varchar(4) default NULL,
  `4D` varchar(4) default NULL,
  `4F` varchar(4) default NULL,
  `5X` varchar(4) character set ascii collate ascii_bin default NULL,
  `6A` varchar(4) default NULL,
  `6B` varchar(4) default NULL,
  `6C` varchar(4) default NULL,
  `6D` varchar(4) default NULL,
  `6E` text character set utf8,
  `7X` varchar(4) character set ascii collate ascii_bin default NULL,
  `8X` varchar(4) character set ascii collate ascii_bin default NULL,
  `9X` varchar(4) character set ascii collate ascii_bin default NULL,
  `10A` varchar(4) default NULL,
  `10B` varchar(4) default NULL,
  `10C` varchar(4) default NULL,
  `10D` varchar(4) default NULL,
  `11X` varchar(4) character set ascii collate ascii_bin default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- 导出表中的数据 `answer`
--

INSERT INTO `answer` (`id`, `EMAIL`, `1X`, `2A`, `2B`, `2C`, `2D`, `2E`, `3A`, `3B`, `3C`, `3D`, `3E`, `3F`, `4A`, `4B`, `4C`, `4D`, `4F`, `5X`, `6A`, `6B`, `6C`, `6D`, `6E`, `7X`, `8X`, `9X`, `10A`, `10B`, `10C`, `10D`, `11X`) VALUES
(2, 'langker@aliyun.com', 'A', '1', NULL, '1', NULL, '么么哒~', '1', '1', '1', '1', '充气BABY！', 'A', NULL, NULL, NULL, NULL, NULL, 'A', '1', '1', '1', '1', '1024', 'D', 'E', 'A', '1', '1', '1', NULL, 'A');
