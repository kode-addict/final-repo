-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 27, 2015 at 03:42 AM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `maepaysoh`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE IF NOT EXISTS `candidates` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `name`, `image_url`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Myriam Murazik', 'Sit aliquam voluptas quam quaerat explicabo. Nostrum praesentium aut incidunt sit commodi nesciunt neque. Doloribus autem quam dolorem aut vel facere. Magnam molestias ratione labore necessitatibus.', '2015-09-20 11:50:59', '2015-09-20 11:50:59'),
(2, 'Jaime Daniel Jr.', 'Quibusdam consectetur quia architecto nostrum consequatur nobis aut. Quia rerum voluptatem sunt neque cumque. Deleniti sed pariatur numquam.', '2015-09-20 11:50:59', '2015-09-20 11:50:59'),
(3, 'Chloe Buckridge', 'Quasi et alias est voluptatem et nam mollitia. Id non et commodi quidem non quisquam. Aut distinctio a in vel aspernatur perferendis qui.', '2015-09-20 11:50:59', '2015-09-20 11:50:59'),
(4, 'Prof. Delmer Abbott Jr.', 'Tempora necessitatibus doloribus et sunt facilis possimus consectetur. Consectetur officia hic quos facilis deleniti adipisci mollitia.', '2015-09-20 11:51:00', '2015-09-20 11:51:00'),
(5, 'Ruth Windler', 'Occaecati enim omnis et maiores non. Ab porro et suscipit dignissimos quasi rerum est. Aliquid iusto voluptas eveniet ab.', '2015-09-20 11:51:00', '2015-09-20 11:51:00'),
(6, 'Nicholaus Bergstrom', 'Perspiciatis nisi et sit. Nemo impedit tempora nihil natus dignissimos eum. Quo aut quia excepturi eaque. Non in maxime sapiente ducimus.', '2015-09-20 11:51:00', '2015-09-20 11:51:00'),
(7, 'Dr. Sydni Glover', 'Ad eum autem eos. Eum libero earum quo officiis est. Quibusdam libero hic qui dolor laboriosam dolore suscipit.\nEt et aut ab sit. Unde itaque voluptatem ea. Tempora voluptatibus cumque quia autem.', '2015-09-20 11:51:00', '2015-09-20 11:51:00'),
(8, 'Ena Bogan', 'Rem quos iste totam suscipit vel nisi excepturi. Omnis quae sed doloribus quae eos. Placeat non expedita id ad voluptas iure ea.', '2015-09-20 11:51:00', '2015-09-20 11:51:00'),
(9, 'Khalid Dach', 'Aut quia officiis nesciunt in ut. Fuga laudantium soluta est voluptas. In sint ut dignissimos. Tenetur quo molestiae eaque molestias sed consequatur.', '2015-09-20 11:51:00', '2015-09-20 11:51:00'),
(10, 'Buford Pfeffer', 'Minima consequatur nostrum fuga reprehenderit hic sint ex. Aut hic ex eos illo cupiditate inventore. Neque aut nobis cupiditate necessitatibus et.', '2015-09-20 11:51:00', '2015-09-20 11:51:00');

-- --------------------------------------------------------

--
-- Table structure for table `favorite_candidate`
--

