<?php 
  session_start();
  mysql_connect("localhost","root","") or
    die("Não foi possível conectar:" . mysql_error());
  mysql_select_db("db_skoob");
  $nome = $_SESSION["nome"];

  $query = mysql_query("SELECT * FROM tb_leitor WHERE nm_leitor = '$nome'");
  $consulta = mysql_fetch_array($query);
  if ($consulta['ds_img_leitor'] == null){
    $_SESSION["foto"] = "img/sem-face.gif";
  }else {
    $_SESSION["foto"] = $consulta['ds_img_leitor'];
  }

?>
<!DOCTYPE html>
<html xmlns='//www.w3.org/1999/xhtml'>
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# books: http://ogp.me/ns/books#">
        <meta http-equiv="Content-Type" content="text/html;  charset=utf-8" />        
        <title><?php print($_SESSION["nome"])?> - Perfil - SKOOB</title>
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
</script><script type="text/javascript" src="https://cache.skoob.com.br/local/skoob/js/angularjs/base.min.js?1465578598"></script><script type="text/javascript" src="https://cache.skoob.com.br/local/skoob/js/angularjs/main.min.js?1467933083"></script><link rel="stylesheet" type="text/css" href="https://cache.skoob.com.br/local/skoob/css/ver2/main.min.css?1473946186"/>
        <!--
        -->
    </head>

    <body id="ng-app" ng-app="skoob">
    <div>
        <div id='topo' class='navbar navbar-fixed-top' style='height:48px;'>
      

      <div id="topoInterno" class="container" style="">
            <a href="index.html">
                  <img src="img/skoob-logo-topo.gif" class="logo" alt="logo Skoob" title="logo Skoob" width="109" height="33"/>            </a>

            <div id='tbusca' data-ng-controller="SearchCtrl" data-ng-mouseleave="leave = true">
    <form  class="form-inline" action="/livro/lista/" method="post" id="topo-menu-search">
        <span data-ng-cloak  data-ng-show="search_total > 0" class="busca-loading-container" data-ng-bind="search_total | numberDecimal"></span>
        <div data-ng-cloak data-ng-show="search_loading" id='suggestions_loadingmessage'>
            <img src='//skoob-sp.s3.amazonaws.com/img/v2/base/load-padrao.gif' alt="loading">
        </div>
        <div class="input-append">
            <input type="text" id="search" class="form-control" name="data[Busca][tag]" placeholder="Busque por título, autor, editora, ISBN..." data-ng-model="busca" data-ng-blur="searchExit()" autocomplete="off">
            <span class="input-group-btn" >
                <button class="btn btn-default btn-form-lupa" type="submit"><i class="fa fa-search"></i></button>
            </span>
        </div>
    </form>
    <div data-ng-cloak data-ng-show="search_result" id="suggestions" data-ng-mouseover="leave = false">
        <ul id="searchresults" style="list-style: none;">
            <li data-ng-repeat="book in books" class="item-master">

                <div class="capa">
                    <a rel="nofollow" data-ng-href="/livro/{{book.livro_id}}ED{{book.id}}" title='{{book.nome_portugues}}' ng-cloack><img data-ng-src='{{book.img_url}}' alt="" ng-cloack></a>
                </div>
                <div class='search-item-links'>
                    <div class='search-item-links-base'>
                        <strong>
                            <!-- 
                            <a rel="nofollow" data-ng-href="/livro/{{book.livro_id}}ED{{book.id}}" title='{{book.nome_portugues}}' class='l13ab' data-ng-bind="( book.serie )| limitTo:50" ng-cloack></a>
                            <a rel="nofollow" data-ng-href="/livro/{{book.livro_id}}ED{{book.id}}" title='{{book.nome_portugues}}' class='l13ab' data-ng-bind="book.nome_portugues| limitTo:50" ng-cloack></a>
                            -->
                            <a rel="nofollow" data-ng-href="/livro/{{book.livro_id}}ED{{book.id}}" class='l13ab' ng-cloack>
                                <book-name-format title="book.nome_portugues"  serie="book.serie" volume="book.volume" max="50"></book-name-format>
                            </a>
                        </strong>
                        <div class="busca-subtitulo"><span data-ng-bind="book.subtitulo_portugues| limitTo:60" ng-cloack></span></div>
                        <div class="busca-autor"><span data-ng-bind="book.autor| limitTo:60" ng-cloack></span></div>
                    </div>

                    <div class='mini'>
                        <!-- idioma -->
                        <img data-ng-if="book.idioma === 'es'" src="//s3-sa-east-1.amazonaws.com/skoob-sp/flag/es.gif" alt="espanha" title="espanha" class="bandeira">
                        <img data-ng-if="book.idioma === 'us'" src="//s3-sa-east-1.amazonaws.com/skoob-sp/flag/us.gif" alt="ingles" title="ingles" class="bandeira">
                        <img data-ng-if="book.idioma === 'al'" src="//s3-sa-east-1.amazonaws.com/skoob-sp/flag/ge.gif" alt="alemanha" title="alemanha" class="bandeira">
                        <img data-ng-if="book.idioma === 'rs'" src="//s3-sa-east-1.amazonaws.com/skoob-sp/flag/ru.gif" alt="russia" title="russia" class="bandeira">
                        <img data-ng-if="book.idioma === 'jp'" src="//s3-sa-east-1.amazonaws.com/skoob-sp/flag/jp.gif" alt="japao" title="japao" class="bandeira">
                        <img data-ng-if="book.idioma === 'hl'" src="//s3-sa-east-1.amazonaws.com/skoob-sp/flag/nl.gif" alt="holanda" title="holanda" class="bandeira">
                        <img data-ng-if="book.idioma === 'fr'" src="//s3-sa-east-1.amazonaws.com/skoob-sp/flag/fr.gif" alt="franca" title="franca" class="bandeira">
                        <img data-ng-if="book.idioma === 'pt'" src="//s3-sa-east-1.amazonaws.com/skoob-sp/flag/pt.gif" alt="portugal" title="portugual" class="bandeira">
                        <img data-ng-if="book.idioma === 'it'" src="//s3-sa-east-1.amazonaws.com/skoob-sp/flag/it.gif" alt="italia" title="italia" class="bandeira">
                        <img data-ng-if="book.idioma === 'ep'" src="//s3-sa-east-1.amazonaws.com/skoob-sp/flag/ep.gif" alt="esperanto" title="esperanto" class="bandeira">
                        <img data-ng-if="book.idioma === 'br'" src="//s3-sa-east-1.amazonaws.com/skoob-sp/flag/br.gif" alt="brasil" title="brasil" class="bandeira">
                        <!-- editora -->
                        <a data-ng-if="book.editora_id > 0" data-ng-href="/editora/{{book.editora_id}}-{{book.editora}}" class="l11" ng-cloack> {{book.editora}}</a>
                        <span data-ng-if="book.editora_id === 0"> {{book.editora}}</span>
                        <!-- edicoes -->
                        <span data-ng-if="book.qt_edicoes <= 1">| edições: <span data-ng-bind="book.qt_edicoes"></span></span>
                        <span data-ng-if="book.qt_edicoes > 1">| edições: <a data-ng-href="/livro/edicoes/{{book.livro_id}}" data-ng-bind="book.qt_edicoes" class="l11" ng-cloack></a></span>
                        <!-- leitores -->
                        <span>| leitores: <span data-ng-bind="book.qt_estantes | numberDecimal"></span></span>
                    </div>
                </div>
                <br clear="all">
            </li>
            <li data-ng-cloak>
                <form action="/livro/lista" method='post'>
                    <input type='hidden' name='data[Busca][tag]' value='"{{busca}}"' ng-cloack />
                    <input type='hidden' name='data[Busca][tipo]' value='livro' />
                    <button type='submit'>Ver todos os (<span data-ng-bind="search_total | numberDecimal" ng-cloack></span>) resultados</button>
                </form>
            </li>
        </ul>
    </div>
