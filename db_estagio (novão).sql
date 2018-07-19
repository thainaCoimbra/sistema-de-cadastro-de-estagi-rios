-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19-Dez-2017 às 12:38
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_estagio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_arquivo`
--

CREATE TABLE `tb_arquivo` (
  `id_arquivo` int(11) NOT NULL,
  `id_cad` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `lugar_arquivo` varchar(45) DEFAULT NULL,
  `numero_arquivo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='					';

--
-- Extraindo dados da tabela `tb_arquivo`
--

INSERT INTO `tb_arquivo` (`id_arquivo`, `id_cad`, `nome`, `lugar_arquivo`, `numero_arquivo`) VALUES
(1, 2, 'seila1212dasda', 'nowhere', '123654'),
(2, 3, '1', '1', '1'),
(3, 5, 'sede', 'sede', 'sede'),
(4, 8, '', '', ''),
(5, 9, 'pre_cadastro/acoes/crudPre_Cadastro.php', 'pre_cadastro/acoes/crudPre_Cadastro.php', 'pre_cadastro/acoes/crudPre_Cadastro.php'),
(6, 10, 'arquivo1', 'lugar arquivo', '2323'),
(7, 11, '', '', ''),
(8, 12, 'Henrique de Olivera Boiteux', 'Henrique de Olivera Boiteux', 'Henrique de Olivera Boiteux'),
(9, 13, '312132', '312312', '3123'),
(10, 14, 'Show men ', 'Show men ', 'Show men '),
(11, 15, 'RODRIGO MOREIRA FREITAS', '3235', '3253'),
(12, 16, 'MENSÃƒO HONROSA', 'NÃƒO TENHO IDEIA', '1'),
(13, 18, '', '', ''),
(14, 20, 'asd', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cadastro`
--

CREATE TABLE `tb_cadastro` (
  `id_cad` int(11) NOT NULL,
  `id_situacao` int(11) NOT NULL,
  `id_tipo_estagio` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `matricula` varchar(45) DEFAULT NULL,
  `nacionalidade` varchar(45) DEFAULT NULL,
  `estado_civil` varchar(45) DEFAULT NULL,
  `naturalidade` varchar(45) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `filiacao` varchar(45) DEFAULT NULL,
  `identidade` varchar(45) DEFAULT NULL,
  `CPF` varchar(45) NOT NULL DEFAULT '000.000.000-00',
  `OAB` varchar(45) DEFAULT NULL,
  `titulo_eleitor` varchar(45) DEFAULT NULL,
  `zona` varchar(45) DEFAULT NULL,
  `secao` varchar(45) DEFAULT NULL,
  `data_cadastro` varchar(20) DEFAULT NULL,
  `data_desligamento` date DEFAULT NULL,
  `sexo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_cadastro`
--

INSERT INTO `tb_cadastro` (`id_cad`, `id_situacao`, `id_tipo_estagio`, `nome`, `matricula`, `nacionalidade`, `estado_civil`, `naturalidade`, `data_nascimento`, `filiacao`, `identidade`, `CPF`, `OAB`, `titulo_eleitor`, `zona`, `secao`, `data_cadastro`, `data_desligamento`, `sexo`) VALUES
(2, 1, 3, 'Fillipe Mateus de Oliveiraasdf asdf asdf', '123456789', 'Brasileiro', 'Solteiro', 'Coronel Fabriciano - MG', '1987-05-04', 'AdÃ£o Miguel deteste', '123', '32165498700', '0000', '0000', '007', '007', '', '2229-02-28', 'Masculino'),
(10, 1, 2, 'ThainÃ¡ Coimbra de Souza', '10201712-14', 'Brasileiro', 'Solteiro', 'Minas', '1999-01-10', 'Fagner', '123456', '123654', '654321', '321321', '123456', '654', '0000-00-00', '2018-12-31', 'Feminino'),
(14, 1, 3, 'Show men ', '14201712-15', 'Brasileiro', 'Solteiro', 'Show men ', '2017-12-15', 'Show men ', 'Show men ', 'Show men ', 'Show men ', 'Show men ', 'Show men ', 'Show men ', '', '2017-12-30', 'Masculino'),
(15, 1, 4, 'Rodrigo Freitas', '15201712-15', 'Brasileiro', 'Solteiro', 'teste', '2017-01-05', 'JOSE', '323', '7070215', 'dgsdgv', '23223', '3232', '323232', '', '2017-12-07', 'Masculino'),
(16, 1, 3, 'Geromonio Silva Spouza', '16201712-18', 'Brasileiro', 'Casado', 'brasili', '2017-12-13', 'SO PAI E MAI', '150235', '77730755149', 'Loin teste', '021515151515', '555454', '023', '', '2017-12-04', 'Masculino'),
(23, 1, 3, 'rodrigo freitas', '17201712-19', 'Brasileiro', 'Solteiro', 'RODRIGO FREITAS', '2017-12-19', 'RODRIGO FREITAS', 'RODRIGO FRE', 'RODRIGO FREITA', 'RODRIGO FREITAS', 'RODRIGO FREITAS', 'RODRIGO FREITAS', 'RODRIGO FREITAS', '', '2017-12-19', 'Masculino');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_curso`
--

CREATE TABLE `tb_curso` (
  `id_curso` int(11) NOT NULL,
  `descricao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_curso`
--

INSERT INTO `tb_curso` (`id_curso`, `descricao`) VALUES
(6, 'Analise e Desenvolvimento de Sistemas'),
(7, 'Direito'),
(8, 'Sistema da InformaÃ§Ã£o '),
(9, 'teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_defensor`
--

CREATE TABLE `tb_defensor` (
  `id_defensor` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `cargo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_defensor`
--

INSERT INTO `tb_defensor` (`id_defensor`, `nome`, `cargo`) VALUES
(1, 'Sergio Murillo Freitas de Paula', 'Subdefensor PÃºblico Geral ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_defensoria`
--

CREATE TABLE `tb_defensoria` (
  `id_defensoria` int(11) NOT NULL,
  `fk_naj` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_defensoria`
--

INSERT INTO `tb_defensoria` (`id_defensoria`, `fk_naj`, `nome`, `telefone`) VALUES
(11, 47, 'teste', '222222'),
(14, 47, 'Segunda Defensoria', '888888'),
(15, 48, 'Terceira Defensoria', 'dasdadsdas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_end`
--

CREATE TABLE `tb_end` (
  `id_end` int(11) NOT NULL,
  `id_cad` int(11) NOT NULL,
  `residencia` varchar(45) DEFAULT NULL,
  `CEP` varchar(45) DEFAULT NULL,
  `complemento` varchar(200) NOT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `uf` varchar(200) NOT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `obs` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_end`
--

INSERT INTO `tb_end` (`id_end`, `id_cad`, `residencia`, `CEP`, `complemento`, `bairro`, `uf`, `cidade`, `obs`) VALUES
(0, 0, '', '', '', '', '', 'Brasilia', ''),
(2, 0, '', '', '', '', '', 'Brasilia', ''),
(3, 0, '', '', '', '', '', 'Brasilia', ''),
(4, 0, '', '', '', '', '', 'Brasilia', ''),
(5, 0, '', '', '', '', '', 'Brasilia', ''),
(6, 0, '', '', '', '', '', 'Brasilia', ''),
(7, 0, '', '', '', '', '', 'Ãguas Claras', ''),
(8, 0, '', '', '', '', '', 'Ãguas Claras', ''),
(9, 43, 'gfndzgn', 'esfgsage', '', 'dgndgn', '', 'Guara 2', 'Thaina coimbra de Souza'),
(10, 0, 'gfndzgn', 'esfgsage', '', 'dgndgn', '', 'Guara 2', 'Thaina coimbra de Souza'),
(11, 0, '', '', '', '', '', 'Ãguas Claras', ''),
(12, 0, '', '', '', '', '', 'Ãguas Claras', ''),
(13, 0, '', '', '', '', '', 'Ãguas Claras', ''),
(14, 0, '', '', '', '', '', 'Ãguas Claras', ''),
(15, 0, '', '', '', '', '', 'Ãguas Claras', ''),
(16, 0, '', '', '', '', '', 'Ãguas Claras', ''),
(17, 0, '', '', '', '', '', 'Ãguas Claras', ''),
(18, 0, '', '', '', '', '', 'Ãguas Claras', ''),
(19, 0, '', '', '', '', '', 'Ãguas Claras', ''),
(20, 0, '', '', '', '', '', 'Ãguas Claras', ''),
(21, 0, '', '', '', '', '', 'Ãguas Claras', ''),
(22, 0, '', '', '', '', '', 'Ãguas Claras', ''),
(23, 0, '', '', '', '', '', 'Ãguas Claras', ''),
(24, 0, '', '', '', '', '', 'Ãguas Claras', ''),
(25, 0, '123', '123456', '', '123', '', 'BrazlÃ¢ndia', '123'),
(26, 0, '123', '123456', '', '123', '', 'BrazlÃ¢ndia', '123'),
(27, 0, '123', '123456', '', '123', '', 'BrazlÃ¢ndia', '123'),
(28, 0, 'filipe', 'filipe', '', 'filipe', '', 'Ãguas Claras', 'filipe'),
(29, 0, 'filipe', 'filipe', '', 'filipe', '', 'Ãguas Claras', 'filipe'),
(30, 0, 'filipe', 'filipe', '', 'filipe', '', 'Ãguas Claras', 'filipe'),
(31, 0, 'Filipe', 'Filipe', '', 'Filipe', '', 'Ãguas Claras', 'Filipe'),
(32, 0, '', '', '', '', '', 'Ãguas Claras', ''),
(34, 95, 'asdfasdfasdfasdf', 'asfasdfasdfasdf', 'asdfasdfasdf', 'asdfasdfasdfasdf', 'DFasdfasdfasdf', 'asdfasdfasdf', '																				d																											'),
(35, 96, 'QNE 17', '72125170', 'comercial', 'Taguatinga Norte (Taguatinga)', 'DF', 'BrasÃ­lia', '										testetestetestetestestetesteste									'),
(36, 97, 'endereÃ§o', '', '', '', '', '', ''),
(37, 97, 'endereÃ§o', '', '', '', '', '', ''),
(38, 97, 'endereÃ§o', '', '', '', '', '', ''),
(39, 97, 'endereÃ§o', '', '', '', '', '', ''),
(40, 98, 'QNE 17', '72125170', '', 'Taguatinga Norte (Taguatinga)', 'DF', 'BrasÃ­lia', ''),
(41, 99, 'QNE 17', '72125170', '', 'Taguatinga Norte (Taguatinga)', 'DF', 'BrasÃ­lia', ''),
(44, 102, 'QNE 17', '72125170', 'complemento Editado', 'Taguatinga Norte (Taguatinga)', 'DF', 'BrasÃ­lia', '																																																												observaÃ§Ãµes!!!!		 Editado																																																													'),
(46, 2, 'Quadra 105', '719091901', 'apartamento', 'Norte (Ãguas Claras)', 'DF', 'Ãguas Claras', '																																																																																																																																																																																																																							opa																																																																																																																																																																																																					'),
(51, 10, 'QNE 17', '72125170', '', 'Taguatinga Norte (Taguatinga)', 'DF', 'BrasÃ­lia', '																																																																												'),
(55, 14, 'Show men ', '71725205', 'Show men ', 'Show men ', 'Show men ', 'Show men ', '																																																																												'),
(56, 15, 'SQN 102 Bloco B', '70722020', 'rwe', 'Asa Norte', 'DF', 'BrasÃ­lia', ''),
(57, 16, 'QNM 19 Conjunto E', '72215195', '', 'CeilÃ¢ndia Sul (CeilÃ¢ndia)', 'DF', 'BrasÃ­lia', '										Este estagiÃ¡rio esta fazendo testa grande com racha 									');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_imagens`
--

CREATE TABLE `tb_imagens` (
  `id_imagens` int(11) NOT NULL,
  `id_cad` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `data` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_instituicao`
--

CREATE TABLE `tb_instituicao` (
  `id_instituicao` int(11) NOT NULL,
  `id_cad` int(11) NOT NULL,
  `nome_inst` varchar(45) COLLATE utf8_general_mysql500_ci NOT NULL,
  `id_curso` int(45) DEFAULT NULL,
  `nivel` varchar(45) COLLATE utf8_general_mysql500_ci NOT NULL,
  `periodo` varchar(45) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `turno` varchar(45) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `data_inicio` date NOT NULL,
  `data_fim` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `tb_instituicao`
--

INSERT INTO `tb_instituicao` (`id_instituicao`, `id_cad`, `nome_inst`, `id_curso`, `nivel`, `periodo`, `turno`, `data_inicio`, `data_fim`) VALUES
(16, 0, '', 2, '', '2Âº Semestre', 'Noturno', '2017-10-01', '2017-10-28'),
(17, 0, '', NULL, '', '', '', '2017-10-17', '2017-10-26'),
(18, 0, '', NULL, '', '', 'Vespertino', '2017-10-02', '2017-10-12'),
(19, 0, '', NULL, '', '2Âº Ano', 'Vespertino', '2017-10-11', '2017-10-20'),
(20, 0, 'udf', 0, '', '2Âº Semestre', 'Vespertino', '2017-10-10', '2017-10-26'),
(21, 0, '', NULL, '', '2Âº Ano', 'Vespertino', '2017-10-11', '2017-10-27'),
(22, 0, '', 0, 'Nivel Medio', '3Âº Semestre', 'Vespertino', '0000-00-00', '0000-00-00'),
(23, 0, '', 0, 'Nivel Superior', '1Âº Semestre', 'Matutino', '0000-00-00', '0000-00-00'),
(24, 0, 'jgflyf', NULL, '', '3Âº Ano', 'Vespertino', '0064-04-05', '0464-05-06'),
(25, 0, 'srgsfg', 0, '', '5Âº Semestre', 'Noturno', '0457-07-04', '0004-04-04'),
(26, 0, '', 0, 'Nivel Superior', '1Âº Semestre', 'Matutino', '0000-00-00', '0000-00-00'),
(27, 0, '', 0, 'Nivel Superior', '1Âº Semestre', 'Matutino', '0000-00-00', '0000-00-00'),
(28, 0, '', 0, 'Nivel Superior', '1Âº Semestre', 'Matutino', '0000-00-00', '0000-00-00'),
(29, 0, '', 0, 'Nivel Superior', '1Âº Semestre', 'Matutino', '0000-00-00', '0000-00-00'),
(30, 0, '', 0, 'Nivel Superior', '1Âº Semestre', 'Matutino', '0000-00-00', '0000-00-00'),
(31, 0, '', 0, 'Nivel Superior', '1Âº Semestre', 'Matutino', '0000-00-00', '0000-00-00'),
(32, 0, '', 0, 'Nivel Superior', '1Âº Semestre', 'Matutino', '0000-00-00', '0000-00-00'),
(33, 0, 'ProjeÃ§Ã£o', 0, 'Nivel Superior', '4Âº Semestre', 'Matutino', '2016-01-22', '2019-01-22'),
(34, 0, 'ProjeÃ§Ã£o', 0, 'Nivel Superior', '4Âº Semestre', 'Matutino', '2016-01-22', '2019-01-22'),
(35, 0, 'ProjeÃ§Ã£o', 0, 'Nivel Superior', '4Âº Semestre', 'Matutino', '2016-01-22', '2019-01-22'),
(36, 0, 'filipe', 0, 'Nivel Medio', '7Âº Semestre', 'Vespertino', '2017-11-03', '2017-11-10'),
(37, 0, 'filipe', 0, 'Nivel Medio', '7Âº Semestre', 'Vespertino', '2017-11-03', '2017-11-10'),
(38, 0, 'filipe', 0, 'Nivel Medio', '7Âº Semestre', 'Vespertino', '2017-11-03', '2017-11-10'),
(39, 0, 'Filipe', 0, 'Nivel Superior', '1Âº Semestre', 'Noturno', '2017-11-22', '2017-11-25'),
(40, 0, '', 0, 'Nivel Superior', '1Âº Semestre', 'Matutino', '0000-00-00', '0000-00-00'),
(41, 0, 'ProjeÃ§Ã£o', 0, '1Âª Ano', '3Âº Semestre', 'Noturno', '2016-01-22', '2019-01-22'),
(42, 0, 'ProjeÃ§Ã£o', 0, '1Âª Ano', '3Âº Semestre', 'Noturno', '2016-01-22', '2019-01-22'),
(43, 0, 'ProjeÃ§Ã£o', 0, '1Âª Ano', '3Âº Semestre', 'Noturno', '2016-01-22', '2019-01-22'),
(44, 0, 'ProjeÃ§Ã£o', 0, 'Nivel Superior', '6Âº Semestre', 'Noturno', '2018-01-12', '2020-01-22'),
(45, 0, 'ProjeÃ§Ã£o', 0, 'Nivel Superior', '6Âº Semestre', 'Noturno', '2017-11-04', '2017-11-17'),
(46, 43, 'CEF 03 Taguantinga', 0, 'Nivel Medio', '', 'Vespertino', '2017-11-02', '2017-11-10'),
(48, 0, '', 0, 'Nivel Superior', '', 'Matutino', '0000-00-00', '0000-00-00'),
(49, 88, 'dscfasdc', 6, 'Nivel Medio', '', 'Matutino', '0000-00-00', '0000-00-00'),
(62, 95, 'tstee', 2, 'Nivel Superior', '3Âº Semestre', 'Vespertino', '2017-12-13', '2017-12-20'),
(63, 96, 'UDF', 6, 'Nivel Superior', '3Âº Semestre', 'Noturno', '2017-02-02', '2017-12-12'),
(64, 97, '13212123213', 6, 'Nivel Superior', '3Âº Semestre', 'Matutino', '0000-00-00', '0000-00-00'),
(65, 97, '13212123213', 6, 'Nivel Superior', '3Âº Semestre', 'Matutino', '0000-00-00', '0000-00-00'),
(66, 97, '13212123213', 6, 'Nivel Superior', '3Âº Semestre', 'Matutino', '0000-00-00', '0000-00-00'),
(67, 97, '13212123213', 6, 'Nivel Superior', '3Âº Semestre', 'Matutino', '0000-00-00', '0000-00-00'),
(68, 98, '321321', 1, 'Nivel Superior', '', 'Matutino', '0000-00-00', '0000-00-00'),
(69, 99, '21jugfuj', 1, 'Nivel Superior', '', 'Matutino', '0000-00-00', '0000-00-00'),
(72, 102, 'UDF - Centro UniversitÃ¡rio Editado', 6, 'Nivel Superior', '5Âº Semestre', 'Vespertino', '0012-12-12', '0012-12-12'),
(74, 2, 'UniCesumar', 6, 'Nivel Superior', '5Âº Semestre', 'Noturno', '2015-01-01', '2018-12-13'),
(79, 10, 'UDF', 6, 'Nivel Superior', '3Âº Semestre/Ano', 'Noturno', '2017-01-01', '2018-01-01'),
(83, 14, 'Show men ', 7, 'Nivel Medio', '3Âº Semestre/Ano', 'Matutino', '2017-12-15', '2016-09-06'),
(84, 15, 'tets', 7, 'Nivel Superior', '5Âº Semestre', 'Matutino', '2017-11-30', '2017-12-28'),
(85, 16, 'Dekadance informarmaÂ´tica', 8, 'Nivel Superior', '5Âº Semestre', 'Vespertino', '2017-12-13', '2017-12-05');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_lotacao`
--

CREATE TABLE `tb_lotacao` (
  `id_lotacao` int(11) NOT NULL,
  `id_naj` int(11) NOT NULL,
  `id_defensoria` int(11) NOT NULL,
  `id_cad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_lotacao`
--

INSERT INTO `tb_lotacao` (`id_lotacao`, `id_naj`, `id_defensoria`, `id_cad`) VALUES
(1, 47, 11, 43),
(2, 47, 11, 0),
(3, 47, 11, 88),
(16, 48, 14, 95),
(17, 48, 14, 96),
(18, 47, 11, 97),
(19, 47, 11, 97),
(20, 47, 11, 97),
(21, 47, 11, 97),
(22, 47, 11, 98),
(23, 47, 11, 99),
(28, 48, 14, 2),
(33, 47, 14, 10),
(37, 47, 11, 14),
(38, 47, 15, 15),
(39, 48, 15, 16);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_naj`
--

CREATE TABLE `tb_naj` (
  `id_naj` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `endereco` varchar(45) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `CEP` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_naj`
--

INSERT INTO `tb_naj` (`id_naj`, `nome`, `endereco`, `telefone`, `CEP`) VALUES
(47, 'Sede', 'Sia trecho 7', '08000', '000.000-00'),
(48, 'Ãguas Claras', 'asdafafaf', '0900', '111.111-11');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_perfil`
--

CREATE TABLE `tb_perfil` (
  `id_perfil` int(11) NOT NULL,
  `tipo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='			';

--
-- Extraindo dados da tabela `tb_perfil`
--

INSERT INTO `tb_perfil` (`id_perfil`, `tipo`) VALUES
(1, 'Administrador'),
(2, 'Usuario'),
(4, 'Super Adm');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_remocao`
--

CREATE TABLE `tb_remocao` (
  `id_remocao` int(11) NOT NULL,
  `id_naj` int(11) NOT NULL,
  `id_defensoria` int(11) NOT NULL,
  `id_cad` int(11) NOT NULL,
  `data_rem` varchar(10) NOT NULL,
  `id_najNova` int(11) NOT NULL,
  `id_defensoriaNova` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_remocao`
--

INSERT INTO `tb_remocao` (`id_remocao`, `id_naj`, `id_defensoria`, `id_cad`, `data_rem`, `id_najNova`, `id_defensoriaNova`) VALUES
(29, 48, 11, 10, '0000-00-00', 47, 14),
(28, 47, 11, 2, '2017-02-03', 48, 15),
(30, 48, 14, 13, '15/12/2017', 47, 15),
(31, 48, 14, 15, '15/12/2017', 47, 14),
(32, 47, 14, 15, '15/12/2017', 47, 15),
(33, 47, 15, 12, '18/12/2017', 48, 11),
(34, 47, 11, 14, '18/12/2017', 48, 14),
(35, 47, 14, 10, '18/12/2017', 48, 15),
(36, 48, 15, 10, '18/12/2017', 47, 14),
(37, 48, 14, 12, '18/12/2017', 48, 14),
(38, 48, 15, 2, '18/12/2017', 48, 14),
(39, 48, 14, 14, '18/12/2017', 47, 11);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_situacao`
--

CREATE TABLE `tb_situacao` (
  `id_situacao` int(11) NOT NULL,
  `situacao` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_situacao`
--

INSERT INTO `tb_situacao` (`id_situacao`, `situacao`) VALUES
(1, 'Ativo'),
(10, 'Afastado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_telefone`
--

CREATE TABLE `tb_telefone` (
  `id_telefone` int(11) NOT NULL,
  `id_cad` int(11) NOT NULL,
  `residencial` varchar(45) DEFAULT NULL,
  `celular` varchar(45) DEFAULT NULL,
  `trabalho` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_telefone`
--

INSERT INTO `tb_telefone` (`id_telefone`, `id_cad`, `residencial`, `celular`, `trabalho`) VALUES
(1, 0, '', '', ''),
(2, 0, '', '', ''),
(3, 0, '', '', ''),
(4, 0, '', '', ''),
(5, 43, '257327', '75827', '5732738'),
(6, 0, '', '', ''),
(7, 0, '', '', ''),
(8, 0, '', '', ''),
(9, 0, '', '', ''),
(10, 0, '', '', ''),
(11, 0, '', '', ''),
(12, 0, '', '', ''),
(13, 0, '1111111', '11111111', '111111111'),
(14, 0, '1111111', '11111111', '111111111'),
(15, 0, '1111111', '11111111', '111111111'),
(16, 0, 'filipe', 'filipe', 'filipe'),
(17, 0, 'filipe', 'filipe', 'filipe'),
(18, 0, 'filipe', 'filipe', 'filipe'),
(19, 0, 'Filipe', 'Filipe', 'Filipe'),
(20, 0, '', '', ''),
(21, 88, 'dvsdv', '', ''),
(22, 92, 'telefone', 'lk', 'again'),
(23, 92, 'telefone', 'lk', 'again'),
(24, 92, 'telefone', 'lk', 'again'),
(25, 92, 'telefone', 'lk', 'again'),
(26, 92, 'telefone', 'lk', 'again'),
(27, 92, 'telefone', 'lk', 'again'),
(28, 92, 'telefone', 'lk', 'again'),
(29, 92, 'telefone', 'lk', 'again'),
(30, 92, 'telefone', 'lk', 'again'),
(31, 92, 'telefone', 'lk', 'again'),
(32, 92, 'telefone', 'lk', 'again'),
(33, 92, 'telefone', 'lk', 'again'),
(34, 95, '66664 ', '454545', '45454'),
(35, 96, '33333333', '9 65656565', '6545'),
(36, 97, 'sdgvsdgv', 'sdgv', ''),
(37, 97, 'sdgvsdgv', 'sdgv', ''),
(38, 97, 'sdgvsdgv', 'sdgv', ''),
(39, 97, 'sdgvsdgv', 'sdgv', ''),
(40, 98, 'szdvszdv', '', ''),
(41, 99, 'fgnfm', '', ''),
(42, 100, 'ascasc', '', ''),
(44, 102, '84848484 Editado', '848484 Editado', '84848484 Editado'),
(46, 2, '32167894', '98743216', '302546461'),
(51, 10, '33333', '99999', '4338'),
(55, 14, 'Show men ', 'Show men ', 'Show men '),
(56, 15, 'sdf', 'sddf', '33'),
(57, 16, '0000', '0000', '000');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_tipo_doc`
--

CREATE TABLE `tb_tipo_doc` (
  `id_tipo_doc` int(11) NOT NULL,
  `id_cad` int(11) NOT NULL,
  `tipo_doc` varchar(25) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `arquivo_anexado` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='		';

--
-- Extraindo dados da tabela `tb_tipo_doc`
--

INSERT INTO `tb_tipo_doc` (`id_tipo_doc`, `id_cad`, `tipo_doc`, `nome`, `data`, `arquivo_anexado`) VALUES
(1, 0, '', '', '0000-00-00', ''),
(2, 0, '', '', '0000-00-00', ''),
(3, 0, '', '', '0000-00-00', ''),
(4, 0, '', '', '0000-00-00', ''),
(5, 0, '', 'ylulktul', '2017-11-06', ''),
(6, 0, '', '', '0000-00-00', ''),
(7, 0, '', '', '0000-00-00', ''),
(8, 0, '', '', '0000-00-00', ''),
(9, 0, '', '', '0000-00-00', ''),
(10, 0, '', '', '0000-00-00', ''),
(11, 0, '', '', '0000-00-00', ''),
(12, 0, '', '', '0000-00-00', ''),
(13, 0, '', 'filipe', '2017-11-03', ''),
(14, 0, '', 'Filipe', '2017-11-11', ''),
(15, 0, '', 'Filipe', '2017-11-16', ''),
(16, 0, '', 'Filipe', '2017-11-16', ''),
(17, 0, 'PDF', 'dasdasd', '2017-11-09', ''),
(18, 0, 'Imagem', 'dasdasd', '2017-11-11', ''),
(19, 0, 'Imagem', '', '0000-00-00', ''),
(20, 0, 'Imagem', 'dasdas', '2017-11-11', ''),
(21, 43, 'Imagem', 'dasdasd', '2017-11-14', '220218dae539e0f0a660e100f9d6d245.jpg'),
(22, 0, 'Imagem', '', '0000-00-00', ''),
(23, 0, 'Imagem', '', '0000-00-00', ''),
(24, 88, 'Imagem', '', '0000-00-00', 'b14e02cd4845043f0f29e5b28850e936.png'),
(25, 92, 'Imagem', 'sdvsdv', '0000-00-00', '77aada05cd97d6550a79e572bebd9f95.png'),
(26, 92, 'Imagem', 'sdvsdv', '0000-00-00', '666386f51e52859e1de7446438e97327.png'),
(27, 92, 'Imagem', 'sdvsdv', '0000-00-00', '0662be035601583e22be4ad8989ee9a8.png'),
(28, 92, 'Imagem', 'sdvsdv', '0000-00-00', '8d0d6f81b6101a4450ee8e4b97c57ad0.png'),
(29, 92, 'Imagem', 'sdvsdv', '0000-00-00', '3c830b19a1598976f20e6e0f83085f89.png'),
(30, 92, 'Imagem', 'sdvsdv', '0000-00-00', '8d247cbc7a729410c68ceb22419f3f3e.png'),
(31, 92, 'Imagem', 'sdvsdv', '0000-00-00', '2eefd4b425dcd614c964015e64aa1afb.png'),
(32, 92, 'Imagem', 'sdvsdv', '0000-00-00', 'ad46906ed2c383a09bbe3fd4b6d07d75.png'),
(33, 92, 'Imagem', 'sdvsdv', '0000-00-00', '30ae5f9c4e333a775f7f5fc0b6856d3b.png'),
(34, 92, 'Imagem', 'sdvsdv', '0000-00-00', 'b0bafaf3e89252bcd66f45a97da85310.png'),
(35, 92, 'Imagem', 'sdvsdv', '0000-00-00', '32bb0b57318960ad2d00e7c308f6f56e.png'),
(36, 92, 'Imagem', 'sdvsdv', '0000-00-00', 'af659768880c3b63df0ffb70f57577c3.png'),
(37, 95, 'Imagem', 'tete', '2017-12-15', 'f9458699847998547e91c8e5c0fdb50a.png'),
(38, 96, 'PDF', '65445', '2017-12-12', '283003d143fa6cefaad1723929be634f.png'),
(39, 97, 'Imagem', 'gswdfgvsdgv', '0000-00-00', 'ecf6aace0bbbea618806ec3a66a9941c.png'),
(40, 97, 'Imagem', 'gswdfgvsdgv', '0000-00-00', '41a9fe28cd64c8d5c348be3021eefeb6.png'),
(41, 97, 'Imagem', 'gswdfgvsdgv', '0000-00-00', 'd112c7ff430660b752432f8ab98dd3be.png'),
(42, 97, 'Imagem', 'gswdfgvsdgv', '0000-00-00', 'c7179ea473bc7499732ec5520f507fcc.png'),
(43, 98, 'Imagem', 'dsvsdv', '0000-00-00', 'f074f204078f4416085c6f109e8d41b4.png'),
(44, 99, 'Imagem', 'fhmfhm', '0000-00-00', '5fd06866f03b28f79039a0ce7866c16b.png'),
(45, 100, 'Imagem', 'advdav', '0000-00-00', '3f736604e6f505c009cc023c84c17b53.png'),
(47, 102, 'Imagem Editado', 'imagem Editado', '2017-12-12', ''),
(48, 103, 'Imagem!!!ffff', 'sdvsdv!!!', '0000-00-00', ''),
(49, 2, '', '', '0000-00-00', ''),
(54, 10, '', '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_tipo_estagio`
--

CREATE TABLE `tb_tipo_estagio` (
  `id_tipo_estagio` int(11) NOT NULL,
  `tipo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_tipo_estagio`
--

INSERT INTO `tb_tipo_estagio` (`id_tipo_estagio`, `tipo`) VALUES
(3, 'Colaborador'),
(4, 'Remunerado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id_usuario` int(11) NOT NULL,
  `id_perfil` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `csenha` varchar(45) DEFAULT NULL,
  `login` varchar(45) DEFAULT NULL,
  `senha` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='							';

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`id_usuario`, `id_perfil`, `nome`, `csenha`, `login`, `senha`) VALUES
(1, 4, 'Fagner Avila', '3455c614f7fa61481eb6496daad32661', 'fagner.avila', '3455c614f7fa61481eb6496daad32661'),
(11, 4, 'Luiz Filipe S S', '4297f44b13955235245b2497399d7a93', 'luiz.salim', '4297f44b13955235245b2497399d7a93'),
(12, 4, 'ThainÃ¡ ', '4297f44b13955235245b2497399d7a93', 'thaina.coimbra', '4297f44b13955235245b2497399d7a93'),
(13, 2, 'Baby Man ', '4297f44b13955235245b2497399d7a93', 'baby.man', '4297f44b13955235245b2497399d7a93'),
(15, 1, 'oliveira', '25d55ad283aa400af464c76d713c07ad', 'oliveira.oliveira', '25d55ad283aa400af464c76d713c07ad'),
(16, 1, 'Salim', '4297f44b13955235245b2497399d7a93', 'salim.violento', '4297f44b13955235245b2497399d7a93'),
(17, 2, 'show', 'f92c714dce2d34ce06e0c445bacca461', 'show.man', 'f92c714dce2d34ce06e0c445bacca461'),
(18, 1, 'Rodrigo', 'e10adc3949ba59abbe56e057f20f883e', 'rodrigo', 'e10adc3949ba59abbe56e057f20f883e'),
(19, 4, 'Henrique ', '550e1bafe077ff0b0b67f4e32f29d751', 'henrique.boiteux', '550e1bafe077ff0b0b67f4e32f29d751'),
(20, 2, 'ROSIMARI DA SILVA SAURO', 'e10adc3949ba59abbe56e057f20f883e', 'rosi', 'e10adc3949ba59abbe56e057f20f883e'),
(22, 2, 'Henrique ', '25d55ad283aa400af464c76d713c07ad', 'henrique.boiteux', '25d55ad283aa400af464c76d713c07ad'),
(23, 2, 'Jaimexxx', '4531e8924edde928f341f7df3ab36c70', 'jaimexx', '4531e8924edde928f341f7df3ab36c70'),
(24, 2, 'Jaime Costa Fernandes', 'c5a90d23e7908e6454b6c52e52aabc77', 'jaime.costa', 'c5a90d23e7908e6454b6c52e52aabc77');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_arquivo`
--
ALTER TABLE `tb_arquivo`
  ADD PRIMARY KEY (`id_arquivo`);

--
-- Indexes for table `tb_cadastro`
--
ALTER TABLE `tb_cadastro`
  ADD PRIMARY KEY (`id_cad`);

--
-- Indexes for table `tb_curso`
--
ALTER TABLE `tb_curso`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indexes for table `tb_defensor`
--
ALTER TABLE `tb_defensor`
  ADD PRIMARY KEY (`id_defensor`);

--
-- Indexes for table `tb_defensoria`
--
ALTER TABLE `tb_defensoria`
  ADD PRIMARY KEY (`id_defensoria`);

--
-- Indexes for table `tb_end`
--
ALTER TABLE `tb_end`
  ADD PRIMARY KEY (`id_end`);

--
-- Indexes for table `tb_imagens`
--
ALTER TABLE `tb_imagens`
  ADD PRIMARY KEY (`id_imagens`);

--
-- Indexes for table `tb_instituicao`
--
ALTER TABLE `tb_instituicao`
  ADD PRIMARY KEY (`id_instituicao`);

--
-- Indexes for table `tb_lotacao`
--
ALTER TABLE `tb_lotacao`
  ADD PRIMARY KEY (`id_lotacao`);

--
-- Indexes for table `tb_naj`
--
ALTER TABLE `tb_naj`
  ADD PRIMARY KEY (`id_naj`);

--
-- Indexes for table `tb_perfil`
--
ALTER TABLE `tb_perfil`
  ADD PRIMARY KEY (`id_perfil`);

--
-- Indexes for table `tb_remocao`
--
ALTER TABLE `tb_remocao`
  ADD PRIMARY KEY (`id_remocao`);

--
-- Indexes for table `tb_situacao`
--
ALTER TABLE `tb_situacao`
  ADD PRIMARY KEY (`id_situacao`);

--
-- Indexes for table `tb_telefone`
--
ALTER TABLE `tb_telefone`
  ADD PRIMARY KEY (`id_telefone`);

--
-- Indexes for table `tb_tipo_doc`
--
ALTER TABLE `tb_tipo_doc`
  ADD PRIMARY KEY (`id_tipo_doc`);

--
-- Indexes for table `tb_tipo_estagio`
--
ALTER TABLE `tb_tipo_estagio`
  ADD PRIMARY KEY (`id_tipo_estagio`);

--
-- Indexes for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_arquivo`
--
ALTER TABLE `tb_arquivo`
  MODIFY `id_arquivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_cadastro`
--
ALTER TABLE `tb_cadastro`
  MODIFY `id_cad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_curso`
--
ALTER TABLE `tb_curso`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_defensor`
--
ALTER TABLE `tb_defensor`
  MODIFY `id_defensor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_defensoria`
--
ALTER TABLE `tb_defensoria`
  MODIFY `id_defensoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_end`
--
ALTER TABLE `tb_end`
  MODIFY `id_end` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `tb_imagens`
--
ALTER TABLE `tb_imagens`
  MODIFY `id_imagens` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_instituicao`
--
ALTER TABLE `tb_instituicao`
  MODIFY `id_instituicao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `tb_lotacao`
--
ALTER TABLE `tb_lotacao`
  MODIFY `id_lotacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tb_naj`
--
ALTER TABLE `tb_naj`
  MODIFY `id_naj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tb_perfil`
--
ALTER TABLE `tb_perfil`
  MODIFY `id_perfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_remocao`
--
ALTER TABLE `tb_remocao`
  MODIFY `id_remocao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tb_situacao`
--
ALTER TABLE `tb_situacao`
  MODIFY `id_situacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_telefone`
--
ALTER TABLE `tb_telefone`
  MODIFY `id_telefone` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `tb_tipo_doc`
--
ALTER TABLE `tb_tipo_doc`
  MODIFY `id_tipo_doc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `tb_tipo_estagio`
--
ALTER TABLE `tb_tipo_estagio`
  MODIFY `id_tipo_estagio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
