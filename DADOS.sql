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
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8;

-- Dumping data for table labbd.acos: ~83 rows (approximately)
/*!40000 ALTER TABLE `acos` DISABLE KEYS */;
INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
	(1, NULL, NULL, NULL, 'controllers', 1, 166),
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
	(19, 1, NULL, NULL, 'Areas', 36, 47),
	(20, 19, NULL, NULL, 'index', 37, 38),
	(21, 19, NULL, NULL, 'view', 39, 40),
	(22, 19, NULL, NULL, 'add', 41, 42),
	(23, 19, NULL, NULL, 'edit', 43, 44),
	(24, 19, NULL, NULL, 'delete', 45, 46),
	(25, 1, NULL, NULL, 'Cursos', 48, 61),
	(26, 25, NULL, NULL, 'index', 49, 50),
	(27, 25, NULL, NULL, 'view', 51, 52),
	(28, 25, NULL, NULL, 'add', 53, 54),
	(29, 25, NULL, NULL, 'edit', 55, 56),
	(30, 25, NULL, NULL, 'delete', 57, 58),
	(31, 1, NULL, NULL, 'Aulas', 62, 73),
	(32, 31, NULL, NULL, 'index', 63, 64),
	(33, 31, NULL, NULL, 'view', 65, 66),
	(34, 31, NULL, NULL, 'nova_aula', 67, 68),
	(35, 31, NULL, NULL, 'edit', 69, 70),
	(36, 31, NULL, NULL, 'delete', 71, 72),
	(37, 25, NULL, NULL, 'iniciar_curso', 59, 60),
	(38, 1, NULL, NULL, 'Materials', 74, 87),
	(39, 38, NULL, NULL, 'index', 75, 76),
	(40, 38, NULL, NULL, 'view', 77, 78),
	(42, 38, NULL, NULL, 'edit', 79, 80),
	(43, 38, NULL, NULL, 'delete', 81, 82),
	(44, 1, NULL, NULL, 'Participas', 88, 99),
	(45, 44, NULL, NULL, 'index', 89, 90),
	(46, 44, NULL, NULL, 'view', 91, 92),
	(47, 44, NULL, NULL, 'add', 93, 94),
	(48, 44, NULL, NULL, 'edit', 95, 96),
	(49, 44, NULL, NULL, 'delete', 97, 98),
	(50, 38, NULL, NULL, 'novo_material', 83, 84),
	(51, 38, NULL, NULL, 'function_name', 85, 86),
	(52, 1, NULL, NULL, 'ArquivoSubidos', 100, 113),
	(53, 52, NULL, NULL, 'index', 101, 102),
	(54, 52, NULL, NULL, 'view', 103, 104),
	(55, 52, NULL, NULL, 'add', 105, 106),
	(56, 52, NULL, NULL, 'edit', 107, 108),
	(57, 52, NULL, NULL, 'delete', 109, 110),
	(58, 1, NULL, NULL, 'Textos', 114, 125),
	(59, 58, NULL, NULL, 'index', 115, 116),
	(60, 58, NULL, NULL, 'view', 117, 118),
	(61, 58, NULL, NULL, 'add', 119, 120),
	(62, 58, NULL, NULL, 'edit', 121, 122),
	(63, 58, NULL, NULL, 'delete', 123, 124),
	(64, 52, NULL, NULL, 'baixa_arquivo', 111, 112),
	(65, 1, NULL, NULL, 'ReferenciaExternas', 126, 137),
	(66, 65, NULL, NULL, 'index', 127, 128),
	(67, 65, NULL, NULL, 'view', 129, 130),
	(68, 65, NULL, NULL, 'add', 131, 132),
	(69, 65, NULL, NULL, 'edit', 133, 134),
	(70, 65, NULL, NULL, 'delete', 135, 136),
	(71, 1, NULL, NULL, 'Avaliacaos', 138, 149),
	(72, 71, NULL, NULL, 'index', 139, 140),
	(73, 71, NULL, NULL, 'view', 141, 142),
	(74, 71, NULL, NULL, 'add', 143, 144),
	(75, 71, NULL, NULL, 'edit', 145, 146),
	(76, 71, NULL, NULL, 'delete', 147, 148),
	(77, 1, NULL, NULL, 'Posts', 150, 165),
	(78, 77, NULL, NULL, 'index', 151, 152),
	(79, 77, NULL, NULL, 'view', 153, 154),
	(80, 77, NULL, NULL, 'add', 155, 156),
	(81, 77, NULL, NULL, 'edit', 157, 158),
	(82, 77, NULL, NULL, 'delete', 159, 160),
	(83, 77, NULL, NULL, 'forum', 161, 162),
	(84, 77, NULL, NULL, 'criar_topico', 163, 164);
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table labbd.areas: ~6 rows (approximately)
/*!40000 ALTER TABLE `areas` DISABLE KEYS */;
INSERT INTO `areas` (`id`, `titulo`, `e_subarea`, `criado_por`, `criado_em`) VALUES
	(1, 'Computação', NULL, 'pato', '2015-11-19 00:00:00'),
	(2, 'Filosofia', NULL, 'pato', '2015-11-19 00:00:00'),
	(3, 'Estruturas de Dados', 1, 'pato', '2015-11-19 00:00:00'),
	(4, 'Otimização', 1, 'pato', '2015-11-19 00:00:00'),
	(5, 'Banco de Dados', 1, 'pato', '2015-11-19 00:00:00'),
	(6, 'Filos moderna', 2, 'pato', '2015-11-28 00:00:00');
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table labbd.aros: ~1 rows (approximately)
/*!40000 ALTER TABLE `aros` DISABLE KEYS */;
INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
	(1, NULL, 'Group', 1, 'admin', 1, 2);
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table labbd.aros_acos: ~1 rows (approximately)
/*!40000 ALTER TABLE `aros_acos` DISABLE KEYS */;
INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
	(1, 1, 1, '1', '1', '1', '1');
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table labbd.arquivo_subidos: ~5 rows (approximately)
/*!40000 ALTER TABLE `arquivo_subidos` DISABLE KEYS */;
INSERT INTO `arquivo_subidos` (`id`, `material_id`, `user_id`, `path`) VALUES
	(1, 3, 1, 'ijsdnjisdb'),
	(3, 4, 1, 'grghjklljhfgd'),
	(4, 5, 1, '/tmp/phpSXN5RT'),
	(5, 6, 1, '/tmp/phpUMTlSO'),
	(6, 7, 1, '/tmp/phpmc5P7D');
