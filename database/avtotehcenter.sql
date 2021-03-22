-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 21 2021 г., 23:52
-- Версия сервера: 8.0.19
-- Версия PHP: 7.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `avtotehcenter`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `slug`, `images`, `created_at`, `updated_at`) VALUES
(1, 'portovye-tyagachi', '/assets/admin/img/categories/catalog1.png', '2021-03-21 17:38:41', '2021-03-21 17:38:41'),
(2, 'vilochnye-pogruzchiki', '/assets/admin/img/categories/catalog2.png', '2021-03-21 17:38:41', '2021-03-21 17:38:41'),
(3, 'kovshevye-pogruzchiki', '/assets/admin/img/categories/catalog3.png', '2021-03-21 17:38:41', '2021-03-21 17:38:41'),
(4, 'shtabelery', '/assets/admin/img/categories/catalog4.png', '2021-03-21 17:38:41', '2021-03-21 17:38:41'),
(5, 'richstakery', '/assets/admin/img/categories/catalog5.png', '2021-03-21 17:38:41', '2021-03-21 17:38:41'),
(6, 'samosvaly', '/assets/admin/img/categories/catalog6.png', '2021-03-21 17:38:41', '2021-03-21 17:38:41');

-- --------------------------------------------------------

--
-- Структура таблицы `category_translations`
--

CREATE TABLE `category_translations` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ru',
  `category_id` int UNSIGNED NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `category_translations`
--

