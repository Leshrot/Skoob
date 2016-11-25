-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Nov 21, 2016 as 07:02 PM
-- Versão do Servidor: 5.1.41
-- Versão do PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

CREATE DATABASE IF NOT EXISTS db_skoob;
USE db_skoob;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `db_skoob`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_autor`
--

CREATE TABLE IF NOT EXISTS `tb_autor` (
  `cd_autor` int(11) NOT NULL,
  `nm_autor` varchar(40) DEFAULT NULL,
  `ds_autor` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`cd_autor`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_autor`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_avaliacao_autor`
--

CREATE TABLE IF NOT EXISTS `tb_avaliacao_autor` (
  `cd_avaliacao_autor` int(11) NOT NULL,
  `vl_avaliacao_autor` int(3) DEFAULT NULL,
  `tb_autor_cd_autor` int(11) NOT NULL,
  PRIMARY KEY (`cd_avaliacao_autor`),
  KEY `tb_avaliacao_autor_tb_autor_FK` (`tb_autor_cd_autor`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_avaliacao_autor`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_avaliacao_editora`
--

CREATE TABLE IF NOT EXISTS `tb_avaliacao_editora` (
  `cd_avaliacao_editora` int(11) NOT NULL,
  `vl_avaliacao_editora` int(3) DEFAULT NULL,
  `tb_editora_cd_editora` int(11) NOT NULL,
  PRIMARY KEY (`cd_avaliacao_editora`),
  KEY `tb_avaliacao_editora_tb_editora_FK` (`tb_editora_cd_editora`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_avaliacao_editora`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_avaliacao_livro`
--

CREATE TABLE IF NOT EXISTS `tb_avaliacao_livro` (
  `cd_avaliacao_livro` int(11) NOT NULL,
  `vl_avaliacao_livro` int(3) DEFAULT NULL,
  `tb_livro_cd_isbn_10_livro` int(11) NOT NULL,
  `tb_livro_cd_isbn_13_livro` int(11) NOT NULL,
  PRIMARY KEY (`cd_avaliacao_livro`),
  KEY `tb_avaliacao_livro_tb_livro_FK` (`tb_livro_cd_isbn_10_livro`,`tb_livro_cd_isbn_13_livro`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_avaliacao_livro`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_categoria`
--

CREATE TABLE IF NOT EXISTS `tb_categoria` (
  `cd_categoria` int(11) NOT NULL,
  `ds_categoria` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`cd_categoria`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_categoria`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_comentario`
--

CREATE TABLE IF NOT EXISTS `tb_comentario` (
  `cd_comentario` int(11) NOT NULL,
  `ds_comentario` varchar(200) DEFAULT NULL,
  `dt_comentario` date DEFAULT NULL,
  `qt_curtidas_comentario` int(11) DEFAULT NULL,
  `tb_leitor_cd_leitor_tb_leitor_cd_leitor_ID` int(3) NOT NULL,
  PRIMARY KEY (`cd_comentario`),
  KEY `tb_comentario_tb_leitor_cd_leitor_FK` (`tb_leitor_cd_leitor_tb_leitor_cd_leitor_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_comentario`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_editora`
--

