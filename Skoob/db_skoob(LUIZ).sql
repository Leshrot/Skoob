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
  `nm_autor` varchar(50) NOT NULL,
  `ds_url_autor` varchar(500) NOT NULL,
  `ds_autor` varchar(2000) NOT NULL,
  `ds_img_autor` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_autor`
--

INSERT INTO `tb_autor` (`cd_autor`, `nm_autor`, `ds_url_autor`, `ds_autor`, `ds_img_autor`) VALUES
(1, 'Ransom Riggs', 'https://www.skoob.com.br/autor/5736-ransom-riggs', 'Ransom Riggs cresceu na Flórida, mas agora reside na terra das crianças peculiares, Los Angeles. Ao longo da vida, formou-se no Kenyon College e na Escola de Cinema e TV da Universidade do Sul da Califórnia, além de fazer alguns curtas-metragens premiados. Nas horas vagas é blogueiro e repórter especializado em viagens, e sua série de ensaios de viagem, Strange Geographies, pode ser lida em ransomriggs.com.', 'img/autor/RansomRiggs.jpg'),
(2, 'Paco Jimenéz', '', '', 'img/autor/autor_indisponivel.gif'),
(3, 'Ursula K. Le Guin', 'https://www.skoob.com.br/autor/310-ursula-k-le-guin', 'Ursula Kroeber Le Guin escreveu romances, ensaios, contos, poesia e literatura infantil, destacando-se na Fantasia e na Ficção Científica. Os seus primeiros trabalhos foram publicados em 1960 e, desde aí, as suas obras exploram, nomeadamente, aspectos do taoísmo, anarquismo, etnografia, feminismo, psicologia e sociologia.\r\n\r\nO Ciclo de Terramar, composto por cinco narrativas e um livro de contos, e o romance A Mão Esquerda das Trevas, parte do Ciclo de Hainish, são as suas obras mais conhecidas.\r\n\r\nHoje em dia, é considerada uma das melhores autoras vivas do gênero.', 'img/autor/Ursula.jpg'),
(4, 'Emanuel Hallef', '', '', 'img/autor/autor_indisponivel.gif'),
(5, 'Brené Brown', 'https://www.skoob.com.br/autor/16033-brene-brown', 'Brené Brown, ph.D. em serviço social, é pesquisadora na Universidade de Houston. Professora e palestrante premiada, é autora do livro A arte da imperfeição (Novo Conceito). Ela mora em Houston com o marido, Steve, e os filhos.', 'img/autor/BreneBrown.jpg');

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

CREATE TABLE IF NOT EXISTS `tb_editora` (
  `cd_editora` int(11) NOT NULL,
  `nm_editora` varchar(20) NOT NULL,
  `ds_url_editora` varchar(500) NOT NULL,
  `ds_editora` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_editora`
--

