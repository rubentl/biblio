# --------------------------------------------------------
# Host:                         127.0.0.1
# Server version:               5.2.9-MariaDB
# Server OS:                    Win64
# HeidiSQL version:             6.0.0.3603
# Date/time:                    2012-06-19 12:08:47
# --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

# Dumping database structure for cake
DROP DATABASE IF EXISTS `cake`;
CREATE DATABASE IF NOT EXISTS `cake` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `cake`;


# Dumping structure for table cake.autores
DROP TABLE IF EXISTS `autores`;
CREATE TABLE IF NOT EXISTS `autores` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `borrado` varchar(2) NOT NULL DEFAULT 'no',
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

# Dumping data for table cake.autores: ~0 rows (approximately)
/*!40000 ALTER TABLE `autores` DISABLE KEYS */;
/*!40000 ALTER TABLE `autores` ENABLE KEYS */;


# Dumping structure for table cake.autores_libros
DROP TABLE IF EXISTS `autores_libros`;
CREATE TABLE IF NOT EXISTS `autores_libros` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `autor_id` int(10) unsigned NOT NULL,
  `libro_id` int(10) unsigned NOT NULL,
  `borrado` varchar(2) NOT NULL DEFAULT 'no',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

# Dumping data for table cake.autores_libros: ~0 rows (approximately)
/*!40000 ALTER TABLE `autores_libros` DISABLE KEYS */;
/*!40000 ALTER TABLE `autores_libros` ENABLE KEYS */;


# Dumping structure for table cake.comentarios
DROP TABLE IF EXISTS `comentarios`;
CREATE TABLE IF NOT EXISTS `comentarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `comentario` longtext NOT NULL,
  `recomendado` varchar(2) NOT NULL DEFAULT 'no',
  `user_id` int(10) unsigned NOT NULL,
  `libro_id` int(10) unsigned NOT NULL,
  `borrado` varchar(2) NOT NULL DEFAULT 'no',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

# Dumping data for table cake.comentarios: ~0 rows (approximately)
/*!40000 ALTER TABLE `comentarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `comentarios` ENABLE KEYS */;


# Dumping structure for table cake.contenidos
DROP TABLE IF EXISTS `contenidos`;
CREATE TABLE IF NOT EXISTS `contenidos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `libro_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `borrado` varchar(2) NOT NULL DEFAULT 'no',
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

# Dumping data for table cake.contenidos: ~0 rows (approximately)
/*!40000 ALTER TABLE `contenidos` DISABLE KEYS */;
/*!40000 ALTER TABLE `contenidos` ENABLE KEYS */;


# Dumping structure for table cake.contenido_html
DROP TABLE IF EXISTS `contenido_html`;
CREATE TABLE IF NOT EXISTS `contenido_html` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `seccion_id` int(10) unsigned NOT NULL,
  `texto` longtext NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `borrado` varchar(2) NOT NULL DEFAULT 'no',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