</div>
            <div id="topo-menu-dinamico">
                  
      <div id="topo-menu-dinamico-interno-base"  style=" width: 190px; margin:0px;">

           <div id="messages-alert" data-ng-controller="messagesAlert"  data-ng-init = "init(0)"> 
                <div id="topo-menu-dinamico-interno" style="height:27px; width:190px; margin:0px;">
                     <ul class="nav nav-pills" style='width: 34px;margin-top:3px;z-index: 1000;'>
                          <li class="dropdown">
                               <div id="topo-menu-recados" style="overflow:hidden;">
                                    <div data-ng-if="total_messages === 0" class="top-icon-msg-off" ng-cloak><a href="/recados/mensagens/" style='width:22px;height:15px;display:block;'><img src="https://s3-sa-east-1.amazonaws.com/skoob-sp/css/v3/img/icone-mensagem-3-off.png" alt="Nenhum novo recado" /></a></div>

                                    <div data-ng-if="total_messages > 0"  class='notice-ballon badge' style='top:0px; left:9px; position: absolute;'>
                                         <a href="/recados/mensagens/">
                                              <span ng-bind="total_messages" style='color:#fff;font-size:9px !important'></span>
                                         </a>
                                    </div>
                                    <div class="top-icon-msg"  data-ng-if="total_messages > 0" ><a href="/recados/mensagens/" style='width:22px;height:15px;display:block;'><img src="https://s3-sa-east-1.amazonaws.com/skoob-sp/css/v3/img/icone-mensagem-3.png" alt="Existem novos recados"/></a></div>
                               </div>
                          </li>
                     </ul>

                     <ul class="nav nav-pills" data-ng-controller="checkInvites" data-ng-init="init(0)" style="width:45px;height:27px;" tabindex="-1">
                          <li id="topdropdown" class="dropdown">
                               <a href="#" id="topo-menu-convites" data-ng-click='check()' ng-cloak style="overflow:hidden; width:27px; height:27px; display:block;" class="dropdown-toggle">
                                    <div data-ng-if="total_invites === 0" class='top-icon-user-off' title='0 solicitações de amizade'><img src="//skoob-sp.s3.amazonaws.com/css/v3/img/icones-amigos-off.png" alt="Nenhuma nova solicitação de amizade" /></div>
                                    <div data-ng-if="total_invites > 0" class='notice-ballon badge' style='top:2px; left:12px; position: absolute;' ng-cloak><span ng-bind='total_invites'></span></div>
                                    <div data-ng-if="total_invites > 0" class="top-icon-user" title="{{total_invites}} solicitações de amizade" style="width:29px;height:26px;display:block;" ng-cloak><img src="//skoob-sp.s3.amazonaws.com/css/v3/img/icones-amigos.png" alt="Existem solicitações de amizade" /></div>
                               </a>
                               <ul id="topo-menu-convites-hover" class="dropdown-menu">

                                    <li data-ng-if="invites_loading" style='text-align:center;border-bottom:1px solid #e4e4e4; padding:3px 0px;'> <img src='https://skoob-sp.s3.amazonaws.com/img/v2/base/load-padrao.gif'/> </li>
                                    <li data-ng-if="total_invites === 0"> <div class="atividade-item" style="text-align: center;">Nenhuma solicitação</div></li>

                                    <li data-ng-if="invites" data-ng-repeat="invite in invites">
                                         <div class="atividade-item">
                                              <div class="atividade-item-base">
                                                   <div class="foto msg-user-photo" user-photo user="invite" psize="w30" style="float:left;"></div>
                                                   <div class='atividade-item-titulo' style="float:left; margin-left: 5px;">
                                                        <div data-ng-show="invite.error_accepting_invite" style="text-align: center; border:none; color: red; font-size: 13px; margin: 5px 0px 0px 5px;">
                                                             <span style="color:red;">Ocorreu um erro!</span>
                                                        </div>
                                                        <div data-ng-show="invite.success_accepting_invite" style="text-align: center; border:none; color: #69B26B; font-size: 13px; margin: 5px 0px 0px 5px;">
                                                             <span><i class="icon-checkmark"></i>  adicionado</span>
                                                        </div>
                                                        <div data-ng-show="invite.success_rejecting_invite" style="text-align: center; border:none; color: #C50909; font-size: 13px; margin: 5px 0px 0px 5px;">
                                                             <span><i class="icon-checkmark"></i>  rejeitado</span>
                                                        </div>
                                                        <div data-ng-hide="invite.hide_buttons_invite">
                                                             <a href="#" class='btn btn-primary' data-ng-click="accept(invite)">aceitar</a>
                                                             <a href="#" class='btn btn-danger' data-ng-click="decline(invite)">rejeitar</a>
                                                        </div>
                                                   </div>
                                                   <br clear="all">
                                              </div>
                                         </div>
                                    </li>        
                                    <li data-ng-if="total_invites > 0"><a href="/convite/listar/" style="background:#0087BF;color:#fff;text-align:center;padding:2px 0px 0px 0px;display:block;">Visualizar todos</a></li>
                               </ul>
                          </li>
                     </ul>

                     <ul  id='notifications-alert' class="nav nav-pills" data-ng-controller="menuNotifications" data-ng-init="init(0)" style="width:42px;">
                          <li class="dropdown">
                               <a href="#" id="topo-menu-trocas" data-ng-click="checkNotifications()" style="overflow:hidden;" class="dropdown-toggle">
                                    <div data-ng-if="total_notifications === 0" class='top-icon-troca-off' title=' 0 notificações' ><img src="//skoob-sp.s3.amazonaws.com/css/v3/img/coruja-skoob-27-off.png" style="width:24px;height:28px;" alt="Nenhuma nova notificação" /></div>
                                    <div data-ng-if="total_notifications > 0" class='top-icon-troca' ng-cloak><img src="//skoob-sp.s3.amazonaws.com/css/v3/img/coruja-skoob-27px.png" style="width:24px;height:28px;" alt="Existem notificações" /></div>
                                    <div id="allEventsBallon" data-ng-if="total_notifications > 0" class="notice-ballon badge" style="margin-top:-32px;" ng-cloak><span ng-bind="total_notifications"></span></div>
                               </a>
                               <ul id="topo-menu-trocas-hover" class="dropdown-menu">
                                    <li data-ng-if="notifications_loading" style='text-align:center;border-bottom:1px solid #e4e4e4; padding:3px 0px;'> <img src='https://skoob-sp.s3.amazonaws.com/img/v2/base/load-padrao.gif'/> </li>
                                    <li data-ng-if="notifications_empty" style="margin:4px; text-align: center; font-size: 13px;"> Não existem novas notificações.</li>

                                    <li data-ng-if="notifications" data-ng-repeat="notification in notifications" id='atividade-base-mini'>
                                         <div class="atividade-item">
                                              <div class="atividade-item-base" data-ng-mouseover="show_time = true" data-ng-mouseleave="show_time = false">
                                                   <div user-photo class="foto msg-user-photo" user="notification.usuario" psize="w40"></div>
                                                   <div class='atividade-item-titulo' style="width:260px; height: 40px; font-size: 12px;">
                                                        <div ng-if="show_time === true" class='atividade-item-create'>
                                                             <span class="sender-day"  date-format dt-type='words' dt-date={{notification.created}}></span>
                                                        </div>
                                                        <a ng-href="{{notification.usuario.url}}" ng-bind="notification.usuario.apelido"></a><br />
                                                        <div ng-if="notification.notificacao_tipo === 1">
                                                             <span ng-if="notification.total_notificados === 1"><i class="icon-bubble2"></i> comentou</span>
                                                             <span ng-if="notification.total_notificados === 2"> e mais 1 comentaram</span>
                                                             <span ng-if="notification.total_notificados > 2"> e mais <span ng-bind="notification.total_notificados"></span> comentaram</span>
                                                             sua <a href="/atividades/post/user/{{notification.atividade.id}}">publicação</a> .
                                                        </div>
                                                        <div ng-if="notification.notificacao_tipo === 5">
                                                             <span ng-if="notification.total_notificados === 1"><i class="icon-smiley"></i> gostou</span>
                                                             <span ng-if="notification.total_notificados === 2"> e mais 1 gostaram</span>
                                                             <span ng-if="notification.total_notificados > 2"> e mais <span ng-bind="notification.total_notificados"></span> gostaram</span>
                                                             de sua <a href="/atividades/post/user/{{notification.atividade.id}}">publicação</a>.
                                                        </div>
                                                        <span ng-if="notification.notificacao_tipo === 2"> <i class="icon-amigo"></i> aceitou seu pedido de amizade</span>
                                                        <span ng-if="notification.notificacao_tipo === 3"> <i class="icon-seguindo"></i> começou a te seguir</span>
                                                        <span ng-if="notification.notificacao_tipo === 4 && notification.atividade.tipo === 41"><i class="icon-troca"></i> fez uma solicitação de troca</span>
                                                        <span ng-if="notification.notificacao_tipo === 4 && notification.atividade.tipo === 42"><i class="icon-troca"></i> aceitou a sua solicitação de troca</span>
                                                        <span ng-if="notification.notificacao_tipo === 4 && notification.atividade.tipo === 43"><i class="icon-troca"></i> recusou a sua solicitação de troca</span>
                                                        <span ng-if="notification.notificacao_tipo === 4 && notification.atividade.tipo === 44"><i class="icon-troca"></i> desistiu da troca </span>
                                                        <span ng-if="notification.notificacao_tipo === 4 && notification.atividade.tipo === 45"><i class="icon-troca"></i> informou o envio da troca </span>
                                                        <span ng-if="notification.notificacao_tipo === 4 && notification.atividade.tipo === 46"><i class="icon-troca"></i> recebeu  a troca </span>

                                                        <br clear="all"> 
                                                   </div>
                                                   <div ng-if="notification.edicao.capa" style="overflow: hidden; width:40px; height: 40px; float:right;">
                                                        <a ng-if="notification.notificacao_tipo !== 4" href="/atividades/post/user/{{notification.atividade.id}}"><img data-ng-src="{{notification.edicao.capa}}"></a>
                                                        <img  ng-if="notification.notificacao_tipo === 4" data-ng-src="{{notification.edicao.capa}}" />
                                                   </div>
                                                   <br clear="all">

                                              </div>
                                              <br clear='all' />
                                         </div>
                                    </li>  
                                    <li ><a href="/atividades/registros" style="background:#0087BF !important;color:#fff !important;text-align:center;padding:2px 0px 0px 0px !important;display:block;margin-bottom:-2px;">Visualizar todos</a></li>
                               </ul>
                          </li>
                     </ul>
                     <ul class="nav nav-pills" style='margin: 0px;'>
                          <li class="dropdown">
                               <a href="#" id="topo-menu-conta" class="dropdown-toggle">
                                    <img src="<?php print($_SESSION["foto"])?>" style="margin-right:10px; float:left; padding:0px;" width="27" height="27" class="round-4" alt=""/>                                    <b class="caret"></b>
                               </a>
                               <ul id="topo-menu-conta-hover" class="dropdown-menu">
                                    <li>
                                         <a href="/usuario/3712387" title="Meu Perfil"><i class='icon-amigo icon-align' style='margin-right:5px;'></i> Meu Perfil</a>                                    </li>
                                    <li>
                                         <a href="/estante/livros/todos/3712387" title="Minha Estante"><i class='icon-adicionar icon-align' style='margin-right:5px;'></i> Minha estante</a>                                    </li>
                                    <li>
                                         <a href="/usuario/editar_cadastro/3712387" title="Preferências"><i class='icon-config icon-align' style='margin-right:5px;'></i> Preferências</a>                                    </li>
                                    <li>
                                         <a href="/contatos/fbjs/3712387" title="Convidar Amigos"><i class='icon-amigos icon-align' style='margin-right:5px;'></i> Convidar Amigos</a>                                    </li>
                                    <li>
                                         <a href="/login/sair/" title="Sair"><i class='icon-switch icon-align' style='margin-right:5px;'></i> Sair</a>                                    </li>
                               </ul>
                          </li>
                     </ul>
                </div>
           </div>
      </div>
                        <ul id="topo-menu-explorar" class="nav nav-pills" style="float:left; margin-right: 0px; border:0px solid red; height: 36px; padding: 0px; margin: 0px;">
                        <li class="dropdown" style="margin-top: -2px;">
                              <a class="dropdown-toggle--" data-toggle="dropdown" href="#" style="border-bottom:4px solid #fff; margin-top:5px;">
                                    Explorar
                                    <b class="caret"></b>
                              </a>
                                    <ul id="topo-menu-explorar-hover" class="dropdown-menu" role="menu" aria-labelledby="dLabel" style="margin-top: 5px;  border:0px solid black;">
                                    <li><a href="https://www.skoob.com.br/livro/lista/" title="Livros">Livros</a></li>
                                    <li><a href="https://www.skoob.com.br/autor/recentes/" title="Autores">Autores</a></li>
                                    <li><a href="https://www.skoob.com.br/editoras/" title="Editoras">Editoras</a></li>
                                    <li><a href="https://www.skoob.com.br/usuario/lista" title="Leitores">Leitores</a></li>
                                    <li><a href="https://www.skoob.com.br/grupo/atualizados/" title="Grupos" rel="nofollow">Grupos</a></li>
                                    <li><a href="https://www.skoob.com.br/plus/" title="Trocas" rel="nofollow">Plus - Trocas</a></li>
                                    <li><a href="https://www.skoob.com.br/cortesia/" title="Cortesias">Cortesias</a></li>
                                    <li><a href="https://www.skoob.com.br/livro/lancamentos/" title="Lançamentos">Lançamentos</a></li>
                                    <li><a href="https://www.skoob.com.br/livro/top_mais/lidos/" title="Top Mais">Top Mais</a></li>
                                    <li><a href="https://www.skoob.com.br/booktubers/" title="Booktubers">Booktubers</a></li>
                                    <li><a href="https://www.skoob.com.br/meta/ano/2016/" title="Meta de Leitura 2016">Meta de Leitura 2016</a></li>
                                    <!-- 
                                    <li></li>
                                    -->
                              </ul>
                        </li>
                  </ul>
            </div>

            <br clear='all' />
      </div>
