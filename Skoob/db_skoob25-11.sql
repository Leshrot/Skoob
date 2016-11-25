-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Nov 29, 2016 as 01:17 AM
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
  `cd_isbn_10_livro` bigint(11) NOT NULL,
  `cd_isbn_13_livro` bigint(11) NOT NULL,
  `nm_livro` varchar(30) DEFAULT NULL,
  `ic_lancamento` char(1) DEFAULT NULL,
  `dt_lancamento` date DEFAULT NULL,
  `ds_resumo_livro` varchar(2000) DEFAULT NULL,
  `nr_edicao_livro` int(11) DEFAULT NULL,
  `nr_pagina_livro` int(11) DEFAULT NULL,
  `ds_idioma_livro` varchar(20) DEFAULT NULL,
  `ds_idioma_original_livro` varchar(20) DEFAULT NULL,
  `ds_tamanho_livro` varchar(10) DEFAULT NULL,
  `vl_peso_livro` int(11) DEFAULT NULL,
  `ds_tipo_capa_livro` varchar(20) DEFAULT NULL,
  `ds_url_capa_livro` varchar(500) DEFAULT NULL,
  `ds_url_video_livro` varchar(500) DEFAULT NULL,
  `ds_video_livro` varchar(500) DEFAULT NULL,
  `tb_loja_cd_loja` int(11) NOT NULL,
  `tb_editora_cd_editora` int(11) NOT NULL,
  PRIMARY KEY (`cd_isbn_10_livro`,`cd_isbn_13_livro`),
  KEY `tb_livro_tb_editora_FK` (`tb_editora_cd_editora`),
  KEY `tb_livro_tb_loja_FK` (`tb_loja_cd_loja`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_livro`
--

INSERT DELAYED IGNORE INTO `tb_livro` (`cd_isbn_10_livro`, `cd_isbn_13_livro`, `nm_livro`, `ic_lancamento`, `dt_lancamento`, `ds_resumo_livro`, `nr_edicao_livro`, `nr_pagina_livro`, `ds_idioma_livro`, `ds_idioma_original_livro`, `ds_tamanho_livro`, `vl_peso_livro`, `ds_tipo_capa_livro`, `ds_url_capa_livro`, `ds_url_video_livro`, `ds_video_livro`, `tb_loja_cd_loja`, `tb_editora_cd_editora`) VALUES
(8551000535, 9788551000533, 'Contos peculiares', '1', '0000-00-00', 'O livro dentro dos livros, Contos peculiares é a coletânea de contos e fábulas citada ao longo da série O lar da srta. Peregrine para crianças peculiares — o livro com as histórias que os jovens peculiares escutam sua protetora contar e recontar.\r\nUm menino que vira gafanhoto e foge com um grupo de gansos; uma princesa com língua de cobra à procura de um príncipe com quem se casar; canibais ricos que comem braços e pernas de peculiares que têm o dom de se regenerar são alguns dos personagens dessas narrativas que há séculos povoam o imaginário dos peculiares, oferecendo não apenas valiosas lições, mas também pistas para informações secretas, como a localização exata de certas fendas temporais, por exemplo. Compilado por Millard Nullings, o menino invisível acolhido no lar da srta. Peregrine, o livro inclui surpreendentes comentários e notas, além de um desfecho alternativo para a tocante história do gigante Cuthbert, já conhecida dos leitores da série.\r\nInusitado, surpreendente e divertido, Contos peculiares é ao mesmo tempo um delicioso complemento e uma porta de entrada para o rico universo criado por Ransom Riggs; um verdadeiro presente para quem não resiste à magia das boas histórias.', NULL, 208, 'português ', NULL, NULL, NULL, NULL, 'https://cache.skoob.com.br/local/images//h41_dW0Y1pPbp_UEW5ZWmzb2Icg=/200x/center/top/smart/filters:format(jpeg)/https://skoob.s3.amazonaws.com/livros/606418/CONTOS_PECULIARES_1472490708606418SK1472490708B.jpg', NULL, NULL, 0, 0),
(8580415217, 9788580415216, 'O Feiticeiro de Terramar (Cicl', '1', '0000-00-00', 'Há quem diga que o feiticeiro mais poderoso de todos os tempos é um homem chamado Gavião. Este livro narra as aventuras de Ged, o menino que um dia se tornará essa lenda.\r\nAinda pequeno, o pastor órfão de mãe descobriu seus poderes e foi para uma escola de magos. Porém, deslumbrado com tudo o que a magia podia lhe proporcionar, Ged foi logo dominado pelo orgulho e a impaciência e, sem querer, libertou um grande mal, um monstro assustador que o levou a uma cruzada mortal pelos mares solitários.\r\nPublicado originalmente em 1968, O feiticeiro de Terramar se tornou um clássico da literatura de fantasia. Ged é um predecessor em magia e rebeldia de Harry Potter. E Ursula K. Le Guin é uma referência para escritores do gênero como Patrick Rothfuss, Joe Abercrombie e Neil Gaiman.', NULL, 176, 'português', NULL, NULL, NULL, NULL, 'https://cache.skoob.com.br/local/images//6IR6lf5WewSCtM-BRIK-AqfphXw=/200x/center/top/smart/filters:format(jpeg)/https://skoob.s3.amazonaws.com/livros/571388/O_FEITICEIRO_DE_TERRAMAR_1470088093571388SK1470088093B.jpg', NULL, NULL, 0, 0),
(8581637558, 9788581637556, 'Poke?mon Go: De treinador a me', '1', '0000-00-00', 'Os Pokémon invadiram o mundo que conhecemos! O sonho nutrido por fãs há 20 anos finalmente se tornou realidade. Agora é possível encontrar os monstrinhos de bolso em todos os lugares: na vizinhança, na escola, no trabalho e até no sofá de casa. Tudo isso graças ao aplicativo que causou uma nova febre mundial: Pokémon GO.\n\nEste guia o auxiliará com diversas dicas de desempenho e ferramentas utilizadas por jogadores experientes no mundo todo, desde a instalação inicial até a empolgante jor-nada com a realidade aumentada. Você descobrirá a melhor forma de escolher o seu primeiro Pokémon, como encontrar o 4º Pokémon misterioso, as diferentes maneiras para se usar uma pokébola na hora da captura, como dobrar a eficácia de itens de captura de Pokémon, estratégias avançadas para defender academias de sua equipe de ataques rivais, entre muitos outros desafios. Tudo com a segurança que um treinador Pokémon necessita. \n\nPortanto, a partir de agora, você não precisa mais quebrar a cabeça tentando entender as mecânicas do jogo. Instale o aplicativo, pegue suas Pokébolas e "Gotta catch ''em all"!', NULL, 144, 'português', NULL, NULL, NULL, NULL, 'https://cache.skoob.com.br/local/images//dwQZlVh-kge9hiISODVrYDp6L0g=/200x/center/top/smart/filters:format(jpeg)/https://skoob.s3.amazonaws.com/livros/607094/POKEEA769MON_GO_DE_TREINADOR_1471983274607094SK1471983274B.jpg', NULL, NULL, 0, 0);

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