/*!40000 ALTER TABLE `arquivo_subidos` ENABLE KEYS */;


-- Dumping structure for table labbd.aulas
CREATE TABLE IF NOT EXISTS `aulas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(256) DEFAULT NULL,
  `curso_pertencente` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `curso_pertencente` (`curso_pertencente`),
  CONSTRAINT `aula_fk1` FOREIGN KEY (`curso_pertencente`) REFERENCES `cursos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table labbd.aulas: ~5 rows (approximately)
/*!40000 ALTER TABLE `aulas` DISABLE KEYS */;
INSERT INTO `aulas` (`id`, `titulo`, `curso_pertencente`) VALUES
	(1, 'Aula 1: Conceitos básicos', 2),
	(2, 'Aula 2: SQL', 2),
	(3, 'Aula 3: Queries', 2),
	(4, 'Aula 1: Blá', 6),
	(5, 'ha', 1);
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table labbd.avaliacaos: ~2 rows (approximately)
/*!40000 ALTER TABLE `avaliacaos` DISABLE KEYS */;
INSERT INTO `avaliacaos` (`id`, `user_id`, `aula_id`, `nota`) VALUES
	(1, 1, 1, 123),
	(2, 1, 1, 9);
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
  CONSTRAINT `FK_cursos_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `FK_cursos_areas` FOREIGN KEY (`area_pertencente`) REFERENCES `areas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Dumping data for table labbd.cursos: ~7 rows (approximately)
