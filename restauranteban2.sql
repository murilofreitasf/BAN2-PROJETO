-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Out-2022 às 03:35
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `restauranteban2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargo`
--

CREATE TABLE `cargo` (
  `codigoCargo` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `salario` float NOT NULL,
  `cargaHoraria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cargo`
--

INSERT INTO `cargo` (`codigoCargo`, `nome`, `salario`, `cargaHoraria`) VALUES
(1, 'cozinheiro', 3200, 10),
(2, 'faxineiro', 3000, 8),
(3, 'recepcionista', 3200, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `codigoCliente` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cep` varchar(8) NOT NULL,
  `nro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`codigoCliente`, `nome`, `telefone`, `email`, `cep`, `nro`) VALUES
(1, 'cleber', '47444444444', 'cleber@gmail.com', '44444444', 444),
(2, 'maria', '47555555555', 'maria@gmail.com', '55555555', 555),
(3, 'joanas', '47666666666', 'joana@gmail.com', '66666666', 666);

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque`
--

CREATE TABLE `estoque` (
  `codigoEstoque` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `dataValidade` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `estoque`
--

INSERT INTO `estoque` (`codigoEstoque`, `quantidade`, `dataValidade`) VALUES
(1, 20, '2023-11-10'),
(2, 60, '2022-10-30'),
(3, 20, '2022-12-09'),
(4, 5, '2022-12-12'),
(5, 4, '2022-11-04');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `codigoFuncionario` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cep` varchar(8) NOT NULL,
  `nro` int(11) NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`codigoFuncionario`, `nome`, `telefone`, `email`, `cep`, `nro`, `tipo`) VALUES
(1, 'rodrigo', '47333333333', 'rodrigo@gmail.com', '33333333', 333, 3),
(2, 'murilo', '47222222222', 'murilo@gmail.com', '22222222', 222, 2),
(3, 'paula', '47111111111', 'paula@gmail.com', '11111111', 111, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ingredientes`
--

CREATE TABLE `ingredientes` (
  `codigoIngrediente` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `preco` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `ingredientes`
--

INSERT INTO `ingredientes` (`codigoIngrediente`, `nome`, `preco`) VALUES
(1, 'INGREDIENTEBOM', 6),
(2, 'carne', 60),
(3, 'alho', 20),
(4, 'cebola', 55),
(5, 'tomate', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `itenspedido`
--

CREATE TABLE `itenspedido` (
  `codigoItensPedido` int(11) NOT NULL,
  `codigoPedido` int(11) NOT NULL,
  `codigoPrato` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `itenspedido`
--

INSERT INTO `itenspedido` (`codigoItensPedido`, `codigoPedido`, `codigoPrato`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 1),
(4, 2, 1),
(5, 2, 2),
(6, 3, 1),
(7, 3, 1),
(8, 3, 2),
(9, 3, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `codigoPedido` int(11) NOT NULL,
  `cliente` int(11) NOT NULL,
  `valor` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`codigoPedido`, `cliente`, `valor`) VALUES
(4, 1, 35),
(5, 2, 50),
(6, 3, 70);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pratos`
--

CREATE TABLE `pratos` (
  `codigoPrato` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `tempoPreparo` int(11) NOT NULL,
  `preco` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pratos`
--

INSERT INTO `pratos` (`codigoPrato`, `nome`, `tempoPreparo`, `preco`) VALUES
(1, 'macarrão bolonhesa', 45, 15),
(2, 'carne com tomate', 40, 20);

-- --------------------------------------------------------

--
-- Estrutura da tabela `preparo`
--

CREATE TABLE `preparo` (
  `codigoPreparo` int(11) NOT NULL,
  `codigoIngrediente` int(11) NOT NULL,
  `codigoPrato` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `preparo`
--

INSERT INTO `preparo` (`codigoPreparo`, `codigoIngrediente`, `codigoPrato`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 2, 2),
(7, 3, 2),
(8, 4, 2),
(9, 5, 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`codigoCargo`);

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`codigoCliente`);

--
-- Índices para tabela `estoque`
--
ALTER TABLE `estoque`
  ADD PRIMARY KEY (`codigoEstoque`);

--
-- Índices para tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`codigoFuncionario`),
  ADD KEY `tipo` (`tipo`);

--
-- Índices para tabela `ingredientes`
--
ALTER TABLE `ingredientes`
  ADD PRIMARY KEY (`codigoIngrediente`);

--
-- Índices para tabela `itenspedido`
--
ALTER TABLE `itenspedido`
  ADD PRIMARY KEY (`codigoItensPedido`),
  ADD KEY `codigoPedido` (`codigoPedido`),
  ADD KEY `codigoPrato` (`codigoPrato`);

--
-- Índices para tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`codigoPedido`),
  ADD KEY `cliente` (`cliente`);

--
-- Índices para tabela `pratos`
--
ALTER TABLE `pratos`
  ADD PRIMARY KEY (`codigoPrato`);

--
-- Índices para tabela `preparo`
--
ALTER TABLE `preparo`
  ADD PRIMARY KEY (`codigoPreparo`),
  ADD KEY `codigoIngrediente` (`codigoIngrediente`),
  ADD KEY `codigoPrato` (`codigoPrato`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cargo`
--
ALTER TABLE `cargo`
  MODIFY `codigoCargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `codigoCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `estoque`
--
ALTER TABLE `estoque`
  MODIFY `codigoEstoque` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `codigoFuncionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `ingredientes`
--
ALTER TABLE `ingredientes`
  MODIFY `codigoIngrediente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `itenspedido`
--
ALTER TABLE `itenspedido`
  MODIFY `codigoItensPedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `codigoPedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `pratos`
--
ALTER TABLE `pratos`
  MODIFY `codigoPrato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `preparo`
--
ALTER TABLE `preparo`
  MODIFY `codigoPreparo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `estoque`
--
ALTER TABLE `estoque`
  ADD CONSTRAINT `estoque_ibfk_1` FOREIGN KEY (`codigoEstoque`) REFERENCES `ingredientes` (`codigoIngrediente`);

--
-- Limitadores para a tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD CONSTRAINT `funcionarios_ibfk_1` FOREIGN KEY (`tipo`) REFERENCES `cargo` (`codigoCargo`);

--
-- Limitadores para a tabela `itenspedido`
--
ALTER TABLE `itenspedido`
  ADD CONSTRAINT `itenspedido_ibfk_1` FOREIGN KEY (`codigoPedido`) REFERENCES `pedidos` (`codigoPedido`),
  ADD CONSTRAINT `itenspedido_ibfk_2` FOREIGN KEY (`codigoPrato`) REFERENCES `pratos` (`codigoPrato`);

--
-- Limitadores para a tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`cliente`) REFERENCES `clientes` (`codigoCliente`);

--
-- Limitadores para a tabela `preparo`
--
ALTER TABLE `preparo`
  ADD CONSTRAINT `preparo_ibfk_1` FOREIGN KEY (`codigoIngrediente`) REFERENCES `ingredientes` (`codigoIngrediente`),
  ADD CONSTRAINT `preparo_ibfk_2` FOREIGN KEY (`codigoPrato`) REFERENCES `pratos` (`codigoPrato`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
