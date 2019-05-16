-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.0.13 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para gincanaci
DROP DATABASE IF EXISTS `gincanaci`;
CREATE DATABASE IF NOT EXISTS `gincanaci` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;
USE `gincanaci`;

-- Copiando estrutura para tabela gincanaci.ci_sessions
DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(128) COLLATE utf8_bin NOT NULL,
  `ip_address` varchar(45) COLLATE utf8_bin NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Copiando dados para a tabela gincanaci.ci_sessions: ~15 rows (aproximadamente)
DELETE FROM `ci_sessions`;
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
	('bemsaohribe1qha460b3qgk47and509n', '127.0.0.1', 1557961386, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313535373936313338363B69645573756172696F7C733A313A2231223B656D61696C7C733A31343A2261646D696E4073656E61632E6272223B6C6F6761646F7C623A313B),
	('qvh6s25rp376n68p7gs200343a3v0vkl', '127.0.0.1', 1557961756, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313535373936313735363B69645573756172696F7C733A313A2231223B656D61696C7C733A31343A2261646D696E4073656E61632E6272223B6C6F6761646F7C623A313B),
	('3rmkpnjfa6chkrioabsodvks2q8g9bsi', '127.0.0.1', 1557962072, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313535373936323037323B69645573756172696F7C733A313A2231223B656D61696C7C733A31343A2261646D696E4073656E61632E6272223B6C6F6761646F7C623A313B),
	('8hh67b3b7kp75fpa6ith9jokvknrvdkf', '127.0.0.1', 1557962504, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313535373936323530343B69645573756172696F7C733A313A2231223B656D61696C7C733A31343A2261646D696E4073656E61632E6272223B6C6F6761646F7C623A313B),
	('njudbe4id1sn5qjvnl5t0kgphdii1sj0', '127.0.0.1', 1557963197, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313535373936333139373B69645573756172696F7C733A313A2231223B656D61696C7C733A31343A2261646D696E4073656E61632E6272223B6C6F6761646F7C623A313B),
	('on0kgutqg07uh9s1osmu4dvgs94vgoim', '127.0.0.1', 1557963720, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313535373936333732303B69645573756172696F7C733A313A2231223B656D61696C7C733A31343A2261646D696E4073656E61632E6272223B6C6F6761646F7C623A313B),
	('4ogaqbep7gj1dujhve6fbjci1kl13ngk', '127.0.0.1', 1557964076, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313535373936343037363B69645573756172696F7C733A313A2231223B656D61696C7C733A31343A2261646D696E4073656E61632E6272223B6C6F6761646F7C623A313B),
	('4a6496k6f43hlqh673n8t2oslklskqbt', '127.0.0.1', 1557964393, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313535373936343339333B69645573756172696F7C733A313A2231223B656D61696C7C733A31343A2261646D696E4073656E61632E6272223B6C6F6761646F7C623A313B),
	('i11l5cqkl3v844jomsmsd67j9vn5mfdr', '127.0.0.1', 1557964695, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313535373936343639353B69645573756172696F7C733A313A2231223B656D61696C7C733A31343A2261646D696E4073656E61632E6272223B6C6F6761646F7C623A313B),
	('2b9abfbr135l5elja1e6kaqih08uo8l8', '127.0.0.1', 1557965083, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313535373936353038333B69645573756172696F7C733A313A2231223B656D61696C7C733A31343A2261646D696E4073656E61632E6272223B6C6F6761646F7C623A313B),
	('cu26k6emuump7sjmpvktkuidjb08vmgk', '::1', 1557964762, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313535373936343736323B),
	('fmfmuv57pe0p9krbfmjfjncp9nung4mv', '127.0.0.1', 1557965428, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313535373936353432383B69645573756172696F7C733A313A2231223B656D61696C7C733A31343A2261646D696E4073656E61632E6272223B6C6F6761646F7C623A313B),
	('k942gqbhf14abl3m0bql5og6btqam58n', '127.0.0.1', 1557965741, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313535373936353734313B69645573756172696F7C733A313A2231223B656D61696C7C733A31343A2261646D696E4073656E61632E6272223B6C6F6761646F7C623A313B),
	('cq34slanig95u47s0trtdnnfupkkuon0', '127.0.0.1', 1557966043, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313535373936363034333B69645573756172696F7C733A313A2231223B656D61696C7C733A31343A2261646D696E4073656E61632E6272223B6C6F6761646F7C623A313B),
	('8if6k5plh9h9f2vpjml2egu37rc0mrna', '127.0.0.1', 1557966733, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313535373936363733333B),
	('643c29es47m4lm3pg01ihar3gcs2hhjn', '127.0.0.1', 1557967036, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313535373936373033363B69645573756172696F7C733A313A2231223B656D61696C7C733A31343A2261646D696E4073656E61632E6272223B6C6F6761646F7C623A313B),
	('vrf7p7oigrahfa7kmkpufcmsukkgk6tf', '::1', 1557966884, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313535373936363838343B),
	('u3720m8l49mp3ul74fuq5hrhc91fg5v1', '127.0.0.1', 1557967350, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313535373936373335303B69645573756172696F7C733A313A2231223B656D61696C7C733A31343A2261646D696E4073656E61632E6272223B6C6F6761646F7C623A313B),
	('o8hgqdl91elcogdsfon1i0ngaus6dr52', '127.0.0.1', 1557967668, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313535373936373636383B69645573756172696F7C733A313A2231223B656D61696C7C733A31343A2261646D696E4073656E61632E6272223B6E6F6D657C733A353A2241646D696E223B6C6F6761646F7C623A313B),
	('clcpr90ib0i6euu1q1k652dpmqltpir4', '127.0.0.1', 1557968211, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313535373936383231313B69645573756172696F7C733A313A2231223B656D61696C7C733A31343A2261646D696E4073656E61632E6272223B6E6F6D657C733A353A2241646D696E223B6C6F6761646F7C623A313B),
	('em2uvs9roo1oj9kgobl9qjvthvst26sq', '127.0.0.1', 1557968275, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313535373936383231353B69645573756172696F7C733A313A2234223B656D61696C7C733A31333A22757365724073656E61632E6272223B6E6F6D657C733A343A2255736572223B6C6F6761646F7C623A313B);
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;