CREATE TABLE IF NOT EXISTS `favorite_candidate` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `candidate_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `favorite_candidate_user_id_foreign` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=36 ;

--
-- Dumping data for table `favorite_candidate`
--

INSERT INTO `favorite_candidate` (`id`, `user_id`, `candidate_id`, `created_at`, `updated_at`) VALUES
(7, 1, '55b928b941686ec2c91c28e513c28e35', '2015-09-21 09:26:03', '2015-09-21 09:26:03'),
(8, 1, 'd6a7ea9767f8d2c461324542028ff26d', '2015-09-21 10:23:13', '2015-09-21 10:23:13'),
(12, 1, 'ec35a978da1e39dee43b53b1ad60b4c3', '2015-09-21 22:11:38', '2015-09-21 22:11:38'),
(13, 2, '55b928b941686ec2c91c28e513c28e35', '2015-09-21 22:22:02', '2015-09-21 22:22:02'),
(14, 1, 'afc9ef6d0c3ffd08bcb2ae3f8b299528', '2015-09-22 00:50:39', '2015-09-22 00:50:39'),
(18, 1, '3a0a6f147b66c391210350300b3b855f', '2015-09-26 00:20:41', '2015-09-26 00:20:41'),
(35, 1, 'a86006292967b9ea72cd785b89b4046d', '2015-09-26 10:37:19', '2015-09-26 10:37:19');

-- --------------------------------------------------------

--
-- Table structure for table `favorite_party`
--

CREATE TABLE IF NOT EXISTS `favorite_party` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `party_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `favorite_party_user_id_foreign` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `favorite_party`
--

INSERT INTO `favorite_party` (`id`, `user_id`, `party_id`, `created_at`, `updated_at`) VALUES
(1, 1, '21', '2015-09-21 22:03:56', '2015-09-21 22:03:56'),
(2, 1, '22', '2015-09-21 22:11:22', '2015-09-21 22:11:22'),
(4, 1, '40', '2015-09-26 11:46:41', '2015-09-26 11:46:41');

-- --------------------------------------------------------

--
-- Table structure for table `like_candidate`
--

CREATE TABLE IF NOT EXISTS `like_candidate` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `candidate_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `like_candidate_user_id_foreign` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=27 ;

--
-- Dumping data for table `like_candidate`
--

INSERT INTO `like_candidate` (`id`, `user_id`, `candidate_id`, `created_at`, `updated_at`) VALUES
(9, 1, '55b928b941686ec2c91c28e513c28e35', '2015-09-21 09:26:09', '2015-09-21 09:26:09'),
(12, 1, 'ec35a978da1e39dee43b53b1ad60b4c3', '2015-09-21 22:11:39', '2015-09-21 22:11:39'),
(14, 2, '55b928b941686ec2c91c28e513c28e35', '2015-09-21 22:21:52', '2015-09-21 22:21:52'),
(16, 1, 'afc9ef6d0c3ffd08bcb2ae3f8b299528', '2015-09-22 00:53:57', '2015-09-22 00:53:57'),
(18, 1, '2cc5e5574fb1e34f53aea8501483fb03', '2015-09-22 09:26:08', '2015-09-22 09:26:08'),
(19, 1, 'c1dc61beba9e9ca919fa85a08b9e0c13', '2015-09-22 09:33:03', '2015-09-22 09:33:03'),
(20, 1, '7cd457729a8e2ecc16cad54949b90e09', '2015-09-22 09:35:36', '2015-09-22 09:35:36'),
(22, 1, '3a0a6f147b66c391210350300b3b855f', '2015-09-26 00:20:46', '2015-09-26 00:20:46'),
(23, 1, 'a86006292967b9ea72cd785b89b4046d', '2015-09-26 10:37:17', '2015-09-26 10:37:17'),
(24, 2, '3a0a6f147b66c391210350300b3b855f', '2015-09-26 14:27:12', '2015-09-26 14:27:12'),
(25, 2, 'a86006292967b9ea72cd785b89b4046d', '2015-09-26 14:29:11', '2015-09-26 14:29:11'),
(26, 3, 'a86006292967b9ea72cd785b89b4046d', '2015-09-26 14:29:23', '2015-09-26 14:29:23');

-- --------------------------------------------------------

--
-- Table structure for table `like_party`
--

CREATE TABLE IF NOT EXISTS `like_party` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `party_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `like_party_user_id_foreign` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `like_party`
--