INSERT INTO `tb_editora` (`cd_editora`, `nm_editora`, `ds_url_editora`, `ds_editora`) VALUES
(1, 'Intrínseca', 'http://www.intrinseca.com.br', 'Uma editora jovem, não só na idade — afinal foi fundada em dezembro de 2003 — mas no espírito inovador de optar pela publicação de ficção e não ficção priorizando a qualidade, e não a quantidade de lançamentos. Essa é a marca da Intrínseca, cujo catálogo reúne títulos cuidadosamente selecionados, dotados de uma vocação rara: conjugar valor literário e sucesso comercial. \n\nCom uma apurada seleção de títulos, vários livros alcançam um expressivo número de leitores, figurando em listas de best-sellers por muitos meses, obtendo assim uma incomum unanimidade de elogios por parte do público, da crítica e do mercado. À bem cuidada curadoria editorial alia-se o apuro na produção gráfica, o que transforma as edições em objetos de culto a serviço da boa literatura.'),
(2, 'Universo dos Livros', 'http://www.universodoslivros.com.br/', 'A Universo dos Livros foi criada em 2006, a partir de nossa paixão pela literatura. \r\n\r\nEntendendo o livro como companheiro e melhor amigo, buscamos lançar títulos que instruem, emocionam e transformam vidas, livros que deixem no leitor a irresistível sensação de “quero mais”. \r\n\r\nSeguindo essa premissa, nossa linha editorial iniciou-se com obras técnicas que acompanhavam os leitores durante o trabalho, passando, na sequência, para títulos que incentivassem o desenvolvimento pessoal e ajudassem na busca pela felicidade. \r\n\r\nCompletando a concepção de universo dos livros, que norteou a escolha do nome da editora, iniciamos a linha de ficção, com títulos que proporcionam entretenimento, emocionam e alegram nossos milhares de leitores.'),
(3, 'Arqueiro', 'http://www.editoraarqueiro.com.br/', 'Geraldo Jordão Pereira (1938-2008) começou sua carreira aos 17 anos, quando foi trabalhar com seu pai, o célebre editor José Olympio, publicando obras marcantes como O menino do dedo verde, de Maurice Druon, e Minha vida, de Charles Chaplin. \r\n\r\nEm 1976, fundou a Editora Salamandra com o propósito de formar uma nova geração de leitores e acabou criando um dos catálogos infantis mais premiados do Brasil. Em 1992, fugindo de sua linha editorial, lançou Muitas vidas, muitos mestres, de Brian Weiss, livro que deu origem à Editora Sextante. \r\n\r\nFã de histórias de suspense, Geraldo descobriu O Código Da Vinci antes mesmo de ele ser lançado nos Estados Unidos. A aposta em ficção, que não era o foco da Sextante, foi certeira: o título se transformou em um dos maiores fenômenos editoriais de todos os tempos. \r\n\r\nMas não foi só aos livros que se dedicou. Com seu desejo de ajudar o próximo, Geraldo desenvolveu diversos projetos sociais que se tornaram sua grande paixão. \r\nCom a missão de publicar histórias empolgantes, tornar os livros cada vez mais acessíveis e despertar o amor pela leitura, a Editora Arqueiro é uma homenagem a esta figura extraordinária, capaz de enxergar mais além, mirar nas coisas verdadeiramente importantes e não perder o idealismo e a esperança diante dos desafios e contratempos da vida.'),
(4, '#IRADO', 'http://www.ncirado.com.br/', ''),
(5, 'Sextante', 'http://www.esextante.com.br', 'Numa época em que o homem só dispunha do céu e das estrelas para se orientar, o Sextante era uma ferramenta fundamental para se atingir o destino desejado. Observando através do Sextante, o navegador se norteava, medindo a distância entre os astros e o horizonte. \r\n\r\nFoi por essa razão que escolhemos o nome Sextante para nossa editora, fundada em 1998. Vivemos, nesse início do terceiro milênio, um momento de inquietação e ansiedade, em que a aparente perda de valores essenciais convive com uma intensa busca da felicidade. Conscientes dessa realidade, investimos para que cada produto da Sextante um instrumento precioso para alcançar a paz interior, a espiritualidade e o crescimento pessoal, tratando sempre de temas importantes para a plena realização humana.');

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
  `ds_img_leitor` varchar(200) NOT NULL,
  PRIMARY KEY (`cd_leitor`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_leitor`
--

INSERT DELAYED IGNORE INTO `tb_leitor` (`cd_leitor`, `nm_leitor`, `nm_apelido_leitor`, `ds_sexo_leitor`, `dt_nasc_leitor`, `ds_email_leitor`, `ds_senha_leitor`, `ds_distrito_leitor`) VALUES
(3, 'Diogo Camilo', 'Camilo', 'M', '1997-01-02', 'diogo@gmail.com', 'rgbs', 'SP', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_livro`
--

CREATE TABLE `tb_livro` (
  `cd_isbn_10_livro` bigint(20) NOT NULL,
  `cd_isbn_13_livro` bigint(20) NOT NULL,
  `nm_livro` varchar(50) DEFAULT NULL,
  `ds_subtitulo_livro` varchar(100) NOT NULL,
  `ds_resumo_livro` varchar(2000) DEFAULT NULL,
  `ds_categorias` varchar(200) NOT NULL,
  `dt_lancamento` int(4) DEFAULT NULL,
  `ic_lancamento` char(1) DEFAULT NULL,
  `nr_pagina_livro` int(11) DEFAULT NULL,
  `ds_idioma_livro` varchar(20) DEFAULT NULL,
  `ds_url_capa_livro` varchar(500) DEFAULT NULL,
  `vl_nota_livro` decimal(2,1) NOT NULL,
  `nr_avaliacao_livro` int(11) NOT NULL,
  `ds_img_edicao` varchar(200) NOT NULL,
  `nm_video_livro` varchar(200) NOT NULL,
  `ds_img_video_livro` varchar(500) DEFAULT NULL,
  `ds_url_video_livro` varchar(500) DEFAULT NULL,
  `fk_cd_editora` int(11) NOT NULL,
  `fk_cd_autor` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_livro`
--

INSERT INTO `tb_livro` (`cd_isbn_10_livro`, `cd_isbn_13_livro`, `nm_livro`, `ds_subtitulo_livro`, `ds_resumo_livro`, `ds_categorias`, `dt_lancamento`, `ic_lancamento`, `nr_pagina_livro`, `ds_idioma_livro`, `ds_url_capa_livro`, `vl_nota_livro`, `nr_avaliacao_livro`, `ds_img_edicao`, `nm_video_livro`, `ds_img_video_livro`, `ds_url_video_livro`, `fk_cd_editora`, `fk_cd_autor`) VALUES
(8551000535, 9788551000533, 'Contos peculiares', '', 'O livro dentro dos livros, Contos peculiares é a coletânea de contos e fábulas citada ao longo da série O lar da srta. Peregrine para crianças peculiares — o livro com as histórias que os jovens peculiares escutam sua protetora contar e recontar.\r\nUm menino que vira gafanhoto e foge com um grupo de gansos; uma princesa com língua de cobra à procura de um príncipe com quem se casar; canibais ricos que comem braços e pernas de peculiares que têm o dom de se regenerar são alguns dos personagens dessas narrativas que há séculos povoam o imaginário dos peculiares, oferecendo não apenas valiosas lições, mas também pistas para informações secretas, como a localização exata de certas fendas temporais, por exemplo. Compilado por Millard Nullings, o menino invisível acolhido no lar da srta. Peregrine, o livro inclui surpreendentes comentários e notas, além de um desfecho alternativo para a tocante história do gigante Cuthbert, já conhecida dos leitores da série.\r\nInusitado, surpreendente e divertido, Contos peculiares é ao mesmo tempo um delicioso complemento e uma porta de entrada para o rico universo criado por Ransom Riggs; um verdadeiro presente para quem não resiste à magia das boas histórias.', 'Contos / Infantojuvenil / Literatura Estrangeira', 2016, '1', 208, 'português ', 'img/livro/CONTOS_PECULIARES.jpg', '4.3', 303, 'img/livro/CONTOS_PECULIARES.jpg', 'CONTOS PECULIARES', 'img/video/contospeculiares.jpg', 'https://www.skoob.com.br/livro/video/contos-peculiares/606418/pnjvjDfShd4', 1, 1),
(8580415217, 9788580415216, 'O Feiticeiro de Terramar', 'Ciclo Terramar # 1', 'Há quem diga que o feiticeiro mais poderoso de todos os tempos é um homem chamado Gavião. Este livro narra as aventuras de Ged, o menino que um dia se tornará essa lenda.\r\nAinda pequeno, o pastor órfão de mãe descobriu seus poderes e foi para uma escola de magos. Porém, deslumbrado com tudo o que a magia podia lhe proporcionar, Ged foi logo dominado pelo orgulho e a impaciência e, sem querer, libertou um grande mal, um monstro assustador que o levou a uma cruzada mortal pelos mares solitários.\r\nPublicado originalmente em 1968, O feiticeiro de Terramar se tornou um clássico da literatura de fantasia. Ged é um predecessor em magia e rebeldia de Harry Potter. E Ursula K. Le Guin é uma referência para escritores do gênero como Patrick Rothfuss, Joe Abercrombie e Neil Gaiman.', 'Fantasia / Ficção / Literatura Estrangeira', 2016, '1', 176, 'português', 'img/livro/O_FEITICEIRO.jpg', '4.2', 215, 'img/livro/FEITICEIRO_DE_TERRAMAR.jpg', 'O Feiticeiro de Terramar de Ursula K. Le Guin', 'img/video/feiticeiro.jpg', 'https://www.skoob.com.br/livro/video/o-feiticeiro-de-terramar/571388/0sUs1kvNq2k', 3, 3),
(8581637558, 9788581637556, 'Pokémon Go: De treinador a mestre', 'Guia não oficial', 'Os Pokémon invadiram o mundo que conhecemos! O sonho nutrido por fãs há 20 anos finalmente se tornou realidade. Agora é possível encontrar os monstrinhos de bolso em todos os lugares: na vizinhança, na escola, no trabalho e até no sofá de casa. Tudo isso graças ao aplicativo que causou uma nova febre mundial: Pokémon GO.\n\nEste guia o auxiliará com diversas dicas de desempenho e ferramentas utilizadas por jogadores experientes no mundo todo, desde a instalação inicial até a empolgante jor-nada com a realidade aumentada. Você descobrirá a melhor forma de escolher o seu primeiro Pokémon, como encontrar o 4º Pokémon misterioso, as diferentes maneiras para se usar uma pokébola na hora da captura, como dobrar a eficácia de itens de captura de Pokémon, estratégias avançadas para defender academias de sua equipe de ataques rivais, entre muitos outros desafios. Tudo com a segurança que um treinador Pokémon necessita. \n\nPortanto, a partir de agora, você não precisa mais quebrar a cabeça tentando entender as mecânicas do jogo. Instale o aplicativo, pegue suas Pokébolas e "Gotta catch ''em all"!', 'Jogos / Literatura Brasileira', 2016, '1', 144, 'português', 'img/livro/pokemon.jpg', '3.6', 27, 'img/livro/pokemon', '', NULL, NULL, 4, 4),
(8543104335, 9788543104331, 'A coragem de ser imperfeito', 'Como aceitar a própria vulnerabilidade, vencer a vergonha e ousar ser quem você é', 'Brené Brown ousou tocar em assuntos que costumam ser evitados por causarem grande desconforto. Sua palestra a respeito de vulnerabilidade, medo, vergonha e imperfeição já teve mais de 25 milhões de visualizações.\r\n\r\nViver é experimentar incertezas, riscos e se expor emocionalmente. Mas isso não precisa ser ruim. Como mostra Brené Brown, a vulnerabilidade não é uma medida de fraqueza, mas a melhor definição de coragem.\r\n\r\nQuando fugimos de emoções como medo, mágoa e decepção, também nos fechamos para o amor, a aceitação e a criatividade. Por isso, as pessoas que se defendem a todo custo do erro e do fracasso acabam se frustrando e se distanciando das experiências marcantes que dão significado à vida.\r\n\r\nPor outro lado, as que se expõem e se abrem para coisas novas são mais autênticas e realizadas, ainda que se tornem alvo de críticas e de inveja. É preciso lidar com os dois lados da moeda para se ter uma vida plena.\r\n\r\nEm sua pesquisa pioneira sobre vulnerabilidade, Brené Brown concluiu que fazemos uso de um verdadeiro arsenal contra a vergonha de nos expor e a sensação de não sermos bons o bastante, e que existem estratégias eficazes para serem usadas nesse “desarmamento”.\r\n\r\nNeste livro, ela apresenta suas descobertas e estratégias bem-sucedidas, toca em feridas delicadas e provoca grandes insights, desafiando-nos a mudar a maneira como vivemos e nos relacionamos.', 'Autoajuda / Não-ficção / Negócios e Empreendedorismo / Psicologia', 2016, '1', 208, 'português', 'img/livro/CORAGEM_DE_SER_IMPERFEITO.jpg', '4.1', 118, 'img/livro/A_CORAGEM.jpg', 'Livros & Nego?cios | Livro A Coragem De Ser I', 'img/video/coragem.jpg', 'https://www.skoob.com.br/livro/video/a-coragem-de-ser-imperfeito/344198/X_Ng-EDBb1g', 5, 5),
(8550300500, 9788550300504, 'Sou Luna', 'A aventura vai começar!\r\nSou Luna # 01', 'pois seus pais receberam uma oportunidade de trabalho irrecusável na Argentina. A garota não fica feliz com a ideia de ter de deixar para trás seus amigos, sua escola e suas tardes andando de patins, mas está disposta a abraçar essa nova aventura.\r\nNo novo país, Luna precisa se redescobrir ao fazer novos amigos, encarar a nova escola e, principalmente, se dedicar ao que mais gostar de fazer: patinar! A Argentina a recebe com uma enorme surpresa, que também é um desafio: uma pista de patinação incrível e uma competição que une patins, dança e música. Agora, ela não só terá de se superar com os patins, mas também deverá dançar muito se quiser vencer.', 'Aventura / Infantil / Infantojuvenil', 2016, '1', 144, 'português', 'img/livro/SOU_LUNA.jpg', '4.9', 10, 'img/livro/SOU_LUNA.jpg', 'Book Haul de Outubro l Não resisti a tentação', 'img/video/bookhaul.jpg', 'https://www.skoob.com.br/livro/video/sou-luna/607088/4B5dutn74iA', 2, 2);

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_resenha`
--

CREATE TABLE `tb_resenha` (
  `cd_resenha` int(11) NOT NULL,
  `ds_titulo_resenha` varchar(100) NOT NULL,
  `nm_autor_resenha` varchar(50) NOT NULL,
  `ds_resenha` varchar(2000) NOT NULL,
  `qt_resenha` int(11) NOT NULL,
  `dt_resenha` varchar(8) NOT NULL,
  `ds_img_autor_resenha` varchar(100) NOT NULL,
  `fk_cd_isbn_10_livro` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_resenha`
--

INSERT INTO `tb_resenha` (`cd_resenha`, `ds_titulo_resenha`, `nm_autor_resenha`, `ds_resenha`, `qt_resenha`, `dt_resenha`, `ds_img_autor_resenha`, `fk_cd_isbn_10_livro`) VALUES
(1, 'Um mundo peculiar', 'Giovanna Vidoto', 'Contos Peculiares nos leva para ainda mais ao mundo peculiar. Muito antes de existir o orfanato da Srta. Peregrine, história de peculiares eram contadas de geração em geração e registradas em um livro. \r\nNesse livro da série, Millard, o estudioso garoto invisível, seleciona seus 10 contos favoritos e os registra com comentários e notas dele próprio. Esses contos guardam segredos que só um peculiar é capaz de observar, como desvendar através deles fendas escondidas.\r\nEsse livro é pra quem amou as crianças peculiares da Srta. Peregrine e quer descobrir mais sobre o universo peculiar.', 21, '7/9/16', 'img/resenha/GiovannaVidoto.jpg', 8551000535),
(2, 'A Wizard of Earthsea (O Feiticeiro de Terramar)', 'Cheiro de Livro', 'Essa é mais uma das historias de como os livros vem parar na minha mão. Eu acho que a experiência de ler um livro começa nesses roteiros tortuosos que nos levam a eles.\r\n\r\nA primeira vez que me deparei com o nome de Ursula K. Le Guin foi em um texto sobre C.S. Lewis, não era nada muito chamativo mas era elogioso e me fez guardar o nome. Anos se passaram e assistindo ao bom água-com-açúcar “Jane Austen Book Club” lá estava o nome novamente. A referência anterior ganhou uma estrelinha na minha lista mental, mas não foi ai que comecei a ler sua obra. Em uma visita a Livraria Cultura do centro do Rio tive pela primeira vez um livro da Le Guin nas mãos, só não foi comprado porque era muito caro. Era terceira vez que ela cruzava o meu caminho então fui para o computador buscar na Amazon um e-book dela. Comprei “A Wizard of Earthsea” por puro acaso e a escolha foi perfeita, é o primeiro de uma saga, a saga de um jovem e poderoso mago.\r\n\r\nLe Guin lançou o livro na década de 1960, muito antes de Harry Potter, e fala sobre a formação de um jovem mago. Um adendo importante nessa história é que um editor encomendou para Le Guin uma historia para “old kids”, ou seja, é o começo da literatura hoje conhecida como YA (Young Adult). Ged é muito pobre e jovem quando começa a usar os seus poderes. É claro desde o primeiro momento que é muito poderoso e um prodígio. A primeira metade do livro é sobre a formação de Ged como mago. Primeiro como aprendiz de um poderoso e recluso mago e depois em uma escola de magia. Durante todo esse processo vamos conhecendo o mundo criado por Le Guin, um mundo dividido em ilhas, onde as viagens são feitas pelo mar. É um mundo em que ser mago é profissão, eles são contratados em navios e em cidades para segurança da população. É uma concepção bem diferente do que temos nos livros com mágicos de hoje em dia.', 27, '25/8/16', 'img/resenha/cheiro.jpg', 8580415217),
(3, 'Resenha: Pokémon Go: De treinador a mestre', 'Queria Estar Lendo', 'Um dos lançamentos da editora Novo Conceito, Pokémon Go - De treinador a mestre, fala um pouquinho sobre a febre mundial que cresceu no mundo com o lançamento do jogo. Através de dicas e curiosidades, o guia diverte ao mesmo tempo em que te ensina uns macetes inéditos.\r\n\r\nAtravés de uma apresentação fluida e um desenvolvimento bem rápido, o livro conta, basicamente, tudo sobre o jogo. Desde a criação do seu avatar - personagem que vai te representar dentro do universo de Pokémon - até a primeira captura, curiosidades sobre os pokémons, sobre os itens do jogo, absolutamente tudo que tem para conhecer está ali.\r\n\r\nComo boa mestre Pokémon, muitas das coisas citadas na obra já eram de meu conhecimento, mas outras se mostraram uma boa surpresa; eu não conhecia as tramoias para conseguir contabilizar mais quilometragens nos ovos, por exemplo. E nem sabia que os pokémons lendários apareciam na pokédex depois que você desbloqueava todos eles!\r\n\r\nAs propostas da empresa responsável pelo jogo citam possíveis futuros eventos grandiosos onde os jogadores precisarão derrotar um pokémon poderoso para ganhar, como recompensa, a oportunidade de capturar um lendário. Consegue imaginar você derrotar o Mewtwo - como foi proposto nesse trailer que me arrepia até hoje - e de quebra ainda conseguir capturá-lo? Eu estou viva e respirando para viver um momento desses!', 7, ' 7/10/16', 'img/resenha/queriaestar.jpg', 8581637558),
(4, 'Flexibilidade', 'Marlende Bright', 'Viver com ousadia, saltar no mais fundo de si mesmo, enfrentar seus medos e desafios, expor-se, coragem de agir, de ser quem verdadeiramente é...Uma Bela Mensagem é o que nos trás essa autora. #superindicoficaadicaaa', 2, '16/5/16', 'img/resenha/MARLENDE.jpg', 8543104335);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_autor`
--
ALTER TABLE `tb_autor`
  ADD PRIMARY KEY (`cd_autor`);

--
-- Indexes for table `tb_editora`
--
ALTER TABLE `tb_editora`
  ADD PRIMARY KEY (`cd_editora`);

--
-- Indexes for table `tb_livro`
--
ALTER TABLE `tb_livro`
  ADD PRIMARY KEY (`cd_isbn_10_livro`,`cd_isbn_13_livro`),
  ADD KEY `tb_livro_tb_editora_FK` (`fk_cd_editora`),
  ADD KEY `fk_cd_autor` (`fk_cd_autor`);

--
-- Indexes for table `tb_resenha`
--
ALTER TABLE `tb_resenha`
  ADD PRIMARY KEY (`cd_resenha`),
  ADD KEY `tb_livro_cd_isbn_10_livro_FK` (`fk_cd_isbn_10_livro`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_autor`
--
ALTER TABLE `tb_autor`
  MODIFY `cd_autor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_editora`
--
ALTER TABLE `tb_editora`
  MODIFY `cd_editora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_resenha`
--
ALTER TABLE `tb_resenha`
  MODIFY `cd_resenha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
