-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 06 feb 2019 om 18:57
-- Serverversie: 10.1.30-MariaDB
-- PHP-versie: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bb-boeken`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `boeken`
--

CREATE TABLE `boeken` (
  `boeken_id` int(11) NOT NULL,
  `naam` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `beschrijving` varchar(600) COLLATE utf8_unicode_ci NOT NULL,
  `schrijver` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fk_categorie` int(11) NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `categorien`
--

CREATE TABLE `categorien` (
  `categorie_id` int(11) NOT NULL,
  `categorie_naam` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `categorien`
--

INSERT INTO `categorien` (`categorie_id`, `categorie_naam`) VALUES
(1, 'Android'),
(2, 'Linux'),
(3, 'Windows'),
(4, 'Bash'),
(5, 'Python'),
(6, 'Ruby'),
(7, 'Buffer Over'),
(8, 'C#'),
(9, 'C'),
(10, 'Java'),
(11, 'Assembly'),
(12, 'HTML/CSS'),
(13, 'PHP'),
(14, 'Perl'),
(15, 'JavaScript'),
(16, 'Shellcode'),
(17, 'Overig'),
(18, 'Exploits'),
(19, 'Reverse Engeneering');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` char(64) COLLATE utf8_unicode_ci NOT NULL,
  `salt` char(16) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `boeken`
--
ALTER TABLE `boeken`
  ADD PRIMARY KEY (`boeken_id`),
  ADD KEY `fk_categorie` (`fk_categorie`);

--
-- Indexen voor tabel `categorien`
--
ALTER TABLE `categorien`
  ADD PRIMARY KEY (`categorie_id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `boeken`
--
ALTER TABLE `boeken`
  MODIFY `boeken_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `categorien`
--
ALTER TABLE `categorien`
  MODIFY `categorie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `boeken`
--
ALTER TABLE `boeken`
  ADD CONSTRAINT `boeken_ibfk_1` FOREIGN KEY (`fk_categorie`) REFERENCES `categorien` (`categorie_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
