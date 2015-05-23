- ----------------------------
-- database create 
-- ----------------------------
DROP DATABASE IF EXISTS `phone`;
CREATE SCHEMA `phone` DEFAULT CHARACTER SET utf-8 ;
USE `phone`;

-- ----------------------------
-- Table structure for `total`
-- ----------------------------

CREATE TABLE `exam` (
  `id` int(10) NOT NULL,
  `content` varchar(20),
  `A` varchar(20),
  `B` varchar(20),
  `C` varchar(20),
  `D` varchar(20) ,
  `answer` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf-8;

-- ----------------------------
-- Table data insert
-- ----------------------------

INSERT INTO `exam` VALUES ('0', 'hello', 'fine', 'Thank you', 'and you', 'yes', 'A');