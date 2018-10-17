-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 18-10-2018 a las 00:55:24
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `yelp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE `bitacora` (
  `id_bitacora` int(11) NOT NULL,
  `username` text COLLATE utf8_unicode_ci NOT NULL,
  `historial` text COLLATE utf8_unicode_ci NOT NULL,
  `fecha` text COLLATE utf8_unicode_ci NOT NULL,
  `fecha_registro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `business`
--

CREATE TABLE `business` (
  `id` int(11) NOT NULL,
  `id_api` varchar(100) NOT NULL,
  `id_cities` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `url` varchar(500) NOT NULL,
  `address` varchar(100) NOT NULL,
  `rating` int(11) NOT NULL,
  `price` varchar(100) NOT NULL,
  `categories` varchar(100) NOT NULL,
  `transactions` varchar(100) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `business`
--

INSERT INTO `business` (`id`, `id_api`, `id_cities`, `name`, `phone`, `url`, `address`, `rating`, `price`, `categories`, `transactions`, `latitude`, `longitude`) VALUES
(1, 'brendas-french-soul-food-san-francisco', 2, 'Brenda\'s French Soul Food', '+14153458100', 'https://www.yelp.com/biz/brendas-french-soul-food-san-francisco?adjust_creative=9xXHiXd4v50O6OwBUWTfvA&utm_campaign=yelp_api_v3&utm_medium=api_v3_business_lookup&utm_source=9xXHiXd4v50O6OwBUWTfvA', '652 Polk St San Francisco 94102', 4, '$$', 'breakfast_brunch', '', '37.782901603527', '-122.41904344296');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `country` varchar(10) NOT NULL,
  `zip_code` int(11) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cities`
--

INSERT INTO `cities` (`id`, `name`, `country`, `zip_code`, `latitude`, `longitude`) VALUES
(2, 'San Francisco', 'US', 94109, '37.7829023', '-122.41903580000002');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `company`
--

CREATE TABLE `company` (
  `id_company` int(11) NOT NULL,
  `name_company` text COLLATE utf8_unicode_ci NOT NULL,
  `prefix_company` text COLLATE utf8_unicode_ci NOT NULL,
  `img_logo` text COLLATE utf8_unicode_ci NOT NULL,
  `img_login` text COLLATE utf8_unicode_ci NOT NULL,
  `img_profile` text COLLATE utf8_unicode_ci NOT NULL,
  `title_html` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `company`
--

INSERT INTO `company` (`id_company`, `name_company`, `prefix_company`, `img_logo`, `img_login`, `img_profile`, `title_html`) VALUES
(1, 'YELP', 'YELP', 'assets/images-galeria', 'assets/images-galeria/user01.png', 'assets/images-galeria/user03.png', 'YELP APP');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mail`
--

CREATE TABLE `mail` (
  `id_mail` int(11) NOT NULL,
  `host` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `port` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `SMTPAuth` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `SMTPDebug` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `username_mail` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password_mail` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `realname_mail` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `mail`
--

INSERT INTO `mail` (`id_mail`, `host`, `port`, `SMTPAuth`, `SMTPDebug`, `username_mail`, `password_mail`, `realname_mail`) VALUES
(1, 'hostname', '587', 'true', '2', 'noreply@correo.com', 'f6Yb3mSUJ6', 'No Reply');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `id_api` varchar(100) NOT NULL,
  `id_business` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `userimage` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `reviews`
--

INSERT INTO `reviews` (`id`, `id_api`, `id_business`, `rating`, `username`, `userimage`, `text`, `time_created`, `url`) VALUES
(154, 'RmQXvZwV1U3eAJIB8oczYA', 159, 5, 'Amanda A.', 'https://s3-media2.fl.yelpcdn.com/photo/z6QvhkV9Loous-sT_VAdJQ/o.jpg', 'Today\'s cathartic, rainy day lunch for one marks my 4th visit to this quaint Nob Hill neighborhood jewel. My very first visit happened by chance. Years ago,...', '2018-03-12 21:53:59', 'https://www.yelp.com/biz/nob-hill-cafe-san-francisco?hrid=RmQXvZwV1U3eAJIB8oczYA&adjust_creative=9xX'),
(155, '2fSLfMnKi7B0vj2e6AqcQw', 159, 5, 'Angelica N.', 'https://s3-media2.fl.yelpcdn.com/photo/RhwgSzJvj4KzR3_nHTT_xw/o.jpg', 'Amazing find!!!\nFood: food was amazing!!!! You can pretty much add whatever you want to any dish. I love that this place is very flexible. Food is classic...', '2018-03-08 20:15:02', 'https://www.yelp.com/biz/nob-hill-cafe-san-francisco?hrid=2fSLfMnKi7B0vj2e6AqcQw&adjust_creative=9xX'),
(156, 'MV-cz5Ja50tsTnxRwgjBfg', 159, 4, 'Adaeze E.', 'https://s3-media2.fl.yelpcdn.com/photo/PUP9gceraMpc7HJa_JVRvQ/o.jpg', 'I had a friend visiting from out of the states and her manager had raves about this place so we went there for lunch. We got here early before lunch so we...', '2018-03-05 20:13:06', 'https://www.yelp.com/biz/nob-hill-cafe-san-francisco?hrid=MV-cz5Ja50tsTnxRwgjBfg&adjust_creative=9xX'),
(157, 'VORw7a7xfkrdaGhHNtYMDA', 1, 5, 'Ebony Lee C.', 'https://s3-media2.fl.yelpcdn.com/photo/gg3m6M2VYacbRfqPQQfHrg/o.jpg', 'apple beignets guva mimosas  wheat apple cinnamon pancakes  biscuits  yes yes   yess    \n\nall these are great', '2018-03-19 21:17:32', 'https://www.yelp.com/biz/brendas-french-soul-food-san-francisco?hrid=VORw7a7xfkrdaGhHNtYMDA&adjust_c'),
(158, 'KifnNvKbHfY3K8z9ZKH9pg', 1, 4, 'beach m.', 'https://s3-media3.fl.yelpcdn.com/photo/LkODJJeeATPevc_l-2zVRg/o.jpg', 'Great for brunch.  The shrimp and grits are the best.  I would get the seafood beignet over the sampler.  \n\nI would pass on dinner.', '2018-03-19 19:14:07', 'https://www.yelp.com/biz/brendas-french-soul-food-san-francisco?hrid=KifnNvKbHfY3K8z9ZKH9pg&adjust_c'),
(159, 'b_nyj0Ljkya6TvqvlY5T6A', 1, 3, 'Angelina H.', 'https://s3-media3.fl.yelpcdn.com/photo/ERWXWAauBaqX4vxccwvbcg/o.jpg', 'Eh. This place was okay. I definitely wouldn\'t come back if I had to wait an hour again just to get seated for lunch. \n\nWe ordered the beignet flight and...', '2018-03-19 03:39:22', 'https://www.yelp.com/biz/brendas-french-soul-food-san-francisco?hrid=b_nyj0Ljkya6TvqvlY5T6A&adjust_c');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `security`
--

CREATE TABLE `security` (
  `id_security` int(11) NOT NULL,
  `name_security` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `security`
--

INSERT INTO `security` (`id_security`, `name_security`) VALUES
(1, '--Sin registro--'),
(2, 'Nombre de su madre'),
(4, 'Segundo nombre de su madre'),
(5, 'Segundo nombre de su padre'),
(6, 'Nombre de mi primer colegio'),
(7, 'Heroe de la infancia'),
(8, 'Coche Preferido'),
(9, 'Nombre del primer novio'),
(10, 'Nombre de Primera novia'),
(11, 'Nombre de mi primera mascota');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `realname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_security` int(11) NOT NULL,
  `security` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `proffession` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `education` text COLLATE utf8_unicode_ci NOT NULL,
  `location` text COLLATE utf8_unicode_ci NOT NULL,
  `notes` text COLLATE utf8_unicode_ci NOT NULL,
  `permission` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `db_insert` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `db_update` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `db_delete` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `username`, `realname`, `password`, `id_security`, `security`, `proffession`, `education`, `location`, `notes`, `permission`, `status`, `db_insert`, `db_update`, `db_delete`) VALUES
(2, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 2, '21232f297a57a5a743894a0e4a801fc3', '', '', '', '', 'Administrador', 'Activo', 'Activo', 'Activo', 'Activo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD PRIMARY KEY (`id_bitacora`);

--
-- Indices de la tabla `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_api` (`id_api`),
  ADD KEY `id_api_2` (`id_api`),
  ADD KEY `id_cities` (`id_cities`);

--
-- Indices de la tabla `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id_company`);

--
-- Indices de la tabla `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id_mail`);

--
-- Indices de la tabla `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_api` (`id_api`),
  ADD KEY `id_business` (`id_business`);

--
-- Indices de la tabla `security`
--
ALTER TABLE `security`
  ADD PRIMARY KEY (`id_security`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_pregunta` (`id_security`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `id_bitacora` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `business`
--
ALTER TABLE `business`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `company`
--
ALTER TABLE `company`
  MODIFY `id_company` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `mail`
--
ALTER TABLE `mail`
  MODIFY `id_mail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;
--
-- AUTO_INCREMENT de la tabla `security`
--
ALTER TABLE `security`
  MODIFY `id_security` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `business`
--
ALTER TABLE `business`
  ADD CONSTRAINT `business_ibfk_1` FOREIGN KEY (`id_cities`) REFERENCES `cities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`id_business`) REFERENCES `business` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_security`) REFERENCES `security` (`id_security`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