-- Copiando estrutura para tabela gincanaci.equipes
DROP TABLE IF EXISTS `equipes`;
CREATE TABLE IF NOT EXISTS `equipes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Copiando dados para a tabela gincanaci.equipes: ~5 rows (aproximadamente)
DELETE FROM `equipes`;
/*!40000 ALTER TABLE `equipes` DISABLE KEYS */;
INSERT INTO `equipes` (`id`, `nome`) VALUES
	(28, 'Equipe4'),
	(29, 'Equipe1'),
	(30, 'Equipe2'),
	(31, 'Equipe3'),
	(32, 'Equipe5');
/*!40000 ALTER TABLE `equipes` ENABLE KEYS */;

-- Copiando estrutura para tabela gincanaci.integrantes
DROP TABLE IF EXISTS `integrantes`;
CREATE TABLE IF NOT EXISTS `integrantes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_equipe` int(11) NOT NULL,
  `nome` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `data_nasc` date DEFAULT NULL,
  `rg` varchar(11) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `cpf` varchar(14) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_integrante_equipe` (`id_equipe`),
  CONSTRAINT `fk_integrante_equipe` FOREIGN KEY (`id_equipe`) REFERENCES `equipes` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Copiando dados para a tabela gincanaci.integrantes: ~3 rows (aproximadamente)
DELETE FROM `integrantes`;
/*!40000 ALTER TABLE `integrantes` DISABLE KEYS */;
INSERT INTO `integrantes` (`id`, `id_equipe`, `nome`, `data_nasc`, `rg`, `cpf`) VALUES
	(10, 29, 'Atabanestor', '0000-00-00', '', ''),
	(12, 30, 'asdasd', '0000-00-00', '', ''),
	(13, 31, 'Patrick', '2019-05-20', '12', '654654');
/*!40000 ALTER TABLE `integrantes` ENABLE KEYS */;

-- Copiando estrutura para tabela gincanaci.pontuacao
DROP TABLE IF EXISTS `pontuacao`;
CREATE TABLE IF NOT EXISTS `pontuacao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_equipe` int(11) NOT NULL,
  `id_prova` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `pontos` float NOT NULL,
  `data_hora` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pontuacao_equipe` (`id_equipe`),
  KEY `fk_pontuacao_prova` (`id_prova`),
  KEY `fk_pontuacao_usuario` (`id_usuario`),
  CONSTRAINT `fk_pontuacao_equipe` FOREIGN KEY (`id_equipe`) REFERENCES `equipes` (`id`),
  CONSTRAINT `fk_pontuacao_prova` FOREIGN KEY (`id_prova`) REFERENCES `prova` (`id`),
  CONSTRAINT `fk_pontuacao_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Copiando dados para a tabela gincanaci.pontuacao: ~0 rows (aproximadamente)
DELETE FROM `pontuacao`;
/*!40000 ALTER TABLE `pontuacao` DISABLE KEYS */;
INSERT INTO `pontuacao` (`id`, `id_equipe`, `id_prova`, `id_usuario`, `pontos`, `data_hora`) VALUES
	(94, 29, 28, 1, 123, '2019-05-15 21:46:01'),
	(95, 30, 28, 1, 1, '2019-05-15 21:46:01'),
	(96, 31, 28, 1, 0, '2019-05-15 21:46:01'),
	(97, 28, 28, 1, 0, '2019-05-15 21:46:01'),
	(98, 32, 28, 1, 0, '2019-05-15 21:46:01'),
	(99, 29, 28, 4, 12, '2019-05-15 21:57:52'),
	(100, 30, 28, 4, 0, '2019-05-15 21:57:53'),
	(101, 31, 28, 4, 0, '2019-05-15 21:57:53'),
	(102, 28, 28, 4, 0, '2019-05-15 21:57:53'),
	(103, 32, 28, 4, 0, '2019-05-15 21:57:53');
/*!40000 ALTER TABLE `pontuacao` ENABLE KEYS */;

-- Copiando estrutura para tabela gincanaci.prova
DROP TABLE IF EXISTS `prova`;
CREATE TABLE IF NOT EXISTS `prova` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `tempo` int(5) DEFAULT NULL,
  `descricao` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `NIntegrantes` tinyint(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Copiando dados para a tabela gincanaci.prova: ~0 rows (aproximadamente)
DELETE FROM `prova`;
/*!40000 ALTER TABLE `prova` DISABLE KEYS */;
INSERT INTO `prova` (`id`, `nome`, `tempo`, `descricao`, `NIntegrantes`) VALUES
	(28, 'root', 0, 'sdasd', 0);
/*!40000 ALTER TABLE `prova` ENABLE KEYS */;

-- Copiando estrutura para tabela gincanaci.usuario
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `senha` varchar(80) NOT NULL,
  `nome` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela gincanaci.usuario: ~1 rows (aproximadamente)
DELETE FROM `usuario`;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`id`, `email`, `senha`, `nome`) VALUES
	(1, 'admin@senac.br', '8fbd343a75230e1682770816025e1bf79f9e6fc4', 'Admin'),
	(4, 'user@senac.br', 'c4fb8877ebd38fb68d11073049e1c138120e3b5c', 'User');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
