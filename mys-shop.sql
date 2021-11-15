-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 15 Kas 2021, 15:51:40
-- Sunucu sürümü: 10.4.21-MariaDB
-- PHP Sürümü: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `e-shop`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `categories`
--

INSERT INTO `categories` (`id`, `category_name`) VALUES
(1, 'Bilgisayar'),
(2, 'Televizyon'),
(3, 'Kulaklık'),
(4, 'Ayakkabı'),
(5, 'Oyunlar Oyun Konsolları');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` decimal(10,0) NOT NULL,
  `product_code` varchar(255) DEFAULT NULL,
  `product_category` int(11) NOT NULL,
  `product_stock` int(11) DEFAULT NULL,
  `product_url` varchar(524) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_price`, `product_code`, `product_category`, `product_stock`, `product_url`) VALUES
(1, 'ASUS X515JA CORE İ3 1005G1 1.2GHZ-4GB RAM-256GB SSD-15.6\"-INT-W10\n', '4999', NULL, 1, 10, 'asus-x515ja-core-i3-1005g1-12ghz-4gb-ram-256gb-ssd-156-int-w10'),
(2, 'LG 48C14 48\" 121 CM 4K UHD OLED webOS SMART TV,DAHİLİ UYDU ALICI\n', '9799', NULL, 2, 0, 'lg-48c14-48-121-cm-4k-uhd-oled-webos-smart-tvdahili-uydu-alici'),
(3, 'VESTEL 58U9510 58\'\' 146 CM 4K UHD SMART TV,DAHİLİ UYDU ALICILI\r\n', '5999', NULL, 2, 1, 'vestel-58u9510-58-146-cm-4k-uhd-smart-tvdahili-uydu-alicili'),
(4, 'JBL T225 TWS Kablosuz Kulak İçi Bluetooth Kulaklık – Ghost Black\n', '129', NULL, 3, 999, 'jbl-free-kablosuz-kulakici-kulaklik'),
(5, 'adidas Hoops 2.0 Erkek Spor Ayakkabısı FY8626', '389', NULL, 4, NULL, 'adidas-hoops-20-erkek-spor-ayakkabisi-fy8626'),
(6, 'Sony Playstation 5 Oyun Konsolu (Eurasia garantili)\r\n', '11250', NULL, 5, 999, 'sony-playstation-5-oyun-konsolu-eurasia-garantili');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `product_options`
--

CREATE TABLE `product_options` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `option_value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `product_options`
--

INSERT INTO `product_options` (`id`, `product_id`, `option_value`) VALUES
(1, 1, '64 GB'),
(2, 1, '128 GB'),
(3, 3, 'Siyah'),
(4, 3, 'Beyaz'),
(5, 3, 'Gri'),
(6, 3, 'Mor'),
(7, 4, 'Siyah'),
(8, 4, 'Gri'),
(9, 5, '38'),
(10, 5, '39'),
(11, 5, '40'),
(12, 5, '41'),
(13, 5, '42'),
(14, 5, '43'),
(15, 5, '44'),
(16, 5, '44.5'),
(17, 5, '45'),
(18, 5, '45.5'),
(19, 6, 'Beyaz'),
(20, 6, 'Siyah');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `path`) VALUES
(1, 1, 'deneme1.jpg'),
(2, 1, 'deneme1.jpg'),
(3, 1, 'deneme1.jpg'),
(4, 2, 'deneme1.jpg'),
(5, 3, '127688-2-1_large.jpg'),
(6, 3, '127688-1-1_large.jpg'),
(7, 4, '10962340118578.jpg'),
(8, 4, '10962340151346.jpg'),
(9, 4, '10962340184114.jpg'),
(10, 4, '10962340216882.jpg'),
(11, 4, '10962340282418.jpg'),
(12, 4, '10962340315186.jpg'),
(21, 5, '11285957476402.jpg'),
(22, 5, '11285957509170.jpg'),
(23, 5, '11285957574706.jpg'),
(24, 5, '11285957476402.jpg'),
(25, 6, 'd1.jpg'),
(26, 6, 'd2.jpg'),
(27, 6, 'd3.jpg'),
(28, 6, 'd4.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_fullName` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `studet_register_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `user_fullName`, `user_email`, `user_password`, `studet_register_date`) VALUES
(1, 'Emrecan Ünlü', 'unl.c.emre@gmail.com', '31677e422df4bfb1d259c7adcf2339c5', '2021-11-12 11:57:29'),
(2, 'Tutkun Turan', 'tutkun_turan123@gmail.com', '3205759388d51fc62ae5f4b833760a7b', '2021-11-13 20:48:36'),
(3, 'huseyin kurban', 'huseyin_kurban@gmail.com', '31677e422df4bfb1d259c7adcf2339c5', '2021-11-14 21:31:11'),
(4, 'Berke Ozan', 'berke-ozan35@icloud.com', '6ba4bf6e993ede39c3b39523c7c88a64', '2021-11-15 11:29:09'),
(5, 'Denem Kullanıcı', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2021-11-15 14:12:21');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user_cart`
--

CREATE TABLE `user_cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `option_id` int(11) DEFAULT NULL,
  `count` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `user_cart`
--

INSERT INTO `user_cart` (`id`, `user_id`, `product_id`, `option_id`, `count`) VALUES
(83, 1, 4, 7, 4),
(84, 1, 4, 8, 4),
(85, 1, 3, 3, 1),
(86, 1, 3, 4, 1),
(87, 1, 6, 20, 1),
(88, 5, 6, 20, 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `product_options`
--
ALTER TABLE `product_options`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `user_cart`
--
ALTER TABLE `user_cart`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `product_options`
--
ALTER TABLE `product_options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Tablo için AUTO_INCREMENT değeri `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `user_cart`
--
ALTER TABLE `user_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
