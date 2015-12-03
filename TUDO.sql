-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.46-0ubuntu0.14.04.2 - (Ubuntu)
-- Server OS:                    debian-linux-gnu
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table labbd.acos
CREATE TABLE IF NOT EXISTS `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_acos_lft_rght` (`lft`,`rght`),
  KEY `idx_acos_alias` (`alias`)
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=utf8;

-- Dumping data for table labbd.acos: ~84 rows (approximately)
/*!40000 ALTER TABLE `acos` DISABLE KEYS */;
INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
	(1, NULL, NULL, NULL, 'controllers', 1, 168),
	(2, 1, NULL, NULL, 'Groups', 2, 13),
	(3, 2, NULL, NULL, 'index', 3, 4),
	(4, 2, NULL, NULL, 'view', 5, 6),
	(5, 2, NULL, NULL, 'add', 7, 8),
	(6, 2, NULL, NULL, 'edit', 9, 10),
	(7, 2, NULL, NULL, 'delete', 11, 12),
	(8, 1, NULL, NULL, 'Pages', 14, 17),
	(9, 8, NULL, NULL, 'display', 15, 16),
	(10, 1, NULL, NULL, 'Users', 18, 33),
	(11, 10, NULL, NULL, 'login', 19, 20),
	(12, 10, NULL, NULL, 'logout', 21, 22),
	(13, 10, NULL, NULL, 'index', 23, 24),
	(14, 10, NULL, NULL, 'view', 25, 26),
	(15, 10, NULL, NULL, 'add', 27, 28),
	(16, 10, NULL, NULL, 'edit', 29, 30),
	(17, 10, NULL, NULL, 'delete', 31, 32),
	(18, 1, NULL, NULL, 'AclExtras', 34, 35),
	(19, 1, NULL, NULL, 'Areas', 36, 49),
	(20, 19, NULL, NULL, 'index', 37, 38),
	(21, 19, NULL, NULL, 'view', 39, 40),
	(22, 19, NULL, NULL, 'add', 41, 42),
	(23, 19, NULL, NULL, 'edit', 43, 44),
	(24, 19, NULL, NULL, 'delete', 45, 46),
	(25, 1, NULL, NULL, 'Cursos', 50, 63),
	(26, 25, NULL, NULL, 'index', 51, 52),
	(27, 25, NULL, NULL, 'view', 53, 54),
	(28, 25, NULL, NULL, 'add', 55, 56),
	(29, 25, NULL, NULL, 'edit', 57, 58),
	(30, 25, NULL, NULL, 'delete', 59, 60),
	(31, 1, NULL, NULL, 'Aulas', 64, 75),
	(32, 31, NULL, NULL, 'index', 65, 66),
	(33, 31, NULL, NULL, 'view', 67, 68),
	(34, 31, NULL, NULL, 'nova_aula', 69, 70),
	(35, 31, NULL, NULL, 'edit', 71, 72),
	(36, 31, NULL, NULL, 'delete', 73, 74),
	(37, 25, NULL, NULL, 'iniciar_curso', 61, 62),
	(38, 1, NULL, NULL, 'Materials', 76, 89),
	(39, 38, NULL, NULL, 'index', 77, 78),
	(40, 38, NULL, NULL, 'view', 79, 80),
	(42, 38, NULL, NULL, 'edit', 81, 82),
	(43, 38, NULL, NULL, 'delete', 83, 84),
	(44, 1, NULL, NULL, 'Participas', 90, 101),
	(45, 44, NULL, NULL, 'index', 91, 92),
	(46, 44, NULL, NULL, 'view', 93, 94),
	(47, 44, NULL, NULL, 'add', 95, 96),
	(48, 44, NULL, NULL, 'edit', 97, 98),
	(49, 44, NULL, NULL, 'delete', 99, 100),
	(50, 38, NULL, NULL, 'novo_material', 85, 86),
	(51, 38, NULL, NULL, 'function_name', 87, 88),
	(52, 1, NULL, NULL, 'ArquivoSubidos', 102, 115),
	(53, 52, NULL, NULL, 'index', 103, 104),
	(54, 52, NULL, NULL, 'view', 105, 106),
	(55, 52, NULL, NULL, 'add', 107, 108),
	(56, 52, NULL, NULL, 'edit', 109, 110),
	(57, 52, NULL, NULL, 'delete', 111, 112),
	(58, 1, NULL, NULL, 'Textos', 116, 127),
	(59, 58, NULL, NULL, 'index', 117, 118),
	(60, 58, NULL, NULL, 'view', 119, 120),
	(61, 58, NULL, NULL, 'add', 121, 122),
	(62, 58, NULL, NULL, 'edit', 123, 124),
	(63, 58, NULL, NULL, 'delete', 125, 126),
	(64, 52, NULL, NULL, 'baixa_arquivo', 113, 114),
	(65, 1, NULL, NULL, 'ReferenciaExternas', 128, 139),
	(66, 65, NULL, NULL, 'index', 129, 130),
	(67, 65, NULL, NULL, 'view', 131, 132),
	(68, 65, NULL, NULL, 'add', 133, 134),
	(69, 65, NULL, NULL, 'edit', 135, 136),
	(70, 65, NULL, NULL, 'delete', 137, 138),
	(71, 1, NULL, NULL, 'Avaliacaos', 140, 151),
	(72, 71, NULL, NULL, 'index', 141, 142),
	(73, 71, NULL, NULL, 'view', 143, 144),
	(74, 71, NULL, NULL, 'add', 145, 146),
	(75, 71, NULL, NULL, 'edit', 147, 148),
	(76, 71, NULL, NULL, 'delete', 149, 150),
	(77, 1, NULL, NULL, 'Posts', 152, 167),
	(78, 77, NULL, NULL, 'index', 153, 154),
	(79, 77, NULL, NULL, 'view', 155, 156),
	(80, 77, NULL, NULL, 'add', 157, 158),
	(81, 77, NULL, NULL, 'edit', 159, 160),
	(82, 77, NULL, NULL, 'delete', 161, 162),
	(83, 77, NULL, NULL, 'forum', 163, 164),
	(84, 77, NULL, NULL, 'criar_topico', 165, 166),
	(85, 19, NULL, NULL, 'criar_subarea', 47, 48);
