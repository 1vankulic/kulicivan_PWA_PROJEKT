-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jun 25, 2023 at 03:50 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwaprojekt`
--
CREATE DATABASE IF NOT EXISTS `pwaprojekt` DEFAULT CHARACTER SET utf8 COLLATE utf8_croatian_ci;
USE `pwaprojekt`;

-- --------------------------------------------------------

--
-- Table structure for table `clanak`
--

CREATE TABLE `clanak` (
  `id` int(11) NOT NULL,
  `datum` varchar(32) NOT NULL,
  `naslov` varchar(64) NOT NULL,
  `sazetak` text NOT NULL,
  `tekst` text NOT NULL,
  `slika` varchar(64) NOT NULL,
  `kategorija` varchar(64) NOT NULL,
  `arhiva` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `clanak`
--

INSERT INTO `clanak` (`id`, `datum`, `naslov`, `sazetak`, `tekst`, `slika`, `kategorija`, `arhiva`) VALUES
(0, '24.06.2023.', 'NASLOV - PROMJENA ZNANOST 1', 'kratki sadrzaj vijesti znanost 1 kratki sadrzaj vijesti znanost 1 kratki sadrzaj vijesti znanost 1 kratki sadrzaj vijesti znanost 1 kratki sadrzaj vijesti znanost 1 kratki sadrzaj vijesti znanost 1\r\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer in efficitur lorem. Nulla nibh nibh, dignissim id ipsum nec, sagittis commodo ipsum. Proin sit amet nunc leo. Nullam eget leo suscipit, sagittis mi a, porttitor ex. Donec quis risus est. Donec sed nibh metus. Ut ut ante mattis, ornare orci eget, fermentum tellus. Nullam quis nulla molestie, convallis lacus ac, auctor quam. Vivamus nec purus lacinia, congue tellus nec, fringilla nibh. Maecenas lacinia, nisl ut blandit facilisis, velit sem iaculis augue, non tempus nunc tellus id dolor. Morbi vel diam et eros hendrerit pretium quis at urna.\r\n\r\nProin porttitor varius risus et pulvinar. Duis tincidunt maximus felis, nec aliquet eros rhoncus non. Aenean tincidunt velit sed justo dignissim elementum. Nulla porttitor et ex et porta. Sed ut faucibus turpis. Pellentesque sit amet odio aliquet, mattis enim vel, cursus enim. Praesent egestas rutrum accumsan. Vestibulum rutrum neque at leo vestibulum interdum. Phasellus a scelerisque lorem. Aliquam tincidunt egestas ante ut hendrerit. Nunc venenatis viverra mi, quis aliquet sem fringilla nec. Suspendisse vitae pellentesque sem. Phasellus consequat metus non lectus vestibulum feugiat. Praesent placerat ornare augue, non tincidunt augue viverra in. Nulla facilisi. Nullam venenatis iaculis porta.', 'culture_1.jpg', 'Znanost', 0),
(1, '24.06.2023.', 'NASLOV VIJESTI - ZNANOST 3', 'kratki sadrzaj vijesti znanost 1 kratki sadrzaj vijesti znanost 1 kratki sadrzaj vijesti znanost 1 kratki sadrzaj vijesti znanost 1 kratki sadrzaj vijesti znanost 1 kratki sadrzaj vijesti znanost 1\r\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer in efficitur lorem. Nulla nibh nibh, dignissim id ipsum nec, sagittis commodo ipsum. Proin sit amet nunc leo. Nullam eget leo suscipit, sagittis mi a, porttitor ex. Donec quis risus est. Donec sed nibh metus. Ut ut ante mattis, ornare orci eget, fermentum tellus. Nullam quis nulla molestie, convallis lacus ac, auctor quam. Vivamus nec purus lacinia, congue tellus nec, fringilla nibh. Maecenas lacinia, nisl ut blandit facilisis, velit sem iaculis augue, non tempus nunc tellus id dolor. Morbi vel diam et eros hendrerit pretium quis at urna.\r\n\r\nProin porttitor varius risus et pulvinar. Duis tincidunt maximus felis, nec aliquet eros rhoncus non. Aenean tincidunt velit sed justo dignissim elementum. Nulla porttitor et ex et porta. Sed ut faucibus turpis. Pellentesque sit amet odio aliquet, mattis enim vel, cursus enim. Praesent egestas rutrum accumsan. Vestibulum rutrum neque at leo vestibulum interdum. Phasellus a scelerisque lorem. Aliquam tincidunt egestas ante ut hendrerit. Nunc venenatis viverra mi, quis aliquet sem fringilla nec. Suspendisse vitae pellentesque sem. Phasellus consequat metus non lectus vestibulum feugiat. Praesent placerat ornare augue, non tincidunt augue viverra in. Nulla facilisi. Nullam venenatis iaculis porta.\r\n\r\n', 'science_2.jpg', 'Znanost', 0),
(2, '25.06.2023.', 'VIJEST - EKONOMIJA 1', 'kratki sadrzaj vijesti znanost 1 kratki sadrzaj vijesti znanost 1 kratki sadrzaj vijesti znanost 1 kratki sadrzaj vijesti znanost 1 kratki sadrzaj vijesti znanost 1 kratki sadrzaj vijesti znanost 1\r\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer in efficitur lorem. Nulla nibh nibh, dignissim id ipsum nec, sagittis commodo ipsum. Proin sit amet nunc leo. Nullam eget leo suscipit, sagittis mi a, porttitor ex. Donec quis risus est. Donec sed nibh metus. Ut ut ante mattis, ornare orci eget, fermentum tellus. Nullam quis nulla molestie, convallis lacus ac, auctor quam. Vivamus nec purus lacinia, congue tellus nec, fringilla nibh. Maecenas lacinia, nisl ut blandit facilisis, velit sem iaculis augue, non tempus nunc tellus id dolor. Morbi vel diam et eros hendrerit pretium quis at urna.\r\n\r\nProin porttitor varius risus et pulvinar. Duis tincidunt maximus felis, nec aliquet eros rhoncus non. Aenean tincidunt velit sed justo dignissim elementum. Nulla porttitor et ex et porta. Sed ut faucibus turpis. Pellentesque sit amet odio aliquet, mattis enim vel, cursus enim. Praesent egestas rutrum accumsan. Vestibulum rutrum neque at leo vestibulum interdum. Phasellus a scelerisque lorem. Aliquam tincidunt egestas ante ut hendrerit. Nunc venenatis viverra mi, quis aliquet sem fringilla nec. Suspendisse vitae pellentesque sem. Phasellus consequat metus non lectus vestibulum feugiat. Praesent placerat ornare augue, non tincidunt augue viverra in. Nulla facilisi. Nullam venenatis iaculis porta.', 'economy_1.jpg', 'Ekonomija', 0),
(3, '25.06.2023.', 'VIJESTI - EKONOMIJA 2', 'kratki sadrzaj vijesti znanost 1 kratki sadrzaj vijesti znanost 1 kratki sadrzaj vijesti znanost 1 kratki sadrzaj vijesti znanost 1 kratki sadrzaj vijesti znanost 1 kratki sadrzaj vijesti znanost 1\r\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer in efficitur lorem. Nulla nibh nibh, dignissim id ipsum nec, sagittis commodo ipsum. Proin sit amet nunc leo. Nullam eget leo suscipit, sagittis mi a, porttitor ex. Donec quis risus est. Donec sed nibh metus. Ut ut ante mattis, ornare orci eget, fermentum tellus. Nullam quis nulla molestie, convallis lacus ac, auctor quam. Vivamus nec purus lacinia, congue tellus nec, fringilla nibh. Maecenas lacinia, nisl ut blandit facilisis, velit sem iaculis augue, non tempus nunc tellus id dolor. Morbi vel diam et eros hendrerit pretium quis at urna.\r\n\r\nProin porttitor varius risus et pulvinar. Duis tincidunt maximus felis, nec aliquet eros rhoncus non. Aenean tincidunt velit sed justo dignissim elementum. Nulla porttitor et ex et porta. Sed ut faucibus turpis. Pellentesque sit amet odio aliquet, mattis enim vel, cursus enim. Praesent egestas rutrum accumsan. Vestibulum rutrum neque at leo vestibulum interdum. Phasellus a scelerisque lorem. Aliquam tincidunt egestas ante ut hendrerit. Nunc venenatis viverra mi, quis aliquet sem fringilla nec. Suspendisse vitae pellentesque sem. Phasellus consequat metus non lectus vestibulum feugiat. Praesent placerat ornare augue, non tincidunt augue viverra in. Nulla facilisi. Nullam venenatis iaculis porta.', 'economy_2.jpg', 'Ekonomija', 0),
(4, '25.06.2023.', 'VIJESTI - EKONOMIJA 3', 'kratki sadrzaj vijesti znanost 1 kratki sadrzaj vijesti znanost 1 kratki sadrzaj vijesti znanost 1 kratki sadrzaj vijesti znanost 1 kratki sadrzaj vijesti znanost 1 kratki sadrzaj vijesti znanost 1\r\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer in efficitur lorem. Nulla nibh nibh, dignissim id ipsum nec, sagittis commodo ipsum. Proin sit amet nunc leo. Nullam eget leo suscipit, sagittis mi a, porttitor ex. Donec quis risus est. Donec sed nibh metus. Ut ut ante mattis, ornare orci eget, fermentum tellus. Nullam quis nulla molestie, convallis lacus ac, auctor quam. Vivamus nec purus lacinia, congue tellus nec, fringilla nibh. Maecenas lacinia, nisl ut blandit facilisis, velit sem iaculis augue, non tempus nunc tellus id dolor. Morbi vel diam et eros hendrerit pretium quis at urna.\r\n\r\nProin porttitor varius risus et pulvinar. Duis tincidunt maximus felis, nec aliquet eros rhoncus non. Aenean tincidunt velit sed justo dignissim elementum. Nulla porttitor et ex et porta. Sed ut faucibus turpis. Pellentesque sit amet odio aliquet, mattis enim vel, cursus enim. Praesent egestas rutrum accumsan. Vestibulum rutrum neque at leo vestibulum interdum. Phasellus a scelerisque lorem. Aliquam tincidunt egestas ante ut hendrerit. Nunc venenatis viverra mi, quis aliquet sem fringilla nec. Suspendisse vitae pellentesque sem. Phasellus consequat metus non lectus vestibulum feugiat. Praesent placerat ornare augue, non tincidunt augue viverra in. Nulla facilisi. Nullam venenatis iaculis porta.', 'stock-g7d724e0c6_640.jpg', 'Ekonomija', 0),
(5, '25.06.2023.', 'NASLOV VIJESTI - KULTURA 2', 'kratki sadrzaj vijesti znanost 1 kratki sadrzaj vijesti znanost 1 kratki sadrzaj vijesti znanost 1 kratki sadrzaj vijesti znanost 1 kratki sadrzaj vijesti znanost 1 kratki sadrzaj vijesti znanost 1\r\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer in efficitur lorem. Nulla nibh nibh, dignissim id ipsum nec, sagittis commodo ipsum. Proin sit amet nunc leo. Nullam eget leo suscipit, sagittis mi a, porttitor ex. Donec quis risus est. Donec sed nibh metus. Ut ut ante mattis, ornare orci eget, fermentum tellus. Nullam quis nulla molestie, convallis lacus ac, auctor quam. Vivamus nec purus lacinia, congue tellus nec, fringilla nibh. Maecenas lacinia, nisl ut blandit facilisis, velit sem iaculis augue, non tempus nunc tellus id dolor. Morbi vel diam et eros hendrerit pretium quis at urna.\r\n\r\nProin porttitor varius risus et pulvinar. Duis tincidunt maximus felis, nec aliquet eros rhoncus non. Aenean tincidunt velit sed justo dignissim elementum. Nulla porttitor et ex et porta. Sed ut faucibus turpis. Pellentesque sit amet odio aliquet, mattis enim vel, cursus enim. Praesent egestas rutrum accumsan. Vestibulum rutrum neque at leo vestibulum interdum. Phasellus a scelerisque lorem. Aliquam tincidunt egestas ante ut hendrerit. Nunc venenatis viverra mi, quis aliquet sem fringilla nec. Suspendisse vitae pellentesque sem. Phasellus consequat metus non lectus vestibulum feugiat. Praesent placerat ornare augue, non tincidunt augue viverra in. Nulla facilisi. Nullam venenatis iaculis porta.', 'culture_2.jpg', 'Kultura', 0),
(6, '25.06.2023.', 'NASLOV VIJESTI - ZNANOST 4', 'KRATKI SADRŽAJ DO 50 ZNAKOVA 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer in efficitur lorem. Nulla nibh nibh, dignissim id ipsum nec, sagittis commodo ipsum. Proin sit amet nunc leo. Nullam eget leo suscipit, sagittis mi a, porttitor ex. Donec quis risus est. Donec sed nibh metus. Ut ut ante mattis, ornare orci eget, fermentum tellus. Nullam quis nulla molestie, convallis lacus ac, auctor quam. Vivamus nec purus lacinia, congue tellus nec, fringilla nibh. Maecenas lacinia, nisl ut blandit facilisis, velit sem iaculis augue, non tempus nunc tellus id dolor. Morbi vel diam et eros hendrerit pretium quis at urna.\r\n\r\nProin porttitor varius risus et pulvinar. Duis tincidunt maximus felis, nec aliquet eros rhoncus non. Aenean tincidunt velit sed justo dignissim elementum. Nulla porttitor et ex et porta. Sed ut faucibus turpis. Pellentesque sit amet odio aliquet, mattis enim vel, cursus enim. Praesent egestas rutrum accumsan. Vestibulum rutrum neque at leo vestibulum interdum. Phasellus a scelerisque lorem. Aliquam tincidunt egestas ante ut hendrerit. Nunc venenatis viverra mi, quis aliquet sem fringilla nec. Suspendisse vitae pellentesque sem. Phasellus consequat metus non lectus vestibulum feugiat. Praesent placerat ornare augue, non tincidunt augue viverra in. Nulla facilisi. Nullam venenatis iaculis porta.', 'space-gd394b6e7d_640.jpg', 'Znanost', 0),
(7, '25.06.2023.', 'NASLOV VIJESTI - ZNANOST 5', 'KRATKI SADRŽAJ DO 50 ZNAKOVA 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer in efficitur lorem. Nulla nibh nibh, dignissim id ipsum nec, sagittis commodo ipsum. Proin sit amet nunc leo. Nullam eget leo suscipit, sagittis mi a, porttitor ex. Donec quis risus est. Donec sed nibh metus. Ut ut ante mattis, ornare orci eget, fermentum tellus. Nullam quis nulla molestie, convallis lacus ac, auctor quam. Vivamus nec purus lacinia, congue tellus nec, fringilla nibh. Maecenas lacinia, nisl ut blandit facilisis, velit sem iaculis augue, non tempus nunc tellus id dolor. Morbi vel diam et eros hendrerit pretium quis at urna.\r\n\r\nProin porttitor varius risus et pulvinar. Duis tincidunt maximus felis, nec aliquet eros rhoncus non. Aenean tincidunt velit sed justo dignissim elementum. Nulla porttitor et ex et porta. Sed ut faucibus turpis. Pellentesque sit amet odio aliquet, mattis enim vel, cursus enim. Praesent egestas rutrum accumsan. Vestibulum rutrum neque at leo vestibulum interdum. Phasellus a scelerisque lorem. Aliquam tincidunt egestas ante ut hendrerit. Nunc venenatis viverra mi, quis aliquet sem fringilla nec. Suspendisse vitae pellentesque sem. Phasellus consequat metus non lectus vestibulum feugiat. Praesent placerat ornare augue, non tincidunt augue viverra in. Nulla facilisi. Nullam venenatis iaculis porta.', 'solar.jpg', 'Znanost', 0),
(8, '25.06.2023.', 'NASLOV VIJESTI - KULTURA 5', 'KRATKI SADRŽAJ DO 50 ZNAKOVA 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer in efficitur lorem. Nulla nibh nibh, dignissim id ipsum nec, sagittis commodo ipsum. Proin sit amet nunc leo. Nullam eget leo suscipit, sagittis mi a, porttitor ex. Donec quis risus est. Donec sed nibh metus. Ut ut ante mattis, ornare orci eget, fermentum tellus. Nullam quis nulla molestie, convallis lacus ac, auctor quam. Vivamus nec purus lacinia, congue tellus nec, fringilla nibh. Maecenas lacinia, nisl ut blandit facilisis, velit sem iaculis augue, non tempus nunc tellus id dolor. Morbi vel diam et eros hendrerit pretium quis at urna.\r\n\r\nProin porttitor varius risus et pulvinar. Duis tincidunt maximus felis, nec aliquet eros rhoncus non. Aenean tincidunt velit sed justo dignissim elementum. Nulla porttitor et ex et porta. Sed ut faucibus turpis. Pellentesque sit amet odio aliquet, mattis enim vel, cursus enim. Praesent egestas rutrum accumsan. Vestibulum rutrum neque at leo vestibulum interdum. Phasellus a scelerisque lorem. Aliquam tincidunt egestas ante ut hendrerit. Nunc venenatis viverra mi, quis aliquet sem fringilla nec. Suspendisse vitae pellentesque sem. Phasellus consequat metus non lectus vestibulum feugiat. Praesent placerat ornare augue, non tincidunt augue viverra in. Nulla facilisi. Nullam venenatis iaculis porta.', 'myanmar-g69dd16b9b_640.jpg', 'Kultura', 0),
(9, '25.06.2023.', 'NASLOV VIJESTI - KULTURA 4', 'KRATKI SADRŽAJ DO 50 ZNAKOVA 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer in efficitur lorem. Nulla nibh nibh, dignissim id ipsum nec, sagittis commodo ipsum. Proin sit amet nunc leo. Nullam eget leo suscipit, sagittis mi a, porttitor ex. Donec quis risus est. Donec sed nibh metus. Ut ut ante mattis, ornare orci eget, fermentum tellus. Nullam quis nulla molestie, convallis lacus ac, auctor quam. Vivamus nec purus lacinia, congue tellus nec, fringilla nibh. Maecenas lacinia, nisl ut blandit facilisis, velit sem iaculis augue, non tempus nunc tellus id dolor. Morbi vel diam et eros hendrerit pretium quis at urna.\r\n\r\nProin porttitor varius risus et pulvinar. Duis tincidunt maximus felis, nec aliquet eros rhoncus non. Aenean tincidunt velit sed justo dignissim elementum. Nulla porttitor et ex et porta. Sed ut faucibus turpis. Pellentesque sit amet odio aliquet, mattis enim vel, cursus enim. Praesent egestas rutrum accumsan. Vestibulum rutrum neque at leo vestibulum interdum. Phasellus a scelerisque lorem. Aliquam tincidunt egestas ante ut hendrerit. Nunc venenatis viverra mi, quis aliquet sem fringilla nec. Suspendisse vitae pellentesque sem. Phasellus consequat metus non lectus vestibulum feugiat. Praesent placerat ornare augue, non tincidunt augue viverra in. Nulla facilisi. Nullam venenatis iaculis porta.', 'tori-g0089669c4_640.jpg', 'Kultura', 0),
(10, '25.06.2023.', 'NASLOV VIJESTI - KULTURA 3', 'kratki sadrzaj v\r\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer in efficitur lorem. Nulla nibh nibh, dignissim id ipsum nec, sagittis commodo ipsum. Proin sit amet nunc leo. Nullam eget leo suscipit, sagittis mi a, porttitor ex. Donec quis risus est. Donec sed nibh metus. Ut ut ante mattis, ornare orci eget, fermentum tellus. Nullam quis nulla molestie, convallis lacus ac, auctor quam. Vivamus nec purus lacinia, congue tellus nec, fringilla nibh. Maecenas lacinia, nisl ut blandit facilisis, velit sem iaculis augue, non tempus nunc tellus id dolor. Morbi vel diam et eros hendrerit pretium quis at urna.\r\n\r\nProin porttitor varius risus et pulvinar. Duis tincidunt maximus felis, nec aliquet eros rhoncus non. Aenean tincidunt velit sed justo dignissim elementum. Nulla porttitor et ex et porta. Sed ut faucibus turpis. Pellentesque sit amet odio aliquet, mattis enim vel, cursus enim. Praesent egestas rutrum accumsan. Vestibulum rutrum neque at leo vestibulum interdum. Phasellus a scelerisque lorem. Aliquam tincidunt egestas ante ut hendrerit. Nunc venenatis viverra mi, quis aliquet sem fringilla nec. Suspendisse vitae pellentesque sem. Phasellus consequat metus non lectus vestibulum feugiat. Praesent placerat ornare augue, non tincidunt augue viverra in. Nulla facilisi. Nullam venenatis iaculis porta.', 'culture_1.jpg', 'Kultura', 0),
(11, '25.06.2023.', 'VIJESTI - ZNANOST 1', 'kratki sadrzaj vijesti znanost 1 kratki sadrzaj vijesti znanost 1 kratki sad\r\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer in efficitur lorem. Nulla nibh nibh, dignissim id ipsum nec, sagittis commodo ipsum. Proin sit amet nunc leo. Nullam eget leo suscipit, sagittis mi a, porttitor ex. Donec quis risus est. Donec sed nibh metus. Ut ut ante mattis, ornare orci eget, fermentum tellus. Nullam quis nulla molestie, convallis lacus ac, auctor quam. Vivamus nec purus lacinia, congue tellus nec, fringilla nibh. Maecenas lacinia, nisl ut blandit facilisis, velit sem iaculis augue, non tempus nunc tellus id dolor. Morbi vel diam et eros hendrerit pretium quis at urna.\r\n\r\nProin porttitor varius risus et pulvinar. Duis tincidunt maximus felis, nec aliquet eros rhoncus non. Aenean tincidunt velit sed justo dignissim elementum. Nulla porttitor et ex et porta. Sed ut faucibus turpis. Pellentesque sit amet odio aliquet, mattis enim vel, cursus enim. Praesent egestas rutrum accumsan. Vestibulum rutrum neque at leo vestibulum interdum. Phasellus a scelerisque lorem. Aliquam tincidunt egestas ante ut hendrerit. Nunc venenatis viverra mi, quis aliquet sem fringilla nec. Suspendisse vitae pellentesque sem. Phasellus consequat metus non lectus vestibulum feugiat. Praesent placerat ornare augue, non tincidunt augue viverra in. Nulla facilisi. Nullam venenatis iaculis porta.', 'piggy-bank-ge77e4ca34_640.jpg', 'Ekonomija', 0);

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int(11) NOT NULL,
  `ime` varchar(255) NOT NULL,
  `prezime` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `razina` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `ime`, `prezime`, `username`, `password`, `razina`) VALUES
(0, 'bla', 'bla', 'bla', '$2y$10$FEAIMaozjPIdtIoOToN/V.ZHAK2HqNu31qufoMtk/A6GUCyd/KLNO', 0),
(1, 'test', 'test', 'test', '$2y$10$tlxFE5jP.3fDKVrkummE5.RSZ.TxYYb5v6nCcoOxc42MhNQBmmbXq', 0),
(2, 'admin', 'admin', 'admin', '$2y$10$M7yTDzFEyyREgw4s7PDChOE5Etbb.KvzLn3fDC7gUQ382bXCBFPRu', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clanak`
--
ALTER TABLE `clanak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_index` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clanak`
--
ALTER TABLE `clanak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