</div>
<div style="margin-top:70px;">        <div style="width:950px;margin:auto;">
                    </div>

        <div id='container-full' class=''>
            <div id='corpo' data-ng-controller="mainCtrl as main">
                <style>
    #container-full{background:url('//skoob-sp.s3.amazonaws.com/css/v3/img/bg-full.jpg') repeat-x;min-height:200px;}
    #corpo{background:none !important;}
</style>

<div id="meu_perfil" style='background-color:transparent; width:175px; float:left; margin:0px 15px 0px 0px; border:none;' >

     
<div id="perfil-usuario-foto" ng-mouseover='perfil_foto_trocar = true'  ng-mouseleave='perfil_foto_trocar = false' style="border:none; height: 173px; width: 173px; overflow: hidden; background-color:transparent; -moz-border-radius: 5px; border-radius: 5px;" >
                               <a href='/Skoob/editar_foto.php/' ng-if='perfil_foto_trocar' id='perfil-usuario-foto-troca' ng-cloak><i class='icon-camera'></i> Mudar foto</a>  
                               <img src="<?php print($_SESSION["foto"])?>" style='margin-right:10px; padding:0px; border:none;' width='173' height='173'>
</div>

              <div id="b-usermenu-icons-top" data-ng-controller="userToolButtons">
                          <div class="btn-group btn-group-justified group-mini" style="width:170px;">
                                      <div class="btn-group" ng-cloak><a href="/usuario/editar_cadastro/" tooltip="Preferências" class="btn btn-default" style="color:#0087bf !important;"><span class="icon-config" style="font-size:15px;"></span></a></div>                                      <div class="btn-group" ng-cloak>
                                                  <a href="/recados/mensagens/" class="btn btn-default" style="color:#0087bf !important;border-top-right-radius: 4px;border-bottom-right-radius: 4px;" tooltip="Recados"><span class='icon-mail'></span></a>                                      </div>
                          </div>
              </div>
              

     <div style='width: 170px;'>

          <div style="width: 170px;">
               <!-- AMIGOS -->
               <div ng-controller="userFriendsPreview" ng-cloak  preload-resource='{"success":1,"total":1,"response":[{"id":2209819,"nome":"Alef Dalle Piagge","apelido":"Alef.Dalle","sexo":"M","foto":"https:\/\/cache.skoob.com.br\/local\/images\/\/q-2vRDVSflcB2wud_LAJM1OVRtM=\/40x40\/center\/top\/filters:format(jpeg)\/https:\/\/skoob.s3.amazonaws.com\/usuarios\/2209819\/2209819SK1448299078G.jpg","url":"\/usuario\/2209819-alef.dalle"}]}' class="usuario-perfil-menuvert-grupos">
                    <div ng-if="total_friends === 0">
                         <div class="text">
                              AMIGOS
                         </div>
                    </div>
                    <div ng-if="total_friends > 0">
                         <div style="width: 100px; float: left;">
                              <ul>
                                   <li data-ng-repeat="friend in friends" style="float: left;">
                                        <div class="foto" user-photo class="msg-user-photo" user="friend" psize="w40"></div>
                                   </li>
                                   <br clear="all" />
                              </ul>
                         </div>
                         <div class="text">
                              <span class="text_blue">
                                   <a ng-href="/amigos/listar/3712387"  ng-bind="total_friends"></a>
                              </span>
                              <span>AMIGOS</span>
                         </div>
                    </div>
                    <br clear="all">
               </div>
               <!-- 
               -->


               <!-- SEGUIDOS --> 

               <div ng-controller="userFollowingPreview" ng-cloak  preload-resource='{"success":1,"total":24,"response":[{"id":2237096,"apelido":"DjWilson","sexo":"M","foto":"https:\/\/cache.skoob.com.br\/local\/images\/\/ozPBAIsU7EoE77SJ5lfskkBI6ME=\/40x40\/center\/top\/filters:format(jpeg)\/https:\/\/skoob.s3.amazonaws.com\/usuarios\/2237096\/2237096SK1426359798G.jpg","url":"\/usuario\/2237096-djwilson"},{"id":2757976,"apelido":"Brayan.Miyamura","sexo":"M","foto":"https:\/\/cache.skoob.com.br\/local\/images\/\/1-vxdsX1XFFAZUMmd_w4tG5TaDE=\/40x40\/center\/top\/filters:format(jpeg)\/https:\/\/skoob.s3.amazonaws.com\/usuarios\/2757976\/2757976SK1443450355G.jpg","url":"\/usuario\/2757976-brayan.miyamura"}]}' class="usuario-perfil-menuvert-grupos">
                    <div ng-if="total_following === 0">
                         <div class="text">
                              SEGUINDO
                         </div>
                    </div>
                    <div ng-if="total_following > 0">
                         <div style="width: 100px; float: left;">
                              <ul>
                                   <li data-ng-repeat="follow in following">
                                        <div class="foto" user-photo class="msg-user-photo" user="follow" psize="w40"></div>
                                   </li>
                                   <br clear="all" />
                              </ul>
                         </div>
                         <div class="text">
                              <span class="text_blue">
                                   <a ng-href="/seguidos/listar/3712387"  ng-bind="total_following"></a>
                              </span>
                              SEGUINDO
                         </div>
                    </div>
                    <br clear="all">
               </div>


               <!-- SEGUIDORES -->
               <div ng-controller="userFollowersPreview" ng-cloak  preload-resource='{"success":1,"total":0,"response":[]}' class="usuario-perfil-menuvert-grupos">
                    <div ng-if="total_followers === 0">
                         <div class="text">
                              SEGUIDORES
                         </div>

                    </div>
                    <div data-ng-if="total_followers > 0">
                         <div style="width: 100px; float: left;">
                              <ul>
                                   <li data-ng-repeat="follower in followers">
                                        <div class="foto" user-photo class="msg-user-photo" user="follower" psize="w40"></div>
                                   </li>
                                   <br clear="all" />
                              </ul>
                         </div>
                         <div class="text">
                              <span class="text_blue">
                                   <a ng-href="/seguidores/listar/3712387"  ng-bind="total_followers"></a>
                              </span>
                              SEGUIDORES
                         </div>
                    </div>
                    <br clear="all">
               </div>

                                    <!-- FB SUGESTOES -->
                     <div ng-controller="userSuggestsPreview" ng-cloak  preload-resource='{"success":1,"total":0,"response":[]}' class="usuario-perfil-menuvert-grupos">
                          <div ng-if="total_suggests === 0">
                               <div class="text">
                                    SUGESTÕES
                               </div>

                          </div>
                          <div data-ng-if="total_suggests > 0">
                               <div style="width: 100px; float: left;">
                                    <ul>
                                         <li data-ng-repeat="suggest in suggests">
                                              <div class="foto" user-photo class="msg-user-photo" user="suggest" psize="w40"></div>
                                         </li>
                                         <br clear="all" />
                                    </ul>
                               </div>
                               <div class="text">
                                    <span class="text_blue">
                                         <a ng-href="/usuario/sugestoes/3712387"  ng-bind="total_suggests"></a>
                                    </span>
                                    SUGESTÕES
                               </div>
                          </div>
                          <br clear="all">
                     </div>
                     



               <!-- AUTORES -->
               <div ng-controller="userAuthorsPreview" ng-cloak  preload-resource='{"success":1,"total":0,"response":[]}' class="usuario-perfil-menuvert-grupos">
                    <div ng-if="total_authors === 0">
                         <div class="text">
                              AUTORES
                         </div>
                    </div>

                    <div ng-if="total_authors > 0">
                         <div class="box">
                              <ul>
                                   <li data-ng-repeat="author in authors">
                                        <div class="foto" user-photo class="msg-user-photo" user="author" psize="w40"></div>
                                   </li>
                                   <br clear="all" />
                              </ul>
                         </div>
                         <div class="text">
                              <span class="text_blue">
                                   <a ng-href="/usuario/autores/3712387"  ng-bind="total_authors"></a>
                              </span>
                              AUTORES
                         </div>

                    </div>
               </div>

               <!-- GRUPOS -->
               <div ng-controller="userGroupsPreview" ng-cloak  preload-resource='{"success":1,"total":1,"response":[{"titulo":"AJUDA","logo":"1639SK1416361805","id":1639,"logo_grande":"https:\/\/cache.skoob.com.br\/local\/images\/\/opRqvYe4sgvDRKyVMRCubz7r_08=\/175x0\/center\/top\/filters:format(jpeg)\/https:\/\/skoob.s3.amazonaws.com\/grupos\/1639\/1639SK1416361805G.jpg","logo_pequeno":"https:\/\/cache.skoob.com.br\/local\/images\/\/nYTyuDffurXPZhZgr-mLG-pIPnQ=\/75x0\/center\/top\/filters:format(jpeg)\/https:\/\/skoob.s3.amazonaws.com\/grupos\/1639\/1639SK1416361805G.jpg","logo_micro":"https:\/\/cache.skoob.com.br\/local\/images\/\/gD2IzOye2UdCYkWa9itj5n2OGos=\/40x0\/center\/top\/filters:format(jpeg)\/https:\/\/skoob.s3.amazonaws.com\/grupos\/1639\/1639SK1416361805G.jpg","url":"\/grupo\/1639-ajuda"}]}' class="usuario-perfil-menuvert-grupos">
                    <div ng-if="total_groups === 0">
                         <div class="text">
                              GRUPOS
                         </div>
                    </div>
                    <div ng-if="total_groups > 0">
                         <div class="box">
                              <ul>
                                   <li data-ng-repeat="group in groups">
                                        <a ng-href="{{group.url}}" class="foto "><img ng-src="{{group.logo_pequeno}}" rel="tooltip" data-original-title="{{group.titulo}}" class="round-dinamic-40"></a>
                                   </li>
                                   <br clear="all" />
                              </ul>
                         </div>
                         <div class="text">
                              <span class="text_blue">
                                   <a ng-href="/grupo/usuario/3712387"  ng-bind="total_groups"></a>
                              </span>
                              GRUPOS
                         </div>
                    </div>
                    <br clear="all">
               </div>

               <!-- EDITORAS -->
               <div ng-controller="userPublishersPreview" ng-cloak  preload-resource='{"success":1,"total":1,"response":[{"id":63,"nome":"DarkSide\u00ae Books","descricao":"","logo_grande":"https:\/\/cache.skoob.com.br\/local\/images\/\/Nx3DnnT59hp4096JsZKFQMOsegw=\/200x0\/center\/top\/filters:format(jpeg)\/https:\/\/skoob.s3.amazonaws.com\/editoras\/63\/631366921019G.jpg","logo_pequeno":"https:\/\/cache.skoob.com.br\/local\/images\/\/BzUAQokAAUX_Yv6uocPLfB55RDY=\/75x0\/center\/top\/filters:format(jpeg)\/https:\/\/skoob.s3.amazonaws.com\/editoras\/63\/631366921019G.jpg","logo_micro":"https:\/\/cache.skoob.com.br\/local\/images\/\/VRdgJVHXwvNPRp0FOPqLBVD2q7w=\/40x0\/center\/top\/filters:format(jpeg)\/https:\/\/skoob.s3.amazonaws.com\/editoras\/63\/631366921019G.jpg","url":"\/editora\/63-darkside-books"}]}' class="usuario-perfil-menuvert-grupos">
                    <div ng-if="total_publishers === 0">
                         <div class="text">
                              EDITORAS
                         </div>
                    </div>
                    <div ng-if="total_publishers > 0">
                         <div  class="box">
                              <ul>
                                   <li data-ng-repeat="publisher in publishers">
                                        <a ng-href="{{publisher.url}}" class="foto"><img ng-src="{{publisher.logo_pequeno}}" rel="tooltip" data-original-title="{{publisher.nome}}" class="round-dinamic-40"></a>
                                   </li>
                                   <br clear="all" />
                              </ul>
                         </div>
                         <div class="text">
                              <span class="text_blue">
                                   <a ng-href="/usuario/editoras/3712387"  ng-bind="total_publishers"></a>
                              </span>
                              EDITORAS
                         </div>
                    </div>
                    <br clear="all">
               </div>

          </div>
     </div>



     </div>


       <div style="width:710px; _width:700px;  float:left; margin: 0px;">

           <div style="width:760px; _width:755px; margin-bottom:10px; word-spacing:3px;">
      <span style='border:0px solid blue; font-size:18px; font-weight:bold;'><?php print($_SESSION["nome"]); ?></span>       <i class='icon-arrow-right'></i> <span style='font-size:11px;'><?php print($_SESSION["UF"]); ?></span></div>
