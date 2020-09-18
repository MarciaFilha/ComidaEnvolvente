-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Jun-2020 às 14:57
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `comidaenvolvente`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `categoria` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `categoria`) VALUES
(1, '1'),
(2, '2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `vt_total` decimal(10,2) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_sobremesa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produto` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `imagem` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `id_categoria`, `descricao`, `preco`, `imagem`) VALUES
(7, 1, 'Café com Leite', '5.00', 'cafe.jpg'),
(8, 1, 'Sopa de Carne', '10.00', 'sopa.jpg'),
(9, 1, 'Feijoada', '38.00', 'feijoada.jpg'),
(10, 1, 'Lasanha', '11.00', 'lasanha.jpg'),
(11, 1, 'Pastel de queijo', '8.00', 'pasteldequeijo.jpg'),
(12, 1, 'Frango Frito', '17.00', 'frangofrito.jpg'),
(13, 1, 'Esfiha de carne', '2.00', 'esfihadecarne.jpg'),
(14, 1, 'Pizza', '21.00', 'pizza.jpg'),
(15, 2, 'Torta de morango', '15.00', 'tortademorango.jpg'),
(16, 2, 'Sorvete de chocolate', '10.00', 'sorvete.jpg'),
(17, 2, 'Mousse de maracujá ', '15.00', 'mousse.jpg'),
(18, 2, 'Pudim de leite', '13.00', 'pudim.jpg'),
(19, 2, 'Refrigerantes', '10.00', 'refrigerantes.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sobremesa_bebida`
--

CREATE TABLE `sobremesa_bebida` (
  `id_sobremesa` int(11) NOT NULL,
  `descricao` varchar(30) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `sobremesa_bebida`
--

INSERT INTO `sobremesa_bebida` (`id_sobremesa`, `descricao`, `preco`, `imagem`) VALUES
(3, 'Torta de morango', '25.00', 'tortademorango.jpg'),
(5, 'Sorvete de chocolate', '13.00', 'sorvete.jpg'),
(6, 'Mousse de maracujá ', '15.00', 'mousse.jpg'),
(7, 'Pudim de leite', '15.00', 'pudim.jpg'),
(8, 'Refrigerantes', '10.00', 'refrigerantes.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `telefone` varchar(30) DEFAULT NULL,
  `endereco` varchar(30) NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  `senha` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome`, `telefone`, `endereco`, `email`, `senha`) VALUES
(1, 'Taítila Melo da Silva', '112018-7948', '', 'taitila.melo@hotmail.com', '123456'),
(2, 'Marcia da Silva', '11986475120', '', 'marcia.silva@gmail.com', '123'),
(3, 'Andre Fellipe Marcolino', '13455353', 'Rua padre mariano', 'andrefellipe79@gmail.com', 'Gisele'),
(4, 'Israel Júnior', '', 'Rua padre mariano', 'israeljr@gmail.com', '123456'),
(7, 'Maria José', '1982739812', 'Rua da Maria', 'maria@gmail.com', '123456');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices para tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_produto_fk` (`id_produto`),
  ADD KEY `id_usuario_fk` (`id_usuario`),
  ADD KEY `id_sobremesa_fk` (`id_sobremesa`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produto`),
  ADD KEY `id_categoria_fk` (`id_categoria`);

--
-- Índices para tabela `sobremesa_bebida`
--
ALTER TABLE `sobremesa_bebida`
  ADD PRIMARY KEY (`id_sobremesa`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `sobremesa_bebida`
--
ALTER TABLE `sobremesa_bebida`
  MODIFY `id_sobremesa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `id_produto_fk` FOREIGN KEY (`id_produto`) REFERENCES `produtos` (`id_produto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_sobremesa_fk` FOREIGN KEY (`id_sobremesa`) REFERENCES `sobremesa_bebida` (`id_sobremesa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_usuario_fk` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `id_categoria_fk` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
