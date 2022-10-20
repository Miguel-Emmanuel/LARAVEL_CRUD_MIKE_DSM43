/*
SQLyog Community v13.1.9 (64 bit)
MySQL - 10.4.24-MariaDB : Database - utvt_dsm43
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`utvt_dsm43` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `utvt_dsm43`;

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2022_09_15_200349_tb_tiendas',1),
(5,'2022_09_15_200407_tb_usuarios',1),
(6,'2022_09_15_200419_tb_tipos',1),
(7,'2022_09_15_200432_tb_productos',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `tb_productos` */

DROP TABLE IF EXISTS `tb_productos`;

CREATE TABLE `tb_productos` (
  `id_productos` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `clave` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `costo` decimal(8,2) NOT NULL,
  `id_tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_tienda` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_productos`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_productos` */

insert  into `tb_productos`(`id_productos`,`clave`,`nombre`,`cantidad`,`costo`,`id_tipo`,`id_tienda`,`activo`,`foto`) values 
(1,'1','FRESA','30',12.00,'01','01',1,'FRESA.jpg'),
(2,'2','AGUACATE','20',50.00,'01','01',1,'AGUACATE.jpg'),
(3,'3','CIRUELA','12',15.00,'01','01',1,'CIRUELA.jpg'),
(4,'4','GUANABANA','15',80.00,'01','01',1,'GUANABANA.jpg'),
(5,'5','GUAYABA','16',20.00,'01','01',1,'GUAYABA.jpg'),
(6,'6','JUCAMA','18',12.00,'01','01',1,'JUCAMA.jpg'),
(7,'7','KIWI','100',80.00,'01','01',1,'KIWI.jpg'),
(8,'8','LICHI','2',100.00,'01','01',1,'LICHI.jpg'),
(9,'9','MANDARINA','50',40.00,'01','01',1,'MANDARINA.jpg'),
(10,'10','MANGO','40',25.00,'01','01',1,'MANGO.jpg'),
(11,'11','MANZANA','32',5.00,'01','01',1,'MANZANA.jpg'),
(12,'12','PERA','45',8.00,'01','01',1,'PERA.jpg'),
(13,'13','PINEBERRY','56',150.00,'01','01',1,'PINEBERRY.jpg'),
(14,'14','PITAYA','28',120.00,'01','01',1,'PITAYA.jpg'),
(15,'15','PLATANO','31',40.00,'01','01',1,'PLATANO.jpg'),
(16,'16','SALAK','12',600.00,'01','01',1,'SALAK.jpg'),
(17,'17','TAMARINDO','27',40.00,'01','01',1,'TAMARINDO.jpg'),
(18,'18','TOROMBOLO','42',80.00,'01','01',1,'TOROMBOLO.jpg'),
(19,'19','TUNA','9',15.00,'01','01',1,'TUNA.jpg'),
(20,'20','UVAS','25',35.00,'01','01',1,'UVAS.jpg');

/*Table structure for table `tb_tiendas` */

DROP TABLE IF EXISTS `tb_tiendas`;

CREATE TABLE `tb_tiendas` (
  `id_tienda` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `clave` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_tienda`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_tiendas` */

/*Table structure for table `tb_tipos` */

DROP TABLE IF EXISTS `tb_tipos`;

CREATE TABLE `tb_tipos` (
  `id_tipo` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detalle` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_tipo`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_tipos` */

insert  into `tb_tipos`(`id_tipo`,`nombre`,`detalle`,`activo`,`created_at`,`updated_at`) values 
(1,'ADMINISTRADOR','ADMIN',1,'2022-10-13 09:13:26','2022-10-13 09:13:26'),
(2,'GERENTE','GERENTE',1,'2022-10-13 09:13:26','2022-10-13 09:13:26'),
(3,'EMPLEADO','EMPLEADO',1,'2022-10-13 09:13:26','2022-10-13 09:13:26'),
(4,'CLIENTE','CLIENTE',1,'2022-10-13 09:13:26','2022-10-13 09:13:26');

/*Table structure for table `tb_usuarios` */

DROP TABLE IF EXISTS `tb_usuarios`;

CREATE TABLE `tb_usuarios` (
  `id_usuario` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `clave` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `app` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ap` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fn` date NOT NULL,
  `gen` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nivel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_usuarios` */

insert  into `tb_usuarios`(`id_usuario`,`clave`,`nombre`,`app`,`ap`,`fn`,`gen`,`foto`,`email`,`pass`,`nivel`,`activo`,`created_at`,`updated_at`) values 
(2,'222110737','Yabin','Mendoza','Cervantes','2003-06-15','masculino','JAVIN.jpg','al@222110737gmail.com','aiom','EMPLEADO',1,'2022-10-13 09:13:26','2022-10-13 09:13:26'),
(3,'222010229','Alan','Arriola','Ortega','2002-06-05','masculino','ALAN.jpg','al222010229@gmail.com','aiom','GERENTE',1,'2022-10-13 09:13:26','2022-10-13 09:13:26'),
(4,'222010211','Esau','Gomez','Sanchez','2002-12-31','masculino','ESAU.jpg','al222010230@gmail.com','aiom','EMPLEADO',1,'2022-10-13 09:13:26','2022-10-13 09:13:26'),
(5,'222111315','Alison','Trujillo','Solis','2003-05-06','femenino','ALIS.jpg','al222111315@gmail.com','aiom','GERENTE',1,'2022-10-13 09:13:26','2022-10-13 09:13:26'),
(6,'2220102','Axel','Reyes','Gonzales','2002-06-05','masculino','AXEL.jpg','al222010230@gmail.com','aiom','EMPLEADO',1,'2022-10-13 09:13:26','2022-10-13 09:13:26'),
(7,'222010200','Juan Carlos','Romero','Nava','2002-06-05','masculino','JUAN.jpg','al222010200@gmail.com','aiom','EMPLEADO',1,'2022-10-13 09:13:26','2022-10-13 09:13:26'),
(8,'222010211','Eli','Diaz','Medina','2002-06-05','masculino','ELI.jpg','al222010211@gmail.com','aiom','CLIENTE',1,'2022-10-13 09:13:26','2022-10-13 09:13:26'),
(9,'222010245','Israel','Ruiz','Ozo;os','2002-06-05','masculino','ISRAEL.jpg','al222010245@gmail.com','aiom','EMPLEADO',1,'2022-10-13 09:13:26','2022-10-13 09:13:26'),
(11,'222010222','Juan','Jesus','Flores','2002-06-05','masculino','JUAN.jpg','al222010222@gmail.com','aiom','EMPLEADO',1,'2022-10-13 09:13:26','2022-10-13 09:13:26'),
(13,'222010245','Raymundo','Peñaloza','Franco','1995-05-04','masculino','RAY.jpg','al222010245@gmail.com','aiom','GERENTE',1,'2022-10-13 09:13:26','2022-10-13 09:13:26'),
(14,'222010289','Lia','Salas','Gomez','2002-04-02','masculino','LIA.jpg','al222010289@gmail.com','aiom','EMPLEADO',1,'2022-10-13 09:13:26','2022-10-13 09:13:26'),
(15,'222010223','Pablo','Segundo','Evangelista','2002-06-05','masculino','PABLO.jpg','al222010223@gmail.com','aiom','CLIENTE',1,'2022-10-13 09:13:26','2022-10-13 09:13:26'),
(27,'222010230','MIGUEL EMMANUEL','ARRIOLA','ORTEGA','2002-06-05','Masculino','gear.jpg','al222010230@gmail.com','gallobruijin','ADMINISTRADOR',1,'2022-10-20 04:04:19','2022-10-20 04:04:19'),
(28,'22201102304453','ALAN','MACARIO','ROSALES','2001-06-05','Masculino','inglesargenta.jpg','al222011@gmail.com','uesrhgnibknjx','EMPLEADO',1,'2022-10-20 04:05:25','2022-10-20 04:05:25'),
(29,'113546835874','AMERICA','CRUZ','CALZADA','2000-08-05','Femenino',NULL,'al45134816341@gmail.com','esgkryvb','GERENTE',1,'2022-10-20 04:06:15','2022-10-20 04:06:15');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