# Dumping data for table cake.contenido_html: ~4 rows (approximately)
/*!40000 ALTER TABLE `contenido_html` DISABLE KEYS */;
INSERT INTO `contenido_html` (`id`, `seccion_id`, `texto`, `fecha`, `borrado`) VALUES
	(1, 1, '<h1>Novedades</h1>\r\n<p>En este momento no existe ninguna novedad en nuestro mundo bibliográfico.</p>\r\n<p>Pero pronto las habrá.</p>\r\n', '2012-06-13 18:49:26', 'no'),
	(2, 2, '<h1>Quienes somos</h1>\r\n<p>Somos una aplicación web de carácter familiar para la gestión y publicación de nuestro fondo bibliográfico.</p> <p>Surgió ante la necesidad de ordenar y tener accesibles nuestros libros.</p> <p>Sólo que una vez puestos a ello decidimos ampliar las prestaciones con un  sencillo sistema de préstamos para nuestros familiares y la posibilidad de comentar los libros y recomendarlos.</p> <p>Esperamos que resulte de utilidad y si quieres comentarnos algo hazlo sin reparos a la siguiente dirección:</p><p class="centrado">{{Company.Email}}</p>\r\n', '2011-12-16 17:51:51', 'no'),
	(3, 3, '<h1>Enlaces</h1>\r\n<p class="centrado">\r\n    Unos buscadores de libros y documentos. <br />\r\n    <a href="http://dialnet.unirioja.es/servlet/buscador" target="_blank" class="enlace">dialnet</a><br />\r\n    Este otro servicio además te muestra dónde encontrar el libro. <br />\r\n    <a href="http://www.todostuslibros.com/" target="_blank" class="enlace">todostuslibros</a>\r\n</p>\r\n', '2011-12-16 17:52:02', 'no'),
	(4, 4, '<h1>Aviso legal</h1>\r\n<p class="justificado">\r\n    De conformidad con lo establecido en la Ley 15/1999, de 13 de diciembre, de Protección de Datos de Carácter Personal, le informamos de que todos los datos facilitados serán incorporados a un fichero cuya titularidad corresponde a {{Company.Nombre}}. Podrán ejercer su derecho de acceso, rectificación, cancelación y oposición al tratamiento de sus datos personales, en los términos y condiciones previstas en la normativa vigente, mediante comunicación remitida a la siguiente dirección de correo electrónico: {{Company.Email}}</p>\r\n', '2011-12-16 17:52:16', 'no');
/*!40000 ALTER TABLE `contenido_html` ENABLE KEYS */;


# Dumping structure for table cake.editoriales
DROP TABLE IF EXISTS `editoriales`;
CREATE TABLE IF NOT EXISTS `editoriales` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `ciudad` varchar(100) DEFAULT NULL,
  `borrado` varchar(2) NOT NULL DEFAULT 'no',
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

# Dumping data for table cake.editoriales: ~0 rows (approximately)
/*!40000 ALTER TABLE `editoriales` DISABLE KEYS */;
/*!40000 ALTER TABLE `editoriales` ENABLE KEYS */;


