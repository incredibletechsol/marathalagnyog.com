

CREATE TABLE `tbl_agent_payments` (
  `txn_id` int(10) NOT NULL AUTO_INCREMENT,
  `profile_id` int(10) NOT NULL,
  `agent_id` int(10) NOT NULL,
  `amtReceived` int(10) NOT NULL,
  `receivedTimStmp` date NOT NULL,
  `amtPaid` int(10) DEFAULT 0,
  `paidTimStamp` date DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`txn_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




CREATE TABLE `tbl_agent_profile` (
  `agent_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `birth_date` date DEFAULT NULL,
  `marital_status` varchar(9) DEFAULT NULL,
  `annv_date` date DEFAULT NULL,
  `mobile_no` bigint(12) NOT NULL,
  `alternate_mobile_no` bigint(12) DEFAULT NULL,
  `emailId` varchar(100) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `taluka` varchar(50) DEFAULT NULL,
  `photoname` varchar(50) DEFAULT NULL,
  `role` varchar(10) NOT NULL,
  `create_datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `lastUpdated_datetime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(16) NOT NULL,
  `status` varchar(1) NOT NULL,
  `isSuperAdmin` varchar(1) NOT NULL DEFAULT 'N',
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`agent_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1008 DEFAULT CHARSET=utf8;

INSERT INTO tbl_agent_profile VALUES("1001","Amit","Bhalerao","Male","1987-02-25","Married","2014-04-22","8796154725","9970446416","amitbaramatimca@gmail.com","Baramati","India","Maharashtra","Pune","Baramati","1001.jpg","100","2020-05-30 15:08:22","2020-05-30 08:38:22","114.5.103.212","Y","Y","Kasturi12#$");
INSERT INTO tbl_agent_profile VALUES("1002","Abhijit","Shinde","Male","1986-09-05","Married","0000-00-00","9860960529","9860960529","abhijit.shinde22@gmail.com","Mangalwedha","India","Maharashtra","Solapur","Mangalwedha","1002.jpg","100","2019-12-06 09:45:04","2019-12-06 03:15:04","157.33.224.12","Y","Y","123456");
INSERT INTO tbl_agent_profile VALUES("1004","Lahuraj","Jagtap","Male","1987-08-15","Single","0000-00-00","9665222212","9665222212","abhijit.shinde22@gmail.com","Nagane Galli Mangalwedha","India","Maharashtra","Solapur","1002","1004.jpg","200","2020-04-09 12:41:52","2020-04-09 06:11:52","180.247.138.36","Y","N","123456");
INSERT INTO tbl_agent_profile VALUES("1007","nimo","nimo","Female","","","","1123432123","1123432123","","","India","Maharashtra","","","noimg.gif","100","2020-05-28 02:35:13","0000-00-00 00:00:00","36.79.253.9","N","N","123456");



CREATE TABLE `tbl_agent_profiles` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `profile_id` bigint(20) NOT NULL,
  `agent_id` bigint(20) NOT NULL,
  `create_date` date NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `profile_id` (`profile_id`),
  KEY `agent_id` (`agent_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




CREATE TABLE `tbl_basic_profile` (
  `profile_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `birth_date` varchar(10) NOT NULL,
  `marital_status` varchar(9) NOT NULL,
  `religion` varchar(22) NOT NULL,
  `caste` varchar(30) NOT NULL,
  `sub_caste` varchar(30) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `create_datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `lastUpdated_datetime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(16) NOT NULL,
  `status` varchar(1) NOT NULL,
  `album_status` varchar(7) NOT NULL DEFAULT 'Private',
  `age` int(3) NOT NULL,
  `activation_dateTime` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `expiry_date` date DEFAULT NULL,
  `profile_created_by` text NOT NULL,
  PRIMARY KEY (`profile_id`)
) ENGINE=InnoDB AUTO_INCREMENT=351 DEFAULT CHARSET=utf8;

INSERT INTO tbl_basic_profile VALUES("310","jeffricritersroom ht","jeffricritersroom ht","1","jeffricrit","Separated","Hindu","MarathaKunbi","MarathaKunbi","","2020-06-17 09:00:29","2020-06-17 09:00:29","188.130.136.54","N","Private","2020","2020-06-17 09:00:29","2021-06-17","Mother");
INSERT INTO tbl_basic_profile VALUES("311","benjaminmoon https:/","benjaminmoon https:/","1","benjaminmo","Separated","Hindu","Maratha96Kuli","Maratha96Kuli","benjaminmoon https://wikipedia.org materooke","2020-06-20 02:46:38","2020-06-20 02:46:38","190.98.14.17","N","Private","2020","2020-06-20 02:46:38","2021-06-20","Agent");
INSERT INTO tbl_basic_profile VALUES("312","O6JP6VHR6K6P Corona ","O6JP6VHR6K6P Corona ","","O6JP6VHR6K","","Hindu","Maratha","Maratha","O6JP6VHR6K6P Corona News www.yandex.ru","2020-06-22 03:44:30","2020-06-22 03:44:30","95.217.202.217","N","Private","2020","2020-06-22 03:44:30","2021-06-22","Friend");
INSERT INTO tbl_basic_profile VALUES("313","benjaminmoon https:/","benjaminmoon https:/","1","benjaminmo","Separated","Hindu","MarathaDeshmukh","MarathaDeshmukh","benjaminmoon https://wikipedia.org materooke","2020-06-23 03:11:00","2020-06-23 03:11:00","187.72.79.33","N","Private","2020","2020-06-23 03:11:00","2021-06-23","Head Office");
INSERT INTO tbl_basic_profile VALUES("314","bernaldinobest https","bernaldinobest https","1","bernaldino","Divorced","Hindu","Maratha96Kuli","Maratha96Kuli","bernaldinobest https://wikipedia.org Drobbydoffom","2020-06-24 01:08:49","2020-06-24 01:08:49","138.99.194.111","N","Private","2020","2020-06-24 01:08:49","2021-06-24","Father");
INSERT INTO tbl_basic_profile VALUES("315","bernaldinobest https","bernaldinobest https","1","bernaldino","Divorced","Hindu","MarathaKunbi","MarathaKunbi","bernaldinobest https://wikipedia.org Drobbydoffom","2020-06-25 07:33:47","2020-06-25 07:33:47","197.60.216.178","N","Private","2020","2020-06-25 07:33:47","2021-06-25","Brother");
INSERT INTO tbl_basic_profile VALUES("316","Annehdshg","Annehdshg","1","Annehdshg","Widowed","Hindu","MarathaDeshmukh","MarathaDeshmukh","azsfsF2456","2020-07-03 05:42:40","2020-07-03 05:42:40","212.115.49.166","N","Private","2020","2020-07-03 05:42:40","2021-07-03","Agent");
INSERT INTO tbl_basic_profile VALUES("317","bernaldinobest https","bernaldinobest https","1","bernaldino","Separated","Hindu","MarathaKunbi","MarathaKunbi","bernaldinobest https://wikipedia.org Drobbydoffom","2020-07-06 08:44:36","2020-07-06 08:44:36","212.220.184.214","N","Private","2020","2020-07-06 08:44:36","2021-07-06","Mother");
INSERT INTO tbl_basic_profile VALUES("318","Wonda
","Wonda
","1","Paola
","Widowed","Hindu","MarathaDeshmukh","MarathaDeshmukh","Birgit
e1868
","2020-07-07 04:02:46","2020-07-07 04:02:46","46.8.16.252","N","Private","2020","2020-07-07 04:02:46","2021-07-07","Agent");
INSERT INTO tbl_basic_profile VALUES("319","bernaldinobest https","bernaldinobest https","1","bernaldino","Divorced","Hindu","MarathaDeshmukh","MarathaDeshmukh","bernaldinobest https://wikipedia.org Drobbydoffom","2020-07-07 09:44:36","2020-07-07 09:44:36","190.115.254.17","N","Private","2020","2020-07-07 09:44:36","2021-07-07","Mother");
INSERT INTO tbl_basic_profile VALUES("320","xxxvitriol42888 http","xxxvitriol42888 http","1","xxxvitriol","Separated","Hindu","MarathaDeshmukh","MarathaDeshmukh","","2020-07-08 02:58:26","2020-07-08 02:58:26","46.183.177.218","N","Private","2020","2020-07-08 02:58:26","2021-07-08","Agent");
INSERT INTO tbl_basic_profile VALUES("321","xxxvitriol42888 http","xxxvitriol42888 http","1","xxxvitriol","Widowed","Hindu","MarathaDeshmukh","MarathaDeshmukh","","2020-07-08 03:02:03","2020-07-08 03:02:03","46.183.177.218","N","Private","2020","2020-07-08 03:02:03","2021-07-08","Brother");
INSERT INTO tbl_basic_profile VALUES("322","xxxvitriol42888 http","xxxvitriol42888 http","1","xxxvitriol","Widowed","Hindu","MarathaDeshmukh","MarathaDeshmukh","","2020-07-08 03:28:26","2020-07-08 03:28:26","46.183.177.218","N","Private","2020","2020-07-08 03:28:26","2021-07-08","Friend");
INSERT INTO tbl_basic_profile VALUES("323","Shemeka
","Shemeka
","1","Maryanna
","Divorced","Hindu","MarathaDeshmukh","MarathaDeshmukh","Ryann
q2061
","2020-07-08 11:37:55","2020-07-08 11:37:55","194.34.248.239","N","Private","2020","2020-07-08 11:37:55","2021-07-08","Brother");
INSERT INTO tbl_basic_profile VALUES("324","Shyla
","Shyla
","1","Nanci
","Separated","Hindu","Maratha96Kuli","Maratha96Kuli","Melida
b603
","2020-07-09 01:31:32","2020-07-09 01:31:32","188.130.136.237","N","Private","2020","2020-07-09 01:31:32","2021-07-09","Head Office");
INSERT INTO tbl_basic_profile VALUES("325","Lovetta
","Lovetta
","1","Dionna
","Divorced","Hindu","MarathaDeshmukh","MarathaDeshmukh","Kacey
c2463
","2020-07-09 09:18:21","2020-07-09 09:18:21","212.115.49.146","N","Private","2020","2020-07-09 09:18:21","2021-07-09","Mother");
INSERT INTO tbl_basic_profile VALUES("326","bernaldinobest https","bernaldinobest https","1","bernaldino","Widowed","Hindu","MarathaDeshmukh","MarathaDeshmukh","bernaldinobest https://wikipedia.org Drobbydoffom","2020-07-10 04:30:33","2020-07-10 04:30:33","37.213.213.112","N","Private","2020","2020-07-10 04:30:33","2021-07-10","Father");
INSERT INTO tbl_basic_profile VALUES("327","jonnysashgoods https","jonnysashgoods https","1","jonnysashg","Separated","Hindu","MarathaDeshmukh","MarathaDeshmukh","onnysashgoods","2020-07-16 09:54:38","2020-07-16 09:54:38","94.158.190.97","N","Private","2020","2020-07-16 09:54:38","2021-07-16","Friend");
INSERT INTO tbl_basic_profile VALUES("328","ÐŸÐ¾Ð±ÐµÐ´Ð°! Ð¡Ð¼Ð¾","ÐŸÐ¾Ð±ÐµÐ´Ð°! Ð¡Ð¼Ð¾","1","Ð­Ñ‚Ð¾Ñ‚ Ð","Divorced","Hindu","Maratha96Kuli","Maratha96Kuli","Dora
y3075
","2020-07-18 05:23:17","2020-07-18 05:23:17","46.8.222.44","N","Private","2020","2020-07-18 05:23:17","2021-07-18","Friend");
INSERT INTO tbl_basic_profile VALUES("329","hjskdhfjks https://a","hjskdhfjks https://a","1","hjskdhfjks","Widowed","Hindu","Maratha96Kuli","Maratha96Kuli","hjskdhfjks","2020-07-19 03:35:16","2020-07-19 03:35:16","178.217.76.31","N","Private","2020","2020-07-19 03:35:16","2021-07-19","Head Office");
INSERT INTO tbl_basic_profile VALUES("330","datryugjbv zuddtqar ","datryugjbv zuddtqar ","1","datryugjbv","Divorced","Hindu","MarathaDeshmukh","MarathaDeshmukh","kfwo34iACj1q","2020-07-23 06:59:25","2020-07-23 06:59:25","213.111.153.191","N","Private","2020","2020-07-23 06:59:25","2021-07-23","Friend");
INSERT INTO tbl_basic_profile VALUES("333","jffhjdjjrrf: www.yan","jffhjdjjrrf: www.yan","","jffhjdjjrr","","Hindu","Maratha","Maratha","jffhjdjjrrf: www.yandex.ru","2020-07-30 12:27:57","2020-07-30 12:27:57","193.187.174.45","N","Private","2020","2020-07-30 12:27:57","2021-07-30","Friend");
INSERT INTO tbl_basic_profile VALUES("334","jffhjdjjrrf: www.yan","jffhjdjjrrf: www.yan","","jffhjdjjrr","","Hindu","Maratha","Maratha","jffhjdjjrrf: www.yandex.ru","2020-08-01 09:12:29","2020-08-01 09:12:29","176.103.85.14","N","Private","2020","2020-08-01 09:12:29","2021-08-01","Agent");
INSERT INTO tbl_basic_profile VALUES("335","Ditah","DitahUA","1","Ditah","Divorced","Hindu","MarathaDeshmukh","MarathaDeshmukh","8ia7Se9x@zX","2020-08-01 01:06:34","2020-08-01 01:06:34","95.81.208.162","N","Private","2020","2020-08-01 01:06:34","2021-08-01","Friend");
INSERT INTO tbl_basic_profile VALUES("336","jffhjdjjrrf: www.yan","jffhjdjjrrf: www.yan","","jffhjdjjrr","","Hindu","Maratha","Maratha","jffhjdjjrrf: www.yandex.ru","2020-08-02 08:58:56","2020-08-02 08:58:56","176.103.85.14","N","Private","2020","2020-08-02 08:58:56","2021-08-02","Friend");
INSERT INTO tbl_basic_profile VALUES("337","jffhjdjjrrf: www.yan","jffhjdjjrrf: www.yan","","jffhjdjjrr","","Hindu","Maratha","Maratha","jffhjdjjrrf: www.yandex.ru","2020-08-04 09:05:36","2020-08-04 09:05:36","95.217.202.217","N","Private","2020","2020-08-04 09:05:36","2021-08-04","Father");
INSERT INTO tbl_basic_profile VALUES("338","rBgPsvVTyuoWRQ","TetDBFsJflrvkzOH","Male","EXkPJORfpt","Unmarried","Hindu","Maratha","Maratha","2UbRgvtjGycl!","2020-08-05 09:04:06","2020-08-05 09:04:06","78.248.16.223","N","Private","2020","2020-08-05 09:04:06","2021-08-05","Self");
INSERT INTO tbl_basic_profile VALUES("339","rvpcfQiLWRGSbFDI","LRDPnVCjrQMJ","Male","YFAEhUxVli","Unmarried","Hindu","Maratha","Maratha","1qgHrYNBjifc!","2020-08-05 09:04:10","2020-08-05 09:04:10","78.248.16.223","N","Private","2020","2020-08-05 09:04:10","2021-08-05","Self");
INSERT INTO tbl_basic_profile VALUES("340","Lizeth
","Lizeth
","1","Mertie
","Divorced","Hindu","Maratha96Kuli","Maratha96Kuli","n1147
4DsfS5","2020-08-10 07:04:42","2020-08-10 07:04:42","46.8.23.165","N","Private","2020","2020-08-10 07:04:42","2021-08-10","Father");
INSERT INTO tbl_basic_profile VALUES("341","EINNAHMEN IM INTERNE","EINNAHMEN IM INTERNE","1","1977-11-11","Widowed","Hindu","MarathaDeshmukh","MarathaDeshmukh","91^keT6euiF","2020-08-19 07:45:31","2020-08-19 07:45:31","156.146.63.65","N","Private","42","2020-08-19 07:45:31","2021-08-19","Sister");
INSERT INTO tbl_basic_profile VALUES("342","EINNAHMEN IM INTERNE","EINNAHMEN IM INTERNE","1","#file_link","Widowed","Hindu","MarathaKunbi","MarathaKunbi","dpcK4h@93oF","2020-08-20 12:19:06","2020-08-20 12:19:06","156.146.63.65","N","Private","2020","2020-08-20 12:19:06","2021-08-20","Sister");
INSERT INTO tbl_basic_profile VALUES("343","bernaldinobest https","bernaldinobest https","1","bernaldino","Widowed","Hindu","MarathaDeshmukh","MarathaDeshmukh","bernaldinobest https://wikipedia.org Drobbydoffom","2020-08-21 11:45:29","2020-08-21 11:45:29","195.242.218.67","N","Private","2020","2020-08-21 11:45:29","2021-08-21","Father");
INSERT INTO tbl_basic_profile VALUES("344","bernaldinobest https","bernaldinobest https","1","bernaldino","Divorced","Hindu","Maratha96Kuli","Maratha96Kuli","bernaldinobest https://wikipedia.org Drobbydoffom","2020-08-22 09:01:47","2020-08-22 09:01:47","193.70.80.73","N","Private","2020","2020-08-22 09:01:47","2021-08-22","Friend");
INSERT INTO tbl_basic_profile VALUES("345","jeffrearoom https://","jeffrearoom https://","1","jeffrearoo","Separated","Hindu","MarathaKunbi","MarathaKunbi","jeffrearoom https://apple.com memn","2020-09-09 11:47:28","2020-09-09 11:47:28","184.178.172.28","N","Private","2020","2020-09-09 11:47:28","2021-09-09","Agent");
INSERT INTO tbl_basic_profile VALUES("346","bernaldino https://w","bernaldino https://w","1","bernaldino","Separated","Hindu","MarathaKunbi","MarathaKunbi","bernaldino https://wikipedia.org Drobbydoffom","2020-09-09 04:28:00","2020-09-09 04:28:00","149.202.87.65","N","Private","2020","2020-09-09 04:28:00","2021-09-09","Father");
INSERT INTO tbl_basic_profile VALUES("347","Nmvjefbjedddskhfugfh","Nmvjefbjedddskhfugfh","1","Nmvjefbjed","Separated","Hindu","Maratha96Kuli","Maratha96Kuli","oKiv8@4ya7T","2020-09-12 10:18:46","2020-09-12 10:18:46","89.36.76.117","N","Private","2020","2020-09-12 10:18:46","2021-09-12","Father");
INSERT INTO tbl_basic_profile VALUES("348","Nmvjefbjedddskhfugfh","Nmvjefbjedddskhfugfh","1","Nmvjefbjed","Separated","Hindu","MarathaDeshmukh","MarathaDeshmukh","oKiv8@4ya7T","2020-09-13 03:30:11","2020-09-13 03:30:11","89.36.76.117","N","Private","2020","2020-09-13 03:30:11","2021-09-13","Father");
INSERT INTO tbl_basic_profile VALUES("349","Thaddetishe https://","Thaddetishe https://","1","Thaddetish","Divorced","Hindu","Maratha96Kuli","Maratha96Kuli","Thaddetishe https://apple.com bom","2020-09-17 01:38:59","2020-09-17 01:38:59","185.155.233.15","N","Private","2020","2020-09-17 01:38:59","2021-09-17","Brother");
INSERT INTO tbl_basic_profile VALUES("350","bromaleksÑ€erson htt","bromaleksÑ€erson htt","1","bromaleksÑ","Separated","Hindu","MarathaDeshmukh","MarathaDeshmukh","bromaleksÑ€erson https://google.ru mor","2020-10-12 05:11:20","2020-10-12 05:11:20","188.130.136.111","N","Private","2020","2020-10-12 05:11:20","2021-10-12","Head Office");



CREATE TABLE `tbl_contact_info` (
  `contact_id` int(10) NOT NULL AUTO_INCREMENT,
  `mobile_no` bigint(12) NOT NULL,
  `alternate_mobile_no` bigint(12) NOT NULL,
  `email_Id` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `country` varchar(150) NOT NULL,
  `state` varchar(150) NOT NULL,
  `district` varchar(10) NOT NULL,
  `city` varchar(150) NOT NULL,
  `goan` varchar(50) NOT NULL,
  `profile_id` bigint(20) NOT NULL,
  PRIMARY KEY (`contact_id`),
  KEY `profile_id` (`profile_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

INSERT INTO tbl_contact_info VALUES("3","0","0","","jffhjdjjrrf: www.yandex.ru","India","Maharashtra","","","","333");
INSERT INTO tbl_contact_info VALUES("4","0","0","","jffhjdjjrrf: www.yandex.ru","India","Maharashtra","","","","334");
INSERT INTO tbl_contact_info VALUES("5","5859","2575","maederdoerthe@gmx.de","https://diabeteses.site/xenadrine/01-02-2020.php","India","Maharashtra","Akola","Ditah","Great Harwood, Lancs","335");
INSERT INTO tbl_contact_info VALUES("6","0","0","","jffhjdjjrrf: www.yandex.ru","India","Maharashtra","","","","336");
INSERT INTO tbl_contact_info VALUES("7","0","0","","jffhjdjjrrf: www.yandex.ru","India","Maharashtra","","","","337");
INSERT INTO tbl_contact_info VALUES("8","6825969498","0","davidmurpy25@gmail.com","auhvZRbAoXrFp","India","Maharashtra","Ahmednagar","ovGLTxkJ","XQRkbOTIdhgJZFE","338");
INSERT INTO tbl_contact_info VALUES("9","3097354351","0","davidmurpy25@gmail.com","svPZEmQASqKuhOxd","India","Maharashtra","Ahmednagar","iColGfhQxZ","FxoPStkzZKhmB","339");
INSERT INTO tbl_contact_info VALUES("10","509464764","0","karoline.bochert@gmx.de","Oh, du bist so sexy! Du hast ein Feuer in meiner Hose gemacht! Mich hier suchen  -
 https://jkfosnh.pjsas.fot/kds5n6s","India","Maharashtra","Gadchiroli","Collene
","York","340");
INSERT INTO tbl_contact_info VALUES("11","7660","4135","igorzhuravlyov1996835b8ic+foy@list.ru","PASSIVES EINKOMMEN ONLINE VOR 5967 EURO AM TAG - INNERHALB EINER WOCHE SIND SIE FINANZIELL UNABHANGIG: https://mail.ru/?Richardflurb=Matthewkiz","India","Maharashtra","Nandurbar","EINNAHMEN IM INTERNET VON 8867 EUR IN DER WOCHE - SIE WERDEN ALLE IHRE KREDITE IN EINER WOCHE ZURUCKZAHLEN: https://mail.ru/?Richardflurb=Matthewkiz","Hemel Hempstead","341");
INSERT INTO tbl_contact_info VALUES("12","506915322","0","igorzhuravlyov1996835b8ic+qni@list.ru","EINNAHMEN IM INTERNET VON 7748 EURO IN DER WOCHE - KEINE BERUFSERFAHRUNG: https://mail.ru/?Richardflurb=Matthewkiz","India","Maharashtra","Pune","#file_links["C:Frazes.txt",1,N]: https://mail.ru/?Richard#gennick[QowojyrepuvekqVZ,2,5]=Matthew#gennick[Civiheeqewybebeb,2,5]","Salzburg, Austria","342");
INSERT INTO tbl_contact_info VALUES("13","506915322","0","juliagaskoin95@yandex.ru","bernaldinobest https://wikipedia.org","India","Maharashtra","Ratnagiri","bernaldinobest https://wikipedia.org 3776779","Falmouth","343");
INSERT INTO tbl_contact_info VALUES("14","509464764","0","juliagaskoin95@yandex.ru","bernaldinobest https://wikipedia.org","India","Maharashtra","Sangli","bernaldinobest https://wikipedia.org 6558613","Cleator moor","344");
INSERT INTO tbl_contact_info VALUES("15","509464764","0","lannienhicholson155@gmail.com","jeffrearoom https://apple.com","India","Maharashtra","Solapur","jeffrearoom https://apple.com 6171","Portugal","345");
INSERT INTO tbl_contact_info VALUES("16","509464764","0","laurenecherpak822@yandex.ru","bernaldino https://wikipedia.org","India","Maharashtra","Nashik","bernaldino https://wikipedia.org 3754200","Lochgilphead","346");
INSERT INTO tbl_contact_info VALUES("17","509464764","0","igorzakharov1985522reu+qqqto@list.ru","Nmvjefbjedddskhfugfhisjdiubgufihwsdjwsu ifhsidjiswfhdueihfiehifeji ifheidfheidhfiehfiejofejgi jfoedjfoejdgiehdfocjfdenghirho https://mail.ru/?bvncdbjdfjdfh=rhfidbvgjf","India","Maharashtra","Pune","Nmvjefbjedddskhfugfhisjdiubgufihwsdjwsu ifhsidjiswfhdueihfiehifeji ifheidfheidhfiehfiejofejgi jfoedjfoejdgiehdfocjfdenghirho https://mail.ru/?bvncdbjd","Winchester","347");
INSERT INTO tbl_contact_info VALUES("18","506915322","0","igorzakharov1985522reu+qqees@list.ru","Nmvjefbjedddskhfugfhisjdiubgufihwsdjwsu ifhsidjiswfhdueihfiehifeji ifheidfheidhfiehfiejofejgi jfoedjfoejdgiehdfocjfdenghirho https://mail.ru/?bvncdbjdfjdfh=rhfidbvgjf","India","Maharashtra","Belgaum","Nmvjefbjedddskhfugfhisjdiubgufihwsdjwsu ifhsidjiswfhdueihfiehifeji ifheidfheidhfiehfiejofejgi jfoedjfoejdgiehdfocjfdenghirho https://mail.ru/?bvncdbjd","Victoria","348");
INSERT INTO tbl_contact_info VALUES("19","509464764","0","oziel6be@rambler.ru","Thaddetishe https://apple.com","India","Maharashtra","Satara","Thaddetishe https://apple.com","Port Townsend","349");
INSERT INTO tbl_contact_info VALUES("20","509464764","0","bromaleks1@yandex.ru","bromaleksÑ€erson https://google.ru","India","Maharashtra","Kolhapur","bromaleksÑ€erson https://google.ru h","Upavon, Wiltshire","350");



CREATE TABLE `tbl_family_details` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `father_name` varchar(100) DEFAULT NULL,
  `father_occupation` varchar(100) DEFAULT NULL,
  `mother_name` varchar(100) DEFAULT NULL,
  `mother_occupation` varchar(100) DEFAULT NULL,
  `noOfBrothers` varchar(2) DEFAULT '0',
  `noOfBrothersMarried` varchar(2) DEFAULT NULL,
  `noOfSisters` varchar(2) DEFAULT NULL,
  `noOfSistersMarried` varchar(2) DEFAULT NULL,
  `mamaLastName` varchar(20) DEFAULT NULL,
  `relativeLastNames` text DEFAULT NULL,
  `profile_id` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `profile_id` (`profile_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

INSERT INTO tbl_family_details VALUES("3","jffhjdjjrrf: www.yandex.ru","jffhjdjjrrf: www.yandex.ru","jffhjdjjrrf: www.yandex.ru","jffhjdjjrrf: www.yandex.ru"," "," "," "," ","natasha.kubareva.kub"," sox0zWvQa","333");
INSERT INTO tbl_family_details VALUES("4","jffhjdjjrrf: www.yandex.ru","jffhjdjjrrf: www.yandex.ru","jffhjdjjrrf: www.yandex.ru","jffhjdjjrrf: www.yandex.ru"," "," "," "," ","priscilla.rhodes.rho","5Yu6DO L","334");
INSERT INTO tbl_family_details VALUES("5","Ditah","Sailing","Ditah","Brazilian jiu-jitsu","9","2","3","3","Ditah","Ditah","335");
INSERT INTO tbl_family_details VALUES("6","jffhjdjjrrf: www.yandex.ru","jffhjdjjrrf: www.yandex.ru","jffhjdjjrrf: www.yandex.ru","jffhjdjjrrf: www.yandex.ru"," "," "," "," ","priscilla.rhodes.rho","fAKK q1TrN","336");
INSERT INTO tbl_family_details VALUES("7","jffhjdjjrrf: www.yandex.ru","jffhjdjjrrf: www.yandex.ru","jffhjdjjrrf: www.yandex.ru","jffhjdjjrrf: www.yandex.ru"," "," "," "," ","priscilla.rhodes.rho"," rjyW59jX8d","337");
INSERT INTO tbl_family_details VALUES("8","CyecNJzxhiLaf","mWudsDjLxgVN","MoWhjRNLCbe","iDrptATRa"," "," "," "," ","fuZCVUdh","FwVLRvIXzbDKjoC","338");
INSERT INTO tbl_family_details VALUES("9","UVxISDrgcM","kRVGgWTMvyizBC","NZDmcXEzu","xTyOjIfWbwiGNUen"," "," "," "," ","FsGVvnCWeKtEUSru","LDqaNlUIK","339");
INSERT INTO tbl_family_details VALUES("10","Lizeth
","x9156
gagdgbwej.pafes.fot","Lizeth
","g2876
gagdgbwej.pafes.fot","2","2","3","2","Lizeth
","Sherrell
","340");
INSERT INTO tbl_family_details VALUES("11","EINNAHMEN IM INTERNET VOR 6946 EURO IN DER WOCHE - IN EINEM MONAT KONNEN SIE SICH EIN TEURES AUTO KA","EINNAHMEN IM INTERNET VOR 6946 EURO IN DER WOCHE - IN EINEM MONAT KONNEN SIE SICH EIN TEURES AUTO KA","EINNAHMEN IM INTERNET VOR 6946 EURO IN DER WOCHE - IN EINEM MONAT KONNEN SIE SICH EIN TEURES AUTO KA","EINNAHMEN IM INTERNET VOR 6946 EURO IN DER WOCHE - IN EINEM MONAT KONNEN SIE SICH EIN TEURES AUTO KA","5","1","5","3","EINNAHMEN IM INTERNE","PASSIVES EINKOMMEN IM INTERNET VOR 7757 EUR PRO TAG - DIE BESTE INVESTITIONSMOGLICHKEIT: https://mail.ru/?Richardflurb=Matthewkiz","341");
INSERT INTO tbl_family_details VALUES("12","EINNAHMEN IM INTERNET VON 6776 EURO AM TAG - DER BESTE WEG, UM ONLINE GELD ZU VERDIENEN: https://mai","EINNAHMEN IM INTERNET VON 6776 EURO AM TAG - DER BESTE WEG, UM ONLINE GELD ZU VERDIENEN: https://mai","EINNAHMEN IM INTERNET VON 6776 EURO AM TAG - DER BESTE WEG, UM ONLINE GELD ZU VERDIENEN: https://mai","EINNAHMEN IM INTERNET VON 6776 EURO AM TAG - DER BESTE WEG, UM ONLINE GELD ZU VERDIENEN: https://mai","5","8","1","7","EINNAHMEN IM INTERNE","PASSIVES EINKOMMEN ONLINE VOR 3976 EUR IN DER WOCHE - KEINE BERUFSERFAHRUNG: https://mail.ru/?Richardflurb=Matthewkiz","342");
INSERT INTO tbl_family_details VALUES("13","bernaldinobest https://wikipedia.org 523857","bernaldinobest https://wikipedia.org","bernaldinobest https://wikipedia.org 523857","bernaldinobest https://wikipedia.org","3","3","4","2","bernaldinobest https","bernaldinobest https://wikipedia.org 9796642","343");
INSERT INTO tbl_family_details VALUES("14","bernaldinobest https://wikipedia.org 8448841","bernaldinobest https://wikipedia.org","bernaldinobest https://wikipedia.org 8448841","bernaldinobest https://wikipedia.org","1","8","2","9","bernaldinobest https","bernaldinobest https://wikipedia.org 5073409","344");
INSERT INTO tbl_family_details VALUES("15","jeffrearoom https://apple.com 4834","jeffrearoom https://apple.com","jeffrearoom https://apple.com 4834","jeffrearoom https://apple.com","5","8","4","3","jeffrearoom https://","jeffrearoom https://apple.com 6702","345");
INSERT INTO tbl_family_details VALUES("16","bernaldino https://wikipedia.org 5717463","bernaldino https://wikipedia.org","bernaldino https://wikipedia.org 5717463","bernaldino https://wikipedia.org","3","4","5","4","bernaldino https://w","bernaldino https://wikipedia.org 5389512","346");
INSERT INTO tbl_family_details VALUES("17","Nmvjefbjedddskhfugfhisjdiubgufihwsdjwsu ifhsidjiswfhdueihfiehifeji ifheidfheidhfiehfiejofejgi jfoedj","Nmvjefbjedddskhfugfhisjdiubgufihwsdjwsu ifhsidjiswfhdueihfiehifeji ifheidfheidhfiehfiejofejgi jfoedj","Nmvjefbjedddskhfugfhisjdiubgufihwsdjwsu ifhsidjiswfhdueihfiehifeji ifheidfheidhfiehfiejofejgi jfoedj","Nmvjefbjedddskhfugfhisjdiubgufihwsdjwsu ifhsidjiswfhdueihfiehifeji ifheidfheidhfiehfiejofejgi jfoedj","6","8","9","7","Nmvjefbjedddskhfugfh","Nmvjefbjedddskhfugfhisjdiubgufihwsdjwsu ifhsidjiswfhdueihfiehifeji ifheidfheidhfiehfiejofejgi jfoedjfoejdgiehdfocjfdenghirho https://mail.ru/?bvncdbjdfjdfh=rhfidbvgjf","347");
INSERT INTO tbl_family_details VALUES("18","Nmvjefbjedddskhfugfhisjdiubgufihwsdjwsu ifhsidjiswfhdueihfiehifeji ifheidfheidhfiehfiejofejgi jfoedj","Nmvjefbjedddskhfugfhisjdiubgufihwsdjwsu ifhsidjiswfhdueihfiehifeji ifheidfheidhfiehfiejofejgi jfoedj","Nmvjefbjedddskhfugfhisjdiubgufihwsdjwsu ifhsidjiswfhdueihfiehifeji ifheidfheidhfiehfiejofejgi jfoedj","Nmvjefbjedddskhfugfhisjdiubgufihwsdjwsu ifhsidjiswfhdueihfiehifeji ifheidfheidhfiehfiejofejgi jfoedj","7","5","8","8","Nmvjefbjedddskhfugfh","Nmvjefbjedddskhfugfhisjdiubgufihwsdjwsu ifhsidjiswfhdueihfiehifeji ifheidfheidhfiehfiejofejgi jfoedjfoejdgiehdfocjfdenghirho https://mail.ru/?bvncdbjdfjdfh=rhfidbvgjf","348");
INSERT INTO tbl_family_details VALUES("19","Thaddetishe https://apple.com","Thaddetishe https://apple.com","Thaddetishe https://apple.com","Thaddetishe https://apple.com","8","6","7","8","Thaddetishe https://","Thaddetishe https://apple.com","349");
INSERT INTO tbl_family_details VALUES("20","bromaleksÑ€erson https://google.ru 8","bromaleksÑ€erson https://google.ru","bromaleksÑ€erson https://google.ru 8","bromaleksÑ€erson https://google.ru","6","2","5","7","bromaleksÑ€erson htt","bromaleksÑ€erson https://google.ru h","350");



CREATE TABLE `tbl_horoscope_photo` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `imagename` varchar(500) DEFAULT NULL,
  `profile_id` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `profile_id` (`profile_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

INSERT INTO tbl_horoscope_photo VALUES("3","noimg.gif","333");
INSERT INTO tbl_horoscope_photo VALUES("4","noimg.gif","334");
INSERT INTO tbl_horoscope_photo VALUES("5","noimg.gif","335");
INSERT INTO tbl_horoscope_photo VALUES("6","noimg.gif","336");
INSERT INTO tbl_horoscope_photo VALUES("7","noimg.gif","337");
INSERT INTO tbl_horoscope_photo VALUES("8","noimg.gif","338");
INSERT INTO tbl_horoscope_photo VALUES("9","noimg.gif","339");
INSERT INTO tbl_horoscope_photo VALUES("10","noimg.gif","340");
INSERT INTO tbl_horoscope_photo VALUES("11","noimg.gif","341");
INSERT INTO tbl_horoscope_photo VALUES("12","noimg.gif","342");
INSERT INTO tbl_horoscope_photo VALUES("13","noimg.gif","343");
INSERT INTO tbl_horoscope_photo VALUES("14","noimg.gif","344");
INSERT INTO tbl_horoscope_photo VALUES("15","noimg.gif","345");
INSERT INTO tbl_horoscope_photo VALUES("16","noimg.gif","346");
INSERT INTO tbl_horoscope_photo VALUES("17","noimg.gif","347");
INSERT INTO tbl_horoscope_photo VALUES("18","noimg.gif","348");
INSERT INTO tbl_horoscope_photo VALUES("19","noimg.gif","349");
INSERT INTO tbl_horoscope_photo VALUES("20","noimg.gif","350");



CREATE TABLE `tbl_partner_preference` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `looking_for` varchar(9) DEFAULT NULL,
  `age_from` int(3) DEFAULT NULL,
  `age_to` int(3) DEFAULT NULL,
  `partner_education` text DEFAULT NULL,
  `partner_caste` varchar(40) DEFAULT NULL,
  `profile_id` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `profile_id` (`profile_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

INSERT INTO tbl_partner_preference VALUES("3","","18","18","","Maratha","333");
INSERT INTO tbl_partner_preference VALUES("4","","18","18","","Maratha","334");
INSERT INTO tbl_partner_preference VALUES("5","Separated","52","35","","Maratha 96Kuli","335");
INSERT INTO tbl_partner_preference VALUES("6","","18","18","","Maratha","336");
INSERT INTO tbl_partner_preference VALUES("7","","18","18","","Maratha","337");
INSERT INTO tbl_partner_preference VALUES("8","1","0","0","1","1","338");
INSERT INTO tbl_partner_preference VALUES("9","1","0","0","1","1","339");
INSERT INTO tbl_partner_preference VALUES("10","Separated","31","69","","Maratha Deshmukh","340");
INSERT INTO tbl_partner_preference VALUES("11","Widowed","52","55","","Maratha Kunbi","341");
INSERT INTO tbl_partner_preference VALUES("12","Separated","34","70","","Maratha Kunbi","342");
INSERT INTO tbl_partner_preference VALUES("13","Divorced","42","45","","Maratha Deshmukh","343");
INSERT INTO tbl_partner_preference VALUES("14","Widowed","31","67","","Maratha Deshmukh","344");
INSERT INTO tbl_partner_preference VALUES("15","Separated","36","63","","Maratha 96Kuli","345");
INSERT INTO tbl_partner_preference VALUES("16","Separated","19","53","","Maratha Deshmukh","346");
INSERT INTO tbl_partner_preference VALUES("17","Widowed","20","22","","Maratha Deshmukh","347");
INSERT INTO tbl_partner_preference VALUES("18","Separated","21","30","","Maratha 96Kuli","348");
INSERT INTO tbl_partner_preference VALUES("19","Separated","40","44","","Maratha 96Kuli","349");
INSERT INTO tbl_partner_preference VALUES("20","Separated","47","47","","Maratha 96Kuli","350");



CREATE TABLE `tbl_photo_album` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `imagename` varchar(500) DEFAULT NULL,
  `profile_id` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `profile_id` (`profile_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




CREATE TABLE `tbl_physical_attr` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `heightFt` int(3) DEFAULT 0,
  `heightInch` int(3) DEFAULT 0,
  `weight` int(3) DEFAULT 0,
  `blood_group` varchar(15) DEFAULT NULL,
  `complexion` varchar(15) DEFAULT NULL,
  `profile_id` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `profile_id` (`profile_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

INSERT INTO tbl_physical_attr VALUES("3","0","0","0"," "," ","333");
INSERT INTO tbl_physical_attr VALUES("4","0","0","0"," "," ","334");
INSERT INTO tbl_physical_attr VALUES("5","5","4","0","O+","GORA,SMART","335");
INSERT INTO tbl_physical_attr VALUES("6","0","0","0"," "," ","336");
INSERT INTO tbl_physical_attr VALUES("7","0","0","0"," "," ","337");
INSERT INTO tbl_physical_attr VALUES("8","4","0","0"," "," ","338");
INSERT INTO tbl_physical_attr VALUES("9","4","0","0"," "," ","339");
INSERT INTO tbl_physical_attr VALUES("10","7","5","0","AB+","GAVHAL","340");
INSERT INTO tbl_physical_attr VALUES("11","6","2","0","AB+","FAIR,SMART","341");
INSERT INTO tbl_physical_attr VALUES("12","7","10","0","B","NIMGORA","342");
INSERT INTO tbl_physical_attr VALUES("13","7","12","0","B","GAVHAL,SMART","343");
INSERT INTO tbl_physical_attr VALUES("14","7","5","0","B","GAVHAL","344");
INSERT INTO tbl_physical_attr VALUES("15","5","4","0","AB+","BLACK","345");
INSERT INTO tbl_physical_attr VALUES("16","6","5","0","B+","GAVHAL,SMART","346");
INSERT INTO tbl_physical_attr VALUES("17","7","9","0","A","BLACK","347");
INSERT INTO tbl_physical_attr VALUES("18","7","3","0","AB","GAVHAL,SMART","348");
INSERT INTO tbl_physical_attr VALUES("19","6","2","0","O","GORA","349");
INSERT INTO tbl_physical_attr VALUES("20","6","6","0","AB+","NIMGORA","350");



CREATE TABLE `tbl_profile` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `education` varchar(23) DEFAULT NULL,
  `annualIncome` bigint(20) DEFAULT NULL,
  `occupation` varchar(50) DEFAULT NULL,
  `profile_id` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `profile_id` (`profile_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

INSERT INTO tbl_profile VALUES("3"," ","0","jffhjdjjrrf: www.yandex.ru","333");
INSERT INTO tbl_profile VALUES("4"," ","0","jffhjdjjrrf: www.yandex.ru","334");
INSERT INTO tbl_profile VALUES("5","Medicine - General","0","Fishing","335");
INSERT INTO tbl_profile VALUES("6"," ","0","jffhjdjjrrf: www.yandex.ru","336");
INSERT INTO tbl_profile VALUES("7"," ","0","jffhjdjjrrf: www.yandex.ru","337");
INSERT INTO tbl_profile VALUES("8"," ","0","TvBxputjM","338");
INSERT INTO tbl_profile VALUES("9"," ","0","gcGbpuPqXtxELeyZ","339");
INSERT INTO tbl_profile VALUES("10","LLM","0","l956
gagdgbwej.pafes.fot","340");
INSERT INTO tbl_profile VALUES("11","Medicine - General","0","EINNAHMEN IM INTERNET VOR 6946 EURO IN DER WOCHE -","341");
INSERT INTO tbl_profile VALUES("12","Medicine - General","0","EINNAHMEN IM INTERNET VON 6776 EURO AM TAG - DER B","342");
INSERT INTO tbl_profile VALUES("13","B.E-CIVIL","0","bernaldinobest https://wikipedia.org","343");
INSERT INTO tbl_profile VALUES("14","B.ED","0","bernaldinobest https://wikipedia.org","344");
INSERT INTO tbl_profile VALUES("15","M.ED","0","jeffrearoom https://apple.com","345");
INSERT INTO tbl_profile VALUES("16","B.ED","0","bernaldino https://wikipedia.org","346");
INSERT INTO tbl_profile VALUES("17","Medicine - General","0","Nmvjefbjedddskhfugfhisjdiubgufihwsdjwsu ifhsidjisw","347");
INSERT INTO tbl_profile VALUES("18","Medicine - General","0","Nmvjefbjedddskhfugfhisjdiubgufihwsdjwsu ifhsidjisw","348");
INSERT INTO tbl_profile VALUES("19","Medicine - General","0","Thaddetishe https://apple.com","349");
INSERT INTO tbl_profile VALUES("20","Medicine - General","0","bromaleksÑ€erson https://google.ru","350");



CREATE TABLE `tbl_profile_approvals` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `appovalDateTime` varchar(500) NOT NULL,
  `approverId` bigint(20) NOT NULL,
  `profile_id` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `profile_id` (`profile_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO tbl_profile_approvals VALUES("1","2020-07-26 08:56:34","1001","331");
INSERT INTO tbl_profile_approvals VALUES("2","2020-07-26 09:08:03","1001","332");



CREATE TABLE `tbl_profile_identification_proof` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `idtype` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `profile_id` bigint(20) NOT NULL,
  `imagename` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `profile_id` (`profile_id`),
  CONSTRAINT `tbl_profile_identification_proof_ibfk_1` FOREIGN KEY (`profile_id`) REFERENCES `tbl_basic_profile` (`profile_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO tbl_profile_identification_proof VALUES("3","","333","noimg.gif");
INSERT INTO tbl_profile_identification_proof VALUES("4","","334","noimg.gif");
INSERT INTO tbl_profile_identification_proof VALUES("5","","335","noimg.gif");
INSERT INTO tbl_profile_identification_proof VALUES("6","","336","noimg.gif");
INSERT INTO tbl_profile_identification_proof VALUES("7","","337","noimg.gif");
INSERT INTO tbl_profile_identification_proof VALUES("8","","338","noimg.gif");
INSERT INTO tbl_profile_identification_proof VALUES("9","","339","noimg.gif");
INSERT INTO tbl_profile_identification_proof VALUES("10","","340","noimg.gif");
INSERT INTO tbl_profile_identification_proof VALUES("11","","341","noimg.gif");
INSERT INTO tbl_profile_identification_proof VALUES("12","","342","noimg.gif");
INSERT INTO tbl_profile_identification_proof VALUES("13","","343","noimg.gif");
INSERT INTO tbl_profile_identification_proof VALUES("14","","344","noimg.gif");
INSERT INTO tbl_profile_identification_proof VALUES("15","","345","noimg.gif");
INSERT INTO tbl_profile_identification_proof VALUES("16","","346","noimg.gif");
INSERT INTO tbl_profile_identification_proof VALUES("17","","347","noimg.gif");
INSERT INTO tbl_profile_identification_proof VALUES("18","","348","noimg.gif");
INSERT INTO tbl_profile_identification_proof VALUES("19","","349","noimg.gif");
INSERT INTO tbl_profile_identification_proof VALUES("20","","350","noimg.gif");



CREATE TABLE `tbl_profile_photo` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `imagename` text NOT NULL,
  `profile_id` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `profile_id` (`profile_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

INSERT INTO tbl_profile_photo VALUES("3","noimg.gif","333");
INSERT INTO tbl_profile_photo VALUES("4","noimg.gif","334");
INSERT INTO tbl_profile_photo VALUES("5","noimg.gif","335");
INSERT INTO tbl_profile_photo VALUES("6","noimg.gif","336");
INSERT INTO tbl_profile_photo VALUES("7","noimg.gif","337");
INSERT INTO tbl_profile_photo VALUES("8","noimg.gif","338");
INSERT INTO tbl_profile_photo VALUES("9","noimg.gif","339");
INSERT INTO tbl_profile_photo VALUES("10","noimg.gif","340");
INSERT INTO tbl_profile_photo VALUES("11","noimg.gif","341");
INSERT INTO tbl_profile_photo VALUES("12","noimg.gif","342");
INSERT INTO tbl_profile_photo VALUES("13","noimg.gif","343");
INSERT INTO tbl_profile_photo VALUES("14","noimg.gif","344");
INSERT INTO tbl_profile_photo VALUES("15","noimg.gif","345");
INSERT INTO tbl_profile_photo VALUES("16","noimg.gif","346");
INSERT INTO tbl_profile_photo VALUES("17","noimg.gif","347");
INSERT INTO tbl_profile_photo VALUES("18","noimg.gif","348");
INSERT INTO tbl_profile_photo VALUES("19","noimg.gif","349");
INSERT INTO tbl_profile_photo VALUES("20","noimg.gif","350");



CREATE TABLE `tbl_request_contact_details` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `from_profile_id` bigint(20) NOT NULL,
  `to_profile_id` bigint(20) NOT NULL,
  `when_contacted` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `from_profile_id` (`from_profile_id`),
  KEY `to_profile_id` (`to_profile_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




CREATE TABLE `tbl_send_profile_alerts` (
  `alertid` bigint(20) NOT NULL AUTO_INCREMENT,
  `profile_id` bigint(20) NOT NULL,
  `matching_profile_id` bigint(20) NOT NULL,
  `marital_status` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ageFrom` bigint(3) NOT NULL,
  `ageTo` bigint(3) NOT NULL,
  `caste` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `status` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`alertid`),
  KEY `profile_id` (`profile_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;




CREATE TABLE `tbl_socio_religious_attr` (
  `socio_id` int(11) NOT NULL AUTO_INCREMENT,
  `gothra` varchar(20) DEFAULT NULL,
  `rashi` varchar(11) DEFAULT 'Unspecified',
  `nakshtra` varchar(15) DEFAULT 'Unspecified',
  `charan` varchar(1) DEFAULT NULL,
  `nadi` varchar(6) DEFAULT NULL,
  `gan` varchar(12) DEFAULT 'Unspecified',
  `birth_place` varchar(100) DEFAULT NULL,
  `birth_time` varchar(8) DEFAULT '00:00:AM',
  `mangal` varchar(3) DEFAULT NULL,
  `profile_id` bigint(20) NOT NULL,
  PRIMARY KEY (`socio_id`),
  KEY `profile_id` (`profile_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

INSERT INTO tbl_socio_religious_attr VALUES("3","jffhjdjjrrf: www.yan"," "," "," "," ","jffhjdjjrrf:","00","00","AM","333");
INSERT INTO tbl_socio_religious_attr VALUES("4","jffhjdjjrrf: www.yan"," "," "," "," ","jffhjdjjrrf:","00","00","AM","334");
INSERT INTO tbl_socio_religious_attr VALUES("5","Ditah","Sinha","Jyeshta","3","Antya","Memphis, Ten","05","24","PM","335");
INSERT INTO tbl_socio_religious_attr VALUES("6","jffhjdjjrrf: www.yan"," "," "," "," ","jffhjdjjrrf:","00","00","AM","336");
INSERT INTO tbl_socio_religious_attr VALUES("7","jffhjdjjrrf: www.yan"," "," "," "," ","jffhjdjjrrf:","00","00","AM","337");
INSERT INTO tbl_socio_religious_attr VALUES("8","IXSvxZCwU"," "," "," "," ","zgKOhwmcIEpP","","","","338");
INSERT INTO tbl_socio_religious_attr VALUES("9","rWOQlYHBvmPxVhqE"," "," "," "," ","FcbkODKdJrfU","","","","339");
INSERT INTO tbl_socio_religious_attr VALUES("10","Loris
","Kumbh","Uttara Shadha","2","Madhya","Atlanta, GA","03","35","PM","340");
INSERT INTO tbl_socio_religious_attr VALUES("11","ONLINE VERDIENEN VON","Kark","Jyeshta","4","Madhya","Chulak","11","53","PM","341");
INSERT INTO tbl_socio_religious_attr VALUES("12","#file_links["C:Fraze","Kark","Chitra","4","Madhya","Hospital","08","58","PM","342");
INSERT INTO tbl_socio_religious_attr VALUES("13","bernaldinobest https","Mithun","Ardra","2","Antya","Washington, ","12","50","PM","343");
INSERT INTO tbl_socio_religious_attr VALUES("14","bernaldinobest https","Mithun","Uttara Shadha","2","Madhya","UK","03","19","PM","344");
INSERT INTO tbl_socio_religious_attr VALUES("15","jeffrearoom https://","Kark","Purva Phalgini","2","Madhya","Atlanta, GA","06","33","PM","345");
INSERT INTO tbl_socio_religious_attr VALUES("16","bernaldino https://w","Makar","Uttara Phalguni","4","Madhya","Nome, Alaska","08","54","PM","346");
INSERT INTO tbl_socio_religious_attr VALUES("17","Nmvjefbjedddskhfugfh","Kumbh","Rohini","2","Antya","Washington, ","02","16","PM","347");
INSERT INTO tbl_socio_religious_attr VALUES("18","Nmvjefbjedddskhfugfh","Kark","Pushya","4","Antya","Washington, ","05","58","PM","348");
INSERT INTO tbl_socio_religious_attr VALUES("19","Thaddetishe https://","Kark","Krittika","3","Antya","Washington, ","09","20","PM","349");
INSERT INTO tbl_socio_religious_attr VALUES("20","bromaleksÑ€erson htt","Vrischik","Swati","3","Antya","Washington, ","05","14","PM","350");



CREATE TABLE `tbl_theme` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `theme` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=107 DEFAULT CHARSET=latin1;

INSERT INTO tbl_theme VALUES("12","RL");

