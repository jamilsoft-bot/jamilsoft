CREATE TABLE `apps` (
  `app_id` int(244) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `app_name` varchar(255) NOT NULL UNIQUE KEY,
  `app_fullname` varchar(255) NOT NULL,
  `app_summary` longtext NOT NULL,
  `app_category` varchar(255) DEFAULT 'Uncatigorized',
  `app_tags` longtext,
  `Date_install` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Date_updated` datetime DEFAULT NULL,
  `app_authur` varchar(255) DEFAULT 'Unknown',
  `app_email` varchar(255) DEFAULT NULL,
  `app_website` varchar(255) DEFAULT NULL,
  `app_others` longtext
);

CREATE TABLE `options` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(100) NOT NULL UNIQUE KEY,
  `value` longtext NOT NULL,
  `others` longtext
);

CREATE TABLE `users` (
  `id` int(110) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `username` varchar(50) NOT NULL UNIQUE KEY,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL DEFAULT 'user',
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL UNIQUE KEY,
  `phone` varchar(15) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `bio` longtext,
  `avatar` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `date_reg` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime DEFAULT NULL
);

INSERT INTO `options` (`name`, `value`, `others`) VALUES
('cprofile', '{\"name\":\"Jamilsoft Technologies\",\"summary\":\"Jamilsoft Technologies\",\"industry\":\"Jamilsoft Technologies\",\"country\":\"Nigeria\",\"city\":\"Bauchi\",\"street\":\"Gwallaga Street\",\"website\":\"https://jamilsoft.com.ng\",\"email\":\"myakububauchi@gmail.com\",\"phone\":\"+2349011050365\",\"rc\":\"456788\",\"submit\":\"Complete\"}', NULL);
