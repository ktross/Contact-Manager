CREATE DATABASE ktross_cm;

USE ktross_cm;

CREATE TABLE IF NOT EXISTS `cm_contacts` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_first_name` varchar(24) NOT NULL,
  `contact_last_name` varchar(24) NOT NULL,
  `contact_email` varchar(64),
  `contact_phone` int(10),
  `contact_address` varchar(128),
  PRIMARY KEY (`contact_id`)
);