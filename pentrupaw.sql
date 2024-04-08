-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: mai 26, 2023 la 02:29 PM
-- Versiune server: 10.4.28-MariaDB
-- Versiune PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `login`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `pentrupaw`
--

CREATE TABLE `pentrupaw` (
  `id` bigint(255) NOT NULL,
  `den_p` varchar(255) NOT NULL,
  `val_spec` bigint(255) NOT NULL,
  `den_s` varchar(255) NOT NULL,
  `den_c` varchar(255) NOT NULL,
  `cant_p` bigint(255) NOT NULL,
  `suma_f` bigint(255) NOT NULL,
  `data_f` date NOT NULL,
  `nume_a` varchar(255) NOT NULL,
  `functie_a` varchar(255) NOT NULL,
  `locatie_a` varchar(255) NOT NULL,
  `data_p` date NOT NULL,
  `nr_ore_po` bigint(255) NOT NULL,
  `loc_cli` varchar(255) NOT NULL,
  `adresa_cli` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Eliminarea datelor din tabel `pentrupaw`
--

INSERT INTO `pentrupaw` (`id`, `den_p`, `val_spec`, `den_s`, `den_c`, `cant_p`, `suma_f`, `data_f`, `nume_a`, `functie_a`, `locatie_a`, `data_p`, `nr_ore_po`, `loc_cli`, `adresa_cli`) VALUES
(1, 'chitara', 100, 'corzi,lemn,cablu', 'electric', 1, 300, '2023-04-12', 'Ana Jujuleana\r\nAnel Jujuleana\r\nIonel Julica', 'casier\r\nproducator\r\nmanager', 'Galati\r\nGalati\r\nBucuresti', '2023-03-08', 10, 'Galati', 'Galati,Centru'),
(2, 'pian', 1000, 'corzi,lemn,clape', 'clasic', 100, 5000, '2022-04-13', 'Ana Jujuleana\r\nIonel Julica\r\nAnel Jujuleana', 'casier\r\nmanager\r\nproducator', 'Galati\r\nGalati\r\nBucuresti', '2023-05-02', 10, 'Balcani', 'Strada: Sperentei, Nr: 10'),
(31, 'chitara', 100, 'corzi,lemn,cablu', 'electric', 1, 300, '0000-00-00', 'Ana Jujuleana\r\nAnel Jujuleana\r\nIonel Julica', 'casier\r\nproducator\r\nmanager', 'Galati\r\nGalati\r\nBucuresti', '0000-00-00', 10, 'Galati', 'Galati,Centru'),
(32, 'pian', 300, 'Corzi\r\nlemn\r\ncablu', 'electric', 100, 900, '2023-04-05', 'asjkh\r\nkjbas\r\nkjasb', 'ajksh\r\nkjas\r\njaslk', 'jask\r\nsajkl\r\nljas', '2023-04-01', 4, 'kjjah\r\nkjas\r\nkjas', 'kjash\r\nkjas\r\nkas'),
(33, 'chitara', 100, 'corzi,lemn,cablu', 'electric', 1, 300, '0000-00-00', 'Ana Jujuleana\r\nAnel Jujuleana\r\nIonel Julica', 'casier\r\nproducator\r\nmanager', 'Galati\r\nGalati\r\nBucuresti', '0000-00-00', 10, 'Galati', 'Galati,Centru');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `pentrupaw`
--
ALTER TABLE `pentrupaw`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `pentrupaw`
--
ALTER TABLE `pentrupaw`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
