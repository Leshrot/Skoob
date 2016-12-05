<!DOCTYPE html>
<html xmlns='//www.w3.org/1999/xhtml'>
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# books: http://ogp.me/ns/books#">
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />        <title>Usuario</title>
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
</script><script type="text/javascript" src="https://cache.skoob.com.br/local/skoob/js/angularjs/base.min.js?1474564786"></script><script type="text/javascript" src="https://cache.skoob.com.br/local/skoob/js/angularjs/main.min.js?1477598477"></script><link rel="stylesheet" type="text/css" href="https://cache.skoob.com.br/local/skoob/css/ver2/main.min.css?1474564795"/>
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
                            <a rel="nofollow" data-ng-href="/livro/{{book.livro_id}}ED{{book.id}}" class='l13ab' ng-cloack>
                                <book-name-format name="book.nome_portugues"  serie="book.serie" volume="book.volume" max="50"></book-name-format>
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
                                    <img src="https://cache.skoob.com.br/local/images//W24ul7lr9af592xdYooeMWxMARo=/27x27/center/top/smart/filters:format(jpeg)/https://skoob-sp.s3.amazonaws.com/img/v2/base/sem-face-h-default.gif" style="margin-right:10px; float:left; padding:0px;" width="27" height="27" class="round-4" alt=""/>                                    <b class="caret"></b>
                               </a>
                               <ul id="topo-menu-conta-hover" class="dropdown-menu">
                                    <li>
                                         <a href="/usuario/3932572" title="Meu Perfil"><i class='icon-amigo icon-align' style='margin-right:5px;'></i> Meu Perfil</a>                                    </li>
                                    <li>
                                         <a href="/estante/livros/todos/3932572" title="Minha Estante"><i class='icon-adicionar icon-align' style='margin-right:5px;'></i> Minha estante</a>                                    </li>
                                    <li>
                                         <a href="/usuario/fotos/3932572" title="Minhas Fotos"><i class='icon-camera icon-align' style='margin-right:5px;'></i> Minhas Fotos</a>                                    </li>
                                    <li>
                                         <a href="/usuario/editar_cadastro/3932572" title="Preferências"><i class='icon-config icon-align' style='margin-right:5px;'></i> Preferências</a>                                    </li>
                                    <li>
                                         <a href="/contatos/fbjs/3932572" title="Convidar Amigos"><i class='icon-amigos icon-align' style='margin-right:5px;'></i> Convidar Amigos</a>                                    </li>
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
            <div class="alert alert-success">
     <button type="button" class="close" data-dismiss="alert" style="float:right;" onclick="$(this).parents('.alert').attr('style','display:none;');">&times;</button>

      </div>        </div>

        <div id='container-full' class=''>
            <div id='corpo' data-ng-controller="mainCtrl as main">
                <div class="corner8" style="text-align:left; border:#B7D0E6 2px solid; margin:40px 0px; padding:25px;  font-family:trebuchet ms;">
    <h1 style='font-size:24px; color:#71951E;'>Gostaria de mostrar aos seus amigos do Facebook as suas leituras?</h1>
    <h3 style='font-size:15px;'>Veja abaixo um exemplo de como ficam as atualizações na sua timeline: </h3>
    <img src="https://skoob-sp.s3.amazonaws.com/img/v2/base/timeline_exemplo.jpg" style="margin:5px 0px;" alt=""/>    <h2 style='font-size:15px; color:#999; margin:0px;'>Você pode alterar a opção de enviar para o Facebook sempre que desejar.</h2>
    <hr />
    <a href="https://www.facebook.com/v2.2/dialog/oauth?client_id=252371588132802&state=df8620e90f60d438db5f365f92e8a9ca&response_type=code&sdk=php-sdk-5.3.1&redirect_uri=https%3A%2F%2Fwww.skoob.com.br%2Fusuario%2Fsugestoes_fb%2F&scope=publish_actions" style="float:left;" class="btn btn-primary">Clique para autorizar</a>
    <a href="Skoob_lidos.html" style="float:right; display: block; margin-top: 8px;">Não, obrigado</a>
    <br />
</div>
<style>
hr{border:none;border-top:1px solid #f1f1f1;}
</style>
            </div>
        </div>

        <br clear='all'/>
    </div>

    <link rel="stylesheet" type="text/css" href="https://cache.skoob.com.br/local/skoob/css/ver2/responsive/v2_responsivo_bootstrap.css?1476483467"/>
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