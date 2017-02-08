
CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(11) NOT NULL,
  `username` char(15) NOT NULL,
  `email` char(32) NOT NULL,
  `last_login_time` int(11) NOT NULL DEFAULT '0',
  `last_login_ip` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;