/*!40000 ALTER TABLE `acos` ENABLE KEYS */;


-- Dumping structure for table labbd.areas
CREATE TABLE IF NOT EXISTS `areas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(128) NOT NULL,
  `e_subarea` int(11) DEFAULT '0',
  `criado_por` varchar(255) NOT NULL,
  `criado_em` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `e_subarea` (`e_subarea`),
  KEY `criado_por` (`criado_por`),
  CONSTRAINT `FK_areas_areas` FOREIGN KEY (`e_subarea`) REFERENCES `areas` (`id`),
  CONSTRAINT `FK_areas_users` FOREIGN KEY (`criado_por`) REFERENCES `users` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table labbd.areas: ~2 rows (approximately)
/*!40000 ALTER TABLE `areas` DISABLE KEYS */;
INSERT INTO `areas` (`id`, `titulo`, `e_subarea`, `criado_por`, `criado_em`) VALUES
	(1, 'Computação', NULL, 'pato', '2015-12-02 00:00:00'),
	(2, 'bd', 1, 'pato', '2015-12-03 00:00:00');
/*!40000 ALTER TABLE `areas` ENABLE KEYS */;


-- Dumping structure for table labbd.aros
CREATE TABLE IF NOT EXISTS `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_aros_lft_rght` (`lft`,`rght`),
  KEY `idx_aros_alias` (`alias`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table labbd.aros: ~2 rows (approximately)
/*!40000 ALTER TABLE `aros` DISABLE KEYS */;
INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
	(1, NULL, 'Group', 1, 'admin', 1, 2),
	(2, NULL, 'Group', 2, 'ext', 3, 4);
/*!40000 ALTER TABLE `aros` ENABLE KEYS */;


-- Dumping structure for table labbd.aros_acos
CREATE TABLE IF NOT EXISTS `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`),
  KEY `idx_aco_id` (`aco_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Dumping data for table labbd.aros_acos: ~7 rows (approximately)
/*!40000 ALTER TABLE `aros_acos` DISABLE KEYS */;
INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
	(1, 1, 1, '1', '1', '1', '1'),
	(2, 2, 20, '1', '1', '1', '1'),
	(3, 2, 21, '1', '1', '1', '1'),
	(4, 2, 26, '1', '1', '1', '1'),
	(5, 2, 25, '1', '1', '1', '1'),
	(6, 2, 31, '1', '1', '1', '1'),
	(7, 2, 1, '1', '1', '1', '1');
/*!40000 ALTER TABLE `aros_acos` ENABLE KEYS */;


