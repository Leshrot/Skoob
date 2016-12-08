<?php include("header.php"); ?>
          <!DOCTYPE html>
<html xmlns='//www.w3.org/1999/xhtml'>
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# books: http://ogp.me/ns/books#">
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />        <title>Estante Virtual - Leshrot</title>
                <meta name="language" content="pt-br"/>
        <meta name="google-site-verification" content="h_F9-djAws40JfpX_W4juzsPjd9YZ2v-s0YvOG-D388"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="apple-itunes-app" content="app-id=904670263"/>
        <meta name="google-play-app" content="app-id=com.gaudium.skoob" />
        <meta name="msapplication-config" content="none"/>
        <script type="text/javascript" src="//www.google.com/jsapi"></script>

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
    googletag.defineSlot('/101690757/SKY-120X90', [120, 600], 'div-gpt-ad-1432259496859-0').addService(googletag.pubads());
    googletag.defineSlot('/101690757/SK-HOME-BOX', [250, 250], 'div-gpt-ad-1432305651296-0').addService(googletag.pubads());
    googletag.defineSlot('/101690757/SK-HOME-MIDDLE-1', [[728, 90], [960, 110], [970, 90]], 'div-gpt-ad-1432317211110-0').addService(googletag.pubads());
    googletag.defineSlot('/101690757/SK-HOME-MIDDLE-2', [[728, 90], [960, 110], [970, 90]], 'div-gpt-ad-1432317211110-1').addService(googletag.pubads());
    googletag.defineSlot('/101690757/SK-CORTESIA-BOX-1', [250, 250], 'div-gpt-ad-1432579139176-0').addService(googletag.pubads());
    googletag.defineSlot('/101690757/SK-CORTESIA-BOX-2', [250, 250], 'div-gpt-ad-1432579139176-1').addService(googletag.pubads());
    googletag.defineSlot('/101690757/SK-BOOK-TOP-ADX', [960, 90], 'div-gpt-ad-1442757100761-0').addService(googletag.pubads());
    //googletag.defineSlot('/101690757/SK-BOOK-HOME-TOP', [960, 90], 'div-gpt-ad-1462825042240-0').addService(googletag.pubads());
    //googletag.defineSlot('/101690757/BOOK-HOME',[[728, 90], [735,100]], 'div-gpt-ad-1432318237463-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script><script type="text/javascript" src="https://cache.skoob.com.br/local/skoob/js/angularjs/base.min.js?1474564786"></script><script type="text/javascript" src="https://cache.skoob.com.br/local/skoob/js/angularjs/main.min.js?1477598439"></script><link rel="stylesheet" type="text/css" href="https://cache.skoob.com.br/local/skoob/css/ver2/main.min.css?1474564796"/>
        <!--
        -->
    </head>

    <body id="ng-app" ng-app="skoob">
    