/*!40000 ALTER TABLE `cursos` DISABLE KEYS */;
INSERT INTO `cursos` (`id`, `titulo`, `descricao`, `publicado`, `data_inicio`, `user_id`, `area_pertencente`) VALUES
	(1, 'Listas, Árvores e Grafos', 'Visão aprofundada de estruturas de dados como listas ligadas, árvores rubro-negras, grafos, digrafos, etc..', 1, '2015-11-19', 1, 3),
	(2, 'Introdução a Banco de Dados', 'Intro a bds ', 1, '2015-11-19', 1, 5),
	(3, 'Tópicos Avançados em Bancos de Dados', 'Tópicos Avançados em Bancos de Dados', 0, '2015-11-19', 1, 5),
	(4, 'Laboratório de Banco de Dados', 'Approach hands on', 0, '2015-11-19', 1, 5),
	(5, 'Introdução a Computação', 'Conceitos básicos de programação e computadores', 0, '2015-11-20', 1, 1),
	(6, 'Intro a filo moderna', 'Aprender uns treco', 0, '2015-11-28', 1, 6),
	(7, 'Teste', 'asfdg', 0, '2015-11-28', 1, 1);
/*!40000 ALTER TABLE `cursos` ENABLE KEYS */;


-- Dumping structure for table labbd.groups
CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table labbd.groups: ~1 rows (approximately)
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` (`id`, `name`, `created`, `modified`) VALUES
	(1, 'admin', '2015-11-19 12:58:14', '2015-11-19 12:58:14');
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Dumping data for table labbd.materials: ~10 rows (approximately)
/*!40000 ALTER TABLE `materials` DISABLE KEYS */;
INSERT INTO `materials` (`id`, `data_criacao`, `aula_id`, `uploader_id`) VALUES
	(1, '2015-11-28', 1, 1),
	(2, '2015-11-28', 1, 1),
	(3, '0000-00-00', 2, 1),
	(4, '0000-00-00', 3, 5),
	(5, '0000-00-00', 1, 1),
	(6, '0000-00-00', 1, 1),
	(7, '0000-00-00', 3, 1),
	(8, '0000-00-00', 1, 1),
	(9, '0000-00-00', 1, 1),
	(10, '2015-11-28', 5, 1);
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
  CONSTRAINT `FK_participas_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `FK_participas_cursos` FOREIGN KEY (`curso_id`) REFERENCES `cursos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table labbd.participas: ~1 rows (approximately)
/*!40000 ALTER TABLE `participas` DISABLE KEYS */;
INSERT INTO `participas` (`id`, `user_id`, `curso_id`, `permissao`, `data_inicio`) VALUES
	(3, 4, 2, 1, '2015-11-28');
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table labbd.posts: ~0 rows (approximately)
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` (`id`, `user_id`, `aula_id`, `curso_id`, `texto`, `created`, `em_resposta_a`, `titulo`) VALUES
	(1, 1, 1, 1, 'ascninef sn goiaj efaj wesvn weanv e', '2015-11-28', NULL, 'TESTE'),
	(2, 1, 1, 1, 'sndmtykdhspod m', '2015-11-28', NULL, 'sefdg'),
	(3, 1, NULL, 1, 's ofnbdo ng', '2015-11-28', NULL, '9834h vguhg'),
	(4, 1, 5, NULL, 'tynghmg', '2015-11-28', NULL, '45y4h65h'),
	(5, 1, 5, NULL, 'nverjtne', '2015-11-28', NULL, 'oiegjv9en');
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table labbd.referencia_externas: ~2 rows (approximately)
/*!40000 ALTER TABLE `referencia_externas` DISABLE KEYS */;
INSERT INTO `referencia_externas` (`id`, `material_id`, `link`, `user_id`) VALUES
	(1, 8, 'www.youtube.com', 1),
	(2, 9, 'www.google.com', 1);
/*!40000 ALTER TABLE `referencia_externas` ENABLE KEYS */;