-- Dumping structure for table labbd.arquivo_subidos
CREATE TABLE IF NOT EXISTS `arquivo_subidos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `material_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `path` varchar(512) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `material_id` (`material_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `arq_fk1` FOREIGN KEY (`material_id`) REFERENCES `materials` (`id`),
  CONSTRAINT `arq_fk2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table labbd.arquivo_subidos: ~1 rows (approximately)
/*!40000 ALTER TABLE `arquivo_subidos` DISABLE KEYS */;
INSERT INTO `arquivo_subidos` (`id`, `material_id`, `user_id`, `path`) VALUES
	(1, 2, 1, '/tmp/phpGuVSpX');
/*!40000 ALTER TABLE `arquivo_subidos` ENABLE KEYS */;


-- Dumping structure for table labbd.aulas
CREATE TABLE IF NOT EXISTS `aulas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(256) DEFAULT NULL,
  `curso_pertencente` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `curso_pertencente` (`curso_pertencente`),
  CONSTRAINT `aula_fk1` FOREIGN KEY (`curso_pertencente`) REFERENCES `cursos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Dumping data for table labbd.aulas: ~4 rows (approximately)
/*!40000 ALTER TABLE `aulas` DISABLE KEYS */;
INSERT INTO `aulas` (`id`, `titulo`, `curso_pertencente`) VALUES
	(1, 'aula 1', 1),
	(2, 'aula 2', 1),
	(3, 'aula 3', 1),
	(4, '1', 2);
/*!40000 ALTER TABLE `aulas` ENABLE KEYS */;


-- Dumping structure for table labbd.avaliacaos
CREATE TABLE IF NOT EXISTS `avaliacaos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `aula_id` int(11) NOT NULL,
  `nota` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `aula_id` (`aula_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `avaliou_fk1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `avaliou_fk2` FOREIGN KEY (`aula_id`) REFERENCES `aulas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table labbd.avaliacaos: ~1 rows (approximately)
/*!40000 ALTER TABLE `avaliacaos` DISABLE KEYS */;
INSERT INTO `avaliacaos` (`id`, `user_id`, `aula_id`, `nota`) VALUES
	(1, 1, 1, 10);
/*!40000 ALTER TABLE `avaliacaos` ENABLE KEYS */;


-- Dumping structure for table labbd.cursos
CREATE TABLE IF NOT EXISTS `cursos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(256) NOT NULL,
  `descricao` text,
  `publicado` tinyint(1) NOT NULL DEFAULT '0',
  `data_inicio` date DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `area_pertencente` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `area_pertencente` (`area_pertencente`),
  KEY `FK_cursos_users` (`user_id`),
  CONSTRAINT `FK_cursos_areas` FOREIGN KEY (`area_pertencente`) REFERENCES `areas` (`id`),
  CONSTRAINT `FK_cursos_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table labbd.cursos: ~2 rows (approximately)
/*!40000 ALTER TABLE `cursos` DISABLE KEYS */;
INSERT INTO `cursos` (`id`, `titulo`, `descricao`, `publicado`, `data_inicio`, `user_id`, `area_pertencente`) VALUES
	(1, 'lab bd', '', 0, NULL, 1, 1),
	(2, 'Introdução a Banco de Dados', 'sdfm,', 1, NULL, 1, 2);
/*!40000 ALTER TABLE `cursos` ENABLE KEYS */;


-- Dumping structure for table labbd.groups
CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table labbd.groups: ~2 rows (approximately)
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` (`id`, `name`, `created`, `modified`) VALUES
	(1, 'admin', '2015-11-19 12:58:14', '2015-11-19 12:58:14'),
	(2, 'Externo', '2015-12-02 02:20:27', '2015-12-02 02:20:27');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;


-- Dumping structure for view labbd.lista_materiais
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `lista_materiais` (
	`material_id` INT(11) NOT NULL,
	`texto_id` INT(11) NULL,
	`arq_id` INT(11) NULL,
	`conteudo` TEXT NULL COLLATE 'utf8_general_ci',
	`link` VARCHAR(512) NULL COLLATE 'utf8_general_ci',
	`path` VARCHAR(512) NULL COLLATE 'utf8_general_ci',
	`ref_id` INT(11) NULL
) ENGINE=MyISAM;


-- Dumping structure for table labbd.materials
CREATE TABLE IF NOT EXISTS `materials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data_criacao` date NOT NULL,
  `aula_id` int(11) NOT NULL,
  `uploader_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `aula_id` (`aula_id`),
  KEY `uploader_email` (`uploader_id`),
  CONSTRAINT `FK1` FOREIGN KEY (`uploader_id`) REFERENCES `users` (`id`),
  CONSTRAINT `material_fk2` FOREIGN KEY (`aula_id`) REFERENCES `aulas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table labbd.materials: ~3 rows (approximately)
/*!40000 ALTER TABLE `materials` DISABLE KEYS */;
INSERT INTO `materials` (`id`, `data_criacao`, `aula_id`, `uploader_id`) VALUES
	(1, '2015-12-02', 1, 1),
	(2, '0000-00-00', 1, 1),
	(3, '0000-00-00', 1, 1);
/*!40000 ALTER TABLE `materials` ENABLE KEYS */;


-- Dumping structure for view labbd.media_aulas
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `media_aulas` (
	`aula_id` INT(11) NOT NULL,
	`media_nota` DECIMAL(14,4) NULL
) ENGINE=MyISAM;


-- Dumping structure for table labbd.participas
CREATE TABLE IF NOT EXISTS `participas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `curso_id` int(11) NOT NULL,
  `permissao` int(2) DEFAULT NULL,
  `data_inicio` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `curso_id` (`curso_id`),
  CONSTRAINT `FK_participas_cursos` FOREIGN KEY (`curso_id`) REFERENCES `cursos` (`id`),
  CONSTRAINT `FK_participas_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table labbd.participas: ~2 rows (approximately)
/*!40000 ALTER TABLE `participas` DISABLE KEYS */;
INSERT INTO `participas` (`id`, `user_id`, `curso_id`, `permissao`, `data_inicio`) VALUES
	(1, 3, 1, 1, '2015-12-02'),
	(2, 3, 1, 1, '2015-12-02');
/*!40000 ALTER TABLE `participas` ENABLE KEYS */;


-- Dumping structure for table labbd.posts
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `aula_id` int(11) DEFAULT NULL,
  `curso_id` int(11) DEFAULT NULL,
  `texto` text,
  `created` date DEFAULT NULL,
  `em_resposta_a` int(11) DEFAULT NULL,
  `titulo` text,
  PRIMARY KEY (`id`),
  KEY `aula_id` (`aula_id`),
  KEY `user_id` (`user_id`),
  KEY `curso_id` (`curso_id`),
  CONSTRAINT `post_fk1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `post_fk2` FOREIGN KEY (`aula_id`) REFERENCES `aulas` (`id`),
  CONSTRAINT `post_fk3` FOREIGN KEY (`curso_id`) REFERENCES `cursos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Dumping data for table labbd.posts: ~10 rows (approximately)
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` (`id`, `user_id`, `aula_id`, `curso_id`, `texto`, `created`, `em_resposta_a`, `titulo`) VALUES
	(1, 1, 1, NULL, 'jndfosfon', '2015-12-02', NULL, 'duvida'),
	(2, 1, 1, NULL, 'afksd', '2015-12-02', 1, NULL),
	(3, 1, 1, NULL, 'aidsnfgblfmg', '2015-12-02', 1, NULL),
	(4, 1, 1, NULL, 'dnsfgp', '2015-12-02', 1, NULL),
	(5, 3, 1, NULL, 'sodjflns', '2015-12-02', 1, NULL),
	(6, 1, 4, NULL, 'f', '2015-12-03', NULL, 'dsfg'),
	(7, 1, 4, NULL, '', '2015-12-03', NULL, 'teste2'),
	(8, 1, 4, NULL, 'sadjk', '2015-12-03', 7, NULL),
	(9, 1, 4, NULL, 'asdtjkliuijryj', '2015-12-03', 7, NULL),
	(10, 1, 4, NULL, 'sghjfj', '2015-12-03', 7, NULL);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;


-- Dumping structure for table labbd.referencia_externas
CREATE TABLE IF NOT EXISTS `referencia_externas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `material_id` int(11) NOT NULL,
  `link` varchar(512) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `material_id` (`material_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `ref_fk1` FOREIGN KEY (`material_id`) REFERENCES `materials` (`id`),
  CONSTRAINT `ref_fk2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table labbd.referencia_externas: ~1 rows (approximately)
/*!40000 ALTER TABLE `referencia_externas` DISABLE KEYS */;
INSERT INTO `referencia_externas` (`id`, `material_id`, `link`, `user_id`) VALUES
	(1, 3, 'www.google.com', 1);
/*!40000 ALTER TABLE `referencia_externas` ENABLE KEYS */;


-- Dumping structure for table labbd.textos
CREATE TABLE IF NOT EXISTS `textos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `material_id` int(11) NOT NULL,
  `conteudo` text,
  PRIMARY KEY (`id`),
  KEY `material_id` (`material_id`),
  CONSTRAINT `FK1_textos_materials` FOREIGN KEY (`material_id`) REFERENCES `materials` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table labbd.textos: ~1 rows (approximately)
/*!40000 ALTER TABLE `textos` DISABLE KEYS */;
INSERT INTO `textos` (`id`, `material_id`, `conteudo`) VALUES
	(1, 1, ' `Aco0`.`lft` AND `Aco1`.`id` = `Aco2`.`parent_id` AND `Aco2`.`rght` < `Aco1`.`rght` AND `Aco2`.`lft` > `Aco1`.`lft` ORDER BY `Aco`.`lft` DESC		3	3	0\r\n3	SELECT `Permission`.`id`, `Permission`.`aro_id`, `Permission`.`aco_id`, `Permission`.`_create`, `Permission`.`_read`, `Permission`.`_update`, `Permission`.`_delete`, `Aro`.`id`, `Aro`.`parent_id`, `Aro`.`model`, `Aro`.`foreign_key`, `Aro`.`alias`, `Aro`.`lft`, `Aro`.`rght`, `Aco`.`id`, `Aco`.`parent_id`, `Aco`.`model`, `Aco`.`foreign_key`, `Aco`.`alias`, `Aco`.`lft`, `Aco`.`rght` FROM `labbd`.`aros_acos` AS `Permission` LEFT JOIN `labbd`.`aros` AS `Aro` ON (`Permission`.`aro_id` = `Aro`.`id`) LEFT JOIN `labbd`.`acos` AS `Aco` ON (`Permissio');
/*!40000 ALTER TABLE `textos` ENABLE KEYS */;


-- Dumping structure for table labbd.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` char(40) NOT NULL,
  `group_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table labbd.users: ~6 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `password`, `group_id`, `created`, `modified`) VALUES
	(1, 'pato', '2b0387ad420847e569937caa27907963417976a1', 1, '2015-11-19 12:58:22', '2015-11-19 12:58:22'),
	(2, 'ze', '23e4214e28cb6470cb40ca1cd38d245c23214625', 1, '2015-11-19 18:06:21', '2015-11-19 18:06:42'),
	(3, 'bruno', '6a72977770c56d6a3a776d0d4b0ccdc032b7f65c', 1, '2015-11-19 18:06:29', '2015-11-19 18:07:00'),
	(4, 'guto', 'f5a6388a52531b94a506e65950c3f2ef6c0f94c7', 1, '2015-11-19 18:07:08', '2015-11-19 18:07:08'),
	(5, 'danilo', '81331c862f2337c924ea58de002b0dae75006e77', 1, '2015-11-19 18:07:17', '2015-11-19 18:07:17'),
	(6, 'externo', 'df35ba53425e4b81bb03bb8b3832d8fac5fece87', 2, '2015-12-02 02:20:37', '2015-12-02 02:20:37');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;


