-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2023 at 06:59 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `selected_time` varchar(255) NOT NULL,
  `total_seats` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `selected_time`, `total_seats`) VALUES
(9, '10am', 1);

-- --------------------------------------------------------

--
-- Table structure for table `browse`
--

CREATE TABLE `browse` (
  `movies` varchar(200) NOT NULL,
  `theatre` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `browse`
--

INSERT INTO `browse` (`movies`, `theatre`, `location`, `date`) VALUES
('Avengers: Endgame', 'Cineplex Central', 'Metropolis', '26-04-2019'),
('Inception', 'Starlight Cinemas', 'Downtown', '16-07-2010'),
('The Lion King', 'Royal Theatres', 'Valleyview', '19-07-2019'),
('Jurassic Park 3D', 'Millennium Screens', 'Green Hills', '05-04-2013'),
('Toy Story 4', 'Sunnyvale Cinemas', 'Sunnyvale', '21-06-2019'),
('Avatar 2', 'BlueSky Theatres', 'Bayside', '16-12-2022'),
('The Dark Knight', 'Riverfront Movies', 'Downtown', '18-07-2008'),
('Finding Nemo', 'Galaxy Theatres', 'Westwood', '30-05-2003'),
('Jaws', 'Riviera Cinema', 'Coastal City', '20-06-1975'),
('Interstellar', 'Stellar Cinemas', 'Orion City', '07-11-2014'),
('Pulp Fiction', 'Grove Movies', 'Westwood', '14-10-1994'),
('Frozen', 'Crystalplex', 'Midtown', '27-11-2013'),
('The Matrix', 'NeoCine Pinnacle', 'Downtown', '31-03-1999'),
('Mad Max: Fury Road', 'Desert Oasis Theatres', 'Sandtown', '15-05-2015'),
('E.T. the Extra-Terrestrial', 'Starry Nights Cinema', 'Moonville', '11-06-1982'),
('Black Panther', 'Uptown Screens', 'Metropolis', '16-02-2018'),
('Titanic', 'Oceanview Theatres', 'Coastal City', '19-12-1997'),
('The Avengers', 'Superplex Downtown', 'Downtown', '04-05-2012'),
('Spider-Man: No Way Home', 'CineWorld Valleyview', 'Valleyview', '17-12-2021'),
('The Shawshank Redemption', 'Gateway Cinemas', 'Midtown', '23-09-1994'),
('The Lord of the Rings: The Fellowship of the Ring', 'Mystic Theatres', 'Fantasyville', '19-12-2001'),
('Forrest Gump', 'Maplewood Cinema', 'Westwood', '06-07-1994'),
('Guardians of the Galaxy', 'Stellar Screens', 'Orion City', '01-08-2014'),
('Wonder Woman', 'Amazon Theatres', 'Metropolis', '02-06-2017'),
('Back to the Future', 'Hill Valley Cinemas', 'Green Hills', '03-07-1985'),
('The Sound of Music', 'Sunset Classics', 'Downtown', '02-03-1965'),
('Jurassic World', 'Rex Theatre', 'Coastal City', '12-06-2015'),
('Toy Story', 'Sunrise Cinemas', 'Sunnyvale', '22-11-1995'),
('Avengers: Age of Ultron', 'Cineplex Central', 'Metropolis', '01-05-2015'),
('The Godfather', 'Corleone Pictures', 'Little Italy', '24-03-1972'),
('Deadpool', 'RedFox Theatres', 'Westwood', '12-02-2016'),
('The Dark Knight Rises', 'Riverfront Movies', 'Downtown', '20-07-2012'),
('Finding Dory', 'Galaxy Theatres', 'Westwood', '17-06-2016'),
('Star Wars: The Force Awakens', 'Galactic Cinema', 'Fantasyville', '18-12-2015'),
('Incredibles 2', 'MetroView Multiplex', 'Metropolis', '15-06-2018'),
('The Lion King (2019)', 'Royal Theatres', 'Valleyview', '19-07-2019'),
('E.T. the Extra-Terrestrial (Re-release)', 'Starry Nights Cinema', 'Moonville', '22-03-2002'),
('Doctor Strange', 'Dimension Theatres', 'Downtown', '04-11-2016'),
('The Martian', 'Red Planet Cinemas', 'Sandtown', '02-10-2015'),
('Finding Nemo 3D', 'Galaxy Theatres', 'Westwood', '14-09-2012'),
('The Lego Movie', 'BrickHouse Cinema', 'Sunnyvale', '07-02-2014');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(240) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `password`) VALUES
(1, 'abc', 'abc@gmail.com', 'abc'),
(2, 'yhy', 'yhy@gmail.com', '$2y$10$H89bz0EtIwqUDnChSjNasutnzcRoN5R5pxY02Hnj1FhGW5KA/lMIq'),
(3, 'sanjay', 'suvsanj@gmail.com', '$2y$10$1o7.XnDxWR0QkBBQL5hevuk9zP/53aLK/kn8/n1ytuIY1lEhKA8W2'),
(4, 'abc', 'abc@gmail.com', '$2y$10$tTqS3Gi1..bmgwau3nr8QebFleQx4j5TDMjkVyCQDx1b81UyArIg6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
