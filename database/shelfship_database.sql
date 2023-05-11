-- -------------------------------------------------------------
-- TablePlus 5.3.6(496)
--
-- https://tableplus.com/
--
-- Database: shelfship
-- Generation Time: 2023-05-11 19:17:20.7360
-- -------------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


DROP TABLE IF EXISTS `books`;
CREATE TABLE `books` (
  `id` int NOT NULL AUTO_INCREMENT,
  `book_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `price` int DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `library` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `Rating` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS `libraries`;
CREATE TABLE `libraries` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date` varchar(255) DEFAULT NULL,
  `library` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `book_name` varchar(255) DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS `requests`;
CREATE TABLE `requests` (
  `id` int NOT NULL AUTO_INCREMENT,
  `book_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `author` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS `suggestions`;
CREATE TABLE `suggestions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `book_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `is_library_owner` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`,`email`,`name`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `books` (`id`, `book_name`, `date`, `price`, `author`, `library`, `image`, `category`, `Rating`) VALUES
(1, 'Grady Spirritt', '5/5/2023', 84, 'Male', 'Chef Library ', 'images/try4.jpeg', 'Drama', '29'),
(2, 'Raf McCathy', '10/26/2022', 4, 'Female', 'Maliks', 'images/try33.webp', 'Adventure', '20'),
(3, 'Kassey Bridie', '7/27/2022', 58, 'Female', 'Antoine', 'images/try2.jpeg', 'Drama', '55'),
(4, 'Charmane Linsey', '11/24/2022', 69, 'Female', 'Chef Library ', 'images/img3.jpg', 'Drama', '72'),
(5, 'Cacilia Jacquemet', '12/17/2022', 96, 'Female', 'Chef Library ', 'images/img.jpeg', 'Action', '27'),
(6, 'Ravid Camillo', '4/24/2023', 38, 'Non-binary', 'Maliks', 'images/try7.png', 'Action', '49'),
(7, 'Thom Burnand', '8/9/2022', 75, 'Male', 'LAU Library ', 'images/try.png', 'Drama', '94'),
(8, 'Patrice Riddel', '10/1/2022', 59, 'Bigender', 'Maliks', 'images/try0.jpeg', 'Comedy', '99'),
(9, 'Morna Fraczkiewicz', '3/19/2023', 66, 'Female', 'Chef Library ', 'images/try8.jpeg', 'Crime', '74'),
(11, 'Lorna Thistleton', '12/26/2022', 69, 'Bigender', 'Antoine', 'images/img1.jpg', 'Drama', '85'),
(12, 'Bryce Krollman', '2/2/2023', 39, 'Male', 'Maliks', 'images/try9.jpeg', 'Documentary', '21'),
(15, 'Dag Snoxall', '10/24/2022', 43, 'Male', 'Chef Library ', 'images/rtyy.jpeg', 'Action', '29'),
(18, 'Tesrt Image', '31/10/2022', 200, 'jad', 'Maliks', '../frontend/images/try.png', 'Comedy', '4.5'),
(22, 'Try It Now', '20-4-2019', 25, 'Allan barker', 'Antoine', '../frontend/images/book1.png', 'Comedy', '4.4'),
(23, 'Flowers Blomming', '4-3-2022', 21, 'Polla lover', 'LAU Library ', '../frontend/images/book2.png', 'Documentary', '3.4'),
(24, 'Trailer', '5-6-2013', 34, 'Giezer Rolter', 'LAU Library ', '../frontend/images/book3.png', 'Action', '4.4'),
(25, 'Astonished By Her', '1-1-2014', 12, 'Lisa Parker', 'LAU Library ', '../frontend/images/book4.png', 'Documentary', '4.1'),
(26, 'Power', '6-8-2023', 40, 'Kritz paur', 'LAU Library ', '../frontend/images/book5.png', 'Documentary', '4.6'),
(27, 'Forever Alone', '12-2-2013', 10, 'Joseph Joestar ', 'Lake Bluff', '../frontend/images/book6.png', 'Documentary', '3.4'),
(28, 'Post Office', '2-4-2011', 60, 'Lisa Lisa', 'Lake Bluff', '../frontend/images/book7.png', 'Comedy', '4.6'),
(29, 'Trial Of Life', '13-5-2003', 20, 'Peter Parker', 'Lake Bluff', '../frontend/images/book8.png', 'Comedy', '3.5'),
(30, 'Polar Bears', '6-6-2006', 40, 'John Ken', 'Lake Bluff', '../frontend/images/book9.png', 'Action', '4.5');

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Adventure'),
(2, 'Action'),
(3, 'Comedy'),
(4, 'Crime'),
(5, 'Documentary');

INSERT INTO `libraries` (`id`, `name`, `image`) VALUES
(6, 'Maliks', '../frontend/images/users/Malikslogo.png'),
(7, 'Antoine', '../frontend/images/users/ant.png'),
(8, 'LAU Library ', '../frontend/images/users/lau.png'),
(9, 'Chef Library ', '../frontend/images/users/library4.png'),
(10, 'Lake Bluff', '../frontend/images/users/library3.png');

INSERT INTO `orders` (`id`, `date`, `library`, `price`, `book_name`, `user_id`, `address`, `user_name`) VALUES
(33, '2023-05-11', 'Maliks', '39', 'Bryce Krollman', 12, 'Beirutt', 'John doe');

INSERT INTO `requests` (`id`, `book_name`, `author`) VALUES
(1, 'neww', 'jad'),
(2, 'neww', 'jad'),
(3, 'pa3', 'la3'),
(4, 'joojo', 'araki'),
(5, 'Power of Love', 'Polla lover');

INSERT INTO `suggestions` (`id`, `user_id`, `book_id`) VALUES
(6, 14, 11);

INSERT INTO `users` (`id`, `email`, `password`, `image`, `name`, `phone`, `is_library_owner`) VALUES
(12, 'john@gmail.com', '25f9e794323b453885f5181f1b624d0b', '../frontend/images/users/user1.png', 'John doee', '81757674', 0),
(13, 'marie@gmail.com', '25f9e794323b453885f5181f1b624d0b', '../frontend/images/users/user2.png', 'marie joe', '83769302', 0),
(14, 'levi@gmail.com', '25f9e794323b453885f5181f1b624d0b', '../frontend/images/users/user3.png', 'Levi Ackerman ', '25521442', 0),
(15, 'petra@gmail.com', '25f9e794323b453885f5181f1b624d0b', '../frontend/images/users/user4.png', 'Petra', '45235465', 0),
(16, 'maliks@gmail.com', '25f9e794323b453885f5181f1b624d0b', '../frontend/images/users/Malikslogo.png', 'Maliks', '98745238', 1),
(17, 'antonie@gmail.com', '25f9e794323b453885f5181f1b624d0b', '../frontend/images/users/ant.png', 'Antoine', '24235642', 1),
(18, 'lau@gmail.com', '25f9e794323b453885f5181f1b624d0b', '../frontend/images/users/lau.png', 'LAU Library ', '83735183', 1),
(19, 'chef@gmail.com', '25f9e794323b453885f5181f1b624d0b', '../frontend/images/users/library4.png', 'Chef Library ', '45324564', 1),
(20, 'lakebluff@gmail.com', '25f9e794323b453885f5181f1b624d0b', '../frontend/images/users/library3.png', 'Lake Bluff', '24847263', 1);



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;