INSERT INTO `like_party` (`id`, `user_id`, `party_id`, `created_at`, `updated_at`) VALUES
(4, 1, '22', '2015-09-21 22:11:25', '2015-09-21 22:11:25'),
(6, 2, '21', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 1, '21', '2015-09-24 21:52:05', '2015-09-24 21:52:05'),
(8, 1, '8', '2015-09-24 21:52:24', '2015-09-24 21:52:24'),
(10, 1, '40', '2015-09-26 11:46:42', '2015-09-26 11:46:42');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_09_12_133143_create_reviews_table', 1),
('2015_09_12_135927_create_candidates_table', 1),
('2015_09_12_142710_create_vote_review_table', 1),
('2015_09_20_071420_create_favorite_candidate_table', 1),
('2015_09_20_093039_create_like_candidate_table', 1),
('2015_09_21_160536_create_like_party_table', 2),
('2015_09_21_160556_create_favorite_party_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `candidate_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `reviews_user_id_foreign` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `content`, `candidate_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'lorem text text', 1, '2015-09-20 11:51:00', '2015-09-20 11:51:00'),
(2, 1, 'lorem text text', 1, '2015-09-20 11:51:01', '2015-09-20 11:51:01'),
(3, 1, 'lorem text text', 2, '2015-09-20 11:51:01', '2015-09-20 11:51:01'),
(4, 1, 'lorem text text', 2, '2015-09-20 11:51:01', '2015-09-20 11:51:01'),
(5, 1, 'lorem text text', 3, '2015-09-20 11:51:01', '2015-09-20 11:51:01'),
(6, 1, 'lorem text text', 3, '2015-09-20 11:51:01', '2015-09-20 11:51:01'),
(7, 1, 'lorem text text', 4, '2015-09-20 11:51:01', '2015-09-20 11:51:01'),
(8, 1, 'lorem text text', 4, '2015-09-20 11:51:01', '2015-09-20 11:51:01'),
(9, 1, 'lorem text text', 5, '2015-09-20 11:51:02', '2015-09-20 11:51:02'),
(10, 1, 'lorem text text', 5, '2015-09-20 11:51:02', '2015-09-20 11:51:02'),
(11, 1, 'lorem text text', 6, '2015-09-20 11:51:02', '2015-09-20 11:51:02'),
(12, 1, 'lorem text text', 6, '2015-09-20 11:51:02', '2015-09-20 11:51:02'),
(13, 1, 'lorem text text', 7, '2015-09-20 11:51:02', '2015-09-20 11:51:02'),
(14, 1, 'lorem text text', 7, '2015-09-20 11:51:02', '2015-09-20 11:51:02'),
(15, 1, 'lorem text text', 8, '2015-09-20 11:51:03', '2015-09-20 11:51:03'),
(16, 1, 'lorem text text', 8, '2015-09-20 11:51:03', '2015-09-20 11:51:03'),
(17, 1, 'lorem text text', 9, '2015-09-20 11:51:03', '2015-09-20 11:51:03'),
(18, 1, 'lorem text text', 9, '2015-09-20 11:51:03', '2015-09-20 11:51:03'),
(19, 1, 'lorem text text', 10, '2015-09-20 11:51:03', '2015-09-20 11:51:03'),
(20, 1, 'lorem text text', 10, '2015-09-20 11:51:03', '2015-09-20 11:51:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Gerda Gusikowski', 'bRippin@Anderson.com', '$2y$10$wzkKKNCYKTWy9jeJEh5L3OxiB28dBrrjRRFbb6zwnGlR10uD7psSm', '6LtRgfYpvnSEpILamfvIAUpbR8DKDjqaYwtIsua2UsJOTAbFeVjoyqJIdPCz', '2015-09-20 11:50:58', '2015-09-20 12:04:58'),
(2, 'Miss Fatima Goldner I', 'Elaina.Lang@gmail.com', '$2y$10$eSoOFF.9/ZXHBadrI.82B.Tf9wu7xsAViFEadDYf5R.bPdGmtrZBq', 'vUDjkvc0A2', '2015-09-20 11:50:58', '2015-09-20 11:50:58'),
(3, 'Mr. Monty Kilback', 'Paige37@gmail.com', '$2y$10$VWN1rmjcVeYhy36W6j23uOaOuyRKOhDcYfnPFV2RYwpT5Uz/6DazW', 'Bhsa6pc0pF', '2015-09-20 11:50:58', '2015-09-20 11:50:58'),
(4, 'Dr. Burdette Harris PhD', 'rVeum@Conn.com', '$2y$10$FDqy.l94kqThdh5.TZue2Oc2GLO34qB2GRYKbciBk8X0/xJ4j7ypG', 'FRT4sNBaj2', '2015-09-20 11:50:58', '2015-09-20 11:50:58'),
(5, 'Josiah Stoltenberg', 'Emmanuel.Denesik@Brown.info', '$2y$10$e1TooTPVXmP5SxrCDhAe1uglmfGNoQpnvtWuHbmigRn8n73KHjMO2', 'DQs65gz5GO', '2015-09-20 11:50:58', '2015-09-20 11:50:58'),
(6, 'Laila Block', 'Harmon83@hotmail.com', '$2y$10$Ent2MN1CkmZoJ3SpaPiww.5DFWB0vAsIzwqfnhZ/dw92uLLFe4UVu', 'wW6Nz1fEfE', '2015-09-20 11:50:59', '2015-09-20 11:50:59'),
(7, 'Mr. Tomas Tillman DVM', 'Madilyn86@Frami.com', '$2y$10$C39QReBttfb93TPuzUhPJuGuVajuezh1diKXYXAcPLsmpe1ufjwIS', 'LYqmWwNmPq', '2015-09-20 11:50:59', '2015-09-20 11:50:59'),
(8, 'Kiel Jerde MD', 'Gusikowski.Gerry@McKenzie.com', '$2y$10$TeTDN4NQP24s9paeyhOa1OWub68Dt9mQZNpEq5FOO0tMmxH8m0zVa', 'AV9rGfB7W5', '2015-09-20 11:50:59', '2015-09-20 11:50:59'),
(9, 'Prof. Jefferey Cole', 'Dorcas.Ratke@hotmail.com', '$2y$10$47i4C9ldzY8eBN1COMtfn.lZb9jgOedO/i35m8GzPjNLb8JqQuGGW', 'WNq8NYizRu', '2015-09-20 11:50:59', '2015-09-20 11:50:59'),
(10, 'Jevon Luettgen Sr.', 'Davis.Lourdes@gmail.com', '$2y$10$8vjMZD3gJRt6ZPozrv6pwu4MkiR8vnB7Gxs5LXjEG1yU9Cv0Uipiy', 'o1yGVKIwBn', '2015-09-20 11:50:59', '2015-09-20 11:50:59');

-- --------------------------------------------------------

--
-- Table structure for table `vote_review`
--

CREATE TABLE IF NOT EXISTS `vote_review` (
  `user_id` int(10) unsigned NOT NULL,
  `review_id` int(10) unsigned NOT NULL,
  `status` tinyint(1) NOT NULL,
  KEY `vote_review_user_id_foreign` (`user_id`),
  KEY `vote_review_review_id_foreign` (`review_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `favorite_candidate`
--
ALTER TABLE `favorite_candidate`
  ADD CONSTRAINT `favorite_candidate_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `favorite_party`
--
ALTER TABLE `favorite_party`
  ADD CONSTRAINT `favorite_party_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `like_candidate`
--
ALTER TABLE `like_candidate`
  ADD CONSTRAINT `like_candidate_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `like_party`
--
ALTER TABLE `like_party`
  ADD CONSTRAINT `like_party_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `vote_review`
--
ALTER TABLE `vote_review`
  ADD CONSTRAINT `vote_review_review_id_foreign` FOREIGN KEY (`review_id`) REFERENCES `reviews` (`id`),
  ADD CONSTRAINT `vote_review_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
