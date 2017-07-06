-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-07-2017 a las 21:55:54
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema_inventarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `almacenes`
--

CREATE TABLE `almacenes` (
  `id` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `almacenes`
--

INSERT INTO `almacenes` (`id`, `descripcion`, `slug`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'Almacén #1 Actualizada', 'almacen-1-actualizada', 1, '2017-06-21 19:43:46', '2017-06-21 23:37:06'),
(2, 'Almacén #2 Actualizada', 'almacen-2-actualizada', 1, '2017-06-21 20:03:06', '2017-06-21 21:57:37'),
(4, 'Almacén #3', 'almacen-3', 1, '2017-06-21 23:47:22', '2017-06-21 23:47:22'),
(6, 'Almancén Inventario Físico', 'almancen-inventario-fisico', 1, '2017-06-26 18:32:30', '2017-06-26 18:32:30'),
(7, 'Inventario Físico 255', 'inventario-fisico-255', 1, '2017-07-06 21:19:24', '2017-07-06 21:20:01'),
(8, 'Almacén #12', 'almacen-12', 1, '2017-07-06 21:24:15', '2017-07-06 21:24:15'),
(9, 'De Joselito Almacén', 'de-joselito-almacen', 1, '2017-07-06 23:45:05', '2017-07-06 23:45:31');

--
-- Disparadores `almacenes`
--
DELIMITER $$
CREATE TRIGGER `primer_trigger` AFTER INSERT ON `almacenes` FOR EACH ROW INSERT INTO test_trigger set nombre = 'Adderly', salario = '50000', departamento = new.Descripcion
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `existencia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_tipo_inventario` int(11) NOT NULL,
  `costo_unitario` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `descripcion`, `slug`, `existencia`, `id_tipo_inventario`, `costo_unitario`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'Computadora', 'computadora', '45', 3, 24200, 1, '2017-07-06 16:44:48', '2017-07-06 17:05:26'),
(3, 'Micrófonos', 'microfonos', '100', 2, 250, 1, '2017-07-06 18:40:34', '2017-07-06 18:40:34'),
(4, 'Almacén #1 Actualizada', 'almacen-1-actualizada', '25', 4, 24300, 1, '2017-07-06 21:18:48', '2017-07-06 21:18:48'),
(5, 'Inventario Físico', 'inventario-fisico', '100', 2, 5487, 1, '2017-07-06 21:24:53', '2017-07-06 21:24:53'),
(6, 'Ahora', 'ahora', '100', 4, 874, 1, '2017-07-06 21:26:07', '2017-07-06 21:26:07'),
(7, 'bla bla', 'bla-bla', '12312', 2, 123, 0, '2017-07-06 22:36:32', '2017-07-06 22:36:32'),
(8, 'adderly', 'adderly', '85', 2, 8874220, 0, '2017-07-06 22:43:03', '2017-07-06 22:43:03'),
(9, 'Teclado', 'teclado', '100', 4, 24300, 1, '2017-07-06 23:46:39', '2017-07-06 23:46:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2017_06_17_215041_entrust_setup_tables', 1),
(7, '2017_06_19_151114_create_tipos_inventario_table', 2),
(8, '2017_06_19_151240_create_articulos_table', 3),
(9, '2017_06_19_151304_create_almacenes_table', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `test_trigger`
--

CREATE TABLE `test_trigger` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `salario` int(11) NOT NULL,
  `departamento` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `test_trigger`
--

INSERT INTO `test_trigger` (`id`, `nombre`, `salario`, `departamento`, `created_at`, `updated_at`) VALUES
(1, 'Adderly', 50000, 'TIC', '2017-06-26 14:32:30', '0000-00-00 00:00:00'),
(2, 'Adderly', 50000, 'Test Trigger', '2017-06-26 14:38:19', '0000-00-00 00:00:00'),
(3, 'Adderly', 50000, 'Inventario Físico 254', '2017-07-06 17:19:24', '0000-00-00 00:00:00'),
(4, 'Adderly', 50000, 'Almacén #12', '2017-07-06 17:24:15', '0000-00-00 00:00:00'),
(5, 'Adderly', 50000, 'Ahora', '2017-07-06 17:25:45', '0000-00-00 00:00:00'),
(6, 'Adderly', 50000, 'De Juan Almacén', '2017-07-06 19:45:05', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_inventario`
--

CREATE TABLE `tipos_inventario` (
  `id` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cuenta_contable` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipos_inventario`
--

INSERT INTO `tipos_inventario` (`id`, `descripcion`, `slug`, `cuenta_contable`, `estado`, `created_at`, `updated_at`) VALUES
(2, 'Inventario Físico', 'inventario-fisico', '6587 - American', 1, '2017-06-22 01:45:12', '2017-07-06 17:14:15'),
(3, 'Inventario Perpetuo', 'inventario-perpetuo', '5720 - Banco 1', 1, '2017-06-22 02:04:42', '2017-06-22 02:05:04'),
(4, 'Inventario Virtual', 'inventario-virtual', '8875- Americana', 1, '2017-07-06 21:17:54', '2017-07-06 21:18:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transacciones`
--

CREATE TABLE `transacciones` (
  `id` int(10) UNSIGNED NOT NULL,
  `tipo_transaccion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_articulo` int(11) NOT NULL,
  `fecha` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `monto` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `transacciones`
--

INSERT INTO `transacciones` (`id`, `tipo_transaccion`, `id_articulo`, `fecha`, `cantidad`, `monto`, `created_at`, `updated_at`) VALUES
(1, 'entrada', 1, '2017-07-06', 25, 54000, '2017-07-06 17:45:54', '2017-07-06 17:45:54'),
(3, 'salida', 3, '2017-06-06', 555, 150250, '2017-07-06 18:41:59', '2017-07-06 21:17:14'),
(4, 'entrada', 3, '2017-07-06', 34, 2541, '2017-07-06 21:15:43', '2017-07-06 21:15:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Adderly', 'adderly.p.m@gmail.com', '$2y$10$irPgrNsRV4NeBYzP8dcXQODRwAFksZUk9X5yJzRl7WAJbbdlcHOha', 'vvscA2dDTw4sXQ64dHFd4w1RiEAyiDW24kWho4zvPnDEKHGeSs42XS2BjOhH', '2017-06-18 02:15:50', '2017-06-18 02:15:50');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `almacenes`
--
ALTER TABLE `almacenes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `almacenes_slug_unique` (`slug`);

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `test_trigger`
--
ALTER TABLE `test_trigger`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipos_inventario`
--
ALTER TABLE `tipos_inventario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tipos_inventario_slug_unique` (`slug`);

--
-- Indices de la tabla `transacciones`
--
ALTER TABLE `transacciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `almacenes`
--
ALTER TABLE `almacenes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `test_trigger`
--
ALTER TABLE `test_trigger`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `tipos_inventario`
--
ALTER TABLE `tipos_inventario`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `transacciones`
--
ALTER TABLE `transacciones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
