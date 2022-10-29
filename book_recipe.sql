-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 29, 2022 at 02:00 AM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_recipe`
--

-- --------------------------------------------------------

--
-- Table structure for table `Recipes`
--

CREATE TABLE `Recipes` (
  `ID` int(11) NOT NULL,
  `Title` text NOT NULL,
  `Name of Dish` text NOT NULL,
  `Date` date NOT NULL,
  `Content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Recipes`
--

INSERT INTO `Recipes` (`ID`, `Title`, `Name of Dish`, `Date`, `Content`) VALUES
(1, 'Recipe of the Day', 'Grandma\'s Chicken Soup', '2022-10-25', 'INGREDIENTS\r\n  \r\n1 whole chicken raw\r\n3 cloves garlic minced\r\n1 large onion chopped\r\n5 carrots chopped\r\n3 celery stalks chopped\r\n2 teaspoons basil\r\n2 teaspoons thyme\r\n2 teaspoons salt\r\n1 teaspoon ground black pepper\r\n1 quart chicken broth low sodium\r\n4 cups water\r\nparsley is optional\r\n\r\nINSTRUCTIONS\r\n \r\nAdd a whole raw chicken to a large stock pot.\r\nAdd all ingredients, cover and simmer on medium low until it boils.\r\nOnce the soup is boiling, turn down the temperature to low and simmer for 2 hours.\r\nRemove the chicken to a pan. Do this carefully so the chicken doesn\'t fall apart. Cut the chicken meat into pieces and add back to the soup. Garnish with fresh parsley if you like.\r\nServe hot. (My grandmother served it over rice, this is totally optional.)\r\n\r\n\r\n\r\n\r\n'),
(2, 'Football Sundays', 'Chili with a Kick', '2022-10-25', 'INGREDIENTS\r\n\r\n1 lb ground beef\r\n1 lb hot sausage (like Jimmy Dean)\r\n1 tbsp cooking oil\r\n1 medium yellow onion, diced\r\n3 stalks of celery, diced\r\n1 green bell pepper, diced\r\n1 red bell pepper , diced\r\n2 garlic cloves, minced\r\n2 Tbsp cayenne\r\n2 Tbsp chili powder\r\n1 Tbsp ground paprika\r\n1/2 Tbsp salt\r\n1/2 Tbsp black pepper\r\n1 tsp ground cumin\r\n1 bay leaf\r\n1 tbsp Worcestershire sauce\r\n1 tsp vinegar\r\n2 tbsp brown sugar\r\n1 small can of tomato paste\r\n2 (15 oz) can diced tomatoes\r\n2 cans (15 oz) kidney beans, drained and rinsed\r\n\r\nINSTRUCTIONS\r\n\r\nBrown the ground beef and sausage in the oil in large skillet, then put in crockpot.  In same skillet with meat drippings, lightly saute all the vegetables, then add to crockpot.  Add all the spices to the ingredients in crockpot and stir.  In separate bowl, mix together the next 5 ingredients (Worcestershire, vinegar, brown sugar, tomato paste, and diced tomatoes).  Then pour into crockpot and stir to combine.  Cover and set crockpot temperature on Low. Cook for 7 to 8 hours (or more is fine).  During the last 30 minutes, stir in kidney beans and continue on Low.\r\n\r\nServe in bowls along with toppings like chopped green onions, shredded cheese, sour cream, black olives, crushed corn chips, etc.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Recipes`
--
ALTER TABLE `Recipes`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Recipes`
--
ALTER TABLE `Recipes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
