-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 12-Abr-2021 às 00:28
-- Versão do servidor: 8.0.21
-- versão do PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `vendasveiculos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `favoritos`
--

CREATE TABLE `favoritos` (
  `idFavorito` int NOT NULL,
  `idUsuario` int NOT NULL,
  `idPostagem` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int NOT NULL,
  `nome` varchar(120) COLLATE utf8mb4_bin NOT NULL,
  `sobrenome` varchar(120) COLLATE utf8mb4_bin NOT NULL,
  `cidade` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `uf` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(254) COLLATE utf8mb4_bin NOT NULL,
  `senha` varchar(90) COLLATE utf8mb4_bin NOT NULL,
  `dataCadastro` date NOT NULL,
  `telefone` varchar(40) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `sobrenome`, `cidade`, `uf`, `email`, `senha`, `dataCadastro`, `telefone`) VALUES
(1, 'Cesar', 'Ferreira', 'Caruaru', 'Pernambuco', 'cesar@gmail.com', '$2y$10$EhYBcUtObR4F6vJr8BB08usGk/EocMsOo1uCmwRAThxelNP9F1.WK', '2021-04-04', '81943454857'),
(2, 'Fulano', 'Tal', 'Recife', 'Pernambuco', 'Fulano@gmail.com', '$2y$10$cASDK/RqwFuU.CWMih/F8O/2If/fLgvfBGYRkBYg3mdXpy7gQvc6e', '2021-04-05', ''),
(3, 'Teste', 'Aula', 'Caruaru', 'Pernambuco', 'aula@gmail.com', '$2y$10$JLcQ6MLsyyZWTVTK20gWsO/mLqFQGNCqV52fnRbFa0Ujd2Q2d4Qo2', '2021-04-06', ''),
(4, 'Gomes', 'Silva', 'Caruaru', 'Pernambuco', 'gomes@gmail.com', '$2y$10$GMlqQBftb0DcMPOmOSdX5.7RcOVL9cNbKk865L1wXgeolWcdFstoC', '2021-04-11', '819232243');

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculosanuncios`
--

CREATE TABLE `veiculosanuncios` (
  `id` int NOT NULL,
  `descricao` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `km` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `marca` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `modelo` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `preco` float(100,0) NOT NULL,
  `usuarioAnunciante` int NOT NULL,
  `imagemVeiculo` varchar(120) COLLATE utf8mb4_bin NOT NULL,
  `estadoVeiculo` varchar(120) COLLATE utf8mb4_bin NOT NULL,
  `titulo` varchar(120) COLLATE utf8mb4_bin NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `veiculosanuncios`
--

INSERT INTO `veiculosanuncios` (`id`, `descricao`, `km`, `marca`, `modelo`, `preco`, `usuarioAnunciante`, `imagemVeiculo`, `estadoVeiculo`, `titulo`, `status`) VALUES
(2, 'Fiat uno 2020', '13000', 'FIAT', 'FIAT UNO  2020', 34000, 1, '6060d0fda1e70.png', '', '', 'Aberto'),
(3, 'Palio FIRE BRANCO', '12000', 'FIAT', 'PALIO FIRE 2010', 20000, 1, '6060db91ea4b2.png', '', '', 'Aberto'),
(4, 'Fiat Toro Endurance 2019', '5000', 'FIAT', 'FIAT TORO Apenas venda', 80000, 1, '6060dc134ebf7.png', 'Novo', 'FIAT TORO 2019 nova', 'Aberto'),
(7, 'Peugeot focus apenas venda', '24000', 'Peugeot', 'Focus 2008', 26000, 1, '606a51c26829a.png', 'Usado', 'Peugeot focus novo', 'Aberto'),
(8, 'aceito ofertas e trocas', '24000', 'Peugeot', 'Peugeot 307', 28000, 1, '606a52cd169a0.png', 'Usado', 'Peugeot 307 Oferta', 'Aberto'),
(9, 'Fiat Uno Fire 2006 com ipva pendente ', '40000', 'FIAT', 'Uno Fire 2006', 9000, 2, '606a644d5ad19.png', 'Usado', 'Fiat Uno Fire atrasado', 'Aberto'),
(10, 'Onix 1.0 Não aceito trocas', '4000', 'Chevrolet', 'Onix', 55000, 1, '606b93ffa4c3f.png', 'Novo', 'Onix novo', 'Aberto'),
(11, '2018 Chevrolet Cruze Ford Fusion', '10000', 'Chevrolet', 'Cruze', 30000, 2, '606b97286ed1a.png', 'Novo', 'Cruze Ford Fusion', 'Aberto'),
(12, 'Gol g6 1.0', '2000', 'VOLKSWAGEN', 'Gol g6', 25000, 1, '606ba421017cb.png', 'Usado', 'Gol g6', 'Aberto'),
(13, 'celta basico, duas portas 2012', '14.000', 'Chevrolet', 'celta', 15000, 1, '6072fa6fb3895.png', 'Usado', 'Celta duas portas', 'Aberto'),
(14, 'Aceito trocas, por outro carro de meu interesse..', '10000', 'FIAT', 'Doblo Essence 1.8', 49500, 4, '6073882155d03.png', 'Usado', 'Vende-se Doblo Essence 1.8', 'Aberto');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `favoritos`
--
ALTER TABLE `favoritos`
  ADD PRIMARY KEY (`idFavorito`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idPostagem` (`idPostagem`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `veiculosanuncios`
--
ALTER TABLE `veiculosanuncios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuarioAnunciante` (`usuarioAnunciante`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `favoritos`
--
ALTER TABLE `favoritos`
  MODIFY `idFavorito` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `veiculosanuncios`
--
ALTER TABLE `veiculosanuncios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `favoritos`
--
ALTER TABLE `favoritos`
  ADD CONSTRAINT `favoritos_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `favoritos_ibfk_2` FOREIGN KEY (`idPostagem`) REFERENCES `veiculosanuncios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
