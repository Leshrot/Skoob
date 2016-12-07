





          <!DOCTYPE html>
<html xmlns='//www.w3.org/1999/xhtml'>
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# books: http://ogp.me/ns/books#">
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />        <title>Livro</title>
                <meta name="language" content="pt-br"/>
        <meta name="google-site-verification" content="h_F9-djAws40JfpX_W4juzsPjd9YZ2v-s0YvOG-D388"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="apple-itunes-app" content="app-id=904670263"/>
        <meta name="msapplication-config" content="none"/>
        <script type="text/javascript" src="//www.google.com/jsapi"></script>

        <script type="text/javascript" src="https://cache.skoob.com.br/local/skoob/js/angularjs/base.min.js?1480078620"></script><script type="text/javascript" src="https://cache.skoob.com.br/local/skoob/js/angularjs/main.min.js?1480082477"></script>        
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
        <link rel="stylesheet" type="text/css" href="https://cache.skoob.com.br/local/skoob/css/ver2/main.min.css?1480078837"/>
            </head>
    <body id="ng-app" ng-app="skoob">
        <div>
            <div id='topo' class='navbar navbar-fixed-top' style='height:48px;'>
      

      <div id="topoInterno" class="container" style="">
            <a href="/">
                  <img src="https://cache.skoob.com.br/s3/skoob-sp/img/v2/base/skoob-logo-topo.gif" class="logo" alt="logo Skoob" title="logo Skoob" width="109" height="33"/>            </a>

            <div id='tbusca' data-ng-controller="SearchCtrl" data-ng-mouseleave="leave = true">
    <form  class="form-inline" action="/livro/lista/" method="post" id="topo-menu-search">
        <span data-ng-cloak  data-ng-show="search_total > 0" class="busca-loading-container" data-ng-bind="search_total | numberDecimal"></span>
        <div data-ng-cloak data-ng-show="search_loading" id='suggestions_loadingmessage'>
            <img src='//skoob-sp.s3.amazonaws.com/img/v2/base/load-padrao.gif' alt="loading">
        </div>
        <div class="input-append">
            <input type="text" id="search" class="form-control" name="data[Busca][tag]" placeholder="Busque por t�tulo, autor, editora, ISBN..." data-ng-model="busca" data-ng-blur="searchExit()" autocomplete="off">
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
                        <span data-ng-if="book.qt_edicoes <= 1">| edi��es: <span data-ng-bind="book.qt_edicoes"></span></span>
                        <span data-ng-if="book.qt_edicoes > 1">| edi��es: <a data-ng-href="/livro/edicoes/{{book.livro_id}}" data-ng-bind="book.qt_edicoes" class="l11" ng-cloack></a></span>
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
                                    <div data-ng-if="total_invites === 0" class='top-icon-user-off' title='0 solicita��es de amizade'><img src="//skoob-sp.s3.amazonaws.com/css/v3/img/icones-amigos-off.png" alt="Nenhuma nova solicita��o de amizade" /></div>
                                    <div data-ng-if="total_invites > 0" class='notice-ballon badge' style='top:2px; left:12px; position: absolute;' ng-cloak><span ng-bind='total_invites'></span></div>
                                    <div data-ng-if="total_invites > 0" class="top-icon-user" title="{{total_invites}} solicita��es de amizade" style="width:29px;height:26px;display:block;" ng-cloak><img src="//skoob-sp.s3.amazonaws.com/css/v3/img/icones-amigos.png" alt="Existem solicita��es de amizade" /></div>
                               </a>
                               <ul id="topo-menu-convites-hover" class="dropdown-menu">

                                    <li data-ng-if="invites_loading" style='text-align:center;border-bottom:1px solid #e4e4e4; padding:3px 0px;'> <img src='https://skoob-sp.s3.amazonaws.com/img/v2/base/load-padrao.gif'/> </li>
                                    <li data-ng-if="total_invites === 0"> <div class="atividade-item" style="text-align: center;">Nenhuma solicita��o</div></li>

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
                                    <div data-ng-if="total_notifications === 0" class='top-icon-troca-off' title=' 0 notifica��es' ><img src="//skoob-sp.s3.amazonaws.com/css/v3/img/coruja-skoob-27-off.png" style="width:24px;height:28px;" alt="Nenhuma nova notifica��o" /></div>
                                    <div data-ng-if="total_notifications > 0" class='top-icon-troca' ng-cloak><img src="//skoob-sp.s3.amazonaws.com/css/v3/img/coruja-skoob-27px.png" style="width:24px;height:28px;" alt="Existem notifica��es" /></div>
                                    <div id="allEventsBallon" data-ng-if="total_notifications > 0" class="notice-ballon badge" style="margin-top:-32px;" ng-cloak><span ng-bind="total_notifications"></span></div>
                               </a>
                               <ul id="topo-menu-trocas-hover" class="dropdown-menu">
                                    <li data-ng-if="notifications_loading" style='text-align:center;border-bottom:1px solid #e4e4e4; padding:3px 0px;'> <img src='https://skoob-sp.s3.amazonaws.com/img/v2/base/load-padrao.gif'/> </li>
                                    <li data-ng-if="notifications_empty" style="margin:4px; text-align: center; font-size: 13px;"> N�o existem novas notifica��es.</li>

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
                                                             sua <a href="/atividades/post/user/{{notification.atividade.id}}">publica��o</a> .
                                                        </div>
                                                        <div ng-if="notification.notificacao_tipo === 5">
                                                             <span ng-if="notification.total_notificados === 1"><i class="icon-smiley"></i> gostou</span>
                                                             <span ng-if="notification.total_notificados === 2"> e mais 1 gostaram</span>
                                                             <span ng-if="notification.total_notificados > 2"> e mais <span ng-bind="notification.total_notificados"></span> gostaram</span>
                                                             de sua <a href="/atividades/post/user/{{notification.atividade.id}}">publica��o</a>.
                                                        </div>
                                                        <span ng-if="notification.notificacao_tipo === 2"> <i class="icon-amigo"></i> aceitou seu pedido de amizade</span>
                                                        <span ng-if="notification.notificacao_tipo === 3"> <i class="icon-seguindo"></i> come�ou a te seguir</span>
                                                        <span ng-if="notification.notificacao_tipo === 4 && notification.atividade.tipo === 41"><i class="icon-troca"></i> fez uma solicita��o de troca</span>
                                                        <span ng-if="notification.notificacao_tipo === 4 && notification.atividade.tipo === 42"><i class="icon-troca"></i> aceitou a sua solicita��o de troca</span>
                                                        <span ng-if="notification.notificacao_tipo === 4 && notification.atividade.tipo === 43"><i class="icon-troca"></i> recusou a sua solicita��o de troca</span>
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
                                         <a href="/usuario/3967192" title="Meu Perfil"><i class='icon-amigo icon-align' style='margin-right:5px;'></i> Meu Perfil</a>                                    </li>
                                    <li>
                                         <a href="/estante/livros/todos/3967192" title="Minha Estante"><i class='icon-adicionar icon-align' style='margin-right:5px;'></i> Minha estante</a>                                    </li>
                                    <li>
                                         <a href="/usuario/fotos/3967192" title="Minhas Fotos"><i class='icon-camera icon-align' style='margin-right:5px;'></i> Minhas Fotos</a>                                    </li>
                                    <li>
                                         <a href="/usuario/editar_cadastro/3967192" title="Prefer�ncias"><i class='icon-config icon-align' style='margin-right:5px;'></i> Prefer�ncias</a>                                    </li>
                                    <li>
                                         <a href="/contatos/fbjs/3967192" title="Convidar Amigos"><i class='icon-amigos icon-align' style='margin-right:5px;'></i> Convidar Amigos</a>                                    </li>
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
                                    <li><a href="/livro/lista/" title="Livros">Livros</a></li>
                                    <li><a href="/autor/recentes/" title="Autores">Autores</a></li>
                                    <li><a href="/editoras/" title="Editoras">Editoras</a></li>
                                    <li><a href="/usuario/lista" title="Leitores">Leitores</a></li>
                                    <li><a href="/grupo/atualizados/" title="Grupos" rel="nofollow">Grupos</a></li>
                                    <li><a href="/plus/" title="Trocas" rel="nofollow">Plus - Trocas</a></li>
                                    <li><a href="/cortesia/" title="Cortesias">Cortesias</a></li>
                                    <li><a href="/livro/lancamentos/" title="Lan�amentos">Lan�amentos</a></li>
                                    <li><a href="/livro/top_mais/lidos/" title="Top Mais">Top Mais</a></li>
                                    <li><a href="/booktubers/" title="Booktubers">Booktubers</a></li>
                                    <li><a href="/meta/ano/2016/" title="Meta de Leitura 2016">Meta de Leitura 2016</a></li>
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
                    <style type="css/text">
     #menutroca {
          margin-bottom:15px;
     }

     #menutroca, #menutroca a {
          font-family:"Trebuchet MS";
          font-size:13px;
     }
     #menutroca ul{
          width:961px;
     }
     #menutroca ul, #menutroca li{
          margin:0; padding:0;
     }
     #menutroca ul {
          height: 1%; display: table;
          border-bottom:1px solid #CCCCCC;
     }
     #menutroca ul li {
          float: left; margin: 0 1px;
          list-style:none;
          border:1px solid #CCCCCC;
          margin-bottom:-1px;
          -webkit-border-radius: 2px;
          -moz-border-radius: 2px;
     }
     #menutroca ul li a {
          display: block;
          float: left;
          padding: 2px 10px;
          color: #999;
          text-decoration:none;
     }
     #menutroca ul li.on a, #menutroca ul li a:hover {
          background-color: #FFFFFF; color: #000;
     }
     #menutroca ul li.on {
          border-bottom:1px solid #FFFFFF;
     }
     #menutroca form {
          margin:0; padding:0;
     }
     #menutroca li.ordem {
          border-color:#fff;
          float:right;
     }

