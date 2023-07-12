-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 26, 2023 alle 17:24
-- Versione del server: 10.4.28-MariaDB
-- Versione PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestionale`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `tgestionale`
--

CREATE TABLE `tgestionale` (
  `id` int(11) NOT NULL,
  `nomeCognome` text NOT NULL,
  `oggetto` text NOT NULL,
  `tipoRiparazione` text NOT NULL,
  `dataConsegna` date NOT NULL,
  `dataRitiro` date NOT NULL,
  `chiRipara` text NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `tgestionale`
--

INSERT INTO `tgestionale` (`id`, `nomeCognome`, `oggetto`, `tipoRiparazione`, `dataConsegna`, `dataRitiro`, `chiRipara`, `note`) VALUES
(1, 'Maria Verdi', 'Anello diamanti', 'Rodiare griffe', '2023-05-17', '0000-00-00', 'Angelo', ''),
(2, 'Antonio Giallo', 'Bracciale Argento', 'Accorciare', '2023-05-17', '0000-00-00', 'Angelo', '2 maglie in meno'),
(3, 'Caterina Grossi', 'Orologio', 'sostituzione vetro', '2023-05-19', '0000-00-00', 'Orologiaio', 'se inferiore a 30 euro procedere!'),
(4, 'Salvatore ', 'Orologio', 'sostituzione lancetta secondi e pulizia', '2023-05-19', '0000-00-00', 'Orologiaio', 'da consegnare entro fine mese');


--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `tgestionale`
--
ALTER TABLE `tgestionale`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `tgestionale`
--
ALTER TABLE `tgestionale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
