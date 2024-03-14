-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2022 at 09:34 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plantshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(100) NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `order_amount` float NOT NULL,
  `order_date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `category` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `desc` LONGTEXT NOT NULL,
  `image` text(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--
INSERT INTO `products`VALUES(10001,1001,'Begonia',2000,20,"They have one big advantage over many other indoor plants, the endless variety in shapes and colours. Another big advantage of Begonias, they are pest resistant compared to other plants.","product_1.png"),
(10002, 1002,"African Violet",1800,25,"One of the beautiful plants that bloom flowers in a range of colours including purple,pink,and white.","product_2.png"),
(10003, 1001,"Jasmine",2200,30,"The sweetly-scented jasmine flower will fill your room with its heady scent. Despite being a vine that is usually grown outdoors, some jasmine varieties can be grown indoors as well.","product_3.png"),
(10004, 1002,"Polka Dot Plant",1200,15,"They are also known as Freckle Faceplants. With attractive foliage, they come in a range of colors including green, cream, pink, and red.","product_4.png"),
(10005, 1002,"Prayer Plant",1500,32,"The plant's holy name is because the leaves tend to fold in at night, resembling praying hands.","product_5.png"),
(10006, 1003,"Creeping Fig",2700,16,"The most popular pick out of the entire Ficus genus is Creeping fig. It has thick leafed vines that look great in hanging baskets.","product_6.png"),
(10007, 1003,"Peace Lily",1400,36,"This plant blooms in spring with long-lasting flower stalks that dangle gracefully over the foliage when it is used in a mass display.","product_7.png"),
(10008, 1004,"Snake Plant",2200,18,"This plant is also known as Sansevieria or mother-in-law's tongue. They are adaptive to any place. The snake plant, which purifies the air, is an ideal plant for newbies.","product_8.png"),
(10009, 1004,"Spider Plant",2400,30,"The plant has got this creepy-crawly name because of its slender leaves spilling over and creating other little plantlets.","product_9.png"),
(10010, 1004,"Aloe vera",2800,50,"This plant is a gift for the skin. This stemless succulent is well known for its healing and air purification properties.","product_10.png"),
(10011, 1005,"English Ivy",1700,19,"The English Ivy is a versatile plant that looks great when you grow them in a tiny pot. Their beautiful vines spill out the side, creating a wonderful display.","product_11.png"),
(10012, 1005,"String Of Pearls",2900,42,"This pearl-like foliage hangs over its pot and makes an eye-catching piece of decor for all of your guests.","product_12.png"),
(10013, 1006,"Calathea Beauty Star",2800,15,"We have lots of Calathea small indoor plants for you to choose from, and most of them have gorgeous foliage that will certainly add beauty to your home.","product_13.png"),
(10014, 1006,"Zeni ZZ",2000,32,"This is a dwarf variety of the famous Zamioculcas Zamiifolia plant. Moreover, it only gets about 2 feet tall on maturity.","product_14.png"),
(10015, 1006,"Lucky Bamboo",1200,40,"These Lucky bamboo plants, with eye-catching shapes, swirls, or braided stalks, can also be trained to grow straight as an arrow with simple, little floppy green leaves that adorn the stalks.","product_15.png"),
(10016, 1006,"African Violet",2100,35,"This plant is famous for its coin-shaped, round green leaves. In Chinese culture, it is given as a gift to people and why shouldn't it be, after all, it can transform any space completely! ","product_16.png"),
(10017, 1006,"Pothos",800,36,"This small plant has an attractive vine and heart-shaped leaves. You can grow this tiny one in a hanging basket or place it on your shelf or bookcase.","product_17.png"),
(10018, 1006,"Asparagus Fern",1300,25,"It looks wonderful when paired with small, light-colored pots which will contrast against the green leaves.","product_18.png"),
(10019, 1007,"Rubber Plant",2100,26,"Rubber trees can reach 10 feet in height. However, trimming their branches and leaves regularly will make them smaller.","product_19.png"),
(10020, 1007,"Fiddle leaf fig",2400,12,"With its glossy, dark leaves, the fiddle leaf fig acts as an extra statement piece to any room.","product_20.png"),
(10021, 1007,"Giant bird of paradise",2600,24,"The giant bird of paradise plant has tall stems with banana-like leaves. Flowers can bloom, but unfortunately, they don't appear indoors.","product_21.png"),
(10022, 1007,"Bamboo palm",900,45,"The bamboo palm is pet friendly. So, your green friend and a furry friend can stay together.","product_22.png"),
(10023, 1007,"Heartleaf philodendron",900,45,"This plant likes to climb and makes a great hanging plant.  It is incredibly hard to kill this plant, isn't it a piece of good news for new plant parents ?","product_23.png"),
(10024, 1007,"Monstera",1700,50,"This Swiss Cheese plant has two sad news for you, they are poisonous and pricey.","product_24.png"),
(10025,1008,"Echeverias",1600,38,"Echeverias features foliage that forms a rosette shape. Also, you can get many colors in Echeveria including, purple, pink, red, blues, and even teals.","product_25.png"),
(10026, 1008,"Lithops",1800,32,"They are also known as “living stones”, as they closely resemble pebbles and small stones.Due to their deceiving appearance, lithops will dazzle your guests!","product_26.png"),
(10027, 1008,"Haworthia",1300,29,"A real stand-out succulent plant, the striped appearance of the zebra Haworthia looks amazing. This slow-growing plant grows more than 6-8 inches in height. In addition, Haworthia is an ideal indoor plant to squeeze into tiny nooks.","product_27.png"),
(10028, 1009,"Bromeliads",2200,30,"One of the beautiful plants that bloom flowers in a range of colours including purple, pink, and white.","product_28.png"),
(10029, 1009,"Baby Tears",1800,40,"Baby Tears tolerate a range of light conditions, so they grow well on a windowsill or in a darker corner. Being a succulent, well-draining potting mix and irregular watering is important to keep this plant in good health.","product_29.png"),
(10030, 1010,"Giant Air Plant",2200,32,"The plant's main requirement is bright, filtered light, so a spot on the patio or deck where it will receive indirect sunlight would be the best choice.","product_30.png"),
(10031, 1010,"Sky Plant",2000,45,"They are always happiest with some fresh airflow and nutrients from the air. While they can survive indoors, they will be happiest in an open window.","product_31.png"),
(10032, 1010,"Bulbosa Belize",2500,35,"This air plant has long twisted curly leaves grown from a large bulbous base. Its leaves can turn from green to bright red when the Bulbosa is about to bloom beautiful tubular bright purple flowers.","product_32.png");

--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;


--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--

-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10033;
  


COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