CREATE TABLE IF NOT EXISTS `tb_editora` (
  `cd_editora` int(11) NOT NULL,
  `nm_editora` varchar(20) DEFAULT NULL,
  `ds_editora` varchar(100) DEFAULT NULL,
  `ds_site_editora` varchar(100) DEFAULT NULL,
  `cd_prefixo_editora` int(11) DEFAULT NULL,
  `nr_cnpj_editora` int(11) DEFAULT NULL,
  `ds_url_logo_editora` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`cd_editora`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_editora`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_leitor`
--



CREATE TABLE IF NOT EXISTS `tb_leitor` (
  `cd_leitor` int(11) NOT NULL,
  `nm_leitor` varchar(40) DEFAULT NULL,
  `nm_apelido_leitor` varchar(40) DEFAULT NULL,
  `ds_sexo_leitor` char(1) DEFAULT NULL,
  `dt_nasc_leitor` date DEFAULT NULL,
  `ds_email_leitor` varchar(40) DEFAULT NULL,
  `ds_senha_leitor` varchar(16) DEFAULT NULL,
  `ds_distrito_leitor` char(2) DEFAULT NULL,
  PRIMARY KEY (`cd_leitor`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_leitor`
--

INSERT DELAYED IGNORE INTO `tb_leitor` (`cd_leitor`, `nm_leitor`, `nm_apelido_leitor`, `ds_sexo_leitor`, `dt_nasc_leitor`, `ds_email_leitor`, `ds_senha_leitor`, `ds_distrito_leitor`) VALUES
(3, 'Diogo Camilo', 'Camilo', 'M', '1997-01-02', 'diogo@gmail.com', 'rgbs', 'SP');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_livro`
--

CREATE TABLE IF NOT EXISTS `tb_livro` (
  `cd_isbn_10_livro` int(11) NOT NULL,
  `cd_isbn_13_livro` int(11) NOT NULL,
  `nm_livro` varchar(30) DEFAULT NULL,
  `ic_lancamento` char(1) DEFAULT NULL,
  `dt_lancamento` date DEFAULT NULL,
  `ds_resumo_livro` varchar(300) DEFAULT NULL,
  `nr_edicao_livro` int(11) DEFAULT NULL,
  `nr_pagina_livro` int(11) DEFAULT NULL,
  `ds_idioma_livro` varchar(20) DEFAULT NULL,
  `ds_idioma_original_livro` varchar(20) DEFAULT NULL,
  `ds_tamanho_livro` varchar(10) DEFAULT NULL,
  `vl_peso_livro` int(11) DEFAULT NULL,
  `ds_tipo_capa_livro` varchar(20) DEFAULT NULL,
  `ds_url_capa_livro` varchar(200) DEFAULT NULL,
  `tb_loja_cd_loja` int(11) NOT NULL,
  `tb_editora_cd_editora` int(11) NOT NULL,
  PRIMARY KEY (`cd_isbn_10_livro`,`cd_isbn_13_livro`),
  KEY `tb_livro_tb_editora_FK` (`tb_editora_cd_editora`),
  KEY `tb_livro_tb_loja_FK` (`tb_loja_cd_loja`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_livro`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_livro_autor`
--

CREATE TABLE IF NOT EXISTS `tb_livro_autor` (
  `tb_livro_cd_isbn_10_livro` int(11) NOT NULL,
  `tb_livro_cd_isbn_13_livro` int(11) NOT NULL,
  `tb_autor_cd_autor` int(11) NOT NULL,
  PRIMARY KEY (`tb_livro_cd_isbn_10_livro`,`tb_livro_cd_isbn_13_livro`,`tb_autor_cd_autor`),
  KEY `FK_ASS_13` (`tb_autor_cd_autor`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_livro_autor`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_livro_categoria`
--

CREATE TABLE IF NOT EXISTS `tb_livro_categoria` (
  `tb_livro_cd_isbn_10_livro` int(11) NOT NULL,
  `tb_livro_cd_isbn_13_livro` int(11) NOT NULL,
  `tb_categoria_cd_categoria` int(11) NOT NULL,
  PRIMARY KEY (`tb_livro_cd_isbn_10_livro`,`tb_livro_cd_isbn_13_livro`,`tb_categoria_cd_categoria`),
  KEY `FK_ASS_11` (`tb_categoria_cd_categoria`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_livro_categoria`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_livro_leitor`
--

CREATE TABLE IF NOT EXISTS `tb_livro_leitor` (
  `ds_status_leitura` varchar(10) DEFAULT NULL,
  `ds_status_livro` varchar(50) DEFAULT NULL,
  `tb_livro_cd_isbn_10_livro` int(11) NOT NULL,
  `tb_livro_cd_isbn_13_livro` int(11) NOT NULL,
  `tb_leitor_cd_leitor` int(11) NOT NULL,
  `tb_leitor_cd_leitor_ID` int(3) NOT NULL,
  PRIMARY KEY (`tb_leitor_cd_leitor_ID`),
  KEY `tb_leitor_cd_leitor_tb_leitor_FK` (`tb_leitor_cd_leitor`),
  KEY `tb_leitor_cd_leitor_tb_livro_FK` (`tb_livro_cd_isbn_10_livro`,`tb_livro_cd_isbn_13_livro`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_livro_leitor`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_loja`
--

CREATE TABLE IF NOT EXISTS `tb_loja` (
  `cd_loja` int(11) NOT NULL,
  `nm_loja` varchar(50) DEFAULT NULL,
  `ds_site_loja` varchar(100) DEFAULT NULL,
  `vl_livro_loja` int(3) DEFAULT NULL,
  PRIMARY KEY (`cd_loja`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_loja`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