</style>
<ul class="nav nav-tabs"><li ><a href="/usuario/lista/">Leitores</a></li><li class="active"><a href="/livro/lista/">Livros</a></li><li ><a href="/autor/recentes">Autores</a></li><li ><a href="/editoras/">Editoras</a></li><li ><a href="/grupo/busca/">Grupos</a></li></ul><!-- 
<style>
     label{display:inline !important;}
</style>
-->

<div style='border:red 0px solid; float:left;width:100%;'>
     <div class="busca-box-vertical">
          <form action='#' method='post' style='margin:0px; padding:0px;height:35px;'>
          <input name="pesquisa" value="" style="width:300px;float:left;height:26px;" type="text" id="BuscaTag"/>          <select name="opcao" style="float:left;margin-left:20px;width:120px;height:35px;">
               <option value="">Livro</option>
          </select>
          <input style="margin:0px 0px 0 20px;width:100px;float:left;" class="btn btn-primary" type="submit" value=" Buscar "/></form>     </div>
     
<!-- div pra listar -->

<?php
  
  # CONEXAO COM A DB
  $conn = mysql_connect("localhost","root","") or    
  die("N�o foi poss�vel conectar:" . mysql_error()); 
  mysql_select_db("db_skoob", $conn);

  # INICIALIZA VARIAVEL PESQUISA << SE TIRAR APARECE ERRO >>
  $pesquisa="";  
  
  # VERIFICA SE $_POST DE PESQUISA � NULO << SE TIRAR APARECE ERRO >>
  if(isset($_POST['pesquisa'])){
  $pesquisa = $_POST['pesquisa'];
  }

  # CONSULTA NO BANCO COM JOIN NA TABELA DE EDITORA E AUTOR
  $result = mysql_query("SELECT l.cd_isbn_10_livro, l.cd_isbn_13_livro, l.nm_livro, l.ds_subtitulo_livro, l.ds_resumo_livro, l.ds_categorias, l.dt_lancamento, l.ic_lancamento, l.nr_pagina_livro, l.ds_idioma_livro, l.ds_url_capa_livro, l.vl_nota_livro, l.nr_avaliacao_livro, l.ds_img_edicao, l.nm_video_livro, l.ds_img_video_livro, l.ds_url_video_livro, l.fk_cd_editora, l.fk_cd_autor,
    a.nm_autor, e.nm_editora
FROM tb_livro l
     JOIN tb_editora e ON (l.fk_cd_editora = e.cd_editora)
     JOIN tb_autor a ON (l.fk_cd_autor = a.cd_autor)
              WHERE l.nm_livro LIKE '%".$pesquisa."%'");


 mysql_error();

?>

<div data-ng-controller='shelf' id='resultadoBusca' style='width:820px;float:left;' >
    <div class='paginacao_lista_busca_down'>
          <div class='contador'><b style='font-size:15px; color:#666666;'>835 encontrados</b> | exibindo 1 a 30 </div><div class='proximo'><a href='/livro/lista/busca:DRAG%C3O/tipo:geral/mpage:2' class='' data-role='button' data-icon='arrow-r' data-mini='true' data-inline='true' data-iconpos='right' rel='nofollow'>  Pr�xima</a></div><div class='numeros'>1 | <a href='/livro/lista/busca:DRAG%C3O/tipo:geral/mpage:2' class='l13 pag'>2</a> | <a href='/livro/lista/busca:DRAG%C3O/tipo:geral/mpage:3' class='l13 pag'>3</a> | <a href='/livro/lista/busca:DRAG%C3O/tipo:geral/mpage:4' class='l13 pag'>4</a> | <a href='/livro/lista/busca:DRAG%C3O/tipo:geral/mpage:5' class='l13 pag'>5</a> | <a href='/livro/lista/busca:DRAG%C3O/tipo:geral/mpage:6' class='l13 pag'>6</a> | <a href='/livro/lista/busca:DRAG%C3O/tipo:geral/mpage:7' class='l13 pag'>7</a> | </div><div class='anterior'></div>          <br clear='all'>
</div>

<?php


# RODA O WHILE E EXIBE POR MEIO DO $ROW['NOME_DO_CAMPO']
while($row=mysql_fetch_array($result,MYSQL_ASSOC)){

printf("<div class='box_lista_busca_vertical'>");
printf("<div class='box_lista_busca_vertical_capa'>");
printf("<a href='/como-treinar-o-seu-dragao-95122ed105205.html' title='Como Treinar o Seu Drag�o'   class='capa-link-item'><img src=".$row["ds_url_capa_livro"] ."  alt='Como Treinar o Seu Drag�o'  title='Como Treinar o Seu Drag�o' width='70px;' height:'120px;' class='cpimg'  itemprop='image' /></a>");
printf("<br /> 
<div style='padding:4px 0 0 4px;clear:both;' class='star-mini'>
           <div style='border:0px solid red; height: 20px; margin-left: -2px;'>
               <star-rating rate='4.0788801906059' type='livro'  id='105205' boxcounter='false' fixed='true' size='small'></star-rating>
               <br class='clear'>
           </div>");

           printf("<div style='color:#556677; font-size:15px;text-align:center;margin-top:2px; border:0px solid green; margin-left:-5px;'><strong>4.1</strong></div></div></div><div class='box_lista_busca_vertical_detalhe' style='border:none;'><div class='ranking_lista_busca_vertical'>");

           printf("<div style='width:110px;position:relative; 1' >
               <div style='width:110px; margin-top:10px;'>
               <button-shelf bt-size='small' shelf-open='shelfOpen(105205)'   edition-id='105205' user-book=''  user-logged-id='3967192'></button-shelf>
               </div>
           </div>");

           printf("</div><div class='detalhes' style='border:none;'><a href='livro.php?".$row["cd_isbn_10_livro"]."' style='font-size:15px;font-weight:bold;'>".$row["nm_livro"]."</a><br /><a href='/livro/lista/Cressida+Cowell/tipo:autor/' style='margin:5px 0 5px 0;'>".$row["fk_cd_autor"]."</a><div style='color:#556677;font-size:11px; border:0px solid red; margin-top:6px; width:200px;'><span>Ano:". $row["dt_lancamento"] ."</span><span> / P�ginas:". $row["nr_pagina_livro"]. "</span></div></div><div class='detalhes-2'><div class='detalhes-2-sub'><div style='border:none; float:left;'>");


           printf("<span style='color:#556677;font-size:10px;'><img src='https://s3-sa-east-1.amazonaws.com/skoob-sp/flag/br.gif' class='bandeira' /> 9788598078717 <!-- cd_isbn_13_livro --></span><span class='bar'> | </span><span><a href=/editora/11-intrinseca> ".$row['nm_editora']. "</a></span><span> | </span><span><a href='/livro/edicoes/95122/edicao:105205'>2 edi��es <!-- retirar --></a></span><span> | </span><span style='color:#556677;font-size:10px;'>".rand(0,25000)." leitores <!-- retirar --> </span></div><div style='border:none; float:right; text-align:right;'>       <div class='sidebar-buy' data-ng-controller='ofertaCtrl' style='font-size:13px; border:none; width:180px;'>");
                   printf("<div>
                               <span><i class='icon-cart' style='font-size: 14px; margin-right: 10px; color:'#556677;'></i>"); 

                                           printf("<a href='javascript:{}' data-ng-click='open(105205)'>
                                                       Pesquisar por ofertas
                                           </a>
                               </span>
                   </div>
       </div>
       </div></div></div></div><br clear='all' />");
      
}



mysql_free_result($result); 
?>
       

<script type="text/ng-template" id="modalOfertas.html">
      <div class="modal-header">
      <h3 class="modal-title" style="font-size:15px; color:#333;">Ofertas encontradas</h3>
      </div>
      <div class="modal-body" style="border:0px solid blue; padding-top:2px;">
      
      <h2 data-ng-if="modal_empty" style='margin:10px 0px; color:#333;'>Nenhuma oferta dispon�vel no momento.</h2>
      
                   <img data-ng-if="modal_loading"  src="//skoob-sp.s3.amazonaws.com/css/v3/img/load-padrao-big.gif" data-ng-cloak>
                    <ul style="border:0px solid red; list-style-type:none; margin-bottom:15px;">
                    <li data-ng-repeat="item in items">
                    <div style="border:1px solid #f1f1f1; border-width:0px 0px 1px 0px; padding:4px; margin:5px 0px;">
                    
                    <img data-ng-src="//skoob-sp.s3.amazonaws.com/css/livraria-{{ item.lojas_anuncios_id }}.jpg" style='border:0px solid #ccc; float:left; height:30px;' height="30" />                                  
                                        <div style='text-align:right;width:120px; float:right; border:0px solid red; margin-top:0px;'><a href="/compra/loja/{{ item.lojas_anuncios_id }}/?redirect={{ item.url }}" target="_blank" class="btn btn-primary" style="height:20px; padding:3px 20px;">Ir � Loja</a></div>
                                        <div style='text-align:left; margin-top:5px;width:120px; float:right; border:0px solid green;'><strong>R$ {{ item.preco }}<strong></div>                              
                    <br clear="all">
                    </div>
                    </li>
                    </ul>
            
            <div style="font-size:11px; text-align:left; font-weight:normal;">
                  <b>Importante: </b> � poss�vel haver diferen�a entre o valor anunciado aqui e o site da loja. Quando acontecer, prevalecer� sempre o pre�o no site da loja.
            </div>
      </div>
</script>                </div>
            </div>
            <br clear='all'/>
        </div>

        <link rel="stylesheet" type="text/css" href="https://cache.skoob.com.br/local/skoob/css/ver2/responsive/v2_responsivo_bootstrap.css?1480078832"/>
<footer class='skoobv20150930 clearfix'>
        <div class="container clearfix">
                <div class="row super">

                        <div class="col-md-6 hidden-sm hidden-xs clearfix about">
                                <br />
                                <img src="https://cache.skoob.com.br/s3/skoob-sp/img/v2/logo-footer.png" class="logo-footer" style="margin-bottom: 29px;" alt=""/>                                <div class="brief" style="width: 380px; border:0px solid red; font-size: 14px;">
                                        Somos a maior rede social do Brasil 100% focada em leitores. Funcionamos como uma estante virtual onde voc� pode colocar os livros que j� leu, como aqueles que ainda deseja ler.
                                        Compartilhe suas opini�es com seus amigos... <a href='/inicio/quem_somos'>Leia mais</a>.
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
                        <li><a title="Lan�amentos" href="/livro/lancamentos/">Lan�amentos</a></li>
                        <li><a title="Top Mais" href='/livro/top_mais/lidos/'>Top Mais</a></li>
                        <li><a title="Meta de Leitura" href="/meta/ano/2016/">Meta de Leitura 2016</a></li>
                </ul>
        </div>
</footer><!-- Start Alexa Certify Javascript -->
<script type="text/javascript">
_atrk_opts = { atrk_acct:"wIE9i1acVE00MP", domain:"skoob.com.br",dynamic: true};
(function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://d31qbv1cthcecs.cloudfront.net/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
</script>
<noscript><img src="https://d5nxst8fruw4z.cloudfront.net/atrk.gif?account=wIE9i1acVE00MP" style="display:none" height="1" width="1" alt="" /></noscript>
        
        <script type="text/javascript"> var gaJsHost = (("https:" == document.location.protocol) ? "//ssl." : "//www.");
                   document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));</script>
        <script type="text/javascript">
                       var pageTracker = _gat._getTracker("UA-6452051-1");
                       pageTracker._trackPageview();
        </script>

        <script type="text/javascript">
window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o||e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(t,e,n){function r(t){try{s.console&&console.log(t)}catch(e){}}var o,i=t("ee"),a=t(13),s={};try{o=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(s.console=!0,-1!==o.indexOf("dev")&&(s.dev=!0),-1!==o.indexOf("nr_dev")&&(s.nrDev=!0))}catch(c){}s.nrDev&&i.on("internal-error",function(t){r(t.stack)}),s.dev&&i.on("fn-err",function(t,e,n){r(n.stack)}),s.dev&&(r("NR AGENT IN DEVELOPMENT MODE"),r("flags: "+a(s,function(t,e){return t}).join(", ")))},{}],2:[function(t,e,n){function r(t,e,n,r,o){try{d?d-=1:i("err",[o||new UncaughtException(t,e,n)])}catch(s){try{i("ierr",[s,(new Date).getTime(),!0])}catch(c){}}return"function"==typeof f?f.apply(this,a(arguments)):!1}function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function o(t){i("err",[t,(new Date).getTime()])}var i=t("handle"),a=t(14),s=t("ee"),c=t("loader"),f=window.onerror,u=!1,d=0;c.features.err=!0,t(1),window.onerror=r;try{throw new Error}catch(l){"stack"in l&&(t(7),t(6),"addEventListener"in window&&t(4),c.xhrWrappable&&t(8),u=!0)}s.on("fn-start",function(t,e,n){u&&(d+=1)}),s.on("fn-err",function(t,e,n){u&&(this.thrown=!0,o(n))}),s.on("fn-end",function(){u&&!this.thrown&&d>0&&(d-=1)}),s.on("internal-error",function(t){i("ierr",[t,(new Date).getTime(),!0])})},{}],3:[function(t,e,n){function r(t){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var o=t("ee"),i=t("handle"),a=t(7),s=t(6);t("loader").features.stn=!0,t(5);var c=NREUM.o.EV;o.on("fn-start",function(t,e){var n=t[0];n instanceof c&&(this.bstStart=Date.now())}),o.on("fn-end",function(t,e){var n=t[0];n instanceof c&&i("bst",[n,e,this.bstStart,Date.now()])}),a.on("fn-start",function(t,e,n){this.bstStart=Date.now(),this.bstType=n}),a.on("fn-end",function(t,e){i("bstTimer",[e,this.bstStart,Date.now(),this.bstType])}),s.on("fn-start",function(){this.bstStart=Date.now()}),s.on("fn-end",function(t,e){i("bstTimer",[e,this.bstStart,Date.now(),"requestAnimationFrame"])}),o.on("pushState-start",function(t){this.time=Date.now(),this.startPath=location.pathname+location.hash}),o.on("pushState-end",function(t){i("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),"addEventListener"in window.performance&&(window.performance.clearResourceTimings?window.performance.addEventListener("resourcetimingbufferfull",function(t){i("bstResource",[window.performance.getEntriesByType("resource")]),window.performance.clearResourceTimings()},!1):window.performance.addEventListener("webkitresourcetimingbufferfull",function(t){i("bstResource",[window.performance.getEntriesByType("resource")]),window.performance.webkitClearResourceTimings()},!1)),document.addEventListener("scroll",r,!1),document.addEventListener("keypress",r,!1),document.addEventListener("click",r,!1)}},{}],4:[function(t,e,n){function r(t){for(var e=t;e&&!e.hasOwnProperty(u);)e=Object.getPrototypeOf(e);e&&o(e)}function o(t){s.inPlace(t,[u,d],"-",i)}function i(t,e){return t[1]}var a=t("ee").get("events"),s=t(15)(a),c=t("gos"),f=XMLHttpRequest,u="addEventListener",d="removeEventListener";e.exports=a,"getPrototypeOf"in Object?(r(document),r(window),r(f.prototype)):f.prototype.hasOwnProperty(u)&&(o(window),o(f.prototype)),a.on(u+"-start",function(t,e){if(t[1]){var n=t[1];if("function"==typeof n){var r=c(n,"nr@wrapped",function(){return s(n,"fn-",null,n.name||"anonymous")});this.wrapped=t[1]=r}else"function"==typeof n.handleEvent&&s.inPlace(n,["handleEvent"],"fn-")}}),a.on(d+"-start",function(t){var e=this.wrapped;e&&(t[1]=e)})},{}],5:[function(t,e,n){var r=t("ee").get("history"),o=t(15)(r);e.exports=r,o.inPlace(window.history,["pushState","replaceState"],"-")},{}],6:[function(t,e,n){var r=t("ee").get("raf"),o=t(15)(r);e.exports=r,o.inPlace(window,["requestAnimationFrame","mozRequestAnimationFrame","webkitRequestAnimationFrame","msRequestAnimationFrame"],"raf-"),r.on("raf-start",function(t){t[0]=o(t[0],"fn-")})},{}],7:[function(t,e,n){function r(t,e,n){t[0]=a(t[0],"fn-",null,n)}function o(t,e,n){this.method=n,this.timerDuration="number"==typeof t[1]?t[1]:0,t[0]=a(t[0],"fn-",this,n)}var i=t("ee").get("timer"),a=t(15)(i);e.exports=i,a.inPlace(window,["setTimeout","setImmediate"],"setTimer-"),a.inPlace(window,["setInterval"],"setInterval-"),a.inPlace(window,["clearTimeout","clearImmediate"],"clearTimeout-"),i.on("setInterval-start",r),i.on("setTimer-start",o)},{}],8:[function(t,e,n){function r(t,e){d.inPlace(e,["onreadystatechange"],"fn-",s)}function o(){var t=this,e=u.context(t);t.readyState>3&&!e.resolved&&(e.resolved=!0,u.emit("xhr-resolved",[],t)),d.inPlace(t,v,"fn-",s)}function i(t){w.push(t),h&&(g=-g,b.data=g)}function a(){for(var t=0;t<w.length;t++)r([],w[t]);w.length&&(w=[])}function s(t,e){return e}function c(t,e){for(var n in t)e[n]=t[n];return e}t(4);var f=t("ee"),u=f.get("xhr"),d=t(15)(u),l=NREUM.o,p=l.XHR,h=l.MO,m="readystatechange",v=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],w=[];e.exports=u;var y=window.XMLHttpRequest=function(t){var e=new p(t);try{u.emit("new-xhr",[e],e),e.addEventListener(m,o,!1)}catch(n){try{u.emit("internal-error",[n])}catch(r){}}return e};if(c(p,y),y.prototype=p.prototype,d.inPlace(y.prototype,["open","send"],"-xhr-",s),u.on("send-xhr-start",function(t,e){r(t,e),i(e)}),u.on("open-xhr-start",r),h){var g=1,b=document.createTextNode(g);new h(a).observe(b,{characterData:!0})}else f.on("fn-end",function(t){t[0]&&t[0].type===m||a()})},{}],9:[function(t,e,n){function r(t){var e=this.params,n=this.metrics;if(!this.ended){this.ended=!0;for(var r=0;l>r;r++)t.removeEventListener(d[r],this.listener,!1);if(!e.aborted){if(n.duration=(new Date).getTime()-this.startTime,4===t.readyState){e.status=t.status;var i=o(t,this.lastSize);if(i&&(n.rxSize=i),this.sameOrigin){var a=t.getResponseHeader("X-NewRelic-App-Data");a&&(e.cat=a.split(", ").pop())}}else e.status=0;n.cbTime=this.cbTime,u.emit("xhr-done",[t],t),c("xhr",[e,n,this.startTime])}}}function o(t,e){var n=t.responseType;if("json"===n&&null!==e)return e;var r="arraybuffer"===n||"blob"===n||"json"===n?t.response:t.responseText;return i(r)}function i(t){if("string"==typeof t&&t.length)return t.length;if("object"==typeof t){if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if(!("undefined"!=typeof FormData&&t instanceof FormData))try{return JSON.stringify(t).length}catch(e){return}}}function a(t,e){var n=f(e),r=t.params;r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.sameOrigin=n.sameOrigin}var s=t("loader");if(s.xhrWrappable){var c=t("handle"),f=t(10),u=t("ee"),d=["load","error","abort","timeout"],l=d.length,p=t("id"),h=t(12),m=window.XMLHttpRequest;s.features.xhr=!0,t(8),u.on("new-xhr",function(t){var e=this;e.totalCbs=0,e.called=0,e.cbTime=0,e.end=r,e.ended=!1,e.xhrGuids={},e.lastSize=null,h&&(h>34||10>h)||window.opera||t.addEventListener("progress",function(t){e.lastSize=t.loaded},!1)}),u.on("open-xhr-start",function(t){this.params={method:t[0]},a(this,t[1]),this.metrics={}}),u.on("open-xhr-end",function(t,e){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid)}),u.on("send-xhr-start",function(t,e){var n=this.metrics,r=t[0],o=this;if(n&&r){var a=i(r);a&&(n.txSize=a)}this.startTime=(new Date).getTime(),this.listener=function(t){try{"abort"===t.type&&(o.params.aborted=!0),("load"!==t.type||o.called===o.totalCbs&&(o.onloadCalled||"function"!=typeof e.onload))&&o.end(e)}catch(n){try{u.emit("internal-error",[n])}catch(r){}}};for(var s=0;l>s;s++)e.addEventListener(d[s],this.listener,!1)}),u.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof n.onload||this.end(n)}),u.on("xhr-load-added",function(t,e){var n=""+p(t)+!!e;this.xhrGuids&&!this.xhrGuids[n]&&(this.xhrGuids[n]=!0,this.totalCbs+=1)}),u.on("xhr-load-removed",function(t,e){var n=""+p(t)+!!e;this.xhrGuids&&this.xhrGuids[n]&&(delete this.xhrGuids[n],this.totalCbs-=1)}),u.on("addEventListener-end",function(t,e){e instanceof m&&"load"===t[0]&&u.emit("xhr-load-added",[t[1],t[2]],e)}),u.on("removeEventListener-end",function(t,e){e instanceof m&&"load"===t[0]&&u.emit("xhr-load-removed",[t[1],t[2]],e)}),u.on("fn-start",function(t,e,n){e instanceof m&&("onload"===n&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=(new Date).getTime()))}),u.on("fn-end",function(t,e){this.xhrCbStart&&u.emit("xhr-cb-time",[(new Date).getTime()-this.xhrCbStart,this.onload,e],e)})}},{}],10:[function(t,e,n){e.exports=function(t){var e=document.createElement("a"),n=window.location,r={};e.href=t,r.port=e.port;var o=e.href.split("://");!r.port&&o[1]&&(r.port=o[1].split("/")[0].split("@").pop().split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=e.hostname||n.hostname,r.pathname=e.pathname,r.protocol=o[0],"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname);var i=!e.protocol||":"===e.protocol||e.protocol===n.protocol,a=e.hostname===document.domain&&e.port===n.port;return r.sameOrigin=i&&(!e.hostname||a),r}},{}],11:[function(t,e,n){function r(t,e){return function(){o(t,[(new Date).getTime()].concat(a(arguments)),null,e)}}var o=t("handle"),i=t(13),a=t(14);"undefined"==typeof window.newrelic&&(newrelic=NREUM);var s=["setPageViewName","setCustomAttribute","finished","addToTrace","inlineHit"],c=["addPageAction"],f="api-";i(s,function(t,e){newrelic[e]=r(f+e,"api")}),i(c,function(t,e){newrelic[e]=r(f+e)}),e.exports=newrelic,newrelic.noticeError=function(t){"string"==typeof t&&(t=new Error(t)),o("err",[t,(new Date).getTime()])}},{}],12:[function(t,e,n){var r=0,o=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);o&&(r=+o[1]),e.exports=r},{}],13:[function(t,e,n){function r(t,e){var n=[],r="",i=0;for(r in t)o.call(t,r)&&(n[i]=e(r,t[r]),i+=1);return n}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],14:[function(t,e,n){function r(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(0>o?0:o);++r<o;)i[r]=t[e+r];return i}e.exports=r},{}],15:[function(t,e,n){function r(t){return!(t&&"function"==typeof t&&t.apply&&!t[a])}var o=t("ee"),i=t(14),a="nr@original",s=Object.prototype.hasOwnProperty,c=!1;e.exports=function(t){function e(t,e,n,o){function nrWrapper(){var r,a,s,c;try{a=this,r=i(arguments),s="function"==typeof n?n(r,a):n||{}}catch(u){d([u,"",[r,a,o],s])}f(e+"start",[r,a,o],s);try{return c=t.apply(a,r)}catch(l){throw f(e+"err",[r,a,l],s),l}finally{f(e+"end",[r,a,c],s)}}return r(t)?t:(e||(e=""),nrWrapper[a]=t,u(t,nrWrapper),nrWrapper)}function n(t,n,o,i){o||(o="");var a,s,c,f="-"===o.charAt(0);for(c=0;c<n.length;c++)s=n[c],a=t[s],r(a)||(t[s]=e(a,f?s+o:o,i,s))}function f(e,n,r){if(!c){c=!0;try{t.emit(e,n,r)}catch(o){d([o,e,n,r])}c=!1}}function u(t,e){if(Object.defineProperty&&Object.keys)try{var n=Object.keys(t);return n.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(r){d([r])}for(var o in t)s.call(t,o)&&(e[o]=t[o]);return e}function d(e){try{t.emit("internal-error",e)}catch(n){}}return t||(t=o),e.inPlace=n,e.flag=a,e}},{}],ee:[function(t,e,n){function r(){}function o(t){function e(t){return t&&t instanceof r?t:t?s(t,a,i):i()}function n(n,r,o){t&&t(n,r,o);for(var i=e(o),a=l(n),s=a.length,c=0;s>c;c++)a[c].apply(i,r);var u=f[v[n]];return u&&u.push([w,n,r,i]),i}function d(t,e){m[t]=l(t).concat(e)}function l(t){return m[t]||[]}function p(t){return u[t]=u[t]||o(n)}function h(t,e){c(t,function(t,n){e=e||"feature",v[n]=e,e in f||(f[e]=[])})}var m={},v={},w={on:d,emit:n,get:p,listeners:l,context:e,buffer:h};return w}function i(){return new r}var a="nr@context",s=t("gos"),c=t(13),f={},u={},d=e.exports=o();d.backlog=f},{}],gos:[function(t,e,n){function r(t,e,n){if(o.call(t,e))return t[e];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return t[e]=r,r}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],handle:[function(t,e,n){function r(t,e,n,r){o.buffer([t],r),o.emit(t,e,n)}var o=t("ee").get("handle");e.exports=r,r.ee=o},{}],id:[function(t,e,n){function r(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:a(t,i,function(){return o++})}var o=1,i="nr@id",a=t("gos");e.exports=r},{}],loader:[function(t,e,n){function r(){if(!m++){var t=h.info=NREUM.info,e=u.getElementsByTagName("script")[0];if(t&&t.licenseKey&&t.applicationID&&e){c(l,function(e,n){t[e]||(t[e]=n)});var n="https"===d.split(":")[0]||t.sslForHttp;h.proto=n?"https://":"http://",s("mark",["onload",a()],null,"api");var r=u.createElement("script");r.src=h.proto+t.agent,e.parentNode.insertBefore(r,e)}}}function o(){"complete"===u.readyState&&i()}function i(){s("mark",["domContent",a()],null,"api")}function a(){return(new Date).getTime()}var s=t("handle"),c=t(13),f=window,u=f.document;NREUM.o={ST:setTimeout,CT:clearTimeout,XHR:f.XMLHttpRequest,REQ:f.Request,EV:f.Event,PR:f.Promise,MO:f.MutationObserver},t(11);var d=""+location,l={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-943.min.js"},p=window.XMLHttpRequest&&XMLHttpRequest.prototype&&XMLHttpRequest.prototype.addEventListener&&!/CriOS/.test(navigator.userAgent),h=e.exports={offset:a(),origin:d,features:{},xhrWrappable:p};u.addEventListener?(u.addEventListener("DOMContentLoaded",i,!1),f.addEventListener("load",r,!1)):(u.attachEvent("onreadystatechange",o),f.attachEvent("onload",r)),s("mark",["firstbyte",a()],null,"api");var m=0},{}]},{},["loader",2,9,3]);
;NREUM.info={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",licenseKey:"9e53d555d8",applicationID:"17961617",sa:1}</script>   
</body>
</html>