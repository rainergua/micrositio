-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-04-2020 a las 06:21:47
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `microsite`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialistas`
--

CREATE TABLE `especialistas` (
  `especialista_id` int(8) NOT NULL,
  `especialista_name` varchar(50) NOT NULL,
  `especialista_carnet` varchar(10) NOT NULL,
  `especialista_codigo` varchar(10) NOT NULL,
  `especialista_categoria` varchar(50) NOT NULL,
  `especialista_resumen` text NOT NULL,
  `especialista_especialidad` varchar(50) NOT NULL,
  `especialista_fono` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `especialistas`
--

INSERT INTO `especialistas` (`especialista_id`, `especialista_name`, `especialista_carnet`, `especialista_codigo`, `especialista_categoria`, `especialista_resumen`, `especialista_especialidad`, `especialista_fono`) VALUES
(1, 'Roxana Chávez Villaseñor', '12345678', '12345678', 'depresión, autoconocimiento, ansiedad, estrés.', 'Te quiero acompañar profesionalmente en la búsqueda de tus propias herramientas personales, buscando cerrar, unir y/o integrar aspectos de tu vida a través de la terapia psicológica.', '4', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `pregunta_id` int(8) NOT NULL,
  `pregunta_cont` text NOT NULL,
  `pregunta_date` datetime NOT NULL,
  `pregunta_categoria` varchar(50) NOT NULL,
  `pregunta_ok` tinyint(1) NOT NULL DEFAULT 0,
  `pregunta_user_codigo` varchar(15) NOT NULL,
  `pregunta_codigo` varchar(15) DEFAULT NULL,
  `pregunta_tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`pregunta_id`, `pregunta_cont`, `pregunta_date`, `pregunta_categoria`, `pregunta_ok`, `pregunta_user_codigo`, `pregunta_codigo`, `pregunta_tipo`) VALUES
