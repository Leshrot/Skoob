<?php 
  session_start();
  mysql_connect("localhost","root","") or
    die("Não foi possível conectar:" . mysql_error());
  mysql_select_db("db_skoob");
  $nome = $_SESSION["nome"];

  $query = mysql_query("SELECT * FROM tb_leitor WHERE nm_leitor = '$nome'");
  $consulta = mysql_fetch_array($query);
  $_SESSION["codigo"] = $query['cd_leitor'];
 
  
if ($consulta['ds_img_leitor'] == null){
    $_SESSION["foto"] = "img/sem-face.gif";
  }else {
    $_SESSION["foto"] = $consulta['ds_img_leitor'];
  }
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body id="ng-app" ng-app="skoob">
  
      <div>
          <div id='topo' class='navbar navbar-fixed-top' style='height:48px;'>

        <div id="topoInterno" class="container" style="">
              <a href="/Skoob">
                    <img src="https://cache.skoob.com.br/s3/skoob-sp/img/v2/base/skoob-logo-topo.gif" class="logo" alt="logo Skoob" title="logo Skoob" width="109" height="33"/>            </a>

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
                                      <img src="<?php print($_SESSION["foto"]);?>" style="margin-right:10px; float:left; padding:0px;" width="27" height="27" class="round-4" alt=""/>                                    <b class="caret"></b>
                                 </a>
                                 <ul id="topo-menu-conta-hover" class="dropdown-menu">
                                      <li>
                                           <a href="Skoob_perfil.php" title="Meu Perfil"><i class='icon-amigo icon-align' style='margin-right:5px;'></i> Meu Perfil</a>                                    </li>
                                      <li>
                                           <a href="/estante/livros/todos/3967192" title="Minha Estante"><i class='icon-adicionar icon-align' style='margin-right:5px;'></i> Minha estante</a>                                    </li>
                                      <li>
                                           <a href="/usuario/fotos/3967192" title="Minhas Fotos"><i class='icon-camera icon-align' style='margin-right:5px;'></i> Minhas Fotos</a>                                    </li>
                                      <li>
                                           <a href="/usuario/editar_cadastro/3967192" title="Preferências"><i class='icon-config icon-align' style='margin-right:5px;'></i> Preferências</a>                                    </li>
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
                                      <li><a href="/livro/lancamentos/" title="Lançamentos">Lançamentos</a></li>
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


</body>
</html>