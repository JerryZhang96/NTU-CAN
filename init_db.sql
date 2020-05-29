-- phpMyAdmin SQL Dump
-- version 2.11.9.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 18, 2009 at 01:47 PM
-- Server version: 5.0.81
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

-- --------------------------------------------------------
--
-- Database structure for database `ntuwebcan`
--

CREATE DATABASE IF NOT EXISTS `ntucanweb`;

USE `ntucanweb`;

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `idUsers` int(11) NOT NULL auto_increment,
  `uidUsers` varchar(20) NOT NULL,
  `emailUsers` varchar(80) NOT NULL,
  `pwdUsers` varchar(80) NOT NULL,
  PRIMARY KEY  (`idUsers`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL auto_increment,
  `user` varchar(20) NOT NULL,
  `password` varchar(80) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;


INSERT INTO `admins` (`id`, `user`, `password`) VALUES
('1', 'jerryzhang', 'jerryzhang');

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(20) NOT NULL,
  `email` varchar(80) NOT NULL,
  `address` varchar(80) NOT NULL,
  `phone` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `customers`
--


-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL auto_increment,
  `date` datetime NOT NULL,
  `customerid` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `orders`
--


-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE IF NOT EXISTS `order_detail` (
  `orderid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `order_detail`
--


-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL auto_increment,
  `pname` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `price` float NOT NULL,
  `picture` varchar(80) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=7 ;


CREATE TABLE IF NOT EXISTS `feedback` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=7 ;
--
-- Dumping data for table `products`
--

-- INSERT INTO `products` (`id`, `name`, `description`, `price`, `picture`) VALUES
-- (1, 'Yong Tau Fu', 'Hakka Chinese cuisine consisting primarily of tofu filled with ground meat mixture or fish paste', 5.00, 'images/chinese1.jpg'),
-- (2, 'Fish & Chips', 'Hot dish consisting of fried fish in batter served with chips', 6.00, 'images/western1.jpg'),
-- (3, 'Tonkotsu Ramen', 'Chinese wheat noodles served in a meat broth, flavored with miso, and toppings such as sliced pork and nori', 6.90, 'images/jap1.jpg'),
-- (4, 'Bibimbap', 'Korean rice dish served with namul or kimchi and gochujang, soy sauce, or doenjang', 4.00, 'images/korean2.jpg'),
-- (5, 'Tom Yum', 'Hot and sour Thai soup cooked with shrimp', 5.00, 'images/thai1.jpg'),
-- (6, 'Prata with curry chicken', 'Indian flatbread dish dipped with curry chicken sauce', 4.50, 'images/indian2.jpg');

INSERT INTO `products` (`id`, `pname`, `description`, `rating`, `price`, `picture`) VALUES
(1, 'Cheese Stuffed Beef Burger', 'Mac Donald', 5 , 5.00, 'img/beefburger1.jpg'),
(2, 'Grilled Cheese Beef Burger', 'Pen & Inc', 4, 6.00, 'img/beefburger2.jpg'),
(3, 'Double Cheese Beef Burger', 'Hot Tomatoes', 4, 6.90, 'img/beefburger3.jpg'),
(4, 'Cheese Beef Burger', 'Canteen 2', 4, 4.00, 'img/beefburger4.jpg'),
(5, 'Fried Chicken Burger', 'Canteen 1', 3, 5.00, 'img/chickenburger1.jpg'),
(6, 'Grilled Chicken Thigh Burger', 'Canteen 16', 3 , 6.00, 'img/chickenburger2.jpg'),
(7, 'Salted Chicken Thigh Burger', 'North Hill', 2, 4.90, 'img/chickenburger3.jpg'),
(8, 'Cheese Stuffed Chicken Burger', 'Tamarind', 2, 5.50, 'img/chickenburger4.jpg'),
(9, 'Hawaii Pizza','Pizza Hut',5 ,4.00,'img/hpizza.jpg'),
(10, 'Pepperoni Pizza','Pizza Hut',5 ,4.00,'img/ppizza.jpg'),
(11, 'Chicken Supreme Pizza','Pizza Hut',4 ,4.00,'img/cspizza.jpeg'),
(12, 'Seafood Spaghetti','Spaghetti House',4 ,5.00,'img/sspaghetti.jpg'),
(13, 'Chicken Spaghetti','Spaghetti House',4 ,6.00,'img/cspaghetti.jpg'),
(14, 'Beef Spaghetti','Spaghetti House',3 ,9.00,'img/bspaghetti.jpg'),
(15, 'Sirloin Steak','Hot Tomatoes',5 ,7.00,'img/ssteak.jpeg'),
(16, 'T-bone Steak','Hot Tomatoes',5 ,9.00,'img/tbsteak.jpeg'),
(17, 'Fillet Steak','Hot Tomatoes',4 ,8.00,'img/fsteak.jpeg'),
(18, 'Chicken Sandwich','Subway',5 ,5.50,'img/csandwich.jpeg'),
(19, 'Beef Sandwich','Subway',4 ,4.50,'img/besandwich.jpeg'),
(20, 'Bacon Sandwich','Subway',4 ,5.00,'img/basandwich.jpeg'),
(21, 'Garlic Chicken Wings','4-Fingers',5 ,7.00,'img/gchicken.jpeg'),
(22, 'Spicy Chicken Wings','KFC',4 ,7.50,'img/schicken.jpg'),
(23, 'BBQ Chicken Wings','Pizza Hut',3 ,6.00,'img/bchicken.jpg'),
(24, 'Beef Chinese Noodles','Canteen 16',5 ,5.00,'img/bcnoodles.jpg'),
(25, 'Pork Ribs Chinese Noodles','Canteen 16',4 ,5.00,'img/prcnoodles.jpg'),
(26, 'Fish Chinese Noodles','Canteen 16',4 ,5.50,'img/fcnoodles.jpg'),
(27, 'Spicy Pot A','Canteen 9',5 ,8.00,'img/spa.jpg'),
(28, 'Spicy Pot B','Canteen 16',4 ,8.00,'img/spb.jpg'),
(29, 'Spicy Pot C','Tamarind',4 ,8.00,'img/spc.jpeg'),
(30, 'Chicken Rice A','Canteen A',5 ,3.00,'img/cra.jpeg'),
(31, 'Chicken Rice B','Canteen B',4 ,3.50,'img/crb.jpeg'),
(32, 'Chicken Rice C','Canteen 16',3 ,4.00,'img/crc.jpeg'),
(33, 'Seafood Japanese Noodles','Canteen 16',5 ,6.00,'img/sjnoodles.jpeg'),
(34, 'Pork Japanese Noodles','Canteen 16',4 ,5.00,'img/pjnoodles.jpeg'),
(35, 'Chicken Japanese Noodles','Canteen 16',3 ,4.50,'img/cjnoodles.jpeg'),
(36, 'Tuna Sushi','Sushi Hub',5 ,2.00,'img/tsushi.jpeg'),
(37, 'Floss Sushi','Sushi Hub',4 ,1.50,'img/fsushi.jpeg'),
(38, 'Vegetable Sushi','Sushi Hub',3 ,1.00,'img/vsushi.jpeg'),
(39, 'Chicken Curry Rice','Canteen 16',5 ,5.00,'img/ccurryrice.jpeg'),
(40, 'Beef Curry Rice','Canteen 16',4 ,6.00,'img/bcurryrice.jpeg'),
(41, 'Vegetarian Curry Rice','Canteen 16',3 ,3.00,'img/vcurryrice.jpeg'),
(42, 'Korean BiBibmap','Canteen 14',5 ,4.00,'img/koreanbb.jpeg'),
(43, 'Korean Beef Rice','Canteen 14',4 ,5.50,'img/koreanbr.jpeg'),
(44, 'Korean Pork Rice','Canteen 14',4 ,5.00,'img/koreanpr.jpeg'),
(45, 'Korean Fish Rice','Canteen 14',4 ,6.00,'img/koreanfr.jpeg'),
(46, 'Korean Chicken Rice','Canteen 14',3 ,4.50,'img/koreancr.jpeg'),
(47, 'Korean Chicken Soup','Canteen 14',3 ,9.00,'img/koreancs.jpeg'),
(48, 'Korean Tofu Soup','Canteen 14',3 ,4.00,'img/koreants.jpeg'),
(49, 'Korean Beef Soup','Canteen 14',2 ,6.50,'img/koreanbs.jpeg'),
(50, 'Indian Chicken Curry','Canteen A',5 ,5.00,'img/indiancc.jpeg'),
(51, 'Indian Mutton Curry','Canteen A',4 ,7.00,'img/indianmc.jpeg'),
(52, 'Indian Vegetarian Curry','Canteen A',4 ,3.00,'img/indianvc.jpeg'),
(53, 'Indian White Rice','Canteen A',3 ,1.00,'img/indianwr.jpeg'),
(54, 'Indian Spicy Rice','Canteen A',3 ,1.50,'img/indiansr.jpeg'),
(55, 'Indian Basmati Rice','Canteen A',2 ,2.00,'img/indianbr.jpeg'),
(56, 'Indian Style Naan','Canteen A',2 ,3.00,'img/indiansn.jpeg'),
(57, 'Indian Pineapple Naan','Canteen A',2 ,4.00,'img/indianpn.jpeg'),
(58, 'Indian Butter Naan','Canteen A',1 ,3.50,'img/indianbn.jpeg'),
(59, 'Coke','Canteen 2',4 ,1.00,'img/coke.jpeg'),
(60, 'Sprite','Canteen 2',4 ,1.00,'img/sprite.jpeg'),
(61, 'Ice Lemon Tea','Canteen 2',3 ,1.50,'img/icelemontea.jpeg'),
(62, 'Soy Milk','Canteen 2',3 ,2.00,'img/smilk.jpeg'),
(63, 'Mineral Water','Canteen 2',3 ,0.50,'img/water.jpeg'),
(64, 'Tiger Beer','Giant',3 ,2.50,'img/tbeer.jpeg'),
(65, 'Heineken Beer','Giant',3 ,4.00,'img/hbeer.jpeg'),
(66, 'Wine','Giant',3 ,10.00,'img/wine.jpeg'),
(67, 'Tiramisu','Canteen 13',5 ,4.00,'img/tiramisu.jpeg'),
(68, 'Strawberry Ice Cream','Canteen 13',5 ,2.00,'img/sicecream.jpeg'),
(69, 'Orange Ice Cream','Canteen 13',4 ,2.00,'img/oicecream.jpeg'),
(70, 'Mint Ice Cream','Canteen 13',4 ,2.00,'img/micecream.jpeg');