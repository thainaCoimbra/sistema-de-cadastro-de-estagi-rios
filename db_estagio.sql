-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22-Jun-2018 às 19:55
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.3

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
-- Estrutura da tabela `preteste`
--

CREATE TABLE `preteste` (
  `Id` double DEFAULT NULL,
  `Matricula` double DEFAULT NULL,
  `Nome` varchar(255) DEFAULT NULL,
  `Nacionalidade` varchar(255) DEFAULT NULL,
  `Estado Civil` varchar(255) DEFAULT NULL,
  `Naturalidade` varchar(255) DEFAULT NULL,
  `Data de Nascimento` datetime DEFAULT NULL,
  `Filiação` varchar(255) DEFAULT NULL,
  `Sexo` varchar(255) DEFAULT NULL,
  `Identidade` varchar(255) DEFAULT NULL,
  `CPF` varchar(255) DEFAULT NULL,
  `OAB` varchar(255) DEFAULT NULL,
  `Título de Eleitor` varchar(255) DEFAULT NULL,
  `Zona` varchar(255) DEFAULT NULL,
  `Seção` double DEFAULT NULL,
  `DataCadastro` varchar(255) DEFAULT NULL,
  `DataDesligamento` datetime DEFAULT NULL,
  `TipoEstagio` varchar(255) DEFAULT NULL,
  `Situacao` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, 2, '', '', ''),
