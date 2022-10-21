-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 21 Paź 2022, 14:24
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `rental`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `cars`
--

CREATE TABLE `cars` (
  `id_car` int(12) NOT NULL,
  `marka` varchar(20) NOT NULL,
  `model` varchar(20) NOT NULL,
  `silnik` varchar(10) NOT NULL,
  `rok_produkcji` text NOT NULL,
  `opis` text NOT NULL,
  `photo_dir` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `cars`
--

INSERT INTO `cars` (`id_car`, `marka`, `model`, `silnik`, `rok_produkcji`, `opis`, `photo_dir`) VALUES
(1, 'Audi', 'a4', '1.9TDi', '2000', 'Ekonomiczny i zwinny samochód z dużym bagażnikiem.', 'img/audi.jpg'),
(2, 'BMW', 'E46', '2.0 benzyn', '2002', 'Dynamiczne i luksusowe auto klasy premium. ', 'https://bi.im-g.pl/im/28/14/1a/z27345704IER,BMW-serii-3-E46.jpg'),
(3, 'Renault', 'Laguna', '1.9DCi ', '2002', 'Stylowe i ekonomiczne. ', 'https://ocdn.eu/images/pulscms/MDI7MDA_/b1299e4001f6bda3ade945fc84ca6688.jpg'),
(4, 'Opel', 'Astra', '1.4', '2005', 'Ekonomia w każdym calu, niemiecka precyzja i niemałe osiągi. ', 'https://img.chceauto.pl/opel/astra/opel_astra_sedan_242_233_head.jpg'),
(6, 'Alfa Romeo', '147', '1.9JTD', '2006', 'Idealne dla ludzi o mocnych nerwach i miłośników lawety. ', 'https://i.ytimg.com/vi/yJXYjaRDuI4/maxresdefault.jpg'),
(7, 'VW', 'Golf', '1.6', '2002', 'Wyrafinowane osiągi i kunsztowne wykonanie wnętrza.', 'https://d-art.ppstatic.pl/kadry/k/r/1/9a/ad/624bc79b7597c_o_full.jpg'),
(8, 'Seat', 'Ibiza', '1.6', '2002', 'Małe i zwinne auto z dużą mocą. ', 'https://www.autocentrum.pl/ac-file/article/5e4af437c74b35742f21a34e/22-02-1993-poczatek-produkcji-seata-ibizy.jpg');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id_car`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `cars`
--
ALTER TABLE `cars`
  MODIFY `id_car` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
