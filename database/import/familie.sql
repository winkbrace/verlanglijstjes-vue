-- phpMyAdmin SQL Dump
-- version 4.4.15.8
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Gegenereerd op: 02 nov 2016 om 13:49
-- Serverversie: 5.7.15
-- PHP-versie: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `M1004959_databazz`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `familie`
--

CREATE TABLE IF NOT EXISTS `familie` (
  `id` tinyint(4) NOT NULL,
  `naam` varchar(20) NOT NULL DEFAULT '',
  `rang` tinyint(4) NOT NULL DEFAULT '1',
  `wachtwoord` varchar(50) NOT NULL DEFAULT '',
  `letter` varchar(30) NOT NULL DEFAULT '',
  `volgorde` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `familie`
--

INSERT INTO `familie` (`id`, `naam`, `rang`, `wachtwoord`, `letter`, `volgorde`) VALUES
(1, 'GJ', 1, 'f64d42916582d457d2fbdb7386bd05c8', 'Puur Hazelnoot', 1),
(2, 'Gerda', 1, 'f64d42916582d457d2fbdb7386bd05c8', 'Puur', 2),
(3, 'Bas', 2, 'f64d42916582d457d2fbdb7386bd05c8', 'Melk Hazelnoot', 10),
(5, 'Bob', 3, 'f64d42916582d457d2fbdb7386bd05c8', 'Melk', 12),
(6, 'Lieselot', 2, 'f64d42916582d457d2fbdb7386bd05c8', 'Puur Hazelnoot,Melk,Melk Hazel', 20),
(7, 'Hugo', 2, 'f64d42916582d457d2fbdb7386bd05c8', 'Puur Hazelnoot', 21),
(8, 'Daan', 2, 'f64d42916582d457d2fbdb7386bd05c8', 'Melk,Melk Hazelnoot', 30),
(9, 'Leanne', 2, 'f64d42916582d457d2fbdb7386bd05c8', 'Puur,Puur Hazelnoot', 31),
(10, 'Sepp', 3, 'f64d42916582d457d2fbdb7386bd05c8', 'Melk', 13),
(11, 'Noortje', 3, 'f64d42916582d457d2fbdb7386bd05c8', 'Puur', 32),
(12, 'Abel', 3, 'f64d42916582d457d2fbdb7386bd05c8', 'Puur', 33);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `familie`
--
ALTER TABLE `familie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `familie`
--
ALTER TABLE `familie`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