INSERT INTO `category_translations` (`id`, `title`, `body`, `language`, `category_id`, `seo_title`, `seo_description`, `seo_keywords`, `created_at`, `updated_at`) VALUES
(1, 'Портовые тягачи', NULL, 'ru', 1, 'Seo___Портовые тягачи', NULL, NULL, NULL, NULL),
(2, 'Вилочные погрузчики', NULL, 'ru', 2, 'Seo___Вилочные погрузчики', NULL, NULL, NULL, NULL),
(3, 'Ковшевые погрузчики', NULL, 'ru', 3, 'Seo___Ковшевые погрузчики', NULL, NULL, NULL, NULL),
(4, 'Штабелеры', NULL, 'ru', 4, 'Seo___Штабелеры', NULL, NULL, NULL, NULL),
(5, 'Ричстакеры', NULL, 'ru', 5, 'Seo___Ричстакеры', NULL, NULL, NULL, NULL),
(6, 'Самосвалы', NULL, 'ru', 6, 'Seo___Самосвалы', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `certificates`
--

CREATE TABLE `certificates` (
  `id` int UNSIGNED NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `certificates`
--

INSERT INTO `certificates` (`id`, `url`, `created_at`, `updated_at`) VALUES
(1, '/assets/admin/img/certificates/certificate1.jpg', '2021-03-21 17:38:42', '2021-03-21 17:38:42'),
(2, '/assets/admin/img/certificates/certificate2.jpg', '2021-03-21 17:38:42', '2021-03-21 17:38:42'),
(3, '/assets/admin/img/certificates/certificate3.jpg', '2021-03-21 17:38:42', '2021-03-21 17:38:42'),
(4, '/assets/admin/img/certificates/certificate4.jpg', '2021-03-21 17:38:42', '2021-03-21 17:38:42');

-- --------------------------------------------------------

--
-- Структура таблицы `characteristics`
--

CREATE TABLE `characteristics` (
  `id` int UNSIGNED NOT NULL,
  `lifting_force` int NOT NULL DEFAULT '0',
  `product_id` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `characteristics`
--

INSERT INTO `characteristics` (`id`, `lifting_force`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 43, 1, '2021-03-21 18:23:03', '2021-03-21 18:23:03'),
(2, 73, 2, '2021-03-21 18:33:21', '2021-03-21 18:33:21'),
(3, 47, 3, '2021-03-21 18:35:00', '2021-03-21 18:35:00'),
(4, 30, 4, '2021-03-21 18:36:47', '2021-03-21 18:36:47'),
(5, 7, 5, '2021-03-21 18:38:52', '2021-03-21 18:38:52'),
(6, 73, 6, '2021-03-21 18:40:30', '2021-03-21 18:40:30'),
(7, 19, 7, '2021-03-21 18:42:25', '2021-03-21 18:42:25');

-- --------------------------------------------------------

--
-- Структура таблицы `characteristic_translations`
--

CREATE TABLE `characteristic_translations` (
  `id` int UNSIGNED NOT NULL,
  `Year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Hours` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height_with_mast_folded` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fuel_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `v_motor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `motor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ru',
  `characteristic_id` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `characteristic_translations`
--

INSERT INTO `characteristic_translations` (`id`, `Year`, `Hours`, `height_with_mast_folded`, `fuel_type`, `v_motor`, `motor`, `description`, `language`, `characteristic_id`, `created_at`, `updated_at`) VALUES
(1, '2005', '200', '5465', 'dizel', '3.4', 'audi', 'Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации \"Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст..\" Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам \"lorem ipsum\" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).', 'ru', 1, NULL, NULL),
(2, '2012', '45', '5', 'dizel', '2.5', 'bmv', NULL, 'ru', 2, NULL, NULL),
(3, '2006', '200', '5', 'dizel', '3.3', 'audi', NULL, 'ru', 3, NULL, NULL),
(4, '2015', '300', '6', 'dizel', '2.5', 'bmv', 'fdffd', 'ru', 4, NULL, NULL),
(5, '2020', '65', '5', 'dizel', '2.2', 'bmv', 'dddd', 'ru', 5, NULL, NULL),
(6, '1992', '45', '5', 'dizel', '2.5', 'bmv', 'Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации \"Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст..\" Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам \"lorem ipsum\" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).', 'ru', 6, NULL, NULL),
(7, '1995', '45', '5', 'dizel', '2.5', 'ford', 'Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации \"Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст..\" Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам \"lorem ipsum\" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).', 'ru', 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` int UNSIGNED NOT NULL,
  `phone_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `viber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telegram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `phone_1`, `phone_2`, `fax`, `viber`, `telegram`, `email1`, `email2`, `facebook`, `instagram`, `created_at`, `updated_at`) VALUES
(1, '+38 (050) 522 14 40', '+38 (050) 522 14 40', '+38 (0482) 34-87-98', '+38 (050) 522 14 40', '+38 (050) 522 14 40', 'atc@te.net.ua', 'atc1@te.net.ua', 'https://www.facebook.com/', 'https://www.instagram.com/', '2021-03-21 17:38:41', '2021-03-21 17:38:41');

-- --------------------------------------------------------

--
-- Структура таблицы `contact_translations`
--

CREATE TABLE `contact_translations` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Контакты',
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ru',
  `contact_id` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contact_translations`
--

INSERT INTO `contact_translations` (`id`, `title`, `address`, `language`, `contact_id`, `created_at`, `updated_at`) VALUES
(1, 'Автотехцентер', '68093, Одесская область, г.Ильичевск, с.Малодолинское, ул.Заводская,3', 'ru', 1, '2021-03-21 17:38:41', '2021-03-21 17:38:41');

-- --------------------------------------------------------

--
-- Структура таблицы `form_requests`
--

CREATE TABLE `form_requests` (
  `id` int UNSIGNED NOT NULL,
  `name` char(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` char(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci,
  `is_new` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `main_pages`
--

CREATE TABLE `main_pages` (
  `id` int UNSIGNED NOT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `main_pages`
--

INSERT INTO `main_pages` (`id`, `banner`, `created_at`, `updated_at`) VALUES
(1, '/assets/admin/img/pages/tagline-bg.jpg', '2021-03-21 17:38:41', '2021-03-21 17:38:41');

-- --------------------------------------------------------

--
-- Структура таблицы `main_page_translations`
--

CREATE TABLE `main_page_translations` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ru',
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_page_id` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `main_page_translations`
--

INSERT INTO `main_page_translations` (`id`, `title`, `body`, `language`, `seo_title`, `seo_description`, `seo_keywords`, `main_page_id`, `created_at`, `updated_at`) VALUES
(1, 'Ваш партнер по аренде спецтехники', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\n\nSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\n\nBut I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself', 'ru', 'Seo___Ваш партнер по аренде спецтехники', NULL, NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(169, '2014_10_12_000000_create_users_table', 1),
(170, '2014_10_12_100000_create_password_resets_table', 1),
(171, '2020_03_13_170453_add_admin', 1),
(172, '2021_03_03_071458_create_contacts_table', 1),
(173, '2021_03_03_072757_create_contact_translations_table', 1),
(174, '2021_03_03_075618_create_main_pages_table', 1),
(175, '2021_03_03_075831_create_main_page_translations_table', 1),
(176, '2021_03_07_064004_create_categories_table', 1),
(177, '2021_03_07_065239_create_category_translations_table', 1),
(178, '2021_03_07_065240_create_models_table', 1),
(179, '2021_03_07_065241_create_model_translations_table', 1),
(180, '2021_03_07_071628_create_type_models_table', 1),
(181, '2021_03_07_071629_create_type_model_translations_table', 1),
(182, '2021_03_07_071728_create_characteristics_table', 1),
(183, '2021_03_07_074916_create_characteristic_translations_table', 1),
(184, '2021_03_07_092259_create_form_requests_table', 1),
(185, '2021_03_07_204423_add_data_in_categories_table', 1),
(186, '2021_03_08_112710_add_data_in_models_table', 1),
(187, '2021_03_08_184331_create_pages_table', 1),
(188, '2021_03_08_184436_create_page_translations_table', 1),
(189, '2021_03_13_201206_create_slider_images_table', 1),
(190, '2021_03_16_200847_create_certificates_table', 1),
(191, '2021_03_17_114244_create_product_images_table', 1),
(192, '2021_03_17_162621_add_data_in_pages_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `models`
--

CREATE TABLE `models` (
  `id` int UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `models`
--

INSERT INTO `models` (`id`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'bobcat', '2021-03-21 17:38:40', '2021-03-21 17:38:40'),
(2, 'toyota', '2021-03-21 17:38:40', '2021-03-21 17:38:40'),
(3, 'terberg', '2021-03-21 17:38:40', '2021-03-21 17:38:40'),
(4, 'skiper', '2021-03-21 17:38:40', '2021-03-21 17:38:40'),
(5, 'ford', '2021-03-21 17:38:40', '2021-03-21 17:38:40');

-- --------------------------------------------------------

--
-- Структура таблицы `model_translations`
--

CREATE TABLE `model_translations` (
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ru',
  `model_id` int UNSIGNED NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `model_translations`
--

INSERT INTO `model_translations` (`title`, `body`, `language`, `model_id`, `seo_title`, `seo_description`, `seo_keywords`, `created_at`, `updated_at`) VALUES
('BOBCAT', NULL, 'ru', 1, 'Seo___BOBCAT', NULL, NULL, NULL, NULL),
('Toyota', NULL, 'ru', 2, 'Seo___Toyota', NULL, NULL, NULL, NULL),
('Terberg', NULL, 'ru', 3, 'Seo___Terberg', NULL, NULL, NULL, NULL),
('SKIPER', NULL, 'ru', 4, 'Seo___SKIPER', NULL, NULL, NULL, NULL),
('FORD', NULL, 'ru', 5, 'Seo___FORD', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int UNSIGNED NOT NULL,
  `parent_id` int DEFAULT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `parent_id`, `banner`, `slug`, `created_at`, `updated_at`) VALUES
(1, NULL, '/assets/admin/img/pages/buner-about-us.jpg', 'o-kompanii', '2021-03-21 17:38:41', '2021-03-21 17:38:41'),
(2, NULL, '/assets/admin/img/pages/buner-catalog.jpg', 'spectehnika', '2021-03-21 17:38:41', '2021-03-21 17:38:41'),
(3, NULL, '/assets/admin/img/pages/buner-about-us.jpg', 'uslugi', '2021-03-21 17:38:41', '2021-03-21 17:38:41'),
(4, NULL, '/assets/admin/img/pages/banner-delivery.jpg', 'dostavka', '2021-03-21 17:38:42', '2021-03-21 17:38:42'),
(5, NULL, '/assets/admin/img/pages/banner-contucts.jpg', 'kontakty', '2021-03-21 17:38:42', '2021-03-21 17:38:42'),
(6, 3, '/assets/admin/img/pages/buner-catalog.jpg', 'usluga1', '2021-03-21 17:38:42', '2021-03-21 17:38:42');

-- --------------------------------------------------------

--
-- Структура таблицы `page_translations`
--

CREATE TABLE `page_translations` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Контакты',
  `body` text COLLATE utf8mb4_unicode_ci,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ru',
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_id` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `page_translations`
--

INSERT INTO `page_translations` (`id`, `title`, `body`, `language`, `seo_title`, `seo_description`, `seo_keywords`, `page_id`, `created_at`, `updated_at`) VALUES
(1, 'О компании', '<p>Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации \"Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст..\" Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам \"lorem ipsum\" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).</p><figure class=\"image image-style-align-right\"><img src=\"/public/ckfinder/userfiles/images/Rectangle%20272%20(2).jpg\"></figure><p>Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации \"Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст..\" Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам \"lorem ipsum\" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты). Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное&nbsp;</p><p>распределение букв и пробелов в абзацах, которое не получается при простой дубликации \"Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст..\" Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам \"lorem ipsum\" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).</p>', 'ru', 'Seo___О компании', NULL, NULL, 1, NULL, '2021-03-21 17:45:34'),
(2, 'Спецтехника', '', 'ru', 'Seo___Спецтехника', NULL, NULL, 2, NULL, NULL),
(3, 'Услуги', '<p>Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации \"Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст..\" Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам \"lorem ipsum\" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).</p><h4>Благодаря оренде нашей спецтехники,<span style=\"background-color:hsl(0, 75%, 60%);color:hsl(60, 75%, 60%);\"> вы получаете</span>:</h4><figure class=\"image image-style-align-right image_resized\" style=\"width:32.47%;\"><img src=\"/public/ckfinder/userfiles/images/img1.jpg\"></figure><ul><li>выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться</li><li>выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться</li><li>выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться</li><li>выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться</li><li>выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться</li></ul><p>распределение букв и пробелов в абзацах, которое не получается при простой дубликации \"Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст..\" Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам \"lorem ipsum\" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).</p><figure class=\"image image-style-align-left image_resized\" style=\"width:40.46%;\"><img src=\"/public/ckfinder/userfiles/images/img1(1).jpg\"></figure><h4>Выбор в каждом отдельном случае необходимой спецтехники производится с учетом:</h4><ul><li>особенностей предполагаемых работ, их условий, объема;</li><li>возможностей доступа к месту их проведения;</li><li>свойств грунта на строительной площадке;</li><li>намеченных нагрузок и ориентировочного периода времени на все работы.</li></ul><p>распределение букв и пробелов в абзацах, которое не получается при простой дубликации \"Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст..\" Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам \"lorem ipsum\" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения.&nbsp;</p><p>распределение букв и пробелов в абзацах, которое не получается при простой дубликации \"Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст..\" Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам \"lorem ipsum\" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).</p>', 'ru', 'Seo___Услуги', NULL, NULL, 3, NULL, '2021-03-21 17:57:34'),
(4, 'Доставка', '<p>Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации \"Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст..\" Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам \"lorem ipsum\" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).</p><p>Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации \"Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст..\" Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам \"lorem ipsum\" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты). Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации \"Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст..\" Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам \"lorem ipsum\" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий.&nbsp;</p><figure class=\"image image-style-align-left\"><img src=\"/public/ckfinder/userfiles/images/shipped%201.png\"></figure><h4><span class=\"text-small\"><strong>Доставка по Одессе</strong></span></h4><p><span class=\"text-small\">Стоимость доставки и время доставки</span></p><p>&nbsp;</p><p>&nbsp;</p><figure class=\"image image-style-align-left\"><img src=\"/public/ckfinder/userfiles/images/shipped%201(1).png\"></figure><h4><span class=\"text-small\"><strong>Самовывоз</strong></span></h4><p><span class=\"text-small\">Стоимость доставки</span></p><p>&nbsp;</p><p><span class=\"text-small\">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации \"Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст..\" Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам \"lorem ipsum\" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).</span></p>', 'ru', 'Seo___Доставка', NULL, NULL, 4, NULL, '2021-03-21 18:16:13'),
(5, 'Контакты', '', 'ru', 'Seo___Контакты', NULL, NULL, 5, NULL, NULL),
(6, 'Услуга1', '<p>распределение букв и пробелов в абзацах, которое не получается при простой дубликации \"Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст..\" Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам \"lorem ipsum\" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).</p><p>распределение букв и пробелов в абзацах, которое не получается при простой дубликации \"Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст..\" Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам \"lorem ipsum\" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).</p><figure class=\"image image-style-align-right\"><img src=\"/public/ckfinder/userfiles/images/catalog10.png\"></figure><p>распределение букв и пробелов в абзацах, которое не получается при простой дубликации \"Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст..\" Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам \"lorem ipsum\" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).</p><p>распределение букв и пробелов в абзацах, которое не получается при простой дубликации \"Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст..\" Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам \"lorem ipsum\" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).</p>', 'ru', 'Seo___Услуга1', NULL, NULL, 6, NULL, '2021-03-21 18:01:58');

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `product_images`
--

CREATE TABLE `product_images` (
  `id` int UNSIGNED NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_video` int NOT NULL DEFAULT '0',
  `product_id` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `product_images`
--

INSERT INTO `product_images` (`id`, `url`, `is_video`, `product_id`, `created_at`, `updated_at`) VALUES
(1, '/uploads/type-models/1616358549secondary-img1.jpg', 0, 1, '2021-03-21 18:29:09', '2021-03-21 18:29:09'),
(2, '/uploads/type-models/1616358549secondary-img2.jpg', 0, 1, '2021-03-21 18:29:09', '2021-03-21 18:29:09'),
(3, '/uploads/type-models/1616358549secondary-img3.jpg', 0, 1, '2021-03-21 18:29:09', '2021-03-21 18:29:09'),
(4, 'ZF3XYFEqbBI', 1, 1, '2021-03-21 18:29:22', '2021-03-21 18:29:22');

-- --------------------------------------------------------

--
-- Структура таблицы `slider_images`
--

CREATE TABLE `slider_images` (
  `id` int UNSIGNED NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_video` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `type_models`
--

CREATE TABLE `type_models` (
  `id` int UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int UNSIGNED NOT NULL,
  `model_id` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `type_models`
--

INSERT INTO `type_models` (`id`, `slug`, `images`, `category_id`, `model_id`, `created_at`, `updated_at`) VALUES
(1, 'rt223-1', '/uploads/type-models/1616358183rt223.png', 3, 3, '2021-03-21 18:23:03', '2021-03-21 18:23:03'),
(2, 's220-2', '/uploads/type-models/1616358801bobcat-s220.jpg', 3, 1, '2021-03-21 18:33:21', '2021-03-21 18:33:41'),
(3, 'yt182-3', '/uploads/type-models/1616358900yt182.png', 1, 3, '2021-03-21 18:35:00', '2021-03-21 18:35:00'),
(4, 'yt222-4', '/uploads/type-models/1616359007yt222.png', 1, 3, '2021-03-21 18:36:47', '2021-03-21 18:36:47'),
(5, '72-8fdj35-5', '/uploads/type-models/1616359132728fdj35.png', 2, 2, '2021-03-21 18:38:52', '2021-03-21 18:38:52'),
(6, 'skj1016-profi-6', '/uploads/type-models/1616359266skj1016.jpg', 4, 4, '2021-03-21 18:40:30', '2021-03-21 18:41:06'),
(7, 'trucks-1833d-7', '/uploads/type-models/1616359345samosval.png', 6, 5, '2021-03-21 18:42:25', '2021-03-21 18:42:25');

-- --------------------------------------------------------

--
-- Структура таблицы `type_model_translations`
--

CREATE TABLE `type_model_translations` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ru',
  `type_model_id` int UNSIGNED NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `type_model_translations`
--

INSERT INTO `type_model_translations` (`id`, `title`, `body`, `language`, `type_model_id`, `seo_title`, `seo_description`, `seo_keywords`, `created_at`, `updated_at`) VALUES
(1, 'rt223 #1', '<p>Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации \"Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст..\" Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам \"lorem ipsum\" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).</p><p>&nbsp;</p><p>&nbsp;</p>', 'ru', 1, NULL, NULL, NULL, '2021-03-21 18:23:03', '2021-03-21 18:27:19'),
(2, 'S220 #2', NULL, 'ru', 2, NULL, NULL, NULL, '2021-03-21 18:33:21', '2021-03-21 18:33:21'),
(3, 'YT182 #3', NULL, 'ru', 3, NULL, NULL, NULL, '2021-03-21 18:35:00', '2021-03-21 18:35:00'),
(4, 'YT222 #4', NULL, 'ru', 4, NULL, NULL, NULL, '2021-03-21 18:36:47', '2021-03-21 18:36:47'),
(5, '72-8FDJ35 #5', '<p>aaaaxxx</p>', 'ru', 5, NULL, NULL, NULL, '2021-03-21 18:38:52', '2021-03-21 18:38:52'),
(6, 'SKJ1016 PROFI #6', '<p>Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации \"Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст..\" Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам \"lorem ipsum\" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).</p>', 'ru', 6, NULL, NULL, NULL, '2021-03-21 18:40:30', '2021-03-21 18:40:30'),
(7, 'TRUCKS 1833D #7', '<p><span style=\"background-color:#232525;color:#808080;\">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации \"Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст..\" Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам \"lorem ipsum\" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).</span></p>', 'ru', 7, NULL, NULL, NULL, '2021-03-21 18:42:25', '2021-03-21 18:42:25');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$0ObeGpMkRRHFJo.wPG57huDzu0BjFbgObOjI4TL07nUN6yVmMthse', NULL, '2021-03-21 17:38:39', '2021-03-21 17:38:39');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category_translations`
--
ALTER TABLE `category_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_translations_category_id_foreign` (`category_id`);

--
-- Индексы таблицы `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `characteristics`
--
ALTER TABLE `characteristics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `characteristics_product_id_foreign` (`product_id`);

--
-- Индексы таблицы `characteristic_translations`
--
ALTER TABLE `characteristic_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `characteristic_translations_characteristic_id_foreign` (`characteristic_id`);

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contact_translations`
--
ALTER TABLE `contact_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contact_translations_contact_id_foreign` (`contact_id`);

--
-- Индексы таблицы `form_requests`
--
ALTER TABLE `form_requests`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `main_pages`
--
ALTER TABLE `main_pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `main_page_translations`
--
ALTER TABLE `main_page_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `main_page_translations_main_page_id_foreign` (`main_page_id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `models`
--
ALTER TABLE `models`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `model_translations`
--
ALTER TABLE `model_translations`
  ADD KEY `model_translations_model_id_foreign` (`model_id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `page_translations`
--
ALTER TABLE `page_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `page_translations_page_id_foreign` (`page_id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Индексы таблицы `slider_images`
--
ALTER TABLE `slider_images`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `type_models`
--
ALTER TABLE `type_models`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_models_category_id_foreign` (`category_id`),
  ADD KEY `type_models_model_id_foreign` (`model_id`);

--
-- Индексы таблицы `type_model_translations`
--
ALTER TABLE `type_model_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_model_translations_type_model_id_foreign` (`type_model_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `category_translations`
--
ALTER TABLE `category_translations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `characteristics`
--
ALTER TABLE `characteristics`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `characteristic_translations`
--
ALTER TABLE `characteristic_translations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `contact_translations`
--
ALTER TABLE `contact_translations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `form_requests`
--
ALTER TABLE `form_requests`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `main_pages`
--
ALTER TABLE `main_pages`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `main_page_translations`
--
ALTER TABLE `main_page_translations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;

--
-- AUTO_INCREMENT для таблицы `models`
--
ALTER TABLE `models`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `page_translations`
--
ALTER TABLE `page_translations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `slider_images`
--
ALTER TABLE `slider_images`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `type_models`
--
ALTER TABLE `type_models`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `type_model_translations`
--
ALTER TABLE `type_model_translations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `category_translations`
--
ALTER TABLE `category_translations`
  ADD CONSTRAINT `category_translations_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `characteristics`
--
ALTER TABLE `characteristics`
  ADD CONSTRAINT `characteristics_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `type_models` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `characteristic_translations`
--
ALTER TABLE `characteristic_translations`
  ADD CONSTRAINT `characteristic_translations_characteristic_id_foreign` FOREIGN KEY (`characteristic_id`) REFERENCES `characteristics` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `contact_translations`
--
ALTER TABLE `contact_translations`
  ADD CONSTRAINT `contact_translations_contact_id_foreign` FOREIGN KEY (`contact_id`) REFERENCES `contacts` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `main_page_translations`
--
ALTER TABLE `main_page_translations`
  ADD CONSTRAINT `main_page_translations_main_page_id_foreign` FOREIGN KEY (`main_page_id`) REFERENCES `main_pages` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `model_translations`
--
ALTER TABLE `model_translations`
  ADD CONSTRAINT `model_translations_model_id_foreign` FOREIGN KEY (`model_id`) REFERENCES `models` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `page_translations`
--
ALTER TABLE `page_translations`
  ADD CONSTRAINT `page_translations_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `type_models` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `type_models`
--
ALTER TABLE `type_models`
  ADD CONSTRAINT `type_models_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `type_models_model_id_foreign` FOREIGN KEY (`model_id`) REFERENCES `models` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `type_model_translations`
--
ALTER TABLE `type_model_translations`
  ADD CONSTRAINT `type_model_translations_type_model_id_foreign` FOREIGN KEY (`type_model_id`) REFERENCES `type_models` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
