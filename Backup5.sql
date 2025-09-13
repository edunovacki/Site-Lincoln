-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.32-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.11.0.7065
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para personal_trainer
CREATE DATABASE IF NOT EXISTS `personal_trainer` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `personal_trainer`;

-- Copiando estrutura para tabela personal_trainer.administradores
CREATE TABLE IF NOT EXISTS `administradores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario` (`usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela personal_trainer.administradores: ~1 rows (aproximadamente)
DELETE FROM `administradores`;
INSERT INTO `administradores` (`id`, `usuario`, `senha`) VALUES
	(1, 'edunovacki', '$2y$10$r3B6GqjJkLp9wVxZt8uYNeK5qR2S7T1U3W4X5Y6Z7A8B9C0D1E2F3G4H');

-- Copiando estrutura para tabela personal_trainer.assinaturas
CREATE TABLE IF NOT EXISTS `assinaturas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `plano` enum('Essencial','Avancado','Premium') NOT NULL,
  `status_pagamento` enum('pago','andamento','cancelado') DEFAULT 'andamento',
  `data_assinatura` timestamp NOT NULL DEFAULT current_timestamp(),
  `data_pagamento` timestamp NULL DEFAULT NULL,
  `valor` decimal(10,2) NOT NULL,
  `metodo_pagamento` varchar(50) DEFAULT NULL,
  `transacao` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `transacao` (`transacao`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `assinaturas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela personal_trainer.assinaturas: ~0 rows (aproximadamente)
DELETE FROM `assinaturas`;
INSERT INTO `assinaturas` (`id`, `id_usuario`, `plano`, `status_pagamento`, `data_assinatura`, `data_pagamento`, `valor`, `metodo_pagamento`, `transacao`) VALUES
	(97, 6, 'Premium', 'andamento', '2025-09-13 02:05:46', NULL, 79.90, 'PIX', '68c4d17a1cb62'),
	(99, 6, 'Premium', 'andamento', '2025-09-13 02:06:02', NULL, 79.90, 'PIX', '68c4d18a31199'),
	(100, 6, 'Premium', 'cancelado', '2025-09-13 02:06:11', '2025-09-13 02:06:11', 79.90, 'PIX', '68c4d1930be03'),
	(101, 7, 'Essencial', 'andamento', '2025-09-13 02:07:06', NULL, 119.90, 'PIX', '68c4d1ca62061'),
	(102, 7, 'Essencial', 'pago', '2025-09-13 02:07:07', '2025-09-13 02:07:07', 119.90, 'PIX', '68c4d1cb7264f'),
	(103, 6, 'Avancado', 'andamento', '2025-09-13 02:07:46', NULL, 99.90, 'PIX', '68c4d1f28207b'),
	(104, 6, 'Avancado', 'pago', '2025-09-13 02:07:47', '2025-09-13 02:07:47', 99.90, 'PIX', '68c4d1f3d44eb');

-- Copiando estrutura para tabela personal_trainer.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `idade` int(11) NOT NULL,
  `sexo` char(1) NOT NULL,
  `plano_atual` enum('Essencial','Avancado','Premium') DEFAULT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela personal_trainer.usuarios: ~0 rows (aproximadamente)
DELETE FROM `usuarios`;
INSERT INTO `usuarios` (`id`, `email`, `senha`, `nome`, `idade`, `sexo`, `plano_atual`, `data_cadastro`) VALUES
	(6, 'eduardonovacki01@gmail.com', '$2y$10$3krP3sAvBGOtPNrPVrVRSuDrceXXxDnEWG1vDD1JpTNYlaE6BhsDS', 'Eduardo Novacki dos Anjos ', 19, 'M', 'Avancado', '2025-09-13 02:05:29'),
	(7, 'mariagabrielacastro1505@gmail.com', '$2y$10$Ka9gwQstlwYu/3oneii2Qe538.h7kUx0UhGSmxthnt.aXgFcXjna6', 'Maria', 18, 'F', 'Essencial', '2025-09-13 02:07:00');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
