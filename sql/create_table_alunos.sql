CREATE TABLE IF NOT EXISTS `alunos` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,  
  `email` varchar(255) DEFAULT NULL,
  `mae` varchar(255) DEFAULT NULL,
  `pai` varchar(255) DEFAULT NULL,
  `serie` varchar(255) DEFAULT NULL,
  `turno` varchar(255) DEFAULT NULL,
  `atividades` varchar(255) DEFAULT NULL,
  `nascimento` varchar(255) DEFAULT NULL
  
);