<div style="margin-top:104px">        <div style="width:950px;margin:auto;">
                    </div>

        <div id='container-full' class=''>
            <div id='corpo' data-ng-controller="mainCtrl as main">
                <style>
     .estante-livros-horizontal{float:left; margin-left:13.5px; width: 72px; height: 125px;}
     .livro-capa{width:70px;height:101px;}
     .livro-capa img{width:70px;height:101px;border:1px solid #f1f1f1; border-width: 1px 1px 1px 0px; }
     .estante-livros-vertical{float:left; margin:0 0 12px 13.5px; height: 125px;border-bottom:1px solid #ccc;width:754px;}
     .estante-livros-vertical .livro-capa{width:70px;height:101px;float:left;display:block;}
     .estante-livros-vertical .livro-capa img{width:70px;height:101px;}
     .livro-conteudo{width:500px;height:101px;float:left;margin-left:10px;}
     .tmp-menu-left div{float:left;}
     .tmp-menu-left div.blista, .tmp-menu-left div.blistaon{float:right;}
     .pagination{margin:0px;}
     .drop-shadow-left {box-shadow: -2px 0 5px -2px rgba(0,0,0,0.4) !important;}
     .bt-livro-excluir { border-radius: 50%; border:4px solid red; background-color:red; padding:2px; padding-top: 1px; position: absolute; z-index: 1100; margin-top: 5px; right: -10px; color:#fff; font-size: 15px; height: 15px; width: 15px; text-align: center; display: none;  cursor:pointer; } 
</style>

<div data-ng-controller="bookcase" ng-init="estante('books', 3967192, 0, 1);">
     <div id="meu_perfil" style='background-color:#fff; border: none;  padding-bottom:0px; width:955px;  margin-top:10px; margin-bottom:2px; text-align:left; height:75px;'>
            <a href="Skoob_perfil.php" style="width:70px;height:70px;overflow:hidden;display:block;float:left;margin-right:10px;" class="round-4"><img src="<?php print($_SESSION["foto"]);?>" style="margin-right:10px; float:left;  padding:0px;" alt=""/></a>
            <div style='float:left; width:840px;  border:none; text-align:left; font-size:12px; padding:0px;'>
                        <div style='background-color:#fff; width:845px;  height: 21px; border:red 0px solid;'>
                                    <div style='display:block; float:left; font-size:20px; font-weight:bold; margin-right:10px; padding:0px;'><?php print($_SESSION["nome"]);?></div>                                    <br clear="all" />
                                    <div style="margin: 10px 0 10px 0;">

                                                                                    </div>
                        </div>
                        <br clear="all" />
                        <div id='menubusca-' style='padding:0px; margin:0px; width:880px; float:left;' ><ul class='nav nav-tabs' style='width:880px; margin-bottom:0px; padding-bottom:0px;'><li class="active"><a href="/estante/livros/todos/3967192/page:1">Estante</a></li><li ><a href="/estante/resenhas/3967192">Resenhas</a></li><li ><a href="/recados/mensagens">Recados</a></li><li ><a href="/amigos/listar/3967192/">Amigos</a></li><li ><a href="/grupo/usuario/3967192/">Grupos</a></li><li ><a href="/seguidores/listar/3967192/">Seguidores</a></li><li ><a href="/seguidos/listar/3967192/">Seguidos</a></li><li class="onblue"><a href="/troca/">Plus / Trocas</a></li></ul></div>            </div>
</div>
<br clear='all' />
<div id='ferramentas' style='height:27px;width:960px; border:none; padding:0px; margin-top:-12px; padding-bottom:10px; border-bottom:1px solid #F4F3F5;'><div style='border:0px solid red; float:left; margin-top:3px;'><a href="/estante/livros/todos/3967192/" class="bt_ativo curva2-5" style="color:#666 !important">Livros 22</a><a href="/estante/quadrinhos/todos/3967192/" class="bt curva2-5" style="color:#666 !important">Quadrinhos</a><a href="/estante/revistas/todos/3967192/" class="bt curva2-5" style="color:#666 !important">Revistas</a><div id='box_bt_est'>     <a href='javascript:{}' ng-click="estanteFormatoClassInline('estante-livros-horizontal')" title='Estante horizontal' id='besth' class='bt_est {{formato_bt_horizontal}}'><img src="https://s3-sa-east-1.amazonaws.com/skoob-sp/icones/est_h_on.gif" /></a>
<a href='javascript:{}' ng-click="estanteFormatoClassInline('estante-livros-vertical')" title='Estante vertical' id='besth' class='bt_est {{formato_bt_vertical}}'><img src="https://s3-sa-east-1.amazonaws.com/skoob-sp/icones/est_v_on.gif" /></a>
     </div><div id='box_org'><i class="icon-loop" style="margin:0px 4px 2px 5px;"></i><a href="/estante/organizar/livros" class="">organizar</a></div><br clear='all'></div>
<form action='javascript:{}' method='post' class='form-group form-group-sm' style='border:0px solid green; height:27px; float:right; width: 240px;'>
            <div class="input-group" style='float:right;'>
                        <input type="text" data-ng-model="termo_busca" id="inputString" class="form-control" style="width: 170px; padding: 0px 8px !important; height: 27px; margin: 0px; float: right;">
                        <span class="input-group-btn" style="border:0px solid blue;margin:0px; padding: 0px !important; height: 27px; box-shadow:none !important;">

                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="height:29px; margin-top: 0px !important; border-radius: 0px; color:#3189C8 !important; padding-bottom: 5px; margin-right: -5px !important;"><i class='{{tipo_local_class}}'></i></button>

                                    <ul class="dropdown-menu pull-right" style="font-size: 16px;">
                                                <li><a href="#" ng-click='setLocalBusca(1)'><i class='fa fa-book'></i> por título</a></li>
                                                <li><a href="#" ng-click='setLocalBusca(2)'><i class='fa fa-male'></i> por autor</a></li>
                                                <li><a href="#" ng-click='setLocalBusca(3)'><i class='fa fa-building-o'></i> por editora</a></li>
                                    </ul>

                                    <button class="btn btn-default btn-xs" type="submit" ng-click="busca('books', 3967192, 0, 1)" style='width:35px;height:29px; box-shadow:none !important; margin-top: 0px !important;'>
                                                <img src="//skoob-sp.s3.amazonaws.com/css/icon-lupa.png" style="margin:7px 0 4px 0;height:12px;width:12px;" />
                                    </button>
                        </span>
            </div>
            <br clear="all">
</form>
<br clear='all'></div>
<!-- Modal -->
<div id="myModal" class="modal  hide fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 id="myModalLabel">Sincronizar com o Facebook</h3>
            </div>
            <div class="modal-body">
                        <p>Agora você pode sincronizar suas atividades passadas do Skoob no Facebook.</p><p>
                                    Assim os livros que já foram marcados como "lido" ou "Quero ler" poderão ser visto também por seus amigos do Facebook.</p>
                        <p>
                                    <div class='alert alert-warning'>Você precisa estar logado no facebook.
                         <a href='https://www.facebook.com/dialog/oauth?client_id=252371588132802&redirect_uri=https://www.skoob.com.br/estante/livros/3967192/page:1/?scope=email,user_birthday,read_friendlists,user_likes&modal=1' class='btn btn-success'>Logar utilizando o Facebook</a>                         
                         </div>                        </p>
            </div>
            <div class="modal-footer">
            </div>
</div>     <div style="border:0px solid green;">
          <div data-ng-controller="bookcaseMenu" data-ng-init="menu(3967192, 'books')" style="float: left; width: 160px; border:0px solid red;">
               <div class="tmp-menu-left" style="padding:0px; margin:5px 0px 0px 0px;">
                    <ul style="margin:0px; padding:0px; list-style-type:none;">
                         <li class="lista"><div><i class="icon-table " style="margin:0px 6px 2px 2px;"></i><a href="javascript:{}" data-ng-click="estante('books', 3967192, 0, 1)">Todos</a><br></div><div data-ng-class="{'blistaon badge':estante_id == '', 'blista':estante_id !== ''}"><span ng-bind='stats.total'></span></div></li>
                         <li class="lista"><div><i class="icon-adicionar sk-cor-lido" style="margin:0px 10px 2px 4.5px;"></i><a href="javascript:{}" data-ng-click="estante('books', 3967192, 1, 1)">Lido</a></div><div data-ng-class="{'blistaon badge':estante_id === 1, 'blista':estante_id !== 1}"><span ng-bind='stats.lido'></span></div></li>
                         <li class="lista"><div><i class="icon-adicionar sk-cor-vouler" style="margin:0px 10px 2px 4.5px;"></i><a href="javascript:{}" data-ng-click="estante('books', 3967192, 3, 1)">Quero ler</a></div><div  data-ng-class="{'blistaon badge':estante_id === 3, 'blista':estante_id !== 3}"><span ng-bind='stats.quero_ler'></span></div></li>     
                    </ul>
               </div>
               <div style="border:none; margin-top: 8px; text-align:right; color:#333;">
                                   </div>
               <div style="font-size:11px; margin-top: 8px; border:none; text-align:right; color:#333;">
                    Paginômetro: 
                    <strong>
                         <span ng-bind="stats.paginometro"></span><br />
                         <span style="font-size:10px;">
                              média de páginas: {{stats.media_paginas_lidas}}
                         </span>
                    </strong>
               </div>
          </div>
          <div style="width: 780px; float: right; margin-left:0px; border: 0px solid red; margin-top: 3px;">
               <!-- LIVROS ENCONTRADOS -->
               <div style="height:30px; border: 0px solid red;">
     <div style="float:left;margin:0px 0 0 13px;padding-top:5px;font-size:12px;">
          <div style="font-size:14px; color: #556677; font-weight: bold; border: 0px solid blue; margin-top: 3px;">
                                    <div data-ng-if="estante_loading" style="float:left;margin:1px 10px 0 0px;"><img src="https://skoob-sp.s3.amazonaws.com/img/v2/base/load-padrao.gif" alt=""></div>
                     <span ng-if="total" ng-cloak>{{bigTotalItems}} encontrados </span>
                     <span data-ng-if="total > 36" ng-cloak>| Exibindo {{firstItem}} a {{lastItem}}</span>
                               </div>
     </div>
     <div style="float:right;margin:0px 0 10px 0;" data-ng-if="total > 36" ng-cloak>
                 <pagination rotate='true' total-items="bigTotalItems" items-per-page="36" ng-model="currentPage" max-size="maxSize" estante_id="estante_id" class="pagination-sm" boundary-links="true" rotate="false" num-pages="numPages" previous-text="&lsaquo;" next-text="&rsaquo;" first-text="&laquo;" last-text="&raquo;" ng-change="pageChanged(tipo, usuario_id, estante_id, currentPage)"></pagination>
     </div>
     <br clear="all" />
</div>               <div data-ng-if="total > 0">
                    <ul style="list-style: none;">
                         <li ng-repeat="livro in livros" class="{{formato_class}}">
                              <div class="clivro" style="position:relative;" ng-mouseover="bt_excluir = true" ng-mouseleave="bt_excluir = false">
                                                                            <div class="opdel bt-livro-excluir" ng-click="excluir($index, livro.edicao.id)" click-confirm="Deseja excluir da sua estante?"><i class=" icon-trash"></i></div>
                                         <div class="opadd" style="z-index: 1000;display:none;position:absolute;width:65px;margin:77px 0 0px 2px;"><a href="javascript:{}" ng-click="shelfOpen(livro.edicao.id)" class="btn btn-primary" style="width:65px;padding:2px 0px 0px 0px !important;box-shadow:none !important"><i class="icon-plus" style="font-size:13px;color:#fff;"></i></a></div>
                                                                            <div class="livro-capa">
                                        <a href="{{livro.edicao.url}}" ng-show='livro.edicao.url' ng-cloak>
                                             <div ng-if="livro.tipo">
                                                  <shelf-mark marktype="livro.tipo"></shelf-mark>
                                             </div>
                                             <div ng-if="formato_class_conteudo" class="drop-shadow-left" style="height:103px;">
                                                  <img ng-src="{{livro.edicao.capa_mini}}" />
                                             </div>
                                             <div ng-if="!formato_class_conteudo" class="drop-shadow-left">
                                                  <img ng-src="{{livro.edicao.capa_mini}}"  tooltip="{{livro.edicao.titulo}}" tooltip-animation='false' />
                                             </div>
                                        </a>

                                        <div style='color: #ffcc00;cursor:pointer;margin-left:2px;' ng-if="livro.tipo == 1 || livro.tipo == 5 || livro.tipo == 8">
                                                                                                <star-rating ratetemp="livro.ranking" type="livro"  idtemp="livro.edicao.id" boxcounter="false" fixed="false" size="small"></star-rating>
                                                                                           </div>
                                        <div style='border:0px solid red; width: 100%; margin-top: 5px;' ng-if="livro.tipo == 2">
                                             <read-progress pagestotal="livro.edicao.paginas" pages="livro.paginas_lidas"></read-progress>
                                        </div>
                                   </div>
                                   <div ng-if="formato_class_conteudo" class="livro-conteudo" ng-cloak>
                                        <h3>{{livro.edicao.titulo}}</h3>
                                        <p>{{livro.edicao.subtitulo}} <br />
                                             {{livro.edicao.autor}} <br />
                                             {{livro.edicao.editora}}</p>
                                   </div>
                              </div>
                         </li>
                    </ul>
                    <br clear="all">
               </div>
               <br clear="all">
               <div style="height:30px; border: 0px solid red;">
     <div style="float:left;margin:0px 0 0 13px;padding-top:5px;font-size:12px;">
          <div style="font-size:14px; color: #556677; font-weight: bold; border: 0px solid blue; margin-top: 3px;">
                         </div>
     </div>
     <div style="float:right;margin:0px 0 10px 0;" data-ng-if="total > 36" ng-cloak>
                 <pagination rotate='true' total-items="bigTotalItems" items-per-page="36" ng-model="currentPage" max-size="maxSize" estante_id="estante_id" class="pagination-sm" boundary-links="true" rotate="false" num-pages="numPages" previous-text="&lsaquo;" next-text="&rsaquo;" first-text="&laquo;" last-text="&raquo;" ng-change="pageChanged(tipo, usuario_id, estante_id, currentPage)"></pagination>
     </div>
     <br clear="all" />
</div>               <!-- NAO ENCONTRADO -->
               <div data-ng-if="total === 0" style="margin:60px 0px;text-align:center;" ng-cloak><i class="icon-sad" style='font-size:60px;color:#ccc;margin-right:45px;'></i> <br /><br /><br /><br /><br /> Nenhum registro encontrado.</div>
                         </div>
          <br clear="all">
     </div>
    </div>            </div>
        </div>

        <br clear='all'/>
    </div>

    <link rel="stylesheet" type="text/css" href="https://cache.skoob.com.br/local/skoob/css/ver2/responsive/v2_responsivo_bootstrap.css?1476483464"/>
<footer class='skoobv20150930 clearfix'>
        <div class="container clearfix">
                <div class="row super">

                        <div class="col-md-6 hidden-sm hidden-xs clearfix about">
                                <br />
                                <img src="https://cache.skoob.com.br/s3/skoob-sp/img/v2/logo-footer.png" class="logo-footer" style="margin-bottom: 29px;" alt=""/>                                <div class="brief" style="width: 380px; border:0px solid red; font-size: 14px;">
                                        Somos a maior rede social do Brasil 100% focada em leitores. Funcionamos como uma estante virtual onde você pode colocar os livros que já leu, como aqueles que ainda deseja ler.
                                        Compartilhe suas opiniões com seus amigos... <a href='/inicio/quem_somos'>Leia mais</a>.
                                </div>
                        </div>
                        <div class="col-md-3 col-sm-12  clearfix links">
                                <br />
                                <ul>
                                        <li><a href='/ajuda/faq'>FAQ</a></li>
                                        <li><a href='/inicio/quem_somos'>Quem Somos</a></li>
                                        <li><a href='//blog.skoob.com.br/'>Blog</a></li>
                                        <li><a href='/acervo/adicionar/'>Cadastro de livros</a></li>
                                        <li><a href='/autor/checar/'>Cadastro de autores</a></li>
                                        <li><a href='/downloads/'>Downloads</a></li>
                                        <li><a href='/ajuda/faq'>Fale Conosco</a></li>
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
                        <li><a title="Livros" href='/livro/lista/'>Livros</a></li>
                        <li><a title="Autores" href='/autor/recentes/'>Autores</a></li>
                        <li><a title="Editoras" href='/editoras/'>Editoras</a></li>
                        <li><a title="Leitores" href='/usuario/lista'>Leitores</a></li>
                        <li><a rel="nofollow" title="Grupos" href='/grupo/atualizados/'>Grupos</a></li>
                        <li><a rel="nofollow" title="Trocas" href='/plus/'>Trocas</a></li>
                        <li><a title="Cortesias" href='/cortesia/'>Cortesias</a></li>
                        <li><a title="Lançamentos" href="/livro/lancamentos/">Lançamentos</a></li>
                        <li><a title="Top Mais" href='/livro/top_mais/lidos/'>Top Mais</a></li>
                        <li><a title="Meta de Leitura" href="/meta/ano/2016/">Meta de Leitura 2016</a></li>
                </ul>
        </div>
</footer>
    <!-- Start Alexa Certify Javascript -->
<script type="text/javascript">
_atrk_opts = { atrk_acct:"wIE9i1acVE00MP", domain:"skoob.com.br",dynamic: true};
(function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://d31qbv1cthcecs.cloudfront.net/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
</script>
<noscript><img src="https://d5nxst8fruw4z.cloudfront.net/atrk.gif?account=wIE9i1acVE00MP" style="display:none" height="1" width="1" alt="" /></noscript><script type="text/javascript" src="//d2wy8f7a9ursnm.cloudfront.net/bugsnag-2.min.js" data-apikey="a314316838cf9e62a7e6eef556c76ded"></script>
    <script type="text/javascript">
Bugsnag.releaseStage = "production";    </script>
    <script type="text/javascript">
           var gaJsHost = (("https:" == document.location.protocol) ? "//ssl." : "//www.");
                   document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));</script>
    <script type="text/javascript">
                   var pageTracker = _gat._getTracker("UA-6452051-1");
                   pageTracker._trackPageview();</script>
        

    
        
    <script type="text/javascript">
window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o||e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(t,e,n){function r(t){try{s.console&&console.log(t)}catch(e){}}var o,i=t("ee"),a=t(13),s={};try{o=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(s.console=!0,-1!==o.indexOf("dev")&&(s.dev=!0),-1!==o.indexOf("nr_dev")&&(s.nrDev=!0))}catch(c){}s.nrDev&&i.on("internal-error",function(t){r(t.stack)}),s.dev&&i.on("fn-err",function(t,e,n){r(n.stack)}),s.dev&&(r("NR AGENT IN DEVELOPMENT MODE"),r("flags: "+a(s,function(t,e){return t}).join(", ")))},{}],2:[function(t,e,n){function r(t,e,n,r,o){try{d?d-=1:i("err",[o||new UncaughtException(t,e,n)])}catch(s){try{i("ierr",[s,(new Date).getTime(),!0])}catch(c){}}return"function"==typeof f?f.apply(this,a(arguments)):!1}function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function o(t){i("err",[t,(new Date).getTime()])}var i=t("handle"),a=t(14),s=t("ee"),c=t("loader"),f=window.onerror,u=!1,d=0;c.features.err=!0,t(1),window.onerror=r;try{throw new Error}catch(l){"stack"in l&&(t(7),t(6),"addEventListener"in window&&t(4),c.xhrWrappable&&t(8),u=!0)}s.on("fn-start",function(t,e,n){u&&(d+=1)}),s.on("fn-err",function(t,e,n){u&&(this.thrown=!0,o(n))}),s.on("fn-end",function(){u&&!this.thrown&&d>0&&(d-=1)}),s.on("internal-error",function(t){i("ierr",[t,(new Date).getTime(),!0])})},{}],3:[function(t,e,n){function r(t){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var o=t("ee"),i=t("handle"),a=t(7),s=t(6);t("loader").features.stn=!0,t(5);var c=NREUM.o.EV;o.on("fn-start",function(t,e){var n=t[0];n instanceof c&&(this.bstStart=Date.now())}),o.on("fn-end",function(t,e){var n=t[0];n instanceof c&&i("bst",[n,e,this.bstStart,Date.now()])}),a.on("fn-start",function(t,e,n){this.bstStart=Date.now(),this.bstType=n}),a.on("fn-end",function(t,e){i("bstTimer",[e,this.bstStart,Date.now(),this.bstType])}),s.on("fn-start",function(){this.bstStart=Date.now()}),s.on("fn-end",function(t,e){i("bstTimer",[e,this.bstStart,Date.now(),"requestAnimationFrame"])}),o.on("pushState-start",function(t){this.time=Date.now(),this.startPath=location.pathname+location.hash}),o.on("pushState-end",function(t){i("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),"addEventListener"in window.performance&&(window.performance.clearResourceTimings?window.performance.addEventListener("resourcetimingbufferfull",function(t){i("bstResource",[window.performance.getEntriesByType("resource")]),window.performance.clearResourceTimings()},!1):window.performance.addEventListener("webkitresourcetimingbufferfull",function(t){i("bstResource",[window.performance.getEntriesByType("resource")]),window.performance.webkitClearResourceTimings()},!1)),document.addEventListener("scroll",r,!1),document.addEventListener("keypress",r,!1),document.addEventListener("click",r,!1)}},{}],4:[function(t,e,n){function r(t){for(var e=t;e&&!e.hasOwnProperty(u);)e=Object.getPrototypeOf(e);e&&o(e)}function o(t){s.inPlace(t,[u,d],"-",i)}function i(t,e){return t[1]}var a=t("ee").get("events"),s=t(15)(a),c=t("gos"),f=XMLHttpRequest,u="addEventListener",d="removeEventListener";e.exports=a,"getPrototypeOf"in Object?(r(document),r(window),r(f.prototype)):f.prototype.hasOwnProperty(u)&&(o(window),o(f.prototype)),a.on(u+"-start",function(t,e){if(t[1]){var n=t[1];if("function"==typeof n){var r=c(n,"nr@wrapped",function(){return s(n,"fn-",null,n.name||"anonymous")});this.wrapped=t[1]=r}else"function"==typeof n.handleEvent&&s.inPlace(n,["handleEvent"],"fn-")}}),a.on(d+"-start",function(t){var e=this.wrapped;e&&(t[1]=e)})},{}],5:[function(t,e,n){var r=t("ee").get("history"),o=t(15)(r);e.exports=r,o.inPlace(window.history,["pushState","replaceState"],"-")},{}],6:[function(t,e,n){var r=t("ee").get("raf"),o=t(15)(r);e.exports=r,o.inPlace(window,["requestAnimationFrame","mozRequestAnimationFrame","webkitRequestAnimationFrame","msRequestAnimationFrame"],"raf-"),r.on("raf-start",function(t){t[0]=o(t[0],"fn-")})},{}],7:[function(t,e,n){function r(t,e,n){t[0]=a(t[0],"fn-",null,n)}function o(t,e,n){this.method=n,this.timerDuration="number"==typeof t[1]?t[1]:0,t[0]=a(t[0],"fn-",this,n)}var i=t("ee").get("timer"),a=t(15)(i);e.exports=i,a.inPlace(window,["setTimeout","setImmediate"],"setTimer-"),a.inPlace(window,["setInterval"],"setInterval-"),a.inPlace(window,["clearTimeout","clearImmediate"],"clearTimeout-"),i.on("setInterval-start",r),i.on("setTimer-start",o)},{}],8:[function(t,e,n){function r(t,e){d.inPlace(e,["onreadystatechange"],"fn-",s)}function o(){var t=this,e=u.context(t);t.readyState>3&&!e.resolved&&(e.resolved=!0,u.emit("xhr-resolved",[],t)),d.inPlace(t,v,"fn-",s)}function i(t){w.push(t),h&&(g=-g,b.data=g)}function a(){for(var t=0;t<w.length;t++)r([],w[t]);w.length&&(w=[])}function s(t,e){return e}function c(t,e){for(var n in t)e[n]=t[n];return e}t(4);var f=t("ee"),u=f.get("xhr"),d=t(15)(u),l=NREUM.o,p=l.XHR,h=l.MO,m="readystatechange",v=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],w=[];e.exports=u;var y=window.XMLHttpRequest=function(t){var e=new p(t);try{u.emit("new-xhr",[e],e),e.addEventListener(m,o,!1)}catch(n){try{u.emit("internal-error",[n])}catch(r){}}return e};if(c(p,y),y.prototype=p.prototype,d.inPlace(y.prototype,["open","send"],"-xhr-",s),u.on("send-xhr-start",function(t,e){r(t,e),i(e)}),u.on("open-xhr-start",r),h){var g=1,b=document.createTextNode(g);new h(a).observe(b,{characterData:!0})}else f.on("fn-end",function(t){t[0]&&t[0].type===m||a()})},{}],9:[function(t,e,n){function r(t){var e=this.params,n=this.metrics;if(!this.ended){this.ended=!0;for(var r=0;l>r;r++)t.removeEventListener(d[r],this.listener,!1);if(!e.aborted){if(n.duration=(new Date).getTime()-this.startTime,4===t.readyState){e.status=t.status;var i=o(t,this.lastSize);if(i&&(n.rxSize=i),this.sameOrigin){var a=t.getResponseHeader("X-NewRelic-App-Data");a&&(e.cat=a.split(", ").pop())}}else e.status=0;n.cbTime=this.cbTime,u.emit("xhr-done",[t],t),c("xhr",[e,n,this.startTime])}}}function o(t,e){var n=t.responseType;if("json"===n&&null!==e)return e;var r="arraybuffer"===n||"blob"===n||"json"===n?t.response:t.responseText;return i(r)}function i(t){if("string"==typeof t&&t.length)return t.length;if("object"==typeof t){if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if(!("undefined"!=typeof FormData&&t instanceof FormData))try{return JSON.stringify(t).length}catch(e){return}}}function a(t,e){var n=f(e),r=t.params;r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.sameOrigin=n.sameOrigin}var s=t("loader");if(s.xhrWrappable){var c=t("handle"),f=t(10),u=t("ee"),d=["load","error","abort","timeout"],l=d.length,p=t("id"),h=t(12),m=window.XMLHttpRequest;s.features.xhr=!0,t(8),u.on("new-xhr",function(t){var e=this;e.totalCbs=0,e.called=0,e.cbTime=0,e.end=r,e.ended=!1,e.xhrGuids={},e.lastSize=null,h&&(h>34||10>h)||window.opera||t.addEventListener("progress",function(t){e.lastSize=t.loaded},!1)}),u.on("open-xhr-start",function(t){this.params={method:t[0]},a(this,t[1]),this.metrics={}}),u.on("open-xhr-end",function(t,e){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid)}),u.on("send-xhr-start",function(t,e){var n=this.metrics,r=t[0],o=this;if(n&&r){var a=i(r);a&&(n.txSize=a)}this.startTime=(new Date).getTime(),this.listener=function(t){try{"abort"===t.type&&(o.params.aborted=!0),("load"!==t.type||o.called===o.totalCbs&&(o.onloadCalled||"function"!=typeof e.onload))&&o.end(e)}catch(n){try{u.emit("internal-error",[n])}catch(r){}}};for(var s=0;l>s;s++)e.addEventListener(d[s],this.listener,!1)}),u.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof n.onload||this.end(n)}),u.on("xhr-load-added",function(t,e){var n=""+p(t)+!!e;this.xhrGuids&&!this.xhrGuids[n]&&(this.xhrGuids[n]=!0,this.totalCbs+=1)}),u.on("xhr-load-removed",function(t,e){var n=""+p(t)+!!e;this.xhrGuids&&this.xhrGuids[n]&&(delete this.xhrGuids[n],this.totalCbs-=1)}),u.on("addEventListener-end",function(t,e){e instanceof m&&"load"===t[0]&&u.emit("xhr-load-added",[t[1],t[2]],e)}),u.on("removeEventListener-end",function(t,e){e instanceof m&&"load"===t[0]&&u.emit("xhr-load-removed",[t[1],t[2]],e)}),u.on("fn-start",function(t,e,n){e instanceof m&&("onload"===n&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=(new Date).getTime()))}),u.on("fn-end",function(t,e){this.xhrCbStart&&u.emit("xhr-cb-time",[(new Date).getTime()-this.xhrCbStart,this.onload,e],e)})}},{}],10:[function(t,e,n){e.exports=function(t){var e=document.createElement("a"),n=window.location,r={};e.href=t,r.port=e.port;var o=e.href.split("://");!r.port&&o[1]&&(r.port=o[1].split("/")[0].split("@").pop().split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=e.hostname||n.hostname,r.pathname=e.pathname,r.protocol=o[0],"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname);var i=!e.protocol||":"===e.protocol||e.protocol===n.protocol,a=e.hostname===document.domain&&e.port===n.port;return r.sameOrigin=i&&(!e.hostname||a),r}},{}],11:[function(t,e,n){function r(t,e){return function(){o(t,[(new Date).getTime()].concat(a(arguments)),null,e)}}var o=t("handle"),i=t(13),a=t(14);"undefined"==typeof window.newrelic&&(newrelic=NREUM);var s=["setPageViewName","setCustomAttribute","finished","addToTrace","inlineHit"],c=["addPageAction"],f="api-";i(s,function(t,e){newrelic[e]=r(f+e,"api")}),i(c,function(t,e){newrelic[e]=r(f+e)}),e.exports=newrelic,newrelic.noticeError=function(t){"string"==typeof t&&(t=new Error(t)),o("err",[t,(new Date).getTime()])}},{}],12:[function(t,e,n){var r=0,o=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);o&&(r=+o[1]),e.exports=r},{}],13:[function(t,e,n){function r(t,e){var n=[],r="",i=0;for(r in t)o.call(t,r)&&(n[i]=e(r,t[r]),i+=1);return n}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],14:[function(t,e,n){function r(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(0>o?0:o);++r<o;)i[r]=t[e+r];return i}e.exports=r},{}],15:[function(t,e,n){function r(t){return!(t&&"function"==typeof t&&t.apply&&!t[a])}var o=t("ee"),i=t(14),a="nr@original",s=Object.prototype.hasOwnProperty,c=!1;e.exports=function(t){function e(t,e,n,o){function nrWrapper(){var r,a,s,c;try{a=this,r=i(arguments),s="function"==typeof n?n(r,a):n||{}}catch(u){d([u,"",[r,a,o],s])}f(e+"start",[r,a,o],s);try{return c=t.apply(a,r)}catch(l){throw f(e+"err",[r,a,l],s),l}finally{f(e+"end",[r,a,c],s)}}return r(t)?t:(e||(e=""),nrWrapper[a]=t,u(t,nrWrapper),nrWrapper)}function n(t,n,o,i){o||(o="");var a,s,c,f="-"===o.charAt(0);for(c=0;c<n.length;c++)s=n[c],a=t[s],r(a)||(t[s]=e(a,f?s+o:o,i,s))}function f(e,n,r){if(!c){c=!0;try{t.emit(e,n,r)}catch(o){d([o,e,n,r])}c=!1}}function u(t,e){if(Object.defineProperty&&Object.keys)try{var n=Object.keys(t);return n.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(r){d([r])}for(var o in t)s.call(t,o)&&(e[o]=t[o]);return e}function d(e){try{t.emit("internal-error",e)}catch(n){}}return t||(t=o),e.inPlace=n,e.flag=a,e}},{}],ee:[function(t,e,n){function r(){}function o(t){function e(t){return t&&t instanceof r?t:t?s(t,a,i):i()}function n(n,r,o){t&&t(n,r,o);for(var i=e(o),a=l(n),s=a.length,c=0;s>c;c++)a[c].apply(i,r);var u=f[v[n]];return u&&u.push([w,n,r,i]),i}function d(t,e){m[t]=l(t).concat(e)}function l(t){return m[t]||[]}function p(t){return u[t]=u[t]||o(n)}function h(t,e){c(t,function(t,n){e=e||"feature",v[n]=e,e in f||(f[e]=[])})}var m={},v={},w={on:d,emit:n,get:p,listeners:l,context:e,buffer:h};return w}function i(){return new r}var a="nr@context",s=t("gos"),c=t(13),f={},u={},d=e.exports=o();d.backlog=f},{}],gos:[function(t,e,n){function r(t,e,n){if(o.call(t,e))return t[e];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return t[e]=r,r}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],handle:[function(t,e,n){function r(t,e,n,r){o.buffer([t],r),o.emit(t,e,n)}var o=t("ee").get("handle");e.exports=r,r.ee=o},{}],id:[function(t,e,n){function r(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:a(t,i,function(){return o++})}var o=1,i="nr@id",a=t("gos");e.exports=r},{}],loader:[function(t,e,n){function r(){if(!m++){var t=h.info=NREUM.info,e=u.getElementsByTagName("script")[0];if(t&&t.licenseKey&&t.applicationID&&e){c(l,function(e,n){t[e]||(t[e]=n)});var n="https"===d.split(":")[0]||t.sslForHttp;h.proto=n?"https://":"http://",s("mark",["onload",a()],null,"api");var r=u.createElement("script");r.src=h.proto+t.agent,e.parentNode.insertBefore(r,e)}}}function o(){"complete"===u.readyState&&i()}function i(){s("mark",["domContent",a()],null,"api")}function a(){return(new Date).getTime()}var s=t("handle"),c=t(13),f=window,u=f.document;NREUM.o={ST:setTimeout,CT:clearTimeout,XHR:f.XMLHttpRequest,REQ:f.Request,EV:f.Event,PR:f.Promise,MO:f.MutationObserver},t(11);var d=""+location,l={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-943.min.js"},p=window.XMLHttpRequest&&XMLHttpRequest.prototype&&XMLHttpRequest.prototype.addEventListener&&!/CriOS/.test(navigator.userAgent),h=e.exports={offset:a(),origin:d,features:{},xhrWrappable:p};u.addEventListener?(u.addEventListener("DOMContentLoaded",i,!1),f.addEventListener("load",r,!1)):(u.attachEvent("onreadystatechange",o),f.attachEvent("onload",r)),s("mark",["firstbyte",a()],null,"api");var m=0},{}]},{},["loader",2,9,3]);
;NREUM.info={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",licenseKey:"9e53d555d8",applicationID:"17961617",sa:1}</script>
</body>
</html>