<div id="livro-perfil-status02" style="width:760px; _width:755px; float:left;">
      <!-- LIDOS -->
      
            
      <div class='bar' style="margin-left:0px;">
            <a href="/estante/livros/1/3712387/page:1" class="">LIDOS</a>            <a href="/estante/livros/1/3712387/ page:1" class="text_blue strong" style="font-size:18px !important">18</a>      </div>
      <!-- LENDO -->
      <div class='bar'>
            <a href="/estante/livros/2/3712387/page:1" class="">LENDO</a>            <a href="/estante/livros/2/3712387/page:1" class="text_blue strong" style="font-size:18px !important">1</a>      </div>
      <!-- VAI LER -->
      <div class='bar'>
            <a href="/estante/livros/3/3712387/page:1" class="">QUERO LER</a>            <a href="/estante/livros/3/3712387/page:1" class="text_blue strong" style="font-size:18px !important">12</a>      </div>
      <!-- RELENDO -->
      <div class='bar'>
            <a href="/estante/livros/4/3712387/page:1" class="">RELENDO</a>            <a href="/estante/livros/4/3712387/page:1" class="text_blue strong" style="font-size:18px !important">0</a>      </div>
      <!-- ABANDONARAM  -->
      <div class='bar'>
            <a href="/estante/livros/5/3712387/page:1" class="">ABANDONEI</a>            <a href="/estante/livros/5/3712387/page:1" class="text_blue strong" style="font-size:18px !important">0</a>      </div>
      <!-- RESENHAS  -->
      <div class='bar'>
            <a href="/estante/resenhas/3712387/page:1" class="">RESENHAS</a>            <a href="/estante/resenhas/3712387/page:1" class="text_blue strong" style="font-size:18px !important">0</a>      </div>
      <div id='' style='border:none; float:right; font-size:10px; font-family:arial; text-align:right;'>
            <strong style='font-size:25px; font-weight:bold;' class="sk-cor-azul">5.625</strong>
            <br />paginômetro
      </div>

</div>

           <br clear="all">
           <div style='width:760px; _width:750px;margin-top:2px; float:left;height:22px; margin-left: 5px; '>
          <div id="top-menu-fin">
               <span class='icon-favorito sk-cor-branco'></span><a href="/estante/livros/8/3712387/" class="link_11_off  l_icones sk-cor-branco">Favoritos  6</a><span class='icon-tenho sk-cor-branco'></span><a href="/estante/livros/6/3712387/" class="link_11_off  l_icones sk-cor-branco">Tenho  19</a><span class='icon-desejado sk-cor-branco'></span><a href="/estante/livros/9/3712387/" class="link_11_off  l_icones sk-cor-branco">Desejados  5</a><span class='icon-emprestei sk-cor-branco' style='margin-right:9px;'></span> <a href="/estante/livros/11/3712387/" class="link_11_off  l_icones sk-cor-branco">Emprestados 0</a><span class='icon-troca sk-cor-branco'></span><a href="/estante/livros/10/3712387/" class="link_11_off  l_icones sk-cor-branco">Troco 0</a><span class='icon-meta sk-cor-branco'></span><a href="/estante/livros/12/3712387/" class="link_11_off  l_icones sk-cor-branco">Meta 2</a>          </div>
