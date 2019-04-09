# Host: localhost  (Version: 5.5.53)
# Date: 2017-11-15 22:29:53
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "score"
#

DROP TABLE IF EXISTS `score`;
CREATE TABLE `score` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `studentname` varchar(100) NOT NULL,
  `china` int(11) NOT NULL,
  `maths` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2346 DEFAULT CHARSET=utf8;

#
# Data for table "score"
#

/*!40000 ALTER TABLE `score` DISABLE KEYS */;
INSERT INTO `score` VALUES (1,'元首',59,59),(2,'波澜哥',122,2),(3,'窃格瓦拉',150,200),(4,'德国BOY',59,59),(5,'奥巴马',100,1);
/*!40000 ALTER TABLE `score` ENABLE KEYS */;

#
# Structure for table "student"
#

DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `major` varchar(100) NOT NULL,
  `grade` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=753 DEFAULT CHARSET=utf8;

#
# Data for table "student"
#

/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES (1,'冰泉豆浆晶','男','每袋12包','100','净含量300克'),(123,'卫龙辣条','男','0杀吃鸡','200','越塔拿五杀'),(124,'派乐薯条','女','永远不放盐','300','免费小包番茄酱'),(752,'法式小面包','女','烘焙奶香味','400','盼盼食品');
/*!40000 ALTER TABLE `student` ENABLE KEYS */;

#
# Structure for table "teacher"
#

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE `teacher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `class` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=790 DEFAULT CHARSET=utf8;

#
# Data for table "teacher"
#

/*!40000 ALTER TABLE `teacher` DISABLE KEYS */;
INSERT INTO `teacher` VALUES (1,'周大华','男','瞬移应用开发'),(2,'马画藤','女','企鹅养殖业'),(789,'习远平','男','政治');
/*!40000 ALTER TABLE `teacher` ENABLE KEYS */;

#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`Id`),
  KEY `Id` (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

#
# Data for table "user"
#

/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'we','123','教师'),(11,'大神','456','教师'),(15,'abc','789','学生');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
