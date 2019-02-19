-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 19 Şub 2019, 11:43:30
-- Sunucu sürümü: 10.1.36-MariaDB
-- PHP Sürümü: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `netas_googleapi_db`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `area`
--

CREATE TABLE `area` (
  `id` int(11) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `radius` int(11) NOT NULL,
  `typesty` varchar(255) NOT NULL,
  `nearby_places` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `area`
--

INSERT INTO `area` (`id`, `latitude`, `longitude`, `radius`, `typesty`, `nearby_places`) VALUES
(1, '40.880943', '29.257742', 20, 'school', 'a:2:{i:0;a:3:{s:4:\"name\";s:30:\"şehit yalçın aran ortaokulu\";s:3:\"lng\";d:29.257742;s:3:\"lat\";d:40.88094470000001;}i:1;a:3:{s:4:\"name\";s:55:\"İstanbul pendik özel Farabi tekniki ve anadolu lisesi\";s:3:\"lng\";d:29.257742;s:3:\"lat\";d:40.88094470000001;}}'),
(2, '41.008240', '28.978359', 40, 'gym', 'a:2:{i:0;a:3:{s:4:\"name\";s:27:\"Noa Pilates & Beauty Studio\";s:3:\"lng\";d:28.9783589;s:3:\"lat\";d:41.0082376;}i:1;a:3:{s:4:\"name\";s:15:\"Durakoğluyunus\";s:3:\"lng\";d:28.9781522;s:3:\"lat\";d:41.0081516;}}');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