</div>
           <br clear="all">
           <br clear="all">

           <div style='width:760px; background-color:#fff; float:left;margin:12px 0px 0px 5px;'>
               <div style='width:560px;float:left;margin:0px;' >

                   <div style="border:0px solid green; width:560px; margin-bottom: 10px;" data-ng-controller="fraseCtrl" data-ng-init="init(3712387)">
            <div style="border:0px solid red; float:left; margin-right: 15px; font-size: 30px; width: 30px; height: 30px; color: #556677;">
                        <i class="icon-quotes-left"></i>
            </div>
            <div style="border:0px solid red; float:left; width: 510px;" ng-mouseleave="show_edit_button = false">
                        <div data-ng-if ="frase_new" ng-cloak>
                                    <input type="text" placeholder="Escreva aqui uma frase que goste, um texto de apresentação..." style="width: 490px;" data-ng-click="nova()">
                        </div>

                        <div data-ng-show="frase_edit" style="border:0px solid black;" ng-cloak>
                                    <textarea ng-model="frase_puro" rows="8" style="border:1px solid #e4e4e4; width: 490px;"> </textarea>
                                    <div style="border:0px solid red;">
                                                <a href="javascript:{}" ng-click="cancel()" style="display:block; float: left; border: 0px solid blue; padding: 8px 0px;"> Cancelar </a>
                                                <button style="float:right;" class="btn btn-success" ng-click="salvar()">Salvar</button>
                                                <br clear="all">
                                    </div>
                        </div>
                        
                        <div data-ng-show="frase_show" style="border:0px solid black; font-family:arial; font-size: 14px; position: relative; color: #556677;"  ng-mouseover="show_edit_button = true"  ng-mouseleave="show_edit_button = false" ng-cloak>
                                    <div ng-show="frase_salva"  class="alert alert-success">Salvo com sucesso</div>
                                    <div ng-show="resumo">
                                                <span data-ng-bind-html='frase_resumo'></span>
                                    </div>
                                    <div ng-show="completo">
                                                
                                                <span data-ng-bind-html="frase"></span>
                                    </div>
                                    <div ng-if="bt_edit" style="position: absolute; top: 0; right: 0;">
                                                <a href="javascript:{}" ng-if="show_edit_button" class="btn btn-primary" data-ng-click="edit()"><i class="fa fa-pencil-square-o"></i>editar</a>
                                    </div>
                                    <div ng-if="bt_resumo" style="border:0px solid red; text-align: right;">
                                                <a ng-if="bt_resumo === 'completo'" href="javascript:{}" ng-click="mostrar()"><i class="fa fa-angle-up"></i> menos</a>
                                                <a ng-if="bt_resumo === 'resumo'" href="javascript:{}" ng-click="mostrar()"> <i class="fa fa-angle-down"></i> mais</a>
                                    </div>
                        </div>
            </div>
            <br clear="all">
