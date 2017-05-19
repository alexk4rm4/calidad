-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-05-2017 a las 03:03:20
-- Versión del servidor: 10.1.22-MariaDB
-- Versión de PHP: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `control`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colors`
--

CREATE TABLE `colors` (
  `codcolor` varchar(6) NOT NULL,
  `nombrecolor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `colors`
--

INSERT INTO `colors` (`codcolor`, `nombrecolor`) VALUES
('000000', 'Negro'),
('079223', 'Verde'),
('07FFF8', 'Celeste'),
('1100FF', 'Azul'),
('8C07FF', 'Morado'),
('FF0000', 'Rojo'),
('FF00D5', 'Rosado'),
('FF6200', 'Naranja'),
('FFEF00', 'Amarillo'),
('FFFFFF', 'Blanco');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `object`
--

CREATE TABLE `object` (
  `idobjeto` int(1) NOT NULL,
  `var1` text NOT NULL,
  `var2` text NOT NULL,
  `var3` text NOT NULL,
  `var4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `object`
--

INSERT INTO `object` (`idobjeto`, `var1`, `var2`, `var3`, `var4`) VALUES
(1, '<svg\r\n   xmlns:dc=\"http://purl.org/dc/elements/1.1/\"\r\n   xmlns:cc=\"http://creativecommons.org/ns#\"\r\n   xmlns:rdf=\"http://www.w3.org/1999/02/22-rdf-syntax-ns#\"\r\n   xmlns:svg=\"http://www.w3.org/2000/svg\"\r\n   xmlns=\"http://www.w3.org/2000/svg\"\r\n   xmlns:sodipodi=\"http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd\"\r\n   xmlns:inkscape=\"http://www.inkscape.org/namespaces/inkscape\"\r\n   id=\"svg4136\"\r\n   version=\"1.1\"\r\n   inkscape:version=\"0.91 r13725\"\r\n   xml:space=\"preserve\"\r\n   width=\"300\"\r\n   height=\"126\"\r\n   viewBox=\"0 0 300 126\"\r\n   sodipodi:docname=\"carro.svg\"><metadata\r\n     id=\"metadata4142\"><rdf:RDF><cc:Work\r\n         rdf:about=\"\"><dc:format>image/svg+xml</dc:format><dc:type\r\n           rdf:resource=\"http://purl.org/dc/dcmitype/StillImage\" /><dc:title></dc:title></cc:Work></rdf:RDF></metadata><defs\r\n     id=\"defs4140\"><clipPath\r\n       clipPathUnits=\"userSpaceOnUse\"\r\n       id=\"clipPath4152\"><path\r\n         d=\"M 0,500 500,500 500,0 0,0 0,500 Z\"\r\n         id=\"path4154\"\r\n         inkscape:connector-curvature=\"0\" /></clipPath><clipPath\r\n       clipPathUnits=\"userSpaceOnUse\"\r\n       id=\"clipPath4460\"><path\r\n         d=\"M 0,500 500,500 500,0 0,0 0,500 Z\"\r\n         id=\"path4462\"\r\n         inkscape:connector-curvature=\"0\" /></clipPath></defs><sodipodi:namedview\r\n     pagecolor=\"#ffffff\"\r\n     bordercolor=\"#666666\"\r\n     borderopacity=\"1\"\r\n     objecttolerance=\"10\"\r\n     gridtolerance=\"10\"\r\n     guidetolerance=\"10\"\r\n     inkscape:pageopacity=\"0\"\r\n     inkscape:pageshadow=\"2\"\r\n     inkscape:window-width=\"1440\"\r\n     inkscape:window-height=\"837\"\r\n     id=\"namedview4138\"\r\n     showgrid=\"false\"\r\n     inkscape:zoom=\"1.0208\"\r\n     inkscape:cx=\"312.5\"\r\n     inkscape:cy=\"155.76019\"\r\n     inkscape:window-x=\"-8\"\r\n     inkscape:window-y=\"-8\"\r\n     inkscape:window-maximized=\"1\"\r\n     inkscape:current-layer=\"g4144\" /><g\r\n     id=\"g4144\"\r\n     inkscape:groupmode=\"layer\"\r\n     inkscape:label=\"110778-ONOHWT-548\"\r\n     transform=\"matrix(1.25,0,0,-1.25,0,126)\"><g\r\n       id=\"g4148\"\r\n       transform=\"translate(-242.94671,-69.749221)\"><g\r\n         id=\"g4150\"\r\n         clip-path=\"url(#clipPath4152)\"><g\r\n           id=\"g4344\"\r\n           transform=\"translate(283.0544,150.5866)\"><path\r\n             d=\"m 0,0 c 0,0 -7.575,-7.866 -9.906,-16.606 l -2.039,-2.04 c 0,0 -2.272,-9.323 -2.68,-15.907 l -1.807,-2.622 c 0,0 -0.757,-2.855 -0.757,-4.603 0,-1.748 0.437,-4.72 0.466,-4.837 0.029,-0.116 -0.466,-1.165 -0.466,-1.165 l 3.409,-2.039 19.33,-2.316 c 0,0 -0.437,5.156 0.787,10.226 1.223,5.069 6.03,7.91 8.609,8.784 2.578,0.874 11.493,2.491 17.043,-1.748 5.55,-4.24 6.293,-9.877 6.73,-15.471 l 90.112,-1.704 c 0,0 -0.175,8.347 3.452,13.241 3.627,4.895 9.003,6.206 14.203,6.031 5.201,-0.175 9.527,-1.835 12.936,-6.905 3.408,-5.069 2.097,-14.465 2.097,-14.465 l 15.558,1.224 c 0,0 1.267,0.918 1.267,1.311 0,0.393 -1.573,1.792 -1.573,1.792 l 0.743,4.108 0.83,0.699 c 0,0 -0.218,7.167 -0.524,7.735 -0.306,0.568 -0.699,1.005 -0.699,1.005 l -3.016,7.56 c 0,0 -1.879,2.185 -4.763,3.322 -2.884,1.136 -17.029,5.637 -28.916,6.628 l -3.263,0.378 c 0,0 -17.364,13.023 -30.998,18.384 0,0 -1.982,0.874 -4.545,1.486 -2.564,0.612 -18.719,2.01 -18.719,2.01 0,0 -38.413,2.447 -75.384,0 0,0 -7.779,-1.224 -9.484,-1.879 L -1.879,0.568 0,0 Z\"\r\n             style=\"fill:objeto;fill-opacity:1;fill-rule:nonzero;stroke:none\"\r\n             id=\"path4346\"\r\n             inkscape:connector-curvature=\"0\" /></g>', '<g id=\"g4348\" transform=\"translate(284.1346,134.7029)\"><path d=\"m 0,0 c -0.977,0.047 -1.615,1.042 -1.25,1.95 0.987,2.455 2.941,6.824 5.414,9.855 3.613,4.428 8.857,5.244 12.353,5.477 3.496,0.233 21.617,0.932 21.617,0.932 0,0 35.777,-0.174 43.76,-0.874 0,0 16.315,-0.874 21.85,-3.379 5.536,-2.506 20.744,-12.586 20.744,-12.586 l 9.069,-6.952 c 0.451,-0.346 0.186,-1.069 -0.382,-1.04 L 0,0 Z\" style=\"fill:ventana;fill-opacity:1;fill-rule:nonzero;stroke:none\" id=\"path4350\" inkscape:connector-curvature=\"0\"></path></g>', '<g\r\n           id=\"g4380\"\r\n           transform=\"translate(322.2689,152.9173)\"><path\r\n             d=\"m 0,0 -2.476,-20.306 0.553,0 L 0.583,0.35 0,0 Z\"\r\n             style=\"fill:none;stroke:objeto;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1\"\r\n             id=\"path4382\"\r\n             inkscape:connector-curvature=\"0\" /></g><g\r\n           id=\"g4392\"\r\n           transform=\"translate(355.6201,127.6217)\"><path\r\n             d=\"m 0,0 c 0,0 -1.617,-0.044 -1.573,-0.743 0.043,-0.699 1.512,-0.733 1.512,-0.733 0,0 0.979,-1.059 2.639,-1.124 1.661,-0.066 2.404,0.633 2.404,0.633 0,0 3.299,-0.31 3.343,0.665 0.044,0.974 -3.125,1.149 -3.125,1.149 0,0 -0.393,0.852 -2.884,0.94 C 0.656,0.845 0,0 0,0\"\r\n             style=\"fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none\"\r\n             id=\"path4394\"\r\n             inkscape:connector-curvature=\"0\" /></g>', '<g\r\n           id=\"g4352\"\r\n           transform=\"translate(272.7992,132.4652)\"><path\r\n             d=\"m 0,0 5.841,0 c 0.488,0 0.833,-0.475 0.684,-0.94 -0.551,-1.715 -1.631,-5.589 -1.8,-10.03 -0.016,-0.415 -0.353,-0.746 -0.769,-0.749 -0.901,-0.008 -2.36,-0.078 -2.907,-0.43 -0.816,-0.524 -3.205,-2.068 -4.603,-1.981 0,0 0.67,10.343 3.554,14.13\"\r\n             style=\"fill:accesorios;fill-opacity:1;fill-rule:nonzero;stroke:none\"\r\n             id=\"path4354\"\r\n             inkscape:connector-curvature=\"0\" /></g><g\r\n           id=\"g4356\"\r\n           transform=\"translate(446.3756,122.4762)\"><path\r\n             d=\"m 0,0 2.656,-5.496 c 0,0 5.2,-1.923 5.987,-1.66 0.786,0.262 1.223,0.961 1.223,0.961 l 1.18,0.044 c 0,0 -1.66,5.244 -2.228,5.725 C 8.294,0.017 5.097,1.759 0.665,1.208 0.087,1.136 -0.253,0.524 0,0\"\r\n             style=\"fill:accesorios;fill-opacity:1;fill-rule:nonzero;stroke:none\"\r\n             id=\"path4358\"\r\n             inkscape:connector-curvature=\"0\" /></g><g\r\n           id=\"g4360\"\r\n           transform=\"translate(460.6849,105.3414)\"><path\r\n             d=\"m 0,0 c 0,0 0.524,1.194 -0.583,1.253 -1.107,0.058 -3.467,-4.37 -3.146,-5.157 0.32,-0.787 2.593,-0.816 2.593,-0.816 L -0.262,-0.291 0,0 Z\"\r\n             style=\"fill:accesorios;fill-opacity:1;fill-rule:nonzero;stroke:none\"\r\n             id=\"path4362\"\r\n             inkscape:connector-curvature=\"0\" /></g>\r\n             <g\r\n           id=\"g4384\"\r\n           transform=\"translate(365.2005,152.1073)\"><path\r\n             d=\"m 0,0 0,-21.74 2.401,0 L 1.527,0 0,0 Z\"\r\n             style=\"fill:objeto;fill-opacity:1;fill-rule:nonzero;stroke:none\"\r\n             id=\"path4386\"\r\n             inkscape:connector-curvature=\"0\" /></g><g\r\n           id=\"g4388\"\r\n           transform=\"translate(407.5152,131.8388)\"><path\r\n             d=\"m 0,0 c 0,0 0.612,4.305 -0.787,5.135 -1.398,0.83 -2.272,1.355 -5.681,1.027 0,0 -0.961,-0.131 -1.07,-1.42 -0.11,-1.29 -0.569,-3.999 0,-4.633 0.568,-0.633 4.894,-1.944 7.254,-2.032 0,0 1.224,0.459 1.267,0.94 C 1.027,-0.503 0,0 0,0\"\r\n             style=\"fill:objeto;fill-opacity:1;fill-rule:nonzero;stroke:none\"\r\n             id=\"path4390\"\r\n             inkscape:connector-curvature=\"0\" /></g><g\r\n           id=\"g4396\"\r\n           transform=\"translate(377.2274,126.497)\"><path\r\n             d=\"M 0,0 C 0,0 1.594,-0.274 1.451,-0.96 1.308,-1.646 -0.15,-1.47 -0.15,-1.47 c 0,0 -1.12,-0.908 -2.773,-0.735 -1.653,0.172 -2.289,0.97 -2.289,0.97 0,0 -3.31,0.165 -3.214,1.135 0.096,0.971 3.257,0.692 3.257,0.692 0,0 0.511,0.787 2.989,0.517 C -0.528,0.93 0,0 0,0\"\r\n             style=\"fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none\"\r\n             id=\"path4398\"\r\n             inkscape:connector-curvature=\"0\" /></g><g\r\n           id=\"g4400\"\r\n           transform=\"translate(407.9593,137.3311)\"><path\r\n             d=\"m 0,0 0,-10.258 11.112,0.59 0,2.253 L 0,0 Z\"\r\n             style=\"fill:objeto;fill-opacity:1;fill-rule:nonzero;stroke:none\"\r\n             id=\"path4402\"\r\n             inkscape:connector-curvature=\"0\" /></g>\r\n\r\n             \r\n             <g\r\n           id=\"g4364\"\r\n           transform=\"translate(319.5012,100.5925)\"><path\r\n             d=\"m 0,0 c 0,-7.965 -6.457,-14.421 -14.421,-14.421 -7.965,0 -14.422,6.456 -14.422,14.421 0,7.965 6.457,14.421 14.422,14.421 C -6.457,14.421 0,7.965 0,0\"\r\n             style=\"fill:ruedas;fill-opacity:1;fill-rule:nonzero;stroke:none\"\r\n             id=\"path4366\"\r\n             inkscape:connector-curvature=\"0\" /></g><g\r\n           id=\"g4368\"\r\n           transform=\"translate(314.0822,100.5925)\"><path\r\n             d=\"m 0,0 c 0,-4.972 -4.031,-9.002 -9.002,-9.002 -4.972,0 -9.003,4.03 -9.003,9.002 0,4.972 4.031,9.002 9.003,9.002 C -4.031,9.002 0,4.972 0,0\"\r\n             style=\"fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none\"\r\n             id=\"path4370\"\r\n             inkscape:connector-curvature=\"0\" /></g><g\r\n           id=\"g4372\"\r\n           transform=\"translate(442.4955,100.5925)\"><path\r\n             d=\"m 0,0 c 0,-7.965 -6.457,-14.421 -14.421,-14.421 -7.965,0 -14.422,6.456 -14.422,14.421 0,7.965 6.457,14.421 14.422,14.421 C -6.457,14.421 0,7.965 0,0\"\r\n             style=\"fill:ruedas;fill-opacity:1;fill-rule:nonzero;stroke:none\"\r\n             id=\"path4374\"\r\n             inkscape:connector-curvature=\"0\" /></g><g\r\n           id=\"g4376\"\r\n           transform=\"translate(437.0765,100.5925)\"><path\r\n             d=\"m 0,0 c 0,-4.972 -4.031,-9.002 -9.002,-9.002 -4.972,0 -9.003,4.03 -9.003,9.002 0,4.972 4.031,9.002 9.003,9.002 C -4.031,9.002 0,4.972 0,0\"\r\n             style=\"fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none\"\r\n             id=\"path4378\"\r\n             inkscape:connector-curvature=\"0\" /></g></g></g></g></svg>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `user` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `keypass` int(11) NOT NULL DEFAULT '0',
  `keypass_tmp` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `session` int(11) NOT NULL DEFAULT '0',
  `object` int(1) NOT NULL,
  `var1` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `var2` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `var3` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `var4` varchar(7) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `user`, `email`, `pass`, `telefono`, `keypass`, `keypass_tmp`, `session`, `object`, `var1`, `var2`, `var3`, `var4`) VALUES
(7, 'alexgh3', 'sharyn_alex@yahoo.com', 'q1PvBVIzyGlt1xCCk5+FaoVyaAkXigiCm+clv+VjxAU=', '1321321', 0, '', 0, 0, '2', '#1100FF', '#FF0000', '#000000');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`codcolor`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