-- Dumping structure for table labbd.textos
CREATE TABLE IF NOT EXISTS `textos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `material_id` int(11) NOT NULL,
  `conteudo` text,
  PRIMARY KEY (`id`),
  KEY `material_id` (`material_id`),
  CONSTRAINT `FK1_textos_materials` FOREIGN KEY (`material_id`) REFERENCES `materials` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table labbd.textos: ~3 rows (approximately)
/*!40000 ALTER TABLE `textos` DISABLE KEYS */;
INSERT INTO `textos` (`id`, `material_id`, `conteudo`) VALUES
	(1, 1, 'afsgdfg'),
	(2, 2, 'Texto 2 pra teste'),
	(3, 10, 'adsfadsf');
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table labbd.users: ~5 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `password`, `group_id`, `created`, `modified`) VALUES
	(1, 'pato', '2b0387ad420847e569937caa27907963417976a1', 1, '2015-11-19 12:58:22', '2015-11-19 12:58:22'),
	(2, 'ze', '23e4214e28cb6470cb40ca1cd38d245c23214625', 1, '2015-11-19 18:06:21', '2015-11-19 18:06:42'),
	(3, 'bruno', '6a72977770c56d6a3a776d0d4b0ccdc032b7f65c', 1, '2015-11-19 18:06:29', '2015-11-19 18:07:00'),
	(4, 'guto', 'f5a6388a52531b94a506e65950c3f2ef6c0f94c7', 1, '2015-11-19 18:07:08', '2015-11-19 18:07:08'),
	(5, 'danilo', '81331c862f2337c924ea58de002b0dae75006e77', 1, '2015-11-19 18:07:17', '2015-11-19 18:07:17');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;


-- Dumping structure for view labbd.v1
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `v1` (
	`material_id` INT(11) NOT NULL,
	`texto_id` INT(11) NULL,
	`arq_id` INT(11) NULL,
	`conteudo` TEXT NULL COLLATE 'utf8_general_ci',
	`path` VARCHAR(512) NULL COLLATE 'utf8_general_ci'
) ENGINE=MyISAM;


-- Dumping structure for view labbd.lista_materiais
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `lista_materiais`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `lista_materiais` AS select `ts`.`material_id` AS `material_id`,`ts`.`texto_id` AS `texto_id`,`ts`.`arq_id` AS `arq_id`,`ts`.`conteudo` AS `conteudo`,`r`.`link` AS `link`,`ts`.`path` AS `path`,`r`.`id` AS `ref_id` from (`v1` `ts` left join `referencia_externas` `r` on((`ts`.`material_id` = `r`.`material_id`))) union select `r`.`material_id` AS `material_id`,`ts`.`texto_id` AS `texto_id`,`ts`.`arq_id` AS `arq_id`,`ts`.`conteudo` AS `conteudo`,`r`.`link` AS `link`,`ts`.`path` AS `path`,`r`.`id` AS `ref_id` from (`referencia_externas` `r` left join `v1` `ts` on((`ts`.`material_id` = `r`.`material_id`)));


-- Dumping structure for view labbd.media_aulas
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `media_aulas`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `media_aulas` AS select `avaliacaos`.`aula_id` AS `aula_id`,avg(`avaliacaos`.`nota`) AS `media_nota` from `avaliacaos` group by `avaliacaos`.`aula_id`;


-- Dumping structure for view labbd.v1
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `v1`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v1` AS select `t`.`material_id` AS `material_id`,`t`.`id` AS `texto_id`,`s`.`id` AS `arq_id`,`t`.`conteudo` AS `conteudo`,`s`.`path` AS `path` from (`textos` `t` left join `arquivo_subidos` `s` on((`t`.`material_id` = `s`.`material_id`))) union select `s`.`material_id` AS `material_id`,`t`.`id` AS `texto_id`,`s`.`id` AS `arq_id`,`t`.`conteudo` AS `conteudo`,`s`.`path` AS `path` from (`arquivo_subidos` `s` left join `textos` `t` on((`t`.`material_id` = `s`.`material_id`)));
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
