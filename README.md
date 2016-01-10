# RControl
Rest control
Replace in CodeIgniter with all files.

simple at easy

1. Replace all the files in application
2. Add Sql

//Students

CREATE TABLE IF NOT EXISTS `students` (
`student_id` int(11) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `ip_address` varchar(50) NOT NULL,
  `status` enum('active','deleted') NOT NULL DEFAULT 'active',
  `created_timestamp` datetime NOT NULL,
  `updated_timestamp` datetime DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

// Logs

CREATE TABLE IF NOT EXISTS `logs` (
`id` int(11) NOT NULL,
  `uri` varchar(255) NOT NULL,
  `method` varchar(6) NOT NULL,
  `params` text,
  `api_key` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `time` int(11) NOT NULL,
  `rtime` float DEFAULT NULL,
  `authorized` varchar(1) NOT NULL,
  `response_code` smallint(3) DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

//keys

CREATE TABLE IF NOT EXISTS `keys` (
`id` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` int(1) NOT NULL DEFAULT '0',
  `is_private_key` int(1) NOT NULL DEFAULT '0',
  `ip_addresses` text,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

//Some Inserts

INSERT INTO `keys` (`id`, `key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresses`, `date_created`) VALUES
(1, '123456', 0, 0, 0, NULL, 0),
(2, '123456', 1, 0, 0, NULL, 12),
(3, '1234', 1, 0, 0, NULL, 2147483647);

INSERT INTO `students` (`student_id`, `email_address`, `password`, `first_name`, `last_name`, `phone_number`, `ip_address`, `status`, `created_timestamp`, `updated_timestamp`) VALUES
(1, 'jim@test.com', 'cc03e747a6afbbcbf8be7668acfebee5', 'Jim', 'Test', '0123456789', '127.0.0.1', 'active', '2016-01-10 02:17:12', NULL),
(2, 'jane@test.com', 'cc03e747a6afbbcbf8be7668acfebee5', 'Jane', 'Test tes', '0123456789', '127.0.0.1', 'active', '2016-01-10 02:17:54', '2016-01-10 04:24:07'),
(3, 'jimbo@yahoo.com', 'test1234', 'jimbo', 'rembo', '852452135', '', 'active', '0000-00-00 00:00:00', NULL),
(4, 'jimbo23@yahoo.com', '16d7a4fca7442dda3ad93c9a726597e4', 'Jorel', 'rembo', '852452135', '::1', 'active', '2016-01-10 03:38:01', NULL);




