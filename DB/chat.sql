
--
-- Banco de dados: `chat`
--
CREATE DATABASE chat;
use chat;


--
-- Estrutura da tabela: `msg`
--
CREATE TABLE `msg` (
  `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `menssagem` varchar(1900) NOT NULL
);