-- Dumping structure for view labbd.v1
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `v1`;
CREATE VIEW `v1` AS select `t`.`material_id` AS `material_id`,`t`.`id` AS `texto_id`,`s`.`id` AS `arq_id`,`t`.`conteudo` AS `conteudo`,`s`.`path` AS `path` from (`textos` `t` left join `arquivo_subidos` `s` on((`t`.`material_id` = `s`.`material_id`))) union select `s`.`material_id` AS `material_id`,`t`.`id` AS `texto_id`,`s`.`id` AS `arq_id`,`t`.`conteudo` AS `conteudo`,`s`.`path` AS `path` from (`arquivo_subidos` `s` left join `textos` `t` on((`t`.`material_id` = `s`.`material_id`)));


-- Dumping structure for view labbd.lista_materiais
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `lista_materiais`;
CREATE VIEW `lista_materiais` AS select `ts`.`material_id` AS `material_id`,`ts`.`texto_id` AS `texto_id`,`ts`.`arq_id` AS `arq_id`,`ts`.`conteudo` AS `conteudo`,`r`.`link` AS `link`,`ts`.`path` AS `path`,`r`.`id` AS `ref_id` from (`v1` `ts` left join `referencia_externas` `r` on((`ts`.`material_id` = `r`.`material_id`))) union select `r`.`material_id` AS `material_id`,`ts`.`texto_id` AS `texto_id`,`ts`.`arq_id` AS `arq_id`,`ts`.`conteudo` AS `conteudo`,`r`.`link` AS `link`,`ts`.`path` AS `path`,`r`.`id` AS `ref_id` from (`referencia_externas` `r` left join `v1` `ts` on((`ts`.`material_id` = `r`.`material_id`)));


-- Dumping structure for view labbd.media_aulas
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `media_aulas`;
CREATE VIEW `media_aulas` AS select `avaliacaos`.`aula_id` AS `aula_id`,avg(`avaliacaos`.`nota`) AS `media_nota` from `avaliacaos` group by `avaliacaos`.`aula_id`;


