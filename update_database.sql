-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `chart_details`;
CREATE TABLE `chart_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `d1m1` text NOT NULL,
  `d1m2` text NOT NULL,
  `d1m3` text NOT NULL,
  `d1m4` text NOT NULL,
  `d1m5` text NOT NULL,
  `d1m6` text NOT NULL,
  `d2m1` text NOT NULL,
  `d2m2` text NOT NULL,
  `d2m3` text NOT NULL,
  `d2m4` text NOT NULL,
  `d2m5` text NOT NULL,
  `d2m6` text NOT NULL,
  `d3m1` text NOT NULL,
  `d3m2` text NOT NULL,
  `d3m3` text NOT NULL,
  `d3m4` text NOT NULL,
  `d3m5` text NOT NULL,
  `d3m6` text NOT NULL,
  `d4m1` text NOT NULL,
  `d4m2` text NOT NULL,
  `d4m3` text NOT NULL,
  `d4m4` text NOT NULL,
  `d4m5` text NOT NULL,
  `d4m6` text NOT NULL,
  `d5m1` text NOT NULL,
  `d5m2` text NOT NULL,
  `d5m3` text NOT NULL,
  `d5m4` text NOT NULL,
  `d5m5` text NOT NULL,
  `d5m6` text NOT NULL,
  `d6m1` text NOT NULL,
  `d6m2` text NOT NULL,
  `d6m3` text NOT NULL,
  `d6m4` text NOT NULL,
  `d6m5` text NOT NULL,
  `d6m6` text NOT NULL,
  `d7m1` text NOT NULL,
  `d7m2` text NOT NULL,
  `d7m3` text NOT NULL,
  `d7m4` text NOT NULL,
  `d7m5` text NOT NULL,
  `d7m6` text NOT NULL,
  `note` text NOT NULL,
  `active_flag` enum('0','1','2') NOT NULL DEFAULT '1' COMMENT '1->active,0->inactive,2->delete',
  `email_flag` enum('0','1') NOT NULL DEFAULT '0' COMMENT '1->send',
  `file_path` varchar(255) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `added_by` int(11) NOT NULL,
  `date_updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- 2019-01-05 22:27:14