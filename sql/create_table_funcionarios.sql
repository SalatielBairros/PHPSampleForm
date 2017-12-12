CREATE TABLE IF NOT EXISTS `funcionarios` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,  
  `cpf` varchar(255) DEFAULT NULL,
  `rg` varchar(255) DEFAULT NULL,
  `cargo` varchar(255) DEFAULT NULL,
  `admissao` varchar(255) DEFAULT NULL,  
  `nascimento` varchar(255) DEFAULT NULL  
);