(2, 3, '', '', ''),
(3, 4, '', '', ''),
(4, 5, '', '', ''),
(5, 7, '', '', ''),
(6, 8, '', '', ''),
(7, 9, '', '', ''),
(8, 10, '', '', ''),
(9, 11, '', '', ''),
(10, 12, '', '', ''),
(11, 13, '', '', ''),
(12, 14, '', '', ''),
(13, 15, '', '', ''),
(14, 16, '', '', ''),
(15, 17, '', '', ''),
(16, 18, '', '', ''),
(17, 19, '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cadastro`
--

CREATE TABLE `tb_cadastro` (
  `orgao` varchar(255) DEFAULT NULL,
  `uf_identidade` text NOT NULL,
  `id_cad` int(11) NOT NULL,
  `id_situacao` int(11) NOT NULL,
  `id_tipo_estagio` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `matricula` varchar(45) DEFAULT NULL,
  `nacionalidade` varchar(45) DEFAULT NULL,
  `estado_civil` varchar(45) DEFAULT NULL,
  `naturalidade` varchar(100) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `filiacao` varchar(200) DEFAULT NULL,
  `identidade` varchar(45) DEFAULT NULL,
  `CPF` varchar(45) NOT NULL DEFAULT '000.000.000-00',
  `OAB` varchar(45) DEFAULT NULL,
  `titulo_eleitor` varchar(45) DEFAULT NULL,
  `zona` varchar(45) DEFAULT NULL,
  `secao` varchar(45) DEFAULT NULL,
  `data_cadastro` varchar(20) DEFAULT NULL,
  `data_desligamento` date DEFAULT NULL,
  `sexo` varchar(45) NOT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_cadastro`
--

INSERT INTO `tb_cadastro` (`orgao`, `uf_identidade`, `id_cad`, `id_situacao`, `id_tipo_estagio`, `nome`, `matricula`, `nacionalidade`, `estado_civil`, `naturalidade`, `data_nascimento`, `filiacao`, `identidade`, `CPF`, `OAB`, `titulo_eleitor`, `zona`, `secao`, `data_cadastro`, `data_desligamento`, `sexo`, `email`) VALUES
('', 'PB', 1, 1, 1, 'thaina coimbra', '1201804-27', 'Brasileiro', '', 'LKJLKJ', '1211-12-12', 'KJLKJLKJ', '121212121', '221.121.221-21', '1212121', '1212 1212 1212', '', '', '27/04/2018', '0000-00-00', '', 'LKJLKJKJ'),
('SJTS - Secretaria da Justiça do Trabalho e Segurança', 'DF', 2, 1, 1, 'kjlkjlkj', '2201804-27', 'Brasileiro', 'UNIÃO ESTÁVEL', 'LKJLJLKJ', '1211-12-12', 'LKJLKJL', '12121212121', '221.212.121-21', '', '', '', '', '27/04/2018', '0000-00-00', 'FEMININO', 'lkjlkjlkj'),
('SJS - Secretaria da Justiça e Segurança', 'PR', 3, 1, 1, 'asdasdasd', '3201804-27', 'Brasileiro', 'SOLTEIRO(A)', 'FSDAFSDA', '1211-12-12', 'ASDFADSA', '21212121', '121.212.121-21', '', '', '', '', '27/04/2018', '0000-00-00', 'MASCULINO', 'FSDAFSA'),
('POM - Polícia Militar', 'RJ', 4, 1, 1, 'zsfhfg vbrt', '4201804-27', 'Brasileiro', 'Casado', 'CTF UYRKU', '5312-12-13', ' UKYJF HJGC', '32138651', '357.135.712-46', '', '', '', '', '27/04/2018', '0000-00-00', 'Feminino', 'TCRKUTRLV '),
('PM - Polícia Militar', 'AM', 5, 1, 1, 'teste', '5201805-03', 'Brasileiro', 'Divorciado', 'TESTE', '1211-12-12', 'TESTE', '313213213', '212.121.212-21', '', '', '', '', '03/05/2018', '0000-00-00', 'Feminino', 'teste'),
('MEX', 'AC', 6, 1, 1, 'GEDEN', '6-18', 'Brasileiro', 'Solteiro(a)', 'FSDAFSDA', '1212-12-12', 'LKJLKJL', '216513', '354.654.163-54', '', '', '', '', '29/05/2018', '0000-00-00', 'Masculino', 'FSDAFSA'),
('SJS ', 'PI', 7, 1, 1, 'GEDEN', '7-18', 'Brasileiro', 'Solteiro(a)', 'LKJLJLKJ', '1212-12-12', 'PAI', '2212121', '212.122.122-12', '', '', '', '', '29/05/2018', '1211-12-12', 'Masculino', 'TCRKUTRLV '),
('PF', 'AC', 8, 1, 1, 'TESTE', '8-18', 'Brasileiro', 'Solteiro(a)', 'LKJLJLKJ', '1212-12-23', 'LKJLKJL', '12121212212', '541.904.190-49', '', '', '', '', '29/05/2018', '0000-00-00', 'Masculino', 'FSDAFSA'),
('MEX', 'AC', 9, 1, 1, 'SUENY', '9-18', 'Brasileiro', 'Solteiro(a)', 'FSDAFSDA', '1212-12-12', 'ASDFADSA', '1321321', '212.121.212-21', '', '', '', '', '29/05/2018', '0000-00-00', 'Masculino', 'lkjlkjlkj'),
('', 'AC', 10, 1, 1, 'NOME DO ARQUIVO', '10-18', 'Brasileiro', 'Solteiro(a)', 'FSDAFSDA', '1211-12-12', 'PAI', '21212121', '121.212.121-22', '', '', '', '', '29/05/2018', '0000-00-00', 'Masculino', 'FSDAFSA'),
('', 'AC', 11, 1, 1, 'NOME DO ARQUIVO', '11-18', 'Brasileiro', 'Solteiro(a)', 'FSDAFSDA', '1211-12-12', 'ASDFADSA', '986386', '313.132.354-68', '', '', '', '', '30/05/2018', '0000-00-00', 'Masculino', 'TCRKUTRLV '),
('', 'AC', 13, 1, 1, 'TESTE', '13-18', 'Brasileiro', 'Solteiro(a)', 'JHGJGH', '2014-02-24', 'SITIC', '32454', '242.424.242-42', '', '', '', '', '2018-07-16', '0000-00-00', 'Masculino', 'LKJLKJKJ'),
('', 'AC', 14, 1, 1, 'SUENY', '14-18', 'Brasileiro', 'Solteiro(a)', 'LKJLJLKJ', '1212-12-12', 'PAI', '16516816', '321.685.168-16', '', '', '', '', '1212-12-15', '0000-00-00', 'Masculino', 'lkjlkjlkj'),
('PM', 'AC', 16, 1, 1, 'THAINÁ', '15-18', 'Brasileiro', 'Solteiro(a)', 'KJHKJH', '1999-01-10', 'PAI', '68768743', '987.965.438-74', '', '', '', '', '2002-02-20', '0000-00-00', 'Masculino', 'jhgjhg'),
('SSP', 'AC', 17, 1, 1, 'THAINÁ COIMBRA', '17-18', 'Brasileiro', 'Solteiro(a)', 'JGJG', '1222-12-12', 'JHGJG', '3813853', '321.385.163-85', '', '', '', '', '2018-06-13', '2020-12-18', 'Masculino', 'jhgjhgjyg'),
('SES', 'PI', 18, 1, 1, 'JORGE', '18-18', 'Brasileiro', 'Solteiro(a)', 'JGJG', '1212-12-12', 'PAI', '321321', '313.513.516-35', '', '', '', '', '2018-06-10', '2019-06-10', 'Masculino', 'jhgjgj'),
('PM', 'BA', 19, 1, 1, 'JESSICA', '19-18', 'Brasileiro', 'Solteiro(a)', 'JGJG', '1211-12-12', 'JHGJG', '132121', '321.321.321-32', '', '', '', '', '2018-06-01', '2019-01-30', 'Masculino', 'jhgjhg');

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
(1, 'ADMINISTRAÇÃO');

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
(1, 'teste', 'Defensor');

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
(1, 2, 'DFGDFGDFG', '', '', '', '', '', '																																																																												'),
(2, 3, '', '', '', '', '', '', '																			'),
(3, 4, 'QNE 17', '72125-170', '', 'Taguatinga Norte (Taguatinga)', 'DF', 'BrasÃ­lia', '																																						'),
(4, 5, 'QNE 17', '72125-170', '', 'Taguatinga Norte (Taguatinga)', 'DF', 'BrasÃ­lia', '																			'),
(5, 7, '', '', '', '', '', '', ''),
(6, 8, '', '', '', '', '', '', ''),
(7, 9, '', '', '', '', '', '', ''),
(8, 10, '', '', '', '', '', '', ''),
(9, 11, '', '', '', '', '', '', ''),
(11, 13, '', '', '', '', '', '', ''),
(12, 14, '', '', '', '', '', '', ''),
(14, 16, '', '', '', '', '', '', ''),
(15, 17, '', '', '', '', '', '', ''),
(16, 18, 'QNE 17', '72125-170', '', 'Taguatinga Norte (Taguatinga)', 'DF', 'Brasília', ''),
(17, 19, '', '', '', '', '', '', '');

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
(1, 1, '', 1, 'Nivel Superior', '', 'Matutino', '0000-00-00', '0000-00-00'),
(2, 1, '', 1, 'Nivel Superior', '', 'Matutino', '0000-00-00', '0000-00-00'),
(3, 1, '', 1, 'Nivel Superior', '', 'Matutino', '0000-00-00', '0000-00-00'),
(4, 2, 'DFGHDFGFD', 1, 'Nivel Superior', '', 'Matutino', '0000-00-00', '0000-00-00'),
(5, 1, '', 1, 'Nivel Superior', '', 'Matutino', '0000-00-00', '0000-00-00'),
(6, 3, '', 1, 'Nivel Superior', '', 'Matutino', '0000-00-00', '0000-00-00'),
(7, 4, 'SFGBXFB', 1, 'Nivel Superior', '', 'Matutino', '0000-00-00', '0000-00-00'),
(8, 5, '', 1, 'Nivel Superior', '', 'Matutino', '0000-00-00', '0000-00-00'),
(9, 7, '', 1, 'Nivel Superior', '', 'Matutino', '0000-00-00', '0000-00-00'),
(10, 7, '', 1, 'Nivel Superior', '', 'Matutino', '0000-00-00', '0000-00-00'),
(11, 8, '', 1, 'Nivel Superior', '', 'Matutino', '0000-00-00', '0000-00-00'),
(12, 9, '', 1, 'Nivel Superior', '', 'Matutino', '0000-00-00', '0000-00-00'),
(13, 10, '', 1, 'Nivel Superior', '', 'Matutino', '0000-00-00', '0000-00-00'),
(14, 11, '', 1, 'Nivel Superior', '', 'Matutino', '0000-00-00', '0000-00-00'),
(16, 13, '', 1, 'Nivel Superior', '', 'Matutino', '0000-00-00', '0000-00-00'),
(17, 14, '', 1, 'Nivel Superior', '', 'Matutino', '0000-00-00', '0000-00-00'),
(19, 16, '', 1, 'Nivel Superior', '', 'Matutino', '0000-00-00', '0000-00-00'),
(20, 17, '', 1, 'Nivel Superior', '', 'Matutino', '0000-00-00', '0000-00-00'),
(21, 18, 'UDF', 1, 'Nivel Superior', '', 'Matutino', '0000-00-00', '0000-00-00'),
(22, 19, '', 1, 'Nivel Superior', '', 'Matutino', '0000-00-00', '0000-00-00');

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
(1, 1, 0, 2),
(2, 1, 0, 1),
(3, 1, 0, 3),
(4, 1, 0, 4),
(5, 1, 0, 5),
(6, 2, 0, 7),
(7, 2, 0, 7),
(8, 1, 0, 8),
(9, 2, 0, 9),
(10, 2, 0, 10),
(11, 2, 0, 11),
(13, 1, 0, 13),
(14, 3, 0, 14),
(16, 2, 0, 16),
(17, 7, 0, 17),
(18, 6, 0, 18),
(19, 1, 0, 19);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_naj`
--

CREATE TABLE `tb_naj` (
  `id_naj` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `endereco` varchar(200) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `CEP` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_naj`
--

INSERT INTO `tb_naj` (`id_naj`, `nome`, `endereco`, `telefone`, `CEP`) VALUES
(1, 'teste', NULL, NULL, ''),
(2, 'fórum', '', '', ''),
(3, 'sede', '', '', ''),
(4, 'brasilia', '', '', ''),
(5, 'recanto', '', '', ''),
(6, 'taguatinga', '', '', ''),
(7, 'guará', '', '', '');

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
(1, 'Super Administrador'),
(2, 'Administrador'),
(3, 'Usuário');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_remocao`
--

CREATE TABLE `tb_remocao` (
  `id_remocao` int(11) NOT NULL,
  `id_naj` int(11) DEFAULT NULL,
  `id_defensoria` int(11) DEFAULT NULL,
  `id_cad` int(11) DEFAULT NULL,
  `data_rem` varchar(10) DEFAULT NULL,
  `id_najNova` int(11) DEFAULT NULL,
  `id_defensoriaNova` int(11) DEFAULT NULL,
  `id_tipo_estagio` int(11) DEFAULT NULL,
  `obs` text,
  `totalHoras` int(11) DEFAULT NULL,
  `data_inicio` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_remocao`
--

INSERT INTO `tb_remocao` (`id_remocao`, `id_naj`, `id_defensoria`, `id_cad`, `data_rem`, `id_najNova`, `id_defensoriaNova`, `id_tipo_estagio`, `obs`, `totalHoras`, `data_inicio`) VALUES
(1, 1, 0, 1, '29/05/2018', 2, 0, 0, 'teste teste', NULL, ''),
(2, 2, 0, 1, '29/05/2018', 1, 0, 0, 'outro teste', NULL, ''),
(10, NULL, NULL, 11, '30/05/2018', 2, NULL, 1, NULL, NULL, ''),
(6, 0, 0, 8, '29/05/2018', 1, 0, NULL, '', NULL, ''),
(12, NULL, NULL, 13, '2018-07-16', 2, NULL, 1, 'teste remoÃ§Ã£o', NULL, ''),
(11, NULL, NULL, 12, '30/05/2018', 1, NULL, 1, 'rthherh fuck S2', NULL, ''),
(13, 2, 0, 13, '30/05/2018', 1, 0, 0, 'tyrtduyrtu', NULL, ''),
(14, NULL, NULL, 14, '1212-12-15', 2, NULL, 1, 'sdrfgdghdg', NULL, ''),
(15, 2, 0, 14, '30/05/2018', 1, 0, 0, 'srgfyjfyjfyj12121212', NULL, ''),
(16, 1, 0, 12, '01/06/2018', 2, 0, 0, 'tgsrdtgsrdgsdg4545', NULL, ''),
(17, 2, 0, 14, '11/06/2018', 3, 0, 1, 'teste', NULL, '2018-12-20'),
(19, NULL, NULL, 16, '12/06/2018', 2, NULL, 1, 'teste1', NULL, '2002-02-20'),
(21, 1, 0, 16, '12/06/2018', 3, 0, 1, 'teste2', NULL, '2018-06-20'),
(22, 3, 0, 16, NULL, 2, 0, 1, 'tyeste3', NULL, '2019-02-13'),
(23, NULL, NULL, 17, '15/06/2018', 3, NULL, 1, 'teste 12', NULL, '2018-06-13'),
(24, 3, 0, 17, '15/06/2018', 2, 0, 1, 'teste2', NULL, '2018-06-15'),
(25, 2, 0, 17, '15/06/2018', 3, 0, 1, 'teste 7887 jjjj', NULL, '2018-06-21'),
(27, 3, 0, 17, '15/06/2018', 4, 0, 1, 'teste aaaaa ', NULL, '2018-06-29'),
(28, 4, 0, 17, '15/06/2018', 7, 0, 1, 'teste 1 ', NULL, '2018-06-16'),
(29, 7, 0, 17, '19/06/2018', 1, 0, 1, 'teste 2 ', NULL, '2018-06-16'),
(61, NULL, NULL, 18, NULL, 2, NULL, 1, 'Teste 1 Fórum', NULL, '2018-06-10'),
(62, 2, 0, 18, NULL, 3, 0, 1, 'teste 2 ', NULL, '2018-06-22'),
(63, 3, 0, 18, NULL, 4, 0, 1, 'teste 3', NULL, '2018-06-28'),
(64, 4, 0, 18, '2018-06-19', 5, 0, 1, 'teste4', NULL, '2018-07-02'),
(65, 5, 0, 18, NULL, 7, 0, 1, 'teste5', NULL, '2018-07-18'),
(66, 7, 0, 18, NULL, 6, 0, 1, 'teste6', NULL, '2018-07-25'),
(67, 5, 0, 17, NULL, 7, 0, 1, 'testeb lkjlo', NULL, '2018-06-29'),
(68, NULL, NULL, 19, '20/06/2019', 3, NULL, 1, 'teste 1 ABC', 1200088, '2019-06-02'),
(69, 2, 0, 19, '19/06/2018', 3, 0, 1, 'teste 2', 50007, '2018-06-29'),
(70, 3, 0, 19, '21/06/2018', 5, 0, 1, 'teste 3 B', 30000, '2019-08-18'),
(71, 3, 0, 19, '21/06/2018', 1, 0, 1, 'setsetsrt', 0, '1212-12-12'),
(72, 1, 0, 19, NULL, 1, 0, 1, 'teste 56576', 0, '2018-06-21');

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
(1, 'ATIVO');

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
(1, 1, '', '', ''),
(2, 1, '', '', ''),
(3, 1, '', '', ''),
(4, 2, '', '', ''),
(5, 1, '', '', ''),
(6, 3, '', '', ''),
(7, 4, '6354-6846', '', ''),
(8, 5, '', '', ''),
(9, 7, '', '', ''),
(10, 7, '', '', ''),
(11, 8, '', '', ''),
(12, 9, '', '', ''),
(13, 10, '', '', ''),
(14, 11, '', '', ''),
(16, 13, '', '', ''),
(17, 14, '', '', ''),
(19, 16, '', '', ''),
(20, 17, '', '', ''),
(21, 18, '', '', ''),
(22, 19, '', '', '');

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
(1, 'REMUNERADO');

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
(1, 1, 'ADMINISTRADOR', 'c5a90d23e7908e6454b6c52e52aabc77', 'admin', 'c5a90d23e7908e6454b6c52e52aabc77');

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
  MODIFY `id_arquivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_cadastro`
--
ALTER TABLE `tb_cadastro`
  MODIFY `id_cad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_curso`
--
ALTER TABLE `tb_curso`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_defensor`
--
ALTER TABLE `tb_defensor`
  MODIFY `id_defensor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_defensoria`
--
ALTER TABLE `tb_defensoria`
  MODIFY `id_defensoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_end`
--
ALTER TABLE `tb_end`
  MODIFY `id_end` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_imagens`
--
ALTER TABLE `tb_imagens`
  MODIFY `id_imagens` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_instituicao`
--
ALTER TABLE `tb_instituicao`
  MODIFY `id_instituicao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_lotacao`
--
ALTER TABLE `tb_lotacao`
  MODIFY `id_lotacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_naj`
--
ALTER TABLE `tb_naj`
  MODIFY `id_naj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_perfil`
--
ALTER TABLE `tb_perfil`
  MODIFY `id_perfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_remocao`
--
ALTER TABLE `tb_remocao`
  MODIFY `id_remocao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `tb_situacao`
--
ALTER TABLE `tb_situacao`
  MODIFY `id_situacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_telefone`
--
ALTER TABLE `tb_telefone`
  MODIFY `id_telefone` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_tipo_doc`
--
ALTER TABLE `tb_tipo_doc`
  MODIFY `id_tipo_doc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_tipo_estagio`
--
ALTER TABLE `tb_tipo_estagio`
  MODIFY `id_tipo_estagio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
