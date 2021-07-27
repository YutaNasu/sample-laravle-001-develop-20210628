DROP TABLE IF EXISTS `List2`;
CREATE TABLE `List2` (
  `list2_id` int(11) NOT NULL,
  `list_name` varchar(2048) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office_name` varchar(2048) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street_address` varchar(2048) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel_number` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_address` varchar(2048) COLLATE utf8mb4_unicode_ci NOT NULL,
  `responce_name` varchar(2048) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
ALTER TABLE `List2`
  ADD PRIMARY KEY (`list2_id`);
ALTER TABLE `List2`
  MODIFY `list2_id` int(11) NOT NULL AUTO_INCREMENT;

DROP TABLE IF EXISTS `User`;
CREATE TABLE `User` (
  `user_id` int(11) NOT NULL,
  `username` varchar(2048) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street_address` varchar(2048) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel_number` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_address` varchar(2048) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
ALTER TABLE `User`
  ADD PRIMARY KEY (`user_id`);
ALTER TABLE `User`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

DROP TABLE IF EXISTS `History`;
CREATE TABLE `History` (
  `order_number` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total_money` int(11) NOT NULL,
  `total_count` int(11) NOT NULL,
  `buy_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
ALTER TABLE `History`
  ADD PRIMARY KEY (`order_number`);
ALTER TABLE `History`
  MODIFY `order_number` int(11) NOT NULL AUTO_INCREMENT;

DROP TABLE IF EXISTS `Product`;
CREATE TABLE `Product` (
  `id` int(11) NOT NULL,
  `name` varchar(2048) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `date` date NOT NULL,
  `infomation` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(2048) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
ALTER TABLE `Product`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `Product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
