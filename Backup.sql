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
	(1, 'edunovacki', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi');

-- Copiando estrutura para tabela personal_trainer.assinaturas
CREATE TABLE IF NOT EXISTS `assinaturas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `plano` enum('Essencial','Avancado','Premium') NOT NULL,
  `status_pagamento` enum('pago','andamento') DEFAULT 'andamento',
  `data_assinatura` timestamp NOT NULL DEFAULT current_timestamp(),
  `valor` decimal(10,2) NOT NULL,
  `transacao` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `transacao` (`transacao`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `assinaturas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela personal_trainer.assinaturas: ~2 rows (aproximadamente)
DELETE FROM `assinaturas`;
INSERT INTO `assinaturas` (`id`, `id_usuario`, `plano`, `status_pagamento`, `data_assinatura`, `valor`, `transacao`) VALUES
	(1, 2, 'Essencial', 'andamento', '2025-09-07 20:23:25', 119.90, '68bde9bd9f76e'),
	(2, 2, 'Avancado', 'andamento', '2025-09-07 20:27:12', 99.90, '68bdeaa042560');

-- Copiando estrutura para tabela personal_trainer.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `idade` int(11) NOT NULL,
  `sexo` char(1) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela personal_trainer.usuarios: ~4 rows (aproximadamente)
DELETE FROM `usuarios`;
INSERT INTO `usuarios` (`id`, `email`, `senha`, `nome`, `idade`, `sexo`, `data_cadastro`) VALUES
	(1, 'mariagabrielacastro1505@gmail.com', '$2y$10$0GGzVxkMvbIxqVvmgGj3sedrShmj6Rl.TcHSMdSTnvit8QnRTCeSe', 'Maria Gabriela', 18, 'F', '2025-09-07 19:46:49'),
	(2, 'eduardonovacki01@gmail.com', '$2y$10$rDr50EEtPp25Ocz5xMuZ8u1wI8ipCVHgo952TTXPryFYHwL1O2TTe', 'Eduardo Novacki', 19, 'M', '2025-09-07 19:48:57'),
	(6, 'eduardo.anjos@grupointegrado.br', '$2y$10$L9NyZz3hbwQugVzcP.6GzOcrGAkI6joW4yv.MUdvJ8nz3Fd9Sfnp2', 'Eduardo ', 19, 'M', '2025-09-07 20:00:53'),
	(11, 'eduardo@eduardo.com', '$2y$10$BlUWr/RM.MPAEDmJLsX49OVrgLl4y6dlWY1d/chWwvn90zLBtWUGy', 'gjhgghj', 19, 'M', '2025-09-07 20:25:44');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
