-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28-Mar-2019 às 00:58
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.0.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blt`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_adicionais_clientes`
--

CREATE TABLE `cad_adicionais_clientes` (
  `id` int(11) NOT NULL,
  `data_inc` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `login_ad` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cliente` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_entrega` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rota1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rota2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_ida` time NOT NULL,
  `t_descarrego` time NOT NULL,
  `t_volta` time NOT NULL,
  `t_total` time NOT NULL,
  `p_ida` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_volta` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_total` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_agua` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ad_agua` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `servico` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `solicit1` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `solicit2` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recebedor1` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recebedor2` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auxiliar` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bomba` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comp_mangueira` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pol_mangueira` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conexao1` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conexao2` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `f_pagamento` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prazo` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `cad_adicionais_clientes`
--

INSERT INTO `cad_adicionais_clientes` (`id`, `data_inc`, `login_ad`, `cliente`, `t_entrega`, `preco`, `rota1`, `rota2`, `t_ida`, `t_descarrego`, `t_volta`, `t_total`, `p_ida`, `p_volta`, `p_total`, `t_agua`, `ad_agua`, `servico`, `solicit1`, `solicit2`, `recebedor1`, `recebedor2`, `auxiliar`, `bomba`, `comp_mangueira`, `pol_mangueira`, `conexao1`, `conexao2`, `f_pagamento`, `prazo`) VALUES
(1, '2019-03-24 17:51:25', 'ecarmo', '2', 'Entrega no Destino', '1', '2', '3', '23:59:00', '23:59:00', '23:59:00', '00:00:04', '5', '6', '7', 'Portável', '8', 'Técnico', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', 'Prazo', '1'),
(2, '2019-03-24 18:00:05', 'ecarmo', '2', 'Entrega no Destino', '1', '2', '3', '23:59:00', '23:59:00', '23:59:00', '00:00:04', '5', '6', '7', 'Portável', '8', 'Técnico', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', 'Prazo', '1'),
(3, '2019-03-24 18:00:59', 'ecarmo', '2', 'Entrega no Destino', '1', '2', '3', '23:59:00', '23:59:00', '23:59:00', '00:00:04', '5', '6', '7', 'Portável', '8', 'Técnico', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', 'Prazo', '1'),
(4, '2019-03-24 18:01:19', 'ecarmo', '2', 'Entrega no Destino', '1', '2', '3', '23:59:00', '23:59:00', '23:59:00', '00:00:04', '5', '6', '7', 'Portável', '8', 'Técnico', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', 'Prazo', '1'),
(5, '2019-03-24 18:01:37', 'ecarmo', '2', 'Entrega no Destino', '1', '2', '3', '23:59:00', '23:59:00', '23:59:00', '00:00:04', '5', '6', '7', 'Portável', '8', 'Técnico', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', 'Prazo', '2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_agua`
--

CREATE TABLE `cad_agua` (
  `id` int(11) NOT NULL,
  `data_inc` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `login_ad` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agua` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `cad_agua`
--

INSERT INTO `cad_agua` (`id`, `data_inc`, `login_ad`, `agua`) VALUES
(2, '2019-02-28 02:25:58', 'user', 'Potável');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_clientes`
--

CREATE TABLE `cad_clientes` (
  `id` int(11) NOT NULL,
  `data_inc` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `login_ad` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `situacao` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnpj` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cep` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rua` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `n` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bairro` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `complemento` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefones` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_prin` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_sec` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resp_compras` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel_compras` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resp_financeiro` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel_financeiro` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resp_manut` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel_manut` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tp_cobranca` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ativo` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_endereco`
--

CREATE TABLE `cad_endereco` (
  `id` int(11) NOT NULL,
  `data_inc` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `login_ad` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cod_cliente` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cep` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `n` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bairro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `complemento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_implemento`
--

CREATE TABLE `cad_implemento` (
  `id` int(11) NOT NULL,
  `data_inc` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `login_ad` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `veiculo` int(20) NOT NULL,
  `placa` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `km` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `cad_implemento`
--

INSERT INTO `cad_implemento` (`id`, `data_inc`, `login_ad`, `veiculo`, `placa`, `km`) VALUES
(1, '2019-03-03 16:08:30', 'user', 1, 'dsds', 'dsds');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_leitura`
--

CREATE TABLE `cad_leitura` (
  `id` int(11) NOT NULL,
  `data_inc` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `login_ad` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_leitura` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `volume` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_medida`
--

CREATE TABLE `cad_medida` (
  `id` int(11) NOT NULL,
  `data_inc` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `login_ad` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grandeza` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `simbolo` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_motorista`
--

CREATE TABLE `cad_motorista` (
  `id` int(11) NOT NULL,
  `data_inc` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `login_ad` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contato` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `situacao` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_pagamento`
--

CREATE TABLE `cad_pagamento` (
  `id` int(11) NOT NULL,
  `data_inc` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `login_ad` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `cad_pagamento`
--

INSERT INTO `cad_pagamento` (`id`, `data_inc`, `login_ad`, `tipo`) VALUES
(1, '2019-02-28 02:46:58', 'user', 'Prazo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_perfis`
--

CREATE TABLE `cad_perfis` (
  `id` int(11) NOT NULL,
  `usuario` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cadastro` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `programacao` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `processos` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crms` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vazao` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relatorios` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seguranca` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `cad_perfis`
--

INSERT INTO `cad_perfis` (`id`, `usuario`, `cadastro`, `programacao`, `processos`, `crms`, `vazao`, `relatorios`, `seguranca`) VALUES
(1, '2', 'SIM', 'SIM', 'NÃƒO', 'NÃƒO', 'NÃƒO', 'NÃƒO', 'SIM');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_poco`
--

CREATE TABLE `cad_poco` (
  `data_inc` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id` int(11) NOT NULL,
  `login_ad` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poco` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vazao` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_servico`
--

CREATE TABLE `cad_servico` (
  `id` int(11) NOT NULL,
  `data_inc` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `login_ad` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `servico` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `cad_servico`
--

INSERT INTO `cad_servico` (`id`, `data_inc`, `login_ad`, `servico`) VALUES
(1, '2019-02-28 02:46:35', 'user', 'Técnico');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_tanques`
--

CREATE TABLE `cad_tanques` (
  `id` int(11) NOT NULL,
  `data_inc` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `login_ad` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `placa` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacidade` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_tel`
--

CREATE TABLE `cad_tel` (
  `id` int(11) NOT NULL,
  `telefone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cod_cliente` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `login_ad` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_usuario`
--

CREATE TABLE `cad_usuario` (
  `id` int(11) NOT NULL,
  `data_inc` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `login_ad` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cep` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rua` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `n` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bairro` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `complemento` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel2` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rg` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnh` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cargo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ativo` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `cad_usuario`
--

INSERT INTO `cad_usuario` (`id`, `data_inc`, `login_ad`, `nome`, `cep`, `estado`, `rua`, `n`, `bairro`, `cidade`, `complemento`, `tel1`, `tel2`, `rg`, `cpf`, `cnh`, `cargo`, `email`, `ativo`) VALUES
(1, '2019-02-26 02:28:27', 'user', 'Erik do Carmo Marques', '44001056', 'BA', 'Rua Arnold Silva', '1', 'Centro', 'Feira de Santana', 'CINZA', '1', '2', '3', '4', '5', '6', 'erik@uol.com.br', 'SIM');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_veiculo`
--

CREATE TABLE `cad_veiculo` (
  `id` int(11) NOT NULL,
  `data_inc` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `login_ad` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `placa` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `renavan` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marca` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modelo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ano` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chassi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cor` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `km` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `cad_veiculo`
--

INSERT INTO `cad_veiculo` (`id`, `data_inc`, `login_ad`, `placa`, `renavan`, `tipo`, `marca`, `modelo`, `ano`, `chassi`, `cor`, `km`) VALUES
(1, '2019-03-03 14:20:51', 'erik', 'JSA 0686', '30', 'CAVALO MECÂNICO', 'ACELLERA', '1', '2018', '987654321', '1', '1'),
(2, '2019-03-08 17:53:26', 'erik', 'pmu-8568', '65556656565', 'CARRO DE PASSEIO', 'ACELLERA', 'VOLKS', '2019', 'RRRRR', 'BRANCA', '12332');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados_forms`
--

CREATE TABLE `dados_forms` (
  `id` int(11) NOT NULL,
  `item` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `dados_forms`
--

INSERT INTO `dados_forms` (`id`, `item`, `tipo`) VALUES
(10, 'IMPLEMENTO', 'tipo_veic'),
(11, 'TRUCK', 'tipo_veic'),
(12, 'CAVALO MECÂNICO', 'tipo_veic'),
(13, 'MOTO', 'tipo_veic'),
(14, 'CARRO DE PASSEIO', 'tipo_veic'),
(16, 'HONDA', 'marca'),
(17, 'AGRALE', 'marca'),
(18, 'BMW', 'marca'),
(19, 'SUZUKI', 'marca'),
(20, 'LIFAN', 'marca'),
(21, 'MAHINDRA', 'marca'),
(22, 'SHINERAY', 'marca'),
(23, 'KASINSKI', 'marca'),
(24, 'YAMAHA', 'marca'),
(25, 'GARINNI', 'marca'),
(26, 'SUNDOWN', 'marca'),
(27, 'KAWASAKI', 'marca'),
(28, 'POLARIS', 'marca'),
(29, 'ADLY', 'marca'),
(30, 'AMAZONAS', 'marca'),
(31, 'APRILIA', 'marca'),
(32, 'ATALA', 'marca'),
(33, 'BAJAJ', 'marca'),
(34, 'BENELLI', 'marca'),
(35, 'BETA', 'marca'),
(36, 'BIMOTA', 'marca'),
(37, 'BRANDY', 'marca'),
(38, 'BRAVA', 'marca'),
(39, 'BRP', 'marca'),
(40, 'BUELL', 'marca'),
(41, 'BUENO', 'marca'),
(42, 'CAGIVA', 'marca'),
(43, 'MOBILETE', 'marca'),
(44, 'DAELIM', 'marca'),
(45, 'DAFRA', 'marca'),
(46, 'DAYANG', 'marca'),
(47, 'DAYUN', 'marca'),
(48, 'DERBI', 'marca'),
(49, 'DUCATI', 'marca'),
(50, 'EMME', 'marca'),
(51, 'FYM', 'marca'),
(52, 'GAS GAS', 'marca'),
(53, 'GREEN', 'marca'),
(54, 'HAOBAO', 'marca'),
(55, 'HARLEY-DAVIDSON', 'marca'),
(56, 'HARTFORD', 'marca'),
(57, 'HERO', 'marca'),
(58, 'HUSABERG', 'marca'),
(59, 'HUSQVARNA', 'marca'),
(60, 'IROS', 'marca'),
(61, 'JIAPENG VOLCANO', 'marca'),
(62, 'JOHNNYPAG', 'marca'),
(63, 'JONNY', 'marca'),
(64, 'KAHENA', 'marca'),
(65, 'KIMCO', 'marca'),
(66, 'LAQUILA', 'marca'),
(67, 'LANDUM', 'marca'),
(68, 'LAVRALE', 'marca'),
(69, 'LERIVO', 'marca'),
(70, 'LON-V', 'marca'),
(71, 'TRICICLO', 'marca'),
(72, 'MALAGUTI', 'marca'),
(73, 'MIZA', 'marca'),
(74, 'MOTO GUZZI', 'marca'),
(75, 'MRX', 'marca'),
(76, 'MV AUGUSTA', 'marca'),
(77, 'MVK', 'marca'),
(78, 'ORCA', 'marca'),
(79, 'PEGASSI', 'marca'),
(80, 'PIAGGIO', 'marca'),
(81, 'REGAL RAPTOR', 'marca'),
(82, 'SANYANG', 'marca'),
(83, 'SIAMOTO', 'marca'),
(84, 'TARGOS', 'marca'),
(85, 'TRAXX', 'marca'),
(86, 'VENTO', 'marca'),
(87, 'WUYANG', 'marca'),
(88, 'GARRA', 'marca'),
(89, 'X MOTOS', 'marca'),
(90, 'TRICKER', 'marca'),
(91, 'LAMBRETA', 'marca'),
(92, 'OUTROS', 'marca'),
(93, 'SCOOTER', 'marca'),
(94, 'ZONGSHEN', 'marca'),
(95, 'BIRELLI', 'marca'),
(96, 'WALK MACHINE', 'marca'),
(97, 'FBM', 'marca'),
(98, 'ARIEL', 'marca'),
(99, 'DUCAR', 'marca'),
(100, 'DITALLY', 'marca'),
(101, 'MARVA', 'marca'),
(102, 'WOLVER', 'marca'),
(103, 'KTM', 'marca'),
(104, 'LEOPARD', 'marca'),
(105, 'JAWA', 'marca'),
(106, 'BULL', 'marca'),
(107, 'CAN-AM', 'marca'),
(108, 'ACELLERA', 'marca'),
(109, 'VICTORY', 'marca'),
(110, 'INDIAN', 'marca'),
(111, 'BRAVAX', 'marca'),
(112, 'GARELLI', 'marca'),
(113, 'CHEVROLET', 'marca'),
(114, 'VOLKSWAGEN', 'marca'),
(115, 'FIAT', 'marca'),
(116, 'MERCEDES-BENZ', 'marca'),
(117, 'CITROEN', 'marca'),
(118, 'CHANA', 'marca'),
(119, 'SUBARU', 'marca'),
(120, 'FERRARI', 'marca'),
(121, 'BUGATTI', 'marca'),
(122, 'LAMBORGHINI', 'marca'),
(123, 'FORD', 'marca'),
(124, 'HYUNDAI', 'marca'),
(125, 'JAC', 'marca'),
(126, 'KIA', 'marca'),
(127, 'GURGEL', 'marca'),
(128, 'DODGE', 'marca'),
(129, 'CHRYSLER', 'marca'),
(130, 'BENTLEY', 'marca'),
(131, 'SSANGYONG', 'marca'),
(132, 'PEUGEOT', 'marca'),
(133, 'TOYOTA', 'marca'),
(134, 'RENAULT', 'marca'),
(135, 'ACURA', 'marca'),
(136, 'ADAMO', 'marca'),
(137, 'ALFA ROMEO', 'marca'),
(138, 'AMERICAR', 'marca'),
(139, 'ASTON MARTIN', 'marca'),
(140, 'AUDI', 'marca'),
(141, 'BEACH', 'marca'),
(142, 'BIANCO', 'marca'),
(143, 'BORGWARD', 'marca'),
(144, 'BRILLIANCE', 'marca'),
(145, 'BUICK', 'marca'),
(146, 'CBT', 'marca'),
(147, 'NISSAN', 'marca'),
(148, 'CHAMONIX', 'marca'),
(149, 'CHEDA', 'marca'),
(150, 'CHERY', 'marca'),
(151, 'CORD', 'marca'),
(152, 'COYOTE', 'marca'),
(153, 'CROSS LANDER', 'marca'),
(154, 'DAEWOO', 'marca'),
(155, 'DAIHATSU', 'marca'),
(156, 'VOLVO', 'marca'),
(157, 'DE SOTO', 'marca'),
(158, 'DETOMAZO', 'marca'),
(159, 'DELOREAN', 'marca'),
(160, 'DKW-VEMAG', 'marca'),
(161, 'EAGLE', 'marca'),
(162, 'EFFA', 'marca'),
(163, 'ENGESA', 'marca'),
(164, 'ENVEMO', 'marca'),
(165, 'FARUS', 'marca'),
(166, 'FERCAR', 'marca'),
(167, 'FNM', 'marca'),
(168, 'PONTIAC', 'marca'),
(169, 'PORSCHE', 'marca'),
(170, 'GEO', 'marca'),
(171, 'GRANCAR', 'marca'),
(172, 'GREAT WALL', 'marca'),
(173, 'HAFEI', 'marca'),
(174, 'HOFSTETTER', 'marca'),
(175, 'HUDSON', 'marca'),
(176, 'HUMMER', 'marca'),
(177, 'INFINITI', 'marca'),
(178, 'INTERNATIONAL', 'marca'),
(179, 'JAGUAR', 'marca'),
(180, 'JEEP', 'marca'),
(181, 'JINBEI', 'marca'),
(182, 'JPX', 'marca'),
(183, 'KAISER', 'marca'),
(184, 'KOENIGSEGG', 'marca'),
(185, 'LAUTOMOBILE', 'marca'),
(186, 'LAUTOCRAFT', 'marca'),
(187, 'LADA', 'marca'),
(188, 'LANCIA', 'marca'),
(189, 'LAND ROVER', 'marca'),
(190, 'LEXUS', 'marca'),
(191, 'LINCOLN', 'marca'),
(192, 'LOBINI', 'marca'),
(193, 'LOTUS', 'marca'),
(194, 'MASERATI', 'marca'),
(195, 'MATRA', 'marca'),
(196, 'MAYBACH', 'marca'),
(197, 'MAZDA', 'marca'),
(198, 'MENON', 'marca'),
(199, 'MERCURY', 'marca'),
(200, 'MITSUBISHI', 'marca'),
(201, 'MG', 'marca'),
(202, 'MINI', 'marca'),
(203, 'MIURA', 'marca'),
(204, 'MORRIS', 'marca'),
(205, 'MP LAFER', 'marca'),
(206, 'MPLM', 'marca'),
(207, 'NEWTRACK', 'marca'),
(208, 'NISSIN', 'marca'),
(209, 'OLDSMOBILE', 'marca'),
(210, 'PAG', 'marca'),
(211, 'PAGANI', 'marca'),
(212, 'PLYMOUTH', 'marca'),
(213, 'PUMA', 'marca'),
(214, 'RENO', 'marca'),
(215, 'REVA-I', 'marca'),
(216, 'ROLLS-ROYCE', 'marca'),
(217, 'ROMI', 'marca'),
(218, 'SEAT', 'marca'),
(219, 'UTILITARIOS AGRICOLAS', 'marca'),
(220, 'SAAB', 'marca'),
(221, 'SHORT', 'marca'),
(222, 'SIMCA', 'marca'),
(223, 'SMART', 'marca'),
(224, 'SPYKER', 'marca'),
(225, 'STANDARD', 'marca'),
(226, 'STUDEBAKER', 'marca'),
(227, 'TAC', 'marca'),
(228, 'TANGER', 'marca'),
(229, 'TRIUMPH', 'marca'),
(230, 'TROLLER', 'marca'),
(231, 'UNIMOG', 'marca'),
(232, 'WIESMANN', 'marca'),
(233, 'CADILLAC', 'marca'),
(234, 'AM GEN', 'marca'),
(235, 'BUGGY', 'marca'),
(236, 'WILLYS OVERLAND', 'marca'),
(237, 'KASEA', 'marca'),
(238, 'SATURN', 'marca'),
(239, 'SWELL MINI', 'marca'),
(240, 'SKODA', 'marca'),
(241, 'KARMANN GHIA', 'marca'),
(242, 'KART', 'marca'),
(243, 'HANOMAG', 'marca'),
(244, 'HILLMAN', 'marca'),
(245, 'HRG', 'marca'),
(246, 'GAIOLA', 'marca'),
(247, 'TATA', 'marca'),
(248, 'RELY', 'marca'),
(249, 'MCLAREN', 'marca'),
(250, 'GEELY', 'marca'),
(251, 'ISUZU', 'marca'),
(252, 'IVECO', 'marca'),
(253, 'TRAILER', 'marca'),
(254, 'RANDON', 'marca'),
(255, 'SCANIA', 'marca'),
(256, 'ONIBUS', 'marca'),
(257, 'UTILITARIOS PESADOS', 'marca'),
(258, 'MOTOR-HOME', 'marca'),
(259, 'MAN', 'marca'),
(260, 'NAVISTAR', 'marca'),
(261, 'SINOTRUK', 'marca'),
(262, 'SCHIFFER', 'marca'),
(263, 'GUERRA', 'marca'),
(264, 'MICHIGAN', 'marca');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `login` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `funcao` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `login`, `senha`, `nome`, `funcao`) VALUES
(1, 'ecarmo', '1', 'ERIK MARQUES', 'ADMINISTRADOR');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cad_adicionais_clientes`
--
ALTER TABLE `cad_adicionais_clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cad_agua`
--
ALTER TABLE `cad_agua`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cad_clientes`
--
ALTER TABLE `cad_clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cad_endereco`
--
ALTER TABLE `cad_endereco`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cad_implemento`
--
ALTER TABLE `cad_implemento`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cad_leitura`
--
ALTER TABLE `cad_leitura`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cad_medida`
--
ALTER TABLE `cad_medida`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cad_motorista`
--
ALTER TABLE `cad_motorista`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cad_pagamento`
--
ALTER TABLE `cad_pagamento`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cad_perfis`
--
ALTER TABLE `cad_perfis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cad_poco`
--
ALTER TABLE `cad_poco`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cad_servico`
--
ALTER TABLE `cad_servico`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cad_tanques`
--
ALTER TABLE `cad_tanques`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cad_tel`
--
ALTER TABLE `cad_tel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cad_usuario`
--
ALTER TABLE `cad_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cad_veiculo`
--
ALTER TABLE `cad_veiculo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dados_forms`
--
ALTER TABLE `dados_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cad_adicionais_clientes`
--
ALTER TABLE `cad_adicionais_clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cad_agua`
--
ALTER TABLE `cad_agua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cad_clientes`
--
ALTER TABLE `cad_clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cad_endereco`
--
ALTER TABLE `cad_endereco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cad_implemento`
--
ALTER TABLE `cad_implemento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cad_leitura`
--
ALTER TABLE `cad_leitura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cad_medida`
--
ALTER TABLE `cad_medida`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cad_motorista`
--
ALTER TABLE `cad_motorista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cad_pagamento`
--
ALTER TABLE `cad_pagamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cad_perfis`
--
ALTER TABLE `cad_perfis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cad_poco`
--
ALTER TABLE `cad_poco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cad_servico`
--
ALTER TABLE `cad_servico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cad_tanques`
--
ALTER TABLE `cad_tanques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cad_tel`
--
ALTER TABLE `cad_tel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cad_usuario`
--
ALTER TABLE `cad_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cad_veiculo`
--
ALTER TABLE `cad_veiculo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dados_forms`
--
ALTER TABLE `dados_forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=265;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