(1, '¿Cuál es la mejor manera de explicarles a los niños la situación en la que se encuentran?', '2020-04-01 04:44:02', 'familiar', 1, 'jbERgPaG4s', 'iU0FgomfdO', 'hijos'),
(2, '¿Es posible que la ansiedad de los padres se transmita a los niños?', '2020-04-01 05:58:51', 'Ansiedad', 1, 'jbERgPaG4s', 'IVoPKctgZ5', ''),
(3, '¿Pueden las noticias sobre el coronavirus provocar estrés en los menores?', '2020-04-02 01:59:37', 'familiar', 1, 'jbERgPaG4s', 'Y8jMvDI0wl', 'hijos'),
(4, '¿Qué signos indican la aparición de estrés?', '2020-04-02 02:00:01', 'individual', 1, 'jbERgPaG4s', 'ZhaYyE5VIs', 'miedo'),
(5, '¿Cómo se puede evitar la aparición de ansiedad infantil durante la cuarentena?', '2020-04-02 02:00:34', 'familiar', 1, 'jbERgPaG4s', 'xBj52NdyLi', 'hijos'),
(6, '¿Cómo se puede evitar la aparición de ansiedad infantil durante la cuarentena?', '2020-04-02 02:00:34', 'familiar', 1, 'jbERgPaG4s', 'wN31xJv0uU', 'hijos'),
(7, '¿Qué efectos puede tener el estrés sobre los niños?', '2020-04-02 02:00:52', 'familiar', 1, 'jbERgPaG4s', 'AZWSaBQIGe', 'hijos'),
(8, '¿Qué tipo de actividades pueden hacerse en familia, que no supongan una fuente de ansiedad para nadie?', '2020-04-02 02:01:13', 'familiar', 1, 'jbERgPaG4s', 'EanS7P0A9J', 'hijos'),
(9, '¿Puede el ejercicio físico ayudar a evitar el estrés?', '2020-04-02 02:01:31', 'estres', 1, 'jbERgPaG4s', 'ofCVhbq3t6', ''),
(10, '¿Puede transmitirse a través del aire el virus causante de la COVID-19?', '2020-04-02 18:34:52', 'individual', 1, 'zTutXl0nJG', 'njxTa6M9QO', 'miedo'),
(11, 'Como puedo continuar con mi vida desde mi casa', '2020-04-03 03:46:56', 'familiar', 1, 'd0pgSTCNbt', 'QTYzN3Knbm', 'conyugue'),
(17, 'Tengo mucha preocupación', '2020-04-04 01:23:20', 'individual', 1, 'dVsSvXMaoD', 'RtV31hYK26', 'angustia'),
(18, '¿Puede el ejercicio físico ayudar a evitar el estrés?', '2020-04-04 05:22:50', 'familiar', 1, 'jbERgPaG4s', 'S7B9DMFRCt', 'hijos'),
(19, '¿Es posible contagiarse de COVID-19 por contacto con las heces de una persona que padezca la enfermedad?', '2020-04-04 05:23:36', 'individual', 1, 'jbERgPaG4s', '2pBST3rVsb', 'miedo'),
(20, '¿Qué puedo hacer para protegerme y prevenir la propagación de la enfermedad?', '2020-04-04 05:24:23', 'individual', 1, 'jbERgPaG4s', 'f1R0qkSLMI', 'miedo'),
(21, '¿Qué es un coronavirus?', '2020-04-04 05:52:17', 'individual', 1, 'v8VN3JucoR', 'jYICaDKcOG', 'angustia'),
(22, '¿Cómo se propaga la COVID-19?', '2020-04-04 05:53:04', 'individual', 1, 'LIdjnbR4m3', 'IJcHYkgWzw', 'angustia'),
(23, '¿Es posible contagiarse de COVID-19 por contacto con una persona que no presente ningún síntoma?', '2020-04-04 05:53:46', 'individual', 1, 'xXpru7hDWN', 'Q2BuS7hoxT', 'angustia'),
(24, '¿Es posible contagiarse de COVID-19 por contacto con las heces de una persona que padezca la enfermedad?', '2020-04-04 05:54:32', 'individual', 1, 'Ab2pqzK8xR', 'ZjQomNz5tD', 'angustia'),
(25, '¿Qué puedo hacer para protegerme y prevenir la propagación de la enfermedad?', '2020-04-04 06:06:26', 'individual', 1, 'jbERgPaG4s', 'l9Ofa7jPJt', 'angustia'),
(26, '¿Qué probabilidades hay de que contraiga la COVID-19?', '2020-04-04 06:07:17', '', 0, 'z1gm0XWncY', 'diU4xJkNq3', ''),
(27, '¿Debo preocuparme por la COVID-19?', '2020-04-04 06:08:18', '', 0, 'Kx0c6wtYjf', 'On1TvJD7Mm', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

CREATE TABLE `respuestas` (
  `respuesta_id` int(8) NOT NULL,
  `respuesta_cont` text NOT NULL,
  `respuesta_date` datetime NOT NULL,
  `respuesta_user_codigo` varchar(15) NOT NULL,
  `respuesta_pregunta_codigo` varchar(15) NOT NULL,
  `respuesta_codigo` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `respuestas`
--

INSERT INTO `respuestas` (`respuesta_id`, `respuesta_cont`, `respuesta_date`, `respuesta_user_codigo`, `respuesta_pregunta_codigo`, `respuesta_codigo`) VALUES
(1, 'Hay que intentar evitar los comentarios exagerados y catastrofistas delante de ellos. Somos el modelo en el que se fijan nuestros hijos para poder procesar e interpretar lo que está ocurriendo a su alrededor, y por eso hay que vigilar cómo hablamos sobre estos problemas, porque si no, reconocerán la ansiedad de los padres y comenzarán a estresarse.', '2020-04-02 00:42:24', '', '0', 'yleC7baEtV'),
(2, 'Hacer ejercicio permite liberar tensión muscular, pero además mejora nuestra capacidad de atención y nuestra memoria de trabajo, en especial si el ejercicio que practicamos implica una secuencia ordenada de movimientos como en el baile, la danza o las artes marciales. Se puede diseñar una tabla de ejercicios o seguir un tutorial en YouTube, o montar una yincana por toda la casa, con paradas donde tenemos que hacer un determinado ejercicio, a ser posible divertido (por aquí hacemos un túnel con las sillas y hay que pasar reptando, por allá hay que ir a cuatro patas o imitando algún animal, etcétera).', '2020-04-02 03:06:23', '12345678', '0', 'qInVCKhgE8'),
(3, ' Una de las primeras estrategias a adoptar con los niños es aportarles información comprensible sobre lo que está ocurriendo con el virus, adaptada a su edad y grado de madurez. Podemos utilizar la comparación de algo que ya conozcan, como una gripe, resaltando la prevención del contagio y la posibilidad de evitar la enfermedad.', '2020-04-03 17:36:12', '12345678', '0', 'A3M2bN94KR'),
(4, ' Una de las primeras estrategias a adoptar con los niños es aportarles información comprensible sobre lo que está ocurriendo con el virus, adaptada a su edad y grado de madurez. Podemos utilizar la comparación de algo que ya conozcan, como una gripe, resaltando la prevención del contagio y la posibilidad de evitar la enfermedad.', '2020-04-03 17:41:16', '12345678', '0', 'Mx0QksJhg2'),
(5, ' Una de las primeras estrategias a adoptar con los niños es aportarles información comprensible sobre lo que está ocurriendo con el virus, adaptada a su edad y grado de madurez. Podemos utilizar la comparación de algo que ya conozcan, como una gripe, resaltando la prevención del contagio y la posibilidad de evitar la enfermedad.', '2020-04-03 17:43:36', '12345678', '0', 'e90X1lTPt3'),
(6, ' Una de las primeras estrategias a adoptar con los niños es aportarles información comprensible sobre lo que está ocurriendo con el virus, adaptada a su edad y grado de madurez. Podemos utilizar la comparación de algo que ya conozcan, como una gripe, resaltando la prevención del contagio y la posibilidad de evitar la enfermedad.', '2020-04-03 17:47:53', '12345678', '0', 'JdcrfLeamx'),
(7, ' Una de las primeras estrategias a adoptar con los niños es aportarles información comprensible sobre lo que está ocurriendo con el virus, adaptada a su edad y grado de madurez. Podemos utilizar la comparación de algo que ya conozcan, como una gripe, resaltando la prevención del contagio y la posibilidad de evitar la enfermedad.', '2020-04-03 17:55:00', '12345678', '0', 'ynrs2aemXt'),
(8, ' Una de las primeras estrategias a adoptar con los niños es aportarles información comprensible sobre lo que está ocurriendo con el virus, adaptada a su edad y grado de madurez. Podemos utilizar la comparación de algo que ya conozcan, como una gripe, resaltando la prevención del contagio y la posibilidad de evitar la enfermedad.', '2020-04-03 17:58:09', '12345678', '0', 'lkVTBR94dt'),
(9, ' Una de las primeras estrategias a adoptar con los niños es aportarles información comprensible sobre lo que está ocurriendo con el virus, adaptada a su edad y grado de madurez. Podemos utilizar la comparación de algo que ya conozcan, como una gripe, resaltando la prevención del contagio y la posibilidad de evitar la enfermedad.', '2020-04-03 18:10:43', '12345678', '0', '1PtD4hC8R9'),
(10, ' Una de las primeras estrategias a adoptar con los niños es aportarles información comprensible sobre lo que está ocurriendo con el virus, adaptada a su edad y grado de madurez. Podemos utilizar la comparación de algo que ya conozcan, como una gripe, resaltando la prevención del contagio y la posibilidad de evitar la enfermedad.', '2020-04-03 18:21:29', '12345678', '0', 'yTrfe804nt'),
(11, ' Una de las primeras estrategias a adoptar con los niños es aportarles información comprensible sobre lo que está ocurriendo con el virus, adaptada a su edad y grado de madurez. Podemos utilizar la comparación de algo que ya conozcan, como una gripe, resaltando la prevención del contagio y la posibilidad de evitar la enfermedad.', '2020-04-03 18:21:44', '12345678', '0', 'MEQu94XYWB'),
(12, ' Una de las primeras estrategias a adoptar con los niños es aportarles información comprensible sobre lo que está ocurriendo con el virus, adaptada a su edad y grado de madurez. Podemos utilizar la comparación de algo que ya conozcan, como una gripe, resaltando la prevención del contagio y la posibilidad de evitar la enfermedad.', '2020-04-03 18:31:48', '', '12345678', 'NdiKAD1acp'),
(13, ' Una de las primeras estrategias a adoptar con los niños es aportarles información comprensible sobre lo que está ocurriendo con el virus, adaptada a su edad y grado de madurez. Podemos utilizar la comparación de algo que ya conozcan, como una gripe, resaltando la prevención del contagio y la posibilidad de evitar la enfermedad.', '2020-04-03 18:34:20', '12345678', 'iU0FgomfdO', '4vONdn9bI0'),
(14, ' Una de las primeras estrategias a adoptar con los niños es aportarles información comprensible sobre lo que está ocurriendo con el virus, adaptada a su edad y grado de madurez. Podemos utilizar la comparación de algo que ya conozcan, como una gripe, resaltando la prevención del contagio y la posibilidad de evitar la enfermedad.', '2020-04-03 18:35:45', '12345678', 'iU0FgomfdO', 'yYaBDNKzPS'),
(15, ' Una de las primeras estrategias a adoptar con los niños es aportarles información comprensible sobre lo que está ocurriendo con el virus, adaptada a su edad y grado de madurez. Podemos utilizar la comparación de algo que ya conozcan, como una gripe, resaltando la prevención del contagio y la posibilidad de evitar la enfermedad.', '2020-04-03 18:37:05', '12345678', 'iU0FgomfdO', '3oiAX267lN'),
(16, ' Una de las primeras estrategias a adoptar con los niños es aportarles información comprensible sobre lo que está ocurriendo con el virus, adaptada a su edad y grado de madurez. Podemos utilizar la comparación de algo que ya conozcan, como una gripe, resaltando la prevención del contagio y la posibilidad de evitar la enfermedad.', '2020-04-03 19:19:51', '12345678', 'iU0FgomfdO', 'qHjbJxp4CY'),
(17, ' Una de las primeras estrategias a adoptar con los niños es aportarles información comprensible sobre lo que está ocurriendo con el virus, adaptada a su edad y grado de madurez. Podemos utilizar la comparación de algo que ya conozcan, como una gripe, resaltando la prevención del contagio y la posibilidad de evitar la enfermedad.', '2020-04-03 19:30:36', '12345678', 'iU0FgomfdO', 'eTxyhvOdXg'),
(18, ' Una de las primeras estrategias a adoptar con los niños es aportarles información comprensible sobre lo que está ocurriendo con el virus, adaptada a su edad y grado de madurez. Podemos utilizar la comparación de algo que ya conozcan, como una gripe, resaltando la prevención del contagio y la posibilidad de evitar la enfermedad.', '2020-04-03 19:32:27', '12345678', 'iU0FgomfdO', '8lTkeML4PB'),
(19, ' Una de las primeras estrategias a adoptar con los niños es aportarles información comprensible sobre lo que está ocurriendo con el virus, adaptada a su edad y grado de madurez. Podemos utilizar la comparación de algo que ya conozcan, como una gripe, resaltando la prevención del contagio y la posibilidad de evitar la enfermedad.', '2020-04-03 19:33:15', '12345678', 'iU0FgomfdO', 'oyGrcMVtaD'),
(20, ' Una de las primeras estrategias a adoptar con los niños es aportarles información comprensible sobre lo que está ocurriendo con el virus, adaptada a su edad y grado de madurez. Podemos utilizar la comparación de algo que ya conozcan, como una gripe, resaltando la prevención del contagio y la posibilidad de evitar la enfermedad.', '2020-04-03 20:00:47', '12345678', 'iU0FgomfdO', 's1vU5MjpLe'),
(21, ' Una de las primeras estrategias a adoptar con los niños es aportarles información comprensible sobre lo que está ocurriendo con el virus, adaptada a su edad y grado de madurez. Podemos utilizar la comparación de algo que ya conozcan, como una gripe, resaltando la prevención del contagio y la posibilidad de evitar la enfermedad.', '2020-04-03 20:01:23', '12345678', 'iU0FgomfdO', 's4LrT5mCJf'),
(22, ' Una de las primeras estrategias a adoptar con los niños es aportarles información comprensible sobre lo que está ocurriendo con el virus, adaptada a su edad y grado de madurez. Podemos utilizar la comparación de algo que ya conozcan, como una gripe, resaltando la prevención del contagio y la posibilidad de evitar la enfermedad.', '2020-04-03 20:11:27', '12345678', 'iU0FgomfdO', 'kcsU5KBzy2'),
(23, ' Una de las primeras estrategias a adoptar con los niños es aportarles información comprensible sobre lo que está ocurriendo con el virus, adaptada a su edad y grado de madurez. Podemos utilizar la comparación de algo que ya conozcan, como una gripe, resaltando la prevención del contagio y la posibilidad de evitar la enfermedad.', '2020-04-03 20:24:00', '12345678', 'iU0FgomfdO', 'l0L9TnPO3J'),
(24, ' Una de las primeras estrategias a adoptar con los niños es aportarles información comprensible sobre lo que está ocurriendo con el virus, adaptada a su edad y grado de madurez. Podemos utilizar la comparación de algo que ya conozcan, como una gripe, resaltando la prevención del contagio y la posibilidad de evitar la enfermedad.', '2020-04-03 20:24:26', '12345678', 'iU0FgomfdO', 'hX2KqgUDuY'),
(25, ' Una de las primeras estrategias a adoptar con los niños es aportarles información comprensible sobre lo que está ocurriendo con el virus, adaptada a su edad y grado de madurez. Podemos utilizar la comparación de algo que ya conozcan, como una gripe, resaltando la prevención del contagio y la posibilidad de evitar la enfermedad.', '2020-04-03 20:32:57', '12345678', 'iU0FgomfdO', '57li2TjJnQ'),
(26, ' Una de las primeras estrategias a adoptar con los niños es aportarles información comprensible sobre lo que está ocurriendo con el virus, adaptada a su edad y grado de madurez. Podemos utilizar la comparación de algo que ya conozcan, como una gripe, resaltando la prevención del contagio y la posibilidad de evitar la enfermedad.', '2020-04-03 20:52:48', '12345678', 'iU0FgomfdO', 'u601tV9fRb'),
(27, ' Por debajo de los seis años no es recomendable que tengan acceso a todas las noticias que difunden los medios de comunicación. Al ver imágenes perturbadoras por televisión, o escuchar hablar sobre muertes y número de contagiados, pueden preocuparse por su propia seguridad y la de las personas que quieren. Es imprescindible informarles antes de permitirles ver esas noticias, para que puedan interpretarlas y adaptarse a ellas.', '2020-04-03 21:02:18', '12345678', 'Y8jMvDI0wl', 'k1q8xeI2Xg'),
(28, 'Es recomendable crear, junto a los niños, un plan de actividades en una cartulina o folio, presentarlo de forma visual y que quede a la vista. Pintaremos los siete días de la semana, dividiremos cada día en dos (mañana y tarde) y colocaremos en cada uno cuadrados o círculos que representen actividades y momentos importantes (poniendo dentro de esa figura lo que haremos): un rato para jugar, otro para leer, otro para los deberes... También es necesario dejar espacios sin actividades, para fomentar su creatividad.', '2020-04-03 21:11:46', '12345678', 'xBj52NdyLi', 'l5wOSaCiTW'),
(29, 'En la mayor parte de los niños, la cuarentena no tiene porqué generar estrés, pero sí preocupación. Si hemos podido explicarles de forma clara lo que ocurre, no aparecerán signos externos de ansiedad. No obstante, a lo largo de los días se les hará difícil no poder salir de casa y pueden aparecer demandas de atención, irritabilidad y un ligero malestar por no saber qué hacer. Si la cuarentena se prolonga, la falta de actividad puede llegar a provocar una ligera disminución del estado de ánimo. Por tanto, es bueno estar preparados y llenos de ideas.', '2020-04-04 02:17:27', '12345678', 'ZhaYyE5VIs', 'm4PWLucrTh'),
(30, 'Es recomendable crear, junto a los niños, un plan de actividades en una cartulina o folio, presentarlo de forma visual y que quede a la vista. Pintaremos los siete días de la semana, dividiremos cada día en dos (mañana y tarde) y colocaremos en cada uno cuadrados o círculos que representen actividades y momentos importantes (poniendo dentro de esa figura lo que haremos): un rato para jugar, otro para leer, otro para los deberes... También es necesario dejar espacios sin actividades, para fomentar su creatividad.', '2020-04-04 05:11:08', '12345678', 'wN31xJv0uU', '1YaITFXbcO'),
(31, 'Desde un punto de vista neuropsicológico, las dos funciones más sensibles al estrés (y las que primero se alteran) son la atención y la memoria. Por eso, entrenarlas nos ofrece la posibilidad de evitar la aparición de pensamientos más negativos. Ejercitémoslas con juegos sencillos, como el de esconder cosas y buscarlas; jugar a descubrir qué número o letra te pinto (con el dedo o con un lápiz con poca punta) en la espalda, y que solo con el tacto descubran de qué letra o número se trataba; o jugar a imitar nuestros movimientos o los de algún animal.', '2020-04-04 05:12:51', '12345678', 'AZWSaBQIGe', '8PeSVO1sUD'),
(32, 'Los estudios realizados hasta la fecha apuntan a que el virus causante de la COVID-19 se transmite principalmente por contacto con gotículas respiratorias, más que por el aire. Véase la respuesta anterior a la pregunta «¿Cómo se propaga la COVID-19?»', '2020-04-04 05:15:17', '12345678', 'njxTa6M9QO', 'qOZIpGUnc5'),
(33, 'Tener que combinar en el mismo espacio y momento del día el cuidado y educación de los hijos y su desempeño laboral puede generar frustración en los adultos. Es importante mantener una rutina que nos deje tiempo para realizar actividades juntos, como estas: cocinar, pintar, hacer ejercicio.', '2020-04-04 05:20:16', '12345678', 'EanS7P0A9J', 'o6g9MzrFDK'),
(34, 'Sin problemas buscando actividades que puedan ser congruentes con tu trabajo', '2020-04-04 05:25:22', '12345678', 'QTYzN3Knbm', 'h86XWcvoEi'),
(35, 'Me imagino que estaspreocupado por el tipo de situacion que estamos pasando por lo que es necesario que estes tranquilo y puedas salir adelante', '2020-04-04 05:32:46', '12345678', 'RtV31hYK26', 'XbdQmZjP4k'),
(36, 'Hacer ejercicio permite liberar tensión muscular, pero además mejora nuestra capacidad de atención y nuestra memoria de trabajo, en especial si el ejercicio que practicamos implica una secuencia ordenada de movimientos como en el baile, la danza o las artes marciales. Se puede diseñar una tabla de ejercicios o seguir un tutorial en YouTube, o montar una yincana por toda la casa, con paradas donde tenemos que hacer un determinado ejercicio, a ser posible divertido (por aquí hacemos un túnel con las sillas y hay que pasar reptando, por allá hay que ir a cuatro patas o imitando algún animal, etcétera).', '2020-04-04 05:40:00', '12345678', 'S7B9DMFRCt', 'ih3ZvyKWVE'),
(37, 'El riesgo de contraer la COVID-19 por contacto con las heces de una persona infectada parece ser bajo. Aunque las investigaciones iniciales apuntan a que el virus puede estar presente en algunos casos en las heces, la propagación por esta vía no es uno de los rasgos característicos del brote. La OMS está estudiando las investigaciones en curso sobre las formas de propagación de la COVID-19 y seguirá informando sobre los nuevos resultados. No obstante, se trata de un riesgo y por lo tanto es una razón más para lavarse las manos con frecuencia, después de ir al baño y antes de comer.', '2020-04-04 05:47:02', '12345678', '2pBST3rVsb', '7wZYbPyu82'),
(38, 'Manténgase al día de la información más reciente sobre el brote de COVID-19, a la que puede acceder en el sitio web de la OMS y a través de las autoridades de salud pública pertinentes a nivel nacional y local. Se han registrado casos en muchos países de todo el mundo, y en varios de ellos se han producido brotes. Las autoridades chinas y las de otros países han conseguido enlentecer o detener el avance de los brotes, pero la situación es impredecible y es necesario comprobar con regularidad las noticias más recientes.', '2020-04-04 05:48:00', '12345678', 'f1R0qkSLMI', 'Z4MKHifxFR'),
(39, 'Los coronavirus son una extensa familia de virus que pueden causar enfermedades tanto en animales como en humanos. En los humanos, se sabe que varios coronavirus causan infecciones respiratorias que pueden ir desde el resfriado común hasta enfermedades más graves como el síndrome respiratorio de Oriente Medio (MERS) y el síndrome respiratorio agudo severo (SRAS). El coronavirus que se ha descubierto más recientemente causa la enfermedad por coronavirus COVID-19.', '2020-04-04 05:55:11', '12345678', 'jYICaDKcOG', 'KNS2tJvQlT'),
(40, 'Una persona puede contraer la COVID-19 por contacto con otra que esté infectada por el virus. La enfermedad puede propagarse de persona a persona a través de las gotículas procedentes de la nariz o la boca que salen despedidas cuando una persona infectada tose o exhala. Estas gotículas caen sobre los objetos y superficies que rodean a la persona, de modo que otras personas pueden contraer la COVID-19 si tocan estos objetos o superficies y luego se tocan los ojos, la nariz o la boca. También pueden contagiarse si inhalan las gotículas que haya esparcido una persona con COVID-19 al toser o exhalar. Por eso es importante mantenerse a más de 1 metro (3 pies) de distancia de una persona que se encuentre enferma.', '2020-04-04 05:59:10', '12345678', 'IJcHYkgWzw', 'sQ8SpvCHRk'),
(41, 'El riesgo de contraer la COVID-19 por contacto con las heces de una persona infectada parece ser bajo. Aunque las investigaciones iniciales apuntan a que el virus puede estar presente en algunos casos en las heces, la propagación por esta vía no es uno de los rasgos característicos del brote. La OMS está estudiando las investigaciones en curso sobre las formas de propagación de la COVID-19 y seguirá informando sobre los nuevos resultados. No obstante, se trata de un riesgo y por lo tanto es una razón más para lavarse las manos con frecuencia, después de ir al baño y antes de comer.', '2020-04-04 06:00:04', '12345678', 'Q2BuS7hoxT', 'uTyv0RMsIg'),
(42, 'El riesgo de contraer la COVID-19 por contacto con las heces de una persona infectada parece ser bajo. Aunque las investigaciones iniciales apuntan a que el virus puede estar presente en algunos casos en las heces, la propagación por esta vía no es uno de los rasgos característicos del brote. La OMS está estudiando las investigaciones en curso sobre las formas de propagación de la COVID-19 y seguirá informando sobre los nuevos resultados. No obstante, se trata de un riesgo y por lo tanto es una razón más para lavarse las manos con frecuencia, después de ir al baño y antes de comer.', '2020-04-04 06:08:55', '12345678', 'ZjQomNz5tD', 'RsjzTtSbUx'),
(43, 'Manténgase al día de la información más reciente sobre el brote de COVID-19, a la que puede acceder en el sitio web de la OMS y a través de las autoridades de salud pública pertinentes a nivel nacional y local. Se han registrado casos en muchos países de todo el mundo, y en varios de ellos se han producido brotes. Las autoridades chinas y las de otros países han conseguido enlentecer o detener el avance de los brotes, pero la situación es impredecible y es necesario comprobar con regularidad las noticias más recientes.', '2020-04-04 06:09:30', '12345678', 'l9Ofa7jPJt', '14awSeU0RP');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `user_id` int(8) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_date` datetime NOT NULL,
  `user_fono` varchar(10) DEFAULT NULL,
  `user_tipo` varchar(10) NOT NULL DEFAULT 'pregunta',
  `user_codigo` varchar(15) DEFAULT NULL,
  `user_ocupacion` varchar(50) NOT NULL,
  `user_edad` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_date`, `user_fono`, `user_tipo`, `user_codigo`, `user_ocupacion`, `user_edad`) VALUES
(1, 'Rainer Gutierrez', '2020-04-01 04:38:59', '67325245', 'pregunta', 'jbERgPaG4s', '', ''),
(4, 'Pedro Suarez Veles', '2020-04-01 05:22:52', '72554321', 'respuesta', 'Vb8lX1UHRa', '', ''),
(5, 'Pedro Suarez', '2020-04-01 05:28:46', '67898765', 'respuesta', 'IW8bt6fqN3', '', ''),
(6, 'Pedro Suarez', '2020-04-01 05:34:06', '67543267', 'respuesta', 'bRf3dkAp4I', '', ''),
(7, 'Pedro Suarez', '2020-04-01 05:51:14', '67076534', 'respuesta', 't0KZwgFDfX', '', ''),
(8, 'Fabio Suarez', '2020-04-01 06:09:48', '72031456', 'respuesta', 'hjzX2oGmiI', '', ''),
(9, 'Rainer Gutierrez', '2020-04-02 18:34:52', '68075555', 'pregunta', 'zTutXl0nJG', 'Servidor Público', '36-45'),
(10, 'juan Juis Suarez', '2020-04-03 03:46:56', '65876123', 'pregunta', 'd0pgSTCNbt', 'Mediador', '26-35'),
(11, 'Juan Carlos Sanchez', '2020-04-03 03:59:01', '76545673', 'whatsapp', 'ixUZmdkPXo', 'Cerrajero', '42'),
(12, 'Pedro Suarez', '2020-04-03 05:04:18', '3456784', 'whatsapp', 'aHWZE0jxkF', 'dfgdsf', '43'),
(13, '', '2020-04-04 00:41:27', '', 'pregunta', '3wrExReYoT', '', '18-25'),
(14, 'Rainer Gutierrez', '2020-04-04 00:51:56', '', 'pregunta', '9exc07WuiP', 'tewrte', '26-35'),
(15, 'Abel Domiguez', '2020-04-04 01:23:20', '74569811', 'pregunta', 'dVsSvXMaoD', 'Mecánico', '36-45'),
(16, 'Rainer Gutierrez', '2020-04-04 01:56:12', '72535461', 'whatsapp', 'MQRW60Y5gt', 'lustra botas', '43'),
(17, 'Pedro Suarez Veles', '2020-04-04 03:19:15', '67064235', 'whatsapp', 'EghbTJX8W0', 'estilista', '45'),
(18, 'Pedro Dominguez', '2020-04-04 05:52:17', '67098235', 'pregunta', 'v8VN3JucoR', 'jardinero', '36-45'),
(19, 'Lucas Taborga', '2020-04-04 05:53:04', '65498756', 'pregunta', 'LIdjnbR4m3', 'auxiliar contable', '36-45'),
(20, 'Julio Martinez', '2020-04-04 05:53:46', '67523906', 'pregunta', 'xXpru7hDWN', 'cajero', '26-35'),
(21, 'Julio Suarez', '2020-04-04 05:54:32', '68923456', 'pregunta', 'Ab2pqzK8xR', 'electronico', '26-35'),
(22, 'Juan Peres Suarez', '2020-04-04 06:07:17', '67545321', 'pregunta', 'z1gm0XWncY', 'Hotelero', '26-35'),
(23, 'Mario Juarez', '2020-04-04 06:08:18', '76543268', 'pregunta', 'Kx0c6wtYjf', 'Jugador de futbol', '36-45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `whatsapps`
--

CREATE TABLE `whatsapps` (
  `wap_id` bigint(20) UNSIGNED NOT NULL,
  `wap_user_codigo` varchar(15) NOT NULL,
  `wap_que` text NOT NULL,
  `wap_cuando` text NOT NULL,
  `wap_porque` text NOT NULL,
  `wap_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `wap_especialista_codigo` varchar(15) NOT NULL,
  `wap_codigo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `whatsapps`
--

INSERT INTO `whatsapps` (`wap_id`, `wap_user_codigo`, `wap_que`, `wap_cuando`, `wap_porque`, `wap_date`, `wap_especialista_codigo`, `wap_codigo`) VALUES
(1, 'ixUZmdkPXo', 'me siento muy agoviado', 'desde que no puedo salir de mi casa', 'porque cuando salgo de mi casa puedo conseguir dinero', '2020-04-03 07:59:01', '', ''),
(2, 'aHWZE0jxkF', 'fdgdsfg', 'sdfgsdfg', 'dsfgsdfgd', '2020-04-03 09:04:19', '', 'gbIBFvVM9S'),
(3, 'jbERgPaG4s', 'muy molesto', 'desde que empezó la pandemia', 'porque nos e puede salir', '2020-04-03 09:10:57', '', 'ELoHuwIZAF'),
(4, 'MQRW60Y5gt', 'Me siento agobiado por esta situación', 'Desde que comenzó la cuarentena', 'Por que no puedo ganar mi dinero', '2020-04-04 05:56:12', '', 'S38CvK69d2'),
(5, 'EghbTJX8W0', 'no puedo dormir', 'desde que comenzó la cuarentena', 'porque no puedo dedicarme a mi trabajo', '2020-04-04 07:19:15', '', 'DbgvH5QhdL'),
(6, 'jbERgPaG4s', 'me siento muy acongojado', 'desde que empezó la cuarentena', 'por toda la gente que esta en esta situacion precaria', '2020-04-04 07:37:12', '', '3Bh2EkyCp4');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `especialistas`
--
ALTER TABLE `especialistas`
  ADD PRIMARY KEY (`especialista_id`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`pregunta_id`);

--
-- Indices de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  ADD PRIMARY KEY (`respuesta_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indices de la tabla `whatsapps`
--
ALTER TABLE `whatsapps`
  ADD UNIQUE KEY `wap_id` (`wap_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `especialistas`
--
ALTER TABLE `especialistas`
  MODIFY `especialista_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `pregunta_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  MODIFY `respuesta_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `whatsapps`
--
ALTER TABLE `whatsapps`
  MODIFY `wap_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
