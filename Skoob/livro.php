<?php include("header.php"); ?>

<?php 
  //conectar no servidor de banco de dados mysql
  $conn = mysql_connect("localhost","root","")or die("Erro Catastrófico... Chame o Admin!");

  //conectar no servidor de banco de dados DB_AULA
  mysql_select_db ("db_skoob", $conn);

  $_isbn = $_GET['isbn'];

  $sql = "SELECT  * FROM tb_livro l
          INNER JOIN tb_autor a ON (l.fk_cd_autor = a.cd_autor)
          INNER JOIN tb_editora e ON (l.fk_cd_autor = e.cd_editora)
          LEFT JOIN tb_resenha r ON (l.cd_isbn_10_livro = r.fk_cd_isbn_10_livro) 
          WHERE cd_isbn_10_livro = '$_isbn'";
  //echo "sql: " . $sql;
  $connect = mysql_query($sql,$conn);
  $consulta = mysql_fetch_array($connect);

  $query = mysql_query(
          "SELECT cd_leitor
          FROM tb_leitor
          WHERE nm_leitor = '".$_SESSION["nome"]."'
          ");
  $leitor = mysql_fetch_array($query);


  if ($_GET['status'] == "lido"){
    mysql_query( "INSERT INTO `tb_livro_leitor` (`tb_leitor_cd_leitor`, `tb_livro_cd_isbn_10_livro`, `tb_livro_cd_isbn_13_livro`, `ds_status_leitura`)  VALUES ('".$leitor['cd_leitor']."', '".$consulta['cd_isbn_10_livro']."', '".$consulta['cd_isbn_13_livro']."', 'JA LI')");
  }elseif ($_GET['status'] == "quero"){
    mysql_query( "INSERT INTO `tb_livro_leitor` (`tb_leitor_cd_leitor`, `tb_livro_cd_isbn_10_livro`, `tb_livro_cd_isbn_13_livro`, `ds_status_leitura`)  VALUES ('".$leitor['cd_leitor']."', '".$consulta['cd_isbn_10_livro']."', '".$consulta['cd_isbn_13_livro']."', 'QUERO LER')");
  }

?>
<!DOCTYPE html>
<html xmlns='//www.w3.org/1999/xhtml'>
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# books: http://ogp.me/ns/books#">
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />

        


        <title><?php printf($consulta['nm_livro']. " - " . $consulta['nm_autor']);  ?></title>
        
        <meta name="language" content="pt-br"/>
        <meta name="google-site-verification" content="h_F9-djAws40JfpX_W4juzsPjd9YZ2v-s0YvOG-D388"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="apple-itunes-app" content="app-id=904670263"/>
        <meta name="msapplication-config" content="none"/>
        <script type="text/javascript" src="//www.google.com/jsapi"></script>

        <script type="text/javascript" src="https://cache.skoob.com.br/local/skoob/js/angularjs/base.min.js?1480078902"></script><script type="text/javascript" src="https://cache.skoob.com.br/local/skoob/js/angularjs/main.min.js?1480082480"></script>        
<!-- Google AD -->
<script type='text/javascript'>
  var googletag = googletag || {};
  googletag.cmd = googletag.cmd || [];
  (function() {
    var gads = document.createElement('script');
    gads.async = true;
    gads.type = 'text/javascript';
    var useSSL = 'https:' == document.location.protocol;
    gads.src = (useSSL ? 'https:' : 'http:') +
      '//www.googletagservices.com/tag/js/gpt.js';
    var node = document.getElementsByTagName('script')[0];
    node.parentNode.insertBefore(gads, node);
  })();
</script>

<script type='text/javascript'>
  googletag.cmd.push(function() {
    googletag.defineSlot('/101690757/SK-BOOK-TOP-ADX', [960, 90], 'div-gpt-ad-1442757100761-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>
        <link rel="stylesheet" type="text/css" href="https://cache.skoob.com.br/local/skoob/css/ver2/main.min.css?1480079202"/><link rel="image_src" type="text/css" href="https://cache.skoob.com.br/local/images//ZzPAQXCcY2WEi8ODTUaL5NzZnqY=/960x720/center/top/smart/filters:format(jpeg)/https://skoob.s3.amazonaws.com/livros/277440/O_LAR_DA_SRTA_PEREGRINE_PARA_CRIANAS_PECULIARES_4274891030B.jpg"/>
        <link rel='canonical' href='https://www.skoob.com.br/o-orfanato-da-srta-peregrine-para-criancas-peculiares-277440ed529657.html' />    </head>
    
<body id="ng-app" ng-app="skoob">
        
<div style="margin-top:70px;"><div id="banner-livro-home-container">
    <!-- /101690757/SK-BOOK-TOP-ADX -->
<!-- 
-->
<script type='text/javascript'>
  googletag.cmd.push(function() {
    googletag.defineSlot('/101690757/SK-BOOK-TOP-ADX', [960, 90], 'div-gpt-ad-1442757100761-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>
<div id='div-gpt-ad-1442757100761-0' class="book-home-ad">
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1442757100761-0'); });
</script>
</div>        
</div>
            <div style="width:970px;margin:auto;">
                            </div>

            

            <div id='container-full' class='container-inf  '>
                <div id='corpo' data-ng-controller="mainCtrl as main">
                    
<div>
    <div id="pg-livro-menu-principal">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/livro.min.css"/>
<div id="pg-livro-menu-principal-container" data-ng-controller="shelf" itemscope itemtype="http://schema.org/Book">
        <div><a href='/o-lar-da-srta-peregrine-para-criancas-peculiares-277440ed621732.html' title='<?php printf($consulta['nm_livro']);  ?>'   class='capa-link-item'>
        <img src='<?php printf($consulta['ds_url_capa_livro']);  ?>' alt='<?php printf($consulta['nm_livro']);  ?>'  title='<?php printf($consulta['nm_livro']);  ?>' class='cpimg'  itemprop='image' /></a></div><br clear='both' />
    <strong itemprop="name"  class="sidebar-titulo"><?php printf($consulta['nm_livro']);  ?></strong>
               <h3 class="sidebar-subtitulo"><?php printf($consulta['ds_subtitulo_livro']);  ?></h3>
           

    <span  itemprop='author' itemscope itemtype='http://schema.org/Person'><span itemprop='name'><a href="/autor/5736-ransom-riggs"><?php printf($consulta['nm_autor']);  ?></a></span></span><br />
    <div class='pg-livro-bt-compra'>       <div class="sidebar-buy" data-ng-controller="ofertaCtrl" style="font-size:13px; border:none; width:180px;">
                   <div data-ng-init="checkPrices('9788551000687')">
                               <div data-ng-if="preco" data-ng-cloak>
                                           <span><i class="icon-cart" style="font-size: 14px; margin-right: 10px;"></i> 
                                                       <a href="javascript:{}" data-ng-click="open(621732)">
                                                                   R$ <span data-ng-bind="preco"></span>
                                                       </a>
                                           </span>
                               </div>
                               <div data-ng-if="preco_max" data-ng-cloak>
                                           <div data-ng-if="!preco" data-ng-cloak>
                                                       <span><i class="icon-cart" style="font-size: 14px; margin-right: 10px;"></i>
                                                                   <a href="javascript:{}" data-ng-click="open(621732)">R$ <span data-ng-bind="preco_min"></span></a> 
                                                                   até 
                                                                   <a href="javascript:{}" data-ng-click="open(621732)">R$ <span data-ng-bind="preco_max"></span></a>
                                                       </span>
                                           </div>
                               </div>
                               <div data-ng-if="preco_null" data-ng-cloak>
                                           <span style="font-size: 11px; color:#B2B2B2;"><i class="icon-cart" style="font-size: 14px; margin-right: 10px;"></i> 
                                                       Nenhuma oferta encontrada
                                           </span>
                               </div>

                   </div>
       </div>
       </div>

    <div class="sidebar-desc">
                <meta itemprop="datePublished" content="2016-01-01">

                ISBN-13: <span itemprop="isbn"><?php printf($consulta['cd_isbn_13_livro']);  ?></span><br />
                ISBN-10: <span><?php printf($consulta['cd_isbn_10_livro']);  ?></span><br />
                Ano: <?php printf($consulta['dt_lancamento']);  ?>          / Páginas: <?php printf($consulta['nr_pagina_livro']);  ?><br />        
                Idioma: <?php printf($consulta['ds_idioma_livro']);  ?>  <br />        
                <span itemprop='publisher' itemscope itemtype='http://schema.org/Organization'>
                Editora: <span itemprop='name'><a href=<?php printf($consulta['ds_url_editora']);  ?> ><?php printf($consulta['nm_editora']);  ?></a></span></span><br />    </div>

    <div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
        <meta itemprop="bestRating" content="5" />
        <span class="hidden-data" itemprop="ratingValue">4.36932</span>
        <meta itemprop="worstRating" content="1" />
        <meta content="88" />
        <span class="hidden-data" itemprop="reviewCount">88</span>
    </div>

    <hr />
    <center>
    <div class="dropdown btn-group btn-group-sm">
     <button type="button" class="btn bt-adicionar-content-sm" data-toggle="dropdown" style="box-shadow:none !important;-webkit-box-shadow:none !important">Adicionar</button>
     <!-- ngIf: bt_mais === true -->

     <ul class="dropdown-menu" style="text-align:left;">
          <!-- ngIf: tipo !== 1 --><li data-ng-if="tipo !== 1" class="ng-scope"><a href="livro.php?status=lido&isbn=<?php printf($consulta['cd_isbn_10_livro']);  ?>" ng-click="addShelf(editionId, 1);" class="sk-cor-bg-hover-lido">Lido</a></li><!-- end ngIf: tipo !== 1 -->
          <!-- ngIf: tipo !== 2 --><li data-ng-if="tipo !== 2" class="ng-scope"><a href="javascript:{}" ng-click="addShelf(editionId, 2);" class="sk-cor-bg-hover-lendo">Lendo</a></li><!-- end ngIf: tipo !== 2 -->
          <!-- ngIf: tipo !== 3 --><li data-ng-if="tipo !== 3" class="ng-scope"><a href="livro.php?status=quero&isbn=<?php printf($consulta['cd_isbn_10_livro']);  ?>" ng-click="addShelf(editionId, 3);" class="sk-cor-bg-hover-queroler">Quero ler</a></li><!-- end ngIf: tipo !== 3 -->
          <!-- ngIf: tipo !== 4 --><li data-ng-if="tipo !== 4" class="ng-scope"><a href="javascript:{}" ng-click="addShelf(editionId, 4);" class="sk-cor-bg-hover-relendo">Relendo</a></li><!-- end ngIf: tipo !== 4 -->
          <!-- ngIf: tipo !== 5 --><li data-ng-if="tipo !== 5" class="ng-scope"><a href="javascript:{}" ng-click="addShelf(editionId, 5);" class="sk-cor-bg-hover-abandonei">Abandonei</a></li><!-- end ngIf: tipo !== 5 -->
          <!-- ngIf: tipo !== 0 -->
          <!-- ngIf: tipo !== 0 -->
     </ul>
</div> </center>
  <br><br clear='all' />
    <ul id="ul-menu-vertical-badges" style="margin-top:-18px;">
        <li><a href="/livro/277440ED621732-o-lar-da-srta-peregrine-para-criancas-p">Sinopse</a><br clear="all"></li>
        <li><a href="/livro/edicoes/277440/edicao:621732">Edições</a><span class="badge badge-default">6</span><br clear="all"></li>
        <li><a href="/livro/video/o-lar-da-srta-peregrine-para-criancas-p/277440/edicao:621732">Vídeos</a><span class="badge badge-default">53</span><br clear="all"></li>
        <li><a href="/livro/grupos/277440/edicao:621732">Grupos</a><span class="badge badge-default">2</span><br clear="all"></li>
        <li><a href="/livro/resenhas/277440/edicao:621732">Resenhas</a><span class="badge badge-default">503</span><br clear="all"></li>
        <li><a href="/livro/leitores/leram/277440/edicao:621732">Leitores</a><span class="badge badge-default">37.526</span><br clear="all"></li>
        <!-- 
        <li><span class="badge "></span><br clear="all"></li>
        -->

        <li><a href="/livro/similares/277440/edicao:621732">Similares</a><span class="badge badge-default">15</span><br clear="all"></li>
                <li><a href="/livro/ofertas/o-lar-da-srta-peregrine-para-criancas-p/edicao:621732">Ofertas</a><br clear="all"></li>
        <li><a href="/livro/pdf/o-lar-da-srta-peregrine-para-criancas-p/livro:277440/edicao:621732">Leia online (PDF)</a><br clear="all"></li>

        

        <!-- 
        <li><br clear="all"></li>
        -->
        </ul>
               <br clear="all">
           <a href="/livro/bibliotecario/277440/edicao:621732"><i class="icon-edit"></i> Editar</a>
           <br clear="all">
           <style>
       .box-share-facebook-google {border:none; border-top:1px solid #e4e4e4; height: 25px; margin-top: 15px; padding: 0px; padding-top: 15px; }
       .box-share-facebook {width:100px; border: red 0px solid; text-align: left; margin:0px 0px 0px 0px; float:left; }
       .box-share-google {margin-top:2px; float:left; border:0px solid blue; margin-left: 5px; }
</style>

<div class="box-share-facebook-google">
    <div class="box-share-facebook">
        <div id="fb-root"></div>
        <script>(function (d, s, id) {
                   var js, fjs = d.getElementsByTagName(s)[0];
                   if (d.getElementById(id))
                       return;
                   js = d.createElement(s);
                   js.id = id;
                   js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=252371588132802";
                   fjs.parentNode.insertBefore(js, fjs);
               }(document, 'script', 'facebook-jssdk'));</script>
        <div class="fb-share-button" data-href="https://www.skoob.com.br/o-orfanato-da-srta-peregrine-para-criancas-peculiares-277440ed529657.html" data-type="button"></div>
    </div>
    <div class="box-share-google">
        <div class="g-plusone" data-size="small"></div>
        <script type="text/javascript">
               window.___gcfg = {lang: 'pt-BR'};

               (function () {
                   var po = document.createElement('script');
                   po.type = 'text/javascript';
                   po.async = true;
                   po.src = 'https://apis.google.com/js/platform.js';
                   var s = document.getElementsByTagName('script')[0];
                   s.parentNode.insertBefore(po, s);
               })();
        </script>
    </div>
    <br />
</div>

</div>




<script type="text/ng-template" id="modalOfertas.html">
      <div class="modal-header">
      <h3 class="modal-title" style="font-size:15px; color:#333;">Ofertas encontradas</h3>
      </div>
      <div class="modal-body" style="border:0px solid blue; padding-top:2px;">
      
      <h2 data-ng-if="modal_empty" style='margin:10px 0px; color:#333;'>Nenhuma oferta disponível no momento.</h2>
      
                   <img data-ng-if="modal_loading"  src="//skoob-sp.s3.amazonaws.com/css/v3/img/load-padrao-big.gif" data-ng-cloak>
                    <ul style="border:0px solid red; list-style-type:none; margin-bottom:15px;">
                    <li data-ng-repeat="item in items">
                    <div style="border:1px solid #f1f1f1; border-width:0px 0px 1px 0px; padding:4px; margin:5px 0px;">
                    
                    <img data-ng-src="//skoob-sp.s3.amazonaws.com/css/livraria-{{ item.lojas_anuncios_id }}.jpg" style='border:0px solid #ccc; float:left; height:30px;' height="30" />                                  
                                        <div style='text-align:right;width:120px; float:right; border:0px solid red; margin-top:0px;'><a href="/compra/loja/{{ item.lojas_anuncios_id }}/?redirect={{ item.url }}" target="_blank" class="btn btn-primary" style="height:20px; padding:3px 20px;">Ir à Loja</a></div>
                                        <div style='text-align:left; margin-top:5px;width:120px; float:right; border:0px solid green;'><strong>R$ {{ item.preco }}<strong></div>                              
                    <br clear="all">
                    </div>
                    </li>
                    </ul>
            
            <div style="font-size:11px; text-align:left; font-weight:normal;">
                  <b>Importante: </b> É possível haver diferença entre o valor anunciado aqui e o site da loja. Quando acontecer, prevalecerá sempre o preço no site da loja.
            </div>
      </div>
</script>    </div>

    <div id="pg-livro-principal-container">
        <div id="pg-livro-titulo-container">
            <div id="pg-livro-titulo">
                <h1><?php printf($consulta['nm_livro']);  ?></h1>

                <div id="pg-livro-container">

                    


                </div>

            </div>
            <br class="br-clear" />
            <h2 class="pg-livro-subtitulo"><?php printf($consulta['ds_subtitulo_livro']);  ?></h2>
            <br class="br-clear" />
        </div>

        <div id="livro-perfil-status" class="row-fluid">
            <div class="span3">
                <div id="pg-livro-box-rating" class="bg_green">
                    <span class="rating"><?php printf($consulta['vl_nota_livro']);  ?></span>
                </div>
                <div id="pg-livro-box-rating-avaliadores">
                    <star-rating rate="4.2" type="livro"  id="621732" boxcounter="false" fixed="true" size="medium"></star-rating>
                    <div id='pg-livro-box-rating-avaliadores-numero'><?php printf($consulta['nr_avaliacao_livro']);  ?> avaliações</div>                </div>
            </div>

            <div class='bar'>
                <a href="/livro/resenhas/277440/edicao:621732">RESENHAS</a>                <b><a href="/livro/resenhas/277440/edicao:621732" class="text_blue">503</a></b>
            </div>
            <div class='bar'>
                <a href="/livro/leitores/abandonaram/277440/edicao:621732">ABANDONOS</a>                <b><a href="/livro/leitores/abandonaram/277440/edicao:621732" class="text_blue">182</a></b>
            </div>
            <div class='bar'>
                <a href="/livro/leitores/relendo/277440/edicao:621732">RELENDO</a>                <b><a href="/livro/leitores/relendo/277440/edicao:621732" class="text_blue">24</a></b>
            </div>
            <div class='bar'>
                <a href="/livro/leitores/vaoler/277440/edicao:621732">QUEREM LER</a>                <b><a href="/livro/leitores/vaoler/277440/edicao:621732" class="text_blue">18.240</a></b>
            </div>
            <div class='bar'>
                <a href="/livro/leitores/lendo/277440/edicao:621732">LENDO</a>                <b><a href="/livro/leitores/lendo/277440/edicao:621732" class="text_blue">2.238</a></b>
            </div>
            <div class='bar'>
                <a href="/livro/leitores/leram/277440/edicao:621732">LERAM</a>                <b><a href="/livro/leitores/leram/277440/edicao:621732" class="text_blue">14.622</a></b>
            </div>
        </div>

        <div id="pg-livro-menu-azul">
            <div id="top-menu-fin">
                <span class='icon-favorito sk-cor-branco'></span><a href="/livro/leitores/favoritos/277440/edicao:621732" class="link_11_off  l_icones sk-cor-branco">Favoritos  (2.367)</a><span class='icon-desejado sk-cor-branco'></span><a href="/livro/leitores/desejam/277440/edicao:621732" class="link_11_off  l_icones sk-cor-branco">Desejados  (5.888)</a><span class='icon-troca sk-cor-branco'></span><a href="/livro/leitores/trocam/277440/edicao:621732" class="link_11_off  l_icones sk-cor-branco">Trocam  (99)</a><span class='icon-avaliacao sk-cor-branco'></span><a href="/livro/leitores/avaliaram/277440/edicao:621732" class="link_11_off  l_icones sk-cor-branco">Avaliaram  (<?php printf($consulta['nr_avaliacao_livro']);  ?>)</a>            </div>
        </div>
        <br />
        <br />

                       <div id="livro-perfil-sinopse" class="row-fluid">
                   <div id="livro-perfil-sinopse-txt" class="sinopse-limit">
                       <p itemprop="description">
                           <?php printf($consulta['ds_resumo_livro']);  ?><br /><br />

                           <span class='pg-livro-generos'><?php printf($consulta['ds_categorias']);  ?><span></p>
                   </div>
                                             <div id='sinopse-extend'>
                              <br class="br-clear" />
                              <a href="javascript:{}" id='sinopse-extend-bt' class="sinopse-extend-bt-active">ver mais</a>
                          </div>
                                         </div>
               

        <div id = "livro-perfil-publicidade" class = "pg-livro-banner-middle">
                   <!-- /101690757/BOOK-HOME -->
       <!-- 
       -->
       <script type='text/javascript'>
              googletag.cmd.push(function () {
                  googletag.defineSlot('/101690757/BOOK-HOME', [[728, 90], [735, 100]], 'div-gpt-ad-1432318237463-0').addService(googletag.pubads());
                  googletag.pubads().enableSingleRequest();
                  googletag.enableServices();
              });
       </script>

       <div id='div-gpt-ad-1432318237463-0' style=' min-height: 90px; width:728px; margin: 0 auto;'>
           <script type='text/javascript'>
                  googletag.cmd.push(function () {
                      googletag.display('div-gpt-ad-1432318237463-0');
                  });
           </script>
       </div>
               </div>



        <div id="pg-livro-box-edicoes-similares" class="row-fluid">
            <div class="span6 pg-livro-box-similares left">
                <h2 class="secao-subtitulo">Edições</h2> 
                <br />
                <div class="row-fluid pg-livro-box-similares-container">
                    
<div class="clivro pg-livro-box-similares-capa" style="margin-right:19px;" popover-trigger="mouseenter" popover="<?php printf($consulta['ds_resumo_livro']);  ?>" popover-title="<?php printf($consulta['nm_livro']);  ?>" id="621732"><div class='opadd bt-plus-micro'><a href="javascript:{}" ng-click="shelfOpen(621732)" class="btn btn-primary"><i class="icon-plus"></i></a></div><div class="livro-capa"><a href='#' title='<?php printf($consulta['nm_livro']);  ?>'   class='capa-link-item'><img src='<?php printf($consulta['ds_url_capa_livro']);  ?>' alt='O Lar da Srta. Peregrine para Crianças Peculiares'  title='O Lar da Srta. Peregrine para Crianças Peculiares' class='cpimg'  itemprop='image' /></a></div></div>
</div>
            </div>
            <div class="span6 pg-livro-box-similares right">
                <h2 class="secao-subtitulo">Similares</h2>
                                       (15) <a href="/livro/similares/277440/edicao:621732" class="label label-warning right">ver mais</a>
                                       <br />
                <div class="row-fluid pg-livro-box-similares-container">
                    <div class="pg-livro-box-similares-capa" style="margin-right:19px;" popover-trigger="mouseenter" popover="Biblioteca de Almas é o último volume da celebrada trilogia iniciada com O lar da srta. Peregrine para crianças peculiares. Neste terceiro livro, depois de sofrer com a morte do avô, conhecer crianças" popover-title="Biblioteca de Almas" id="598463"><div class='opadd bt-plus-micro'><a href="javascript:{}" ng-click="shelfOpen(598463)" class="btn btn-primary"><i class="icon-plus"></i></a></div><div class="livro-capa"><a href='/biblioteca-de-almas-596982ed598463.html' title='Biblioteca de Almas'   class='capa-link-item'><img src='https://cache.skoob.com.br/local/images//aptc4VRbk2C3KLY32MAT295zH2o=/70x103/center/top/smart/filters:format(jpeg)/https://skoob.s3.amazonaws.com/livros/596982/BIBLIOTECA_DE_ALMAS_1468528736596982SK1468528736B.jpg' alt='Biblioteca de Almas'  title='Biblioteca de Almas' class='cpimg'  itemprop='image' /></a></div></div><div class="pg-livro-box-similares-capa" style="margin-right:19px;" popover-trigger="mouseenter" popover="Cidade dos Etéreos dá sequência ao celebrado O orfanato da srta. Peregrine para crianças peculiares, em que o jovem Jacob Portman, para descobrir a verdade sobre a morte do avô, segue pistas que o lev" popover-title="Cidade dos Etéreos" id="376678"><div class='opadd bt-plus-micro'><a href="javascript:{}" ng-click="shelfOpen(376678)" class="btn btn-primary"><i class="icon-plus"></i></a></div><div class="livro-capa"><a href='/cidade-dos-etereos-336018ed376678.html' title='Cidade dos Etéreos'   class='capa-link-item'><img src='https://cache.skoob.com.br/local/images//X6hSmirMvid6DBp971vRdSPlPAo=/70x103/center/top/smart/filters:format(jpeg)/https://skoob.s3.amazonaws.com/livros/336018/CIDADE_DOS_ETEREOS_1452788397336018SK1452788397B.jpg' alt='Cidade dos Etéreos'  title='Cidade dos Etéreos' class='cpimg'  itemprop='image' /></a></div></div><div class="pg-livro-box-similares-capa" style="margin-right:19px;" popover-trigger="mouseenter" popover="'O Essencial da EstratÃ©gia'' Ã© um box com trÃªs tÃ­tulos famosos em todo o mundo e, que se complementam, sendo indispensÃ¡veis para qualquer pessoa que queira sair do lugar comum e se destacar na vi" popover-title="O Essencial da Estratégia" id="609552"><div class='opadd bt-plus-micro'><a href="javascript:{}" ng-click="shelfOpen(609552)" class="btn btn-primary"><i class="icon-plus"></i></a></div><div class="livro-capa"><a href='/o-essencial-da-estrategia-609281ed609552.html' title='O Essencial da Estratégia'   class='capa-link-item'><img src='https://cache.skoob.com.br/local/images//PXtZEpeAv5k57GYu9A0MMiBOpug=/70x103/center/top/smart/filters:format(jpeg)/https://skoob.s3.amazonaws.com/livros/609281/f08d699c54862f5003d9767528d4da96B.jpg' alt='O Essencial da Estratégia'  title='O Essencial da Estratégia' class='cpimg'  itemprop='image' /></a></div></div><div class="pg-livro-box-similares-capa" style="margin-right:0px;" popover-trigger="mouseenter" popover="Limited collector s edition of Eleanor & Park features a new jacket, an exclusive Q&A with author Rainbow Rowell, and several stunning pieces of fan art.#1 New York Times Best Seller!'Eleanor & Park r" popover-title="Eleanor & Park: Exclusive Special Edition" id="620222"><div class='opadd bt-plus-micro'><a href="javascript:{}" ng-click="shelfOpen(620222)" class="btn btn-primary"><i class="icon-plus"></i></a></div><div class="livro-capa"><a href='/eleanor-e-park-exclusive-special-edition-619567ed620222.html' title='Eleanor & Park: Exclusive Special Edition'   class='capa-link-item'><img src='https://cache.skoob.com.br/local/images//jskfe0Fr1jPWXgWTveg8Y6hYDFE=/70x103/center/top/smart/filters:format(jpeg)/https://skoob.s3.amazonaws.com/livros/619567/7ee7e0662a2682653e74c5e6de47c7cdB.jpg' alt='Eleanor & Park: Exclusive Special Edition'  title='Eleanor & Park: Exclusive Special Edition' class='cpimg'  itemprop='image' /></a></div></div>                </div>
            </div>
        </div>



                       <div id="livro-perfil-resenhas" class="perfil-box both" itemprop="review" itemscope itemtype="http://schema.org/Review" >
                   <h2 class="secao-subtitulo">Resenhas para <?php printf($consulta['nm_livro']);  ?> (<?php printf($consulta['qt_resenha']);  ?>)</h2>  <a href="/livro/resenhas/277440/edicao:621732" class="label label-warning right">ver mais</a>
                   <br class="br-clear" />

                   <div class="topo row-fluid pg-livro-resenha">
                       <div class='pg-livro-resenha-usuario'>
                           <a href='/usuario/20027-voorhees' class='pg-livro-resenha-usuario-link' alt='Voorhees' title='<?php printf($consulta['nm_autor_resenha']);  ?>'><img src='<?php printf($consulta['ds_img_autor_resenha']);  ?>' class='pg-livro-resenha-usuario-foto round-4'></a>                       </div>
                       <div class='pg-livro-resenha-texto'>
                           <strong><span itemprop="name"></span></strong>
                           <div>
                               <div class='pg-livro-resenha-rating'>
                                   <a href="/estante/resenhas/20027" class='pg-livro-resenha-link'>
                                       <span itemprop="author"><?php printf($consulta['nm_autor_resenha']);  ?></span>
                                   </a>

                                   <div class='pg-livro-resenha-rating-estrelas' itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
                                       <star-rating rate="2" type="livro"  id="621732" boxcounter="false" fixed="true" size="small"></star-rating>
                                       <meta itemprop="worstRating" content = "1"/>
                                       <span class='pg-livro-resenha-label' itemprop="ratingValue">2</span>
                                       <meta itemprop="bestRating" content = "5"/>
                                   </div>
                               </div>
                               <div class='pg-livro-resenha-rating-date'>
                                   <span class='pg-livro-resenha-rating-date-label'>
                                       <span itemprop="datePublished" content="2013-02-21 00:42:42">
                                           on <?php printf($consulta['dt_resenha']);  ?>                                       </span>
                                   </span>
                               </div>
                               <br class="br-clear" />
                           </div>
                       </div>
                       <br class="br-clear" />
                   </div>
                   <div class="livro-perfil-resenhas-txt">
                       <span itemprop="description">
                           <?php printf($consulta['ds_resenha']);  ?>
                       </span>
                       
                   </div>
               </div>
               

                       <div  id="livro-perfil-videos" class="perfil-box" style='padding-bottom:3px;'>
                   <h2 class="secao-subtitulo">Vídeos <?php printf($consulta['nm_livro']);  ?></h2> 
                   <br class="br-clear" />
                   <div class='livro-perfil-videos-cont' style=''><a href="<?php printf($consulta['ds_url_video_livro']);  ?>" style="border:none;"><img src="<?php printf($consulta['ds_img_video_livro']);  ?>" alt="<?php printf($consulta['nm_video_livro']);  ?>"/></a><h3 style='font-size:11px; font-weight:normal;'><?php printf($consulta['nm_video_livro']);  ?></h3></div>                          <div id="openVideo57f410d899d99894108b47c3"></div>

                                             <br class="br-clear" />
               </div>
               

        <div id="livro-perfil-estatisticas" class="perfil-box both">
            <h2 class="secao-subtitulo">Estatísticas</h2>
            <div class="row-fluid pg-livro-box-leitores">

                <div class="span4 pg-livro-box-leitores-desejam">
                    <span class='box_titulo' style='font-size:14px;font-weight:normal !important;'>Desejam</span><span class='box_titulo_total'>5.888</span><br clear='all' /><div style='margin-top:6px;'><a href='/usuario/3094441-bru' tooltip='Bru' style='float: left; margin: 0px 5px 5px 0px;' alt='Bru' title='Bru'><img src='https://cache.skoob.com.br/local/images//zKnFrBg_oh_AlS3XHcV12nAWXSw=/40x40/center/top/smart/filters:format(jpeg)/https://skoob.s3.amazonaws.com/usuarios/3094441/3094441SK1455292954G.jpg' width='40' height='40' class='round-4'></a><a href='/usuario/1115780-gabriel' tooltip='Gabriel' style='float: left; margin: 0px 5px 5px 0px;' alt='Gabriel' title='Gabriel'><img src='https://cache.skoob.com.br/local/images//MZdWzp4Q0zkNGV0H6949vHs4dYE=/40x40/center/top/smart/filters:format(jpeg)/https://skoob.s3.amazonaws.com/usuarios/1115780/1115780SK1472950328G.jpg' width='40' height='40' class='round-4'></a><a href='/usuario/552566-silvia' tooltip='Silvia' style='float: left; margin: 0px 5px 5px 0px;' alt='Silvia' title='Silvia'><img src='https://cache.skoob.com.br/local/images//AsvnKyWSR7MFAN_kR4whn6iE7qk=/40x40/center/top/smart/filters:format(jpeg)/https://skoob.s3.amazonaws.com/usuarios/552566/552566SK1454850604G.jpg' width='40' height='40' class='round-4'></a><a href='/usuario/802191-reka' tooltip='Réka' style='float: left; margin: 0px 5px 5px 0px;' alt='Réka' title='Réka'><img src='https://cache.skoob.com.br/local/images//Ofhm5PjGrQK3hWbJbUjqJZgj3n8=/40x40/center/top/smart/filters:format(jpeg)/https://skoob.s3.amazonaws.com/usuarios/802191/80219198T35XA980219187KJ38G.jpg' width='40' height='40' class='round-4'></a><a href='/usuario/1173080-vic' tooltip='Vic' style='float: left; margin: 0px 5px 5px 0px;' alt='Vic' title='Vic'><img src='https://cache.skoob.com.br/local/images//dv-7qmtMM0ZLp-CLJ6TPkVGUK_c=/40x40/center/top/smart/filters:format(jpeg)/https://skoob.s3.amazonaws.com/usuarios/1173080/1173080SK1472495759G.jpg' width='40' height='40' class='round-4'></a><a href='/usuario/904357-michelle-araujo' tooltip='Michelle Araujo' style='float: left; margin: 0px 5px 5px 0px;' alt='Michelle Araujo' title='Michelle Araujo'><img src='https://cache.skoob.com.br/local/images//mxaPHIRmFzrltrQDCF8GVMUzyBY=/40x40/center/top/smart/filters:format(jpeg)/https://skoob.s3.amazonaws.com/usuarios/904357/904357SK1419967943G.jpg' width='40' height='40' class='round-4'></a><a href='/usuario/904357-michelle-araujo' tooltip='Michelle Araujo' style='float: left; margin: 0px 5px 5px 0px;' alt='Michelle Araujo' title='Michelle Araujo'><img src='https://cache.skoob.com.br/local/images//mxaPHIRmFzrltrQDCF8GVMUzyBY=/40x40/center/top/smart/filters:format(jpeg)/https://skoob.s3.amazonaws.com/usuarios/904357/904357SK1419967943G.jpg' width='40' height='40' class='round-4'></a><a href='/usuario/872492-bru-umoceanodehistorias' tooltip='Bru (@umoceanodehistorias)' style='float: left; margin: 0px 5px 5px 0px;' alt='Bru (@umoceanodehistorias)' title='Bru (@umoceanodehistorias)'><img src='https://cache.skoob.com.br/local/images//AmqDKgRj93ohQjzkOAU5K7CUEQQ=/40x40/center/top/smart/filters:format(jpeg)/https://skoob.s3.amazonaws.com/usuarios/872492/872492SK1468959250G.jpg' width='40' height='40' class='round-4'></a></div>                </div>

                <div class="span4 pg-livro-box-leitores-trocam">
                    <span class='box_titulo' style='font-size:14px;font-weight:normal !important;'>Trocam</span><span class='box_titulo_total'>99</span><br clear='all' /><div style='margin-top:6px;'><a href='/usuario/1536943-pollyana-camilo' tooltip='Pollyana Camilo' style='float: left; margin: 0px 5px 5px 0px;' alt='Pollyana Camilo' title='Pollyana Camilo'><img src='https://cache.skoob.com.br/local/images//n2YFUi1V9tCT_Iu9BwsRCwa724c=/40x40/center/top/smart/filters:format(jpeg)/https://skoob.s3.amazonaws.com/usuarios/1536943/1536943SK1470191830G.jpg' width='40' height='40' class='round-4'></a><a href='/usuario/3223964-daniela.morais' tooltip='Daniela.Morais' style='float: left; margin: 0px 5px 5px 0px;' alt='Daniela.Morais' title='Daniela.Morais'><img src='https://cache.skoob.com.br/local/images//GGqrANbrUNRbK4Nk08Nh3q-hWEY=/40x40/center/top/smart/filters:format(jpeg)/https://skoob.s3.amazonaws.com/usuarios/3223964/3223964SK1465650960G.jpg' width='40' height='40' class='round-4'></a><a href='/usuario/629090-marcelle' tooltip='Marcelle' style='float: left; margin: 0px 5px 5px 0px;' alt='Marcelle' title='Marcelle'><img src='https://cache.skoob.com.br/local/images//lhuTmiM0HDhRatDs_izejVUR7t4=/40x40/center/top/smart/filters:format(jpeg)/https://skoob.s3.amazonaws.com/usuarios/629090/629090SK1471717912G.jpg' width='40' height='40' class='round-4'></a><a href='/usuario/3851500-ju' tooltip='Ju' style='float: left; margin: 0px 5px 5px 0px;' alt='Ju' title='Ju'><img src='https://cache.skoob.com.br/local/images//m8BSJTW-jf_vc9K0Uvnz0t79ATk=/40x40/center/top/smart/filters:format(jpeg)/https://skoob.s3.amazonaws.com/usuarios/3851500/3851500SK1475910482G.jpg' width='40' height='40' class='round-4'></a><a href='/usuario/1340420-zih' tooltip='Zih' style='float: left; margin: 0px 5px 5px 0px;' alt='Zih' title='Zih'><img src='https://cache.skoob.com.br/local/images//xcwojDd-IG1B_M6c0dQysLz07qU=/40x40/center/top/smart/filters:format(jpeg)/https://skoob.s3.amazonaws.com/usuarios/1340420/1340420SK1475873067G.jpg' width='40' height='40' class='round-4'></a><a href='/usuario/712830-k.g' tooltip='K.G' style='float: left; margin: 0px 5px 5px 0px;' alt='K.G' title='K.G'><img src='https://cache.skoob.com.br/local/images//5HsjP5XEUY2AEwJZwRDLX9B5tLk=/40x40/center/top/smart/filters:format(jpeg)/https://skoob.s3.amazonaws.com/usuarios/712830/712830SK1478035120G.jpg' width='40' height='40' class='round-4'></a><a href='/usuario/3614013-carla' tooltip='Carla' style='float: left; margin: 0px 5px 5px 0px;' alt='Carla' title='Carla'><img src='https://cache.skoob.com.br/local/images//zH2hIaJLrxZfEXA8kW5Q4lVBbGc=/40x40/center/top/smart/filters:format(jpeg)/https://skoob.s3.amazonaws.com/usuarios/3614013/3614013SK1468280279G.jpg' width='40' height='40' class='round-4'></a><a href='/usuario/2955842-laura' tooltip='Laura ' style='float: left; margin: 0px 5px 5px 0px;' alt='Laura ' title='Laura '><img src='https://cache.skoob.com.br/local/images//qmqEyjnTUVv7p6PcT6ELMfMWdLo=/40x40/center/top/smart/filters:format(jpeg)/https://skoob.s3.amazonaws.com/usuarios/2955842/2955842SK1458872122G.jpg' width='40' height='40' class='round-4'></a></div>                </div>

                <div class="span4 pg-livro-box-avaliacoes">

                    <div class='pg-livro-box-avaliacoes-container'>
                        <span class='pg-livro-box-avaliacoes-label'>Avaliações</span>
                        <span class='pg-livro-box-avaliacoes-numero'>4.2 / 9.756</span>
                        <br class="br-clear">
                    </div>

                    <div class='pg-livro-box-avaliacoes-grafico'>
                        <div style='float:left; border:blue 0px solid;'><div style='height:12px; margin-bottom:4px; float:left;'><img src="https://s3-sa-east-1.amazonaws.com/skoob-sp/icones/5_estrela.gif" width="46" height="10" alt="5" style="float:left; border:none; margin:0px 3px 0px 0px; padding:0px;"/><div style='float:left; height:10px; border:#ccc 1px solid; padding:0px; width:100px; background-color:#eeeecc; margin-right:4px;' ><img src="https://s3-sa-east-1.amazonaws.com/skoob-sp/geral/barra_ranking.gif" width="44" alt="ranking 44" style="border:none; margin:0px; padding:1px; float:left;height:8px !important;"/></div><div style='float:left; font-size:11px; width:30px; padding:0px; height:10px; line-height:10px;'>44%</div></div><div style='height:12px; margin-bottom:4px; float:left;'><img src="https://s3-sa-east-1.amazonaws.com/skoob-sp/icones/4_estrela.gif" width="46" height="10" alt="4" style="float:left; border:none; margin:0px 3px 0px 0px; padding:0px;"/><div style='float:left; height:10px; border:#ccc 1px solid; padding:0px; width:100px; background-color:#eeeecc; margin-right:4px;' ><img src="https://s3-sa-east-1.amazonaws.com/skoob-sp/geral/barra_ranking.gif" width="35" alt="ranking 35" style="border:none; margin:0px; padding:1px; float:left;height:8px !important;"/></div><div style='float:left; font-size:11px; width:30px; padding:0px; height:10px; line-height:10px;'>35%</div></div><div style='height:12px; margin-bottom:4px; float:left;'><img src="https://s3-sa-east-1.amazonaws.com/skoob-sp/icones/3_estrela.gif" width="46" height="10" alt="3" style="float:left; border:none; margin:0px 3px 0px 0px; padding:0px;"/><div style='float:left; height:10px; border:#ccc 1px solid; padding:0px; width:100px; background-color:#eeeecc; margin-right:4px;' ><img src="https://s3-sa-east-1.amazonaws.com/skoob-sp/geral/barra_ranking.gif" width="17" alt="ranking 17" style="border:none; margin:0px; padding:1px; float:left;height:8px !important;"/></div><div style='float:left; font-size:11px; width:30px; padding:0px; height:10px; line-height:10px;'>17%</div></div><div style='height:12px; margin-bottom:4px; float:left;'><img src="https://s3-sa-east-1.amazonaws.com/skoob-sp/icones/2_estrela.gif" width="46" height="10" alt="2" style="float:left; border:none; margin:0px 3px 0px 0px; padding:0px;"/><div style='float:left; height:10px; border:#ccc 1px solid; padding:0px; width:100px; background-color:#eeeecc; margin-right:4px;' ><img src="https://s3-sa-east-1.amazonaws.com/skoob-sp/geral/barra_ranking.gif" width="3" alt="ranking 3" style="border:none; margin:0px; padding:1px; float:left;height:8px !important;"/></div><div style='float:left; font-size:11px; width:30px; padding:0px; height:10px; line-height:10px;'>3%</div></div><div style='height:12px; margin-bottom:4px; float:left;'><img src="https://s3-sa-east-1.amazonaws.com/skoob-sp/icones/1_estrela.gif" width="46" height="10" alt="1" style="float:left; border:none; margin:0px 3px 0px 0px; padding:0px;"/><div style='float:left; height:10px; border:#ccc 1px solid; padding:0px; width:100px; background-color:#eeeecc; margin-right:4px;' ><img src="https://s3-sa-east-1.amazonaws.com/skoob-sp/geral/barra_ranking.gif" width="1" alt="ranking 1" style="border:none; margin:0px; padding:1px; float:left;height:8px !important;"/></div><div style='float:left; font-size:11px; width:30px; padding:0px; height:10px; line-height:10px;'>1%</div></div></div><br clear='all'>                    </div>

                </div>

                <div class="span3 pg-livro-box-sexos">
                    <div class='row-fluid pg-livro-box-sexos-male'>
                        <i class="icon-male fa-padrao pg-livro-icone-male"></i>
                        <span class='pg-livro-icone-male-label'> 21%</span>
                    </div>
                    <br clear=all />
                    <div class='row-fluid pg-livro-box-sexos-female'>
                        <i class="icon-female fa-padrao pg-livro-icone-female"></i>
                        <span class="pg-livro-icone-female-label"> 79% </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="livro-autores-container">
    <a href='<?php printf($consulta['ds_url_autor']);  ?>'><div class='livro-autores'><img src="<?php printf($consulta['ds_img_autor']);  ?>" title="Foto - <?php printf($consulta['nm_autor']);  ?>" alt="Foto - <?php printf($consulta['nm_autor']);  ?>" class="livro-autor-foto"/><div class='livro-autor-biografia'><h3 class='secao-subtitulo'><?php printf($consulta['nm_autor']);  ?></h3><br /><br /><?php printf($consulta['ds_autor']);  ?></div></div></a></div>        <br clear="both">

        <div  id="box-info-cad">
            <div class='box-info-cad-user'><a href='/usuario/2042-thiago-trisltz' class='pg-livro-usuario-link'><img src='https://cache.skoob.com.br/local/images//4zYyUBdij6BzUXGwIKOdhbLp-9s=/40x40/center/top/smart/filters:format(jpeg)/https://skoob.s3.amazonaws.com/usuarios/2042/2042SK1469448575G.jpg' class='pg-livro-usuario-foto round-4'></a><div class='box-info-cad-date'><a href=/usuario/2042-thiago-trisltz>Thiago Trisltz</a><br />cadastrou em: <br>19/10/2016 16:07:29</div></div><div class='box-info-cad-user'><a href='/usuario/71703-pri-paiva' class='pg-livro-usuario-link'><img src='https://cache.skoob.com.br/local/images//bIrapPAm5ZvpGop7gwvaNFFpspY=/40x40/center/top/smart/filters:format(jpeg)/https://skoob.s3.amazonaws.com/usuarios/71703/71703SK1464533574G.jpg' class='pg-livro-usuario-foto round-4'></a><div class='box-info-cad-date'><a href=/usuario/71703-pri-paiva>Pri Paiva</a><br />editou em: <br>10/11/2016 15:08:43</div></div><div class='box-info-cad-user'><a href='/usuario/71703-pri-paiva' class='pg-livro-usuario-link'><img src='https://cache.skoob.com.br/local/images//bIrapPAm5ZvpGop7gwvaNFFpspY=/40x40/center/top/smart/filters:format(jpeg)/https://skoob.s3.amazonaws.com/usuarios/71703/71703SK1464533574G.jpg' class='pg-livro-usuario-foto round-4'></a><div class='box-info-cad-date'><a href=/usuario/71703-pri-paiva>Pri Paiva</a><br />aprovou em: <br>10/11/2016 15:09:23</div></div>        </div>

        
    </div>
    <br class="br-clear">
</div>

                </div>
            </div>
            <br clear='all'/>
        </div>

        <link rel="stylesheet" type="text/css" href="https://cache.skoob.com.br/s3/skoob-sp/css/v2/responsive/v2_responsivo_bootstrap.css"/>
    <footer class='skoobv20150930 clearfix'>
        <div class="container clearfix">
            <div class="row super">
                    <div class="col-md-6 hidden-sm hidden-xs clearfix about">
                        <br />
                        <img src="img/logo-footer.png" class="logo-footer" style="margin-bottom: 29px;" alt=""/> 
                        <div class="brief" style="width: 380px; border:0px solid red; font-size: 14px;">
                            Somos a maior rede social do Brasil 100% focada em leitores. Funcionamos como uma estante virtual onde você pode colocar os livros que já leu, como aqueles que ainda deseja ler.
                            Compartilhe suas opiniões com seus amigos... <a href='https://www.skoob.com.br/inicio/quem_somos'>Leia mais</a>.
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12  clearfix links">
                        <br/>
                        <ul>
                            <li><a href='https://www.skoob.com.br/ajuda/faq'>FAQ</a></li>
                            <li><a href='https://www.skoob.com.br/inicio/quem_somos'>Quem Somos</a></li>
                            <li><a href='https://blog.skoob.com.br/'>Blog</a></li>
                            <li><a href='https://www.skoob.com.br/acervo/adicionar/'>Cadastro de livros</a></li>
                            <li><a href='https://www.skoob.com.br/autor/checar/'>Cadastro de autores</a></li>
                            <li><a href='https://www.skoob.com.br/downloads/'>Downloads</a></li>
                            <li><a href='https://www.skoob.com.br/ajuda/faq'>Fale Conosco</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-12 clearfix social">
                        <div>
                            <br />
                            <div class="networks">
                                <a href="//www.facebook.com/skoobnews" alt="Facebook - Skoob" title="Facebook - Skoob" target="_blank"><i class="fa fa-facebook-square"></i></a>
                                <a href="//www.youtube.com/user/skoobnews" alt="Youtube - Skoob" title="Youtube - Skoob" target="_blank"><i class="fa fa-youtube-square"></i></a>
                                <a href="//twitter.com/skoobnews" rel="nofollow" alt="Twitter - Skoob" title="Twitter - Skoob" target="_blank"><i class="fa fa-twitter-square"></i></a>
                                <a href="//instagram.com/skoobnews" rel="nofollow" alt="Instagram - Skoob" title="Instagram - Skoob" target="_blank"><i class="fa fa-instagram"></i></a>
                                <a href="//plus.google.com/106271037006970682640/posts" rel="nofollow" alt="Google plus - Skoob" title="Google plus - Skoob" target="_blank"><i class="fa fa-google-plus-square"></i></a>
                            </div>
                        </div>
                        <div>
                            <h5>Baixe nosso app</h5>
                            <div class="apps">
                                <a href="https://itunes.apple.com/br/app/skoob/id904670263?l=pt&amp;ls=1&amp;mt=8"><img src="https://skoob-sp.s3.amazonaws.com/img/mkt/2015-SET/app-store.jpg" alt="Baixe para iPhone"></a>
                                <a href="https://play.google.com/store/apps/details?id=com.gaudium.skoob&amp;hl=pt_BR"><img src="https://skoob-sp.s3.amazonaws.com/img/mkt/2015-SET/google-play.jpg" alt="Baixe para Android"></a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="row subfooter clearfix" style="margin-right: 0px;">
            <ul>
                <li><a title="Livros" href='https://www.skoob.com.br/livro/lista/'>Livros</a></li>
                <li><a title="Autores" href='https://www.skoob.com.br/autor/recentes/'>Autores</a></li>
                <li><a title="Editoras" href='https://www.skoob.com.br/editoras/'>Editoras</a></li>
                <li><a title="Leitores" href='https://www.skoob.com.br/usuario/lista'>Leitores</a></li>
                <li><a rel="nofollow" title="Grupos" href='https://www.skoob.com.br/grupo/atualizados/'>Grupos</a></li>
                <li><a rel="nofollow" title="Trocas" href='https://www.skoob.com.br/plus/'>Trocas</a></li>
                <li><a title="Cortesias" href='https://www.skoob.com.br/cortesia/'>Cortesias</a></li>
                <li><a title="Lançamentos" href="https://www.skoob.com.br/livro/lancamentos/">Lançamentos</a></li>
                <li><a title="Top Mais" href='https://www.skoob.com.br/livro/top_mais/lidos/'>Top Mais</a></li>
                <li><a title="Meta de Leitura" href="https://www.skoob.com.br/meta/ano/2016/">Meta de Leitura 2016</a></li>
            </ul>
        </div>
    </footer>
    <script type="application/javascript" src="/application/banner"></script>
</body>
</html>