</div>                   
                   
                   <style>
                       .feed-banner-skoob-container {border:0px solid #cccccc; max-width: 560px; margin-bottom: 20px;}
                       .feed-banner-skoob-box {border:0px solid #cccccc; max-width: 560px; height: 150px; overflow: hidden;}
                       .feed-banner-skoob {border:none;padding:0px; margin: 0px; width: 560px; height:150px;}
                       .feed-banner-skoob-link {border:none; outline: none;}
                       .feed-banner-skoob-fechar-container { border:0px solid red; text-align: right; padding: 0px; margin:0px; background-color: #fff;}
                   </style>

                                             <div class="feed-banner-skoob-container">
                              <div class="feed-banner-skoob-box">
                                  <a href="https://goo.gl/qQZyVd" class="feed-banner-skoob-link" target="_blank">
                                      <img src="/files/conteudo/img/novo-app-skoob-560x150.gif" class="feed-banner-skoob">
                                  </a>
                              </div>
                                                                   <div class="feed-banner-skoob-fechar-container">
                                         <a href="/usuario/publicidade_app_fechar/" class="link-publicidade">Fechar publicidade</a>                                     </div>
                                                               </div>
                                             
                   

                   <style>
            .meta-panel { height: 220px; width: 560px; margin-bottom: -5px;}
            .meta-progress-bar { height: 5px; border-radius: 0px; box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.1) inset;}
            .meta-info {font-size: 11px; color: #999;}
            .meta-bold {font-weight: bold;}
            .meta-mark {border:none;position:absolute; font-size: 18px; z-index:999; top: -1px; left: 5px; }
            .drop-shadow {box-shadow: 1px -1px 4px 0px #e4e4e4 !important;}
            .meta-book {float:left; position: relative; margin-left: 9px; height: 150px; width: 100px;}
            .meta-book-cover { width:100px; height:150px;}
            .meta-controll:link, .meta-controll:visited, .meta-controll:hover {border:5px !important; border-radius: 4px !important; position: absolute !important; margin-top: 50px !important; padding: 5px 10px !important; z-index: 100; background-color: #3189C8 !important; font-size: 15px !important; color: #fff; display: block !important; text-decoration: none;}
            .meta-prev {left: -20px; padding-right: 8px;}
            .meta-next {right:-20px; padding-left: 8px;}
</style>

<div ng-controller="metaCtrl" class="meta-panel" ng-cloak>
            <div ng-init="loading(3712387);">
                        <div style='border:#E4E4E4 1px solid; padding: 10px;' ng-mouseover="show_controll = true" ng-mouseleave="show_controll = false">
                                    <div style="margin:0px; padding: 0px; border:0px solid green; height: 180px;">
                                                                                                
                                                <!-- 
                                                <div style='font-size: 10px; color: #556677; margin-bottom: 8px;'>META DE LEITURA 2016 
                                                -->
                                                
                                                            <div style='font-size: 10px; color: #556677; margin-bottom: 8px;'><a href="/meta/ano/2016/3712387" style="font-size:12px;">Meta de Leitura 2016</a> 
                                                            <div style="border:0px solid red; float:right;">
                                                                        <div class="meta-info">
                                                                                    Lidos <span ng-bind="stats.lido" class="meta-bold"></span>  de <span ng-bind="stats.total" class="meta-bold"></span> 
                                                                                    (<span ng-bind="stats.percentual_lido" class="meta-bold"></span>%) <span ng-bind="stats.paginas_lidas | numberDecimal" class="meta-bold"></span> de <span ng-bind="stats.paginas_total | numberDecimal" class="meta-bold"></span> páginas (ritmo: <span ng-bind="stats.velocidade_dia" class="meta-bold"></span> por dia)
                                                                        </div>
                                                            </div>
                                                </div>

                                                <div style='border:0px solid blue; width: 536px; position: relative;padding-left: 0;padding-right: 0;' class="container">

                                                            <div ng-show="show_controll">
                                                                        <a href="javascript:{}" ng-click="getMetaPrev()" ng-if='prev === true' class="meta-controll meta-prev">
                                                                                    <i class="fa fa-chevron-left"></i>
                                                                        </a>

                                                                        <a href="javascript:{}" ng-click="getMetaNext()" ng-if='next === true' class="meta-controll meta-next"> 
                                                                                    <i class="fa fa-chevron-right"></i>
                                                                        </a>
                                                            </div>

                                                            <div class="row" style='border:0px solid red; margin-left: -10px !important; height: 150px;'>
                                                                        <div ng-repeat="livro in livros" fadey="500" class="col-md-1 drop-shadow meta-book" style='position: relative; text-align: center;width:100px;padding-left: 0;padding-right: 0;'>
                                                                                    <div>  
                                                                                                <div ng-if="livro.tipo === 1">
                                                                                                            <i class="icon-adicionar sk-cor-lido meta-mark"></i>
                                                                                                </div>
                                                                                                <div ng-if="livro.tipo === 2">
                                                                                                            <i class="icon-adicionar sk-cor-lendo meta-mark"></i>
                                                                                                </div>
                                                                                                <div ng-if="livro.tipo === 3">
                                                                                                            <i class="icon-adicionar sk-cor-vouler meta-mark"></i>

                                                                                                </div>
                                                                                                <div ng-if="livro.tipo === 4">
                                                                                                            <i class="icon-adicionar sk-cor-relendo meta-mark"></i>
                                                                                                </div>
                                                                                                <div ng-if="livro.tipo === 5">
                                                                                                            <i class="icon-adicionar sk-cor-abandonei meta-mark"></i>
                                                                                                </div>
                                                                                                <a href="{{livro.edicao.url}}"><img ng-src="{{livro.edicao.capa_pequena}}" alt="{{livro.edicao.nome_portugues}}" class="img meta-book-cover" width="100" height="150" /></a>
                                                                                                <br clear="all">
                                                                                    </div>
                                                                                    <div ng-if="livro.tipo === 2" style='border:0px solid red; width: 85%; position: absolute; bottom: 8px; left: 8px;'>
                                                                                                <read-progress pagestotal="livro.edicao.paginas" pages="livro.paginas_lidas"></read-progress>
                                                                                    </div>
                                                                        </div>
                                                            </div>
                                                            <div id='meta-stats-sidebar' ng-show="stats" style='margin:0px 0px;'>
                                                                        <div class="progress progress-15 meta-progress-bar">
                                                                                    <div class="progress-bar progress-bar-success {{addClassProgress}}" role="progressbar" aria-valuenow="{{stats.percentual_lido}}" aria-valuemin="0" aria-valuemax="100" style="width: {{stats.percentual_lido}}%"></div>
                                                                        </div>
                                                            </div>
                                                </div>
                                    </div>
                        </div>
            </div>
</div>
                   


                   <div id="atividade-base" data-ng-controller="feed" data-ng-init="getActivities('friends',3712387, 0, 'old', 'user')">

                       <div feed-scroll  atvtype="{{activity_type}}" userid="3712387" maxscroll="8">
                                                             <div id="timeline-menu" class="btn-group btn-group-justified" role="group">
                                      <div class="btn-group" role="group">
                                          <button type="button" class="btn btn-default" data-ng-click="getActivities('friends',3712387, 0, friends_time)" ng-class='{timelineActive: friends_new_total, bold: bt_feed_amigos}'>
                                              Amigos <strong data-ng-bind="friends_new_total" class="notice-ballon badge"></strong>
                                          </button>
                                      </div>
                                      <div class="btn-group" role="group">
                                          <button type="button" class="btn btn-default timeline-menu-button" data-ng-click="getActivities('following',3712387, 0, following_time)" ng-class='{timelineActive: following_new_total, bold: bt_feed_seguindo}'>
                                              Seguindo <span data-ng-bind="following_new_total" class="notice-ballon badge"></span>
                                          </button>
                                      </div>
                                      <div class="btn-group" role="group">
                                          <button type="button" class="btn btn-default timeline-menu-button"  data-ng-click="getActivities('user',3712387, 0, user_time)" ng-class='{timelineActive: user_new_total, bold: bt_feed_usuario}'>
                                              Minhas <strong data-ng-bind="user_new_total" class="notice-ballon badge"></strong>
                                          </button>
                                      </div>
                                      <div class="btn-group" role="group">
                                          <button type="button" class="btn btn-default timeline-menu-button" data-ng-click="getActivities('groups',3712387, 0, groups_time)" ng-class='{timelineActive: groups_new_total, bold: bt_feed_grupos}'>
                                              Grupos <strong data-ng-bind="groups_new_total" class="notice-ballon badge"></strong>
                                          </button>
                                      </div>
                                      <div class="btn-group" role="group">
                                          <button type="button" class="btn btn-default timeline-menu-button"  data-ng-click="getActivities('publishers',3712387, 0, publishers_time)" ng-class='{timelineActive: publishers_new_total, bold: bt_feed_editoras}'>
                                              Editoras <strong data-ng-bind="publishers_new_total" class="notice-ballon badge"></strong>
                                          </button>
                                      </div>
                                  </div>

                                  
                           <div data-ng-show="show_new_loading" id="feedLoading" class="busca-box-vertical curva2-5" ng-cloak>
                               <img src="https://skoob-sp.s3.amazonaws.com/img/v2/base/load-padrao.gif" />
                           </div>

                           <!-- NG-REPEAT PARA ATIVIDADES DO TIPO USUARIO -->
<div ui-view="feed" data-ng-if="activity_type === 'user' || activity_type === 'following' || activity_type === 'friends'" ng-cloak>
            <ul style="list-style: none;">
                        <li data-ng-repeat="activity in feed" ng-cloak>
                                    <div class="atividade-item">
                                                <div class="atividade-item-base">
                                                            <div  data-ng-mouseover="show_delete_activity = true" data-ng-mouseleave="show_delete_activity = false">
                                                                        <div class="foto" user-photo class="msg-user-photo" user="activity.usuario" psize="w40"></div>
                                                                        <div class='atividade-item-titulo'>

                                                                                    <!-- 
                                                                                    <div data-ng-if="activity.usuario.id === user_logged.id" class='atividade-item-bt-excluir' ng-cloak>
                                                                                                <a href="" data-ng-show="show_delete_activity"><i class="icon-close" data-ng-click="deleteActivity(activity_type, activity.id, $index)" click-confirm="Deseja excluir a atividade?"></i></a>
                                                                                    </div>
                                                                                    <div class="atividade-item-tools" style="float:right; margin-left:5px; color:#ccc;">
                                                                                                <a data-ng-href="/atividades/post/user/{{activity.id}}"><i class="icon-play bt-circle-gray"></i></a>
                                                                                    </div>
                                                                                    -->
                                                                                    
                                                                                    <div class="dropdown atividade-item-tools atividade-dropdown-container">
                                                                                                <div class="dropdown-toggle atividade-dropdown-pointer-container" data-disabled="true"  id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                                                                            <span class="fa fa-chevron-circle-down" ng-class="{ 'atividade-reportada-on':video_reported === $index  , 'atividade-reportada-off': video_reported  === 0, 'atividade-reportada-off': video_reported  === 0}"></span>
                                                                                                </div>
                                                                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                                                                            <li><a data-ng-href="/atividades/post/user/{{activity.id}}">Ver atividade</a></li>
                                                                                                            <!-- 
                                                                                                            <li ng-if="activity.video.abuso === 1" class="dropdown-header">Abuso ou erro reportado</li>
                                                                                                            <li ng-if="activity.video.abuso === 0"><a href="javascript:{}" data-ng-click="reportVideo(activity.video.code, $index)">Reportar erro  ou abuso</a></li>
                                                                                                            -->
                                                                                                            <li data-ng-if="activity.usuario.id === user_logged.id" ng-cloak>
                                                                                                                        <a href="javascript:{}" data-ng-show="show_delete_activity" data-ng-click="deleteActivity(activity_type, activity.id, $index)" click-confirm="Deseja excluir a atividade?">Excluir</a>
                                                                                                            </li>
                                                                                                </ul>
                                                                                    </div>

                                                                                    <div class='atividade-item-create'>
                                                                                                <span class="sender-day" date-format dt-type='words' dt-date={{activity.created}}></span>
                                                                                    </div>
                                                                                    
                                                                                    <a ng-href="{{activity.usuario.url}}" ng-bind="activity.usuario.apelido"></a>
                                                                                    <br clear="all"> 

                                                                        </div>
                                                                        <div class='atividade-item-subtitulo'>
                                                                                    <div activity-mark activity="activity" mlabel="1" edition="activity.edicao"></div>
                                                                                    <div data-ng-if="activity.edicao.url !== undefined" ng-cloak>
                                                                                                <a ng-href="{{activity.edicao.url}}" ng-bind="activity.edicao.nome_portugues"></a>
                                                                                    </div> 
                                                                                    <br clear="all">
                                                                        </div>
                                                                        <br clear="all">
                                                            </div>

                                                            <!-- Video Livro -->
                                                            <div style="height: 300px;" class="atividade-item-frase" data-ng-if="activity.video" ng-cloak>
                                                                        <div youtube code="activity.video.code"></div>
                                                            </div>

                                                            <!-- Frase do Mural -->
                                                            <div class="atividade-item-frase" data-ng-if="activity.frase" ng-cloak>
                                                                        <div show-more text="activity.frase" max=300></div>
                                                            </div>

                                                            <!-- Resenha -->
                                                            <div class="grupo-topico-titulo" data-ng-if="activity.resenha.titulo_resenha" ng-cloak>
                                                                        <span ng-bind="activity.resenha.titulo_resenha"></span>
                                                            </div>
                                                            <div class="atividade-item-resenha" data-ng-if="activity.resenha.resenha" ng-cloak>
                                                                        <div show-more text="activity.resenha.resenha" max=300></div>
                                                            </div>

                                                            <!-- Histórico de Leitura --> 
                                                            <div class="atividade-item-historico" data-ng-if="activity.tipo === 27" ng-cloak>
                                                                        <div>
                                                                                    <strong>Meu progresso:</strong>
                                                                                    <div class="progress">
                                                                                                <div class="progress-bar  progress-bar-success" role="progressbar" aria-valuenow="{{activity.historico.porcentagem}}" aria-valuemin="0" aria-valuemax="100" style="width: {{activity.historico.porcentagem}}%;">
                                                                                                            <!-- {{activity.historico.porcentagem}}% -->
                                                                                                </div>
                                                                                    </div>
                                                                                    <div class="porcentagem">
                                                                                                <span ng-bind="activity.historico.porcentagem"></span>%
                                                                                                (<span ng-bind="activity.historico.paginas"></span> / <span ng-bind="activity.historico.paginas_total"></span>)
                                                                                                <strong>Minha nota:
                                                                                                            <span ng-bind="activity.historico.nota"></span>
                                                                                                </strong>
                                                                                    </div>
                                                                                    <br clear="all">
                                                                        </div>      
                                                                        <div data-ng-if="activity.historico.texto" show-more text="activity.historico.texto" max=300 style="font-size: 13px;"></div>
                                                            </div>

                                                            <div data-ng-if="activity.edicao" class="conteudo" ng-cloak style="height:102px; position: relative;">
                                                                        <div class="capa" style="height:98px;">
                                                                                    <a ng-href="{{activity.edicao.url}}"><img ng-src="{{activity.edicao.capa}}" width="70" height="100"></a>
                                                                        </div>
                                                                        <div class="texto">
                                                                                    <span ng-bind="activity.edicao.sinopse| limitTo:270">...</span>
                                                                        </div>
                                                                        <div data-ng-controller="ofertaCtrl" class="feed-oferta-container">
                                                                                    <a href="javascript:{}" data-ng-click="open(activity.edicao.id)" class="feed-oferta-link">
                                                                                                <i  class="icon-cart"></i>                                                                                                             
                                                                                    </a>
                                                                        </div>
                                                                        <br clear="all">
                                                            </div>
                                                            <!-- 
                                                            <div class="etiquetas" data-ng-if="activity.meu_livro" ng-cloak>
                                                            -->
                                                            <div class="etiquetas">
                                                                        <div id="like-comment-container" style="border:0px solid red; float:left; height: 16px; padding: 0px;margin-left:0px;">
                                                                                    <like-activity type="user" atvid="activity.id" likes="activity.curtidas" liked="activity.liked">
                                                                        </div>

                                                                        <div>
                                                                                    <span data-ng-if="activity.meu_livro.favorito === 1"><i class="icon-favorito sk-cor-favorito"></i></span>
                                                                                    <span data-ng-if="activity.meu_livro.tenho === 1"><i class="icon-tenho sk-cor-queroler"></i></span>
                                                                                    <span data-ng-if="activity.meu_livro.troco === 1"><i class="icon-troca sk-cor-queroler"></i></span>
                                                                                    <span data-ng-if="activity.meu_livro.desejado === 1"><i class="icon-desejado sk-cor-queroler"></i></span>
                                                                                    <span data-ng-if="activity.meu_livro.meta > 0"><i class="icon-meta sk-cor-queroler"></i></span>
                                                                        </div>

                                                                        <div style='padding-left:0px;'>
                                                                                    <span data-ng-if="activity.tipo > 5"><i activity-mark activity="activity.meu_livro"></i></span>
                                                                        </div>

                                                                        <div>
                                                                                    <span data-ng-if="activity.meu_livro.ranking > 0"><i class="icon-avaliacao sk-cor-lendo"></i> <span ng-bind="activity.meu_livro.ranking"></span></span>
                                                                        </div>
                                                                        <br clear="all">
                                                            </div>

                                                </div>
                                                <div class='comment-bg'>
                                                            <!-- BOX DE COMENTARIOS --> 
                                                            <div class="show-comment" show-comments atvid="activity.id" total="activity.comentarios_estatisticas.total" atvtype="{{activity_type}}" preview="5" userlogged="user_logged">
                                                            </div>
                                                </div>
                                    </div>
                        </li>            
            </ul>
</div>


<!-- NG-REPEAT PARA GRUPOS -->
<div data-ng-if="activity_type === 'groups'" ng-cloak>
            <ul style="list-style: none;">
                        <li  data-ng-repeat="activity in feed">
                                    <div class="atividade-item" data-ng-mouseover="show_group_links = true" data-ng-mouseleave="show_group_links = false">
                                                <div class="atividade-item-base">
                                                            <div data-ng-mouseover="show_delete_activity = true" data-ng-mouseleave="show_delete_activity = false">
                                                                        <div class="foto" user-photo class="msg-user-photo" user="activity.usuario"></div>
                                                                        <div class='atividade-item-titulo'>

                                                                                    <div data-ng-if="activity.usuario.id === user_logged.id" class='atividade-item-bt-excluir'>
                                                                                                <a href="" data-ng-show="show_delete_activity"><i class="icon-close" data-ng-click="deleteActivity(activity_type, activity.id, $index)" click-confirm="Deseja excluir a atividade?"></i></a>
                                                                                    </div>
                                                                                    <div class='atividade-item-create'>
                                                                                                <span class="sender-day" date-format dt-type='words' dt-date={{activity.created}}></span>
                                                                                    </div>
                                                                                    <a ng-href="{{activity.usuario.url}}" ng-bind="activity.usuario.apelido"></a>
                                                                                    <br clear="all">
                                                                        </div>


                                                                        <div class='atividade-item-subtitulo'>
                                                                                    <div>
                                                                                                <span data-ng-if='activity.tipo === 1'><i class="icon-evil2  sk-cor-queroler"></i>criou um novo tópico no grupo </span>
                                                                                                <span data-ng-if='activity.tipo === 2'><i class="icon-bubble2 sk-cor-queroler"></i>publicou no grupo </span>
                                                                                    </div>

                                                                                    <div data-ng-if="activity.grupo.url !== undefined">
                                                                                                <a ng-href="{{activity.grupo.url}}" ng-bind="activity.grupo.titulo"></a>
                                                                                    </div> 
                                                                                    <br clear="all">
                                                                        </div>
                                                                        <br clear="all">
                                                            </div>

                                                            <!-- Topico - titulo  -->
                                                            <div class="grupo-topico-titulo" data-ng-if="activity.topico && activity.tipo === 1">
                                                                        <span ng-bind="activity.topico"></span>
                                                            </div>

                                                            <!-- Topico - texto  -->
                                                            <div class="grupo-topico-texto" data-ng-if="activity.texto">
                                                                        <div show-more text="activity.texto" max=250></div>
                                                            </div>

                                                            <div data-ng-if="activity.grupo" class="conteudo" style="height: 77px;">
                                                                        <div class="capa" style="height: 75px;">
                                                                                    <a ng-href="{{activity.grupo.url}}"><img ng-src="{{activity.grupo.logo_pequeno}}"></a>
                                                                        </div>

                                                                        <div class="texto" data-ng-if="activity.tipo === 1">
                                                                                    <span ng-bind="activity.grupo.descricao| limitTo:200">...</span>
                                                                        </div>

                                                                        <div class="topico-usuario" data-ng-if="activity.tipo === 2">

                                                                                    <div user-photo class="msg-user-photo" user="activity.topico_usuario"></div>

                                                                                    <div class="topico-usuario-texto">
                                                                                                <span ng-bind="activity.topico| limitTo:250"></span>
                                                                                    </div>
                                                                                    <br clear="all">
                                                                        </div>
                                                                        <br clear="all">
                                                            </div>

                                                            <!--  LINKS PARA O GRUPO --> 
                                                            <div class="grupo-links">
                                                                        <div  data-ng-if="user_logged.id" data-ng-show="show_group_links">
                                                                                    <a ng-href="{{activity.grupo.url}}">Visitar o grupo</a> | 
                                                                                    <a ng-href="/topico/mostrar/{{activity.topico_id}}">Ver o tópico</a> | 
                                                                                    <a ng-href="/resposta/nova/{{activity.topico_id}}">Responder</a> 
                                                                        </div>
                                                            </div>

                                                </div>
                                    </div>
                        </li>
            </ul>
</div>



<!-- NG-REPEAT PARA EDITORAS -->
<div data-ng-if="activity_type === 'publishers'" ng-cloak>
            <ul style="list-style: none;">
                        <li  data-ng-repeat="activity in feed">
                                    <div class="atividade-item" ng-class='{atividade_item_editora: activity.tipo === 1}' data-ng-mouseover="show_group_links = true" data-ng-mouseleave="show_group_links = false">
                                                <div class="atividade-item-base">
                                                            <div  data-ng-mouseover="show_delete_activity = true" data-ng-mouseleave="show_delete_activity = false">

                                                                        <a ng-href="{{activity.editora.url}}" class="foto foto-borda"><img ng-src="{{activity.editora.logo_pequeno}}" width="40" height="40"></a>

                                                                        <div class='atividade-item-titulo'>

                                                                                    <div data-ng-if='activity.tipo === 1' class='atividade-item-lancamento'>
                                                                                                <span>Lançamento </span>
                                                                                    </div>
                                                                                    <div data-ng-if='activity.tipo === 2' class='atividade-item-create'>
                                                                                                <span class="sender-day" date-format dt-type='words' dt-date={{activity.created}}></span>
                                                                                    </div>
                                                                                    <a ng-href="{{activity.editora.url}}" ng-bind="activity.editora.nome"></a>
                                                                                    <br clear="all">
                                                                        </div>


                                                                        <div class='atividade-item-subtitulo'>
                                                                                    <div>
                                                                                                <span data-ng-if='activity.tipo === 1'>publicou um lançamento </span>
                                                                                                <span data-ng-if='activity.tipo === 2'>disponibilizou uma cortesia </span>
                                                                                    </div>

                                                                                    <br clear="all">
                                                                        </div>
                                                                        <br clear="all">
                                                            </div>

                                                            <div data-ng-if="activity.edicao" class="conteudo">
                                                                        <div class="capa" data-ng-if='activity.tipo === 1' style='background-color: #fff; width: 200px;'>
                                                                                    <a ng-href="{{activity.edicao.url}}" data-ng-if='activity.tipo === 1'><img ng-src="{{activity.edicao.capa_media}}" style='border-right:1px solid #e4e4e4;'></a>
                                                                        </div>
                                                                        <div data-ng-if='activity.tipo === 1' class="texto" style="border:0px solid red; width: 294px; float:right; padding: 10px;">
                                                                                    <a ng-href="{{activity.edicao.url}}" ng-bind="activity.edicao.nome_portugues"></a>
                                                                                    <i ng-bind="activity.edicao.autor"></i>
                                                                                    <span ng-bind="activity.edicao.sinopse| limitTo:400">...</span>
                                                                        </div>
                                                                        <div class="capa" data-ng-if='activity.tipo === 2' style="height: 102px;">
                                                                                    <a ng-href="{{activity.edicao.url}}" data-ng-if='activity.tipo === 2'><img ng-src="{{activity.edicao.capa_micro}}" height="100"></a>
                                                                        </div>
                                                                        <div data-ng-if='activity.tipo === 2' class="texto" style="border:0px solid blue;">
                                                                                    <span ng-bind="activity.edicao.sinopse| limitTo:250">...</span>
                                                                        </div>
                                                                        <br clear="all">
                                                            </div>
                                                            <hr />

                                                            <!-- 
                                                            <div data-ng-if="activity.tipo === 1" class='links'>
                                                                 <a href=""><i class="icon-book"></i> Leia um trecho</a>
                                                                 <a href=""><i class="icon-cart"></i> Compre</a>
                                                            </div>
                                                            -->
                                                            <div data-ng-if="activity.tipo === 1" class="bt-status">
                                                                                                                                                       <button-shelf bt-size="small"  shelf-open="shelfOpen(activity.edicao.id)"   edition-id="activity.edicao.id"  user-logged-id="3712387" check="yes" ></button-shelf>
                                                                                                                                           </div>
                                                            <!--  INFOS DA CORTESIA --> 
                                                            <div data-ng-if="activity.tipo === 2" class="grupo-links">
                                                                        <div class="cortesia-disponiveis">
                                                                                    <span>Disponíveis: </span><strong ng-bind="activity.cortesia.disponivel"></strong>
                                                                        </div>
                                                                        <div class="right">
                                                                                    <give-away activity_id="activity.id" giveaway_id="activity.cortesia.id" time_now="activity.cortesia.dt_gmt_agora" time_giveaway="activity.cortesia.dt_gmt_sorteio" giveaway_status="activity.cortesia.participando"></give-away>
                                                                        </div>
                                                                        <div class="cortesia-time alert alert-success">
                                                                                    <timer end-time="activity.cortesia.dt_gmt_sorteio">
                                                                                                <span ng-bind="days"></span> dias
                                                                                                <span ng-bind="hours"></span> hs
                                                                                                <span ng-bind="minutes"></span> min
                                                                                                <span ng-bind="seconds"></span> seg
                                                                                    </timer>
                                                                        </div>

                                                                        <br clear="all">
                                                            </div>

                                                            <br clear="all">
                                                </div>
                                    </div>
                        </li>
            </ul>
</div>

<script type="text/ng-template" id="modalLikers.html">
      <div class="modal-header">
      <h3 class="modal-title" data-ng-bind="modal_titulo"></h3>
      </div>
      <div class="modal-body">
      <img data-ng-if="modal_loading"  src="//skoob-sp.s3.amazonaws.com/css/v3/img/load-padrao-big.gif" ng-cloak>
      
      <span data-ng-if="empty === true" ng-cloak>Nenhum registro foi encontrado.</span>              
                    
                     
      <ul data-ng-if="likers !== null" style="list-style: none;">
            <li data-ng-repeat="liker in likers">
            <div style='float:left; margin:5px; padding:2px;'>
            
                         <div user-photo class="msg-user-photo" user="liker.usuario" psize="w40"></div>
            </div>
            </li>
     </ul>
     <br clear="all">
      </div>
</script><script type="text/ng-template" id="modalOfertas.html">
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
</script>            
                           <div data-ng-show="show_empty_news" id="no-update" class="busca-box-vertical curva2-5" ng-cloak>
                               Não há atividades recentes.
                           </div>

                       </div>

                       <div data-ng-show="show_link_more" ng-cloak>
                           <a class="btn btn-small btn-primary" href="" ng-click="getActivitiesLog(activity_type,3712387, feed_next_page)" style='width:534px'>Ver mais</a>
                       </div>

                       <div data-ng-show="show_loading" id="feedLoading" class="busca-box-vertical curva2-5" ng-cloak>
                           <img src="https://skoob-sp.s3.amazonaws.com/img/v2/base/load-padrao.gif" />
                       </div>

                   </div>

               </div>

               <div style='width:177px; float:right;'>
                   
                   <style>
                              #wid-box-meta { border:1px solid #e4e4e4; width: 100%; font-family: 'Open Sans', sans-serif; overflow: hidden; padding: 8px; color:#556677;}      
                              #wid-box-medal { border:0px solid red; max-width: 75px; text-align: center; float:left; margin-right: 10px;}
                              #wid-box-progress { border:0px solid blueviolet; text-align: center; width: auto; overflow: hidden; float:none;}
                              .wid-label-medal { font-size: 13px; font-weight: bold;}
                              .wid-label-meta { font-size:11px; font-weight: normal; margin: 0px; margin-top: 5px;}
                              .wid-label-percent { font-size:14px; font-weight: bold; margin: 3px 0px;}
                              .wid-label-user { font-size: 11px; margin: 0px; font-weight:bold;}

                              #wid-box-info-left { display: inline-block; border:0px solid red; font-size: 11px; width: 40%; float: left; text-align: left;}
                              #wid-box-info-right { display: inline-block; border:0px solid green; font-size: 11px; width: 40%; float: right; text-align: right;}

                              #wid-progress-bar-container { border:0px solid black; background-color: #F1F1F1; height: 12px; width: 100%;  margin: 5px 0px;}
                              #wid-progress-bar { border:none; background-color: #46A4D2; width: 50%; height: 100%;}
                              .meta-link:visited, .meta-link:link, .meta-link:hover { text-decoration: none; }
                              #wid-box-meta { border:1px solid #e4e4e4; font-family: 'Open Sans', sans-serif; padding:0px;  color:#556677; width:177px !important; margin-bottom:15px;}      
                              #wid-box-medal { border:0px solid red; max-width: 45px; text-align: center; float:left; margin: 5px 5px 5px 8px;}
                              .wid-label-medal { font-size: 11px; font-weight: bold;}
                              .wid-label-meta { font-size:9px !important; font-weight: normal; margin: 3px 0px 8px 0px !important;}
                              .wid-label-percent { font-size:13px; font-weight: bold; margin: 5px 0px;}
                              .wid-label-user { font-size: 11px; margin: 0px; font-weight:bold;}
                              
                              #wid-box-progress { border:0px solid blueviolet; text-align: center; width:108px; float:right; margin:0px; padding:0px; margin:5px 5px 5px 0px;}

                              #wid-box-info-left { display: inline-block; border:0px solid red; font-size: 11px; width: 100%; float: left; text-align: center; margin-top:5px;}
                              #wid-box-info-right { display: none;}
                              #wid-progress-bar-container { border:0px solid black; background-color: #F1F1F1; height: 6px; width: 100%;  margin: 3px 0px;}
                              </style><a href = 'https://www.skoob.com.br/meta/ano/2016/3712387' target = '_blank' class = 'meta-link'>
                                   <div id = 'wid-box-meta'>
                                   <div id = 'wid-box-medal'>
                                   <img src = 'https://skoob-sp.s3.amazonaws.com/img/widget/skoob-meta-medal.gif' width='45px' />
                                   <span class = 'wid-label-medal'>0</span>
                                   </div>
                                   <div id = 'wid-box-progress'>
                                   <h1 class = 'wid-label-meta'>META DE LEITURA 2016</h1>
                                   
                                   <h2 class = 'wid-label-percent'>50 %</h2>
                                   <div id = 'wid-progress-bar-container'>
                                   <div id = 'wid-progress-bar'>
                                   </div>
                                   </div>
                                   <div id = 'wid-box-info-left'>Lidos 1 / 2</div>
                                   <div id = 'wid-box-info-right'>100 págs</div>
                                   </div>
                                   <!-- 
                                   -->
                                   </div>
                                   </a>
                   <div class="usuario-sidebar-right-box" style="border:1px solid #e4e4e4; font-size:14px; width:177px !important; margin-bottom: 15px; height: 58px; padding: 0px !important;">

                       <div style="padding: 10px; height: 35px;">
                           <div style="float:left;">
                               <i class="fa fa-book" style="font-size: 20px; color:#556677; padding: 8px; background-color: #FFCC00; border-radius: 25px; "></i>
                           </div>
                           <div style="float:right; margin-top: 10px;">
                               <a href="/usuario/leitura/2015/3712387">Meus livros em 2015</a>
                           </div>                                                
                       </div>
                   </div>


                   <div style="border:0px solid #e4e4e4; margin-bottom: 3px;">
       <a href="/midiakit/" class="link-publicidade" target="_blank">PUBLICIDADE</a>                   </div>

                   <div id="sky" style='border:1px solid #e4e4e4;'>
                       <div class="usuario-sidebar-right-ads">
                                  <!-- Banner Nome: home-usuario -->
       <script type='text/javascript'>
       <!--//<![CDATA[
              document.MAX_ct0 = '';
              var m3_u = (location.protocol == 'https:' ? 'https://cas.criteo.com/delivery/ajs.php?' : 'http://cas.criteo.com/delivery/ajs.php?');
              var m3_r = Math.floor(Math.random() * 99999999999);
              document.write("<scr" + "ipt type='text/javascript' src='" + m3_u);
              document.write("zoneid=413938");
              document.write("&amp;nodis=1");
              document.write('&amp;cb=' + m3_r);
              if (document.MAX_used != ',')
                  document.write("&amp;exclude=" + document.MAX_used);
              document.write(document.charset ? '&amp;charset=' + document.charset : (document.characterSet ? '&amp;charset=' + document.characterSet : ''));
              document.write("&amp;loc=" + escape(window.location).substring(0, 1600));
              if (document.context)
                  document.write("&context=" + escape(document.context));
              if ((typeof (document.MAX_ct0) != 'undefined') && (document.MAX_ct0.substring(0, 4) == 'http')) {
                  document.write("&amp;ct0=" + escape(document.MAX_ct0));
              }
              if (document.mmm_fo)
                  document.write("&amp;mmm_fo=1");
              var publisherurl = "%%SITE%%";
              var macro = "%%SI" + "TE%%";
              if (publisherurl !== macro)
                  document.write("&amp;publisherurl=" + publisherurl);
              document.write("'></scr" + "ipt>");
       //]]>--></script>

                                     </div>
                   </div>
               </div>
           </div>
       </div>
<script type="text/ng-template" id="modalUserMsg.html">
    <div class="modal-header" style="text-align:left;">
    <img ng-src="{{foto_modal}}" style='float:left; margin-right:10px;' class="img-rounded">
    <h3 class="modal-title" style="display:block; float:left; font-size:14px; color:#556677;" data-ng-bind="titulo_modal"></h3>
    <br clear='all'>
    </div>
    <div class="modal-body" style="border:0px solid blue; padding-top:2px;height:140px;">

    <img data-ng-show="modal_loading" src="//skoob-sp.s3.amazonaws.com/css/v3/img/load-padrao-big.gif" style="margin-top:50px;">

    <div data-ng-show='show_form' id='message-form' style='border:0px solid red; width:555px; margin:px; padding:0px;'>
    <textarea ng-model="data.Recado.recado" style='width:530px; margin-bottom:10px;'> </textarea>
    <br />
    <input id="bt-enviar-recado" type="button" ng-click="addRecado(data)" class="btn btn-primary" value='Enviar mensagem' />
    </div>
    <div data-ng-show='modal_empty'>
    <h2>Erro ao tentar enviar o recado, por favor tente novamente.</h2>
    </div>
    <div data-ng-show='modal_success' style="margin-top:50px;">
    <h2>Sua mensagem foi enviada com sucesso!</h2>
    </div>
    </div>
</script>            </div>
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