# Dumping structure for table cake.i18n
DROP TABLE IF EXISTS `i18n`;
CREATE TABLE IF NOT EXISTS `i18n` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `locale` varchar(6) NOT NULL,
  `model` varchar(255) NOT NULL,
  `foreign_key` int(10) NOT NULL,
  `field` varchar(255) NOT NULL,
  `content` text,
  PRIMARY KEY (`id`),
  KEY `locale` (`locale`),
  KEY `model` (`model`),
  KEY `row_id` (`foreign_key`),
  KEY `field` (`field`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

# Dumping data for table cake.i18n: ~0 rows (approximately)
/*!40000 ALTER TABLE `i18n` DISABLE KEYS */;
/*!40000 ALTER TABLE `i18n` ENABLE KEYS */;


# Dumping structure for table cake.ips
DROP TABLE IF EXISTS `ips`;
CREATE TABLE IF NOT EXISTS `ips` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ip` varchar(15) NOT NULL,
  `navegador` varchar(200) NOT NULL,
  `borrado` varchar(2) NOT NULL DEFAULT 'no',
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fecha` (`fecha`),
  KEY `ip` (`ip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

# Dumping data for table cake.ips: ~0 rows (approximately)
/*!40000 ALTER TABLE `ips` DISABLE KEYS */;
/*!40000 ALTER TABLE `ips` ENABLE KEYS */;


# Dumping structure for table cake.libros
DROP TABLE IF EXISTS `libros`;
CREATE TABLE IF NOT EXISTS `libros` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `isbn` varchar(15) DEFAULT NULL,
  `tejuelo` varchar(100) DEFAULT NULL,
  `anio` int(10) unsigned DEFAULT NULL,
  `edicion` int(10) unsigned DEFAULT NULL,
  `editoriale_id` int(10) unsigned NOT NULL,
  `encuadernacion` varchar(100) DEFAULT NULL,
  `copias` int(10) unsigned NOT NULL DEFAULT '1',
  `borrado` varchar(2) NOT NULL DEFAULT 'no',
  PRIMARY KEY (`id`),
  UNIQUE KEY `titulo` (`titulo`,`isbn`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

# Dumping data for table cake.libros: ~0 rows (approximately)
/*!40000 ALTER TABLE `libros` DISABLE KEYS */;
/*!40000 ALTER TABLE `libros` ENABLE KEYS */;


# Dumping structure for table cake.libros_temas
DROP TABLE IF EXISTS `libros_temas`;
CREATE TABLE IF NOT EXISTS `libros_temas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `libro_id` int(10) unsigned NOT NULL,
  `tema_id` int(10) unsigned NOT NULL,
  `borrado` varchar(2) NOT NULL DEFAULT 'no',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

# Dumping data for table cake.libros_temas: ~0 rows (approximately)
/*!40000 ALTER TABLE `libros_temas` DISABLE KEYS */;
/*!40000 ALTER TABLE `libros_temas` ENABLE KEYS */;


# Dumping structure for table cake.prestamos
DROP TABLE IF EXISTS `prestamos`;
CREATE TABLE IF NOT EXISTS `prestamos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `libro_id` int(10) unsigned NOT NULL,
  `fecha_prestamo` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_devolucion` timestamp NULL DEFAULT NULL,
  `borrado` varchar(2) NOT NULL DEFAULT 'no',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

# Dumping data for table cake.prestamos: ~0 rows (approximately)
/*!40000 ALTER TABLE `prestamos` DISABLE KEYS */;
/*!40000 ALTER TABLE `prestamos` ENABLE KEYS */;


# Dumping structure for table cake.secciones
DROP TABLE IF EXISTS `secciones`;
CREATE TABLE IF NOT EXISTS `secciones` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `borrado` varchar(2) NOT NULL DEFAULT 'no',
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

# Dumping data for table cake.secciones: ~4 rows (approximately)
/*!40000 ALTER TABLE `secciones` DISABLE KEYS */;
INSERT INTO `secciones` (`id`, `nombre`, `borrado`) VALUES
	(1, 'novedades', 'no'),
	(2, 'quienes somos', 'no'),
	(3, 'enlaces', 'no'),
	(4, 'legal', 'no');
/*!40000 ALTER TABLE `secciones` ENABLE KEYS */;


# Dumping structure for table cake.temas
DROP TABLE IF EXISTS `temas`;
CREATE TABLE IF NOT EXISTS `temas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `borrado` varchar(2) NOT NULL DEFAULT 'no',
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

# Dumping data for table cake.temas: ~0 rows (approximately)
/*!40000 ALTER TABLE `temas` DISABLE KEYS */;
/*!40000 ALTER TABLE `temas` ENABLE KEYS */;


# Dumping structure for table cake.tipos
DROP TABLE IF EXISTS `tipos`;
CREATE TABLE IF NOT EXISTS `tipos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `borrado` varchar(2) NOT NULL DEFAULT 'no',
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

# Dumping data for table cake.tipos: ~0 rows (approximately)
/*!40000 ALTER TABLE `tipos` DISABLE KEYS */;
INSERT INTO `tipos` (`id`, `nombre`, `borrado`) VALUES
	(1, 'admin', 'no'),
	(2, 'usuario', 'no'),
	(3, 'invitado', 'no');
/*!40000 ALTER TABLE `tipos` ENABLE KEYS */;


# Dumping structure for table cake.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `apellidos` varchar(200) DEFAULT NULL,
  `domicilio` varchar(200) DEFAULT NULL,
  `telefono` varchar(9) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `dni` varchar(10) NOT NULL,
  `noticias` varchar(2) NOT NULL DEFAULT 'si',
  `password` varchar(250) NOT NULL,
  `tipo_id` int(10) unsigned NOT NULL,
  `borrado` varchar(2) NOT NULL DEFAULT 'no',
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre` (`username`),
  UNIQUE KEY `password` (`password`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
